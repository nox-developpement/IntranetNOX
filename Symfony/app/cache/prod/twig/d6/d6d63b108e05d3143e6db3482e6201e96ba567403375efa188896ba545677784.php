<?php

/* NoxIntranetUserBundle:MatriceCompetence:collaborateursInfoFileUploading.html.twig */
class __TwigTemplate_021d08767282908f965c7a95495d1f35b81424bf19ec9ce2e1d8c2b914080754 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "NoxIntranetUserBundle:MatriceCompetence:collaborateursInfoFileUploading.html.twig", 1);
        $this->blocks = array(
            'style' => array($this, 'block_style'),
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
    public function block_style($context, array $blocks = array())
    {
        // line 4
        echo "    <style>
        #upload_info_div {
            width: 70%;
            margin: auto;
            text-align: center;
        }

        #upload_info_div form {
            display: inline-block;
            width: auto;
            text-align: center;
            background-color: rgba(255,255,255, 0.6);
            border: 1px solid #1F4E79;
            border-radius: 10px;
        }

        #upload_info_div form label {
            display: inline-block;
            font-size: calc(15px + 0.2vw);
            margin-bottom: 1em;
        }

        #upload_info_div form input[type='file'] {
            display: none;
        }

        #file_drop {
            padding: 1em;
            border: dashed 5px grey;
            border-radius: 5px;
            cursor: pointer;
        }

        #post_drop_text {
            display: none;
            background-color: rgba(31,78,121, 0.8);
            color: white;
            border-radius: 5px;
            padding: 1em;
        }

        #post_drop_delete_file {
            margin-left: 0.5em;
            opacity: 0.5;
            cursor: pointer;
        }

        #post_drop_delete_file:hover {
            opacity: 1;
        }

        #form_SendFile {
            background-color: #1F4E79;
            color: white;
            padding: 0.5em;
            border-radius: 5px;
        }
    </style>
";
    }

    // line 64
    public function block_titrePage($context, array $blocks = array())
    {
        echo " Envoi informations collaborateurs ";
    }

    // line 66
    public function block_messageAccueil($context, array $blocks = array())
    {
        echo "Envoi informations collaborateurs";
    }

    // line 68
    public function block_contenu($context, array $blocks = array())
    {
        // line 69
        echo "
    <script>
        \$(document).ready(function () {
            // Variable contenant le fichier droppé.
            info_file = null;

            fileDragDrop();
            sendForm();
            fileUploadForm();
        });

        // Active un drag & drop pour l'envoi de fichier Excel d'informations collaborateur.
        function fileDragDrop() {
            // Zone dans laquelle le drag & drop est actif.
            var dropzone = \$(\"#file_drop\");

            // Lorsque la souris entre sur la zone de drag & drop.
            dropzone.on('dragover', function () {
                dropzone.css('border-color', 'black');
                return false;
            });

            // Lorsque la souris quitte la zone de drag & drop.
            dropzone.on('dragleave', function () {
                dropzone.css('border-color', 'grey');
                return false;
            });

            // Lorsqu'on drop un fichier.
            dropzone.on('drop', function (e) {
                e.stopPropagation();
                e.preventDefault();
                dropzone.css('border-color', 'black');

                // On récupére le fichier.
                var file = e.originalEvent.dataTransfer.files[0];

                // Si le fichier est un fichier Excel...
                if (file.name.split(\".\").pop() === \"xlxs\" || file.name.split(\".\").pop() === \"xls\") {
                    // On stock le fichier dans une variable globale.
                    info_file = file;

                    // On affiche le nom du fichier.
                    \$(\"#post_drop_filename\").text(file.name);
                    \$(\"#post_drop_text\").css('display', 'inline-block');
                    \$(\"#pre_drop_text\").hide();
                }
                // Sinon...
                else {
                    // On affiche un message d'erreur.
                    alert(\"Veuillez utilser un fichier Excel (.xlsx ou .xls).\");
                }
            });
        }

        // Upload d'un fichier par requête ajax.
        function ajaxUploadInfoFile(file) {
            // Initialisation du fichier à envoyer.
            var data = new FormData();
            data.append('info_file', file);

            // Envoi du fichier.
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 133
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("nox_intranet_matrice_collaborateur_ajax_info_file_uploading");
        echo "\",
                data: data,
                processData: false,
                contentType: false,
                success: function (response) {
                    // Rechargmement de la page.
                    document.location.href = response;
                }
            });
        }

        // Gestion de l'envoi du formulaire.
        function sendForm() {
            // Lors de l'envoi du formulaire...
            \$(\"form[name='form']\").on(\"submit\", function () {
                // Si un fichier est présent dans la zone de drop...
                if (info_file !== null) {
                    // On bloque l'action par défaut.
                    ajaxUploadInfoFile(info_file);
                    return false;
                }
                // Sinon si il n'y a pas de fichier dans le formulaire...
                else if (\$(\"#form_InfoFile\").val().length < 1) {
                    // On bloque l'action par défaut et on affiche un message d'erreur.
                    alert(\"Veuilez séléctionner un fichier à envoyer.\");
                    return false;
                }
            });
        }

        // Gestion des évenement sur le formulaire d'envoi de fichier.
        function fileUploadForm() {
            // Lors d'un clic sur la zone de drop...
            \$(\"#file_drop\").on(\"click\", function () {
                // Si la variable global de fichier est null et que le champ de fichier du formulaire est vide..
                if (info_file === null && \$('#form_InfoFile').val() === \"\") {
                    // On simule un clic sur le formulaire d'envoi de fichier.
                    \$('#form_InfoFile').click();
                }
            });

            // Lors d'un clic sur la croix de suppression de fichier...
            \$(\"#post_drop_delete_file\").on(\"click\", function (e) {
                // On stop la propagation du clic sur le formulaire parent.
                e.stopPropagation();

                // Si le fichier a été ajouté depuis le formulaire...
                if (info_file === null) {
                    // On efface la valeur du formulaire.
                    \$('#form_InfoFile').val(\"\");
                }
                // Si le fichier a été droppé...
                else {
                    // On efface la valeur de info_file.
                    info_file = null;
                }

                // On cache le nom du fichier.
                \$(\"#post_drop_filename\").text(\"\");
                \$(\"#post_drop_text\").css('display', 'none');
                \$(\"#pre_drop_text\").show();
                \$(\"#file_drop\").css('border-color', 'grey');
            });

            // Lorsqu'on ajoute un fichier depuis le formulaire.
            \$('#form_InfoFile').on(\"change\", function () {
                // On récupére le fichier.
                var file = \$(this)[0].files[0];

                // Si le fichier n'est pas un fichier Excel...
                if (!(file.name.split(\".\").pop() === \"xlxs\" || file.name.split(\".\").pop() === \"xls\")) {
                    // On supprime le fichier du formulaire et on affiche un message d'erreur.
                    \$('#form_InfoFile').val();
                    alert(\"Veuillez utilser un fichier Excel (.xlsx ou .xls).\");
                    return false;
                }

                // Si le fichier est valide...
                if (file.name.length > 1) {
                    // On affiche le nom du fichier.
                    \$(\"#post_drop_filename\").text(file.name);
                    \$(\"#post_drop_text\").css('display', 'inline-block');
                    \$(\"#pre_drop_text\").hide();
                    \$(\"#file_drop\").css('border-color', 'black');
                }
            });
        }
    </script>

    <div id=\"upload_info_div\">
        ";
        // line 223
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formUploadInfoFile"]) ? $context["formUploadInfoFile"] : null), 'form_start');
        echo "
        ";
        // line 224
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUploadInfoFile"]) ? $context["formUploadInfoFile"] : null), "InfoFile", array()), 'label');
        echo "
        ";
        // line 225
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUploadInfoFile"]) ? $context["formUploadInfoFile"] : null), "InfoFile", array()), 'widget');
        echo "
        <div id=\"file_drop\">
            <p id=\"pre_drop_text\">
                Glisser-déposer le fichier<br />ou<br />Cliquer pour choisir un fichier
            </p>
            <p id=\"post_drop_text\">
                <span id=\"post_drop_filename\"></span>
                <span id=\"post_drop_delete_file\">&#10060;</span>
            </p>
        </div>
        <p style=\"margin-bottom: 0;\">
            ";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["formUploadInfoFile"]) ? $context["formUploadInfoFile"] : null), "SendFile", array()), 'widget');
        echo "
        </p>
        ";
        // line 238
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["formUploadInfoFile"]) ? $context["formUploadInfoFile"] : null), 'form_end');
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "NoxIntranetUserBundle:MatriceCompetence:collaborateursInfoFileUploading.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  297 => 238,  292 => 236,  278 => 225,  274 => 224,  270 => 223,  177 => 133,  111 => 69,  108 => 68,  102 => 66,  96 => 64,  34 => 4,  31 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "NoxIntranetUserBundle:MatriceCompetence:collaborateursInfoFileUploading.html.twig", "C:\\wamp\\www\\Symfony\\src\\NoxIntranet\\UserBundle/Resources/views/MatriceCompetence/collaborateursInfoFileUploading.html.twig");
    }
}
