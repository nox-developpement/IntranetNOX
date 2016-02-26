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
        $__internal_f0d72c771a9bfcc84a0c0f8ebaed5943aef7bf0a337a51802e58c0ca3ba51ce7 = $this->env->getExtension("native_profiler");
        $__internal_f0d72c771a9bfcc84a0c0f8ebaed5943aef7bf0a337a51802e58c0ca3ba51ce7->enter($__internal_f0d72c771a9bfcc84a0c0f8ebaed5943aef7bf0a337a51802e58c0ca3ba51ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0d72c771a9bfcc84a0c0f8ebaed5943aef7bf0a337a51802e58c0ca3ba51ce7->leave($__internal_f0d72c771a9bfcc84a0c0f8ebaed5943aef7bf0a337a51802e58c0ca3ba51ce7_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_94e55f70b0a69420136e4ca08f82e32b3f877403b505eb60a3d10f2deee6a3fd = $this->env->getExtension("native_profiler");
        $__internal_94e55f70b0a69420136e4ca08f82e32b3f877403b505eb60a3d10f2deee6a3fd->enter($__internal_94e55f70b0a69420136e4ca08f82e32b3f877403b505eb60a3d10f2deee6a3fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition ";
        
        $__internal_94e55f70b0a69420136e4ca08f82e32b3f877403b505eb60a3d10f2deee6a3fd->leave($__internal_94e55f70b0a69420136e4ca08f82e32b3f877403b505eb60a3d10f2deee6a3fd_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_982f6c1f29398d8880507678406abe511b56fad501a24c93070066f26cfd056f = $this->env->getExtension("native_profiler");
        $__internal_982f6c1f29398d8880507678406abe511b56fad501a24c93070066f26cfd056f->enter($__internal_982f6c1f29398d8880507678406abe511b56fad501a24c93070066f26cfd056f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_982f6c1f29398d8880507678406abe511b56fad501a24c93070066f26cfd056f->leave($__internal_982f6c1f29398d8880507678406abe511b56fad501a24c93070066f26cfd056f_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_2ec83c63415d1e98b345623fe43bc7e9229f5d478b5324fd87e4c53eff6fe896 = $this->env->getExtension("native_profiler");
        $__internal_2ec83c63415d1e98b345623fe43bc7e9229f5d478b5324fd87e4c53eff6fe896->enter($__internal_2ec83c63415d1e98b345623fe43bc7e9229f5d478b5324fd87e4c53eff6fe896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesLabel", array()), 'label', array("label_attr" => array("class" => "labelFormulairePlacementChamp"), "label" => "Coordonnees label :"));
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesLabel", array()), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesLabel", array()), 'widget', array("attr" => array("class" => "textFormulairePlacementChamp")));
        echo "

                <br />

                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesDonnees", array()), 'label', array("label_attr" => array("class" => "labelFormulairePlacementChamp"), "label" => "Coordonnees données :"));
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesDonnees", array()), 'errors');
        echo "
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "CoordonneesDonnees", array()), 'widget', array("attr" => array("class" => "textFormulairePlacementChamp")));
        echo "

                <br />

                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), "Placer", array()), 'widget', array("attr" => array("class" => "submitFormulairePlacementChamp", "class" => "boutonFormulaire")));
        echo "
            </p>

        </fieldset> 

        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formPlacementChamp"]) ? $context["formPlacementChamp"] : $this->getContext($context, "formPlacementChamp")), 'form_end');
        echo "

    </div>

    <div id='tableauExcel'>

        <!--
        <div>
            <p>";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
        echo "</p>
            <p> <button class=\"boutonFormulaire\" onclick=\"location.reload();\"> Annuler </button> <button class=\"boutonFormulaire\" onclick=\"exctractionTableau();
                    window.location.href = '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_affaires_edition_sauvegarde", array("filename" => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
        echo "';\"> Sauvegarder </button> </p>
        </div>
        -->

        <table>
            <tr>
                <th></th>
                    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_upper_filter($this->env, "a"), $this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "getHighestColumn", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 60
            echo "                    <th style='font-weight: bold'>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
                <!--
                <th style='font-weight: bold' class=\"ajoutColonne\">+</th>
                -->
            </tr>

            ";
        // line 68
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
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>

                    ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "getCellIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 73
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cell"], "getValue", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
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
        // line 79
        echo "
            <!--
            <tr>
                <th style='font-weight: bold' class=\"ajoutLigne\">+</th>
            </tr>
            -->

        </table>

    </div>

";
        
        $__internal_2ec83c63415d1e98b345623fe43bc7e9229f5d478b5324fd87e4c53eff6fe896->leave($__internal_2ec83c63415d1e98b345623fe43bc7e9229f5d478b5324fd87e4c53eff6fe896_prof);

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
        return array (  240 => 79,  223 => 75,  214 => 73,  210 => 72,  205 => 70,  185 => 68,  177 => 62,  168 => 60,  164 => 59,  154 => 52,  149 => 50,  138 => 42,  130 => 37,  123 => 33,  119 => 32,  115 => 31,  108 => 27,  104 => 26,  100 => 25,  93 => 21,  89 => 20,  85 => 19,  75 => 12,  71 => 11,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*                 {{ form_label(formPlacementChamp.CoordonneesLabel, "Coordonnees label :", {'label_attr': {'class': 'labelFormulairePlacementChamp'}}) }}*/
/*                 {{ form_errors(formPlacementChamp.CoordonneesLabel) }}*/
/*                 {{ form_widget(formPlacementChamp.CoordonneesLabel, {'attr': {'class': 'textFormulairePlacementChamp' }}) }}*/
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
