<?php

/* NoxIntranetRessourcesBundle:Liens:liens.html.twig */
class __TwigTemplate_bacb27f22282ee04708ccbf5f208a1332b8c235bf143056ab3c7431cb89ce471 extends Twig_Template
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
        $__internal_80c269cdb3bc52ea60118a3ad52d8c61198e0fa44fdcaa71d49ef401a60fbc32 = $this->env->getExtension("native_profiler");
        $__internal_80c269cdb3bc52ea60118a3ad52d8c61198e0fa44fdcaa71d49ef401a60fbc32->enter($__internal_80c269cdb3bc52ea60118a3ad52d8c61198e0fa44fdcaa71d49ef401a60fbc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Liens:liens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80c269cdb3bc52ea60118a3ad52d8c61198e0fa44fdcaa71d49ef401a60fbc32->leave($__internal_80c269cdb3bc52ea60118a3ad52d8c61198e0fa44fdcaa71d49ef401a60fbc32_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_54e110f9b7c385b5667e711e3327878618c77a82ced1ff3752921c93780b394b = $this->env->getExtension("native_profiler");
        $__internal_54e110f9b7c385b5667e711e3327878618c77a82ced1ff3752921c93780b394b->enter($__internal_54e110f9b7c385b5667e711e3327878618c77a82ced1ff3752921c93780b394b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Liens ";
        
        $__internal_54e110f9b7c385b5667e711e3327878618c77a82ced1ff3752921c93780b394b->leave($__internal_54e110f9b7c385b5667e711e3327878618c77a82ced1ff3752921c93780b394b_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_01b834419f730b170a492f1a63025c22707a29cbff762028040fe20bb538a0eb = $this->env->getExtension("native_profiler");
        $__internal_01b834419f730b170a492f1a63025c22707a29cbff762028040fe20bb538a0eb->enter($__internal_01b834419f730b170a492f1a63025c22707a29cbff762028040fe20bb538a0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " Liens ";
        
        $__internal_01b834419f730b170a492f1a63025c22707a29cbff762028040fe20bb538a0eb->leave($__internal_01b834419f730b170a492f1a63025c22707a29cbff762028040fe20bb538a0eb_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fc37f85170b6c1e2e9d4e2ed43088db1d473a37fd9a2c0c9436d28e07393af4d = $this->env->getExtension("native_profiler");
        $__internal_fc37f85170b6c1e2e9d4e2ed43088db1d473a37fd9a2c0c9436d28e07393af4d->enter($__internal_fc37f85170b6c1e2e9d4e2ed43088db1d473a37fd9a2c0c9436d28e07393af4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"Liens\">
        ";
        // line 10
        if (((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")) == null)) {
            // line 11
            echo "            Il n'y a aucun lien pour le moment.
        ";
        } else {
            // line 13
            echo "            <ul>
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")));
            foreach ($context['_seq'] as $context["_key"] => $context["lienPrincipal"]) {
                if (($this->getAttribute($context["lienPrincipal"], "parent", array()) == "Aucune")) {
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
                    $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")));
                    foreach ($context['_seq'] as $context["_key"] => $context["lienEnfant"]) {
                        if (($this->getAttribute($context["lienEnfant"], "parent", array()) != "Aucune")) {
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
        
        $__internal_fc37f85170b6c1e2e9d4e2ed43088db1d473a37fd9a2c0c9436d28e07393af4d->leave($__internal_fc37f85170b6c1e2e9d4e2ed43088db1d473a37fd9a2c0c9436d28e07393af4d_prof);

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
        return array (  152 => 34,  148 => 32,  139 => 29,  132 => 28,  122 => 26,  119 => 25,  114 => 24,  111 => 23,  106 => 21,  101 => 20,  94 => 18,  89 => 17,  87 => 16,  84 => 15,  79 => 14,  76 => 13,  72 => 11,  70 => 10,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*                 {% for lienPrincipal in liens if lienPrincipal.parent == 'Aucune' %}*/
/*                     <li> */
/*                         {% if lienPrincipal.type == 'Lien' %}*/
/*                             <img src="{{ asset('bundles/noxintranetressources/images/Arrowhead-Right-32.png') }}">*/
/*                             <a href="{{ lienPrincipal.liens }}" target="_blank"> {{ lienPrincipal.libelle }} </a>*/
/*                         {% else %}*/
/*                             <img src="{{ asset('bundles/noxintranetressources/images/Arrowhead-Right-32.png') }}">*/
/*                             {{ lienPrincipal.libelle }}*/
/*                         {% endif %}*/
/*                         <ul>*/
/*                             {% for lienEnfant in liens if lienEnfant.parent != 'Aucune' %}*/
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
