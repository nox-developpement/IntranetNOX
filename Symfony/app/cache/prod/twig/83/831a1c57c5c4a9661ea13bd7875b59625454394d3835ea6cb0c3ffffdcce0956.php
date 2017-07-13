<?php

/* @NoxIntranetRessources/PrestationsInternes/propositionEchanges.html.twig */
class __TwigTemplate_b08f3c52f1f1eff4ce44662c79275786efe308caa71de5438c9a5cbc401d4a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/PrestationsInternes/propositionEchanges.html.twig", 1);
        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'messageAccueil' => array($this, 'block_messageAccueil'),
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
        echo " Echanges avec ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["da2Entity"]) ? $context["da2Entity"] : null), "Firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["da2Entity"]) ? $context["da2Entity"] : null), "Lastname", array()), "html", null, true);
        echo " ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Echanges avec ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["da2Entity"]) ? $context["da2Entity"] : null), "Firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["da2Entity"]) ? $context["da2Entity"] : null), "Lastname", array()), "html", null, true);
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        echo " 

    <div style='width: 70%; margin: auto; margin-bottom: 1%; margin-top: 0; font-size: 0.8vw;'>
        <span style='display: inline-block; height: 100%; vertical-align: middle;'></span>
        <img style='width: 1em; vertical-align: middle;' src='";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/Left-Arrow-48.png"), "html", null, true);
        echo "'>
        <a style='color: #1F4E79; text-decoration: none; display: inline-block; vertical-align: middle;' href='";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_summary", array("cleDemande" => (isset($context["cleDemande"]) ? $context["cleDemande"] : null))), "html", null, true);
        echo "'>Revenir au résumé</a>
    </div>
    <div style='width: 70%; margin: auto; border: 1px solid #1F4E79; height: 70%; margin-bottom: 5%; font-size: 0;'>   
        <div id='propositionEchangesAffichageMessages'>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["echanges"]) ? $context["echanges"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["echange"]) {
            // line 17
            echo "                <div class='propositionEchangesMessage ";
            if (($this->getAttribute($context["echange"], "sender", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()))) {
                echo "propositionEchangesMessageTo";
            } else {
                echo "propositionEchangesMessageFrom";
            }
            echo "' ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo "id=\"echangesLastMessage\"";
            }
            echo " postdate='";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["echange"], "postDate", array()), "d/m/Y H:i:s"), "html", null, true);
            echo "' postId='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["echange"], "Id", array()), "html", null, true);
            echo "'>
                    <span style='display: inline-block; vertical-align: middle; height: 100%;'></span>
                    <div>
                        <p>
                            ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["echange"], "message", array()), "html", null, true);
            echo "
                        </p>
                        <hr>                    
                        <time datetime=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["echange"], "postDate", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "\">Posté le : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["echange"], "postDate", array()), "d/m/Y à H:i:s"), "html", null, true);
            echo "</time>
                    </div>
                </div><br />
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['echange'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </div>
        <div id='propositionEchangesEcritureMessages'> 
            <div id='propositionEchangesEcritureMessagesTextArea' contenteditable='true'> 
            </div>
            <div id='propositionEchangesEcritureMessagesSubmitButton' onclick='sendMessage();'>
                <span style='display: inline-block; vertical-align: middle; height: 100%;'></span>
                <p style='font-size: 0.8vw; vertical-align: middle; display: inline-block; margin: 0;'>Envoyer</p>
            </div>
        </div>
    </div>

    <script>

        \$(window).load(function () {
            scrollToLastMessage(); // Scroll jusqu'au dernier message.
            receptMessage(); // On débute la récéption des nouveaux messages.
            // Permet d'envoyer un message en appuyant sur 'Entrer'.
            \$('#propositionEchangesEcritureMessagesTextArea').keydown(function (e) {
                if (e.which == 13) {
                    \$('#propositionEchangesEcritureMessagesSubmitButton').click();
                    return false;
                }
            });
        });

        // Affiche les nouveaux message et les sauvegarde en base de données.
        function sendMessage() {
            var message = \$.trim(\$('#propositionEchangesEcritureMessagesTextArea').text()); // On récupére le texte de la zone d'écriture en effacent les espaces avant et après le texte.

            // Si le bouton d'envoie de message n'est pas désactivé et le contenu de message n'est pas vide.
            if (\$('#propositionEchangesEcritureMessagesSubmitButton').attr('disabled') !== 'disabled' && message !== '') {
                \$('#propositionEchangesEcritureMessagesTextArea').attr('contenteditable', false); // On bloque la saisi de nouveau texte.
                \$('#propositionEchangesEcritureMessagesTextArea').css('background-color', 'lightgrey'); // On modifie la couleur d'arrière plan de la zone d'écriture pour indiquer le blocage.
                \$('#propositionEchangesEcritureMessagesSubmitButton').attr('disabled', 'disabled'); // On désactive le bouton d'envoie.
                \$('#propositionEchangesEcritureMessagesSubmitButton').css('color', 'transparent'); // On cache le texte du bouton.
                \$('#propositionEchangesEcritureMessagesSubmitButton').css('background-image', 'url(";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/noxintranetressources/images/sendEchangeMessage.svg"), "html", null, true);
        echo ")'); // On ajout une image de chargement en fond du bouton.
                \$('#propositionEchangesEcritureMessagesSubmitButton').css('cursor', 'default'); // On rétablie le curseur par défaut.
                \$.ajax({
                    url: '";
        // line 66
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_proposition_echanges_message_ajax_saving");
        echo "',
                    type: 'POST',
                    data: {'cleDemande': '";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["cleDemande"]) ? $context["cleDemande"] : null), "html", null, true);
        echo "', 'da2': '";
        echo twig_escape_filter($this->env, (isset($context["da2"]) ? $context["da2"] : null), "html", null, true);
        echo "', 'message': message, 'sender': '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "'},
                    success: function () {
                        // On suprime l'id du dernier message.
                        \$('#echangesLastMessage').removeAttr('id');

                        // On récupére la date et l'heure courante.
                        var currentDate = new Date();
                        var stringDate = ((currentDate.getDate() < 10) ? '0' + currentDate.getDate() : currentDate.getDate()) + '/' + ((currentDate.getMonth() < 10) ? '0' + currentDate.getMonth() : currentDate.getMonth()) + '/' + currentDate.getFullYear() + ' à ' + ((currentDate.getHours() < 10) ? '0' + currentDate.getHours() : currentDate.getHours()) + ':' + ((currentDate.getMinutes() < 10) ? '0' + currentDate.getMinutes() : currentDate.getMinutes()) + ':' + ((currentDate.getSeconds() < 10) ? '0' + currentDate.getSeconds() : currentDate.getSeconds());
                        // On génére le code HTML du nouveau message et on le fait apparaître.
                        var newMessage = \"<div id='echangesLastMessage' class='propositionEchangesMessage propositionEchangesMessageTo'>\";
                        newMessage += \"<span style='display: inline-block; vertical-align: middle; height: 100%;'></span>\";
                        newMessage += \"<div>\";
                        newMessage += \"<p>\" + message + \"</p>\";
                        newMessage += \"<hr>\";
                        newMessage += \"<time datetime='\" + stringDate + \"'>Posté le : \" + stringDate + \"</time>\";
                        newMessage += \"</div>\";
                        newMessage += \"</div><br />\";
                        \$('#propositionEchangesAffichageMessages').append(newMessage);

                        // On scroll jusqu'au haut du message.
                        scrollToLastMessage();

                        // On redonne les propriété d'origine à la zone d'écriture et au bouton d'envoie.
                        \$('#propositionEchangesEcritureMessagesTextArea').text(''); // On efface le texte de la zone d'écriture.
                        \$('#propositionEchangesEcritureMessagesTextArea').attr('contenteditable', true);
                        \$('#propositionEchangesEcritureMessagesTextArea').css('background-color', 'white');
                        \$('#propositionEchangesEcritureMessagesSubmitButton').removeAttr('disabled');
                        \$('#propositionEchangesEcritureMessagesSubmitButton').css('color', 'white');
                        \$('#propositionEchangesEcritureMessagesSubmitButton').css('background-image', 'none');
                        \$('#propositionEchangesEcritureMessagesSubmitButton').css('cursor', 'pointer');
                    }
                });
            }
            // Sinon on remet la zone d'écriture à zéro.
            else {
                \$('#propositionEchangesEcritureMessagesTextArea').text('');
            }
        }

        // Recoi les nouveaux messages.
        function receptMessage() {
            \$.ajax({
                url: '";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_demande_prestation_proposition_echanges_message_ajax_receive");
        echo "',
                type: 'POST',
                data: {'cleDemande': '";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["cleDemande"]) ? $context["cleDemande"] : null), "html", null, true);
        echo "', 'da2': '";
        echo twig_escape_filter($this->env, (isset($context["da2"]) ? $context["da2"] : null), "html", null, true);
        echo "'},
                success: function (Response) {

                    var nbMessage = \$('#propositionEchangesAffichageMessages .propositionEchangesMessage').length;

                    // Pour chaque messages.
                    var newMessage = '';
                    \$.each(Response, function (index, value) {
                        // On génera la date du message sous forme de chaine de charactère.
                        var currentDate = new Date(value.postDate.date);
                        var stringDate = ((currentDate.getDate() < 10) ? '0' + currentDate.getDate() : currentDate.getDate()) + '/' + ((currentDate.getMonth() < 10) ? '0' + currentDate.getMonth() : currentDate.getMonth()) + '/' + currentDate.getFullYear() + ' à ' + ((currentDate.getHours() < 10) ? '0' + currentDate.getHours() : currentDate.getHours()) + ':' + ((currentDate.getMinutes() < 10) ? '0' + currentDate.getMinutes() : currentDate.getMinutes()) + ':' + ((currentDate.getSeconds() < 10) ? '0' + currentDate.getSeconds() : currentDate.getSeconds());

                        // On génére le code HTML du nouveau message.
                        newMessage += \"<div \" + ((Response.length - 1 === index) ? \"id='echangesLastMessage'\" : '') + \" class='propositionEchangesMessage \" + ((value.sender === '";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "') ? 'propositionEchangesMessageTo' : 'propositionEchangesMessageFrom') + \"'>\";
                        newMessage += \"<span style='display: inline-block; vertical-align: middle; height: 100%;'></span>\";
                        newMessage += \"<div>\";
                        newMessage += \"<p>\" + value.message + \"</p>\";
                        newMessage += \"<hr>\";
                        newMessage += \"<time datetime='\" + stringDate + \"'>Posté le : \" + stringDate + \"</time>\";
                        newMessage += \"</div>\";
                        newMessage += \"</div><br />\";
                    });

                    // On supprime les messages déjà existants.
                    \$('#propositionEchangesAffichageMessages').contents().remove();

                    // On fait apparaitre les nouveaux messages.
                    \$('#propositionEchangesAffichageMessages').append(newMessage);

                    // Si il y a des nouvezaux message, on appel la fonction de scroll.              
                    if (\$('#propositionEchangesAffichageMessages .propositionEchangesMessage').length > nbMessage) {
                        scrollToLastMessage();
                    }

                    // On rapelle la fonction.
                    receptMessage();
                }
            });
        }

        // Scroll la fênetre d'affichage des messages au début du dernier message posté.
        function scrollToLastMessage() {
            var height = 0;
            var lastHeight = 0;
            \$('#propositionEchangesAffichageMessages .propositionEchangesMessage').each(function () {
                height += parseInt(\$(this).height());
                lastHeight = parseInt(\$(this).height());
            });

            height = height - lastHeight;
            height += '';

            \$('#propositionEchangesAffichageMessages').animate({scrollTop: height}, 1000);
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/PrestationsInternes/propositionEchanges.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 125,  233 => 112,  228 => 110,  179 => 68,  174 => 66,  168 => 63,  131 => 28,  111 => 24,  105 => 21,  85 => 17,  68 => 16,  61 => 12,  57 => 11,  49 => 7,  40 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetRessources/PrestationsInternes/propositionEchanges.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle\\Resources\\views\\PrestationsInternes\\propositionEchanges.html.twig");
    }
}
