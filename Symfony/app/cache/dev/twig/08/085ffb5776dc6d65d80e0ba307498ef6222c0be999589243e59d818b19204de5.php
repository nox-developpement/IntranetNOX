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
        $__internal_27e3f4ed4219d3c37d5725fe09abe17b01670641c3060c527e9fe1e5ca8d5795 = $this->env->getExtension("native_profiler");
        $__internal_27e3f4ed4219d3c37d5725fe09abe17b01670641c3060c527e9fe1e5ca8d5795->enter($__internal_27e3f4ed4219d3c37d5725fe09abe17b01670641c3060c527e9fe1e5ca8d5795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetCommunicationBundle:Accueil:affichageImage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27e3f4ed4219d3c37d5725fe09abe17b01670641c3060c527e9fe1e5ca8d5795->leave($__internal_27e3f4ed4219d3c37d5725fe09abe17b01670641c3060c527e9fe1e5ca8d5795_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_4134d9a041874360fe39f5dc3542333a76b847b17af283208bdc1b88ebb51d79 = $this->env->getExtension("native_profiler");
        $__internal_4134d9a041874360fe39f5dc3542333a76b847b17af283208bdc1b88ebb51d79->enter($__internal_4134d9a041874360fe39f5dc3542333a76b847b17af283208bdc1b88ebb51d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_4134d9a041874360fe39f5dc3542333a76b847b17af283208bdc1b88ebb51d79->leave($__internal_4134d9a041874360fe39f5dc3542333a76b847b17af283208bdc1b88ebb51d79_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_87c23d74ab2a48065847f12cf9247106cea3676d1ac2daad3c42b1c8d8fb1878 = $this->env->getExtension("native_profiler");
        $__internal_87c23d74ab2a48065847f12cf9247106cea3676d1ac2daad3c42b1c8d8fb1878->enter($__internal_87c23d74ab2a48065847f12cf9247106cea3676d1ac2daad3c42b1c8d8fb1878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
        
        $__internal_87c23d74ab2a48065847f12cf9247106cea3676d1ac2daad3c42b1c8d8fb1878->leave($__internal_87c23d74ab2a48065847f12cf9247106cea3676d1ac2daad3c42b1c8d8fb1878_prof);

    }

    // line 6
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_bc51cc32ad2f5498c8b1103e4b9041f26760d8a7bf7715ad7962c86b350e9413 = $this->env->getExtension("native_profiler");
        $__internal_bc51cc32ad2f5498c8b1103e4b9041f26760d8a7bf7715ad7962c86b350e9413->enter($__internal_bc51cc32ad2f5498c8b1103e4b9041f26760d8a7bf7715ad7962c86b350e9413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Pour télécharger une image faite un clic-droit dessus puis \"Enregistrer l'image sous...\"";
        
        $__internal_bc51cc32ad2f5498c8b1103e4b9041f26760d8a7bf7715ad7962c86b350e9413->leave($__internal_bc51cc32ad2f5498c8b1103e4b9041f26760d8a7bf7715ad7962c86b350e9413_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_e4e2079d916749ea7f5aad2d2ca32f502c8db43e3c7cb8a9da70d409d03051ab = $this->env->getExtension("native_profiler");
        $__internal_e4e2079d916749ea7f5aad2d2ca32f502c8db43e3c7cb8a9da70d409d03051ab->enter($__internal_e4e2079d916749ea7f5aad2d2ca32f502c8db43e3c7cb8a9da70d409d03051ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 9
        echo "
    ";
        // line 10
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            echo " 

        <div id=\"menuAdminNewsSI\" class='menuAdmin'>
            <h3> Interface de gestion de contenu </h3>
            <a onclick=\"openFichiersPopUpWindow('http://' + document.location.hostname + '/Symfony/web/app.php/elfinder/";
            // line 14
            echo twig_escape_filter($this->env, (isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "html", null, true);
            echo "', 'Gestionnaire de fichiers - ";
            echo twig_escape_filter($this->env, (isset($context["dossier"]) ? $context["dossier"] : $this->getContext($context, "dossier")), "html", null, true);
            echo "');\"> <h3> Ouvrir le gestionnaire de fichier </h3> </a>
        </div>

    ";
        }
        // line 18
        echo "
    <div id=\"divAffichageImages\">

        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 22
            echo "
            <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["image"]), "html", null, true);
            echo "\" class=\"downloadable\" />

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
    </div>

";
        
        $__internal_e4e2079d916749ea7f5aad2d2ca32f502c8db43e3c7cb8a9da70d409d03051ab->leave($__internal_e4e2079d916749ea7f5aad2d2ca32f502c8db43e3c7cb8a9da70d409d03051ab_prof);

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
        return array (  119 => 26,  110 => 23,  107 => 22,  103 => 21,  98 => 18,  89 => 14,  82 => 10,  79 => 9,  73 => 8,  61 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}{{ dossier }}{% endblock %}*/
/* */
/* {% block messageAccueil %}{{ dossier }}{% endblock %}*/
/* {% block sousMessageAccueil %}Pour télécharger une image faite un clic-droit dessus puis "Enregistrer l'image sous..."{% endblock %}*/
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
