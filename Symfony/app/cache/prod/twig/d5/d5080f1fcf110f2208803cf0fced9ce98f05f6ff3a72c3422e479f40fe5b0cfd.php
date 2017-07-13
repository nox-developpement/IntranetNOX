<?php

/* support/include/ajax.note.php */
class __TwigTemplate_1ebae7d7ef2f2dd68c154c9d77c4e87f74a6cfe81d16938400c907a63395df51 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/ajax.note.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "support/include/ajax.note.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\ajax.note.php");
    }
}
