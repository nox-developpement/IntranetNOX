<?php

/* @NoxIntranetRessources/Imprimantes/imprimantes.html.twig */
class __TwigTemplate_f3c40277be8a9ed39103cb800fdf341a57fccf9c505203708ffc1c601e9778cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/Imprimantes/imprimantes.html.twig", 1);
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
        $__internal_b64a82c984451f5acea55c2ef678fb6a41215b126a439c9bbdd35ab9fa172db5 = $this->env->getExtension("native_profiler");
        $__internal_b64a82c984451f5acea55c2ef678fb6a41215b126a439c9bbdd35ab9fa172db5->enter($__internal_b64a82c984451f5acea55c2ef678fb6a41215b126a439c9bbdd35ab9fa172db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetRessources/Imprimantes/imprimantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b64a82c984451f5acea55c2ef678fb6a41215b126a439c9bbdd35ab9fa172db5->leave($__internal_b64a82c984451f5acea55c2ef678fb6a41215b126a439c9bbdd35ab9fa172db5_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_2d249b5e0530303922169a7d431fd3202aa9bdc37146c3c946bc6666d149f235 = $this->env->getExtension("native_profiler");
        $__internal_2d249b5e0530303922169a7d431fd3202aa9bdc37146c3c946bc6666d149f235->enter($__internal_2d249b5e0530303922169a7d431fd3202aa9bdc37146c3c946bc6666d149f235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Imprimantes ";
        
        $__internal_2d249b5e0530303922169a7d431fd3202aa9bdc37146c3c946bc6666d149f235->leave($__internal_2d249b5e0530303922169a7d431fd3202aa9bdc37146c3c946bc6666d149f235_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_b5e92b5bce4c68415789ddeea422609ad7d79be24aaf849789351390fdfff062 = $this->env->getExtension("native_profiler");
        $__internal_b5e92b5bce4c68415789ddeea422609ad7d79be24aaf849789351390fdfff062->enter($__internal_b5e92b5bce4c68415789ddeea422609ad7d79be24aaf849789351390fdfff062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Imprimantes";
        
        $__internal_b5e92b5bce4c68415789ddeea422609ad7d79be24aaf849789351390fdfff062->leave($__internal_b5e92b5bce4c68415789ddeea422609ad7d79be24aaf849789351390fdfff062_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_f2c5589cac871f2ae95c274aec1f1e7ab237d1766600c20a1bb2b7ace0d9169b = $this->env->getExtension("native_profiler");
        $__internal_f2c5589cac871f2ae95c274aec1f1e7ab237d1766600c20a1bb2b7ace0d9169b->enter($__internal_f2c5589cac871f2ae95c274aec1f1e7ab237d1766600c20a1bb2b7ace0d9169b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_f2c5589cac871f2ae95c274aec1f1e7ab237d1766600c20a1bb2b7ace0d9169b->leave($__internal_f2c5589cac871f2ae95c274aec1f1e7ab237d1766600c20a1bb2b7ace0d9169b_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/Imprimantes/imprimantes.html.twig";
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
