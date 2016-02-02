<?php

/* NoxIntranetAccueilBundle:Accueil:accueil.html.twig */
class __TwigTemplate_d57e7b2cf90f6764b1b0c30011a96aa50174b5d164bf7c87747897765e693ae1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetAccueilBundle:Accueil:accueil.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
            'sousMessageAccueil' => array($this, 'block_sousMessageAccueil'),
            'contenu' => array($this, 'block_contenu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a388e1b37b6618f091c941c26326e5e393c8bdd269bdcaacc6df922106d864fa = $this->env->getExtension("native_profiler");
        $__internal_a388e1b37b6618f091c941c26326e5e393c8bdd269bdcaacc6df922106d864fa->enter($__internal_a388e1b37b6618f091c941c26326e5e393c8bdd269bdcaacc6df922106d864fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAccueilBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a388e1b37b6618f091c941c26326e5e393c8bdd269bdcaacc6df922106d864fa->leave($__internal_a388e1b37b6618f091c941c26326e5e393c8bdd269bdcaacc6df922106d864fa_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_0b6a5f582bb42dc646675d9a2276a8613839f98c97ecd53f88ebe05aa000a724 = $this->env->getExtension("native_profiler");
        $__internal_0b6a5f582bb42dc646675d9a2276a8613839f98c97ecd53f88ebe05aa000a724->enter($__internal_0b6a5f582bb42dc646675d9a2276a8613839f98c97ecd53f88ebe05aa000a724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Accueil ";
        
        $__internal_0b6a5f582bb42dc646675d9a2276a8613839f98c97ecd53f88ebe05aa000a724->leave($__internal_0b6a5f582bb42dc646675d9a2276a8613839f98c97ecd53f88ebe05aa000a724_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_f2d0bb35a048ba361c89b86bf77c9fef8603d0c4ae4a620054932dbb0f38ea1b = $this->env->getExtension("native_profiler");
        $__internal_f2d0bb35a048ba361c89b86bf77c9fef8603d0c4ae4a620054932dbb0f38ea1b->enter($__internal_f2d0bb35a048ba361c89b86bf77c9fef8603d0c4ae4a620054932dbb0f38ea1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Bienvenue ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
            echo " ";
        }
        
        $__internal_f2d0bb35a048ba361c89b86bf77c9fef8603d0c4ae4a620054932dbb0f38ea1b->leave($__internal_f2d0bb35a048ba361c89b86bf77c9fef8603d0c4ae4a620054932dbb0f38ea1b_prof);

    }

    // line 6
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_4debc695d383281eac9e39afa51ee9d8511a5ce34755abe55f1c1682a73a3136 = $this->env->getExtension("native_profiler");
        $__internal_4debc695d383281eac9e39afa51ee9d8511a5ce34755abe55f1c1682a73a3136->enter($__internal_4debc695d383281eac9e39afa51ee9d8511a5ce34755abe55f1c1682a73a3136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Le : ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "d/m/Y"), "html", null, true);
        
        $__internal_4debc695d383281eac9e39afa51ee9d8511a5ce34755abe55f1c1682a73a3136->leave($__internal_4debc695d383281eac9e39afa51ee9d8511a5ce34755abe55f1c1682a73a3136_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_8636beb2926adb8cdf51246785f92519297289f0862bc601ff828348c43bea93 = $this->env->getExtension("native_profiler");
        $__internal_8636beb2926adb8cdf51246785f92519297289f0862bc601ff828348c43bea93->enter($__internal_8636beb2926adb8cdf51246785f92519297289f0862bc601ff828348c43bea93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

        // line 9
        echo "

    ";
        // line 11
        if (array_key_exists("news", $context)) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
            foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
                // line 13
                echo "
            <div class=\"divNews\">

                <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "lien", array(), "array"), "html", null, true);
                echo "', 'News SI');\">
                    <img 
                        src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
                echo "\" alt=\"PDF\" 
                        onmouseover=\"this.src = '";
                // line 19
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png"), "html", null, true);
                echo "';\" 
                        onmouseout=\"this.src = '";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png"), "html", null, true);
                echo "';\"
                        >
                </a>

                <ul>

                    <li> Nom du fichier : ";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "nom", array(), "array"), "html", null, true);
                echo " </li>

                    ";
                // line 28
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["new"], "proprietes", array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["propriete"]) {
                    // line 29
                    echo "
                        ";
                    // line 30
                    if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Title")) {
                        echo " <li> Titre : ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                        echo " </li> ";
                    }
                    // line 31
                    echo "
                        ";
                    // line 32
                    if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Author")) {
                        echo " <li> Auteur : ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                        echo " </li> ";
                    }
                    // line 33
                    echo "
                        ";
                    // line 34
                    if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Subject")) {
                        echo " <li> Sujet : ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                        echo " </li> ";
                    }
                    // line 35
                    echo "
                        ";
                    // line 36
                    if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Keywords")) {
                        echo " <li> Mots clés : ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                        echo " </li> ";
                    }
                    // line 37
                    echo "
                        ";
                    // line 38
                    if (($this->getAttribute($context["propriete"], "label", array(), "array") == "Pages")) {
                        echo " <li> Nombre de page(s) : ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["propriete"], "valeur", array(), "array"), "html", null, true);
                        echo " </li> ";
                    }
                    // line 39
                    echo "
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['propriete'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "
                    <li> Posté le : ";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["new"], "dateEnvoi", array(), "array"), "html", null, true);
                echo " </li>

                </ul>

            </div>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "    ";
        }
        // line 50
        echo "
    <div class='zoneEditionAccueil'>

        ";
        // line 53
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 54
            echo "
            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>

        ";
        }
        // line 58
        echo "
        ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "

        ";
        // line 64
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
        echo "

        ";
        // line 67
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

        ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

    </div>


    <div class='zoneTexteAccueil'>
        <p id='edito'> Edito </p>
        <div id='texteAccueil'>
            ";
        // line 77
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
        echo "
        </div>
    </div>

    <div id=\"zoneNewsAccueil\">

        <script src=";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-2.2.0.min.js"), "html", null, true);
        echo "></script>

        <!-- Affichage défilant mise à jours Externe -->
        <p class=\"maj\"> Mises à jour Externe </p>
        ";
        // line 87
        if (array_key_exists("majExterne", $context)) {
            // line 88
            echo "            <div id='majExterne'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsExterne = new Array();

                ";
            // line 96
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majExterne"]) ? $context["majExterne"] : $this->getContext($context, "majExterne")));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 97
                echo "                    newsExterne.push(\"<span class='dateMaj'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "dateEnvoi", array(), "array"), "html", null, true);
                echo "</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "lien", array(), "array"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "nom", array(), "array"), "html", null, true);
                echo "');\\\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "nom", array(), "array"), "html", null, true);
                echo "</a>\");
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "
                    function showNews(arr) {
                        \$('#majExterne p').fadeTo(3000, 100);
                        \$('#majExterne p').html(arr[0]);
                        \$('#majExterne p').fadeTo(3000, 0); // fade to \"0\" with a 1000ms duration
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majExterne p').fadeTo(3000, 100);
                                    \$('#majExterne p').html(arr[i]);
                                    \$('#majExterne p').fadeTo(3000, 0); // fade to \"0\" with a 1000ms duration
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsExterne);

            </script>
        ";
        }
        // line 120
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Interne -->
        <p class=\"maj\"> Mises à jour Interne </p>
        ";
        // line 124
        if (array_key_exists("majInterne", $context)) {
            // line 125
            echo "            <div id='majInterne'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsInterne = new Array();

                ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majInterne"]) ? $context["majInterne"] : $this->getContext($context, "majInterne")));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 134
                echo "                    newsInterne.push(\"<span class='dateMaj'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "dateEnvoi", array(), "array"), "html", null, true);
                echo "</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "lien", array(), "array"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "nom", array(), "array"), "html", null, true);
                echo "');\\\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "nom", array(), "array"), "html", null, true);
                echo "</a>\");
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "
                    function showNews(arr) {
                        \$('#majInterne p').fadeTo(3000, 100);
                        \$('#majInterne p').html(arr[0]);
                        \$('#majInterne p').fadeTo(3000, 0);
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majInterne p').fadeTo(3000, 100);
                                    \$('#majInterne p').html(arr[i]);
                                    \$('#majInterne p').fadeTo(3000, 0);
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsInterne);

            </script>
        ";
        }
        // line 157
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Marketing -->
        <p class=\"maj\"> Mises à jour Marketing </p>
        ";
        // line 161
        if (array_key_exists("majMarketing", $context)) {
            // line 162
            echo "            <div id='majMarketing'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsMarketing = new Array();

                ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majMarketing"]) ? $context["majMarketing"] : $this->getContext($context, "majMarketing")));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 171
                echo "                    newsMarketing.push(\"<span class='dateMaj'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "dateEnvoi", array(), "array"), "html", null, true);
                echo "</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "lien", array(), "array"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "nom", array(), "array"), "html", null, true);
                echo "');\\\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "nom", array(), "array"), "html", null, true);
                echo "</a>\");
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 173
            echo "
                    function showNews(arr) {
                        \$('#majMarketing p').fadeTo(3000, 100);
                        \$('#majMarketing p').html(arr[0]);
                        \$('#majMarketing p').fadeTo(3000, 0);
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majMarketing p').fadeTo(3000, 100);
                                    \$('#majMarketing p').html(arr[i]);
                                    \$('#majMarketing p').fadeTo(3000, 0);
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsMarketing);

            </script>
        ";
        }
        // line 194
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours SI -->
        <p class=\"maj\"> Mises à jour SI </p>
        ";
        // line 198
        if (array_key_exists("majSI", $context)) {
            // line 199
            echo "            <div id='majSI'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsSI = new Array();

                ";
            // line 207
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majSI"]) ? $context["majSI"] : $this->getContext($context, "majSI")));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 208
                echo "                    newsSI.push(\"<span class='dateMaj'>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "dateEnvoi", array(), "array"), "html", null, true);
                echo "</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "lien", array(), "array"), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "nom", array(), "array"), "html", null, true);
                echo "');\\\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "nom", array(), "array"), "html", null, true);
                echo "</a>\");
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 210
            echo "
                    function showNews(arr) {
                        \$('#majSI p').fadeTo(3000, 100);
                        \$('#majSI p').html(arr[0]);
                        \$('#majSI p').fadeTo(3000, 0);
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majSI p').fadeTo(3000, 100);
                                    \$('#majSI p').html(arr[i]);
                                    \$('#majSI p').fadeTo(3000, 0);
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsSI);

            </script>
        ";
        }
        // line 231
        echo "        <!-------------------------------------------------->

    </div>

";
        
        $__internal_8636beb2926adb8cdf51246785f92519297289f0862bc601ff828348c43bea93->leave($__internal_8636beb2926adb8cdf51246785f92519297289f0862bc601ff828348c43bea93_prof);

    }

    public function getTemplateName()
    {
        return "NoxIntranetAccueilBundle:Accueil:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  504 => 231,  481 => 210,  466 => 208,  462 => 207,  452 => 199,  450 => 198,  444 => 194,  421 => 173,  406 => 171,  402 => 170,  392 => 162,  390 => 161,  384 => 157,  361 => 136,  346 => 134,  342 => 133,  332 => 125,  330 => 124,  324 => 120,  301 => 99,  286 => 97,  282 => 96,  272 => 88,  270 => 87,  263 => 83,  254 => 77,  243 => 69,  237 => 67,  231 => 64,  226 => 61,  221 => 59,  218 => 58,  212 => 54,  210 => 53,  205 => 50,  202 => 49,  189 => 42,  186 => 41,  179 => 39,  173 => 38,  170 => 37,  164 => 36,  161 => 35,  155 => 34,  152 => 33,  146 => 32,  143 => 31,  137 => 30,  134 => 29,  130 => 28,  125 => 26,  116 => 20,  112 => 19,  108 => 18,  103 => 16,  98 => 13,  93 => 12,  91 => 11,  87 => 9,  81 => 8,  68 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Accueil {% endblock %}*/
/* */
/* {% block messageAccueil %}Bienvenue {% if app.user != null %} {{ app.user.firstname }} {{ app.user.lastname }} {% endif %}{% endblock %}*/
/* {% block sousMessageAccueil %}Le : {{ date()|date("d/m/Y") }}{% endblock %}*/
/* */
/* {% block contenu %}*/
/* */
/* */
/*     {% if news is defined %}*/
/*         {% for new in news %}*/
/* */
/*             <div class="divNews">*/
/* */
/*                 <a onclick="openDetailsPopUpWindow('http://' + document.location.hostname + '{{ new['lien'] }}', 'News SI');">*/
/*                     <img */
/*                         src="{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}" alt="PDF" */
/*                         onmouseover="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128-hover.png') }}';" */
/*                         onmouseout="this.src = '{{ asset('bundles/noxintranetcommunication/images/Adobe-PDF-Export-128.png') }}';"*/
/*                         >*/
/*                 </a>*/
/* */
/*                 <ul>*/
/* */
/*                     <li> Nom du fichier : {{ new['nom'] }} </li>*/
/* */
/*                     {% for propriete in new['proprietes'] %}*/
/* */
/*                         {% if propriete['label'] == 'Title' %} <li> Titre : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                         {% if propriete['label'] == 'Author' %} <li> Auteur : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                         {% if propriete['label'] == 'Subject' %} <li> Sujet : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                         {% if propriete['label'] == 'Keywords' %} <li> Mots clés : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                         {% if propriete['label'] == 'Pages' %} <li> Nombre de page(s) : {{ propriete['valeur'] }} </li> {% endif %}*/
/* */
/*                     {% endfor %}*/
/* */
/*                     <li> Posté le : {{ new['dateEnvoi'] }} </li>*/
/* */
/*                 </ul>*/
/* */
/*             </div>*/
/* */
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     <div class='zoneEditionAccueil'>*/
/* */
/*         {% if is_granted('ROLE_ADMIN') %}*/
/* */
/*             <button id='texteEditButton' class='boutonFormulaire'>Editer</button>*/
/* */
/*         {% endif %}*/
/* */
/*         {{ form_start(formulaire, {'attr': {'id': 'formulaireTexte' }}) }}*/
/* */
/*         {{ form_errors(formulaire) }}*/
/* */
/*         {# Affichage des erreurs pour ce champ précis. #}*/
/*         {{ form_errors(formulaire.text) }}*/
/* */
/*         {# Génération de l'input. #}*/
/*         {{ form_widget(formulaire.text, {'attr': {'class': 'textField' }}) }}*/
/* */
/*         {{ form_end(formulaire) }}*/
/* */
/*     </div>*/
/* */
/* */
/*     <div class='zoneTexteAccueil'>*/
/*         <p id='edito'> Edito </p>*/
/*         <div id='texteAccueil'>*/
/*             {{ texte|raw }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="zoneNewsAccueil">*/
/* */
/*         <script src={{ asset('./js/jquery-2.2.0.min.js') }}></script>*/
/* */
/*         <!-- Affichage défilant mise à jours Externe -->*/
/*         <p class="maj"> Mises à jour Externe </p>*/
/*         {% if majExterne is defined %}*/
/*             <div id='majExterne'>*/
/*                 <p></p>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsExterne = new Array();*/
/* */
/*                 {% for maj in majExterne %}*/
/*                     newsExterne.push("<span class='dateMaj'>{{ maj['dateEnvoi'] }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{ maj['lien'] }}', '{{ maj['nom'] }}');\">{{ maj['nom'] }}</a>");*/
/*                 {% endfor %}*/
/* */
/*                     function showNews(arr) {*/
/*                         $('#majExterne p').fadeTo(3000, 100);*/
/*                         $('#majExterne p').html(arr[0]);*/
/*                         $('#majExterne p').fadeTo(3000, 0); // fade to "0" with a 1000ms duration*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#majExterne p').fadeTo(3000, 100);*/
/*                                     $('#majExterne p').html(arr[i]);*/
/*                                     $('#majExterne p').fadeTo(3000, 0); // fade to "0" with a 1000ms duration*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 6000);*/
/*                     }*/
/* */
/*                     showNews(newsExterne);*/
/* */
/*             </script>*/
/*         {% endif %}*/
/*         <!-------------------------------------------------->*/
/* */
/*         <!-- Affichage défilant mise à jours Interne -->*/
/*         <p class="maj"> Mises à jour Interne </p>*/
/*         {% if majInterne is defined %}*/
/*             <div id='majInterne'>*/
/*                 <p></p>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsInterne = new Array();*/
/* */
/*                 {% for maj in majInterne %}*/
/*                     newsInterne.push("<span class='dateMaj'>{{ maj['dateEnvoi'] }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{ maj['lien'] }}', '{{ maj['nom'] }}');\">{{ maj['nom'] }}</a>");*/
/*                 {% endfor %}*/
/* */
/*                     function showNews(arr) {*/
/*                         $('#majInterne p').fadeTo(3000, 100);*/
/*                         $('#majInterne p').html(arr[0]);*/
/*                         $('#majInterne p').fadeTo(3000, 0);*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#majInterne p').fadeTo(3000, 100);*/
/*                                     $('#majInterne p').html(arr[i]);*/
/*                                     $('#majInterne p').fadeTo(3000, 0);*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 6000);*/
/*                     }*/
/* */
/*                     showNews(newsInterne);*/
/* */
/*             </script>*/
/*         {% endif %}*/
/*         <!-------------------------------------------------->*/
/* */
/*         <!-- Affichage défilant mise à jours Marketing -->*/
/*         <p class="maj"> Mises à jour Marketing </p>*/
/*         {% if majMarketing is defined %}*/
/*             <div id='majMarketing'>*/
/*                 <p></p>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsMarketing = new Array();*/
/* */
/*                 {% for maj in majMarketing %}*/
/*                     newsMarketing.push("<span class='dateMaj'>{{ maj['dateEnvoi'] }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{ maj['lien'] }}', '{{ maj['nom'] }}');\">{{ maj['nom'] }}</a>");*/
/*                 {% endfor %}*/
/* */
/*                     function showNews(arr) {*/
/*                         $('#majMarketing p').fadeTo(3000, 100);*/
/*                         $('#majMarketing p').html(arr[0]);*/
/*                         $('#majMarketing p').fadeTo(3000, 0);*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#majMarketing p').fadeTo(3000, 100);*/
/*                                     $('#majMarketing p').html(arr[i]);*/
/*                                     $('#majMarketing p').fadeTo(3000, 0);*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 6000);*/
/*                     }*/
/* */
/*                     showNews(newsMarketing);*/
/* */
/*             </script>*/
/*         {% endif %}*/
/*         <!-------------------------------------------------->*/
/* */
/*         <!-- Affichage défilant mise à jours SI -->*/
/*         <p class="maj"> Mises à jour SI </p>*/
/*         {% if majSI is defined %}*/
/*             <div id='majSI'>*/
/*                 <p></p>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsSI = new Array();*/
/* */
/*                 {% for maj in majSI %}*/
/*                     newsSI.push("<span class='dateMaj'>{{ maj['dateEnvoi'] }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{ maj['lien'] }}', '{{ maj['nom'] }}');\">{{ maj['nom'] }}</a>");*/
/*                 {% endfor %}*/
/* */
/*                     function showNews(arr) {*/
/*                         $('#majSI p').fadeTo(3000, 100);*/
/*                         $('#majSI p').html(arr[0]);*/
/*                         $('#majSI p').fadeTo(3000, 0);*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#majSI p').fadeTo(3000, 100);*/
/*                                     $('#majSI p').html(arr[i]);*/
/*                                     $('#majSI p').fadeTo(3000, 0);*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 6000);*/
/*                     }*/
/* */
/*                     showNews(newsSI);*/
/* */
/*             </script>*/
/*         {% endif %}*/
/*         <!-------------------------------------------------->*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
