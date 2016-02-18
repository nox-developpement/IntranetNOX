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
        $__internal_6e83eb895792e0aa5dda0188d567e9f81542a98a1c2fcf2b68a42f115b83c9a4 = $this->env->getExtension("native_profiler");
        $__internal_6e83eb895792e0aa5dda0188d567e9f81542a98a1c2fcf2b68a42f115b83c9a4->enter($__internal_6e83eb895792e0aa5dda0188d567e9f81542a98a1c2fcf2b68a42f115b83c9a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e83eb895792e0aa5dda0188d567e9f81542a98a1c2fcf2b68a42f115b83c9a4->leave($__internal_6e83eb895792e0aa5dda0188d567e9f81542a98a1c2fcf2b68a42f115b83c9a4_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_505df829068dad4bd5661441888073773d43882a4f3c80295ddaa8bfbf2779ad = $this->env->getExtension("native_profiler");
        $__internal_505df829068dad4bd5661441888073773d43882a4f3c80295ddaa8bfbf2779ad->enter($__internal_505df829068dad4bd5661441888073773d43882a4f3c80295ddaa8bfbf2779ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition ";
        
        $__internal_505df829068dad4bd5661441888073773d43882a4f3c80295ddaa8bfbf2779ad->leave($__internal_505df829068dad4bd5661441888073773d43882a4f3c80295ddaa8bfbf2779ad_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_f6b99b6b4bec9b13143969d4b6e510a7ba1ab3d6a06c6d70e544496c72c49f86 = $this->env->getExtension("native_profiler");
        $__internal_f6b99b6b4bec9b13143969d4b6e510a7ba1ab3d6a06c6d70e544496c72c49f86->enter($__internal_f6b99b6b4bec9b13143969d4b6e510a7ba1ab3d6a06c6d70e544496c72c49f86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_f6b99b6b4bec9b13143969d4b6e510a7ba1ab3d6a06c6d70e544496c72c49f86->leave($__internal_f6b99b6b4bec9b13143969d4b6e510a7ba1ab3d6a06c6d70e544496c72c49f86_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_dcb294b7a241ae7ccc0f9116787552d2a017c4bb61cc5591b63aabf02add609d = $this->env->getExtension("native_profiler");
        $__internal_dcb294b7a241ae7ccc0f9116787552d2a017c4bb61cc5591b63aabf02add609d->enter($__internal_dcb294b7a241ae7ccc0f9116787552d2a017c4bb61cc5591b63aabf02add609d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id='tableauExcel'>

        <div>
            <p>";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
        echo "</p>
            <p> <button class=\"boutonFormulaire\" onclick=\"location.reload();\"> Annuler </button> <button class=\"boutonFormulaire\" onclick=\"exctractionTableau();
                    window.location.href = '";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_affaires_edition_sauvegarde", array("filename" => (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")))), "html", null, true);
        echo "';\"> Sauvegarder </button> </p>
        </div>

        <table>
            <tr>
                <th></th>
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_upper_filter($this->env, "a"), $this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "getHighestColumn", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 21
            echo "                    <th style='font-weight: bold'>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
                <th style='font-weight: bold' class=\"ajoutColonne\">+</th>
            </tr>

            ";
        // line 27
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
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>

                    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "getCellIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 32
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cell"], "getValue", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
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
        // line 38
        echo "
            <tr>
                <th style='font-weight: bold' class=\"ajoutLigne\">+</th>
            </tr>

        </table>

    </div>

";
        
        $__internal_dcb294b7a241ae7ccc0f9116787552d2a017c4bb61cc5591b63aabf02add609d->leave($__internal_dcb294b7a241ae7ccc0f9116787552d2a017c4bb61cc5591b63aabf02add609d_prof);

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
        return array (  160 => 38,  143 => 34,  134 => 32,  130 => 31,  125 => 29,  105 => 27,  99 => 23,  90 => 21,  86 => 20,  77 => 14,  72 => 12,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*         <div>*/
/*             <p>{{ filename }}</p>*/
/*             <p> <button class="boutonFormulaire" onclick="location.reload();"> Annuler </button> <button class="boutonFormulaire" onclick="exctractionTableau();*/
/*                     window.location.href = '{{ path('nox_intranet_administration_affaires_edition_sauvegarde', { 'filename': filename }) }}';"> Sauvegarder </button> </p>*/
/*         </div>*/
/* */
/*         <table>*/
/*             <tr>*/
/*                 <th></th>*/
/*                     {% for i in 'a'|upper..sheet.getHighestColumn %}*/
/*                     <th style='font-weight: bold'>{{ i }}</th>*/
/*                     {% endfor %}*/
/* */
/*                 <th style='font-weight: bold' class="ajoutColonne">+</th>*/
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
/*             <tr>*/
/*                 <th style='font-weight: bold' class="ajoutLigne">+</th>*/
/*             </tr>*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
