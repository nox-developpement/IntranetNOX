<?php

/* NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig */
class __TwigTemplate_73045127fbf087b187a5f9abffac5dd7e509136759d39beee25a5a2a33097610 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig", 1);
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
        $__internal_c18e73660e3b5e7e33f1d6b8d14202d59488f74f2a6e60c36f6aab6d43bb58ee = $this->env->getExtension("native_profiler");
        $__internal_c18e73660e3b5e7e33f1d6b8d14202d59488f74f2a6e60c36f6aab6d43bb58ee->enter($__internal_c18e73660e3b5e7e33f1d6b8d14202d59488f74f2a6e60c36f6aab6d43bb58ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c18e73660e3b5e7e33f1d6b8d14202d59488f74f2a6e60c36f6aab6d43bb58ee->leave($__internal_c18e73660e3b5e7e33f1d6b8d14202d59488f74f2a6e60c36f6aab6d43bb58ee_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_5e33013bbe406be69760cb1ea438223be957d41966379609457023d7ea92d83f = $this->env->getExtension("native_profiler");
        $__internal_5e33013bbe406be69760cb1ea438223be957d41966379609457023d7ea92d83f->enter($__internal_5e33013bbe406be69760cb1ea438223be957d41966379609457023d7ea92d83f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Serveurs
";
        
        $__internal_5e33013bbe406be69760cb1ea438223be957d41966379609457023d7ea92d83f->leave($__internal_5e33013bbe406be69760cb1ea438223be957d41966379609457023d7ea92d83f_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_cd7b60dbd90039a9499c88d504474b511e0dbf9e85a3f24cc39974a84930875d = $this->env->getExtension("native_profiler");
        $__internal_cd7b60dbd90039a9499c88d504474b511e0dbf9e85a3f24cc39974a84930875d->enter($__internal_cd7b60dbd90039a9499c88d504474b511e0dbf9e85a3f24cc39974a84930875d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Serveurs";
        
        $__internal_cd7b60dbd90039a9499c88d504474b511e0dbf9e85a3f24cc39974a84930875d->leave($__internal_cd7b60dbd90039a9499c88d504474b511e0dbf9e85a3f24cc39974a84930875d_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ec7268e50137a693aca535d6f6cf1ad70d5baed9093231eca87ec787e49790cd = $this->env->getExtension("native_profiler");
        $__internal_ec7268e50137a693aca535d6f6cf1ad70d5baed9093231eca87ec787e49790cd->enter($__internal_ec7268e50137a693aca535d6f6cf1ad70d5baed9093231eca87ec787e49790cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div id=\"divAdministrationAdmin\">

        <table>

            <tr>
                <td> Agence </td>
                <td> Connexion </td>
                <td> Déconnexion </td>
            </tr>

            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serveurs"]) ? $context["serveurs"] : $this->getContext($context, "serveurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["serveur"]) {
            // line 22
            echo "

                <tr>
                    <td>
                        <p> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["serveur"], "agence", array()), "html", null, true);
            echo " </p>
                    </td>
                    <td> 
                        <a class='lienArchive' href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_serveur_download_script_connexion", array("agence" => $this->getAttribute($context["serveur"], "agence", array()))), "html", null, true);
            echo "\" onclick=\"popupDownloadServeurConnexion();\"> 
                            <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Network-01-32.png"), "html", null, true);
            echo "\"> 
                        </a>
                    </td>
                    <td> 
                        <a class='lienArchive' href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("nox_intranet_serveur_download_script_deconnexion");
            echo "\" onclick=\"popupDownloadServeurDeconnexion();\"> 
                            <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Network-Disconnected-32.png"), "html", null, true);
            echo "\"> 
                        </a>
                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serveur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "

        </table>

    </div>

</div>

";
        
        $__internal_ec7268e50137a693aca535d6f6cf1ad70d5baed9093231eca87ec787e49790cd->leave($__internal_ec7268e50137a693aca535d6f6cf1ad70d5baed9093231eca87ec787e49790cd_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  112 => 35,  108 => 34,  101 => 30,  97 => 29,  91 => 26,  85 => 22,  81 => 21,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Serveurs*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Serveurs{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divAdministrationAdmin">*/
/* */
/*         <table>*/
/* */
/*             <tr>*/
/*                 <td> Agence </td>*/
/*                 <td> Connexion </td>*/
/*                 <td> Déconnexion </td>*/
/*             </tr>*/
/* */
/*             {% for serveur in serveurs %}*/
/* */
/* */
/*                 <tr>*/
/*                     <td>*/
/*                         <p> {{ serveur.agence }} </p>*/
/*                     </td>*/
/*                     <td> */
/*                         <a class='lienArchive' href="{{ path('nox_intranet_serveur_download_script_connexion', { 'agence': serveur.agence }) }}" onclick="popupDownloadServeurConnexion();"> */
/*                             <img src="{{ asset('bundles/noxintranetressources/images/Network-01-32.png') }}"> */
/*                         </a>*/
/*                     </td>*/
/*                     <td> */
/*                         <a class='lienArchive' href="{{ path('nox_intranet_serveur_download_script_deconnexion') }}" onclick="popupDownloadServeurDeconnexion();"> */
/*                             <img src="{{ asset('bundles/noxintranetressources/images/Network-Disconnected-32.png') }}"> */
/*                         </a>*/
/*                     </td>*/
/*                 </tr>*/
/* */
/*             {% endfor %}*/
/* */
/* */
/*         </table>*/
/* */
/*     </div>*/
/* */
/* </div>*/
/* */
/* {% endblock %}*/
/* */
