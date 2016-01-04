<?php

/* NoxIntranetAdministrationBundle:AdministrationArchives:accueilarchives.html.twig */
class __TwigTemplate_8aeb5ec3b99bb9ebc8e13baa3b8fd150720d52bd2c965c74e22137c68632ed23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationArchives:accueilarchives.html.twig", 1);
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
        $__internal_a493ae0f8e0a78af62a852bed3629211b5a6864e77b6542ecb7fb033c4a423a6 = $this->env->getExtension("native_profiler");
        $__internal_a493ae0f8e0a78af62a852bed3629211b5a6864e77b6542ecb7fb033c4a423a6->enter($__internal_a493ae0f8e0a78af62a852bed3629211b5a6864e77b6542ecb7fb033c4a423a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationArchives:accueilarchives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a493ae0f8e0a78af62a852bed3629211b5a6864e77b6542ecb7fb033c4a423a6->leave($__internal_a493ae0f8e0a78af62a852bed3629211b5a6864e77b6542ecb7fb033c4a423a6_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_eeccaeb4142423342038b2af93fc8d7a0b7e31f135d947805ef4666a7cbceb9a = $this->env->getExtension("native_profiler");
        $__internal_eeccaeb4142423342038b2af93fc8d7a0b7e31f135d947805ef4666a7cbceb9a->enter($__internal_eeccaeb4142423342038b2af93fc8d7a0b7e31f135d947805ef4666a7cbceb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration archives
";
        
        $__internal_eeccaeb4142423342038b2af93fc8d7a0b7e31f135d947805ef4666a7cbceb9a->leave($__internal_eeccaeb4142423342038b2af93fc8d7a0b7e31f135d947805ef4666a7cbceb9a_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_ae579119c5daea7134d3a4d61a6cd35c37050cfef6c5f4bbc77cbc2cbaf862a5 = $this->env->getExtension("native_profiler");
        $__internal_ae579119c5daea7134d3a4d61a6cd35c37050cfef6c5f4bbc77cbc2cbaf862a5->enter($__internal_ae579119c5daea7134d3a4d61a6cd35c37050cfef6c5f4bbc77cbc2cbaf862a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration archives";
        
        $__internal_ae579119c5daea7134d3a4d61a6cd35c37050cfef6c5f4bbc77cbc2cbaf862a5->leave($__internal_ae579119c5daea7134d3a4d61a6cd35c37050cfef6c5f4bbc77cbc2cbaf862a5_prof);

    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_8ac05138d6c62faa769de2e33ddf7a50543835f31e3cc548d0724e9966372dc4 = $this->env->getExtension("native_profiler");
        $__internal_8ac05138d6c62faa769de2e33ddf7a50543835f31e3cc548d0724e9966372dc4->enter($__internal_8ac05138d6c62faa769de2e33ddf7a50543835f31e3cc548d0724e9966372dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Le script connecte un lecteur R:\\ avec le contenu du champ \"Lien vers l'archive\"";
        
        $__internal_8ac05138d6c62faa769de2e33ddf7a50543835f31e3cc548d0724e9966372dc4->leave($__internal_8ac05138d6c62faa769de2e33ddf7a50543835f31e3cc548d0724e9966372dc4_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_64a1799581cd0adb57f625998148c7f79f5bc169501da337778fef704e84af4a = $this->env->getExtension("native_profiler");
        $__internal_64a1799581cd0adb57f625998148c7f79f5bc169501da337778fef704e84af4a->enter($__internal_64a1799581cd0adb57f625998148c7f79f5bc169501da337778fef704e84af4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lien", array()), 'label', array("label_attr" => array("class" => "labelFormulaireArchive"), "label" => "Lien vers l'archive :"));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["archives"]) ? $context["archives"] : $this->getContext($context, "archives")));
        foreach ($context['_seq'] as $context["_key"] => $context["archive"]) {
            // line 47
            echo "
                <tr>
                    <td> <p> ";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["archive"], "agence", array()), "html", null, true);
            echo " <p> </td>

                    <td>
                        <p> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["archive"], "lien", array()), "html", null, true);
            echo " </p>
                    </td>

                    <td> <a href='";
            // line 55
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_suppression_archive", array("id" => $this->getAttribute($context["archive"], "id", array()))), "html", null, true);
            echo "'> <img class=\"suppressionArchiveImg\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Delete-48.png"), "html", null, true);
            echo "'> </a> </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['archive'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
        </table>

    </div>

";
        
        $__internal_64a1799581cd0adb57f625998148c7f79f5bc169501da337778fef704e84af4a->leave($__internal_64a1799581cd0adb57f625998148c7f79f5bc169501da337778fef704e84af4a_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationArchives:accueilarchives.html.twig";
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
/*     Administration archives*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration archives{% endblock %}*/
/* {% block sousMessageAccueil %}Le script connecte un lecteur R:\ avec le contenu du champ "Lien vers l'archive"{% endblock %}*/
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
/*                 {{ form_label(form.lien, "Lien vers l'archive :", {'label_attr': {'class': 'labelFormulaireArchive'}}) }}*/
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
/*             {% for archive in archives %}*/
/* */
/*                 <tr>*/
/*                     <td> <p> {{ archive.agence }} <p> </td>*/
/* */
/*                     <td>*/
/*                         <p> {{ archive.lien }} </p>*/
/*                     </td>*/
/* */
/*                     <td> <a href='{{ path('nox_intranet_suppression_archive', {'id': archive.id}) }}'> <img class="suppressionArchiveImg" src='{{ asset('bundles/noxintranetadministration/images/Data-Delete-48.png') }}'> </a> </td>*/
/*                 </tr>*/
/* */
/*             {% endfor %}*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
