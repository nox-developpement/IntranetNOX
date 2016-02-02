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
        $__internal_581eb968783cd31989e7c5d79d7200f2a781e502d5fdf7d2230cb5af27a738fc = $this->env->getExtension("native_profiler");
        $__internal_581eb968783cd31989e7c5d79d7200f2a781e502d5fdf7d2230cb5af27a738fc->enter($__internal_581eb968783cd31989e7c5d79d7200f2a781e502d5fdf7d2230cb5af27a738fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationServeurs:administrationserveurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_581eb968783cd31989e7c5d79d7200f2a781e502d5fdf7d2230cb5af27a738fc->leave($__internal_581eb968783cd31989e7c5d79d7200f2a781e502d5fdf7d2230cb5af27a738fc_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9d2cb2a66c1c623b9ba4a3baf7b04c8f59b6dc23c7ee76adf2b555954db09eda = $this->env->getExtension("native_profiler");
        $__internal_9d2cb2a66c1c623b9ba4a3baf7b04c8f59b6dc23c7ee76adf2b555954db09eda->enter($__internal_9d2cb2a66c1c623b9ba4a3baf7b04c8f59b6dc23c7ee76adf2b555954db09eda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration serveurs
";
        
        $__internal_9d2cb2a66c1c623b9ba4a3baf7b04c8f59b6dc23c7ee76adf2b555954db09eda->leave($__internal_9d2cb2a66c1c623b9ba4a3baf7b04c8f59b6dc23c7ee76adf2b555954db09eda_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_8ceace3d165f38c8d11966e9665decc411de92d3f686ab8261e9d18ba8dcffaf = $this->env->getExtension("native_profiler");
        $__internal_8ceace3d165f38c8d11966e9665decc411de92d3f686ab8261e9d18ba8dcffaf->enter($__internal_8ceace3d165f38c8d11966e9665decc411de92d3f686ab8261e9d18ba8dcffaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration serveurs";
        
        $__internal_8ceace3d165f38c8d11966e9665decc411de92d3f686ab8261e9d18ba8dcffaf->leave($__internal_8ceace3d165f38c8d11966e9665decc411de92d3f686ab8261e9d18ba8dcffaf_prof);

    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_d387272b5ad151487e882edc115ab1f4807000081ead01e784a7c5276c919af2 = $this->env->getExtension("native_profiler");
        $__internal_d387272b5ad151487e882edc115ab1f4807000081ead01e784a7c5276c919af2->enter($__internal_d387272b5ad151487e882edc115ab1f4807000081ead01e784a7c5276c919af2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Le script connecte un lecteur Y:\\ avec le contenu du champ \"Lien vers le serveur\"";
        
        $__internal_d387272b5ad151487e882edc115ab1f4807000081ead01e784a7c5276c919af2->leave($__internal_d387272b5ad151487e882edc115ab1f4807000081ead01e784a7c5276c919af2_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4bbd283bb7c721f2fc2cadb7bf2c30ce68dd5e458eb10183ddc87fffef2b33ef = $this->env->getExtension("native_profiler");
        $__internal_4bbd283bb7c721f2fc2cadb7bf2c30ce68dd5e458eb10183ddc87fffef2b33ef->enter($__internal_4bbd283bb7c721f2fc2cadb7bf2c30ce68dd5e458eb10183ddc87fffef2b33ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
            echo "'> <img class=\"suppressionAdminImg\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Delete-48.png"), "html", null, true);
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
        
        $__internal_4bbd283bb7c721f2fc2cadb7bf2c30ce68dd5e458eb10183ddc87fffef2b33ef->leave($__internal_4bbd283bb7c721f2fc2cadb7bf2c30ce68dd5e458eb10183ddc87fffef2b33ef_prof);

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
/*                     <td> <a href='{{ path('nox_intranet_suppression_serveur', {'id': serveur.id}) }}'> <img class="suppressionAdminImg" src='{{ asset('bundles/noxintranetadministration/images/Data-Delete-48.png') }}'> </a> </td>*/
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
