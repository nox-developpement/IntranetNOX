<?php

/* NoxIntranetAccueilBundle:EditionAnnonces:editionAnnonces.html.twig */
class __TwigTemplate_d94ecf5df1591e647ff171bffc4a5278ae83b5a3628376b9bed15feb6f0e42f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAccueilBundle:EditionAnnonces:editionAnnonces.html.twig", 1);
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
        $__internal_7c529013f5bd27c4f7dc119e666434ba8df73422b46b6861f306a25dddd55c5b = $this->env->getExtension("native_profiler");
        $__internal_7c529013f5bd27c4f7dc119e666434ba8df73422b46b6861f306a25dddd55c5b->enter($__internal_7c529013f5bd27c4f7dc119e666434ba8df73422b46b6861f306a25dddd55c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAccueilBundle:EditionAnnonces:editionAnnonces.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c529013f5bd27c4f7dc119e666434ba8df73422b46b6861f306a25dddd55c5b->leave($__internal_7c529013f5bd27c4f7dc119e666434ba8df73422b46b6861f306a25dddd55c5b_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_030fe5b3ea0d68bfc8d2baa9ca54a151fc9555b9d461a0dc76e5aa30846e67a7 = $this->env->getExtension("native_profiler");
        $__internal_030fe5b3ea0d68bfc8d2baa9ca54a151fc9555b9d461a0dc76e5aa30846e67a7->enter($__internal_030fe5b3ea0d68bfc8d2baa9ca54a151fc9555b9d461a0dc76e5aa30846e67a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Edition annonces ";
        echo twig_escape_filter($this->env, (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "html", null, true);
        echo " ";
        
        $__internal_030fe5b3ea0d68bfc8d2baa9ca54a151fc9555b9d461a0dc76e5aa30846e67a7->leave($__internal_030fe5b3ea0d68bfc8d2baa9ca54a151fc9555b9d461a0dc76e5aa30846e67a7_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_cbf107636def3e0be1ac7258ad5a40fd86688d3b216b0dfdd4fc771f7fb31dae = $this->env->getExtension("native_profiler");
        $__internal_cbf107636def3e0be1ac7258ad5a40fd86688d3b216b0dfdd4fc771f7fb31dae->enter($__internal_cbf107636def3e0be1ac7258ad5a40fd86688d3b216b0dfdd4fc771f7fb31dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Edition annonces ";
        echo twig_escape_filter($this->env, (isset($context["categorie"]) ? $context["categorie"] : $this->getContext($context, "categorie")), "html", null, true);
        
        $__internal_cbf107636def3e0be1ac7258ad5a40fd86688d3b216b0dfdd4fc771f7fb31dae->leave($__internal_cbf107636def3e0be1ac7258ad5a40fd86688d3b216b0dfdd4fc771f7fb31dae_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5d44a5259005655ef455034a3877b7608490844836b09e9a97d6ad2d7a9f30af = $this->env->getExtension("native_profiler");
        $__internal_5d44a5259005655ef455034a3877b7608490844836b09e9a97d6ad2d7a9f30af->enter($__internal_5d44a5259005655ef455034a3877b7608490844836b09e9a97d6ad2d7a9f30af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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

            <legend><p>Supprimer annonce</p></legend>

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

            <legend><p>Ajouter annonce</p></legend>

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
        
        $__internal_5d44a5259005655ef455034a3877b7608490844836b09e9a97d6ad2d7a9f30af->leave($__internal_5d44a5259005655ef455034a3877b7608490844836b09e9a97d6ad2d7a9f30af_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAccueilBundle:EditionAnnonces:editionAnnonces.html.twig";
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
/*             <legend><p>Supprimer annonce</p></legend>*/
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
/*             <legend><p>Ajouter annonce</p></legend>*/
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
