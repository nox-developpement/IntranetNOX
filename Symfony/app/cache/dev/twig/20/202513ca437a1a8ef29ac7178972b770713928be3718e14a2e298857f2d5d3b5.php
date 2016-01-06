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
        $__internal_f1112e46323cf9fa7d4f3f9ef300c30a5e7823e5ca3c3323d252e06939766676 = $this->env->getExtension("native_profiler");
        $__internal_f1112e46323cf9fa7d4f3f9ef300c30a5e7823e5ca3c3323d252e06939766676->enter($__internal_f1112e46323cf9fa7d4f3f9ef300c30a5e7823e5ca3c3323d252e06939766676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Imprimantes:imprimantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1112e46323cf9fa7d4f3f9ef300c30a5e7823e5ca3c3323d252e06939766676->leave($__internal_f1112e46323cf9fa7d4f3f9ef300c30a5e7823e5ca3c3323d252e06939766676_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_34e11e0ffb48b07d5682d927a25e2ef847617f50e5c0c7a331fb7286a75985df = $this->env->getExtension("native_profiler");
        $__internal_34e11e0ffb48b07d5682d927a25e2ef847617f50e5c0c7a331fb7286a75985df->enter($__internal_34e11e0ffb48b07d5682d927a25e2ef847617f50e5c0c7a331fb7286a75985df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Imprimantes ";
        
        $__internal_34e11e0ffb48b07d5682d927a25e2ef847617f50e5c0c7a331fb7286a75985df->leave($__internal_34e11e0ffb48b07d5682d927a25e2ef847617f50e5c0c7a331fb7286a75985df_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_78bb6a0ede7754c501419e20bb67aa5c1926f6dc125a8763da5c8059652510e5 = $this->env->getExtension("native_profiler");
        $__internal_78bb6a0ede7754c501419e20bb67aa5c1926f6dc125a8763da5c8059652510e5->enter($__internal_78bb6a0ede7754c501419e20bb67aa5c1926f6dc125a8763da5c8059652510e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Imprimantes";
        
        $__internal_78bb6a0ede7754c501419e20bb67aa5c1926f6dc125a8763da5c8059652510e5->leave($__internal_78bb6a0ede7754c501419e20bb67aa5c1926f6dc125a8763da5c8059652510e5_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d681228715fe3610eca23876288eb7acc3326aec43a8a86c73369892e7feb0b8 = $this->env->getExtension("native_profiler");
        $__internal_d681228715fe3610eca23876288eb7acc3326aec43a8a86c73369892e7feb0b8->enter($__internal_d681228715fe3610eca23876288eb7acc3326aec43a8a86c73369892e7feb0b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_d681228715fe3610eca23876288eb7acc3326aec43a8a86c73369892e7feb0b8->leave($__internal_d681228715fe3610eca23876288eb7acc3326aec43a8a86c73369892e7feb0b8_prof);

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
