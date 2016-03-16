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
        $__internal_4ff8e5dcc6fe202f7956bed6b0a27ad1d85a3abc3e4fdda28daf5258e93f95d0 = $this->env->getExtension("native_profiler");
        $__internal_4ff8e5dcc6fe202f7956bed6b0a27ad1d85a3abc3e4fdda28daf5258e93f95d0->enter($__internal_4ff8e5dcc6fe202f7956bed6b0a27ad1d85a3abc3e4fdda28daf5258e93f95d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAccueilBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ff8e5dcc6fe202f7956bed6b0a27ad1d85a3abc3e4fdda28daf5258e93f95d0->leave($__internal_4ff8e5dcc6fe202f7956bed6b0a27ad1d85a3abc3e4fdda28daf5258e93f95d0_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_eb97df89e956c512baa2f634160ab0885b0ec1fa5f736558f1ae97ad9aa0d92d = $this->env->getExtension("native_profiler");
        $__internal_eb97df89e956c512baa2f634160ab0885b0ec1fa5f736558f1ae97ad9aa0d92d->enter($__internal_eb97df89e956c512baa2f634160ab0885b0ec1fa5f736558f1ae97ad9aa0d92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Accueil ";
        
        $__internal_eb97df89e956c512baa2f634160ab0885b0ec1fa5f736558f1ae97ad9aa0d92d->leave($__internal_eb97df89e956c512baa2f634160ab0885b0ec1fa5f736558f1ae97ad9aa0d92d_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_d63f713f4ee00cb40e8a1906f444f9142314a0736360cfe0029b66dd421f695b = $this->env->getExtension("native_profiler");
        $__internal_d63f713f4ee00cb40e8a1906f444f9142314a0736360cfe0029b66dd421f695b->enter($__internal_d63f713f4ee00cb40e8a1906f444f9142314a0736360cfe0029b66dd421f695b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Bienvenue ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
            echo " ";
        }
        
        $__internal_d63f713f4ee00cb40e8a1906f444f9142314a0736360cfe0029b66dd421f695b->leave($__internal_d63f713f4ee00cb40e8a1906f444f9142314a0736360cfe0029b66dd421f695b_prof);

    }

    // line 6
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_9cd1bb4748542b36dac371bc650bdf53dbb67c8f7589e37e19c177b844ac202a = $this->env->getExtension("native_profiler");
        $__internal_9cd1bb4748542b36dac371bc650bdf53dbb67c8f7589e37e19c177b844ac202a->enter($__internal_9cd1bb4748542b36dac371bc650bdf53dbb67c8f7589e37e19c177b844ac202a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Nous sommes le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "d/m/Y"), "html", null, true);
        echo ", l'intranet a été visité ";
        echo twig_escape_filter($this->env, (isset($context["nombreVues"]) ? $context["nombreVues"] : $this->getContext($context, "nombreVues")), "html", null, true);
        echo " fois.";
        
        $__internal_9cd1bb4748542b36dac371bc650bdf53dbb67c8f7589e37e19c177b844ac202a->leave($__internal_9cd1bb4748542b36dac371bc650bdf53dbb67c8f7589e37e19c177b844ac202a_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_45dace5ad29a1dd80f3d3fd3a2b8491c1b467225b8a270c73a974656056a7ac2 = $this->env->getExtension("native_profiler");
        $__internal_45dace5ad29a1dd80f3d3fd3a2b8491c1b467225b8a270c73a974656056a7ac2->enter($__internal_45dace5ad29a1dd80f3d3fd3a2b8491c1b467225b8a270c73a974656056a7ac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "

        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
        echo "

        ";
        // line 26
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

    </div>


    <div class='zoneTexteAccueil'>
        <p id='edito'> Edito </p>
        <div id='texteAccueil'>
            ";
        // line 36
        echo (isset($context["texte"]) ? $context["texte"] : $this->getContext($context, "texte"));
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
        if ((array_key_exists("majExterne", $context) && ((isset($context["majExterne"]) ? $context["majExterne"] : $this->getContext($context, "majExterne")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majExterne"]) ? $context["majExterne"] : $this->getContext($context, "majExterne")));
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
        if ((array_key_exists("majInterne", $context) && ((isset($context["majInterne"]) ? $context["majInterne"] : $this->getContext($context, "majInterne")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majInterne"]) ? $context["majInterne"] : $this->getContext($context, "majInterne")));
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
        if ((array_key_exists("majMarketing", $context) && ((isset($context["majMarketing"]) ? $context["majMarketing"] : $this->getContext($context, "majMarketing")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majMarketing"]) ? $context["majMarketing"] : $this->getContext($context, "majMarketing")));
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
        if ((array_key_exists("majSI", $context) && ((isset($context["majSI"]) ? $context["majSI"] : $this->getContext($context, "majSI")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majSI"]) ? $context["majSI"] : $this->getContext($context, "majSI")));
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
        if ((array_key_exists("majAQ", $context) && ((isset($context["majAQ"]) ? $context["majAQ"] : $this->getContext($context, "majAQ")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majAQ"]) ? $context["majAQ"] : $this->getContext($context, "majAQ")));
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
        if ((array_key_exists("majRH", $context) && ((isset($context["majRH"]) ? $context["majRH"] : $this->getContext($context, "majRH")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majRH"]) ? $context["majRH"] : $this->getContext($context, "majRH")));
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
        if ((array_key_exists("posteAPourvoir", $context) && ((isset($context["posteAPourvoir"]) ? $context["posteAPourvoir"] : $this->getContext($context, "posteAPourvoir")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["posteAPourvoir"]) ? $context["posteAPourvoir"] : $this->getContext($context, "posteAPourvoir")));
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
        if ((array_key_exists("nominationOrganisation", $context) && ((isset($context["nominationOrganisation"]) ? $context["nominationOrganisation"] : $this->getContext($context, "nominationOrganisation")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["nominationOrganisation"]) ? $context["nominationOrganisation"] : $this->getContext($context, "nominationOrganisation")));
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
        
        $__internal_45dace5ad29a1dd80f3d3fd3a2b8491c1b467225b8a270c73a974656056a7ac2->leave($__internal_45dace5ad29a1dd80f3d3fd3a2b8491c1b467225b8a270c73a974656056a7ac2_prof);

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
        return array (  655 => 361,  632 => 340,  617 => 338,  613 => 337,  600 => 326,  598 => 325,  593 => 322,  570 => 301,  555 => 299,  551 => 298,  538 => 287,  536 => 286,  531 => 283,  508 => 262,  493 => 260,  489 => 259,  476 => 248,  474 => 247,  469 => 244,  446 => 223,  431 => 221,  427 => 220,  414 => 209,  412 => 208,  407 => 205,  384 => 184,  369 => 182,  365 => 181,  352 => 170,  350 => 169,  345 => 166,  322 => 145,  307 => 143,  303 => 142,  290 => 131,  288 => 130,  283 => 127,  260 => 106,  245 => 104,  241 => 103,  228 => 92,  226 => 91,  221 => 88,  198 => 67,  183 => 65,  179 => 64,  165 => 52,  163 => 51,  152 => 43,  148 => 42,  139 => 36,  128 => 28,  122 => 26,  116 => 23,  111 => 20,  106 => 18,  103 => 17,  97 => 13,  95 => 12,  90 => 9,  84 => 8,  68 => 6,  49 => 5,  37 => 3,  11 => 1,);
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
