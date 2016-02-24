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
        $__internal_b05921e14f74dd2f5658c7ca4d929c1187b6ebfd109a7e9372a60d0d28532d4d = $this->env->getExtension("native_profiler");
        $__internal_b05921e14f74dd2f5658c7ca4d929c1187b6ebfd109a7e9372a60d0d28532d4d->enter($__internal_b05921e14f74dd2f5658c7ca4d929c1187b6ebfd109a7e9372a60d0d28532d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationLiens:administrationLiens.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b05921e14f74dd2f5658c7ca4d929c1187b6ebfd109a7e9372a60d0d28532d4d->leave($__internal_b05921e14f74dd2f5658c7ca4d929c1187b6ebfd109a7e9372a60d0d28532d4d_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_f057966cb0ab40af982e1b480f766bf77afc553d3c26e9faa97be447912d2c59 = $this->env->getExtension("native_profiler");
        $__internal_f057966cb0ab40af982e1b480f766bf77afc553d3c26e9faa97be447912d2c59->enter($__internal_f057966cb0ab40af982e1b480f766bf77afc553d3c26e9faa97be447912d2c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Administration Liens";
        
        $__internal_f057966cb0ab40af982e1b480f766bf77afc553d3c26e9faa97be447912d2c59->leave($__internal_f057966cb0ab40af982e1b480f766bf77afc553d3c26e9faa97be447912d2c59_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_a8f37b6d17d30051813bd9af92825bd4bd2ded65a198f3e7970cf0397d597e4c = $this->env->getExtension("native_profiler");
        $__internal_a8f37b6d17d30051813bd9af92825bd4bd2ded65a198f3e7970cf0397d597e4c->enter($__internal_a8f37b6d17d30051813bd9af92825bd4bd2ded65a198f3e7970cf0397d597e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Administration Liens";
        
        $__internal_a8f37b6d17d30051813bd9af92825bd4bd2ded65a198f3e7970cf0397d597e4c->leave($__internal_a8f37b6d17d30051813bd9af92825bd4bd2ded65a198f3e7970cf0397d597e4c_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_2b3fb3db65dee5e08bd1a2948e464c410c930096057cda8245b3062fe73abed4 = $this->env->getExtension("native_profiler");
        $__internal_2b3fb3db65dee5e08bd1a2948e464c410c930096057cda8245b3062fe73abed4->enter($__internal_2b3fb3db65dee5e08bd1a2948e464c410c930096057cda8245b3062fe73abed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"divAdministrationLien\">

        <div id=\"administrationLien\">
            <form action='";
        // line 12
        echo $this->env->getExtension('routing')->getPath("nox_intranet_ajout_lien");
        echo "' >            
                <label> Ajouter un(e) lien/catégorie : </label> <br />  <br />
                <label for=\"type\"> Type : </label>
                <input type=\"radio\" name=\"type\" value=\"lien\" id=\"radioLien\" checked > Lien </input>
                <input type=\"radio\" name=\"type\" value=\"categorie\" id=\"radioCategorie\"> Catégorie </input> <br />  <br />
                <label for=\"lienlibelle\"> Libellé : </label>
                <input type=\"text\" name='lienlibelle' id=\"lienlibelle\" /> <br />  <br />
                <label for=\"lien\"> Lien : </label>
                <input type=\"text\" name='lien' id=\"lien\" placeholder=\"Lien\" />
                <label for=\"categorie\"> Catégorie : </label>
                <select name=\"categorie\" id=\"categorie\">
                    <option value=\"Aucune\">Aucune</option>
                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catégories"]) ? $context["catégories"] : $this->getContext($context, "catégories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 25
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "                </select>
                <input type=\"submit\" name=\"Ajouter\" value=\"Ajouter\" class=\"boutonFormulaire\" >
            </form>
        </div>

        <table>

            <tr>
                <td> Position </td>
                <td> Libelle </td>
                <td> Type </td>
                <td> Catégorie </td>
                <td> Modifier </td>
                <td> Supprimer </td>
            </tr>

            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liens"]) ? $context["liens"] : $this->getContext($context, "liens")));
        foreach ($context['_seq'] as $context["_key"] => $context["lien"]) {
            // line 44
            echo "
                <tr>
                    <td> <p> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "position", array()), "html", null, true);
            echo " </p> </td>
                    <td> <p> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "libelle", array()), "html", null, true);
            echo " <p> </td>
                    <td> 
                        <p>
                            ";
            // line 50
            if (($this->getAttribute($context["lien"], "liens", array()) == null)) {
                // line 51
                echo "                                Catégorie
                            ";
            } else {
                // line 53
                echo "                                Lien (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "liens", array()), "html", null, true);
                echo ")
                            ";
            }
            // line 55
            echo "                        <p> 
                    </td>
                    <td ";
            // line 57
            if (($this->getAttribute($context["lien"], "parent", array()) == "Aucune")) {
                echo " style=\"background-color:lightgrey;\" ";
            }
            echo "> <p> ";
            if (($this->getAttribute($context["lien"], "parent", array()) != "Aucune")) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lien"], "parent", array()), "html", null, true);
                echo " ";
            }
            echo " <p> </td>
                    <td> <a href='";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_modification_lien", array("lienID" => $this->getAttribute($context["lien"], "id", array()))), "html", null, true);
            echo "'> <img id=\"editionLienImg\" src='";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetadministration/images/Data-Edit-32.png"), "html", null, true);
            echo "'> </a> </td>
                    <td> <a href='";
            // line 59
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
        // line 63
        echo "
        </table>

    </div>
";
        
        $__internal_2b3fb3db65dee5e08bd1a2948e464c410c930096057cda8245b3062fe73abed4->leave($__internal_2b3fb3db65dee5e08bd1a2948e464c410c930096057cda8245b3062fe73abed4_prof);

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
        return array (  184 => 63,  172 => 59,  166 => 58,  154 => 57,  150 => 55,  144 => 53,  140 => 51,  138 => 50,  132 => 47,  128 => 46,  124 => 44,  120 => 43,  102 => 27,  91 => 25,  87 => 24,  72 => 12,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
/*     <div id="divAdministrationLien">*/
/* */
/*         <div id="administrationLien">*/
/*             <form action='{{ path('nox_intranet_ajout_lien') }}' >            */
/*                 <label> Ajouter un(e) lien/catégorie : </label> <br />  <br />*/
/*                 <label for="type"> Type : </label>*/
/*                 <input type="radio" name="type" value="lien" id="radioLien" checked > Lien </input>*/
/*                 <input type="radio" name="type" value="categorie" id="radioCategorie"> Catégorie </input> <br />  <br />*/
/*                 <label for="lienlibelle"> Libellé : </label>*/
/*                 <input type="text" name='lienlibelle' id="lienlibelle" /> <br />  <br />*/
/*                 <label for="lien"> Lien : </label>*/
/*                 <input type="text" name='lien' id="lien" placeholder="Lien" />*/
/*                 <label for="categorie"> Catégorie : </label>*/
/*                 <select name="categorie" id="categorie">*/
/*                     <option value="Aucune">Aucune</option>*/
/*                     {% for categorie in catégories %}*/
/*                         <option value="{{ categorie.libelle }}">{{ categorie.libelle }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/*                 <input type="submit" name="Ajouter" value="Ajouter" class="boutonFormulaire" >*/
/*             </form>*/
/*         </div>*/
/* */
/*         <table>*/
/* */
/*             <tr>*/
/*                 <td> Position </td>*/
/*                 <td> Libelle </td>*/
/*                 <td> Type </td>*/
/*                 <td> Catégorie </td>*/
/*                 <td> Modifier </td>*/
/*                 <td> Supprimer </td>*/
/*             </tr>*/
/* */
/*             {% for lien in liens %}*/
/* */
/*                 <tr>*/
/*                     <td> <p> {{ lien.position }} </p> </td>*/
/*                     <td> <p> {{ lien.libelle }} <p> </td>*/
/*                     <td> */
/*                         <p>*/
/*                             {% if lien.liens == null %}*/
/*                                 Catégorie*/
/*                             {% else %}*/
/*                                 Lien ({{ lien.liens }})*/
/*                             {% endif %}*/
/*                         <p> */
/*                     </td>*/
/*                     <td {% if lien.parent == 'Aucune' %} style="background-color:lightgrey;" {% endif %}> <p> {% if lien.parent != 'Aucune' %} {{ lien.parent }} {% endif %} <p> </td>*/
/*                     <td> <a href='{{ path('nox_intranet_modification_lien', {'lienID': lien.id}) }}'> <img id="editionLienImg" src='{{ asset('bundles/noxintranetadministration/images/Data-Edit-32.png') }}'> </a> </td>*/
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
