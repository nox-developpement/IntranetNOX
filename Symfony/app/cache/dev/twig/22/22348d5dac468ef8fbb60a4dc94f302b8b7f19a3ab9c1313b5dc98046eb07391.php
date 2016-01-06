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
        $__internal_1b545bf91bbf438e2df954a4b4410d2c5b2afa7767a6ae72620f600e65630a03 = $this->env->getExtension("native_profiler");
        $__internal_1b545bf91bbf438e2df954a4b4410d2c5b2afa7767a6ae72620f600e65630a03->enter($__internal_1b545bf91bbf438e2df954a4b4410d2c5b2afa7767a6ae72620f600e65630a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b545bf91bbf438e2df954a4b4410d2c5b2afa7767a6ae72620f600e65630a03->leave($__internal_1b545bf91bbf438e2df954a4b4410d2c5b2afa7767a6ae72620f600e65630a03_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_fc3ea5dd4f709a7447e67458fb1ff3e4c33b6904f56913957fc2b6550bd9fa04 = $this->env->getExtension("native_profiler");
        $__internal_fc3ea5dd4f709a7447e67458fb1ff3e4c33b6904f56913957fc2b6550bd9fa04->enter($__internal_fc3ea5dd4f709a7447e67458fb1ff3e4c33b6904f56913957fc2b6550bd9fa04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Serveurs
";
        
        $__internal_fc3ea5dd4f709a7447e67458fb1ff3e4c33b6904f56913957fc2b6550bd9fa04->leave($__internal_fc3ea5dd4f709a7447e67458fb1ff3e4c33b6904f56913957fc2b6550bd9fa04_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_1cedc415a0c472f79e279c04bd062b7ce1f92808172cd524be0cf446036d1f62 = $this->env->getExtension("native_profiler");
        $__internal_1cedc415a0c472f79e279c04bd062b7ce1f92808172cd524be0cf446036d1f62->enter($__internal_1cedc415a0c472f79e279c04bd062b7ce1f92808172cd524be0cf446036d1f62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Serveurs";
        
        $__internal_1cedc415a0c472f79e279c04bd062b7ce1f92808172cd524be0cf446036d1f62->leave($__internal_1cedc415a0c472f79e279c04bd062b7ce1f92808172cd524be0cf446036d1f62_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9cd99c1b71e8e1053ab8967306c05bca1715a881627162ae32793438699dc66a = $this->env->getExtension("native_profiler");
        $__internal_9cd99c1b71e8e1053ab8967306c05bca1715a881627162ae32793438699dc66a->enter($__internal_9cd99c1b71e8e1053ab8967306c05bca1715a881627162ae32793438699dc66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_9cd99c1b71e8e1053ab8967306c05bca1715a881627162ae32793438699dc66a->leave($__internal_9cd99c1b71e8e1053ab8967306c05bca1715a881627162ae32793438699dc66a_prof);

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
