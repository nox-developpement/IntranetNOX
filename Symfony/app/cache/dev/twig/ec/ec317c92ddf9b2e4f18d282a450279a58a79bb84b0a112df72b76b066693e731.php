<?php

/* NoxIntranetUserBundle:Security:ADlogin.html.twig */
class __TwigTemplate_f2985af5cd9120e32fd82b3d463c2c9e950ff1a75345238127087ce1ba43b138 extends Twig_Template
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
        $__internal_df1dbaa9b3f0b1ad0051e35e1e8e99f53a39cfba1a9653a916fa68902806b171 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1dbaa9b3f0b1ad0051e35e1e8e99f53a39cfba1a9653a916fa68902806b171->enter($__internal_df1dbaa9b3f0b1ad0051e35e1e8e99f53a39cfba1a9653a916fa68902806b171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetUserBundle:Security:ADlogin.html.twig"));

        // line 1
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 2
            echo "    <div id=\"identifiants\">
        <p> <img src=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetuser/images/User-128-hover.png"), "html", null, true);
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo " > Déconnexion </a> 
    </div>
";
        } else {
            // line 9
            echo "

    <div id='login' class=\"tooltipLogin\">
        <span class=\"tooltipLoginText\">
            Utilisez les mêmes identifiants que pour votre session Windows. <br />
            ex: Vous êtes 'Henry Martin', votre login est 'h.martin'.
        </span>
        <form method=\"POST\" action=\"";
            // line 16
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("AD_connexion_check");
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
        
        $__internal_df1dbaa9b3f0b1ad0051e35e1e8e99f53a39cfba1a9653a916fa68902806b171->leave($__internal_df1dbaa9b3f0b1ad0051e35e1e8e99f53a39cfba1a9653a916fa68902806b171_prof);

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
        return array (  53 => 16,  44 => 9,  38 => 6,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if app.user != null %}
    <div id=\"identifiants\">
        <p> <img src=\"{{ asset('bundles/noxintranetuser/images/User-128-hover.png') }}\" alt='Utilisateur' onmousedown=\"return false;\"><br>
            <span id=\"usernameSpan\"> {{ app.user.firstname }} {{ app.user.lastname }} </span>
        </p>
        <a href= {{ path('logout') }} > Déconnexion </a> 
    </div>
{% else %}


    <div id='login' class=\"tooltipLogin\">
        <span class=\"tooltipLoginText\">
            Utilisez les mêmes identifiants que pour votre session Windows. <br />
            ex: Vous êtes 'Henry Martin', votre login est 'h.martin'.
        </span>
        <form method=\"POST\" action=\"{{ path(\"AD_connexion_check\") }}\" name='connexion'>

            <input type='text' id='username' name='username' placeholder=\"Nom d'utilisateur\">

            <input type='password' id='password'  name='password' placeholder=\"Mot de passe\">

            <p>
                <input class=\"boutonFormulaireInverse\" type='submit' value='Connexion'>
            </p>

        </form>
    </div>

{% endif %}
", "NoxIntranetUserBundle:Security:ADlogin.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\UserBundle/Resources/views/Security/ADlogin.html.twig");
    }
}
