<?php

/* NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig */
class __TwigTemplate_ea76d7f553f790a8ebae3f7ef89b97b8c2986edf94a46aa49a12434af3ce4546 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig", 1);
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
        $__internal_4f1ed4d331db2fa1bada3b1812d629c94268aa7bb9031da83940f934b88fcce9 = $this->env->getExtension("native_profiler");
        $__internal_4f1ed4d331db2fa1bada3b1812d629c94268aa7bb9031da83940f934b88fcce9->enter($__internal_4f1ed4d331db2fa1bada3b1812d629c94268aa7bb9031da83940f934b88fcce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f1ed4d331db2fa1bada3b1812d629c94268aa7bb9031da83940f934b88fcce9->leave($__internal_4f1ed4d331db2fa1bada3b1812d629c94268aa7bb9031da83940f934b88fcce9_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_ecf9ffe709fc8fa86aab5fdfc4f94407622f94b0ec5179a818296291b137fbac = $this->env->getExtension("native_profiler");
        $__internal_ecf9ffe709fc8fa86aab5fdfc4f94407622f94b0ec5179a818296291b137fbac->enter($__internal_ecf9ffe709fc8fa86aab5fdfc4f94407622f94b0ec5179a818296291b137fbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Liens";
        
        $__internal_ecf9ffe709fc8fa86aab5fdfc4f94407622f94b0ec5179a818296291b137fbac->leave($__internal_ecf9ffe709fc8fa86aab5fdfc4f94407622f94b0ec5179a818296291b137fbac_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_9197572e062eaeba6172edd86f99b7357e89c895476407557d4d21ef88d50474 = $this->env->getExtension("native_profiler");
        $__internal_9197572e062eaeba6172edd86f99b7357e89c895476407557d4d21ef88d50474->enter($__internal_9197572e062eaeba6172edd86f99b7357e89c895476407557d4d21ef88d50474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration Liens";
        
        $__internal_9197572e062eaeba6172edd86f99b7357e89c895476407557d4d21ef88d50474->leave($__internal_9197572e062eaeba6172edd86f99b7357e89c895476407557d4d21ef88d50474_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_24e895020428020316ecfc9438838ccf4ae9d54184324b208b4353d1631b8427 = $this->env->getExtension("native_profiler");
        $__internal_24e895020428020316ecfc9438838ccf4ae9d54184324b208b4353d1631b8427->enter($__internal_24e895020428020316ecfc9438838ccf4ae9d54184324b208b4353d1631b8427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"divAdministrationUtilisateur\">

        <div id=\"administrationLien\">
            <form action='";
        // line 12
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ajout_lien");
        echo "' >
                <label for=\"lienlibelle\"> Ajouter un(e) lien/catégorie : </label>
                <input type=\"text\" name='lienlibelle' id=\"lienlibelle\" placeholder=\"Libellé du lien/catégorie\" />
                <input type=\"text\" name='lien' id=\"lien\" placeholder=\"Lien (optionnel)\" />
                <input type=\"text\" name='parent' id=\"parent\" placeholder=\"Libellé parent (optionnel)\" />
                <input type=\"submit\" name=\"Ajouter\" value=\"Ajouter\" class=\"boutonFormulaire\" >
            </form>
        </div>

        <table>

            <tr>
                <td> Libelle </td>
                <td> Type </td>
                <td> Parent </td>
                <td> Supprimer </td>
            </tr>

            ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")));
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 31
            echo "
                <tr>
                    <td> <p> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "libelle", array()), "html", null, true);
            echo " <p> </td>
                    <td> 
                         <p>
                            ";
            // line 36
            if (($this->getAttribute($context["lien"], "liens", array()) == null)) {
                // line 37
                echo "                                Catégorie
                            ";
            } else {
                // line 39
                echo "                                Lien (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "liens", array()), "html", null, true);
                echo ")
                            ";
            }
            // line 41
            echo "                        <p> 
                    </td>
                    <td> <p> ";
            // line 43
            if (($this->getAttribute($context["lien"], "parent", array()) == null)) {
                echo " Aucun ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "parent", array()), "html", null, true);
                echo " ";
            }
            echo " <p> </td>
                    <td> <a href='";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_suppression_lien", array("lienID" => $this->getAttribute($context["lien"], "id", array()))), "html", null, true);
            echo "'> <img id=\"suppressionLienImg\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Delete-48.png"), "html", null, true);
            echo "'> </a> </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "
        </table>

    </div>
";
        
        $__internal_24e895020428020316ecfc9438838ccf4ae9d54184324b208b4353d1631b8427->leave($__internal_24e895020428020316ecfc9438838ccf4ae9d54184324b208b4353d1631b8427_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 48,  133 => 44,  123 => 43,  119 => 41,  113 => 39,  109 => 37,  107 => 36,  101 => 33,  97 => 31,  93 => 30,  72 => 12,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}Administration Liens{% endblock %}*/
/* */
/* {% block messageAccueil %}Administration Liens{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divAdministrationUtilisateur">*/
/* */
/*         <div id="administrationLien">*/
/*             <form action='{{ path('nox_intranet_ajout_lien') }}' >*/
/*                 <label for="lienlibelle"> Ajouter un(e) lien/catégorie : </label>*/
/*                 <input type="text" name='lienlibelle' id="lienlibelle" placeholder="Libellé du lien/catégorie" />*/
/*                 <input type="text" name='lien' id="lien" placeholder="Lien (optionnel)" />*/
/*                 <input type="text" name='parent' id="parent" placeholder="Libellé parent (optionnel)" />*/
/*                 <input type="submit" name="Ajouter" value="Ajouter" class="boutonFormulaire" >*/
/*             </form>*/
/*         </div>*/
/* */
/*         <table>*/
/* */
/*             <tr>*/
/*                 <td> Libelle </td>*/
/*                 <td> Type </td>*/
/*                 <td> Parent </td>*/
/*                 <td> Supprimer </td>*/
/*             </tr>*/
/* */
/*             {% for lien in liens %}*/
/* */
/*                 <tr>*/
/*                     <td> <p> {{ lien.libelle }} <p> </td>*/
/*                     <td> */
/*                          <p>*/
/*                             {% if lien.liens == null %}*/
/*                                 Catégorie*/
/*                             {% else %}*/
/*                                 Lien ({{ lien.liens }})*/
/*                             {% endif %}*/
/*                         <p> */
/*                     </td>*/
/*                     <td> <p> {% if lien.parent == null %} Aucun {% else %} {{ lien.parent }} {% endif %} <p> </td>*/
/*                     <td> <a href='{{ path('nox_intranet_suppression_lien', {'lienID': lien.id}) }}'> <img id="suppressionLienImg" src='{{ asset('bundles/noxintranetadministration/images/Delete-48.png') }}'> </a> </td>*/
/*                 </tr>*/
/* */
/*             {% endfor %}*/
/* */
/*         </table>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
