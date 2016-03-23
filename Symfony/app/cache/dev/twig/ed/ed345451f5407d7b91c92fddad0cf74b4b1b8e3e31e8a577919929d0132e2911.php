<?php

/* NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig */
class __TwigTemplate_3d0fffd8360f32530bfb0f28280a42d2b3cde14b6bfa97e374e9f4dd907393f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig", 1);
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
        $__internal_260d144a8195d26a5d1221d082fdda1efe226b706768f35fa84e0716f9820f37 = $this->env->getExtension("native_profiler");
        $__internal_260d144a8195d26a5d1221d082fdda1efe226b706768f35fa84e0716f9820f37->enter($__internal_260d144a8195d26a5d1221d082fdda1efe226b706768f35fa84e0716f9820f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_260d144a8195d26a5d1221d082fdda1efe226b706768f35fa84e0716f9820f37->leave($__internal_260d144a8195d26a5d1221d082fdda1efe226b706768f35fa84e0716f9820f37_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9cbb358d4a0c33b566b16b8c21e20a48203f6c62b12ce82d4c90b36579f11b13 = $this->env->getExtension("native_profiler");
        $__internal_9cbb358d4a0c33b566b16b8c21e20a48203f6c62b12ce82d4c90b36579f11b13->enter($__internal_9cbb358d4a0c33b566b16b8c21e20a48203f6c62b12ce82d4c90b36579f11b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Ressources ";
        
        $__internal_9cbb358d4a0c33b566b16b8c21e20a48203f6c62b12ce82d4c90b36579f11b13->leave($__internal_9cbb358d4a0c33b566b16b8c21e20a48203f6c62b12ce82d4c90b36579f11b13_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_085954fd763912aa4e40f0213de5dad88ee3c594ca57c33a65e7b0d89ae35705 = $this->env->getExtension("native_profiler");
        $__internal_085954fd763912aa4e40f0213de5dad88ee3c594ca57c33a65e7b0d89ae35705->enter($__internal_085954fd763912aa4e40f0213de5dad88ee3c594ca57c33a65e7b0d89ae35705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Ressources";
        
        $__internal_085954fd763912aa4e40f0213de5dad88ee3c594ca57c33a65e7b0d89ae35705->leave($__internal_085954fd763912aa4e40f0213de5dad88ee3c594ca57c33a65e7b0d89ae35705_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d5b2475f4bcd155b86fa08b7aa3a0b9d8b3a270dcdba993c4cf2df3921b5d526 = $this->env->getExtension("native_profiler");
        $__internal_d5b2475f4bcd155b86fa08b7aa3a0b9d8b3a270dcdba993c4cf2df3921b5d526->enter($__internal_d5b2475f4bcd155b86fa08b7aa3a0b9d8b3a270dcdba993c4cf2df3921b5d526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " 
    <div class=\"iconContener\">

        <!-- Archives -->
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("nox_intranet_archives");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Archive-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Archive-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Archive-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Archives</figcaption>
            </figure>
        </a>

        ";
        // line 22
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 23
            echo "            <!-- Assistant d'affaire -->
            <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("nox_intranet_assistant_affaire");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Business-Man-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Assistant d'affaire</figcaption>
                </figure>
            </a>
        ";
        }
        // line 35
        echo "
        <!-- Assurance qualité -->
        <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("nox_intranet_aq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Hand-Sign-06-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Assurance qualité</figcaption>
            </figure>
        </a>

        <!-- Compétences (en attente)
        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("nox_intranet_competences");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Competences-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Compétences</figcaption>
            </figure>
        </a>
        <!---------------------------->

        <!-- FAQ -->
        <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("nox_intranet_faq");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Help-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Help-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Help-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>FAQ</figcaption>
            </figure>
        </a> 

        <!-- Imprimantes (A tester !)
        <a href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("nox_intranet_imprimantes");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Printer-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Printer-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Printer-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Imprimantes</figcaption>
            </figure>
        </a>
        -->

        <!-- Liens -->
        <a href=\"";
        // line 87
        echo $this->env->getExtension('routing')->getPath("nox_intranet_liens");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Liens</figcaption>
            </figure>
        </a>

        <br />       

        <!-- Partage de documents -->
        <a href=\"http://partage.groupe-nox.com/\" class=\"icon\" target=\"_blank\">
            <figure>
                <img 
                    src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Link-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Partage de documents</figcaption>
            </figure>
        </a>

        <!-- Procédures (A ajouter)
        <a href=\"";
        // line 113
        echo $this->env->getExtension('routing')->getPath("nox_intranet_procedures");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Procedures-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Procédures</figcaption>
            </figure>
        </a>
        -->

        <!-- Références -->
        <a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("nox_intranet_references");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Sort-Ascending-01-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Références</figcaption>
            </figure>
        </a>

        <!-- RH -->
        <a href=\"";
        // line 138
        echo $this->env->getExtension('routing')->getPath("nox_intranet_rh");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/User-Group-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>RH</figcaption>
            </figure>
        </a>

        <!-- Serveurs -->            
        <a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("nox_intranet_serveurs");
        echo "\" class=\"icon\">
            <figure>
                <img 
                    src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128.png"), "html", null, true);
        echo "\" 
                    onmouseover=\"this.src = '";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128-hover.png"), "html", null, true);
        echo "';\" 
                    onmouseout=\"this.src = '";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Server-02-128.png"), "html", null, true);
        echo "';\"
                    > 
                <figcaption>Serveurs</figcaption>
            </figure>
        </a>

        ";
        // line 161
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 162
            echo "            <!-- Visioconférence -->            
            <a href=\"https://myeasy.vision/guest\" target=\"_blank\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 167
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 168
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Conference-Call-01-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Visioconférence</figcaption>
                </figure>
            </a>
        ";
        }
        // line 174
        echo "
    </div>

";
        
        $__internal_d5b2475f4bcd155b86fa08b7aa3a0b9d8b3a270dcdba993c4cf2df3921b5d526->leave($__internal_d5b2475f4bcd155b86fa08b7aa3a0b9d8b3a270dcdba993c4cf2df3921b5d526_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Accueil:accueilRessources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 174,  383 => 168,  379 => 167,  375 => 166,  369 => 162,  367 => 161,  358 => 155,  354 => 154,  350 => 153,  344 => 150,  334 => 143,  330 => 142,  326 => 141,  320 => 138,  310 => 131,  306 => 130,  302 => 129,  296 => 126,  285 => 118,  281 => 117,  277 => 116,  271 => 113,  261 => 106,  257 => 105,  253 => 104,  238 => 92,  234 => 91,  230 => 90,  224 => 87,  213 => 79,  209 => 78,  205 => 77,  199 => 74,  189 => 67,  185 => 66,  181 => 65,  175 => 62,  164 => 54,  160 => 53,  156 => 52,  150 => 49,  140 => 42,  136 => 41,  132 => 40,  126 => 37,  122 => 35,  113 => 29,  109 => 28,  105 => 27,  99 => 24,  96 => 23,  94 => 22,  85 => 16,  81 => 15,  77 => 14,  71 => 11,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Ressources {% endblock %}*/
/* */
/* {% block messageAccueil %}Ressources{% endblock %}*/
/* */
/* {% block contenu %} */
/*     <div class="iconContener">*/
/* */
/*         <!-- Archives -->*/
/*         <a href="{{ path('nox_intranet_archives') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Archive-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Archive-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Archive-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Archives</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         {% if app.user and is_granted('ROLE_SUPER_ADMIN') %}*/
/*             <!-- Assistant d'affaire -->*/
/*             <a href="{{ path('nox_intranet_assistant_affaire') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetressources/images/Business-Man-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Business-Man-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Business-Man-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Assistant d'affaire</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*         <!-- Assurance qualité -->*/
/*         <a href="{{ path('nox_intranet_aq') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Hand-Sign-06-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Assurance qualité</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Compétences (en attente)*/
/*         <a href="{{ path('nox_intranet_competences') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Competences-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Competences-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Competences-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Compétences</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         <!---------------------------->*/
/* */
/*         <!-- FAQ -->*/
/*         <a href="{{ path('nox_intranet_faq') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Help-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Help-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Help-128.png') }}';"*/
/*                     > */
/*                 <figcaption>FAQ</figcaption>*/
/*             </figure>*/
/*         </a> */
/* */
/*         <!-- Imprimantes (A tester !)*/
/*         <a href="{{ path('nox_intranet_imprimantes') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Printer-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Printer-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Printer-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Imprimantes</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         -->*/
/* */
/*         <!-- Liens -->*/
/*         <a href="{{ path('nox_intranet_liens') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Link-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Link-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Link-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Liens</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <br />       */
/* */
/*         <!-- Partage de documents -->*/
/*         <a href="http://partage.groupe-nox.com/" class="icon" target="_blank">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Link-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Link-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Link-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Partage de documents</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Procédures (A ajouter)*/
/*         <a href="{{ path('nox_intranet_procedures') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Procedures-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Procedures-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Procedures-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Procédures</figcaption>*/
/*             </figure>*/
/*         </a>*/
/*         -->*/
/* */
/*         <!-- Références -->*/
/*         <a href="{{ path('nox_intranet_references') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Sort-Ascending-01-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Références</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- RH -->*/
/*         <a href="{{ path('nox_intranet_rh') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/User-Group-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/User-Group-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/User-Group-128.png') }}';"*/
/*                     > */
/*                 <figcaption>RH</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         <!-- Serveurs -->            */
/*         <a href="{{ path('nox_intranet_serveurs') }}" class="icon">*/
/*             <figure>*/
/*                 <img */
/*                     src="{{ asset('bundles/noxintranetressources/images/Server-02-128.png') }}" */
/*                     onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Server-02-128-hover.png') }}';" */
/*                     onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Server-02-128.png') }}';"*/
/*                     > */
/*                 <figcaption>Serveurs</figcaption>*/
/*             </figure>*/
/*         </a>*/
/* */
/*         {% if app.user and is_granted('ROLE_SUPER_ADMIN') %}*/
/*             <!-- Visioconférence -->            */
/*             <a href="https://myeasy.vision/guest" target="_blank" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetressources/images/Conference-Call-01-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Visioconférence</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
