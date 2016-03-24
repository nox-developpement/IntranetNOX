<?php

/* @NoxIntranetRessources/Serveurs/serveurs.html.twig */
class __TwigTemplate_daa17da54a048a3f58acca34ef944ee42a10b03e8a2aa378949dd8daccbfb7a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/Serveurs/serveurs.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        // line 4
        echo "    Serveurs
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Serveurs";
    }

    // line 9
    public function block_textEncart($context, array $blocks = array())
    {
        // line 10
        echo "
    ";
        // line 11
        if (array_key_exists("text", $context)) {
            echo (isset($context["text"]) ? $context["text"] : null);
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
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("id" => "formulaireTexteEncart")));
            echo "

        ";
            // line 17
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
            echo "

        ";
            // line 20
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'errors');
            echo "

        ";
            // line 23
            echo "        ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'widget', array("attr" => array("class" => "textEncartField")));
            echo "

        ";
            // line 25
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
            echo "

        <img src='";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Text-Editor-32.png"), "html", null, true);
            echo "' id='texteEncartImg'>

    ";
        }
        // line 30
        echo "
";
    }

    // line 33
    public function block_contenu($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["serveurs"]) ? $context["serveurs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["serveur"]) {
            // line 46
            echo "

                <tr>
                    <td>
                        <p> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["serveur"], "agence", array()), "html", null, true);
            echo " </p>
                    </td>
                    <td> 
                        <a class='lienArchive' href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_serveur_download_script_connexion", array("agence" => $this->getAttribute($context["serveur"], "agence", array()))), "html", null, true);
            echo "\" onclick=\"popupDownloadServeurConnexion();\"> 
                            <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Network-01-32.png"), "html", null, true);
            echo "\"> 
                        </a>
                    </td>
                    <td> 
                        <a class='lienArchive' href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("nox_intranet_serveur_download_script_deconnexion");
            echo "\" onclick=\"popupDownloadServeurDeconnexion();\"> 
                            <img src=\"";
            // line 59
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
        // line 65
        echo "

        </table>

    </div>

</div>

";
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
        return array (  160 => 65,  148 => 59,  144 => 58,  137 => 54,  133 => 53,  127 => 50,  121 => 46,  117 => 45,  104 => 34,  101 => 33,  96 => 30,  90 => 27,  85 => 25,  79 => 23,  73 => 20,  68 => 17,  63 => 15,  60 => 14,  58 => 13,  55 => 12,  51 => 11,  48 => 10,  45 => 9,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
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
/*         <img src='{{ asset('bundles/noxintranetressources/images/Text-Editor-32.png') }}' id='texteEncartImg'>*/
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
