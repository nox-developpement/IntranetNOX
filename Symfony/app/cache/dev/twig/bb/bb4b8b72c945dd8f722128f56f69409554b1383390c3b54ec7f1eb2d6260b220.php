<?php

/* NoxIntranetAdministrationBundle:AdministrationNews:administrationSupprimerNews.html.twig */
class __TwigTemplate_617ef6e40c937f3c40785dde4bf40e615aef13bb945c54da55913d3417230ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationNews:administrationSupprimerNews.html.twig", 1);
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
        $__internal_6994da19c26cbb04c4fd861c4480ff9c0488016e90765a428f8d9644c4ff8ea0 = $this->env->getExtension("native_profiler");
        $__internal_6994da19c26cbb04c4fd861c4480ff9c0488016e90765a428f8d9644c4ff8ea0->enter($__internal_6994da19c26cbb04c4fd861c4480ff9c0488016e90765a428f8d9644c4ff8ea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationNews:administrationSupprimerNews.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6994da19c26cbb04c4fd861c4480ff9c0488016e90765a428f8d9644c4ff8ea0->leave($__internal_6994da19c26cbb04c4fd861c4480ff9c0488016e90765a428f8d9644c4ff8ea0_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_fe0eea3902ab56c3ab8154b8e08a6204e26c53e20ca36dbbeb0ed8406781d852 = $this->env->getExtension("native_profiler");
        $__internal_fe0eea3902ab56c3ab8154b8e08a6204e26c53e20ca36dbbeb0ed8406781d852->enter($__internal_fe0eea3902ab56c3ab8154b8e08a6204e26c53e20ca36dbbeb0ed8406781d852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Suppresion News
";
        
        $__internal_fe0eea3902ab56c3ab8154b8e08a6204e26c53e20ca36dbbeb0ed8406781d852->leave($__internal_fe0eea3902ab56c3ab8154b8e08a6204e26c53e20ca36dbbeb0ed8406781d852_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_86fd140c4865ac1a9aebb100b6a0658ace6c20d83d5aeecb9d2f3714f6583d7d = $this->env->getExtension("native_profiler");
        $__internal_86fd140c4865ac1a9aebb100b6a0658ace6c20d83d5aeecb9d2f3714f6583d7d->enter($__internal_86fd140c4865ac1a9aebb100b6a0658ace6c20d83d5aeecb9d2f3714f6583d7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "

    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "        <p class=\"flashbag\"> 
            ";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo " 


    <div id=\"divFormulaireNews\" >

        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireSuppressionNews")));
        echo "

        <h2> Supprimer une news </h2>

        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo " 

        <div>
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "news", array()), 'label', array("label_attr" => array("class" => "label"), "label" => "News : "));
        echo "

            ";
        // line 29
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "news", array()), 'errors');
        echo "

            ";
        // line 32
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "news", array()), 'widget', array("attr" => array("class" => "combobox")));
        echo "

        </div>

        <p id=\"submitFormulaireSuppressionNews\">

            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "supprimer", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "

            ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

        </p>

    </div>

";
        
        $__internal_86fd140c4865ac1a9aebb100b6a0658ace6c20d83d5aeecb9d2f3714f6583d7d->leave($__internal_86fd140c4865ac1a9aebb100b6a0658ace6c20d83d5aeecb9d2f3714f6583d7d_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationNews:administrationSupprimerNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 40,  116 => 38,  106 => 32,  100 => 29,  95 => 26,  89 => 23,  82 => 19,  75 => 14,  66 => 12,  63 => 11,  59 => 10,  55 => 8,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Suppresion News*/
/* {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/* */
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <p class="flashbag"> */
/*             {{ flashMessage }}*/
/*         </p>*/
/*     {% endfor %} */
/* */
/* */
/*     <div id="divFormulaireNews" >*/
/* */
/*         {{ form_start(formulaire, {'attr': {'id': 'formulaireSuppressionNews'}}) }}*/
/* */
/*         <h2> Supprimer une news </h2>*/
/* */
/*         {{ form_errors(formulaire) }} */
/* */
/*         <div>*/
/*             {{ form_label(formulaire.news, "News : ", {'label_attr': {'class': 'label'}}) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(formulaire.news) }}*/
/* */
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.news, {'attr': {'class': 'combobox'}}) }}*/
/* */
/*         </div>*/
/* */
/*         <p id="submitFormulaireSuppressionNews">*/
/* */
/*             {{ form_widget(formulaire.supprimer, {'attr': {'class': 'boutonFormulaire'}}) }}*/
/* */
/*             {{ form_end(formulaire) }}*/
/* */
/*         </p>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
