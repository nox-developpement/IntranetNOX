<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/ressources')) {
            // nox_intranet_pointage
            if (0 === strpos($pathinfo, '/ressources/rh/pointage') && preg_match('#^/ressources/rh/pointage(?:/(?P<collaborateurExterne>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pointage')), array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::accueilAction',  'collaborateurExterne' => '',));
            }

            if (0 === strpos($pathinfo, '/ressources/pointage-ajax-')) {
                if (0 === strpos($pathinfo, '/ressources/pointage-ajax-s')) {
                    // nox_intranet_pointage_ajax_set_date
                    if ($pathinfo === '/ressources/pointage-ajax-set-date') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxSetDateAction',  '_route' => 'nox_intranet_pointage_ajax_set_date',);
                    }

                    // nox_intranet_pointage_ajax_save_data
                    if ($pathinfo === '/ressources/pointage-ajax-save-data') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxSaveDataAction',  '_route' => 'nox_intranet_pointage_ajax_save_data',);
                    }

                }

                // nox_intranet_pointage_ajax_get_data
                if ($pathinfo === '/ressources/pointage-ajax-get-data') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetDataAction',  '_route' => 'nox_intranet_pointage_ajax_get_data',);
                }

            }

            // nox_intranet_assistantes_agence_gestion_pointage
            if ($pathinfo === '/ressources/assistantes-agence-gestion-pointages') {
                return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::assistantesAgenceGestionPointageAction',  '_route' => 'nox_intranet_assistantes_agence_gestion_pointage',);
            }

            if (0 === strpos($pathinfo, '/ressources/pointage-ajax-')) {
                if (0 === strpos($pathinfo, '/ressources/pointage-ajax-get-')) {
                    // nox_intranet_pointage_ajax_get_data_by_username
                    if ($pathinfo === '/ressources/pointage-ajax-get-data-by-username') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetDataByUsernameAction',  '_route' => 'nox_intranet_pointage_ajax_get_data_by_username',);
                    }

                    // nox_intranet_pointage_ajax_get_status
                    if ($pathinfo === '/ressources/pointage-ajax-get-status') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetPointageStatusAction',  '_route' => 'nox_intranet_pointage_ajax_get_status',);
                    }

                }

                // nox_intranet_pointage_ajax_set_date_by_pointage_number
                if ($pathinfo === '/ressources/pointage-ajax-set-date-by-pointage-number') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxSetDateByPointageNumberAction',  '_route' => 'nox_intranet_pointage_ajax_set_date_by_pointage_number',);
                }

                // nox_intranet_pointage_ajax_assistante_agence_validation
                if ($pathinfo === '/ressources/pointage-ajax-assistante-agence-validation') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxAssistanteValidationAction',  '_route' => 'nox_intranet_pointage_ajax_assistante_agence_validation',);
                }

            }

            if (0 === strpos($pathinfo, '/ressources/ajax-')) {
                // nox_intranet_pointage_ajax_get_assistantes_agence_pointage_compilation_by_month_and_year
                if ($pathinfo === '/ressources/ajax-get-assistantes-agence-pointage-compilation-by-month-and-year') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetAssistanceAgencePointageCompilationByMonthAndYearAction',  '_route' => 'nox_intranet_pointage_ajax_get_assistantes_agence_pointage_compilation_by_month_and_year',);
                }

                if (0 === strpos($pathinfo, '/ressources/ajax-save-compilation-')) {
                    // nox_intranet_ajax_save_compilation_data
                    if ($pathinfo === '/ressources/ajax-save-compilation-data') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxSaveCompilationDataAction',  '_route' => 'nox_intranet_ajax_save_compilation_data',);
                    }

                    // nox_intranet_ajax_save_compilation_absences
                    if ($pathinfo === '/ressources/ajax-save-compilation-absences') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxSaveCompilationAbsencesAction',  '_route' => 'nox_intranet_ajax_save_compilation_absences',);
                    }

                }

                if (0 === strpos($pathinfo, '/ressources/ajax-get-')) {
                    // nox_intranet_pointage_ajax_get_da_manager_pointage_compilation_by_month_and_year
                    if ($pathinfo === '/ressources/ajax-get-da-manager-pointage-compilation-by-month-and-year') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetDAManagerPointageCompilationByMonthAndYearAction',  '_route' => 'nox_intranet_pointage_ajax_get_da_manager_pointage_compilation_by_month_and_year',);
                    }

                    // nox_intranet_pointage_ajax_get_assistantes_rh_pointage_compilation_by_month_and_year
                    if ($pathinfo === '/ressources/ajax-get-assistantes-rh-pointage-compilation-by-month-and-year') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetAssistantesRHPointageCompilationByMonthAndYearAction',  '_route' => 'nox_intranet_pointage_ajax_get_assistantes_rh_pointage_compilation_by_month_and_year',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ressources/pointage-')) {
                // nox_intranet_pointage_compilation_ajax_get_status
                if ($pathinfo === '/ressources/pointage-compilation-ajax-get-status') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetPointageCompilationStatusAction',  '_route' => 'nox_intranet_pointage_compilation_ajax_get_status',);
                }

                // nox_intranet_pointage_get_affaires_by_number
                if ($pathinfo === '/ressources/pointage-get-affaires-by-number') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetAffairesByNumberAction',  '_route' => 'nox_intranet_pointage_get_affaires_by_number',);
                }

            }

            if (0 === strpos($pathinfo, '/ressources/a')) {
                // nox_intranet_affichage_compilation_valide
                if ($pathinfo === '/ressources/affichage-compilations-valides') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::compilationValidesAction',  '_route' => 'nox_intranet_affichage_compilation_valide',);
                }

                if (0 === strpos($pathinfo, '/ressources/ajax-get-')) {
                    // nox_intranet_pointage_ajax_get_compilation_valide_by_month_and_year
                    if ($pathinfo === '/ressources/ajax-get-compilations-valides-by-month-and-year') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetCompilationsValideByMonthAndYearAction',  '_route' => 'nox_intranet_pointage_ajax_get_compilation_valide_by_month_and_year',);
                    }

                    // nox_intranet_pointage_ajax_get_assistante_agence_unvalidate
                    if ($pathinfo === '/ressources/ajax-get-assistante-agence-unvalidate') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetUnvalidateAction',  '_route' => 'nox_intranet_pointage_ajax_get_assistante_agence_unvalidate',);
                    }

                    if (0 === strpos($pathinfo, '/ressources/ajax-get-pointage-')) {
                        // nox_intranet_pointage_ajax_generate_excel_recap
                        if ($pathinfo === '/ressources/ajax-get-pointage-generate-excel-recap') {
                            return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::generateExcelRecapAction',  '_route' => 'nox_intranet_pointage_ajax_generate_excel_recap',);
                        }

                        // nox_intranet_pointage_ajax_get_pointages_list_aa_gestion
                        if ($pathinfo === '/ressources/ajax-get-pointage-list-aa-gestion') {
                            return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetPointageListAction',  '_route' => 'nox_intranet_pointage_ajax_get_pointages_list_aa_gestion',);
                        }

                    }

                    // nox_intranet_pointage_ajax_get_managers_list_aa_gestion
                    if ($pathinfo === '/ressources/ajax-get-managers-list-aa-gestion') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetManagerListAction',  '_route' => 'nox_intranet_pointage_ajax_get_managers_list_aa_gestion',);
                    }

                }

            }

            // nox_intranet_pointages_compilation
            if (0 === strpos($pathinfo, '/ressources/pointages-compilation') && preg_match('#^/ressources/pointages\\-compilation/(?P<validationStep>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pointages_compilation')), array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::pointagesCompilationAction',));
            }

            if (0 === strpos($pathinfo, '/ressources/a')) {
                if (0 === strpos($pathinfo, '/ressources/ajax-')) {
                    // nox_intranet_pointage_ajax_get_compilation_by_month_year_manager_validationstep
                    if ($pathinfo === '/ressources/ajax-get-compilations-by-month-year-etablissement-validationstep') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetPointagesCompilationByMonthYearManagerAction',  '_route' => 'nox_intranet_pointage_ajax_get_compilation_by_month_year_manager_validationstep',);
                    }

                    // nox_intranet_pointages_ajax_upload_justificatif_transport_file
                    if ($pathinfo === '/ressources/ajax-upload-justificatif-transport-file') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxUploadJustificatifTransportFileAction',  '_route' => 'nox_intranet_pointages_ajax_upload_justificatif_transport_file',);
                    }

                    // nox_intranet_pointages_ajax_set_justificatif_transport_to_pointage
                    if ($pathinfo === '/ressources/ajax-set-justificatif-transport-to-pointage') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxSetJustificatifTransportToPointageAction',  '_route' => 'nox_intranet_pointages_ajax_set_justificatif_transport_to_pointage',);
                    }

                    if (0 === strpos($pathinfo, '/ressources/ajax-d')) {
                        // nox_intranet_pointages_ajax_delete_justificatif_transport
                        if ($pathinfo === '/ressources/ajax-delete-justificatif-transport') {
                            return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxDeleteJustificatifTransportAction',  '_route' => 'nox_intranet_pointages_ajax_delete_justificatif_transport',);
                        }

                        // nox_intranet_pointages_download_justificatif_transport
                        if (0 === strpos($pathinfo, '/ressources/ajax-download-justificatif-transport') && preg_match('#^/ressources/ajax\\-download\\-justificatif\\-transport(?:/(?P<idJustificatif>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pointages_download_justificatif_transport')), array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::downloadJustificatifTransportAction',  'idJustificatif' => '',));
                        }

                    }

                    // nox_intranet_pointage_ajax_export_to_excel
                    if ($pathinfo === '/ressources/ajax-export-to-excel') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxExportToExcelAction',  '_route' => 'nox_intranet_pointage_ajax_export_to_excel',);
                    }

                    // nox_intranet_pointage_ajax_delete_excel_file
                    if ($pathinfo === '/ressources/ajax-delete_excel_file') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxDeleteExcelFileAction',  '_route' => 'nox_intranet_pointage_ajax_delete_excel_file',);
                    }

                }

                // nox_intranet_pointage_access_collaborateur_pointage
                if ($pathinfo === '/ressources/access-collaborateur-pointage') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::assistanteRemplissagePointageAction',  '_route' => 'nox_intranet_pointage_access_collaborateur_pointage',);
                }

            }

            if (0 === strpos($pathinfo, '/ressources/pointage')) {
                // nox_intranet_pointage_add_justificatif_file
                if (0 === strpos($pathinfo, '/ressources/pointage/add-justificatif-files') && preg_match('#^/ressources/pointage/add\\-justificatif\\-files/(?P<month>[^/]++)/(?P<year>[^/]++)/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pointage_add_justificatif_file')), array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::justificatifFilesUploadAction',));
                }

                // nox_intranet_pointage_delete_justificatif_file
                if (0 === strpos($pathinfo, '/ressources/pointage/delete-justificatif-files') && preg_match('#^/ressources/pointage/delete\\-justificatif\\-files/(?P<justificatifId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pointage_delete_justificatif_file')), array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::deleteJustificatifFileAction',));
                }

                // nox_intranet_pointage_show_justificatif_file
                if (0 === strpos($pathinfo, '/ressources/pointage/show-justificatif-files') && preg_match('#^/ressources/pointage/show\\-justificatif\\-files/(?P<justificatifId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pointage_show_justificatif_file')), array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::showJustificatifFileAction',));
                }

                // nox_intranet_pointage_ajax_download_csv
                if ($pathinfo === '/ressources/pointage/ajax-download-csv') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxDownloadCSVAction',  '_route' => 'nox_intranet_pointage_ajax_download_csv',);
                }

                // nox_intranet_pointage_download_csv
                if (0 === strpos($pathinfo, '/ressources/pointage/download-csv') && preg_match('#^/ressources/pointage/download\\-csv/(?P<fileName>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pointage_download_csv')), array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::downloadCSVAction',));
                }

                // nox_intranet_pointage_ajax_download_justificatifs_zip
                if ($pathinfo === '/ressources/pointage/ajax-download-justificatifs-zip') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxDownloadJustificatifZipAction',  '_route' => 'nox_intranet_pointage_ajax_download_justificatifs_zip',);
                }

                // nox_intranet_pointage_download_justificatif_zip
                if (0 === strpos($pathinfo, '/ressources/pointage/download-justificatif-zip') && preg_match('#^/ressources/pointage/download\\-justificatif\\-zip/(?P<fileName>[^/]++)/(?P<month>[^/]++)/(?P<year>[^/]++)/(?P<etablissement>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pointage_download_justificatif_zip')), array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::downloadJustificatifZipAction',));
                }

                // nox_intranet_pointage_compilation_nox_ip_csv
                if ($pathinfo === '/ressources/pointage/compilation-nox-ip-csv') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::compilationNOXIPCSVAction',  '_route' => 'nox_intranet_pointage_compilation_nox_ip_csv',);
                }

                // nox_intranet_pointage_ajax_save_csv
                if ($pathinfo === '/ressources/pointage/ajax-save-csv') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxSaveNOXIPCSVAction',  '_route' => 'nox_intranet_pointage_ajax_save_csv',);
                }

                if (0 === strpos($pathinfo, '/ressources/pointage/show-')) {
                    // nox_intranet_pointage_show_forfaits_deplacement_details
                    if (0 === strpos($pathinfo, '/ressources/pointage/show-forfaits-deplacement-details') && preg_match('#^/ressources/pointage/show\\-forfaits\\-deplacement\\-details/(?P<month>[^/]++)/(?P<year>[^/]++)/(?P<username>[^/]++)/(?P<readonly>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pointage_show_forfaits_deplacement_details')), array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::forfaitsDeplacementDetailsAction',));
                    }

                    // nox_intranet_pointage_show_mods_details
                    if (0 === strpos($pathinfo, '/ressources/pointage/show-mods-details') && preg_match('#^/ressources/pointage/show\\-mods\\-details/(?P<month>[^/]++)/(?P<year>[^/]++)/(?P<username>[^/]++)/(?P<readonly>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pointage_show_mods_details')), array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::modulationDetailsAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/ressources/pointage/a')) {
                    if (0 === strpos($pathinfo, '/ressources/pointage/ajax-')) {
                        if (0 === strpos($pathinfo, '/ressources/pointage/ajax-save-')) {
                            // nox_intranet_pointage_ajax_save_mods_edition
                            if ($pathinfo === '/ressources/pointage/ajax-save-mods-edition') {
                                return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxSaveModsEditionAction',  '_route' => 'nox_intranet_pointage_ajax_save_mods_edition',);
                            }

                            // nox_intranet_pointage_ajax_save_forfaits_deplacement_edition
                            if ($pathinfo === '/ressources/pointage/ajax-save-forfaits-deplacement-edition') {
                                return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxSaveForfaitsDeplacementEditionAction',  '_route' => 'nox_intranet_pointage_ajax_save_forfaits_deplacement_edition',);
                            }

                            // nox_intranet_pointage_ajax_save_regularisation
                            if ($pathinfo === '/ressources/pointage/ajax-save-regularisation') {
                                return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxSaveRegularisationAction',  '_route' => 'nox_intranet_pointage_ajax_save_regularisation',);
                            }

                        }

                        // nox_intranet_pointage_ajax_gestion_pointages_rh_mode
                        if ($pathinfo === '/ressources/pointage/ajax-gestion-pointage-rh-mode') {
                            return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGestionPointageSetRHModeAction',  '_route' => 'nox_intranet_pointage_ajax_gestion_pointages_rh_mode',);
                        }

                        // nox_intranet_pointage_ajax_compilation_pointages_rh_mode
                        if ($pathinfo === '/ressources/pointage/ajax-compilation-pointage-rh-mode') {
                            return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxCompilationPointageSetRHModeAction',  '_route' => 'nox_intranet_pointage_ajax_compilation_pointages_rh_mode',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/ressources/pointage/archives-compilation-')) {
                        // nox_intranet_pointage_archives_compilation_etablissements
                        if ($pathinfo === '/ressources/pointage/archives-compilation-etablissements') {
                            return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::compilationArchiveEtablissementAction',  '_route' => 'nox_intranet_pointage_archives_compilation_etablissements',);
                        }

                        // nox_intranet_pointage_archives_compilation_years
                        if ($pathinfo === '/ressources/pointage/archives-compilation-years') {
                            return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::compilationArchiveYearAction',  '_route' => 'nox_intranet_pointage_archives_compilation_years',);
                        }

                        // nox_intranet_pointage_archives_compilation_month
                        if ($pathinfo === '/ressources/pointage/archives-compilation-month') {
                            return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::compilationArchiveMonthAction',  '_route' => 'nox_intranet_pointage_archives_compilation_month',);
                        }

                        // nox_intranet_pointage_archives_compilation_export_excel
                        if (0 === strpos($pathinfo, '/ressources/pointage/archives-compilation-export-excel') && preg_match('#^/ressources/pointage/archives\\-compilation\\-export\\-excel/(?P<filepath>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_pointage_archives_compilation_export_excel')), array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::generateExcelRecapAction',));
                        }

                    }

                    // nox_intranet_pointage_ajax_archives_compilation_export_excel
                    if ($pathinfo === '/ressources/pointage/ajax-archives-compilation-export-excel') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGenerateExcelArchiveRecapAction',  '_route' => 'nox_intranet_pointage_ajax_archives_compilation_export_excel',);
                    }

                }

                // nox_intranet_pointage_compilation_modulation
                if ($pathinfo === '/ressources/pointage/compilation-modulation') {
                    return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageController::compilationModulationAction',  '_route' => 'nox_intranet_pointage_compilation_modulation',);
                }

                if (0 === strpos($pathinfo, '/ressources/pointage/ajax-')) {
                    // nox_intranet_pointage_ajax_search_gx_affaire
                    if ($pathinfo === '/ressources/pointage/ajax-search-gx-affaire') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxSearchGXAffaireAction',  '_route' => 'nox_intranet_pointage_ajax_search_gx_affaire',);
                    }

                    // nox_intranet_pointage_ajax_get_nom_affaire
                    if ($pathinfo === '/ressources/pointage/ajax-get-nom-affaire') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetNomAffaireAction',  '_route' => 'nox_intranet_pointage_ajax_get_nom_affaire',);
                    }

                    // nox_intranet_pointage_ajax_update_regularisation
                    if ($pathinfo === '/ressources/pointage/ajax-update-regularisation') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxUpdateRegularisationAction',  '_route' => 'nox_intranet_pointage_ajax_update_regularisation',);
                    }

                    // nox_intranet_pointage_ajax_get_last_month_affaires
                    if ($pathinfo === '/ressources/pointage/ajax-get-last-month-affaires') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxGetLastMonthAffairesAction',  '_route' => 'nox_intranet_pointage_ajax_get_last_month_affaires',);
                    }

                    // nox_intranet_pointage_ajax_upload_justificatif_compilation
                    if ($pathinfo === '/ressources/pointage/ajax-upload-justificatif-compilation') {
                        return array (  '_controller' => 'NoxIntranet\\PointageBundle\\Controller\\PointageAjaxController::ajaxUploadJustificatifCompilationAction',  '_route' => 'nox_intranet_pointage_ajax_upload_justificatif_compilation',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // nox_intranet_gx_homepage
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_gx_homepage')), array (  '_controller' => 'NoxIntranet\\GXBundle\\Controller\\DefaultController::indexAction',));
            }

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

            // nox_intranet_nox_virtual_reality
            if ($pathinfo === '/ressources/nox-virtual-reality') {
                return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::NOXVirtualRealityAction',  '_route' => 'nox_intranet_nox_virtual_reality',);
            }

            if (0 === strpos($pathinfo, '/ressources/references')) {
                // nox_intranet_references
                if (preg_match('#^/ressources/references(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_references')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::referencesAction',  'page' => 1,));
                }

                // nox_intranet_references_recherche
                if (preg_match('#^/ressources/references/(?P<page>[^/]++)/recherche$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_references_recherche')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::referencesKeywordAction',  'page' => 1,));
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
                    if (preg_match('#^/ressources/aq/(?P<page>[^/]++)/(?P<dossier>[^/]++)/(?P<config>[^/]++)/(?P<chemin>.+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_affichageAQ')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::affichageAQAction',  'page' => 1,));
                    }

                }

                if (0 === strpos($pathinfo, '/ressources/assistant')) {
                    if (0 === strpos($pathinfo, '/ressources/assistant-affaires')) {
                        // nox_intranet_assistant_affaire
                        if ($pathinfo === '/ressources/assistant-affaires') {
                            return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\NouveauSuiviController::accueilAssistantAffaireAction',  '_route' => 'nox_intranet_assistant_affaire',);
                        }

                        if (0 === strpos($pathinfo, '/ressources/assistant-affaires/creation-suivi')) {
                            // nox_intranet_assistant_affaire_nouvelle
                            if ($pathinfo === '/ressources/assistant-affaires/creation-suivi') {
                                return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\NouveauSuiviController::creationSuiviAction',  '_route' => 'nox_intranet_assistant_affaire_nouvelle',);
                            }

                            if (0 === strpos($pathinfo, '/ressources/assistant-affaires/creation-suivi/choix-')) {
                                // nox_intranet_assistant_affaire_nouvelle_choix_modele
                                if (0 === strpos($pathinfo, '/ressources/assistant-affaires/creation-suivi/choix-modèle') && preg_match('#^/ressources/assistant\\-affaires/creation\\-suivi/choix\\-modèle/(?P<IdSuivi>[^/]++)$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_assistant_affaire_nouvelle_choix_modele')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\NouveauSuiviController::creationSuiviChoixModeleAction',));
                                }

                                // nox_intranet_assistant_affaire_nouvelle_choix_client
                                if (0 === strpos($pathinfo, '/ressources/assistant-affaires/creation-suivi/choix-client') && preg_match('#^/ressources/assistant\\-affaires/creation\\-suivi/choix\\-client/(?P<IdSuivi>[^/]++)$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_assistant_affaire_nouvelle_choix_client')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\NouveauSuiviController::creationSuiviChoixClientAction',));
                                }

                                // nox_intranet_assistant_affaire_nouvelle_choix_interlocuteur
                                if (0 === strpos($pathinfo, '/ressources/assistant-affaires/creation-suivi/choix-interlocuteur') && preg_match('#^/ressources/assistant\\-affaires/creation\\-suivi/choix\\-interlocuteur/(?P<IdSuivi>[^/]++)$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_assistant_affaire_nouvelle_choix_interlocuteur')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\NouveauSuiviController::creationSuiviChoixInterlocuteurAction',));
                                }

                            }

                            // nox_intranet_assistant_affaire_nouvelle_infos
                            if (0 === strpos($pathinfo, '/ressources/assistant-affaires/creation-suivi/info-suivi') && preg_match('#^/ressources/assistant\\-affaires/creation\\-suivi/info\\-suivi/(?P<IdSuivi>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_assistant_affaire_nouvelle_infos')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\NouveauSuiviController::creationSuiviInfosAction',));
                            }

                        }

                        // nox_intranet_assistant_affaire_edition
                        if (0 === strpos($pathinfo, '/ressources/assistant-affaires/edition-suivi') && preg_match('#^/ressources/assistant\\-affaires/edition\\-suivi/(?P<IdSuivi>[^/]++)(?:/(?P<version>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_assistant_affaire_edition')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\SuiviEnCoursController::editionSuiviEnCoursAction',  'version' => '',));
                        }

                    }

                    // nox_intranet_assistant_affaire_generation
                    if ($pathinfo === '/ressources/assistantAffaireGeneration') {
                        return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\ExcelReadingController::generateExcelFileAction',  '_route' => 'nox_intranet_assistant_affaire_generation',);
                    }

                    if (0 === strpos($pathinfo, '/ressources/assistant-affaires')) {
                        if (0 === strpos($pathinfo, '/ressources/assistant-affaires/parcours-suivis-')) {
                            // nox_intranet_assistant_affaire_parcour_suivi_en_cours
                            if (0 === strpos($pathinfo, '/ressources/assistant-affaires/parcours-suivis-en-cours') && preg_match('#^/ressources/assistant\\-affaires/parcours\\-suivis\\-en\\-cours(?:/(?P<agence>[^/]++))?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_assistant_affaire_parcour_suivi_en_cours')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\SuiviEnCoursController::consulterSuiviAction',  'agence' => 'Toutes',));
                            }

                            // nox_intranet_assistant_affaire_parcour_suivi_termine
                            if (0 === strpos($pathinfo, '/ressources/assistant-affaires/parcours-suivis-terminés') && preg_match('#^/ressources/assistant\\-affaires/parcours\\-suivis\\-terminés(?:/(?P<agence>[^/]++))?$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_assistant_affaire_parcour_suivi_termine')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\SuiviTermineController::consulterSuiviTermineAction',  'agence' => 'Toutes',));
                            }

                        }

                        // nox_intranet_assistant_affaire_consultation
                        if (0 === strpos($pathinfo, '/ressources/assistant-affaires/consulter-suivi') && preg_match('#^/ressources/assistant\\-affaires/consulter\\-suivi/(?P<IdSuivi>[^/]++)(?:/(?P<version>[^/]++))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_assistant_affaire_consultation')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\SuiviTermineController::suiviTermineAction',  'version' => '',));
                        }

                    }

                }

            }

            if (0 === strpos($pathinfo, '/ressources/rh')) {
                // nox_intranet_rh
                if ($pathinfo === '/ressources/rh') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::rhAction',  '_route' => 'nox_intranet_rh',);
                }

                // nox_intranet_affichageRH
                if (preg_match('#^/ressources/rh/(?P<page>[^/]++)/(?P<dossier>[^/]++)/(?P<config>[^/]++)/(?P<chemin>.+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_affichageRH')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::affichageRHAction',  'page' => 1,));
                }

                // nox_intranet_rh_gestion_pointages
                if ($pathinfo === '/ressources/rh/gestion-pointages') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::rhGestionPointageAction',  '_route' => 'nox_intranet_rh_gestion_pointages',);
                }

            }

            if (0 === strpos($pathinfo, '/ressources/aq/documentsQSE')) {
                // nox_intranet_aq_procedures
                if ($pathinfo === '/ressources/aq/documentsQSE/procédures') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::AQProceduresAction',  '_route' => 'nox_intranet_aq_procedures',);
                }

                // nox_intranet_aq_modes_operatoires
                if ($pathinfo === '/ressources/aq/documentsQSE/modes-opératoires') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::modesOperatoiresAction',  '_route' => 'nox_intranet_aq_modes_operatoires',);
                }

                // nox_intranet_aq_formulaires_et_documents_types
                if ($pathinfo === '/ressources/aq/documentsQSE/formulaires-et-documents-types') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::formulairesEtDocumentsTypesAction',  '_route' => 'nox_intranet_aq_formulaires_et_documents_types',);
                }

            }

            // nox_intranet_rh_excel
            if (0 === strpos($pathinfo, '/ressources/rh-excel') && preg_match('#^/ressources/rh\\-excel/(?P<dossier>[^/]++)/(?P<config>[^/]++)/(?P<chemin>.+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_rh_excel')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\RessourcesController::ExcelParsingAction',));
            }

            if (0 === strpos($pathinfo, '/ressources/assistant-affaires')) {
                if (0 === strpos($pathinfo, '/ressources/assistant-affaires/creation-suivi/get')) {
                    if (0 === strpos($pathinfo, '/ressources/assistant-affaires/creation-suivi/getClient')) {
                        // nox_intranet_assistant_affaire_ajax_client_getter
                        if ($pathinfo === '/ressources/assistant-affaires/creation-suivi/getClient') {
                            return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\NouveauSuiviController::ajaxClientGetterAction',  '_route' => 'nox_intranet_assistant_affaire_ajax_client_getter',);
                        }

                        // nox_intranet_assistant_affaire_ajax_client_adr_getter
                        if ($pathinfo === '/ressources/assistant-affaires/creation-suivi/getClientAdr') {
                            return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\NouveauSuiviController::ajaxClientAdrGetterAction',  '_route' => 'nox_intranet_assistant_affaire_ajax_client_adr_getter',);
                        }

                    }

                    // nox_intranet_assistant_affaire_ajax_interlocuteur_getter
                    if ($pathinfo === '/ressources/assistant-affaires/creation-suivi/getInterlocuteur') {
                        return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\NouveauSuiviController::ajaxInterlocuteurGetterAction',  '_route' => 'nox_intranet_assistant_affaire_ajax_interlocuteur_getter',);
                    }

                }

                if (0 === strpos($pathinfo, '/ressources/assistant-affaires/edition-suivi-')) {
                    // nox_intranet_assistant_affaire_ajax_nocommande_add
                    if ($pathinfo === '/ressources/assistant-affaires/edition-suivi-add-no-commande') {
                        return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\SuiviEnCoursController::ajaxAddNoCommandeAction',  '_route' => 'nox_intranet_assistant_affaire_ajax_nocommande_add',);
                    }

                    if (0 === strpos($pathinfo, '/ressources/assistant-affaires/edition-suivi-s')) {
                        // nox_intranet_assistant_affaire_ajax_nocommande_delete
                        if ($pathinfo === '/ressources/assistant-affaires/edition-suivi-suppression-nocommande') {
                            return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\SuiviEnCoursController::ajaxDeleteNoCommandeAction',  '_route' => 'nox_intranet_assistant_affaire_ajax_nocommande_delete',);
                        }

                        // nox_intranet_assistant_affaire_ajax_save_new_infos
                        if ($pathinfo === '/ressources/assistant-affaires/edition-suivi-save-new-info') {
                            return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\AssistantAffaire\\SuiviEnCoursController::ajaxSaveNewInfosAction',  '_route' => 'nox_intranet_assistant_affaire_ajax_save_new_infos',);
                        }

                    }

                }

            }

            // nox_intranet_prestation_search
            if ($pathinfo === '/ressources/recherche-prestation') {
                return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesController::newPrestationSearchAction',  '_route' => 'nox_intranet_prestation_search',);
            }

            // nox_intranet_validation_da1
            if (0 === strpos($pathinfo, '/ressources/validation-da1') && preg_match('#^/ressources/validation\\-da1/(?P<cleDemande>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_validation_da1')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesController::validationDA1Action',));
            }

            // nox_intranet_reponse_da2
            if (0 === strpos($pathinfo, '/ressources/reponse-da2') && preg_match('#^/ressources/reponse\\-da2/(?P<cleDemande>[^/]++)/(?P<reponse>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_reponse_da2')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesController::DA2answerAction',));
            }

            if (0 === strpos($pathinfo, '/ressources/gestion-proposition-ajax-save-')) {
                // nox_intranet_ajax_save_proposition_da1_answer
                if ($pathinfo === '/ressources/gestion-proposition-ajax-save-proposition-da1-answer') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesAjaxController::ajaxSaveDA2PropositionAnswerAction',  '_route' => 'nox_intranet_ajax_save_proposition_da1_answer',);
                }

                // nox_intranet_ajax_save_echanges
                if ($pathinfo === '/ressources/gestion-proposition-ajax-save-echanges') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesAjaxController::ajaxSaveEchangesAction',  '_route' => 'nox_intranet_ajax_save_echanges',);
                }

            }

            if (0 === strpos($pathinfo, '/ressources/demande-prestation-')) {
                // nox_intranet_demande_prestation_reporting
                if (0 === strpos($pathinfo, '/ressources/demande-prestation-reporting') && preg_match('#^/ressources/demande\\-prestation\\-reporting(?:/(?P<orderTime>[^/]++)(?:/(?P<trieStatus>[^/]++)(?:/(?P<page>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_demande_prestation_reporting')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesController::prestationsInternesReportingAction',  'search' => '',  'trieStatus' => 'tous',  'page' => 0,  'orderTime' => 'desc',));
                }

                // nox_intranet_demande_prestation_summary
                if (0 === strpos($pathinfo, '/ressources/demande-prestation-summary') && preg_match('#^/ressources/demande\\-prestation\\-summary/(?P<cleDemande>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_demande_prestation_summary')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesController::demandePrestationSummaryAction',));
                }

                // nox_intranet_demande_prestation_perso_reporting
                if (0 === strpos($pathinfo, '/ressources/demande-prestation-perso-reporting') && preg_match('#^/ressources/demande\\-prestation\\-perso\\-reporting(?:/(?P<orderTime>[^/]++)(?:/(?P<trieStatus>[^/]++)(?:/(?P<page>[^/]++))?)?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_demande_prestation_perso_reporting')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesController::prestationsInternesPersoReportingAction',  'search' => '',  'trieStatus' => 'tous',  'page' => 0,  'orderTime' => 'desc',));
                }

            }

            if (0 === strpos($pathinfo, '/ressources/pr')) {
                // nox_intranet_propositions_reporting
                if (0 === strpos($pathinfo, '/ressources/propositions-perso-reporting') && preg_match('#^/ressources/propositions\\-perso\\-reporting(?:/(?P<orderTime>[^/]++)(?:/(?P<page>[^/]++))?)?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_propositions_reporting')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesController::propositionsPersoReportingAction',  'search' => '',  'page' => 0,  'orderTime' => 'desc',));
                }

                // nox_intranet_prestations_internes
                if ($pathinfo === '/ressources/prestations-internes') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesController::prestationsInternesAccueilAction',  '_route' => 'nox_intranet_prestations_internes',);
                }

            }

            // nox_intranet_ajax_edit_demande
            if ($pathinfo === '/ressources/ajax-edition-demande-prestation-interne') {
                return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesAjaxController::ajaxEditDemandeAction',  '_route' => 'nox_intranet_ajax_edit_demande',);
            }

            if (0 === strpos($pathinfo, '/ressources/demande-prestation-proposition-echanges')) {
                // nox_intranet_demande_prestation_proposition_echanges
                if (preg_match('#^/ressources/demande\\-prestation\\-proposition\\-echanges/(?P<cleDemande>[^/]++)/(?P<da2>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_demande_prestation_proposition_echanges')), array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesController::propositionEchangesAction',));
                }

                if (0 === strpos($pathinfo, '/ressources/demande-prestation-proposition-echanges-message-ajax-')) {
                    // nox_intranet_demande_prestation_proposition_echanges_message_ajax_saving
                    if ($pathinfo === '/ressources/demande-prestation-proposition-echanges-message-ajax-saving') {
                        return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesAjaxController::ajaxSaveMessageAction',  '_route' => 'nox_intranet_demande_prestation_proposition_echanges_message_ajax_saving',);
                    }

                    // nox_intranet_demande_prestation_proposition_echanges_message_ajax_receive
                    if ($pathinfo === '/ressources/demande-prestation-proposition-echanges-message-ajax-receive') {
                        return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesAjaxController::ajaxGetMessageAction',  '_route' => 'nox_intranet_demande_prestation_proposition_echanges_message_ajax_receive',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/ressources/prestation-administration-da')) {
                // nox_intranet_prestation_administration_da
                if ($pathinfo === '/ressources/prestation-administration-da') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesController::administrationDAAction',  '_route' => 'nox_intranet_prestation_administration_da',);
                }

                // nox_intranet_prestation_administration_da_ajax_save_user_status
                if ($pathinfo === '/ressources/prestation-administration-da-ajax-save-user-status') {
                    return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\PrestationsInternes\\PrestationsInternesAjaxController::ajaxSaveUserStatusAction',  '_route' => 'nox_intranet_prestation_administration_da_ajax_save_user_status',);
                }

            }

        }

        // nox_intranet_questionnaire_stress
        if ($pathinfo === '/questionnaire-stress') {
            return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\QuestionnaireStress\\QuestionnaireStressController::questionnaireAnswerAction',  '_route' => 'nox_intranet_questionnaire_stress',);
        }

        if (0 === strpos($pathinfo, '/ressources')) {
            // nox_intranet_ressources_siren
            if ($pathinfo === '/ressources/siren') {
                return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\Siren\\SirenController::sirenTableAction',  '_route' => 'nox_intranet_ressources_siren',);
            }

            // nox_intranet_ressources_ajax_search_by_siren
            if ($pathinfo === '/ressources/ajax_search_by_siren') {
                return array (  '_controller' => 'NoxIntranet\\RessourcesBundle\\Controller\\Siren\\SirenController::ajaxSearchBySirenAction',  '_route' => 'nox_intranet_ressources_ajax_search_by_siren',);
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

        if (0 === strpos($pathinfo, '/developpement-professionnel-')) {
            // nox_intranet_developpement_professionnel_formulaire
            if (0 === strpos($pathinfo, '/developpement-professionnel-formulaire') && preg_match('#^/developpement\\-professionnel\\-formulaire(?:/(?P<collaborateurUsername>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_developpement_professionnel_formulaire')), array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\DeveloppementProfessionnel\\DeveloppementProfessionnelController::formulaireDeveloppementProfessionnelAction',  'collaborateurUsername' => '',));
            }

            // nox_intranet_developpement_professionnel_synthese_excel
            if ($pathinfo === '/developpement-professionnel-synthese-excel') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\DeveloppementProfessionnel\\DeveloppementProfessionnelController::exportToExcelAction',  '_route' => 'nox_intranet_developpement_professionnel_synthese_excel',);
            }

            // nox_intranet_developpement_professionnel_download_pdf_export
            if (0 === strpos($pathinfo, '/developpement-professionnel-download-pdf-export') && preg_match('#^/developpement\\-professionnel\\-download\\-pdf\\-export/(?P<fileName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_developpement_professionnel_download_pdf_export')), array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\DeveloppementProfessionnel\\DeveloppementProfessionnelController::downloadPDFExportAction',));
            }

            // nox_intranet_developpement_professionnel_ajax_convert_html_to_pdf
            if ($pathinfo === '/developpement-professionnel-ajax-convert-html-to-pdf') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\DeveloppementProfessionnel\\DeveloppementProfessionnelController::ajaxConvertHtmlToPDFAction',  '_route' => 'nox_intranet_developpement_professionnel_ajax_convert_html_to_pdf',);
            }

        }

        // nox_intranet_developpement_professionnel_monitoring_formulaire
        if ($pathinfo === '/administration/developpement-professionnel/monitoring-formulaire') {
            return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\DeveloppementProfessionnel\\DeveloppementProfessionnelController::formulaireMonitoringAction',  '_route' => 'nox_intranet_developpement_professionnel_monitoring_formulaire',);
        }

        if (0 === strpos($pathinfo, '/ressources/matrice-competence')) {
            // nox_intranet_developpement_professionnel_matrice_competence_formulaire
            if ($pathinfo === '/ressources/matrice-competence/mes-competences') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\MatriceCompetence\\MatriceCompetenceController::competenceFormAction',  '_route' => 'nox_intranet_developpement_professionnel_matrice_competence_formulaire',);
            }

            // nox_intranet_developpement_professionnel_matrice_competence_edition_collaborateur
            if (0 === strpos($pathinfo, '/ressources/matrice-competence/edition-matrice-collaborateur') && preg_match('#^/ressources/matrice\\-competence/edition\\-matrice\\-collaborateur/(?P<userId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_developpement_professionnel_matrice_competence_edition_collaborateur')), array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\MatriceCompetence\\MatriceCompetenceController::collaborateurMatriceEditonAction',));
            }

            // nox_intranet_developpement_professionnel_matrice_competence_tableau
            if ($pathinfo === '/ressources/matrice-competence/competences-collaborateurs') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\MatriceCompetence\\MatriceCompetenceController::matriceCompetenceTableAction',  '_route' => 'nox_intranet_developpement_professionnel_matrice_competence_tableau',);
            }

            // nox_intranet_developpement_professionnel_matrice_competence_file_extraction
            if ($pathinfo === '/ressources/matrice-competence/file-extraction') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\MatriceCompetence\\MatriceCompetenceController::extractMatriceCompetenceDataAction',  '_route' => 'nox_intranet_developpement_professionnel_matrice_competence_file_extraction',);
            }

        }

        // nox_intranet_developpement_professionnel_gestion_entretien_professionnel
        if ($pathinfo === '/developpement-professionnel/gestion-entretien-professionnel') {
            return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\DeveloppementProfessionnel\\DeveloppementProfessionnelController::gestionEntretienProfessionnelN2Action',  '_route' => 'nox_intranet_developpement_professionnel_gestion_entretien_professionnel',);
        }

        if (0 === strpos($pathinfo, '/ressources/matrice-competence')) {
            if (0 === strpos($pathinfo, '/ressources/matrice-competence/ajax-')) {
                // nox_intranet_ajax_matrice_collaborateur_edition_save
                if ($pathinfo === '/ressources/matrice-competence/ajax-collaborateur-edition-save') {
                    return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\MatriceCompetence\\MatriceCompetenceController::ajaxSaveMatriceCollaborateurEditionAction',  '_route' => 'nox_intranet_ajax_matrice_collaborateur_edition_save',);
                }

                // nox_intranet_ajax_matrice_collaborateur_get_matrice_collaborateur
                if ($pathinfo === '/ressources/matrice-competence/ajax-get-matrice-collaborateur') {
                    return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\MatriceCompetence\\MatriceCompetenceController::ajaxGetMatriceCollaborateurAction',  '_route' => 'nox_intranet_ajax_matrice_collaborateur_get_matrice_collaborateur',);
                }

            }

            // nox_intranet_matrice_collaborateur_selection_collaborateur
            if ($pathinfo === '/ressources/matrice-competence/selection-collaborateur') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\MatriceCompetence\\MatriceCompetenceController::collaborateurSelectionAction',  '_route' => 'nox_intranet_matrice_collaborateur_selection_collaborateur',);
            }

            // nox_intranet_matrice_collaborateur_ajax_search_in_matrice
            if ($pathinfo === '/ressources/matrice-competence/ajax-search-in-matrice') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\MatriceCompetence\\MatriceCompetenceController::ajaxSearchInMatriceAction',  '_route' => 'nox_intranet_matrice_collaborateur_ajax_search_in_matrice',);
            }

            // nox_intranet_matrice_collaborateur_info_file_uploading
            if ($pathinfo === '/ressources/matrice-competence/collaborateurs-info-file-uploading') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\MatriceCompetence\\MatriceCompetenceController::collaborateursInfoUploadingAction',  '_route' => 'nox_intranet_matrice_collaborateur_info_file_uploading',);
            }

            // nox_intranet_matrice_collaborateur_ajax_info_file_uploading
            if ($pathinfo === '/ressources/matrice-competence/ajax-collaborateurs-info-file-uploading') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\MatriceCompetence\\MatriceCompetenceController::ajaxUploadCollaborateursInfoAction',  '_route' => 'nox_intranet_matrice_collaborateur_ajax_info_file_uploading',);
            }

            // nox_intranet_matrice_collaborateur_export_matrice_competence
            if ($pathinfo === '/ressources/matrice-competence/export-matrice-competence') {
                return array (  '_controller' => 'NoxIntranet\\UserBundle\\Controller\\MatriceCompetence\\MatriceCompetenceController::exportMatriceCompetencesAction',  '_route' => 'nox_intranet_matrice_collaborateur_export_matrice_competence',);
            }

        }

        // nox_intranet_accueil
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\AccueilController::majCommunicationAction',  '_route' => 'nox_intranet_accueil',);
        }

        // nox_intranet_debug
        if ($pathinfo === '/debug') {
            return array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\AccueilController::debugAction',  '_route' => 'nox_intranet_debug',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/accueil')) {
                // nox_intranet_ajax_get_message_alerte
                if ($pathinfo === '/accueil/get-message-alerte') {
                    return array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\AccueilController::ajaxGetMessageAlertAction',  '_route' => 'nox_intranet_ajax_get_message_alerte',);
                }

                // nox_intranet_message_alerte
                if ($pathinfo === '/accueil/message-alerte') {
                    return array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\AccueilController::messageAlerteAction',  '_route' => 'nox_intranet_message_alerte',);
                }

                // nox_intranet_charte_informatique
                if ($pathinfo === '/accueil/charte-informatique') {
                    return array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\CharteInformatiqueController::displayCharteInformatiqueAction',  '_route' => 'nox_intranet_charte_informatique',);
                }

            }

            if (0 === strpos($pathinfo, '/administration/charte-informatique-')) {
                // nox_intranet_charte_informatique_monitoring
                if ($pathinfo === '/administration/charte-informatique-monitoring') {
                    return array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\CharteInformatiqueController::monitoringCharteInformatiqueAction',  '_route' => 'nox_intranet_charte_informatique_monitoring',);
                }

                // nox_intranet_charte_informatique_reset
                if (0 === strpos($pathinfo, '/administration/charte-informatique-reset') && preg_match('#^/administration/charte\\-informatique\\-reset/(?P<collaborateurUsername>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_charte_informatique_reset')), array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\CharteInformatiqueController::resetCharteInformatiqueReadingAction',));
                }

            }

        }

        // nox_intranet_simulate_error_exception
        if ($pathinfo === '/error-simulation') {
            return array (  '_controller' => 'NoxIntranet\\AccueilBundle\\Controller\\AccueilController::simulateErrorExceptionAction',  '_route' => 'nox_intranet_simulate_error_exception',);
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

            // nox_intranet_support_base_de_connaissances
            if ($pathinfo === '/supportSI/base-de-connaissances') {
                return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::baseDeConnaissancesAction',  '_route' => 'nox_intranet_support_base_de_connaissances',);
            }

            // nox_intranet_support_ticketing
            if ($pathinfo === '/supportSI/ticketing') {
                return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::ticketingAction',  '_route' => 'nox_intranet_support_ticketing',);
            }

            // nox_intranet_support_wiki
            if ($pathinfo === '/supportSI/wiki') {
                return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::wikiAction',  '_route' => 'nox_intranet_support_wiki',);
            }

            // nox_intranet_demande_materiel
            if ($pathinfo === '/supportSI/demande-materiel-logiciel') {
                return array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::demandeAction',  '_route' => 'nox_intranet_demande_materiel',);
            }

            if (0 === strpos($pathinfo, '/supportSI/confirmation-demande-')) {
                // nox_intranet_demande_materiel_confirmation_dsi
                if (0 === strpos($pathinfo, '/supportSI/confirmation-demande-dsi') && preg_match('#^/supportSI/confirmation\\-demande\\-dsi/(?P<cleDemande>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_demande_materiel_confirmation_dsi')), array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::demandeConfirmationDSIAction',));
                }

                // nox_intranet_demande_materiel_confirmation_superieur_hierarchique
                if (0 === strpos($pathinfo, '/supportSI/confirmation-demande-superieur-hierarchique') && preg_match('#^/supportSI/confirmation\\-demande\\-superieur\\-hierarchique/(?P<cleDemande>[^/]++)/(?P<reponse>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_demande_materiel_confirmation_superieur_hierarchique')), array (  '_controller' => 'NoxIntranet\\SupportSIBundle\\Controller\\SupportSIController::demandeConfirmationSuperieurHierarchiqueAction',));
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

            // nox_intranet_communication_download
            if ($pathinfo === '/communication/telechargemenet') {
                return array (  '_controller' => 'NoxIntranetCommunicationBundle:Interne:downloadFiles',  '_route' => 'nox_intranet_communication_download',);
            }

            // nox_intranet_affichageContenu
            if (0 === strpos($pathinfo, '/communication/contenu') && preg_match('#^/communication/contenu/(?P<page>[^/]++)/(?P<dossier>[^/]++)/(?P<config>[^/]++)/(?P<chemin>.+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_affichageContenu')), array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::affichageContenuAction',  'page' => 1,));
            }

            // nox_intranet_affichageImages
            if (0 === strpos($pathinfo, '/communication/images') && preg_match('#^/communication/images/(?P<page>[^/]++)/(?P<dossier>[^/]++)/(?P<config>[^/]++)/(?P<chemin>.+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_affichageImages')), array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::affichageImagesAction',  'page' => 1,));
            }

            // nox_intranet_communication_bim
            if ($pathinfo === '/communication/BIM') {
                return array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::BIMAction',  '_route' => 'nox_intranet_communication_bim',);
            }

            // nox_intranet_communication_ajax_video_preview
            if ($pathinfo === '/communication/ajax-video-preview') {
                return array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::ajaxVideoPreviewAction',  '_route' => 'nox_intranet_communication_ajax_video_preview',);
            }

            // nox_intranet_communication_file_tree
            if (0 === strpos($pathinfo, '/communication/tree') && preg_match('#^/communication/tree/(?P<dossier>[^/]++)/(?P<config>[^/]++)/(?P<chemin>.+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_communication_file_tree')), array (  '_controller' => 'NoxIntranet\\CommunicationBundle\\Controller\\CommunicationController::fileTreeAction',));
            }

        }

        if (0 === strpos($pathinfo, '/administrat')) {
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
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_suppression_lien')), array (  '_controller' => 'NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiensSuppression',));
                    }

                    if (0 === strpos($pathinfo, '/administration/liens/modification')) {
                        // nox_intranet_modification_lien
                        if (preg_match('#^/administration/liens/modification/(?P<lienID>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_modification_lien')), array (  '_controller' => 'NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiensModification',));
                        }

                        // nox_intranet_modification_lien_check
                        if (0 === strpos($pathinfo, '/administration/liens/modificationCheck') && preg_match('#^/administration/liens/modificationCheck/(?P<lienID>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_modification_lien_check')), array (  '_controller' => 'NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiensModificationCheck',));
                        }

                    }

                    // nox_intranet_ajout_lien
                    if ($pathinfo === '/administration/liens/ajout') {
                        return array (  '_controller' => 'NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiensAjout',  '_route' => 'nox_intranet_ajout_lien',);
                    }

                }

                // nox_intranet_export_users
                if ($pathinfo === '/administration/utilisateurExport') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationUsersController::exportUserAction',  '_route' => 'nox_intranet_export_users',);
                }

                if (0 === strpos($pathinfo, '/administration/archives')) {
                    // nox_intranet_administration_archives
                    if ($pathinfo === '/administration/archives') {
                        return array (  '_controller' => 'NoxIntranetAdministrationBundle:AdministrationArchives:administrationArchive',  '_route' => 'nox_intranet_administration_archives',);
                    }

                    // nox_intranet_suppression_archive
                    if (0 === strpos($pathinfo, '/administration/archives/suppression') && preg_match('#^/administration/archives/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_suppression_archive')), array (  '_controller' => 'NoxIntranetAdministrationBundle:AdministrationArchives:suppressionArchive',));
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
                        return array (  '_controller' => 'NoxIntranetAdministrationBundle:AdministrationImprimantes:administrationImprimantes',  '_route' => 'nox_intranet_administration_imprimantes',);
                    }

                    // nox_intranet_administration_imprimantes_suppression
                    if (0 === strpos($pathinfo, '/administration/imprimantes/suppression') && preg_match('#^/administration/imprimantes/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_administration_imprimantes_suppression')), array (  '_controller' => 'NoxIntranetAdministrationBundle:AdministrationImprimantes:suppressionImprimante',));
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
                if (0 === strpos($pathinfo, '/administration/assistant-affaires') && preg_match('#^/administration/assistant\\-affaires(?:/(?P<section>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_administration_affaires')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationAssistantAffaire\\AdministrationAffairesController::administrationAffairesAccueilAction',  'section' => '',));
                }

            }

            if (0 === strpos($pathinfo, '/administraton/assistant-affaires')) {
                // nox_intranet_administration_affaires_add_profil
                if ($pathinfo === '/administraton/assistant-affaires/add-profil') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationAssistantAffaire\\Profils\\ProfilsController::ajaxAddProfilAction',  '_route' => 'nox_intranet_administration_affaires_add_profil',);
                }

                // nox_intranet_administration_affaires_delete_profil
                if ($pathinfo === '/administraton/assistant-affaires/delete-profil') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationAssistantAffaire\\Profils\\ProfilsController::ajaxDeleteProfilAction',  '_route' => 'nox_intranet_administration_affaires_delete_profil',);
                }

            }

            if (0 === strpos($pathinfo, '/administration')) {
                if (0 === strpos($pathinfo, '/administration/assistant-affaires')) {
                    // nox_intranet_administration_affaires_edition
                    if (0 === strpos($pathinfo, '/administration/assistant-affaires-edition-fichier') && preg_match('#^/administration/assistant\\-affaires\\-edition\\-fichier/(?P<profil>[^/]++)/(?P<file>.+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_administration_affaires_edition')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationAssistantAffaire\\Modeles\\ModelesController::administrationAffairesEditionAction',  'profil' => '',));
                    }

                    // nox_intranet_administration_affaires_edition_sauvegarde
                    if (0 === strpos($pathinfo, '/administration/assistant-affaires/sauvegarde-fichier') && preg_match('#^/administration/assistant\\-affaires/sauvegarde\\-fichier/(?P<filename>.+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_administration_affaires_edition_sauvegarde')), array (  '_controller' => 'NoxIntranetAdministrationBundle:AdministrationAffaires:administrationAffaireSauvegardeModification',));
                    }

                    if (0 === strpos($pathinfo, '/administration/assistant-affaires-')) {
                        // nox_intranet_administration_affaire_delete_champ
                        if (0 === strpos($pathinfo, '/administration/assistant-affaires-delete-champ') && preg_match('#^/administration/assistant\\-affaires\\-delete\\-champ/(?P<IDChamp>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_administration_affaire_delete_champ')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationAssistantAffaire\\Champs\\ChampsController::deleteChampAction',));
                        }

                        // nox_intranet_administration_affaires_edition_champ
                        if (0 === strpos($pathinfo, '/administration/assistant-affaires-edition-champ') && preg_match('#^/administration/assistant\\-affaires\\-edition\\-champ/(?P<IDChamp>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_administration_affaires_edition_champ')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationAssistantAffaire\\Champs\\ChampsController::editionChampAction',));
                        }

                        // nox_intranet_administration_affaires_ajax_ajout_donnee
                        if ($pathinfo === '/administration/assistant-affaires-ajout-donnee') {
                            return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationAssistantAffaire\\Champs\\ChampsController::ajaxAddDonneeAction',  '_route' => 'nox_intranet_administration_affaires_ajax_ajout_donnee',);
                        }

                        if (0 === strpos($pathinfo, '/administration/assistant-affaires-delete-')) {
                            // nox_intranet_administration_affaires_ajax_delete_donnee
                            if ($pathinfo === '/administration/assistant-affaires-delete-donnee') {
                                return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationAssistantAffaire\\Champs\\ChampsController::ajaxDeleteDonneeAction',  '_route' => 'nox_intranet_administration_affaires_ajax_delete_donnee',);
                            }

                            // nox_intranet_administration_affaires_delete_modele
                            if (0 === strpos($pathinfo, '/administration/assistant-affaires-delete-modele') && preg_match('#^/administration/assistant\\-affaires\\-delete\\-modele/(?P<IDModele>[^/]++)$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_administration_affaires_delete_modele')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationAssistantAffaire\\Modeles\\ModelesController::deleteModeleAction',));
                            }

                        }

                    }

                }

                // nox_intranet_administration_message_alerte
                if ($pathinfo === '/administration/message-alerte') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationMessageAlertController::editMessageAlertAction',  '_route' => 'nox_intranet_administration_message_alerte',);
                }

                // nox_intranet_administration_upload_fichier_hierarchie_rh
                if ($pathinfo === '/administration/upload-file-rh') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationController::uploadFichierHierarchieRHAction',  '_route' => 'nox_intranet_administration_upload_fichier_hierarchie_rh',);
                }

                // nox_intranet_collaborateurs_en_ligne
                if ($pathinfo === '/administration/collaborateurs-en-ligne') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\AdministrationUsersController::collaborateursEnLigneAction',  '_route' => 'nox_intranet_collaborateurs_en_ligne',);
                }

                // nox_intranet_monitoring_scheduled_scripts
                if ($pathinfo === '/administration/monitoring-scheduled-scripts') {
                    return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\MonitoringScheduledScripts\\MonitoringScheduledScriptsController::scheduledScriptsMonitoringPanelAction',  '_route' => 'nox_intranet_monitoring_scheduled_scripts',);
                }

                // nox_intranet_delete_script_monitoring
                if (0 === strpos($pathinfo, '/administration/delete-script-monitoring') && preg_match('#^/administration/delete\\-script\\-monitoring/(?P<scriptId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nox_intranet_delete_script_monitoring')), array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\MonitoringScheduledScripts\\MonitoringScheduledScriptsController::deleteScriptMonitoringAction',));
                }

                if (0 === strpos($pathinfo, '/administration/stats-vpn')) {
                    // nox_intranet_vpn_stats_upload
                    if ($pathinfo === '/administration/stats-vpn/upload') {
                        return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\StatsVPN\\StatsVPNController::uploadVPNLogsAction',  '_route' => 'nox_intranet_vpn_stats_upload',);
                    }

                    // nox_intranet_vpn_stats
                    if ($pathinfo === '/administration/stats-vpn/stats') {
                        return array (  '_controller' => 'NoxIntranet\\AdministrationBundle\\Controller\\StatsVPN\\StatsVPNController::statsVPNCalculationAction',  '_route' => 'nox_intranet_vpn_stats',);
                    }

                }

            }

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
