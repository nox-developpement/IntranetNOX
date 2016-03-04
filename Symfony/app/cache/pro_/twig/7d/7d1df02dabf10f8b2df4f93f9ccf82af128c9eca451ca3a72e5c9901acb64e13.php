<?php

/* support/include/mpdf/config_cp.php */
class __TwigTemplate_a74e2b21ba6a7ff5eec50b3f26d95e885e568c831fdd70895745984bf8c7f948 extends Twig_Template
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


function GetLangOpts(\$llcc, \$adobeCJK) {
\tif (strlen(\$llcc) == 5) {
\t\t\$lang = substr(strtolower(\$llcc),0,2);
\t\t\$country = substr(strtoupper(\$llcc),3,2);
\t}
\telse { \$lang = strtolower(\$llcc); \$country = ''; }
\t\$unifonts = \"\";
\t\$coreSuitable = false;

\tswitch(\$lang){
\t  CASE \"en\":
\t  CASE \"ca\":
\t  CASE \"cy\":
\t  CASE \"da\":
\t  CASE \"de\":
\t  CASE \"es\":
\t  CASE \"eu\":
\t  CASE \"fr\":
\t  CASE \"ga\":
\t  CASE \"fi\": 
\t  CASE \"is\":
\t  CASE \"it\":
\t  CASE \"nl\":
\t  CASE \"no\":
\t  CASE \"pt\":
\t  CASE \"sv\":
\t\t// Edit this value to define how mPDF behaves when using new mPDF('-x')
\t\t// If set to TRUE, mPDF will use Adobe core fonts only when it recognises the languages above
\t\t\$coreSuitable = true;  break;



\t  // RTL Languages
\t  CASE \"he\":
\t  CASE \"yi\":
\t\t\$unifonts = \"dejavusans,dejavusansB,dejavusansI,dejavusansBI\";  break;

\t  // Arabic
\t  CASE \"ar\":  
\t\t\$unifonts = \"xbriyaz,xbriyazB,xbriyazI,xbriyazBI,xbzar,xbzarB,xbzarI,xbzarBI\";  break;
\t  CASE \"fa\":  
\t\t\$unifonts = \"xbriyaz,xbriyazB,xbriyazI,xbriyazBI,xbzar,xbzarB,xbzarI,xbzarBI\";  break;
\t  CASE \"ps\": 
\t\t\$unifonts = \"xbriyaz,xbriyazB,xbriyazI,xbriyazBI,xbzar,xbzarB,xbzarI,xbzarBI\"; break;
\t  CASE \"ur\":  
\t\t\$unifonts = \"xbriyaz,xbriyazB,xbriyazI,xbriyazBI,xbzar,xbzarB,xbzarI,xbzarBI\"; break;

\t  // Sindhi (can be Arabic or Devanagari)
\t  CASE \"sd\":
\t\tif (\$country == \"IN\") { \$unifonts = \"ind_hi_1_001\"; }
\t//\telse if (\$country == \"PK\") { \$unifonts = \"\"; }
\t//\telse { \$unifonts = \"\"; }
\t\tbreak;


\t  // INDIC 
\t  // Assamese
\t  CASE \"as\":  \$unifonts = \"ind_bn_1_001\"; break;
\t  // Bengali
\t  CASE \"bn\":  \$unifonts = \"ind_bn_1_001\"; break;
\t  // Gujarati
\t  CASE \"gu\":  \$unifonts = \"ind_gu_1_001\"; break;
\t  // Hindi (Devanagari)
\t  CASE \"hi\":  \$unifonts = \"ind_hi_1_001\"; break;
\t  // Kannada
\t  CASE \"kn\":  \$unifonts = \"ind_kn_1_001\"; break;
\t  // Kashmiri
\t  CASE \"ks\":  \$unifonts = \"ind_hi_1_001\"; break;
\t  // Malayalam
\t  CASE \"ml\":  \$unifonts = \"ind_ml_1_001\"; break;
\t  // Nepali (Devanagari)
\t  CASE \"ne\":  \$unifonts = \"ind_hi_1_001\"; break;
\t  // Oriya
\t  CASE \"or\":  \$unifonts = \"ind_or_1_001\"; break;
\t  // Punjabi (Gurmukhi)
\t  CASE \"pa\":  \$unifonts = \"ind_pa_1_001\"; break;
\t  // Tamil
\t  CASE \"ta\":  \$unifonts = \"ind_ta_1_001\"; break;
\t  // Telegu
\t  CASE \"te\":  \$unifonts = \"ind_te_1_001\"; break;

\t  // THAI
\t  CASE \"th\":  \$unifonts = \"garuda,garudaB,garudaI,garudaBI,norasi,norasiB,norasiI,norasiBI\";  break;

\t  // VIETNAMESE
\t  CASE \"vi\":  
\t\t\$unifonts = \"dejavusanscondensed,dejavusanscondensedB,dejavusanscondensedI,dejavusanscondensedBI,dejavusans,dejavusansB,dejavusansI,dejavusansBI\"; break;

\t  // CJK Langauges
\t  CASE \"ja\":  
\t\tif (\$adobeCJK) {
\t\t\t\$unifonts = \"sjis,sjisB,sjisI,sjisBI\";
\t\t}
/* Uncomment these lines if CJK fonts available */
//\t\telse {
//\t\t\t\$unifonts = \"sun-exta,sun-extb,hannoma,hannomb\";
//\t\t}
\t\tbreak;

\t  CASE \"ko\":  
\t\tif (\$adobeCJK) {
\t\t\t\$unifonts = \"uhc,uhcB,uhcI,uhcBI\";
\t\t}
/* Uncomment these lines if CJK fonts available */
//\t\telse {
//\t\t\t\$unifonts = \"unbatang_0613\"; 
//\t\t}
\t\tbreak;

\t  CASE \"zh\":
\t\tif (\$country == \"HK\" || \$country == \"TW\") { 
\t\t\tif (\$adobeCJK) {
\t\t\t\t\$unifonts = \"big5,big5B,big5I,big5BI\"; 
\t\t\t}
/* Uncomment these lines if CJK fonts available */
//\t\t\telse {
//\t\t\t\t\$unifonts = \"sun-exta,sun-extb,hannoma,hannomb\";
//\t\t\t}
\t\t}
\t\telse if (\$country == \"CN\") { 
\t\t\tif (\$adobeCJK) {
\t\t\t\t\$unifonts = \"gb,gbB,gbI,gbBI\";  
\t\t\t}
/* Uncomment these lines if CJK fonts available */
//\t\t\telse {
//\t\t\t\t\$unifonts = \"sun-exta,sun-extb,hannoma,hannomb\";
//\t\t\t}
\t\t}
\t  \telse { 
\t\t\tif (\$adobeCJK) {
\t\t\t\t\$unifonts = \"gb,gbB,gbI,gbBI\"; 
\t\t\t}
/* Uncomment these lines if CJK fonts available */
//\t\t\telse {
//\t\t\t\t\$unifonts = \"sun-exta,sun-extb,hannoma,hannomb\";
//\t\t\t}
\t\t}
\t\tbreak;

\t}


\t\$unifonts_arr = array();
\tif (\$unifonts) {
\t\t\$unifonts_arr = preg_split('/\\s*,\\s*/',\$unifonts);
\t}
\treturn array(\$coreSuitable ,\$unifonts_arr);
}

?>";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/config_cp.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* */
/* */
/* function GetLangOpts($llcc, $adobeCJK) {*/
/* 	if (strlen($llcc) == 5) {*/
/* 		$lang = substr(strtolower($llcc),0,2);*/
/* 		$country = substr(strtoupper($llcc),3,2);*/
/* 	}*/
/* 	else { $lang = strtolower($llcc); $country = ''; }*/
/* 	$unifonts = "";*/
/* 	$coreSuitable = false;*/
/* */
/* 	switch($lang){*/
/* 	  CASE "en":*/
/* 	  CASE "ca":*/
/* 	  CASE "cy":*/
/* 	  CASE "da":*/
/* 	  CASE "de":*/
/* 	  CASE "es":*/
/* 	  CASE "eu":*/
/* 	  CASE "fr":*/
/* 	  CASE "ga":*/
/* 	  CASE "fi": */
/* 	  CASE "is":*/
/* 	  CASE "it":*/
/* 	  CASE "nl":*/
/* 	  CASE "no":*/
/* 	  CASE "pt":*/
/* 	  CASE "sv":*/
/* 		// Edit this value to define how mPDF behaves when using new mPDF('-x')*/
/* 		// If set to TRUE, mPDF will use Adobe core fonts only when it recognises the languages above*/
/* 		$coreSuitable = true;  break;*/
/* */
/* */
/* */
/* 	  // RTL Languages*/
/* 	  CASE "he":*/
/* 	  CASE "yi":*/
/* 		$unifonts = "dejavusans,dejavusansB,dejavusansI,dejavusansBI";  break;*/
/* */
/* 	  // Arabic*/
/* 	  CASE "ar":  */
/* 		$unifonts = "xbriyaz,xbriyazB,xbriyazI,xbriyazBI,xbzar,xbzarB,xbzarI,xbzarBI";  break;*/
/* 	  CASE "fa":  */
/* 		$unifonts = "xbriyaz,xbriyazB,xbriyazI,xbriyazBI,xbzar,xbzarB,xbzarI,xbzarBI";  break;*/
/* 	  CASE "ps": */
/* 		$unifonts = "xbriyaz,xbriyazB,xbriyazI,xbriyazBI,xbzar,xbzarB,xbzarI,xbzarBI"; break;*/
/* 	  CASE "ur":  */
/* 		$unifonts = "xbriyaz,xbriyazB,xbriyazI,xbriyazBI,xbzar,xbzarB,xbzarI,xbzarBI"; break;*/
/* */
/* 	  // Sindhi (can be Arabic or Devanagari)*/
/* 	  CASE "sd":*/
/* 		if ($country == "IN") { $unifonts = "ind_hi_1_001"; }*/
/* 	//	else if ($country == "PK") { $unifonts = ""; }*/
/* 	//	else { $unifonts = ""; }*/
/* 		break;*/
/* */
/* */
/* 	  // INDIC */
/* 	  // Assamese*/
/* 	  CASE "as":  $unifonts = "ind_bn_1_001"; break;*/
/* 	  // Bengali*/
/* 	  CASE "bn":  $unifonts = "ind_bn_1_001"; break;*/
/* 	  // Gujarati*/
/* 	  CASE "gu":  $unifonts = "ind_gu_1_001"; break;*/
/* 	  // Hindi (Devanagari)*/
/* 	  CASE "hi":  $unifonts = "ind_hi_1_001"; break;*/
/* 	  // Kannada*/
/* 	  CASE "kn":  $unifonts = "ind_kn_1_001"; break;*/
/* 	  // Kashmiri*/
/* 	  CASE "ks":  $unifonts = "ind_hi_1_001"; break;*/
/* 	  // Malayalam*/
/* 	  CASE "ml":  $unifonts = "ind_ml_1_001"; break;*/
/* 	  // Nepali (Devanagari)*/
/* 	  CASE "ne":  $unifonts = "ind_hi_1_001"; break;*/
/* 	  // Oriya*/
/* 	  CASE "or":  $unifonts = "ind_or_1_001"; break;*/
/* 	  // Punjabi (Gurmukhi)*/
/* 	  CASE "pa":  $unifonts = "ind_pa_1_001"; break;*/
/* 	  // Tamil*/
/* 	  CASE "ta":  $unifonts = "ind_ta_1_001"; break;*/
/* 	  // Telegu*/
/* 	  CASE "te":  $unifonts = "ind_te_1_001"; break;*/
/* */
/* 	  // THAI*/
/* 	  CASE "th":  $unifonts = "garuda,garudaB,garudaI,garudaBI,norasi,norasiB,norasiI,norasiBI";  break;*/
/* */
/* 	  // VIETNAMESE*/
/* 	  CASE "vi":  */
/* 		$unifonts = "dejavusanscondensed,dejavusanscondensedB,dejavusanscondensedI,dejavusanscondensedBI,dejavusans,dejavusansB,dejavusansI,dejavusansBI"; break;*/
/* */
/* 	  // CJK Langauges*/
/* 	  CASE "ja":  */
/* 		if ($adobeCJK) {*/
/* 			$unifonts = "sjis,sjisB,sjisI,sjisBI";*/
/* 		}*/
/* /* Uncomment these lines if CJK fonts available *//* */
/* //		else {*/
/* //			$unifonts = "sun-exta,sun-extb,hannoma,hannomb";*/
/* //		}*/
/* 		break;*/
/* */
/* 	  CASE "ko":  */
/* 		if ($adobeCJK) {*/
/* 			$unifonts = "uhc,uhcB,uhcI,uhcBI";*/
/* 		}*/
/* /* Uncomment these lines if CJK fonts available *//* */
/* //		else {*/
/* //			$unifonts = "unbatang_0613"; */
/* //		}*/
/* 		break;*/
/* */
/* 	  CASE "zh":*/
/* 		if ($country == "HK" || $country == "TW") { */
/* 			if ($adobeCJK) {*/
/* 				$unifonts = "big5,big5B,big5I,big5BI"; */
/* 			}*/
/* /* Uncomment these lines if CJK fonts available *//* */
/* //			else {*/
/* //				$unifonts = "sun-exta,sun-extb,hannoma,hannomb";*/
/* //			}*/
/* 		}*/
/* 		else if ($country == "CN") { */
/* 			if ($adobeCJK) {*/
/* 				$unifonts = "gb,gbB,gbI,gbBI";  */
/* 			}*/
/* /* Uncomment these lines if CJK fonts available *//* */
/* //			else {*/
/* //				$unifonts = "sun-exta,sun-extb,hannoma,hannomb";*/
/* //			}*/
/* 		}*/
/* 	  	else { */
/* 			if ($adobeCJK) {*/
/* 				$unifonts = "gb,gbB,gbI,gbBI"; */
/* 			}*/
/* /* Uncomment these lines if CJK fonts available *//* */
/* //			else {*/
/* //				$unifonts = "sun-exta,sun-extb,hannoma,hannomb";*/
/* //			}*/
/* 		}*/
/* 		break;*/
/* */
/* 	}*/
/* */
/* */
/* 	$unifonts_arr = array();*/
/* 	if ($unifonts) {*/
/* 		$unifonts_arr = preg_split('/\s*,\s*//* ',$unifonts);*/
/* 	}*/
/* 	return array($coreSuitable ,$unifonts_arr);*/
/* }*/
/* */
/* ?>*/
