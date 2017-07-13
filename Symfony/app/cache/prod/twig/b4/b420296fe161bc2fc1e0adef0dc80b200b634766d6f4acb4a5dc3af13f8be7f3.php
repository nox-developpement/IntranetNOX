<?php

/* support/include/mpdf/compress.php */
class __TwigTemplate_19cc4f89f92e7f02649bef02fcc86d1a9823c2ede947c9fe9a1755db7a286b03 extends Twig_Template
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

\$excl = array( 'HTML-CSS', 'DIRECTW', 'TABLES', 'LISTS', 'IMAGES-CORE', 
'IMAGES-BMP', 'IMAGES-WMF', 'TABLES-ADVANCED-BORDERS', 'HTMLHEADERS-FOOTERS', 'COLUMNS', 'TOC', 'INDEX', 'BOOKMARKS', 'BARCODES', 'FORMS', 'WATERMARK', 'CJK-FONTS', 'RTL', 'INDIC', 'ANNOTATIONS', 'BACKGROUNDS', 'CSS-FLOAT', 'CSS-IMAGE-FLOAT', 'CSS-POSITION', 'CSS-PAGE', 'BORDER-RADIUS', 'HYPHENATION', 'ENCRYPTION', 'IMPORTS', 'PROGRESS-BAR');


\t// *DIRECTW* = Write, WriteText, WriteCell, Text, Shaded_box, AutosizeText
\t// IMAGES-CORE = [PNG, GIF, and JPG] NB background-images and watermark images

\t// Excluding 'HTML-CSS' will also exclude: 'TABLES', 'LISTS', 'TABLES-ADVANCED-BORDERS', 'HTMLHEADERS-FOOTERS', 'FORMS', 'BACKGROUNDS', 'CSS-FLOAT', 'CSS-IMAGE-FLOAT', 'CSS-POSITION', 'CSS-PAGE', 'BORDER-RADIUS'

// Text is marked in mpdf_source.php with e.g. :
/*-- TABLES-ADVANCED-BORDERS --*/
/*-- END TABLES-ADVANCED-BORDERS --*/
\t// *TABLES-ADVANCED-BORDERS*


if (!isset(\$_POST['generate']) || \$_POST['generate']!='generate') {


if (!file_exists('mpdf_source.php')) {
\tdie(\"ERROR - Could not find mpdf_source.php file in current directory. Please rename mpdf.php as mpdf_source.php\"); 
}




echo '<html>
<head>
<script language=javascript>
checked=false;
function checkedAll (frm1) {
\tvar aa= document.getElementById(\"frm1\");
\t if (checked == false)
          {
           checked = true
          }
        else
          {
          checked = false
          }
\tfor (var i =0; i < aa.elements.length; i++) 
\t{
\t aa.elements[i].checked = checked;
\t}
      }
</script>
</head>
<body>
<p><span style=\"color:red; font-weight: bold;\">WARNING</span>: This utility will OVERWRITE mpdf.php file in the current directory.</p>
<p>Select the functions you wish to INCLUDE in your mpdf.php program. When you click generate, a new mpdf.php file will be written to the current directory.</p>
<div><b>Notes</b>
<ul>
<li>HTML-CSS is required for many of the other functions to work including: Tables, Lists, Backgrounds, Forms, Border-radius and all other CSS</li>
<li>DIRECTW includes the functions to Write directly to the PDF file e.g. Write, WriteText, WriteCell, Text, Shaded_box, AutosizeText</li>
<li>You must include either HTML-CSS or DIRECTW</li>
<li>JPG, PNG and JPG images are supported with IMAGES-CORE</li>
<li>For WMF Images, you must include both IMAGES-CORE and IMAGES-WMF</li>
<li>IMAGES-CORE are required for BACKGROUNDS (IMAGES) or WATERMARKS to work</li>
</ul>
</div>
<input type=\"checkbox\" name=\"checkall\" onclick=\"checkedAll(frm1);\"> <i>Select/Unselect All</i><br /><br />

<form id=\"frm1\" action=\"compress.php\" method=\"POST\">
';
foreach(\$excl AS \$k=>\$ex) {
\techo '<input type=\"checkbox\" value=\"1\" name=\"inc['.\$ex.']\"';
\tif (\$k==0 || (\$k > 1 && \$k < 5)) {
\t\techo ' checked=\"checked\"';
\t}
\techo ' /> '.\$ex.'<br />';
}

echo '<br />
<input type=\"submit\" name=\"generate\" value=\"generate\" />
</form>
</body>
</html>';
exit;
}

\$inc = \$_POST['inc'];
if (is_array(\$inc) && count(\$inc)>0 ) { 
\tforeach(\$inc AS \$i=>\$v) {
\t\t\$key = array_search(\$i, \$excl);
\t\tunset(\$excl[\$key]);
\t}
}

if (!defined('PHP_VERSION_ID')) {
    \$version = explode('.', PHP_VERSION);
    define('PHP_VERSION_ID', (\$version[0] * 10000 + \$version[1] * 100 + \$version[2]));
}
if (PHP_VERSION_ID < 50300) { \$mqr = @get_magic_quotes_runtime(); }
\telse { \$mqr=0; }
if (\$mqr) { set_magic_quotes_runtime(0); }

\$l = file('mpdf_source.php');
if (!count(\$l)) { die(\"ERROR - Could not find mpdf_source.php file in current directory\"); }
\$exclflags = array();
\$x = '';

\t// Excluding 'HTML-CSS' will also exclude: 'TABLES', 'LISTS', 'TABLES-ADVANCED-BORDERS', 'HTMLHEADERS-FOOTERS', 'FORMS', 'BACKGROUNDS', 'CSS-FLOAT', 'CSS-IMAGE-FLOAT', 'CSS-POSITION', 'CSS-PAGE', 'BORDER-RADIUS'
if (\$excl[0]=='HTML-CSS') {
\t\$excl[] = 'TABLES';
\t\$excl[] = 'LISTS';
\t\$excl[] = 'TABLES-ADVANCED-BORDERS';
\t\$excl[] = 'HTMLHEADERS-FOOTERS';
\t\$excl[] = 'FORMS';
\t\$excl[] = 'BACKGROUNDS';
\t\$excl[] = 'CSS-FLOAT';
\t\$excl[] = 'CSS-IMAGE-FLOAT';
\t\$excl[] = 'CSS-POSITION';
\t\$excl[] = 'CSS-PAGE';
\t\$excl[] = 'BORDER-RADIUS';
}
\$excl = array_unique(\$excl);

foreach(\$l AS \$k=>\$ln) {
\t\$exclude = false;
\t// *XXXXX*
\tpreg_match_all(\"/\\/\\/ \\*([A-Za-z\\-]+)\\*/\", \$ln, \$m);
\tforeach(\$m[1] AS \$mm) {
\t\tif (in_array(\$mm, \$excl)) {
\t\t\t\$exclude = true;
\t\t}
\t}
\t/*-- XXXXX --*/
\tpreg_match_all(\"/\\/\\*-- ([A-Za-z\\-]+) --\\*\\//\", \$ln, \$m);
\tforeach(\$m[1] AS \$mm) {
\t\tif (in_array(\$mm, \$excl)) {
\t\t\t\$exclflags[\$mm] = true;
\t\t}
\t\t\$exclude = true;
\t}
\t\$exclflags = array_unique(\$exclflags);
\t/*-- END XXXX --*/
\tpreg_match_all(\"/\\/\\*-- END ([A-Za-z\\-]+) --\\*\\//\", \$ln, \$m);
\tforeach(\$m[1] AS \$mm) {
\t\tif (in_array(\$mm, \$excl)) {
\t\t\tunset(\$exclflags[\$mm]);
\t\t}
\t\t\$exclude = true;
\t}
\tif (count(\$exclflags)==0 && !\$exclude) { 
\t\t\$x .= \$ln; 
\t}
}
// mPDF 5.0
if (function_exists('file_put_contents')) {
\t\$check = file_put_contents('mpdf.php', \$x);
}
else {
\t\$f=fopen('mpdf.php', 'w');
\t\$check = fwrite(\$f, \$x);
\tfclose(\$f);
}
if (!\$check) { die(\"ERROR - Could not write to mpdf.php file. Are permissions correctly set?\"); }
echo '<p><b>mPDF file generated successfully!</b></p>';
echo '<div>mPDF file size '.number_format((strlen(\$x)/1024)).' kB</div>';

unset(\$l);
unset(\$x);

include('mpdf.php');
\$mpdf = new mPDF();

echo '<div>Memory usage on loading mPDF class '.number_format((memory_get_usage(true)/(1024*1024)),2).' MB</div>';

exit;

?>";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/compress.php";
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
        return new Twig_Source("", "support/include/mpdf/compress.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\mpdf\\compress.php");
    }
}
