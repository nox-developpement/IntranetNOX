<?php

/* support/assets/font/index.html */
class __TwigTemplate_e45f56bfcd6b56cc3972d631a4e081cdb170ecc186924062e88a4256c1194eb3 extends Twig_Template
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
  <meta charset=\"utf-8\">
  <title>MyApp</title>
  <link rel=\"icon\" type=\"image/png\" href=\"/img/icon-16.png\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"57x57\" href=\".img/icon-57.png\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"/img/icon-72.png\" />
  <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"/img/icon-114.png\" />
  <link rel=\"stylesheet\" href=\"/styles/css/app.css\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <script type=\"text/javascript\" src=\"/js/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"/js/app.js\"></script>
  <!--[if lt IE 9]>
  <script src=\"//html5shiv.googlecode.com/svn/trunk/html5.js\"></script>
  <![endif]-->
  <!--[if IE]>
  <style type=\"text/css\">
  </style>
  <![endif]-->
</head>
<body>
<div id=\"container\">
</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "support/assets/font/index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/assets/font/index.html", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\assets\\font\\index.html");
    }
}
