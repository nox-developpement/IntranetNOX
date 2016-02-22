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
        $__internal_a6a9a57fd0c3ad5f8577a5b83e64ec74e3de6c5511324cd9c9957c58f722f933 = $this->env->getExtension("native_profiler");
        $__internal_a6a9a57fd0c3ad5f8577a5b83e64ec74e3de6c5511324cd9c9957c58f722f933->enter($__internal_a6a9a57fd0c3ad5f8577a5b83e64ec74e3de6c5511324cd9c9957c58f722f933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationAffaires:administrationaffairesedition.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6a9a57fd0c3ad5f8577a5b83e64ec74e3de6c5511324cd9c9957c58f722f933->leave($__internal_a6a9a57fd0c3ad5f8577a5b83e64ec74e3de6c5511324cd9c9957c58f722f933_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_fd15df3582b3e9d69c6b50535fa72d23ccf32d111654c543f2990ef4e517e004 = $this->env->getExtension("native_profiler");
        $__internal_fd15df3582b3e9d69c6b50535fa72d23ccf32d111654c543f2990ef4e517e004->enter($__internal_fd15df3582b3e9d69c6b50535fa72d23ccf32d111654c543f2990ef4e517e004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition ";
        
        $__internal_fd15df3582b3e9d69c6b50535fa72d23ccf32d111654c543f2990ef4e517e004->leave($__internal_fd15df3582b3e9d69c6b50535fa72d23ccf32d111654c543f2990ef4e517e004_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_2fd36e562aca9e894e4fb68fb9920923d527eed2716b215d058689abb5b21572 = $this->env->getExtension("native_profiler");
        $__internal_2fd36e562aca9e894e4fb68fb9920923d527eed2716b215d058689abb5b21572->enter($__internal_2fd36e562aca9e894e4fb68fb9920923d527eed2716b215d058689abb5b21572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration assistant d'affaires";
        
        $__internal_2fd36e562aca9e894e4fb68fb9920923d527eed2716b215d058689abb5b21572->leave($__internal_2fd36e562aca9e894e4fb68fb9920923d527eed2716b215d058689abb5b21572_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_449a49f1eaaf01d2816221f59c68000bc56d1d56fa8ee5a5ed188cbf3256de21 = $this->env->getExtension("native_profiler");
        $__internal_449a49f1eaaf01d2816221f59c68000bc56d1d56fa8ee5a5ed188cbf3256de21->enter($__internal_449a49f1eaaf01d2816221f59c68000bc56d1d56fa8ee5a5ed188cbf3256de21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_affaires_edition_sauvegarde", array("filename" => (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")))), "html", null, true);
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
        
        $__internal_449a49f1eaaf01d2816221f59c68000bc56d1d56fa8ee5a5ed188cbf3256de21->leave($__internal_449a49f1eaaf01d2816221f59c68000bc56d1d56fa8ee5a5ed188cbf3256de21_prof);

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
/*                     window.location.href = '{{ path('nox_intranet_administration_affaires_edition_sauvegarde', { 'filename': file }) }}';"> Sauvegarder </button> </p>*/
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
