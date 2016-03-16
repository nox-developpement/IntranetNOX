<?php

/* @NoxIntranetAccueil/Accueil/accueil.html.twig */
class __TwigTemplate_823524504e555d9920e2e769c910ff4a85b104dec25e111fc3e3604c600a333a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetAccueil/Accueil/accueil.html.twig", 1);
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
    <div class='zoneEditionAccueil'>

        ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_COMMUNICATION")) {
            // line 13
            echo "
            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>

        ";
        }
        // line 17
        echo "
        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
        echo "

        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'errors');
        echo "

        ";
        // line 26
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
        echo "

    </div>


    <div class='zoneTexteAccueil'>
        <p id='edito'> Edito </p>
        <div id='texteAccueil'>
            ";
        // line 36
        echo (isset($context["texte"]) ? $context["texte"] : null);
        echo "
        </div>
    </div>

    <div id=\"zoneNewsAccueil\">

        <script src=";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/jquery-2.2.0.min.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("./js/menuAnimation.js"), "html", null, true);
        echo "></script>
        <script type=\"text/javascript\">
            \$(window).load(function () {
                DivNewsSliding();
            });
        </script>

        <!-- Affichage défilant mise à jours Externe -->
        ";
        // line 51
        if ((array_key_exists("majExterne", $context) && ((isset($context["majExterne"]) ? $context["majExterne"] : null) != null))) {
            // line 52
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Externe </p>

                <div id='majExterne'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsExterne = new Array();

                ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majExterne"]) ? $context["majExterne"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 65
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
            // line 67
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
        // line 88
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Interne -->
        ";
        // line 91
        if ((array_key_exists("majInterne", $context) && ((isset($context["majInterne"]) ? $context["majInterne"] : null) != null))) {
            // line 92
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Interne </p>
                <div id='majInterne'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsInterne = new Array();

                ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majInterne"]) ? $context["majInterne"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 104
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
            // line 106
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
        // line 127
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Marketing -->
        ";
        // line 130
        if ((array_key_exists("majMarketing", $context) && ((isset($context["majMarketing"]) ? $context["majMarketing"] : null) != null))) {
            // line 131
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Marketing </p>
                <div id='majMarketing'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsMarketing = new Array();

                ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majMarketing"]) ? $context["majMarketing"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 143
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
            // line 145
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
        // line 166
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours SI -->
        ";
        // line 169
        if ((array_key_exists("majSI", $context) && ((isset($context["majSI"]) ? $context["majSI"] : null) != null))) {
            // line 170
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour SI </p>
                <div id='majSI'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsSI = new Array();

                ";
            // line 181
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majSI"]) ? $context["majSI"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 182
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
            // line 184
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
        // line 205
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours AQ -->
        ";
        // line 208
        if ((array_key_exists("majAQ", $context) && ((isset($context["majAQ"]) ? $context["majAQ"] : null) != null))) {
            // line 209
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Assurance qualité </p>
                <div id='majAQ'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsAQ = new Array();

                ";
            // line 220
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majAQ"]) ? $context["majAQ"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 221
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
            // line 223
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
        // line 244
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours RH -->
        ";
        // line 247
        if ((array_key_exists("majRH", $context) && ((isset($context["majRH"]) ? $context["majRH"] : null) != null))) {
            // line 248
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour RH </p>
                <div id='majRH'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsRH = new Array();

                ";
            // line 259
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majRH"]) ? $context["majRH"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 260
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
            // line 262
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
        // line 283
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant Poste à pourvoir -->
        ";
        // line 286
        if ((array_key_exists("posteAPourvoir", $context) && ((isset($context["posteAPourvoir"]) ? $context["posteAPourvoir"] : null) != null))) {
            // line 287
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Poste à pourvoir </p>
                <div id='posteAPourvoir'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsPosteAPourvoir = new Array();

                ";
            // line 298
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posteAPourvoir"]) ? $context["posteAPourvoir"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 299
                echo "                    newsPosteAPourvoir.push(\"<span class='dateMaj'>";
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
            // line 301
            echo "
                    function showNews(arr) {
                        \$('#posteAPourvoir p').fadeTo(3000, 100);
                        \$('#posteAPourvoir p').html(arr[0]);
                        \$('#posteAPourvoir p').fadeTo(3000, 0);
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#posteAPourvoir p').fadeTo(3000, 100);
                                    \$('#posteAPourvoir p').html(arr[i]);
                                    \$('#posteAPourvoir p').fadeTo(3000, 0);
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsPosteAPourvoir);

            </script>
        ";
        }
        // line 322
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant Nomination / organisation -->
        ";
        // line 325
        if ((array_key_exists("nominationOrganisation", $context) && ((isset($context["nominationOrganisation"]) ? $context["nominationOrganisation"] : null) != null))) {
            // line 326
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Nomination / organisation </p>
                <div id='nominationOrganisation'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsNominationOrganisation = new Array();

                ";
            // line 337
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nominationOrganisation"]) ? $context["nominationOrganisation"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 338
                echo "                    newsNominationOrganisation.push(\"<span class='dateMaj'>";
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
            // line 340
            echo "
                    function showNews(arr) {
                        \$('#nominationOrganisation p').fadeTo(3000, 100);
                        \$('#nominationOrganisation p').html(arr[0]);
                        \$('#nominationOrganisation p').fadeTo(3000, 0);
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#nominationOrganisation p').fadeTo(3000, 100);
                                    \$('#nominationOrganisation p').html(arr[i]);
                                    \$('#nominationOrganisation p').fadeTo(3000, 0);
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsNominationOrganisation);

            </script>
        ";
        }
        // line 361
        echo "        <!-------------------------------------------------->

    </div>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetAccueil/Accueil/accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  628 => 361,  605 => 340,  590 => 338,  586 => 337,  573 => 326,  571 => 325,  566 => 322,  543 => 301,  528 => 299,  524 => 298,  511 => 287,  509 => 286,  504 => 283,  481 => 262,  466 => 260,  462 => 259,  449 => 248,  447 => 247,  442 => 244,  419 => 223,  404 => 221,  400 => 220,  387 => 209,  385 => 208,  380 => 205,  357 => 184,  342 => 182,  338 => 181,  325 => 170,  323 => 169,  318 => 166,  295 => 145,  280 => 143,  276 => 142,  263 => 131,  261 => 130,  256 => 127,  233 => 106,  218 => 104,  214 => 103,  201 => 92,  199 => 91,  194 => 88,  171 => 67,  156 => 65,  152 => 64,  138 => 52,  136 => 51,  125 => 43,  121 => 42,  112 => 36,  101 => 28,  95 => 26,  89 => 23,  84 => 20,  79 => 18,  76 => 17,  70 => 13,  68 => 12,  63 => 9,  60 => 8,  50 => 6,  37 => 5,  31 => 3,  11 => 1,);
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
/*     <div class='zoneEditionAccueil'>*/
/* */
/*         {% if is_granted('ROLE_COMMUNICATION') %}*/
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
/*         <script src={{ asset('./js/menuAnimation.js') }}></script>*/
/*         <script type="text/javascript">*/
/*             $(window).load(function () {*/
/*                 DivNewsSliding();*/
/*             });*/
/*         </script>*/
/* */
/*         <!-- Affichage défilant mise à jours Externe -->*/
/*         {% if majExterne is defined and majExterne != null %}*/
/*             <div class="DivMaj">*/
/*                 <p class="maj"> Mises à jour Externe </p>*/
/* */
/*                 <div id='majExterne'>*/
/*                     <p></p>*/
/*                 </div>*/
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
/*             <div class="DivMaj">*/
/*                 <p class="maj"> Mises à jour Interne </p>*/
/*                 <div id='majInterne'>*/
/*                     <p></p>*/
/*                 </div>*/
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
/*             <div class="DivMaj">*/
/*                 <p class="maj"> Mises à jour Marketing </p>*/
/*                 <div id='majMarketing'>*/
/*                     <p></p>*/
/*                 </div>*/
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
/*             <div class="DivMaj">*/
/*                 <p class="maj"> Mises à jour SI </p>*/
/*                 <div id='majSI'>*/
/*                     <p></p>*/
/*                 </div>*/
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
/*             <div class="DivMaj">*/
/*                 <p class="maj"> Mises à jour Assurance qualité </p>*/
/*                 <div id='majAQ'>*/
/*                     <p></p>*/
/*                 </div>*/
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
/*         <!-- Affichage défilant mise à jours RH -->*/
/*         {% if majRH is defined and majRH != null %}*/
/*             <div class="DivMaj">*/
/*                 <p class="maj"> Mises à jour RH </p>*/
/*                 <div id='majRH'>*/
/*                     <p></p>*/
/*                 </div>*/
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
/*         <!-- Affichage défilant Poste à pourvoir -->*/
/*         {% if posteAPourvoir is defined and posteAPourvoir != null %}*/
/*             <div class="DivMaj">*/
/*                 <p class="maj"> Poste à pourvoir </p>*/
/*                 <div id='posteAPourvoir'>*/
/*                     <p></p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsPosteAPourvoir = new Array();*/
/* */
/*                 {% for maj in posteAPourvoir %}*/
/*                     newsPosteAPourvoir.push("<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\">{{ maj.Nom }}</a>");*/
/*                 {% endfor %}*/
/* */
/*                     function showNews(arr) {*/
/*                         $('#posteAPourvoir p').fadeTo(3000, 100);*/
/*                         $('#posteAPourvoir p').html(arr[0]);*/
/*                         $('#posteAPourvoir p').fadeTo(3000, 0);*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#posteAPourvoir p').fadeTo(3000, 100);*/
/*                                     $('#posteAPourvoir p').html(arr[i]);*/
/*                                     $('#posteAPourvoir p').fadeTo(3000, 0);*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 6000);*/
/*                     }*/
/* */
/*                     showNews(newsPosteAPourvoir);*/
/* */
/*             </script>*/
/*         {% endif %}*/
/*         <!-------------------------------------------------->*/
/* */
/*         <!-- Affichage défilant Nomination / organisation -->*/
/*         {% if nominationOrganisation is defined and nominationOrganisation != null %}*/
/*             <div class="DivMaj">*/
/*                 <p class="maj"> Nomination / organisation </p>*/
/*                 <div id='nominationOrganisation'>*/
/*                     <p></p>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <script type="text/javascript">*/
/* */
/*                 var newsNominationOrganisation = new Array();*/
/* */
/*                 {% for maj in nominationOrganisation %}*/
/*                     newsNominationOrganisation.push("<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\">{{ maj.Nom }}</a>");*/
/*                 {% endfor %}*/
/* */
/*                     function showNews(arr) {*/
/*                         $('#nominationOrganisation p').fadeTo(3000, 100);*/
/*                         $('#nominationOrganisation p').html(arr[0]);*/
/*                         $('#nominationOrganisation p').fadeTo(3000, 0);*/
/*                         var i = 1;*/
/*                         setInterval(*/
/*                                 function () {*/
/*                                     $('#nominationOrganisation p').fadeTo(3000, 100);*/
/*                                     $('#nominationOrganisation p').html(arr[i]);*/
/*                                     $('#nominationOrganisation p').fadeTo(3000, 0);*/
/*                                     i++;*/
/*                                     if (i >= arr.length)*/
/*                                         i = 0;*/
/*                                 }, 6000);*/
/*                     }*/
/* */
/*                     showNews(newsNominationOrganisation);*/
/* */
/*             </script>*/
/*         {% endif %}*/
/*         <!-------------------------------------------------->*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
