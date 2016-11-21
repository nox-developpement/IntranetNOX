<?php

namespace NoxIntranet\UserBundle\Controller\DeveloppementProfessionnel;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class DeveloppementProfessionnelControler extends Controller {

    public function formulaireDeveloppementProfessionnelAction() {
        // On récupére le collaborateur courant.
        $collaborateur = $this->get('security.context')->getToken()->getUser();

        // On récupére son entitée hiérarchique.
        $em = $this->getDoctrine()->getManager();
        $collaborateurHierarchy = $em->getRepository('NoxIntranetPointageBundle:UsersHierachy')->findOneByUsername($collaborateur->getUsername());

        // Tableau des question/choix.
        $questions = array(
            1 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Comment ai-je vécu cette année ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Que retenez-vous de cette année ?')
            ),
            2 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quels résultats ai-je obtenus ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les résultats obtenu ?')
            ),
            3 => array(
                'Collaborateur' => array('Type' => 'Choix', 'Question' => 'Cochez le niveau de maîtrise du poste : (*note explicative)', 'Choix' =>
                    array(
                        'Construction', 'Adéquation', 'Maîtrise', 'Excellence'
                    )
                ),
                'Manager' => array('Type' => 'Choix', 'Question' => 'Cochez le niveau de maîtrise du poste : (*note explicative)', 'Choix' =>
                    array(
                        'Construction', 'Adéquation', 'Maîtrise', 'Excellence'
                    )
                )
            ),
            4 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quelles difficultés ai-je rencontrées ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles ont été les difficultés rencontrées ?')
            ),
            5 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quelles sont mes réussites et apports pour le Groupe ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles sont les réussites et les apports pour le Groupe ?')
            ),
            6 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les résultats obtenus ?')
            ),
            7 => array(
                'Manager' => array('Type' => 'Choix', 'Question' => "Cochez le niveau d'atteinte de l'objectif", 'Choix' =>
                    array(
                        'Non atteint', 'Partiellement atteint', 'Atteint', 'Dépassé'
                    )
                )
            ),
            8 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles ont été les difficultés rencontrées ?')
            ),
            9 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles sont les réussites et les apports pour le Groupe ?')
            ),
            10 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les résultats obtenus ?')
            ),
            11 => array(
                'Manager' => array('Type' => 'Choix', 'Question' => "Cochez le niveau d'atteinte de l'objectif", 'Choix' =>
                    array(
                        'Non atteint', 'Partiellement atteint', 'Atteint', 'Dépassé'
                    )
                )
            ),
            12 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles ont été les difficultés rencontrées ?')
            ),
            13 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles sont les réussites et les apports pour le Groupe ?')
            ),
            14 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Comment estimez-vous votre charge de travail ? Impacte-elle votre vie personnelle ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les facteurs d’aggravation ou d’amélioration de la situation ?')
            ),
            15 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quelles sont les solutions pour pallier aux éventuelles difficultés ?'),
            ),
            16 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quelles ont été les situations de travail source de motivation et sources de frustration ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles sont les zones de confort et d’inconfort dans le poste ?')
            ),
            17 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quelles sont mes forces ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles sont les forces à valoriser ?')
            ),
            18 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles formations ont été suivies cette année ?')
            ),
            19 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les acquis cette année ?')
            ),
            20 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quels sont mes axes d’amélioration ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels sont les axes d’amélioration sur lesquels il faut travailler ?')
            ),
            21 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quels vont être les impacts de l’évolution du métier sur le poste du collaborateur ?')
            ),
            22 => array(
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles autres missions/activités seraient susceptibles de l’intéresser et de lui être confiées ?')
            ),
            23 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Comment vous voyez-vous à CT (0/2 ans) ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Avis hiérarchie')
            ),
            24 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Comment vous voyez-vous à MT (3/5 ans) ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Avis hiérarchie')
            ),
            25 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Nationale/Internationale'),
            ),
            26 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Région/Pays'),
            ),
            27 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Quel est mon niveau en langue ?'),
            ),
            28 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => 'Les objectifs que je me fixe ?'),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Les objectifs complémentaires fixés par le manager ?')
            ),
            29 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => "En quoi mon manager peut-il m'aider ?"),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles actions doivent être mises en oeuvre pour accompagner les changements ?')
            ),
            30 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => "Quels sont mes besoins en formation ?"),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Quelles formations sont à prévoir ? Indiquez les niveaux de priorité ?')
            ),
            31 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => "Synthèse et commentaires du collaborateur"),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Synthèse et commentaires du manager')
            ),
            32 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => "Signature collaborateur"),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Signature manager')
            ),
            33 => array(
                'Collaborateur' => array('Type' => 'Texte', 'Question' => "Signature N+2 (Nom, prénom, date, signature)"),
                'Manager' => array('Type' => 'Texte', 'Question' => 'Signature DRH (Nom, prénom, date, signature)')
            ),
        );

        $formDeveloppementProfessionnelBuilder = $this->createFormBuilder();
        $formDeveloppementProfessionnelBuilder
                ->add('Nom', TextType::class, array(
                    'data' => $collaborateur->getLastname()
                ))
                ->add('Prénom', TextType::class, array(
                    'data' => $collaborateur->getFirstname()
                ))
                ->add('Age', IntegerType::class)
                ->add("Date d'ancienneté Groupe", DateType::class)
                ->add('Entité', TextType::class)
                ->add('Poste actuel', TextType::class)
                ->add("Date d'ancienneté dans le poste", DateType::class)
                ->add("Salaire brut mensuel", IntegerType::class)
                ->add('Nom du responsable', TextType::class)
                ->add("Date de l'entretien");

        foreach ($questions as $key => $question) {
            if (array_key_exists('Collaborateur', $question)) {
                if ($question['Collaborateur']['Type'] === 'Texte') {
                    $formDeveloppementProfessionnelBuilder->add($key . '_Collaborateur', TextareaType::class);
                } else {
                    $formDeveloppementProfessionnelBuilder->add($key . '_Collaborateur', ChoiceType::class, array(
                        'choices' => $question['Collaborateur']['Choix']
                    ));
                }
            }
            if (array_key_exists('Manager', $question)) {
                if ($question['Manager']['Type'] === 'Texte') {
                    $formDeveloppementProfessionnelBuilder->add($key . '_Manager', TextareaType::class);
                } else {
                    $formDeveloppementProfessionnelBuilder->add($key . '_Manager', ChoiceType::class, array(
                        'choices' => $question['Manager']['Choix']
                    ));
                }
            }
        }

        $formDeveloppementProfessionnel = $formDeveloppementProfessionnelBuilder->getForm();

        return $this->render('NoxIntranetUserBundle:DeveloppementProfessionnel:formulaireDevellopementProfessionnel.html.twig', array('formulaireDevellopementProfessionnel' => $formDeveloppementProfessionnel->createView()));
    }

}
