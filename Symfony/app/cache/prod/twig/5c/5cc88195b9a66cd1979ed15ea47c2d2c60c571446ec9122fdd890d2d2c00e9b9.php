<?php

/* NoxIntranetAdministrationBundle:Administration:uploadFichierHierarchieRH.html.twig */
class __TwigTemplate_223b02385648f7d61c974d31eeb6e9347a1617a1d88923b5eaf3081fb13b3990 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:Administration:uploadFichierHierarchieRH.html.twig", 1);
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
        echo "Upload fichier hiérarchie RH";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Upload fichier hiérarchie RH";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "    <div style='width: 70%; margin: auto; text-align: center;'>
        ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formUpload"]) ? $context["formUpload"] : null), 'form_start', array("attr" => array("style" => "width: 70%; margin: auto; text-align: center; background-color: rgba(255,255,255, 0.6); border: 2px outset #1F4E79;")));
        echo "
        ";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUpload"]) ? $context["formUpload"] : null), "fichierRH", array()), 'label', array("label" => "Envoi d'un nouveau fichier de hiérarchie."));
        echo "<br />
        <p style='margin: 0; color: red;'>Veillez à respecter la syntaxe du fichier pour le bon fonctionnement de la lecture du fichier, le modèle est disponible <a href='";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["pathExemple"]) ? $context["pathExemple"] : null), "html", null, true);
        echo "' target='_blank' style='color: red;'>ici</a>.</p>
        <p style='margin: 0; color: red;'>Le fichier doit être au format 'xlsx'.</p>
        ";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUpload"]) ? $context["formUpload"] : null), "fichierRH", array()), 'widget', array("attr" => array("style" => "margin-top: 1%; margin-bottom: 3%;")));
        echo "<br />
        ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUpload"]) ? $context["formUpload"] : null), "envoiFichier", array()), 'widget', array("attr" => array("class" => "boutonFormulaire")));
        echo "
        ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formUpload"]) ? $context["formUpload"] : null), 'form_end');
        echo "
        <p style='margin-top: 3%; margin-bottom: 5%;'>Vous pouvez <span style='font-weight: bold;'>télécharger le fichier courant</span> en <a href='";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["pathFichierHierarchie"]) ? $context["pathFichierHierarchie"] : null), "html", null, true);
        echo "' target='_blank' style='color: #1F4E79;'>cliquant ici</a>.</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:Administration:uploadFichierHierarchieRH.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 16,  69 => 15,  65 => 14,  61 => 13,  56 => 11,  52 => 10,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetAdministrationBundle:Administration:uploadFichierHierarchieRH.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle/Resources/views/Administration/uploadFichierHierarchieRH.html.twig");
    }
}
