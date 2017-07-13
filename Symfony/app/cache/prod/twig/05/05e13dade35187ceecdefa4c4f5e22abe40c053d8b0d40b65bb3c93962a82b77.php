<?php

/* @NoxIntranetAccueil/Accueil/accesInterdit.html.twig */
class __TwigTemplate_4d1f1014c4f682dde4aeaf8450c213cd11eea98176502ade90ddbb47e6e3fd24 extends Twig_Template
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
        echo "<!DOCTYPE html>

<html>

    <head>
        <meta charset=\"utf-8\" />
        <title> Groupe-Nox / Connexion requise </title>


        ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "fc3b92b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc3b92b_0") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fc3b92b_style_1.css");
            // line 11
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        } else {
            // asset "fc3b92b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_assetic_fc3b92b") : $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/fc3b92b.css");
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" />
        ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "/Symfony/web/favicon.ico\" />

        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <style type=\"text/css\">
            @font-face {
                font-family: 'NoxFont'; 
                src:    url(";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fonts/MuseoSans_100.otf"), "html", null, true);
        echo ") format('opentype');
            }

            #alert {
                background-image: url(";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetaccueil/images/AccueilIntranetBackground.png"), "html", null, true);
        echo ");
                background-position: center; 
                background-repeat: no-repeat;
                background-size: 100%;
            }

            #alertMessage {
                text-align: center;
                font-size: 2vw;
                color: red;
            }

            #tutoConnexion {
                margin-top: 1%; 
                width: 20%;
            }

            #hideAlertButtonParagraph {
                margin-top: 2%; 
                margin-bottom: 1%;
            }
        </style>
    </head>

    <body>
        <div id='alert'>
            <div id='alertContainer'>
                <div id='alertMessage'>
                    <img id='tutoConnexion' src='";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetaccueil/images/interdit.png"), "html", null, true);
        echo "' alt='Accés interdit' /><br />
                    Vous n'avez pas les droits requis pour accéder à cette section.
                    <p id='hideAlertButtonParagraph'>
                        <button id='hideAlertButton' onclick=\"location.href = '";
        // line 55
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_accueil");
        echo "';\">J'ai compris</button>
                    </p>
                </div>
            </div>
        </div>
    </body>

</html>
";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetAccueil/Accueil/accesInterdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 55,  101 => 52,  70 => 24,  63 => 20,  56 => 16,  51 => 14,  48 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetAccueil/Accueil/accesInterdit.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AccueilBundle\\Resources\\views\\Accueil\\accesInterdit.html.twig");
    }
}
