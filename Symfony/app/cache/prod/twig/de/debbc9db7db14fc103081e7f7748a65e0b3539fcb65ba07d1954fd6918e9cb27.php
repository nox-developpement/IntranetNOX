<?php

/* NoxIntranetAccueilBundle:CharteInformatique:charteInformatique.html.twig */
class __TwigTemplate_ec55bc7bed416136cc516168d7af1143a37c88594e05aa2c9250d63b9e59bf88 extends Twig_Template
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
        echo "<style>
    html, body {
        padding: 0;
        margin: 0;
        background-color: #1F4E79;
    }

    #form_container {
        display: table;
        margin: auto;
        height: 100%;
        width: 50%;
    }

    #form_wrapper {
        border: 1px solid black;
        border-radius: 10px;
        background-color: white;
        padding: 1em;
    }

    #form_wrapper h1 {
        margin-top: 0; 
        color: #1F4E79;
    }

    form[name='form'] {
        display: table-cell;
        margin: 0 auto;    
        vertical-align: middle;
    }

    form[name='form'] p {
        font-size: calc(15px + 0.2vw);
        text-align: center;
        color: #1F4E79;
    }

    #form_Validate {
        background-color: rgb(31,78,121);
        color: white;
        border-radius: 5px;
        border: inset 1px rgb(31,78,121);
        padding: 1%;
        cursor: pointer;
        font-size: calc(15px + 0.2vw);
    }

    #form_Validate:hover {
        color: #010101;
        background-color: #FEFEFE;
    }
</style>

<script src=";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery-2.2.0.min.js"), "html", null, true);
        echo "></script>
<script>
    \$(window).load(function () {
        // Lors du clique sur le bouton d'impression de la charte...
        \$(\"#print_charte\").click(function () {
            // Calcule des dimensions et de la position de la popup.
            var height = \$(window).height() * 0.65;
            var width = \$(window).width() * 0.65;
            var top = (\$(window).height() - \$(window).height() * 0.65) / 2;
            var left = (\$(window).width() - \$(window).width() * 0.65) / 2;

            // Ouverture de la popup.
            var charte_popup = window.open(\$(this).attr('href'), \"Charte informatique\", \"height=\" + height + \", width=\" + width + \", top=\" + top + \", left=\" + left);

            // Une fois la popup chargé...
            \$(charte_popup).ready(function () {
                charte_popup.print(); // On lance l'impression de la charte.
            });

            // On affiche le bouton de validation du formulaire.
            \$(\"#form_Validate\").show();

            return false;
        });
    });
</script>

<div id=\"form_container\">
    ";
        // line 83
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCharteInformatique"]) ? $context["formCharteInformatique"] : null), 'form_start');
        echo "
    <div id=\"form_wrapper\">
        <h1>Un instant s'il vous plaît...</h1>
        <p style=\"margin-top: 0;\">Veuillez imprimer la charte informatique, la lire, la signer puis l'envoyer par mail à Laurent Morisseau : <a href=\"mailto:l.morisseau@groupe-nox.com\">l.morisseau@groupe-nox.com</a></p>
        <p>
            <button id=\"print_charte\" href=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetaccueil/Charte_Informatique/Charte informatique Groupe NOX Janvier 2016.pdf"), "html", null, true);
        echo "\">Imprimer la charte informatique</button>
        </p>
        <p>
            ";
        // line 91
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCharteInformatique"]) ? $context["formCharteInformatique"] : null), "Read", array()), 'widget');
        echo "
            ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCharteInformatique"]) ? $context["formCharteInformatique"] : null), "Read", array()), 'label');
        echo "
        </p>
        <p style=\"margin-bottom: 0;\">
            ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCharteInformatique"]) ? $context["formCharteInformatique"] : null), "Validate", array()), 'widget');
        echo "
        </p>
        ";
        // line 97
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCharteInformatique"]) ? $context["formCharteInformatique"] : null), 'form_end');
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "NoxIntranetAccueilBundle:CharteInformatique:charteInformatique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 97,  130 => 95,  124 => 92,  120 => 91,  114 => 88,  106 => 83,  75 => 55,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetAccueilBundle:CharteInformatique:charteInformatique.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AccueilBundle/Resources/views/CharteInformatique/charteInformatique.html.twig");
    }
}
