<?php

/* NoxIntranetRessourcesBundle:Archives:archives.html.twig */
class __TwigTemplate_7e346ee3378d60bba8c896ee2a307fe88dd7011390e556ac773381936ae80666 extends Twig_Template
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
        $__internal_0c12bcabf425d8416c12012dfde883833fb0b5624ea4e9f4f12e7eddd7b0295f = $this->env->getExtension("native_profiler");
        $__internal_0c12bcabf425d8416c12012dfde883833fb0b5624ea4e9f4f12e7eddd7b0295f->enter($__internal_0c12bcabf425d8416c12012dfde883833fb0b5624ea4e9f4f12e7eddd7b0295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Archives:archives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0c12bcabf425d8416c12012dfde883833fb0b5624ea4e9f4f12e7eddd7b0295f->leave($__internal_0c12bcabf425d8416c12012dfde883833fb0b5624ea4e9f4f12e7eddd7b0295f_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_058c2114b6d253d82a4981138811d5b9886d771549943ac65086630816b08fea = $this->env->getExtension("native_profiler");
        $__internal_058c2114b6d253d82a4981138811d5b9886d771549943ac65086630816b08fea->enter($__internal_058c2114b6d253d82a4981138811d5b9886d771549943ac65086630816b08fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Archives
";
        
        $__internal_058c2114b6d253d82a4981138811d5b9886d771549943ac65086630816b08fea->leave($__internal_058c2114b6d253d82a4981138811d5b9886d771549943ac65086630816b08fea_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_6baa2906921a77c233c0c0e32ce61487a359f9c89ff129a47ae054bc02d25362 = $this->env->getExtension("native_profiler");
        $__internal_6baa2906921a77c233c0c0e32ce61487a359f9c89ff129a47ae054bc02d25362->enter($__internal_6baa2906921a77c233c0c0e32ce61487a359f9c89ff129a47ae054bc02d25362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Archives";
        
        $__internal_6baa2906921a77c233c0c0e32ce61487a359f9c89ff129a47ae054bc02d25362->leave($__internal_6baa2906921a77c233c0c0e32ce61487a359f9c89ff129a47ae054bc02d25362_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0bc07fc6de09ee26cbc898b963d37c6a797b42e14b3fb271152c16e4c6608a76 = $this->env->getExtension("native_profiler");
        $__internal_0bc07fc6de09ee26cbc898b963d37c6a797b42e14b3fb271152c16e4c6608a76->enter($__internal_0bc07fc6de09ee26cbc898b963d37c6a797b42e14b3fb271152c16e4c6608a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
        echo "

            ";
        // line 27
        echo "            ";
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
        </div>
        
";
        
        $__internal_0bc07fc6de09ee26cbc898b963d37c6a797b42e14b3fb271152c16e4c6608a76->leave($__internal_0bc07fc6de09ee26cbc898b963d37c6a797b42e14b3fb271152c16e4c6608a76_prof);

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
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Archives*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Archives{% endblock %}*/
/* */
/* {% block contenu %}*/
/*     */
/*         <div class='zoneEdition'>*/
/* */
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*             */
/*             <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/*             */
/*             {% endif %}*/
/*    */
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
/*         <div class='zoneTexte'>*/
/*             {{ texte|raw }}*/
/*         </div>*/
/*         */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
