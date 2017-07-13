<?php

/* NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig */
class __TwigTemplate_8caecbe96e0f31fedf6d071dc8c900c17f838fda51d99ee549722f65934cc732 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'textEncart' => array($this, 'block_textEncart'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd3e6d1c392baf057d52fdeaa6a7e819c171c1dbcd7d485be357595f4cba420c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd3e6d1c392baf057d52fdeaa6a7e819c171c1dbcd7d485be357595f4cba420c->enter($__internal_fd3e6d1c392baf057d52fdeaa6a7e819c171c1dbcd7d485be357595f4cba420c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd3e6d1c392baf057d52fdeaa6a7e819c171c1dbcd7d485be357595f4cba420c->leave($__internal_fd3e6d1c392baf057d52fdeaa6a7e819c171c1dbcd7d485be357595f4cba420c_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_f09f173ec98f5af25f255c1767d3e42fb2bcb81cf36fd3b17028208a3594b36d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f09f173ec98f5af25f255c1767d3e42fb2bcb81cf36fd3b17028208a3594b36d->enter($__internal_f09f173ec98f5af25f255c1767d3e42fb2bcb81cf36fd3b17028208a3594b36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        // line 4
        echo "    Serveurs
";
        
        $__internal_f09f173ec98f5af25f255c1767d3e42fb2bcb81cf36fd3b17028208a3594b36d->leave($__internal_f09f173ec98f5af25f255c1767d3e42fb2bcb81cf36fd3b17028208a3594b36d_prof);

    }

    // line 7
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_e05c34d2df26b81f37bc37e8a66a6799f9f868c97b14927a20d49806c8b3809a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e05c34d2df26b81f37bc37e8a66a6799f9f868c97b14927a20d49806c8b3809a->enter($__internal_e05c34d2df26b81f37bc37e8a66a6799f9f868c97b14927a20d49806c8b3809a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Serveurs";
        
        $__internal_e05c34d2df26b81f37bc37e8a66a6799f9f868c97b14927a20d49806c8b3809a->leave($__internal_e05c34d2df26b81f37bc37e8a66a6799f9f868c97b14927a20d49806c8b3809a_prof);

    }

    // line 9
    public function block_textEncart($context, array $blocks = array())
    {
        $__internal_092f6484626c6c4dda69955eca406c263a23236e7fdc743cde7438dbd4e81adb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_092f6484626c6c4dda69955eca406c263a23236e7fdc743cde7438dbd4e81adb->enter($__internal_092f6484626c6c4dda69955eca406c263a23236e7fdc743cde7438dbd4e81adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textEncart"));

        // line 10
        echo "
    ";
        // line 11
        if (array_key_exists("text", $context)) {
            echo (isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"));
        }
        // line 12
        echo "
    ";
        // line 13
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "
        ";
            // line 15
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexteEncart")));
            echo "

        ";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
            echo "

        ";
            // line 20
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
            echo "

        ";
            // line 23
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textEncartField")));
            echo "

        ";
            // line 25
            echo             $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
            echo "

        <img src='";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Text-Editor-32.png"), "html", null, true);
            echo "' id='texteEncartImg'>

    ";
        }
        // line 30
        echo "
";
        
        $__internal_092f6484626c6c4dda69955eca406c263a23236e7fdc743cde7438dbd4e81adb->leave($__internal_092f6484626c6c4dda69955eca406c263a23236e7fdc743cde7438dbd4e81adb_prof);

    }

    // line 33
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_159262f1f6c79556f5e8bee6545ca77f6aa60dcb0479ac328f4d6d3e8da9f8fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_159262f1f6c79556f5e8bee6545ca77f6aa60dcb0479ac328f4d6d3e8da9f8fa->enter($__internal_159262f1f6c79556f5e8bee6545ca77f6aa60dcb0479ac328f4d6d3e8da9f8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 34
        echo "
    <div id=\"divAdministrationAdmin\">

        <table>

            <tr>
                <td> Agence </td>
                <td> Connexion </td>
                <td> Déconnexion </td>
            </tr>

            ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["serveurs"]) ? $context["serveurs"] : $this->getContext($context, "serveurs")));
        foreach ($context['_seq'] as $context["_key"] => $context["serveur"]) {
            // line 46
            echo "

                <tr>
                    <td>
                        <p> ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["serveur"], "agence", array()), "html", null, true);
            echo " </p>
                    </td>
                    <td> 
                        <a class='lienArchive' href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_serveur_download_script_connexion", array("agence" => $this->getAttribute($context["serveur"], "agence", array()))), "html", null, true);
            echo "\" onclick=\"popupDownloadServeurConnexion();\"> 
                            <img src=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Network-01-32.png"), "html", null, true);
            echo "\"> 
                        </a>
                    </td>
                    <td> 
                        <a class='lienArchive' href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_serveur_download_script_deconnexion");
            echo "\" onclick=\"popupDownloadServeurDeconnexion();\"> 
                            <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Network-Disconnected-32.png"), "html", null, true);
            echo "\"> 
                        </a>
                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serveur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "

        </table>

    </div>

</div>

";
        
        $__internal_159262f1f6c79556f5e8bee6545ca77f6aa60dcb0479ac328f4d6d3e8da9f8fa->leave($__internal_159262f1f6c79556f5e8bee6545ca77f6aa60dcb0479ac328f4d6d3e8da9f8fa_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 65,  175 => 59,  171 => 58,  164 => 54,  160 => 53,  154 => 50,  148 => 46,  144 => 45,  131 => 34,  125 => 33,  117 => 30,  111 => 27,  106 => 25,  100 => 23,  94 => 20,  89 => 17,  84 => 15,  81 => 14,  79 => 13,  76 => 12,  72 => 11,  69 => 10,  63 => 9,  51 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::layout.html.twig\" %}

{% block titrePage %}
    Serveurs
{% endblock %}

{% block messageAccueil %}Serveurs{% endblock %}

{% block textEncart %}

    {% if text is defined %}{{ text|raw }}{% endif %}

    {% if is_granted('ROLE_ADMIN') %}

        {{ form_start(formulaire, {'attr': {'id': 'formulaireTexteEncart' }}) }}

        {{ form_errors(formulaire) }}

        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(formulaire.text) }}

        {# Génération de l'input. #}
        {{ form_widget(formulaire.text, {'attr': {'class': 'textEncartField'}}) }}

        {{ form_end(formulaire) }}

        <img src='{{ asset('bundles/noxintranetressources/images/Text-Editor-32.png') }}' id='texteEncartImg'>

    {% endif %}

{% endblock %}

{% block contenu %}

    <div id=\"divAdministrationAdmin\">

        <table>

            <tr>
                <td> Agence </td>
                <td> Connexion </td>
                <td> Déconnexion </td>
            </tr>

            {% for serveur in serveurs %}


                <tr>
                    <td>
                        <p> {{ serveur.agence }} </p>
                    </td>
                    <td> 
                        <a class='lienArchive' href=\"{{ path('nox_intranet_serveur_download_script_connexion', { 'agence': serveur.agence }) }}\" onclick=\"popupDownloadServeurConnexion();\"> 
                            <img src=\"{{ asset('bundles/noxintranetressources/images/Network-01-32.png') }}\"> 
                        </a>
                    </td>
                    <td> 
                        <a class='lienArchive' href=\"{{ path('nox_intranet_serveur_download_script_deconnexion') }}\" onclick=\"popupDownloadServeurDeconnexion();\"> 
                            <img src=\"{{ asset('bundles/noxintranetressources/images/Network-Disconnected-32.png') }}\"> 
                        </a>
                    </td>
                </tr>

            {% endfor %}


        </table>

    </div>

</div>

{% endblock %}", "NoxIntranetRessourcesBundle:Serveurs:serveurs.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle/Resources/views/Serveurs/serveurs.html.twig");
    }
}
