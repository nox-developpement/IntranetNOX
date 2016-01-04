<?php

/* NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig */
class __TwigTemplate_9e3ea0d11298d8819506e178e3f6adbc9f5f5f29bb67999ca95bbfccfa9d59a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig", 1);
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
        $__internal_a1409fbfaf7fc71671061cae87b08ef3ba1b357b090bcba03046d620eb97b8ac = $this->env->getExtension("native_profiler");
        $__internal_a1409fbfaf7fc71671061cae87b08ef3ba1b357b090bcba03046d620eb97b8ac->enter($__internal_a1409fbfaf7fc71671061cae87b08ef3ba1b357b090bcba03046d620eb97b8ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1409fbfaf7fc71671061cae87b08ef3ba1b357b090bcba03046d620eb97b8ac->leave($__internal_a1409fbfaf7fc71671061cae87b08ef3ba1b357b090bcba03046d620eb97b8ac_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_778fa243ca9b60a8ccdcbb0606723c79da3e1b881a8d89120605543630a7b093 = $this->env->getExtension("native_profiler");
        $__internal_778fa243ca9b60a8ccdcbb0606723c79da3e1b881a8d89120605543630a7b093->enter($__internal_778fa243ca9b60a8ccdcbb0606723c79da3e1b881a8d89120605543630a7b093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration DB
";
        
        $__internal_778fa243ca9b60a8ccdcbb0606723c79da3e1b881a8d89120605543630a7b093->leave($__internal_778fa243ca9b60a8ccdcbb0606723c79da3e1b881a8d89120605543630a7b093_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_c073cebbc6e687d0fda0c99ba82d3484fe9aed03bc4c1fc41dba8e56fd9a1603 = $this->env->getExtension("native_profiler");
        $__internal_c073cebbc6e687d0fda0c99ba82d3484fe9aed03bc4c1fc41dba8e56fd9a1603->enter($__internal_c073cebbc6e687d0fda0c99ba82d3484fe9aed03bc4c1fc41dba8e56fd9a1603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration base de données utilisateurs";
        
        $__internal_c073cebbc6e687d0fda0c99ba82d3484fe9aed03bc4c1fc41dba8e56fd9a1603->leave($__internal_c073cebbc6e687d0fda0c99ba82d3484fe9aed03bc4c1fc41dba8e56fd9a1603_prof);

    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_acfd5beecdacbaf456c9e2f6ec6a7e79ce9c74f9b27ec77ed5514d8073c11dd7 = $this->env->getExtension("native_profiler");
        $__internal_acfd5beecdacbaf456c9e2f6ec6a7e79ce9c74f9b27ec77ed5514d8073c11dd7->enter($__internal_acfd5beecdacbaf456c9e2f6ec6a7e79ce9c74f9b27ec77ed5514d8073c11dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Cliquer sur l'icône pour mettre à jour la base de données utilisateurs.";
        
        $__internal_acfd5beecdacbaf456c9e2f6ec6a7e79ce9c74f9b27ec77ed5514d8073c11dd7->leave($__internal_acfd5beecdacbaf456c9e2f6ec6a7e79ce9c74f9b27ec77ed5514d8073c11dd7_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_febbde48d19a5017971da39230243050a20542806b7aa627593160d8ac318999 = $this->env->getExtension("native_profiler");
        $__internal_febbde48d19a5017971da39230243050a20542806b7aa627593160d8ac318999->enter($__internal_febbde48d19a5017971da39230243050a20542806b7aa627593160d8ac318999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 11
        echo "
    <div class=\"iconContener\">

        ";
        // line 14
        if (((isset($context["confirmation"]) ? $context["confirmation"] : $this->getContext($context, "confirmation")) == true)) {
            // line 15
            echo "
            <!-- Annuler -->
            <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_userDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Annuler</figcaption>
                </figure>
            </a>

            <!-- Confirmer -->
            <a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("nox_intranet_user_updateDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Confirmer</figcaption>
                </figure>
            </a>

        ";
        } else {
            // line 41
            echo "
            <!-- Mise à jour base de données utilisateurs -->
            <a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("nox_intranet_user_verifupdateDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Refresh-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Refresh-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Refresh-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Mise à jour</figcaption>
                </figure>
            </a>

        ";
        }
        // line 55
        echo "
    </div>

    ";
        // line 58
        if (((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")) == true)) {
            // line 59
            echo "
        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["outputs"]) ? $context["outputs"] : $this->getContext($context, "outputs")));
            foreach ($context['_seq'] as $context["_key"] => $context["output"]) {
                // line 61
                echo "
            ";
                // line 62
                echo $context["output"];
                echo " 

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['output'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
    ";
        }
        // line 67
        echo "

";
        
        $__internal_febbde48d19a5017971da39230243050a20542806b7aa627593160d8ac318999->leave($__internal_febbde48d19a5017971da39230243050a20542806b7aa627593160d8ac318999_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 67,  194 => 65,  185 => 62,  182 => 61,  178 => 60,  175 => 59,  173 => 58,  168 => 55,  158 => 48,  154 => 47,  150 => 46,  144 => 43,  140 => 41,  130 => 34,  126 => 33,  122 => 32,  116 => 29,  106 => 22,  102 => 21,  98 => 20,  92 => 17,  88 => 15,  86 => 14,  81 => 11,  75 => 10,  63 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}*/
/*     Administration DB*/
/* {% endblock %}*/
/* */
/* {% block messageAccueil %}Administration base de données utilisateurs{% endblock %}*/
/* {% block sousMessageAccueil %}Cliquer sur l'icône pour mettre à jour la base de données utilisateurs.{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div class="iconContener">*/
/* */
/*         {% if confirmation == true %}*/
/* */
/*             <!-- Annuler -->*/
/*             <a href="{{ path('nox_intranet_administration_userDB') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Delete-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Delete-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Delete-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Annuler</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Confirmer -->*/
/*             <a href="{{ path('nox_intranet_user_updateDB') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Confirm-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Confirm-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Confirm-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Confirmer</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*         {% else %}*/
/* */
/*             <!-- Mise à jour base de données utilisateurs -->*/
/*             <a href="{{ path('nox_intranet_user_verifupdateDB') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Data-Refresh-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Refresh-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Refresh-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Mise à jour</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*         {% endif %}*/
/* */
/*     </div>*/
/* */
/*     {% if ajout == true %}*/
/* */
/*         {% for output in outputs %}*/
/* */
/*             {{ output|raw }} */
/* */
/*         {% endfor %}*/
/* */
/*     {% endif %}*/
/* */
/* */
/* {% endblock %}*/
