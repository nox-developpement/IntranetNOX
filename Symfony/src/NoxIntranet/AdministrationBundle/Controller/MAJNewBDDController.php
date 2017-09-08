<?php

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\UserBundle\Entity\User;
use NoxIntranet\PointageBundle\Entity\UsersHierarchy;
use NoxIntranet\PointageBundle\Entity\Entite;
use DateTime;
use Doctrine\ORM\QueryBuilder;




class MAJNewBDDController extends Controller {
    
    
    function administrationBddInfoIntranetAction() {
        // On récupère all users.
        $allUsers = $this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:User')->findAll();
    
        set_time_limit(600);
        
        foreach ($allUsers as $key => $value) {
            
            if($value->getLastActivity() != NULL){
                $LastActivity = $value->getLastActivity()->getTimestamp();
                $value->getLastActivity()->getTimestamp();
                $dateLastActivity = date("Y-m-d H:i:s", $LastActivity );
            }


            if($value->getHasReadCharteInformatique() == 1){
                $CharteInformatique = $value->getCharteInformatiqueReadingDate()->getTimestamp();
                $value->getLastActivity()->getTimestamp();
                $dateCharteInformatique = date("Y-m-d H:i:s", $CharteInformatique );  
            }


            //update
            if(!empty( $this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:User_Info_Intranet')->findByUsername($value->getUsername())) ){
                
                $em = $this->getDoctrine()->getManager();
                
                $updateUser = $em->getRepository('NoxIntranetUserBundle:User_Info_Intranet')->findByUsername($value->getUsername());            
                
                $updateUser[0]->setRole(serialize($value->getRoles()));
                
                if($value->getMatriceCompetence() != NULL ){
                    $updateUser[0]->setCompetancePrincipale($value->getMatriceCompetence()->getCompetencePrincipale());
                    $updateUser[0]->setCompetanceSecondaire(serialize($value->getMatriceCompetence()->getCompetencesSecondaires()));
                }else{
                    $updateUser[0]->setCompetancePrincipale(NULL);
                    $updateUser[0]->setCompetanceSecondaire(NULL);
                }

                if(isset($dateLastActivity)){
                    $updateUser[0]->setLastActivity( DateTime::createFromFormat("Y-m-d H:i:s", $dateLastActivity) );
                }else{
                    $updateUser[0]->setLastActivity( NULL );
                }
                
                $updateUser[0]->setLastViewebPage(serialize($value->getlastViewedPage()));
                
                $updateUser[0]->setHasReadCharteInformatique($value->getHasReadCharteInformatique());
                
                if( isset($dateCharteInformatique) ){
                    $updateUser[0]->setCharteInformationReadingDate( DateTime::createFromFormat("Y-m-d H:i:s", $dateCharteInformatique) ); 
                }else{
                    $updateUser[0]->setCharteInformationReadingDate( NULL ); 
                }
                
                
                $em->flush();
                //echo "update";
                
            }else{
            // create  
                

                $em = $this->getDoctrine()->getManager();


                if($value->getMatriceCompetence() == NULL){
                    $newInfoUserIntranet = new \NoxIntranet\UserBundle\Entity\User_Info_Intranet;
                    $newInfoUserIntranet->setUsername($value->getUsername());
                    $newInfoUserIntranet->setRole(serialize($value->getRoles()));
                    $newInfoUserIntranet->setCompetancePrincipale(NULL);
                    $newInfoUserIntranet->setCompetanceSecondaire(NULL);
                    $newInfoUserIntranet->setLocal(0);
                    $newInfoUserIntranet->setPassword("default");
                    if($value->getLastActivity() != NULL){
                        $newInfoUserIntranet->setLastActivity( DateTime::createFromFormat("Y-m-d H:i:s", $dateLastActivity) );
                    }else{
                        $newInfoUserIntranet->setLastActivity( NULL );
                    }

                    $newInfoUserIntranet->setLastViewebPage(serialize($value->getlastViewedPage()));

                    if($value->getHasReadCharteInformatique() == 1){
                        $newInfoUserIntranet->setHasReadCharteInformatique($value->getHasReadCharteInformatique());
                        $newInfoUserIntranet->setCharteInformationReadingDate( DateTime::createFromFormat("Y-m-d H:i:s", $dateCharteInformatique) );
                    }else{
                        $newInfoUserIntranet->setHasReadCharteInformatique($value->getHasReadCharteInformatique());
                        $newInfoUserIntranet->setCharteInformationReadingDate(NULL);
                    }
                }else{

                    $newInfoUserIntranet = new \NoxIntranet\UserBundle\Entity\User_Info_Intranet;
                    $newInfoUserIntranet->setUsername($value->getUsername());
                    $newInfoUserIntranet->setRole(serialize($value->getRoles()));
                    $newInfoUserIntranet->setCompetancePrincipale($value->getMatriceCompetence()->getCompetencePrincipale());
                    $newInfoUserIntranet->setCompetanceSecondaire(serialize($value->getMatriceCompetence()->getCompetencesSecondaires()));
                    $newInfoUserIntranet->setLocal(0);
                    $newInfoUserIntranet->setPassword("default");
                    if($value->getLastActivity() != NULL){
                        $newInfoUserIntranet->setLastActivity( DateTime::createFromFormat("Y-m-d H:i:s", $dateLastActivity) );
                    }else{
                        $newInfoUserIntranet->setLastActivity( NULL );
                    }
                    $newInfoUserIntranet->setLastViewebPage(serialize($value->getlastViewedPage()));

                    if($value->getHasReadCharteInformatique() == 1){
                        $newInfoUserIntranet->setHasReadCharteInformatique($value->getHasReadCharteInformatique());
                        $newInfoUserIntranet->setCharteInformationReadingDate( DateTime::createFromFormat("Y-m-d H:i:s", $dateCharteInformatique) );
                    }else{
                        $newInfoUserIntranet->setHasReadCharteInformatique($value->getHasReadCharteInformatique());
                        $newInfoUserIntranet->setCharteInformationReadingDate(NULL);
                    }
            

                }
            
                $em->persist($newInfoUserIntranet);
                $em->flush();
                //echo "create";
                
                
            }
             

        } 
        




        
    }
    
    
    
    function administrationBddUsersAction() {
        
        // On récupère all users.
        $allUsers = $this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:User')->findAll();
        
        set_time_limit(600);
        
        foreach ($allUsers as $key => $value){
            
            $em = $this->getDoctrine()->getManager();
            

                $newUsers = new \NoxIntranet\UserBundle\Entity\Users;
                
                $newUsers->setNom($value->getLastname());
                $newUsers->setPrenom($value->getFirstname());
                $newUsers->setUsername($value->getUsername());
                $newUsers->setSalt($value->getSalt());
                
                
                if($value->getMatriceCompetence() == NULL){
                    $newUsers->setDateNaissance(NULL);
                    $newUsers->setDateEmbauche(NULL);
                    $newUsers->setMatricule(" ");
                    $newUsers->setStatut(NULL);
                    $newUsers->setPoste(NULL);
                }else{
                    $Naissance = $value->getMatriceCompetence()->getDateNaissance()->getTimestamp();
                    $dateNaissance = date("Y-m-d H:i:s", $Naissance );
            
                    $Embauche = $value->getMatriceCompetence()->getDateAnciennete()->getTimestamp();
                    $dateEmbauche = date("Y-m-d H:i:s", $Embauche );
            
            
                    $newUsers->setDateNaissance( DateTime::createFromFormat("Y-m-d H:i:s", $dateNaissance) );
                    $newUsers->setDateEmbauche( DateTime::createFromFormat("Y-m-d H:i:s", $dateEmbauche) );
                    $newUsers->setMatricule( $value->getMatriceCompetence()->getMatricule() );
                    $newUsers->setStatut($value->getMatriceCompetence()->getStatut());
                    $newUsers->setPoste($value->getMatriceCompetence()->getPoste());
                }

                if( $value->getAgence() == NULL){
                    $newUsers->setAgence("Indéfini");
                }else{
                    $newUsers->setAgence($value->getAgence());
                }

                $idUserInfoIntranet = $this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:User_Info_Intranet')->findOneByUsername($value->getUsername());           
                $newUsers->setIdUserInfoIntranet($idUserInfoIntranet);
                   
                
                $userHyerarchie = $this->getDoctrine()->getManager()->getRepository('NoxIntranetPointageBundle:UsersHierarchy')->findOneByUsername($value->getUsername());           

                
                
            if($userHyerarchie != NULL){
                //etable du users
                $etable = $userHyerarchie->getEtablissement();
                $aa = $userHyerarchie->getAa();
                $da = $userHyerarchie->getDa();
                $rh = $userHyerarchie->getRh();
                $n2 = $userHyerarchie->getN2();
                


                $rechercheHyerarchie = $this->getDoctrine()->getEntityManager()->createQuery('select ent from NoxIntranetUserBundle:Entite ent WHERE ent.etablissement LIKE :etabli AND ent.aa LIKE :aa AND ent.da LIKE :da AND ent.arh LIKE :rh AND ent.n2 LIKE :n2')
                ->setParameter("etabli", '%'.$etable.'%')
                ->setParameter("aa", '%'.$aa.'%')
                ->setParameter("da", '%'.$da.'%')
                ->setParameter("rh", '%'.$rh.'%')
                ->setParameter("n2", '%'.$n2.'%')
                ->getResult();
                
                if(empty($rechercheHyerarchie)){
                    
                    $rechercheHyerarchie = $this->getDoctrine()->getEntityManager()->createQuery('select ent from NoxIntranetUserBundle:Entite ent WHERE ent.etablissement LIKE :etabli ')
                    ->setParameter("etabli", '%'.$etable.'%')
                    ->getResult();
                }
                
            }else if($userHyerarchie == NULL){
                $non = "Non defini";
                $rechercheHyerarchie = $this->getDoctrine()->getEntityManager()->createQuery('select ent from NoxIntranetUserBundle:Entite ent WHERE ent.etablissement LIKE :etabli')
                ->setParameter("etabli", '%'.$non.'%')
                ->getResult();

            }
            
            
                $newUsers->setIdEntite($rechercheHyerarchie[0]);

                 
               $em->persist($newUsers);
               $em->flush();
        }
        
   
         die();
        
        
        
       
                
                
                
                
                
                
                
        
    }
    
}