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
        echo "Nous sommes le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "d/m/Y"), "html", null, true);
        echo ", l'intranet a été visité ";
        echo twig_escape_filter($this->env, (isset($context["nombreVues"]) ? $context["nombreVues"] : null), "html", null, true);
        echo " fois.";
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
        ";
        // line 86
        if ((array_key_exists("majExterne", $context) && ((isset($context["majExterne"]) ? $context["majExterne"] : null) != null))) {
            // line 87
            echo "            <p class=\"maj\"> Mises à jour Externe </p>

            <div id='majExterne'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsExterne = new Array();

                ";
            // line 97
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majExterne"]) ? $context["majExterne"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 98
                echo "                    newsExterne.push(\"<span class='dateMaj'>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["maj"], "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo "</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Lien", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "');\\\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "</a>\");
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
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
        // line 121
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Interne -->
        ";
        // line 124
        if ((array_key_exists("majInterne", $context) && ((isset($context["majInterne"]) ? $context["majInterne"] : null) != null))) {
            // line 125
            echo "            <p class=\"maj\"> Mises à jour Interne </p>
            <div id='majInterne'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsInterne = new Array();

                ";
            // line 134
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majInterne"]) ? $context["majInterne"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 135
                echo "                    newsInterne.push(\"<span class='dateMaj'>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["maj"], "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo "</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Lien", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "');\\\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "</a>\");
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
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
        // line 158
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Marketing -->
        ";
        // line 161
        if ((array_key_exists("majMarketing", $context) && ((isset($context["majMarketing"]) ? $context["majMarketing"] : null) != null))) {
            // line 162
            echo "            <p class=\"maj\"> Mises à jour Marketing </p>
            <div id='majMarketing'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsMarketing = new Array();

                ";
            // line 171
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majMarketing"]) ? $context["majMarketing"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 172
                echo "                    newsMarketing.push(\"<span class='dateMaj'>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["maj"], "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo "</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Lien", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "');\\\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "</a>\");
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 174
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
        // line 195
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours SI -->
        ";
        // line 198
        if ((array_key_exists("majSI", $context) && ((isset($context["majSI"]) ? $context["majSI"] : null) != null))) {
            // line 199
            echo "            <p class=\"maj\"> Mises à jour SI </p>
            <div id='majSI'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsSI = new Array();

                ";
            // line 208
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majSI"]) ? $context["majSI"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 209
                echo "                    newsSI.push(\"<span class='dateMaj'>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["maj"], "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo "</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Lien", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "');\\\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "</a>\");
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
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
        // line 232
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours AQ -->
        ";
        // line 235
        if ((array_key_exists("majAQ", $context) && ((isset($context["majAQ"]) ? $context["majAQ"] : null) != null))) {
            // line 236
            echo "            <p class=\"maj\"> Mises à jour Assurance qualité </p>
            <div id='majAQ'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsAQ = new Array();

                ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majAQ"]) ? $context["majAQ"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 246
                echo "                    newsAQ.push(\"<span class='dateMaj'>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["maj"], "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo "</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Lien", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "');\\\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "</a>\");
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            echo "
                    function showNews(arr) {
                        \$('#majAQ p').fadeTo(3000, 100);
                        \$('#majAQ p').html(arr[0]);
                        \$('#majAQ p').fadeTo(3000, 0);
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majAQ p').fadeTo(3000, 100);
                                    \$('#majAQ p').html(arr[i]);
                                    \$('#majAQ p').fadeTo(3000, 0);
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsAQ);

            </script>
        ";
        }
        // line 269
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Références -->
        ";
        // line 272
        if ((array_key_exists("majRH", $context) && ((isset($context["majRH"]) ? $context["majRH"] : null) != null))) {
            // line 273
            echo "            <p class=\"maj\"> Mises à jour Références </p>
            <div id='majRH'>
                <p></p>
            </div>

            <script type=\"text/javascript\">

                var newsRH = new Array();

                ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majRH"]) ? $context["majRH"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 283
                echo "                    newsRH.push(\"<span class='dateMaj'>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["maj"], "dateEnvoi", array()), "d/m/Y"), "html", null, true);
                echo "</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Lien", array()), "html", null, true);
                echo "', '";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "');\\\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["maj"], "Nom", array()), "html", null, true);
                echo "</a>\");
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['maj'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "
                    function showNews(arr) {
                        \$('#majRH p').fadeTo(3000, 100);
                        \$('#majRH p').html(arr[0]);
                        \$('#majRH p').fadeTo(3000, 0);
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majRH p').fadeTo(3000, 100);
                                    \$('#majRH p').html(arr[i]);
                                    \$('#majRH p').fadeTo(3000, 0);
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsRH);

            </script>
        ";
        }
        // line 306
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
        return array (  601 => 306,  578 => 285,  563 => 283,  559 => 282,  548 => 273,  546 => 272,  541 => 269,  518 => 248,  503 => 246,  499 => 245,  488 => 236,  486 => 235,  481 => 232,  458 => 211,  443 => 209,  439 => 208,  428 => 199,  426 => 198,  421 => 195,  398 => 174,  383 => 172,  379 => 171,  368 => 162,  366 => 161,  361 => 158,  338 => 137,  323 => 135,  319 => 134,  308 => 125,  306 => 124,  301 => 121,  278 => 100,  263 => 98,  259 => 97,  247 => 87,  245 => 86,  239 => 83,  230 => 77,  219 => 69,  213 => 67,  207 => 64,  202 => 61,  197 => 59,  194 => 58,  188 => 54,  186 => 53,  181 => 50,  178 => 49,  165 => 42,  162 => 41,  155 => 39,  149 => 38,  146 => 37,  140 => 36,  137 => 35,  131 => 34,  128 => 33,  122 => 32,  119 => 31,  113 => 30,  110 => 29,  106 => 28,  101 => 26,  92 => 20,  88 => 19,  84 => 18,  79 => 16,  74 => 13,  69 => 12,  67 => 11,  63 => 9,  60 => 8,  50 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* */
/* {% block titrePage %} Accueil {% endblock %}*/
/* */
/* {% block messageAccueil %}Bienvenue {% if app.user != null %} {{ app.user.firstname }} {{ app.user.lastname }} {% endif %}{% endblock %}*/
/* {% block sousMessageAccueil %}Nous sommes le {{ date()|date("d/m/Y") }}, l'intranet a été visité {{ nombreVues }} fois.{% endblock %}*/
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
/*         {% if majExterne is defined and majExterne != null %}*/
/*             <p class="maj"> Mises à jour Externe </p>*/
/* */
/*             <div id='majExterne'>*/
/*                 <p></p>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsExterne = new Array();*/
/* */
/*                 {% for maj in majExterne %}*/
/*                     newsExterne.push("<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\">{{ maj.Nom }}</a>");*/
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
/*         {% if majInterne is defined and majInterne != null %}*/
/*             <p class="maj"> Mises à jour Interne </p>*/
/*             <div id='majInterne'>*/
/*                 <p></p>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsInterne = new Array();*/
/* */
/*                 {% for maj in majInterne %}*/
/*                     newsInterne.push("<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\">{{ maj.Nom }}</a>");*/
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
/*         {% if majMarketing is defined and majMarketing != null %}*/
/*             <p class="maj"> Mises à jour Marketing </p>*/
/*             <div id='majMarketing'>*/
/*                 <p></p>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsMarketing = new Array();*/
/* */
/*                 {% for maj in majMarketing %}*/
/*                     newsMarketing.push("<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\">{{ maj.Nom }}</a>");*/
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
/*         {% if majSI is defined and majSI != null %}*/
/*             <p class="maj"> Mises à jour SI </p>*/
/*             <div id='majSI'>*/
/*                 <p></p>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsSI = new Array();*/
/* */
/*                 {% for maj in majSI %}*/
/*                     newsSI.push("<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\">{{ maj.Nom }}</a>");*/
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
/*         <!-- Affichage défilant mise à jours AQ -->*/
/*         {% if majAQ is defined and majAQ != null %}*/
/*             <p class="maj"> Mises à jour Assurance qualité </p>*/
/*             <div id='majAQ'>*/
/*                 <p></p>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsAQ = new Array();*/
/* */
/*                 {% for maj in majAQ %}*/
/*                     newsAQ.push("<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\">{{ maj.Nom }}</a>");*/
/*                 {% endfor %}*/
/* */
/*                     function showNews(arr) {*/
/*                         $('#majAQ p').fadeTo(3000, 100);*/
/*                         $('#majAQ p').html(arr[0]);*/
/*                         $('#majAQ p').fadeTo(3000, 0);*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#majAQ p').fadeTo(3000, 100);*/
/*                                     $('#majAQ p').html(arr[i]);*/
/*                                     $('#majAQ p').fadeTo(3000, 0);*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 6000);*/
/*                     }*/
/* */
/*                     showNews(newsAQ);*/
/* */
/*             </script>*/
/*         {% endif %}*/
/*         <!-------------------------------------------------->*/
/* */
/*         <!-- Affichage défilant mise à jours Références -->*/
/*         {% if majRH is defined and majRH != null %}*/
/*             <p class="maj"> Mises à jour Références </p>*/
/*             <div id='majRH'>*/
/*                 <p></p>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsRH = new Array();*/
/* */
/*                 {% for maj in majRH %}*/
/*                     newsRH.push("<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\">{{ maj.Nom }}</a>");*/
/*                 {% endfor %}*/
/* */
/*                     function showNews(arr) {*/
/*                         $('#majRH p').fadeTo(3000, 100);*/
/*                         $('#majRH p').html(arr[0]);*/
/*                         $('#majRH p').fadeTo(3000, 0);*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#majRH p').fadeTo(3000, 100);*/
/*                                     $('#majRH p').html(arr[i]);*/
/*                                     $('#majRH p').fadeTo(3000, 0);*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 6000);*/
/*                     }*/
/* */
/*                     showNews(newsRH);*/
/* */
/*             </script>*/
/*         {% endif %}*/
/*         <!-------------------------------------------------->*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
