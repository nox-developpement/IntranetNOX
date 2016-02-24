<?php

/* @NoxIntranetRessources/Serveurs/serveurs.html.twig */
class __TwigTemplate_f3194cf41281a2ebaa7f88dffcf810fde7b7d70c8f813a0ad34399eb878bdca4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/Serveurs/serveurs.html.twig", 1);
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
        $__internal_bde165cac771038e3c87c85789884f43e185cb6dae868df68a90930b03c6eca6 = $this->env->getExtension("native_profiler");
        $__internal_bde165cac771038e3c87c85789884f43e185cb6dae868df68a90930b03c6eca6->enter($__internal_bde165cac771038e3c87c85789884f43e185cb6dae868df68a90930b03c6eca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/Serveurs/serveurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bde165cac771038e3c87c85789884f43e185cb6dae868df68a90930b03c6eca6->leave($__internal_bde165cac771038e3c87c85789884f43e185cb6dae868df68a90930b03c6eca6_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_38888a1ad35a95109d67f87a4cf06d3bc873dd5e39ecbc8d6cddb18a64743533 = $this->env->getExtension("native_profiler");
        $__internal_38888a1ad35a95109d67f87a4cf06d3bc873dd5e39ecbc8d6cddb18a64743533->enter($__internal_38888a1ad35a95109d67f87a4cf06d3bc873dd5e39ecbc8d6cddb18a64743533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Serveurs
";
        
        $__internal_38888a1ad35a95109d67f87a4cf06d3bc873dd5e39ecbc8d6cddb18a64743533->leave($__internal_38888a1ad35a95109d67f87a4cf06d3bc873dd5e39ecbc8d6cddb18a64743533_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_7a8cdebfe2208dbb85759fa54077078e0bc0c096b2789252a4af014e97405517 = $this->env->getExtension("native_profiler");
        $__internal_7a8cdebfe2208dbb85759fa54077078e0bc0c096b2789252a4af014e97405517->enter($__internal_7a8cdebfe2208dbb85759fa54077078e0bc0c096b2789252a4af014e97405517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Serveurs";
        
        $__internal_7a8cdebfe2208dbb85759fa54077078e0bc0c096b2789252a4af014e97405517->leave($__internal_7a8cdebfe2208dbb85759fa54077078e0bc0c096b2789252a4af014e97405517_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_170c536d33c54bf01434292658cd8ae5fbb54171ada3f72e0cc3776a0cb1e170 = $this->env->getExtension("native_profiler");
        $__internal_170c536d33c54bf01434292658cd8ae5fbb54171ada3f72e0cc3776a0cb1e170->enter($__internal_170c536d33c54bf01434292658cd8ae5fbb54171ada3f72e0cc3776a0cb1e170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_170c536d33c54bf01434292658cd8ae5fbb54171ada3f72e0cc3776a0cb1e170->leave($__internal_170c536d33c54bf01434292658cd8ae5fbb54171ada3f72e0cc3776a0cb1e170_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/Serveurs/serveurs.html.twig";
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
