<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/hello')) {
            // nox_intranet_pdf_parsing_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pdf_parsing_homepage')), array (  '_controller' => 'NoxIntranet\\PDFParsingBundle\\Controller\\DefaultController::indexAction',));
            }

            // nox_intranet_listing_keywords_references_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_listing_keywords_references_homepage')), array (  '_controller' => 'NoxIntranet\\ListingKeywordsReferencesBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/e')) {
            // ef_connect
            if (0 === strpos($pathinfo, '/efconnect') && preg_match('#^/efconnect(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ef_connect')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::loadAction',  'instance' => 'default',  'homeFolder' => '',));
            }

            // elfinder
            if (0 === strpos($pathinfo, '/elfinder') && preg_match('#^/elfinder(?:/(?P<instance>[^/]++)(?:/(?P<homeFolder>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'elfinder')), array (  '_controller' => 'FM\\ElfinderBundle\\Controller\\ElFinderController::showAction',  'instance' => 'default',  'homeFolder' => '',));
            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // nox_intranet_verif_maj_db_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_verif_maj_db_homepage')), array (  '_controller' => 'NoxIntranet\\VerifMajDBBundle\\Controller\\DefaultController::indexAction',));
            }

            // nox_intranet_maj_db_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_maj_db_homepage')), array (  '_controller' => 'NoxIntranet\\MajDBBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        if (0 === strpos($pathinfo, '/ressources')) {
            // nox_intranet_ressources
            if ($pathinfo === '/ressources') {
                return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::accueilAction',  '_route' => 'nox_intranet_ressources',);
            }

            // nox_intranet_liens
            if ($pathinfo === '/ressources/liens') {
                return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::liensAction',  '_route' => 'nox_intranet_liens',);
            }

            // nox_intranet_faq
            if ($pathinfo === '/ressources/faq') {
                return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::faqAction',  '_route' => 'nox_intranet_faq',);
            }

            // nox_intranet_archives
            if ($pathinfo === '/ressources/archives') {
                return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::archivesAction',  '_route' => 'nox_intranet_archives',);
            }

            if (0 === strpos($pathinfo, '/ressources/competences')) {
                // nox_intranet_competences
                if ($pathinfo === '/ressources/competences') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::competencesAction',  '_route' => 'nox_intranet_competences',);
                }

                // nox_intranet_competences_recherche
                if ($pathinfo === '/ressources/competences/recherche') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::competencesKeywordAction',  '_route' => 'nox_intranet_competences_recherche',);
                }

            }

            if (0 === strpos($pathinfo, '/ressources/references')) {
                // nox_intranet_references
                if ($pathinfo === '/ressources/references') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::referencesAction',  '_route' => 'nox_intranet_references',);
                }

                // nox_intranet_references_recherche
                if ($pathinfo === '/ressources/references/recherche') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::referencesKeywordAction',  '_route' => 'nox_intranet_references_recherche',);
                }

            }

            // nox_intranet_procedures
            if ($pathinfo === '/ressources/procedures') {
                return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::proceduresAction',  '_route' => 'nox_intranet_procedures',);
            }

            if (0 === strpos($pathinfo, '/ressources/archives')) {
                // nox_intranet_download_script_connexion
                if (0 === strpos($pathinfo, '/ressources/archives/connexion') && preg_match('#^/ressources/archives/connexion/(?P<agence>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_download_script_connexion')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::scriptConnexionDownloadAction',));
                }

                // nox_intranet_download_script_deconnexion
                if ($pathinfo === '/ressources/archives/deconnexion') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::scriptDeconnexionDownloadAction',  '_route' => 'nox_intranet_download_script_deconnexion',);
                }

            }

            if (0 === strpos($pathinfo, '/ressources/imprimantes')) {
                // nox_intranet_imprimantes
                if ($pathinfo === '/ressources/imprimantes') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::imprimantesAction',  '_route' => 'nox_intranet_imprimantes',);
                }

                // nox_intranet_imprimantes_download
                if (preg_match('#^/ressources/imprimantes/(?P<agence>[^/]++)/(?P<nom>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_imprimantes_download')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::scriptImprimanteDownloadAction',));
                }

            }

            if (0 === strpos($pathinfo, '/ressources/serveurs')) {
                // nox_intranet_serveurs
                if ($pathinfo === '/ressources/serveurs') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::serveursAction',  '_route' => 'nox_intranet_serveurs',);
                }

                // nox_intranet_serveur_download_script_connexion
                if (0 === strpos($pathinfo, '/ressources/serveurs/connexion') && preg_match('#^/ressources/serveurs/connexion/(?P<agence>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_serveur_download_script_connexion')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::scriptServeurConnexionDownloadAction',));
                }

                // nox_intranet_serveur_download_script_deconnexion
                if ($pathinfo === '/ressources/serveurs/deconnexion') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::scriptServeurDeconnexionDownloadAction',  '_route' => 'nox_intranet_serveur_download_script_deconnexion',);
                }

            }

            if (0 === strpos($pathinfo, '/ressources/a')) {
                if (0 === strpos($pathinfo, '/ressources/aq')) {
                    // nox_intranet_aq
                    if ($pathinfo === '/ressources/aq') {
                        return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::aqAction',  '_route' => 'nox_intranet_aq',);
                    }

                    // nox_intranet_affichageAQ
                    if (preg_match('#^/ressources/aq/(?P<dossier>[^/]++)/(?P<config>[^/]++)/(?P<chemin>.+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_affichageAQ')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::affichageAQAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/ressources/assistant')) {
                    if (0 === strpos($pathinfo, '/ressources/assistant-affaire')) {
                        // nox_intranet_assistant_affaire
                        if ($pathinfo === '/ressources/assistant-affaire') {
                            return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\ExcelReadingController::accueilAssistantAffaireAction',  '_route' => 'nox_intranet_assistant_affaire',);
                        }

                        // nox_intranet_assistant_affaire_nouvelle
                        if ($pathinfo === '/ressources/assistant-affaire/creation-suivi') {
                            return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\ExcelReadingController::creationSuiviAction',  '_route' => 'nox_intranet_assistant_affaire_nouvelle',);
                        }

                    }

                    // nox_intranet_assistant_affaire_generation
                    if ($pathinfo === '/ressources/assistantAffaireGeneration') {
                        return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\ExcelReadingController::generateExcelFileAction',  '_route' => 'nox_intranet_assistant_affaire_generation',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/testConnexion')) {
            // AD_connexion
            if ($pathinfo === '/testConnexion') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\ADConnexionController::ADConnexionAction',  '_route' => 'AD_connexion',);
            }

            // AD_connexion_check
            if ($pathinfo === '/testConnexionCheck') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\ADConnexionController::ADConnexionCheckAction',  '_route' => 'AD_connexion_check',);
            }

        }

        if (0 === strpos($pathinfo, '/acc')) {
            // nox_intranet_accueil
            if ($pathinfo === '/accueil') {
                return array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\AccueilController::majCommunicationAction',  '_route' => 'nox_intranet_accueil',);
            }

            // nox_intranet_accesinterdit
            if ($pathinfo === '/accesInterdit') {
                return array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\AccueilController::accesInterditAction',  '_route' => 'nox_intranet_accesinterdit',);
            }

        }

        // nox_intranet_connexionRequise
        if ($pathinfo === '/connexionRequise') {
            return array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\AccueilController::connexionRequiseAction',  '_route' => 'nox_intranet_connexionRequise',);
        }

        if (0 === strpos($pathinfo, '/ticket')) {
            // nox_intranet_support
            if ($pathinfo === '/ticket') {
                return array (  '_controller' => 'NoxIntranet\\SupportBundle\\Controller\\TicketController::indexAction',  '_route' => 'nox_intranet_support',);
            }

            // nox_intranet_ticket_new
            if ($pathinfo === '/ticket/new') {
                return array (  '_controller' => 'NoxIntranet\\SupportBundle\\Controller\\TicketController::ajouterTicketAction',  '_route' => 'nox_intranet_ticket_new',);
            }

            // nox_intranet_mes_tickets
            if ($pathinfo === '/ticket/consulter') {
                return array (  '_controller' => 'NoxIntranet\\SupportBundle\\Controller\\TicketController::mesTicketsAction',  '_route' => 'nox_intranet_mes_tickets',);
            }

        }

        if (0 === strpos($pathinfo, '/supportSI')) {
            // nox_intranet_support_si
            if ($pathinfo === '/supportSI') {
                return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::accueilAction',  '_route' => 'nox_intranet_support_si',);
            }

            // nox_intranet_support_licenses
            if ($pathinfo === '/supportSI/licenses') {
                return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::licensesAction',  '_route' => 'nox_intranet_support_licenses',);
            }

            // nox_intranet_support_ticketing
            if ($pathinfo === '/supportSI/ticketing') {
                return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::ticketingAction',  '_route' => 'nox_intranet_support_ticketing',);
            }

            // nox_intranet_support_wiki
            if ($pathinfo === '/supportSI/wiki') {
                return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::wikiAction',  '_route' => 'nox_intranet_support_wiki',);
            }

            if (0 === strpos($pathinfo, '/supportSI/demande')) {
                // nox_intranet_demande_materiel
                if ($pathinfo === '/supportSI/demande') {
                    return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::demandeAction',  '_route' => 'nox_intranet_demande_materiel',);
                }

                // nox_intranet_demande_materiel_check
                if ($pathinfo === '/supportSI/demandeCheck') {
                    return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::demandeCheckAction',  '_route' => 'nox_intranet_demande_materiel_check',);
                }

            }

            // nox_intranet_avancement_projet
            if ($pathinfo === '/supportSI/avancementProjet') {
                return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\AvancementProjetController::avancementProjetAction',  '_route' => 'nox_intranet_avancement_projet',);
            }

            // nox_intranet_information
            if ($pathinfo === '/supportSI/information') {
                return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\InformationController::informationAction',  '_route' => 'nox_intranet_information',);
            }

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        if (0 === strpos($pathinfo, '/communication')) {
            // nox_intranet_communication
            if ($pathinfo === '/communication') {
                return array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::communicationAction',  '_route' => 'nox_intranet_communication',);
            }

            // nox_intranet_news_SI
            if ($pathinfo === '/communication/newsSI') {
                return array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::communicationNewsSIAction',  '_route' => 'nox_intranet_news_SI',);
            }

            // nox_intranet_communication_interne
            if ($pathinfo === '/communication/interne') {
                return array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::communicationInterneAction',  '_route' => 'nox_intranet_communication_interne',);
            }

            // nox_intranet_communication_externe
            if ($pathinfo === '/communication/externe') {
                return array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::communicationExterneAction',  '_route' => 'nox_intranet_communication_externe',);
            }

            // nox_intranet_communication_marketing
            if ($pathinfo === '/communication/marketing') {
                return array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::communicationMarketingAction',  '_route' => 'nox_intranet_communication_marketing',);
            }

            // nox_intranet_communication_download
            if ($pathinfo === '/communication/telechargemenet') {
                return array (  '_controller' => 'NoxIntranetCommunicationBundle:Interne:downloadFiles',  '_route' => 'nox_intranet_communication_download',);
            }

            if (0 === strpos($pathinfo, '/communication/Nox')) {
                // nox_intranet_nox_news
                if ($pathinfo === '/communication/NoxNews') {
                    return array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::communicationNoxNewsAction',  '_route' => 'nox_intranet_nox_news',);
                }

                // nox_intranet_nox_letters
                if ($pathinfo === '/communication/NoxLetters') {
                    return array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::communicationNoxLettersAction',  '_route' => 'nox_intranet_nox_letters',);
                }

            }

            // nox_intranet_affichageContenu
            if (0 === strpos($pathinfo, '/communication/contenu') && preg_match('#^/communication/contenu/(?P<dossier>[^/]++)/(?P<config>[^/]++)/(?P<chemin>.+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_affichageContenu')), array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::affichageContenuAction',));
            }

        }

        if (0 === strpos($pathinfo, '/administration')) {
            // nox_intranet_administration
            if ($pathinfo === '/administration') {
                return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationAction',  '_route' => 'nox_intranet_administration',);
            }

            if (0 === strpos($pathinfo, '/administration/news')) {
                // nox_intranet_administration_news
                if ($pathinfo === '/administration/news') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationNewsAction',  '_route' => 'nox_intranet_administration_news',);
                }

                // nox_intranet_administration_news_ajouter
                if ($pathinfo === '/administration/news/ajouter') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationNewsController::ajouterNewsAction',  '_route' => 'nox_intranet_administration_news_ajouter',);
                }

                // nox_intranet_administration_news_supprimer
                if ($pathinfo === '/administration/news/supprimer') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationNewsController::supprimerNewsAction',  '_route' => 'nox_intranet_administration_news_supprimer',);
                }

            }

            if (0 === strpos($pathinfo, '/administration/utilisateur')) {
                // nox_intranet_administration_user
                if (preg_match('#^/administration/utilisateur(?:/(?P<roleUser>[^/]++)(?:/(?P<numPage>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_administration_user')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationUserAction',  'roleUser' => 'ROLE_USER',  'numPage' => 1,));
                }

                // nox_intranet_administration_username
                if (0 === strpos($pathinfo, '/administration/utilisateurRecherche') && preg_match('#^/administration/utilisateurRecherche(?:/(?P<roleUser>[^/]++)(?:/(?P<termeRecherche>[^/]++)(?:/(?P<numPage>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_administration_username')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationUsersController::administrationUsernameAction',  'roleUser' => 'ROLE_USER',  'numPage' => 1,  'termeRecherche' => 'aucun',));
                }

                // nox_intranet_user_edit
                if (0 === strpos($pathinfo, '/administration/utilisateurEdition') && preg_match('#^/administration/utilisateurEdition/(?P<roleUser>[^/]++)/(?P<userID>[^/]++)(?:/(?P<numPage>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_user_edit')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationUsersController::editionUserAction',  'numPage' => 1,  'roleUser' => 'ROLE_USER',));
                }

                if (0 === strpos($pathinfo, '/administration/utilisateurDB')) {
                    // nox_intranet_administration_userDB
                    if ($pathinfo === '/administration/utilisateurDB') {
                        return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationUserDBAction',  '_route' => 'nox_intranet_administration_userDB',);
                    }

                    // nox_intranet_user_verifupdateDB
                    if ($pathinfo === '/administration/utilisateurDB/confirmation') {
                        return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationUserVerifDBMajAction',  '_route' => 'nox_intranet_user_verifupdateDB',);
                    }

                    if (0 === strpos($pathinfo, '/administration/utilisateurDB/restauration')) {
                        // nox_intranet_restaurationBDD
                        if ($pathinfo === '/administration/utilisateurDB/restauration') {
                            return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationBDDRestaurationAction',  '_route' => 'nox_intranet_restaurationBDD',);
                        }

                        // nox_intranet_restaurationBDDConfirmation
                        if ($pathinfo === '/administration/utilisateurDB/restaurationConfirmation') {
                            return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationBDDRestaurationConfirmationAction',  '_route' => 'nox_intranet_restaurationBDDConfirmation',);
                        }

                    }

                    // nox_intranet_sauvegardeBDD
                    if ($pathinfo === '/administration/utilisateurDB/sauvegarde') {
                        return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::sauvegardeBDDAction',  '_route' => 'nox_intranet_sauvegardeBDD',);
                    }

                    // nox_intranet_user_updateDB
                    if ($pathinfo === '/administration/utilisateurDB/maj') {
                        return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationUserDBMajAction',  '_route' => 'nox_intranet_user_updateDB',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/administration/admin')) {
                // nox_intranet_administration_user_admin
                if ($pathinfo === '/administration/admin') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationAdminAction',  '_route' => 'nox_intranet_administration_user_admin',);
                }

                // nox_intranet_suppression_admin
                if (0 === strpos($pathinfo, '/administration/admin/suppression') && preg_match('#^/administration/admin/suppression/(?P<adminID>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_suppression_admin')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationAdminSuppressionAction',));
                }

                if (0 === strpos($pathinfo, '/administration/admin/c')) {
                    // nox_intranet_creation_admin
                    if ($pathinfo === '/administration/admin/creation') {
                        return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationAdminCreationAction',  '_route' => 'nox_intranet_creation_admin',);
                    }

                    if (0 === strpos($pathinfo, '/administration/admin/changementMDP')) {
                        // nox_intranet_admin_mdp
                        if ($pathinfo === '/administration/admin/changementMDP') {
                            return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationAdminMDPAction',  '_route' => 'nox_intranet_admin_mdp',);
                        }

                        // nox_intranet_admin_mdp_check
                        if ($pathinfo === '/administration/admin/changementMDPCheck') {
                            return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationAdminMDPACheckAction',  '_route' => 'nox_intranet_admin_mdp_check',);
                        }

                    }

                }

            }

            // nox_intranet_administration_ticketing
            if ($pathinfo === '/administration/ticketing') {
                return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationTicketingAction',  '_route' => 'nox_intranet_administration_ticketing',);
            }

            if (0 === strpos($pathinfo, '/administration/liens')) {
                // nox_intranet_administration_liens
                if ($pathinfo === '/administration/liens') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::administrationLiensAction',  '_route' => 'nox_intranet_administration_liens',);
                }

                // nox_intranet_suppression_lien
                if (0 === strpos($pathinfo, '/administration/liens/suppression') && preg_match('#^/administration/liens/suppression/(?P<lienID>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_suppression_lien')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationLiensController::administrationLiensSuppressionAction',));
                }

                if (0 === strpos($pathinfo, '/administration/liens/modification')) {
                    // nox_intranet_modification_lien
                    if (preg_match('#^/administration/liens/modification/(?P<lienID>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_modification_lien')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationLiensController::administrationLiensModificationAction',));
                    }

                    // nox_intranet_modification_lien_check
                    if (0 === strpos($pathinfo, '/administration/liens/modificationCheck') && preg_match('#^/administration/liens/modificationCheck/(?P<lienID>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_modification_lien_check')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationLiensController::administrationLiensModificationCheckAction',));
                    }

                }

                // nox_intranet_ajout_lien
                if ($pathinfo === '/administration/liens/ajout') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationLiensController::administrationLiensAjoutAction',  '_route' => 'nox_intranet_ajout_lien',);
                }

            }

            // nox_intranet_export_users
            if ($pathinfo === '/administration/utilisateurExport') {
                return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationUsersController::exportUserAction',  '_route' => 'nox_intranet_export_users',);
            }

            if (0 === strpos($pathinfo, '/administration/archives')) {
                // nox_intranet_administration_archives
                if ($pathinfo === '/administration/archives') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationArchivesController::administrationArchiveAction',  '_route' => 'nox_intranet_administration_archives',);
                }

                // nox_intranet_suppression_archive
                if (0 === strpos($pathinfo, '/administration/archives/suppression') && preg_match('#^/administration/archives/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_suppression_archive')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationArchivesController::suppressionArchiveAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administration/te')) {
                // nox_intranet_administration_texteEncart
                if (0 === strpos($pathinfo, '/administration/texteEncart') && preg_match('#^/administration/texteEncart/(?P<section>[^/]++)(?:/(?P<newText>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_administration_texteEncart')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::modifierTexteEncartAction',  'newText' => '',));
                }

                // nox_intranet_text
                if ($pathinfo === '/administration/test') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationNewsController::pdfConversionAction',  '_route' => 'nox_intranet_text',);
                }

            }

            if (0 === strpos($pathinfo, '/administration/imprimantes')) {
                // nox_intranet_administration_imprimantes
                if ($pathinfo === '/administration/imprimantes') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationImprimantesController::administrationImprimantesAction',  '_route' => 'nox_intranet_administration_imprimantes',);
                }

                // nox_intranet_administration_imprimantes_suppression
                if (0 === strpos($pathinfo, '/administration/imprimantes/suppression') && preg_match('#^/administration/imprimantes/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_administration_imprimantes_suppression')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationImprimantesController::suppressionImprimanteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administration/serveurs')) {
                // nox_intranet_administration_serveurs
                if ($pathinfo === '/administration/serveurs') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationServeursController::administrationServeurAction',  '_route' => 'nox_intranet_administration_serveurs',);
                }

                // nox_intranet_suppression_serveur
                if (0 === strpos($pathinfo, '/administration/serveurs/suppression') && preg_match('#^/administration/serveurs/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_suppression_serveur')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationServeursController::suppressionServeurAction',));
                }

            }

            if (0 === strpos($pathinfo, '/administration/communication')) {
                // nox_intranet_administration_communication
                if ($pathinfo === '/administration/communication') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationCommunicationController::administrationCommunicationAccueilAction',  '_route' => 'nox_intranet_administration_communication',);
                }

                // nox_intranet_administration_communication_externe
                if ($pathinfo === '/administration/communication/externe') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationCommunicationController::administrationCommunicationExterneAction',  '_route' => 'nox_intranet_administration_communication_externe',);
                }

                // nox_intranet_administration_communication_interne
                if ($pathinfo === '/administration/communication/interne') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationCommunicationController::administrationCommunicationInterneAction',  '_route' => 'nox_intranet_administration_communication_interne',);
                }

                // nox_intranet_administration_communication_marketing
                if ($pathinfo === '/administration/communication/marketing') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationCommunicationController::administrationCommunicationmarketingAction',  '_route' => 'nox_intranet_administration_communication_marketing',);
                }

            }

            // nox_intranet_administration_materiel
            if ($pathinfo === '/administration/materiel') {
                return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationMaterielController::materielAccueilAction',  '_route' => 'nox_intranet_administration_materiel',);
            }

            // nox_intranet_administration_affaires
            if ($pathinfo === '/administration/assistant-affaires') {
                return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationAffairesController::administrationAffairesAccueilAction',  '_route' => 'nox_intranet_administration_affaires',);
            }

        }

        // nox_intranet_menu_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_menu_homepage')), array (  '_controller' => 'NoxIntranet\\MenuBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => 'login_check');
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

            // login_fail
            if ($pathinfo === '/login_fail') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\SecurityController::loginFailAction',  '_route' => 'login_fail',);
            }

        }

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\AccueilController::majCommunicationAction',  '_route' => 'home',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
