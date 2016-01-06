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
        $__internal_0aefe908d969d523164bdfd3d83e6b30874728f6c2b45ab9357bbb7a5a89cd27 = $this->env->getExtension("native_profiler");
        $__internal_0aefe908d969d523164bdfd3d83e6b30874728f6c2b45ab9357bbb7a5a89cd27->enter($__internal_0aefe908d969d523164bdfd3d83e6b30874728f6c2b45ab9357bbb7a5a89cd27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:Administration:administrationUserDB.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aefe908d969d523164bdfd3d83e6b30874728f6c2b45ab9357bbb7a5a89cd27->leave($__internal_0aefe908d969d523164bdfd3d83e6b30874728f6c2b45ab9357bbb7a5a89cd27_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_8e393a3a27884f15500e8419b991d3467e41768bfd26e3de2989e0549d53b913 = $this->env->getExtension("native_profiler");
        $__internal_8e393a3a27884f15500e8419b991d3467e41768bfd26e3de2989e0549d53b913->enter($__internal_8e393a3a27884f15500e8419b991d3467e41768bfd26e3de2989e0549d53b913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Administration DB
";
        
        $__internal_8e393a3a27884f15500e8419b991d3467e41768bfd26e3de2989e0549d53b913->leave($__internal_8e393a3a27884f15500e8419b991d3467e41768bfd26e3de2989e0549d53b913_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_53e552a6802882e5fc5f202192a518c59dd93844117ec4193b0c32dce5381fcd = $this->env->getExtension("native_profiler");
        $__internal_53e552a6802882e5fc5f202192a518c59dd93844117ec4193b0c32dce5381fcd->enter($__internal_53e552a6802882e5fc5f202192a518c59dd93844117ec4193b0c32dce5381fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration base de données utilisateurs";
        
        $__internal_53e552a6802882e5fc5f202192a518c59dd93844117ec4193b0c32dce5381fcd->leave($__internal_53e552a6802882e5fc5f202192a518c59dd93844117ec4193b0c32dce5381fcd_prof);

    }

    // line 8
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_309d655bc98c8d7e5f4fd9d34003e290616bcca00496c9da0dc3463b6b19ade9 = $this->env->getExtension("native_profiler");
        $__internal_309d655bc98c8d7e5f4fd9d34003e290616bcca00496c9da0dc3463b6b19ade9->enter($__internal_309d655bc98c8d7e5f4fd9d34003e290616bcca00496c9da0dc3463b6b19ade9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Cliquer sur l'icône pour mettre à jour la base de données utilisateurs.";
        
        $__internal_309d655bc98c8d7e5f4fd9d34003e290616bcca00496c9da0dc3463b6b19ade9->leave($__internal_309d655bc98c8d7e5f4fd9d34003e290616bcca00496c9da0dc3463b6b19ade9_prof);

    }

    // line 10
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_fde5cdf1d40941e84365f038fd157233d6815b5faa7e5a92f76935fdf1204b59 = $this->env->getExtension("native_profiler");
        $__internal_fde5cdf1d40941e84365f038fd157233d6815b5faa7e5a92f76935fdf1204b59->enter($__internal_fde5cdf1d40941e84365f038fd157233d6815b5faa7e5a92f76935fdf1204b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 11
        echo "
    <div class=\"iconContener\">

        ";
        // line 14
        if (((isset($context["confirmation"]) ? $context["confirmation"] : $this->getContext($context, "confirmation")) == true)) {
            // line 15
            echo "
            <!-- Confirmer -->
            <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("nox_intranet_user_updateDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Confirm-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Confirmer</figcaption>
                </figure>
            </a>

            <!-- Annuler -->
            <a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("nox_intranet_administration_userDB");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Annuler</figcaption>
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

            <!-- Restauration des bases de données -->
            <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("nox_intranet_restaurationBDD");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Find-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Find-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Find-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Restauration BDD</figcaption>
                </figure>
            </a>

            <!-- Sauvegarde des bases de données -->
            <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("nox_intranet_sauvegardeBDD");
            echo "\" class=\"icon\">
                <figure>
                    <img 
                        src=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Copy-128.png"), "html", null, true);
            echo "\" 
                        onmouseover=\"this.src = '";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Copy-128-hover.png"), "html", null, true);
            echo "';\" 
                        onmouseout=\"this.src = '";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Copy-128.png"), "html", null, true);
            echo "';\"
                        > 
                    <figcaption>Sauvegarde BDD</figcaption>
                </figure>
            </a>

        ";
        }
        // line 79
        echo "
    </div>

    ";
        // line 82
        if (((isset($context["ajout"]) ? $context["ajout"] : $this->getContext($context, "ajout")) == true)) {
            // line 83
            echo "
        ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["outputs"]) ? $context["outputs"] : $this->getContext($context, "outputs")));
            foreach ($context['_seq'] as $context["_key"] => $context["output"]) {
                // line 85
                echo "
            ";
                // line 86
                echo $context["output"];
                echo " 

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['output'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "
    ";
        }
        // line 91
        echo "

";
        
        $__internal_fde5cdf1d40941e84365f038fd157233d6815b5faa7e5a92f76935fdf1204b59->leave($__internal_fde5cdf1d40941e84365f038fd157233d6815b5faa7e5a92f76935fdf1204b59_prof);

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
        return array (  246 => 91,  242 => 89,  233 => 86,  230 => 85,  226 => 84,  223 => 83,  221 => 82,  216 => 79,  206 => 72,  202 => 71,  198 => 70,  192 => 67,  182 => 60,  178 => 59,  174 => 58,  168 => 55,  158 => 48,  154 => 47,  150 => 46,  144 => 43,  140 => 41,  130 => 34,  126 => 33,  122 => 32,  116 => 29,  106 => 22,  102 => 21,  98 => 20,  92 => 17,  88 => 15,  86 => 14,  81 => 11,  75 => 10,  63 => 8,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
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
/*             <!-- Restauration des bases de données -->*/
/*             <a href="{{ path('nox_intranet_restaurationBDD') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Data-Find-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Find-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Find-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Restauration BDD</figcaption>*/
/*                 </figure>*/
/*             </a>*/
/* */
/*             <!-- Sauvegarde des bases de données -->*/
/*             <a href="{{ path('nox_intranet_sauvegardeBDD') }}" class="icon">*/
/*                 <figure>*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetadministration/images/Data-Copy-128.png') }}" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Copy-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetadministration/images/Data-Copy-128.png') }}';"*/
/*                         > */
/*                     <figcaption>Sauvegarde BDD</figcaption>*/
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
