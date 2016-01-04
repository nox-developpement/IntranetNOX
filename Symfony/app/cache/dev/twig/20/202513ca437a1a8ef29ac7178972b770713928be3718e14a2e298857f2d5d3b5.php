<?php

/* NoxIntranetRessourcesBundle:Imprimantes:imprimantes.html.twig */
class __TwigTemplate_dbef5079b548e6ffdfb85d561e99d1f84e2ffc50ce5801296dcf8359ebd868fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Imprimantes:imprimantes.html.twig", 1);
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
        $__internal_7f74c1c06f427a98f3e0be36b29fadacd7e9bd9dfa371b49143d9a474b02a404 = $this->env->getExtension("native_profiler");
        $__internal_7f74c1c06f427a98f3e0be36b29fadacd7e9bd9dfa371b49143d9a474b02a404->enter($__internal_7f74c1c06f427a98f3e0be36b29fadacd7e9bd9dfa371b49143d9a474b02a404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Imprimantes:imprimantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f74c1c06f427a98f3e0be36b29fadacd7e9bd9dfa371b49143d9a474b02a404->leave($__internal_7f74c1c06f427a98f3e0be36b29fadacd7e9bd9dfa371b49143d9a474b02a404_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_7d2eaafdb29b547feffddb6f2b7bda84c9e40317112294b90a66ea6450aeabfc = $this->env->getExtension("native_profiler");
        $__internal_7d2eaafdb29b547feffddb6f2b7bda84c9e40317112294b90a66ea6450aeabfc->enter($__internal_7d2eaafdb29b547feffddb6f2b7bda84c9e40317112294b90a66ea6450aeabfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Imprimantes ";
        
        $__internal_7d2eaafdb29b547feffddb6f2b7bda84c9e40317112294b90a66ea6450aeabfc->leave($__internal_7d2eaafdb29b547feffddb6f2b7bda84c9e40317112294b90a66ea6450aeabfc_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_4202f7f732da54b08068aae23f7ff7a9078ad88699b06e2aaf5279927c15324f = $this->env->getExtension("native_profiler");
        $__internal_4202f7f732da54b08068aae23f7ff7a9078ad88699b06e2aaf5279927c15324f->enter($__internal_4202f7f732da54b08068aae23f7ff7a9078ad88699b06e2aaf5279927c15324f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Imprimantes";
        
        $__internal_4202f7f732da54b08068aae23f7ff7a9078ad88699b06e2aaf5279927c15324f->leave($__internal_4202f7f732da54b08068aae23f7ff7a9078ad88699b06e2aaf5279927c15324f_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5c28ea7dbc25c25c8caa6ddea8ae5dd3fe63c52d797267692dae7764d2df4dc0 = $this->env->getExtension("native_profiler");
        $__internal_5c28ea7dbc25c25c8caa6ddea8ae5dd3fe63c52d797267692dae7764d2df4dc0->enter($__internal_5c28ea7dbc25c25c8caa6ddea8ae5dd3fe63c52d797267692dae7764d2df4dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " 

    <div id=\"divAdministrationAdmin\">

        <table>

            <tr>
                <td> Agence </td>
                <td> Imprimante </td>
                <td> Type </td>
                <td> Installation </td>
            </tr>

            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imprimantes"]) ? $context["imprimantes"] : $this->getContext($context, "imprimantes")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprimante"]) {
            // line 21
            echo "

                <tr>
                    <td>
                        <p> ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprimante"], "agence", array()), "html", null, true);
            echo " </p>
                    </td>
                    <td> <p> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprimante"], "nom", array()), "html", null, true);
            echo " </p> </td>

                    <td> <p> ";
            // line 29
            if (($this->getAttribute($context["imprimante"], "type", array()) == "imp")) {
                echo " Imprimante ";
            } else {
                echo " Traceur ";
            }
            echo " </p> </td>

                    <td> 
                        <a class='lienImprimante' href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_imprimantes_download", array("agence" => $this->getAttribute($context["imprimante"], "agence", array()), "nom" => $this->getAttribute($context["imprimante"], "nom", array()))), "html", null, true);
            echo "\" onclick=\"popupDownloadImprimante();\"> 
                            <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Printer-48.png"), "html", null, true);
            echo "\"> 
                        </a>
                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprimante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "

        </table>

    </div>

</div>

";
        
        $__internal_5c28ea7dbc25c25c8caa6ddea8ae5dd3fe63c52d797267692dae7764d2df4dc0->leave($__internal_5c28ea7dbc25c25c8caa6ddea8ae5dd3fe63c52d797267692dae7764d2df4dc0_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Imprimantes:imprimantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 39,  114 => 33,  110 => 32,  100 => 29,  95 => 27,  90 => 25,  84 => 21,  80 => 20,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Imprimantes {% endblock %}*/
/* */
/* {% block messageAccueil %}Imprimantes{% endblock %}*/
/* */
/* {% block contenu %} */
/* */
/*     <div id="divAdministrationAdmin">*/
/* */
/*         <table>*/
/* */
/*             <tr>*/
/*                 <td> Agence </td>*/
/*                 <td> Imprimante </td>*/
/*                 <td> Type </td>*/
/*                 <td> Installation </td>*/
/*             </tr>*/
/* */
/*             {% for imprimante in imprimantes %}*/
/* */
/* */
/*                 <tr>*/
/*                     <td>*/
/*                         <p> {{ imprimante.agence }} </p>*/
/*                     </td>*/
/*                     <td> <p> {{ imprimante.nom }} </p> </td>*/
/* */
/*                     <td> <p> {% if imprimante.type == 'imp' %} Imprimante {% else %} Traceur {% endif %} </p> </td>*/
/* */
/*                     <td> */
/*                         <a class='lienImprimante' href="{{ path('nox_intranet_imprimantes_download', {'agence': imprimante.agence, 'nom': imprimante.nom }) }}" onclick="popupDownloadImprimante();"> */
/*                             <img src="{{ asset('bundles/noxintranetressources/images/Printer-48.png') }}"> */
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
