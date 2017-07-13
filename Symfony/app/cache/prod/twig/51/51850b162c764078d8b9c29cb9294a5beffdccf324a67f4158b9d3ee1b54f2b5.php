<?php

/* NoxIntranetPointageBundle:Pointage:compilationNOXIPCSV.html.twig */
class __TwigTemplate_93d7089748fa59d68a30086a562114ade379c2ff5cdc76a745d9bc3dffb28f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NoxIntranetPointageBundle:Pointage:compilationNOXIPCSV.html.twig", 1);
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
        echo " Compilation pointage NOX IP ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Compilation pointage NOX IP";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <style>
        #formCompilationNOXIP {
            width: 70%;
            margin: auto;
            text-align: center;
        }

        #formCompilationNOXIP form {
            display: inline-block;
            width: auto;
            border: 2px outset #1F4E79;
            background-color: rgba(255,255,255, 0.6);
        }

        #formCompilationNOXIP p {
            text-align: center;
        }
    </style>

    <div id=\"formCompilationNOXIP\">
        ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCompilationDate"]) ? $context["formCompilationDate"] : null), 'form_start');
        echo "
        <p>
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompilationDate"]) ? $context["formCompilationDate"] : null), "date", array()), 'label');
        echo " : 
            ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formCompilationDate"]) ? $context["formCompilationDate"] : null), "children", array()), "date", array(), "array"), "children", array()), "month", array(), "array"), 'widget');
        echo "
            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formCompilationDate"]) ? $context["formCompilationDate"] : null), "children", array()), "date", array(), "array"), "children", array()), "year", array(), "array"), 'widget');
        echo "
        </p>
        <p>
            ";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompilationDate"]) ? $context["formCompilationDate"] : null), "download_variables_affaires", array()), 'widget');
        echo "
            ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCompilationDate"]) ? $context["formCompilationDate"] : null), "download_variables_paie", array()), 'widget');
        echo "
        </p>
        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formCompilationDate"]) ? $context["formCompilationDate"] : null), "children", array()), "date", array(), "array"), "children", array()), "day", array(), "array"), 'widget', array("attr" => array("style" => "display: none")));
        echo "
        ";
        // line 40
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCompilationDate"]) ? $context["formCompilationDate"] : null), 'form_end');
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetPointageBundle:Pointage:compilationNOXIPCSV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 40,  96 => 39,  91 => 37,  87 => 36,  81 => 33,  77 => 32,  73 => 31,  68 => 29,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetPointageBundle:Pointage:compilationNOXIPCSV.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle/Resources/views/Pointage/compilationNOXIPCSV.html.twig");
    }
}
