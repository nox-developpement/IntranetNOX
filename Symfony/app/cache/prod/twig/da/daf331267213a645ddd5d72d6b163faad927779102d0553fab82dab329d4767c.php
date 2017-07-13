<?php

/* NoxIntranetPointageBundle:Pointage:accessCollaborateurPointage.html.twig */
class __TwigTemplate_0311305ad29909b43148aec77a3ca22079a9ca6005f77383022993cbea03f9de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "NoxIntranetPointageBundle:Pointage:accessCollaborateurPointage.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Accéder au pointage d'un collaborateur ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Accéder au pointage d'un collaborateur";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        // line 8
        echo "    <div style='width: 30%; text-align: center; margin: auto;'>
        ";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAccessCollaborateurPointage"]) ? $context["formAccessCollaborateurPointage"] : null), 'form_start');
        echo "
        <p>
            ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAccessCollaborateurPointage"]) ? $context["formAccessCollaborateurPointage"] : null), "username", array()), 'label');
        echo "<br />
            ";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAccessCollaborateurPointage"]) ? $context["formAccessCollaborateurPointage"] : null), "username", array()), 'widget');
        echo "
        </p>
        <p>";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formAccessCollaborateurPointage"]) ? $context["formAccessCollaborateurPointage"] : null), "access", array()), 'widget');
        echo "</p>
        ";
        // line 15
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formAccessCollaborateurPointage"]) ? $context["formAccessCollaborateurPointage"] : null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "NoxIntranetPointageBundle:Pointage:accessCollaborateurPointage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 15,  62 => 14,  57 => 12,  53 => 11,  48 => 9,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetPointageBundle:Pointage:accessCollaborateurPointage.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\PointageBundle/Resources/views/Pointage/accessCollaborateurPointage.html.twig");
    }
}
