<?php

/* support/include/ajax.note.php */
class __TwigTemplate_953386c0fbeb5cdeb85de24ecd020695d2b00ed10939d7990a836d1dc77277f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_05a73907d3fbfa0d14988e095064baa355f27714a70e8d0ba9f2808205c1bc71 = $this->env->getExtension("native_profiler");
        $__internal_05a73907d3fbfa0d14988e095064baa355f27714a70e8d0ba9f2808205c1bc71->enter($__internal_05a73907d3fbfa0d14988e095064baa355f27714a70e8d0ba9f2808205c1bc71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/ajax.note.php"));

        // line 1
        echo "<?php

if(!defined('INCLUDE_DIR')) die('!');

require_once(INCLUDE_DIR.'class.note.php');

class NoteAjaxAPI extends AjaxController {

    function getNote(\$id) {
        global \$thisstaff;

        if (!\$thisstaff)
            Http::response(403, \"Login required\");
        elseif (!(\$note = QuickNote::lookup(\$id)))
            Http::response(205, \"Note not found\");

        Http::response(200, \$note->display());
    }

    function updateNote(\$id) {
        global \$thisstaff;

        if (!\$thisstaff)
            Http::response(403, \"Login required\");
        elseif (!(\$note = QuickNote::lookup(\$id)))
            Http::response(205, \"Note not found\");
        elseif (!isset(\$_POST['note']) || !\$_POST['note'])
            Http::response(422, \"Send `note` parameter\");

        \$note->body = Format::sanitize(\$_POST['note']);
        if (!\$note->save())
            Http::response(500, \"Unable to save note contents\");

        Http::response(200, \$note->display());
    }

    function deleteNote(\$id) {
        global \$thisstaff;

        if (!\$thisstaff)
            Http::response(403, \"Login required\");
        elseif (!(\$note = QuickNote::lookup(\$id)))
            Http::response(205, \"Note not found\");
        elseif (!\$note->delete())
            Http::response(500, \"Unable to remove note\");

        Http::response(204, \"Deleted notes can be recovered by loading yesterday's backup\");
    }

    function createNote(\$ext_id) {
        global \$thisstaff;

        if (!\$thisstaff)
            Http::response(403, \"Login required\");
        elseif (!isset(\$_POST['note']) || !\$_POST['note'])
            Http::response(422, \"Send `note` parameter\");
        elseif (!(\$note = QuickNote::create(array(
                'staff_id' => \$thisstaff->getId(),
                'body' => Format::sanitize(\$_POST['note']),
                'created' => new SqlFunction('NOW'),
                'ext_id' => \$ext_id,
                ))))
            Http::response(500, \"Unable to create new note\");
        elseif (!\$note->save(true))
            Http::response(500, \"Unable to create new note\");

        \$show_options = true;
        include STAFFINC_DIR . 'templates/note.tmpl.php';
    }
}
";
        
        $__internal_05a73907d3fbfa0d14988e095064baa355f27714a70e8d0ba9f2808205c1bc71->leave($__internal_05a73907d3fbfa0d14988e095064baa355f27714a70e8d0ba9f2808205c1bc71_prof);

    }

    public function getTemplateName()
    {
        return "support/include/ajax.note.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* if(!defined('INCLUDE_DIR')) die('!');*/
/* */
/* require_once(INCLUDE_DIR.'class.note.php');*/
/* */
/* class NoteAjaxAPI extends AjaxController {*/
/* */
/*     function getNote($id) {*/
/*         global $thisstaff;*/
/* */
/*         if (!$thisstaff)*/
/*             Http::response(403, "Login required");*/
/*         elseif (!($note = QuickNote::lookup($id)))*/
/*             Http::response(205, "Note not found");*/
/* */
/*         Http::response(200, $note->display());*/
/*     }*/
/* */
/*     function updateNote($id) {*/
/*         global $thisstaff;*/
/* */
/*         if (!$thisstaff)*/
/*             Http::response(403, "Login required");*/
/*         elseif (!($note = QuickNote::lookup($id)))*/
/*             Http::response(205, "Note not found");*/
/*         elseif (!isset($_POST['note']) || !$_POST['note'])*/
/*             Http::response(422, "Send `note` parameter");*/
/* */
/*         $note->body = Format::sanitize($_POST['note']);*/
/*         if (!$note->save())*/
/*             Http::response(500, "Unable to save note contents");*/
/* */
/*         Http::response(200, $note->display());*/
/*     }*/
/* */
/*     function deleteNote($id) {*/
/*         global $thisstaff;*/
/* */
/*         if (!$thisstaff)*/
/*             Http::response(403, "Login required");*/
/*         elseif (!($note = QuickNote::lookup($id)))*/
/*             Http::response(205, "Note not found");*/
/*         elseif (!$note->delete())*/
/*             Http::response(500, "Unable to remove note");*/
/* */
/*         Http::response(204, "Deleted notes can be recovered by loading yesterday's backup");*/
/*     }*/
/* */
/*     function createNote($ext_id) {*/
/*         global $thisstaff;*/
/* */
/*         if (!$thisstaff)*/
/*             Http::response(403, "Login required");*/
/*         elseif (!isset($_POST['note']) || !$_POST['note'])*/
/*             Http::response(422, "Send `note` parameter");*/
/*         elseif (!($note = QuickNote::create(array(*/
/*                 'staff_id' => $thisstaff->getId(),*/
/*                 'body' => Format::sanitize($_POST['note']),*/
/*                 'created' => new SqlFunction('NOW'),*/
/*                 'ext_id' => $ext_id,*/
/*                 ))))*/
/*             Http::response(500, "Unable to create new note");*/
/*         elseif (!$note->save(true))*/
/*             Http::response(500, "Unable to create new note");*/
/* */
/*         $show_options = true;*/
/*         include STAFFINC_DIR . 'templates/note.tmpl.php';*/
/*     }*/
/* }*/
/* */
