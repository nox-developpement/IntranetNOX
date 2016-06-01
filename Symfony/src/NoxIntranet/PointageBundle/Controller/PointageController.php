<?php

namespace NoxIntranet\PointageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use NoxIntranet\PointageBundle\Entity\Tableau;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class PointageController extends Controller {

    // Affiche le tableau de pointage vide du mois et de l'année courante.
    public function accueilAction(Request $request) {
        $date = '01-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];
        $end_date = $this->getMonthAndYear()['days'] . '-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];

        $monthDates = array();

        $i = 0;
        while (strtotime($date) <= strtotime($end_date)) {
            $monthDates[$i] = strtotime($date);
            $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
            $i++;
        }

        $em = $this->getDoctrine()->getManager();
        $user = $this->get('security.token_storage')->getToken()->getUser();

        $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user->getUsername(), 'month' => $this->getMonthAndYear()['month'], 'year' => $this->getMonthAndYear()['year']));

        if (empty($tableData)) {
            $tableData = new Tableau();

            $tableData->setUser($user->getUsername());
            $tableData->setMonth($this->getMonthAndYear()['month']);
            $tableData->setYear($this->getMonthAndYear()['year']);
            $tableData->setData('');
            $tableData->setSignatureCollaborateur('');
            $tableData->setStatus(0);

            $em->persist($tableData);
            $em->flush();
        }



        $form = $this->createFormBuilder($tableData)
                ->add('Valider', SubmitType::class)
                ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $tableData->setStatus(1);

            $em->persist($tableData);
            $em->flush();

            $this->redirectToRoute('nox_intranet_pointage');
        }

        return $this->render('NoxIntranetPointageBundle:Pointage:pointage.html.twig', array('monthDates' => $monthDates, 'currentMonth' => $this->getMonthAndYear()['month'],
                    'currentYear' => $this->getMonthAndYear()['year'], 'form' => $form->createView()));
    }

    // Retourne la date courante.
    public function getMonthAndYear() {

        $month = date('n');
        $year = date('Y');

        $date['month'] = $month;
        $date['year'] = $year;
        $date['days'] = date('t');

        return $date;
    }

    // Retourne les jours et la date correspondante en fonction du mois et de l'année passés en paramètres.
    public function ajaxSetDateAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $frenchDays = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');

            $month = $request->get('month');
            $year = $request->get('year');
            $date = '01-' . $month . '-' . $year;
            $end_date = date('t', strtotime('01-' . $month . '-' . $year)) . '-' . $month . '-' . $year;

            $monthDates = array();
            $i = 0;
            while (strtotime($date) <= strtotime($end_date)) {
                $monthDates[$i] = $frenchDays[date('w', strtotime($date))] . ' ' . date('d', strtotime($date));
                $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
                $i++;
            }

            $response = new Response(json_encode($monthDates));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
    }

    // Retourne les jours et la date correspondante en fonction du mois et de l'année de la feuille de pointage passé en paramètres.
    public function ajaxSetDateByPointageNumberAction(Request $request) {
        if ($request->isXmlHttpRequest()) {

            $frenchDays = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');

            $pointageNumber = $request->get('pointageNumber');

            $em = $this->getDoctrine()->getManager();
            $table = $em->getRepository('NoxIntranetPointageBundle:Tableau')->find($pointageNumber);

            $month = $table->getMonth();
            $year = $table->getYear();
            $username = $table->getUser();

            $date = '01-' . $month . '-' . $year;
            $end_date = date('t', strtotime('01-' . $month . '-' . $year)) . '-' . $month . '-' . $year;

            $monthDates = array();
            $i = 0;
            while (strtotime($date) <= strtotime($end_date)) {
                $monthDates[$i] = $frenchDays[date('w', strtotime($date))] . ' ' . date('d', strtotime($date));
                $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
                $i++;
            }

            $response['dates'] = $monthDates;
            $response['month'] = $month;
            $response['year'] = $year;
            $response['username'] = $username;

            return new Response(json_encode($response));
        }
    }

    // Sauvegarde le contenu des cellules du tableau en fonction de l'utilisateur et de la date.
    public function ajaxSaveDataAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $month = $request->get('month');
            $year = $request->get('year');
            $data = $request->get('data');
            $signatureCollaborateur = $request->get('signatureCollaborateur');

            $em = $this->getDoctrine()->getManager();

            if ($request->get('user') !== '' && $request->get('user') !== null) {
                $user = $request->get('user');
            } else {
                $user = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
            }

            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user, 'month' => $month, 'year' => $year));

            if (empty($tableData)) {
                $tableData = new Tableau();

                $tableData->setUser($user);
                $tableData->setMonth($month);
                $tableData->setYear($year);
                $tableData->setStatus(0);
            }

            $tableData->setData($data);
            $tableData->setSignatureCollaborateur($this->f_crypt('asdftred', $signatureCollaborateur));

            $em->persist($tableData);
            $em->flush();

            $response = new Response($data);
            return $response;
        }
    }

    // Retourne les données liées à l'utilisateur en fonction du mois et de l'année.
    public function ajaxGetDataAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $month = $request->get('month');
            $year = $request->get('year');

            $em = $this->getDoctrine()->getManager();
            $user = $this->get('security.token_storage')->getToken()->getUser();

            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user->getUsername(), 'month' => $month, 'year' => $year));

            if (!empty($tableData)) {
                $data = $tableData->getData();
                $signatureCollaborateur = $tableData->getSignatureCollaborateur();
            } else {
                $data = null;
                $signatureCollaborateur = null;
            }

            $dataArray = json_decode($data, true);

            $dataArray['signatureCollaborateur'] = $this->f_decrypt('asdftred', $signatureCollaborateur);

            $stringData = json_encode($dataArray);

            $response = new Response($stringData);
            return $response;
        }
    }

    // Affiche le tableau administratif de pointage vide du mois et de l'année courante.
    public function acceuilAdministratifAction() {
        $date = '01-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];
        $end_date = $this->getMonthAndYear()['days'] . '-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];

        $monthDates = array();

        $i = 0;
        while (strtotime($date) <= strtotime($end_date)) {
            $monthDates[$i] = strtotime($date);
            $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
            $i++;
        }

        return $this->render('NoxIntranetPointageBundle:Pointage:pointageAdministratif.html.twig', array('monthDates' => $monthDates, 'currentMonth' => $this->getMonthAndYear()['month'],
                    'currentYear' => $this->getMonthAndYear()['year']));
    }

    // Retourne les données liées à l'ensemble des utilisateurs en fonction du mois et de l'année.
    public function ajaxGetDataAdministratifAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $month = $request->get('month');
            $year = $request->get('year');

            $em = $this->getDoctrine()->getManager();

            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findBy(array('month' => $month, 'year' => $year));

            if (!empty($tableData)) {
                foreach ($tableData as $table) {
                    $data[] = $table->getData();
                }
            } else {
                $data = null;
            }

            $response = new Response(json_encode($data));
            return $response;
        }
    }

    // Crypte les données à l'aide de la clé de cryptage fournie
    function f_crypt($private_key, $str_to_crypt) {
        $private_key = md5($private_key);
        $letter = -1;
        $new_str = '';
        $strlen = strlen($str_to_crypt);

        for ($i = 0; $i < $strlen; $i++) {
            $letter++;
            if ($letter > 31) {
                $letter = 0;
            }
            $neword = ord($str_to_crypt{$i}) + ord($private_key{$letter});
            if ($neword > 255) {
                $neword -= 256;
            }
            $new_str .= chr($neword);
        }
        return base64_encode($new_str);
    }

    // Décrypte les données à l'aide de la clé de cryptage fournie
    function f_decrypt($private_key, $str_to_decrypt) {
        $private_key = md5($private_key);
        $letter = -1;
        $new_str = '';
        $str_to_decrypt = base64_decode($str_to_decrypt);
        $strlen = strlen($str_to_decrypt);
        for ($i = 0; $i < $strlen; $i++) {
            $letter++;
            if ($letter > 31) {
                $letter = 0;
            }
            $neword = ord($str_to_decrypt{$i}) - ord($private_key{$letter});
            if ($neword < 1) {
                $neword += 256;
            }
            $new_str .= chr($neword);
        }
        return $new_str;
    }

    // Affiche un formulaire de séléction de l'utilisateur, du mois et de l'année.
    public function gestionPointageAction() {
        $em = $this->getDoctrine()->getManager();

        $pointages = $em->getRepository('NoxIntranetUserBundle:User')->findAll();

        $users = array();

        foreach ($pointages as $pointage) {
            if (!in_array($pointage->getUser(), $users)) {
                $users[$pointage->getUser()] = $pointage->getUser();
            }
        }

        sort($users);

        $date = '01-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];
        $end_date = $this->getMonthAndYear()['days'] . '-' . $this->getMonthAndYear()['month'] . '-' . $this->getMonthAndYear()['year'];

        $monthDates = array();

        $i = 0;
        while (strtotime($date) <= strtotime($end_date)) {
            $monthDates[$i] = strtotime($date);
            $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
            $i++;
        }

        $form = $this->createFormBuilder()
                ->add('User', ChoiceType::class, array(
                    'choices' => $users,
                    'choices_as_values' => false,
                    'placeholder' => 'Selectionnez un utilisateur',
                    'attr' => array(
                        'size' => 5
                    )
                ))
                ->add('Month', ChoiceType::class, array(
                    'placeholder' => 'Selectionnez le moi',
                    'attr' => array(
                        'disabled' => true
                    )
                ))
                ->add('Year', ChoiceType::class, array(
                    'placeholder' => 'Selectionnez l\'année',
                    'attr' => array(
                        'disabled' => true
                    )
                ))
                ->getForm();

        $formToCheckPointage = $this->createFormBuilder()
                ->add('Pointage', EntityType::class, array(
                    'class' => 'NoxIntranetPointageBundle:Tableau',
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                                ->where("u.status = '1'")
                                ->orderBy('u.user', 'ASC');
                    },
                    'choice_label' => 'user',
                    'placeholder' => 'Pointage à valider',
                    'attr' => array(
                        'size' => 5
                    )
                ))
                ->getForm();

        return $this->render('NoxIntranetPointageBundle:Pointage:gestionPointage.html.twig', array('form' => $form->createView(), 'monthDates' => $monthDates, 'currentMonth' => $this->getMonthAndYear()['month'],
                    'currentYear' => $this->getMonthAndYear()['year'], 'formToCheckPointage' => $formToCheckPointage->createView()));
    }

    // Retourne les mois en fonction de l'utilisateur
    public function ajaxGetMonthByUserAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $username = $request->get('username');
            $months = array();

            $query = $em->createQuery('
                SELECT 
                    p
                FROM 
                    NoxIntranetPointageBundle:Tableau p
                WHERE 
                    p.user = :username AND p.status >= :statusNumber
                ORDER BY 
                    p.user ASC
            ')
                    ->setParameters(['username' => $username, 'statusNumber' => '1']);
            $pointages = $query->getResult();

            if (!empty($pointages)) {
                foreach ($pointages as $pointage) {
                    $monthNum = $pointage->getMonth();
                    $dateObj = \DateTime::createFromFormat('!m', $monthNum);
                    $frenchDate = array('January' => 'Janvier', 'February' => 'Février', 'March' => 'Mars', 'April' => 'Avril', 'May' => 'Mai', 'June' => 'Juin', 'July' => 'Juillet', 'August' => 'Août', 'September' => 'Septembre', 'October' => 'Octobre', 'November' => 'Novembre', 'December' => 'Décembre');
                    $monthName = $frenchDate[$dateObj->format('F')]; // March
                    if (!in_array($monthName, $months)) {
                        $months[$pointage->getMonth()] = $monthName;
                    }
                }
            }

            return new Response(json_encode($months));
        }
    }

    // Retourne les années en fonction de l'utilisateur et du mois.
    public function ajaxGetYearByMonthAndUserAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $username = $request->get('username');
            $month = $request->get('month');
            $years = array();

            $query = $em->createQuery('
                SELECT 
                    p
                FROM 
                    NoxIntranetPointageBundle:Tableau p
                WHERE 
                    p.user = :username AND p.status >= :statusNumber AND p.month = :month
                ORDER BY 
                    p.user ASC
            ')
                    ->setParameters(['username' => $username, 'statusNumber' => '1', 'month' => $month]);
            $pointages = $query->getResult();

            if (!empty($pointages)) {
                foreach ($pointages as $pointage) {
                    if (!in_array($pointage->getYear(), $years)) {
                        $years[$pointage->getYear()] = $pointage->getYear();
                    }
                }
            }

            return new Response(json_encode($years));
        }
    }

    // Retourne la liste d'utilisateurs en fonction du paramètre username.
    public function ajaxGetUsersByUsernameAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $username = $request->get('username');

            $users = $em->getRepository("NoxIntranetUserBundle:User")->createQueryBuilder('o')
                    ->where('o.username LIKE :critere')
                    ->setParameter('critere', "%" . $username . "%")
                    ->getQuery()
                    ->getResult();

            $listeUsers = array();
            foreach ($users as $user) {
                $listeUsers[] = $user->getUsername();
            }

            return new Response(json_encode($listeUsers));
        }
    }

    // Retourne les données fonction de l'utilisateur, du mois et de l'année.
    public function ajaxGetDataByUsernameAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            $username = $request->get('username');
            $month = $request->get('month');
            $year = $request->get('year');

            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year, 'status' => '1'));

            if (!empty($tableData)) {
                $data = $tableData->getData();
                $signatureCollaborateur = $tableData->getSignatureCollaborateur();
            } else {
                $data = null;
                $signatureCollaborateur = null;
            }

            $dataArray = json_decode($data, true);

            $dataArray['signatureCollaborateur'] = $this->f_decrypt('asdftred', $signatureCollaborateur);

            $stringData = json_encode($dataArray);

            $response = new Response($stringData);
            return $response;
        }
    }

    // Retourne le status du pointage en fonction de l'utilisateur, du mois et de l'année.
    public function ajaxGetPointageStatusAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();
            if ($request->get('username') === '') {
                $username = $this->get('security.token_storage')->getToken()->getUser()->getUsername();
            } else {
                $username = $request->get('username');
            }

            $month = $request->get('month');
            $year = $request->get('year');

            $pointage = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));

            if (!empty($pointage)) {
                $status = $pointage->getStatus();
            } else {
                $status = null;
            }

            $response = new Response($status);
            return $response;
        }
    }

    public function ajaxAssistanteValidationAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $em = $this->getDoctrine()->getManager();

            $username = $request->get('username');
            $month = $request->get('month');
            $year = $request->get('year');

            $pointage = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $username, 'month' => $month, 'year' => $year));

            $pointage->setStatus(2);
            $em->persist($pointage);
            $em->flush();

            $response = new Response('Ok');
            return $response;
        }
    }

}
