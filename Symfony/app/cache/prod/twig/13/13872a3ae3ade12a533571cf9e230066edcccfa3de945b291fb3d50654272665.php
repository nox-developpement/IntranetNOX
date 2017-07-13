<?php

/* support/include/mpdf/classes/cssmgr.php */
class __TwigTemplate_bf8072495bad7667a40a517cfc5f14b3aed3baf5ad37681388b88e76565ee67c extends Twig_Template
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

class cssmgr {

var \$mpdf = null;

var \$tablecascadeCSS;
var \$listcascadeCSS;
var \$cascadeCSS;
var \$CSS;
var \$tbCSSlvl;
var \$listCSSlvl;


function cssmgr(&\$mpdf) {
\t\$this->mpdf = \$mpdf;
\t\$this->tablecascadeCSS = array();
\t\$this->listcascadeCSS = array();
\t\$this->CSS=array();
\t\$this->cascadeCSS = array();
\t\$this->tbCSSlvl = 0;
\t\$this->listCSSlvl = 0;
}


function ReadDefaultCSS(\$CSSstr) {
\t\$CSS = array();
\t\$CSSstr = preg_replace('|/\\*.*?\\*/|s',' ',\$CSSstr);
\t\$CSSstr = preg_replace('/[\\s\\n\\r\\t\\f]/s',' ',\$CSSstr);
\t\$CSSstr = preg_replace('/(<\\!\\-\\-|\\-\\->)/s',' ',\$CSSstr);
\tif (\$CSSstr ) {
\t\tpreg_match_all('/(.*?)\\{(.*?)\\}/',\$CSSstr,\$styles);
\t\tfor(\$i=0; \$i < count(\$styles[1]) ; \$i++)  {
\t\t\t\$stylestr= trim(\$styles[2][\$i]);
\t\t\t\$stylearr = explode(';',\$stylestr);
\t\t\tforeach(\$stylearr AS \$sta) {
\t\t\t\tif (trim(\$sta)) {
\t\t\t\t\t// Changed to allow style=\"background: url('http://www.bpm1.com/bg.jpg')\"
\t\t\t\t\tlist(\$property,\$value) = explode(':',\$sta,2);
\t\t\t\t\t\$property = trim(\$property);
\t\t\t\t\t\$value = preg_replace('/\\s*!important/i','',\$value);
\t\t\t\t\t\$value = trim(\$value);
\t\t\t\t\tif (\$property && (\$value || \$value==='0')) {
\t  \t\t\t\t\t\$classproperties[strtoupper(\$property)] = \$value;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t\$classproperties = \$this->fixCSS(\$classproperties);
\t\t\t\$tagstr = strtoupper(trim(\$styles[1][\$i]));
\t\t\t\$tagarr = explode(',',\$tagstr);
\t\t\tforeach(\$tagarr AS \$tg) {
\t\t\t\t\$tags = preg_split('/\\s+/',trim(\$tg));
\t\t\t\t\$level = count(\$tags);
\t\t\t\tif (\$level == 1) {\t\t// e.g. p or .class or #id or p.class or p#id
\t\t\t\t\t\$t = trim(\$tags[0]);
\t\t\t\t\tif (\$t) {
\t\t\t\t\t\t\$tag = '';
\t\t\t\t\t\tif (preg_match('/^('.\$this->mpdf->allowedCSStags.')\$/',\$t)) { \$tag= \$t; }
\t\t\t\t\t\tif (\$this->CSS[\$tag] && \$tag) { \$CSS[\$tag] = \$this->array_merge_recursive_unique(\$CSS[\$tag], \$classproperties); }
\t\t\t\t\t\telse if (\$tag) { \$CSS[\$tag] = \$classproperties; }
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
  \t\t\t\$properties = array();
  \t\t\t\$values = array();
  \t\t\t\$classproperties = array();
\t\t}

\t} // end of if
\treturn \$CSS;
}



function ReadCSS(\$html) {
\tpreg_match_all('/<style[^>]*media=[\"\\']([^\"\\'>]*)[\"\\'].*?<\\/style>/is',\$html,\$m);
\tfor(\$i=0; \$i<count(\$m[0]); \$i++) {
\t\tif (\$this->mpdf->CSSselectMedia && !preg_match('/('.trim(\$this->mpdf->CSSselectMedia).'|all)/i',\$m[1][\$i])) { 
\t\t\t\$html = preg_replace('/'.preg_quote(\$m[0][\$i],'/').'/','',\$html);
\t\t}
\t}
\tpreg_match_all('/<link[^>]*media=[\"\\']([^\"\\'>]*)[\"\\'].*?>/is',\$html,\$m);
\tfor(\$i=0; \$i<count(\$m[0]); \$i++) {
\t\tif (\$this->mpdf->CSSselectMedia && !preg_match('/('.trim(\$this->mpdf->CSSselectMedia).'|all)/i',\$m[1][\$i])) { 
\t\t\t\$html = preg_replace('/'.preg_quote(\$m[0][\$i],'/').'/','',\$html);
\t\t}
\t}

\t// mPDF 5.5.02
\t// Remove Comment tags <!-- ... --> inside CSS as <style> in HTML document
\t// Remove Comment tags /* ...  */ inside CSS as <style> in HTML document
\t// But first, we replace upper and mixed case closing style tag with lower
\t// case so we can use str_replace later.
\tpreg_replace('/<\\/style>/i', '</style>', \$html);
\tpreg_match_all('/<style.*?>(.*?)<\\/style>/si',\$html,\$m);
\tif (count(\$m[1])) { 
\t\tfor(\$i=0;\$i<count(\$m[1]);\$i++) {
\t\t\t// Remove comment tags 
\t\t\t\$sub = preg_replace('/(<\\!\\-\\-|\\-\\->)/s',' ',\$m[1][\$i]);
\t\t\t\$sub = '>'.preg_replace('|/\\*.*?\\*/|s',' ',\$sub).'</style>';
\t\t\t\$html = str_replace('>'.\$m[1][\$i].'</style>', \$sub, \$html);
\t\t}
\t}


\t\$html = preg_replace('/<!--mpdf/i','',\$html);
\t\$html = preg_replace('/mpdf-->/i','',\$html);
\t\$html = preg_replace('/<\\!\\-\\-.*?\\-\\->/s',' ',\$html);

\t\$match = 0; // no match for instance
\t\$regexp = ''; // This helps debugging: showing what is the REAL string being processed
\t\$CSSext = array(); 

\t//CSS inside external files
\t\$regexp = '/<link[^>]*rel=[\"\\']stylesheet[\"\\'][^>]*href=[\"\\']([^>\"\\']*)[\"\\'].*?>/si';
\t\$x = preg_match_all(\$regexp,\$html,\$cxt);
\tif (\$x) { 
\t\t\$match += \$x; 
\t\t\$CSSext = \$cxt[1];
\t}

\t\$regexp = '/<link[^>]*href=[\"\\']([^>\"\\']*)[\"\\'][^>]*?rel=[\"\\']stylesheet[\"\\'].*?>/si';
\t\$x = preg_match_all(\$regexp,\$html,\$cxt);
\tif (\$x) { 
\t\t\$match += \$x; 
\t\t\$CSSext = array_merge(\$CSSext,\$cxt[1]);
\t}

\t// look for @import stylesheets
\t//\$regexp = '/@import url\\([\\'\\\"]{0,1}([^\\)]*?\\.css)[\\'\\\"]{0,1}\\)/si';
\t\$regexp = '/@import url\\([\\'\\\"]{0,1}([^\\)]*?\\.css(\\?\\S+)?)[\\'\\\"]{0,1}\\)/si';
\t\$x = preg_match_all(\$regexp,\$html,\$cxt);
\tif (\$x) { 
\t\t\$match += \$x; 
\t\t\$CSSext = array_merge(\$CSSext,\$cxt[1]);
\t}

\t// look for @import without the url()
\t//\$regexp = '/@import [\\'\\\"]{0,1}([^;]*?\\.css)[\\'\\\"]{0,1}/si';
\t\$regexp = '/@import [\\'\\\"]{0,1}([^;]*?\\.css(\\?\\S+)?)[\\'\\\"]{0,1}/si';
\t\$x = preg_match_all(\$regexp,\$html,\$cxt);
\tif (\$x) { 
\t\t\$match += \$x; 
\t\t\$CSSext = array_merge(\$CSSext,\$cxt[1]);
\t}

\t\$ind = 0;
\t\$CSSstr = '';

\tif (!is_array(\$this->cascadeCSS)) \$this->cascadeCSS = array();

\twhile(\$match){
\t\t\$path = \$CSSext[\$ind];
\t\t\$this->mpdf->GetFullPath(\$path); 
\t\t\$CSSextblock = \$this->mpdf->_get_file(\$path);
\t\tif (\$CSSextblock) {
\t\t\t// look for embedded @import stylesheets in other stylesheets
\t\t\t// and fix url paths (including background-images) relative to stylesheet
\t\t\t//\$regexpem = '/@import url\\([\\'\\\"]{0,1}(.*?\\.css)[\\'\\\"]{0,1}\\)/si';
\t\t\t\$regexpem = '/@import url\\([\\'\\\"]{0,1}(.*?\\.css(\\?\\S+)?)[\\'\\\"]{0,1}\\)/si';
\t\t\t\$xem = preg_match_all(\$regexpem,\$CSSextblock,\$cxtem);
\t\t\t\$cssBasePath = preg_replace('/\\/[^\\/]*\$/','',\$path) . '/';
\t\t\tif (\$xem) { 
\t\t\t\tforeach(\$cxtem[1] AS \$cxtembedded) {
\t\t\t\t\t// path is relative to original stlyesheet!!
\t\t\t\t\t\$this->mpdf->GetFullPath(\$cxtembedded, \$cssBasePath );
\t\t\t\t\t\$match++; 
\t\t\t\t\t\$CSSext[] = \$cxtembedded;
\t\t\t\t}
\t\t\t}
\t\t\t\$regexpem = '/(background[^;]*url\\s*\\(\\s*[\\'\\\"]{0,1})([^\\)\\'\\\"]*)([\\'\\\"]{0,1}\\s*\\))/si';
\t\t\t\$xem = preg_match_all(\$regexpem,\$CSSextblock,\$cxtem);
\t\t\tif (\$xem) { 
\t\t\t\tfor (\$i=0;\$i<count(\$cxtem[0]);\$i++) {
\t\t\t\t\t// path is relative to original stlyesheet!!
\t\t\t\t\t\$embedded = \$cxtem[2][\$i];
\t\t\t\t\tif (!preg_match('/^data:image/i', \$embedded)) {\t// mPDF 5.5.13
\t\t\t\t\t\t\$this->mpdf->GetFullPath(\$embedded, \$cssBasePath );
\t\t\t\t\t\t\$CSSextblock = preg_replace('/'.preg_quote(\$cxtem[0][\$i],'/').'/', (\$cxtem[1][\$i].\$embedded.\$cxtem[3][\$i]), \$CSSextblock);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t\$CSSstr .= ' '.\$CSSextblock;
\t\t}
\t\t\$match--;
\t\t\$ind++;
\t} //end of match

\t\$match = 0; // reset value, if needed
\t// CSS as <style> in HTML document
\t\$regexp = '/<style.*?>(.*?)<\\/style>/si'; 
\t\$match = preg_match_all(\$regexp,\$html,\$CSSblock);
\tif (\$match) {
\t\t\$tmpCSSstr = implode(' ',\$CSSblock[1]);
\t\t\$regexpem = '/(background[^;]*url\\s*\\(\\s*[\\'\\\"]{0,1})([^\\)\\'\\\"]*)([\\'\\\"]{0,1}\\s*\\))/si';
\t\t\$xem = preg_match_all(\$regexpem,\$tmpCSSstr ,\$cxtem);
\t\tif (\$xem) { 
\t\t   for (\$i=0;\$i<count(\$cxtem[0]);\$i++) {
\t\t\t\$embedded = \$cxtem[2][\$i];
\t\t\tif (!preg_match('/^data:image/i', \$embedded)) {\t// mPDF 5.5.13
\t\t\t\t\$this->mpdf->GetFullPath(\$embedded);
\t\t\t\t\$tmpCSSstr = preg_replace('/'.preg_quote(\$cxtem[0][\$i],'/').'/', (\$cxtem[1][\$i].\$embedded.\$cxtem[3][\$i]), \$tmpCSSstr );
\t\t\t}
\t\t   }
\t\t}
\t\t\$CSSstr .= ' '.\$tmpCSSstr;
\t}
\t// Remove comments
\t\$CSSstr = preg_replace('|/\\*.*?\\*/|s',' ',\$CSSstr);
\t\$CSSstr = preg_replace('/[\\s\\n\\r\\t\\f]/s',' ',\$CSSstr);

\tif (preg_match('/@media/',\$CSSstr)) { 
\t\tpreg_match_all('/@media(.*?)\\{(([^\\{\\}]*\\{[^\\{\\}]*\\})+)\\s*\\}/is',\$CSSstr,\$m);
\t\tfor(\$i=0; \$i<count(\$m[0]); \$i++) {
\t\t\tif (\$this->mpdf->CSSselectMedia && !preg_match('/('.trim(\$this->mpdf->CSSselectMedia).'|all)/i',\$m[1][\$i])) { 
\t\t\t\t\$CSSstr = preg_replace('/'.preg_quote(\$m[0][\$i],'/').'/','',\$CSSstr);
\t\t\t}
\t\t\telse {
\t\t\t\t\$CSSstr = preg_replace('/'.preg_quote(\$m[0][\$i],'/').'/',' '.\$m[2][\$i].' ',\$CSSstr);
\t\t\t}
\t\t}
\t}

\t// Replace any background: url(data:image... with temporary image file reference
\tpreg_match_all(\"/(url\\(data:image\\/(jpeg|gif|png);base64,(.*?)\\))/si\", \$CSSstr, \$idata);\t// mPDF 5.7.2
\tif (count(\$idata[0])) { 
\t\tfor(\$i=0;\$i<count(\$idata[0]);\$i++) {
\t\t\t\$file = _MPDF_TEMP_PATH.'_tempCSSidata'.RAND(1,10000).'_'.\$i.'.'.\$idata[2][\$i];
\t\t\t//Save to local file
\t\t\tfile_put_contents(\$file, base64_decode(\$idata[3][\$i]));
\t\t\t// \$this->mpdf->GetFullPath(\$file);\t// ? is this needed - NO  mPDF 5.6.03
\t\t\t\$CSSstr = str_replace(\$idata[0][\$i], 'url(\"'.\$file.'\")', \$CSSstr); \t// mPDF 5.5.17
\t\t}
\t}

\t\$CSSstr = preg_replace('/(<\\!\\-\\-|\\-\\->)/s',' ',\$CSSstr);
\tif (\$CSSstr ) {
\t\tpreg_match_all('/(.*?)\\{(.*?)\\}/',\$CSSstr,\$styles);
\t\tfor(\$i=0; \$i < count(\$styles[1]) ; \$i++)  {
\t\t\t// SET array e.g. \$classproperties['COLOR'] = '#ffffff';
\t \t\t\$stylestr= trim(\$styles[2][\$i]);
\t\t\t\$stylearr = explode(';',\$stylestr);
\t\t\tforeach(\$stylearr AS \$sta) {
\t\t\t\tif (trim(\$sta)) { 
\t\t\t\t\t// Changed to allow style=\"background: url('http://www.bpm1.com/bg.jpg')\"
\t\t\t\t\tlist(\$property,\$value) = explode(':',\$sta,2);
\t\t\t\t\t\$property = trim(\$property);
\t\t\t\t\t\$value = preg_replace('/\\s*!important/i','',\$value);
\t\t\t\t\t\$value = trim(\$value);
\t\t\t\t\tif (\$property && (\$value || \$value==='0')) {
\t\t\t\t\t// Ignores -webkit-gradient so doesn't override -moz-
\t\t\t\t\t\tif ((strtoupper(\$property)=='BACKGROUND-IMAGE' || strtoupper(\$property)=='BACKGROUND') && preg_match('/-webkit-gradient/i',\$value)) { 
\t\t\t\t\t\t\tcontinue; 
\t\t\t\t\t\t}
\t  \t\t\t\t\t\$classproperties[strtoupper(\$property)] = \$value;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\t\$classproperties = \$this->fixCSS(\$classproperties);
\t\t\t\$tagstr = strtoupper(trim(\$styles[1][\$i]));
\t\t\t\$tagarr = explode(',',\$tagstr);
\t\t\t\$pageselectors = false;\t// used to turn on \$this->mpdf->mirrorMargins
\t\t\tforeach(\$tagarr AS \$tg) {
\t\t\t\t\$tags = preg_split('/\\s+/',trim(\$tg));
\t\t\t\t\$level = count(\$tags);
\t\t\t\t\$t = '';
\t\t\t\t\$t2 = '';
\t\t\t\t\$t3 = '';
\t\t\t\tif (trim(\$tags[0])=='@PAGE') {
\t\t\t\t\tif (isset(\$tags[0])) { \$t = trim(\$tags[0]); }
\t\t\t\t\tif (isset(\$tags[1])) { \$t2 = trim(\$tags[1]); }
\t\t\t\t\tif (isset(\$tags[2])) { \$t3 = trim(\$tags[2]); }
\t\t\t\t\t\$tag = '';
\t\t\t\t\tif (\$level==1) { \$tag = \$t; }
\t\t\t\t\telse if (\$level==2 && preg_match('/^[:](.*)\$/',\$t2,\$m)) { 
\t\t\t\t\t\t\$tag = \$t.'>>PSEUDO>>'.\$m[1]; 
\t\t\t\t\t\tif (\$m[1]=='LEFT' || \$m[1]=='RIGHT') { \$pageselectors = true; }\t// used to turn on \$this->mpdf->mirrorMargins 
\t\t\t\t\t}
\t\t\t\t\telse if (\$level==2) { \$tag = \$t.'>>NAMED>>'.\$t2; }
\t\t\t\t\telse if (\$level==3 && preg_match('/^[:](.*)\$/',\$t3,\$m)) { 
\t\t\t\t\t\t\$tag = \$t.'>>NAMED>>'.\$t2.'>>PSEUDO>>'.\$m[1]; 
\t\t\t\t\t\tif (\$m[1]=='LEFT' || \$m[1]=='RIGHT') { \$pageselectors = true; }\t// used to turn on \$this->mpdf->mirrorMargins
\t\t\t\t\t}
\t\t\t\t\tif (isset(\$this->CSS[\$tag]) && \$tag) { \$this->CSS[\$tag] = \$this->array_merge_recursive_unique(\$this->CSS[\$tag], \$classproperties); }
\t\t\t\t\telse if (\$tag) { \$this->CSS[\$tag] = \$classproperties; }
\t\t\t\t}

\t\t\t\telse if (\$level == 1) {\t\t// e.g. p or .class or #id or p.class or p#id
\t\t\t\tif (isset(\$tags[0])) { \$t = trim(\$tags[0]); }
\t\t\t\t\tif (\$t) {
\t\t\t\t\t\t\$tag = '';
\t\t\t\t\t\tif (preg_match('/^[.](.*)\$/',\$t,\$m)) { \$tag = 'CLASS>>'.\$m[1]; }
\t\t\t\t\t\telse if (preg_match('/^[#](.*)\$/',\$t,\$m)) { \$tag = 'ID>>'.\$m[1]; }
\t\t\t\t\t\telse if (preg_match('/^('.\$this->mpdf->allowedCSStags.')[.](.*)\$/',\$t,\$m)) { \$tag = \$m[1].'>>CLASS>>'.\$m[2]; }
\t\t\t\t\t\telse if (preg_match('/^('.\$this->mpdf->allowedCSStags.')\\s*:NTH-CHILD\\((.*)\\)\$/',\$t,\$m)) { \$tag = \$m[1].'>>SELECTORNTHCHILD>>'.\$m[2]; }
\t\t\t\t\t\telse if (preg_match('/^('.\$this->mpdf->allowedCSStags.')[#](.*)\$/',\$t,\$m)) { \$tag = \$m[1].'>>ID>>'.\$m[2]; }
\t\t\t\t\t\telse if (preg_match('/^('.\$this->mpdf->allowedCSStags.')\$/',\$t)) { \$tag= \$t; }
\t\t\t\t\t\tif (isset(\$this->CSS[\$tag]) && \$tag) { \$this->CSS[\$tag] = \$this->array_merge_recursive_unique(\$this->CSS[\$tag], \$classproperties); }
\t\t\t\t\t\telse if (\$tag) { \$this->CSS[\$tag] = \$classproperties; }
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\telse {
\t\t\t\t\t\$tmp = array();
\t\t\t\t\tfor(\$n=0;\$n<\$level;\$n++) {
\t\t\t\t\t\tif (isset(\$tags[\$n])) { \$t = trim(\$tags[\$n]); }
\t\t\t\t\t\telse { \$t = ''; }
\t\t\t\t\t\tif (\$t) {
\t\t\t\t\t\t\t\$tag = '';
\t\t\t\t\t\t\tif (preg_match('/^[.](.*)\$/',\$t,\$m)) { \$tag = 'CLASS>>'.\$m[1]; }
\t\t\t\t\t\t\telse if (preg_match('/^[#](.*)\$/',\$t,\$m)) { \$tag = 'ID>>'.\$m[1]; }
\t\t\t\t\t\t\telse if (preg_match('/^('.\$this->mpdf->allowedCSStags.')[.](.*)\$/',\$t,\$m)) { \$tag = \$m[1].'>>CLASS>>'.\$m[2]; }
\t\t\t\t\t\t\telse if (preg_match('/^('.\$this->mpdf->allowedCSStags.')\\s*:NTH-CHILD\\((.*)\\)\$/',\$t,\$m)) { \$tag = \$m[1].'>>SELECTORNTHCHILD>>'.\$m[2]; }
\t\t\t\t\t\t\telse if (preg_match('/^('.\$this->mpdf->allowedCSStags.')[#](.*)\$/',\$t,\$m)) { \$tag = \$m[1].'>>ID>>'.\$m[2]; }
\t\t\t\t\t\t\telse if (preg_match('/^('.\$this->mpdf->allowedCSStags.')\$/',\$t)) { \$tag= \$t; }

\t\t\t\t\t\t\tif (\$tag) \$tmp[] = \$tag;
\t\t\t\t\t\t\telse { break; }
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t   
\t\t\t\t\tif (\$tag) {
\t\t\t\t\t\t\$x = &\$this->cascadeCSS; 
\t\t\t\t\t\tforeach(\$tmp AS \$tp) { \$x = &\$x[\$tp]; }
\t\t\t\t\t\t\$x = \$this->array_merge_recursive_unique(\$x, \$classproperties); 
\t\t\t\t\t\t\$x['depth'] = \$level;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tif (\$pageselectors) { \$this->mpdf->mirrorMargins = true; }
  \t\t\t\$properties = array();
  \t\t\t\$values = array();
  \t\t\t\$classproperties = array();
\t\t}
\t} // end of if
\t//Remove CSS (tags and content), if any
\t\$regexp = '/<style.*?>(.*?)<\\/style>/si'; // it can be <style> or <style type=\"txt/css\"> 
\t\$html = preg_replace(\$regexp,'',\$html);
//print_r(\$this->CSS); exit;
//print_r(\$this->cascadeCSS); exit;
\treturn \$html;
}



function readInlineCSS(\$html) {
\t//Fix incomplete CSS code
\t\$size = strlen(\$html)-1;
\tif (substr(\$html,\$size,1) != ';') \$html .= ';';
\t//Make CSS[Name-of-the-class] = array(key => value)
\t\$regexp = '|\\\\s*?(\\\\S+?):(.+?);|i';
\tpreg_match_all( \$regexp, \$html, \$styleinfo);
\t\$properties = \$styleinfo[1];
\t\$values = \$styleinfo[2];
\t//Array-properties and Array-values must have the SAME SIZE!
\t\$classproperties = array();
\tfor(\$i = 0; \$i < count(\$properties) ; \$i++) {
\t\t// Ignores -webkit-gradient so doesn't override -moz-
\t\tif ((strtoupper(\$properties[\$i])=='BACKGROUND-IMAGE' || strtoupper(\$properties[\$i])=='BACKGROUND') && preg_match('/-webkit-gradient/i',\$values[\$i])) { 
\t\t\tcontinue; 
\t\t}
\t\t\$classproperties[strtoupper(\$properties[\$i])] = trim(\$values[\$i]);
\t}
\treturn \$this->fixCSS(\$classproperties);
}



function _fix_borderStr(\$bd) {
\tpreg_match_all(\"/\\((.*?)\\)/\", \$bd, \$m);
\tif (count(\$m[1])) { 
\t\tfor(\$i=0;\$i<count(\$m[1]);\$i++) {
\t\t\t\$sub = preg_replace(\"/ /\", \"\", \$m[1][\$i]);
\t\t\t\$bd = preg_replace('/'.preg_quote(\$m[1][\$i], '/').'/si', \$sub, \$bd); 
\t\t}
\t}

\t\$prop = preg_split('/\\s+/',trim(\$bd));
\t\$w = 'medium';
\t\$c = '#000000';
\t\$s = 'none';

\tif ( count(\$prop) == 1 ) { 
\t\t// solid
\t\tif (in_array(\$prop[0],\$this->mpdf->borderstyles) || \$prop[0] == 'none' || \$prop[0] == 'hidden' ) { \$s = \$prop[0]; }
\t\t// #000000
\t\telse if (is_array(\$this->mpdf->ConvertColor(\$prop[0]))) { \$c = \$prop[0]; }
\t\t// 1px 
\t\telse { \$w = \$prop[0]; }
\t}
\telse if (count(\$prop) == 2 ) { 
\t\t// 1px solid 
\t\tif (in_array(\$prop[1],\$this->mpdf->borderstyles) || \$prop[1] == 'none' || \$prop[1] == 'hidden' ) { \$w = \$prop[0]; \$s = \$prop[1]; }
\t\t// solid #000000 
\t\telse if (in_array(\$prop[0],\$this->mpdf->borderstyles) || \$prop[0] == 'none' || \$prop[0] == 'hidden' ) { \$s = \$prop[0]; \$c = \$prop[1]; }
\t\t// 1px #000000 
\t\telse { \$w = \$prop[0]; \$c = \$prop[1]; }
\t}
\telse if ( count(\$prop) == 3 ) {
\t\t// Change #000000 1px solid to 1px solid #000000 (proper)
\t\tif (substr(\$prop[0],0,1) == '#') { \$c = \$prop[0]; \$w = \$prop[1]; \$s = \$prop[2]; }
\t\t// Change solid #000000 1px to 1px solid #000000 (proper)
\t\telse if (substr(\$prop[0],1,1) == '#') { \$s = \$prop[0]; \$c = \$prop[1]; \$w = \$prop[2]; }
\t\t// Change solid 1px #000000 to 1px solid #000000 (proper)
\t\telse if (in_array(\$prop[0],\$this->mpdf->borderstyles) || \$prop[0] == 'none' || \$prop[0] == 'hidden' ) { 
\t\t\t\$s = \$prop[0]; \$w = \$prop[1]; \$c = \$prop[2]; 
\t\t}
\t\telse { \$w = \$prop[0]; \$s = \$prop[1]; \$c = \$prop[2]; }
\t}
\telse { return ''; } 
\t\$s = strtolower(\$s);
\treturn \$w.' '.\$s.' '.\$c;
}



function fixCSS(\$prop) {
\tif (!is_array(\$prop) || (count(\$prop)==0)) return array(); 
\t\$newprop = array(); 
\tforeach(\$prop AS \$k => \$v) {
\t\tif (\$k != 'BACKGROUND-IMAGE' && \$k != 'BACKGROUND' && \$k != 'ODD-HEADER-NAME' && \$k != 'EVEN-HEADER-NAME' && \$k != 'ODD-FOOTER-NAME' && \$k != 'EVEN-FOOTER-NAME' && \$k != 'HEADER' && \$k != 'FOOTER') {
\t\t\t\$v = strtolower(\$v);
\t\t}

\t\tif (\$k == 'FONT') {
\t\t\t\$s = trim(\$v);
\t\t\tpreg_match_all('/\\\"(.*?)\\\"/',\$s,\$ff);
\t\t\tif (count(\$ff[1])) {
\t\t\t\tforeach(\$ff[1] AS \$ffp) { 
\t\t\t\t\t\$w = preg_split('/\\s+/',\$ffp);
\t\t\t\t\t\$s = preg_replace('/\\\"'.\$ffp.'\\\"/',\$w[0],\$s); 
\t\t\t\t}
\t\t\t}
\t\t\tpreg_match_all('/\\'(.*?)\\'/',\$s,\$ff);
\t\t\tif (count(\$ff[1])) {
\t\t\t\tforeach(\$ff[1] AS \$ffp) { 
\t\t\t\t\t\$w = preg_split('/\\s+/',\$ffp);
\t\t\t\t\t\$s = preg_replace('/\\''.\$ffp.'\\'/',\$w[0],\$s); 
\t\t\t\t}
\t\t\t}
\t\t\t\$s = preg_replace('/\\s*,\\s*/',',',\$s); 
\t\t\t\$bits = preg_split('/\\s+/',\$s);
\t\t\tif (count(\$bits)>1) {
\t\t\t\t\$k = 'FONT-FAMILY'; \$v = \$bits[(count(\$bits)-1)];
\t\t\t\t\$fs = \$bits[(count(\$bits)-2)];
\t\t\t\tif (preg_match('/(.*?)\\/(.*)/',\$fs, \$fsp)) { 
\t\t\t\t\t\$newprop['FONT-SIZE'] = \$fsp[1];
\t\t\t\t\t\$newprop['LINE-HEIGHT'] = \$fsp[2];
\t\t\t\t}
\t\t\t\telse { \$newprop['FONT-SIZE'] = \$fs; } 
\t\t\t\tif (preg_match('/(italic|oblique)/i',\$s)) { \$newprop['FONT-STYLE'] = 'italic'; }
\t\t\t\telse { \$newprop['FONT-STYLE'] = 'normal'; }
\t\t\t\tif (preg_match('/bold/i',\$s)) { \$newprop['FONT-WEIGHT'] = 'bold'; }
\t\t\t\telse { \$newprop['FONT-WEIGHT'] = 'normal'; }
\t\t\t\tif (preg_match('/small-caps/i',\$s)) { \$newprop['TEXT-TRANSFORM'] = 'uppercase'; }
\t\t\t}
\t\t}
\t\tif (\$k == 'FONT-FAMILY') {
\t\t\t\$aux_fontlist = explode(\",\",\$v);
\t\t\t\$found = 0;
\t\t\tforeach(\$aux_fontlist AS \$f) {
\t\t\t\t\$fonttype = trim(\$f);
\t\t\t\t\$fonttype = preg_replace('/[\"\\']*(.*?)[\"\\']*/','\\\\1',\$fonttype);
\t\t\t\t\$fonttype = preg_replace('/ /','',\$fonttype);
\t\t\t\t\$v = strtolower(trim(\$fonttype));
\t\t\t\tif (isset(\$this->mpdf->fonttrans[\$v]) && \$this->mpdf->fonttrans[\$v]) { \$v = \$this->mpdf->fonttrans[\$v]; }
\t\t\t\tif ((!\$this->mpdf->onlyCoreFonts && in_array(\$v,\$this->mpdf->available_unifonts)) || 
\t\t\t\t\tin_array(\$v,array('ccourier','ctimes','chelvetica')) ||
\t\t\t\t\t(\$this->mpdf->onlyCoreFonts && in_array(\$v,array('courier','times','helvetica','arial'))) || 
\t\t\t\t\tin_array(\$v, array('sjis','uhc','big5','gb'))) { 
\t\t\t\t\t\$newprop[\$k] = \$v; 
\t\t\t\t\t\$found = 1;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\tif (!\$found) {
\t\t\t   foreach(\$aux_fontlist AS \$f) {
\t\t\t\t\$fonttype = trim(\$f);
\t\t\t\t\$fonttype = preg_replace('/[\"\\']*(.*?)[\"\\']*/','\\\\1',\$fonttype);
\t\t\t\t\$fonttype = preg_replace('/ /','',\$fonttype);
\t\t\t\t\$v = strtolower(trim(\$fonttype));
\t\t\t\tif (isset(\$this->mpdf->fonttrans[\$v]) && \$this->mpdf->fonttrans[\$v]) { \$v = \$this->mpdf->fonttrans[\$v]; }
\t\t\t\tif (in_array(\$v,\$this->mpdf->sans_fonts) || in_array(\$v,\$this->mpdf->serif_fonts) || in_array(\$v,\$this->mpdf->mono_fonts) ) { 
\t\t\t\t\t\$newprop[\$k] = \$v;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t   }
\t\t\t}
\t\t}
\t\telse if (\$k == 'MARGIN') {
\t\t\t\$tmp =  \$this->expand24(\$v);
\t\t\t\$newprop['MARGIN-TOP'] = \$tmp['T'];
\t\t\t\$newprop['MARGIN-RIGHT'] = \$tmp['R'];
\t\t\t\$newprop['MARGIN-BOTTOM'] = \$tmp['B'];
\t\t\t\$newprop['MARGIN-LEFT'] = \$tmp['L'];
\t\t}
/*-- BORDER-RADIUS --*/
\t\telse if (\$k == 'BORDER-RADIUS' || \$k == 'BORDER-TOP-LEFT-RADIUS' || \$k == 'BORDER-TOP-RIGHT-RADIUS' || \$k == 'BORDER-BOTTOM-LEFT-RADIUS' || \$k == 'BORDER-BOTTOM-RIGHT-RADIUS') {
\t\t\t\$tmp =  \$this->border_radius_expand(\$v,\$k);
\t\t\tif (isset(\$tmp['TL-H'])) \$newprop['BORDER-TOP-LEFT-RADIUS-H'] = \$tmp['TL-H'];
\t\t\tif (isset(\$tmp['TL-V'])) \$newprop['BORDER-TOP-LEFT-RADIUS-V'] = \$tmp['TL-V'];
\t\t\tif (isset(\$tmp['TR-H'])) \$newprop['BORDER-TOP-RIGHT-RADIUS-H'] = \$tmp['TR-H'];
\t\t\tif (isset(\$tmp['TR-V'])) \$newprop['BORDER-TOP-RIGHT-RADIUS-V'] = \$tmp['TR-V'];
\t\t\tif (isset(\$tmp['BL-H'])) \$newprop['BORDER-BOTTOM-LEFT-RADIUS-H'] = \$tmp['BL-H'];
\t\t\tif (isset(\$tmp['BL-V'])) \$newprop['BORDER-BOTTOM-LEFT-RADIUS-V'] = \$tmp['BL-V'];
\t\t\tif (isset(\$tmp['BR-H'])) \$newprop['BORDER-BOTTOM-RIGHT-RADIUS-H'] = \$tmp['BR-H'];
\t\t\tif (isset(\$tmp['BR-V'])) \$newprop['BORDER-BOTTOM-RIGHT-RADIUS-V'] = \$tmp['BR-V'];
\t\t}
/*-- END BORDER-RADIUS --*/
\t\telse if (\$k == 'PADDING') {
\t\t\t\$tmp =  \$this->expand24(\$v);
\t\t\t\$newprop['PADDING-TOP'] = \$tmp['T'];
\t\t\t\$newprop['PADDING-RIGHT'] = \$tmp['R'];
\t\t\t\$newprop['PADDING-BOTTOM'] = \$tmp['B'];
\t\t\t\$newprop['PADDING-LEFT'] = \$tmp['L'];
\t\t}
\t\telse if (\$k == 'BORDER') {
\t\t\tif (\$v == '1') { \$v = '1px solid #000000'; }
\t\t\telse { \$v = \$this->_fix_borderStr(\$v); }
\t\t\t\$newprop['BORDER-TOP'] = \$v;
\t\t\t\$newprop['BORDER-RIGHT'] = \$v;
\t\t\t\$newprop['BORDER-BOTTOM'] = \$v;
\t\t\t\$newprop['BORDER-LEFT'] = \$v;
\t\t}
\t\telse if (\$k == 'BORDER-TOP') {
\t\t\t\$newprop['BORDER-TOP'] = \$this->_fix_borderStr(\$v);
\t\t}
\t\telse if (\$k == 'BORDER-RIGHT') {
\t\t\t\$newprop['BORDER-RIGHT'] = \$this->_fix_borderStr(\$v);
\t\t}
\t\telse if (\$k == 'BORDER-BOTTOM') {
\t\t\t\$newprop['BORDER-BOTTOM'] = \$this->_fix_borderStr(\$v);
\t\t}
\t\telse if (\$k == 'BORDER-LEFT') {
\t\t\t\$newprop['BORDER-LEFT'] = \$this->_fix_borderStr(\$v);
\t\t}
\t\telse if (\$k == 'BORDER-STYLE') {
\t\t\t\$e = \$this->expand24(\$v);
\t\t\t\$newprop['BORDER-TOP-STYLE'] = \$e['T'];
\t\t\t\$newprop['BORDER-RIGHT-STYLE'] = \$e['R'];
\t\t\t\$newprop['BORDER-BOTTOM-STYLE'] = \$e['B'];
\t\t\t\$newprop['BORDER-LEFT-STYLE'] = \$e['L'];
\t\t}
\t\telse if (\$k == 'BORDER-WIDTH') {
\t\t\t\$e = \$this->expand24(\$v);
\t\t\t\$newprop['BORDER-TOP-WIDTH'] = \$e['T'];
\t\t\t\$newprop['BORDER-RIGHT-WIDTH'] = \$e['R'];
\t\t\t\$newprop['BORDER-BOTTOM-WIDTH'] = \$e['B'];
\t\t\t\$newprop['BORDER-LEFT-WIDTH'] = \$e['L'];
\t\t}
\t\telse if (\$k == 'BORDER-COLOR') {
\t\t\t\$e = \$this->expand24(\$v);
\t\t\t\$newprop['BORDER-TOP-COLOR'] = \$e['T'];
\t\t\t\$newprop['BORDER-RIGHT-COLOR'] = \$e['R'];
\t\t\t\$newprop['BORDER-BOTTOM-COLOR'] = \$e['B'];
\t\t\t\$newprop['BORDER-LEFT-COLOR'] = \$e['L'];
\t\t}

\t\telse if (\$k == 'BORDER-SPACING') {
\t\t\t\$prop = preg_split('/\\s+/',trim(\$v));
\t\t\tif (count(\$prop) == 1 ) { 
\t\t\t\t\$newprop['BORDER-SPACING-H'] = \$prop[0];
\t\t\t\t\$newprop['BORDER-SPACING-V'] = \$prop[0];
\t\t\t}
\t\t\telse if (count(\$prop) == 2 ) { 
\t\t\t\t\$newprop['BORDER-SPACING-H'] = \$prop[0];
\t\t\t\t\$newprop['BORDER-SPACING-V'] = \$prop[1];
\t\t\t}
\t\t}
\t\telse if (\$k == 'TEXT-OUTLINE') {\t// mPDF 5.6.07
\t\t\t\$prop = preg_split('/\\s+/',trim(\$v));
\t\t\tif (trim(strtolower(\$v)) == 'none' ) { 
\t\t\t\t\$newprop['TEXT-OUTLINE'] = 'none';
\t\t\t}
\t\t\telse if (count(\$prop) == 2 ) { 
\t\t\t\t\$newprop['TEXT-OUTLINE-WIDTH'] = \$prop[0];
\t\t\t\t\$newprop['TEXT-OUTLINE-COLOR'] = \$prop[1];
\t\t\t}
\t\t\telse if (count(\$prop) == 3 ) { 
\t\t\t\t\$newprop['TEXT-OUTLINE-WIDTH'] = \$prop[0];
\t\t\t\t\$newprop['TEXT-OUTLINE-COLOR'] = \$prop[2];
\t\t\t}
\t\t}
\t\telse if (\$k == 'SIZE') {
\t\t\t\$prop = preg_split('/\\s+/',trim(\$v));
\t\t\tif (preg_match('/(auto|portrait|landscape)/',\$prop[0])) {
\t\t\t\t\$newprop['SIZE'] = strtoupper(\$prop[0]);
\t\t\t}
\t\t\telse if (count(\$prop) == 1 ) {
\t\t\t\t\$newprop['SIZE']['W'] = \$this->mpdf->ConvertSize(\$prop[0]);
\t\t\t\t\$newprop['SIZE']['H'] = \$this->mpdf->ConvertSize(\$prop[0]);
\t\t\t}
\t\t\telse if (count(\$prop) == 2 ) {
\t\t\t\t\$newprop['SIZE']['W'] = \$this->mpdf->ConvertSize(\$prop[0]);
\t\t\t\t\$newprop['SIZE']['H'] = \$this->mpdf->ConvertSize(\$prop[1]);
\t\t\t}
\t\t}
\t\telse if (\$k == 'SHEET-SIZE') {
\t\t\t\$prop = preg_split('/\\s+/',trim(\$v));
\t\t\tif (count(\$prop) == 2 ) {
\t\t\t\t\$newprop['SHEET-SIZE'] = array(\$this->mpdf->ConvertSize(\$prop[0]), \$this->mpdf->ConvertSize(\$prop[1]));
\t\t\t}
\t\t\telse {
\t\t\t\tif(preg_match('/([0-9a-zA-Z]*)-L/i',\$v,\$m)) {\t// e.g. A4-L = A\$ landscape
\t\t\t\t\t\$ft = \$this->mpdf->_getPageFormat(\$m[1]);
\t\t\t\t\t\$format = array(\$ft[1],\$ft[0]);
\t\t\t\t}
\t\t\t\telse { \$format = \$this->mpdf->_getPageFormat(\$v); }
\t\t\t\tif (\$format) { \$newprop['SHEET-SIZE'] = array(\$format[0]/_MPDFK, \$format[1]/_MPDFK); }
\t\t\t}
\t\t}
\t\telse if (\$k == 'BACKGROUND') {
\t\t\t\$bg = \$this->parseCSSbackground(\$v);
\t\t\tif (\$bg['c']) { \$newprop['BACKGROUND-COLOR'] = \$bg['c']; }
\t\t\telse { \$newprop['BACKGROUND-COLOR'] = 'transparent'; }
/*-- BACKGROUNDS --*/
\t\t\tif (\$bg['i']) { 
\t\t\t\t\$newprop['BACKGROUND-IMAGE'] = \$bg['i']; 
\t\t\t\tif (\$bg['r']) { \$newprop['BACKGROUND-REPEAT'] = \$bg['r']; }
\t\t\t\tif (\$bg['p']) { \$newprop['BACKGROUND-POSITION'] = \$bg['p']; }
\t\t\t}
\t\t\telse { \$newprop['BACKGROUND-IMAGE'] = ''; }
/*-- END BACKGROUNDS --*/
\t\t}
/*-- BACKGROUNDS --*/
\t\telse if (\$k == 'BACKGROUND-IMAGE') {
\t\t\tif (preg_match('/(-moz-)*(repeating-)*(linear|radial)-gradient\\(.*\\)/i',\$v,\$m)) {
\t\t\t\t\$newprop['BACKGROUND-IMAGE'] = \$m[0];
\t\t\t\tcontinue;
\t\t\t}
\t\t\tif (preg_match('/url\\([\\'\\\"]{0,1}(.*?)[\\'\\\"]{0,1}\\)/i',\$v,\$m)) {
\t\t\t\t\$newprop['BACKGROUND-IMAGE'] = \$m[1];
\t\t\t}
\t\t 
\t\t\telse if (strtolower(\$v)=='none') { \$newprop['BACKGROUND-IMAGE'] = ''; }

\t\t}
\t\telse if (\$k == 'BACKGROUND-REPEAT') {
\t\t\tif (preg_match('/(repeat-x|repeat-y|no-repeat|repeat)/i',\$v,\$m)) { 
\t\t\t\t\$newprop['BACKGROUND-REPEAT'] = strtolower(\$m[1]);
\t\t\t}
\t\t}
\t\telse if (\$k == 'BACKGROUND-POSITION') {
\t\t\t\$s = \$v;
\t\t\t\$bits = preg_split('/\\s+/',trim(\$s));
\t\t\t// These should be Position x1 or x2
\t\t\tif (count(\$bits)==1) {
\t\t\t\tif (preg_match('/bottom/',\$bits[0])) { \$bg['p'] = '50% 100%'; }
\t\t\t\telse if (preg_match('/top/',\$bits[0])) { \$bg['p'] = '50% 0%'; }
\t\t\t\telse { \$bg['p'] = \$bits[0] . ' 50%'; }
\t\t\t}
\t\t\telse if (count(\$bits)==2) {
\t\t\t\t// Can be either right center or center right
\t\t\t\tif (preg_match('/(top|bottom)/',\$bits[0]) || preg_match('/(left|right)/',\$bits[1])) { 
\t\t\t\t\t\$bg['p'] = \$bits[1] . ' '.\$bits[0]; 
\t\t\t\t}
\t\t\t\telse { 
\t\t\t\t\t\$bg['p'] = \$bits[0] . ' '.\$bits[1]; 
\t\t\t\t}
\t\t\t}
\t\t\tif (\$bg['p']) {
\t\t\t\t\$bg['p'] = preg_replace('/(left|top)/','0%',\$bg['p']);
\t\t\t\t\$bg['p'] = preg_replace('/(right|bottom)/','100%',\$bg['p']);
\t\t\t\t\$bg['p'] = preg_replace('/(center)/','50%',\$bg['p']);
\t\t\t\tif (!preg_match('/[\\-]{0,1}\\d+(in|cm|mm|pt|pc|em|ex|px|%)* [\\-]{0,1}\\d+(in|cm|mm|pt|pc|em|ex|px|%)*/',\$bg['p'])) {
\t\t\t\t\t\$bg['p'] = false;
\t\t\t\t}
\t\t\t}
\t\t\tif (\$bg['p']) { \$newprop['BACKGROUND-POSITION'] = \$bg['p']; }
\t\t}
/*-- END BACKGROUNDS --*/
\t\telse if (\$k == 'IMAGE-ORIENTATION') {
\t\t\tif (preg_match('/([\\-]*[0-9\\.]+)(deg|grad|rad)/i',\$v,\$m)) {
\t\t\t\t\$angle = \$m[1] + 0;
\t\t\t\tif (strtolower(\$m[2])=='deg') { \$angle = \$angle; }
\t\t\t\telse if (strtolower(\$m[2])=='grad') { \$angle *= (360/400); }
\t\t\t\telse if (strtolower(\$m[2])=='rad') { \$angle = rad2deg(\$angle); }
\t\t\t\twhile(\$angle < 0) { \$angle += 360; }
\t\t\t\t\$angle = (\$angle % 360);
\t\t\t\t\$angle /= 90;
\t\t\t\t\$angle = round(\$angle) * 90;
\t\t\t\t\$newprop['IMAGE-ORIENTATION'] = \$angle; 
\t\t\t}
\t\t}
\t\t// mPDF 5.6.13
\t\telse if (\$k == 'TEXT-ALIGN') {
\t\t\tif (preg_match('/[\"\\'](.){1}[\"\\']/i',\$v,\$m)) { 
\t\t\t\t\$d = array_search(\$m[1],\$this->mpdf->decimal_align);
\t\t\t\tif (\$d !== false) { \$newprop['TEXT-ALIGN'] = \$d; }
\t\t\t\tif (preg_match('/(center|left|right)/i',\$v,\$m)) { \$newprop['TEXT-ALIGN'] .= strtoupper(substr(\$m[1],0,1)); }
\t\t\t\telse { \$newprop['TEXT-ALIGN'] .= 'R'; }\t// default = R
\t\t\t}
\t\t\telse if (preg_match('/[\"\\'](\\\\\\[a-fA-F0-9]{1,6})[\"\\']/i',\$v,\$m)) { 
\t\t\t\t\$utf8 = codeHex2utf(substr(\$m[1],1,6));
\t\t\t\t\$d = array_search(\$utf8,\$this->mpdf->decimal_align);
\t\t\t\tif (\$d !== false) { \$newprop['TEXT-ALIGN'] = \$d; }
\t\t\t\tif (preg_match('/(center|left|right)/i',\$v,\$m)) { \$newprop['TEXT-ALIGN'] .= strtoupper(substr(\$m[1],0,1)); }
\t\t\t\telse { \$newprop['TEXT-ALIGN'] .= 'R'; }\t// default = R
\t\t\t}
\t\t\telse { \$newprop[\$k] = \$v; }
\t\t}
\t\telse if (\$k == 'LIST-STYLE') {\t// mPDF 5.7.2
\t\t\tif (preg_match('/(lower-roman|upper-roman|lower-latin|lower-alpha|upper-latin|upper-alpha|none|decimal|disc|circle|square|arabic-indic|bengali|devanagari|gujarati|gurmukhi|kannada|malayalam|oriya|persian|tamil|telugu|thai|urdu|cambodian|khmer|lao)/i',\$v,\$m)
\t\t\t|| preg_match('/U\\+([a-fA-F0-9]+)/i',\$v,\$m)) { 
\t\t\t\t\$newprop['LIST-STYLE-TYPE'] = strtolower(trim(\$m[1]));
\t\t\t}
\t\t}


\t\telse { 
\t\t\t\$newprop[\$k] = \$v; 
\t\t}
\t}

\treturn \$newprop;
}

function setCSSboxshadow(\$v) {
\t\$sh = array();
\t\$c = preg_match_all('/(rgba|rgb|device-cmyka|cmyka|device-cmyk|cmyk|hsla|hsl)\\(.*?\\)/',\$v,\$x);\t// mPDF 5.6.05
\tfor(\$i=0; \$i<\$c; \$i++) {
\t\t\$col = preg_replace('/,/','*',\$x[0][\$i]);
\t\t\$v = preg_replace('/'.preg_quote(\$x[0][\$i],'/').'/',\$col,\$v);
\t}
\t\$ss = explode(',',\$v);
\tforeach (\$ss AS \$s) {
\t\t\$new = array('inset'=>false, 'blur'=>0, 'spread'=>0);
\t\tif (preg_match('/inset/i',\$s)) { \$new['inset'] = true; \$s = preg_replace('/\\s*inset\\s*/','',\$s); }
\t\t\$p = explode(' ',trim(\$s));
\t\tif (isset(\$p[0])) { \$new['x'] = \$this->mpdf->ConvertSize(trim(\$p[0]),\$this->mpdf->blk[\$this->mpdf->blklvl-1]['inner_width'],\$this->mpdf->FontSize,false); }
\t\tif (isset(\$p[1])) { \$new['y'] = \$this->mpdf->ConvertSize(trim(\$p[1]),\$this->mpdf->blk[\$this->mpdf->blklvl-1]['inner_width'],\$this->mpdf->FontSize,false); }
\t\tif (isset(\$p[2])) {
\t\t\tif (preg_match('/^\\s*[\\.\\-0-9]/',\$p[2])) {
\t\t\t\t\$new['blur'] = \$this->mpdf->ConvertSize(trim(\$p[2]),\$this->mpdf->blk[\$this->mpdf->blklvl-1]['inner_width'],\$this->mpdf->FontSize,false); 
\t\t\t}
\t\t\telse { \$new['col'] = \$this->mpdf->ConvertColor(preg_replace('/\\*/',',',\$p[2])); }
\t\t\tif (isset(\$p[3])) {
\t\t\t\tif (preg_match('/^\\s*[\\.\\-0-9]/',\$p[3])) {
\t\t\t\t\t\$new['spread'] = \$this->mpdf->ConvertSize(trim(\$p[3]),\$this->mpdf->blk[\$this->mpdf->blklvl-1]['inner_width'],\$this->mpdf->FontSize,false); 
\t\t\t\t}
\t\t\t\telse { \$new['col'] = \$this->mpdf->ConvertColor(preg_replace('/\\*/',',',\$p[3])); }
\t\t\t\tif (isset(\$p[4])) {
\t\t\t\t\t\$new['col'] = \$this->mpdf->ConvertColor(preg_replace('/\\*/',',',\$p[4]));
\t\t\t\t}
\t\t\t}
\t\t}
\t\tif (!\$new['col']) { \$new['col'] = \$this->mpdf->ConvertColor('#888888'); }
\t\tif (isset(\$new['y'])) { array_unshift(\$sh, \$new); }
\t}
\treturn \$sh;
}

function setCSStextshadow(\$v) {
\t\$sh = array();
\t\$c = preg_match_all('/(rgba|rgb|device-cmyka|cmyka|device-cmyk|cmyk|hsla|hsl)\\(.*?\\)/',\$v,\$x);\t// mPDF 5.6.05
\tfor(\$i=0; \$i<\$c; \$i++) {
\t\t\$col = preg_replace('/,/','*',\$x[0][\$i]);
\t\t\$v = preg_replace('/'.preg_quote(\$x[0][\$i],'/').'/',\$col,\$v);
\t}
\t\$ss = explode(',',\$v);
\tforeach (\$ss AS \$s) {
\t\t\$new = array('blur'=>0);
\t\t\$p = explode(' ',trim(\$s));
\t\tif (isset(\$p[0])) { \$new['x'] = \$this->mpdf->ConvertSize(trim(\$p[0]),\$this->mpdf->blk[\$this->mpdf->blklvl-1]['inner_width'],\$this->mpdf->FontSize,false); }
\t\tif (isset(\$p[1])) { \$new['y'] = \$this->mpdf->ConvertSize(trim(\$p[1]),\$this->mpdf->blk[\$this->mpdf->blklvl-1]['inner_width'],\$this->mpdf->FontSize,false); }
\t\tif (isset(\$p[2])) {
\t\t\tif (preg_match('/^\\s*[\\.\\-0-9]/',\$p[2])) {
\t\t\t\t\$new['blur'] = \$this->mpdf->ConvertSize(trim(\$p[2]),\$this->mpdf->blk[\$this->mpdf->blklvl-1]['inner_width'],\$this->mpdf->FontSize,false); 
\t\t\t}
\t\t\telse { \$new['col'] = \$this->mpdf->ConvertColor(preg_replace('/\\*/',',',\$p[2])); }
\t\t\tif (isset(\$p[3])) {
\t\t\t\t\$new['col'] = \$this->mpdf->ConvertColor(preg_replace('/\\*/',',',\$p[3]));
\t\t\t}
\t\t}
\t\tif (!\$new['col']) { \$new['col'] = \$this->mpdf->ConvertColor('#888888'); }
\t\tif (isset(\$new['y'])) { array_unshift(\$sh, \$new); }
\t}
\treturn \$sh;
}

function parseCSSbackground(\$s) {
\t\$bg = array('c'=>false, 'i'=>false, 'r'=>false, 'p'=>false, );
/*-- BACKGROUNDS --*/
\tif (preg_match('/(-moz-)*(repeating-)*(linear|radial)-gradient\\(.*\\)/i',\$s,\$m)) {
\t\t\$bg['i'] = \$m[0];
\t}
\telse
/*-- END BACKGROUNDS --*/
\tif (preg_match('/url\\(/i',\$s)) {
\t\t// If color, set and strip it off
\t\t// mPDF 5.6.05
\t\tif (preg_match('/^\\s*(#[0-9a-fA-F]{3,6}|(rgba|rgb|device-cmyka|cmyka|device-cmyk|cmyk|hsla|hsl|spot)\\(.*?\\)|[a-zA-Z]{3,})\\s+(url\\(.*)/i',\$s,\$m)) {
\t\t\t\$bg['c'] = strtolower(\$m[1]);
\t\t\t\$s = \$m[3];
\t\t}
/*-- BACKGROUNDS --*/
\t\tif (preg_match('/url\\([\\'\\\"]{0,1}(.*?)[\\'\\\"]{0,1}\\)\\s*(.*)/i',\$s,\$m)) {
\t\t\t\$bg['i'] = \$m[1];
\t\t\t\$s = strtolower(\$m[2]);
\t\t\tif (preg_match('/(repeat-x|repeat-y|no-repeat|repeat)/',\$s,\$m)) { 
\t\t\t\t\$bg['r'] = \$m[1];
\t\t\t}
\t\t\t// Remove repeat, attachment (discarded) and also any inherit
\t\t\t\$s = preg_replace('/(repeat-x|repeat-y|no-repeat|repeat|scroll|fixed|inherit)/','',\$s);
\t\t\t\$bits = preg_split('/\\s+/',trim(\$s));
\t\t\t// These should be Position x1 or x2
\t\t\tif (count(\$bits)==1) {
\t\t\t\tif (preg_match('/bottom/',\$bits[0])) { \$bg['p'] = '50% 100%'; }
\t\t\t\telse if (preg_match('/top/',\$bits[0])) { \$bg['p'] = '50% 0%'; }
\t\t\t\telse { \$bg['p'] = \$bits[0] . ' 50%'; }
\t\t\t}
\t\t\telse if (count(\$bits)==2) {
\t\t\t\t// Can be either right center or center right
\t\t\t\tif (preg_match('/(top|bottom)/',\$bits[0]) || preg_match('/(left|right)/',\$bits[1])) { 
\t\t\t\t\t\$bg['p'] = \$bits[1] . ' '.\$bits[0]; 
\t\t\t\t}
\t\t\t\telse { 
\t\t\t\t\t\$bg['p'] = \$bits[0] . ' '.\$bits[1]; 
\t\t\t\t}
\t\t\t}
\t\t\tif (\$bg['p']) {
\t\t\t\t\$bg['p'] = preg_replace('/(left|top)/','0%',\$bg['p']);
\t\t\t\t\$bg['p'] = preg_replace('/(right|bottom)/','100%',\$bg['p']);
\t\t\t\t\$bg['p'] = preg_replace('/(center)/','50%',\$bg['p']);
\t\t\t\tif (!preg_match('/[\\-]{0,1}\\d+(in|cm|mm|pt|pc|em|ex|px|%)* [\\-]{0,1}\\d+(in|cm|mm|pt|pc|em|ex|px|%)*/',\$bg['p'])) {
\t\t\t\t\t\$bg['p'] = false;
\t\t\t\t}
\t\t\t}
\t\t}
/*-- END BACKGROUNDS --*/
\t}
\telse if (preg_match('/^\\s*(#[0-9a-fA-F]{3,6}|(rgba|rgb|device-cmyka|cmyka|device-cmyk|cmyk|hsla|hsl|spot)\\(.*?\\)|[a-zA-Z]{3,})/i',\$s,\$m)) { \$bg['c'] = strtolower(\$m[1]); }\t// mPDF 5.6.05
\treturn (\$bg);
}


function expand24(\$mp) {
\t\$prop = preg_split('/\\s+/',trim(\$mp));
\tif (count(\$prop) == 1 ) { 
\t\treturn array('T' => \$prop[0], 'R' => \$prop[0], 'B' => \$prop[0], 'L'=> \$prop[0]);
\t}
\tif (count(\$prop) == 2 ) { 
\t\treturn array('T' => \$prop[0], 'R' => \$prop[1], 'B' => \$prop[0], 'L'=> \$prop[1]);
\t}

\tif (count(\$prop) == 3 ) { 
\t\treturn array('T' => \$prop[0], 'R' => \$prop[1], 'B' => \$prop[2], 'L'=> \$prop[1]);
\t}
\tif (count(\$prop) == 4 ) { 
\t\treturn array('T' => \$prop[0], 'R' => \$prop[1], 'B' => \$prop[2], 'L'=> \$prop[3]);
\t}
\treturn array(); 
}

/*-- BORDER-RADIUS --*/
function border_radius_expand(\$val,\$k) {
\t\$b = array();
\tif (\$k == 'BORDER-RADIUS') {
\t\t\$hv = explode('/',trim(\$val));
\t\t\$prop = preg_split('/\\s+/',trim(\$hv[0]));
\t\tif (count(\$prop)==1) {
\t\t\t\$b['TL-H'] = \$b['TR-H'] = \$b['BR-H'] = \$b['BL-H'] = \$prop[0];
\t\t}
\t\telse if (count(\$prop)==2) {
\t\t\t\$b['TL-H'] = \$b['BR-H'] = \$prop[0];
\t\t\t\$b['TR-H'] = \$b['BL-H'] = \$prop[1];
\t\t}
\t\telse if (count(\$prop)==3) {
\t\t\t\$b['TL-H'] = \$prop[0];
\t\t\t\$b['TR-H'] = \$b['BL-H'] = \$prop[1];
\t\t\t\$b['BR-H'] = \$prop[2];
\t\t}
\t\telse if (count(\$prop)==4) {
\t\t\t\$b['TL-H'] = \$prop[0];
\t\t\t\$b['TR-H'] = \$prop[1];
\t\t\t\$b['BR-H'] = \$prop[2];
\t\t\t\$b['BL-H'] = \$prop[3];
\t\t}
\t\tif (count(\$hv)==2) {
\t\t\t\$prop = preg_split('/\\s+/',trim(\$hv[1]));
\t\t\tif (count(\$prop)==1) {
\t\t\t\t\$b['TL-V'] = \$b['TR-V'] = \$b['BR-V'] = \$b['BL-V'] = \$prop[0];
\t\t\t}
\t\t\telse if (count(\$prop)==2) {
\t\t\t\t\$b['TL-V'] = \$b['BR-V'] = \$prop[0];
\t\t\t\t\$b['TR-V'] = \$b['BL-V'] = \$prop[1];
\t\t\t}
\t\t\telse if (count(\$prop)==3) {
\t\t\t\t\$b['TL-V'] = \$prop[0];
\t\t\t\t\$b['TR-V'] = \$b['BL-V'] = \$prop[1];
\t\t\t\t\$b['BR-V'] = \$prop[2];
\t\t\t}
\t\t\telse if (count(\$prop)==4) {
\t\t\t\t\$b['TL-V'] = \$prop[0];
\t\t\t\t\$b['TR-V'] = \$prop[1];
\t\t\t\t\$b['BR-V'] = \$prop[2];
\t\t\t\t\$b['BL-V'] = \$prop[3];
\t\t\t}
\t\t}
\t\telse {
\t\t\t\$b['TL-V'] = \$b['TL-H'];
\t\t\t\$b['TR-V'] = \$b['TR-H'];
\t\t\t\$b['BL-V'] = \$b['BL-H'];
\t\t\t\$b['BR-V'] = \$b['BR-H'];
\t\t}
\t\treturn \$b;
\t}

\t// Parse 2
\t\$h = 0;
\t\$v = 0;
\t\$prop = preg_split('/\\s+/',trim(\$val));
\tif (count(\$prop)==1) { \$h = \$v = \$val; }
\telse { \$h = \$prop[0]; \$v = \$prop[1]; }
\tif (\$h==0 || \$v==0) { \$h = \$v = 0; }
\tif (\$k == 'BORDER-TOP-LEFT-RADIUS') {
\t\t\$b['TL-H'] = \$h;
\t\t\$b['TL-V'] = \$v;
\t}
\telse if (\$k == 'BORDER-TOP-RIGHT-RADIUS') {
\t\t\$b['TR-H'] = \$h;
\t\t\$b['TR-V'] = \$v;
\t}
\telse if (\$k == 'BORDER-BOTTOM-LEFT-RADIUS') {
\t\t\$b['BL-H'] = \$h;
\t\t\$b['BL-V'] = \$v;
\t}
\telse if (\$k == 'BORDER-BOTTOM-RIGHT-RADIUS') {
\t\t\$b['BR-H'] = \$h;
\t\t\$b['BR-V'] = \$v;
\t}
\treturn \$b;

}
/*-- END BORDER-RADIUS --*/

function _mergeCSS(\$p, &\$t) {
\t// Save Cascading CSS e.g. \"div.topic p\" at this block level
\tif (isset(\$p) && \$p) {
\t\tif (\$t) { 
\t\t\t\$t = \$this->array_merge_recursive_unique(\$t, \$p);
\t\t}
\t   \telse { \$t = \$p; }
\t}
}

// for CSS handling
function array_merge_recursive_unique(\$array1, \$array2) {
    \$arrays = func_get_args();
    \$narrays = count(\$arrays);
    \$ret = \$arrays[0];
    for (\$i = 1; \$i < \$narrays; \$i ++) {
        foreach (\$arrays[\$i] as \$key => \$value) {
            if (((string) \$key) === ((string) intval(\$key))) { // integer or string as integer key - append
                \$ret[] = \$value;
            }
            else { // string key - merge
                if (is_array(\$value) && isset(\$ret[\$key])) {
                    \$ret[\$key] = \$this->array_merge_recursive_unique(\$ret[\$key], \$value);
                }
                else {
                    \$ret[\$key] = \$value;
                }
            }
        }   
    }
    return \$ret;
}



function _mergeFullCSS(\$p, &\$t, \$tag, \$classes, \$id) {
\t\t\$this->_mergeCSS(\$p[\$tag], \$t);
\t\t// STYLESHEET CLASS e.g. .smallone{}  .redletter{}
\t\tforeach(\$classes AS \$class) {
\t\t  \$this->_mergeCSS(\$p['CLASS>>'.\$class], \$t);
\t\t}
\t\t// STYLESHEET nth-child SELECTOR e.g. tr:nth-child(odd)  td:nth-child(2n+1)
\t\tif (\$tag=='TR' && isset(\$p) && \$p)  {
\t\t\tforeach(\$p AS \$k=>\$val) {
\t\t\t\tif (preg_match('/'.\$tag.'>>SELECTORNTHCHILD>>(.*)/',\$k, \$m)) {
\t\t\t\t\t\$select = false;
\t\t\t\t\tif (\$tag=='TR')  {
\t\t\t\t\t\t\$row = \$this->mpdf->row;
\t\t\t\t\t\t\$thnr = (isset(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_thead']) ? count(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_thead']) : 0);
\t\t\t\t\t\t\$tfnr = (isset(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_tfoot']) ? count(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_tfoot']) : 0);
\t\t\t\t\t\tif (\$this->mpdf->tabletfoot) { \$row -= \$thnr; }
\t\t\t\t\t\telse if (!\$this->mpdf->tablethead) { \$row -= (\$thnr + \$tfnr); }
\t\t\t\t\t\tif (\$m[1]=='ODD' && (\$row % 2) == 0) { \$select = true; }
\t\t\t\t\t\telse if (\$m[1]=='EVEN' && (\$row % 2) == 1) { \$select = true; }
\t\t\t\t\t\telse if (preg_match('/(\\d+)N\\+(\\d+)/',\$m[1],\$a)) {
\t\t\t\t\t\t\tif (((\$row + 1) % \$a[1]) == \$a[2]) { \$select = true; }
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\telse if (\$tag=='TD' || \$tag=='TH')  {
\t\t\t\t\t\tif (\$m[1]=='ODD' && (\$this->mpdf->col % 2) == 0) { \$select = true; }
\t\t\t\t\t\telse if (\$m[1]=='EVEN' && (\$this->mpdf->col % 2) == 1) { \$select = true; }
\t\t\t\t\t\telse if (preg_match('/(\\d+)N\\+(\\d+)/',\$m[1],\$a)) {
\t\t\t\t\t\t\tif (((\$this->mpdf->col + 1) % \$a[1]) == \$a[2]) { \$select = true; }
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif (\$select) {
\t\t  \t\t\t\t\$this->_mergeCSS(\$p[\$tag.'>>SELECTORNTHCHILD>>'.\$m[1]], \$t);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t// STYLESHEET CLASS e.g. #smallone{}  #redletter{}
\t\tif (isset(\$id) && \$id) {
\t\t  \$this->_mergeCSS(\$p['ID>>'.\$id], \$t);
\t\t}
\t\t// STYLESHEET CLASS e.g. .smallone{}  .redletter{}
\t\tforeach(\$classes AS \$class) {
\t\t  \$this->_mergeCSS(\$p[\$tag.'>>CLASS>>'.\$class], \$t);
\t\t}
\t\t// STYLESHEET CLASS e.g. #smallone{}  #redletter{}
\t\tif (isset(\$id)) {
\t\t  \$this->_mergeCSS(\$p[\$tag.'>>ID>>'.\$id], \$t);
\t\t}
}

function setBorderDominance(\$prop, \$val) {
\tif (isset(\$prop['BORDER-LEFT']) && \$prop['BORDER-LEFT']) { \$this->cell_border_dominance_L = \$val; }
\tif (isset(\$prop['BORDER-RIGHT']) && \$prop['BORDER-RIGHT']) { \$this->cell_border_dominance_R = \$val; }
\tif (isset(\$prop['BORDER-TOP']) && \$prop['BORDER-TOP']) { \$this->cell_border_dominance_T = \$val; }
\tif (isset(\$prop['BORDER-BOTTOM']) && \$prop['BORDER-BOTTOM']) { \$this->cell_border_dominance_B = \$val; }
}

function _set_mergedCSS(&\$m, &\$p, \$d=true, \$bd=false) {
\tif (isset(\$m)) {
\t\tif ((isset(\$m['depth']) && \$m['depth']>1) || \$d==false) { \t// include check for 'depth'
\t\t\tif (\$bd) { \$this->setBorderDominance(\$m, \$bd); }\t// *TABLES*
\t\t\tif (is_array(\$m)) { 
\t\t\t\t\$p = array_merge(\$p,\$m); 
\t\t\t\t\$this->_mergeBorders(\$p,\$m);
\t\t\t}
\t\t}
\t}
}


function _mergeBorders(&\$b, &\$a) {\t// Merges \$a['BORDER-TOP-STYLE'] to \$b['BORDER-TOP'] etc.
  foreach(array('TOP','RIGHT','BOTTOM','LEFT') AS \$side) {
    foreach(array('STYLE','WIDTH','COLOR') AS \$el) {
\tif (isset(\$a['BORDER-'.\$side.'-'.\$el])) {\t// e.g. \$b['BORDER-TOP-STYLE']
\t\t\$s = trim(\$a['BORDER-'.\$side.'-'.\$el]);
\t\tif (isset(\$b['BORDER-'.\$side])) {\t// e.g. \$b['BORDER-TOP']
\t\t\t\$p = trim(\$b['BORDER-'.\$side]);
\t\t}
\t\telse { \$p = ''; }
\t\tif (\$el=='STYLE') {
\t\t\tif (\$p) { \$b['BORDER-'.\$side] = preg_replace('/(\\S+)\\s+(\\S+)\\s+(\\S+)/', '\\\\1 '.\$s.' \\\\3', \$p); }
\t\t\telse { \$b['BORDER-'.\$side] = '0px '.\$s.' #000000'; }
\t\t}
\t\telse if (\$el=='WIDTH') {
\t\t\tif (\$p) { \$b['BORDER-'.\$side] = preg_replace('/(\\S+)\\s+(\\S+)\\s+(\\S+)/', \$s.' \\\\2 \\\\3', \$p); }
\t\t\telse { \$b['BORDER-'.\$side] = \$s.' none #000000'; }
\t\t}
\t\telse if (\$el=='COLOR') {
\t\t\tif (\$p) { \$b['BORDER-'.\$side] = preg_replace('/(\\S+)\\s+(\\S+)\\s+(\\S+)/', '\\\\1 \\\\2 '.\$s, \$p); }
\t\t\telse { \$b['BORDER-'.\$side] = '0px none '.\$s; }
\t\t}
\t}
    }
  }
}


function MergeCSS(\$inherit,\$tag,\$attr) {
\t\$p = array();
\t\$zp = array(); 

\t\$classes = array();
\tif (isset(\$attr['CLASS'])) {
\t\t\$classes = preg_split('/\\s+/',\$attr['CLASS']);
\t}
\tif (!isset(\$attr['ID'])) { \$attr['ID']=''; }
\t//===============================================
/*-- TABLES --*/
\t// Set Inherited properties
\tif (\$inherit == 'TOPTABLE') {\t// \$tag = TABLE
\t\t//===============================================
\t\t// Save Cascading CSS e.g. \"div.topic p\" at this block level

\t\tif (isset(\$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS'])) {
\t\t\t\$this->tablecascadeCSS[0] = \$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS'];
\t\t}
\t\telse {
\t\t\t\$this->tablecascadeCSS[0] = \$this->cascadeCSS;
\t\t}
\t}
\t//===============================================
\t// Set Inherited properties
\tif (\$inherit == 'TOPTABLE' || \$inherit == 'TABLE') {
\t\t//Cascade everything from last level that is not an actual property, or defined by current tag/attributes
\t\tif (isset(\$this->tablecascadeCSS[\$this->tbCSSlvl-1]) && is_array(\$this->tablecascadeCSS[\$this->tbCSSlvl-1])) {
\t\t   foreach(\$this->tablecascadeCSS[\$this->tbCSSlvl-1] AS \$k=>\$v) {
\t\t\t\t\$this->tablecascadeCSS[\$this->tbCSSlvl][\$k] = \$v;
\t\t   }
\t\t}
\t\t\$this->_mergeFullCSS(\$this->cascadeCSS, \$this->tablecascadeCSS[\$this->tbCSSlvl], \$tag, \$classes, \$attr['ID']);
\t\t//===============================================
\t\t// Cascading forward CSS e.g. \"table.topic td\" for this table in \$this->tablecascadeCSS 
\t\t//===============================================
\t\t// STYLESHEET TAG e.g. table
\t\t\$this->_mergeFullCSS(\$this->tablecascadeCSS[\$this->tbCSSlvl-1], \$this->tablecascadeCSS[\$this->tbCSSlvl], \$tag, \$classes, \$attr['ID']);
\t\t//===============================================
\t}
/*-- END TABLES --*/
\t//===============================================
/*-- LISTS --*/
\t// Set Inherited properties
\tif (\$inherit == 'TOPLIST') {\t// \$tag = UL,OL
\t\t//===============================================
\t\t// Save Cascading CSS e.g. \"div.topic p\" at this block level
\t\tif (isset(\$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS'])) {
\t\t\t\$this->listcascadeCSS[0] = \$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS'];
\t\t}
\t\telse {
\t\t\t\$this->listcascadeCSS[0] = \$this->cascadeCSS;
\t\t}
\t}
\t//===============================================
\t// Set Inherited properties
\tif (\$inherit == 'TOPLIST' || \$inherit == 'LIST') {
\t\t//Cascade everything from last level that is not an actual property, or defined by current tag/attributes
\t\tif (isset(\$this->listcascadeCSS[\$this->listCSSlvl-1]) && is_array(\$this->listcascadeCSS[\$this->listCSSlvl-1])) {
\t\t   foreach(\$this->listcascadeCSS[\$this->listCSSlvl-1] AS \$k=>\$v) {
\t\t\t\t\$this->listcascadeCSS[\$this->listCSSlvl][\$k] = \$v;
\t\t   }
\t\t}
\t\t\$this->_mergeFullCSS(\$this->cascadeCSS, \$this->listcascadeCSS[\$this->listCSSlvl], \$tag, \$classes, \$attr['ID']);
\t\t//===============================================
\t\t// Cascading forward CSS e.g. \"table.topic td\" for this list in \$this->listcascadeCSS 
\t\t//===============================================
\t\t// STYLESHEET TAG e.g. table
\t\t\$this->_mergeFullCSS(\$this->listcascadeCSS[\$this->listCSSlvl-1], \$this->listcascadeCSS[\$this->listCSSlvl], \$tag, \$classes, \$attr['ID']);
\t\t//===============================================
\t}
/*-- END LISTS --*/
\t//===============================================
\t// Set Inherited properties
\tif (\$inherit == 'BLOCK') {
\t\tif (isset(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['cascadeCSS']) && is_array(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['cascadeCSS'])) {
\t\t   foreach(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['cascadeCSS'] AS \$k=>\$v) {
\t\t\t\t\$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS'][\$k] = \$v;

\t\t   }
\t\t}

\t\t//===============================================
\t\t// Save Cascading CSS e.g. \"div.topic p\" at this block level
\t\t\$this->_mergeFullCSS(\$this->cascadeCSS, \$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS'], \$tag, \$classes, \$attr['ID']);
\t\t//===============================================
\t\t// Cascading forward CSS
\t\t//===============================================
\t\t\$this->_mergeFullCSS(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['cascadeCSS'], \$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS'], \$tag, \$classes, \$attr['ID']);
\t\t//===============================================
\t\t  // Block properties
\t\t  if (isset(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['margin_collapse']) && \$this->mpdf->blk[\$this->mpdf->blklvl-1]['margin_collapse']) { \$p['MARGIN-COLLAPSE'] = 'COLLAPSE'; }\t// custom tag, but follows CSS principle that border-collapse is inherited
\t\t  if (isset(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['line_height']) && \$this->mpdf->blk[\$this->mpdf->blklvl-1]['line_height']) { \$p['LINE-HEIGHT'] = \$this->mpdf->blk[\$this->mpdf->blklvl-1]['line_height']; }

\t\t  if (isset(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['direction']) && \$this->mpdf->blk[\$this->mpdf->blklvl-1]['direction']) { \$p['DIRECTION'] = \$this->mpdf->blk[\$this->mpdf->blklvl-1]['direction']; }

\t\t  if (isset(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['align']) && \$this->mpdf->blk[\$this->mpdf->blklvl-1]['align']) { 
\t\t\tif (\$this->mpdf->blk[\$this->mpdf->blklvl-1]['align'] == 'L') { \$p['TEXT-ALIGN'] = 'left'; } 
\t\t\telse if (\$this->mpdf->blk[\$this->mpdf->blklvl-1]['align'] == 'J') { \$p['TEXT-ALIGN'] = 'justify'; } 
\t\t\telse if (\$this->mpdf->blk[\$this->mpdf->blklvl-1]['align'] == 'R') { \$p['TEXT-ALIGN'] = 'right'; } 
\t\t\telse if (\$this->mpdf->blk[\$this->mpdf->blklvl-1]['align'] == 'C') { \$p['TEXT-ALIGN'] = 'center'; } 
\t\t  }
\t\t  if (\$this->mpdf->ColActive || \$this->mpdf->keep_block_together) { 
\t\t  \tif (isset(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['bgcolor']) && \$this->mpdf->blk[\$this->mpdf->blklvl-1]['bgcolor']) { // Doesn't officially inherit, but default value is transparent (?=inherited)
\t\t\t\t\$cor = \$this->mpdf->blk[\$this->mpdf->blklvl-1]['bgcolorarray' ];
\t\t\t\t\$p['BACKGROUND-COLOR'] = \$this->mpdf->_colAtoString(\$cor);
\t\t\t}
\t\t  }

\t\tif (isset(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['text_indent']) && (\$this->mpdf->blk[\$this->mpdf->blklvl-1]['text_indent'] || \$this->mpdf->blk[\$this->mpdf->blklvl-1]['text_indent']===0)) { \$p['TEXT-INDENT'] = \$this->mpdf->blk[\$this->mpdf->blklvl-1]['text_indent']; }
\t\tif (isset(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['InlineProperties'])) {
\t\t\t\$biilp = \$this->mpdf->blk[\$this->mpdf->blklvl-1]['InlineProperties'];
\t\t}
\t\telse { \$biilp = null; }
\t\tif (isset(\$biilp[ 'family' ]) && \$biilp[ 'family' ]) { \$p['FONT-FAMILY'] = \$biilp[ 'family' ]; }
\t\tif (isset(\$biilp[ 'I' ]) && \$biilp[ 'I' ]) { \$p['FONT-STYLE'] = 'italic'; }
\t\tif (isset(\$biilp[ 'sizePt' ]) && \$biilp[ 'sizePt' ]) { \$p['FONT-SIZE'] = \$biilp[ 'sizePt' ] . 'pt'; }
\t\tif (isset(\$biilp[ 'B' ]) && \$biilp[ 'B' ]) { \$p['FONT-WEIGHT'] = 'bold'; }
\t\tif (isset(\$biilp[ 'colorarray' ]) && \$biilp[ 'colorarray' ]) { 
\t\t\t\$cor = \$biilp[ 'colorarray' ];
\t\t\t\$p['COLOR'] = \$this->mpdf->_colAtoString(\$cor);
\t\t}
\t\tif (isset(\$biilp[ 'fontkerning' ])) {
\t\t\tif (\$biilp[ 'fontkerning' ]) { \$p['FONT-KERNING'] = 'normal'; }
\t\t\telse { \$p['FONT-KERNING'] = 'none'; }
\t\t}
\t\tif (isset(\$biilp[ 'lSpacingCSS' ]) && \$biilp[ 'lSpacingCSS' ]) { \$p['LETTER-SPACING'] = \$biilp[ 'lSpacingCSS' ]; }
\t\tif (isset(\$biilp[ 'wSpacingCSS' ]) && \$biilp[ 'wSpacingCSS' ]) { \$p['WORD-SPACING'] = \$biilp[ 'wSpacingCSS' ]; }\t
\t\tif (isset(\$biilp[ 'toupper' ]) && \$biilp[ 'toupper' ]) { \$p['TEXT-TRANSFORM'] = 'uppercase'; }
\t\telse if (isset(\$biilp[ 'tolower' ]) && \$biilp[ 'tolower' ]) { \$p['TEXT-TRANSFORM'] = 'lowercase'; }
\t\telse if (isset(\$biilp[ 'capitalize' ]) && \$biilp[ 'capitalize' ]) { \$p['TEXT-TRANSFORM'] = 'capitalize'; }
\t\t\t// CSS says text-decoration is not inherited, but IE7 does?? 
\t\tif (isset(\$biilp[ 'underline' ]) && \$biilp[ 'underline' ]) { \$p['TEXT-DECORATION'] = 'underline'; }
\t\tif (isset(\$biilp[ 'smCaps' ]) && \$biilp[ 'smCaps' ]) { \$p['FONT-VARIANT'] = 'small-caps'; }

\t}
\t//===============================================
\t//===============================================
/*-- LISTS --*/
\t// Set Inherited properties
\tif (\$inherit == 'TOPLIST') {
\t\tif (\$this->listCSSlvl == 1) {
\t\t    \$bilp = \$this->mpdf->blk[\$this->mpdf->blklvl]['InlineProperties'];
\t\t    if (isset(\$bilp[ 'family' ]) && \$bilp[ 'family' ]) { \$p['FONT-FAMILY'] = \$bilp[ 'family' ]; }
   \t\t    if (isset(\$bilp[ 'I' ]) && \$bilp[ 'I' ]) { \$p['FONT-STYLE'] = 'italic'; }
   \t\t    if (isset(\$bilp[ 'sizePt' ]) && \$bilp[ 'sizePt' ]) { \$p['FONT-SIZE'] = \$bilp[ 'sizePt' ] . 'pt'; }
   \t\t    if (isset(\$bilp[ 'B' ]) && \$bilp[ 'B' ]) { \$p['FONT-WEIGHT'] = 'bold'; }
   \t\t    if (isset(\$bilp[ 'colorarray' ]) && \$bilp[ 'colorarray' ]) { 
\t\t\t\$cor = \$bilp[ 'colorarray' ];
\t\t\t\$p['COLOR'] = \$this->mpdf->_colAtoString(\$cor);
\t\t    }
\t\t    if (isset(\$bilp[ 'toupper' ]) && \$bilp[ 'toupper' ]) { \$p['TEXT-TRANSFORM'] = 'uppercase'; }
\t\t    else if (isset(\$bilp[ 'tolower' ]) && \$bilp[ 'tolower' ]) { \$p['TEXT-TRANSFORM'] = 'lowercase'; }
\t\t    else if (isset(\$bilp[ 'capitalize' ]) && \$bilp[ 'capitalize' ]) { \$p['TEXT-TRANSFORM'] = 'capitalize'; }
\t\t    if (isset(\$bilp[ 'fontkerning' ])) {
\t\t\tif (\$bilp[ 'fontkerning' ]) { \$p['FONT-KERNING'] = 'normal'; }
\t\t\telse { \$p['FONT-KERNING'] = 'none'; }
\t\t    }
\t\t    if (isset(\$bilp[ 'lSpacingCSS' ]) && \$bilp[ 'lSpacingCSS' ]) { \$p['LETTER-SPACING'] = \$bilp[ 'lSpacingCSS' ]; }
\t\t    if (isset(\$bilp[ 'wSpacingCSS' ]) && \$bilp[ 'wSpacingCSS' ]) { \$p['WORD-SPACING'] = \$bilp[ 'wSpacingCSS' ]; }
\t\t\t// CSS says text-decoration is not inherited, but IE7 does??
\t\t    if (isset(\$bilp[ 'underline' ]) && \$bilp[ 'underline' ]) { \$p['TEXT-DECORATION'] = 'underline'; }
\t\t    if (isset(\$bilp[ 'smCaps' ]) && \$bilp[ 'smCaps' ]) { \$p['FONT-VARIANT'] = 'small-caps'; }
\t\t    if (\$tag=='LI') {
\t\t\t// Note to self - this should never work, as TOPLIST is not called when LI (see code removed in v5.3)
\t\t\t\$this->mpdf->Error(\"If you see this message, please report this as a bug to the mPDF Forum.\");
\t\t    }
\t\t}
\t}
/*-- END LISTS --*/
\t//===============================================
\t//===============================================
\t// DEFAULT for this TAG set in DefaultCSS
\tif (isset(\$this->mpdf->defaultCSS[\$tag])) { 
\t\t\t\$zp = \$this->fixCSS(\$this->mpdf->defaultCSS[\$tag]);
\t\t\tif (is_array(\$zp)) { \t// Default overwrites Inherited
\t\t\t\t\$p = array_merge(\$p,\$zp); \t// !! Note other way round !!
\t\t\t\t\$this->_mergeBorders(\$p,\$zp);
\t\t\t}
\t}
\t//===============================================
/*-- TABLES --*/
\t// mPDF 5.7.3
\t// cellSpacing overwrites TABLE default but not specific CSS set on table
\tif (\$tag=='TABLE' && isset(\$attr['CELLSPACING'])) {
\t\t\$p['BORDER-SPACING-H'] = \$p['BORDER-SPACING-V'] = \$attr['CELLSPACING'];
\t}
\t// cellPadding overwrites TD/TH default but not specific CSS set on cell
\tif ((\$tag=='TD' || \$tag=='TH') && isset(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['cell_padding']) && (\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['cell_padding'] || \$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['cell_padding']==='0')) { \t// mPDF 5.7.3
\t\t\$p['PADDING-LEFT'] = \$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['cell_padding'];
\t\t\$p['PADDING-RIGHT'] = \$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['cell_padding'];
\t\t\$p['PADDING-TOP'] = \$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['cell_padding'];
\t\t\$p['PADDING-BOTTOM'] = \$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['cell_padding'];
\t}
/*-- END TABLES --*/
\t//===============================================
\t// STYLESHEET TAG e.g. h1  p  div  table
\tif (isset(\$this->CSS[\$tag]) && \$this->CSS[\$tag]) { 
\t\t\t\$zp = \$this->CSS[\$tag];
\t\t\tif (\$tag=='TD' || \$tag=='TH')  { \$this->setBorderDominance(\$zp, 9); }\t// *TABLES*\t// *TABLES-ADVANCED-BORDERS*
\t\t\tif (is_array(\$zp)) { 
\t\t\t\t\$p = array_merge(\$p,\$zp); 
\t\t\t\t\$this->_mergeBorders(\$p,\$zp);
\t\t\t}
\t}
\t//===============================================
\t// STYLESHEET CLASS e.g. .smallone{}  .redletter{}
\tforeach(\$classes AS \$class) {
\t\t\t\$zp = array();
\t\t\tif (isset(\$this->CSS['CLASS>>'.\$class]) && \$this->CSS['CLASS>>'.\$class]) { \$zp = \$this->CSS['CLASS>>'.\$class]; }
\t\t\tif (\$tag=='TD' || \$tag=='TH')  { \$this->setBorderDominance(\$zp, 9); }\t// *TABLES*\t// *TABLES-ADVANCED-BORDERS*
\t\t\tif (is_array(\$zp)) { 
\t\t\t\t\$p = array_merge(\$p,\$zp); 
\t\t\t\t\$this->_mergeBorders(\$p,\$zp);
\t\t\t}
\t}
\t//===============================================
/*-- TABLES --*/
\t// STYLESHEET nth-child SELECTOR e.g. tr:nth-child(odd)  td:nth-child(2n+1)
\tif (\$tag=='TR' || \$tag=='TD' || \$tag=='TH')  {
\t\tforeach(\$this->CSS AS \$k=>\$val) {
\t\t\tif (preg_match('/'.\$tag.'>>SELECTORNTHCHILD>>(.*)/',\$k, \$m)) {
\t\t\t\t\$select = false;
\t\t\t\tif (\$tag=='TR')  {
\t\t\t\t\t\$row = \$this->mpdf->row;
\t\t\t\t\t\$thnr = (isset(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_thead']) ? count(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_thead']) : 0);
\t\t\t\t\t\$tfnr = (isset(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_tfoot']) ? count(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_tfoot']) : 0);
\t\t\t\t\tif (\$this->mpdf->tabletfoot) { \$row -= \$thnr; }
\t\t\t\t\telse if (!\$this->mpdf->tablethead) { \$row -= (\$thnr + \$tfnr); }
\t\t\t\t\tif (\$m[1]=='ODD' && (\$row % 2) == 0) { \$select = true; }
\t\t\t\t\telse if (\$m[1]=='EVEN' && (\$row % 2) == 1) { \$select = true; }
\t\t\t\t\telse if (preg_match('/(\\d+)N\\+(\\d+)/',\$m[1],\$a)) {
\t\t\t\t\t\tif (((\$row + 1) % \$a[1]) == \$a[2]) { \$select = true; }
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\telse  if (\$tag=='TD' || \$tag=='TH')  {
\t\t\t\t\tif (\$m[1]=='ODD' && (\$this->mpdf->col % 2) == 0) { \$select = true; }
\t\t\t\t\telse if (\$m[1]=='EVEN' && (\$this->mpdf->col % 2) == 1) { \$select = true; }
\t\t\t\t\telse if (preg_match('/(\\d+)N\\+(\\d+)/',\$m[1],\$a)) {
\t\t\t\t\t\tif (((\$this->mpdf->col+1) % \$a[1]) == \$a[2]) { \$select = true; }
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tif (\$select) {
\t\t\t\t\t\$zp = \$this->CSS[\$tag.'>>SELECTORNTHCHILD>>'.\$m[1]];
\t\t\t\t\tif (\$tag=='TD' || \$tag=='TH')  { \$this->setBorderDominance(\$zp, 9); }
\t\t\t\t\tif (is_array(\$zp)) { 
\t\t\t\t\t\t\$p = array_merge(\$p,\$zp); 
\t\t\t\t\t\t\$this->_mergeBorders(\$p,\$zp);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}
/*-- END TABLES --*/
\t//===============================================
\t// STYLESHEET ID e.g. #smallone{}  #redletter{}
\tif (isset(\$attr['ID']) && isset(\$this->CSS['ID>>'.\$attr['ID']]) && \$this->CSS['ID>>'.\$attr['ID']]) {
\t\t\t\$zp = \$this->CSS['ID>>'.\$attr['ID']];
\t\t\tif (\$tag=='TD' || \$tag=='TH')  { \$this->setBorderDominance(\$zp, 9); }\t// *TABLES*\t// *TABLES-ADVANCED-BORDERS*
\t\t\tif (is_array(\$zp)) { 
\t\t\t\t\$p = array_merge(\$p,\$zp); 
\t\t\t\t\$this->_mergeBorders(\$p,\$zp);
\t\t\t}
\t}
\t//===============================================
\t// STYLESHEET CLASS e.g. p.smallone{}  div.redletter{}
\tforeach(\$classes AS \$class) {
\t\t\t\$zp = array();
\t\t\tif (isset(\$this->CSS[\$tag.'>>CLASS>>'.\$class]) && \$this->CSS[\$tag.'>>CLASS>>'.\$class]) { \$zp = \$this->CSS[\$tag.'>>CLASS>>'.\$class]; }
\t\t\tif (\$tag=='TD' || \$tag=='TH')  { \$this->setBorderDominance(\$zp, 9); }\t// *TABLES*\t// *TABLES-ADVANCED-BORDERS*
\t\t\tif (is_array(\$zp)) { 
\t\t\t\t\$p = array_merge(\$p,\$zp); 
\t\t\t\t\$this->_mergeBorders(\$p,\$zp);
\t\t\t}
\t}
\t//===============================================
\t// STYLESHEET CLASS e.g. p#smallone{}  div#redletter{}
\tif (isset(\$attr['ID']) && isset(\$this->CSS[\$tag.'>>ID>>'.\$attr['ID']]) && \$this->CSS[\$tag.'>>ID>>'.\$attr['ID']]) {
\t\t\t\$zp = \$this->CSS[\$tag.'>>ID>>'.\$attr['ID']];
\t\t\tif (\$tag=='TD' || \$tag=='TH')  { \$this->setBorderDominance(\$zp, 9); }\t// *TABLES*\t// *TABLES-ADVANCED-BORDERS*
\t\t\tif (is_array(\$zp)) { 
\t\t\t\t\$p = array_merge(\$p,\$zp); 
\t\t\t\t\$this->_mergeBorders(\$p,\$zp);
\t\t\t}
\t}
\t//===============================================
\t// Cascaded e.g. div.class p only works for block level
\tif (\$inherit == 'BLOCK') {
\t\t\$this->_set_mergedCSS(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['cascadeCSS'][\$tag], \$p);
\t\tforeach(\$classes AS \$class) {
\t\t\t\$this->_set_mergedCSS(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['cascadeCSS']['CLASS>>'.\$class], \$p);
\t\t}
\t\t\$this->_set_mergedCSS(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['cascadeCSS']['ID>>'.\$attr['ID']], \$p);
\t\tforeach(\$classes AS \$class) {
\t\t\t\$this->_set_mergedCSS(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['cascadeCSS'][\$tag.'>>CLASS>>'.\$class], \$p);
\t\t}
\t\t\$this->_set_mergedCSS(\$this->mpdf->blk[\$this->mpdf->blklvl-1]['cascadeCSS'][\$tag.'>>ID>>'.\$attr['ID']], \$p);
\t}
\telse if (\$inherit == 'INLINE') {
\t\t\$this->_set_mergedCSS(\$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS'][\$tag], \$p);
\t\tforeach(\$classes AS \$class) {
\t\t\t\$this->_set_mergedCSS(\$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS']['CLASS>>'.\$class], \$p);
\t\t}
\t\t\$this->_set_mergedCSS(\$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS']['ID>>'.\$attr['ID']], \$p);
\t\tforeach(\$classes AS \$class) {
\t\t\t\$this->_set_mergedCSS(\$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS'][\$tag.'>>CLASS>>'.\$class], \$p);
\t\t}
\t\t\$this->_set_mergedCSS(\$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS'][\$tag.'>>ID>>'.\$attr['ID']], \$p);
\t}
/*-- TABLES --*/
\telse if (\$inherit == 'TOPTABLE' || \$inherit == 'TABLE') { // NB looks at \$this->tablecascadeCSS-1 for cascading CSS
\t\t// false, 9 = don't check for 'depth' and do set border dominance
\t\t\$this->_set_mergedCSS(\$this->tablecascadeCSS[\$this->tbCSSlvl-1][\$tag], \$p, false, 9);
\t\tforeach(\$classes AS \$class) {
\t\t\t\$this->_set_mergedCSS(\$this->tablecascadeCSS[\$this->tbCSSlvl-1]['CLASS>>'.\$class], \$p, false, 9);
\t\t}
\t\t// STYLESHEET nth-child SELECTOR e.g. tr:nth-child(odd)  td:nth-child(2n+1)
\t\tif (\$tag=='TR' || \$tag=='TD' || \$tag=='TH')  {
\t\t\tforeach(\$this->tablecascadeCSS[\$this->tbCSSlvl-1] AS \$k=>\$val) {
\t\t\t\tif (preg_match('/'.\$tag.'>>SELECTORNTHCHILD>>(.*)/',\$k, \$m)) {
\t\t\t\t\t\$select = false;
\t\t\t\t\tif (\$tag=='TR')  {
\t\t\t\t\t\t\$row = \$this->mpdf->row;
\t\t\t\t\t\t\$thnr = (isset(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_thead']) ? count(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_thead']) : 0);
\t\t\t\t\t\t\$tfnr = (isset(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_tfoot']) ? count(\$this->mpdf->table[\$this->mpdf->tableLevel][\$this->mpdf->tbctr[\$this->mpdf->tableLevel]]['is_tfoot']) : 0);
\t\t\t\t\t\tif (\$this->mpdf->tabletfoot) { \$row -= \$thnr; }
\t\t\t\t\t\telse if (!\$this->mpdf->tablethead) { \$row -= (\$thnr + \$tfnr); }
\t\t\t\t\t\tif (\$m[1]=='ODD' && (\$row % 2) == 0) { \$select = true; }
\t\t\t\t\t\telse if (\$m[1]=='EVEN' && (\$row % 2) == 1) { \$select = true; }
\t\t\t\t\t\telse if (preg_match('/(\\d+)N\\+(\\d+)/',\$m[1],\$a)) {
\t\t\t\t\t\t\tif (((\$row + 1) % \$a[1]) == \$a[2]) { \$select = true; }
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\telse if (\$tag=='TD' || \$tag=='TH')  {
\t\t\t\t\t\tif (\$m[1]=='ODD' && (\$this->mpdf->col % 2) == 0) { \$select = true; }
\t\t\t\t\t\telse if (\$m[1]=='EVEN' && (\$this->mpdf->col % 2) == 1) { \$select = true; }
\t\t\t\t\t\telse if (preg_match('/(\\d+)N\\+(\\d+)/',\$m[1],\$a)) {
\t\t\t\t\t\t\tif (((\$this->mpdf->col + 1) % \$a[1]) == \$a[2]) { \$select = true; }
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t\tif (\$select) {
\t\t\t\t\t\t\$this->_set_mergedCSS(\$this->tablecascadeCSS[\$this->tbCSSlvl-1][\$tag.'>>SELECTORNTHCHILD>>'.\$m[1]], \$p, false, 9);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t\$this->_set_mergedCSS(\$this->tablecascadeCSS[\$this->tbCSSlvl-1]['ID>>'.\$attr['ID']], \$p, false, 9);
\t\tforeach(\$classes AS \$class) {
\t\t\t\$this->_set_mergedCSS(\$this->tablecascadeCSS[\$this->tbCSSlvl-1][\$tag.'>>CLASS>>'.\$class], \$p, false, 9);
\t\t}
\t\t\$this->_set_mergedCSS(\$this->tablecascadeCSS[\$this->tbCSSlvl-1][\$tag.'>>ID>>'.\$attr['ID']], \$p, false, 9);
\t}
/*-- END TABLES --*/
\t//===============================================
/*-- LISTS --*/
\telse if (\$inherit == 'TOPLIST' || \$inherit == 'LIST') { // NB looks at \$this->listcascadeCSS-1 for cascading CSS
\t\t// false = don't check for 'depth' 
\t\t\$this->_set_mergedCSS(\$this->listcascadeCSS[\$this->listCSSlvl-1][\$tag], \$p, false);
\t\tforeach(\$classes AS \$class) {
\t\t\t\$this->_set_mergedCSS(\$this->listcascadeCSS[\$this->listCSSlvl-1]['CLASS>>'.\$class], \$p, false);
\t\t}
\t\t\$this->_set_mergedCSS(\$this->listcascadeCSS[\$this->listCSSlvl-1]['ID>>'.\$attr['ID']], \$p, false);
\t\tforeach(\$classes AS \$class) {
\t\t\t\$this->_set_mergedCSS(\$this->listcascadeCSS[\$this->listCSSlvl-1][\$tag.'>>CLASS>>'.\$class], \$p, false);
\t\t}
\t\t\$this->_set_mergedCSS(\$this->listcascadeCSS[\$this->listCSSlvl-1][\$tag.'>>ID>>'.\$attr['ID']], \$p, false);
\t}
/*-- END LISTS --*/
\t//===============================================
\t//===============================================
\t// INLINE STYLE e.g. style=\"CSS:property\"
\tif (isset(\$attr['STYLE'])) {
\t\t\t\$zp = \$this->readInlineCSS(\$attr['STYLE']);
\t\t\tif (\$tag=='TD' || \$tag=='TH')  { \$this->setBorderDominance(\$zp, 9); }\t// *TABLES*\t// *TABLES-ADVANCED-BORDERS*
\t\t\tif (is_array(\$zp)) { 
\t\t\t\t\$p = array_merge(\$p,\$zp); 
\t\t\t\t\$this->_mergeBorders(\$p,\$zp);
\t\t\t}
\t}
\t//===============================================
\t//===============================================
\t// INLINE ATTRIBUTES e.g. .. ALIGN=\"CENTER\">
\tif (isset(\$attr['LANG']) and \$attr['LANG']!='') {
\t\t\t\$p['LANG'] = \$attr['LANG'];
\t}
\tif (isset(\$attr['COLOR']) and \$attr['COLOR']!='') {
\t\t\t\$p['COLOR'] = \$attr['COLOR'];
\t}
\tif (\$tag != 'INPUT') {
\t\tif (isset(\$attr['WIDTH']) and \$attr['WIDTH']!='') {
\t\t\t\$p['WIDTH'] = \$attr['WIDTH'];
\t\t}
\t\tif (isset(\$attr['HEIGHT']) and \$attr['HEIGHT']!='') {
\t\t\t\$p['HEIGHT'] = \$attr['HEIGHT'];
\t\t}
\t}
\tif (\$tag == 'FONT') {
\t\tif (isset(\$attr['FACE'])) {
\t\t\t\$p['FONT-FAMILY'] = \$attr['FACE'];
\t\t}
\t\tif (isset(\$attr['SIZE']) and \$attr['SIZE']!='') {
\t\t\t\$s = '';
\t\t\tif (\$attr['SIZE'] === '+1') { \$s = '120%'; }
\t\t\telse if (\$attr['SIZE'] === '-1') { \$s = '86%'; }
\t\t\telse if (\$attr['SIZE'] === '1') { \$s = 'XX-SMALL'; }
\t\t\telse if (\$attr['SIZE'] == '2') { \$s = 'X-SMALL'; }
\t\t\telse if (\$attr['SIZE'] == '3') { \$s = 'SMALL'; }
\t\t\telse if (\$attr['SIZE'] == '4') { \$s = 'MEDIUM'; }
\t\t\telse if (\$attr['SIZE'] == '5') { \$s = 'LARGE'; }
\t\t\telse if (\$attr['SIZE'] == '6') { \$s = 'X-LARGE'; }
\t\t\telse if (\$attr['SIZE'] == '7') { \$s = 'XX-LARGE'; }
\t\t\tif (\$s) \$p['FONT-SIZE'] = \$s;
\t\t}
\t}
\tif (isset(\$attr['VALIGN']) and \$attr['VALIGN']!='') {
\t\t\$p['VERTICAL-ALIGN'] = \$attr['VALIGN'];
\t}
\tif (isset(\$attr['VSPACE']) and \$attr['VSPACE']!='') {
\t\t\$p['MARGIN-TOP'] = \$attr['VSPACE'];
\t\t\$p['MARGIN-BOTTOM'] = \$attr['VSPACE'];
\t}
\tif (isset(\$attr['HSPACE']) and \$attr['HSPACE']!='') {
\t\t\$p['MARGIN-LEFT'] = \$attr['HSPACE'];
\t\t\$p['MARGIN-RIGHT'] = \$attr['HSPACE'];
\t}
\t//===============================================
\treturn \$p;
}

function PreviewBlockCSS(\$tag,\$attr) {
\t// Looks ahead from current block level to a new level
\t\$p = array();
\t\$zp = array(); 
\t\$oldcascadeCSS = \$this->mpdf->blk[\$this->mpdf->blklvl]['cascadeCSS'];
\t\$classes = array();
\tif (isset(\$attr['CLASS'])) { \$classes = preg_split('/\\s+/',\$attr['CLASS']); }
\t//===============================================
\t// DEFAULT for this TAG set in DefaultCSS
\tif (isset(\$this->mpdf->defaultCSS[\$tag])) { 
\t\t\$zp = \$this->fixCSS(\$this->mpdf->defaultCSS[\$tag]);
\t\tif (is_array(\$zp)) { \$p = array_merge(\$zp,\$p); }\t// Inherited overwrites default
\t}
\t// STYLESHEET TAG e.g. h1  p  div  table
\tif (isset(\$this->CSS[\$tag])) { 
\t\t\$zp = \$this->CSS[\$tag];
\t\tif (is_array(\$zp)) { \$p = array_merge(\$p,\$zp); }
\t}
\t// STYLESHEET CLASS e.g. .smallone{}  .redletter{}
\tforeach(\$classes AS \$class) {
\t\t\$zp = array(); 
\t\tif (isset(\$this->CSS['CLASS>>'.\$class])) { \$zp = \$this->CSS['CLASS>>'.\$class]; }
\t\tif (is_array(\$zp)) { \$p = array_merge(\$p,\$zp); }
\t}
\t// STYLESHEET ID e.g. #smallone{}  #redletter{}
\tif (isset(\$attr['ID']) && isset(\$this->CSS['ID>>'.\$attr['ID']])) {
\t\t\$zp = \$this->CSS['ID>>'.\$attr['ID']];
\t\tif (is_array(\$zp)) { \$p = array_merge(\$p,\$zp); }
\t}
\t// STYLESHEET CLASS e.g. p.smallone{}  div.redletter{}
\tforeach(\$classes AS \$class) {
\t\t\$zp = array(); 
\t\tif (isset(\$this->CSS[\$tag.'>>CLASS>>'.\$class])) { \$zp = \$this->CSS[\$tag.'>>CLASS>>'.\$class]; }
\t\tif (is_array(\$zp)) { \$p = array_merge(\$p,\$zp); }
\t}
\t// STYLESHEET CLASS e.g. p#smallone{}  div#redletter{}
\tif (isset(\$attr['ID']) && isset(\$this->CSS[\$tag.'>>ID>>'.\$attr['ID']])) {
\t\t\$zp = \$this->CSS[\$tag.'>>ID>>'.\$attr['ID']];
\t\tif (is_array(\$zp)) { \$p = array_merge(\$p,\$zp); }
\t}
\t//===============================================
\t// STYLESHEET TAG e.g. div h1    div p

\t\$this->_set_mergedCSS(\$oldcascadeCSS[\$tag], \$p);
\t// STYLESHEET CLASS e.g. .smallone{}  .redletter{}
\tforeach(\$classes AS \$class) {
\t  
\t  \$this->_set_mergedCSS(\$oldcascadeCSS['CLASS>>'.\$class], \$p);
\t}
\t// STYLESHEET CLASS e.g. #smallone{}  #redletter{}
\tif (isset(\$attr['ID'])) {
\t  
\t  \$this->_set_mergedCSS(\$oldcascadeCSS['ID>>'.\$attr['ID']], \$p);
\t}
\t// STYLESHEET CLASS e.g. div.smallone{}  p.redletter{}
\tforeach(\$classes AS \$class) {
\t  
\t  \$this->_set_mergedCSS(\$oldcascadeCSS[\$tag.'>>CLASS>>'.\$class], \$p);
\t}
\t// STYLESHEET CLASS e.g. div#smallone{}  p#redletter{}
\tif (isset(\$attr['ID'])) {
\t  
\t  \$this->_set_mergedCSS(\$oldcascadeCSS[\$tag.'>>ID>>'.\$attr['ID']], \$p);
\t}
\t//===============================================
\t// INLINE STYLE e.g. style=\"CSS:property\"
\tif (isset(\$attr['STYLE'])) {
\t\t\$zp = \$this->readInlineCSS(\$attr['STYLE']);
\t\tif (is_array(\$zp)) { \$p = array_merge(\$p,\$zp); }
\t}
\t//===============================================
\treturn \$p;
}





}\t// end of class

?>";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/classes/cssmgr.php";
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
        return new Twig_Source("", "support/include/mpdf/classes/cssmgr.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\mpdf\\classes\\cssmgr.php");
    }
}
