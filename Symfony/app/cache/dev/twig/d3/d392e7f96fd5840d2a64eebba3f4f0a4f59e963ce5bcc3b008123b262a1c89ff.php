<?php

/* support/include/mpdf/includes/functions.php */
class __TwigTemplate_66de069c650aa6d7fee05845e12780d9cc3ceca6485020aed781b9c0edb54a3a extends Twig_Template
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
        $__internal_cbe2a04c0479cedc6edb3658aa27ad686d245043c88f977523e416fe49abe87b = $this->env->getExtension("native_profiler");
        $__internal_cbe2a04c0479cedc6edb3658aa27ad686d245043c88f977523e416fe49abe87b->enter($__internal_cbe2a04c0479cedc6edb3658aa27ad686d245043c88f977523e416fe49abe87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/mpdf/includes/functions.php"));

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
        
        $__internal_cbe2a04c0479cedc6edb3658aa27ad686d245043c88f977523e416fe49abe87b->leave($__internal_cbe2a04c0479cedc6edb3658aa27ad686d245043c88f977523e416fe49abe87b_prof);

    }

    public function getTemplateName()
    {
        return "support/include/mpdf/includes/functions.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* // mPDF 5.7*/
/* // Replace a section of an array with the elements in reverse*/
/* function array_splice_reverse(&$arr, $offset, $length) {*/
/* 	$tmp = (array_reverse(array_slice($arr, $offset, $length)));*/
/* 	array_splice($arr, $offset, $length, $tmp);*/
/* }*/
/* */
/* */
/* // mPDF 5.6.23*/
/* function array_insert(&$array, $value, $offset) {*/
/* 	if (is_array($array)) {*/
/* 		$array  = array_values($array);*/
/* 		$offset = intval($offset);*/
/* 		if ($offset < 0 || $offset >= count($array)) { array_push($array, $value); }*/
/* 		else if ($offset == 0) { array_unshift($array, $value); }*/
/* 		else { */
/* 			$temp  = array_slice($array, 0, $offset);*/
/* 			array_push($temp, $value);*/
/* 			$array = array_slice($array, $offset);*/
/* 			$array = array_merge($temp, $array);*/
/* 		}*/
/* 	}*/
/* 	else { $array = array($value); }*/
/* 	return count($array);*/
/* }*/
/* */
/* function urlencode_part($url) {	// mPDF 5.6.02*/
/* 	if (!preg_match('/^[a-z]+:\/\//i',$url)) { return $url; }*/
/* 	$file=$url;*/
/* 	$query='';*/
/* 	if (preg_match('/[?]/',$url)) {*/
/* 		$bits = preg_split('/[?]/',$url,2);*/
/* 		$file=$bits[0];*/
/* 		$query='?'.$bits[1];*/
/* 	}*/
/* 	$file = str_replace(array(" ","!","$","&","'","(",")","*","+",",",";","="),array("%20","%21","%24","%26","%27","%28","%29","%2A","%2B","%2C","%3B","%3D"),$file);*/
/* 	return $file.$query;*/
/* }*/
/* */
/* */
/* function _strspn($str1, $str2, $start=null, $length=null) {*/
/* 	$numargs = func_num_args();*/
/* 	if ($numargs == 2) {*/
/* 		return strspn($str1, $str2);*/
/* 	}*/
/* 	else if ($numargs == 3) {*/
/* 		return strspn($str1, $str2, $start);*/
/* 	}*/
/* 	else {*/
/* 		return strspn($str1, $str2, $start, $length);*/
/* 	}*/
/* }*/
/* */
/* */
/* function _strcspn($str1, $str2, $start=null, $length=null) {*/
/* 	$numargs = func_num_args();*/
/* 	if ($numargs == 2) {*/
/* 		return strcspn($str1, $str2);*/
/* 	} */
/* 	else if ($numargs == 3) {*/
/* 		return strcspn($str1, $str2, $start);*/
/* 	} */
/* 	else {*/
/* 		return strcspn($str1, $str2, $start, $length);*/
/* 	}*/
/* }*/
/* */
/* function _fgets (&$h, $force=false) {*/
/* 	$startpos = ftell($h);*/
/* 	$s = fgets($h, 1024);*/
/* 	if ($force && preg_match("/^([^\r\n]*[\r\n]{1,2})(.)/",trim($s), $ns)) {*/
/* 		$s = $ns[1];*/
/* 		fseek($h,$startpos+strlen($s));*/
/* 	}*/
/* 	return $s;*/
/* }*/
/* */
/* */
/* // For PHP4 compatability*/
/* if(!function_exists('str_ireplace')) {*/
/*   function str_ireplace($search,$replace,$subject) {*/
/* 	$search = preg_quote($search, "/");*/
/* 	return preg_replace("/".$search."/i", $replace, $subject); */
/*   }*/
/* }*/
/* if(!function_exists('htmlspecialchars_decode')) {*/
/* 	function htmlspecialchars_decode ($str) {*/
/* 		return strtr($str, array_flip(get_html_translation_table(HTML_SPECIALCHARS)));*/
/* 	}*/
/* }*/
/* */
/* function PreparePreText($text,$ff='//FF//') {*/
/* 	$text = htmlspecialchars($text);*/
/* 	if ($ff) { $text = str_replace($ff,'</pre><formfeed /><pre>',$text); }*/
/* 	return ('<pre>'.$text.'</pre>');*/
/* }*/
/* */
/* if(!function_exists('strcode2utf')){ */
/*   function strcode2utf($str,$lo=true) {*/
/* 	//converts all the &#nnn; and &#xhhh; in a string to Unicode*/
/* 	// mPDF 5.7*/
/* 	if ($lo) {*/
/* 		$str = preg_replace_callback('/\&\#([0-9]+)\;/m', 'code2utf_lo_callback', $str);*/
/* 		$str = preg_replace_callback('/\&\#x([0-9a-fA-F]+)\;/m', 'codeHex2utf_lo_callback', $str);*/
/* 	}*/
/* 	else {*/
/* 		$str = preg_replace_callback('/\&\#([0-9]+)\;/m', 'code2utf_callback', $str);*/
/* 		$str = preg_replace_callback('/\&\#x([0-9a-fA-F]+)\;/m', 'codeHex2utf_callback', $str);*/
/* 	}*/
/* 	return $str;*/
/*   }*/
/* }*/
/* function code2utf_callback($matches) {*/
/* 	return code2utf($matches[1], 0);*/
/* }*/
/* function code2utf_lo_callback($matches) {*/
/* 	return code2utf($matches[1], 1);*/
/* }*/
/* function codeHex2utf_callback($matches) {*/
/* 	return codeHex2utf($matches[1], 0);*/
/* }*/
/* function codeHex2utf_lo_callback($matches) {*/
/* 	return codeHex2utf($matches[1], 1);*/
/* }*/
/* */
/* if(!function_exists('code2utf')){ */
/*   function code2utf($num,$lo=true){*/
/* 	//Returns the utf string corresponding to the unicode value*/
/* 	if ($num<128) {*/
/* 		if ($lo) return chr($num);*/
/* 		else return '&#'.$num.';';*/
/* 	}*/
/* 	if ($num<2048) return chr(($num>>6)+192).chr(($num&63)+128);*/
/* 	if ($num<65536) return chr(($num>>12)+224).chr((($num>>6)&63)+128).chr(($num&63)+128);*/
/* 	if ($num<2097152) return chr(($num>>18)+240).chr((($num>>12)&63)+128).chr((($num>>6)&63)+128) .chr(($num&63)+128);*/
/* 	return '?';*/
/*   }*/
/* }*/
/* */
/* */
/* if(!function_exists('codeHex2utf')){ */
/*   function codeHex2utf($hex,$lo=true){*/
/* 	$num = hexdec($hex);*/
/* 	if (($num<128) && !$lo) return '&#x'.$hex.';';*/
/* 	return code2utf($num,$lo);*/
/*   }*/
/* }*/
/* */
/* */
/* ?>*/
