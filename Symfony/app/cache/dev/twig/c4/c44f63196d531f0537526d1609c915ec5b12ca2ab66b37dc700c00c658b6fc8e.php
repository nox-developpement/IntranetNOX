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
        $__internal_fc5f4251603886eb340ae4d343b89f2035aecde7689bf82715380cce0691da0d = $this->env->getExtension("native_profiler");
        $__internal_fc5f4251603886eb340ae4d343b89f2035aecde7689bf82715380cce0691da0d->enter($__internal_fc5f4251603886eb340ae4d343b89f2035aecde7689bf82715380cce0691da0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationArchives:accueilarchives.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc5f4251603886eb340ae4d343b89f2035aecde7689bf82715380cce0691da0d->leave($__internal_fc5f4251603886eb340ae4d343b89f2035aecde7689bf82715380cce0691da0d_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_cd3a59f63eab78f80fc7c33e3a5be1c8d2668bdf8695ca0f355f6383b6ce6cc8 = $this->env->getExtension("native_profiler");
        $__internal_cd3a59f63eab78f80fc7c33e3a5be1c8d2668bdf8695ca0f355f6383b6ce6cc8->enter($__internal_cd3a59f63eab78f80fc7c33e3a5be1c8d2668bdf8695ca0f355f6383b6ce6cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration archives
";
        
        $__internal_cd3a59f63eab78f80fc7c33e3a5be1c8d2668bdf8695ca0f355f6383b6ce6cc8->leave($__internal_cd3a59f63eab78f80fc7c33e3a5be1c8d2668bdf8695ca0f355f6383b6ce6cc8_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_9e19ea2bb6e23243548dc5470373e6584b1216dc08c1b3be521025fd2b13a7f8 = $this->env->getExtension("native_profiler");
        $__internal_9e19ea2bb6e23243548dc5470373e6584b1216dc08c1b3be521025fd2b13a7f8->enter($__internal_9e19ea2bb6e23243548dc5470373e6584b1216dc08c1b3be521025fd2b13a7f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration archives";
        
        $__internal_9e19ea2bb6e23243548dc5470373e6584b1216dc08c1b3be521025fd2b13a7f8->leave($__internal_9e19ea2bb6e23243548dc5470373e6584b1216dc08c1b3be521025fd2b13a7f8_prof);

    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_6c6d8488dfb246cbdf0b581bff55f6372fb9cb10a8374af817269417317e37c3 = $this->env->getExtension("native_profiler");
        $__internal_6c6d8488dfb246cbdf0b581bff55f6372fb9cb10a8374af817269417317e37c3->enter($__internal_6c6d8488dfb246cbdf0b581bff55f6372fb9cb10a8374af817269417317e37c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Le script connecte un lecteur R:\\ avec le contenu du champ \"Lien vers l'archive\"";
        
        $__internal_6c6d8488dfb246cbdf0b581bff55f6372fb9cb10a8374af817269417317e37c3->leave($__internal_6c6d8488dfb246cbdf0b581bff55f6372fb9cb10a8374af817269417317e37c3_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_022a4c872b5c242c780c80f00834f632a48dd9dee403bd0e39449bdbd81e9b19 = $this->env->getExtension("native_profiler");
        $__internal_022a4c872b5c242c780c80f00834f632a48dd9dee403bd0e39449bdbd81e9b19->enter($__internal_022a4c872b5c242c780c80f00834f632a48dd9dee403bd0e39449bdbd81e9b19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_022a4c872b5c242c780c80f00834f632a48dd9dee403bd0e39449bdbd81e9b19->leave($__internal_022a4c872b5c242c780c80f00834f632a48dd9dee403bd0e39449bdbd81e9b19_prof);

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
