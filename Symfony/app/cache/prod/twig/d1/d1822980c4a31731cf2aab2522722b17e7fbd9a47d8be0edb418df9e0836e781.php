<?php

/* @NoxIntranetRessources/PrestationsInternes/demandeSummary.html.twig */
class __TwigTemplate_2c89f422ee50df234e5a93448950de68b3bb2b418e62bb69b42a3ba3c0cc5cd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/PrestationsInternes/demandeSummary.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Résumé de la demande \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Libelle", array()), "html", null, true);
        echo "\" ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Résumé de la demande \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Libelle", array()), "html", null, true);
        echo "\"";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        echo " 
    <div id='pointageSavingNotification' style='display: none; position: fixed; z-index: 500; background-color: rgba(41,154,11, 0.7); border: 1px outset white; border-radius: 10px; padding: 0.5%;'><p style='display: inline-block; margin: 0; font-size: 0.8vw; color: white;'>Sauvegarde en cours <img src='";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetpointage/images/savingNotification.svg"), "html", null, true);
        echo "' style='vertical-align: middle; height: 2em;'></p></div>

    <div style='clear: both; width: 70%; margin: auto; text-align: center;'>
        <!-- Si l'utilisateur est le DA1 de la demande. -->
        ";
        // line 12
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DA1", array()))) {
            // line 13
            echo "            <div class='demandeSummaryTips'>
                <p>
                    Vous êtes le DA émetteur associé à cette demande. <span class='demandeSummaryTipsClose'>&#10006;</span>
                </p>
            </div>
            ";
            // line 18
            if (($this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Status", array()) == "Chargé d'affaire")) {
                // line 19
                echo "                <!-- Si le status de la demande est \"Chargé d'affaire\". -->
                <div class='demandeSummaryTips demandeSummaryTipsUrgent'>
                    <p>
                        Votre reponse est en attente pour cette demande, veuillez <a href='";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_validation_da1", array("cleDemande" => $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "cleDemande", array()))), "html", null, true);
                echo "'>cliquez ici</a> pour la traiter. <span class='demandeSummaryTipsClose'>&#10006;</span>
                    </p>
                </div>   
            ";
            }
            // line 26
            echo "            <!-- Pour chaque propositions -->
            ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["propositions"]) ? $context["propositions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                // line 28
                echo "                <!-- Si le status de la proposition est 'Demande acceptée'. -->
                ";
                // line 29
                if (($this->getAttribute($context["proposition"], "Status", array()) == "Demande acceptée")) {
                    // line 30
                    echo "                    <div class='demandeSummaryTips demandeSummaryTipsUrgent'>
                        <p>
                            Votre reponse est en attente pour la proposition de ";
                    // line 32
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["proposition"], "DA2", array()), array(), "array"), "Firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["proposition"], "DA2", array()), array(), "array"), "Lastname", array()), "html", null, true);
                    echo ". <span class='demandeSummaryTipsClose'>&#10006;</span>
                        </p>
                    </div>
                ";
                }
                // line 36
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "     
        ";
        }
        // line 38
        echo "        <!-- Si l'utilisateur un des DA2 de la demande. -->
        ";
        // line 39
        if ($this->getAttribute((isset($context["DA2"]) ? $context["DA2"] : null), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method"), array(), "array", true, true)) {
            // line 40
            echo "            <div class='demandeSummaryTips'>
                <p>
                    Vous êtes l'un des DA destinataire associé à cette demande. <span class='demandeSummaryTipsClose'>&#10006;</span>
                </p>
            </div>
            <!-- Pour chaque propositions -->
            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["propositions"]) ? $context["propositions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                // line 47
                echo "                <!-- Si l'utilisateur est le DA2 de la proposition et que le status de la proposition est 'Attente validation DA2'. -->
                ";
                // line 48
                if ((($this->getAttribute($context["proposition"], "DA2", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method")) && ($this->getAttribute($context["proposition"], "Status", array()) == "Attente validation DA2"))) {
                    // line 49
                    echo "                    <div class='demandeSummaryTips demandeSummaryTipsUrgent'>
                        <p>
                            Votre reponse est en attente pour cette demande, veuillez <a href='";
                    // line 51
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_reponse_da2", array("cleDemande" => $this->getAttribute($context["proposition"], "cleDemande", array()), "reponse" => "valider")), "html", null, true);
                    echo "' style='color: green;'>cliquez ici</a> si vous <span style='color: green;'>pouvez</span> répondre à la demande ou <a href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_reponse_da2", array("cleDemande" => $this->getAttribute($context["proposition"], "cleDemande", array()), "reponse" => "refuser")), "html", null, true);
                    echo "' style='color: red;'>cliquez ici</a> si vous <span style='color: red;'>ne pouvez pas</span> répondre à la demande. <span class='demandeSummaryTipsClose'>&#10006;</span>
                        </p>
                    </div>
                ";
                }
                // line 55
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "        ";
        }
        // line 57
        echo "        <!-- Si l'utilisateur est le demandeur de la demande. -->
        ";
        // line 58
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Demandeur", array()))) {
            // line 59
            echo "            <div class='demandeSummaryTips'>
                <p>
                    Vous êtes le créateur de cette demande. <span class='demandeSummaryTipsClose'>&#10006;</span>
                </p>
            </div>
        ";
        }
        // line 65
        echo "    </div>

    <table id='validationD1Sum'>
        <tr>
            <th class='trLabel' colspan='2' style='padding-top: 5%; padding-bottom: 5%;'>Demande de prestation interne<br />Les champs éditables sont marqués d'un *.</th>
        </tr>
        <tr>
            <td class='trLabel'>Libellé*</td>
            <td class='editableField' contenteditable='true' field='Libelle'>";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Libelle", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class='trLabel'>Demandeur</td>
            <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandeur"]) ? $context["demandeur"] : null), "Firstname", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demandeur"]) ? $context["demandeur"] : null), "Lastname", array(), "method"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class='trLabel'>Date de création de la demande</td>
            <td>";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "dateCreation", array()), "d/m/Y à H:i:s"), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class='trLabel'>Lieu de l'opération*</td>
            <td class='editableField' contenteditable='true' field='LieuOperation'>";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "LieuOperation", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class='trLabel'>Lieu de la prestation*</td>
            <td class='editableField' contenteditable='true' field='LieuPrestation'>";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "LieuPrestation", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class='trLabel'>Descriptif de la prestation*</td>
            <td style='padding: 0;'>
                <div class='editableField' contenteditable='true' field='Descriptif' style=\"height: 10em; overflow: auto; word-wrap: break-word;\">";
        // line 94
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Descriptif", array()), "html", null, true);
        echo "</div>
            </td>
        </tr>
        <tr>
            <td class='trLabel'>Déplacements à prévoir*</td>
            <td class='editableField' contenteditable='true' field='Deplacement'>";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Deplacement", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class='trLabel'>Date de démarrage de la prestation*</td>
            <td class='editableFieldDate' field='DateDemarrage'>
                <select class='editableFieldDateDay'>
                    ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 106
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "d") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                </select>
                <select class='editableFieldDateMonth'>
                    ";
        // line 110
        $context["months"] = array(1 => "Janvier", 2 => "Février", 3 => "Mars", 4 => "Avril", 5 => "Mai", 6 => "Juin", 7 => "Juillet", 8 => "Août", 9 => "Septembre", 10 => "Octobre", 11 => "Novembre", 12 => "Décembre");
        // line 111
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 112
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "m") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["months"]) ? $context["months"] : null), $context["i"], array(), "array"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "     
                </select>
                <select class='editableFieldDateYear'>
                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "Y") - 50), (twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "Y") + 50)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 117
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateDemarrage", array()), "Y") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "     
                </select>
            </td>
        </tr>
        <tr>
            <td class='trLabel'>Date de rendu*</td>
            <td class='editableFieldDate' field='DateRendu'>
                <select class='editableFieldDateDay'>
                    ";
        // line 126
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 127
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "d") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                </select>
                <select class='editableFieldDateMonth'>
                    ";
        // line 131
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 132
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "m") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["months"]) ? $context["months"] : null), $context["i"], array(), "array"), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "     
                </select>
                <select class='editableFieldDateYear'>
                    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "Y") - 50), (twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "Y") + 50)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 137
            echo "                        <option value='";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "' ";
            if ((twig_date_format_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DateRendu", array()), "Y") == $context["i"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "     
                </select>
            </td>
        </tr>
        <tr>
            <td class='trLabel'>Livrables attendus*</td>
            <td style='padding: 0;'>
                <div class='editableField' contenteditable='true' field='Livrables' style=\"height: 10em; overflow: auto; word-wrap: break-word;\">";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Livrables", array()), "html", null, true);
        echo "</div>
            </td>
        </tr>
        <tr>
            <td class='trLabel'>Volume de sous traitance envisagé (€)*</td>
            <td class='editableField' contenteditable='true' field='VolumeSousTraitance'>";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "VolumeSousTraitance", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <td class='trLabel'>Status</td>
            <td style='background: ";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Status", array()), array(), "array"), "color", array()), "html", null, true);
        echo "; color: white;' id='demandeStatus'>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "Status", array()), array(), "array"), "message", array()), "html", null, true);
        echo "</td>
        </tr>
    </table>

    <table id='demandeSummaryPropositions'>
        <tr>
            <th colspan='5'>
                Propositions de prestations interne
            </th>
        </tr>
        <tr>
            <td class='trLabel' rowspan=\"2\">DA destinataire</td>
            <td class='trLabel' colspan=\"2\">Status</td>
            <td class='trLabel' rowspan=\"2\">Echanges</td>
            <td class='trLabel' rowspan=\"2\">Traiter</td>
        </tr>

        <tr>
            <th>Réponse DA émetteur</th>
            <th>Réponse DA destinataire</th>
        </tr>
        ";
        // line 175
        if (((isset($context["propositions"]) ? $context["propositions"] : null) != null)) {
            // line 176
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["propositions"]) ? $context["propositions"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["proposition"]) {
                // line 177
                echo "                <tr>
                    <td>";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["proposition"], "DA2", array()), array(), "array"), "Firstname", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["proposition"], "DA2", array()), array(), "array"), "Lastname", array()), "html", null, true);
                echo "</td>
                    <td class='propositionStatus' style='background: ";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "Status", array()), array(), "array"), "color", array()), "html", null, true);
                echo "; color: white;'>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "Status", array()), array(), "array"), "message", array()), "html", null, true);
                echo "</td>
                    <td style='background: ";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "DA2Answer", array()), array(), "array"), "color", array()), "html", null, true);
                echo "; color: white;'>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["status"]) ? $context["status"] : null), $this->getAttribute($context["proposition"], "DA2Answer", array()), array(), "array"), "message", array()), "html", null, true);
                echo "</td>
                    <td>
                        <a href='";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_proposition_echanges", array("cleDemande" => (isset($context["cleDemande"]) ? $context["cleDemande"] : null), "da2" => $this->getAttribute($context["proposition"], "da2", array()))), "html", null, true);
                echo "' style='color: #1F4E79; text-decoration: none; font-size: 0.8vw;'>Voir</a>
                    </td>
                    ";
                // line 184
                if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DA1", array())) && ($this->getAttribute($context["proposition"], "Status", array()) == "Demande acceptée"))) {
                    // line 185
                    echo "                        <td>
                            <button type='button' name='buttonvalidation' da2='";
                    // line 186
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "DA2", array()), "html", null, true);
                    echo "' value='validate' onclick='ajaxSaveDA2PropositionAnswer(this);' style='width: 100%; font-size: 0.8vw; margin-bottom: 5%;'>Accepté</button>
                            <button type='button' name='buttonvalidation' da2='";
                    // line 187
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "DA2", array()), "html", null, true);
                    echo "' value='refuse' onclick='ajaxSaveDA2PropositionAnswer(this);' style='width: 100%; font-size: 0.8vw; margin-top: 5%;'>Refusé</button>
                            <button type='button' name='buttonedit' da2='";
                    // line 188
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "DA2", array()), "html", null, true);
                    echo "' value='edit' onclick='editPropositionAnswer();' style='width: 100%; font-size: 0.8vw; margin-top: 5%; display: none;'>Modifer</button>
                        </td>      
                    ";
                } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                // line 190
(isset($context["app"]) ? $context["app"] : null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DA1", array())) && ($this->getAttribute($context["proposition"], "Status", array()) == "Validé par le DA1"))) {
                    // line 191
                    echo "                        <td>
                            <button type='button' name='buttonvalidation' da2='";
                    // line 192
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "DA2", array()), "html", null, true);
                    echo "' value='validate' onclick='ajaxSaveDA2PropositionAnswer(this);' disabled style='width: 100%; font-size: 0.8vw; margin-bottom: 5%; display: none;'>Accepté</button>
                            <button type='button' name='buttonvalidation' da2='";
                    // line 193
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "DA2", array()), "html", null, true);
                    echo "' value='refuse' onclick='ajaxSaveDA2PropositionAnswer(this);' style='width: 100%; font-size: 0.8vw; margin-top: 5%; display: none;'>Refusé</button>
                            <button type='button' name='buttonedit' da2='";
                    // line 194
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "DA2", array()), "html", null, true);
                    echo "' value='edit' onclick='editPropositionAnswer();' style='width: 100%; font-size: 0.8vw; margin-top: 5%;'>Modifer</button>
                        </td> 
                    ";
                } elseif ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(                // line 196
(isset($context["app"]) ? $context["app"] : null), "security", array()), "getToken", array(), "method"), "getUser", array(), "method"), "getUsername", array(), "method") == $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "DA1", array())) && ($this->getAttribute($context["proposition"], "Status", array()) == "Refusé par le DA1"))) {
                    // line 197
                    echo "                        <td>
                            <button type='button' name='buttonvalidation' da2='";
                    // line 198
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "DA2", array()), "html", null, true);
                    echo "' value='validate' onclick='ajaxSaveDA2PropositionAnswer(this);' style='width: 100%; font-size: 0.8vw; margin-bottom: 5%; display: none;'>Accepté</button>
                            <button type='button' name='buttonvalidation' da2='";
                    // line 199
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "DA2", array()), "html", null, true);
                    echo "' value='refuse' onclick='ajaxSaveDA2PropositionAnswer(this);' disabled style='width: 100%; font-size: 0.8vw; margin-top: 5%; display: none;'>Refusé</button>
                            <button type='button' name='buttonedit' da2='";
                    // line 200
                    echo twig_escape_filter($this->env, $this->getAttribute($context["proposition"], "DA2", array()), "html", null, true);
                    echo "' value='edit' onclick='editPropositionAnswer();' style='width: 100%; font-size: 0.8vw; margin-top: 5%;'>Modifer</button>
                        </td> 
                    ";
                } else {
                    // line 203
                    echo "                        <td style='background-color: LightGrey;'>  
                        </td>
                    ";
                }
                // line 206
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proposition'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 208
            echo "        ";
        } else {
            // line 209
            echo "            <tr><td colspan='5'>Il n'y a aucun résultat à afficher.</td></tr>
        ";
        }
        // line 211
        echo "    </table>

    <script>

        \$(window).load(function () {
            closeTooltip();
            editDemande();
        });

        // Affiche un écran de chargement lors de l'exéction de requettes ajax lourdes.
        \$(document).ajaxSend(function (event, request, settings) {
            var ajaxUrl = settings.url.substr(settings.url.lastIndexOf('/') + 1); // Retourne une URL relative.
            if (ajaxUrl === \"ajax-edition-demande-prestation-interne\") {
                savingNotification();
                \$('#pointageSavingNotification').finish().css('display', 'inline-block');
            }
        });

        // Cache l'écran de chargement et la notification de sauvegarde quand les requêtes ajax de chargement de la page et de sauvegarde sont terminées.
        \$(document).ajaxComplete(function () {
            if (\$.active <= 1) {
                \$('#pointageSavingNotification').finish().delay(2000).fadeOut();
            }
        });

        // Permet de faire disparaitre les tooltips.
        function closeTooltip() {
            \$('.demandeSummaryTipsClose').click(function () {
                \$(this).parent('p').parent('.demandeSummaryTips').remove();
            });
        }

        // Permet d'éditer les valeurs des champs de la demande.
        function editDemande() {
            // Lorsqu'un champ text est séléctionné.
            \$('#validationD1Sum .editableField').focus(function () {
                \$(this).css('background-color', 'seashell'); // On change la couleur de fond.
            });
            // Lorsqu'un champ texte n'est plus séléctionné.
            \$('#validationD1Sum .editableField').blur(function () {
                \$(this).css('background-color', 'initial'); // On lui redonne sa couleur d'origine.
            });

            // Initialisation d'un timer pour executer la fonction après # seconde sans frappe.
            var typewatch = (function () {
                var timer = 0;
                return function (callback, ms) {
                    clearTimeout(timer);
                    timer = setTimeout(callback, ms);
                };
            })();

            // Lorsqu'on modifie la valeur d'un champ texte.
            \$('#validationD1Sum .editableField').on(\"keyup paste input\", function () {
                var ajaxFieldInput = \$(this); // On récupére le champ.
                typewatch(function () {
                    // On enregistre sa nouvelle valeur avec un appel Ajax.
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 270
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ajax_edit_demande");
        echo "',
                        data: {'field': ajaxFieldInput.attr('field'), 'value': ajaxFieldInput.text(), 'cleDemande': '";
        // line 271
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "CleDemande", array()), "html", null, true);
        echo "'}
                    });
                }, 500);
            });

            // Lorsque qu'on modifie les valeurs des sélécteurs de date.
            \$('#validationD1Sum .editableFieldDate select').change(function () {
                // On récupére la nouvelle date.
                var date = \$(this).parent('.editableFieldDate').children('.editableFieldDateYear').val() + '-' + \$(this).parent('.editableFieldDate').children('.editableFieldDateMonth').val() + '-' + \$(this).parent('.editableFieldDate').children('.editableFieldDateDay').val();
                // On enregistre sa nouvelle valeur avec un appel Ajax.        
                \$.ajax({
                    type: 'POST',
                    url: '";
        // line 283
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ajax_edit_demande");
        echo "',
                    data: {'field': \$(this).parent('.editableFieldDate').attr('field'), 'value': date, 'cleDemande': '";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["demande"]) ? $context["demande"] : null), "CleDemande", array()), "html", null, true);
        echo "'}
                });
            });
        }

        // Affiche une fenêtre de notification de sauvegarde qui suit la souris.
        function savingNotification() {
            // Lorsque la souris bouge.
            \$(document).mousemove(function (event) {
                \$('#pointageSavingNotification').css('left', event.pageX + 20);
                \$('#pointageSavingNotification').css('top', event.pageY);
            });
        }

        // Sauvegarde les réponses aux propositions en base de donnée.
        function ajaxSaveDA2PropositionAnswer(element) {
            // Lorsque une réponse est séléctionnée
            var username = \$(element).attr('da2'); // On récupére le nom du DA2.
            var answer = \$(element).val(); // On récupére la réponse.
            // On execute la requête Ajax de sauvegarde en base de données.
            \$.ajax({
                url: '";
        // line 305
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_ajax_save_proposition_da1_answer");
        echo "',
                type: 'POST',
                data: {'username': username, 'answer': answer, 'cleDemande': '";
        // line 307
        echo twig_escape_filter($this->env, (isset($context["cleDemande"]) ? $context["cleDemande"] : null), "html", null, true);
        echo "'},
                success: function (response) {

                    console.log(response);

                    // On change le message du status de la proposition celui du nouveau status.
                    \$(element).parent('td').siblings('.propositionStatus').replaceWith(\"<td class='propositionStatus' style='background: \" + response.statusProposition.color + \"; color: white;'>\" + response.statusProposition.message + \"</td>\");
                    \$('#demandeStatus').replaceWith(\"<td id='demandeStatus' style='background: \" + response.statusDemande.color + \"; color: white;'>\" + response.statusDemande.message + \"</td>\");
                    \$(\"button[name='buttonedit']\").show(); // On affiche le bouton de modification.
                    \$(\"button[name='buttonvalidation']\").hide(); // On cache les boutons de validation.
                    // On active/désactive les boutons de validation.            
                    if (answer === 'validate') {
                        \$(element).attr('disabled', 'disabled');
                        \$(element).next().removeAttr('disabled');
                    } else {
                        \$(element).attr('disabled', 'disabled');
                        \$(element).prev().removeAttr('disabled');
                    }
                }
            });
        }

        // Permet de mofidier la réponse de la proposition.
        function editPropositionAnswer() {
            \$(\"button[name='buttonedit']\").hide();
            \$(\"button[name='buttonvalidation']\").show();
        }

    </script>
";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/PrestationsInternes/demandeSummary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  653 => 307,  648 => 305,  624 => 284,  620 => 283,  605 => 271,  601 => 270,  540 => 211,  536 => 209,  533 => 208,  526 => 206,  521 => 203,  515 => 200,  511 => 199,  507 => 198,  504 => 197,  502 => 196,  497 => 194,  493 => 193,  489 => 192,  486 => 191,  484 => 190,  479 => 188,  475 => 187,  471 => 186,  468 => 185,  466 => 184,  461 => 182,  454 => 180,  448 => 179,  442 => 178,  439 => 177,  434 => 176,  432 => 175,  406 => 154,  399 => 150,  391 => 145,  382 => 138,  367 => 137,  363 => 136,  358 => 133,  343 => 132,  339 => 131,  335 => 129,  320 => 127,  316 => 126,  306 => 118,  291 => 117,  287 => 116,  282 => 113,  267 => 112,  262 => 111,  260 => 110,  256 => 108,  241 => 106,  237 => 105,  228 => 99,  220 => 94,  212 => 89,  205 => 85,  198 => 81,  189 => 77,  182 => 73,  172 => 65,  164 => 59,  162 => 58,  159 => 57,  156 => 56,  150 => 55,  141 => 51,  137 => 49,  135 => 48,  132 => 47,  128 => 46,  120 => 40,  118 => 39,  115 => 38,  106 => 36,  97 => 32,  93 => 30,  91 => 29,  88 => 28,  84 => 27,  81 => 26,  74 => 22,  69 => 19,  67 => 18,  60 => 13,  58 => 12,  51 => 8,  46 => 7,  38 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetRessources/PrestationsInternes/demandeSummary.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle\\Resources\\views\\PrestationsInternes\\demandeSummary.html.twig");
    }
}
