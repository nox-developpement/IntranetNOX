<?php

/* NoxIntranetAccueilBundle:Accueil:accueil.html.twig */
class __TwigTemplate_34d2cb5b1b0895a4907ee1817d5dc6d0fa3fd5a42c038c1d5c5313f1ea17465a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Accueil ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Bienvenue ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "lastname", array()), "html", null, true);
            echo " ";
        }
    }

    // line 6
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        echo "Le : ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "d/m/Y"), "html", null, true);
    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        // line 9
        echo "

    ";
        // line 11
        if (array_key_exists("news", $context)) {
            // line 12
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
        echo "

        ";
        // line 64
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'errors');
        echo "

        ";
        // line 67
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

        ";
        // line 69
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
        echo "

    </div>


    <div class='zoneTexteAccueil'>
        <p id='edito'> Edito </p>
        <div id='texteAccueil'>
            ";
        // line 77
        echo (isset($context["texte"]) ? $context["texte"] : null);
        echo "
        </div>
    </div>

    <div id=\"zoneNewsAccueil\">

        <script src=";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-2.2.0.min.js"), "html", null, true);
        echo "></script>

        <!-- Affichage défilant mise à jours Externe -->
        <p class=\"maj\"> Mise à jours Externe </p>
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majExterne"]) ? $context["majExterne"] : null));
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
                        \$('#majExterne p').html(arr[0]);
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majExterne p').html(arr[i]);
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 3000);
                    }

                    showNews(newsExterne);

            </script>
        ";
        }
        // line 116
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Interne -->
        <p class=\"maj\"> Mise à jours Interne </p>
        ";
        // line 120
        if (array_key_exists("majInterne", $context)) {
            // line 121
            echo "            <div id='majInterne'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsInterne = new Array();

                ";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majInterne"]) ? $context["majInterne"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 130
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
            // line 132
            echo "
                    function showNews(arr) {
                        \$('#majInterne p').html(arr[0]);
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majInterne p').html(arr[i]);
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 3000);
                    }

                    showNews(newsInterne);

            </script>
        ";
        }
        // line 149
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Marketing -->
        <p class=\"maj\"> Mise à jours Marketing </p>
        ";
        // line 153
        if (array_key_exists("majMarketing", $context)) {
            // line 154
            echo "            <div id='majMarketing'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsMarketing = new Array();

                ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majMarketing"]) ? $context["majMarketing"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 163
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
            // line 165
            echo "
                    function showNews(arr) {
                        \$('#majMarketing p').html(arr[0]);
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majMarketing p').html(arr[i]);
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 3000);
                    }

                    showNews(newsMarketing);

            </script>
        ";
        }
        // line 182
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours SI -->
        <p class=\"maj\"> Mise à jours SI </p>
        ";
        // line 186
        if (array_key_exists("majSI", $context)) {
            // line 187
            echo "            <div id='majSI'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsSI = new Array();

                ";
            // line 195
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majSI"]) ? $context["majSI"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 196
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
            // line 198
            echo "
                    function showNews(arr) {
                        \$('#majSI p').html(arr[0]);
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majSI p').html(arr[i]);
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 3000);
                    }

                    showNews(newsSI);

            </script>
        ";
        }
        // line 215
        echo "        <!-------------------------------------------------->

    </div>

";
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
        return array (  461 => 215,  442 => 198,  427 => 196,  423 => 195,  413 => 187,  411 => 186,  405 => 182,  386 => 165,  371 => 163,  367 => 162,  357 => 154,  355 => 153,  349 => 149,  330 => 132,  315 => 130,  311 => 129,  301 => 121,  299 => 120,  293 => 116,  274 => 99,  259 => 97,  255 => 96,  245 => 88,  243 => 87,  236 => 83,  227 => 77,  216 => 69,  210 => 67,  204 => 64,  199 => 61,  194 => 59,  191 => 58,  185 => 54,  183 => 53,  178 => 50,  175 => 49,  162 => 42,  159 => 41,  152 => 39,  146 => 38,  143 => 37,  137 => 36,  134 => 35,  128 => 34,  125 => 33,  119 => 32,  116 => 31,  110 => 30,  107 => 29,  103 => 28,  98 => 26,  89 => 20,  85 => 19,  81 => 18,  76 => 16,  71 => 13,  66 => 12,  64 => 11,  60 => 9,  57 => 8,  50 => 6,  37 => 5,  31 => 3,  11 => 1,);
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
/*         <p class="maj"> Mise à jours Externe </p>*/
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
/*                         $('#majExterne p').html(arr[0]);*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#majExterne p').html(arr[i]);*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 3000);*/
/*                     }*/
/* */
/*                     showNews(newsExterne);*/
/* */
/*             </script>*/
/*         {% endif %}*/
/*         <!-------------------------------------------------->*/
/* */
/*         <!-- Affichage défilant mise à jours Interne -->*/
/*         <p class="maj"> Mise à jours Interne </p>*/
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
/*                         $('#majInterne p').html(arr[0]);*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#majInterne p').html(arr[i]);*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 3000);*/
/*                     }*/
/* */
/*                     showNews(newsInterne);*/
/* */
/*             </script>*/
/*         {% endif %}*/
/*         <!-------------------------------------------------->*/
/* */
/*         <!-- Affichage défilant mise à jours Marketing -->*/
/*         <p class="maj"> Mise à jours Marketing </p>*/
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
/*                         $('#majMarketing p').html(arr[0]);*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#majMarketing p').html(arr[i]);*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 3000);*/
/*                     }*/
/* */
/*                     showNews(newsMarketing);*/
/* */
/*             </script>*/
/*         {% endif %}*/
/*         <!-------------------------------------------------->*/
/* */
/*         <!-- Affichage défilant mise à jours SI -->*/
/*         <p class="maj"> Mise à jours SI </p>*/
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
/*                         $('#majSI p').html(arr[0]);*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#majSI p').html(arr[i]);*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 3000);*/
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
