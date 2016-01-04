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
        $__internal_6ca901962f077f815355a0b12019099d2af080d23a044f914ca85f204b42a1db = $this->env->getExtension("native_profiler");
        $__internal_6ca901962f077f815355a0b12019099d2af080d23a044f914ca85f204b42a1db->enter($__internal_6ca901962f077f815355a0b12019099d2af080d23a044f914ca85f204b42a1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Liens:liens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ca901962f077f815355a0b12019099d2af080d23a044f914ca85f204b42a1db->leave($__internal_6ca901962f077f815355a0b12019099d2af080d23a044f914ca85f204b42a1db_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_811079794b87aad5b1b62b8ede78fc68e22e2e9a12b789ba421176d29bdbfe81 = $this->env->getExtension("native_profiler");
        $__internal_811079794b87aad5b1b62b8ede78fc68e22e2e9a12b789ba421176d29bdbfe81->enter($__internal_811079794b87aad5b1b62b8ede78fc68e22e2e9a12b789ba421176d29bdbfe81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Liens ";
        
        $__internal_811079794b87aad5b1b62b8ede78fc68e22e2e9a12b789ba421176d29bdbfe81->leave($__internal_811079794b87aad5b1b62b8ede78fc68e22e2e9a12b789ba421176d29bdbfe81_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_97d76f02044adff3d79f3ac8622a6cc4ea66c063fbb82bc5bd1bb1f9ce9ca4cf = $this->env->getExtension("native_profiler");
        $__internal_97d76f02044adff3d79f3ac8622a6cc4ea66c063fbb82bc5bd1bb1f9ce9ca4cf->enter($__internal_97d76f02044adff3d79f3ac8622a6cc4ea66c063fbb82bc5bd1bb1f9ce9ca4cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " Liens ";
        
        $__internal_97d76f02044adff3d79f3ac8622a6cc4ea66c063fbb82bc5bd1bb1f9ce9ca4cf->leave($__internal_97d76f02044adff3d79f3ac8622a6cc4ea66c063fbb82bc5bd1bb1f9ce9ca4cf_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_07cd3fa648ca4cdc6475a431675453a0953ee9199185932f271ea3532240aa2a = $this->env->getExtension("native_profiler");
        $__internal_07cd3fa648ca4cdc6475a431675453a0953ee9199185932f271ea3532240aa2a->enter($__internal_07cd3fa648ca4cdc6475a431675453a0953ee9199185932f271ea3532240aa2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"Liens\">
        <ul>
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")));
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
                $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")));
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
        
        $__internal_07cd3fa648ca4cdc6475a431675453a0953ee9199185932f271ea3532240aa2a->leave($__internal_07cd3fa648ca4cdc6475a431675453a0953ee9199185932f271ea3532240aa2a_prof);

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
        return array (  140 => 29,  131 => 26,  124 => 25,  114 => 23,  111 => 22,  106 => 21,  103 => 20,  98 => 18,  93 => 17,  86 => 15,  81 => 14,  79 => 13,  76 => 12,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
