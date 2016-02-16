<?php

/* NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig */
class __TwigTemplate_d0ac075ec6a13b7ceea52c00724820e3a3d84dccb24e8bd975d7193b723c33c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig", 1);
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
        $__internal_626b0cafe8b76055524cfddb46be36601b4263d3d8bc174175204d5b0ce8859d = $this->env->getExtension("native_profiler");
        $__internal_626b0cafe8b76055524cfddb46be36601b4263d3d8bc174175204d5b0ce8859d->enter($__internal_626b0cafe8b76055524cfddb46be36601b4263d3d8bc174175204d5b0ce8859d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_626b0cafe8b76055524cfddb46be36601b4263d3d8bc174175204d5b0ce8859d->leave($__internal_626b0cafe8b76055524cfddb46be36601b4263d3d8bc174175204d5b0ce8859d_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_53ed8ba740b6faddc7c54922f05d99bc3a4dc8d14420e855ab95fd3fbebd2b35 = $this->env->getExtension("native_profiler");
        $__internal_53ed8ba740b6faddc7c54922f05d99bc3a4dc8d14420e855ab95fd3fbebd2b35->enter($__internal_53ed8ba740b6faddc7c54922f05d99bc3a4dc8d14420e855ab95fd3fbebd2b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition ";
        
        $__internal_53ed8ba740b6faddc7c54922f05d99bc3a4dc8d14420e855ab95fd3fbebd2b35->leave($__internal_53ed8ba740b6faddc7c54922f05d99bc3a4dc8d14420e855ab95fd3fbebd2b35_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_423a5b1c9733cd6a82a9308cbe47a1d73daf623c34d7635d07ab795d4ff668b4 = $this->env->getExtension("native_profiler");
        $__internal_423a5b1c9733cd6a82a9308cbe47a1d73daf623c34d7635d07ab795d4ff668b4->enter($__internal_423a5b1c9733cd6a82a9308cbe47a1d73daf623c34d7635d07ab795d4ff668b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_423a5b1c9733cd6a82a9308cbe47a1d73daf623c34d7635d07ab795d4ff668b4->leave($__internal_423a5b1c9733cd6a82a9308cbe47a1d73daf623c34d7635d07ab795d4ff668b4_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_dc19637d1285d50393a0e4896944c6e34d431fffe2217f301e467f74348a133e = $this->env->getExtension("native_profiler");
        $__internal_dc19637d1285d50393a0e4896944c6e34d431fffe2217f301e467f74348a133e->enter($__internal_dc19637d1285d50393a0e4896944c6e34d431fffe2217f301e467f74348a133e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id='tableauExcel'>

        <table>
            <tr>
                <th></th>
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_upper_filter($this->env, "a"), $this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "getHighestColumn", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 15
            echo "
                    <th style='font-weight: bold'>
                        ";
            // line 17
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "
                    </th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
                <td style='font-weight: bold' id=\"ajoutColonne\">
                    +
                </td>
            </tr>

            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "getRowIterator", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            echo " 
                <tr>
                    <th style='font-weight: bold'>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "
                    </th>

                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "getCellIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 33
                echo "                        <td>
                            ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["cell"], "getValue", array()), "html", null, true);
                echo "
                        </td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
                </tr>

            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
            <tr>
                <td style='font-weight: bold' id=\"ajoutLigne\">+</td>
            </tr>

        </table>

    </div>

";
        
        $__internal_dc19637d1285d50393a0e4896944c6e34d431fffe2217f301e467f74348a133e->leave($__internal_dc19637d1285d50393a0e4896944c6e34d431fffe2217f301e467f74348a133e_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 41,  142 => 37,  133 => 34,  130 => 33,  126 => 32,  120 => 29,  99 => 26,  91 => 20,  82 => 17,  78 => 15,  74 => 14,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Edition {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration assistant d'affaires{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id='tableauExcel'>*/
/* */
/*         <table>*/
/*             <tr>*/
/*                 <th></th>*/
/*                     {% for i in 'a'|upper..sheet.getHighestColumn %}*/
/* */
/*                     <th style='font-weight: bold'>*/
/*                         {{ i }}*/
/*                     </th>*/
/*                 {% endfor %}*/
/* */
/*                 <td style='font-weight: bold' id="ajoutColonne">*/
/*                     +*/
/*                 </td>*/
/*             </tr>*/
/* */
/*             {% for row in sheet.getRowIterator %} */
/*                 <tr>*/
/*                     <th style='font-weight: bold'>*/
/*                         {{ loop.index }}*/
/*                     </th>*/
/* */
/*                     {% for cell in row.getCellIterator %}*/
/*                         <td>*/
/*                             {{ cell.getValue }}*/
/*                         </td>*/
/*                     {% endfor %}*/
/* */
/*                 </tr>*/
/* */
/*             {% endfor %}*/
/* */
/*             <tr>*/
/*                 <td style='font-weight: bold' id="ajoutLigne">+</td>*/
/*             </tr>*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
