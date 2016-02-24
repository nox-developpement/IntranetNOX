<?php

/* @NoxIntranetSupportSI/Support/demandeMateriel.html.twig */
class __TwigTemplate_fa2345694070610dae965f8528b8f5b3ca4e2b1b759b5b92d257c2050e4fdab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetSupportSI/Support/demandeMateriel.html.twig", 1);
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
        $__internal_5fc6e84588088cb6e7dc3d7c4029191e87a17d4cdc6340425ff6c70e72014dad = $this->env->getExtension("native_profiler");
        $__internal_5fc6e84588088cb6e7dc3d7c4029191e87a17d4cdc6340425ff6c70e72014dad->enter($__internal_5fc6e84588088cb6e7dc3d7c4029191e87a17d4cdc6340425ff6c70e72014dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetSupportSI/Support/demandeMateriel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc6e84588088cb6e7dc3d7c4029191e87a17d4cdc6340425ff6c70e72014dad->leave($__internal_5fc6e84588088cb6e7dc3d7c4029191e87a17d4cdc6340425ff6c70e72014dad_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_c7c415aa372513edac3865b92c3dea6867d5630fa407171353f126dfba143385 = $this->env->getExtension("native_profiler");
        $__internal_c7c415aa372513edac3865b92c3dea6867d5630fa407171353f126dfba143385->enter($__internal_c7c415aa372513edac3865b92c3dea6867d5630fa407171353f126dfba143385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Demande de matériel/logiciel ";
        
        $__internal_c7c415aa372513edac3865b92c3dea6867d5630fa407171353f126dfba143385->leave($__internal_c7c415aa372513edac3865b92c3dea6867d5630fa407171353f126dfba143385_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_ae122dad156ddb00d71a027a1797e7f0ca13d376d55bab33690e375eb78e2a20 = $this->env->getExtension("native_profiler");
        $__internal_ae122dad156ddb00d71a027a1797e7f0ca13d376d55bab33690e375eb78e2a20->enter($__internal_ae122dad156ddb00d71a027a1797e7f0ca13d376d55bab33690e375eb78e2a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " Demande de matériel/logiciel ";
        
        $__internal_ae122dad156ddb00d71a027a1797e7f0ca13d376d55bab33690e375eb78e2a20->leave($__internal_ae122dad156ddb00d71a027a1797e7f0ca13d376d55bab33690e375eb78e2a20_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_19613f3d2ff32d5949bf2a29f9f62c891c58cfa36ab2033fa0f191786ad67020 = $this->env->getExtension("native_profiler");
        $__internal_19613f3d2ff32d5949bf2a29f9f62c891c58cfa36ab2033fa0f191786ad67020->enter($__internal_19613f3d2ff32d5949bf2a29f9f62c891c58cfa36ab2033fa0f191786ad67020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 8
        echo "
    <div id='divFormulaireMateriel'>
        <form name='demandeMateriel' method='GET' id='formulaireMateriel' action='";
        // line 10
        echo $this->env->getExtension('routing')->getPath("nox_intranet_demande_materiel_check");
        echo "'>

            <div class='infoDemande'>
                <label for='agence'>Agence :</label>
                <input type='text' name='agence' id='agence' value='";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["agence"]) ? $context["agence"] : $this->getContext($context, "agence")), "html", null, true);
        echo "' readonly>
                <label for='demandeur'>Demandeur :</label>
                <input type='text' name='demandeur' id='demandeur' value='";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["username"]) ? $context["username"] : $this->getContext($context, "username")), "html", null, true);
        echo "' readonly>
            </div>

            <br>

            <input type='checkbox' name='materiel' value='materiel' id='materiel'> Matériel

            <br>

            <div class='contenuDemande' id='materielSelection'>
                <label for=\"categorie\">Catégorie :</label>
                <select name=\"categorie\" name='categorie' id=\"categorie\">
                    <optgroup label=\"Matériel\">
                        <option value=\"Portable\">Portable</option>
                        <option value=\"Ultra portable\">Ultra portable</option>
                        <option value=\"Poste fixe\">Poste fixe</option>
                        <option value=\"Poste CAO\">Poste CAO</option>
                </select>
            </div>

            <input type='checkbox' name='logicielCheckbox' value='logicielCheckbox' id='logicielCheckbox'> Logiciel

            <div class='contenuDemande' id='textAreaLogiciel'>
                <label for='logiciel'>Nom du/des logiciel(s) désiré : 
                    <textarea id='logiciel' name='logiciel' placeholder='Entrer le/les nom(s) du/des logiciel(s) désiré(s) ici.'></textarea>
                </label>
            </div>

            <div class='contenuDemande' id='raisonDemande'>
                <label for='raisonDemande'>Raison de la demande : 
                    <textarea id='raisonDemande' name='raisonDemande'></textarea>
                </label>
            </div>

            <div class='contenuDemande' id='raisonDemande'>
                <label for='dateLivraison'>Date désirée : </label>
                <input type=\"text\" name=\"dateLivraison\" id='dateLivraison' placeholder='jj/mm/aaaa'> <button type='button' class='boutonFormulaire' id='razDate' onclick=\"\$('#dateLivraison').val('');\">RAZ</button>
            </div>

            <div class='contenuDemande'>
                <label for='nomSuperieur'>Nom du supérieur hiérarchique :</label>
                <input type='text' id='nomSuperieur' name='nomSuperieur' placeholder='Supérieur hiérarchique'>
            </div>
            
             <p id='demanteMaterielBoutonCentrage'> <input type='submit' value='Envoyer' class='boutonFormulaire'> </p>




        </form>
    </div>

";
        
        $__internal_19613f3d2ff32d5949bf2a29f9f62c891c58cfa36ab2033fa0f191786ad67020->leave($__internal_19613f3d2ff32d5949bf2a29f9f62c891c58cfa36ab2033fa0f191786ad67020_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetSupportSI/Support/demandeMateriel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  77 => 14,  70 => 10,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Demande de matériel/logiciel {% endblock %}*/
/* */
/* {% block messageAccueil %} Demande de matériel/logiciel {% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/*     <div id='divFormulaireMateriel'>*/
/*         <form name='demandeMateriel' method='GET' id='formulaireMateriel' action='{{ path('nox_intranet_demande_materiel_check') }}'>*/
/* */
/*             <div class='infoDemande'>*/
/*                 <label for='agence'>Agence :</label>*/
/*                 <input type='text' name='agence' id='agence' value='{{ agence }}' readonly>*/
/*                 <label for='demandeur'>Demandeur :</label>*/
/*                 <input type='text' name='demandeur' id='demandeur' value='{{ username }}' readonly>*/
/*             </div>*/
/* */
/*             <br>*/
/* */
/*             <input type='checkbox' name='materiel' value='materiel' id='materiel'> Matériel*/
/* */
/*             <br>*/
/* */
/*             <div class='contenuDemande' id='materielSelection'>*/
/*                 <label for="categorie">Catégorie :</label>*/
/*                 <select name="categorie" name='categorie' id="categorie">*/
/*                     <optgroup label="Matériel">*/
/*                         <option value="Portable">Portable</option>*/
/*                         <option value="Ultra portable">Ultra portable</option>*/
/*                         <option value="Poste fixe">Poste fixe</option>*/
/*                         <option value="Poste CAO">Poste CAO</option>*/
/*                 </select>*/
/*             </div>*/
/* */
/*             <input type='checkbox' name='logicielCheckbox' value='logicielCheckbox' id='logicielCheckbox'> Logiciel*/
/* */
/*             <div class='contenuDemande' id='textAreaLogiciel'>*/
/*                 <label for='logiciel'>Nom du/des logiciel(s) désiré : */
/*                     <textarea id='logiciel' name='logiciel' placeholder='Entrer le/les nom(s) du/des logiciel(s) désiré(s) ici.'></textarea>*/
/*                 </label>*/
/*             </div>*/
/* */
/*             <div class='contenuDemande' id='raisonDemande'>*/
/*                 <label for='raisonDemande'>Raison de la demande : */
/*                     <textarea id='raisonDemande' name='raisonDemande'></textarea>*/
/*                 </label>*/
/*             </div>*/
/* */
/*             <div class='contenuDemande' id='raisonDemande'>*/
/*                 <label for='dateLivraison'>Date désirée : </label>*/
/*                 <input type="text" name="dateLivraison" id='dateLivraison' placeholder='jj/mm/aaaa'> <button type='button' class='boutonFormulaire' id='razDate' onclick="$('#dateLivraison').val('');">RAZ</button>*/
/*             </div>*/
/* */
/*             <div class='contenuDemande'>*/
/*                 <label for='nomSuperieur'>Nom du supérieur hiérarchique :</label>*/
/*                 <input type='text' id='nomSuperieur' name='nomSuperieur' placeholder='Supérieur hiérarchique'>*/
/*             </div>*/
/*             */
/*              <p id='demanteMaterielBoutonCentrage'> <input type='submit' value='Envoyer' class='boutonFormulaire'> </p>*/
/* */
/* */
/* */
/* */
/*         </form>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
