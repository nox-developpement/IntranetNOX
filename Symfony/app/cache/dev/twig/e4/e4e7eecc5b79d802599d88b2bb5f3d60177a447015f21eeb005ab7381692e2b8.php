<?php

/* NoxIntranetAccueilBundle:CharteInformatique:charteInformatique.html.twig */
class __TwigTemplate_a56e5ed50fff15bd1771db0291e5ecc37e2c8c9f91f90eab309db52aabd783cc extends Twig_Template
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
        $__internal_0c42a37a698d40f5bf8c06c9a2bf2cfc5de67dc8f9e3f6bffc8cf454d5067156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c42a37a698d40f5bf8c06c9a2bf2cfc5de67dc8f9e3f6bffc8cf454d5067156->enter($__internal_0c42a37a698d40f5bf8c06c9a2bf2cfc5de67dc8f9e3f6bffc8cf454d5067156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAccueilBundle:CharteInformatique:charteInformatique.html.twig"));

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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCharteInformatique"]) ? $context["formCharteInformatique"] : $this->getContext($context, "formCharteInformatique")), 'form_start');
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCharteInformatique"]) ? $context["formCharteInformatique"] : $this->getContext($context, "formCharteInformatique")), "Read", array()), 'widget');
        echo "
            ";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCharteInformatique"]) ? $context["formCharteInformatique"] : $this->getContext($context, "formCharteInformatique")), "Read", array()), 'label');
        echo "
        </p>
        <p style=\"margin-bottom: 0;\">
            ";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formCharteInformatique"]) ? $context["formCharteInformatique"] : $this->getContext($context, "formCharteInformatique")), "Validate", array()), 'widget');
        echo "
        </p>
        ";
        // line 97
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formCharteInformatique"]) ? $context["formCharteInformatique"] : $this->getContext($context, "formCharteInformatique")), 'form_end');
        echo "
    </div>
</div>";
        
        $__internal_0c42a37a698d40f5bf8c06c9a2bf2cfc5de67dc8f9e3f6bffc8cf454d5067156->leave($__internal_0c42a37a698d40f5bf8c06c9a2bf2cfc5de67dc8f9e3f6bffc8cf454d5067156_prof);

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
        return array (  138 => 97,  133 => 95,  127 => 92,  123 => 91,  117 => 88,  109 => 83,  78 => 55,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<style>
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

<script src={{ asset('./js/jquery-2.2.0.min.js') }}></script>
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
    {{ form_start(formCharteInformatique) }}
    <div id=\"form_wrapper\">
        <h1>Un instant s'il vous plaît...</h1>
        <p style=\"margin-top: 0;\">Veuillez imprimer la charte informatique, la lire, la signer puis l'envoyer par mail à Laurent Morisseau : <a href=\"mailto:l.morisseau@groupe-nox.com\">l.morisseau@groupe-nox.com</a></p>
        <p>
            <button id=\"print_charte\" href=\"{{ asset('bundles/noxintranetaccueil/Charte_Informatique/Charte informatique Groupe NOX Janvier 2016.pdf') }}\">Imprimer la charte informatique</button>
        </p>
        <p>
            {{ form_widget(formCharteInformatique.Read) }}
            {{ form_label(formCharteInformatique.Read) }}
        </p>
        <p style=\"margin-bottom: 0;\">
            {{ form_widget(formCharteInformatique.Validate) }}
        </p>
        {{ form_end(formCharteInformatique) }}
    </div>
</div>", "NoxIntranetAccueilBundle:CharteInformatique:charteInformatique.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AccueilBundle/Resources/views/CharteInformatique/charteInformatique.html.twig");
    }
}
