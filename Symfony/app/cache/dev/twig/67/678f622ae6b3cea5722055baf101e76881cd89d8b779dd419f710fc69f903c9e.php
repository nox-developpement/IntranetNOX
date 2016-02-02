<?php

/* NoxIntranetAdministrationBundle:AdministrationNews:testpdf.html.twig */
class __TwigTemplate_c8459034e37629d50150b76fdcc0d0163f15a5d48ee63cf29a17c49cfaa86eea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationNews:testpdf.html.twig", 1);
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
        $__internal_471896788d6e9e7a57ec2a5977d21bc3775fe0a22bc875434a86d34eb2c2df52 = $this->env->getExtension("native_profiler");
        $__internal_471896788d6e9e7a57ec2a5977d21bc3775fe0a22bc875434a86d34eb2c2df52->enter($__internal_471896788d6e9e7a57ec2a5977d21bc3775fe0a22bc875434a86d34eb2c2df52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:testpdf.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_471896788d6e9e7a57ec2a5977d21bc3775fe0a22bc875434a86d34eb2c2df52->leave($__internal_471896788d6e9e7a57ec2a5977d21bc3775fe0a22bc875434a86d34eb2c2df52_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_3bbc8710cf021d0b20735cbb5a3e0ac5baacbe9774a0843a51193fbb530bceeb = $this->env->getExtension("native_profiler");
        $__internal_3bbc8710cf021d0b20735cbb5a3e0ac5baacbe9774a0843a51193fbb530bceeb->enter($__internal_3bbc8710cf021d0b20735cbb5a3e0ac5baacbe9774a0843a51193fbb530bceeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Pdf
";
        
        $__internal_3bbc8710cf021d0b20735cbb5a3e0ac5baacbe9774a0843a51193fbb530bceeb->leave($__internal_3bbc8710cf021d0b20735cbb5a3e0ac5baacbe9774a0843a51193fbb530bceeb_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_6c211a8b252f10e8576fd0afa24a0a4762d992a60e648e7d37abeec9485ec761 = $this->env->getExtension("native_profiler");
        $__internal_6c211a8b252f10e8576fd0afa24a0a4762d992a60e648e7d37abeec9485ec761->enter($__internal_6c211a8b252f10e8576fd0afa24a0a4762d992a60e648e7d37abeec9485ec761_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_6c211a8b252f10e8576fd0afa24a0a4762d992a60e648e7d37abeec9485ec761->leave($__internal_6c211a8b252f10e8576fd0afa24a0a4762d992a60e648e7d37abeec9485ec761_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationNews:testpdf.html.twig";
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
