<?php

/* @NoxIntranetSupportSI/Support/demandeConfirmationDSI.html.twig */
class __TwigTemplate_1acf86201e99078db904bcc6cb262e44b5a0dda07e35152800457337faa1c39e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupportSI/Support/demandeConfirmationDSI.html.twig", 1);
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
        // line 4
        echo "    Validation DSI
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Validation DSI";
    }

    // line 9
    public function block_contenu($context, array $blocks = array())
    {
        // line 10
        echo "
    <div style='font-size: 0.8vw;'> 
        ";
        // line 12
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("style" => "border: none; padding: 0;")));
        echo "
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        <fieldset style='border: 2px outset #1F4E79; background-color: rgba(255,255,255, 0.6); padding: 2%;'>

            <legend>Demande n°";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["numOrdre"]) ? $context["numOrdre"] : null), "html", null, true);
        echo "</legend>

            <div style=\"display: inline-block; width: 50%; text-align: center; margin-bottom: 3%;\">
                ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agence", array()), 'label', array("label" => "Agence:"));
        echo "
                ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agence", array()), 'errors');
        echo "
                ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "agence", array()), 'widget', array("attr" => array("style" => "text-align: center;")));
        echo "
            </div><!--
    
            --><div style=\"display: inline-block; width: 50%; text-align: center; margin-bottom: 3%;\">
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "demandeur", array()), 'label', array("label" => "Collaborateur:"));
        echo "
                ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "demandeur", array()), 'errors');
        echo "
                ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "demandeur", array()), 'widget', array("attr" => array("style" => "text-align: center;")));
        echo "
            </div>

            ";
        // line 31
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "materiel", array()) != null)) {
            // line 32
            echo "                <div style=\"display: inline-block; width: 50%; text-align: center; margin-bottom: 3%; float: left;\">
                    ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "materiel", array()), 'label', array("label" => "Matériel"));
            echo " <br />
                    ";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "materiel", array()), 'errors');
            echo "
                    ";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "materiel", array()), 'widget', array("attr" => array("style" => "text-align: center;")));
            echo "
                </div>
            ";
        }
        // line 38
        echo "
            ";
        // line 39
        if (($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "logiciel", array()) != null)) {
            // line 40
            echo "                <div style=\"display: inline-block; width: 50%; text-align: center; margin-bottom: 3%; float: right;\">
                    ";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "logiciel", array()), 'label', array("label" => "Logiciel"));
            echo " <br />
                    ";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "logiciel", array()), 'errors');
            echo "
                    ";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "logiciel", array()), 'widget');
            echo "
                </div>
            ";
        }
        // line 46
        echo "
            <div style='padding-left: 15%; margin-bottom: 3%; clear: both;'>
                ";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "raison", array()), 'label', array("label" => "Raison de la demande"));
        echo " <br />
                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "raison", array()), 'errors');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "raison", array()), 'widget');
        echo "
            </div>

            <div style=\"display: inline-block; text-align: center; margin-bottom: 3%; width: 50%;\">
                ";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'label', array("label" => "Date désirée:"));
        echo "
                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'errors');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date", array()), 'widget', array("attr" => array("style" => "text-align: center;")));
        echo "
            </div><!--
    
            --><div style=\"display: inline-block; text-align: center; margin-bottom: 3%;  width: 50%;\">
                ";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emailSuperieur", array()), 'label', array("label" => "Mail du supérieur hiérarchique:"));
        echo "
                ";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emailSuperieur", array()), 'errors');
        echo "
                ";
        // line 62
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "emailSuperieur", array()), 'widget', array("attr" => array("style" => "text-align: center;")));
        echo "
            </div>

            <div style=\"text-align: center; margin-bottom: 3%;\">
                ";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix", array()), 'label', array("label" => "Si vous le souhaitez, entrez une suggestion de prix:"));
        echo "
                ";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix", array()), 'errors');
        echo "
                ";
        // line 68
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prix", array()), 'widget', array("attr" => array("style" => "text-align: center;")));
        echo " €
            </div>

            <div style='text-align: center;'>       
                ";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Refuser", array()), 'widget', array("attr" => array("class" => "boutonFormulaire", "style" => "font-size: 1vw")));
        echo "
                ";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Valider", array()), 'widget', array("attr" => array("class" => "boutonFormulaire", "style" => "font-size: 1vw")));
        echo "
            </div>

        </fieldset>

        ";
        // line 78
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupportSI/Support/demandeConfirmationDSI.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 78,  206 => 73,  202 => 72,  195 => 68,  191 => 67,  187 => 66,  180 => 62,  176 => 61,  172 => 60,  165 => 56,  161 => 55,  157 => 54,  150 => 50,  146 => 49,  142 => 48,  138 => 46,  132 => 43,  128 => 42,  124 => 41,  121 => 40,  119 => 39,  116 => 38,  110 => 35,  106 => 34,  102 => 33,  99 => 32,  97 => 31,  91 => 28,  87 => 27,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 17,  55 => 13,  51 => 12,  47 => 10,  44 => 9,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetSupportSI/Support/demandeConfirmationDSI.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\SupportSIBundle\\Resources\\views\\Support\\demandeConfirmationDSI.html.twig");
    }
}
