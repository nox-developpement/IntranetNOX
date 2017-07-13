<?php

/* @NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreationinfos.html.twig */
class __TwigTemplate_c8b69652fd62c5563a94fc777342f016d5fa757fb543711eb4451b759fd9e626 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreationinfos.html.twig", 1);
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
        echo " Informations sur le suivi ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Informations sur le suivi";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "
    <div class=\"DivCreationSuiviRetour\">
        <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_assistant_affaire_nouvelle_choix_interlocuteur", array("IdSuivi" => (isset($context["IdSuivi"]) ? $context["IdSuivi"] : null))), "html", null, true);
        echo "\"><img src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Left-Arrow-48.png"), "html", null, true);
        echo "' alt='Flêche retour'>Retourner au choix de l'interlocuteur</a>
    </div>

    <div id=\"DivFormulaireInfoSuivi\">

        ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("attr" => array("class" => "formulaireInfoSuivi")));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "

        <fieldset>

            <legend>Suivi</legend>

            <p style='margin: 0;'>

                ";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Marche", array()), 'label', array("label_attr" => array("class" => "labelFormulaireInfoSuivi"), "label" => "Marché :"));
        echo "
                ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Marche", array()), 'errors');
        echo "
                ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Marche", array()), 'widget', array("attr" => array("class" => "textFormulaireInfoSuivi champInfoSuivi")));
        echo "<!--

                --><br /><!--

                -->";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NoCommande", array()), 'label', array("label_attr" => array("class" => "labelFormulaireInfoSuivi"), "label" => "N°Commande :"));
        echo "
                ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NoCommande", array()), 'errors');
        echo "
                ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NoCommande", array()), 'widget', array("attr" => array("class" => "textFormulaireInfoSuivi champInfoSuivi")));
        echo "<!--

                --><br /><!--

                -->";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NoClient", array()), 'label', array("label_attr" => array("class" => "labelFormulaireInfoSuivi"), "label" => "N°Client :"));
        echo "
                ";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NoClient", array()), 'errors');
        echo "
                ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NoClient", array()), 'widget', array("attr" => array("class" => "textFormulaireInfoSuivi champInfoSuivi")));
        echo "<!--

                --><br /><!--

                -->";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Commune", array()), 'label', array("label_attr" => array("class" => "labelFormulaireInfoSuivi"), "label" => "Commune :"));
        echo "
                ";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Commune", array()), 'errors');
        echo "
                ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Commune", array()), 'widget', array("attr" => array("class" => "textFormulaireInfoSuivi champInfoSuivi")));
        echo "<!--

                --><br /><!--

                -->";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Objet", array()), 'label', array("label_attr" => array("class" => "labelFormulaireInfoSuivi"), "label" => "Objet :"));
        echo "
                ";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Objet", array()), 'errors');
        echo "
                ";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Objet", array()), 'widget', array("attr" => array("class" => "textFormulaireInfoSuivi champInfoSuivi")));
        echo "<!--

                --><br /><!--
 
                -->";
        // line 54
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NoINGEDIABEP", array()), 'label', array("label_attr" => array("class" => "labelFormulaireInfoSuivi"), "label" => "N°INGEDIA BEP :"));
        echo "
                ";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NoINGEDIABEP", array()), 'errors');
        echo "
                ";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "NoINGEDIABEP", array()), 'widget', array("attr" => array("class" => "textFormulaireInfoSuivi champInfoSuivi")));
        echo "<!--

                --><br /><!--
                -->";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Estimatif", array()), 'label', array("label_attr" => array("class" => "labelFormulaireInfoSuivi"), "label" => "Estimatif :"));
        echo "<!--
                -->";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Estimatif", array()), 'errors');
        echo "<!--
                -->";
        // line 61
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Estimatif", array()), 'widget', array("attr" => array("class" => "textFormulaireInfoSuivi champInfoSuivi")));
        echo "<!--

                --><br /><!--
                
                -->";
        // line 65
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "Valider", array()), 'widget', array("attr" => array("class" => "boutonFormulaire champInfoSuivi", "style" => "margin-top: 1%;")));
        echo "

            </p>

        </fieldset> 

        ";
        // line 71
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreationinfos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 71,  178 => 65,  171 => 61,  167 => 60,  163 => 59,  157 => 56,  153 => 55,  149 => 54,  142 => 50,  138 => 49,  134 => 48,  127 => 44,  123 => 43,  119 => 42,  112 => 38,  108 => 37,  104 => 36,  97 => 32,  93 => 31,  89 => 30,  82 => 26,  78 => 25,  74 => 24,  63 => 16,  59 => 15,  49 => 10,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetRessources/AssistantAffaire/NouveauSuivi/assistantaffairecreationinfos.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle\\Resources\\views\\AssistantAffaire\\NouveauSuivi\\assistantaffairecreationinfos.html.twig");
    }
}
