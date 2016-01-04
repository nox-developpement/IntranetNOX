<?php

/* NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig */
class __TwigTemplate_8a06fa30a49082fd6b1aac1c20646cda917c24ff8c0a626c9a392290e340a2a1 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        // line 4
        echo "    Administration DB
";
    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration base de données utilisateurs";
    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "Cliquer sur l'icône pour mettre à jour la base de données utilisateurs.";
    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        // line 11
        echo "
    <div class=\"iconContener\">

        ";
        // line 14
        if (((isset($context["confirmation"]) ? $context["confirmation"] : null) == true)) {
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
        if (((isset($context["ajout"]) ? $context["ajout"] : null) == true)) {
            // line 59
            echo "
        ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["outputs"]) ? $context["outputs"] : null));
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
        return array (  171 => 67,  167 => 65,  158 => 62,  155 => 61,  151 => 60,  148 => 59,  146 => 58,  141 => 55,  131 => 48,  127 => 47,  123 => 46,  117 => 43,  113 => 41,  103 => 34,  99 => 33,  95 => 32,  89 => 29,  79 => 22,  75 => 21,  71 => 20,  65 => 17,  61 => 15,  59 => 14,  54 => 11,  51 => 10,  45 => 8,  39 => 7,  34 => 4,  31 => 3,  11 => 1,);
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
