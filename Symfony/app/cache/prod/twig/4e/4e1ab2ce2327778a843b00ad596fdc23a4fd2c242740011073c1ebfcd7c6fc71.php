<?php

/* NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig */
class __TwigTemplate_d9262e7677151324b8e42b3bbb304fa613e5cf71018430257853d8043b6bc9d9 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo "Administration Liens";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration Liens";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : null));
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
        return array (  124 => 48,  112 => 44,  102 => 43,  98 => 41,  92 => 39,  88 => 37,  86 => 36,  80 => 33,  76 => 31,  72 => 30,  51 => 12,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
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
