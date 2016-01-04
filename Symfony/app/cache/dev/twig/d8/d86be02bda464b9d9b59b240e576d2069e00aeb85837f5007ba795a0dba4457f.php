<?php

/* NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig */
class __TwigTemplate_8a0059292fa26edbd25cdf1c62444c823bb1e416027be5648e304670e621ee77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig", 1);
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
        $__internal_bfbbc804c9d72af9fe13cdd679301fdf670dd350a33a1811eed36be4b6f85993 = $this->env->getExtension("native_profiler");
        $__internal_bfbbc804c9d72af9fe13cdd679301fdf670dd350a33a1811eed36be4b6f85993->enter($__internal_bfbbc804c9d72af9fe13cdd679301fdf670dd350a33a1811eed36be4b6f85993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bfbbc804c9d72af9fe13cdd679301fdf670dd350a33a1811eed36be4b6f85993->leave($__internal_bfbbc804c9d72af9fe13cdd679301fdf670dd350a33a1811eed36be4b6f85993_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_fa4972f44bf74452c844c425375320b06ce6995d8264f20b4d0453cce2c9c16c = $this->env->getExtension("native_profiler");
        $__internal_fa4972f44bf74452c844c425375320b06ce6995d8264f20b4d0453cce2c9c16c->enter($__internal_fa4972f44bf74452c844c425375320b06ce6995d8264f20b4d0453cce2c9c16c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Avancement projet
";
        
        $__internal_fa4972f44bf74452c844c425375320b06ce6995d8264f20b4d0453cce2c9c16c->leave($__internal_fa4972f44bf74452c844c425375320b06ce6995d8264f20b4d0453cce2c9c16c_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_389ea1cd2cec1ec43832d83fe56083c3702c67600b7ca819f986f67004dcaea5 = $this->env->getExtension("native_profiler");
        $__internal_389ea1cd2cec1ec43832d83fe56083c3702c67600b7ca819f986f67004dcaea5->enter($__internal_389ea1cd2cec1ec43832d83fe56083c3702c67600b7ca819f986f67004dcaea5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Avancement projet";
        
        $__internal_389ea1cd2cec1ec43832d83fe56083c3702c67600b7ca819f986f67004dcaea5->leave($__internal_389ea1cd2cec1ec43832d83fe56083c3702c67600b7ca819f986f67004dcaea5_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_5110ad64df230dec10cc31547054b5d71d7549eeab5ccff619e795f19c6de51b = $this->env->getExtension("native_profiler");
        $__internal_5110ad64df230dec10cc31547054b5d71d7549eeab5ccff619e795f19c6de51b->enter($__internal_5110ad64df230dec10cc31547054b5d71d7549eeab5ccff619e795f19c6de51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class='zoneEdition'>
        
        <button id='texteEditButton' class='boutonFormulaire'>Editer</button>
        
        ";
        // line 15
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "

        ";
        // line 20
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
        echo "

        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

    </div>

    <div class='zoneTexte'>
        ";
        // line 30
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
    </di>

";
        
        $__internal_5110ad64df230dec10cc31547054b5d71d7549eeab5ccff619e795f19c6de51b->leave($__internal_5110ad64df230dec10cc31547054b5d71d7549eeab5ccff619e795f19c6de51b_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 30,  97 => 25,  91 => 23,  85 => 20,  80 => 17,  75 => 15,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Avancement projet*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Avancement projet{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class='zoneEdition'>*/
/*         */
/*         <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/*         */
/*         {{ form_start(formulaire, {'attr': {'id': 'formulaireTexte' }}) }}*/
/* */
/*         {{ form_errors(formulaire) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.text) }}*/
/* */
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(formulaire.text, {'attr': {'class': 'textField' }}) }}*/
/* */
/*         {{ form_end(formulaire) }}*/
/* */
/*     </div>*/
/* */
/*     <div class='zoneTexte'>*/
/*         {{ texte|raw }}*/
/*     </di>*/
/* */
/* {% endblock %}*/
/* */
