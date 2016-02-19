<?php

/* NoxIntranetRessourcesBundle:References:References.html.twig */
class __TwigTemplate_569dcd85d8d30f5b877481a4dbc81f622554bd68606383e00ff8f0f173144246 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        // line 4
        echo "    Références
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Références";
    }

    // line 9
    public function block_textEncart($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        if (array_key_exists("text", $context)) {
            echo (isset($context["text"]) ? $context["text"] : null);
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
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("id" => "formulaireTexteEncart")));
            echo "

        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
            echo "

        ";
            // line 20
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'errors');
            echo "

        ";
            // line 23
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'widget', array("attr" => array("class" => "textEncartField")));
            echo "

        ";
            // line 25
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
            echo "

        <img src='";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Text-Editor-32.png"), "html", null, true);
            echo "' id='texteEncartImg'>

    ";
        }
        // line 30
        echo "
";
    }

    // line 33
    public function block_contenu($context, array $blocks = array())
    {
        // line 34
        echo "
    ";
        // line 35
        if ($this->env->getExtension('security')->isGranted("ROLE_REFERENCES")) {
            echo " 

        <div id=\"menuAdminReferences\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/references', 'Gestionnaire de fichiers - Références');\"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>
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
                <input type=\"text\" name='keyword' id=\"keyword\" placeholder=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\"/>
                <input type=\"submit\" name=\"Rechercher\" value=\"Rechercher\" class=\"boutonFormulaire\" >
                <button value=\"Annuler\" class=\"boutonFormulaire\" id=\"boutonAnnuler\" onclick=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references");
        echo "\"> RAZ </button>
            </form>
        </div>
    </div>

    <div id=\"Keywords\">
        <p>
            ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keywords"]) ? $context["keywords"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
            // line 58
            echo "                <span style=\"font-size: calc(0.7vw + ";
            if ((($this->getAttribute($context["keyword"], "Nombre", array()) / (isset($context["nombreMax"]) ? $context["nombreMax"] : null)) < 1)) {
                echo twig_escape_filter($this->env, ($this->getAttribute($context["keyword"], "Nombre", array()) / (isset($context["nombreMax"]) ? $context["nombreMax"] : null)), "html", null, true);
            } else {
                echo "1";
            }
            echo "vw)\">
                    <a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("nox_intranet_references_recherche");
            echo "?keyword=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "Keyword", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["keyword"], "Keyword", array()), "html", null, true);
            echo "</a>
                </span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </p>
    </div>

    ";
        // line 65
        if (((isset($context["references"]) ? $context["references"] : null) == null)) {
            // line 66
            echo "
        <div class=\"divNews\">

            Votre recherche n'a retourné aucun résultat.

        </div>

    ";
        }
        // line 74
        echo "
    ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["references"]) ? $context["references"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["reference"]) {
            // line 76
            echo "
        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Lien", array()), "html", null, true);
            echo "', 'Références');\">
                <img 
                    src=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "\" alt=\"PDF\" 
                    onmouseover=\"this.src = '";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png"), "html", null, true);
            echo "';\" 
                    onmouseout=\"this.src = '";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "';\"
                    >
            </a>

            <ul>

                <li> Nom du fichier : ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Nom", array()), "html", null, true);
            echo " </li>

                ";
            // line 91
            if (($this->getAttribute($context["reference"], "Title", array()) != null)) {
                echo " <li> Titre : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Title", array()), "html", null, true);
                echo " </li> ";
            }
            // line 92
            echo "
                ";
            // line 93
            if (($this->getAttribute($context["reference"], "Author", array()) != null)) {
                echo " <li> Auteur : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Author", array()), "html", null, true);
                echo " </li> ";
            }
            // line 94
            echo "
                ";
            // line 95
            if (($this->getAttribute($context["reference"], "Subject", array()) != null)) {
                echo " <li> Sujet : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Subject", array()), "html", null, true);
                echo " </li> ";
            }
            // line 96
            echo "
                ";
            // line 97
            if (($this->getAttribute($context["reference"], "Keywords", array()) != null)) {
                echo " <li> Mots : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Keywords", array()), "html", null, true);
                echo " </li> ";
            }
            // line 98
            echo "
                ";
            // line 99
            if (($this->getAttribute($context["reference"], "Pages", array()) != null)) {
                echo " <li> Nombre de page(s) : ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "Pages", array()), "html", null, true);
                echo " </li> ";
            }
            // line 100
            echo "
                <li> Posté le : ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["reference"], "dateEnvoi", array()), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reference'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "
";
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
        return array (  283 => 108,  270 => 101,  267 => 100,  261 => 99,  258 => 98,  252 => 97,  249 => 96,  243 => 95,  240 => 94,  234 => 93,  231 => 92,  225 => 91,  220 => 89,  211 => 83,  207 => 82,  203 => 81,  198 => 79,  193 => 76,  189 => 75,  186 => 74,  176 => 66,  174 => 65,  169 => 62,  156 => 59,  147 => 58,  143 => 57,  133 => 50,  128 => 48,  123 => 46,  118 => 43,  107 => 35,  104 => 34,  101 => 33,  96 => 30,  90 => 27,  85 => 25,  79 => 23,  73 => 20,  68 => 17,  63 => 15,  60 => 14,  58 => 13,  55 => 12,  51 => 11,  48 => 10,  45 => 9,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
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
/*         <img src='{{ asset('bundles/noxintranetressources/images/Text-Editor-32.png') }}' id='texteEncartImg'>*/
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
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/references', 'Gestionnaire de fichiers - Références');"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div id="rechercheUser">*/
/*         <div id="rechercheCompetencesDiv">*/
/*             <form action='{{ path('nox_intranet_references_recherche') }}' type='GET'>*/
/*                 <label for="keyword"> Rechercher par mots-clés : </label>*/
/*                 <input type="text" name='keyword' id="keyword" placeholder="{{ app.request.get('keyword') }}"/>*/
/*                 <input type="submit" name="Rechercher" value="Rechercher" class="boutonFormulaire" >*/
/*                 <button value="Annuler" class="boutonFormulaire" id="boutonAnnuler" onclick="{{ path('nox_intranet_references') }}"> RAZ </button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="Keywords">*/
/*         <p>*/
/*             {% for keyword in keywords %}*/
/*                 <span style="font-size: calc(0.7vw + {% if keyword.Nombre/nombreMax < 1 %}{{ keyword.Nombre/nombreMax }}{% else %}1{% endif %}vw)">*/
/*                     <a href="{{ path('nox_intranet_references_recherche') }}?keyword={{ keyword.Keyword }}"> {{ keyword.Keyword }}</a>*/
/*                 </span>*/
/*             {% endfor %}*/
/*         </p>*/
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
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ reference.Lien }}', 'Références');">*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}" alt="PDF" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}';"*/
/*                     >*/
/*             </a>*/
/* */
/*             <ul>*/
/* */
/*                 <li> Nom du fichier : {{ reference.Nom }} </li>*/
/* */
/*                 {% if reference.Title != null %} <li> Titre : {{ reference.Title }} </li> {% endif %}*/
/* */
/*                 {% if reference.Author != null %} <li> Auteur : {{ reference.Author }} </li> {% endif %}*/
/* */
/*                 {% if reference.Subject != null %} <li> Sujet : {{ reference.Subject }} </li> {% endif %}*/
/* */
/*                 {% if reference.Keywords != null %} <li> Mots : {{ reference.Keywords }} </li> {% endif %}*/
/* */
/*                 {% if reference.Pages != null %} <li> Nombre de page(s) : {{ reference.Pages }} </li> {% endif %}*/
/* */
/*                 <li> Posté le : {{ reference.dateEnvoi }} </li>*/
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
