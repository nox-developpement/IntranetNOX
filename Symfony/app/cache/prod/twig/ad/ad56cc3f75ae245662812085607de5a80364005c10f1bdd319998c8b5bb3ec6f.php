<?php

/* support/include/mpdf/includes/functions.php */
class __TwigTemplate_be9541454e0ac2a142ff85d543c4d72a96e0088fdb9d8cc99817e023166cbfe2 extends Twig_Template
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

// mPDF 5.7
// Replace a section of an array with the elements in reverse
function array_splice_reverse(&\$arr, \$offset, \$length) {
\t\$tmp = (array_reverse(array_slice(\$arr, \$offset, \$length)));
\tarray_splice(\$arr, \$offset, \$length, \$tmp);
}


// mPDF 5.6.23
function array_insert(&\$array, \$value, \$offset) {
\tif (is_array(\$array)) {
\t\t\$array  = array_values(\$array);
\t\t\$offset = intval(\$offset);
\t\tif (\$offset < 0 || \$offset >= count(\$array)) { array_push(\$array, \$value); }
\t\telse if (\$offset == 0) { array_unshift(\$array, \$value); }
\t\telse { 
\t\t\t\$temp  = array_slice(\$array, 0, \$offset);
\t\t\tarray_push(\$temp, \$value);
\t\t\t\$array = array_slice(\$array, \$offset);
\t\t\t\$array = array_merge(\$temp, \$array);
\t\t}
\t}
\telse { \$array = array(\$value); }
\treturn count(\$array);
}

function urlencode_part(\$url) {\t// mPDF 5.6.02
\tif (!preg_match('/^[a-z]+:\\/\\//i',\$url)) { return \$url; }
\t\$file=\$url;
\t\$query='';
\tif (preg_match('/[?]/',\$url)) {
\t\t\$bits = preg_split('/[?]/',\$url,2);
\t\t\$file=\$bits[0];
\t\t\$query='?'.\$bits[1];
\t}
\t\$file = str_replace(array(\" \",\"!\",\"\$\",\"&\",\"'\",\"(\",\")\",\"*\",\"+\",\",\",\";\",\"=\"),array(\"%20\",\"%21\",\"%24\",\"%26\",\"%27\",\"%28\",\"%29\",\"%2A\",\"%2B\",\"%2C\",\"%3B\",\"%3D\"),\$file);
\treturn \$file.\$query;
}


function _strspn(\$str1, \$str2, \$start=null, \$length=null) {
\t\$numargs = func_num_args();
\tif (\$numargs == 2) {
\t\treturn strspn(\$str1, \$str2);
\t}
\telse if (\$numargs == 3) {
\t\treturn strspn(\$str1, \$str2, \$start);
\t}
\telse {
\t\treturn strspn(\$str1, \$str2, \$start, \$length);
\t}
}


function _strcspn(\$str1, \$str2, \$start=null, \$length=null) {
\t\$numargs = func_num_args();
\tif (\$numargs == 2) {
\t\treturn strcspn(\$str1, \$str2);
\t} 
\telse if (\$numargs == 3) {
\t\treturn strcspn(\$str1, \$str2, \$start);
\t} 
\telse {
\t\treturn strcspn(\$str1, \$str2, \$start, \$length);
\t}
}

function _fgets (&\$h, \$force=false) {
\t\$startpos = ftell(\$h);
\t\$s = fgets(\$h, 1024);
\tif (\$force && preg_match(\"/^([^\\r\\n]*[\\r\\n]{1,2})(.)/\",trim(\$s), \$ns)) {
\t\t\$s = \$ns[1];
\t\tfseek(\$h,\$startpos+strlen(\$s));
\t}
\treturn \$s;
}


// For PHP4 compatability
if(!function_exists('str_ireplace')) {
  function str_ireplace(\$search,\$replace,\$subject) {
\t\$search = preg_quote(\$search, \"/\");
\treturn preg_replace(\"/\".\$search.\"/i\", \$replace, \$subject); 
  }
}
if(!function_exists('htmlspecialchars_decode')) {
\tfunction htmlspecialchars_decode (\$str) {
\t\treturn strtr(\$str, array_flip(get_html_translation_table(HTML_SPECIALCHARS)));
\t}
}

function PreparePreText(\$text,\$ff='//FF//') {
\t\$text = htmlspecialchars(\$text);
\tif (\$ff) { \$text = str_replace(\$ff,'</pre><formfeed /><pre>',\$text); }
\treturn ('<pre>'.\$text.'</pre>');
}

if(!function_exists('strcode2utf')){ 
  function strcode2utf(\$str,\$lo=true) {
\t//converts all the &#nnn; and &#xhhh; in a string to Unicode
\t// mPDF 5.7
\tif (\$lo) {
\t\t\$str = preg_replace_callback('/\\&\\#([0-9]+)\\;/m', 'code2utf_lo_callback', \$str);
\t\t\$str = preg_replace_callback('/\\&\\#x([0-9a-fA-F]+)\\;/m', 'codeHex2utf_lo_callback', \$str);
\t}
\telse {
\t\t\$str = preg_replace_callback('/\\&\\#([0-9]+)\\;/m', 'code2utf_callback', \$str);
\t\t\$str = preg_replace_callback('/\\&\\#x([0-9a-fA-F]+)\\;/m', 'codeHex2utf_callback', \$str);
\t}
\treturn \$str;
  }
}
function code2utf_callback(\$matches) {
\treturn code2utf(\$matches[1], 0);
}
function code2utf_lo_callback(\$matches) {
\treturn code2utf(\$matches[1], 1);
}
function codeHex2utf_callback(\$matches) {
\treturn codeHex2utf(\$matches[1], 0);
}
function codeHex2utf_lo_callback(\$matches) {
\treturn codeHex2utf(\$matches[1], 1);
}

if(!function_exists('code2utf')){ 
  function code2utf(\$num,\$lo=true){
\t//Returns the utf string corresponding to the unicode value
\tif (\$num<128) {
\t\tif (\$lo) return chr(\$num);
\t\telse return '&#'.\$num.';';
\t}
\tif (\$num<2048) return chr((\$num>>6)+192).chr((\$num&63)+128);
\tif (\$num<65536) return chr((\$num>>12)+224).chr(((\$num>>6)&63)+128).chr((\$num&63)+128);
\tif (\$num<2097152) return chr((\$num>>18)+240).chr(((\$num>>12)&63)+128).chr(((\$num>>6)&63)+128) .chr((\$num&63)+128);
\treturn '?';
  }
}


if(!function_exists('codeHex2utf')){ 
  function codeHex2utf(\$hex,\$lo=true){
\t\$num = hexdec(\$hex);
\tif ((\$num<128) && !\$lo) return '&#x'.\$hex.';';
\treturn code2utf(\$num,\$lo);
  }
}


?>";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/includes/functions.php";
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
        return new Twig_Source("", "support/include/mpdf/includes/functions.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\mpdf\\includes\\functions.php");
    }
}
