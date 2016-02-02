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
        $__internal_b7905a06e15891950e091f345cd55f030d8dc0766d47439863ddc47b748a827b = $this->env->getExtension("native_profiler");
        $__internal_b7905a06e15891950e091f345cd55f030d8dc0766d47439863ddc47b748a827b->enter($__internal_b7905a06e15891950e091f345cd55f030d8dc0766d47439863ddc47b748a827b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Imprimantes:imprimantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7905a06e15891950e091f345cd55f030d8dc0766d47439863ddc47b748a827b->leave($__internal_b7905a06e15891950e091f345cd55f030d8dc0766d47439863ddc47b748a827b_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ceff45724a3cd6bdd3217fa6d6f61de310925a844780952af70c4dcb7e41c4f9 = $this->env->getExtension("native_profiler");
        $__internal_ceff45724a3cd6bdd3217fa6d6f61de310925a844780952af70c4dcb7e41c4f9->enter($__internal_ceff45724a3cd6bdd3217fa6d6f61de310925a844780952af70c4dcb7e41c4f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Imprimantes ";
        
        $__internal_ceff45724a3cd6bdd3217fa6d6f61de310925a844780952af70c4dcb7e41c4f9->leave($__internal_ceff45724a3cd6bdd3217fa6d6f61de310925a844780952af70c4dcb7e41c4f9_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_0b4ccf23eec5d0ab326f4e673428ddc90ce45dee093fc9d9ab9f2e4921f51115 = $this->env->getExtension("native_profiler");
        $__internal_0b4ccf23eec5d0ab326f4e673428ddc90ce45dee093fc9d9ab9f2e4921f51115->enter($__internal_0b4ccf23eec5d0ab326f4e673428ddc90ce45dee093fc9d9ab9f2e4921f51115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Imprimantes";
        
        $__internal_0b4ccf23eec5d0ab326f4e673428ddc90ce45dee093fc9d9ab9f2e4921f51115->leave($__internal_0b4ccf23eec5d0ab326f4e673428ddc90ce45dee093fc9d9ab9f2e4921f51115_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9cded7500f7df9857bcde578781d0ccf231da14f0f61d12b5a1d20ad7b3a84b0 = $this->env->getExtension("native_profiler");
        $__internal_9cded7500f7df9857bcde578781d0ccf231da14f0f61d12b5a1d20ad7b3a84b0->enter($__internal_9cded7500f7df9857bcde578781d0ccf231da14f0f61d12b5a1d20ad7b3a84b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_9cded7500f7df9857bcde578781d0ccf231da14f0f61d12b5a1d20ad7b3a84b0->leave($__internal_9cded7500f7df9857bcde578781d0ccf231da14f0f61d12b5a1d20ad7b3a84b0_prof);

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
