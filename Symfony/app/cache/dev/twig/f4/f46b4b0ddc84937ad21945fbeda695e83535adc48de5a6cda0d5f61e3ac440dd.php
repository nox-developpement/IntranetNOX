<?php

/* NoxIntranetRessourcesBundle:Competences:competences.html.twig */
class __TwigTemplate_ee315390f758b9d80cc5d5589b628bc4c2e71f674e6e58f5d138f835704f3c57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Competences:competences.html.twig", 1);
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
        $__internal_35df3b6ea7e0559cba5067bb8b825c43e45e4377d92f9612bda679ac30fc5606 = $this->env->getExtension("native_profiler");
        $__internal_35df3b6ea7e0559cba5067bb8b825c43e45e4377d92f9612bda679ac30fc5606->enter($__internal_35df3b6ea7e0559cba5067bb8b825c43e45e4377d92f9612bda679ac30fc5606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Competences:competences.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35df3b6ea7e0559cba5067bb8b825c43e45e4377d92f9612bda679ac30fc5606->leave($__internal_35df3b6ea7e0559cba5067bb8b825c43e45e4377d92f9612bda679ac30fc5606_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_7928d50cb47a1922261967544737dc19cd46e98c513288ed22202e0f59dc4d87 = $this->env->getExtension("native_profiler");
        $__internal_7928d50cb47a1922261967544737dc19cd46e98c513288ed22202e0f59dc4d87->enter($__internal_7928d50cb47a1922261967544737dc19cd46e98c513288ed22202e0f59dc4d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ressources ";
        
        $__internal_7928d50cb47a1922261967544737dc19cd46e98c513288ed22202e0f59dc4d87->leave($__internal_7928d50cb47a1922261967544737dc19cd46e98c513288ed22202e0f59dc4d87_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_ab962d15c584f1245cd4f18e7263c52e818b565634a72c058d7f11a419d398d2 = $this->env->getExtension("native_profiler");
        $__internal_ab962d15c584f1245cd4f18e7263c52e818b565634a72c058d7f11a419d398d2->enter($__internal_ab962d15c584f1245cd4f18e7263c52e818b565634a72c058d7f11a419d398d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Compétences";
        
        $__internal_ab962d15c584f1245cd4f18e7263c52e818b565634a72c058d7f11a419d398d2->leave($__internal_ab962d15c584f1245cd4f18e7263c52e818b565634a72c058d7f11a419d398d2_prof);

    }

    // line 7
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_8fee157fb81bb4ac38e089f7d7935440b75a2064b4404248ac8a571c07c7ace8 = $this->env->getExtension("native_profiler");
        $__internal_8fee157fb81bb4ac38e089f7d7935440b75a2064b4404248ac8a571c07c7ace8->enter($__internal_8fee157fb81bb4ac38e089f7d7935440b75a2064b4404248ac8a571c07c7ace8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

        // line 8
        echo "
    ";
        // line 9
        if (array_key_exists("text", $context)) {
            echo (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"));
        }
        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 12
            echo "
        ";
            // line 13
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexteEncart")));
            echo "

        ";
            // line 15
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
            echo "

        ";
            // line 18
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
            echo "

        ";
            // line 21
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textEncartField")));
            echo "

        ";
            // line 23
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
            echo "

        <img src='";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Text-Editor-32.png"), "html", null, true);
            echo "' id='texteEncartImg'>

    ";
        }
        // line 28
        echo "
";
        
        $__internal_8fee157fb81bb4ac38e089f7d7935440b75a2064b4404248ac8a571c07c7ace8->leave($__internal_8fee157fb81bb4ac38e089f7d7935440b75a2064b4404248ac8a571c07c7ace8_prof);

    }

    // line 31
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b8a480eb8eb8bc232a34ba4f8e7445d664dce3f651be47fc49ee1b5697946d0b = $this->env->getExtension("native_profiler");
        $__internal_b8a480eb8eb8bc232a34ba4f8e7445d664dce3f651be47fc49ee1b5697946d0b->enter($__internal_b8a480eb8eb8bc232a34ba4f8e7445d664dce3f651be47fc49ee1b5697946d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " 

    ";
        // line 33
        if ($this->env->getExtension('security')->isGranted("ROLE_COMPETENCES")) {
            echo " 

        <div id=\"menuAdminCompetences\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/competences', 'Gestionnaire de fichiers - Références');\"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 41
        echo "
    <div id=\"rechercheUser\">
        <div id=\"rechercheCompetencesDiv\">
            <form action='";
        // line 44
        echo $this->env->getExtension('routing')->getPath("nox_intranet_competences_recherche");
        echo "' type='GET'>
                <label for=\"keyword\"> Rechercher par mots-clés : </label>
                <input type=\"text\" name='keyword' id=\"keyword\" />
                <input type=\"submit\" name=\"Rechercher\" value=\"Rechercher\" class=\"boutonFormulaire\" >
                <button value=\"Annuler\" class=\"boutonFormulaire\" id=\"boutonAnnuler\" onclick=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("nox_intranet_competences");
        echo "\"> RAZ </button>
            </form>
        </div>
    </div>

    ";
        // line 53
        if (((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")) == null)) {
            // line 54
            echo "
        <div class=\"divNews\">

            Votre recherche n'a retourné aucun résultat.

        </div>

    ";
        }
        // line 62
        echo "
    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : $this->getContext($context, "competences")));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 64
            echo "
        <div class=\"divNews\">

            <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "lien", array(), "array"), "html", null, true);
            echo "', 'Compétences');\">
                <img 
                    src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "\" alt=\"PDF\" 
                    onmouseover=\"this.src = '";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png"), "html", null, true);
            echo "';\" 
                    onmouseout=\"this.src = '";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
            echo "';\"
                    >
            </a>

            <ul>
                
                <li> Nom du fichier : ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "nom", array(), "array"), "html", null, true);
            echo " </li>
                
                ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["competence"], "proprietes", array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
                // line 80
                echo "
                    ";
                // line 81
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Title")) {
                    echo " <li> Titre : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 82
                echo "
                    ";
                // line 83
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Author")) {
                    echo " <li> Auteur : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 84
                echo "
                    ";
                // line 85
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Subject")) {
                    echo " <li> Sujet : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 86
                echo "
                    ";
                // line 87
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Keywords")) {
                    echo " <li> Mots clés : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 88
                echo "
                    ";
                // line 89
                if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Pages")) {
                    echo " <li> Nombre de page(s) : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                    echo " </li> ";
                }
                // line 90
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "                
                <li> Posté le : ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "dateEnvoi", array(), "array"), "html", null, true);
            echo " </li>

            </ul>

        </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "
";
        
        $__internal_b8a480eb8eb8bc232a34ba4f8e7445d664dce3f651be47fc49ee1b5697946d0b->leave($__internal_b8a480eb8eb8bc232a34ba4f8e7445d664dce3f651be47fc49ee1b5697946d0b_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Competences:competences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 100,  273 => 93,  270 => 92,  263 => 90,  257 => 89,  254 => 88,  248 => 87,  245 => 86,  239 => 85,  236 => 84,  230 => 83,  227 => 82,  221 => 81,  218 => 80,  214 => 79,  209 => 77,  200 => 71,  196 => 70,  192 => 69,  187 => 67,  182 => 64,  178 => 63,  175 => 62,  165 => 54,  163 => 53,  155 => 48,  148 => 44,  143 => 41,  132 => 33,  123 => 31,  115 => 28,  109 => 25,  104 => 23,  98 => 21,  92 => 18,  87 => 15,  82 => 13,  79 => 12,  77 => 11,  74 => 10,  70 => 9,  67 => 8,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Ressources {% endblock %}*/
/* */
/* {% block messageAccueil %}Compétences{% endblock %}*/
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
/* {% block contenu %} */
/* */
/*     {% if is_granted('ROLE_COMPETENCES') %} */
/* */
/*         <div id="menuAdminCompetences" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/competences', 'Gestionnaire de fichiers - Références');"> <h3>  Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div id="rechercheUser">*/
/*         <div id="rechercheCompetencesDiv">*/
/*             <form action='{{ path('nox_intranet_competences_recherche') }}' type='GET'>*/
/*                 <label for="keyword"> Rechercher par mots-clés : </label>*/
/*                 <input type="text" name='keyword' id="keyword" />*/
/*                 <input type="submit" name="Rechercher" value="Rechercher" class="boutonFormulaire" >*/
/*                 <button value="Annuler" class="boutonFormulaire" id="boutonAnnuler" onclick="{{ path('nox_intranet_competences') }}"> RAZ </button>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {% if competences == null %}*/
/* */
/*         <div class="divNews">*/
/* */
/*             Votre recherche n'a retourné aucun résultat.*/
/* */
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     {% for competence in competences %}*/
/* */
/*         <div class="divNews">*/
/* */
/*             <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ competence['lien'] }}', 'Compétences');">*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}" alt="PDF" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}';"*/
/*                     >*/
/*             </a>*/
/* */
/*             <ul>*/
/*                 */
/*                 <li> Nom du fichier : {{ competence['nom'] }} </li>*/
/*                 */
/*                 {% for propriete in competence['proprietes'] %}*/
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
/*                 <li> Posté le : {{ competence['dateEnvoi'] }} </li>*/
/* */
/*             </ul>*/
/* */
/*         </div>*/
/* */
/*     {% endfor %}*/
/* */
/* {% endblock %}*/
/* */
