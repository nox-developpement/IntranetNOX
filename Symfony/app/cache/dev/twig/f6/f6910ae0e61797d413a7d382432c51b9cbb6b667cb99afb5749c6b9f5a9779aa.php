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
        $__internal_3b0f696f8c3bb6c9b89da489111f0d23ba4b92a50e11193ab064e85c5d573b88 = $this->env->getExtension("native_profiler");
        $__internal_3b0f696f8c3bb6c9b89da489111f0d23ba4b92a50e11193ab064e85c5d573b88->enter($__internal_3b0f696f8c3bb6c9b89da489111f0d23ba4b92a50e11193ab064e85c5d573b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationLiens:modificationLien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b0f696f8c3bb6c9b89da489111f0d23ba4b92a50e11193ab064e85c5d573b88->leave($__internal_3b0f696f8c3bb6c9b89da489111f0d23ba4b92a50e11193ab064e85c5d573b88_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_7044b4ad7c897ac2a079b3ff9f37d7145d5ec3d73c16dbf88a7c324dd9f5db20 = $this->env->getExtension("native_profiler");
        $__internal_7044b4ad7c897ac2a079b3ff9f37d7145d5ec3d73c16dbf88a7c324dd9f5db20->enter($__internal_7044b4ad7c897ac2a079b3ff9f37d7145d5ec3d73c16dbf88a7c324dd9f5db20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Modification Lien";
        
        $__internal_7044b4ad7c897ac2a079b3ff9f37d7145d5ec3d73c16dbf88a7c324dd9f5db20->leave($__internal_7044b4ad7c897ac2a079b3ff9f37d7145d5ec3d73c16dbf88a7c324dd9f5db20_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_e149000f527611055eeca2b50dbc890513afbc2cd1076f5301c7ce42fe4817f4 = $this->env->getExtension("native_profiler");
        $__internal_e149000f527611055eeca2b50dbc890513afbc2cd1076f5301c7ce42fe4817f4->enter($__internal_e149000f527611055eeca2b50dbc890513afbc2cd1076f5301c7ce42fe4817f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Modification Lien";
        
        $__internal_e149000f527611055eeca2b50dbc890513afbc2cd1076f5301c7ce42fe4817f4->leave($__internal_e149000f527611055eeca2b50dbc890513afbc2cd1076f5301c7ce42fe4817f4_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_781abfc4bc8485ce1d190d9e7c895f219a955c663b4c195f6535ec0e865d162f = $this->env->getExtension("native_profiler");
        $__internal_781abfc4bc8485ce1d190d9e7c895f219a955c663b4c195f6535ec0e865d162f->enter($__internal_781abfc4bc8485ce1d190d9e7c895f219a955c663b4c195f6535ec0e865d162f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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

                <br /> <br />

                <input type=\"submit\" name=\"Modifier\" value=\"Modifier\" class=\"boutonFormulaire\" >
            </form>
        </div>

    </div>
";
        
        $__internal_781abfc4bc8485ce1d190d9e7c895f219a955c663b4c195f6535ec0e865d162f->leave($__internal_781abfc4bc8485ce1d190d9e7c895f219a955c663b4c195f6535ec0e865d162f_prof);

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
        return array (  121 => 26,  106 => 24,  102 => 23,  95 => 19,  90 => 17,  83 => 15,  77 => 14,  72 => 12,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
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
