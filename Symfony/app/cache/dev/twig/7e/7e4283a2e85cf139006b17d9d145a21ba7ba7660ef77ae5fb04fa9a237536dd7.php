<?php

/* NoxIntranetRessourcesBundle:AQ:citations.html.twig */
class __TwigTemplate_6ebb0076511c0fe01bacd6727527e49a0d9182c9fbce765664358a3c99e96f28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:AQ:citations.html.twig", 1);
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
        $__internal_8d6281edf9f25f3d9666e576513dfc8a266cd8b44440d459285c2f3b6c54cb71 = $this->env->getExtension("native_profiler");
        $__internal_8d6281edf9f25f3d9666e576513dfc8a266cd8b44440d459285c2f3b6c54cb71->enter($__internal_8d6281edf9f25f3d9666e576513dfc8a266cd8b44440d459285c2f3b6c54cb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:AQ:citations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d6281edf9f25f3d9666e576513dfc8a266cd8b44440d459285c2f3b6c54cb71->leave($__internal_8d6281edf9f25f3d9666e576513dfc8a266cd8b44440d459285c2f3b6c54cb71_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_f145556034cb112b0474feb5e3fb42acefa56bcb47b401266401b30ba7e50a4a = $this->env->getExtension("native_profiler");
        $__internal_f145556034cb112b0474feb5e3fb42acefa56bcb47b401266401b30ba7e50a4a->enter($__internal_f145556034cb112b0474feb5e3fb42acefa56bcb47b401266401b30ba7e50a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Citations
";
        
        $__internal_f145556034cb112b0474feb5e3fb42acefa56bcb47b401266401b30ba7e50a4a->leave($__internal_f145556034cb112b0474feb5e3fb42acefa56bcb47b401266401b30ba7e50a4a_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_d23eac45790f3ee6bfd06ebd3e5343118d96cb5455e25ab816191a729dc0b454 = $this->env->getExtension("native_profiler");
        $__internal_d23eac45790f3ee6bfd06ebd3e5343118d96cb5455e25ab816191a729dc0b454->enter($__internal_d23eac45790f3ee6bfd06ebd3e5343118d96cb5455e25ab816191a729dc0b454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Citations";
        
        $__internal_d23eac45790f3ee6bfd06ebd3e5343118d96cb5455e25ab816191a729dc0b454->leave($__internal_d23eac45790f3ee6bfd06ebd3e5343118d96cb5455e25ab816191a729dc0b454_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_ca6a356d3fea66f4c597f9494a887405aadde6e00de6d6fc91d96ec702564829 = $this->env->getExtension("native_profiler");
        $__internal_ca6a356d3fea66f4c597f9494a887405aadde6e00de6d6fc91d96ec702564829->enter($__internal_ca6a356d3fea66f4c597f9494a887405aadde6e00de6d6fc91d96ec702564829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    ";
        // line 11
        if ($this->env->getExtension('security')->isGranted("ROLE_QUALITE")) {
            // line 12
            echo "
        <div class='zoneEdition'>

            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>

            ";
            // line 17
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
            echo "

            ";
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
            echo "

            ";
            // line 22
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
            echo "

            ";
            // line 25
            echo "            ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
            echo "

            ";
            // line 27
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
            echo "

        </div>

    ";
        }
        // line 32
        echo "
    <div class='zoneTexte'>
        ";
        // line 34
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
    </di>

";
        
        $__internal_ca6a356d3fea66f4c597f9494a887405aadde6e00de6d6fc91d96ec702564829->leave($__internal_ca6a356d3fea66f4c597f9494a887405aadde6e00de6d6fc91d96ec702564829_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:AQ:citations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 34,  110 => 32,  102 => 27,  96 => 25,  90 => 22,  85 => 19,  80 => 17,  73 => 12,  71 => 11,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Citations*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Citations{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_QUALITE') %}*/
/* */
/*         <div class='zoneEdition'>*/
/* */
/*             <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/* */
/*             {{ form_start(formulaire, {'attr': {'id': 'formulaireTexte' }}) }}*/
/* */
/*             {{ form_errors(formulaire) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(formulaire.text) }}*/
/* */
/*             {# Génération de l'input. #}*/
/*             {{ form_widget(formulaire.text, {'attr': {'class': 'textField' }}) }}*/
/* */
/*             {{ form_end(formulaire) }}*/
/* */
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div class='zoneTexte'>*/
/*         {{ texte|raw }}*/
/*     </di>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
/* */
