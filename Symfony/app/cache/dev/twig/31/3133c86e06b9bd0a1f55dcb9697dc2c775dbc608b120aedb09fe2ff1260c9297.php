<?php

/* @NoxIntranetAdministration/AdministrationNews/testpdf.html.twig */
class __TwigTemplate_3616b12fa89a066c4e6b9f367be509a1be7ad4ff75a3aed9bfe7515f43f58217 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationNews/testpdf.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_316d286f05dd17b6e8d1fd995da901f22c731396528b7c9fe2daae7fabea8f7a = $this->env->getExtension("native_profiler");
        $__internal_316d286f05dd17b6e8d1fd995da901f22c731396528b7c9fe2daae7fabea8f7a->enter($__internal_316d286f05dd17b6e8d1fd995da901f22c731396528b7c9fe2daae7fabea8f7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAdministration/AdministrationNews/testpdf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_316d286f05dd17b6e8d1fd995da901f22c731396528b7c9fe2daae7fabea8f7a->leave($__internal_316d286f05dd17b6e8d1fd995da901f22c731396528b7c9fe2daae7fabea8f7a_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_e2b8d5730a9656263b50d1113522b28ca61ad5553cabd2425fde630d9899fcf0 = $this->env->getExtension("native_profiler");
        $__internal_e2b8d5730a9656263b50d1113522b28ca61ad5553cabd2425fde630d9899fcf0->enter($__internal_e2b8d5730a9656263b50d1113522b28ca61ad5553cabd2425fde630d9899fcf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Pdf
";
        
        $__internal_e2b8d5730a9656263b50d1113522b28ca61ad5553cabd2425fde630d9899fcf0->leave($__internal_e2b8d5730a9656263b50d1113522b28ca61ad5553cabd2425fde630d9899fcf0_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_b928f00f3fa8a4306527f67483716e134336715f6825b4f87f7a3eab0f7b1eba = $this->env->getExtension("native_profiler");
        $__internal_b928f00f3fa8a4306527f67483716e134336715f6825b4f87f7a3eab0f7b1eba->enter($__internal_b928f00f3fa8a4306527f67483716e134336715f6825b4f87f7a3eab0f7b1eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div>


        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["labels"]) ? $context["labels"] : $this->getContext($context, "labels")));
        foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
            // line 13
            echo "
            ";
            // line 14
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " <br />

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
    </div>

";
        
        $__internal_b928f00f3fa8a4306527f67483716e134336715f6825b4f87f7a3eab0f7b1eba->leave($__internal_b928f00f3fa8a4306527f67483716e134336715f6825b4f87f7a3eab0f7b1eba_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationNews/testpdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  68 => 14,  65 => 13,  61 => 12,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Pdf*/
/* {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div>*/
/* */
/* */
/*         {% for label in labels %}*/
/* */
/*             {{ label }} <br />*/
/* */
/*         {% endfor %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
