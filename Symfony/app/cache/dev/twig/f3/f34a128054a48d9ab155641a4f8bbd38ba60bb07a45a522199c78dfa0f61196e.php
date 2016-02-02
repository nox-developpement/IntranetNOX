<?php

/* NoxIntranetUserBundle:Security:ADlogin.html.twig */
class __TwigTemplate_3212d75096745a299cf293a7a42855e7a95695c3443c0aaf109385cb732f83a6 extends Twig_Template
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
        $__internal_cdebd74b285c6c5c1ef71888c4e8e64e199ba111afe9ff079971896ce3a47124 = $this->env->getExtension("native_profiler");
        $__internal_cdebd74b285c6c5c1ef71888c4e8e64e199ba111afe9ff079971896ce3a47124->enter($__internal_cdebd74b285c6c5c1ef71888c4e8e64e199ba111afe9ff079971896ce3a47124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetUserBundle:Security:ADlogin.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 2
            echo "    <div id=\"identifiants\">
        <p> <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetuser/images/User-128-hover.png"), "html", null, true);
            echo "\" alt='Utilisateur' onmousedown=\"return false;\"><br>
            <span id=\"usernameSpan\"> ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
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
        
        $__internal_cdebd74b285c6c5c1ef71888c4e8e64e199ba111afe9ff079971896ce3a47124->leave($__internal_cdebd74b285c6c5c1ef71888c4e8e64e199ba111afe9ff079971896ce3a47124_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetUserBundle:Security:ADlogin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  44 => 9,  38 => 6,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
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
