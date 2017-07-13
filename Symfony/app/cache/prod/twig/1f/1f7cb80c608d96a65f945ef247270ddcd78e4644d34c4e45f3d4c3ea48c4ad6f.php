<?php

/* @NoxIntranetAccueil/Accueil/accueil.html.twig */
class __TwigTemplate_5f5100a4a7dafbef3f316bfd5a5d5a1522d88b4fd7ec8928482847373591799e extends Twig_Template
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
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_COMMUNICATION")) {
            // line 13
            echo "
            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>

        ";
        }
        // line 17
        echo "
        ";
        // line 18
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'errors');
        echo "

        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'errors');
        echo "

        ";
        // line 26
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : null), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

        ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : null), 'form_end');
        echo "

    </div>


    <div class='zoneTexteAccueil'>
        <p id='edito'> Édito </p>
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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery-2.2.0.min.js"), "html", null, true);
        echo "></script>
        <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("./js/menuAnimation.js"), "html", null, true);
        echo "></script>
        <script type=\"text/javascript\">
            \$(window).load(function () {
                DivNewsSliding();
            });
        </script>

        <!-- Affichage défilant mise à jours Externe -->
        ";
        // line 52
        if ((array_key_exists("majExterne", $context) && ((isset($context["majExterne"]) ? $context["majExterne"] : null) != null))) {
            // line 53
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Externe </p>

                <div id='majExterne'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsExterne = new Array();

                ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majExterne"]) ? $context["majExterne"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 66
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
            // line 68
            echo "
                    function showNews(arr) {
                        \$('#majExterne p').fadeTo(500, 100, 'linear');
                        \$('#majExterne p').html(arr[0]);
                        \$('#majExterne p').fadeTo(4500, 0, 'easeInExpo'); // fade to \"0\" with a 100, easeInExpo0ms duration
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majExterne p').fadeTo(500, 100, 'linear');
                                    \$('#majExterne p').html(arr[i]);
                                    \$('#majExterne p').fadeTo(4500, 0, 'easeInExpo'); // fade to \"0\" with a 100, easeInExpo0ms duration
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsExterne);

            </script>
        ";
        }
        // line 89
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Interne -->
        ";
        // line 92
        if ((array_key_exists("majInterne", $context) && ((isset($context["majInterne"]) ? $context["majInterne"] : null) != null))) {
            // line 93
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Interne </p>
                <div id='majInterne'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsInterne = new Array();

                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majInterne"]) ? $context["majInterne"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 105
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
            // line 107
            echo "
                    function showNews(arr) {
                        \$('#majInterne p').fadeTo(500, 100, 'linear');
                        \$('#majInterne p').html(arr[0]);
                        \$('#majInterne p').fadeTo(4500, 0, 'easeInExpo');
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majInterne p').fadeTo(500, 100, 'linear');
                                    \$('#majInterne p').html(arr[i]);
                                    \$('#majInterne p').fadeTo(4500, 0, 'easeInExpo');
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsInterne);

            </script>
        ";
        }
        // line 128
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Marketing -->
        ";
        // line 131
        if ((array_key_exists("majMarketing", $context) && ((isset($context["majMarketing"]) ? $context["majMarketing"] : null) != null))) {
            // line 132
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Marketing </p>
                <div id='majMarketing'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsMarketing = new Array();

                ";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majMarketing"]) ? $context["majMarketing"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 144
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
            // line 146
            echo "
                    function showNews(arr) {
                        \$('#majMarketing p').fadeTo(500, 100, 'linear');
                        \$('#majMarketing p').html(arr[0]);
                        \$('#majMarketing p').fadeTo(4500, 0, 'easeInExpo');
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majMarketing p').fadeTo(500, 100, 'linear');
                                    \$('#majMarketing p').html(arr[i]);
                                    \$('#majMarketing p').fadeTo(4500, 0, 'easeInExpo');
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsMarketing);

            </script>
        ";
        }
        // line 167
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours SI -->
        ";
        // line 170
        if ((array_key_exists("majSI", $context) && ((isset($context["majSI"]) ? $context["majSI"] : null) != null))) {
            // line 171
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour SI </p>
                <div id='majSI'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsSI = new Array();

                ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majSI"]) ? $context["majSI"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 183
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
            // line 185
            echo "
                    function showNews(arr) {
                        \$('#majSI p').fadeTo(500, 100, 'linear');
                        \$('#majSI p').html(arr[0]);
                        \$('#majSI p').fadeTo(4500, 0, 'easeInExpo');
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majSI p').fadeTo(500, 100, 'linear');
                                    \$('#majSI p').html(arr[i]);
                                    \$('#majSI p').fadeTo(4500, 0, 'easeInExpo');
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsSI);

            </script>
        ";
        }
        // line 206
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours AQ -->
        ";
        // line 209
        if ((array_key_exists("majAQ", $context) && ((isset($context["majAQ"]) ? $context["majAQ"] : null) != null))) {
            // line 210
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Assurance qualité </p>
                <div id='majAQ'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsAQ = new Array();

                ";
            // line 221
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majAQ"]) ? $context["majAQ"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 222
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
            // line 224
            echo "
                    function showNews(arr) {
                        \$('#majAQ p').fadeTo(500, 100, 'linear');
                        \$('#majAQ p').html(arr[0]);
                        \$('#majAQ p').fadeTo(4500, 0, 'easeInExpo');
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majAQ p').fadeTo(500, 100, 'linear');
                                    \$('#majAQ p').html(arr[i]);
                                    \$('#majAQ p').fadeTo(4500, 0, 'easeInExpo');
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsAQ);

            </script>
        ";
        }
        // line 245
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours RH -->
        ";
        // line 248
        if ((array_key_exists("majRH", $context) && ((isset($context["majRH"]) ? $context["majRH"] : null) != null))) {
            // line 249
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour RH </p>
                <div id='majRH'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsRH = new Array();

                ";
            // line 260
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majRH"]) ? $context["majRH"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 261
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
            // line 263
            echo "
                    function showNews(arr) {
                        \$('#majRH p').fadeTo(500, 100, 'linear');
                        \$('#majRH p').html(arr[0]);
                        \$('#majRH p').fadeTo(4500, 0, 'easeInExpo');
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#majRH p').fadeTo(500, 100, 'linear');
                                    \$('#majRH p').html(arr[i]);
                                    \$('#majRH p').fadeTo(4500, 0, 'easeInExpo');
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsRH);

            </script>
        ";
        }
        // line 284
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant Poste à pourvoir -->
        ";
        // line 287
        if ((array_key_exists("posteAPourvoir", $context) && ((isset($context["posteAPourvoir"]) ? $context["posteAPourvoir"] : null) != null))) {
            // line 288
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Poste à pourvoir </p>
                <div id='posteAPourvoir'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsPosteAPourvoir = new Array();

                ";
            // line 299
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["posteAPourvoir"]) ? $context["posteAPourvoir"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 300
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
            // line 302
            echo "
                    function showNews(arr) {
                        \$('#posteAPourvoir p').fadeTo(500, 100, 'linear');
                        \$('#posteAPourvoir p').html(arr[0]);
                        \$('#posteAPourvoir p').fadeTo(4500, 0, 'easeInExpo');
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#posteAPourvoir p').fadeTo(500, 100, 'linear');
                                    \$('#posteAPourvoir p').html(arr[i]);
                                    \$('#posteAPourvoir p').fadeTo(4500, 0, 'easeInExpo');
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsPosteAPourvoir);

            </script>
        ";
        }
        // line 323
        echo "        <!-------------------------------------------------->

        <!-- Affichage défilant Nomination / organisation -->
        ";
        // line 326
        if ((array_key_exists("nominationOrganisation", $context) && ((isset($context["nominationOrganisation"]) ? $context["nominationOrganisation"] : null) != null))) {
            // line 327
            echo "            <div class=\"DivMaj\">
                <p class=\"maj\"> Nomination / organisation </p>
                <div id='nominationOrganisation'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsNominationOrganisation = new Array();

                ";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["nominationOrganisation"]) ? $context["nominationOrganisation"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["maj"]) {
                // line 339
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
            // line 341
            echo "
                    function showNews(arr) {
                        \$('#nominationOrganisation p').fadeTo(500, 100, 'linear');
                        \$('#nominationOrganisation p').html(arr[0]);
                        \$('#nominationOrganisation p').fadeTo(4500, 0, 'easeInExpo');
                        var i = 1;
                        setInterval(
                                function () {
                                    \$('#nominationOrganisation p').fadeTo(500, 100, 'linear');
                                    \$('#nominationOrganisation p').html(arr[i]);
                                    \$('#nominationOrganisation p').fadeTo(4500, 0, 'easeInExpo');
                                    i++;
                                    if (i >= arr.length)
                                        i = 0;
                                }, 6000);
                    }

                    showNews(newsNominationOrganisation);

            </script>
        ";
        }
        // line 362
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
        return array (  632 => 362,  609 => 341,  594 => 339,  590 => 338,  577 => 327,  575 => 326,  570 => 323,  547 => 302,  532 => 300,  528 => 299,  515 => 288,  513 => 287,  508 => 284,  485 => 263,  470 => 261,  466 => 260,  453 => 249,  451 => 248,  446 => 245,  423 => 224,  408 => 222,  404 => 221,  391 => 210,  389 => 209,  384 => 206,  361 => 185,  346 => 183,  342 => 182,  329 => 171,  327 => 170,  322 => 167,  299 => 146,  284 => 144,  280 => 143,  267 => 132,  265 => 131,  260 => 128,  237 => 107,  222 => 105,  218 => 104,  205 => 93,  203 => 92,  198 => 89,  175 => 68,  160 => 66,  156 => 65,  142 => 53,  140 => 52,  129 => 44,  125 => 43,  121 => 42,  112 => 36,  101 => 28,  95 => 26,  89 => 23,  84 => 20,  79 => 18,  76 => 17,  70 => 13,  68 => 12,  63 => 9,  60 => 8,  50 => 6,  37 => 5,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetAccueil/Accueil/accueil.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AccueilBundle\\Resources\\views\\Accueil\\accueil.html.twig");
    }
}
