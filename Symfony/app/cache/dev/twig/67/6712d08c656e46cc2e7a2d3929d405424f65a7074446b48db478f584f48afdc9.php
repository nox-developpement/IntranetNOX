<?php

/* NoxIntranetRessourcesBundle:PrestationsInternes:newprestationsinternessearch.html.twig */
class __TwigTemplate_24cd263f45e41782a38f978c4e450db67537eb35bcbbd3b08d63a131b6bb7e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:PrestationsInternes:newprestationsinternessearch.html.twig", 1);
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
        $__internal_c2776bb4c3b4915a5c27cf4adf0b11596bd62ecf8b49bfef225013bca283484e = $this->env->getExtension("native_profiler");
        $__internal_c2776bb4c3b4915a5c27cf4adf0b11596bd62ecf8b49bfef225013bca283484e->enter($__internal_c2776bb4c3b4915a5c27cf4adf0b11596bd62ecf8b49bfef225013bca283484e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:PrestationsInternes:newprestationsinternessearch.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2776bb4c3b4915a5c27cf4adf0b11596bd62ecf8b49bfef225013bca283484e->leave($__internal_c2776bb4c3b4915a5c27cf4adf0b11596bd62ecf8b49bfef225013bca283484e_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_9f2abda6482ca284be5720c9ca39b615a0f7358b1229be0e55784cf02dc29ae7 = $this->env->getExtension("native_profiler");
        $__internal_9f2abda6482ca284be5720c9ca39b615a0f7358b1229be0e55784cf02dc29ae7->enter($__internal_9f2abda6482ca284be5720c9ca39b615a0f7358b1229be0e55784cf02dc29ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Nouvelle demande de prestation interne ";
        
        $__internal_9f2abda6482ca284be5720c9ca39b615a0f7358b1229be0e55784cf02dc29ae7->leave($__internal_9f2abda6482ca284be5720c9ca39b615a0f7358b1229be0e55784cf02dc29ae7_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_b1c4ee435a8c85799eed061e6e4fbd92c86a1ba9c69047324ffbbca624293375 = $this->env->getExtension("native_profiler");
        $__internal_b1c4ee435a8c85799eed061e6e4fbd92c86a1ba9c69047324ffbbca624293375->enter($__internal_b1c4ee435a8c85799eed061e6e4fbd92c86a1ba9c69047324ffbbca624293375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Nouvelle demande de prestation interne";
        
        $__internal_b1c4ee435a8c85799eed061e6e4fbd92c86a1ba9c69047324ffbbca624293375->leave($__internal_b1c4ee435a8c85799eed061e6e4fbd92c86a1ba9c69047324ffbbca624293375_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_1d58f49f574e367faed65f727406a4d07fc15f92cd07f2cd205e1bf50f698dea = $this->env->getExtension("native_profiler");
        $__internal_1d58f49f574e367faed65f727406a4d07fc15f92cd07f2cd205e1bf50f698dea->enter($__internal_1d58f49f574e367faed65f727406a4d07fc15f92cd07f2cd205e1bf50f698dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        echo " 

    <div style='width: 70%; margin: auto;'>

        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), 'form_start', array("attr" => array("style" => "text-align: center; background-color: rgba(255,255,255, 0.6);")));
        echo "

        ";
        // line 13
        echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")));
        echo "

        <table>
            <tr>
                <th>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Libelle", array()), 'label', array("label" => "Libellé"));
        echo "</th>
                <td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Libelle", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "LieuOperation", array()), 'label', array("label" => "Lieu de l'opération"));
        echo "</th>
                <td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "LieuOperation", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "LieuPrestation", array()), 'label', array("label" => "Lieu de la prestation"));
        echo "</th>
                <td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "LieuPrestation", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Descriptif", array()), 'label', array("attr" => array("style" => "vertical-align: top;"), "label" => "Descriptif de la prestation"));
        echo "</th>
                <td><div id='DescriptifPrestation' class='textarea' contenteditable='true' placeholder='Ajoutez ici les éventuels échanges.'>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Descriptif", array()), "vars", array()), "value", array()), "html", null, true);
        echo "</div></td>
            </tr>

            <tr>
                <th>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Deplacement", array()), 'label', array("label" => "Déplacement à prévoir"));
        echo "</th>
                <td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Deplacement", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "DateDemarrage", array()), 'label', array("label" => "Date de démarrage de la prestation"));
        echo "</th>
                <td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "DateDemarrage", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "DateRendu", array()), 'label', array("label" => "Date de rendu"));
        echo "</th>
                <td>";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "DateRendu", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Livrables", array()), 'label', array("label" => "Livrables attendus"));
        echo "</th>
                <td><div id='LivrablesAttendus' class='textarea' contenteditable='true' placeholder='Ajoutez ici les éventuels échanges.'>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Livrables", array()), "vars", array()), "value", array()), "html", null, true);
        echo "</div></td>
            </tr>

            <tr>
                <th>";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "VolumeSousTraitance", array()), 'label', array("label" => "Volume de sous traitance envisagé (€)"));
        echo "</th>
                <td>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "VolumeSousTraitance", array()), 'widget');
        echo "</td>
            </tr>

            <tr>
                <th>";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "EmailDA", array()), 'label', array("label" => "Email du DA émetteur"));
        echo "</th>
                <td>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "EmailDA", array()), 'widget');
        echo "</td>
            </tr>

        </table>

        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), "Valider", array()), 'widget', array("attr" => array("class" => "boutonFormulaire", "style" => "margin-top: 1%; padding: 2%;")));
        echo "

        ";
        // line 70
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formNewSearch"]) ? $context["formNewSearch"] : $this->getContext($context, "formNewSearch")), 'form_end');
        echo "

    </div>

    <script>
        \$(window).load(function () {
            \$(\"form[name='formNewSearch']\").submit(function () {
                \$('#formNewSearch_Descriptif').val(\$('#DescriptifPrestation').text());
                \$('#formNewSearch_Livrables').val(\$('#LivrablesAttendus').text());
            });
        });
    </script>

";
        
        $__internal_1d58f49f574e367faed65f727406a4d07fc15f92cd07f2cd205e1bf50f698dea->leave($__internal_1d58f49f574e367faed65f727406a4d07fc15f92cd07f2cd205e1bf50f698dea_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:PrestationsInternes:newprestationsinternessearch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 70,  194 => 68,  186 => 63,  182 => 62,  175 => 58,  171 => 57,  164 => 53,  160 => 52,  153 => 48,  149 => 47,  142 => 43,  138 => 42,  131 => 38,  127 => 37,  120 => 33,  116 => 32,  109 => 28,  105 => 27,  98 => 23,  94 => 22,  87 => 18,  83 => 17,  76 => 13,  71 => 11,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Nouvelle demande de prestation interne {% endblock %}*/
/* */
/* {% block messageAccueil %}Nouvelle demande de prestation interne{% endblock %}*/
/* */
/* {% block contenu %} */
/* */
/*     <div style='width: 70%; margin: auto;'>*/
/* */
/*         {{ form_start(formNewSearch, {'attr': {'style': 'text-align: center; background-color: rgba(255,255,255, 0.6);'}}) }}*/
/* */
/*         {{ dump(formNewSearch) }}*/
/* */
/*         <table>*/
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.Libelle, "Libellé") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.Libelle) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.LieuOperation, "Lieu de l'opération") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.LieuOperation) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.LieuPrestation, "Lieu de la prestation") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.LieuPrestation) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.Descriptif, "Descriptif de la prestation", {'attr': { 'style': 'vertical-align: top;'}}) }}</th>*/
/*                 <td><div id='DescriptifPrestation' class='textarea' contenteditable='true' placeholder='Ajoutez ici les éventuels échanges.'>{{ formNewSearch.Descriptif.vars.value }}</div></td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.Deplacement, "Déplacement à prévoir") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.Deplacement) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.DateDemarrage, "Date de démarrage de la prestation") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.DateDemarrage) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.DateRendu, "Date de rendu") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.DateRendu) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.Livrables, "Livrables attendus") }}</th>*/
/*                 <td><div id='LivrablesAttendus' class='textarea' contenteditable='true' placeholder='Ajoutez ici les éventuels échanges.'>{{ formNewSearch.Livrables.vars.value }}</div></td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.VolumeSousTraitance, "Volume de sous traitance envisagé (€)") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.VolumeSousTraitance) }}</td>*/
/*             </tr>*/
/* */
/*             <tr>*/
/*                 <th>{{ form_label(formNewSearch.EmailDA, "Email du DA émetteur") }}</th>*/
/*                 <td>{{ form_widget(formNewSearch.EmailDA) }}</td>*/
/*             </tr>*/
/* */
/*         </table>*/
/* */
/*         {{ form_widget(formNewSearch.Valider, {'attr': {'class': 'boutonFormulaire', 'style': 'margin-top: 1%; padding: 2%;' }}) }}*/
/* */
/*         {{ form_end(formNewSearch) }}*/
/* */
/*     </div>*/
/* */
/*     <script>*/
/*         $(window).load(function () {*/
/*             $("form[name='formNewSearch']").submit(function () {*/
/*                 $('#formNewSearch_Descriptif').val($('#DescriptifPrestation').text());*/
/*                 $('#formNewSearch_Livrables').val($('#LivrablesAttendus').text());*/
/*             });*/
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
