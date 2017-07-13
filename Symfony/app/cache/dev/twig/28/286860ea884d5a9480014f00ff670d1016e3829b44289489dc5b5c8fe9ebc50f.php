<?php

/* NoxIntranetAdministrationBundle:StatsVPN:uploadVPNFiles.html.twig */
class __TwigTemplate_6971c63398de6ef66f75703502300cf0f7046bf2a3655ddf1cbedd2a7d2efed0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:StatsVPN:uploadVPNFiles.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
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
        $__internal_a1bb2467c6234fc7645a621ea987d81954978406349d0291c1d164b499836f28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1bb2467c6234fc7645a621ea987d81954978406349d0291c1d164b499836f28->enter($__internal_a1bb2467c6234fc7645a621ea987d81954978406349d0291c1d164b499836f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:StatsVPN:uploadVPNFiles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1bb2467c6234fc7645a621ea987d81954978406349d0291c1d164b499836f28->leave($__internal_a1bb2467c6234fc7645a621ea987d81954978406349d0291c1d164b499836f28_prof);

    }

    // line 3
    public function block_style($context, array $blocks = array())
    {
        $__internal_b1ad78d69b62c1a4accb9cbf4ca0573b59d6f6918662a0b3c46c8f401faa914c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1ad78d69b62c1a4accb9cbf4ca0573b59d6f6918662a0b3c46c8f401faa914c->enter($__internal_b1ad78d69b62c1a4accb9cbf4ca0573b59d6f6918662a0b3c46c8f401faa914c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "style"));

        // line 4
        echo "    <style>
        form {
            display: inline-block;
            width: auto;
            padding: 1em;
            background-color: rgba(255,255,255,0.7);
        }
        
        #form_upload_vpn_container {
            text-align: center;
        }
    </style>
";
        
        $__internal_b1ad78d69b62c1a4accb9cbf4ca0573b59d6f6918662a0b3c46c8f401faa914c->leave($__internal_b1ad78d69b62c1a4accb9cbf4ca0573b59d6f6918662a0b3c46c8f401faa914c_prof);

    }

    // line 18
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_f3e72e4497fac5b85c2867f97a3d328fb7203e5b0e63b19bcbf8b0c6f5c1354a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e72e4497fac5b85c2867f97a3d328fb7203e5b0e63b19bcbf8b0c6f5c1354a->enter($__internal_f3e72e4497fac5b85c2867f97a3d328fb7203e5b0e63b19bcbf8b0c6f5c1354a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Upload fichiers VPN";
        
        $__internal_f3e72e4497fac5b85c2867f97a3d328fb7203e5b0e63b19bcbf8b0c6f5c1354a->leave($__internal_f3e72e4497fac5b85c2867f97a3d328fb7203e5b0e63b19bcbf8b0c6f5c1354a_prof);

    }

    // line 20
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_a7a8ae4e75ab06cecf79ea7fc94f12500413b1dac9aeddb050dca2027484190a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7a8ae4e75ab06cecf79ea7fc94f12500413b1dac9aeddb050dca2027484190a->enter($__internal_a7a8ae4e75ab06cecf79ea7fc94f12500413b1dac9aeddb050dca2027484190a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Upload fichiers VPN";
        
        $__internal_a7a8ae4e75ab06cecf79ea7fc94f12500413b1dac9aeddb050dca2027484190a->leave($__internal_a7a8ae4e75ab06cecf79ea7fc94f12500413b1dac9aeddb050dca2027484190a_prof);

    }

    // line 22
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_07479dfea4c0227270a01ed5af52158bbd87094e8fc6ae2b8e23b67b4a5a231b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07479dfea4c0227270a01ed5af52158bbd87094e8fc6ae2b8e23b67b4a5a231b->enter($__internal_07479dfea4c0227270a01ed5af52158bbd87094e8fc6ae2b8e23b67b4a5a231b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 23
        echo "
    <div id=\"form_upload_vpn_container\">
        ";
        // line 25
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formUploadVPN"]) ? $context["formUploadVPN"] : $this->getContext($context, "formUploadVPN")), 'form_start');
        echo "
        <p>
            ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUploadVPN"]) ? $context["formUploadVPN"] : $this->getContext($context, "formUploadVPN")), "File", array()), 'widget');
        echo "
        </p>
        <p style=\"margin-bottom: 0;\">
            ";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUploadVPN"]) ? $context["formUploadVPN"] : $this->getContext($context, "formUploadVPN")), "Upload", array()), 'widget');
        echo "
            ";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUploadVPN"]) ? $context["formUploadVPN"] : $this->getContext($context, "formUploadVPN")), "Export", array()), 'widget');
        echo "
        </p>

        ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formUploadVPN"]) ? $context["formUploadVPN"] : $this->getContext($context, "formUploadVPN")), 'form_end');
        echo "
    </div>
";
        
        $__internal_07479dfea4c0227270a01ed5af52158bbd87094e8fc6ae2b8e23b67b4a5a231b->leave($__internal_07479dfea4c0227270a01ed5af52158bbd87094e8fc6ae2b8e23b67b4a5a231b_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:StatsVPN:uploadVPNFiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  111 => 31,  107 => 30,  101 => 27,  96 => 25,  92 => 23,  86 => 22,  74 => 20,  62 => 18,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block style %}
    <style>
        form {
            display: inline-block;
            width: auto;
            padding: 1em;
            background-color: rgba(255,255,255,0.7);
        }
        
        #form_upload_vpn_container {
            text-align: center;
        }
    </style>
{% endblock %}

{% block titrePage %}Upload fichiers VPN{% endblock %}

{% block messageAccueil %}Upload fichiers VPN{% endblock %}

{% block contenu %}

    <div id=\"form_upload_vpn_container\">
        {{ form_start(formUploadVPN) }}
        <p>
            {{ form_widget(formUploadVPN.File) }}
        </p>
        <p style=\"margin-bottom: 0;\">
            {{ form_widget(formUploadVPN.Upload) }}
            {{ form_widget(formUploadVPN.Export) }}
        </p>

        {{ form_end(formUploadVPN) }}
    </div>
{% endblock %}", "NoxIntranetAdministrationBundle:StatsVPN:uploadVPNFiles.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AdministrationBundle/Resources/views/StatsVPN/uploadVPNFiles.html.twig");
    }
}
