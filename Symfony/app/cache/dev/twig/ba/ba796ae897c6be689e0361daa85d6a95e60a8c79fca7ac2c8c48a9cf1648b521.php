<?php

/* NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationchoixmodele.html.twig */
class __TwigTemplate_daec57dba6d37316f086aa56c7cdaa4e016c91266704c490539bc4dc77ca1a7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationchoixmodele.html.twig", 1);
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
        $__internal_2f3f19b9f11ad897ccc200ab587abebc0d098a958cfe5adf980f396ad7af2549 = $this->env->getExtension("native_profiler");
        $__internal_2f3f19b9f11ad897ccc200ab587abebc0d098a958cfe5adf980f396ad7af2549->enter($__internal_2f3f19b9f11ad897ccc200ab587abebc0d098a958cfe5adf980f396ad7af2549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationchoixmodele.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f3f19b9f11ad897ccc200ab587abebc0d098a958cfe5adf980f396ad7af2549->leave($__internal_2f3f19b9f11ad897ccc200ab587abebc0d098a958cfe5adf980f396ad7af2549_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_6103114de2d06329bb515f0581a2a59d677e528314dfe995f4c315fc68325eca = $this->env->getExtension("native_profiler");
        $__internal_6103114de2d06329bb515f0581a2a59d677e528314dfe995f4c315fc68325eca->enter($__internal_6103114de2d06329bb515f0581a2a59d677e528314dfe995f4c315fc68325eca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Choix du modèle ";
        
        $__internal_6103114de2d06329bb515f0581a2a59d677e528314dfe995f4c315fc68325eca->leave($__internal_6103114de2d06329bb515f0581a2a59d677e528314dfe995f4c315fc68325eca_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_785dd0bf03b5ca58fd0b3c90f9fa92450770074098f12f7c8eabdf378372affa = $this->env->getExtension("native_profiler");
        $__internal_785dd0bf03b5ca58fd0b3c90f9fa92450770074098f12f7c8eabdf378372affa->enter($__internal_785dd0bf03b5ca58fd0b3c90f9fa92450770074098f12f7c8eabdf378372affa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Choix du modèle - ";
        echo twig_escape_filter($this->env, (isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "html", null, true);
        
        $__internal_785dd0bf03b5ca58fd0b3c90f9fa92450770074098f12f7c8eabdf378372affa->leave($__internal_785dd0bf03b5ca58fd0b3c90f9fa92450770074098f12f7c8eabdf378372affa_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_9db5b1a548f778e906627791e6c2e8af92a6c6e05f00cf5fb8d200e1937d95aa = $this->env->getExtension("native_profiler");
        $__internal_9db5b1a548f778e906627791e6c2e8af92a6c6e05f00cf5fb8d200e1937d95aa->enter($__internal_9db5b1a548f778e906627791e6c2e8af92a6c6e05f00cf5fb8d200e1937d95aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"DivFormulaireChoixModele\">

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "formulaireChoixModele")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <fieldset>

            <legend>Choix du modèle - ";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["profil"]) ? $context["profil"] : $this->getContext($context, "profil")), "html", null, true);
        echo "</legend>

            ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "IdModele", array()), 'label', array("label_attr" => array("class" => "labelFormulaireChoixModele"), "label" => "Modèle du suivi :"));
        echo "
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "IdModele", array()), 'errors');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "IdModele", array()), 'widget', array("attr" => array("class" => "selectFormulaireChoixModèle")));
        echo "

            <br /> <br />

            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Choisir", array()), 'widget', array("label" => "Choisir ce modèle", "attr" => array("class" => "boutonFormulaire")));
        echo "


        </fieldset> 

        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    </div>

";
        
        $__internal_9db5b1a548f778e906627791e6c2e8af92a6c6e05f00cf5fb8d200e1937d95aa->leave($__internal_9db5b1a548f778e906627791e6c2e8af92a6c6e05f00cf5fb8d200e1937d95aa_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AssistantAffaire:assistantaffairecreationchoixmodele.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 29,  103 => 24,  96 => 20,  92 => 19,  88 => 18,  83 => 16,  76 => 12,  72 => 11,  67 => 8,  61 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Choix du modèle {% endblock %}*/
/* */
/* {% block messageAccueil %}Choix du modèle - {{ profil }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="DivFormulaireChoixModele">*/
/* */
/*         {{ form_start(form, {'attr': {'class': 'formulaireChoixModele'}}) }}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <fieldset>*/
/* */
/*             <legend>Choix du modèle - {{ profil }}</legend>*/
/* */
/*             {{ form_label(form.IdModele, "Modèle du suivi :", {'label_attr': {'class': 'labelFormulaireChoixModele'}}) }}*/
/*             {{ form_errors(form.IdModele) }}*/
/*             {{ form_widget(form.IdModele, {'attr': {'class': 'selectFormulaireChoixModèle'}}) }}*/
/* */
/*             <br /> <br />*/
/* */
/*             {{ form_widget(form.Choisir, {'label': 'Choisir ce modèle', 'attr': {'class': 'boutonFormulaire' }}) }}*/
/* */
/* */
/*         </fieldset> */
/* */
/*         {{ form_end(form) }}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
