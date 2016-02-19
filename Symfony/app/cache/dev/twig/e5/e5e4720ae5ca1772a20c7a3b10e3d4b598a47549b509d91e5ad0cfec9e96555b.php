<?php

/* NoxIntranetAdministrationBundle:AdministrationServeurs:administrationserveurs.html.twig */
class __TwigTemplate_0e72aa3f8d4d43cfbc8de327203ed18bc3e41564ca981ee6183da6675ae318f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationServeurs:administrationserveurs.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25135841a23e11437a34805878abf774c541ea1ba0a19c2c6ea1c8cc17734869 = $this->env->getExtension("native_profiler");
        $__internal_25135841a23e11437a34805878abf774c541ea1ba0a19c2c6ea1c8cc17734869->enter($__internal_25135841a23e11437a34805878abf774c541ea1ba0a19c2c6ea1c8cc17734869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationServeurs:administrationserveurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25135841a23e11437a34805878abf774c541ea1ba0a19c2c6ea1c8cc17734869->leave($__internal_25135841a23e11437a34805878abf774c541ea1ba0a19c2c6ea1c8cc17734869_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_c1c21e2e1b906d834d3837a03bad1a1f03bd7efb06ae08b04ccb2cdef504b4ea = $this->env->getExtension("native_profiler");
        $__internal_c1c21e2e1b906d834d3837a03bad1a1f03bd7efb06ae08b04ccb2cdef504b4ea->enter($__internal_c1c21e2e1b906d834d3837a03bad1a1f03bd7efb06ae08b04ccb2cdef504b4ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration serveurs
";
        
        $__internal_c1c21e2e1b906d834d3837a03bad1a1f03bd7efb06ae08b04ccb2cdef504b4ea->leave($__internal_c1c21e2e1b906d834d3837a03bad1a1f03bd7efb06ae08b04ccb2cdef504b4ea_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_c77faabff8b7733105c4fb42d203562e86c3996e81bcaf25ee47a6a675365bea = $this->env->getExtension("native_profiler");
        $__internal_c77faabff8b7733105c4fb42d203562e86c3996e81bcaf25ee47a6a675365bea->enter($__internal_c77faabff8b7733105c4fb42d203562e86c3996e81bcaf25ee47a6a675365bea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration serveurs";
        
        $__internal_c77faabff8b7733105c4fb42d203562e86c3996e81bcaf25ee47a6a675365bea->leave($__internal_c77faabff8b7733105c4fb42d203562e86c3996e81bcaf25ee47a6a675365bea_prof);

    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_4301d7141f1384bcf40abcb7f5740cefb6f72a8f93c44c95cb39985a9b0f6e32 = $this->env->getExtension("native_profiler");
        $__internal_4301d7141f1384bcf40abcb7f5740cefb6f72a8f93c44c95cb39985a9b0f6e32->enter($__internal_4301d7141f1384bcf40abcb7f5740cefb6f72a8f93c44c95cb39985a9b0f6e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Le script connecte un lecteur Y:\\ avec le contenu du champ \"Lien vers le serveur\"";
        
        $__internal_4301d7141f1384bcf40abcb7f5740cefb6f72a8f93c44c95cb39985a9b0f6e32->leave($__internal_4301d7141f1384bcf40abcb7f5740cefb6f72a8f93c44c95cb39985a9b0f6e32_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0b9686a02753b0bc20bdbf5ce73b1a82952861ef240f1991231c5ebc79a0b1f7 = $this->env->getExtension("native_profiler");
        $__internal_0b9686a02753b0bc20bdbf5ce73b1a82952861ef240f1991231c5ebc79a0b1f7->enter($__internal_0b9686a02753b0bc20bdbf5ce73b1a82952861ef240f1991231c5ebc79a0b1f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 11
        echo "
    <div id=\"divAdministrationAdmin\">

        <div id=\"creationAdmin\">
            <div id=\"creationAdminDiv\">

                ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "formulaireArchive")));
        echo "
                ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agence", array()), 'label', array("label_attr" => array("class" => "labelFormulaireArchive"), "label" => "Agence :"));
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agence", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agence", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "placeholder" => "ex: Bron")));
        echo "

                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'label', array("label_attr" => array("class" => "labelFormulaireArchive"), "label" => "Lien vers le serveur :"));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "placeholder" => "ex: \\\\192.168.35.210\\share\\arch_agence\\Bron")));
        echo "


                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireArchive", "class" => "boutonFormulaire")));
        echo "

                ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>

        <table>

            <tr>
                <td> Agence </td>
                <td> Lien </td>
                <td> Supprimer </td>
            </tr>

            ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serveurs"]) ? $context["serveurs"] : $this->getContext($context, "serveurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["serveur"]) {
            // line 47
            echo "
                <tr>
                    <td> <p> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["serveur"], "agence", array()), "html", null, true);
            echo " <p> </td>

                    <td>
                        <p> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["serveur"], "lien", array()), "html", null, true);
            echo " </p>
                    </td>

                    <td> <a href='";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_suppression_serveur", array("id" => $this->getAttribute($context["serveur"], "id", array()))), "html", null, true);
            echo "'> <img class=\"suppressionServeurImg\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Delete-32.png"), "html", null, true);
            echo "'> </a> </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serveur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        </table>

    </div>

";
        
        $__internal_0b9686a02753b0bc20bdbf5ce73b1a82952861ef240f1991231c5ebc79a0b1f7->leave($__internal_0b9686a02753b0bc20bdbf5ce73b1a82952861ef240f1991231c5ebc79a0b1f7_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationServeurs:administrationserveurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 59,  171 => 55,  165 => 52,  159 => 49,  155 => 47,  151 => 46,  135 => 33,  130 => 31,  125 => 29,  119 => 26,  115 => 25,  111 => 24,  106 => 22,  102 => 21,  98 => 20,  93 => 18,  89 => 17,  81 => 11,  75 => 10,  63 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration serveurs*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration serveurs{% endblock %}*/
/* {% block sousMessageAccueil %}Le script connecte un lecteur Y:\ avec le contenu du champ "Lien vers le serveur"{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divAdministrationAdmin">*/
/* */
/*         <div id="creationAdmin">*/
/*             <div id="creationAdminDiv">*/
/* */
/*                 {{ form_start(form, {'attr': {'class': 'formulaireArchive'}}) }}*/
/*                 {{ form_errors(form) }}*/
/* */
/*                 {{ form_label(form.agence, "Agence :", {'label_attr': {'class': 'labelFormulaireArchive'}}) }}*/
/*                 {{ form_errors(form.agence) }}*/
/*                 {{ form_widget(form.agence, {'attr': {'class': 'textFormulaireArchive', 'placeholder': 'ex: Bron'}}) }}*/
/* */
/*                 {{ form_label(form.lien, "Lien vers le serveur :", {'label_attr': {'class': 'labelFormulaireArchive'}}) }}*/
/*                 {{ form_errors(form.lien) }}*/
/*                 {{ form_widget(form.lien, {'attr': {'class': 'textFormulaireArchive', 'placeholder': 'ex: \\\\192.168.35.210\\share\\arch_agence\\Bron'}}) }}*/
/* */
/* */
/*                 {{ form_widget(form._token) }}*/
/* */
/*                 {{ form_widget(form.ajouter, {'attr': {'class': 'submitFormulaireArchive', 'class': 'boutonFormulaire' }}) }}*/
/* */
/*                 {{ form_end(form) }}*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/*         <table>*/
/* */
/*             <tr>*/
/*                 <td> Agence </td>*/
/*                 <td> Lien </td>*/
/*                 <td> Supprimer </td>*/
/*             </tr>*/
/* */
/*             {% for serveur in serveurs %}*/
/* */
/*                 <tr>*/
/*                     <td> <p> {{ serveur.agence }} <p> </td>*/
/* */
/*                     <td>*/
/*                         <p> {{ serveur.lien }} </p>*/
/*                     </td>*/
/* */
/*                     <td> <a href='{{ path('nox_intranet_suppression_serveur', {'id': serveur.id}) }}'> <img class="suppressionServeurImg" src='{{ asset('bundles/noxintranetadministration/images/Data-Delete-32.png') }}'> </a> </td>*/
/*                 </tr>*/
/* */
/*             {% endfor %}*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
