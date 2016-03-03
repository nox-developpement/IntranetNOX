<?php

/* NoxIntranetCommunicationBundle:Accueil:affichageImage.html.twig */
class __TwigTemplate_677aba48ccbbff3c60fb545db8fe220c91470d9c571bd7d18f09377e8831cdda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetCommunicationBundle:Accueil:affichageImage.html.twig", 1);
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
        $__internal_b71dc68a272588826d94ad10178539f29aee556f85272472217a01167ff8c036 = $this->env->getExtension("native_profiler");
        $__internal_b71dc68a272588826d94ad10178539f29aee556f85272472217a01167ff8c036->enter($__internal_b71dc68a272588826d94ad10178539f29aee556f85272472217a01167ff8c036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Accueil:affichageImage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b71dc68a272588826d94ad10178539f29aee556f85272472217a01167ff8c036->leave($__internal_b71dc68a272588826d94ad10178539f29aee556f85272472217a01167ff8c036_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_2e4b89f5be9e4a82bab6bbd23fb806a38cba98c68ecf3ac4dc0558c36e39bb39 = $this->env->getExtension("native_profiler");
        $__internal_2e4b89f5be9e4a82bab6bbd23fb806a38cba98c68ecf3ac4dc0558c36e39bb39->enter($__internal_2e4b89f5be9e4a82bab6bbd23fb806a38cba98c68ecf3ac4dc0558c36e39bb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_2e4b89f5be9e4a82bab6bbd23fb806a38cba98c68ecf3ac4dc0558c36e39bb39->leave($__internal_2e4b89f5be9e4a82bab6bbd23fb806a38cba98c68ecf3ac4dc0558c36e39bb39_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_c34da1f21d3d3e0c9100e8b7b8cb9197b5788fb9307b39b563c8ca8886a11828 = $this->env->getExtension("native_profiler");
        $__internal_c34da1f21d3d3e0c9100e8b7b8cb9197b5788fb9307b39b563c8ca8886a11828->enter($__internal_c34da1f21d3d3e0c9100e8b7b8cb9197b5788fb9307b39b563c8ca8886a11828_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_c34da1f21d3d3e0c9100e8b7b8cb9197b5788fb9307b39b563c8ca8886a11828->leave($__internal_c34da1f21d3d3e0c9100e8b7b8cb9197b5788fb9307b39b563c8ca8886a11828_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_03b655f27740eba7d319fd3b82d59c57ed348753e36ecb46e4388e016e31cbd6 = $this->env->getExtension("native_profiler");
        $__internal_03b655f27740eba7d319fd3b82d59c57ed348753e36ecb46e4388e016e31cbd6->enter($__internal_03b655f27740eba7d319fd3b82d59c57ed348753e36ecb46e4388e016e31cbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    ";
        // line 9
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/";
            // line 13
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "html", null, true);
            echo "', 'Gestionnaire de fichiers - ";
            echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
            echo "');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 17
        echo "
    <div id=\"divAffichageImages\">

        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 21
            echo "
            <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["image"]), "html", null, true);
            echo "\" class=\"downloadable\" />

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    </div>

";
        
        $__internal_03b655f27740eba7d319fd3b82d59c57ed348753e36ecb46e4388e016e31cbd6->leave($__internal_03b655f27740eba7d319fd3b82d59c57ed348753e36ecb46e4388e016e31cbd6_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetCommunicationBundle:Accueil:affichageImage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 25,  97 => 22,  94 => 21,  90 => 20,  85 => 17,  76 => 13,  69 => 9,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}{{ dossier }}{% endblock %}*/
/* */
/* {% block messageAccueil %}{{ dossier }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     {% if is_granted('ROLE_COMMUNICATION') %} */
/* */
/*         <div id="menuAdminNewsSI" class='menuAdmin'>*/
/*             <h3> Interface de gestion de contenu </h3>*/
/*             <a onclick="openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/{{ config }}', 'Gestionnaire de fichiers - {{ dossier }}');"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>*/
/*         </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <div id="divAffichageImages">*/
/* */
/*         {% for image in images %}*/
/* */
/*             <img src="{{ asset(image) }}" class="downloadable" />*/
/* */
/*         {% endfor %}*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
