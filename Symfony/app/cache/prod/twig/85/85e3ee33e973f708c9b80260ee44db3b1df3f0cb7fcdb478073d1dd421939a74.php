<?php

/* @NoxIntranetRessources/Accueil/accueilRessources.html.twig */
class __TwigTemplate_ebaa206654e8b7efbea26235fd9233a1a8c9491136bdcdae2472b3b9d8b0bd6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/Accueil/accueilRessources.html.twig", 1);
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
        echo " Ressources ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Ressources";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
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
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/Accueil/accueilRessources.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 174,  362 => 168,  358 => 167,  354 => 166,  348 => 162,  346 => 161,  337 => 155,  333 => 154,  329 => 153,  323 => 150,  313 => 143,  309 => 142,  305 => 141,  299 => 138,  289 => 131,  285 => 130,  281 => 129,  275 => 126,  264 => 118,  260 => 117,  256 => 116,  250 => 113,  240 => 106,  236 => 105,  232 => 104,  217 => 92,  213 => 91,  209 => 90,  203 => 87,  192 => 79,  188 => 78,  184 => 77,  178 => 74,  168 => 67,  164 => 66,  160 => 65,  154 => 62,  143 => 54,  139 => 53,  135 => 52,  129 => 49,  119 => 42,  115 => 41,  111 => 40,  105 => 37,  101 => 35,  92 => 29,  88 => 28,  84 => 27,  78 => 24,  75 => 23,  73 => 22,  64 => 16,  60 => 15,  56 => 14,  50 => 11,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
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
