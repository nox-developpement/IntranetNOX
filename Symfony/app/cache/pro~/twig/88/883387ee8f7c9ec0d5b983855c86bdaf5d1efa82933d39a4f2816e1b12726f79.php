<?php

/* @NoxIntranetAdministration/AdministrationLiens/modificationLien.html.twig */
class __TwigTemplate_4b145c41ea02f1a73fd91a35a434faaddb6b15d9e9ea52ca769511267a824a09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAdministration/AdministrationLiens/modificationLien.html.twig", 1);
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
        echo "Modification Lien";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Modification Lien";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_modification_lien_check", array("lienID" => (isset($context["lienID"]) ? $context["lienID"] : null))), "html", null, true);
        echo "' >            
                <label for=\"type\"> Type : </label>
                <input type=\"radio\" name=\"type\" value=\"lien\" id=\"radioLien\" ";
        // line 14
        if (($this->getAttribute((isset($context["lien"]) ? $context["lien"] : null), "type", array()) == "Lien")) {
            echo " checked ";
        }
        echo "> Lien </input>
                <input type=\"radio\" name=\"type\" value=\"categorie\" id=\"radioCategorie\" ";
        // line 15
        if (($this->getAttribute((isset($context["lien"]) ? $context["lien"] : null), "type", array()) == "Catégorie")) {
            echo " checked ";
        }
        echo "> Catégorie </input> <br /> <br />
                <label for=\"lienlibelle\"> Libellé : </label>
                <input type=\"text\" name='lienlibelle' id=\"lienlibelle\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lien"]) ? $context["lien"] : null), "libelle", array()), "html", null, true);
        echo "\"/> <br /> <br />
                <label for=\"lien\"> Lien : </label>
                <input type=\"text\" name='lien' id=\"lien\"  value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lien"]) ? $context["lien"] : null), "liens", array()), "html", null, true);
        echo "\" /> <br /> <br />
                <label for=\"categorie\"> Catégorie : </label>
                <select name=\"categorie\" id=\"categorie\">
                    <option value=\"Aucune\">Aucune</option>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catégories"]) ? $context["catégories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 24
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["categorie"], "libelle", array()) == $this->getAttribute((isset($context["lien"]) ? $context["lien"] : null), "parent", array()))) {
                echo " selected ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array()), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </select>


                <select name=\"position\" id=\"position\">

                    ";
        // line 31
        if (((isset($context["position"]) ? $context["position"] : null) == null)) {
            // line 32
            echo "
                        <option value=\"";
            // line 33
            echo twig_escape_filter($this->env, ((isset($context["positionMax"]) ? $context["positionMax"] : null) + 1), "html", null, true);
            echo "\" readonly>";
            echo twig_escape_filter($this->env, ((isset($context["positionMax"]) ? $context["positionMax"] : null) + 1), "html", null, true);
            echo "</option>

                    ";
        } else {
            // line 36
            echo "
                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["positionMax"]) ? $context["positionMax"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (((isset($context["position"]) ? $context["position"] : null) == $context["i"])) {
                    echo " selected ";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</option>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
                    ";
        }
        // line 42
        echo "                </select>
                <br /> <br />

                <input type=\"submit\" name=\"Modifier\" value=\"Modifier\" class=\"boutonFormulaire\" >
            </form>
        </div>

    </div>
";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetAdministration/AdministrationLiens/modificationLien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 42,  142 => 40,  127 => 38,  123 => 37,  120 => 36,  112 => 33,  109 => 32,  107 => 31,  100 => 26,  85 => 24,  81 => 23,  74 => 19,  69 => 17,  62 => 15,  56 => 14,  51 => 12,  45 => 8,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %}Modification Lien{% endblock %}*/
/* */
/* {% block messageAccueil %}Modification Lien{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id="divAdministrationUtilisateur">*/
/* */
/*         <div id="administrationLien">*/
/*             <form action='{{ path('nox_intranet_modification_lien_check', {'lienID':lienID} ) }}' >            */
/*                 <label for="type"> Type : </label>*/
/*                 <input type="radio" name="type" value="lien" id="radioLien" {% if lien.type == 'Lien' %} checked {% endif %}> Lien </input>*/
/*                 <input type="radio" name="type" value="categorie" id="radioCategorie" {% if lien.type == 'Catégorie' %} checked {% endif %}> Catégorie </input> <br /> <br />*/
/*                 <label for="lienlibelle"> Libellé : </label>*/
/*                 <input type="text" name='lienlibelle' id="lienlibelle" value="{{ lien.libelle }}"/> <br /> <br />*/
/*                 <label for="lien"> Lien : </label>*/
/*                 <input type="text" name='lien' id="lien"  value="{{ lien.liens }}" /> <br /> <br />*/
/*                 <label for="categorie"> Catégorie : </label>*/
/*                 <select name="categorie" id="categorie">*/
/*                     <option value="Aucune">Aucune</option>*/
/*                     {% for categorie in catégories %}*/
/*                         <option value="{{ categorie.libelle }}" {% if categorie.libelle == lien.parent %} selected {% endif %}>{{ categorie.libelle }}</option>*/
/*                     {% endfor %}*/
/*                 </select>*/
/* */
/* */
/*                 <select name="position" id="position">*/
/* */
/*                     {% if position == null %}*/
/* */
/*                         <option value="{{ positionMax+1 }}" readonly>{{ positionMax+1 }}</option>*/
/* */
/*                     {% else %}*/
/* */
/*                         {% for i in 1..positionMax %}*/
/*                             <option value="{{ i }}" {% if position == i %} selected {% endif %}>{{ i }}</option>*/
/*                         {% endfor %}*/
/* */
/*                     {% endif %}*/
/*                 </select>*/
/*                 <br /> <br />*/
/* */
/*                 <input type="submit" name="Modifier" value="Modifier" class="boutonFormulaire" >*/
/*             </form>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* {# empty Twig template #}*/
/* */
