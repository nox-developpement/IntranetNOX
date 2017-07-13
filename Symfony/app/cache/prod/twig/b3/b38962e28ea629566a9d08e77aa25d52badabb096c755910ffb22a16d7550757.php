<?php

/* @NoxIntranetAdministration/ScriptMonitoring/scriptMonitoring.html.twig */
class __TwigTemplate_a1f5e09e5f327cbfe0be188e5d56778946a0e86099318b313b9c66810fd3e7e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/ScriptMonitoring/scriptMonitoring.html.twig", 1);
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
        // line 4
        echo "    Monitoring des scripts planifiés
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Monitoring des scripts planifiés";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "    <style>
        form[name='addScript'] {
            display: inline-block;
            width: auto;
            padding: 0;           
            border: none;

        }

        form[name='addScript'] fieldset {
            margin: 0;
            padding-top: 0;
            padding-bottom: 0;
            background-color: rgba(255,255,255, 0.7);
        }

        #formDiv {
            text-align: center;
            margin-bottom: 2em;
        }

        #monitoringTable {
            width: 70%;
            margin: auto;
            border-collapse: collapse;         
            text-align: center;
            margin-bottom: 2em;
        }

        #monitoringTable, #monitoringTable tr, #monitoringTable th, #monitoringTable td {
            border: 1px solid black;
        }

        #monitoringTable th {
            background-color: #1F4E79;
            color: white;
        }

        .led-green {
            margin: 0 auto;
            width: 24px;
            height: 24px;
            background-color: #ABFF00;
            border-radius: 50%;
            box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #304701 0 -1px 9px, #89FF00 0 2px 12px;
        }

        .led-red {
            margin: 0 auto;
            width: 24px;
            height: 24px;
            background-color: #F00;
            border-radius: 50%;
            box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 12px;
            -webkit-animation: blinkRed 0.5s infinite;
            -moz-animation: blinkRed 0.5s infinite;
            -ms-animation: blinkRed 0.5s infinite;
            -o-animation: blinkRed 0.5s infinite;
            animation: blinkRed 0.5s infinite;
        }

        @-webkit-keyframes blinkRed {
            from { background-color: #F00; }
            50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
            to { background-color: #F00; }
        }
        @-moz-keyframes blinkRed {
            from { background-color: #F00; }
            50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
            to { background-color: #F00; }
        }
        @-ms-keyframes blinkRed {
            from { background-color: #F00; }
            50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
            to { background-color: #F00; }
        }
        @-o-keyframes blinkRed {
            from { background-color: #F00; }
            50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
            to { background-color: #F00; }
        }
        @keyframes blinkRed {
            from { background-color: #F00; }
            50% { background-color: #A00; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #441313 0 -1px 9px, rgba(255, 0, 0, 0.5) 0 2px 0;}
            to { background-color: #F00; }
        }

        .statusLed {
            padding-top: 2%;
            padding-bottom: 2%;
        }

        .led-yellow {
            margin: 0 auto;
            width: 24px;
            height: 24px;
            background-color: #FF0;
            border-radius: 50%;
            box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 12px;
            -webkit-animation: blinkYellow 1s infinite;
            -moz-animation: blinkYellow 1s infinite;
            -ms-animation: blinkYellow 1s infinite;
            -o-animation: blinkYellow 1s infinite;
            animation: blinkYellow 1s infinite;
        }

        @-webkit-keyframes blinkYellow {
            from { background-color: #FF0; }
            50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
            to { background-color: #FF0; }
        }
        @-moz-keyframes blinkYellow {
            from { background-color: #FF0; }
            50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
            to { background-color: #FF0; }
        }
        @-ms-keyframes blinkYellow {
            from { background-color: #FF0; }
            50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
            to { background-color: #FF0; }
        }
        @-o-keyframes blinkYellow {
            from { background-color: #FF0; }
            50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
            to { background-color: #FF0; }
        }
        @keyframes blinkYellow {
            from { background-color: #FF0; }
            50% { background-color: #AA0; box-shadow: rgba(0, 0, 0, 0.2) 0 -1px 7px 1px, inset #808002 0 -1px 9px, #FF0 0 2px 0; }
            to { background-color: #FF0; }
        }
        
        .delete_script {
            color: red;
            text-decoration: none;
            font-size: calc(20px + 0.2vw);
        }
        
        #addScript_description {
            box-sizing: border-box;
            width: 100%;
            height: 150px;
        }
    </style>

    <table id='monitoringTable'>
        <tr>
            <th>Nom du script</th>
            <th>Info</th>
            <th>Fréquence d'itération</th>
            <th>Dernière éxecution</th>
            <th>Statut</th>
            <th>Supprimer</th>
        </tr>
        ";
        // line 164
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monitoredScripts"]) ? $context["monitoredScripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 165
            echo "            <tr>
                <td>
                    ";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($context["script"], "ScriptName", array()), "html", null, true);
            echo "
                </td>
                <td>
                    <span title=\"";
            // line 170
            echo twig_escape_filter($this->env, $this->getAttribute($context["script"], "Description", array()), "html", null, true);
            echo "\" style=\"border-bottom: 1px dotted black; cursor: help;\">?</span>
                </td>
                <td>
                    Toutes les ";
            // line 173
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["script"], "Statut", array(0 => (isset($context["kernelRootDir"]) ? $context["kernelRootDir"] : null)), "method"), "frequencyHour", array()), "html", null, true);
            echo " heure(s)
                </td>
                <td>Le ";
            // line 175
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["script"], "Statut", array(0 => (isset($context["kernelRootDir"]) ? $context["kernelRootDir"] : null)), "method"), "lastIteration", array()), "d/m/Y à H:i:s"), "html", null, true);
            echo "</td>

                ";
            // line 177
            $context["statusClass"] = array("En cours" => "led-yellow", "Erreur" => "led-red", "OK" => "led-green");
            // line 178
            echo "                <td class=\"statusLed\">
                    <div class='";
            // line 179
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statusClass"]) ? $context["statusClass"] : null), $this->getAttribute($this->getAttribute($context["script"], "Statut", array(0 => (isset($context["kernelRootDir"]) ? $context["kernelRootDir"] : null)), "method"), "Statut", array()), array(), "array"), "html", null, true);
            echo "' title='Code de retour: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["script"], "Statut", array(0 => (isset($context["kernelRootDir"]) ? $context["kernelRootDir"] : null)), "method"), "lastTaskResult", array()), "html", null, true);
            echo "'></div>
                </td>
                <td>
                    <a class=\"delete_script\" href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_delete_script_monitoring", array("scriptId" => $this->getAttribute($context["script"], "Id", array()))), "html", null, true);
            echo "\">&#10006;</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "    </table>

    <div id=\"formDiv\">
        ";
        // line 189
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAddScript"]) ? $context["formAddScript"] : null), 'form_start');
        echo "
        <fieldset>
            <legend>Ajouter un monitoring de script</legend>

            <p>";
        // line 193
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddScript"]) ? $context["formAddScript"] : null), "scriptName", array()), 'label');
        echo " : ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddScript"]) ? $context["formAddScript"] : null), "scriptName", array()), 'widget');
        echo "</p>
            <p>
                ";
        // line 195
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddScript"]) ? $context["formAddScript"] : null), "description", array()), 'label');
        echo "<br />
                ";
        // line 196
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddScript"]) ? $context["formAddScript"] : null), "description", array()), 'widget');
        echo "
            </p>
            <p>";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAddScript"]) ? $context["formAddScript"] : null), "add", array()), 'widget');
        echo "</p>
        </fieldset>
        ";
        // line 200
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAddScript"]) ? $context["formAddScript"] : null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/ScriptMonitoring/scriptMonitoring.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 200,  284 => 198,  279 => 196,  275 => 195,  268 => 193,  261 => 189,  256 => 186,  246 => 182,  238 => 179,  235 => 178,  233 => 177,  228 => 175,  223 => 173,  217 => 170,  211 => 167,  207 => 165,  203 => 164,  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetAdministration/ScriptMonitoring/scriptMonitoring.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle\\Resources\\views\\ScriptMonitoring\\scriptMonitoring.html.twig");
    }
}
