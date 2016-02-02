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
        $__internal_4895bf992d34336deee00cb3f10ccdd4a60101b5f1d174b9ecf35fa571a9a2d9 = $this->env->getExtension("native_profiler");
        $__internal_4895bf992d34336deee00cb3f10ccdd4a60101b5f1d174b9ecf35fa571a9a2d9->enter($__internal_4895bf992d34336deee00cb3f10ccdd4a60101b5f1d174b9ecf35fa571a9a2d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4895bf992d34336deee00cb3f10ccdd4a60101b5f1d174b9ecf35fa571a9a2d9->leave($__internal_4895bf992d34336deee00cb3f10ccdd4a60101b5f1d174b9ecf35fa571a9a2d9_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_e7fc7ae621f08a5297e4b9e134fef7feff848a4351466c44d7f356ac2cfd39c5 = $this->env->getExtension("native_profiler");
        $__internal_e7fc7ae621f08a5297e4b9e134fef7feff848a4351466c44d7f356ac2cfd39c5->enter($__internal_e7fc7ae621f08a5297e4b9e134fef7feff848a4351466c44d7f356ac2cfd39c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Serveurs
";
        
        $__internal_e7fc7ae621f08a5297e4b9e134fef7feff848a4351466c44d7f356ac2cfd39c5->leave($__internal_e7fc7ae621f08a5297e4b9e134fef7feff848a4351466c44d7f356ac2cfd39c5_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_d09d14ec7f18e77f882ce5cc82904b77fff5733129e3e2caa0783a05104f100e = $this->env->getExtension("native_profiler");
        $__internal_d09d14ec7f18e77f882ce5cc82904b77fff5733129e3e2caa0783a05104f100e->enter($__internal_d09d14ec7f18e77f882ce5cc82904b77fff5733129e3e2caa0783a05104f100e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Serveurs";
        
        $__internal_d09d14ec7f18e77f882ce5cc82904b77fff5733129e3e2caa0783a05104f100e->leave($__internal_d09d14ec7f18e77f882ce5cc82904b77fff5733129e3e2caa0783a05104f100e_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_22547108d7941400b821f55cbed8b18fa70ee7fbf6c35602fe01f93539a130e9 = $this->env->getExtension("native_profiler");
        $__internal_22547108d7941400b821f55cbed8b18fa70ee7fbf6c35602fe01f93539a130e9->enter($__internal_22547108d7941400b821f55cbed8b18fa70ee7fbf6c35602fe01f93539a130e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Connect-48.png"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Disconnect-48.png"), "html", null, true);
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
        
        $__internal_22547108d7941400b821f55cbed8b18fa70ee7fbf6c35602fe01f93539a130e9->leave($__internal_22547108d7941400b821f55cbed8b18fa70ee7fbf6c35602fe01f93539a130e9_prof);

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
/*                             <img src="{{ asset('bundles/noxintranetressources/images/Connect-48.png') }}"> */
/*                         </a>*/
/*                     </td>*/
/*                     <td> */
/*                         <a class='lienArchive' href="{{ path('nox_intranet_serveur_download_script_deconnexion') }}" onclick="popupDownloadServeurDeconnexion();"> */
/*                             <img src="{{ asset('bundles/noxintranetressources/images/Disconnect-48.png') }}"> */
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
