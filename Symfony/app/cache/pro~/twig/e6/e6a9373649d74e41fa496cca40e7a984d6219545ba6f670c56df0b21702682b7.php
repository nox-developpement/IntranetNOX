<?php

/* @NoxIntranetUser/Security/ADLogin.html.twig */
class __TwigTemplate_fde51ffdf90a27cba92e5374e0a4bd9e350efd4b559b734eb81475ce7cf88ad9 extends Twig_Template
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
            // line 2
            echo "    <div id=\"identifiants\">
        <p> <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetuser/images/User-128-hover.png"), "html", null, true);
            echo "\" alt='Utilisateur' onmousedown=\"return false;\"><br>
            <span id=\"usernameSpan\"> ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastname", array()), "html", null, true);
            echo " </span>
        </p>
        <a href= ";
            // line 6
            echo $this->env->getExtension('routing')->getPath("logout");
            echo " > Déconnexion </a> 
    </div>
";
        } else {
            // line 9
            echo "

    <div id='login'>
        <form method=\"POST\" action=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("AD_connexion_check");
            echo "\" name='connexion'>

            <input type='text' id='username' name='username' placeholder=\"Nom d'utilisateur\">

            <input type='password' id='password'  name='password' placeholder=\"Mot de passe\">

            <p>
                <input class=\"boutonFormulaireInverse\" type='submit' value='Connexion'>
            </p>

        </form>
    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "@NoxIntranetUser/Security/ADLogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 12,  41 => 9,  35 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if app.user != null %}*/
/*     <div id="identifiants">*/
/*         <p> <img src="{{ asset('bundles/noxintranetuser/images/User-128-hover.png') }}" alt='Utilisateur' onmousedown="return false;"><br>*/
/*             <span id="usernameSpan"> {{ app.user.firstname }} {{ app.user.lastname }} </span>*/
/*         </p>*/
/*         <a href= {{ path('logout') }} > Déconnexion </a> */
/*     </div>*/
/* {% else %}*/
/* */
/* */
/*     <div id='login'>*/
/*         <form method="POST" action="{{ path("AD_connexion_check") }}" name='connexion'>*/
/* */
/*             <input type='text' id='username' name='username' placeholder="Nom d'utilisateur">*/
/* */
/*             <input type='password' id='password'  name='password' placeholder="Mot de passe">*/
/* */
/*             <p>*/
/*                 <input class="boutonFormulaireInverse" type='submit' value='Connexion'>*/
/*             </p>*/
/* */
/*         </form>*/
/*     </div>*/
/* */
/* {% endif %}*/
/* */
