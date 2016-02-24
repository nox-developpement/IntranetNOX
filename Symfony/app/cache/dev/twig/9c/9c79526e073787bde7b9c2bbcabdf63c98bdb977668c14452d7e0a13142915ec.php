<?php

/* @NoxIntranetMenu/Menu/menu.html.twig */
class __TwigTemplate_d976de20fd92cc71787a8477a72f4686471233c931310a7f49a47837630d823e extends Twig_Template
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
        $__internal_4ae2e381cf3d9e892d693492b3af1b8e6e96717bae166405ad392d8070d61160 = $this->env->getExtension("native_profiler");
        $__internal_4ae2e381cf3d9e892d693492b3af1b8e6e96717bae166405ad392d8070d61160->enter($__internal_4ae2e381cf3d9e892d693492b3af1b8e6e96717bae166405ad392d8070d61160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@NoxIntranetMenu/Menu/menu.html.twig"));

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
        
        $__internal_4ae2e381cf3d9e892d693492b3af1b8e6e96717bae166405ad392d8070d61160->leave($__internal_4ae2e381cf3d9e892d693492b3af1b8e6e96717bae166405ad392d8070d61160_prof);

    }

    public function getTemplateName()
    {
        return "@NoxIntranetMenu/Menu/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
