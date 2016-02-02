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
        $__internal_220543f74ef392caa7ed0bc2da5cb323ef974021b11509f6ea42d4ce83137cf2 = $this->env->getExtension("native_profiler");
        $__internal_220543f74ef392caa7ed0bc2da5cb323ef974021b11509f6ea42d4ce83137cf2->enter($__internal_220543f74ef392caa7ed0bc2da5cb323ef974021b11509f6ea42d4ce83137cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAdministrationBundle:AdministrationLiens:modificationLien.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_220543f74ef392caa7ed0bc2da5cb323ef974021b11509f6ea42d4ce83137cf2->leave($__internal_220543f74ef392caa7ed0bc2da5cb323ef974021b11509f6ea42d4ce83137cf2_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_8d1e6063584a57b48d9226e67c2c16101daf2a7f8e20a638e61211a6518f6800 = $this->env->getExtension("native_profiler");
        $__internal_8d1e6063584a57b48d9226e67c2c16101daf2a7f8e20a638e61211a6518f6800->enter($__internal_8d1e6063584a57b48d9226e67c2c16101daf2a7f8e20a638e61211a6518f6800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo "Modification Lien";
        
        $__internal_8d1e6063584a57b48d9226e67c2c16101daf2a7f8e20a638e61211a6518f6800->leave($__internal_8d1e6063584a57b48d9226e67c2c16101daf2a7f8e20a638e61211a6518f6800_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_46f2ad96e3c6493fd3636e8ac1ac7c85c5fb9bc8817319924782cef079e644ab = $this->env->getExtension("native_profiler");
        $__internal_46f2ad96e3c6493fd3636e8ac1ac7c85c5fb9bc8817319924782cef079e644ab->enter($__internal_46f2ad96e3c6493fd3636e8ac1ac7c85c5fb9bc8817319924782cef079e644ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Modification Lien";
        
        $__internal_46f2ad96e3c6493fd3636e8ac1ac7c85c5fb9bc8817319924782cef079e644ab->leave($__internal_46f2ad96e3c6493fd3636e8ac1ac7c85c5fb9bc8817319924782cef079e644ab_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_03174a1d599f42ffdc82088855820b4e8b8456d8bfb51b6efd5985d8f493195e = $this->env->getExtension("native_profiler");
        $__internal_03174a1d599f42ffdc82088855820b4e8b8456d8bfb51b6efd5985d8f493195e->enter($__internal_03174a1d599f42ffdc82088855820b4e8b8456d8bfb51b6efd5985d8f493195e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        
        $__internal_03174a1d599f42ffdc82088855820b4e8b8456d8bfb51b6efd5985d8f493195e->leave($__internal_03174a1d599f42ffdc82088855820b4e8b8456d8bfb51b6efd5985d8f493195e_prof);

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
