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
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be0b12ab5fcc48075226e27af87e5fe48c76ab27259bab84932a323b9f748cdb = $this->env->getExtension("native_profiler");
        $__internal_be0b12ab5fcc48075226e27af87e5fe48c76ab27259bab84932a323b9f748cdb->enter($__internal_be0b12ab5fcc48075226e27af87e5fe48c76ab27259bab84932a323b9f748cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be0b12ab5fcc48075226e27af87e5fe48c76ab27259bab84932a323b9f748cdb->leave($__internal_be0b12ab5fcc48075226e27af87e5fe48c76ab27259bab84932a323b9f748cdb_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_568cbd1200cc76f2cce2586e7357c315495f1aa593a520df297b197ab8a38e73 = $this->env->getExtension("native_profiler");
        $__internal_568cbd1200cc76f2cce2586e7357c315495f1aa593a520df297b197ab8a38e73->enter($__internal_568cbd1200cc76f2cce2586e7357c315495f1aa593a520df297b197ab8a38e73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition ";
        
        $__internal_568cbd1200cc76f2cce2586e7357c315495f1aa593a520df297b197ab8a38e73->leave($__internal_568cbd1200cc76f2cce2586e7357c315495f1aa593a520df297b197ab8a38e73_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_56a75b88038d4dc705b3fb925c34d7656fe7f13a4f692fba2610898fa04a4dc1 = $this->env->getExtension("native_profiler");
        $__internal_56a75b88038d4dc705b3fb925c34d7656fe7f13a4f692fba2610898fa04a4dc1->enter($__internal_56a75b88038d4dc705b3fb925c34d7656fe7f13a4f692fba2610898fa04a4dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_56a75b88038d4dc705b3fb925c34d7656fe7f13a4f692fba2610898fa04a4dc1->leave($__internal_56a75b88038d4dc705b3fb925c34d7656fe7f13a4f692fba2610898fa04a4dc1_prof);

    }

    // line 7
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_b4b706114b04644c70442cce208a5d8f38fe6022eafbf42c1244eb75edb7c07b = $this->env->getExtension("native_profiler");
        $__internal_b4b706114b04644c70442cce208a5d8f38fe6022eafbf42c1244eb75edb7c07b->enter($__internal_b4b706114b04644c70442cce208a5d8f38fe6022eafbf42c1244eb75edb7c07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo twig_escape_filter($this->env, (isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), "html", null, true);
        
        $__internal_b4b706114b04644c70442cce208a5d8f38fe6022eafbf42c1244eb75edb7c07b->leave($__internal_b4b706114b04644c70442cce208a5d8f38fe6022eafbf42c1244eb75edb7c07b_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b3f87301605e09aa10fad4c54d8d9c2f7c3b99ea6de787ac4924d9a093e81633 = $this->env->getExtension("native_profiler");
        $__internal_b3f87301605e09aa10fad4c54d8d9c2f7c3b99ea6de787ac4924d9a093e81633->enter($__internal_b3f87301605e09aa10fad4c54d8d9c2f7c3b99ea6de787ac4924d9a093e81633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div id='tableauExcel'>

        <p> <button> Annuler </button> <button onclick=\"exctractionTableau();\"> Sauvegarder </button> </p>

        <table>
            <tr>
                <th></th>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(twig_upper_filter($this->env, "a"), $this->getAttribute((isset($context["sheet"]) ? $context["sheet"] : $this->getContext($context, "sheet")), "getHighestColumn", array())));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 19
            echo "                    <th style='font-weight: bold'>";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</th>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
                <th style='font-weight: bold' class=\"ajoutColonne\">+</th>
            </tr>

            ";
        // line 25
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
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>

                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["row"], "getCellIterator", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cell"]) {
                // line 30
                echo "                        <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["cell"], "getValue", array()), "html", null, true);
                echo "</td>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
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
        // line 36
        echo "
            <tr>
                <th style='font-weight: bold' class=\"ajoutLigne\">+</th>
            </tr>

        </table>

    </div>

";
        
        $__internal_b3f87301605e09aa10fad4c54d8d9c2f7c3b99ea6de787ac4924d9a093e81633->leave($__internal_b3f87301605e09aa10fad4c54d8d9c2f7c3b99ea6de787ac4924d9a093e81633_prof);

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
        return array (  163 => 36,  146 => 32,  137 => 30,  133 => 29,  128 => 27,  108 => 25,  102 => 21,  93 => 19,  89 => 18,  79 => 10,  73 => 9,  61 => 7,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Edition {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration assistant d'affaires{% endblock %}*/
/* */
/* {% block sousMessageAccueil %}{{ filename }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id='tableauExcel'>*/
/* */
/*         <p> <button> Annuler </button> <button onclick="exctractionTableau();"> Sauvegarder </button> </p>*/
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
