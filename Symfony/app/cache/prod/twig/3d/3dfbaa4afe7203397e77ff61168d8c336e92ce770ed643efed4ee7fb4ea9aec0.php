<?php

/* NoxIntranetRessourcesBundle:Liens:liens.html.twig */
class __TwigTemplate_275f6e56d95e04a1679312e97d48240601c907e1c11d6d4cda70584ebdab0551 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Liens:liens.html.twig", 1);
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
        echo " Liens ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo " Liens ";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div id=\"Liens\">
        <ul>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["lienPrincipal"]) {
            if (($this->getAttribute($context["lienPrincipal"], "parent", array()) == null)) {
                // line 12
                echo "                <li> 
                    ";
                // line 13
                if (($this->getAttribute($context["lienPrincipal"], "type", array()) == "Lien")) {
                    // line 14
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Arrowhead-Right-32.png"), "html", null, true);
                    echo "\">
                        <a href=\"";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lienPrincipal"], "liens", array()), "html", null, true);
                    echo "\" target=\"_blank\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lienPrincipal"], "libelle", array()), "html", null, true);
                    echo " </a>
                    ";
                } else {
                    // line 17
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Arrowhead-Right-32.png"), "html", null, true);
                    echo "\">
                        ";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lienPrincipal"], "libelle", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 20
                echo "                    <ul>
                        ";
                // line 21
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["lienEnfant"]) {
                    if (($this->getAttribute($context["lienEnfant"], "parent", array()) != null)) {
                        // line 22
                        echo "                            ";
                        if (($this->getAttribute($context["lienEnfant"], "parent", array()) == $this->getAttribute($context["lienPrincipal"], "libelle", array()))) {
                            // line 23
                            echo "                                <li> <img src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Arrowhead-Right-32.png"), "html", null, true);
                            echo "\"> <a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lienEnfant"], "liens", array()), "html", null, true);
                            echo "\" target=\"_blank\"> ";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["lienEnfant"], "libelle", array()), "html", null, true);
                            echo " </a> </li>
                                ";
                        }
                        // line 25
                        echo "                            ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lienEnfant'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 26
                echo "                    </ul>
                </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lienPrincipal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </ul>
    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Liens:liens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 29,  110 => 26,  103 => 25,  93 => 23,  90 => 22,  85 => 21,  82 => 20,  77 => 18,  72 => 17,  65 => 15,  60 => 14,  58 => 13,  55 => 12,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Liens {% endblock %}*/
/* */
/* {% block messageAccueil %} Liens {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="Liens">*/
/*         <ul>*/
/*             {% for lienPrincipal in liens if lienPrincipal.parent == null %}*/
/*                 <li> */
/*                     {% if lienPrincipal.type == 'Lien' %}*/
/*                         <img src="{{ asset('bundles/noxintranetressources/images/Arrowhead-Right-32.png') }}">*/
/*                         <a href="{{ lienPrincipal.liens }}" target="_blank"> {{ lienPrincipal.libelle }} </a>*/
/*                     {% else %}*/
/*                         <img src="{{ asset('bundles/noxintranetressources/images/Arrowhead-Right-32.png') }}">*/
/*                         {{ lienPrincipal.libelle }}*/
/*                     {% endif %}*/
/*                     <ul>*/
/*                         {% for lienEnfant in liens if lienEnfant.parent != null %}*/
/*                             {% if lienEnfant.parent == lienPrincipal.libelle %}*/
/*                                 <li> <img src="{{ asset('bundles/noxintranetressources/images/Arrowhead-Right-32.png') }}"> <a href="{{ lienEnfant.liens }}" target="_blank"> {{ lienEnfant.libelle }} </a> </li>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                     </ul>*/
/*                 </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*     </div>*/
/* */
/* {% endblock %}*/
