<?php

/* @NoxIntranetSupportSI/Support/demandeMateriel.html.twig */
class __TwigTemplate_1ca90fdfc52903c6b4b6833ab4cbfaaf9be942629158803e0c94c83044fb8698 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupportSI/Support/demandeMateriel.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Demande de matériel/logiciel ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo " Demande de matériel/logiciel ";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div style='font-size: 0.8vw;'>

        ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), 'form_start', array("attr" => array("style" => "border: 2px outset #1F4E79; background-color: rgba(255,255,255, 0.6);")));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), 'errors');
        echo "

        <div style=\"display: inline-block; width: 50%; text-align: center; margin-bottom: 3%;\">
            ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "agence", array()), 'label', array("label" => "Agence:"));
        echo "
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "agence", array()), 'errors');
        echo "
            ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "agence", array()), 'widget', array("attr" => array("style" => "text-align: center;")));
        echo "
        </div><!--

        --><div style=\"display: inline-block; width: 50%; text-align: center; margin-bottom: 3%;\">
            ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "demandeur", array()), 'label', array("label" => "Collaborateur:"));
        echo "
            ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "demandeur", array()), 'errors');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "demandeur", array()), 'widget', array("attr" => array("style" => "text-align: center;")));
        echo "
        </div>

        <div style=\"display: inline-block; width: 50%; text-align: center; margin-bottom: 1%;\">
            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "materielCheckbox", array()), 'label', array("label" => "Matériel"));
        echo "
            ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "materielCheckbox", array()), 'errors');
        echo "
            ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "materielCheckbox", array()), 'widget');
        echo "
        </div><!--

        --><div style=\"display: inline-block; width: 50%; text-align: center; margin-bottom: 1%;\">
            ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "logicielCheckbox", array()), 'label', array("label" => "Logiciel"));
        echo "
            ";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "logicielCheckbox", array()), 'errors');
        echo "
            ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "logicielCheckbox", array()), 'widget');
        echo "
        </div>

        <div style=\"display: none; width: 50%; text-align: center; margin-bottom: 3%; float: left;\">
            ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "materielList", array()), 'label', array("label" => "Type de matériel"));
        echo " <br />
            ";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "materielList", array()), 'errors');
        echo "
            ";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "materielList", array()), 'widget');
        echo "
        </div><!--

        --><div style=\"display: none; width: 50%; text-align: center; margin-bottom: 3%; float: right;\">
            ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "logicielName", array()), 'label', array("label" => "Nom du/des logiciel(s)"));
        echo " <br />
            ";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "logicielName", array()), 'errors');
        echo "
            ";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "logicielName", array()), 'widget');
        echo "
        </div>

        <div style='padding-left: 15%; margin-bottom: 3%; clear: both;'>
            ";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "raison", array()), 'label', array("label" => "Raison de la demande"));
        echo " <br />
            ";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "raison", array()), 'errors');
        echo "
            ";
        // line 53
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "raison", array()), 'widget');
        echo "
        </div>

        <div style=\"display: inline-block; width: 50%; text-align: center; margin-bottom: 3%;\">
            ";
        // line 57
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "date", array()), 'label', array("label" => "Date désirée:"));
        echo "
            ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "date", array()), 'errors');
        echo "
            ";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "date", array()), 'widget', array("attr" => array("style" => "display: inline-block;")));
        echo "
        </div><!--

        --><div style=\"display: inline-block; width: 50%; text-align: center; margin-bottom: 3%;\">
            ";
        // line 63
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "mailSuperieur", array()), 'label', array("label" => "Mail du supérieur hiérarchique:"));
        echo "
            ";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "mailSuperieur", array()), 'errors');
        echo "
            ";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "mailSuperieur", array()), 'widget');
        echo "
        </div>

        <div style='text-align: center;'>       
            ";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), "Valider", array()), 'widget', array("attr" => array("class" => "boutonFormulaire", "style" => "font-size: 1vw")));
        echo "
        </div>

        ";
        // line 72
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formDemandeMateriel"]) ? $context["formDemandeMateriel"] : null), 'form_end');
        echo "
    </div>

    <script>
        \$(window).load(function () {
            // Détecte les changement sur la checkbox du matériel...
            \$('#form_materielCheckbox').change(function () {
                // ...Et fait apparaitre la liste de type de matériel.
                if (\$(this).is(':checked')) {
                    \$('#form_materielList').parent('div').css('display', 'inline-block');
                    \$('#form_materielList').attr('required', true);
                }
                // ...Et fait disparaitre la liste de type de matériel.
                else {
                    \$('#form_materielList').parent('div').hide();
                    \$('#form_materielList').attr('required', false);
                }
            });

            // Détecte les changement sur la checkbox de logiciel...
            \$('#form_logicielCheckbox').change(function () {
                // ...Et fait apparaitre la zone de texte de logiciel.
                if (\$(this).is(':checked')) {
                    \$('#form_logicielName').parent('div').css('display', 'inline-block');
                    \$('#form_logicielName').attr('required', true);
                }
                // ...Et fait disparaitre la zone de texte de logiciel.
                else {
                    \$('#form_logicielName').parent('div').hide();
                    \$('#form_logicielName').attr('required', false);
                }
            });

            // Lors de la validation du formulaire.
            \$('#form_Valider').click(function () {
                // Si aucune checkbox n'est cochée, affiche une message d'erreur et bloque l'envoi du formulaire.
                if (\$('#form_materielCheckbox:checked').length === 0 && \$('#form_logicielCheckbox:checked').length === 0) {
                    alert('Veuillez cocher au moins un type de contenu pour votre demande !');
                    return false;
                }
                // Si la date spécifié est inférieur à la date du jour, affiche une message d'erreur et bloque l'envoi du formulaire.
                if (new Date(\$('#form_date_year').val(), \$('#form_date_month').val() - 1, \$('#form_date_day').val()) < new Date()) {
                    alert('Veuillez entrer une date supérieur à la date du jour !');
                    return false;
                }
            });
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupportSI/Support/demandeMateriel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 72,  195 => 69,  188 => 65,  184 => 64,  180 => 63,  173 => 59,  169 => 58,  165 => 57,  158 => 53,  154 => 52,  150 => 51,  143 => 47,  139 => 46,  135 => 45,  128 => 41,  124 => 40,  120 => 39,  113 => 35,  109 => 34,  105 => 33,  98 => 29,  94 => 28,  90 => 27,  83 => 23,  79 => 22,  75 => 21,  68 => 17,  64 => 16,  60 => 15,  54 => 12,  50 => 11,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetSupportSI/Support/demandeMateriel.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\SupportSIBundle\\Resources\\views\\Support\\demandeMateriel.html.twig");
    }
}
