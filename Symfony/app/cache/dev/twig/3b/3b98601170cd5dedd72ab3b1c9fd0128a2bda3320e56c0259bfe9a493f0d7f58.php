<?php

/* NoxIntranetRessourcesBundle:Procedures:procedures.html.twig */
class __TwigTemplate_e06e63590360e26aec10b07930bdf979b1384b24cb709b2bd1df6e6b62aaf559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig", 1);
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
        $__internal_bf53ccd36eb3b8f753d9a59d8bdfe5ab555410faddb3de848a58e2a4b83e7f42 = $this->env->getExtension("native_profiler");
        $__internal_bf53ccd36eb3b8f753d9a59d8bdfe5ab555410faddb3de848a58e2a4b83e7f42->enter($__internal_bf53ccd36eb3b8f753d9a59d8bdfe5ab555410faddb3de848a58e2a4b83e7f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf53ccd36eb3b8f753d9a59d8bdfe5ab555410faddb3de848a58e2a4b83e7f42->leave($__internal_bf53ccd36eb3b8f753d9a59d8bdfe5ab555410faddb3de848a58e2a4b83e7f42_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_2475b7f0d126eac277d976ea49a070b77f82f7fa388e8642ec2a38bb17bbc6b8 = $this->env->getExtension("native_profiler");
        $__internal_2475b7f0d126eac277d976ea49a070b77f82f7fa388e8642ec2a38bb17bbc6b8->enter($__internal_2475b7f0d126eac277d976ea49a070b77f82f7fa388e8642ec2a38bb17bbc6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Procédures
";
        
        $__internal_2475b7f0d126eac277d976ea49a070b77f82f7fa388e8642ec2a38bb17bbc6b8->leave($__internal_2475b7f0d126eac277d976ea49a070b77f82f7fa388e8642ec2a38bb17bbc6b8_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_a3ba0ee35a8bff1d7c0d05695a503041a73f0716e1d8a1d19f747eb2a68ba85c = $this->env->getExtension("native_profiler");
        $__internal_a3ba0ee35a8bff1d7c0d05695a503041a73f0716e1d8a1d19f747eb2a68ba85c->enter($__internal_a3ba0ee35a8bff1d7c0d05695a503041a73f0716e1d8a1d19f747eb2a68ba85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Procédures";
        
        $__internal_a3ba0ee35a8bff1d7c0d05695a503041a73f0716e1d8a1d19f747eb2a68ba85c->leave($__internal_a3ba0ee35a8bff1d7c0d05695a503041a73f0716e1d8a1d19f747eb2a68ba85c_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_d7a03f0c3a554a9861f3cfef5d55b875f84fc3e654ae69f2af4efd881fbd6077 = $this->env->getExtension("native_profiler");
        $__internal_d7a03f0c3a554a9861f3cfef5d55b875f84fc3e654ae69f2af4efd881fbd6077->enter($__internal_d7a03f0c3a554a9861f3cfef5d55b875f84fc3e654ae69f2af4efd881fbd6077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    

";
        
        $__internal_d7a03f0c3a554a9861f3cfef5d55b875f84fc3e654ae69f2af4efd881fbd6077->leave($__internal_d7a03f0c3a554a9861f3cfef5d55b875f84fc3e654ae69f2af4efd881fbd6077_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Procedures:procedures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Procédures*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Procédures{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     */
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
/* */
