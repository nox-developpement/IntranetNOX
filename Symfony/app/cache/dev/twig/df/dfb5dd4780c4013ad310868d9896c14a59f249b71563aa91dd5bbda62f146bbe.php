<?php

/* NoxIntranetRessourcesBundle:Archives:archives.html.twig */
class __TwigTemplate_7e346ee3378d60bba8c896ee2a307fe88dd7011390e556ac773381936ae80666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Archives:archives.html.twig", 1);
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
        $__internal_d3a83cd8c1bdf44eb689ae536f1c8b10fef32bc5ff4541e548fb1219b8349db0 = $this->env->getExtension("native_profiler");
        $__internal_d3a83cd8c1bdf44eb689ae536f1c8b10fef32bc5ff4541e548fb1219b8349db0->enter($__internal_d3a83cd8c1bdf44eb689ae536f1c8b10fef32bc5ff4541e548fb1219b8349db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Archives:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3a83cd8c1bdf44eb689ae536f1c8b10fef32bc5ff4541e548fb1219b8349db0->leave($__internal_d3a83cd8c1bdf44eb689ae536f1c8b10fef32bc5ff4541e548fb1219b8349db0_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ea9a38e1eb7b82e886b872c6c727a37b5172619baab45e713bc97038b65b0868 = $this->env->getExtension("native_profiler");
        $__internal_ea9a38e1eb7b82e886b872c6c727a37b5172619baab45e713bc97038b65b0868->enter($__internal_ea9a38e1eb7b82e886b872c6c727a37b5172619baab45e713bc97038b65b0868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Archives
";
        
        $__internal_ea9a38e1eb7b82e886b872c6c727a37b5172619baab45e713bc97038b65b0868->leave($__internal_ea9a38e1eb7b82e886b872c6c727a37b5172619baab45e713bc97038b65b0868_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_e831e1464c65e7142644ef29c5bc17bb2c7210ed606d450d53656669bb3b63a5 = $this->env->getExtension("native_profiler");
        $__internal_e831e1464c65e7142644ef29c5bc17bb2c7210ed606d450d53656669bb3b63a5->enter($__internal_e831e1464c65e7142644ef29c5bc17bb2c7210ed606d450d53656669bb3b63a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Archives";
        
        $__internal_e831e1464c65e7142644ef29c5bc17bb2c7210ed606d450d53656669bb3b63a5->leave($__internal_e831e1464c65e7142644ef29c5bc17bb2c7210ed606d450d53656669bb3b63a5_prof);

    }

    // line 9
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_feee398aaa5360abcf1270f8db2e0b3bf43b68c69e62030dc3cd804ab2119f51 = $this->env->getExtension("native_profiler");
        $__internal_feee398aaa5360abcf1270f8db2e0b3bf43b68c69e62030dc3cd804ab2119f51->enter($__internal_feee398aaa5360abcf1270f8db2e0b3bf43b68c69e62030dc3cd804ab2119f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

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
        
        $__internal_feee398aaa5360abcf1270f8db2e0b3bf43b68c69e62030dc3cd804ab2119f51->leave($__internal_feee398aaa5360abcf1270f8db2e0b3bf43b68c69e62030dc3cd804ab2119f51_prof);

    }

    // line 33
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3c747b5e3198d93a6f3dae031747624c4e3f634cff9f5110de377dbcc0168fc7 = $this->env->getExtension("native_profiler");
        $__internal_3c747b5e3198d93a6f3dae031747624c4e3f634cff9f5110de377dbcc0168fc7->enter($__internal_3c747b5e3198d93a6f3dae031747624c4e3f634cff9f5110de377dbcc0168fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 34
        echo "
    <div id=\"divAdministrationAdmin\">

        <table>

            <tr>
                <td> Agence </td>
                <td> Connexion </td>
                <td> Déconnexion </td>
            </tr>

            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["archives"]) ? $context["archives"] : $this->getContext($context, "archives")));
        foreach ($context['_seq'] as $context["_key"] => $context["archive"]) {
            // line 46
            echo "

                <tr>
                    <td>
                        <p> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["archive"], "agence", array()), "html", null, true);
            echo " </p>
                    </td>
                    <td> 
                        <a class='lienArchive' href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_download_script_connexion", array("agence" => $this->getAttribute($context["archive"], "agence", array()))), "html", null, true);
            echo "\" onclick=\"popupDownloadArchiveConnexion();\"> 
                            <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Connect-48.png"), "html", null, true);
            echo "\"> 
                        </a>
                    </td>
                    <td> 
                        <a class='lienArchive' href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("nox_intranet_download_script_deconnexion");
            echo "\" onclick=\"popupDownloadArchiveDeconnexion();\"> 
                            <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Disconnect-48.png"), "html", null, true);
            echo "\"> 
                        </a>
                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "

        </table>

    </div>

</div>

";
        
        $__internal_3c747b5e3198d93a6f3dae031747624c4e3f634cff9f5110de377dbcc0168fc7->leave($__internal_3c747b5e3198d93a6f3dae031747624c4e3f634cff9f5110de377dbcc0168fc7_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Archives:archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 65,  175 => 59,  171 => 58,  164 => 54,  160 => 53,  154 => 50,  148 => 46,  144 => 45,  131 => 34,  125 => 33,  117 => 30,  111 => 27,  106 => 25,  100 => 23,  94 => 20,  89 => 17,  84 => 15,  81 => 14,  79 => 13,  76 => 12,  72 => 11,  69 => 10,  63 => 9,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Archives*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Archives{% endblock %}*/
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
/*             {% for archive in archives %}*/
/* */
/* */
/*                 <tr>*/
/*                     <td>*/
/*                         <p> {{ archive.agence }} </p>*/
/*                     </td>*/
/*                     <td> */
/*                         <a class='lienArchive' href="{{ path('nox_intranet_download_script_connexion', { 'agence': archive.agence }) }}" onclick="popupDownloadArchiveConnexion();"> */
/*                             <img src="{{ asset('bundles/noxintranetressources/images/Connect-48.png') }}"> */
/*                         </a>*/
/*                     </td>*/
/*                     <td> */
/*                         <a class='lienArchive' href="{{ path('nox_intranet_download_script_deconnexion') }}" onclick="popupDownloadArchiveDeconnexion();"> */
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
/* {# empty Twig template #}*/
/* */
