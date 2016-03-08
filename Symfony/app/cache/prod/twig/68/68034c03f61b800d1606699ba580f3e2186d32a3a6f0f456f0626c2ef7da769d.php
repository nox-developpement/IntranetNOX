<?php

/* @NoxIntranetUser/Security/login.html.twig */
class __TwigTemplate_2b8256b8bffc8638f9903475a1572b3cf78964b2d3737849ea322b048d1c4a99 extends Twig_Template
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
        // line 3
        echo "

";
        // line 6
        echo "

";
        // line 8
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
            // line 9
            echo "    <div id=\"identifiants\">
        <p> <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetuser/images/User-128.png"), "html", null, true);
            echo "\"><br>
            <span id=\"usernameSpan\"> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastname", array()), "html", null, true);
            echo " </span>
        </p>
        <a href= ";
            // line 13
            echo $this->env->getExtension('routing')->getPath("logout");
            echo " > Deconnexion </a> 
    </div>
";
        } else {
            // line 16
            echo "
    <div id='login'>
        <form action=\"";
            // line 18
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">

            <input type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Nom d'utilisateur\" />

            <input type=\"password\" id=\"password\" name=\"_password\" placeholder=\"Mot de passe\" />

            <p>
                <input class=\"boutonFormulaire\" type=\"submit\" value=\"Connexion\" />
            </p>

        </form>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "@NoxIntranetUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  49 => 16,  43 => 13,  36 => 11,  32 => 10,  29 => 9,  27 => 8,  23 => 6,  19 => 3,);
    }
}
/* {# src/NoxIntranet/UserBundle/Resources/views/Security/login.html.twig #}*/
/* {# S'il y a une erreur, on l'affiche dans un joli cadre #}*/
/* */
/* */
/* {# Le formulaire, avec URL de soumission vers la route « login_check » comme on l'a vu #}*/
/* */
/* */
/* {% if app.user != null %}*/
/*     <div id="identifiants">*/
/*         <p> <img src="{{ asset('bundles/noxintranetuser/images/User-128.png') }}"><br>*/
/*             <span id="usernameSpan"> {{ app.user.firstname }} {{ app.user.lastname }} </span>*/
/*         </p>*/
/*         <a href= {{ path('logout') }} > Deconnexion </a> */
/*     </div>*/
/* {% else %}*/
/* */
/*     <div id='login'>*/
/*         <form action="{{ path('login_check') }}" method="post">*/
/* */
/*             <input type="text" id="username" name="_username" placeholder="Nom d'utilisateur" />*/
/* */
/*             <input type="password" id="password" name="_password" placeholder="Mot de passe" />*/
/* */
/*             <p>*/
/*                 <input class="boutonFormulaire" type="submit" value="Connexion" />*/
/*             </p>*/
/* */
/*         </form>*/
/*     </div>*/
/* {% endif %}*/
/* */
