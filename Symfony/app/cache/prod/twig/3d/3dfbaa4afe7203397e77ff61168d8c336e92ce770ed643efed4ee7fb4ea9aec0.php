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
        ";
        // line 10
        if (((isset($context["liens"]) ? $context["liens"] : null) == null)) {
            // line 11
            echo "            Il n'y a aucun lien pour le moment.
        ";
        } else {
            // line 13
            echo "            <ul>
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lienPrincipal"]) {
                if (($this->getAttribute($context["lienPrincipal"], "parent", array()) == null)) {
                    // line 15
                    echo "                    <li> 
                        ";
                    // line 16
                    if (($this->getAttribute($context["lienPrincipal"], "type", array()) == "Lien")) {
                        // line 17
                        echo "                            <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Arrowhead-Right-32.png"), "html", null, true);
                        echo "\">
                            <a href=\"";
                        // line 18
                        echo twig_escape_filter($this->env, $this->getAttribute($context["lienPrincipal"], "liens", array()), "html", null, true);
                        echo "\" target=\"_blank\"> ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["lienPrincipal"], "libelle", array()), "html", null, true);
                        echo " </a>
                        ";
                    } else {
                        // line 20
                        echo "                            <img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Arrowhead-Right-32.png"), "html", null, true);
                        echo "\">
                            ";
                        // line 21
                        echo twig_escape_filter($this->env, $this->getAttribute($context["lienPrincipal"], "libelle", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 23
                    echo "                        <ul>
                            ";
                    // line 24
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["lienEnfant"]) {
                        if (($this->getAttribute($context["lienEnfant"], "parent", array()) != null)) {
                            // line 25
                            echo "                                ";
                            if (($this->getAttribute($context["lienEnfant"], "parent", array()) == $this->getAttribute($context["lienPrincipal"], "libelle", array()))) {
                                // line 26
                                echo "                                    <li> <img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetressources/images/Arrowhead-Right-32.png"), "html", null, true);
                                echo "\"> <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lienEnfant"], "liens", array()), "html", null, true);
                                echo "\" target=\"_blank\"> ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lienEnfant"], "libelle", array()), "html", null, true);
                                echo " </a> </li>
                                    ";
                            }
                            // line 28
                            echo "                                ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lienEnfant'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 29
                    echo "                        </ul>
                    </li>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lienPrincipal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            </ul>
        ";
        }
        // line 34
        echo "    </div>

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
        return array (  131 => 34,  127 => 32,  118 => 29,  111 => 28,  101 => 26,  98 => 25,  93 => 24,  90 => 23,  85 => 21,  80 => 20,  73 => 18,  68 => 17,  66 => 16,  63 => 15,  58 => 14,  55 => 13,  51 => 11,  49 => 10,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
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
/*         {% if liens == null %}*/
/*             Il n'y a aucun lien pour le moment.*/
/*         {% else %}*/
/*             <ul>*/
/*                 {% for lienPrincipal in liens if lienPrincipal.parent == null %}*/
/*                     <li> */
/*                         {% if lienPrincipal.type == 'Lien' %}*/
/*                             <img src="{{ asset('bundles/noxintranetressources/images/Arrowhead-Right-32.png') }}">*/
/*                             <a href="{{ lienPrincipal.liens }}" target="_blank"> {{ lienPrincipal.libelle }} </a>*/
/*                         {% else %}*/
/*                             <img src="{{ asset('bundles/noxintranetressources/images/Arrowhead-Right-32.png') }}">*/
/*                             {{ lienPrincipal.libelle }}*/
/*                         {% endif %}*/
/*                         <ul>*/
/*                             {% for lienEnfant in liens if lienEnfant.parent != null %}*/
/*                                 {% if lienEnfant.parent == lienPrincipal.libelle %}*/
/*                                     <li> <img src="{{ asset('bundles/noxintranetressources/images/Arrowhead-Right-32.png') }}"> <a href="{{ lienEnfant.liens }}" target="_blank"> {{ lienEnfant.libelle }} </a> </li>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                         </ul>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
