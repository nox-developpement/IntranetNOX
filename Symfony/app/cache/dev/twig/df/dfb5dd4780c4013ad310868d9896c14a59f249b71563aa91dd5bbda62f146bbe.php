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
        $__internal_711c485a7f6b08369b2a28d44b764b0b5b0001d6d73a3a8151378b0f79fd0fb6 = $this->env->getExtension("native_profiler");
        $__internal_711c485a7f6b08369b2a28d44b764b0b5b0001d6d73a3a8151378b0f79fd0fb6->enter($__internal_711c485a7f6b08369b2a28d44b764b0b5b0001d6d73a3a8151378b0f79fd0fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Archives:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711c485a7f6b08369b2a28d44b764b0b5b0001d6d73a3a8151378b0f79fd0fb6->leave($__internal_711c485a7f6b08369b2a28d44b764b0b5b0001d6d73a3a8151378b0f79fd0fb6_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_5529b8b264e5a3d920598a441e8b9bf649aedbbf0bef2359257b8767fdf3cd1e = $this->env->getExtension("native_profiler");
        $__internal_5529b8b264e5a3d920598a441e8b9bf649aedbbf0bef2359257b8767fdf3cd1e->enter($__internal_5529b8b264e5a3d920598a441e8b9bf649aedbbf0bef2359257b8767fdf3cd1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Archives
";
        
        $__internal_5529b8b264e5a3d920598a441e8b9bf649aedbbf0bef2359257b8767fdf3cd1e->leave($__internal_5529b8b264e5a3d920598a441e8b9bf649aedbbf0bef2359257b8767fdf3cd1e_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_cf1ba38bd2671bec826bfc9f5f93290951088ba82c9cb22746ad42057ecee280 = $this->env->getExtension("native_profiler");
        $__internal_cf1ba38bd2671bec826bfc9f5f93290951088ba82c9cb22746ad42057ecee280->enter($__internal_cf1ba38bd2671bec826bfc9f5f93290951088ba82c9cb22746ad42057ecee280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Archives";
        
        $__internal_cf1ba38bd2671bec826bfc9f5f93290951088ba82c9cb22746ad42057ecee280->leave($__internal_cf1ba38bd2671bec826bfc9f5f93290951088ba82c9cb22746ad42057ecee280_prof);

    }

    // line 9
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_51875b19690e9950b6231655a6c601d1416ee3857d87017c9970e4b97a96253e = $this->env->getExtension("native_profiler");
        $__internal_51875b19690e9950b6231655a6c601d1416ee3857d87017c9970e4b97a96253e->enter($__internal_51875b19690e9950b6231655a6c601d1416ee3857d87017c9970e4b97a96253e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

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
        
        $__internal_51875b19690e9950b6231655a6c601d1416ee3857d87017c9970e4b97a96253e->leave($__internal_51875b19690e9950b6231655a6c601d1416ee3857d87017c9970e4b97a96253e_prof);

    }

    // line 33
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_894613ac11e9a4ed60431246f777ffff155f1c0b2cf1b89334fe067f40518af1 = $this->env->getExtension("native_profiler");
        $__internal_894613ac11e9a4ed60431246f777ffff155f1c0b2cf1b89334fe067f40518af1->enter($__internal_894613ac11e9a4ed60431246f777ffff155f1c0b2cf1b89334fe067f40518af1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_894613ac11e9a4ed60431246f777ffff155f1c0b2cf1b89334fe067f40518af1->leave($__internal_894613ac11e9a4ed60431246f777ffff155f1c0b2cf1b89334fe067f40518af1_prof);

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
