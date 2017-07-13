<?php

/* NoxIntranetAccueilBundle:Accueil:accueil.html.twig */
class __TwigTemplate_744671550fffcac6b35b9cd6e0b2c51c5bc037d23aa95024e50103d6cffdbe4c extends Twig_Template
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
        $__internal_81e87505f2615fe2d0ae7d0fb6dcdc2ac4a2f3f1d9cab97a85c502217d58bdf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81e87505f2615fe2d0ae7d0fb6dcdc2ac4a2f3f1d9cab97a85c502217d58bdf5->enter($__internal_81e87505f2615fe2d0ae7d0fb6dcdc2ac4a2f3f1d9cab97a85c502217d58bdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NoxIntranetAccueilBundle:Accueil:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_81e87505f2615fe2d0ae7d0fb6dcdc2ac4a2f3f1d9cab97a85c502217d58bdf5->leave($__internal_81e87505f2615fe2d0ae7d0fb6dcdc2ac4a2f3f1d9cab97a85c502217d58bdf5_prof);

    }

    // line 3
    public function block_titrePage($context, array $blocks = array())
    {
        $__internal_320ba2200d694648ba0ba1307278dc9d8c4890debeaf1559ca066bc065542c94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_320ba2200d694648ba0ba1307278dc9d8c4890debeaf1559ca066bc065542c94->enter($__internal_320ba2200d694648ba0ba1307278dc9d8c4890debeaf1559ca066bc065542c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titrePage"));

        echo " Accueil ";
        
        $__internal_320ba2200d694648ba0ba1307278dc9d8c4890debeaf1559ca066bc065542c94->leave($__internal_320ba2200d694648ba0ba1307278dc9d8c4890debeaf1559ca066bc065542c94_prof);

    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        $__internal_8fcfd1b829d2248ff11be434ca49f629abfced115fa3cd1476b3e5775c4dacad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fcfd1b829d2248ff11be434ca49f629abfced115fa3cd1476b3e5775c4dacad->enter($__internal_8fcfd1b829d2248ff11be434ca49f629abfced115fa3cd1476b3e5775c4dacad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messageAccueil"));

        echo "Bienvenue ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "lastname", array()), "html", null, true);
            echo " ";
        }
        
        $__internal_8fcfd1b829d2248ff11be434ca49f629abfced115fa3cd1476b3e5775c4dacad->leave($__internal_8fcfd1b829d2248ff11be434ca49f629abfced115fa3cd1476b3e5775c4dacad_prof);

    }

    // line 6
    public function block_sousMessageAccueil($context, array $blocks = array())
    {
        $__internal_84546ac133d56e577fac5e900c30ae11c947a1baa3b62498e3fc82106ec8e5b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84546ac133d56e577fac5e900c30ae11c947a1baa3b62498e3fc82106ec8e5b5->enter($__internal_84546ac133d56e577fac5e900c30ae11c947a1baa3b62498e3fc82106ec8e5b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sousMessageAccueil"));

        echo "Nous sommes le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_converter($this->env), "d/m/Y"), "html", null, true);
        echo ", l'intranet a été visité ";
        echo twig_escape_filter($this->env, (isset($context["nombreVues"]) ? $context["nombreVues"] : $this->getContext($context, "nombreVues")), "html", null, true);
        echo " fois.";
        
        $__internal_84546ac133d56e577fac5e900c30ae11c947a1baa3b62498e3fc82106ec8e5b5->leave($__internal_84546ac133d56e577fac5e900c30ae11c947a1baa3b62498e3fc82106ec8e5b5_prof);

    }

    // line 8
    public function block_contenu($context, array $blocks = array())
    {
        $__internal_621fba3c6055556deca54e231b7f2fc19a17858ff4612fa56857d6b5432f274b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621fba3c6055556deca54e231b7f2fc19a17858ff4612fa56857d6b5432f274b->enter($__internal_621fba3c6055556deca54e231b7f2fc19a17858ff4612fa56857d6b5432f274b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "contenu"));

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
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_start', array("attr" => array("id" => "formulaireTexte")));
        echo "

        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'errors');
        echo "

        ";
        // line 23
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'errors');
        echo "

        ";
        // line 26
        echo "        ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), "text", array()), 'widget', array("attr" => array("class" => "textField")));
        echo "

        ";
        // line 28
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formulaire"]) ? $context["formulaire"] : $this->getContext($context, "formulaire")), 'form_end');
        echo "

    </div>


    <div class='zoneTexteAccueil'>
        <p id='edito'> Édito </p>
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
        if ((array_key_exists("majExterne", $context) && ((isset($context["majExterne"]) ? $context["majExterne"] : $this->getContext($context, "majExterne")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majExterne"]) ? $context["majExterne"] : $this->getContext($context, "majExterne")));
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
        if ((array_key_exists("majInterne", $context) && ((isset($context["majInterne"]) ? $context["majInterne"] : $this->getContext($context, "majInterne")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majInterne"]) ? $context["majInterne"] : $this->getContext($context, "majInterne")));
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
        if ((array_key_exists("majMarketing", $context) && ((isset($context["majMarketing"]) ? $context["majMarketing"] : $this->getContext($context, "majMarketing")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majMarketing"]) ? $context["majMarketing"] : $this->getContext($context, "majMarketing")));
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
        if ((array_key_exists("majSI", $context) && ((isset($context["majSI"]) ? $context["majSI"] : $this->getContext($context, "majSI")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majSI"]) ? $context["majSI"] : $this->getContext($context, "majSI")));
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
        if ((array_key_exists("majAQ", $context) && ((isset($context["majAQ"]) ? $context["majAQ"] : $this->getContext($context, "majAQ")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majAQ"]) ? $context["majAQ"] : $this->getContext($context, "majAQ")));
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
        if ((array_key_exists("majRH", $context) && ((isset($context["majRH"]) ? $context["majRH"] : $this->getContext($context, "majRH")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["majRH"]) ? $context["majRH"] : $this->getContext($context, "majRH")));
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
        if ((array_key_exists("posteAPourvoir", $context) && ((isset($context["posteAPourvoir"]) ? $context["posteAPourvoir"] : $this->getContext($context, "posteAPourvoir")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["posteAPourvoir"]) ? $context["posteAPourvoir"] : $this->getContext($context, "posteAPourvoir")));
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
        if ((array_key_exists("nominationOrganisation", $context) && ((isset($context["nominationOrganisation"]) ? $context["nominationOrganisation"] : $this->getContext($context, "nominationOrganisation")) != null))) {
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
            $context['_seq'] = twig_ensure_traversable((isset($context["nominationOrganisation"]) ? $context["nominationOrganisation"] : $this->getContext($context, "nominationOrganisation")));
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
        
        $__internal_621fba3c6055556deca54e231b7f2fc19a17858ff4612fa56857d6b5432f274b->leave($__internal_621fba3c6055556deca54e231b7f2fc19a17858ff4612fa56857d6b5432f274b_prof);

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
        return array (  659 => 362,  636 => 341,  621 => 339,  617 => 338,  604 => 327,  602 => 326,  597 => 323,  574 => 302,  559 => 300,  555 => 299,  542 => 288,  540 => 287,  535 => 284,  512 => 263,  497 => 261,  493 => 260,  480 => 249,  478 => 248,  473 => 245,  450 => 224,  435 => 222,  431 => 221,  418 => 210,  416 => 209,  411 => 206,  388 => 185,  373 => 183,  369 => 182,  356 => 171,  354 => 170,  349 => 167,  326 => 146,  311 => 144,  307 => 143,  294 => 132,  292 => 131,  287 => 128,  264 => 107,  249 => 105,  245 => 104,  232 => 93,  230 => 92,  225 => 89,  202 => 68,  187 => 66,  183 => 65,  169 => 53,  167 => 52,  156 => 44,  152 => 43,  148 => 42,  139 => 36,  128 => 28,  122 => 26,  116 => 23,  111 => 20,  106 => 18,  103 => 17,  97 => 13,  95 => 12,  90 => 9,  84 => 8,  68 => 6,  49 => 5,  37 => 3,  11 => 1,);
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

{% block titrePage %} Accueil {% endblock %}

{% block messageAccueil %}Bienvenue {% if app.user != null %} {{ app.user.firstname }} {{ app.user.lastname }} {% endif %}{% endblock %}
{% block sousMessageAccueil %}Nous sommes le {{ date()|date(\"d/m/Y\") }}, l'intranet a été visité {{ nombreVues }} fois.{% endblock %}

{% block contenu %}

    <div class='zoneEditionAccueil'>

        {% if is_granted('ROLE_COMMUNICATION') %}

            <button id='texteEditButton' class='boutonFormulaire'>Editer</button>

        {% endif %}

        {{ form_start(formulaire, {'attr': {'id': 'formulaireTexte' }}) }}

        {{ form_errors(formulaire) }}

        {# Affichage des erreurs pour ce champ précis. #}
        {{ form_errors(formulaire.text) }}

        {# Génération de l'input. #}
        {{ form_widget(formulaire.text, {'attr': {'class': 'textField' }}) }}

        {{ form_end(formulaire) }}

    </div>


    <div class='zoneTexteAccueil'>
        <p id='edito'> Édito </p>
        <div id='texteAccueil'>
            {{ texte|raw }}
        </div>
    </div>

    <div id=\"zoneNewsAccueil\">

        <script src={{ asset('./js/jquery-2.2.0.min.js') }}></script>
        <script src=\"{{ asset('./js/jquery-ui/jquery-ui.min.js') }}\"></script>
        <script src={{ asset('./js/menuAnimation.js') }}></script>
        <script type=\"text/javascript\">
            \$(window).load(function () {
                DivNewsSliding();
            });
        </script>

        <!-- Affichage défilant mise à jours Externe -->
        {% if majExterne is defined and majExterne != null %}
            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Externe </p>

                <div id='majExterne'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsExterne = new Array();

                {% for maj in majExterne %}
                    newsExterne.push(\"<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\\\">{{ maj.Nom }}</a>\");
                {% endfor %}

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
        {% endif %}
        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Interne -->
        {% if majInterne is defined and majInterne != null %}
            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Interne </p>
                <div id='majInterne'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsInterne = new Array();

                {% for maj in majInterne %}
                    newsInterne.push(\"<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\\\">{{ maj.Nom }}</a>\");
                {% endfor %}

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
        {% endif %}
        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours Marketing -->
        {% if majMarketing is defined and majMarketing != null %}
            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Marketing </p>
                <div id='majMarketing'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsMarketing = new Array();

                {% for maj in majMarketing %}
                    newsMarketing.push(\"<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\\\">{{ maj.Nom }}</a>\");
                {% endfor %}

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
        {% endif %}
        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours SI -->
        {% if majSI is defined and majSI != null %}
            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour SI </p>
                <div id='majSI'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsSI = new Array();

                {% for maj in majSI %}
                    newsSI.push(\"<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\\\">{{ maj.Nom }}</a>\");
                {% endfor %}

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
        {% endif %}
        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours AQ -->
        {% if majAQ is defined and majAQ != null %}
            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour Assurance qualité </p>
                <div id='majAQ'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsAQ = new Array();

                {% for maj in majAQ %}
                    newsAQ.push(\"<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\\\">{{ maj.Nom }}</a>\");
                {% endfor %}

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
        {% endif %}
        <!-------------------------------------------------->

        <!-- Affichage défilant mise à jours RH -->
        {% if majRH is defined and majRH != null %}
            <div class=\"DivMaj\">
                <p class=\"maj\"> Mises à jour RH </p>
                <div id='majRH'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsRH = new Array();

                {% for maj in majRH %}
                    newsRH.push(\"<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\\\">{{ maj.Nom }}</a>\");
                {% endfor %}

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
        {% endif %}
        <!-------------------------------------------------->

        <!-- Affichage défilant Poste à pourvoir -->
        {% if posteAPourvoir is defined and posteAPourvoir != null %}
            <div class=\"DivMaj\">
                <p class=\"maj\"> Poste à pourvoir </p>
                <div id='posteAPourvoir'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsPosteAPourvoir = new Array();

                {% for maj in posteAPourvoir %}
                    newsPosteAPourvoir.push(\"<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\\\">{{ maj.Nom }}</a>\");
                {% endfor %}

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
        {% endif %}
        <!-------------------------------------------------->

        <!-- Affichage défilant Nomination / organisation -->
        {% if nominationOrganisation is defined and nominationOrganisation != null %}
            <div class=\"DivMaj\">
                <p class=\"maj\"> Nomination / organisation </p>
                <div id='nominationOrganisation'>
                    <p></p>
                </div>
            </div>

            <script type=\"text/javascript\">

                var newsNominationOrganisation = new Array();

                {% for maj in nominationOrganisation %}
                    newsNominationOrganisation.push(\"<span class='dateMaj'>{{ maj.dateEnvoi|date('d/m/Y') }}</span> <br /> <a onclick=\\\"openDetailsPopUpWindow('http://' + document.location.hostname + '{{  maj.Lien }}', '{{ maj.Nom }}');\\\">{{ maj.Nom }}</a>\");
                {% endfor %}

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
        {% endif %}
        <!-------------------------------------------------->

    </div>

{% endblock %}
", "NoxIntranetAccueilBundle:Accueil:accueil.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\AccueilBundle/Resources/views/Accueil/accueil.html.twig");
    }
}
