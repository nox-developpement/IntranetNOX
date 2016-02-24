<?php

/* NoxIntranetUserBundle:Security:login.html.twig */
class __TwigTemplate_6c368d77b4af5b76e4bacea296ffd5b5aa4b54d9c6f2110584c5c6bcd4562030 extends Twig_Template
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
        $__internal_a5849d9426b70a88e9979438f412b17ee1fd78a2258eecffdad995e4f2aec81e = $this->env->getExtension("native_profiler");
        $__internal_a5849d9426b70a88e9979438f412b17ee1fd78a2258eecffdad995e4f2aec81e->enter($__internal_a5849d9426b70a88e9979438f412b17ee1fd78a2258eecffdad995e4f2aec81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetUserBundle:Security:login.html.twig"));

        // line 3
        echo "

";
        // line 6
        echo "

";
        // line 8
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 9
            echo "    <div id=\"identifiants\">
        <p> <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetuser/images/User-128.png"), "html", null, true);
            echo "\"><br>
            <span id=\"usernameSpan\"> ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
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
        
        $__internal_a5849d9426b70a88e9979438f412b17ee1fd78a2258eecffdad995e4f2aec81e->leave($__internal_a5849d9426b70a88e9979438f412b17ee1fd78a2258eecffdad995e4f2aec81e_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  52 => 16,  46 => 13,  39 => 11,  35 => 10,  32 => 9,  30 => 8,  26 => 6,  22 => 3,);
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
