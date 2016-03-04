<?php

/* @NoxIntranetMenu/Menu/menu.html.twig */
class __TwigTemplate_a736871b1de381a445852d91eb1d80e4f682fa57d520de475a169c387e922dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"div_menu\">
    <ul id=\"menu\"> 
        <li class=\"menuElement\"> <a href=\"#\" class=\"liens\"> Accèder à l'intranet </a> </li> 

        <li class=\"menuElement\"> <a href=\"#\" target=\"_blank\" class=\"liens\"> Portail du groupe </a> </li> 

        <li class=\"menuElement\"> 
            <a class=\"liens\" id=\"share\"> Share </a> 
            <ul id=\"sousMenu\">
                <li> <a href=\"#\" target=\"_blank\" class=\"liens\" > A360 Drive </a> </li>
                <li> <a href=\"#\" target=\"_blank\" class=\"liens\"> A360 Team </a> </li>
                <li> <a href=\"#\" target=\"_blank\" class=\"liens\"> OneDrive </a> </li>
                <li> <a href=\"#\" target=\"_blank\" class=\"liens\"> WeTransfer </a> </li>
            </ul>
        </li>                
        <li id=\"google_search\"> 
            <form id=\"google_form\">
                <img src =\"../images/logoGoogle.png\" width=\"29\" height=\"29\" alt=\"Logo Google\">
                <input type=\"text\" id=\"search_input\" name=\"seach_input\" placeholder=\"Rechercher sur Google\">
                <button id=\"search\" onclick=\"googleSearch(this);\"> Rechercher </button>
            </form>
        </li>
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetMenu/Menu/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <div id="div_menu">*/
/*     <ul id="menu"> */
/*         <li class="menuElement"> <a href="#" class="liens"> Accèder à l'intranet </a> </li> */
/* */
/*         <li class="menuElement"> <a href="#" target="_blank" class="liens"> Portail du groupe </a> </li> */
/* */
/*         <li class="menuElement"> */
/*             <a class="liens" id="share"> Share </a> */
/*             <ul id="sousMenu">*/
/*                 <li> <a href="#" target="_blank" class="liens" > A360 Drive </a> </li>*/
/*                 <li> <a href="#" target="_blank" class="liens"> A360 Team </a> </li>*/
/*                 <li> <a href="#" target="_blank" class="liens"> OneDrive </a> </li>*/
/*                 <li> <a href="#" target="_blank" class="liens"> WeTransfer </a> </li>*/
/*             </ul>*/
/*         </li>                */
/*         <li id="google_search"> */
/*             <form id="google_form">*/
/*                 <img src ="../images/logoGoogle.png" width="29" height="29" alt="Logo Google">*/
/*                 <input type="text" id="search_input" name="seach_input" placeholder="Rechercher sur Google">*/
/*                 <button id="search" onclick="googleSearch(this);"> Rechercher </button>*/
/*             </form>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
