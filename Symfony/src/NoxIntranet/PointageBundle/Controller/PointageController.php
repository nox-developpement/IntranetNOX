<?php

namespace NoxIntranet\PointageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use NoxIntranet\PointageBundle\Entity\Tableau;

class PointageController extends Controller {

    public function accueilAction($month, $year) {
        $date = '01-' . $this->getMonthAndYear($month, $year)['month'] . '-' . $this->getMonthAndYear($month, $year)['year'];
        $end_date = $this->getMonthAndYear($month, $year)['days'] . '-' . $this->getMonthAndYear($month, $year)['month'] . '-' . $this->getMonthAndYear($month, $year)['year'];

        $monthDates = array();

        $i = 0;
        while (strtotime($date) <= strtotime($end_date)) {
            $monthDates[$i] = strtotime($date);
            $date = date("Y-m-d", strtotime("+1 day", strtotime($date)));
            $i++;
        }

        return $this->render('NoxIntranetPointageBundle:Pointage:pointage.html.twig', array('monthDates' => $monthDates, 'currentMonth' => $this->getMonthAndYear($month, $year)['month'],
                    'currentYear' => $this->getMonthAndYear($month, $year)['year']));
    }

    // Retourne la date courante si aucune date n'est passé en paramètres.
    public function getMonthAndYear($month, $year) {
        if (empty($month)) {
            $month = date('m');
        }
        if (empty($year)) {
            $year = date('Y');
        }

        $date['month'] = $month;
        $date['year'] = $year;
        $date['days'] = date('t');

        return $date;
    }

    // Retourne les jours et la date correspondante en fonction du moi et de l'année passés en paramètres.
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

    // Sauvegarde le contenu des cellules du tableau en fonction de l'utilisateur et de la date.
    public function ajaxSaveDataAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $month = $request->get('month');
            $year = $request->get('year');
            $data = $request->get('data');

            $em = $this->getDoctrine()->getManager();
            $user = $this->get('security.token_storage')->getToken()->getUser();

            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user->getUsername(), 'month' => $month, 'year' => $year));

            if (empty($tableData)) {
                $tableData = new Tableau();

                $tableData->setUser($user->getUsername());
                $tableData->setMonth($month);
                $tableData->setYear($year);
            }

            $tableData->setData($data);

            $em->persist($tableData);
            $em->flush();

            $response = new Response($data);
            return $response;
        }
    }

    public function ajaxGetDataAction(Request $request) {
        if ($request->isXmlHttpRequest()) {
            $month = $request->get('month');
            $year = $request->get('year');

            $em = $this->getDoctrine()->getManager();
            $user = $this->get('security.token_storage')->getToken()->getUser();

            $tableData = $em->getRepository('NoxIntranetPointageBundle:Tableau')->findOneBy(array('user' => $user->getUsername(), 'month' => $month, 'year' => $year));

            if (!empty($tableData)) {
                $data = $tableData->getData();
            } else {
                $data = null;
            }

            $response = new Response($data);
            return $response;
        }
    }

}
