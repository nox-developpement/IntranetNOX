<?php

/* @NoxIntranetRessources/PrestationsInternes/newprestationsinternessearch.html.twig */
class __TwigTemplate_a3277c1ec632ec71b064ff34b51ab065b71dadcac86567317c9af1cb8f0838ec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/PrestationsInternes/newprestationsinternessearch.html.twig", 1);
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
        echo " Nouvelle demande de prestation interne ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Nouvelle demande de prestation interne";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        echo " 

    <div style='width: 70%; margin: auto;'>

        ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), 'form_start', array("attr" => array("style" => "text-align: center; background-color: rgba(255,255,255, 0.6);")));
        echo "

        <table>
            <tr>
                <th>";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "Libelle", array()), 'label', array("label" => "Libellé"));
        echo "</th>
                <td>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "Libelle", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "LieuOperation", array()), 'label', array("label" => "Lieu de l'opération"));
        echo "</th>
                <td>";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "LieuOperation", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "LieuPrestation", array()), 'label', array("label" => "Lieu de la prestation"));
        echo "</th>
                <td>";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "LieuPrestation", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "Descriptif", array()), 'label', array("attr" => array("style" => "vertical-align: top;"), "label" => "Descriptif de la prestation"));
        echo "</th>
                <td><div id='DescriptifPrestation' class='textarea' contenteditable='true' placeholder='Ajoutez un descriptif pour la prestation.'>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "Descriptif", array()), "vars", array()), "value", array()), "html", null, true);
        echo "</div></td>
            </tr>

            <tr>
                <th>";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "Deplacement", array()), 'label', array("label" => "Déplacement à prévoir"));
        echo "</th>
                <td>";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "Deplacement", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "DateDemarrage", array()), 'label', array("label" => "Date de démarrage de la prestation"));
        echo "</th>
                <td>";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "DateDemarrage", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "DateRendu", array()), 'label', array("label" => "Date de rendu"));
        echo "</th>
                <td>";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "DateRendu", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "Livrables", array()), 'label', array("label" => "Livrables attendus"));
        echo "</th>
                <td><div id='LivrablesAttendus' class='textarea' contenteditable='true' placeholder='Ajoutez les livrables attendus.'>";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "Livrables", array()), "vars", array()), "value", array()), "html", null, true);
        echo "</div></td>
            </tr>

            <tr>
                <th>";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "VolumeSousTraitance", array()), 'label', array("label" => "Volume de sous traitance envisagé (€)"));
        echo "</th>
                <td>";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "VolumeSousTraitance", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "EmailDA", array()), 'label', array("label" => "Email du DA émetteur"));
        echo "</th>
                <td>";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "EmailDA", array()), 'widget');
        echo "</td>
            </tr>

        </table>

        ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), "Valider", array()), 'widget', array("attr" => array("class" => "boutonFormulaire", "style" => "margin-top: 1%; padding: 2%;")));
        echo "

        ";
        // line 68
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formNewSearch"]) ? $context["formNewSearch"] : null), 'form_end');
        echo "

    </div>

    <script>
        \$(window).load(function () {
            \$(\"form[name='formNewSearch']\").submit(function () {
                \$('#formNewSearch_Descriptif').val(\$('#DescriptifPrestation').text());
                \$('#formNewSearch_Livrables').val(\$('#LivrablesAttendus').text());
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/PrestationsInternes/newprestationsinternessearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 68,  168 => 66,  160 => 61,  156 => 60,  149 => 56,  145 => 55,  138 => 51,  134 => 50,  127 => 46,  123 => 45,  116 => 41,  112 => 40,  105 => 36,  101 => 35,  94 => 31,  90 => 30,  83 => 26,  79 => 25,  72 => 21,  68 => 20,  61 => 16,  57 => 15,  50 => 11,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetRessources/PrestationsInternes/newprestationsinternessearch.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle\\Resources\\views\\PrestationsInternes\\newprestationsinternessearch.html.twig");
    }
}
