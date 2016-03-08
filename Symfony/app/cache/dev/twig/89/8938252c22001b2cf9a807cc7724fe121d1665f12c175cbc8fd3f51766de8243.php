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
        $__internal_5674310be745c216e25cfaa1be77a4d23e944af8192305e18cf0acfe333d9295 = $this->env->getExtension("native_profiler");
        $__internal_5674310be745c216e25cfaa1be77a4d23e944af8192305e18cf0acfe333d9295->enter($__internal_5674310be745c216e25cfaa1be77a4d23e944af8192305e18cf0acfe333d9295_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5674310be745c216e25cfaa1be77a4d23e944af8192305e18cf0acfe333d9295->leave($__internal_5674310be745c216e25cfaa1be77a4d23e944af8192305e18cf0acfe333d9295_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_b7c96bf395f3cb62b7e98293abce4df549e968b44e229d184287527d4b7a0fff = $this->env->getExtension("native_profiler");
        $__internal_b7c96bf395f3cb62b7e98293abce4df549e968b44e229d184287527d4b7a0fff->enter($__internal_b7c96bf395f3cb62b7e98293abce4df549e968b44e229d184287527d4b7a0fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition ";
        
        $__internal_b7c96bf395f3cb62b7e98293abce4df549e968b44e229d184287527d4b7a0fff->leave($__internal_b7c96bf395f3cb62b7e98293abce4df549e968b44e229d184287527d4b7a0fff_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_06355d39671c0b0756fc9106e7913b5385f0b3245ff3871910509b9be980b718 = $this->env->getExtension("native_profiler");
        $__internal_06355d39671c0b0756fc9106e7913b5385f0b3245ff3871910509b9be980b718->enter($__internal_06355d39671c0b0756fc9106e7913b5385f0b3245ff3871910509b9be980b718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_06355d39671c0b0756fc9106e7913b5385f0b3245ff3871910509b9be980b718->leave($__internal_06355d39671c0b0756fc9106e7913b5385f0b3245ff3871910509b9be980b718_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d6eb6da30a79839838d7d65e64396f6f6056a15719dabafc28b51367957a292a = $this->env->getExtension("native_profiler");
        $__internal_d6eb6da30a79839838d7d65e64396f6f6056a15719dabafc28b51367957a292a->enter($__internal_d6eb6da30a79839838d7d65e64396f6f6056a15719dabafc28b51367957a292a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div class='DivFormulairePlacementChamp'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), 'form_start', array("attr" => array("class" => "formulairePlacementChamp")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), 'errors');
        echo "

        <fieldset>

            <legend>Placer un champ</legend>

            <p>
                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "IdChamp", array()), 'label', array("label_attr" => array("class" => "labelFormulairePlacementChamp"), "label" => "Nom :"));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "IdChamp", array()), 'errors');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "IdChamp", array()), 'widget', array("attr" => array("class" => "texteFormulairePlacementChamp")));
        echo " 

                <br />

                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesDonnees", array()), 'label', array("label_attr" => array("class" => "labelFormulairePlacementChamp"), "label" => "Coordonnees données :"));
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesDonnees", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesDonnees", array()), 'widget', array("attr" => array("class" => "textFormulairePlacementChamp")));
        echo "

                <br />

                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "Placer", array()), 'widget', array("attr" => array("class" => "submitFormulairePlacementChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), 'form_end');
        echo "

    </div>

    <div class='DivFormulaireSuppressionPositionChamp'>

        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), 'form_start', array("attr" => array("class" => "formulaireSuppressionPositionChamp")));
        echo "
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer un champ</legend>

            <p>
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), "IdChamp", array()), 'label', array("label_attr" => array("class" => "labelFormulaireSuppressionPositionChamp"), "label" => "Nom - Position"));
        echo " <br />
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), "IdChamp", array()), 'errors');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), "IdChamp", array()), 'widget', array("attr" => array("class" => "texteFormulaireSuppressionPositionChamp")));
        echo " 

                <br />

                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), "Supprimer", array()), 'widget', array("attr" => array("class" => "submitFormulaireSuppressionPositionChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppresionPositionChamp"]) ? $context["formSuppresionPositionChamp"] : $this->getContext($context, "formSuppresionPositionChamp")), 'form_end');
        echo "

    </div>

    <div id='tableauExcel'>

        <table>
            <tr>
                <th></th>
                    ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_upper_filter($this->env, "a"), $this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "getHighestColumn", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 71
            echo "                    <th style='font-weight: bold'>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "
            </tr>

            ";
        // line 76
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
                    <th style='font-weight: bold'>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>

                    ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "getCellIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 81
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cell"], "getValue", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
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
        // line 87
        echo "
        </table>

    </div>

";
        
        $__internal_d6eb6da30a79839838d7d65e64396f6f6056a15719dabafc28b51367957a292a->leave($__internal_d6eb6da30a79839838d7d65e64396f6f6056a15719dabafc28b51367957a292a_prof);

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
        return array (  254 => 87,  237 => 83,  228 => 81,  224 => 80,  219 => 78,  199 => 76,  194 => 73,  185 => 71,  181 => 70,  169 => 61,  161 => 56,  154 => 52,  150 => 51,  146 => 50,  136 => 43,  132 => 42,  123 => 36,  115 => 31,  108 => 27,  104 => 26,  100 => 25,  93 => 21,  89 => 20,  85 => 19,  75 => 12,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*     <div class='DivFormulairePlacementChamp'>*/
/* */
/*         {{ form_start(formPlacementChamp, {'attr': {'class': 'formulairePlacementChamp'}}) }}*/
/*         {{ form_errors(formPlacementChamp) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Placer un champ</legend>*/
/* */
/*             <p>*/
/*                 {{ form_label(formPlacementChamp.IdChamp, "Nom :", {'label_attr': {'class': 'labelFormulairePlacementChamp'}}) }}*/
/*                 {{ form_errors(formPlacementChamp.IdChamp) }}*/
/*                 {{ form_widget(formPlacementChamp.IdChamp, {'attr': {'class': 'texteFormulairePlacementChamp' }}) }} */
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(formPlacementChamp.CoordonneesDonnees, "Coordonnees données :", {'label_attr': {'class': 'labelFormulairePlacementChamp'}}) }}*/
/*                 {{ form_errors(formPlacementChamp.CoordonneesDonnees) }}*/
/*                 {{ form_widget(formPlacementChamp.CoordonneesDonnees, {'attr': {'class': 'textFormulairePlacementChamp' }}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_widget(formPlacementChamp.Placer, {'attr': {'class': 'submitFormulairePlacementChamp', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formPlacementChamp) }}*/
/* */
/*     </div>*/
/* */
/*     <div class='DivFormulaireSuppressionPositionChamp'>*/
/* */
/*         {{ form_start(formSuppresionPositionChamp, {'attr': {'class': 'formulaireSuppressionPositionChamp'}}) }}*/
/*         {{ form_errors(formSuppresionPositionChamp) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Supprimer un champ</legend>*/
/* */
/*             <p>*/
/*                 {{ form_label(formSuppresionPositionChamp.IdChamp, "Nom - Position", {'label_attr': {'class': 'labelFormulaireSuppressionPositionChamp'}}) }} <br />*/
/*                 {{ form_errors(formSuppresionPositionChamp.IdChamp) }}*/
/*                 {{ form_widget(formSuppresionPositionChamp.IdChamp, {'attr': {'class': 'texteFormulaireSuppressionPositionChamp' }}) }} */
/* */
/*                 <br />*/
/* */
/*                 {{ form_widget(formSuppresionPositionChamp.Supprimer, {'attr': {'class': 'submitFormulaireSuppressionPositionChamp', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formSuppresionPositionChamp) }}*/
/* */
/*     </div>*/
/* */
/*     <div id='tableauExcel'>*/
/* */
/*         <table>*/
/*             <tr>*/
/*                 <th></th>*/
/*                     {% for i in 'a'|upper..sheet.getHighestColumn %}*/
/*                     <th style='font-weight: bold'>{{ i }}</th>*/
/*                     {% endfor %}*/
/* */
/*             </tr>*/
/* */
/*             {% for row in sheet.getRowIterator %} */
/*                 <tr>*/
/*                     <th style='font-weight: bold'>{{ loop.index }}</th>*/
/* */
/*                     {% for cell in row.getCellIterator %}*/
/*                         <td>{{ cell.getValue }}</td>*/
/*                     {% endfor %}*/
/* */
/*                 </tr>*/
/* */
/*             {% endfor %}*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
