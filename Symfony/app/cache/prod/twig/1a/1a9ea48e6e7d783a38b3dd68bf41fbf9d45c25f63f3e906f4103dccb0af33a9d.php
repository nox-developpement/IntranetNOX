<?php

/* NoxIntranetRessourcesBundle:Imprimantes:imprimantes.html.twig */
class __TwigTemplate_fe38b7947b0fc09ad966de0305bed2b0cfea727e65714dd123c8eec69b8e808f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Imprimantes ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Imprimantes";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["imprimantes"]) ? $context["imprimantes"] : null));
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
        return array (  105 => 39,  93 => 33,  89 => 32,  79 => 29,  74 => 27,  69 => 25,  63 => 21,  59 => 20,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
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
