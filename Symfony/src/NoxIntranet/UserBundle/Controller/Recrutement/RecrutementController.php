<?php

namespace NoxIntranet\UserBundle\Controller\Recrutement;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;


class RecrutementController extends Controller {


    public function tableauRecrutementAction() {
        // On récupère all users.
        $allDemandeEmbauche = $this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:Recrutement')->findAll();

        return $this->render('NoxIntranetUserBundle:Recrutement:recrutement.html.twig', array('demande' => $allDemandeEmbauche));
    }

    public function consultationRecrutementAction($reference) {
        
        // On récupère all users.
        $DemandeEmbauche = $this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:Recrutement')->findOneByReference($reference);
        
        return $this->render('NoxIntranetUserBundle:Recrutement:consultationrecrutement.html.twig', array('demande' => $DemandeEmbauche));
    }
    
    public function creeRecrutementAction(Request $request) {
        
        $em = $this->getDoctrine()->getManager();
        
        $query = $em->createQuery('SELECT e.societe FROM NoxIntranetUserBundle:Entite e');
        $allSociete = $query->getResult();

        $societe[] = "Séléctionner une Societe";
        foreach ($allSociete as $key => $value) {
            $valeur = preg_replace("/[\W]{1,}$/", "", $value["societe"]);            
            if(array_search($valeur, $societe) === false){
                $societe[$valeur] = $valeur;
            }
        }
        
        $query = $em->createQuery('SELECT e.etablissement FROM NoxIntranetUserBundle:Entite e');
        $allEtablissement = $query->getResult();

        $etablissement[] = "Séléctionner une Etablissement";
        foreach ($allEtablissement as $key => $value) {
            $valeur = preg_replace("/[\W]{1,}$/", "", $value["etablissement"]);            
            if(array_search($valeur, $etablissement) === false){
                $etablissement[$valeur] = $valeur;
            }
        }
        

        // Génération du formulaire d'upload du fichier de hiérachie RH.
        $addEmbauche = $this->createFormBuilder()
                ->add('titre',     TextType::class, array(
                ))
                ->add('reference',     TextType::class, array(
                ))
                ->add('ville',     TextType::class, array(
                ))
                ->add('societe', ChoiceType::class, array(
                    'choices' => $societe
                ))
                ->add('etablissement', ChoiceType::class, array(
                    'choices' => $etablissement
                ))
                ->add('contrat', 'choice', array(
                    'choices' => array('CDD' => 'CDD', 'CDI' => 'CDI', 'CDD/CDI' => 'CDD / CDI', 'CDIC' => 'CDIC')
                ))
                ->add('embauche', DateType::class, array(
                    'widget' => 'single_text',
                    // this is actually the default format for single_text
                    'format' => 'yyyy-MM-dd',
                ))
                ->add('commentaire', TextareaType::class, array(
                    'attr' => array('class' => 'tinymce'),
                ))
                ->add('ajout', SubmitType::class)
                ->getForm();
        
        
        // Si la requête est en POST
        if ($request->isMethod('POST')) {
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $modifEntite contient les valeurs entrées dans le formulaire par le visiteur
          $addEmbauche->handleRequest($request);

          // On vérifie que les valeurs entrées sont correctes
          // (Nous verrons la validation des objets en détail dans le prochain chapitre)
          if ($addEmbauche->isValid()) {
              $foradd = $addEmbauche->getData();
            // On enregistre notre objet $modifEntite dans la base de données, par exemple
             
             
                $newDemandeEmbauche = new \NoxIntranet\UserBundle\Entity\Recrutement;
                
                $newDemandeEmbauche->setTitre($foradd["titre"]);
                $newDemandeEmbauche->setReference($foradd["reference"]);
                $newDemandeEmbauche->setVille($foradd["ville"]);
                $newDemandeEmbauche->setSociete($foradd["societe"]);    
                $newDemandeEmbauche->setEtablissement($foradd["etablissement"]);    
                $newDemandeEmbauche->setContrat($foradd["contrat"]);  
                $newDemandeEmbauche->setDateEmbauche($foradd["embauche"]);  
                $newDemandeEmbauche->setCommentaireProfile($foradd["commentaire"]);  
                
                // Et on le persiste
                $em->persist($newDemandeEmbauche);

                $em->flush();

            $request->getSession()->getFlashBag()->add("notice", "La Demande d'Embauche à bien été ajouté.");

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_recrutement');
          }
        }
        
        return $this->render('NoxIntranetUserBundle:Recrutement:creerecrutement.html.twig', array('form' => $addEmbauche->createView()));
    }

    
    public function updateRecrutementAction(Request $request, $reference) {
        
        $em = $this->getDoctrine()->getManager();
        
        $query = $em->createQuery('SELECT e.societe FROM NoxIntranetUserBundle:Entite e');
        $allSociete = $query->getResult();

        $societe[] = "Séléctionner une Societe";
        foreach ($allSociete as $key => $value) {
            $valeur = preg_replace("/[\W]{1,}$/", "", $value["societe"]);            
            if(array_search($valeur, $societe) === false){
                $societe[$valeur] = $valeur;
            }
        }
        
        $query = $em->createQuery('SELECT e.etablissement FROM NoxIntranetUserBundle:Entite e');
        $allEtablissement = $query->getResult();

        $etablissement[] = "Séléctionner une Etablissement";
        foreach ($allEtablissement as $key => $value) {
            $valeur = preg_replace("/[\W]{1,}$/", "", $value["etablissement"]);            
            if(array_search($valeur, $etablissement) === false){
                $etablissement[$valeur] = $valeur;
            }
        }
        
        $recrutement = $this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:Recrutement')->findOneByReference($reference);
        
        // Génération du formulaire d'upload du fichier de hiérachie RH.
        $addEmbauche = $this->createFormBuilder()
                ->add('titre',     TextType::class, array(
                    'attr' => array('value' => $recrutement->getTitre())
                ))
                ->add('reference',     TextType::class, array(
                    'attr' => array('value' => $recrutement->getReference())
                ))
                ->add('ville',     TextType::class, array(
                    'attr' => array('value' => $recrutement->getVille())
                ))
                ->add('societe', ChoiceType::class, array(
                    'choices' => $societe,
                    'attr' => array('value' => $recrutement->getSociete()),
                    'data' => $recrutement->getSociete()
                ))
                ->add('etablissement', ChoiceType::class, array(
                    'choices' => $etablissement,
                    'data' => $recrutement->getEtablissement()
                ))
                ->add('contrat', 'choice', array(
                    'choices' => array('CDD' => 'CDD', 'CDI' => 'CDI', 'CDD/CDI' => 'CDD / CDI', 'CDIC' => 'CDIC'),
                    'data' => $recrutement->getContrat()
                ))
                ->add('embauche', DateType::class, array(
                    'widget' => 'single_text',
                    // this is actually the default format for single_text
                    'format' => 'yyyy-MM-dd',
                    'attr' => array('value' => date("Y-m-d", $recrutement->getDateEmbauche()->getTimestamp()))
                ))
                ->add('commentaire', TextareaType::class, array(
                    'attr' => array('class' => 'tinymce'),
                    'data' => $recrutement->getCommentaireProfile()
                ))
                ->add('modifier', SubmitType::class)
                ->getForm();
        
        
        
        // Si la requête est en POST
        if ($request->isMethod('POST')) {
          // On fait le lien Requête <-> Formulaire
          // À partir de maintenant, la variable $modifEntite contient les valeurs entrées dans le formulaire par le visiteur
          $addEmbauche->handleRequest($request);

          // On vérifie que les valeurs entrées sont correctes
          // (Nous verrons la validation des objets en détail dans le prochain chapitre)
          if ($addEmbauche->isValid()) {
              $foradd = $addEmbauche->getData();
            // On enregistre notre objet $modifEntite dans la base de données, par exemple
             
                
                $recrutement->setTitre($foradd["titre"]);
                $recrutement->setReference($foradd["reference"]);
                $recrutement->setVille($foradd["ville"]);
                $recrutement->setSociete($foradd["societe"]);    
                $recrutement->setEtablissement($foradd["etablissement"]);    
                $recrutement->setContrat($foradd["contrat"]);  
                $recrutement->setDateEmbauche($foradd["embauche"]);  
                $recrutement->setCommentaireProfile($foradd["commentaire"]);  
                
                $em->flush();

            $request->getSession()->getFlashBag()->add("notice", "La Demande d'Embauche à bien été modifié.");

            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('nox_intranet_consultation_recrutement', array('reference' => $reference));
          }
        }
        
        return $this->render('NoxIntranetUserBundle:Recrutement:updaterecrutement.html.twig', array('form' => $addEmbauche->createView()));
    }
    
    
    
}


    
