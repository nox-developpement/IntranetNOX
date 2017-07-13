<?php

/* NoxIntranetRessourcesBundle:Archives:archives.html.twig */
class __TwigTemplate_d8179fb0d2a7f9210a69d644a1de0ca2cc2dfffa8d2d72ce3982052e6944b732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Archives:archives.html.twig", 1);
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
        $__internal_a51eb3b36e7db38aa881778987a8da8e1246d5e151d6ba6632fd58698548a818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a51eb3b36e7db38aa881778987a8da8e1246d5e151d6ba6632fd58698548a818->enter($__internal_a51eb3b36e7db38aa881778987a8da8e1246d5e151d6ba6632fd58698548a818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Archives:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a51eb3b36e7db38aa881778987a8da8e1246d5e151d6ba6632fd58698548a818->leave($__internal_a51eb3b36e7db38aa881778987a8da8e1246d5e151d6ba6632fd58698548a818_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_82c1168e747b8d5e4fb08bf5fa664abec73e8b3a4f1c55b6f21b1a5262ca3cbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c1168e747b8d5e4fb08bf5fa664abec73e8b3a4f1c55b6f21b1a5262ca3cbf->enter($__internal_82c1168e747b8d5e4fb08bf5fa664abec73e8b3a4f1c55b6f21b1a5262ca3cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Archives
";
        
        $__internal_82c1168e747b8d5e4fb08bf5fa664abec73e8b3a4f1c55b6f21b1a5262ca3cbf->leave($__internal_82c1168e747b8d5e4fb08bf5fa664abec73e8b3a4f1c55b6f21b1a5262ca3cbf_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_e2a59d47374b49d7bfb119093ca9a06c4ec0b140e99c31151fab2dfde3bcc28d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2a59d47374b49d7bfb119093ca9a06c4ec0b140e99c31151fab2dfde3bcc28d->enter($__internal_e2a59d47374b49d7bfb119093ca9a06c4ec0b140e99c31151fab2dfde3bcc28d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Archives";
        
        $__internal_e2a59d47374b49d7bfb119093ca9a06c4ec0b140e99c31151fab2dfde3bcc28d->leave($__internal_e2a59d47374b49d7bfb119093ca9a06c4ec0b140e99c31151fab2dfde3bcc28d_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fbac9d72d43153098f7a125ac6edf4abe51cfb654791a8c944cdf81936cc6d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbac9d72d43153098f7a125ac6edf4abe51cfb654791a8c944cdf81936cc6d71->enter($__internal_fbac9d72d43153098f7a125ac6edf4abe51cfb654791a8c944cdf81936cc6d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "    
        <div class='zoneEdition'>

            ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "            
            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>
            
            ";
        }
        // line 18
        echo "   
            ";
        // line 19
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "

            ";
        // line 24
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
        echo "

            ";
        // line 27
        echo "            ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

            ";
        // line 29
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

        </div>

        <div class='zoneTexte'>
            ";
        // line 34
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
        </div>
        
";
        
        $__internal_fbac9d72d43153098f7a125ac6edf4abe51cfb654791a8c944cdf81936cc6d71->leave($__internal_fbac9d72d43153098f7a125ac6edf4abe51cfb654791a8c944cdf81936cc6d71_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Archives:archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  106 => 29,  100 => 27,  94 => 24,  89 => 21,  84 => 19,  81 => 18,  75 => 14,  73 => 13,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block titrePage %}
    Archives
{% endblock %}

{% block messageAccueil %}Archives{% endblock %}

{% block contenu %}
    
        <div class='zoneEdition'>

            {% if is_granted('ROLE_ADMIN') %}
            
            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>
            
            {% endif %}
   
            {{ form_start(formulaire, {'attr': {'id': 'formulaireTexte' }}) }}

            {{ form_errors(formulaire) }}

            {# Affichage des erreurs pour ce champ précis. #}
            {{ form_errors(formulaire.text) }}

            {# Génération de l'input. #}
            {{ form_widget(formulaire.text, {'attr': {'class': 'textField' }}) }}

            {{ form_end(formulaire) }}

        </div>

        <div class='zoneTexte'>
            {{ texte|raw }}
        </div>
        
{% endblock %}
{# empty Twig template #}
", "NoxIntranetRessourcesBundle:Archives:archives.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle/Resources/views/Archives/archives.html.twig");
    }
}
