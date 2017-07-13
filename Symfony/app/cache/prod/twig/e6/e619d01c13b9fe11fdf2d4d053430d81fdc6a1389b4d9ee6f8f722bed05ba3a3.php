<?php

/* support/include/mpdf/config_fonts.php */
class __TwigTemplate_d8cbe787bd0c9123f00f925991bb86665ede0c79d4ce7a446995d79afc9d0935 extends Twig_Template
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


// Optionally define a folder which contains TTF fonts
// mPDF will look here before looking in the usual _MPDF_TTFONTPATH
// Useful if you already have a folder for your fonts
// e.g. on Windows: define(\"_MPDF_SYSTEM_TTFONTS\", 'C:/Windows/Fonts/');
// Leave undefined if not required

// define(\"_MPDF_SYSTEM_TTFONTS\", '');


// Optionally set font(s) (names as defined below in \$this->fontdata) to use for missing characters
// when using useSubstitutions. Use a font with wide coverage - dejavusanscondensed is a good start
// only works using subsets (otherwise would add very large file)
// doesn't do Indic or arabic
// More than 1 font can be specified but each will add to the processing time of the script

\$this->backupSubsFont = array('dejavusanscondensed');


// Optionally set a font (name as defined below in \$this->fontdata) to use for CJK characters
// in Plane 2 Unicode (> U+20000) when using useSubstitutions. 
// Use a font like hannomb or sun-extb if available
// only works using subsets (otherwise would add very large file)
// Leave undefined or blank if not not required

// \$this->backupSIPFont = 'sun-extb';


/*
This array defines translations from font-family in CSS or HTML
to the internal font-family name used in mPDF. 
Can include as many as want, regardless of which fonts are installed.
By default mPDF will take a CSS/HTML font-family and remove spaces
and change to lowercase e.g. \"Arial Unicode MS\" will be recognised as
\"arialunicodems\"
You only need to define additional translations.
You can also use it to define specific substitutions e.g.
'frutiger55roman' => 'arial'
Generic substitutions (i.e. to a sans-serif or serif font) are set 
by including the font-family in \$this->sans_fonts below
To aid backwards compatability some are included:
*/
\$this->fonttrans = array(
\t'helvetica' => 'arial',
\t'times' => 'timesnewroman',
\t'courier' => 'couriernew',
\t'trebuchet' => 'trebuchetms',
\t'comic' => 'comicsansms',
\t'franklin' => 'franklingothicbook',
\t'albertus' => 'albertusmedium',
\t'arialuni' => 'arialunicodems',
\t'zn_hannom_a' => 'hannoma',
\t'ocr-b' => 'ocrb',
\t'ocr-b10bt' => 'ocrb',


);

/*
This array lists the file names of the TrueType .ttf or .otf font files
for each variant of the (internal mPDF) font-family name.
['R'] = Regular (Normal), others are Bold, Italic, and Bold-Italic
Each entry must contain an ['R'] entry, but others are optional.
Only the font (files) entered here will be available to use in mPDF.
Put preferred default first in order.
This will be used if a named font cannot be found in any of 
\$this->sans_fonts, \$this->serif_fonts or \$this->mono_fonts

['indic'] = true; for special mPDF fonts containing Indic characters
['sip-ext'] = 'hannomb'; name a related font file containing SIP characters

If a .ttc TrueType collection file is referenced, the number of the font
within the collection is required. Fonts in the collection are numbered 
starting at 1, as they appear in the .ttc file e.g.
\t\"cambria\" => array(
\t\t'R' => \"cambria.ttc\",
\t\t'B' => \"cambriab.ttf\",
\t\t'I' => \"cambriai.ttf\",
\t\t'BI' => \"cambriaz.ttf\",
\t\t'TTCfontID' => array(
\t\t\t'R' => 1,\t
\t\t\t),
\t\t),
\t\"cambriamath\" => array(
\t\t'R' => \"cambria.ttc\",
\t\t'TTCfontID' => array(
\t\t\t'R' => 2,\t
\t\t\t),
\t\t),
*/

\$this->fontdata = array(
\t\"dejavusanscondensed\" => array(
\t\t'R' => \"DejaVuSansCondensed.ttf\",
\t\t'B' => \"DejaVuSansCondensed-Bold.ttf\",
\t\t'I' => \"DejaVuSansCondensed-Oblique.ttf\",
\t\t'BI' => \"DejaVuSansCondensed-BoldOblique.ttf\",
\t\t),
\t\"dejavusans\" => array(
\t\t'R' => \"DejaVuSans.ttf\",
\t\t'B' => \"DejaVuSans-Bold.ttf\",
\t\t'I' => \"DejaVuSans-Oblique.ttf\",
\t\t'BI' => \"DejaVuSans-BoldOblique.ttf\",
\t\t),
\t\"dejavuserif\" => array(
\t\t'R' => \"DejaVuSerif.ttf\",
\t\t'B' => \"DejaVuSerif-Bold.ttf\",
\t\t'I' => \"DejaVuSerif-Italic.ttf\",
\t\t'BI' => \"DejaVuSerif-BoldItalic.ttf\",
\t\t),
\t\"dejavuserifcondensed\" => array(
\t\t'R' => \"DejaVuSerifCondensed.ttf\",
\t\t'B' => \"DejaVuSerifCondensed-Bold.ttf\",
\t\t'I' => \"DejaVuSerifCondensed-Italic.ttf\",
\t\t'BI' => \"DejaVuSerifCondensed-BoldItalic.ttf\",
\t\t),
\t\"dejavusansmono\" => array(
\t\t'R' => \"DejaVuSansMono.ttf\",
\t\t'B' => \"DejaVuSansMono-Bold.ttf\",
\t\t'I' => \"DejaVuSansMono-Oblique.ttf\",
\t\t'BI' => \"DejaVuSansMono-BoldOblique.ttf\",
\t\t),


/* OCR-B font for Barcodes */
\t\"ocrb\" => array(
\t\t'R' => \"ocrb10.ttf\",
\t\t),

/* Thai fonts
\t\"garuda\" => array(
\t\t'R' => \"Garuda.ttf\",
\t\t'B' => \"Garuda-Bold.ttf\",
\t\t'I' => \"Garuda-Oblique.ttf\",
\t\t'BI' => \"Garuda-BoldOblique.ttf\",
\t\t),
\t\"norasi\" => array(
\t\t'R' => \"Norasi.ttf\",
\t\t'B' => \"Norasi-Bold.ttf\",
\t\t'I' => \"Norasi-Oblique.ttf\",
\t\t'BI' => \"Norasi-BoldOblique.ttf\",
\t\t),


/* Indic fonts */
\t\"ind_bn_1_001\" => array(
\t\t'R' => \"ind_bn_1_001.ttf\",
\t\t'indic' => true,
\t\t),
\t\"ind_hi_1_001\" => array(
\t\t'R' => \"ind_hi_1_001.ttf\",
\t\t'indic' => true,
\t\t),
\t\"ind_ml_1_001\" => array(
\t\t'R' => \"ind_ml_1_001.ttf\",
\t\t'indic' => true,
\t\t),
\t\"ind_kn_1_001\" => array(
\t\t'R' => \"ind_kn_1_001.ttf\",
\t\t'indic' => true,
\t\t),
\t\"ind_gu_1_001\" => array(
\t\t'R' => \"ind_gu_1_001.ttf\",
\t\t'indic' => true,
\t\t),
\t\"ind_or_1_001\" => array(
\t\t'R' => \"ind_or_1_001.ttf\",
\t\t'indic' => true,
\t\t),
\t\"ind_ta_1_001\" => array(
\t\t'R' => \"ind_ta_1_001.ttf\",
\t\t'indic' => true,
\t\t),
\t\"ind_te_1_001\" => array(
\t\t'R' => \"ind_te_1_001.ttf\",
\t\t'indic' => true,
\t\t),
\t\"ind_pa_1_001\" => array(
\t\t'R' => \"ind_pa_1_001.ttf\",
\t\t'indic' => true,
\t\t),


/* XW Zar Arabic fonts */
\t\"xbriyaz\" => array(
\t\t'R' => \"XB Riyaz.ttf\",
\t\t'B' => \"XB RiyazBd.ttf\",
\t\t'I' => \"XB RiyazIt.ttf\",
\t\t'BI' => \"XB RiyazBdIt.ttf\",
\t\t'unAGlyphs' => true,
\t\t),
\t\"xbzar\" => array(
\t\t'R' => \"XB Zar.ttf\",
\t\t'B' => \"XB Zar Bd.ttf\",
\t\t'I' => \"XB Zar It.ttf\",
\t\t'BI' => \"XB Zar BdIt.ttf\",
\t\t'unAGlyphs' => true,
\t\t),




/* Examples of some CJK fonts */
/*
\t\"unbatang_0613\" => array(
\t\t'R' => \"UnBatang_0613.ttf\",
\t\t),
\t\"sun-exta\" => array(
\t\t'R' => \"Sun-ExtA.ttf\",
\t\t'sip-ext' => 'sun-extb',
\t\t),
\t\"sun-extb\" => array(
\t\t'R' => \"Sun-ExtB.ttf\",
\t\t),
\t\"hannoma\" => array(
\t\t'R' => \"HAN NOM A.ttf\",
\t\t'sip-ext' => 'hannomb',\t
\t\t),
\t\"hannomb\" => array(
\t\t'R' => \"HAN NOM B.ttf\",
\t\t),


\t'mingliu' => array (
\t\t'R' => 'mingliu.ttc',
\t\t'TTCfontID' => array (
\t\t\t'R' => 1,
\t\t),
\t\t'sip-ext' => 'mingliu-extb',
\t),
\t'pmingliu' => array (
\t\t'R' => 'mingliu.ttc',
\t\t'TTCfontID' => array (
\t\t\t'R' => 2,
\t\t),
\t\t'sip-ext' => 'pmingliu-extb',
\t),
\t'mingliu_hkscs' => array (
\t\t'R' => 'mingliu.ttc',
\t\t'TTCfontID' => array (
\t\t\t'R' => 3,
\t\t),
\t\t'sip-ext' => 'mingliu_hkscs-extb',
\t),
\t'mingliu-extb' => array (
\t\t'R' => 'mingliub.ttc',
\t\t'TTCfontID' => array (
\t\t\t'R' => 1,
\t\t),
\t),
\t'pmingliu-extb' => array (
\t\t'R' => 'mingliub.ttc',
\t\t'TTCfontID' => array (
\t\t\t'R' => 2,
\t\t),
\t),
\t'mingliu_hkscs-extb' => array (
\t\t'R' => 'mingliub.ttc',
\t\t'TTCfontID' => array (
\t\t\t'R' => 3,
\t\t),
\t),
*/

);


// Add fonts to this array if they contain characters in the SIP or SMP Unicode planes
// but you do not require them. This allows a more efficient form of subsetting to be used.
\$this->BMPonly = array(
\t\"dejavusanscondensed\",
\t\"dejavusans\",
\t\"dejavuserifcondensed\",
\t\"dejavuserif\",
\t\"dejavusansmono\",
\t);

// These next 3 arrays do two things:
// 1. If a font referred to in HTML/CSS is not available to mPDF, these arrays will determine whether
//    a serif/sans-serif or monospace font is substituted
// 2. The first font in each array will be the font which is substituted in circumstances as above
//     (Otherwise the order is irrelevant)
// Use the mPDF font-family names i.e. lowercase and no spaces (after any translations in \$fonttrans)
// Always include \"sans-serif\", \"serif\" and \"monospace\" etc.
\$this->sans_fonts = array('dejavusanscondensed','dejavusans','freesans','liberationsans','sans','sans-serif','cursive','fantasy', 
\t\t\t\t'arial','helvetica','verdana','geneva','lucida','arialnarrow','arialblack','arialunicodems',
\t\t\t\t'franklin','franklingothicbook','tahoma','garuda','calibri','trebuchet','lucidagrande','microsoftsansserif',
\t\t\t\t'trebuchetms','lucidasansunicode','franklingothicmedium','albertusmedium','xbriyaz','albasuper','quillscript'

);

\$this->serif_fonts = array('dejavuserifcondensed','dejavuserif','freeserif','liberationserif','serif',
\t\t\t\t'timesnewroman','times','centuryschoolbookl','palatinolinotype','centurygothic',
\t\t\t\t'bookmanoldstyle','bookantiqua','cyberbit','cambria',
\t\t\t\t'norasi','charis','palatino','constantia','georgia','albertus','xbzar','algerian','garamond',
);

\$this->mono_fonts = array('dejavusansmono','freemono','liberationmono','courier', 'mono','monospace','ocrb','ocr-b','lucidaconsole',
\t\t\t\t'couriernew','monotypecorsiva'
);

// Add fonts from language packs

if (list(\$phar_fonts, \$phar_subs) = Internationalization::getTtfFonts()) {
    \$this->fontdata += \$phar_fonts;
    foreach (\$phar_subs as \$simple) {
        if (!in_array(\$simple, \$this->backupSubsFont))
            \$this->backupSubsFont[] = \$simple;
    }
}
?>
";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/config_fonts.php";
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
        return new Twig_Source("", "support/include/mpdf/config_fonts.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\mpdf\\config_fonts.php");
    }
}
