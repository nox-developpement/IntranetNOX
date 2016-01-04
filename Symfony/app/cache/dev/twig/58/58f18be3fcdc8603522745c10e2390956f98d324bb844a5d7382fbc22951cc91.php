<?php

/* NoxIntranetRessourcesBundle:References:references.html.twig */
class __TwigTemplate_0a5ca07891f56b6fd5e1b8de98f78e299ed30314a280bfd6af0645da8f7f4dd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:References:references.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'textEncart' => array($this, 'block_textEncart'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c30c602851ac7b7f8234b0c1055576ccc46c13cf71d9c69ff984fdc59d26cc19 = $this->env->getExtension("native_profiler");
        $__internal_c30c602851ac7b7f8234b0c1055576ccc46c13cf71d9c69ff984fdc59d26cc19->enter($__internal_c30c602851ac7b7f8234b0c1055576ccc46c13cf71d9c69ff984fdc59d26cc19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:References:references.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c30c602851ac7b7f8234b0c1055576ccc46c13cf71d9c69ff984fdc59d26cc19->leave($__internal_c30c602851ac7b7f8234b0c1055576ccc46c13cf71d9c69ff984fdc59d26cc19_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9ba236faf926b8c3965715f2130e9ad02bf45c5791caf1e11ac4d0aef41e598a = $this->env->getExtension("native_profiler");
        $__internal_9ba236faf926b8c3965715f2130e9ad02bf45c5791caf1e11ac4d0aef41e598a->enter($__internal_9ba236faf926b8c3965715f2130e9ad02bf45c5791caf1e11ac4d0aef41e598a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Références
";
        
        $__internal_9ba236faf926b8c3965715f2130e9ad02bf45c5791caf1e11ac4d0aef41e598a->leave($__internal_9ba236faf926b8c3965715f2130e9ad02bf45c5791caf1e11ac4d0aef41e598a_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_dc3dcdc8c85660de10c364d1f465edafbf11cec5e603533ce13510686206018d = $this->env->getExtension("native_profiler");
        $__internal_dc3dcdc8c85660de10c364d1f465edafbf11cec5e603533ce13510686206018d->enter($__internal_dc3dcdc8c85660de10c364d1f465edafbf11cec5e603533ce13510686206018d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Références";
        
        $__internal_dc3dcdc8c85660de10c364d1f465edafbf11cec5e603533ce13510686206018d->leave($__internal_dc3dcdc8c85660de10c364d1f465edafbf11cec5e603533ce13510686206018d_prof);

    }

    // line 9
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_1199e9c34cb4802950e239679acdbeb6ed69a54859a05567fc09b819f92b92a8 = $this->env->getExtension("native_profiler");
        $__internal_1199e9c34cb4802950e239679acdbeb6ed69a54859a05567fc09b819f92b92a8->enter($__internal_1199e9c34cb4802950e239679acdbeb6ed69a54859a05567fc09b819f92b92a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

        // line 10
        echo "
    ";
        // line 11
        if (array_key_exists("text", $context)) {
            echo (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"));
        }
        // line 12
        echo "
    ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "
        ";
            // line 15
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexteEncart")));
            echo "

        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
            echo "

        ";
            // line 20
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
            echo "

        ";
            // line 23
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textEncartField")));
            echo "

        ";
            // line 25
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
            echo "

        <img src='";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Text-Editor-32.png"), "html", null, true);
            echo "' id='texteEncartImg'>

    ";
        }
        // line 30
        echo "
";
        
        $__internal_1199e9c34cb4802950e239679acdbeb6ed69a54859a05567fc09b819f92b92a8->leave($__internal_1199e9c34cb4802950e239679acdbeb6ed69a54859a05567fc09b819f92b92a8_prof);

    }

    // line 33
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_239300bf113ca027d08631f77deae49d0db3542f35e816a7c1adf63f56e33836 = $this->env->getExtension("native_profiler");
        $__internal_239300bf113ca027d08631f77deae49d0db3542f35e816a7c1adf63f56e33836->enter($__internal_239300bf113ca027d08631f77deae49d0db3542f35e816a7c1adf63f56e33836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 34
        echo "
    ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) {
            echo " 

        <div id=\"menuAdminReferences\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/references', 'Gestionnaire de fichiers - Références');\"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 43
        echo "
    ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["references"]) ? $context["references"] : $this->getContext($context, "references")));
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 45
            echo "
        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/uploads/References/";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "lien", array(), "array"), "html", null, true);
            echo "', 'Références');\">
                <img 
                    src=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "\" alt=\"PDF\" 
                    onmouseover=\"this.src = '";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png"), "html", null, true);
            echo "';\" 
                    onmouseout=\"this.src = '";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "';\"
                    >
            </a>

            <ul>

                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["reference"], "proprietes", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
                // line 59
                echo "
                    ";
                // line 60
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Title")) {
                    echo " <li> Titre : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 61
                echo "
                    ";
                // line 62
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Author")) {
                    echo " <li> Auteur : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 63
                echo "
                    ";
                // line 64
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Subject")) {
                    echo " <li> Sujet : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 65
                echo "
                    ";
                // line 66
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Keywords")) {
                    echo " <li> Mots clés : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 67
                echo "
                    ";
                // line 68
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Pages")) {
                    echo " <li> Nombre de page(s) : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 69
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                
                <li> Posté le : ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "dateEnvoi", array(), "array"), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
";
        
        $__internal_239300bf113ca027d08631f77deae49d0db3542f35e816a7c1adf63f56e33836->leave($__internal_239300bf113ca027d08631f77deae49d0db3542f35e816a7c1adf63f56e33836_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:References:references.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 79,  238 => 72,  235 => 71,  228 => 69,  222 => 68,  219 => 67,  213 => 66,  210 => 65,  204 => 64,  201 => 63,  195 => 62,  192 => 61,  186 => 60,  183 => 59,  179 => 58,  170 => 52,  166 => 51,  162 => 50,  157 => 48,  152 => 45,  148 => 44,  145 => 43,  134 => 35,  131 => 34,  125 => 33,  117 => 30,  111 => 27,  106 => 25,  100 => 23,  94 => 20,  89 => 17,  84 => 15,  81 => 14,  79 => 13,  76 => 12,  72 => 11,  69 => 10,  63 => 9,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Références*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Références{% endblock %}*/
/* */
/* {% block textEncart %}*/
/* */
/*     {% if text is defined %}{{ text|raw }}{% endif %}*/
/* */
/*     {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*         {{ form_start(formulaire, {'attr': {'id': 'formulaireTexteEncart' }}) }}*/
/* */
/*         {{ form_errors(formulaire) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.text) }}*/
/* */
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(formulaire.text, {'attr': {'class': 'textEncartField'}}) }}*/
/* */
/*         {{ form_end(formulaire) }}*/
/* */
/*         <img src='{{ asset('bundles/noxintranetadministration/images/Text-Editor-32.png') }}' id='texteEncartImg'>*/
/* */
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_REFERENCES') %} */
/* */
/*         <div id="menuAdminReferences" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/references', 'Gestionnaire de fichiers - Références');"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     {% for reference in references %}*/
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/uploads/References/{{ reference['lien'] }}', 'Références');">*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}" alt="PDF" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}';"*/
/*                     >*/
/*             </a>*/
/* */
/*             <ul>*/
/* */
/*                 {% for propriete in reference['proprietes'] %}*/
/* */
/*                     {% if propriete['label'] == 'Title' %} <li> Titre : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Author' %} <li> Auteur : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Subject' %} <li> Sujet : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Keywords' %} <li> Mots clés : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% if propriete['label'] == 'Pages' %} <li> Nombre de page(s) : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                 {% endfor %}*/
/*                 */
/*                 <li> Posté le : {{ reference['dateEnvoi'] }} </li>*/
/* */
/*             </ul>*/
/* */
/*         </div>*/
/* */
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
