<?php

/* NoxIntranetAdministrationBundle:AdministrationImprimantes:administrationimprimantes.html.twig */
class __TwigTemplate_f3477f3a0ab4241645e2cc64ae8d9fe6bc2fb7dff3960f4eebd3f788a8e41f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationImprimantes:administrationimprimantes.html.twig", 1);
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
        $__internal_76c56b6ed735b0d447d2d23046b2c000bbd5932054e6380488b93a80f91c61b1 = $this->env->getExtension("native_profiler");
        $__internal_76c56b6ed735b0d447d2d23046b2c000bbd5932054e6380488b93a80f91c61b1->enter($__internal_76c56b6ed735b0d447d2d23046b2c000bbd5932054e6380488b93a80f91c61b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationImprimantes:administrationimprimantes.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_76c56b6ed735b0d447d2d23046b2c000bbd5932054e6380488b93a80f91c61b1->leave($__internal_76c56b6ed735b0d447d2d23046b2c000bbd5932054e6380488b93a80f91c61b1_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_035bd34ae92d144dd48f32e35d2984da54054b73bf0050d138eee1c53d8736f9 = $this->env->getExtension("native_profiler");
        $__internal_035bd34ae92d144dd48f32e35d2984da54054b73bf0050d138eee1c53d8736f9->enter($__internal_035bd34ae92d144dd48f32e35d2984da54054b73bf0050d138eee1c53d8736f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration imprimantes
";
        
        $__internal_035bd34ae92d144dd48f32e35d2984da54054b73bf0050d138eee1c53d8736f9->leave($__internal_035bd34ae92d144dd48f32e35d2984da54054b73bf0050d138eee1c53d8736f9_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_fe9feb2c8d9c6a9bbf3f205e406859b62f4a22af621b6c0027368aba79014cd9 = $this->env->getExtension("native_profiler");
        $__internal_fe9feb2c8d9c6a9bbf3f205e406859b62f4a22af621b6c0027368aba79014cd9->enter($__internal_fe9feb2c8d9c6a9bbf3f205e406859b62f4a22af621b6c0027368aba79014cd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration imprimantes";
        
        $__internal_fe9feb2c8d9c6a9bbf3f205e406859b62f4a22af621b6c0027368aba79014cd9->leave($__internal_fe9feb2c8d9c6a9bbf3f205e406859b62f4a22af621b6c0027368aba79014cd9_prof);

    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_4f59e37593736ffe4dc739da30ef391829b291dc77e01e6f3536fc49f8b5058a = $this->env->getExtension("native_profiler");
        $__internal_4f59e37593736ffe4dc739da30ef391829b291dc77e01e6f3536fc49f8b5058a->enter($__internal_4f59e37593736ffe4dc739da30ef391829b291dc77e01e6f3536fc49f8b5058a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 10
        echo "
    <div id=\"divAdministrationAdmin\">

        <div id=\"creationAdmin\">
            <div id=\"creationAdminDiv\">

                ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "formulaireImprimante")));
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

                ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agence", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante"), "label" => "Agence :"));
        echo "
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agence", array()), 'errors');
        echo "
                ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agence", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "placeholder" => "ex: Bron")));
        echo "


                ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante"), "label" => "Nom de l'imprimante :"));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "textFormulaireImprimante", "placeholder" => "ex: IMP-ANG-SS")));
        echo "

                <br />

                ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante"), "label" => "Type :"));
        echo "
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget', array("attr" => array("class" => "radioFormulaireImprimante")));
        echo "

                <br />

                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomReseau", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante", "class" => "formTraceur"), "label" => "Nom imprimante réseau :"));
        echo "
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomReseau", array()), 'errors');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nomReseau", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "class" => "formTraceur"), "required" => false));
        echo "
                
                ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ip", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante", "class" => "formTraceur"), "label" => "Ip :"));
        echo "
                ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ip", array()), 'errors');
        echo "
                ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ip", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "class" => "formTraceur"), "required" => false));
        echo "
                
                <br />
                
                ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cheminPilote", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante", "class" => "formTraceur"), "label" => "Chemin pilote :"));
        echo "
                ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cheminPilote", array()), 'errors');
        echo "
                ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cheminPilote", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "class" => "formTraceur"), "required" => false));
        echo "
                
                ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fileLPR", array()), 'label', array("label_attr" => array("class" => "labelFormulaireImprimante", "class" => "formTraceur"), "label" => "File d'attente LPR :"));
        echo "
                ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fileLPR", array()), 'errors');
        echo "
                ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fileLPR", array()), 'widget', array("attr" => array("class" => "textFormulaireArchive", "class" => "formTraceur"), "required" => false));
        echo "

                ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "

                ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ajouter", array()), 'widget', array("attr" => array("class" => "submitFormulaireImprimante", "class" => "boutonFormulaire")));
        echo "

                ";
        // line 58
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

            </div>
        </div>

        <table>

            <tr>
                <td> Agence </td>
                <td> Nom </td>
                <td> Type </td>
                <td> Supprimer </td>
            </tr>

            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["imprimantes"]) ? $context["imprimantes"] : $this->getContext($context, "imprimantes")));
        foreach ($context['_seq'] as $context["_key"] => $context["imprimante"]) {
            // line 73
            echo "
                <tr>
                    <td> <p> ";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprimante"], "agence", array()), "html", null, true);
            echo " <p> </td>

                    <td>
                        <p> ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["imprimante"], "nom", array()), "html", null, true);
            echo " </p>
                    </td>
                    
                    <td> <p> ";
            // line 81
            if (($this->getAttribute($context["imprimante"], "type", array()) == "imp")) {
                echo " Imprimante ";
            } else {
                echo " Traceur ";
            }
            echo " </p> </td>

                    <td> <a href='";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_administration_imprimantes_suppression", array("id" => $this->getAttribute($context["imprimante"], "id", array()))), "html", null, true);
            echo "'> <img class=\"suppressionImprimanteImg\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-48.png"), "html", null, true);
            echo "'> </a> </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imprimante'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "
        </table>

    </div>

";
        
        $__internal_4f59e37593736ffe4dc739da30ef391829b291dc77e01e6f3536fc49f8b5058a->leave($__internal_4f59e37593736ffe4dc739da30ef391829b291dc77e01e6f3536fc49f8b5058a_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationImprimantes:administrationimprimantes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 87,  239 => 83,  230 => 81,  224 => 78,  218 => 75,  214 => 73,  210 => 72,  193 => 58,  188 => 56,  183 => 54,  178 => 52,  174 => 51,  170 => 50,  165 => 48,  161 => 47,  157 => 46,  150 => 42,  146 => 41,  142 => 40,  137 => 38,  133 => 37,  129 => 36,  122 => 32,  118 => 31,  114 => 30,  107 => 26,  103 => 25,  99 => 24,  93 => 21,  89 => 20,  85 => 19,  80 => 17,  76 => 16,  68 => 10,  62 => 9,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration imprimantes*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration imprimantes{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divAdministrationAdmin">*/
/* */
/*         <div id="creationAdmin">*/
/*             <div id="creationAdminDiv">*/
/* */
/*                 {{ form_start(form, {'attr': {'class': 'formulaireImprimante'}}) }}*/
/*                 {{ form_errors(form) }}*/
/* */
/*                 {{ form_label(form.agence, "Agence :", {'label_attr': {'class': 'labelFormulaireImprimante'}}) }}*/
/*                 {{ form_errors(form.agence) }}*/
/*                 {{ form_widget(form.agence, {'attr': {'class': 'textFormulaireArchive', 'placeholder': 'ex: Bron'}}) }}*/
/* */
/* */
/*                 {{ form_label(form.nom, "Nom de l'imprimante :", {'label_attr': {'class': 'labelFormulaireImprimante'}}) }}*/
/*                 {{ form_errors(form.nom) }}*/
/*                 {{ form_widget(form.nom, {'attr': {'class': 'textFormulaireImprimante', 'placeholder': 'ex: IMP-ANG-SS'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(form.type, "Type :", {'label_attr': {'class': 'labelFormulaireImprimante'}}) }}*/
/*                 {{ form_errors(form.type) }}*/
/*                 {{ form_widget(form.type, {'attr': {'class': 'radioFormulaireImprimante'}}) }}*/
/* */
/*                 <br />*/
/* */
/*                 {{ form_label(form.nomReseau, "Nom imprimante réseau :", {'label_attr': {'class': 'labelFormulaireImprimante', 'class': 'formTraceur' }}) }}*/
/*                 {{ form_errors(form.nomReseau) }}*/
/*                 {{ form_widget(form.nomReseau, {'attr': {'class': 'textFormulaireArchive', 'class': 'formTraceur'}, 'required': false }) }}*/
/*                 */
/*                 {{ form_label(form.ip, "Ip :", {'label_attr': {'class': 'labelFormulaireImprimante', 'class': 'formTraceur'}}) }}*/
/*                 {{ form_errors(form.ip) }}*/
/*                 {{ form_widget(form.ip, {'attr': {'class': 'textFormulaireArchive', 'class': 'formTraceur'}, 'required': false }) }}*/
/*                 */
/*                 <br />*/
/*                 */
/*                 {{ form_label(form.cheminPilote, "Chemin pilote :", {'label_attr': {'class': 'labelFormulaireImprimante', 'class': 'formTraceur'}}) }}*/
/*                 {{ form_errors(form.cheminPilote) }}*/
/*                 {{ form_widget(form.cheminPilote, {'attr': {'class': 'textFormulaireArchive', 'class': 'formTraceur'}, 'required': false }) }}*/
/*                 */
/*                 {{ form_label(form.fileLPR, "File d'attente LPR :", {'label_attr': {'class': 'labelFormulaireImprimante', 'class': 'formTraceur'}}) }}*/
/*                 {{ form_errors(form.fileLPR) }}*/
/*                 {{ form_widget(form.fileLPR, {'attr': {'class': 'textFormulaireArchive', 'class': 'formTraceur'}, 'required': false }) }}*/
/* */
/*                 {{ form_widget(form._token) }}*/
/* */
/*                 {{ form_widget(form.ajouter, {'attr': {'class': 'submitFormulaireImprimante', 'class': 'boutonFormulaire' }}) }}*/
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
/*                 <td> Nom </td>*/
/*                 <td> Type </td>*/
/*                 <td> Supprimer </td>*/
/*             </tr>*/
/* */
/*             {% for imprimante in imprimantes %}*/
/* */
/*                 <tr>*/
/*                     <td> <p> {{ imprimante.agence }} <p> </td>*/
/* */
/*                     <td>*/
/*                         <p> {{ imprimante.nom }} </p>*/
/*                     </td>*/
/*                     */
/*                     <td> <p> {% if imprimante.type == 'imp' %} Imprimante {% else %} Traceur {% endif %} </p> </td>*/
/* */
/*                     <td> <a href='{{ path('nox_intranet_administration_imprimantes_suppression', {'id': imprimante.id}) }}'> <img class="suppressionImprimanteImg" src='{{ asset('bundles/noxintranetadministration/images/Delete-48.png') }}'> </a> </td>*/
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
