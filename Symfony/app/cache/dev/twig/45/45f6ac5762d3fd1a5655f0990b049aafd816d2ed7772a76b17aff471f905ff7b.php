<?php

/* NoxIntranetSupportSIBundle:Support:information.html.twig */
class __TwigTemplate_645f8754bbe03b72f28d31d05fada3d314ef29426feb50d37f1142bc0f02e29b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:information.html.twig", 1);
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
        $__internal_fa4962b48fa51d2745d7d21728b76384e85b4832f0f22c4b9b5254e8293e64bf = $this->env->getExtension("native_profiler");
        $__internal_fa4962b48fa51d2745d7d21728b76384e85b4832f0f22c4b9b5254e8293e64bf->enter($__internal_fa4962b48fa51d2745d7d21728b76384e85b4832f0f22c4b9b5254e8293e64bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:information.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa4962b48fa51d2745d7d21728b76384e85b4832f0f22c4b9b5254e8293e64bf->leave($__internal_fa4962b48fa51d2745d7d21728b76384e85b4832f0f22c4b9b5254e8293e64bf_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_2f9631a16c7b774a4f83e8ef411a9dd034101b36643db95bd2f51054e06c711f = $this->env->getExtension("native_profiler");
        $__internal_2f9631a16c7b774a4f83e8ef411a9dd034101b36643db95bd2f51054e06c711f->enter($__internal_2f9631a16c7b774a4f83e8ef411a9dd034101b36643db95bd2f51054e06c711f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Information
";
        
        $__internal_2f9631a16c7b774a4f83e8ef411a9dd034101b36643db95bd2f51054e06c711f->leave($__internal_2f9631a16c7b774a4f83e8ef411a9dd034101b36643db95bd2f51054e06c711f_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_750f994c9b99d5c165904bce351b39dced58b68a1ba48d965f559e26ebebc642 = $this->env->getExtension("native_profiler");
        $__internal_750f994c9b99d5c165904bce351b39dced58b68a1ba48d965f559e26ebebc642->enter($__internal_750f994c9b99d5c165904bce351b39dced58b68a1ba48d965f559e26ebebc642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Information";
        
        $__internal_750f994c9b99d5c165904bce351b39dced58b68a1ba48d965f559e26ebebc642->leave($__internal_750f994c9b99d5c165904bce351b39dced58b68a1ba48d965f559e26ebebc642_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_3deea487b3e887c1f7389e06f46a45738260beb1c3e0d2c639267be5f65b1e07 = $this->env->getExtension("native_profiler");
        $__internal_3deea487b3e887c1f7389e06f46a45738260beb1c3e0d2c639267be5f65b1e07->enter($__internal_3deea487b3e887c1f7389e06f46a45738260beb1c3e0d2c639267be5f65b1e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div class='zoneEdition'>
        
        ";
        // line 13
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "        
        <button id='texteEditButton' class='boutonFormulaire'>Editer</button>
        
        ";
        }
        // line 18
        echo "        
        ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "

        ";
        // line 24
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
        echo "

        ";
        // line 27
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

    </div>

    <div class='zoneTexte'>
        ";
        // line 34
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
    </di>

";
        
        $__internal_3deea487b3e887c1f7389e06f46a45738260beb1c3e0d2c639267be5f65b1e07->leave($__internal_3deea487b3e887c1f7389e06f46a45738260beb1c3e0d2c639267be5f65b1e07_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  106 => 29,  100 => 27,  94 => 24,  89 => 21,  84 => 19,  81 => 18,  75 => 14,  73 => 13,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Information*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Information{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class='zoneEdition'>*/
/*         */
/*         {% if is_granted('ROLE_ADMIN') %}*/
/*         */
/*         <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/*         */
/*         {% endif %}*/
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
/* {# empty Twig template #}*/
/* */
