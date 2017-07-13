<?php

/* NoxIntranetUserBundle:Security:login.html.twig */
class __TwigTemplate_82f37499012c16bc359a3dc91fe6695cace73a5927d0ea1cd2ac04e1665560a9 extends Twig_Template
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
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetuser/images/User-128.png"), "html", null, true);
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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo " > Deconnexion </a> 
    </div>
";
        } else {
            // line 16
            echo "
    <div id='login' class=\"tooltipLogin\">
        <span class=\"tooltipLoginText\">
            Utilisez les mêmes identifiants que pour votre session Windows. <br />
            ex: Vous êtes 'Henry Martin', votre login est 'h.martin'.
        </span>
        <form action=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
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
        return "NoxIntranetUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 22,  49 => 16,  43 => 13,  36 => 11,  32 => 10,  29 => 9,  27 => 8,  23 => 6,  19 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetUserBundle:Security:login.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
