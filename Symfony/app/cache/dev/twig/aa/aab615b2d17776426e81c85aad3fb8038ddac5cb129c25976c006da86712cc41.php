<?php

/* NoxIntranetRessourcesBundle:References:References.html.twig */
class __TwigTemplate_7c5fa6ffade3eff38ae8b5d13281d6faa23b759aa14170b55ad21b6607a035d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:References:References.html.twig", 1);
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
        $__internal_c81c039abccd1ca7de846cd3566e2b4b85f792c9bd1b8bcc0c22ddd572917d2a = $this->env->getExtension("native_profiler");
        $__internal_c81c039abccd1ca7de846cd3566e2b4b85f792c9bd1b8bcc0c22ddd572917d2a->enter($__internal_c81c039abccd1ca7de846cd3566e2b4b85f792c9bd1b8bcc0c22ddd572917d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:References:References.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c81c039abccd1ca7de846cd3566e2b4b85f792c9bd1b8bcc0c22ddd572917d2a->leave($__internal_c81c039abccd1ca7de846cd3566e2b4b85f792c9bd1b8bcc0c22ddd572917d2a_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_4f16e31b5e16f15afacfcc1fb02613f780ad3dccc6f7d14474bf5c2b441d551b = $this->env->getExtension("native_profiler");
        $__internal_4f16e31b5e16f15afacfcc1fb02613f780ad3dccc6f7d14474bf5c2b441d551b->enter($__internal_4f16e31b5e16f15afacfcc1fb02613f780ad3dccc6f7d14474bf5c2b441d551b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Références
";
        
        $__internal_4f16e31b5e16f15afacfcc1fb02613f780ad3dccc6f7d14474bf5c2b441d551b->leave($__internal_4f16e31b5e16f15afacfcc1fb02613f780ad3dccc6f7d14474bf5c2b441d551b_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_1d26b3c401f49b7843195188f6a1454fb9b73d4edf64a619946bb02e04df9568 = $this->env->getExtension("native_profiler");
        $__internal_1d26b3c401f49b7843195188f6a1454fb9b73d4edf64a619946bb02e04df9568->enter($__internal_1d26b3c401f49b7843195188f6a1454fb9b73d4edf64a619946bb02e04df9568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Références";
        
        $__internal_1d26b3c401f49b7843195188f6a1454fb9b73d4edf64a619946bb02e04df9568->leave($__internal_1d26b3c401f49b7843195188f6a1454fb9b73d4edf64a619946bb02e04df9568_prof);

    }

    // line 9
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_96c695bc9d517f357afed54da22fc5fb6141a6a16c82a354a31f65862c272b44 = $this->env->getExtension("native_profiler");
        $__internal_96c695bc9d517f357afed54da22fc5fb6141a6a16c82a354a31f65862c272b44->enter($__internal_96c695bc9d517f357afed54da22fc5fb6141a6a16c82a354a31f65862c272b44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

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
        
        $__internal_96c695bc9d517f357afed54da22fc5fb6141a6a16c82a354a31f65862c272b44->leave($__internal_96c695bc9d517f357afed54da22fc5fb6141a6a16c82a354a31f65862c272b44_prof);

    }

    // line 33
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_adc658f17e2095f0cae2552324d8bb829ab46188050e5067854724acd68ae06a = $this->env->getExtension("native_profiler");
        $__internal_adc658f17e2095f0cae2552324d8bb829ab46188050e5067854724acd68ae06a->enter($__internal_adc658f17e2095f0cae2552324d8bb829ab46188050e5067854724acd68ae06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
    <div id=\"rechercheUser\">
        <div id=\"rechercheCompetencesDiv\">
            <form action='";
        // line 46
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references_recherche");
        echo "' type='GET'>
                <label for=\"keyword\"> Rechercher par mots-clés : </label>
                <input type=\"text\" name='keyword' id=\"keyword\" />
                <input type=\"submit\" name=\"Rechercher\" value=\"Rechercher\" class=\"boutonFormulaire\" >
                <button value=\"Annuler\" class=\"boutonFormulaire\" id=\"boutonAnnuler\" onclick=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references");
        echo "\"> RAZ </button>
            </form>
        </div>
    </div>

    ";
        // line 55
        if (((isset($context["references"]) ? $context["references"] : $this->getContext($context, "references")) == null)) {
            // line 56
            echo "
        <div class=\"divNews\">

            Votre recherche n'a retourné aucun résultat.

        </div>

    ";
        }
        // line 64
        echo "
    ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["references"]) ? $context["references"] : $this->getContext($context, "references")));
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 66
            echo "
        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '/Symfony/web/uploads/References/";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "lien", array(), "array"), "html", null, true);
            echo "', 'Références');\">
                <img 
                    src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "\" alt=\"PDF\" 
                    onmouseover=\"this.src = '";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png"), "html", null, true);
            echo "';\" 
                    onmouseout=\"this.src = '";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "';\"
                    >
            </a>

            <ul>

                <li> Nom du fichier : ";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "nom", array(), "array"), "html", null, true);
            echo " </li>

                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["reference"], "proprietes", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
                // line 82
                echo "
                    ";
                // line 83
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Title")) {
                    echo " <li> Titre : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 84
                echo "
                    ";
                // line 85
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Author")) {
                    echo " <li> Auteur : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 86
                echo "
                    ";
                // line 87
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Subject")) {
                    echo " <li> Sujet : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 88
                echo "
                    ";
                // line 89
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Keywords")) {
                    echo " <li> Mots clés : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 90
                echo "
                    ";
                // line 91
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Pages")) {
                    echo " <li> Nombre de page(s) : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 92
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "
                <li> Posté le : ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "dateEnvoi", array(), "array"), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
";
        
        $__internal_adc658f17e2095f0cae2552324d8bb829ab46188050e5067854724acd68ae06a->leave($__internal_adc658f17e2095f0cae2552324d8bb829ab46188050e5067854724acd68ae06a_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:References:References.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 102,  275 => 95,  272 => 94,  265 => 92,  259 => 91,  256 => 90,  250 => 89,  247 => 88,  241 => 87,  238 => 86,  232 => 85,  229 => 84,  223 => 83,  220 => 82,  216 => 81,  211 => 79,  202 => 73,  198 => 72,  194 => 71,  189 => 69,  184 => 66,  180 => 65,  177 => 64,  167 => 56,  165 => 55,  157 => 50,  150 => 46,  145 => 43,  134 => 35,  131 => 34,  125 => 33,  117 => 30,  111 => 27,  106 => 25,  100 => 23,  94 => 20,  89 => 17,  84 => 15,  81 => 14,  79 => 13,  76 => 12,  72 => 11,  69 => 10,  63 => 9,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
/*     <div id="rechercheUser">*/
/*         <div id="rechercheCompetencesDiv">*/
/*             <form action='{{ path('nox_intranet_references_recherche') }}' type='GET'>*/
/*                 <label for="keyword"> Rechercher par mots-clés : </label>*/
/*                 <input type="text" name='keyword' id="keyword" />*/
/*                 <input type="submit" name="Rechercher" value="Rechercher" class="boutonFormulaire" >*/
/*                 <button value="Annuler" class="boutonFormulaire" id="boutonAnnuler" onclick="{{ path('nox_intranet_references') }}"> RAZ </button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if references == null %}*/
/* */
/*         <div class="divNews">*/
/* */
/*             Votre recherche n'a retourné aucun résultat.*/
/* */
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
/*                 <li> Nom du fichier : {{ reference['nom'] }} </li>*/
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
/* */
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
