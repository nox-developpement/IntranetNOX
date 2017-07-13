<?php

/* NoxIntranetPointageBundle:Pointage:assistantesAgenceGestionPointages.html.twig */
class __TwigTemplate_eeb4c353532050c88836603cf8010ce3c18fe58b40a283b94506321dfdea7e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NoxIntranetPointageBundle:Pointage:assistantesAgenceGestionPointages.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Assistant(e) agence: Validation pointages ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Assistant(e) agence: Validation pointages";
    }

    // line 7
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "<a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Pointage/Aide/MODE OP' feuille de pointage.pdf"), "html", null, true);
        echo "' target='_blank' style='text-decoration: none;'>Aide</a>|<a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Pointage/Aide/Prise en main du pointage collaborateur.pdf"), "html", null, true);
        echo "' target='_blank' style='text-decoration: none;'>Notice de remplissage collaborateurs</a>|<a href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Pointage/Aide/Prise en main du pointage RH.pdf"), "html", null, true);
        echo "' target='_blank' style='text-decoration: none;'>Notice RH</a>";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "    <div id=\"pointageSelection\">

        <p id=\"validationStepNavigator\" style=\"margin-top: 0;\">
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistantes_agence_gestion_pointage");
        echo "\">Assistant(e) agence: Validation pointages</a> |
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_compilation", array("validationStep" => "AA"));
        echo "\">Assistant(e)s agence - Correction/Validation compilation</a> |
            <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_compilation", array("validationStep" => "DAManager"));
        echo "\">DA/Manager - Correction/Validation compilation</a> |
            <a href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_compilation", array("validationStep" => "Final"));
        echo "\">Consultation des compilations validées</a>
        </p>

        ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("style" => "float: left;")));
        echo "
        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
        <fieldset>
            <legend>Séléction de pointage</legend>
            ";
        // line 23
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_RH")) {
            // line 24
            echo "                <div style=\"width: 100%; margin-bottom: 0.5em;\">
                    <label><input type=\"checkbox\" id=\"RHMode\" name=\"RHMode\" style=\"vertical-align: bottom;\" onchange=\"gestionPointageSetRHMode(\$(this));\" ";
            // line 25
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "RHMode"), "method") == "true")) {
                echo "checked";
            }
            echo ">Activer le mode DRH</label>
                </div>
            ";
        }
        // line 28
        echo "            <div style=\"width: 50%; margin-bottom: 0.5em;\">
                ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Month", array()), 'label', array("label" => "Mois"));
        echo " <br />
                ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Month", array()), 'errors');
        echo "
                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Month", array()), 'widget');
        echo "
            </div><!--
    
            --><div style=\"width: 50%; margin-bottom: 0.5em;\">
                ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Year", array()), 'label', array("label" => "Année"));
        echo " <br />
                ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Year", array()), 'errors');
        echo "
                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Year", array()), 'widget');
        echo "
            </div><br /><!--
            --><div style=\"width: 100%; margin-bottom: 0.5em;\">
                ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Etablissement", array()), 'label', array("label" => "Etablissement"));
        echo " <br />
                ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Etablissement", array()), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Etablissement", array()), 'widget');
        echo "
            </div><br /><!--
            --><div style=\"width: 100%; margin-bottom: 0.5em;\">
                ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Manager", array()), 'label', array("label" => "Manager"));
        echo " <br />
                ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Manager", array()), 'errors');
        echo "
                ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Manager", array()), 'widget');
        echo "
            </div>
        </fieldset>
        ";
        // line 50
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

        ";
        // line 52
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formToCheckPointage"]) ? $context["formToCheckPointage"] : null), 'form_start', array("attr" => array("style" => "float: right;")));
        echo "
        ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formToCheckPointage"]) ? $context["formToCheckPointage"] : null), 'errors');
        echo "
        <fieldset>
            <legend>Pointage en attente de validation</legend>

            <div>
                ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formToCheckPointage"]) ? $context["formToCheckPointage"] : null), "Pointage", array()), 'errors');
        echo "
                ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formToCheckPointage"]) ? $context["formToCheckPointage"] : null), "Pointage", array()), 'widget', array("attr" => array("size" => 5)));
        echo "
            </div>
        </fieldset>
        ";
        // line 62
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formToCheckPointage"]) ? $context["formToCheckPointage"] : null), 'form_end');
        echo "
    </div>

    <div id='loadingContent' style='display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; z-index: 100; background-image: url(";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/pointageLoading.svg"), "html", null, true);
        echo "); background-size: contain; background-repeat: no-repeat; background-position: center center;'></div>

    <div id='pointageSavingNotification' style='display: none; position: fixed; z-index: 500; background-color: rgba(41,154,11, 0.7); border: 1px outset white; border-radius: 10px; padding: 0.5%;'><p style='display: inline-block; margin: 0; font-size: 0.8vw; color: white;'>Sauvegarde en cours <img src='";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/savingNotification.svg"), "html", null, true);
        echo "' style='vertical-align: middle; height: 2em;'></p></div>

    <div id=\"pointageAlert\"><div id=\"pointageAlertText\"></div></div>

    <div id=\"pointageStatusDiv\" style=\"clear: both;\">
        <div id=\"pointageStatusLabelGeneralContainer\">
            <div class='pointageStatusLabelContainer'><p class='pointageStatusLabel'>Collaborateur</p></div><!--
            --><div class='pointageStatusLabelContainer'><p class='pointageStatusLabel'>Assistant(e) agence</p></div><!--
            --><div class='pointageStatusLabelContainer'><p class='pointageStatusLabel'>DA/Manager</p></div><!--
            --><div class='pointageStatusLabelContainer'><p class='pointageStatusLabel'>Assistant(e) RH/DRH</p></div><!--
            --><div class='pointageStatusLabelContainer'><p class='pointageStatusLabel'>Validé</p></div><!--
            --></div>
        <div id=\"pointageStatus\">
            <div class='pointageStatusCircleContainer'><div class='pointageStatusCircle' step=0></div></div><!--
            --><div class='pointageStatusCircleContainer'><div class='pointageStatusCircle' step=1></div></div><!--
            --><div class='pointageStatusCircleContainer'><div class='pointageStatusCircle' step=2></div></div><!--
            --><div class='pointageStatusCircleContainer'><div class='pointageStatusCircle' step=3></div></div><!--
            --><div class='pointageStatusCircleContainer'><div class='pointageStatusCircle' step=4></div></div>
            <div class='pointageStatusLine'><div></div></div>
        </div>
    </div>

    <div id='tableFeuillePointageDivContainer'>
        <table id=\"tableFeuillePointage\">

            <div id=\"floatingHeaderContainer\">
                <div id=\"floatingHeader\">
                    <div>
                        <div>&nbsp;</div><br />
                        <div>&nbsp;</div>
                    </div>
                    <div>
                        <div>TOTAL</div><br />
                        <div>%</div>
                    </div>
                    <div>
                        <div>MOD</div><br />
                        <div>h</div>
                    </div>
                    <div>
                        <div>Absences</div><br />
                        <div style=\"width: auto;\" id=\"floatingHeaderMatin\">Matin</div><div style=\"width: auto;\" id=\"floatingHeaderAM\">Après-midi</div>
                    </div>
                    <div>
                        <div>Titres repas</div><br />
                        <div>Nombre</div>
                    </div>
                    <div>
                        <div>Forfaits déplacement</div><br />
                        <div>Montant</div>
                    </div>
                    <div>
                        <div>Primes panier</div><br />
                        <div>Nombre</div>
                    </div>
                    <div style='float: right;'>
                        <div style='height: 100%;'>Commentaires</div>
                    </div>
                </div>
            </div>

            <div id=\"floatingVerticalHeaderContainer\">
                <div id=\"floatingVerticalHeader\">
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                    <div>&nbsp;</div>
                </div>
            </div>

            <div id='floatingHeaderCross'></div>

            <tr>
                <td style=\"border: solid 1px black;\">
                    <select id='pointage_month_selector' style=\"width: 100%;\">
                        ";
        // line 141
        $context["months"] = array(1 => "Janvier", 2 => "Février", 3 => "Mars", 4 => "Avril", 5 => "Mai", 6 => "Juin", 7 => "Juillet", 8 => "Août", 9 => "Septembre", 10 => "Octobre", 11 => "Novembre", 12 => "Décembre");
        // line 142
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["months"]) ? $context["months"] : null));
        foreach ($context['_seq'] as $context["index"] => $context["month"]) {
            // line 143
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["index"], "html", null, true);
            echo "\" ";
            if (($context["index"] == (isset($context["currentMonth"]) ? $context["currentMonth"] : null))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["month"], "html", null, true);
            echo "</option>  
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['month'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
        echo "                    </select>
                </td>
                <td id='operationnel' style=\"color: white; border-width: 1px;\" colspan=\"2\">OPERATIONNEL <p id=\"addProject\" style=\"margin: 0; float: right; display: inline-block; cursor: pointer;\">+ Affaire</p></td>
                <td style=\"border-width: 1px;\"></td>
                <td style=\"color: white; border-width: 1px;\" colspan=\"5\">RESSOURCES HUMAINES</td>
                <td style=\"border: none; border-bottom: solid 1px black;\" >
                    <a href=\"#\" onclick=\"ajaxExportToExcell();\">Imprimer</a>
                </td>
            </tr>
            <tr>
                <td style=\"border: solid 1px black;\">
                    <select id='pointage_year_selector' style=\"width: 100%;\">
                        <option value=\"";
        // line 157
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "</option>
                        <option value=\"";
        // line 158
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+1 year"), "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+1 year"), "Y"), "html", null, true);
        echo "</option>
                        <option value=\"";
        // line 159
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+2 year"), "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+2 year"), "Y"), "html", null, true);
        echo "</option>
                        <option value=\"";
        // line 160
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+3 year"), "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+3 year"), "Y"), "html", null, true);
        echo "</option>
                        <option value=\"";
        // line 161
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+4 year"), "Y"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+4 year"), "Y"), "html", null, true);
        echo "</option>
                    </select>
                </td>
                <td class='project' style='border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px;' contenteditable=true>Nouvelle Affaire<img src='";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/Delete-24.png"), "html", null, true);
        echo "' alt='Supprimer projet'></td>
                <td style='border-width: 1px;'>TOTAL</td>
                <td style='border-width: 1px;' >MOD</td>
                <td style='border-width: 1px;' colspan=\"2\">Absences</td>
                <td style='border-width: 1px;' >Titres repas</td>
                <td style='border-width: 1px;' >Forfaits déplacement</td>
                <td style='border-width: 1px;' >Primes panier</td>
                <td style='border-width: 1px;' rowspan=\"2\" id='feuillePointageCommentaires'>Commentaires</td>
            </tr>
            <tr>
                <td style=\"background: rgb(217,217,217); border-width: 1px;\"></td>
                <td class='project' style='border-left-width: 1px; border-top-width: 1px; border-bottom-width: 1px;'>%</td>
                <td style='border-width: 1px;'>%</td>
                <td style='border-width: 1px;' >h</td>
                <td style='border-width: 1px;' id='feuillePointageMatin'>Matin</td>
                <td style='border-width: 1px;' id='feuillePointageAM'>Après-midi</td>
                <td style='border-width: 1px;'>Nombre</td>
                <td style='border-width: 1px;'>Montant</td>
                <td style='border-width: 1px;'>Nombre</td>
            </tr>
            ";
        // line 184
        $context["frenchDays"] = array("Monday" => "Lundi", "Tuesday" => "Mardi", "Wednesday" => "Mercredi", "Thursday" => "Jeudi", "Friday" => "Vendredi", "Saturday" => "Samedi", "Sunday" => "Dimanche");
        // line 185
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monthDates"]) ? $context["monthDates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 186
            echo "                <tr>
                    <td class='dayDateCell' style=\"";
            // line 187
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " background:rgb(166,166,166); ";
            }
            echo " border-left-width: 1px; border-right-width: 1px;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["frenchDays"]) ? $context["frenchDays"] : null), twig_date_format_filter($this->env, $context["date"], "l"), array(), "array"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $context["date"], "d"), "html", null, true);
            echo "</td>
                    <td class=\"projectPercentageCell project\" ";
            // line 188
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " style=\"background:rgb(166,166,166);\" ";
            } else {
                echo " contenteditable='true' ";
            }
            echo "></td>
                    <td class=\"dailyTotalPercentageCell\" style=\"";
            // line 189
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " background:rgb(166,166,166); ";
            }
            echo " border-left-width: 1px; border-right-width: 1px;\">
                        ";
            // line 190
            if ((((twig_date_format_filter($this->env, $context["date"], "l") != "Saturday") && (twig_date_format_filter($this->env, $context["date"], "l") != "Sunday")) && !twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                // line 191
                echo "                            0.00
                        ";
            }
            // line 193
            echo "                    </td>
                    <td class='dailyHoursMod' ";
            // line 194
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " style=\"background:rgb(166,166,166); border-left-width: 1px; border-right-width: 1px;\" ";
            } else {
                echo " contenteditable='true' style=\"border-left-width: 1px; border-right-width: 1px;\" ";
            }
            echo "></td>
                    <td class='abscenceMatinSelector' style=\"";
            // line 195
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " background:rgb(166,166,166); ";
            }
            echo " border-left-width: 1px;\">
                        <select>
                            <option value=''></option>
                            <option value='AA'>AA</option>
                            <option value='TJ'>TJ</option>
                            <option value='AT'>AT</option>
                            <option value='MT'>MT</option>
                            <option value='PA'>PA</option>
                            <option value='CS'>CS</option>
                            <option value='CP'>CP</option>
                            <option value='AV'>AV</option>
                            <option value='RT'>RT</option>
                            <option value='MA'>MA</option>
                            <option value='PM'>PM</option>
                            <option value='RE'>RE</option>
                            <option value='Autre'>Autre</option>
                        </select>
                    </td>
                    <td  class='abscenceAMSelector' style=\"";
            // line 213
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " background:rgb(166,166,166); ";
            }
            echo " border-right-width: 1px;\">
                        <select>
                            <option value=''></option>
                            <option value='AA'>AA</option>
                            <option value='TJ'>TJ</option>
                            <option value='AT'>AT</option>
                            <option value='MT'>MT</option>
                            <option value='PA'>PA</option>
                            <option value='CS'>CS</option>
                            <option value='CP'>CP</option>
                            <option value='AV'>AV</option>
                            <option value='RT'>RT</option>
                            <option value='MA'>MA</option>
                            <option value='PM'>PM</option>
                            <option value='RE'>RE</option>
                            <option value='Autre'>Autre</option>
                        </select>
                    </td>
                    <td class='titreRepasNumberSelector' style=\"";
            // line 231
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " background:rgb(166,166,166); ";
            }
            echo " border-left-width: 1px; border-right-width: 1px;\">
                        ";
            // line 232
            if ((((twig_date_format_filter($this->env, $context["date"], "l") != "Saturday") && (twig_date_format_filter($this->env, $context["date"], "l") != "Sunday")) && !twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                // line 233
                echo "                            <select>
                                <option value='' selected='selected'></option>
                                <option value='1'>1</option>
                            </select>
                        ";
            }
            // line 238
            echo "                    </td>
                    <td class='forfaitsDeplacementMontant' ";
            // line 239
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " style=\"background:rgb(166,166,166);  border-left-width: 1px; border-right-width: 1px;\" contenteditable=true ";
            } else {
                echo " style=\"border-left-width: 1px; border-right-width: 1px;\" contenteditable=true ";
            }
            echo "></td>
                    <td class='primesPanierNumber' ";
            // line 240
            if ((((twig_date_format_filter($this->env, $context["date"], "l") == "Saturday") || (twig_date_format_filter($this->env, $context["date"], "l") == "Sunday")) || twig_in_filter($context["date"], (isset($context["joursFeries"]) ? $context["joursFeries"] : null)))) {
                echo " style=\"background:rgb(166,166,166);  border-left-width: 1px; border-right-width: 1px;\" ";
            } else {
                echo " style=\"border-left-width: 1px; border-right-width: 1px;\" contenteditable=true ";
            }
            echo "></td>
                    <td class='comments' style=\"border-left-width: 1px; border-right-width: 1px;\" contenteditable=true></td>
                </tr>        
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 244
        echo "            <tr>
                <td style='border: none;'></td>
                <td style='border: none;' ></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none; border-right: solid 1px;'></td>
                <td id='titreRepasTotalNumber' style=\"border-width: 2px; border-top: none; border-right-width: 1px; border-left-width: 1px;\">0</td>
                <td id='ForfaitDeplacementTotalMontant' style=\"border-width: 2px; border-top: none; border-left-width: 1px; border-right-width: 1px;\">0</td>
                <td id='PrimesPanierTotalNumber' style=\"border-width: 2px; border-top: none; border-left-width: 1px; border-right-width: 1px\">0</td>
                <td style='border: none; border-left: solid 1px black;'></td>    
            </tr>
            <tr>
                <td style='border: none;'></td>
                <td class='monthlyTotalPercentageCell' style='border: none; color: white;'></td>
                <td style='border: none;'></td>
                <td id='monthlyTotalHoursMod' style='border-bottom: none;'>0</td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>    
                <td style='border: none;'></td>    
            </tr>
            <tr>
                <td style='border: none;'></td>
                <td class='monthlyTotalCell' style='border: none; color: white;'></td>
                <td style='border: none;'></td>
                <td style='border-bottom: none;'>hmod</td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>
                <td style='border: none;'></td>    
                <td style='border: none;'></td>    
            </tr>
        </table>
        <div id='ajaxSearchAffairesDiv' style='position: absolute; top: 0; left: 0; background-color: white; border: 1px solid rgb(165, 172, 178); font-size: 0.8vw; display: none;'>
        </div>
        <div id='projectDeleteMenu'>
            <img src='";
        // line 284
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/Delete-24.png"), "html", null, true);
        echo "' alt='Supprimer projet'><p>Supprimer cette affaire</p>
        </div>
    </div>
    <div id='tableFeuillePointageTypesAbscencesDivContainer'>
        <table id='tableFeuillePointageTypesAbscences'>
            <tr>
                <td colspan=3 style='border-width: 2px;'>Types d'absences</td>
            </tr>
            <tr>
                <td style='border-top-width: 2px; border-left-width: 2px; border-bottom-width: 2px;'>Nombre</td>
                <td style='border-top-width: 2px; border-bottom-width: 2px;'>Code absence</td>
                <td style='border-top-width: 2px; border-right-width: 2px; border-bottom-width: 2px;'>Type absence</td>
            </tr>
            ";
        // line 297
        $context["typesAbscences"] = array("AA" => "Absence autorisées payées", "TJ" => "Accident trajet", "AT" => "Accident travail", "MT" => "Congé de maternité", "PA" => "Congé de paternité", "CS" => "Congé sans solde", "CP" => "Congés payés", "AV" => "Evènement familial", "RT" => "RTT", "MA" => "Maladie", "PM" => "Maladie professionnelle", "RE" => "Récupération (non indiquée au bulletin)", "Autre" => "A préciser en commentaire");
        // line 301
        echo "
            ";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typesAbscences"]) ? $context["typesAbscences"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["code"] => $context["type"]) {
            // line 303
            echo "                <tr>
                    <td class='nbAbscences' style='border-left-width: 2px; ";
            // line 304
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " border-bottom-width: 2px; ";
            }
            echo "'>0</td>
                    <td  ";
            // line 305
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " style='border-bottom-width: 2px;' ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["code"], "html", null, true);
            echo "</td>
                    <td style='border-right-width: 2px; ";
            // line 306
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo " border-bottom-width: 2px; ";
            }
            echo "'>";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "</td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['code'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "        </table>

        <table id='tableFeuillePointageTitreTransport'>
            <tr>
                <td colspan='3' style='border-width: 2px;'>Titre de transport</td>
            </tr>
            <tr>
                <td style='border-width: 2px;'>Montant total</td>
                <td style='border-width: 2px;'>Prise en charge employeur 50%*</td>
                <td style='border-width: 2px;'>Justificatif</td>
            </tr>
            <tr>
                <td id='titreTransportMontant' style='border-width: 2px;' contenteditable=true></td>
                <td id='titreTransportTotalMontant' style='border-width: 2px;'>0.00</td>
                <td id='titreTransportJustificatif' style='border-width: 2px;'>
                    <form id='sendTransportJustificatifForm' enctype='multipart/form-data' style='display: none;'>           
                        <input name='file' type='file' accept=\".pdf, application/pdf\">
                        <button type='submit'>Submit</button>
                    </form>
                    <button type='button' id='sendTransportJustificatifFormButton' class='boutonFormulaire'>Envoyer un justificatif</button>
                    <button type='button' id='uploadLoaderButton' style=\"background-image: url('";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/savingNotification.svg"), "html", null, true);
        echo "'); \">Envoyer un justificatif</button>
                    <div id='deleteJustificatifButton'>Justificatif envoyé &#10004;<span id='downloadJustificatifButtonSpan'>Voir</span><span id='deleteJustificatifButtonSpan' onclick='ajaxDeleteJustificatifTransport();'>Supprimer</span></div>
                </td>
            </tr>
        </table>

        <div id=\"divJustificatifs\">
            <button id=\"addJustificatifButton\" class=\"boutonFormulaire\" onclick=\"addJustificatifFile();\">Ajouter/voir justificatif(s)</button>
        </div>

        <div id=\"divRegularisation\">
            <p>Régularisation</p>
            <div id=\"divRegularisationText\" contenteditable=\"true\"></div>
        </div>

        <table id='tableFeuillePointageSignature' style=\"display: none;\">
            <tr>
                <td style='border-width: 2px;'>Signature collaborateur</td>
                <td id='signatureCollaborateur' colspan=2 style='border-width: 2px;' contenteditable=true></td>
            </tr>
            <tr>
                <td rowspan=2 style='border-width: 2px;'>Signature supérieur hiérarchique</td>
                <td style='border-width: 2px; width: 50%; border-right: none;'>Nom et prénom:</td>
                <td style='border-width: 2px; width: 50%; border-left: none;' contenteditable=true></td>
            </tr>
            <tr>
                <td colspan=2 style='border-width: 2px; height: 2vw;' contenteditable=true></td>
            </tr>
        </table>

        <form action=\"#\">
            <div>
                <button type=\"button\" id=\"form_Valider\" name=\"form[Valider]\" class=\"boutonCompilation\">Valider la feuille de pointage</button>
            </div>
        </form>
    </div>

    <script>
        \$(window).load(function () {
            IECheck();
            hidePointageTables();
            ajaxGetManagerList();
            ajaxGetPointageList();
            getNewDate();
            displayDailyProjectsTotalPercentage();
            dispayMonthlyTotalHoursMod();
            displayMonthlyTotalTitresRepas();
            displayMonthlyTotalForfaitsDeplacement();
            displayMonthlyTotalPrimesPanier();
            displayTotalAbscences();
            displayTotalTitreTransport();
            checkAbscencesTitreRepas();
            onePerkOnly();
            getGXAffaires();
            showAffaireName();
            addProjectColumn();
            deleteProjectColumn();
            fixedHorizontalHeader();
            fixedVerticalHeader();
            nextLineOnEnter();
            cloneAbsenceAMToPM();
            ajaxUploadJustificatifTransport();
            copyMultipleCell();
            saveCSV();
            setSavedDateAndAgency();
            getSavedDateAndAgency();
            ajaxSaveData();
        });

        // Affiche un écran de chargement lors de l'exéction de requettes ajax lourdes.
        \$(document).ajaxSend(function (event, request, settings) {
            // Liens des requêtes de chargement de données.
            var loadRequestUrls = [
                \"pointage-ajax-set-date-by-pointage-number\",
                \"pointage-ajax-get-data-by-username\",
                \"pointage-ajax-get-status\",
                \"pointage-ajax-get-data-by-username\",
                \"ajax-get-pointage-list-aa-gestion\",
                \"ajax-get-managers-list-aa-gestion\",
                \"ajax-gestion-pointage-rh-mode\"
            ];

            // Liens des requêtes de sauvegarde de données.
            var saveRequestUrls = [
                \"pointage-ajax-save-data\",
                \"ajax-save-regularisation\"
            ];

            // Url relative de la requête en cours.
            var ajaxUrl = settings.url.substr(settings.url.lastIndexOf('/') + 1);

            // Si la requête en cours est une requête de chargement...
            if (\$.inArray(ajaxUrl, loadRequestUrls) > -1) {
                \$('#loadingContent').show(); // On affiche la roue de chargement.
            }

            // Si la requête en cours est une requête de sauvegarde...
            if (\$.inArray(ajaxUrl, saveRequestUrls) > -1) {
                // On affiche la roue de sauvegarde.
                \$('#pointageSavingNotification').finish().css('display', 'inline-block');
                savingNotification();
            }
        });

        // Cache l'écran de chargement quand les requêtes ajax de chargement de la page sont terminées.
        \$(document).ajaxComplete(function () {
            if (\$.active <= 1) {
                \$('#loadingContent').hide();
                \$('#pointageSavingNotification').finish().delay(2000).fadeOut();
            }
        });

        // Cache les tables de la feuille de pointage.
        function hidePointageTables() {
            \$('#tableFeuillePointageDivContainer').hide();
            \$('#tableFeuillePointageTypesAbscencesDivContainer').hide();
            \$('#form_Manager, #form_Month, #form_Year, #form_Pointage, #form_Etablissement').change(function () {
                if (\$('#form_Manager option:selected').val() === '' || \$('#form_Etablissement option:selected').val() === '' || \$('#form_Month option:selected').val() === '' || \$('#form_Year option:selected').val() === '' || \$('#form_Pointage option:selected')) {
                    \$('#tableFeuillePointageDivContainer').hide();
                    \$('#tableFeuillePointageTypesAbscencesDivContainer').hide();
                }
            });
        }

        // Récupère la liste des managers en fonction de l'établissement.
        function ajaxGetManagerList() {
            // Lorsque l'on change la valeur de mois, année ou établissement.
            \$('#form_Year, #form_Month, #form_Etablissement').change(function () {
                // On supprime les options déjà présente.
                \$('#form_Manager option').remove();

                // On ajoute un placeholder.
                \$('#form_Manager').append(\$('<option>', {
                    value: '',
                    text: \"Choisir un manager\"
                }));

                // Si un mois, une année et un etablissement sont séléctionné...
                if (\$('#form_Month').val() !== '' && \$('#form_Year').val() !== '' && \$('#form_Etablissement').val() !== '') {
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 470
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_managers_list_aa_gestion");
        echo "',
                        data: {etablissement: \$('#form_Etablissement').val(), userStatus: '";
        // line 471
        echo twig_escape_filter($this->env, (isset($context["userStatus"]) ? $context["userStatus"] : null), "html", null, true);
        echo "', rhMode: \$('#RHMode').is(':checked')},
                        success: function (response) {
                            // On récupére la liste des pointages sous forme d'objet.
                            var items = JSON.parse(response);

                            // Pour chaque pointages...
                            \$.each(items, function (id, label) {
                                // On ajoute une option au sélécteur de manager.
                                \$('#form_Manager').append(\$('<option>', {
                                    value: id,
                                    text: label
                                }));
                            });
                        }
                    });
                }
            });
        }

        // Récupére la liste des pointages en attente de validation en fonction du mois, de l'année et de l'établissement.
        function ajaxGetPointageList() {
            // Lorsque l'on change la valeur de mois, année ou établissement.
            \$('#form_Manager, #form_Year, #form_Month, #form_Etablissement').change(function () {
                \$('#form_Pointage option').remove(); // On supprime les options déjà présente.
                if (\$('#form_Month').val() !== '' && \$('#form_Year').val() !== '' && \$('#form_Etablissement').val() !== '' && \$('#form_Manager').val() !== '') {
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 498
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_pointages_list_aa_gestion");
        echo "',
                        data: {month: \$('#form_Month').val(), year: \$('#form_Year').val(), etablissement: \$('#form_Etablissement').val(), manager: \$('#form_Manager').val(), userStatus: '";
        // line 499
        echo twig_escape_filter($this->env, (isset($context["userStatus"]) ? $context["userStatus"] : null), "html", null, true);
        echo "', rhMode: \$('#RHMode').is(':checked')},
                        success: function (response) {
                            var items = JSON.parse(response); // On récupére la liste des pointages sous forme d'objet.
                            // Pour chaque pointages...
                            \$.each(items, function (id, label) {
                                // On ajoute une option au sélécteur de pointages avec l'ID du pointage en valeur et le nom du collaborateur en label.
                                \$('#form_Pointage').append(\$('<option>', {
                                    value: id,
                                    text: label
                                }));
                            });
                        }
                    });
                }
            });
        }

        // Met à jours les cellules des valeurs totals.
        function tableEventHandler() {
            displayDailyProjectsTotalPercentage();
            function displayDailyProjectsTotalPercentage() {
                // Colore en rouge les cellules dont le contenu n'est pas un nombre.
                function checkCellContentValidity(cell) {
                    if (isNaN(parseFloat(\$(cell).text(), 10)) || parseFloat(\$(cell).text()) > 100) {
                        if (\$(cell).text() !== '') {
                            \$(cell).css('background-color', 'red');
                        } else {
                            if (\$(cell).attr('contenteditable') === 'true') {
                                \$(cell).css('background-color', 'white');
                            } else {
                                \$(cell).css('background-color', 'rgb(166,166,166)');
                            }
                        }
                    } else {
                        \$(cell).css('background-color', 'white');
                    }
                }

                // Affiche la valeur total des cellules d'une même ligne ou 'Erreur' si celle-ci n'est pas valide.
                function checkTotalValue(cell, total) {
                    if (\$(cell).css('background-color') !== 'rgb(166, 166, 166)') {
                        if (isNaN(total) || total > 100) {
                            \$(cell).text('Erreur');
                            \$(cell).css('background', 'red');
                        } else {
                            \$(cell).text(total.toFixed(2));
                            \$(cell).css('background', 'white');
                        }
                    }
                }

                \$('.dailyTotalPercentageCell').each(function () {
                    var total = 0;
                    \$(this).siblings('.projectPercentageCell[contenteditable=true]').each(function () {
                        checkCellContentValidity(this);
                        if (\$(this).text() !== '') {
                            total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);

                        }
                    });
                    checkTotalValue(this, total);
                });
            }

            dispayMonthlyTotalHoursMod();
            function dispayMonthlyTotalHoursMod() {
                var total = 0;
                var error = false;
                \$('.dailyHoursMod').each(function () {
                    if (\$(this).css('background-color') !== 'rgb(166, 166, 166)') {
                        if (\$(this).text() !== '') {
                            if (Math.floor(\$(this).text()) == \$(this).text() && \$.isNumeric(\$(this).text())) {
                                \$(this).css('background-color', 'white');
                                total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                            } else {
                                \$(this).css('background-color', 'red');
                                error = true;
                            }
                        } else {
                            \$(this).css('background-color', 'white');
                        }
                    }
                });
                if (error) {
                    \$('#monthlyTotalHoursMod').css('background-color', 'red');
                    \$('#monthlyTotalHoursMod').text('Erreur');
                } else {
                    \$('#monthlyTotalHoursMod').css('background-color', 'white');
                    \$('#monthlyTotalHoursMod').text(total.toFixed(2));
                }
            }

            displayMonthlyTotalTitresRepas();
            function displayMonthlyTotalTitresRepas() {
                var total = 0;
                \$('.titreRepasNumberSelector select').each(function () {
                    if (\$(this).find('option:selected').val() !== '') {
                        total = parseInt(total, 10) + parseInt(\$(this).find('option:selected').val(), 10);
                    }
                });
                \$('#titreRepasTotalNumber').text(total);
            }

            displayMonthlyTotalForfaitsDeplacement();
            function displayMonthlyTotalForfaitsDeplacement() {
                var total = 0;
                \$('.forfaitsDeplacementMontant').each(function () {
                    if (\$(this).text() !== '') {
                        total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                    }
                });
                \$('#ForfaitDeplacementTotalMontant').text(total.toFixed(2));
            }

            displayMonthlyTotalPrimesPanier();
            function displayMonthlyTotalPrimesPanier() {
                var total = 0;
                \$('.primesPanierNumber').each(function () {
                    if (\$(this).text() !== '') {
                        total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                    }
                });
                \$('#PrimesPanierTotalNumber').text(total.toFixed(2));
            }

            displayTotalAbscences();
            function displayTotalAbscences() {

                // Calcule le total de chaque type d'abscences et affiche la valeur dans la cellule correspondante.
                function getAbscencesCount(nbAbscencesCell) {
                    var codeAbsences = \$(nbAbscencesCell).next().text();
                    var total = 0;

                    \$('.abscenceMatinSelector').each(function () {
                        if (codeAbsences === \$(this).find('select option:selected').val()) {
                            total = parseFloat(total, 10) + parseFloat(0.5, 10);
                        }
                    });
                    \$('.abscenceAMSelector').each(function () {
                        if (codeAbsences === \$(this).find('select option:selected').val()) {
                            total = parseFloat(total, 10) + parseFloat(0.5, 10);
                        }
                    });
                    \$(nbAbscencesCell).text(total);
                }


                \$('.nbAbscences').each(function () {
                    getAbscencesCount(this);
                });
            }

            displayTotalTitreTransport();
            function displayTotalTitreTransport() {
                var total = 0;
                if (\$('#titreTransportMontant').text() !== '') {
                    total = parseFloat(\$('#titreTransportMontant').text(), 10) / 2;
                }
                \$('#titreTransportTotalMontant').text(total.toFixed(2));
            }

            onePerkOnly();
            function onePerkOnly() {
                // Lors d'un changement sur les selecteur de titre repas.
                \$('.titreRepasNumberSelector select').each(function () {
                    // Si la valeur du sélécteur est à '1'.
                    if (\$(this).val() === '1') {
                        // On change la couleur de fond des cases de forfaits déplacement et de primes panier voisines et on bloque leur edition.
                        \$(this).parent('.titreRepasNumberSelector').siblings('.abscenceMatinSelector').find('select').val('');
                        //\$(this).parent('.titreRepasNumberSelector').siblings('.abscenceMatinSelector').find('select').attr('disabled', true);
                        \$(this).parent('.titreRepasNumberSelector').siblings('.abscenceAMSelector').find('select').val('');
                        //\$(this).parent('.titreRepasNumberSelector').siblings('.abscenceAMSelector').find('select').attr('disabled', true);
                        \$(this).parent('.titreRepasNumberSelector').siblings('.forfaitsDeplacementMontant').text('');
                        \$(this).parent('.titreRepasNumberSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                        \$(this).parent('.titreRepasNumberSelector').siblings('.primesPanierNumber').text('');
                        \$(this).parent('.titreRepasNumberSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                    }
                });

                \$('.abscenceMatinSelector select').each(function () {
                    if (\$(this).val() !== '') {
                        // On change la couleur de fond des cases de forfaits déplacement et de primes panier voisines et on bloque leur edition.
                        \$(this).parent('.abscenceMatinSelector').siblings('.titreRepasNumberSelector').find('select').val('');
                        //\$(this).parent('.abscenceMatinSelector').siblings('.titreRepasNumberSelector').find('select').attr('disabled', true);
                        \$(this).parent('.abscenceMatinSelector').siblings('.forfaitsDeplacementMontant').text('');
                        \$(this).parent('.abscenceMatinSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                        \$(this).parent('.abscenceMatinSelector').siblings('.primesPanierNumber').text('');
                        \$(this).parent('.abscenceMatinSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                    }
                });

                \$('.abscenceAMSelector select').each(function () {
                    if (\$(this).val() !== '') {
                        // On change la couleur de fond des cases de forfaits déplacement et de primes panier voisines et on bloque leur edition.
                        \$(this).parent('.abscenceAMSelector').siblings('.titreRepasNumberSelector').find('select').val('');
                        //\$(this).parent('.abscenceAMSelector').siblings('.titreRepasNumberSelector').find('select').attr('disabled', true);
                        \$(this).parent('.abscenceAMSelector').siblings('.forfaitsDeplacementMontant').text('');
                        \$(this).parent('.abscenceAMSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                        \$(this).parent('.abscenceAMSelector').siblings('.primesPanierNumber').text('');
                        \$(this).parent('.abscenceAMSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                    }
                });

                // Lorsqu'on écris dans une case de forfait déplacement.
                \$('.forfaitsDeplacementMontant').each(function () {
                    // Si la case n'est pas vide.
                    if (\$(this).text() !== '') {
                        \$(this).siblings('.abscenceMatinSelector').find('select').val('');
                        //\$(this).siblings('.abscenceMatinSelector').find('select').attr('disabled', true);
                        \$(this).siblings('.abscenceAMSelector').find('select').val('');
                        //\$(this).siblings('.abscenceAMSelector').find('select').attr('disabled', true);
                        \$(this).siblings('.titreRepasNumberSelector').find('select').val('');
                        //\$(this).siblings('.titreRepasNumberSelector').find('select').attr('disabled', true);
                        \$(this).siblings('.primesPanierNumber').text('');
                        \$(this).siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                    }
                });

                // Lorsqu'on écris dans une case de prime panier.
                \$('.primesPanierNumber').each(function () {
                    // Si la case n'est pas vide.
                    if (\$(this).text() !== '') {
                        \$(this).siblings('.abscenceMatinSelector').find('select').val('');
                        //\$(this).siblings('.abscenceMatinSelector').find('select').attr('disabled', true);
                        \$(this).siblings('.abscenceAMSelector').find('select').val('');
                        //\$(this).siblings('.abscenceAMSelector').find('select').attr('disabled', true);
                        \$(this).siblings('.titreRepasNumberSelector').find('select').val('');
                        //\$(this).siblings('.titreRepasNumberSelector').find('select').attr('disabled', true);
                        \$(this).siblings('.forfaitsDeplacementMontant').text('');
                        \$(this).siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                    }
                });
            }
        }

        // Lis le contenu des cellules du tableau et renvoie le résultat sous forme de chaine pour sauvegarde en base de données.
        function ajaxSaveData() {
            // Initialisation d'une variable de timer pour lancer la sauvegarde après # temps sans typing.
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            \$('#tableFeuillePointage, #tableFeuillePointageTypesAbscencesDivContainer').on('keyup paste', 'td[contenteditable=true]', function () {
                delay(function () {
                    var data = {};
                    data['contenteditable'] = [];
                    data['select'] = [];
                    data['project'] = [];
                    data['nbProject'] = \$('#tableFeuillePointage tr:nth-child(3) .project').length;

                    \$('#tableFeuillePointageDivContainer td[contenteditable=true]:not(#signatureCollaborateur, .project, #ajaxSearchAffairesDiv, #projectDeleteMenu), #tableFeuillePointageTypesAbscencesDivContainer td[contenteditable=true]:not(#signatureCollaborateur, .project, #ajaxSearchAffairesDiv, #projectDeleteMenu)').each(function (index) {
                        data['contenteditable'][index] = \$(this).text();
                        //\$(this).css('background-color', 'orange');
                        //\$(this).text(index);
                    });

                    \$('#tableFeuillePointageDivContainer select:not(#pointage_month_selector, #pointage_year_selector)').each(function (index) {
                        data['select'][index] = \$(this).val();
                        //\$(this).css('background-color', 'orange');
                    });

                    \$('.project[contenteditable=true]').each(function (index) {
                        data['project'][index] = \$(this).text();
                    });

                    var serializedData = JSON.stringify(data);

                    console.log(\"AjaxGetPointageStatus: \" + \$('#form_Pointage').val());

                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 774
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_save_data");
        echo "',
                        data: {user: \$('#form_Pointage').val(), month: \$('#pointage_month_selector option:selected').val(), year: \$('#pointage_year_selector option:selected').val(), data: serializedData, signatureCollaborateur: \$('#signatureCollaborateur').text()}
                    });
                }, 1500);
            });

            \$('#tableFeuillePointage').on('change', 'select:not(#pointage_month_selector, #pointage_year_selector)', function () {
                var data = {};
                data['contenteditable'] = [];
                data['select'] = [];
                data['project'] = [];
                data['nbProject'] = \$('#tableFeuillePointage tr:nth-child(3) .project').length;

                \$('#tableFeuillePointageDivContainer td[contenteditable=true]:not(#signatureCollaborateur, .project, #ajaxSearchAffairesDiv, #projectDeleteMenu), #tableFeuillePointageTypesAbscencesDivContainer td[contenteditable=true]:not(#signatureCollaborateur, .project)').each(function (index) {
                    data['contenteditable'][index] = \$(this).text();
                    //\$(this).css('background-color', 'orange');
                    //\$(this).text(index);
                });

                \$('#tableFeuillePointageDivContainer select:not(#pointage_month_selector, #pointage_year_selector)').each(function (index) {
                    data['select'][index] = \$(this).val();
                    //\$(this).css('background-color', 'orange');
                });

                \$('.project[contenteditable=true]').each(function (index) {
                    data['project'][index] = \$(this).text();
                });

                var serializedData = JSON.stringify(data);

                console.log(\"ajaxGetPointageStatus: \" + \$('#form_Pointage').val());

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 808
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_save_data");
        echo "',
                    data: {user: \$('#form_Pointage').val(), month: \$('#pointage_month_selector option:selected').val(), year: \$('#pointage_year_selector option:selected').val(), data: serializedData}
                });
            });

            // Détecte l'édition de texte de la case \"Régularisation et sauvegarde les changements en base de donnée.
            \$('#tableFeuillePointageTypesAbscencesDivContainer').on('keyup paste', '#divRegularisation #divRegularisationText', function () {
                // On récupére le texte de la case.
                var regularisationText = \$(this).text();

                // Permet d'ajouter un temps d'attente avant de lancer la sauvegarde.
                delay(function () {
                    console.log(\"Sauvegarde régularisation: \" + \$('#form_Pointage').val());

                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 824
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_save_regularisation");
        echo "',
                        data: {user: \$('#form_Pointage').val(), month: \$('#pointage_month_selector option:selected').val(), year: \$('#pointage_year_selector option:selected').val(), regularisationText: regularisationText}
                    });
                }, 1500);
            });
        }

        // Affiche les jours du moi en fonction du mois et de l'année séléctionées.
        function getNewDate() {

            \$('#form_Pointage').change(function () {
                deleteProjectColumn();
                resetCellsValues();
                ajaxGetNewDateByPointageNumber();
            });

            // Supprime les colonnes existantes de projets suplémentaires et rétablie le colspan de \"Operationnel\" à 2.
            function deleteProjectColumn() {
                var firstColumnIndex = \$('#tableFeuillePointage tr:nth-child(2) .project').first().index() + 2;
                var lastColumnIndex = \$('#tableFeuillePointage tr:nth-child(2) .project').last().index() + 1;
                \$('#tableFeuillePointage tr:nth-child(n+2) td:nth-child(n+' + firstColumnIndex + '):nth-child(-n+' + lastColumnIndex + ')').remove();
                \$('#operationnel').attr('colspan', 2);
            }

            // Remet à zero les valeurs de cellules.
            function resetCellsValues() {
                \$('[contenteditable]').text('');
                \$('.project').first().text(\"Nouvelle Affaire\");
                \$('.dailyTotalPercentageCell, .monthlyTotalPercentageCell, .monthlyTotalCell, #ForfaitDeplacementTotalMontant, #PrimesPanierTotalNumber, #titreTransportTotalMontant').text(0.00);
                \$('#monthlyTotalHoursMod, #titreRepasTotalNumber, .nbAbscences').text(0);
                \$('#tableFeuillePointage select:not(#pointage_month_selector, #pointage_year_selector)').val('');
            }

            // Récupère les jours en fonction du moi et de l'année définis par la feuille de pointage sélectionnée.
            function ajaxGetNewDateByPointageNumber() {
                \$.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: '";
        // line 862
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_set_date_by_pointage_number");
        echo "',
                    data: {pointageNumber: \$('#form_Pointage option:selected').val()},
                    success: function (response) {

                        // Ajout/supprime des lignes en fonction du nombre de jours du mois.
                        if (\$('.dayDateCell').length !== response['dates'].length) {
                            var difference = response['dates'].length - \$('.dayDateCell').length;
                            if (difference > 0) {
                                for (var i = 0; i < difference; i++) {
                                    var lastTr = \$('.dayDateCell').last().parent('tr');
                                    lastTr.after(lastTr.clone());
                                }
                            } else if (difference < 0) {
                                for (var i = 0; i < Math.abs(difference); i++) {
                                    var lastTr = \$('.dayDateCell').last().parent('tr');
                                    lastTr.remove();
                                }
                            }
                        }

                        \$('.dayDateCell').each(function (index) {
                            \$(this).transition({
                                rotateX: '360deg'
                            }, function () {
                                \$(this).css('transform', '');
                            });
                            if (response['dates'][index]['date'] === undefined) {
                                \$(this).html('');
                                \$(this).parent('tr').find('td').css('background', 'white');
                            } else {
                                \$(this).html(response['dates'][index]['date']);
                                if (response['dates'][index]['date'].indexOf('Samedi') >= 0 || response['dates'][index]['date'].indexOf('Dimanche') >= 0 || response['dates'][index]['ferie'] === true) {
                                    \$(this).parent('tr').find('td').css('background', 'rgb(166,166,166)');
                                    \$(this).next('td').attr('contenteditable', false);
                                    \$(this).siblings('.dailyHoursMod').attr('contenteditable', false);
                                    \$(this).siblings('.dailyTotalPercentageCell').html('');
                                    \$(this).siblings('.abscenceMatinSelector').html(\"<select><option value=''></option><option value='AT'>AT</option><option value='MT'>MT</option><option value='PA'>PA</option><option value='MA'>MA</option></select>\");
                                    \$(this).siblings('.abscenceAMSelector').html(\"<select><option value=''></option><option value='AT'>AT</option><option value='MT'>MT</option><option value='PA'>PA</option><option value='MA'>MA</option></select>\");
                                    \$(this).siblings('.titreRepasNumberSelector').html('');
                                    \$(this).siblings('.forfaitsDeplacementMontant').attr('contenteditable', true);
                                    \$(this).siblings('.primesPanierNumber').attr('contenteditable', false);
                                    \$(this).siblings('.comments').attr('contenteditable', true);
                                    \$(this).siblings('.comments').css('background', 'white');
                                } else {
                                    \$(this).parent('tr').find('td').css('background', 'white');
                                    \$(this).next('td').attr('contenteditable', true);
                                    \$(this).siblings('.dailyHoursMod').attr('contenteditable', true);
                                    \$(this).siblings('.abscenceMatinSelector').html(\"<select><option value=''></option> <option value='AA'>AA</option><option value='TJ'>TJ</option><option value='AT'>AT</option><option value='MT'>MT</option> <option value='PA'>PA</option> <option value='CS'>CS</option><option value='CP'>CP</option> <option value='AV'>AV</option> <option value='RT'>RT</option> <option value='MA'>MA</option> <option value='PM'>PM</option> <option value='RE'>RE</option> <option value='Autre'>Autre</option></select>\");
                                    \$(this).siblings('.abscenceAMSelector').html(\"<select><option value=''></option><option value='AA'>AA</option><option value='TJ'>TJ</option><option value='AT'>AT</option><option value='MT'>MT</option><option value='PA'>PA</option><option value='CS'>CS</option><option value='CP'>CP</option><option value='AV'>AV</option><option value='RT'>RT</option><option value='MA'>MA</option><option value='PM'>PM</option><option value='RE'>RE</option><option value='Autre'>Autre</option></select>\");
                                    \$(this).siblings('.titreRepasNumberSelector').html(\"<select><option value=''></option><option value='1'>1</option></select>\");
                                    \$(this).siblings('.forfaitsDeplacementMontant').attr('contenteditable', true);
                                    \$(this).siblings('.primesPanierNumber').attr('contenteditable', true);
                                    \$(this).siblings('.comments').attr('contenteditable', true);
                                }
                            }
                        });
                        ajaxGetData(response['username'], response['month'], response['year']);
                    }
                });
            }
        }

        // Récupère les données du tableau en base de données et les injectes dans les cellules.
        function ajaxGetData(user, month, year) {
            \$.ajax({
                type: 'POST',
                url: '";
        // line 928
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_data_by_username");
        echo "',
                data: {username: user, month: month, year: year},
                success: function (response) {
                    if (response !== '') {
                        var data = JSON.parse(response);
                        // Ajoute un td après chaque td du dernier projet.
                        function addTd() {
                            var total = \$('#tableFeuillePointage').find('tr').length;
                            \$('#tableFeuillePointage').find('tr').each(function (index) {
                                if (index === 1) {
                                    \$(this).find('.project').last().after(\"<td class='project' style='border-top-width: 1px; border-bottom-width: 1px;' contenteditable=true>Nouvelle Affaire></td>\");
                                } else if (index === 2) {
                                    \$(this).find('.project').last().after(\"<td class='project' style='border-top-width: 1px; border-bottom-width: 1px;'>%</td>\");
                                } else if (index === total - 2) {
                                    //\$('.monthlyTotalPercentageCell').last().css('background-color', 'orange');
                                    \$('.monthlyTotalPercentageCell').last().after(\"<td class='monthlyTotalPercentageCell' style='border: none; color:white;'>0.00</td>\");
                                } else if (index === total - 1) {
                                    \$('.monthlyTotalCell').last().after(\"<td class='monthlyTotalCell' style='border: none; color:white;'>0.00</td>\");
                                    //\$('.monthlyTotalCell').last().css('background-color', 'orange');
                                } else if (index === total - 3) {
                                    \$('#titreRepasTotalNumber').before(\"<td style='border: none;'></td>\");
                                    //\$('.monthlyTotalCell').last().css('background-color', 'orange');
                                } else if (index > 1 && index < total - 3) {
                                    var background = \$(this).find('.project').last().css('background-color');
                                    var contenteditable = \$(this).find('.project').last().attr('contenteditable');
                                    //alert(contenteditable);
                                    \$(this).find('.project').last().after(\"<td class='projectPercentageCell project'></td>\");
                                    \$(this).find('.project').last().css('background-color', background);
                                    \$(this).find('.project').last().attr('contenteditable', contenteditable);
                                }
                            });
                        }

                        // Incrémente le colspan du header des projets de 1.
                        function setColSpan() {
                            var colspan = parseInt(\$('#operationnel').attr('colspan'), 10);
                            \$('#operationnel').attr('colspan', colspan + 1);
                        }

                        // Si le pointage contient des données.
                        if (data !== null) {
                            if (data['nbProject'] !== undefined) {
                                for (var i = 0; i < data['nbProject'] - 1; i++) {
                                    addTd();
                                    setColSpan();
                                }
                            }

                            \$('#signatureCollaborateur').text(data['signatureCollaborateur']);
                            if (data['contenteditable'] !== undefined) {
                                \$('td[contenteditable=true]:not(#signatureCollaborateur, .project)').each(function (index) {
                                    \$(this).text(data['contenteditable'][index]);
                                });
                            }

                            if (data['select'] !== undefined) {
                                \$('#tableFeuillePointage select:not(#pointage_month_selector, #pointage_year_selector)').each(function (index) {
                                    \$(this).val(data['select'][index]);
                                });
                            }

                            if (data['project'] !== undefined) {
                                \$('.project[contenteditable=true]').each(function (index) {
                                    \$(this).text(data['project'][index]);
                                });
                            }

                            if (data['justificatifTransport'] !== undefined) {
                                // On cache le bouton d'upload, on attribut l'id du justificatif au bouton de suppression, on attribut le lien de téléchargement du fichier au bouton d'affichage et on l'affiche.
                                \$('#sendTransportJustificatifFormButton').hide();
                                \$('#deleteJustificatifButtonSpan').attr('idjustificatif', data['justificatifTransport']);
                                \$('#downloadJustificatifButtonSpan').attr('onclick', \"window.location = '\" + '";
        // line 999
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_download_justificatif_transport");
        echo "/' + data['justificatifTransport'] + \"';\");
                                \$('#deleteJustificatifButton').show();
                            } else {
                                // On affiche le bouton d'upload, on supprime les attribut d'id du justificatif, on cache le bouton de suppression, on supprime l'attribut du lien de téléchargement du fichier.
                                \$('#sendTransportJustificatifFormButton').show();
                                \$('#deleteJustificatifButtonSpan').removeAttr('idjustificatif');
                                \$('#downloadJustificatifButtonSpan').removeAttr('onclick');
                                \$('#deleteJustificatifButton').hide();
                            }

                            // Si il existe un texte de régularisation...
                            if (data['regularisation'] !== undefined) {
                                \$('#divRegularisationText').text(data['regularisation']); // On l'assigne à la case de régularisation.
                            }
                        }

                        // On change la le mois et l'année indiqué sur la feuille de pointage.
                        \$('#pointage_month_selector').val(\$('#form_Month').val());
                        \$('#pointage_year_selector').val(\$('#form_Year').val());

                        deleteProjectColumn();
                        tableEventHandler();
                        ajaxGetPointageStatus(user, month, year);
                    }
                }
            }).done(function () {
                //\$(\"#tableFeuillePointage\").tableHeadFixer({'head': false, 'left': 1});
                \$('#tableFeuillePointageDivContainer').show();
                \$('#tableFeuillePointageTypesAbscencesDivContainer').show();
                \$('#pointage_month_selector').attr('disabled', true);
                \$('#pointage_year_selector').attr('disabled', true);
            });
        }

        // Vérifie le status de la feuille de pointage, colore la barre d'avancement en conséquence et vérouille la feuille si nécessaire.
        function ajaxGetPointageStatus(user, month, year) {
            \$('td[contenteditable=true]').css('cursor', 'initial');
            \$('td[contenteditable=true]').removeAttr('onkeydown');
            \$('select:not(#pointage_month_selector, #pointage_year_selector, #form_User, #form_Month, #form_Year, #form_Pointage)').removeAttr('disabled');
            \$('#addProject').show();
            \$('#form_Valider').show();

            \$('.pointageStatusLine div').width('10%');
            \$(\".pointageStatusCircle\").css('background-color', 'lightgrey');
            \$(\".pointageStatusCircle\").filter(function () {
                return  \$(this).attr(\"step\") <= 0;
            }).css('background-color', 'green');
            \$.ajax({
                type: 'POST',
                url: '";
        // line 1048
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_status");
        echo "',
                data: {username: user, month: month, year: year},
                success: function (response) {
                    var width = null;
                    var cercleNb = null;

                    switch (response) {
                        case '0':
                            width = 10;
                            cercleNb = 0;
                            break;
                        case '1':
                            width = 30;
                            cercleNb = 1;
                            break;
                        case '2':
                            width = 30;
                            cercleNb = 1;
                            break;
                        case '3':
                            width = 50;
                            cercleNb = 2;
                            break;
                        case '4':
                            width = 70;
                            cercleNb = 3;
                            break;
                        case '5':
                            width = 100;
                            cercleNb = 4;
                            break;
                    }

                    \$('.pointageStatusLine div').width(width + '%');
                    \$(\".pointageStatusCircle\").filter(function () {
                        return  \$(this).attr(\"step\") <= cercleNb;
                    }).css('background-color', 'green');

                    if (response !== '1' && response !== '') {
                        \$('td[contenteditable=true]').css('cursor', 'default');
                        \$('td[contenteditable=true]').attr('onkeydown', \"return false\");
                        \$('select:not(#pointage_month_selector, #pointage_year_selector, #form_User, #form_Month, #form_Year, #form_Pointage)').attr('disabled', 'disabled');
                        \$('#addProject').hide();
                        \$('#form_Valider').hide();
                    } else {
                        // Désactive les précent binding du bouton de validation.
                        \$('#form_Valider').unbind('click');

                        // Lors du clique sur le bouton de validation...
                        \$('#form_Valider').click(function (event) {
                            event.preventDefault();

                            // On affiche une fenêtre de confirmation de la validation de la feuille de pointage.
                            \$(\"#pointageAlertText\").text('Confirmer la validation de la feuille de pointage ? Celle-ci ne sera plus modifiable.');
                            \$(\"#pointageAlert\").dialog({
                                resizable: false,
                                height: \"auto\",
                                width: \"30%\",
                                modal: true,
                                draggable: false,
                                dialogClass: \"pointage-alert-content-class\",
                                title: \"Confirmer la validation ?\",
                                buttons: {
                                    // Si l'utilisateur valide...
                                    \"Valider\": function () {
                                        \$(this).dialog(\"close\");
                                        ajaxPointageAssistanteAgenceValidation(user, month, year);
                                    },
                                    // Si l'utilisateur annule, on ferme la fenêtre.
                                    \"Annuler\": function () {
                                        \$(this).dialog(\"close\");
                                    }
                                }
                            });
                            \$('.ui-dialog :button').blur();
                        });
                    }
                }
            });
        }

        // Valide la feuille de pointage d'un collaborateur et sauvegarde les données d'absence, de titres repas, de forfaits déplacement, de primes panier et de titre de transport.
        function ajaxPointageAssistanteAgenceValidation(user, month, year) {
            \$('#form_Valider').attr('disabled', 'disabled');

            // Retourne les absences du mois.
            function getAbsences() {

                var absences = {'matin': getAbscenceMatin(), 'am': getAbscenceAM()};

                // Retourne les absences du matin par dates et les commentaires.
                function getAbscenceMatin() {
                    var absencesMatin = [];
                    \$('.abscenceMatinSelector').each(function () {
                        var jour = \$(this).siblings('.dayDateCell').text().slice(-2);
                        var mois = month;
                        if (mois < 10) {
                            var mois = '0' + mois;
                        }
                        var annee = year;
                        var absenceMatin = {};
                        absenceMatin['valeur'] = \$(this).children('select').val();
                        absenceMatin['date'] = jour + '-' + mois + '-' + annee;
                        absenceMatin['commentaires'] = \$(this).siblings('.comments').text();
                        absencesMatin.push(absenceMatin);
                    });

                    return absencesMatin;
                }

                // Retourne les absences de l'après-midi par dates.
                function getAbscenceAM() {
                    var absencesAM = [];
                    \$('.abscenceAMSelector').each(function () {
                        var jour = \$(this).siblings('.dayDateCell').text().slice(-2);
                        var mois = month;
                        if (mois < 10) {
                            var mois = '0' + mois;
                        }
                        var annee = year;
                        var absenceAM = {};
                        absenceAM['valeur'] = \$(this).children('select').val();
                        absenceAM['date'] = jour + '-' + mois + '-' + annee;
                        absencesAM.push(absenceAM);
                    });

                    return absencesAM;
                }

                return JSON.stringify(absences);
            }

            //Retourne le nombre total de titre repas du mois.
            function getTitresRepas() {
                return \$('#titreRepasTotalNumber').text();
            }

            //Retourne le nombre total de forfaits déplacement du mois.
            function getForfaitsDeplacement() {
                return \$('#ForfaitDeplacementTotalMontant').text();
            }

            //Retourne le nombre total de primes panier du mois.
            function getPrimesPanier() {
                return \$('#PrimesPanierTotalNumber').text();
            }

            //Retourne le nombre total de titre de transport du mois.
            function getTitreTransport() {
                return \$('#titreTransportTotalMontant').text();
            }

            // Retourne les valeurs des forfaits déplacement associées à leur date.
            function getForfaitsDeplacementDetails() {
                var forfaitsDeplacementDetails = [];
                \$('.forfaitsDeplacementMontant').each(function () {
                    var day = \$(this).siblings('.dayDateCell').text().slice(-2);
                    console.log(day);
                    var value = \$(this).text();

                    var forfaitDeplacementDetail = {};
                    forfaitDeplacementDetail['day'] = new Date(year, month - 1, day);
                    forfaitDeplacementDetail['value'] = value;

                    forfaitsDeplacementDetails.push(forfaitDeplacementDetail);
                });

                return JSON.stringify(forfaitsDeplacementDetails);
            }

            // Retourne les valeurs de modulation associées à leur date.
            function getMods() {
                var mods = [];
                \$('.dailyHoursMod').each(function () {
                    var day = \$(this).siblings('.dayDateCell').text().slice(-2);
                    var value = \$(this).text();

                    var mod = {};
                    mod['day'] = new Date(year, month - 1, day);
                    mod['value'] = value;

                    mods.push(mod);
                });

                return JSON.stringify(mods);
            }

            function getRegularisation() {
                return \$('#divRegularisationText').text();
            }

            console.log(\"ajaxPointageAssistanteAgenceValidation: \" + \$(\"#form_Pointage\").val());

            \$.ajax({
                type: 'POST',
                async: false,
                url: '";
        // line 1244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_assistante_agence_validation");
        echo "',
                data: {username: user, month: month, year: year, absences: getAbsences(), titresRepas: getTitresRepas(), forfaitsDeplacement: getForfaitsDeplacement(), primesPanier: getPrimesPanier(), titreTransport: getTitreTransport(), forfaitsDeplacementDetails: getForfaitsDeplacementDetails(), mods: getMods(), regularisation: getRegularisation()},
                success: function () {
                    location.reload();
                }
            });
        }

        // Calcule et affiche le pourcentage total de chaque ligne de projets et vérifie la validité des donnnées.
        function displayDailyProjectsTotalPercentage() {

            // Colore en rouge les cellules dont le contenu n'est pas un nombre.
            function checkCellContentValidity(cell) {
                if (isNaN(parseFloat(\$(cell).text(), 10)) || parseFloat(\$(cell).text(), 10) > 100) {
                    if (\$(cell).text() !== '') {
                        \$(cell).css('background', 'red');
                    } else {
                        \$(cell).css('background', 'white');
                    }

                } else {
                    \$(cell).css('background', 'white');
                }
            }

            // Affiche la valeur total des cellules d'une même ligne ou 'Erreur' si celle-ci n'est pas valide.
            function checkTotalValue(cell, total) {
                if (\$(cell).css('background-color') !== 'rgb(166, 166, 166)') {
                    if (isNaN(total) || total > 100) {
                        \$(cell).text('Erreur');
                        \$(cell).css('background', 'red');
                    } else {
                        \$(cell).text(total.toFixed(2));
                        \$(cell).css('background', 'white');
                    }
                }
            }

            \$('#tableFeuillePointage').on('blur keyup paste input', '.projectPercentageCell', function () {
                \$('.dailyTotalPercentageCell').each(function () {
                    var total = 0;
                    \$(this).siblings('.projectPercentageCell[contenteditable=true]').each(function () {
                        checkCellContentValidity(this);
                        if (\$(this).text() !== '') {
                            total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                        }
                    });
                    checkTotalValue(this, total);
                });
            });

        }

        // Calcule et affiche le nombre d'heure total pour le mois courant.
        function dispayMonthlyTotalHoursMod() {
            \$('#tableFeuillePointage').on('blur keyup paste input', '.dailyHoursMod', function () {
                var total = 0;
                var error = false;
                \$('.dailyHoursMod').each(function () {
                    if (\$(this).css('background-color') !== 'rgb(166, 166, 166)') {
                        if (\$(this).text() !== '') {
                            if (Math.floor(\$(this).text()) == \$(this).text() && \$.isNumeric(\$(this).text())) {
                                \$(this).css('background-color', 'white');
                                total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                            } else {
                                \$(this).css('background-color', 'red');
                                error = true;
                            }
                        } else {
                            \$(this).css('background-color', 'white');
                        }
                    }
                });
                if (error) {
                    \$('#monthlyTotalHoursMod').css('background-color', 'red');
                    \$('#monthlyTotalHoursMod').text('Erreur');
                } else {
                    \$('#monthlyTotalHoursMod').css('background-color', 'white');
                    \$('#monthlyTotalHoursMod').text(total.toFixed(2));
                }
            });
        }

        // Calcule et affiche le nombre total de titres repas pour le mois courant.
        function displayMonthlyTotalTitresRepas() {
            \$('#tableFeuillePointage').on('change', '.titreRepasNumberSelector select, .abscenceMatinSelector select, .abscenceAMSelector select', function () {
                var total = 0;
                \$('.titreRepasNumberSelector select').each(function () {
                    if (\$(this).find('option:selected').val() !== '') {
                        total = parseInt(total, 10) + parseInt(\$(this).find('option:selected').val(), 10);
                    }
                });
                \$('#titreRepasTotalNumber').text(total);
            });
        }

        // Met à zéro et désactive le selecteur de titre repas lorsque le nombre d'abscence dépasse 0.
        function checkAbscencesTitreRepas() {
            \$('#tableFeuillePointage').on('change', '.abscenceMatinSelector select', function () {
                if (\$(this).val() !== '' || \$(this).parent('.abscenceMatinSelector').siblings('.abscenceAMSelector').find('select').val() !== '') {
                    \$(this).parent('.abscenceMatinSelector').siblings('.titreRepasNumberSelector').find('select').val('');
                    //\$(this).parent('.abscenceMatinSelector').siblings('.titreRepasNumberSelector').find('select').attr('disabled', true);
                    \$(this).parent('.abscenceMatinSelector').siblings('.forfaitsDeplacementMontant').text('');
                    \$(this).parent('.abscenceMatinSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                    \$(this).parent('.abscenceMatinSelector').siblings('.primesPanierNumber').text('');
                    \$(this).parent('.abscenceMatinSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                } else if (\$(this).parent('td').css('background-color') !== 'rgb(166, 166, 166)') {
                    //\$(this).parent('.abscenceMatinSelector').siblings('.titreRepasNumberSelector').find('select').removeAttr('disabled');
                    \$(this).parent('.abscenceMatinSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'white');
                    \$(this).parent('.abscenceMatinSelector').siblings('.primesPanierNumber').css('background-color', 'white');
                }
            });
            \$('#tableFeuillePointage').on('change', '.abscenceAMSelector select', function () {
                if (\$(this).val() !== '' || \$(this).parent('.abscenceAMSelector').siblings('.abscenceMatinSelector').find('select').val() !== '') {
                    \$(this).parent('.abscenceAMSelector').siblings('.titreRepasNumberSelector').find('select').val('');
                    //\$(this).parent('.abscenceAMSelector').siblings('.titreRepasNumberSelector').find('select').attr('disabled', true);
                    \$(this).parent('.abscenceAMSelector').siblings('.forfaitsDeplacementMontant').text('');
                    \$(this).parent('.abscenceAMSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                    \$(this).parent('.abscenceAMSelector').siblings('.primesPanierNumber').text('');
                    \$(this).parent('.abscenceAMSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                } else if (\$(this).parent('td').css('background-color') !== 'rgb(166, 166, 166)') {
                    //\$(this).parent('.abscenceAMSelector').siblings('.titreRepasNumberSelector').find('select').removeAttr('disabled');
                    \$(this).parent('.abscenceAMSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'white');
                    \$(this).parent('.abscenceAMSelector').siblings('.primesPanierNumber').css('background-color', 'white');
                }
            });
        }

        // Vérifie qu'une seule option est renseignée parmis les titres repas, la prime panier ou le forfait déplacement pour chaque jours.
        function onePerkOnly() {
            // Lors d'un changement sur les selecteur de titre repas.
            \$('#tableFeuillePointage').on('change', '.titreRepasNumberSelector select', function () {
                // Si la valeur du sélécteur est à '1'.
                if (\$(this).val() === '1') {
                    // On change la couleur de fond des cases de forfaits déplacement et de primes panier voisines et efface leur valeurs.
                    \$(this).parent('.titreRepasNumberSelector').siblings('.abscenceMatinSelector').find('select').val('');
                    //\$(this).parent('.titreRepasNumberSelector').siblings('.abscenceMatinSelector').find('select').attr('disabled', true);
                    \$(this).parent('.titreRepasNumberSelector').siblings('.abscenceAMSelector').find('select').val('');
                    //\$(this).parent('.titreRepasNumberSelector').siblings('.abscenceAMSelector').find('select').attr('disabled', true);
                    \$(this).parent('.titreRepasNumberSelector').siblings('.forfaitsDeplacementMontant').text('');
                    \$(this).parent('.titreRepasNumberSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                    \$(this).parent('.titreRepasNumberSelector').siblings('.primesPanierNumber').text('');
                    \$(this).parent('.titreRepasNumberSelector').siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                }
                // On change la couleur de fond des cases de forfaits déplacement et de primes panier voisines.
                else {
                    \$(this).parent('.titreRepasNumberSelector').siblings('.forfaitsDeplacementMontant').css('background-color', 'white');
                    \$(this).parent('.titreRepasNumberSelector').siblings('.primesPanierNumber').css('background-color', 'white');
                    //\$(this).parent('.titreRepasNumberSelector').siblings('.abscenceMatinSelector').find('select').attr('disabled', false);
                    //\$(this).parent('.titreRepasNumberSelector').siblings('.abscenceAMSelector').find('select').attr('disabled', false);
                }
            });

            // Lorsqu'on écris dans une case de forfait déplacement.
            \$('#tableFeuillePointage').on('keyup', '.forfaitsDeplacementMontant', function () {
                // Si la case n'est pas vide.
                if (\$(this).text() !== '' && \$(this).siblings('.dayDateCell').css('background-color') !== 'rgb(166, 166, 166)') {
                    \$(this).css('background-color', 'white');
                    \$(this).siblings('.abscenceMatinSelector').find('select').val('');
                    //\$(this).siblings('.abscenceMatinSelector').find('select').attr('disabled', true);
                    \$(this).siblings('.abscenceAMSelector').find('select').val('');
                    //\$(this).siblings('.abscenceAMSelector').find('select').attr('disabled', true);
                    \$(this).siblings('.titreRepasNumberSelector').find('select').val('');
                    //\$(this).siblings('.titreRepasNumberSelector').find('select').attr('disabled', true);
                    \$(this).siblings('.primesPanierNumber').text('');
                    \$(this).siblings('.primesPanierNumber').css('background-color', 'rgb(166,166,166)');
                }
                // Si la case est vide.
                else if (\$(this).siblings('.dayDateCell').css('background-color') !== 'rgb(166, 166, 166)') {
                    //\$(this).siblings('.abscenceMatinSelector').find('select').attr('disabled', false);
                    //\$(this).siblings('.abscenceAMSelector').find('select').attr('disabled', false);
                    //\$(this).siblings('.titreRepasNumberSelector').find('select').attr('disabled', false);
                    \$(this).siblings('.primesPanierNumber').css('background-color', 'white');
                }

                // On met le total des titres repas à jours.
                var total = 0;
                \$('.titreRepasNumberSelector select').each(function () {
                    if (\$(this).find('option:selected').val() !== '') {
                        total = parseInt(total, 10) + parseInt(\$(this).find('option:selected').val(), 10);
                    }
                });
                \$('#titreRepasTotalNumber').text(total);
            });

            // Lorsqu'on écris dans une case de prime panier.
            \$('#tableFeuillePointage').on('keyup', '.primesPanierNumber', function () {
                // Si la case n'est pas vide.
                if (\$(this).text() !== '') {
                    \$(this).css('background-color', 'white');
                    \$(this).siblings('.abscenceMatinSelector').find('select').val('');
                    //\$(this).siblings('.abscenceMatinSelector').find('select').attr('disabled', true);
                    \$(this).siblings('.abscenceAMSelector').find('select').val('');
                    //\$(this).siblings('.abscenceAMSelector').find('select').attr('disabled', true);
                    \$(this).siblings('.titreRepasNumberSelector').find('select').val('');
                    //\$(this).siblings('.titreRepasNumberSelector').find('select').attr('disabled', true);
                    \$(this).siblings('.forfaitsDeplacementMontant').text('');
                    \$(this).siblings('.forfaitsDeplacementMontant').css('background-color', 'rgb(166,166,166)');
                }
                // Si la case est vide.
                else {
                    //\$(this).siblings('.abscenceMatinSelector').find('select').attr('disabled', false);
                    //\$(this).siblings('.abscenceAMSelector').find('select').attr('disabled', false);
                    //\$(this).siblings('.titreRepasNumberSelector').find('select').attr('disabled', false);
                    \$(this).siblings('.forfaitsDeplacementMontant').css('background-color', 'white');
                }

                // On met le total des titres repas à jours.
                var total = 0;
                \$('.titreRepasNumberSelector select').each(function () {
                    if (\$(this).find('option:selected').val() !== '') {
                        total = parseInt(total, 10) + parseInt(\$(this).find('option:selected').val(), 10);
                    }
                });
                \$('#titreRepasTotalNumber').text(total);
            });
        }

        // Calcule et affiche le montant total du forfaits de déplacement pour le mois courant.
        function displayMonthlyTotalForfaitsDeplacement() {
            \$('#tableFeuillePointage').on('blur keyup paste input', '.forfaitsDeplacementMontant', function () {
                var total = 0;
                \$('.forfaitsDeplacementMontant').each(function () {
                    if (\$(this).text() !== '') {
                        total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                    }
                });
                \$('#ForfaitDeplacementTotalMontant').text(total.toFixed(2));
            });
        }

        // Calcule et affiche le montant total des primes de panier pour le mois courant.
        function displayMonthlyTotalPrimesPanier() {
            \$('#tableFeuillePointage').on('blur keyup paste input', '.primesPanierNumber', function () {
                var total = 0;
                \$('.primesPanierNumber').each(function () {
                    if (\$(this).text() !== '') {
                        total = parseFloat(total, 10) + parseFloat(\$(this).text(), 10);
                    }
                });
                \$('#PrimesPanierTotalNumber').text(total.toFixed(2));
            });
        }

        // Calcule et affiche le nombre total de chaque type d'abscences.
        function displayTotalAbscences() {

            // Calcule le total de chaque type d'abscences et affiche la valeur dans la cellule correspondante.
            function getAbscencesCount(nbAbscencesCell) {
                var codeAbsences = \$(nbAbscencesCell).next().text();
                var total = 0;

                \$('.abscenceMatinSelector').each(function () {
                    if (codeAbsences === \$(this).find('select option:selected').val()) {
                        total = parseFloat(total, 10) + parseFloat(0.5, 10);
                    }
                });
                \$('.abscenceAMSelector').each(function () {
                    if (codeAbsences === \$(this).find('select option:selected').val()) {
                        total = parseFloat(total, 10) + parseFloat(0.5, 10);
                    }
                });
                \$(nbAbscencesCell).text(total);
            }

            \$('#tableFeuillePointage').on('change', '.abscenceMatinSelector select, .abscenceAMSelector select', function () {
                \$('.nbAbscences').each(function () {
                    getAbscencesCount(this);
                });
            });
        }

        // Calcule le montant de remboursement des titres de tranport.
        function displayTotalTitreTransport() {
            \$('#tableFeuillePointageTypesAbscencesDivContainer').on('keyup paste', '#titreTransportMontant', function () {
                var total = 0;
                if (\$('#titreTransportMontant').text() !== '') {
                    total = parseFloat(\$('#titreTransportMontant').text(), 10) / 2;
                }
                \$('#titreTransportTotalMontant').text(total.toFixed(2));
            });
        }

        // Ajout une nouvelle colonne de projet au tableau.
        function addProjectColumn() {
            \$('#addProject').click(function () {
                addTd();
                setColSpan();
            });

            // Ajoute un td après chaque td du dernier projet.
            function addTd() {
                var total = \$('#tableFeuillePointage').find('tr').length;
                \$('#tableFeuillePointage').find('tr').each(function (index) {
                    if (index === 1) {
                        \$(this).find('.project').last().after(\"<td class='project' style='border-top-width: 1px; border-bottom-width: 1px;' contenteditable=true>Nouvelle Affaire</td>\");
                    } else if (index === 2) {
                        \$(this).find('.project').last().after(\"<td class='project' style='border-top-width: 1px; border-bottom-width: 1px;'>%</td>\");
                    } else if (index === total - 2) {
                        //\$('.monthlyTotalPercentageCell').last().css('background-color', 'orange');
                        \$('.monthlyTotalPercentageCell').last().after(\"<td class='monthlyTotalPercentageCell' style='border: none; color:white;'>0.00</td>\");
                    } else if (index === total - 1) {
                        \$('.monthlyTotalCell').last().after(\"<td class='monthlyTotalCell' style='border: none; color:white;'>0.00</td>\");
                        //\$('.monthlyTotalCell').last().css('background-color', 'orange');
                    } else if (index === total - 3) {
                        \$('#titreRepasTotalNumber').before(\"<td style='border: none;'></td>\");
                        //\$('.monthlyTotalCell').last().css('background-color', 'orange');
                    } else if (index > 1 && index < total - 3) {
                        var background = \$(this).find('.project').last().css('background-color');
                        var contenteditable = \$(this).find('.project').last().attr('contenteditable');
                        \$(this).find('.project').last().after(\"<td class='projectPercentageCell project'></td>\");
                        \$(this).find('.project').last().css('background-color', background);
                        \$(this).find('.project').last().attr('contenteditable', contenteditable);
                    }
                });
            }

            // Incrémente le colspan du header des projets de 1.
            function setColSpan() {
                var colspan = parseInt(\$('#operationnel').attr('colspan'), 10);
                \$('#operationnel').attr('colspan', colspan + 1);
            }
        }

        // Supprime une colonne de projet au tableau.
        function deleteProjectColumn() {
            // Lors d'un clic droit sur une cellule de nom d'affaire.
            \$('#tableFeuillePointage').bind('contextmenu', 'tr:nth-child(2) .project', function (e) {
                var projectCellule = \$(this);

                // On supprime le trigger de clique déjà existant.
                \$('#projectDeleteMenu').unbind('click');

                // On bloque l'apparition du menu contextuel.
                e.preventDefault();

                // On récupére les coordonnées du pointeur de la souris.
                var cursorY = 1.01 * e.pageY;
                var cursorX = 1.01 * e.pageX;

                // Si le nombre d'affaire est supérieur à 1.
                if (\$('#tableFeuillePointage tr:nth-child(2) .project').length > 1) {
                    // On positione et fait apparaître le menu de suppression.
                    \$('#projectDeleteMenu').css('top', cursorY);
                    \$('#projectDeleteMenu').css('left', cursorX);
                    \$('#projectDeleteMenu').css('display', 'inline-block');

                    // Lors du clic sur le menu de suppression.
                    \$('#projectDeleteMenu').click(function () {
                        \$('#projectDeleteMenu').hide();
                        deleteTd(projectCellule);
                        setColSpan();
                        ajaxSaveColumnDelete();
                    });
                }

                // Si on clique en dehors de la fenêtre de suppression, elle disparaît.
                \$(document).mouseup(function (e) {
                    var container = \$('#projectDeleteMenu');

                    // if the target of the click isn't the container... nor a descendant of the container...
                    if (!container.is(e.target) && container.has(e.target).length === 0) {
                        container.hide();
                    }

                });
            });

            // Supprime les td de la colonne.
            function deleteTd(column) {
                var cellIndex = \$(column).index() - 1;
                \$('#tableFeuillePointage tr').each(function () {
                    \$(this).find('.project').eq(cellIndex).remove();
                });
                \$('#tableFeuillePointage tr:nth-last-child(3) td').eq(cellIndex).remove();
                \$('.monthlyTotalPercentageCell').eq(\$(column).index() - 1).remove();
                \$('.monthlyTotalCell').eq(\$(column).index() - 1).remove();
            }

            // Désincrémente le colspan du header des projets de 1.
            function setColSpan() {
                var colspan = parseInt(\$('#operationnel').attr('colspan'), 10);
                \$('#operationnel').attr('colspan', colspan - 1);
            }

            // Lis le contenu des cellules du tableau et renvoie le résultat sous forme de chaine pour sauvegarde en base de données.
            function ajaxSaveColumnDelete() {
                \$(document).unbind('mouseup');

                var data = {};
                data['contenteditable'] = [];
                data['select'] = [];
                data['project'] = [];
                data['nbProject'] = \$('#tableFeuillePointage tr:nth-child(3) .project').length;
                \$('td[contenteditable=true]:not(#signatureCollaborateur, .project, #ajaxSearchAffairesDiv, #projectDeleteMenu)').each(function (index) {
                    data['contenteditable'][index] = \$(this).text();
                });
                \$('select:not(#pointage_month_selector, #pointage_year_selector)').each(function (index) {
                    data['select'][index] = \$(this).val();
                });
                \$('.project[contenteditable=true]').each(function (index) {
                    data['project'][index] = \$(this).text();
                });
                var serializedData = JSON.stringify(data);

                console.log(\"Sauvegarde suppression colonne: \" + \$('#form_Pointage').val());

                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 1653
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_save_data");
        echo "',
                    data: {user: \$('#form_Pointage').val(), month: \$('#pointage_month_selector option:selected').val(), year: \$('#pointage_year_selector option:selected').val(), data: serializedData, signatureCollaborateur: \$('#signatureCollaborateur').text()}
                });
            }
        }

        // Vérifie si le navigateur utilisé est Internet Explorer et affiche un message d'erreur dans ce cas.
        function IECheck() {
            var ms_ie = false;
            var ua = window.navigator.userAgent;
            var old_ie = ua.indexOf('MSIE ');
            var new_ie = ua.indexOf('Trident/');

            if ((old_ie > -1) || (new_ie > -1)) {
                ms_ie = true;
            }

            if (ms_ie) {
                // On affiche une fenêtre indiquant qu'il n'y a pas de justificatif de transport.
                \$(\"#pointageAlertText\").text('Le module de pointage n\\'est pas compatible avec Internet Explorer, veuillez utiliser Google Chrome à la place.');
                \$(\"#pointageAlert\").dialog({
                    resizable: false,
                    height: \"auto\",
                    width: \"30%\",
                    modal: true,
                    draggable: false,
                    dialogClass: \"pointage-alert-content-class\",
                    title: \"Problème de compatibilité\",
                    buttons: {
                        \"OK\": function () {
                            \$(this).dialog(\"close\");
                            window.location = \"";
        // line 1684
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_accueil");
        echo "\";
                        }
                    }
                });
                \$('.ui-dialog :button').blur();
            }
        }

        // Renvoi les affaires dont le numéro contient la chaine \"search\".
        function getGXAffaires() {
            // Initialisation d'une variable de timer pour lancer la sauvegarde après # temps sans typing.
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            // Initialisation de la variable de stockage des requêtes ajax.
            var searchRequest = null;

            // Pour toutes action dans une cellule titre d'affaire.
            \$('#tableFeuillePointage').on('blur keyup paste', 'tr:nth-child(2) .project', function () {

                // Si une requête est déjà en cours on l'annule.
                if (searchRequest !== null) {
                    searchRequest.abort();
                    searchRequest = null;
                }

                \$('#ajaxSearchAffairesDiv').hide(); // On cache la div des résultats de recherche.

                var search = \$(this).text().trim().toUpperCase(); // La chaine de caractères recherchée.
                var celluleProject = \$(this); // La cellule dans laquelle on effectu la recherche.

                // Supprime les paragraphes de résultats existants.
                \$('#ajaxSearchAffairesDiv').empty();

                // Fixe la largeur minimale de la 'div' des résultats a 1.1 fois la taille de la cellule.
                var minWidth = celluleProject.outerWidth() * 1.1;
                \$('#ajaxSearchAffairesDiv').css('min-width', minWidth);

                // Cherche la chaine saisi dans le fichier csv des affaires et ajoute une balise 'p' par résultats.
                if (search !== '') {
                    delay(function () {
                        searchRequest = \$.ajax({
                            url: '";
        // line 1731
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_search_gx_affaire");
        echo "',
                            data: {searchString: search},
                            success: function (results) {
                                // Supprime les éventuels event de blur déjà existant.
                                celluleProject.unbind('blur');

                                // On initialise le tableau qui contiendras les affaires.
                                var numsAffaires = [];

                                // Tableau des résultats de la recherche.
                                var resultsArray = JSON.parse(results);

                                // Pour chaque lignes...
                                \$.each(resultsArray, function (index, value) {
                                    numsAffaires.push(value['numero']); // On ajoute le numéro de l'affaire dans le tableau des numéros d'affaires.

                                    if (value['numero'].trim() !== search.trim()) {
                                        // On injecte un paragraphe avec le nom et le numéro de l'affaire et on incrémente le compteur de résultat positif.
                                        \$('#ajaxSearchAffairesDiv').append(\"<p class='ajaxSearchAffairesDivResults' data-numaffaire='\" + value['numero'] + \"' style='background-color: white; text-align: center; margin: 0; padding: 0.5vw 0.5vw 0.5vw 0.5vw;'>\" + value['numero'] + (('nom' in value) ? \" \" + value['nom'] : '') + \"</p>\");
                                    }
                                });

                                // Effet visuel au passage de la souris sur les résultats.
                                \$('.ajaxSearchAffairesDivResults').hover(function () {
                                    \$(this).css('background-color', 'rgb(217, 217, 217)');
                                }, function () {
                                    \$(this).css('background-color', 'white');
                                });

                                // Lors du clique sur un résultat on remplace le contenu de la recherche par le résultat.
                                \$('.ajaxSearchAffairesDivResults').mousedown(function () {
                                    celluleProject.text(\$(this).data('numaffaire'));
                                });

                                // Positione la 'div' contenant les résultats sous la cellules focus.
                                \$('#ajaxSearchAffairesDiv').css('top', celluleProject.offset().top + celluleProject.outerHeight() - \$('#tableFeuillePointageDivContainer').offset().top);
                                \$('#ajaxSearchAffairesDiv').css('left', celluleProject.offset().left - \$('#tableFeuillePointageDivContainer').offset().left);

                                // Affiche la 'div' des résultats si elle n'est pas vide.
                                if (resultsArray.length > 0) {
                                    \$('#ajaxSearchAffairesDiv').show();
                                }

                                // Cache la div des résultats lors du blur du champ de recherche et vide la cellule si le contenu n'est pas un numéro d'affaire existant.
                                celluleProject.blur(function () {
                                    \$('#ajaxSearchAffairesDiv').empty();
                                    \$('#ajaxSearchAffairesDiv').hide();
                                    if (\$.inArray(celluleProject.text(), numsAffaires) === -1) {
                                        celluleProject.text('');
                                    }
                                    \$('td[contenteditable=true]:not(tr:nth-child(2) .project)').trigger('keyup');
                                });
                            }
                        });
                    }, 1000);
                }
            });
        }

        // Affiche le nom de l'affaire correspondant au numéro survollé par la souris.
        function showAffaireName() {
            // Lorsqu'on passe la souris sur une cellule de numéro d'affaire.
            \$('#tableFeuillePointage tr:nth-child(2)').on('mouseover', '.project', function () {

                // On supprime les eventuels event de mouseout existants pour ne pas surcharger la mémoire.
                \$('#tableFeuillePointage tr:nth-child(2)').unbind('mouseout');

                //On supprime la tooltip.
                \$('#tooltipAffaire').remove();
                var celluleAffaire = \$(this); // Récupére la cellule d'affaire courante.
                var top = celluleAffaire.offset().top; // Récupére la position verticale de la cellule de l'affaire.
                var left = celluleAffaire.offset().left; // Récupére la position horizontale de la cellule de l'affaire.
                var numAffaire = celluleAffaire.text(); // Récupére le numéro d'affaire.

                \$.ajax({
                    url: '";
        // line 1806
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_get_nom_affaire");
        echo "',
                    type: 'POST',
                    data: {numAffaire: numAffaire},
                    success: function (nomAffaire) {
                        // Code html de la tooltip.
                        var tooltip = '';
                        tooltip += \"<div id='tooltipAffaire' style='display: inline-block; padding: 0%; position: absolute; background-color: rgba(255, 0, 0, 0.8); border-radius: 6px; z-index: 3;'>\";
                        tooltip += \"<p style='text-align: center; color: white; font-size: 0.8vw; margin-left: 5%; margin-right: 5%;'>\";
                        if (nomAffaire) {
                            tooltip += nomAffaire;
                            tooltip += \"<br />\";
                        }
                        tooltip += \"(Cliquez-droit sur l'affaire pour la supprimer.)\";
                        tooltip += \"</p>\";
                        tooltip += '</div>';

                        // Si la souris est toujours sur la cellules une fois la génération du code HTML terminée, on fait apparaître et on positionne la tooltip.
                        if (celluleAffaire.is(':hover')) {
                            \$('body').append(tooltip);
                            \$('#tooltipAffaire').css('top', top - \$('#tooltipAffaire').outerHeight() - 5);
                            \$('#tooltipAffaire').css('left', left - (\$('#tooltipAffaire').outerWidth() - celluleAffaire.outerWidth()) / 2);
                        }
                    }
                }).done(function () {
                    \$('#tableFeuillePointage tr:nth-child(2)').on('mouseout', '.project', function () {
                        //On supprime la tooltip.
                        \$('#tooltipAffaire').remove();
                    });
                });
            });

            /*function getAffaire(affaires, numAffaire, nomAffaire, top, left, celluleAffaire, element) {
             // On cherche le nom d'affaire correspondant au numéro dans le fichier des affaires.
             \$.get(affaires, function (data) {
             var lineByLine = data.split(\"\\n\");
             \$.each(lineByLine, function (index, value) {
             var donnes = value.split(';');
             if (numAffaire === donnes[0]) {
             nomAffaire = donnes[1];
             return false;
             }
             });
             
             // Code html de la tooltip.
             var tooltip = '';
             tooltip += \"<div id='tooltipAffaire' style='display: inline-block; padding: 0%; position: absolute; background-color: rgba(255, 0, 0, 0.8); border-radius: 6px; z-index: 3;'>\";
             tooltip += \"<p style='text-align: center; color: white; font-size: 0.8vw; margin-left: 5%; margin-right: 5%;'>\";
             if (nomAffaire) {
             tooltip += nomAffaire;
             tooltip += \"<br />\";
             }
             tooltip += \"(Cliquez-droit sur l'affaire pour la supprimer.)\";
             tooltip += \"</p>\";
             tooltip += '</div>';
             
             // Si la souris est toujours sur la cellules une fois la génération du code HTML terminée, on fait apparaître et on positionne la tooltip.
             if (element.is(':hover')) {
             \$('body').append(tooltip);
             \$('#tooltipAffaire').css('top', top - \$('#tooltipAffaire').outerHeight() - 5);
             \$('#tooltipAffaire').css('left', left - (\$('#tooltipAffaire').outerWidth() - celluleAffaire.outerWidth()) / 2);
             }
             
             }).done(function () {
             // Lorsqu'on retire la souris d'une cellule de numéro d'affaire.
             \$('#tableFeuillePointage tr:nth-child(2)').on('mouseout', '.project', function () {
             //On supprime la tooltip.
             \$('#tooltipAffaire').remove();
             });
             });
             }*/
        }

        // Retourne la largeur des barres de scrolling.
        function getScrollbarWidth() {
            var outer = document.createElement(\"div\");
            outer.style.visibility = \"hidden\";
            outer.style.width = \"100px\";
            outer.style.msOverflowStyle = \"scrollbar\"; // needed for WinJS apps

            document.body.appendChild(outer);
            var widthNoScroll = outer.offsetWidth;
            // force scrollbars
            outer.style.overflow = \"scroll\";
            // add innerdiv
            var inner = document.createElement(\"div\");
            inner.style.width = \"100%\";
            outer.appendChild(inner);
            var widthWithScroll = inner.offsetWidth;
            // remove divs
            outer.parentNode.removeChild(outer);
            return widthNoScroll - widthWithScroll;
        }

        // Affiche un header flotant horizontal lorsque le header du tableau n'est plus entiérement visible.
        function fixedHorizontalHeader() {
            // Lors d'un scroll dans le container du tableau ou sur la div de contenu.
            \$('#tableFeuillePointageDivContainer, #contenu').scroll(function () {

                // Initialisation des variables de positionnement.
                var tableFeuillePointageTop = \$('#tableFeuillePointage').offset().top; // Top de table de la feuille de pointage.
                var divTableFeuillePointageContainerTop = \$('#tableFeuillePointageDivContainer').offset().top; // Top du container de la feuille de pointage.
                var sectionPrincipalTop = \$('#section_principal').offset().top; // Top de la section principal.

                // Si le tableau est entiérement visible mais que son header n'est pas entiérement visible.
                if (divTableFeuillePointageContainerTop >= sectionPrincipalTop && tableFeuillePointageTop < divTableFeuillePointageContainerTop) {

                    // Si le header flotant est invisible.
                    if (!\$('#floatingHeader').is(':visible')) {
                        \$('.floatingHeaderNumGX').remove(); // On supprime les cellules de numéros d'affaires du header flotant.

                        // On ajoute les cellules de numéros d'affaires au header flotant.
                        \$('#tableFeuillePointageDivContainer tr:nth-child(2) td:nth-child(n+2):nth-last-child(n+8)').each(function (index) {
                            \$('#floatingHeader > div:nth-child(' + (index + 1) + ')').after(\"<div class='floatingHeaderNumGX'><div>\" + \$(this).text() + \"</div><br /><div>%</div></div>\");
                        });

                        // Pour chaque container de header on récupére la largeur et on l'attribut aux cellules du header flotant.
                        var tableHeader = \$('#tableFeuillePointageDivContainer tr:nth-child(2)');
                        tableHeader.children().each(function (index) {
                            \$('#floatingHeader').children().eq(index).width(\$(this).outerWidth());
                        });

                        // On récupére la largeur des cellules d'absences du matin et de l'après midi et on l'attribut aux cellules correspondantes du header flotant.
                        \$('#floatingHeaderMatin').width(\$('#feuillePointageMatin').innerWidth());
                        \$('#floatingHeaderAM').width(\$('#feuillePointageAM').innerWidth());

                        // Lorsqu'on scroll horizontalement les tableau, le header flotant subit le même scroll.
                        \$('#tableFeuillePointageDivContainer').on('scroll', function () {
                            \$('#floatingHeaderContainer').scrollLeft(\$(this).scrollLeft());
                        });

                        \$('#floatingHeaderContainer').hide(); // On cache le header flotant pour préparer l'animation d'apparition.
                    }

                    // On règle sa position et sa taille.
                    \$('#floatingHeaderContainer').css('top', divTableFeuillePointageContainerTop); // En haut du container de la table.
                    \$('#floatingHeaderContainer').css('left', \$('#tableFeuillePointageDivContainer').offset().left); // A gauche du container de la table.
                    \$('#floatingHeaderContainer').css('width', \$('#tableFeuillePointageDivContainer').innerWidth() - getScrollbarWidth()); // La taille du container moins celle de la scrollbar.
                    \$('#floatingHeader').css('width', \$('#tableFeuillePointage').innerWidth());

                    \$('#floatingHeaderContainer').fadeIn(500); // On affiche le header flotant.

                    \$('#floatingHeader > div:last-child').height(\$('#floatingHeader > div:first-child').height()); // On attribut la même hauteur à la dernière cellule que pour les autres.
                    \$('#floatingHeader > div:last-child div').css('line-height', \$('#floatingHeader > div:last-child div').height() + 'px'); // On centre verticallement le texte de la dernière cellule.
                }
                // Si le tableau n'est pas entiérement visible ou le header est entiérement visible.        
                else {
                    \$('#floatingHeaderContainer').hide(); // On cache le header flotant.
                }

                // On affiche la croix si besoin.
                toggleFloatingHeaderCross();
            });
        }

        // Affiche un header flotant vertical lorsque le header du tableau n'est plus entiérement visible.
        function fixedVerticalHeader() {
            // Lors d'un scroll dans le container du tableau ou sur la div de contenu.
            \$('#tableFeuillePointageDivContainer, #contenu').scroll(function () {
                // Initialisation des variables de positionnement.
                var tableFeuillePointageLeft = \$('#tableFeuillePointage').offset().left; // Left de la table de la feuille de pointage.
                var tableFeuillePointageContainerLeft = \$('#tableFeuillePointageDivContainer').offset().left; // Left du container de la feuille de pointage.
                var sectionPrincipalTop = \$('#section_principal').offset().top; // Top de la section principal.
                var divTableFeuillePointageContainerTop = \$('#tableFeuillePointageDivContainer').offset().top; // Top du container de la feuille de pointage.

                // Si le header vertical n'est pas entiérement visible.
                if (tableFeuillePointageLeft < tableFeuillePointageContainerLeft && divTableFeuillePointageContainerTop >= sectionPrincipalTop) {
                    // Si le header flotant vertical n'est pas visible.
                    if (!\$('#floatingVerticalHeaderContainer').is(':visible')) {
                        \$('.floatingVerticalHeaderDate').remove(); // On supprime les cellules de date du header vertical flotant.

                        // Pour chaque cellule de date on inject une div contenant la même date dans le header flotant.
                        \$('.dayDateCell').each(function () {
                            \$('#floatingVerticalHeader').append(\"<div class='floatingVerticalHeaderDate'>\" + \$(this).text() + \"</div>\");
                        });

                        // On attribut la bonne hauteur à chaque div du header flotant.
                        \$('#tableFeuillePointage tr td:first-child').each(function (index) {
                            \$('#floatingVerticalHeader').find('div').eq(index).height(\$(this).height());
                        });

                        // On attribut la bonne largeur à chaque div du header flotant.
                        \$('#floatingVerticalHeader div').width(\$('.dayDateCell').width());

                        // Lorsqu'on scroll horizontalement les tableau, le header flotant subit le même scroll.
                        \$('#tableFeuillePointageDivContainer').on('scroll', function () {
                            \$('#floatingVerticalHeaderContainer').scrollTop(\$(this).scrollTop());
                        });

                        \$('#floatingVerticalHeaderContainer').hide(); // On cache le header flotant pour préparer l'animation d'apparition.
                    }

                    // On règle sa position et sa taille.
                    \$('#floatingVerticalHeaderContainer').css('top', \$('#tableFeuillePointageDivContainer').offset().top); // En haut du container de la table.
                    \$('#floatingVerticalHeaderContainer').css('left', tableFeuillePointageContainerLeft); // A gauche du container de la table.
                    \$('#floatingVerticalHeaderContainer').height(\$('#tableFeuillePointageDivContainer').height() - getScrollbarWidth());
                    \$('#floatingVerticalHeader').height(\$('#tableFeuillePointage').height());

                    \$('#floatingVerticalHeaderContainer').fadeIn(500); // On affiche le header flotant.
                }
                // Si le header vertical est entiérement visible.
                else {
                    \$('#floatingVerticalHeaderContainer').hide(); // On cache le header flotant.
                }

                // On affiche la croix si besoin.
                toggleFloatingHeaderCross();
            });
        }

        // Affiche/Cache la croix des headers flotants.
        function toggleFloatingHeaderCross() {
            // Si les headers flotants vertical et horizontal sont visibles en même temps.
            if (\$('#floatingHeaderContainer').css('display') !== 'none' && \$('#floatingVerticalHeaderContainer').css('display') !== 'none') {
                // On régle la taille et la position de la croix et on l'affiche.
                \$('#floatingHeaderCross').width(\$('#floatingVerticalHeaderContainer').width() - 4);
                \$('#floatingHeaderCross').height(\$('#floatingHeaderContainer').height() - 4);
                \$('#floatingHeaderCross').css('top', \$('#tableFeuillePointageDivContainer').offset().top);
                \$('#floatingHeaderCross').css('left', \$('#tableFeuillePointageDivContainer').offset().left);
                \$('#floatingHeaderCross').css('line-height', \$('#floatingHeaderContainer').height() - 4 + 'px');
                \$('#floatingHeaderCross').show();
            }
            // Si les headers flotants vertical et horizontal ne sont pas visibles en même temps.
            else {
                // On cache la croix.
                \$('#floatingHeaderCross').hide();
            }
        }

        // Affiche une fenêtre de notification de sauvegarde qui suit la souris.
        function savingNotification() {
            // Lorsque la souris bouge.
            \$(document).mousemove(function (event) {
                \$('#pointageSavingNotification').css('left', event.pageX + 20);
                \$('#pointageSavingNotification').css('top', event.pageY);
            });
        }

        // Passe à la cellule éditable de la ligne suivante lors de l'appui sur la touche 'Entrée'.
        function nextLineOnEnter() {
            // Lorsque une touche est pressé dans une cellule éditable...
            \$(\"#tableFeuillePointage\").on('keypress', \"td[contenteditable='true']\", function (e) {
                // Si la touche à pour code 13 (touche 'Entrée')...
                if (e.keyCode === 13) {
                    e.preventDefault(); // On bloque l'action par défaut (retour à la ligne).
                    var currentCell = \$(this); // La cellule courante.
                    var nextLineTr = currentCell.parent('tr').next('tr'); // La prochaine ligne du tableau.
                    var nextLineCell = nextLineTr.find(\"td\").eq(currentCell.index()); // La cellule de la prochaine ligne du tableau dont la position est identique à la cellule courante.
                    var nextLineCellIsEditable = false; // Vrais si 'nextLineCell' est éditable (initialisé sur faux).

                    // Tant que 'nextLineCell' existe et que 'nextLineCellIsEditable' est faux.
                    while (nextLineCell.length && !nextLineCellIsEditable) {
                        // Si nextLineCell n'est pas une cellule éditable.
                        if (nextLineCell.attr('contentEditable') !== 'true') {
                            nextLineTr = nextLineCell.parent('tr').next('tr'); // On récupère la ligne suivante.
                            nextLineCell = nextLineTr.find(\"td\").eq(nextLineCell.index()); // On récupère la cellule de la ligne suivante.
                        }
                        // Si nextLineCell est une cellule éditable.
                        else {
                            nextLineCellIsEditable = true; // On passe nextLineCellIsEditable sur vrais.
                            nextLineCell.focus(); // On focus la cellule.
                        }
                    }

                }
            });
        }

        // Définie la valeur de l'absence PM sur la même que l'absence AM lorsque l'absence AM est modifiée.
        function cloneAbsenceAMToPM() {
            // Lorsque l'on change la valeur d'un sélécteur d'AM...
            \$('#tableFeuillePointage').on('change', '.abscenceMatinSelector select', function () {
                \$(this).parent('.abscenceMatinSelector').next('.abscenceAMSelector').find('select').val(\$(this).val()); // On change la valeur du sélecteur PM associé.
                \$(this).parent('.abscenceMatinSelector').next('.abscenceAMSelector').find('select').trigger('change'); // On simule un changement manuel du sélecteur PM pour déclancher la sauvegarde.
            });
        }

        // Définie la valeur de l'absence PM sur la même que l'absence AM lorsque l'absence AM est modifiée.
        function cloneAbsenceAMToPM() {
            // Lorsque l'on change la valeur d'un sélécteur d'AM...
            \$('#tableFeuillePointage').on('change', '.abscenceMatinSelector select', function () {
                \$(this).parent('.abscenceMatinSelector').next('.abscenceAMSelector').find('select').val(\$(this).val()); // On change la valeur du sélecteur PM associé.
                \$(this).parent('.abscenceMatinSelector').next('.abscenceAMSelector').find('select').trigger('change'); // On simule un changement manuel du sélecteur PM pour déclancher la sauvegarde.
            });
        }

        // Permet d'uploader un justificatif de transport.
        function ajaxUploadJustificatifTransport() {
            // Lors du clic sur le bouton d'envoi de fichier.
            \$('#sendTransportJustificatifFormButton').click(function () {
                // Lorsqu'un fichier est séléctionné...
                \$(\"#sendTransportJustificatifForm input[type='file']\").change(function () {
                    // Si le fichier est de type PDF...
                    if (\$(this)[0].files[0].type === 'application/pdf') {
                        \$('#sendTransportJustificatifForm').submit(); // On valide le formulaire.
                    }
                    // Si le fichier n'est pas de type PDF...
                    else {
                        alert('Le fichier doit être de type PDF !'); // On affiche un message d'erreur.
                    }
                });
                // On simule un clic sur le input de fichier du formulaire.
                \$(\"#sendTransportJustificatifForm input[type='file']\").click();
            });

            // Lors de la validation du formulaire d'upload du fichier justificatif de transport.
            \$('#sendTransportJustificatifForm').on('submit', function (e) {
                e.preventDefault(); // On bloque l'envoi du formulaire.

                // On cache le bouton d'envoie et on affiche celui de chargement du transfert.
                \$('#sendTransportJustificatifFormButton').hide();
                \$('#uploadLoaderButton').show();

                var formData = new FormData(\$('#sendTransportJustificatifForm')[0]); // Variable contenant les données du formulaire.
                // Requette ajax pour uploader le fichier en base de données.
                \$.ajax({
                    url: '";
        // line 2121
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_ajax_upload_justificatif_transport_file");
        echo "',
                    type: 'POST',
                    // Form data
                    data: formData,
                    //Options to tell jQuery not to process data or worry about content-type.
                    contentType: false,
                    processData: false,
                    success: function (justificatifId) {
                        // Requette ajax pour associée le justificatif en base de donnée au tableau de pointage courant.
                        \$.ajax({
                            url: '";
        // line 2131
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_ajax_set_justificatif_transport_to_pointage");
        echo "',
                            data: {collaborateur: \$('#form_Pointage').val(), month: \$('#pointage_month_selector').val(), year: \$('#pointage_year_selector').val(), justificatifTransportFileId: justificatifId},
                            success: function () {
                                // On cache le bouton d'upload, on attribut l'id du justificatif au bouton de suppression et on l'affiche.
                                \$('#uploadLoaderButton').hide();
                                \$('#deleteJustificatifButtonSpan').attr('idjustificatif', justificatifId);
                                \$('#downloadJustificatifButtonSpan').attr('onclick', \"window.location = '\" + '";
        // line 2137
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_download_justificatif_transport");
        echo "/' + justificatifId + \"';\");
                                \$('#deleteJustificatifButton').show();
                            }
                        });
                    }
                });
            });
        }

        // Permet de supprimer le justificatif de transport associé au pointage.
        function ajaxDeleteJustificatifTransport() {
            var IdJustificatif = \$('#deleteJustificatifButtonSpan').attr('idjustificatif'); // L'id du justificatif à supprimer.

            // Requette ajax pour uploader le fichier en base de données.
            \$.ajax({
                url: '";
        // line 2152
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_ajax_delete_justificatif_transport");
        echo "',
                data: {IdJustificatif: IdJustificatif},
                success: function () {
                    // On cache le bouton de suppression du justificatif et on affiche celui d'upload.
                    \$('#deleteJustificatifButton').hide();
                    \$('#sendTransportJustificatifFormButton').show();
                }
            });
        }

        // Permet de télécharger le justificatif de transport d'un pointage.
        function ajaxDownloadJustificatifTransport() {
            var IdJustificatif = \$('#deleteJustificatifButtonSpan').attr('idjustificatif'); // L'id du justificatif à télécharger.

            // Requette ajax pour uploader le fichier en base de données.
            \$.ajax({
                url: '";
        // line 2168
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointages_ajax_delete_justificatif_transport");
        echo "',
                data: {IdJustificatif: IdJustificatif},
                success: function () {
                    // On cache le bouton de suppression du justificatif et on affiche celui d'upload.
                    \$('#deleteJustificatifButton').hide();
                    \$('#sendTransportJustificatifFormButton').show();
                }
            });
        }

        // Permet de séléctionner est copié plusieurs cellules de projet simultanément.
        function copyMultipleCell() {
            var mouseIdDown = false; // Variable indiquant si le bouton de la souris est actuellement pressé (faux par défaut).
            var lastSelectedCell = null; // Variable contenant la dernière cellule à avoir été séléctionnée.
            var currentSelectedCells = []; // Tableau contenant les cellules en cours de séléction.
            var copyCells = []; // Tableau contenant les valeurs des cellules en cours de copie.
            var originLine = null; // Index de la ligne de la première cellule séléctionnée.
            var originColumn = null; // Index de la colonne de la première cellule séléctionnée.

            /* 
             * Initialise la séléction des cellules lorsque le bouton gauche de la souris est pressé.
             */
            // Lorsqu'un bouton de la souris est pressé dans une cellule de projet...
            \$('#tableFeuillePointage').on('mousedown', \".projectPercentageCell[contenteditable='true']\", function (e) {
                // Si le bouton pressé est le gauche...
                if (e.which === 1) {

                    lastSelectedCell = null; // On efface la dernière cellule séléctionnée.
                    currentSelectedCells = []; // On vide le tableau des cellules en cours de séléction.
                    \$('.maxCellSquareDiv').remove(); // On efface le carré bleu de la cellules maximum.
                    \$('.projectPercentageCellMovingDashedBorder').remove(); // On efface les pointillé mobile de copie.

                    // On redonne la couleur d'origine au bord des cellules.            
                    \$(\".projectPercentageCell[contenteditable='true']\").css({
                        'border': '1px solid black'
                    });

                    mouseIdDown = true; // On sauvegarde l'état du bouton.
                    var currentCell = \$(this); // On récupére la cellule courante.

                    // On met à jours les variables d'index des cellules.
                    originLine = currentCell.parent('tr').index();
                    originColumn = currentCell.index();

                    lastSelectedCell = currentCell; // On met à jour la dernière cellule séléctionnée.
                    currentSelectedCells.push(currentCell); // On ajoute la cellule courante au tableau des cellules en cours de séléction.

                    // On colore les bords de la cellule en bleu.       
                    currentCell.css({
                        'border': '2px solid blue'
                    });
                }
            });

            /*
             * Permet de détecter le relachement du bouton gauche de la souris.
             */
            // Lorsque le bouton de la souris est relaché...
            \$('body').on('mouseup', function (e) {
                // Si le bouton relaché est le gauche...
                if (e.which === 1) {
                    mouseIdDown = false; // On sauvegarde l'état du bouton.

                    // On efface les variables d'index de la première colonne séléctionnée.
                    originLine = null;
                    originColumn = null;
                }
            });

            /*
             * Permet la séléction multiple de cellule au survol de la souris.
             */
            // Lorsqu'une cellule de projet et survolée...
            \$('#tableFeuillePointage').on('mouseover', '.projectPercentageCell', function () {
                // Si la souris est enfoncé et la cellule survolé est éditable...
                if (mouseIdDown && \$(this).attr('contenteditable') === 'true') {

                    // On récupére les index de la ligne et de la colonne de la cellule courante.
                    var currentLine = \$(this).parent('tr').index();
                    var currentColumn = \$(this).index();

                    // On met à jours le tableau des cellules en cours de séléction.
                    currentSelectedCells = [];
                    for (var line = Math.min(originLine, currentLine); line <= Math.max(originLine, currentLine); line++) {
                        for (var column = Math.min(originColumn, currentColumn); column <= Math.max(originColumn, currentColumn); column++) {
                            var cell = \$('#tableFeuillePointage').find('tr').eq(line).find('td').eq(column);

                            // Si la cellules est éditable...
                            if (cell.attr('contenteditable') === 'true') {
                                currentSelectedCells.push(cell); // On l'ajoute au tableau des cellules en cours de séléction.
                            }
                        }
                    }

                    lastSelectedCell = \$(this); // On remplace la dernière cellule séléctionnée par la celules courante.
                    \$(\".projectPercentageCell[contenteditable='true']\").css('border', '1px solid black'); // On redonne leur bordure d'origine à toutes les cellules éditable de projet.
                    \$(\".projectPercentageCell[contenteditable='true']\").css('background-color', 'white'); // On redonne le background d'origine à toutes les cellules éditablede projet.

                    // On initialise des varibles qui contiendront les index de position de la cellule la plus éloignée de l'origine du tableau.
                    var maxCellLine = 0;
                    var maxColumnLine = 0;

                    // Pour chaques cellules en cours de séléction...
                    \$.each(currentSelectedCells, function (index, currentCell) {
                        // On récupère les index de la ligne et de la colonne de la cellule courante.
                        var currentCellLine = currentCell.parent('tr').index();
                        var currentCellColumn = currentCell.index();

                        // On change les bordures de la cellules si nescessaire.
                        currentCell.css('border-top', currentCellLine === Math.min(originLine, currentLine) ? '2px solid blue' : '1px solid black');
                        currentCell.css('border-bottom', currentCellLine === Math.max(originLine, currentLine) ? '2px solid blue' : '1px solid black');
                        currentCell.css('border-left', currentCellColumn === Math.min(originColumn, currentColumn) ? '2px solid blue' : '1px solid black');
                        currentCell.css('border-right', currentCellColumn === Math.max(originColumn, currentColumn) ? '2px solid blue' : '1px solid black');

                        // On met à jours les variables d'index maximum si besoin.
                        maxCellLine = currentCellLine > maxCellLine ? currentCellLine : maxCellLine;
                        maxColumnLine = currentCellColumn > maxColumnLine ? currentCellColumn : maxColumnLine;
                    });

                    // On fait apparaître un carré bleu sur le bord de la cellule la plus excentrée.
                    \$('.maxCellSquareDiv').remove(); // On efface le carré bleu de la cellules maximum.
                    var maxCell = \$('#tableFeuillePointage').find('tr').eq(maxCellLine).find('td').eq(maxColumnLine); // On récupére la cellule la plus excentrée.
                    maxCell.append(\"<div class='maxCellSquareDiv' style='display: inline-block; position: absolute; top: calc(100% - 3px); left: calc(100% - 3px); background-color: blue; outline: 1px solid white; width: 6px; height: 6px;'><div>\");
                }
            });

            /* 
             * Permet de copier plusieurs cellules simultanément.
             */
            // Lors d'une copie au d'une ou plusieurs cellules de projets...
            \$('#tableFeuillePointage').on('copy cut', '.projectPercentageCell', function (e) {
                e.preventDefault(); // On bloque l'action par défaut.
                copyCells = []; // On vide le tableau des éléments précédement copiés.

                // Pour chaques cellules en cours de séléction...
                \$.each(currentSelectedCells, function () {

                    // On insert le contenu des cellules et leurs positions dans le tableau de copie.
                    var cellText = (\$(this).contents().filter(function () {
                        return this.nodeType === 3;
                    })[0]) === undefined ? '' : \$(this).contents().filter(function () {
                        return this.nodeType === 3;
                    })[0].nodeValue;
                    var cell = {value: cellText, line: \$(this).parent('tr').index(), column: \$(this).index()};
                    copyCells.push(cell);

                    // Si l'event est un 'coupé'...
                    if (e.type === 'cut') {
                        \$(this).contents().filter(function () {
                            return this.nodeType === 3;
                        })[0].nodeValue = ''; // On efface la valeur de la cellule.
                    }

                    if (\$(this).css('border-top-color') === 'rgb(0, 0, 255)') {
                        \$(this).css('border-top', 'none');
                        \$(this).append(\"<div class='projectPercentageCellMovingDashedBorder projectPercentageCellMovingDashedBorderTop'><i></i></div>\");
                    }
                    if (\$(this).css('border-bottom-color') === 'rgb(0, 0, 255)') {
                        \$(this).css('border-bottom', 'none');
                        \$(this).append(\"<div class='projectPercentageCellMovingDashedBorder projectPercentageCellMovingDashedBorderBottom'><i></i></div>\");
                    }
                    if (\$(this).css('border-left-color') === 'rgb(0, 0, 255)') {
                        \$(this).css('border-left', 'none');
                        \$(this).append(\"<div class='projectPercentageCellMovingDashedBorder projectPercentageCellMovingDashedBorderLeft'><i></i></div>\");
                    }
                    if (\$(this).css('border-right-color') === 'rgb(0, 0, 255)') {
                        \$(this).css('border-right', 'none');
                        \$(this).append(\"<div class='projectPercentageCellMovingDashedBorder projectPercentageCellMovingDashedBorderRight'><i></i></div>\");
                    }
                });
            });

            /*
             * Permet de coller plusieurs cellules simultanément en conservant leurs position.
             */
            // Lorsqu'on colle dans une cellule de projet cellules de projets...
            \$('#tableFeuillePointage').on('paste', '.projectPercentageCell', function (e) {
                e.preventDefault(); // On bloque l'action par défaut.

                // On récupére les coordonnées de la première cellule de destination.
                var pastLineIndex = \$(this).parent('tr').index();
                var pastColumnIndex = \$(this).index();
                // On calcule la différence avec les coordonnée de la première cellule d'origine.
                var lineDifference = pastLineIndex - copyCells[0].line;
                var columnDifference = pastColumnIndex - copyCells[0].column;
                // Pour chaque cellules à collé...
                \$.each(copyCells, function (index, cell) {
                    // On déduit la cellule dans laquelle sera collé le texte.
                    var destinationLine = \$('#tableFeuillePointage').find('tr').eq(cell.line + lineDifference);
                    var destinationCell = destinationLine.find('td').eq(cell.column + columnDifference);
                    // Si la cellule de destination est éditable...
                    if (destinationCell.attr('contenteditable') === 'true') {
                        destinationCell.css('border', '1px solid black'); // On donne les bordures de base à la cellule.
                        destinationCell.text(cell.value); // On colle le texte dans la cellule.
                    }
                });
            });
        }

        // Exporte le fichier en Excel et lance son téléchargement.
        function ajaxExportToExcell() {
            /* Permet de transformer un valeur de couleur de type rgb en héxadécimal. */
            function hexc(colorval) {
                var parts = colorval.match(/^rgb\\((\\d+),\\s*(\\d+),\\s*(\\d+)\\)\$/);
                if (parts !== null) {
                    delete(parts[0]);
                    for (var i = 1; i <= 3; ++i) {
                        parts[i] = parseInt(parts[i]).toString(16);
                        if (parts[i].length == 1)
                            parts[i] = '0' + parts[i];
                    }
                    var color = parts.join('');
                    return color;
                }
            }

            /* Initialisation des variables et tableau de variables. */
            var tableTD = \$('#tableFeuillePointage').find('td'); // Les cellules du tableau.
            var tableContent = []; // Tableau contentant les valeurs des cellules et leurs positions.
            var lineWithColspan = []; // Tableau contenant les lignes du tableau dont certaines cellules sont mergées.
            var cellWithColspan = []; // Tableau contenant les cellules qui ont un merging horizontal.
            var cellWithRowspan = []; // Tableau contenant les cellules qui ont un merging vertical.

            // Pour chaque cellules du tableau...
            tableTD.each(function (index, value) {
                var cellLine = \$(this).parent('tr').index();  // L'index de la ligne de la cellule.
                var cellColumn = \$(this).index(); // L'index de la colonne de la cellule.
                // Le texte brut (non html) de la cellule si il existe.
                var cellText = (\$(this).contents().filter(function () {
                    return this.nodeType === 3;
                })[0]) === undefined ? '' : \$(this).contents().filter(function () {
                    return this.nodeType === 3;
                })[0].nodeValue;
                var cellContant = \$(this).has('select').length ? \$(this).find('select').val() : \$.trim(cellText); // Le contenu de la cellule (texte ou valeur de l'input).
                var cellColor = hexc(\$(this).css('backgroundColor')); // La couleur de fond de la cellule en hexadecimal.
                var cellHasBorder = (\$(this).css('border-left-style') !== 'none' || \$(this).css('border-right-style') !== 'none' || \$(this).css('border-top-style') !== 'none' || \$(this).css('border-bottom-style') !== 'none') ? true : false; // Indique si la cellule possède des bordures.
                var cellTextColor = hexc(\$(this).css('color')); // La couleur du texte de la cellule en hexadecimal.

                // Pour chaque ligne du tableau ayant des cellules mergées...
                \$.each(lineWithColspan, function (index, value) {
                    // Si la ligne est la même que celle de la cellule courante...
                    if (value.lineIndex === cellLine) {
                        // On augmente l'index de la columne de la cellule courante du nombre de cellules qui sont mergées.
                        cellColumn = parseInt(cellColumn, 10) + parseInt(value.colspan, 10) - parseInt(1, 10);
                    }
                });

                // On ajoute la cellule au tableau des cellules.
                var cell = {line: cellLine, column: cellColumn, contant: cellContant, color: cellColor, border: cellHasBorder, textColor: cellTextColor};
                tableContent.push(cell);

                // Si la cellule est mergé horizontalement avec une autre cellule...
                if (\$(this).attr('colspan') !== undefined) {
                    lineWithColspan.push({lineIndex: cellLine, colspan: \$(this).attr('colspan')}); // On ajoute la ligne au tableau des lignes ayant des cellules mergées.
                    cellWithColspan.push({line: cellLine, column: cellColumn, colspan: \$(this).attr('colspan') - 1}); // On ajoute la cellule au tableau des cellules mergées horizontalement.
                }
                // Si la cellules est mergé verticalement avec une autre cellule...
                if (\$(this).attr('rowspan') !== undefined) {
                    cellWithRowspan.push({line: cellLine, column: cellColumn, rowspan: \$(this).attr('rowspan') - 1}); // On ajoute la cellule au tableau des cellules mergées verticalement.
                }
            });

            // On envoie les différents tableau avec une requête Ajax pour la génération du fichier Excel.
            \$.ajax({
                url: '";
        // line 2432
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_export_to_excel");
        echo "',
                type: 'POST',
                data: {tableContent: tableContent, cellWithColspan: cellWithColspan, cellWithRowspan: cellWithRowspan},
                success: function (response) {
                    var fileInfo = JSON.parse(response);
                    console.log(fileInfo);
                    window.location = fileInfo.fileUrl; // On redirige vers le téléchargement du fichier Excel.
                    \$.ajax({
                        url: '";
        // line 2440
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_delete_excel_file");
        echo "',
                        type: 'POST',
                        data: {filename: fileInfo.filename}
                    });
                }
            });
        }

        // Sauvegarde la valeur des sélécteur dans les cookies lors des changements.
        function setSavedDateAndAgency() {
            // Lorqu'on change la date ou l'établissement...
            \$('#form_Month, #form_Year, #form_Etablissement, #form_Manager, #RHMode').change(function () {
                // Temps d'expiration du cookie (1 heure).
                var inOneHour = new Date(new Date().getTime() + 60 * 60 * 1000);

                // Si il existe un cookie pour le sélécteur...
                if (Cookies.get(\$(this).attr('id')) !== undefined) {
                    Cookies.remove(\$(this).attr('id')); // On le supprime
                }

                // On crée un cookie avec la nom et la valeur du sélécteur.
                if (\$(this).attr('id') === 'RHMode') {
                    Cookies.set(\$(this).attr('id'), \$(this).is(':checked'), {expires: inOneHour});
                } else {
                    Cookies.set(\$(this).attr('id'), \$(this).val(), {expires: inOneHour});
                }
            });
        }

        // Récupére les valeurs des cookies des sélécteurs.
        function getSavedDateAndAgency() {
            // Initialisation de la liste des sélécteurs.
            var selectors = ['form_Month', 'form_Year', 'form_Etablissement', 'form_Manager'];

            // Pour chaques sélécteurs...
            \$.each(selectors, function (index, value) {
                // Si il existe un cookie pour le sélécteur et qu'il n'est pas vide...
                if (Cookies.get(value) !== undefined && Cookies.get(value) !== '') {
                    // On assigne la valeur du cookie au sélécteur.
                    \$('#' + value).val(Cookies.get(value));

                    // On déclanche le changement du sélécteur pour déclancher les fonctions associées.
                    if (index === selectors.length - 1) {
                        \$('#' + value).trigger('change');
                    }
                }
            });
        }

        // Ouvre une fenêtre d'ajout/consultation des fichiers justificatifs associés au pointage.
        function addJustificatifFile(pointageId) {
            // On récupére les variables du pointage courant.
            var month = \$('#form_Month option:selected').val();
            var year = \$('#form_Year option:selected').val();
            var username = \$('#form_Pointage option:selected').val();

            // On génére l'URL de la fênetre.
            var urlTemplate = '";
        // line 2497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_add_justificatif_file", array("month" => "MONTH", "year" => "YEAR", "username" => "USERNAME")), "html", null, true);
        echo "';
            var url = urlTemplate.replace('MONTH', month).replace('YEAR', year).replace('USERNAME', username);

            // On ouvre la fênetre.
            window.open(url, '_blank', 'height=350, width=500, top=30, left=30');
        }

        // Sauvegarde un export CSV du pointage.
        function saveCSV() {
            // Initialisation d'une variable de timer pour lancer la sauvegarde après # temps sans typing.
            var delay = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            // Lors d'une action sur les cellules de pourcentage d'affaire...
            \$('#tableFeuillePointage').on('keyup paste change', \".projectPercentageCell, .comments, td[contenteditable='true'], select\", function () {
                delay(function () {
                    // On récupére le tableau du pointage.
                    var pointageTable = \$('#tableFeuillePointage');

                    // Initialisation du tableau qui contiendras les données d'affaires.
                    var affaires = [];

                    // On récupére les lignes du tableau.
                    var dayCells = pointageTable.find(\".dayDateCell\");

                    // Pour chaques jours...
                    dayCells.each(function () {
                        // On récupére la date.
                        var date = \$(this).text() + \" \" + \$('#pointage_month_selector').find('option:selected').text();

                        // On récupére le commentaire.
                        var comments = \$(this).siblings('.comments').first().text();

                        // On récupére les cellules d'affaires.
                        var affairesCells = \$(this).siblings('.projectPercentageCell');

                        // On récupére la valeur de modulation
                        var modulation = \$(this).siblings('.dailyHoursMod').first().text();

                        // On récupére les valeurs d'absences.
                        var absences = {matin: \$(this).siblings('.abscenceMatinSelector').first().find('select').val(), am: \$(this).siblings('.abscenceAMSelector').first().find('select').val()};

                        // On récupére les valeurs de titre repas.
                        var titre_repas = \$(this).siblings('.titreRepasNumberSelector').first().find('select').val();

                        // On récupére les valeurs de forfait déplacement.
                        var forfait_deplacement = \$(this).siblings('.forfaitsDeplacementMontant').first().text();

                        // On récupére les valeurs de primes panier.
                        var prime_panier = \$(this).siblings('.primesPanierNumber').first().text();

                        // Pour chaques cellules d'affaires...
                        affairesCells.each(function () {
                            // On crée un objet d'affaire.
                            var affaire = {};

                            // On ajoute la date, le numéro d'affaire et la valeur à l'objet d'affaire.
                            affaire.date = date;
                            affaire.numAffaire = \$('tr:nth-child(2)').find('td').eq(\$(this).index()).text();
                            affaire.value = \$(this).text();
                            affaire.comments = comments;
                            affaire.modulation = modulation;
                            affaire.absences = absences;
                            affaire.titre_repas = titre_repas;
                            affaire.forfait_deplacement = forfait_deplacement;
                            affaire.prime_panier = prime_panier;

                            // On ajoute l'objet au tableau des données.
                            affaires.push(affaire);
                        });
                    });

                    // On transforme les données d'affaires en format JSON.
                    var jsonData = JSON.stringify(affaires);

                    // Requette Ajax pour générer un fichier CSV et le télécharger.
                    \$.ajax({
                        url: '";
        // line 2579
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_save_csv");
        echo "',
                        type: 'POST',
                        data: {tableData: jsonData, username: \$('#form_Pointage option:selected').val(), month: \$('#pointage_month_selector').val(), year: \$('#pointage_year_selector').val()}
                    });
                }, 1500);
            });
        }

        // Met à jours la liste des managers en fonction du mode RH.
        function gestionPointageSetRHMode(checkbox) {
            console.log(checkbox.is(':checked') ? 'Mode RH activé.' : 'Mode RH désactivé.');
            \$.ajax({
                url: '";
        // line 2591
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_pointage_ajax_gestion_pointages_rh_mode");
        echo "',
                type: 'POST',
                data: {rhMode: \$('#RHMode').is(':checked')},
                success: function (etablissements) {
                    console.log(etablissements);

                    // On récupère la liste des managers sous forme de tableau.
                    var etablissementsArray = JSON.parse(etablissements);

                    // On supprime les choix de manager déjà existant.
                    \$('#form_Etablissement option').remove();

                    // On ajout le choix par défaut.
                    \$('#form_Etablissement').append(\"<option value='' selected='selected'>Choisir un etablissement</option>\");

                    // Pour chaques managers de la liste...
                    \$.each(etablissementsArray, function (index, value) {
                        // On ajoute un choix au sélécteur de manager.
                        \$('#form_Etablissement').append(\"<option value='\" + value + \"'>\" + value + \"</option>\");
                    });

                    // On déclanche un changement sur le sélécteur de manager pour mettre à jours l'affichage.
                    \$('#form_Etablissement').trigger('change');
                }
            });
        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "NoxIntranetPointageBundle:Pointage:assistantesAgenceGestionPointages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2987 => 2591,  2972 => 2579,  2887 => 2497,  2827 => 2440,  2816 => 2432,  2549 => 2168,  2530 => 2152,  2512 => 2137,  2503 => 2131,  2490 => 2121,  2172 => 1806,  2094 => 1731,  2044 => 1684,  2010 => 1653,  1598 => 1244,  1399 => 1048,  1347 => 999,  1273 => 928,  1204 => 862,  1163 => 824,  1144 => 808,  1107 => 774,  829 => 499,  825 => 498,  795 => 471,  791 => 470,  647 => 329,  625 => 309,  604 => 306,  596 => 305,  590 => 304,  587 => 303,  570 => 302,  567 => 301,  565 => 297,  549 => 284,  507 => 244,  493 => 240,  485 => 239,  482 => 238,  475 => 233,  473 => 232,  467 => 231,  444 => 213,  421 => 195,  413 => 194,  410 => 193,  406 => 191,  404 => 190,  398 => 189,  390 => 188,  380 => 187,  377 => 186,  372 => 185,  370 => 184,  347 => 164,  339 => 161,  333 => 160,  327 => 159,  321 => 158,  315 => 157,  301 => 145,  286 => 143,  281 => 142,  279 => 141,  202 => 67,  197 => 65,  191 => 62,  185 => 59,  181 => 58,  173 => 53,  169 => 52,  164 => 50,  158 => 47,  154 => 46,  150 => 45,  144 => 42,  140 => 41,  136 => 40,  130 => 37,  126 => 36,  122 => 35,  115 => 31,  111 => 30,  107 => 29,  104 => 28,  96 => 25,  93 => 24,  91 => 23,  85 => 20,  81 => 19,  75 => 16,  71 => 15,  67 => 14,  63 => 13,  58 => 10,  55 => 9,  43 => 7,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetPointageBundle:Pointage:assistantesAgenceGestionPointages.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle/Resources/views/Pointage/assistantesAgenceGestionPointages.html.twig");
    }
}
