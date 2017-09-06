<?php

namespace NoxIntranet\AdministrationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use NoxIntranet\UserBundle\Entity\User;
use DateTime;




class MAJNewBDDController extends Controller {
    
    
    function administrationBddInfoIntranetAction() {
        // On récupère all users.
        $allUsers = $this->getDoctrine()->getManager()->getRepository('NoxIntranetUserBundle:User')->findAll();
    
        set_time_limit(500);
        
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
                // echo "update";
                
            }else{
                
                

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
    
    
    
    
}