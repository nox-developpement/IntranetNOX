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
        $__internal_c52ae1b4f3f6a8e0b43448cf4793b16498272886fbea5db68cc45e35ef6ce156 = $this->env->getExtension("native_profiler");
        $__internal_c52ae1b4f3f6a8e0b43448cf4793b16498272886fbea5db68cc45e35ef6ce156->enter($__internal_c52ae1b4f3f6a8e0b43448cf4793b16498272886fbea5db68cc45e35ef6ce156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Archives:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c52ae1b4f3f6a8e0b43448cf4793b16498272886fbea5db68cc45e35ef6ce156->leave($__internal_c52ae1b4f3f6a8e0b43448cf4793b16498272886fbea5db68cc45e35ef6ce156_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9a86623eca6701ed8e3af8fd51c732b140d3a9931eefd947ec520088d201c69e = $this->env->getExtension("native_profiler");
        $__internal_9a86623eca6701ed8e3af8fd51c732b140d3a9931eefd947ec520088d201c69e->enter($__internal_9a86623eca6701ed8e3af8fd51c732b140d3a9931eefd947ec520088d201c69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Archives
";
        
        $__internal_9a86623eca6701ed8e3af8fd51c732b140d3a9931eefd947ec520088d201c69e->leave($__internal_9a86623eca6701ed8e3af8fd51c732b140d3a9931eefd947ec520088d201c69e_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_757a21a0fa744102163d64fbfb5abcf32837f69d90b4c85b8d131e7edcb10b1b = $this->env->getExtension("native_profiler");
        $__internal_757a21a0fa744102163d64fbfb5abcf32837f69d90b4c85b8d131e7edcb10b1b->enter($__internal_757a21a0fa744102163d64fbfb5abcf32837f69d90b4c85b8d131e7edcb10b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Archives";
        
        $__internal_757a21a0fa744102163d64fbfb5abcf32837f69d90b4c85b8d131e7edcb10b1b->leave($__internal_757a21a0fa744102163d64fbfb5abcf32837f69d90b4c85b8d131e7edcb10b1b_prof);

    }

    // line 9
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_71ffec0208b93ebacfac8f964ec17ccf871077b5e532822fbff83d69f9bfcfe8 = $this->env->getExtension("native_profiler");
        $__internal_71ffec0208b93ebacfac8f964ec17ccf871077b5e532822fbff83d69f9bfcfe8->enter($__internal_71ffec0208b93ebacfac8f964ec17ccf871077b5e532822fbff83d69f9bfcfe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

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
        
        $__internal_71ffec0208b93ebacfac8f964ec17ccf871077b5e532822fbff83d69f9bfcfe8->leave($__internal_71ffec0208b93ebacfac8f964ec17ccf871077b5e532822fbff83d69f9bfcfe8_prof);

    }

    // line 33
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_345c7dd878fc47749275826aa2c110762ee79201b223b72f9e5a564716142efe = $this->env->getExtension("native_profiler");
        $__internal_345c7dd878fc47749275826aa2c110762ee79201b223b72f9e5a564716142efe->enter($__internal_345c7dd878fc47749275826aa2c110762ee79201b223b72f9e5a564716142efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_345c7dd878fc47749275826aa2c110762ee79201b223b72f9e5a564716142efe->leave($__internal_345c7dd878fc47749275826aa2c110762ee79201b223b72f9e5a564716142efe_prof);

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
