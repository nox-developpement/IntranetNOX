<?php

/* NoxIntranetSupportSIBundle:Support:demandeMateriel.html.twig */
class __TwigTemplate_e6714836f052d968d0d9fda9bc1ec92acdc55668be1ebe3ce6add1ace3a55af0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetSupportSIBundle:Support:demandeMateriel.html.twig", 1);
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
        $__internal_045b8069bf5e551889d6541522934a665b6091b0de2a32856e46bfe9e4cde724 = $this->env->getExtension("native_profiler");
        $__internal_045b8069bf5e551889d6541522934a665b6091b0de2a32856e46bfe9e4cde724->enter($__internal_045b8069bf5e551889d6541522934a665b6091b0de2a32856e46bfe9e4cde724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetSupportSIBundle:Support:demandeMateriel.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_045b8069bf5e551889d6541522934a665b6091b0de2a32856e46bfe9e4cde724->leave($__internal_045b8069bf5e551889d6541522934a665b6091b0de2a32856e46bfe9e4cde724_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_64a364c55049b46118acbfe904e9e08a4b54f008ea6a35b6c622a1885aee6b98 = $this->env->getExtension("native_profiler");
        $__internal_64a364c55049b46118acbfe904e9e08a4b54f008ea6a35b6c622a1885aee6b98->enter($__internal_64a364c55049b46118acbfe904e9e08a4b54f008ea6a35b6c622a1885aee6b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Demande de matériel/logiciel ";
        
        $__internal_64a364c55049b46118acbfe904e9e08a4b54f008ea6a35b6c622a1885aee6b98->leave($__internal_64a364c55049b46118acbfe904e9e08a4b54f008ea6a35b6c622a1885aee6b98_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_230f325376aada79b77a3cf5fce53d73a0dad0ce3b6c50e21769808f407c032a = $this->env->getExtension("native_profiler");
        $__internal_230f325376aada79b77a3cf5fce53d73a0dad0ce3b6c50e21769808f407c032a->enter($__internal_230f325376aada79b77a3cf5fce53d73a0dad0ce3b6c50e21769808f407c032a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo " Demande de matériel/logiciel ";
        
        $__internal_230f325376aada79b77a3cf5fce53d73a0dad0ce3b6c50e21769808f407c032a->leave($__internal_230f325376aada79b77a3cf5fce53d73a0dad0ce3b6c50e21769808f407c032a_prof);

    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_0af030a02b7708f2346484ec3a8ccd697946289c4e68e760562a6269b0a4b801 = $this->env->getExtension("native_profiler");
        $__internal_0af030a02b7708f2346484ec3a8ccd697946289c4e68e760562a6269b0a4b801->enter($__internal_0af030a02b7708f2346484ec3a8ccd697946289c4e68e760562a6269b0a4b801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
                <label for='dateLivraison'>Date de livraison désiré : </label>
                <input type=\"text\" name=\"dateLivraison\" id='dateLivraison' placeholder='jj/mm/aaaa'> <button type='button' class='boutonFormulaire' id='razDate' onclick=\"\$('#dateLivraison').val('');\">RAZ</button>
            </div>

            <div class='contenuDemande'>
                <label for='nomSuperieur'>Nom du supérieur hiérarchique :</label>
                <input type='text' id='nomSuperieur' name='nomSuperieur' placeholder='Supérieur hiérarchique'>
                <div> <input type='submit' value='Envoyer' class='boutonFormulaire' width='30%'> </div>
            </div>




        </form>
    </div>

";
        
        $__internal_0af030a02b7708f2346484ec3a8ccd697946289c4e68e760562a6269b0a4b801->leave($__internal_0af030a02b7708f2346484ec3a8ccd697946289c4e68e760562a6269b0a4b801_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetSupportSIBundle:Support:demandeMateriel.html.twig";
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
/*                 <label for='dateLivraison'>Date de livraison désiré : </label>*/
/*                 <input type="text" name="dateLivraison" id='dateLivraison' placeholder='jj/mm/aaaa'> <button type='button' class='boutonFormulaire' id='razDate' onclick="$('#dateLivraison').val('');">RAZ</button>*/
/*             </div>*/
/* */
/*             <div class='contenuDemande'>*/
/*                 <label for='nomSuperieur'>Nom du supérieur hiérarchique :</label>*/
/*                 <input type='text' id='nomSuperieur' name='nomSuperieur' placeholder='Supérieur hiérarchique'>*/
/*                 <div> <input type='submit' value='Envoyer' class='boutonFormulaire' width='30%'> </div>*/
/*             </div>*/
/* */
/* */
/* */
/* */
/*         </form>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
