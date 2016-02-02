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
        $__internal_a859a5f205f7d15a0bca6d2eeb258b4b527cce420c5e073fbe53cf85ab294538 = $this->env->getExtension("native_profiler");
        $__internal_a859a5f205f7d15a0bca6d2eeb258b4b527cce420c5e073fbe53cf85ab294538->enter($__internal_a859a5f205f7d15a0bca6d2eeb258b4b527cce420c5e073fbe53cf85ab294538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:avancementProjet.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a859a5f205f7d15a0bca6d2eeb258b4b527cce420c5e073fbe53cf85ab294538->leave($__internal_a859a5f205f7d15a0bca6d2eeb258b4b527cce420c5e073fbe53cf85ab294538_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_7e046fac94c74392e7335d72edb4591ee9bcdc1359635ce2c4067100c311ca31 = $this->env->getExtension("native_profiler");
        $__internal_7e046fac94c74392e7335d72edb4591ee9bcdc1359635ce2c4067100c311ca31->enter($__internal_7e046fac94c74392e7335d72edb4591ee9bcdc1359635ce2c4067100c311ca31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Avancement projet
";
        
        $__internal_7e046fac94c74392e7335d72edb4591ee9bcdc1359635ce2c4067100c311ca31->leave($__internal_7e046fac94c74392e7335d72edb4591ee9bcdc1359635ce2c4067100c311ca31_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_8f98c6001b38756d37c906f707bfe3e8a340c4da7a2bbb4fa1537e76eb69581b = $this->env->getExtension("native_profiler");
        $__internal_8f98c6001b38756d37c906f707bfe3e8a340c4da7a2bbb4fa1537e76eb69581b->enter($__internal_8f98c6001b38756d37c906f707bfe3e8a340c4da7a2bbb4fa1537e76eb69581b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Avancement projet";
        
        $__internal_8f98c6001b38756d37c906f707bfe3e8a340c4da7a2bbb4fa1537e76eb69581b->leave($__internal_8f98c6001b38756d37c906f707bfe3e8a340c4da7a2bbb4fa1537e76eb69581b_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_1cc018b408bdb1a48e24a6635ef16c6e0527af9ac78143aa7432a234ed766654 = $this->env->getExtension("native_profiler");
        $__internal_1cc018b408bdb1a48e24a6635ef16c6e0527af9ac78143aa7432a234ed766654->enter($__internal_1cc018b408bdb1a48e24a6635ef16c6e0527af9ac78143aa7432a234ed766654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_1cc018b408bdb1a48e24a6635ef16c6e0527af9ac78143aa7432a234ed766654->leave($__internal_1cc018b408bdb1a48e24a6635ef16c6e0527af9ac78143aa7432a234ed766654_prof);

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
