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
        $__internal_eaa35b529b869b2e72f8c908fe4eedf87637343e62cbe6b56b1027fce0d4bf4b = $this->env->getExtension("native_profiler");
        $__internal_eaa35b529b869b2e72f8c908fe4eedf87637343e62cbe6b56b1027fce0d4bf4b->enter($__internal_eaa35b529b869b2e72f8c908fe4eedf87637343e62cbe6b56b1027fce0d4bf4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaa35b529b869b2e72f8c908fe4eedf87637343e62cbe6b56b1027fce0d4bf4b->leave($__internal_eaa35b529b869b2e72f8c908fe4eedf87637343e62cbe6b56b1027fce0d4bf4b_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_8c87de005c351549331e0c332037623e18b329ae48858c9e745803f2bff4ea11 = $this->env->getExtension("native_profiler");
        $__internal_8c87de005c351549331e0c332037623e18b329ae48858c9e745803f2bff4ea11->enter($__internal_8c87de005c351549331e0c332037623e18b329ae48858c9e745803f2bff4ea11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition ";
        
        $__internal_8c87de005c351549331e0c332037623e18b329ae48858c9e745803f2bff4ea11->leave($__internal_8c87de005c351549331e0c332037623e18b329ae48858c9e745803f2bff4ea11_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_048808493a80376cafc5b09159d69800a09fe25fa126c6d1f584b1d5e60d1e66 = $this->env->getExtension("native_profiler");
        $__internal_048808493a80376cafc5b09159d69800a09fe25fa126c6d1f584b1d5e60d1e66->enter($__internal_048808493a80376cafc5b09159d69800a09fe25fa126c6d1f584b1d5e60d1e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_048808493a80376cafc5b09159d69800a09fe25fa126c6d1f584b1d5e60d1e66->leave($__internal_048808493a80376cafc5b09159d69800a09fe25fa126c6d1f584b1d5e60d1e66_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_27430e2cbdeb7a2b092520c79e2fb8619a63321f58aa5d41e303ccd555c45cd6 = $this->env->getExtension("native_profiler");
        $__internal_27430e2cbdeb7a2b092520c79e2fb8619a63321f58aa5d41e303ccd555c45cd6->enter($__internal_27430e2cbdeb7a2b092520c79e2fb8619a63321f58aa5d41e303ccd555c45cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
            </p>

            <p>
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "Colonne", array()), 'label', array("label_attr" => array("class" => "labelFormulairePlacementChamp"), "label" => "Colonne :"));
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "Colonne", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "Colonne", array()), 'widget', array("attr" => array("class" => "textFormulairePlacementChamp")));
        echo "

                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "_token", array()), 'widget');
        echo "
            </p>

            <p>
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "Ligne", array()), 'label', array("label_attr" => array("class" => "labelFormulairePlacementChamp"), "label" => "Ligne :"));
        echo "
                ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "Ligne", array()), 'errors');
        echo "
                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "Ligne", array()), 'widget', array("attr" => array("class" => "textFormulairePlacementChamp")));
        echo "
            </p>

            <p>
                ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "Placer", array()), 'widget', array("attr" => array("class" => "submitFormulairePlacementChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), 'form_end');
        echo "

    </div>

    <div id='tableauExcel'>

        <!--
        <div>
            <p>";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
        echo "</p>
            <p> <button class=\"boutonFormulaire\" onclick=\"location.reload();\"> Annuler </button> <button class=\"boutonFormulaire\" onclick=\"exctractionTableau();
                    window.location.href = '";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_affaires_edition_sauvegarde", array("filename" => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
        echo "';\"> Sauvegarder </button> </p>
        </div>
        -->

        <table>
            <tr>
                <th></th>
                    ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_upper_filter($this->env, "a"), $this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "getHighestColumn", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 62
            echo "                    <th style='font-weight: bold'>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
                <!--
                <th style='font-weight: bold' class=\"ajoutColonne\">+</th>
                -->
            </tr>

            ";
        // line 70
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
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>

                    ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "getCellIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 75
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cell"], "getValue", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
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
        // line 81
        echo "
            <!--
            <tr>
                <th style='font-weight: bold' class=\"ajoutLigne\">+</th>
            </tr>
            -->

        </table>

    </div>

";
        
        $__internal_27430e2cbdeb7a2b092520c79e2fb8619a63321f58aa5d41e303ccd555c45cd6->leave($__internal_27430e2cbdeb7a2b092520c79e2fb8619a63321f58aa5d41e303ccd555c45cd6_prof);

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
        return array (  245 => 81,  228 => 77,  219 => 75,  215 => 74,  210 => 72,  190 => 70,  182 => 64,  173 => 62,  169 => 61,  159 => 54,  154 => 52,  143 => 44,  135 => 39,  128 => 35,  124 => 34,  120 => 33,  113 => 29,  108 => 27,  104 => 26,  100 => 25,  93 => 21,  89 => 20,  85 => 19,  75 => 12,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*                 {{ form_widget(formPlacementChamp.IdChamp, {'attr': {'class': 'texteFormulairePlacementChamp' }}) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_label(formPlacementChamp.Colonne, "Colonne :", {'label_attr': {'class': 'labelFormulairePlacementChamp'}}) }}*/
/*                 {{ form_errors(formPlacementChamp.Colonne) }}*/
/*                 {{ form_widget(formPlacementChamp.Colonne, {'attr': {'class': 'textFormulairePlacementChamp' }}) }}*/
/* */
/*                 {{ form_widget(formPlacementChamp._token) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_label(formPlacementChamp.Ligne, "Ligne :", {'label_attr': {'class': 'labelFormulairePlacementChamp'}}) }}*/
/*                 {{ form_errors(formPlacementChamp.Ligne) }}*/
/*                 {{ form_widget(formPlacementChamp.Ligne, {'attr': {'class': 'textFormulairePlacementChamp' }}) }}*/
/*             </p>*/
/* */
/*             <p>*/
/*                 {{ form_widget(formPlacementChamp.Placer, {'attr': {'class': 'submitFormulairePlacementChamp', 'class': 'boutonFormulaire' }}) }}*/
/*             </p>*/
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(formPlacementChamp) }}*/
/* */
/*     </div>*/
/* */
/*     <div id='tableauExcel'>*/
/* */
/*         <!--*/
/*         <div>*/
/*             <p>{{ filename }}</p>*/
/*             <p> <button class="boutonFormulaire" onclick="location.reload();"> Annuler </button> <button class="boutonFormulaire" onclick="exctractionTableau();*/
/*                     window.location.href = '{{ path('nox_intranet_administration_affaires_edition_sauvegarde', { 'filename': file }) }}';"> Sauvegarder </button> </p>*/
/*         </div>*/
/*         -->*/
/* */
/*         <table>*/
/*             <tr>*/
/*                 <th></th>*/
/*                     {% for i in 'a'|upper..sheet.getHighestColumn %}*/
/*                     <th style='font-weight: bold'>{{ i }}</th>*/
/*                     {% endfor %}*/
/* */
/*                 <!--*/
/*                 <th style='font-weight: bold' class="ajoutColonne">+</th>*/
/*                 -->*/
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
/*             <!--*/
/*             <tr>*/
/*                 <th style='font-weight: bold' class="ajoutLigne">+</th>*/
/*             </tr>*/
/*             -->*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
