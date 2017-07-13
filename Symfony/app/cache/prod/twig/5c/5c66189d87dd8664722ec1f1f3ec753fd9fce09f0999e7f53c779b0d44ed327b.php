<?php

/* TwigBundle:Exception:error503.html.twig */
class __TwigTemplate_1a10446746833dc1110cdd686f137ab7bdaebd2e1ce6213078177248be24a8de extends Twig_Template
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
        <title>Maintenance en cours</title>
        <style>
            html, body {
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                background-color: #1F4E79;
            }

            #maintenance_message_container {
                display: table;
                height: 100%;
                width: 100%;
            }

            #maintenance_message_vertical_aligner {
                display: table-cell;
                vertical-align: middle;
            }

            #maintenance_message {
                text-align: center;
                font-size: calc(20px + 1vw);
                color: white;
            }

            #maintenance_message img {
                width: 250px;
            }
        </style>
    </head>

    <body>
        <div id=\"maintenance_message_container\">
            <div id=\"maintenance_message_vertical_aligner\">
                <p id=\"maintenance_message\">
                    <img src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetaccueil/images/LOGO NOX.jpg"), "html", null, true);
        echo "\" alt=\"Logo NOX\"><br />
                    L'intranet est en cours de maintenance, merci de revenir dans quelques instants...
                </p>
            </div>
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error503.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 43,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error503.html.twig", "C:\\wamp\\www\\Symfony\\app/Resources/TwigBundle/views/Exception/error503.html.twig");
    }
}
