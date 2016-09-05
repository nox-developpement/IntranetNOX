<?php

/* NoxIntranetRessourcesBundle:PrestationsInternes:newprestationsinternessearch.html.twig */
class __TwigTemplate_24cd263f45e41782a38f978c4e450db67537eb35bcbbd3b08d63a131b6bb7e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:PrestationsInternes:newprestationsinternessearch.html.twig", 1);
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
        $__internal_c822fc68d4e7426a13b2d88a68242e91822446114fe18a2873b247c85ecb0a77 = $this->env->getExtension("native_profiler");
        $__internal_c822fc68d4e7426a13b2d88a68242e91822446114fe18a2873b247c85ecb0a77->enter($__internal_c822fc68d4e7426a13b2d88a68242e91822446114fe18a2873b247c85ecb0a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:PrestationsInternes:newprestationsinternessearch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c822fc68d4e7426a13b2d88a68242e91822446114fe18a2873b247c85ecb0a77->leave($__internal_c822fc68d4e7426a13b2d88a68242e91822446114fe18a2873b247c85ecb0a77_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ea4a007de83c079566008c196f6efb348352d016ef2f57278f83f1020d1e4673 = $this->env->getExtension("native_profiler");
        $__internal_ea4a007de83c079566008c196f6efb348352d016ef2f57278f83f1020d1e4673->enter($__internal_ea4a007de83c079566008c196f6efb348352d016ef2f57278f83f1020d1e4673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Nouvelle demande de prestation interne ";
        
        $__internal_ea4a007de83c079566008c196f6efb348352d016ef2f57278f83f1020d1e4673->leave($__internal_ea4a007de83c079566008c196f6efb348352d016ef2f57278f83f1020d1e4673_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_82abeca6ba251a60d998451dbd0e27b42debc60600d0373f2c0db6a9962c5155 = $this->env->getExtension("native_profiler");
        $__internal_82abeca6ba251a60d998451dbd0e27b42debc60600d0373f2c0db6a9962c5155->enter($__internal_82abeca6ba251a60d998451dbd0e27b42debc60600d0373f2c0db6a9962c5155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Nouvelle demande de prestation interne";
        
        $__internal_82abeca6ba251a60d998451dbd0e27b42debc60600d0373f2c0db6a9962c5155->leave($__internal_82abeca6ba251a60d998451dbd0e27b42debc60600d0373f2c0db6a9962c5155_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8cab44d3719452ca4669bcdbf25e12246ffc1f1de2133aefc56f8eb3e6108852 = $this->env->getExtension("native_profiler");
        $__internal_8cab44d3719452ca4669bcdbf25e12246ffc1f1de2133aefc56f8eb3e6108852->enter($__internal_8cab44d3719452ca4669bcdbf25e12246ffc1f1de2133aefc56f8eb3e6108852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " 

    <div style='width: 70%; margin: auto;'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), 'form_start', array("attr" => array("style" => "text-align: center; background-color: rgba(255,255,255, 0.6);")));
        echo "


        <table>
            <tr>
                <th>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Libelle", array()), 'label', array("label" => "Libellé"));
        echo "</th>
                <td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Libelle", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "LieuOperation", array()), 'label', array("label" => "Lieu de l'opération"));
        echo "</th>
                <td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "LieuOperation", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "LieuPrestation", array()), 'label', array("label" => "Lieu de la prestation"));
        echo "</th>
                <td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "LieuPrestation", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Descriptif", array()), 'label', array("attr" => array("style" => "vertical-align: top;"), "label" => "Descriptif de la prestation"));
        echo "</th>
                <td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Descriptif", array()), 'widget', array("attr" => array("style" => "vertical-align: top;")));
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Deplacement", array()), 'label', array("label" => "Déplacement à prévoir"));
        echo "</th>
                <td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Deplacement", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "DateDemarrage", array()), 'label', array("label" => "Date de démarrage de la prestation"));
        echo "</th>
                <td>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "DateDemarrage", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "DateRendu", array()), 'label', array("label" => "Date de rendu"));
        echo "</th>
                <td>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "DateRendu", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Livrables", array()), 'label', array("label" => "Livrables attendus"));
        echo "</th>
                <td>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Livrables", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "VolumeSousTraitance", array()), 'label', array("label" => "Volume de sous traitance envisagé (€)"));
        echo "</th>
                <td>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "VolumeSousTraitance", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "EmailDA", array()), 'label', array("label" => "Email du DA"));
        echo "</th>
                <td>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "EmailDA", array()), 'widget');
        echo "</td>
            </tr>

        </table>

        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Valider", array()), 'widget', array("attr" => array("class" => "boutonFormulaire", "style" => "margin-top: 1%; padding: 2%;")));
        echo "

        ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), 'form_end');
        echo "

    </div>

";
        
        $__internal_8cab44d3719452ca4669bcdbf25e12246ffc1f1de2133aefc56f8eb3e6108852->leave($__internal_8cab44d3719452ca4669bcdbf25e12246ffc1f1de2133aefc56f8eb3e6108852_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:PrestationsInternes:newprestationsinternessearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 69,  190 => 67,  182 => 62,  178 => 61,  171 => 57,  167 => 56,  160 => 52,  156 => 51,  149 => 47,  145 => 46,  138 => 42,  134 => 41,  127 => 37,  123 => 36,  116 => 32,  112 => 31,  105 => 27,  101 => 26,  94 => 22,  90 => 21,  83 => 17,  79 => 16,  71 => 11,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Nouvelle demande de prestation interne {% endblock %}*/
/* */
/* {% block messageAccueil %}Nouvelle demande de prestation interne{% endblock %}*/
/* */
/* {% block contenu %} */
/* */
/*     <div style='width: 70%; margin: auto;'>*/
/* */
/*         {{ form_start(formNewSearch, {'attr': {'style': 'text-align: center; background-color: rgba(255,255,255, 0.6);'}}) }}*/
/* */
/* */
/*         <table>*/
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.Libelle, "Libellé") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.Libelle) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.LieuOperation, "Lieu de l'opération") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.LieuOperation) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.LieuPrestation, "Lieu de la prestation") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.LieuPrestation) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.Descriptif, "Descriptif de la prestation", {'attr': { 'style': 'vertical-align: top;'}}) }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.Descriptif, {'attr': { 'style': 'vertical-align: top;'}}) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.Deplacement, "Déplacement à prévoir") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.Deplacement) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.DateDemarrage, "Date de démarrage de la prestation") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.DateDemarrage) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.DateRendu, "Date de rendu") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.DateRendu) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.Livrables, "Livrables attendus") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.Livrables) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.VolumeSousTraitance, "Volume de sous traitance envisagé (€)") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.VolumeSousTraitance) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.EmailDA, "Email du DA") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.EmailDA) }}</td>*/
/*             </tr>*/
/* */
/*         </table>*/
/* */
/*         {{ form_widget(formNewSearch.Valider, {'attr': {'class': 'boutonFormulaire', 'style': 'margin-top: 1%; padding: 2%;' }}) }}*/
/* */
/*         {{ form_end(formNewSearch) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
