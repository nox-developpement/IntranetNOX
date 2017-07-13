<?php

/* @NoxIntranetRessources/PrestationsInternes/administrationDA.html.twig */
class __TwigTemplate_be152505f49011d73765f6ae26f06c3b66526324883d9fc90c06316aabc15486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "@NoxIntranetRessources/PrestationsInternes/administrationDA.html.twig", 1);
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
        echo " Administration des DA ";
    }

    // line 5
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Administration des DA";
    }

    // line 7
    public function block_contenu($context, array $blocks = array())
    {
        echo " 
    <p style='font-size: 0.8vw; text-align: center; text-decoration: underline;'>Glisser-déposer les collaborateurs pour leurs attribuer un rôle.</p>
    <div id='prestationAdministrationDA'>
        <div>
            <h1>Collaborateurs</h1>
            <input type='search' id='prestationAdministrationDACollaborateursSearch' placeholder='Rechercher dans les collaborateurs'>
            <div id='prestationAdministrationDACollaborateursList'>
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 15
            echo "                    <p status='collaborateur' username=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "\" firstname=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "\" lastname=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "\">
                        ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
        </div>
        <div>
            <h1>DA</h1>
            <input type='search' id='prestationAdministrationDADASearch' placeholder='Rechercher dans les DA'>
            <div id='prestationAdministrationDADAList'>
                ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["da"]) ? $context["da"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 26
            echo "                    <p status='da' username=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "username", array()), "html", null, true);
            echo "\" firstname=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "firstname", array()), "html", null, true);
            echo "\" lastname=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "lastname", array()), "html", null, true);
            echo "\">
                        ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "lastname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "firstname", array()), "html", null, true);
            echo "<br />
                    </p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </div>
        </div>
    </div>

    <script>
        \$(window).load(function () {
            initDragAndDrop(); // On initialise le drag&drop.
            searchCollaborateurs();
            searchDA();
        });

        // Initialise les fonction de drag&drop avec les bon paramêtres.
        function initDragAndDrop() {
            // Initialise le drag sur la liste des collaborateurs.
            \$(\"#prestationAdministrationDACollaborateursList p\").draggable({
                containment: \"#prestationAdministrationDA\",
                helper: 'clone',
                revert: 'invalid',
                appendTo: 'body',
                start: function (event, ui) {
                    initDraggableObject(event, ui, \$(this)); // On appel la fonction de création de l'objet draggé.
                },
                stop: function () {
                    \$(this).show(); // On fait réaparaitre l'objet source.
                }
            });
            // Initialise le drop sur la liste des collaborateurs.
            \$(\"#prestationAdministrationDACollaborateursList\").droppable({
                accept: \"p[status='da']\",
                tolerance: 'pointer',
                drop: function (event, ui) {
                    \$('#prestationAdministrationDACollaborateursSearch').val(''); // Efface la valeur de recherche.
                    \$(this).find('p').show(); // Montre tous les paragraphes.
                    processDrop(event, ui, \$(this), '#prestationAdministrationDADAList', 'collaborateur'); // On fait appel à la fonction de création de l'objet droppé.
                }
            });
            // Initialise le drag sur la liste des DA.
            \$(\"#prestationAdministrationDADAList p\").draggable({
                containment: \"#prestationAdministrationDA\",
                helper: 'clone',
                revert: 'invalid',
                appendTo: 'body',
                start: function (event, ui) {
                    initDraggableObject(event, ui, \$(this)); // On appel la fonction de création de l'objet draggé.
                },
                stop: function () {
                    \$(this).show(); // On fait réaparaitre l'objet source.
                },
                cursorAt: {top: 0, left: 0}
            });
            // Initialise le drop sur la liste des DA.
            \$(\"#prestationAdministrationDADAList\").droppable({
                accept: \"p[status='collaborateur']\",
                tolerance: 'pointer',
                drop: function (event, ui) {
                    \$('#prestationAdministrationDADASearch').val(''); // Efface la valeur de recherche.
                    \$(this).find('p').show(); // Montre tous les paragraphes.
                    processDrop(event, ui, \$(this), '#prestationAdministrationDACollaborateursList', 'da'); // On fait appel à la fonction de création de l'objet droppé.
                }
            });
        }

        // Initialise l'objet draggable lors du drag d'un collaborateur/DA;
        function initDraggableObject(event, ui, context) {
            ui.helper.attr('class', 'draggableUser'); // On attribut la class 'draggableUser' pour appliquer le css à l'objet.
            // On récupére les attributs du collaborateur et on les appliques à l'objet.
            ui.helper.attr('username', context.attr('username'));
            ui.helper.attr('firstname', context.attr('firstname'));
            ui.helper.attr('lastname', context.attr('lastname'));
            // On copie les dimensions de l'objet source.
            ui.helper.css({
                width: context.width(),
                height: context.height(),
                padding: context.css('padding')
            });
            // Permet de placer le curseur au centre de l'objet.
            context.draggable('instance').offset.click = {
                left: Math.floor(ui.helper.width() / 2),
                top: Math.floor(ui.helper.height() / 2)
            };
            context.hide(); // On cache l'objet source.
        }

        // Initialise et fait apparaitre l'objet droppé.
        function processDrop(event, ui, context, source, status) {
            // On appel la fonction ajax de sauvegarde en base de donnée.
            ajaxSaveUserStatus(ui.helper.attr('username'), ui.helper.attr('firstname'), ui.helper.attr('lastname'));

            // On supprime l'objet source.
            var userObject = \$(source + \" p[username=\\\"\" + ui.helper.attr('username') + \"\\\"][firstname=\\\"\" + ui.helper.attr('firstname') + \"\\\"][lastname=\\\"\" + ui.helper.attr('lastname') + \"\\\"\");
            userObject.remove();

            appendSortUserParagraph(status, context, ui); // On appel la fonction d'ajout et de trie du nouveau paragraphe.

            initDragAndDrop(); // On appel à nouveau la fonction d'initisalisation du drag&drop pour prendre en compte les nouveau objets.
        }

        // Sauvegarde le nouveau status du collaborateur en base de données.
        function ajaxSaveUserStatus(username, firstname, lastname) {
            \$.ajax({
                url: '";
        // line 130
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_prestation_administration_da_ajax_save_user_status");
        echo "',
                data: {username: username, firstname: firstname, lastname: lastname}
            });
        }

        // Génére le code du nouveau paragraphe et le fait apparâitre en respectant l'ordre alphabétique des paragraphes.
        function appendSortUserParagraph(status, context, ui) {
            // On génére le code de l'objet qui sera droppé.
            var newDA = \"<p status=\\\"\" + status + \"\\\" username=\\\"\" + ui.helper.attr('username') + \"\\\" firstname=\\\"\" + ui.helper.attr('firstname') + \"\\\" lastname=\\\"\" + ui.helper.attr('lastname') + \"\\\">\";
            newDA += ui.helper.attr('lastname') + ' ' + ui.helper.attr('firstname');
            newDA += '</p>';

            // On fait apparâitre le paragraphe à la bonne position alphabétique.
            var usersParagraph = context.find('p'); // La liste des paragraphes existants.
            var userParagraphLength = usersParagraph.length - 1; // Taille de la liste des paragraphes.
            var contextName = ui.helper.attr('lastname') + ' ' + ui.helper.attr('firstname'); // Nom canonique du nouveau paragraphe.
            // Si la liste de paragraphes n'est pas vide...
            if (usersParagraph.length > 0) {
                // Pour chaque paragraphe...    
                \$.each(usersParagraph, function (index, value) {
                    var valueName = \$(this).attr('lastname') + ' ' + \$(this).attr('firstname'); // Nom canonique du paragraphe courant.
                    // Si le nom du nouveau paragraphe est plus petit que le nom du paragraphe courant.
                    if (contextName.toLowerCase() <= valueName.toLowerCase()) {
                        \$(this).before(newDA); // On fait apparaitre le nouveau paragraphe avant le paragraphe courant.
                        return false; // On stop la boucle.
                    }
                    // Sinon si le nom du nouveau paragraphe est plus grand que le nom du paragraphe courant et qu'il reste des paragraphes.
                    else if (contextName.toLowerCase() > valueName.toLowerCase() && index < userParagraphLength) {
                        return true; // On continue la boucle.
                    }
                    // Sinon si le nom du nouveau paragraphe est plus grand que le nom du paragraphe courant et qu'il ne reste plus de paragraphe.
                    else {
                        \$(this).after(newDA); // On fait apparaitre le nouveau paragraphe après le paragraphe courant.
                    }
                });
            }
            // Si la liste de paragraphes est vide...
            else {
                context.append(newDA); // On ajout le nouveau paragraphe.
            }

        }

        // Recherche et affiche les collaborateurs en fonction du texte de recherche.
        function searchCollaborateurs() {
            //setup before functions
            var typingTimer;                //timer identifier
            var doneTypingInterval = 1000;  //time in ms, 5 second for example
            var \$input = \$('#prestationAdministrationDACollaborateursSearch');

            //on keyup, start the countdown
            \$input.on('input, change, keydown, keyup', function () {
                clearTimeout(typingTimer);
                typingTimer = setTimeout(doneTyping, doneTypingInterval);
            });

            //on keyup, start the countdown
            \$input.on('search', function () {
                doneTyping();
            });

            //user is \"finished typing,\" do something
            function doneTyping() {
                \$('#prestationAdministrationDACollaborateursList p').show(); // On fait réaparaitre tous les paragraphes.
                var searchText = \$input.val().toLowerCase(); // On récupére la valeur de la recherche.

                // Pour tous les paragraphes.
                \$('#prestationAdministrationDACollaborateursList p').each(function () {
                    // Si le texte du paragraphe n'est pas contenu dans le texte recherché.
                    if (\$(this).text().toLowerCase().indexOf(searchText) === -1) {
                        \$(this).hide(); // On cache le paragraphe.
                    }
                });
            }
        }

        // Recherche et affiche les DA en fonction du texte de recherche.
        function searchDA() {
            //setup before functions
            var typingTimer;                //timer identifier
            var doneTypingInterval = 1000;  //time in ms, 5 second for example
            var \$input = \$('#prestationAdministrationDADASearch');

            //on keyup, start the countdown
            \$input.on('input, change, keydown, keyup', function () {
                clearTimeout(typingTimer);
                typingTimer = setTimeout(doneTyping, doneTypingInterval);
            });

            //on keyup, start the countdown
            \$input.on('search', function () {
                doneTyping();
            });

            //user is \"finished typing,\" do something
            function doneTyping() {
                \$('#prestationAdministrationDADAList p').show(); // On fait réaparaitre tous les paragraphes.
                var searchText = \$input.val().toLowerCase(); // On récupére la valeur de la recherche.

                // Pour tous les paragraphes.
                \$('#prestationAdministrationDADAList p').each(function () {
                    // Si le texte du paragraphe n'est pas contenu dans le texte recherché.
                    if (\$(this).text().toLowerCase().indexOf(searchText) === -1) {
                        \$(this).hide(); // On cache le paragraphe.
                    }
                });
            }
        }
    </script>

";
    }

    public function getTemplateName()
    {
        return "@NoxIntranetRessources/PrestationsInternes/administrationDA.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 130,  109 => 30,  98 => 27,  89 => 26,  85 => 25,  77 => 19,  66 => 16,  57 => 15,  53 => 14,  42 => 7,  36 => 5,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@NoxIntranetRessources/PrestationsInternes/administrationDA.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\RessourcesBundle\\Resources\\views\\PrestationsInternes\\administrationDA.html.twig");
    }
}
