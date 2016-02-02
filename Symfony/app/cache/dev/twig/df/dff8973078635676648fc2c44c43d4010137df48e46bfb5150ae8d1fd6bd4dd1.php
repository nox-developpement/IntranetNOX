<?php

/* NoxIntranetSupportBundle:Ticket:mestickets.html.twig */
class __TwigTemplate_fb2cb20fa3497a0c4b84e93288adfd3ccbe6924e38c665dc106bc496d2aad317 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportBundle:Ticket:mestickets.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ef63e48e3b13923659140d3c93438b864f2dc3767f26bc0d2b06fe67d9034cf4 = $this->env->getExtension("native_profiler");
        $__internal_ef63e48e3b13923659140d3c93438b864f2dc3767f26bc0d2b06fe67d9034cf4->enter($__internal_ef63e48e3b13923659140d3c93438b864f2dc3767f26bc0d2b06fe67d9034cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportBundle:Ticket:mestickets.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef63e48e3b13923659140d3c93438b864f2dc3767f26bc0d2b06fe67d9034cf4->leave($__internal_ef63e48e3b13923659140d3c93438b864f2dc3767f26bc0d2b06fe67d9034cf4_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ed8a43a1a0fb44e4210840f7d882dccd6ab3100897bf0cef2c3a1caca1113dee = $this->env->getExtension("native_profiler");
        $__internal_ed8a43a1a0fb44e4210840f7d882dccd6ab3100897bf0cef2c3a1caca1113dee->enter($__internal_ed8a43a1a0fb44e4210840f7d882dccd6ab3100897bf0cef2c3a1caca1113dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Mes ticket ";
        
        $__internal_ed8a43a1a0fb44e4210840f7d882dccd6ab3100897bf0cef2c3a1caca1113dee->leave($__internal_ed8a43a1a0fb44e4210840f7d882dccd6ab3100897bf0cef2c3a1caca1113dee_prof);

    }

    // line 5
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_a1e8265247da916ca43e060d032fcd6d7fdee726134c7b60a345834fcfaa63dd = $this->env->getExtension("native_profiler");
        $__internal_a1e8265247da916ca43e060d032fcd6d7fdee726134c7b60a345834fcfaa63dd->enter($__internal_a1e8265247da916ca43e060d032fcd6d7fdee726134c7b60a345834fcfaa63dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 6
        echo "
    <h2> Mes tickets </h2>

    <table id=\"mesTickets\">
        <tr> 
            <td> Objet </td>
            <td> Date d'ajout </td>
            <td> Status </td>
            <td> Valider </td>
            <td> Supprimer </td>
        </tr>

        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tickets"]) ? $context["tickets"] : $this->getContext($context, "tickets")));
        foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
            // line 19
            echo "            <tr>

                <td> ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "objet", array()), "html", null, true);
            echo " </td>

                <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "dateajout", array()), "html", null, true);
            echo " </td>

                ";
            // line 25
            if (($this->getAttribute($context["ticket"], "status", array()) == "En attente")) {
                // line 26
                echo "                    <td class=\"enAttente\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "status", array()), "html", null, true);
                echo " </td>
                ";
            } elseif (($this->getAttribute(            // line 27
$context["ticket"], "status", array()) == "En traitement")) {
                // line 28
                echo "                    <td class=\"enTraitement\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "status", array()), "html", null, true);
                echo " </td>
                ";
            } elseif (($this->getAttribute(            // line 29
$context["ticket"], "status", array()) == "Traité")) {
                // line 30
                echo "                    <td class=\"traité\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["ticket"], "status", array()), "html", null, true);
                echo " </td>
                ";
            }
            // line 32
            echo "                
                <td class=\"valider\"> <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupport/images/validation.png"), "html", null, true);
            echo "\" alt=\"valider\"> </td>
                
                <td class=\"supprimer\"> <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetsupport/images/suppression.png"), "html", null, true);
            echo "\" alt=\"supprimer\"> </td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ticket'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
    </table>
";
        
        $__internal_a1e8265247da916ca43e060d032fcd6d7fdee726134c7b60a345834fcfaa63dd->leave($__internal_a1e8265247da916ca43e060d032fcd6d7fdee726134c7b60a345834fcfaa63dd_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportBundle:Ticket:mestickets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 39,  115 => 35,  110 => 33,  107 => 32,  101 => 30,  99 => 29,  94 => 28,  92 => 27,  87 => 26,  85 => 25,  80 => 23,  75 => 21,  71 => 19,  67 => 18,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Mes ticket {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <h2> Mes tickets </h2>*/
/* */
/*     <table id="mesTickets">*/
/*         <tr> */
/*             <td> Objet </td>*/
/*             <td> Date d'ajout </td>*/
/*             <td> Status </td>*/
/*             <td> Valider </td>*/
/*             <td> Supprimer </td>*/
/*         </tr>*/
/* */
/*         {% for ticket in tickets %}*/
/*             <tr>*/
/* */
/*                 <td> {{ ticket.objet }} </td>*/
/* */
/*                 <td> {{ ticket.dateajout }} </td>*/
/* */
/*                 {% if ticket.status == "En attente" %}*/
/*                     <td class="enAttente"> {{ ticket.status }} </td>*/
/*                 {% elseif ticket.status == "En traitement" %}*/
/*                     <td class="enTraitement"> {{ ticket.status }} </td>*/
/*                 {% elseif ticket.status == "Traité" %}*/
/*                     <td class="traité"> {{ ticket.status }} </td>*/
/*                 {% endif %}*/
/*                 */
/*                 <td class="valider"> <img src="{{ asset('bundles/noxintranetsupport/images/validation.png') }}" alt="valider"> </td>*/
/*                 */
/*                 <td class="supprimer"> <img src="{{ asset('bundles/noxintranetsupport/images/suppression.png') }}" alt="supprimer"> </td>*/
/* */
/*             </tr>*/
/*         {% endfor %}*/
/* */
/*     </table>*/
/* {% endblock %}*/
