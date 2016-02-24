<?php

/* support/include/mpdf/compress.php */
class __TwigTemplate_7af9e7cb13bca688d81b8339c6a69bbf3cde71d6f3357ddcec159a4b4564950e extends Twig_Template
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
        $__internal_e89a40f8c4e35d6a6f6b8aa1c4f4ee8bca2e03b98b0fbe0d0a5463ca901fed90 = $this->env->getExtension("native_profiler");
        $__internal_e89a40f8c4e35d6a6f6b8aa1c4f4ee8bca2e03b98b0fbe0d0a5463ca901fed90->enter($__internal_e89a40f8c4e35d6a6f6b8aa1c4f4ee8bca2e03b98b0fbe0d0a5463ca901fed90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/mpdf/compress.php"));

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
        
        $__internal_e89a40f8c4e35d6a6f6b8aa1c4f4ee8bca2e03b98b0fbe0d0a5463ca901fed90->leave($__internal_e89a40f8c4e35d6a6f6b8aa1c4f4ee8bca2e03b98b0fbe0d0a5463ca901fed90_prof);

    }

    public function getTemplateName()
    {
        return "support/include/mpdf/compress.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* $excl = array( 'HTML-CSS', 'DIRECTW', 'TABLES', 'LISTS', 'IMAGES-CORE', */
/* 'IMAGES-BMP', 'IMAGES-WMF', 'TABLES-ADVANCED-BORDERS', 'HTMLHEADERS-FOOTERS', 'COLUMNS', 'TOC', 'INDEX', 'BOOKMARKS', 'BARCODES', 'FORMS', 'WATERMARK', 'CJK-FONTS', 'RTL', 'INDIC', 'ANNOTATIONS', 'BACKGROUNDS', 'CSS-FLOAT', 'CSS-IMAGE-FLOAT', 'CSS-POSITION', 'CSS-PAGE', 'BORDER-RADIUS', 'HYPHENATION', 'ENCRYPTION', 'IMPORTS', 'PROGRESS-BAR');*/
/* */
/* */
/* 	// *DIRECTW* = Write, WriteText, WriteCell, Text, Shaded_box, AutosizeText*/
/* 	// IMAGES-CORE = [PNG, GIF, and JPG] NB background-images and watermark images*/
/* */
/* 	// Excluding 'HTML-CSS' will also exclude: 'TABLES', 'LISTS', 'TABLES-ADVANCED-BORDERS', 'HTMLHEADERS-FOOTERS', 'FORMS', 'BACKGROUNDS', 'CSS-FLOAT', 'CSS-IMAGE-FLOAT', 'CSS-POSITION', 'CSS-PAGE', 'BORDER-RADIUS'*/
/* */
/* // Text is marked in mpdf_source.php with e.g. :*/
/* /*-- TABLES-ADVANCED-BORDERS --*//* */
/* /*-- END TABLES-ADVANCED-BORDERS --*//* */
/* 	// *TABLES-ADVANCED-BORDERS**/
/* */
/* */
/* if (!isset($_POST['generate']) || $_POST['generate']!='generate') {*/
/* */
/* */
/* if (!file_exists('mpdf_source.php')) {*/
/* 	die("ERROR - Could not find mpdf_source.php file in current directory. Please rename mpdf.php as mpdf_source.php"); */
/* }*/
/* */
/* */
/* */
/* */
/* echo '<html>*/
/* <head>*/
/* <script language=javascript>*/
/* checked=false;*/
/* function checkedAll (frm1) {*/
/* 	var aa= document.getElementById("frm1");*/
/* 	 if (checked == false)*/
/*           {*/
/*            checked = true*/
/*           }*/
/*         else*/
/*           {*/
/*           checked = false*/
/*           }*/
/* 	for (var i =0; i < aa.elements.length; i++) */
/* 	{*/
/* 	 aa.elements[i].checked = checked;*/
/* 	}*/
/*       }*/
/* </script>*/
/* </head>*/
/* <body>*/
/* <p><span style="color:red; font-weight: bold;">WARNING</span>: This utility will OVERWRITE mpdf.php file in the current directory.</p>*/
/* <p>Select the functions you wish to INCLUDE in your mpdf.php program. When you click generate, a new mpdf.php file will be written to the current directory.</p>*/
/* <div><b>Notes</b>*/
/* <ul>*/
/* <li>HTML-CSS is required for many of the other functions to work including: Tables, Lists, Backgrounds, Forms, Border-radius and all other CSS</li>*/
/* <li>DIRECTW includes the functions to Write directly to the PDF file e.g. Write, WriteText, WriteCell, Text, Shaded_box, AutosizeText</li>*/
/* <li>You must include either HTML-CSS or DIRECTW</li>*/
/* <li>JPG, PNG and JPG images are supported with IMAGES-CORE</li>*/
/* <li>For WMF Images, you must include both IMAGES-CORE and IMAGES-WMF</li>*/
/* <li>IMAGES-CORE are required for BACKGROUNDS (IMAGES) or WATERMARKS to work</li>*/
/* </ul>*/
/* </div>*/
/* <input type="checkbox" name="checkall" onclick="checkedAll(frm1);"> <i>Select/Unselect All</i><br /><br />*/
/* */
/* <form id="frm1" action="compress.php" method="POST">*/
/* ';*/
/* foreach($excl AS $k=>$ex) {*/
/* 	echo '<input type="checkbox" value="1" name="inc['.$ex.']"';*/
/* 	if ($k==0 || ($k > 1 && $k < 5)) {*/
/* 		echo ' checked="checked"';*/
/* 	}*/
/* 	echo ' /> '.$ex.'<br />';*/
/* }*/
/* */
/* echo '<br />*/
/* <input type="submit" name="generate" value="generate" />*/
/* </form>*/
/* </body>*/
/* </html>';*/
/* exit;*/
/* }*/
/* */
/* $inc = $_POST['inc'];*/
/* if (is_array($inc) && count($inc)>0 ) { */
/* 	foreach($inc AS $i=>$v) {*/
/* 		$key = array_search($i, $excl);*/
/* 		unset($excl[$key]);*/
/* 	}*/
/* }*/
/* */
/* if (!defined('PHP_VERSION_ID')) {*/
/*     $version = explode('.', PHP_VERSION);*/
/*     define('PHP_VERSION_ID', ($version[0] * 10000 + $version[1] * 100 + $version[2]));*/
/* }*/
/* if (PHP_VERSION_ID < 50300) { $mqr = @get_magic_quotes_runtime(); }*/
/* 	else { $mqr=0; }*/
/* if ($mqr) { set_magic_quotes_runtime(0); }*/
/* */
/* $l = file('mpdf_source.php');*/
/* if (!count($l)) { die("ERROR - Could not find mpdf_source.php file in current directory"); }*/
/* $exclflags = array();*/
/* $x = '';*/
/* */
/* 	// Excluding 'HTML-CSS' will also exclude: 'TABLES', 'LISTS', 'TABLES-ADVANCED-BORDERS', 'HTMLHEADERS-FOOTERS', 'FORMS', 'BACKGROUNDS', 'CSS-FLOAT', 'CSS-IMAGE-FLOAT', 'CSS-POSITION', 'CSS-PAGE', 'BORDER-RADIUS'*/
/* if ($excl[0]=='HTML-CSS') {*/
/* 	$excl[] = 'TABLES';*/
/* 	$excl[] = 'LISTS';*/
/* 	$excl[] = 'TABLES-ADVANCED-BORDERS';*/
/* 	$excl[] = 'HTMLHEADERS-FOOTERS';*/
/* 	$excl[] = 'FORMS';*/
/* 	$excl[] = 'BACKGROUNDS';*/
/* 	$excl[] = 'CSS-FLOAT';*/
/* 	$excl[] = 'CSS-IMAGE-FLOAT';*/
/* 	$excl[] = 'CSS-POSITION';*/
/* 	$excl[] = 'CSS-PAGE';*/
/* 	$excl[] = 'BORDER-RADIUS';*/
/* }*/
/* $excl = array_unique($excl);*/
/* */
/* foreach($l AS $k=>$ln) {*/
/* 	$exclude = false;*/
/* 	// *XXXXX**/
/* 	preg_match_all("/\/\/ \*([A-Za-z\-]+)\*//* ", $ln, $m);*/
/* 	foreach($m[1] AS $mm) {*/
/* 		if (in_array($mm, $excl)) {*/
/* 			$exclude = true;*/
/* 		}*/
/* 	}*/
/* 	/*-- XXXXX --*//* */
/* 	preg_match_all("/\/\*-- ([A-Za-z\-]+) --\*\//", $ln, $m);*/
/* 	foreach($m[1] AS $mm) {*/
/* 		if (in_array($mm, $excl)) {*/
/* 			$exclflags[$mm] = true;*/
/* 		}*/
/* 		$exclude = true;*/
/* 	}*/
/* 	$exclflags = array_unique($exclflags);*/
/* 	/*-- END XXXX --*//* */
/* 	preg_match_all("/\/\*-- END ([A-Za-z\-]+) --\*\//", $ln, $m);*/
/* 	foreach($m[1] AS $mm) {*/
/* 		if (in_array($mm, $excl)) {*/
/* 			unset($exclflags[$mm]);*/
/* 		}*/
/* 		$exclude = true;*/
/* 	}*/
/* 	if (count($exclflags)==0 && !$exclude) { */
/* 		$x .= $ln; */
/* 	}*/
/* }*/
/* // mPDF 5.0*/
/* if (function_exists('file_put_contents')) {*/
/* 	$check = file_put_contents('mpdf.php', $x);*/
/* }*/
/* else {*/
/* 	$f=fopen('mpdf.php', 'w');*/
/* 	$check = fwrite($f, $x);*/
/* 	fclose($f);*/
/* }*/
/* if (!$check) { die("ERROR - Could not write to mpdf.php file. Are permissions correctly set?"); }*/
/* echo '<p><b>mPDF file generated successfully!</b></p>';*/
/* echo '<div>mPDF file size '.number_format((strlen($x)/1024)).' kB</div>';*/
/* */
/* unset($l);*/
/* unset($x);*/
/* */
/* include('mpdf.php');*/
/* $mpdf = new mPDF();*/
/* */
/* echo '<div>Memory usage on loading mPDF class '.number_format((memory_get_usage(true)/(1024*1024)),2).' MB</div>';*/
/* */
/* exit;*/
/* */
/* ?>*/
