<?php

/* @NoxIntranetAccueil/EditionAnnonces/editionAnnonces.html.twig */
class __TwigTemplate_b999113dd145b0a276b5618c78f07609d40d55a5c3c1ed8aaaaf3fd239a34ce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAccueil/EditionAnnonces/editionAnnonces.html.twig", 1);
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
        $__internal_9ac029e2f892f24e8ccff06609c3f4c7ad9c43b1ffd172faaa62c5450b42e289 = $this->env->getExtension("native_profiler");
        $__internal_9ac029e2f892f24e8ccff06609c3f4c7ad9c43b1ffd172faaa62c5450b42e289->enter($__internal_9ac029e2f892f24e8ccff06609c3f4c7ad9c43b1ffd172faaa62c5450b42e289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetAccueil/EditionAnnonces/editionAnnonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ac029e2f892f24e8ccff06609c3f4c7ad9c43b1ffd172faaa62c5450b42e289->leave($__internal_9ac029e2f892f24e8ccff06609c3f4c7ad9c43b1ffd172faaa62c5450b42e289_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_0144cb8ff66305313bf734b78676a2bc8a46f4f5c81fff91e6d27d5195c68bde = $this->env->getExtension("native_profiler");
        $__internal_0144cb8ff66305313bf734b78676a2bc8a46f4f5c81fff91e6d27d5195c68bde->enter($__internal_0144cb8ff66305313bf734b78676a2bc8a46f4f5c81fff91e6d27d5195c68bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition annonces ";
        echo twig_escape_filter($this->env, (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "html", null, true);
        echo " ";
        
        $__internal_0144cb8ff66305313bf734b78676a2bc8a46f4f5c81fff91e6d27d5195c68bde->leave($__internal_0144cb8ff66305313bf734b78676a2bc8a46f4f5c81fff91e6d27d5195c68bde_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_d465b962dc3e3fc06ca17b444f5f939cd6fab89ae23d857dc3c294a736b5ba0a = $this->env->getExtension("native_profiler");
        $__internal_d465b962dc3e3fc06ca17b444f5f939cd6fab89ae23d857dc3c294a736b5ba0a->enter($__internal_d465b962dc3e3fc06ca17b444f5f939cd6fab89ae23d857dc3c294a736b5ba0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Edition annonces ";
        echo twig_escape_filter($this->env, (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "html", null, true);
        
        $__internal_d465b962dc3e3fc06ca17b444f5f939cd6fab89ae23d857dc3c294a736b5ba0a->leave($__internal_d465b962dc3e3fc06ca17b444f5f939cd6fab89ae23d857dc3c294a736b5ba0a_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_f205750fd4c4481eba3b9f3ce6cfc519017cad9c2c41d74d8da3788e34ee34db = $this->env->getExtension("native_profiler");
        $__internal_f205750fd4c4481eba3b9f3ce6cfc519017cad9c2c41d74d8da3788e34ee34db->enter($__internal_f205750fd4c4481eba3b9f3ce6cfc519017cad9c2c41d74d8da3788e34ee34db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id='DivFormulaireSuppresionAnnonce'>
        ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : $this->getContext($context, "formSuppressionAnnonce")), 'form_start', array("attr" => array("class" => "formulaireSuppressionAnnonce")));
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : $this->getContext($context, "formSuppressionAnnonce")), 'errors');
        echo "

        <fieldset>

            <legend>Supprimer annonce</legend>

            ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : $this->getContext($context, "formSuppressionAnnonce")), "Message", array()), 'errors');
        echo "
            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : $this->getContext($context, "formSuppressionAnnonce")), "Message", array()), 'widget', array("attr" => array("class" => "selectFormulaireSuppressionAnnonce", "size" => 15)));
        echo "

            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : $this->getContext($context, "formSuppressionAnnonce")), "_token", array()), 'widget');
        echo "

            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : $this->getContext($context, "formSuppressionAnnonce")), "Supprimer", array()), 'widget', array("attr" => array("class" => "boutonAnnonce")));
        echo "

        </fieldset>

        ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formSuppressionAnnonce"]) ? $context["formSuppressionAnnonce"] : $this->getContext($context, "formSuppressionAnnonce")), 'form_end');
        echo "

    </div>

    <div id='DivFormulaireAjoutAnnonce'>
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : $this->getContext($context, "formAjoutAnnonce")), 'form_start', array("attr" => array("class" => "formulaireAjoutAnnonce")));
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : $this->getContext($context, "formAjoutAnnonce")), 'errors');
        echo "

        <fieldset>

            <legend>Ajouter annonce</legend>

            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : $this->getContext($context, "formAjoutAnnonce")), "Message", array()), 'errors');
        echo "
            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : $this->getContext($context, "formAjoutAnnonce")), "Message", array()), 'widget', array("attr" => array("class" => "textFormulaireAjoutAnnonce", "width" => "98%")));
        echo "

            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : $this->getContext($context, "formAjoutAnnonce")), "_token", array()), 'widget');
        echo "

            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : $this->getContext($context, "formAjoutAnnonce")), "Ajouter", array()), 'widget', array("attr" => array("class" => "boutonAnnonce")));
        echo "

        </fieldset>

        ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formAjoutAnnonce"]) ? $context["formAjoutAnnonce"] : $this->getContext($context, "formAjoutAnnonce")), 'form_end');
        echo "

    </div>

";
        
        $__internal_f205750fd4c4481eba3b9f3ce6cfc519017cad9c2c41d74d8da3788e34ee34db->leave($__internal_f205750fd4c4481eba3b9f3ce6cfc519017cad9c2c41d74d8da3788e34ee34db_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetAccueil/EditionAnnonces/editionAnnonces.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 47,  142 => 43,  137 => 41,  132 => 39,  128 => 38,  119 => 32,  115 => 31,  107 => 26,  100 => 22,  95 => 20,  90 => 18,  86 => 17,  77 => 11,  73 => 10,  69 => 8,  63 => 7,  50 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Edition annonces {{ categorie }} {% endblock %}*/
/* */
/* {% block messageAccueil %}Edition annonces {{ categorie }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id='DivFormulaireSuppresionAnnonce'>*/
/*         {{ form_start(formSuppressionAnnonce, {'attr': {'class': 'formulaireSuppressionAnnonce'}}) }}*/
/*         {{ form_errors(formSuppressionAnnonce) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Supprimer annonce</legend>*/
/* */
/*             {{ form_errors(formSuppressionAnnonce.Message) }}*/
/*             {{ form_widget(formSuppressionAnnonce.Message, {'attr': {'class': 'selectFormulaireSuppressionAnnonce', 'size': 15}}) }}*/
/* */
/*             {{ form_widget(formSuppressionAnnonce._token) }}*/
/* */
/*             {{ form_widget(formSuppressionAnnonce.Supprimer, {'attr': {'class': 'boutonAnnonce' }}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formSuppressionAnnonce) }}*/
/* */
/*     </div>*/
/* */
/*     <div id='DivFormulaireAjoutAnnonce'>*/
/*         {{ form_start(formAjoutAnnonce, {'attr': {'class': 'formulaireAjoutAnnonce'}}) }}*/
/*         {{ form_errors(formAjoutAnnonce) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Ajouter annonce</legend>*/
/* */
/*             {{ form_errors(formAjoutAnnonce.Message) }}*/
/*             {{ form_widget(formAjoutAnnonce.Message, {'attr': {'class': 'textFormulaireAjoutAnnonce', 'width': '98%'}}) }}*/
/* */
/*             {{ form_widget(formAjoutAnnonce._token) }}*/
/* */
/*             {{ form_widget(formAjoutAnnonce.Ajouter, {'attr': {'class': 'boutonAnnonce' }}) }}*/
/* */
/*         </fieldset>*/
/* */
/*         {{ form_end(formAjoutAnnonce) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
