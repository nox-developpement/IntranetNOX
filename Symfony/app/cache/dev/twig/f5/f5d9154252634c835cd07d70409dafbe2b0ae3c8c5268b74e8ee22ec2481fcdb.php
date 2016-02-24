<?php

/* ::base.html.twig */
class __TwigTemplate_0c1529f478f93e6b526bdf7d573f5e5976af089e75bc2cb28579fc1901cbce55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e7cfe06242f60e30665398344d0f8ace96578734482f321511c67ceeddb879ec = $this->env->getExtension("native_profiler");
        $__internal_e7cfe06242f60e30665398344d0f8ace96578734482f321511c67ceeddb879ec->enter($__internal_e7cfe06242f60e30665398344d0f8ace96578734482f321511c67ceeddb879ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_e7cfe06242f60e30665398344d0f8ace96578734482f321511c67ceeddb879ec->leave($__internal_e7cfe06242f60e30665398344d0f8ace96578734482f321511c67ceeddb879ec_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0e47db936b142f7b42344a2c1215f225cfdf2ba839d29d5cd08d7648fe8ec3c = $this->env->getExtension("native_profiler");
        $__internal_f0e47db936b142f7b42344a2c1215f225cfdf2ba839d29d5cd08d7648fe8ec3c->enter($__internal_f0e47db936b142f7b42344a2c1215f225cfdf2ba839d29d5cd08d7648fe8ec3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f0e47db936b142f7b42344a2c1215f225cfdf2ba839d29d5cd08d7648fe8ec3c->leave($__internal_f0e47db936b142f7b42344a2c1215f225cfdf2ba839d29d5cd08d7648fe8ec3c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d7b3ba16cc8c30f0818e441435fa4dabdca00be9175f5ad64da6ce4931ebcf1d = $this->env->getExtension("native_profiler");
        $__internal_d7b3ba16cc8c30f0818e441435fa4dabdca00be9175f5ad64da6ce4931ebcf1d->enter($__internal_d7b3ba16cc8c30f0818e441435fa4dabdca00be9175f5ad64da6ce4931ebcf1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d7b3ba16cc8c30f0818e441435fa4dabdca00be9175f5ad64da6ce4931ebcf1d->leave($__internal_d7b3ba16cc8c30f0818e441435fa4dabdca00be9175f5ad64da6ce4931ebcf1d_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_14dd251e9281ba701cfdf447e40253b63c8e517ac1681598209522ed49aec668 = $this->env->getExtension("native_profiler");
        $__internal_14dd251e9281ba701cfdf447e40253b63c8e517ac1681598209522ed49aec668->enter($__internal_14dd251e9281ba701cfdf447e40253b63c8e517ac1681598209522ed49aec668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_14dd251e9281ba701cfdf447e40253b63c8e517ac1681598209522ed49aec668->leave($__internal_14dd251e9281ba701cfdf447e40253b63c8e517ac1681598209522ed49aec668_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4c3af3158498d90bb3a47dee608bbf6774e28fb398d975d93bfd7f11bf112297 = $this->env->getExtension("native_profiler");
        $__internal_4c3af3158498d90bb3a47dee608bbf6774e28fb398d975d93bfd7f11bf112297->enter($__internal_4c3af3158498d90bb3a47dee608bbf6774e28fb398d975d93bfd7f11bf112297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4c3af3158498d90bb3a47dee608bbf6774e28fb398d975d93bfd7f11bf112297->leave($__internal_4c3af3158498d90bb3a47dee608bbf6774e28fb398d975d93bfd7f11bf112297_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
