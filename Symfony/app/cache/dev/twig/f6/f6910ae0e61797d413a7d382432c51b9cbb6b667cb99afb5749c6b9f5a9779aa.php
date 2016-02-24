<?php

/* NoxIntranetAdministrationBundle:AdministrationLiens:modificationLien.html.twig */
class __TwigTemplate_ecba73e02e9feecc44bca84a5f7cb147ac27537bf209b611cf81f91031ebbc90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAdministrationBundle:AdministrationLiens:modificationLien.html.twig", 1);
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
        $__internal_f811b68eba4ed1345d173f1b0ceff9983e509b41a8782d50418122d2878f97d0 = $this->env->getExtension("native_profiler");
        $__internal_f811b68eba4ed1345d173f1b0ceff9983e509b41a8782d50418122d2878f97d0->enter($__internal_f811b68eba4ed1345d173f1b0ceff9983e509b41a8782d50418122d2878f97d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationLiens:modificationLien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f811b68eba4ed1345d173f1b0ceff9983e509b41a8782d50418122d2878f97d0->leave($__internal_f811b68eba4ed1345d173f1b0ceff9983e509b41a8782d50418122d2878f97d0_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_67639bcb393138d515cf294649840b780cb6da2a950ebf39a5242a6e2349e39c = $this->env->getExtension("native_profiler");
        $__internal_67639bcb393138d515cf294649840b780cb6da2a950ebf39a5242a6e2349e39c->enter($__internal_67639bcb393138d515cf294649840b780cb6da2a950ebf39a5242a6e2349e39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Modification Lien";
        
        $__internal_67639bcb393138d515cf294649840b780cb6da2a950ebf39a5242a6e2349e39c->leave($__internal_67639bcb393138d515cf294649840b780cb6da2a950ebf39a5242a6e2349e39c_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_46db29ddb452cfcd61153f8f442c8cce8b1451988c4ef5bf7236083d30882208 = $this->env->getExtension("native_profiler");
        $__internal_46db29ddb452cfcd61153f8f442c8cce8b1451988c4ef5bf7236083d30882208->enter($__internal_46db29ddb452cfcd61153f8f442c8cce8b1451988c4ef5bf7236083d30882208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Modification Lien";
        
        $__internal_46db29ddb452cfcd61153f8f442c8cce8b1451988c4ef5bf7236083d30882208->leave($__internal_46db29ddb452cfcd61153f8f442c8cce8b1451988c4ef5bf7236083d30882208_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_7c84e467b6eed6dd7fe8beaf0bfaa662d98c6e79e01b20e7fa13f08744a295b7 = $this->env->getExtension("native_profiler");
        $__internal_7c84e467b6eed6dd7fe8beaf0bfaa662d98c6e79e01b20e7fa13f08744a295b7->enter($__internal_7c84e467b6eed6dd7fe8beaf0bfaa662d98c6e79e01b20e7fa13f08744a295b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id=\"divAdministrationUtilisateur\">

        <div id=\"administrationLien\">
            <form action='";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("nox_intranet_modification_lien_check", array("lienID" => (isset($context["lienID"]) ? $context["lienID"] : $this->getContext($context, "lienID")))), "html", null, true);
        echo "' >            
                <label for=\"type\"> Type : </label>
                <input type=\"radio\" name=\"type\" value=\"lien\" id=\"radioLien\" ";
        // line 14
        if (($this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "type", array()) == "Lien")) {
            echo " checked ";
        }
        echo "> Lien </input>
                <input type=\"radio\" name=\"type\" value=\"categorie\" id=\"radioCategorie\" ";
        // line 15
        if (($this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "type", array()) == "Catégorie")) {
            echo " checked ";
        }
        echo "> Catégorie </input> <br /> <br />
                <label for=\"lienlibelle\"> Libellé : </label>
                <input type=\"text\" name='lienlibelle' id=\"lienlibelle\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "libelle", array()), "html", null, true);
        echo "\"/> <br /> <br />
                <label for=\"lien\"> Lien : </label>
                <input type=\"text\" name='lien' id=\"lien\"  value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "liens", array()), "html", null, true);
        echo "\" /> <br /> <br />
                <label for=\"categorie\"> Catégorie : </label>
                <select name=\"categorie\" id=\"categorie\">
                    <option value=\"Aucune\">Aucune</option>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["catégories"]) ? $context["catégories"] : $this->getContext($context, "catégories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 24
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "libelle", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["categorie"], "libelle", array()) == $this->getAttribute((isset($context["lien"]) ? $context["lien"] : $this->getContext($context, "lien")), "parent", array()))) {
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
        if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == null)) {
            // line 32
            echo "
                        <option value=\"";
            // line 33
            echo twig_escape_filter($this->env, ((isset($context["positionMax"]) ? $context["positionMax"] : $this->getContext($context, "positionMax")) + 1), "html", null, true);
            echo "\" readonly>";
            echo twig_escape_filter($this->env, ((isset($context["positionMax"]) ? $context["positionMax"] : $this->getContext($context, "positionMax")) + 1), "html", null, true);
            echo "</option>

                    ";
        } else {
            // line 36
            echo "
                        ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["positionMax"]) ? $context["positionMax"] : $this->getContext($context, "positionMax"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 38
                echo "                            <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (((isset($context["position"]) ? $context["position"] : $this->getContext($context, "position")) == $context["i"])) {
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
        
        $__internal_7c84e467b6eed6dd7fe8beaf0bfaa662d98c6e79e01b20e7fa13f08744a295b7->leave($__internal_7c84e467b6eed6dd7fe8beaf0bfaa662d98c6e79e01b20e7fa13f08744a295b7_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAdministrationBundle:AdministrationLiens:modificationLien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 42,  163 => 40,  148 => 38,  144 => 37,  141 => 36,  133 => 33,  130 => 32,  128 => 31,  121 => 26,  106 => 24,  102 => 23,  95 => 19,  90 => 17,  83 => 15,  77 => 14,  72 => 12,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
