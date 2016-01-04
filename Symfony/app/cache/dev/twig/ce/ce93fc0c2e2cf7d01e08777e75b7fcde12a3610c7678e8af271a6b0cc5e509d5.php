<?php

/* NoxIntranetMajDBBundle:Default:index.html.twig */
class __TwigTemplate_cada8f72a1e303862072082dfb7323333b674fa650b4ceb0ad2ab49daa22baf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ed285abd967532b905a050a91517b7811f2f465fe26644468d7f99042564258c = $this->env->getExtension("native_profiler");
        $__internal_ed285abd967532b905a050a91517b7811f2f465fe26644468d7f99042564258c->enter($__internal_ed285abd967532b905a050a91517b7811f2f465fe26644468d7f99042564258c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetMajDBBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_ed285abd967532b905a050a91517b7811f2f465fe26644468d7f99042564258c->leave($__internal_ed285abd967532b905a050a91517b7811f2f465fe26644468d7f99042564258c_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetMajDBBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* Hello {{ name }}!*/
/* */
