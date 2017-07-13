<?php

/* @NoxIntranetPointage/Pointage/compilationModulation.html.twig */
class __TwigTemplate_ccf514936f7fd2c72c0341ceaced3c785ea85137671014d7bf79c06738d341ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "@NoxIntranetPointage/Pointage/compilationModulation.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Compilation des modulations ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Compilation des modulations";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <style>
        #formCompilationModulation {
            width: 70%;
            margin: auto;
            text-align: center;
        }

        #formCompilationModulation form {
            display: inline-block;
            width: auto;
            border: 2px outset #1F4E79;
            background-color: rgba(255,255,255, 0.6);
        }

        #formCompilationModulation p {
            text-align: center;
        }
    </style>

    <div id=\"formCompilationModulation\">
        ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formGenerationCompilation"]) ? $context["formGenerationCompilation"] : null), 'form_start');
        echo "
        <p>
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formGenerationCompilation"]) ? $context["formGenerationCompilation"] : null), "Year", array()), 'label');
        echo " : 
            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formGenerationCompilation"]) ? $context["formGenerationCompilation"] : null), "children", array()), "Year", array(), "array"), "children", array()), "year", array(), "array"), 'widget');
        echo "
        </p>
        <p>
            ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formGenerationCompilation"]) ? $context["formGenerationCompilation"] : null), "Download", array()), 'widget');
        echo "
        </p>
        ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formGenerationCompilation"]) ? $context["formGenerationCompilation"] : null), "children", array()), "Year", array(), "array"), "children", array()), "day", array(), "array"), 'widget', array("attr" => array("style" => "display: none")));
        echo "
        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formGenerationCompilation"]) ? $context["formGenerationCompilation"] : null), "children", array()), "Year", array(), "array"), "children", array()), "month", array(), "array"), 'widget', array("attr" => array("style" => "display: none")));
        echo "
        ";
        // line 39
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formGenerationCompilation"]) ? $context["formGenerationCompilation"] : null), 'form_end');
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetPointage/Pointage/compilationModulation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 39,  92 => 38,  88 => 37,  83 => 35,  77 => 32,  73 => 31,  68 => 29,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetPointage/Pointage/compilationModulation.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle\\Resources\\views\\Pointage\\compilationModulation.html.twig");
    }
}
