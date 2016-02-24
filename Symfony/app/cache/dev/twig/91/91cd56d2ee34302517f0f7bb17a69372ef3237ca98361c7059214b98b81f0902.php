<?php

/* support/include/mpdf/classes/cssmgr.php */
class __TwigTemplate_3427f972db4786eb57063656ec3719bede956291cb5fd49094294ba364eb1611 extends Twig_Template
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
        $__internal_317b3e4ef2b84b33635ab1851b2e1c55664f9ddbea4f0098e85f1d14c0bb69be = $this->env->getExtension("native_profiler");
        $__internal_317b3e4ef2b84b33635ab1851b2e1c55664f9ddbea4f0098e85f1d14c0bb69be->enter($__internal_317b3e4ef2b84b33635ab1851b2e1c55664f9ddbea4f0098e85f1d14c0bb69be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/mpdf/classes/cssmgr.php"));

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
        
        $__internal_317b3e4ef2b84b33635ab1851b2e1c55664f9ddbea4f0098e85f1d14c0bb69be->leave($__internal_317b3e4ef2b84b33635ab1851b2e1c55664f9ddbea4f0098e85f1d14c0bb69be_prof);

    }

    public function getTemplateName()
    {
        return "support/include/mpdf/classes/cssmgr.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* class cssmgr {*/
/* */
/* var $mpdf = null;*/
/* */
/* var $tablecascadeCSS;*/
/* var $listcascadeCSS;*/
/* var $cascadeCSS;*/
/* var $CSS;*/
/* var $tbCSSlvl;*/
/* var $listCSSlvl;*/
/* */
/* */
/* function cssmgr(&$mpdf) {*/
/* 	$this->mpdf = $mpdf;*/
/* 	$this->tablecascadeCSS = array();*/
/* 	$this->listcascadeCSS = array();*/
/* 	$this->CSS=array();*/
/* 	$this->cascadeCSS = array();*/
/* 	$this->tbCSSlvl = 0;*/
/* 	$this->listCSSlvl = 0;*/
/* }*/
/* */
/* */
/* function ReadDefaultCSS($CSSstr) {*/
/* 	$CSS = array();*/
/* 	$CSSstr = preg_replace('|/\*.*?\*//* |s',' ',$CSSstr);*/
/* 	$CSSstr = preg_replace('/[\s\n\r\t\f]/s',' ',$CSSstr);*/
/* 	$CSSstr = preg_replace('/(<\!\-\-|\-\->)/s',' ',$CSSstr);*/
/* 	if ($CSSstr ) {*/
/* 		preg_match_all('/(.*?)\{(.*?)\}/',$CSSstr,$styles);*/
/* 		for($i=0; $i < count($styles[1]) ; $i++)  {*/
/* 			$stylestr= trim($styles[2][$i]);*/
/* 			$stylearr = explode(';',$stylestr);*/
/* 			foreach($stylearr AS $sta) {*/
/* 				if (trim($sta)) {*/
/* 					// Changed to allow style="background: url('http://www.bpm1.com/bg.jpg')"*/
/* 					list($property,$value) = explode(':',$sta,2);*/
/* 					$property = trim($property);*/
/* 					$value = preg_replace('/\s*!important/i','',$value);*/
/* 					$value = trim($value);*/
/* 					if ($property && ($value || $value==='0')) {*/
/* 	  					$classproperties[strtoupper($property)] = $value;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			$classproperties = $this->fixCSS($classproperties);*/
/* 			$tagstr = strtoupper(trim($styles[1][$i]));*/
/* 			$tagarr = explode(',',$tagstr);*/
/* 			foreach($tagarr AS $tg) {*/
/* 				$tags = preg_split('/\s+/',trim($tg));*/
/* 				$level = count($tags);*/
/* 				if ($level == 1) {		// e.g. p or .class or #id or p.class or p#id*/
/* 					$t = trim($tags[0]);*/
/* 					if ($t) {*/
/* 						$tag = '';*/
/* 						if (preg_match('/^('.$this->mpdf->allowedCSStags.')$/',$t)) { $tag= $t; }*/
/* 						if ($this->CSS[$tag] && $tag) { $CSS[$tag] = $this->array_merge_recursive_unique($CSS[$tag], $classproperties); }*/
/* 						else if ($tag) { $CSS[$tag] = $classproperties; }*/
/* 					}*/
/* 				}*/
/* 			}*/
/*   			$properties = array();*/
/*   			$values = array();*/
/*   			$classproperties = array();*/
/* 		}*/
/* */
/* 	} // end of if*/
/* 	return $CSS;*/
/* }*/
/* */
/* */
/* */
/* function ReadCSS($html) {*/
/* 	preg_match_all('/<style[^>]*media=["\']([^"\'>]*)["\'].*?<\/style>/is',$html,$m);*/
/* 	for($i=0; $i<count($m[0]); $i++) {*/
/* 		if ($this->mpdf->CSSselectMedia && !preg_match('/('.trim($this->mpdf->CSSselectMedia).'|all)/i',$m[1][$i])) { */
/* 			$html = preg_replace('/'.preg_quote($m[0][$i],'/').'/','',$html);*/
/* 		}*/
/* 	}*/
/* 	preg_match_all('/<link[^>]*media=["\']([^"\'>]*)["\'].*?>/is',$html,$m);*/
/* 	for($i=0; $i<count($m[0]); $i++) {*/
/* 		if ($this->mpdf->CSSselectMedia && !preg_match('/('.trim($this->mpdf->CSSselectMedia).'|all)/i',$m[1][$i])) { */
/* 			$html = preg_replace('/'.preg_quote($m[0][$i],'/').'/','',$html);*/
/* 		}*/
/* 	}*/
/* */
/* 	// mPDF 5.5.02*/
/* 	// Remove Comment tags <!-- ... --> inside CSS as <style> in HTML document*/
/* 	// Remove Comment tags /* ...  *//*  inside CSS as <style> in HTML document*/
/* 	// But first, we replace upper and mixed case closing style tag with lower*/
/* 	// case so we can use str_replace later.*/
/* 	preg_replace('/<\/style>/i', '</style>', $html);*/
/* 	preg_match_all('/<style.*?>(.*?)<\/style>/si',$html,$m);*/
/* 	if (count($m[1])) { */
/* 		for($i=0;$i<count($m[1]);$i++) {*/
/* 			// Remove comment tags */
/* 			$sub = preg_replace('/(<\!\-\-|\-\->)/s',' ',$m[1][$i]);*/
/* 			$sub = '>'.preg_replace('|/\*.*?\*//* |s',' ',$sub).'</style>';*/
/* 			$html = str_replace('>'.$m[1][$i].'</style>', $sub, $html);*/
/* 		}*/
/* 	}*/
/* */
/* */
/* 	$html = preg_replace('/<!--mpdf/i','',$html);*/
/* 	$html = preg_replace('/mpdf-->/i','',$html);*/
/* 	$html = preg_replace('/<\!\-\-.*?\-\->/s',' ',$html);*/
/* */
/* 	$match = 0; // no match for instance*/
/* 	$regexp = ''; // This helps debugging: showing what is the REAL string being processed*/
/* 	$CSSext = array(); */
/* */
/* 	//CSS inside external files*/
/* 	$regexp = '/<link[^>]*rel=["\']stylesheet["\'][^>]*href=["\']([^>"\']*)["\'].*?>/si';*/
/* 	$x = preg_match_all($regexp,$html,$cxt);*/
/* 	if ($x) { */
/* 		$match += $x; */
/* 		$CSSext = $cxt[1];*/
/* 	}*/
/* */
/* 	$regexp = '/<link[^>]*href=["\']([^>"\']*)["\'][^>]*?rel=["\']stylesheet["\'].*?>/si';*/
/* 	$x = preg_match_all($regexp,$html,$cxt);*/
/* 	if ($x) { */
/* 		$match += $x; */
/* 		$CSSext = array_merge($CSSext,$cxt[1]);*/
/* 	}*/
/* */
/* 	// look for @import stylesheets*/
/* 	//$regexp = '/@import url\([\'\"]{0,1}([^\)]*?\.css)[\'\"]{0,1}\)/si';*/
/* 	$regexp = '/@import url\([\'\"]{0,1}([^\)]*?\.css(\?\S+)?)[\'\"]{0,1}\)/si';*/
/* 	$x = preg_match_all($regexp,$html,$cxt);*/
/* 	if ($x) { */
/* 		$match += $x; */
/* 		$CSSext = array_merge($CSSext,$cxt[1]);*/
/* 	}*/
/* */
/* 	// look for @import without the url()*/
/* 	//$regexp = '/@import [\'\"]{0,1}([^;]*?\.css)[\'\"]{0,1}/si';*/
/* 	$regexp = '/@import [\'\"]{0,1}([^;]*?\.css(\?\S+)?)[\'\"]{0,1}/si';*/
/* 	$x = preg_match_all($regexp,$html,$cxt);*/
/* 	if ($x) { */
/* 		$match += $x; */
/* 		$CSSext = array_merge($CSSext,$cxt[1]);*/
/* 	}*/
/* */
/* 	$ind = 0;*/
/* 	$CSSstr = '';*/
/* */
/* 	if (!is_array($this->cascadeCSS)) $this->cascadeCSS = array();*/
/* */
/* 	while($match){*/
/* 		$path = $CSSext[$ind];*/
/* 		$this->mpdf->GetFullPath($path); */
/* 		$CSSextblock = $this->mpdf->_get_file($path);*/
/* 		if ($CSSextblock) {*/
/* 			// look for embedded @import stylesheets in other stylesheets*/
/* 			// and fix url paths (including background-images) relative to stylesheet*/
/* 			//$regexpem = '/@import url\([\'\"]{0,1}(.*?\.css)[\'\"]{0,1}\)/si';*/
/* 			$regexpem = '/@import url\([\'\"]{0,1}(.*?\.css(\?\S+)?)[\'\"]{0,1}\)/si';*/
/* 			$xem = preg_match_all($regexpem,$CSSextblock,$cxtem);*/
/* 			$cssBasePath = preg_replace('/\/[^\/]*$/','',$path) . '/';*/
/* 			if ($xem) { */
/* 				foreach($cxtem[1] AS $cxtembedded) {*/
/* 					// path is relative to original stlyesheet!!*/
/* 					$this->mpdf->GetFullPath($cxtembedded, $cssBasePath );*/
/* 					$match++; */
/* 					$CSSext[] = $cxtembedded;*/
/* 				}*/
/* 			}*/
/* 			$regexpem = '/(background[^;]*url\s*\(\s*[\'\"]{0,1})([^\)\'\"]*)([\'\"]{0,1}\s*\))/si';*/
/* 			$xem = preg_match_all($regexpem,$CSSextblock,$cxtem);*/
/* 			if ($xem) { */
/* 				for ($i=0;$i<count($cxtem[0]);$i++) {*/
/* 					// path is relative to original stlyesheet!!*/
/* 					$embedded = $cxtem[2][$i];*/
/* 					if (!preg_match('/^data:image/i', $embedded)) {	// mPDF 5.5.13*/
/* 						$this->mpdf->GetFullPath($embedded, $cssBasePath );*/
/* 						$CSSextblock = preg_replace('/'.preg_quote($cxtem[0][$i],'/').'/', ($cxtem[1][$i].$embedded.$cxtem[3][$i]), $CSSextblock);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			$CSSstr .= ' '.$CSSextblock;*/
/* 		}*/
/* 		$match--;*/
/* 		$ind++;*/
/* 	} //end of match*/
/* */
/* 	$match = 0; // reset value, if needed*/
/* 	// CSS as <style> in HTML document*/
/* 	$regexp = '/<style.*?>(.*?)<\/style>/si'; */
/* 	$match = preg_match_all($regexp,$html,$CSSblock);*/
/* 	if ($match) {*/
/* 		$tmpCSSstr = implode(' ',$CSSblock[1]);*/
/* 		$regexpem = '/(background[^;]*url\s*\(\s*[\'\"]{0,1})([^\)\'\"]*)([\'\"]{0,1}\s*\))/si';*/
/* 		$xem = preg_match_all($regexpem,$tmpCSSstr ,$cxtem);*/
/* 		if ($xem) { */
/* 		   for ($i=0;$i<count($cxtem[0]);$i++) {*/
/* 			$embedded = $cxtem[2][$i];*/
/* 			if (!preg_match('/^data:image/i', $embedded)) {	// mPDF 5.5.13*/
/* 				$this->mpdf->GetFullPath($embedded);*/
/* 				$tmpCSSstr = preg_replace('/'.preg_quote($cxtem[0][$i],'/').'/', ($cxtem[1][$i].$embedded.$cxtem[3][$i]), $tmpCSSstr );*/
/* 			}*/
/* 		   }*/
/* 		}*/
/* 		$CSSstr .= ' '.$tmpCSSstr;*/
/* 	}*/
/* 	// Remove comments*/
/* 	$CSSstr = preg_replace('|/\*.*?\*//* |s',' ',$CSSstr);*/
/* 	$CSSstr = preg_replace('/[\s\n\r\t\f]/s',' ',$CSSstr);*/
/* */
/* 	if (preg_match('/@media/',$CSSstr)) { */
/* 		preg_match_all('/@media(.*?)\{(([^\{\}]*\{[^\{\}]*\})+)\s*\}/is',$CSSstr,$m);*/
/* 		for($i=0; $i<count($m[0]); $i++) {*/
/* 			if ($this->mpdf->CSSselectMedia && !preg_match('/('.trim($this->mpdf->CSSselectMedia).'|all)/i',$m[1][$i])) { */
/* 				$CSSstr = preg_replace('/'.preg_quote($m[0][$i],'/').'/','',$CSSstr);*/
/* 			}*/
/* 			else {*/
/* 				$CSSstr = preg_replace('/'.preg_quote($m[0][$i],'/').'/',' '.$m[2][$i].' ',$CSSstr);*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	// Replace any background: url(data:image... with temporary image file reference*/
/* 	preg_match_all("/(url\(data:image\/(jpeg|gif|png);base64,(.*?)\))/si", $CSSstr, $idata);	// mPDF 5.7.2*/
/* 	if (count($idata[0])) { */
/* 		for($i=0;$i<count($idata[0]);$i++) {*/
/* 			$file = _MPDF_TEMP_PATH.'_tempCSSidata'.RAND(1,10000).'_'.$i.'.'.$idata[2][$i];*/
/* 			//Save to local file*/
/* 			file_put_contents($file, base64_decode($idata[3][$i]));*/
/* 			// $this->mpdf->GetFullPath($file);	// ? is this needed - NO  mPDF 5.6.03*/
/* 			$CSSstr = str_replace($idata[0][$i], 'url("'.$file.'")', $CSSstr); 	// mPDF 5.5.17*/
/* 		}*/
/* 	}*/
/* */
/* 	$CSSstr = preg_replace('/(<\!\-\-|\-\->)/s',' ',$CSSstr);*/
/* 	if ($CSSstr ) {*/
/* 		preg_match_all('/(.*?)\{(.*?)\}/',$CSSstr,$styles);*/
/* 		for($i=0; $i < count($styles[1]) ; $i++)  {*/
/* 			// SET array e.g. $classproperties['COLOR'] = '#ffffff';*/
/* 	 		$stylestr= trim($styles[2][$i]);*/
/* 			$stylearr = explode(';',$stylestr);*/
/* 			foreach($stylearr AS $sta) {*/
/* 				if (trim($sta)) { */
/* 					// Changed to allow style="background: url('http://www.bpm1.com/bg.jpg')"*/
/* 					list($property,$value) = explode(':',$sta,2);*/
/* 					$property = trim($property);*/
/* 					$value = preg_replace('/\s*!important/i','',$value);*/
/* 					$value = trim($value);*/
/* 					if ($property && ($value || $value==='0')) {*/
/* 					// Ignores -webkit-gradient so doesn't override -moz-*/
/* 						if ((strtoupper($property)=='BACKGROUND-IMAGE' || strtoupper($property)=='BACKGROUND') && preg_match('/-webkit-gradient/i',$value)) { */
/* 							continue; */
/* 						}*/
/* 	  					$classproperties[strtoupper($property)] = $value;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			$classproperties = $this->fixCSS($classproperties);*/
/* 			$tagstr = strtoupper(trim($styles[1][$i]));*/
/* 			$tagarr = explode(',',$tagstr);*/
/* 			$pageselectors = false;	// used to turn on $this->mpdf->mirrorMargins*/
/* 			foreach($tagarr AS $tg) {*/
/* 				$tags = preg_split('/\s+/',trim($tg));*/
/* 				$level = count($tags);*/
/* 				$t = '';*/
/* 				$t2 = '';*/
/* 				$t3 = '';*/
/* 				if (trim($tags[0])=='@PAGE') {*/
/* 					if (isset($tags[0])) { $t = trim($tags[0]); }*/
/* 					if (isset($tags[1])) { $t2 = trim($tags[1]); }*/
/* 					if (isset($tags[2])) { $t3 = trim($tags[2]); }*/
/* 					$tag = '';*/
/* 					if ($level==1) { $tag = $t; }*/
/* 					else if ($level==2 && preg_match('/^[:](.*)$/',$t2,$m)) { */
/* 						$tag = $t.'>>PSEUDO>>'.$m[1]; */
/* 						if ($m[1]=='LEFT' || $m[1]=='RIGHT') { $pageselectors = true; }	// used to turn on $this->mpdf->mirrorMargins */
/* 					}*/
/* 					else if ($level==2) { $tag = $t.'>>NAMED>>'.$t2; }*/
/* 					else if ($level==3 && preg_match('/^[:](.*)$/',$t3,$m)) { */
/* 						$tag = $t.'>>NAMED>>'.$t2.'>>PSEUDO>>'.$m[1]; */
/* 						if ($m[1]=='LEFT' || $m[1]=='RIGHT') { $pageselectors = true; }	// used to turn on $this->mpdf->mirrorMargins*/
/* 					}*/
/* 					if (isset($this->CSS[$tag]) && $tag) { $this->CSS[$tag] = $this->array_merge_recursive_unique($this->CSS[$tag], $classproperties); }*/
/* 					else if ($tag) { $this->CSS[$tag] = $classproperties; }*/
/* 				}*/
/* */
/* 				else if ($level == 1) {		// e.g. p or .class or #id or p.class or p#id*/
/* 				if (isset($tags[0])) { $t = trim($tags[0]); }*/
/* 					if ($t) {*/
/* 						$tag = '';*/
/* 						if (preg_match('/^[.](.*)$/',$t,$m)) { $tag = 'CLASS>>'.$m[1]; }*/
/* 						else if (preg_match('/^[#](.*)$/',$t,$m)) { $tag = 'ID>>'.$m[1]; }*/
/* 						else if (preg_match('/^('.$this->mpdf->allowedCSStags.')[.](.*)$/',$t,$m)) { $tag = $m[1].'>>CLASS>>'.$m[2]; }*/
/* 						else if (preg_match('/^('.$this->mpdf->allowedCSStags.')\s*:NTH-CHILD\((.*)\)$/',$t,$m)) { $tag = $m[1].'>>SELECTORNTHCHILD>>'.$m[2]; }*/
/* 						else if (preg_match('/^('.$this->mpdf->allowedCSStags.')[#](.*)$/',$t,$m)) { $tag = $m[1].'>>ID>>'.$m[2]; }*/
/* 						else if (preg_match('/^('.$this->mpdf->allowedCSStags.')$/',$t)) { $tag= $t; }*/
/* 						if (isset($this->CSS[$tag]) && $tag) { $this->CSS[$tag] = $this->array_merge_recursive_unique($this->CSS[$tag], $classproperties); }*/
/* 						else if ($tag) { $this->CSS[$tag] = $classproperties; }*/
/* 					}*/
/* 				}*/
/* 				else {*/
/* 					$tmp = array();*/
/* 					for($n=0;$n<$level;$n++) {*/
/* 						if (isset($tags[$n])) { $t = trim($tags[$n]); }*/
/* 						else { $t = ''; }*/
/* 						if ($t) {*/
/* 							$tag = '';*/
/* 							if (preg_match('/^[.](.*)$/',$t,$m)) { $tag = 'CLASS>>'.$m[1]; }*/
/* 							else if (preg_match('/^[#](.*)$/',$t,$m)) { $tag = 'ID>>'.$m[1]; }*/
/* 							else if (preg_match('/^('.$this->mpdf->allowedCSStags.')[.](.*)$/',$t,$m)) { $tag = $m[1].'>>CLASS>>'.$m[2]; }*/
/* 							else if (preg_match('/^('.$this->mpdf->allowedCSStags.')\s*:NTH-CHILD\((.*)\)$/',$t,$m)) { $tag = $m[1].'>>SELECTORNTHCHILD>>'.$m[2]; }*/
/* 							else if (preg_match('/^('.$this->mpdf->allowedCSStags.')[#](.*)$/',$t,$m)) { $tag = $m[1].'>>ID>>'.$m[2]; }*/
/* 							else if (preg_match('/^('.$this->mpdf->allowedCSStags.')$/',$t)) { $tag= $t; }*/
/* */
/* 							if ($tag) $tmp[] = $tag;*/
/* 							else { break; }*/
/* 						}*/
/* 					}*/
/* 		   */
/* 					if ($tag) {*/
/* 						$x = &$this->cascadeCSS; */
/* 						foreach($tmp AS $tp) { $x = &$x[$tp]; }*/
/* 						$x = $this->array_merge_recursive_unique($x, $classproperties); */
/* 						$x['depth'] = $level;*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			if ($pageselectors) { $this->mpdf->mirrorMargins = true; }*/
/*   			$properties = array();*/
/*   			$values = array();*/
/*   			$classproperties = array();*/
/* 		}*/
/* 	} // end of if*/
/* 	//Remove CSS (tags and content), if any*/
/* 	$regexp = '/<style.*?>(.*?)<\/style>/si'; // it can be <style> or <style type="txt/css"> */
/* 	$html = preg_replace($regexp,'',$html);*/
/* //print_r($this->CSS); exit;*/
/* //print_r($this->cascadeCSS); exit;*/
/* 	return $html;*/
/* }*/
/* */
/* */
/* */
/* function readInlineCSS($html) {*/
/* 	//Fix incomplete CSS code*/
/* 	$size = strlen($html)-1;*/
/* 	if (substr($html,$size,1) != ';') $html .= ';';*/
/* 	//Make CSS[Name-of-the-class] = array(key => value)*/
/* 	$regexp = '|\\s*?(\\S+?):(.+?);|i';*/
/* 	preg_match_all( $regexp, $html, $styleinfo);*/
/* 	$properties = $styleinfo[1];*/
/* 	$values = $styleinfo[2];*/
/* 	//Array-properties and Array-values must have the SAME SIZE!*/
/* 	$classproperties = array();*/
/* 	for($i = 0; $i < count($properties) ; $i++) {*/
/* 		// Ignores -webkit-gradient so doesn't override -moz-*/
/* 		if ((strtoupper($properties[$i])=='BACKGROUND-IMAGE' || strtoupper($properties[$i])=='BACKGROUND') && preg_match('/-webkit-gradient/i',$values[$i])) { */
/* 			continue; */
/* 		}*/
/* 		$classproperties[strtoupper($properties[$i])] = trim($values[$i]);*/
/* 	}*/
/* 	return $this->fixCSS($classproperties);*/
/* }*/
/* */
/* */
/* */
/* function _fix_borderStr($bd) {*/
/* 	preg_match_all("/\((.*?)\)/", $bd, $m);*/
/* 	if (count($m[1])) { */
/* 		for($i=0;$i<count($m[1]);$i++) {*/
/* 			$sub = preg_replace("/ /", "", $m[1][$i]);*/
/* 			$bd = preg_replace('/'.preg_quote($m[1][$i], '/').'/si', $sub, $bd); */
/* 		}*/
/* 	}*/
/* */
/* 	$prop = preg_split('/\s+/',trim($bd));*/
/* 	$w = 'medium';*/
/* 	$c = '#000000';*/
/* 	$s = 'none';*/
/* */
/* 	if ( count($prop) == 1 ) { */
/* 		// solid*/
/* 		if (in_array($prop[0],$this->mpdf->borderstyles) || $prop[0] == 'none' || $prop[0] == 'hidden' ) { $s = $prop[0]; }*/
/* 		// #000000*/
/* 		else if (is_array($this->mpdf->ConvertColor($prop[0]))) { $c = $prop[0]; }*/
/* 		// 1px */
/* 		else { $w = $prop[0]; }*/
/* 	}*/
/* 	else if (count($prop) == 2 ) { */
/* 		// 1px solid */
/* 		if (in_array($prop[1],$this->mpdf->borderstyles) || $prop[1] == 'none' || $prop[1] == 'hidden' ) { $w = $prop[0]; $s = $prop[1]; }*/
/* 		// solid #000000 */
/* 		else if (in_array($prop[0],$this->mpdf->borderstyles) || $prop[0] == 'none' || $prop[0] == 'hidden' ) { $s = $prop[0]; $c = $prop[1]; }*/
/* 		// 1px #000000 */
/* 		else { $w = $prop[0]; $c = $prop[1]; }*/
/* 	}*/
/* 	else if ( count($prop) == 3 ) {*/
/* 		// Change #000000 1px solid to 1px solid #000000 (proper)*/
/* 		if (substr($prop[0],0,1) == '#') { $c = $prop[0]; $w = $prop[1]; $s = $prop[2]; }*/
/* 		// Change solid #000000 1px to 1px solid #000000 (proper)*/
/* 		else if (substr($prop[0],1,1) == '#') { $s = $prop[0]; $c = $prop[1]; $w = $prop[2]; }*/
/* 		// Change solid 1px #000000 to 1px solid #000000 (proper)*/
/* 		else if (in_array($prop[0],$this->mpdf->borderstyles) || $prop[0] == 'none' || $prop[0] == 'hidden' ) { */
/* 			$s = $prop[0]; $w = $prop[1]; $c = $prop[2]; */
/* 		}*/
/* 		else { $w = $prop[0]; $s = $prop[1]; $c = $prop[2]; }*/
/* 	}*/
/* 	else { return ''; } */
/* 	$s = strtolower($s);*/
/* 	return $w.' '.$s.' '.$c;*/
/* }*/
/* */
/* */
/* */
/* function fixCSS($prop) {*/
/* 	if (!is_array($prop) || (count($prop)==0)) return array(); */
/* 	$newprop = array(); */
/* 	foreach($prop AS $k => $v) {*/
/* 		if ($k != 'BACKGROUND-IMAGE' && $k != 'BACKGROUND' && $k != 'ODD-HEADER-NAME' && $k != 'EVEN-HEADER-NAME' && $k != 'ODD-FOOTER-NAME' && $k != 'EVEN-FOOTER-NAME' && $k != 'HEADER' && $k != 'FOOTER') {*/
/* 			$v = strtolower($v);*/
/* 		}*/
/* */
/* 		if ($k == 'FONT') {*/
/* 			$s = trim($v);*/
/* 			preg_match_all('/\"(.*?)\"/',$s,$ff);*/
/* 			if (count($ff[1])) {*/
/* 				foreach($ff[1] AS $ffp) { */
/* 					$w = preg_split('/\s+/',$ffp);*/
/* 					$s = preg_replace('/\"'.$ffp.'\"/',$w[0],$s); */
/* 				}*/
/* 			}*/
/* 			preg_match_all('/\'(.*?)\'/',$s,$ff);*/
/* 			if (count($ff[1])) {*/
/* 				foreach($ff[1] AS $ffp) { */
/* 					$w = preg_split('/\s+/',$ffp);*/
/* 					$s = preg_replace('/\''.$ffp.'\'/',$w[0],$s); */
/* 				}*/
/* 			}*/
/* 			$s = preg_replace('/\s*,\s*//* ',',',$s); */
/* 			$bits = preg_split('/\s+/',$s);*/
/* 			if (count($bits)>1) {*/
/* 				$k = 'FONT-FAMILY'; $v = $bits[(count($bits)-1)];*/
/* 				$fs = $bits[(count($bits)-2)];*/
/* 				if (preg_match('/(.*?)\/(.*)/',$fs, $fsp)) { */
/* 					$newprop['FONT-SIZE'] = $fsp[1];*/
/* 					$newprop['LINE-HEIGHT'] = $fsp[2];*/
/* 				}*/
/* 				else { $newprop['FONT-SIZE'] = $fs; } */
/* 				if (preg_match('/(italic|oblique)/i',$s)) { $newprop['FONT-STYLE'] = 'italic'; }*/
/* 				else { $newprop['FONT-STYLE'] = 'normal'; }*/
/* 				if (preg_match('/bold/i',$s)) { $newprop['FONT-WEIGHT'] = 'bold'; }*/
/* 				else { $newprop['FONT-WEIGHT'] = 'normal'; }*/
/* 				if (preg_match('/small-caps/i',$s)) { $newprop['TEXT-TRANSFORM'] = 'uppercase'; }*/
/* 			}*/
/* 		}*/
/* 		if ($k == 'FONT-FAMILY') {*/
/* 			$aux_fontlist = explode(",",$v);*/
/* 			$found = 0;*/
/* 			foreach($aux_fontlist AS $f) {*/
/* 				$fonttype = trim($f);*/
/* 				$fonttype = preg_replace('/["\']*(.*?)["\']*//* ','\\1',$fonttype);*/
/* 				$fonttype = preg_replace('/ /','',$fonttype);*/
/* 				$v = strtolower(trim($fonttype));*/
/* 				if (isset($this->mpdf->fonttrans[$v]) && $this->mpdf->fonttrans[$v]) { $v = $this->mpdf->fonttrans[$v]; }*/
/* 				if ((!$this->mpdf->onlyCoreFonts && in_array($v,$this->mpdf->available_unifonts)) || */
/* 					in_array($v,array('ccourier','ctimes','chelvetica')) ||*/
/* 					($this->mpdf->onlyCoreFonts && in_array($v,array('courier','times','helvetica','arial'))) || */
/* 					in_array($v, array('sjis','uhc','big5','gb'))) { */
/* 					$newprop[$k] = $v; */
/* 					$found = 1;*/
/* 					break;*/
/* 				}*/
/* 			}*/
/* 			if (!$found) {*/
/* 			   foreach($aux_fontlist AS $f) {*/
/* 				$fonttype = trim($f);*/
/* 				$fonttype = preg_replace('/["\']*(.*?)["\']*//* ','\\1',$fonttype);*/
/* 				$fonttype = preg_replace('/ /','',$fonttype);*/
/* 				$v = strtolower(trim($fonttype));*/
/* 				if (isset($this->mpdf->fonttrans[$v]) && $this->mpdf->fonttrans[$v]) { $v = $this->mpdf->fonttrans[$v]; }*/
/* 				if (in_array($v,$this->mpdf->sans_fonts) || in_array($v,$this->mpdf->serif_fonts) || in_array($v,$this->mpdf->mono_fonts) ) { */
/* 					$newprop[$k] = $v;*/
/* 					break;*/
/* 				}*/
/* 			   }*/
/* 			}*/
/* 		}*/
/* 		else if ($k == 'MARGIN') {*/
/* 			$tmp =  $this->expand24($v);*/
/* 			$newprop['MARGIN-TOP'] = $tmp['T'];*/
/* 			$newprop['MARGIN-RIGHT'] = $tmp['R'];*/
/* 			$newprop['MARGIN-BOTTOM'] = $tmp['B'];*/
/* 			$newprop['MARGIN-LEFT'] = $tmp['L'];*/
/* 		}*/
/* /*-- BORDER-RADIUS --*//* */
/* 		else if ($k == 'BORDER-RADIUS' || $k == 'BORDER-TOP-LEFT-RADIUS' || $k == 'BORDER-TOP-RIGHT-RADIUS' || $k == 'BORDER-BOTTOM-LEFT-RADIUS' || $k == 'BORDER-BOTTOM-RIGHT-RADIUS') {*/
/* 			$tmp =  $this->border_radius_expand($v,$k);*/
/* 			if (isset($tmp['TL-H'])) $newprop['BORDER-TOP-LEFT-RADIUS-H'] = $tmp['TL-H'];*/
/* 			if (isset($tmp['TL-V'])) $newprop['BORDER-TOP-LEFT-RADIUS-V'] = $tmp['TL-V'];*/
/* 			if (isset($tmp['TR-H'])) $newprop['BORDER-TOP-RIGHT-RADIUS-H'] = $tmp['TR-H'];*/
/* 			if (isset($tmp['TR-V'])) $newprop['BORDER-TOP-RIGHT-RADIUS-V'] = $tmp['TR-V'];*/
/* 			if (isset($tmp['BL-H'])) $newprop['BORDER-BOTTOM-LEFT-RADIUS-H'] = $tmp['BL-H'];*/
/* 			if (isset($tmp['BL-V'])) $newprop['BORDER-BOTTOM-LEFT-RADIUS-V'] = $tmp['BL-V'];*/
/* 			if (isset($tmp['BR-H'])) $newprop['BORDER-BOTTOM-RIGHT-RADIUS-H'] = $tmp['BR-H'];*/
/* 			if (isset($tmp['BR-V'])) $newprop['BORDER-BOTTOM-RIGHT-RADIUS-V'] = $tmp['BR-V'];*/
/* 		}*/
/* /*-- END BORDER-RADIUS --*//* */
/* 		else if ($k == 'PADDING') {*/
/* 			$tmp =  $this->expand24($v);*/
/* 			$newprop['PADDING-TOP'] = $tmp['T'];*/
/* 			$newprop['PADDING-RIGHT'] = $tmp['R'];*/
/* 			$newprop['PADDING-BOTTOM'] = $tmp['B'];*/
/* 			$newprop['PADDING-LEFT'] = $tmp['L'];*/
/* 		}*/
/* 		else if ($k == 'BORDER') {*/
/* 			if ($v == '1') { $v = '1px solid #000000'; }*/
/* 			else { $v = $this->_fix_borderStr($v); }*/
/* 			$newprop['BORDER-TOP'] = $v;*/
/* 			$newprop['BORDER-RIGHT'] = $v;*/
/* 			$newprop['BORDER-BOTTOM'] = $v;*/
/* 			$newprop['BORDER-LEFT'] = $v;*/
/* 		}*/
/* 		else if ($k == 'BORDER-TOP') {*/
/* 			$newprop['BORDER-TOP'] = $this->_fix_borderStr($v);*/
/* 		}*/
/* 		else if ($k == 'BORDER-RIGHT') {*/
/* 			$newprop['BORDER-RIGHT'] = $this->_fix_borderStr($v);*/
/* 		}*/
/* 		else if ($k == 'BORDER-BOTTOM') {*/
/* 			$newprop['BORDER-BOTTOM'] = $this->_fix_borderStr($v);*/
/* 		}*/
/* 		else if ($k == 'BORDER-LEFT') {*/
/* 			$newprop['BORDER-LEFT'] = $this->_fix_borderStr($v);*/
/* 		}*/
/* 		else if ($k == 'BORDER-STYLE') {*/
/* 			$e = $this->expand24($v);*/
/* 			$newprop['BORDER-TOP-STYLE'] = $e['T'];*/
/* 			$newprop['BORDER-RIGHT-STYLE'] = $e['R'];*/
/* 			$newprop['BORDER-BOTTOM-STYLE'] = $e['B'];*/
/* 			$newprop['BORDER-LEFT-STYLE'] = $e['L'];*/
/* 		}*/
/* 		else if ($k == 'BORDER-WIDTH') {*/
/* 			$e = $this->expand24($v);*/
/* 			$newprop['BORDER-TOP-WIDTH'] = $e['T'];*/
/* 			$newprop['BORDER-RIGHT-WIDTH'] = $e['R'];*/
/* 			$newprop['BORDER-BOTTOM-WIDTH'] = $e['B'];*/
/* 			$newprop['BORDER-LEFT-WIDTH'] = $e['L'];*/
/* 		}*/
/* 		else if ($k == 'BORDER-COLOR') {*/
/* 			$e = $this->expand24($v);*/
/* 			$newprop['BORDER-TOP-COLOR'] = $e['T'];*/
/* 			$newprop['BORDER-RIGHT-COLOR'] = $e['R'];*/
/* 			$newprop['BORDER-BOTTOM-COLOR'] = $e['B'];*/
/* 			$newprop['BORDER-LEFT-COLOR'] = $e['L'];*/
/* 		}*/
/* */
/* 		else if ($k == 'BORDER-SPACING') {*/
/* 			$prop = preg_split('/\s+/',trim($v));*/
/* 			if (count($prop) == 1 ) { */
/* 				$newprop['BORDER-SPACING-H'] = $prop[0];*/
/* 				$newprop['BORDER-SPACING-V'] = $prop[0];*/
/* 			}*/
/* 			else if (count($prop) == 2 ) { */
/* 				$newprop['BORDER-SPACING-H'] = $prop[0];*/
/* 				$newprop['BORDER-SPACING-V'] = $prop[1];*/
/* 			}*/
/* 		}*/
/* 		else if ($k == 'TEXT-OUTLINE') {	// mPDF 5.6.07*/
/* 			$prop = preg_split('/\s+/',trim($v));*/
/* 			if (trim(strtolower($v)) == 'none' ) { */
/* 				$newprop['TEXT-OUTLINE'] = 'none';*/
/* 			}*/
/* 			else if (count($prop) == 2 ) { */
/* 				$newprop['TEXT-OUTLINE-WIDTH'] = $prop[0];*/
/* 				$newprop['TEXT-OUTLINE-COLOR'] = $prop[1];*/
/* 			}*/
/* 			else if (count($prop) == 3 ) { */
/* 				$newprop['TEXT-OUTLINE-WIDTH'] = $prop[0];*/
/* 				$newprop['TEXT-OUTLINE-COLOR'] = $prop[2];*/
/* 			}*/
/* 		}*/
/* 		else if ($k == 'SIZE') {*/
/* 			$prop = preg_split('/\s+/',trim($v));*/
/* 			if (preg_match('/(auto|portrait|landscape)/',$prop[0])) {*/
/* 				$newprop['SIZE'] = strtoupper($prop[0]);*/
/* 			}*/
/* 			else if (count($prop) == 1 ) {*/
/* 				$newprop['SIZE']['W'] = $this->mpdf->ConvertSize($prop[0]);*/
/* 				$newprop['SIZE']['H'] = $this->mpdf->ConvertSize($prop[0]);*/
/* 			}*/
/* 			else if (count($prop) == 2 ) {*/
/* 				$newprop['SIZE']['W'] = $this->mpdf->ConvertSize($prop[0]);*/
/* 				$newprop['SIZE']['H'] = $this->mpdf->ConvertSize($prop[1]);*/
/* 			}*/
/* 		}*/
/* 		else if ($k == 'SHEET-SIZE') {*/
/* 			$prop = preg_split('/\s+/',trim($v));*/
/* 			if (count($prop) == 2 ) {*/
/* 				$newprop['SHEET-SIZE'] = array($this->mpdf->ConvertSize($prop[0]), $this->mpdf->ConvertSize($prop[1]));*/
/* 			}*/
/* 			else {*/
/* 				if(preg_match('/([0-9a-zA-Z]*)-L/i',$v,$m)) {	// e.g. A4-L = A$ landscape*/
/* 					$ft = $this->mpdf->_getPageFormat($m[1]);*/
/* 					$format = array($ft[1],$ft[0]);*/
/* 				}*/
/* 				else { $format = $this->mpdf->_getPageFormat($v); }*/
/* 				if ($format) { $newprop['SHEET-SIZE'] = array($format[0]/_MPDFK, $format[1]/_MPDFK); }*/
/* 			}*/
/* 		}*/
/* 		else if ($k == 'BACKGROUND') {*/
/* 			$bg = $this->parseCSSbackground($v);*/
/* 			if ($bg['c']) { $newprop['BACKGROUND-COLOR'] = $bg['c']; }*/
/* 			else { $newprop['BACKGROUND-COLOR'] = 'transparent'; }*/
/* /*-- BACKGROUNDS --*//* */
/* 			if ($bg['i']) { */
/* 				$newprop['BACKGROUND-IMAGE'] = $bg['i']; */
/* 				if ($bg['r']) { $newprop['BACKGROUND-REPEAT'] = $bg['r']; }*/
/* 				if ($bg['p']) { $newprop['BACKGROUND-POSITION'] = $bg['p']; }*/
/* 			}*/
/* 			else { $newprop['BACKGROUND-IMAGE'] = ''; }*/
/* /*-- END BACKGROUNDS --*//* */
/* 		}*/
/* /*-- BACKGROUNDS --*//* */
/* 		else if ($k == 'BACKGROUND-IMAGE') {*/
/* 			if (preg_match('/(-moz-)*(repeating-)*(linear|radial)-gradient\(.*\)/i',$v,$m)) {*/
/* 				$newprop['BACKGROUND-IMAGE'] = $m[0];*/
/* 				continue;*/
/* 			}*/
/* 			if (preg_match('/url\([\'\"]{0,1}(.*?)[\'\"]{0,1}\)/i',$v,$m)) {*/
/* 				$newprop['BACKGROUND-IMAGE'] = $m[1];*/
/* 			}*/
/* 		 */
/* 			else if (strtolower($v)=='none') { $newprop['BACKGROUND-IMAGE'] = ''; }*/
/* */
/* 		}*/
/* 		else if ($k == 'BACKGROUND-REPEAT') {*/
/* 			if (preg_match('/(repeat-x|repeat-y|no-repeat|repeat)/i',$v,$m)) { */
/* 				$newprop['BACKGROUND-REPEAT'] = strtolower($m[1]);*/
/* 			}*/
/* 		}*/
/* 		else if ($k == 'BACKGROUND-POSITION') {*/
/* 			$s = $v;*/
/* 			$bits = preg_split('/\s+/',trim($s));*/
/* 			// These should be Position x1 or x2*/
/* 			if (count($bits)==1) {*/
/* 				if (preg_match('/bottom/',$bits[0])) { $bg['p'] = '50% 100%'; }*/
/* 				else if (preg_match('/top/',$bits[0])) { $bg['p'] = '50% 0%'; }*/
/* 				else { $bg['p'] = $bits[0] . ' 50%'; }*/
/* 			}*/
/* 			else if (count($bits)==2) {*/
/* 				// Can be either right center or center right*/
/* 				if (preg_match('/(top|bottom)/',$bits[0]) || preg_match('/(left|right)/',$bits[1])) { */
/* 					$bg['p'] = $bits[1] . ' '.$bits[0]; */
/* 				}*/
/* 				else { */
/* 					$bg['p'] = $bits[0] . ' '.$bits[1]; */
/* 				}*/
/* 			}*/
/* 			if ($bg['p']) {*/
/* 				$bg['p'] = preg_replace('/(left|top)/','0%',$bg['p']);*/
/* 				$bg['p'] = preg_replace('/(right|bottom)/','100%',$bg['p']);*/
/* 				$bg['p'] = preg_replace('/(center)/','50%',$bg['p']);*/
/* 				if (!preg_match('/[\-]{0,1}\d+(in|cm|mm|pt|pc|em|ex|px|%)* [\-]{0,1}\d+(in|cm|mm|pt|pc|em|ex|px|%)*//* ',$bg['p'])) {*/
/* 					$bg['p'] = false;*/
/* 				}*/
/* 			}*/
/* 			if ($bg['p']) { $newprop['BACKGROUND-POSITION'] = $bg['p']; }*/
/* 		}*/
/* /*-- END BACKGROUNDS --*//* */
/* 		else if ($k == 'IMAGE-ORIENTATION') {*/
/* 			if (preg_match('/([\-]*[0-9\.]+)(deg|grad|rad)/i',$v,$m)) {*/
/* 				$angle = $m[1] + 0;*/
/* 				if (strtolower($m[2])=='deg') { $angle = $angle; }*/
/* 				else if (strtolower($m[2])=='grad') { $angle *= (360/400); }*/
/* 				else if (strtolower($m[2])=='rad') { $angle = rad2deg($angle); }*/
/* 				while($angle < 0) { $angle += 360; }*/
/* 				$angle = ($angle % 360);*/
/* 				$angle /= 90;*/
/* 				$angle = round($angle) * 90;*/
/* 				$newprop['IMAGE-ORIENTATION'] = $angle; */
/* 			}*/
/* 		}*/
/* 		// mPDF 5.6.13*/
/* 		else if ($k == 'TEXT-ALIGN') {*/
/* 			if (preg_match('/["\'](.){1}["\']/i',$v,$m)) { */
/* 				$d = array_search($m[1],$this->mpdf->decimal_align);*/
/* 				if ($d !== false) { $newprop['TEXT-ALIGN'] = $d; }*/
/* 				if (preg_match('/(center|left|right)/i',$v,$m)) { $newprop['TEXT-ALIGN'] .= strtoupper(substr($m[1],0,1)); }*/
/* 				else { $newprop['TEXT-ALIGN'] .= 'R'; }	// default = R*/
/* 			}*/
/* 			else if (preg_match('/["\'](\\\[a-fA-F0-9]{1,6})["\']/i',$v,$m)) { */
/* 				$utf8 = codeHex2utf(substr($m[1],1,6));*/
/* 				$d = array_search($utf8,$this->mpdf->decimal_align);*/
/* 				if ($d !== false) { $newprop['TEXT-ALIGN'] = $d; }*/
/* 				if (preg_match('/(center|left|right)/i',$v,$m)) { $newprop['TEXT-ALIGN'] .= strtoupper(substr($m[1],0,1)); }*/
/* 				else { $newprop['TEXT-ALIGN'] .= 'R'; }	// default = R*/
/* 			}*/
/* 			else { $newprop[$k] = $v; }*/
/* 		}*/
/* 		else if ($k == 'LIST-STYLE') {	// mPDF 5.7.2*/
/* 			if (preg_match('/(lower-roman|upper-roman|lower-latin|lower-alpha|upper-latin|upper-alpha|none|decimal|disc|circle|square|arabic-indic|bengali|devanagari|gujarati|gurmukhi|kannada|malayalam|oriya|persian|tamil|telugu|thai|urdu|cambodian|khmer|lao)/i',$v,$m)*/
/* 			|| preg_match('/U\+([a-fA-F0-9]+)/i',$v,$m)) { */
/* 				$newprop['LIST-STYLE-TYPE'] = strtolower(trim($m[1]));*/
/* 			}*/
/* 		}*/
/* */
/* */
/* 		else { */
/* 			$newprop[$k] = $v; */
/* 		}*/
/* 	}*/
/* */
/* 	return $newprop;*/
/* }*/
/* */
/* function setCSSboxshadow($v) {*/
/* 	$sh = array();*/
/* 	$c = preg_match_all('/(rgba|rgb|device-cmyka|cmyka|device-cmyk|cmyk|hsla|hsl)\(.*?\)/',$v,$x);	// mPDF 5.6.05*/
/* 	for($i=0; $i<$c; $i++) {*/
/* 		$col = preg_replace('/,/','*',$x[0][$i]);*/
/* 		$v = preg_replace('/'.preg_quote($x[0][$i],'/').'/',$col,$v);*/
/* 	}*/
/* 	$ss = explode(',',$v);*/
/* 	foreach ($ss AS $s) {*/
/* 		$new = array('inset'=>false, 'blur'=>0, 'spread'=>0);*/
/* 		if (preg_match('/inset/i',$s)) { $new['inset'] = true; $s = preg_replace('/\s*inset\s*//* ','',$s); }*/
/* 		$p = explode(' ',trim($s));*/
/* 		if (isset($p[0])) { $new['x'] = $this->mpdf->ConvertSize(trim($p[0]),$this->mpdf->blk[$this->mpdf->blklvl-1]['inner_width'],$this->mpdf->FontSize,false); }*/
/* 		if (isset($p[1])) { $new['y'] = $this->mpdf->ConvertSize(trim($p[1]),$this->mpdf->blk[$this->mpdf->blklvl-1]['inner_width'],$this->mpdf->FontSize,false); }*/
/* 		if (isset($p[2])) {*/
/* 			if (preg_match('/^\s*[\.\-0-9]/',$p[2])) {*/
/* 				$new['blur'] = $this->mpdf->ConvertSize(trim($p[2]),$this->mpdf->blk[$this->mpdf->blklvl-1]['inner_width'],$this->mpdf->FontSize,false); */
/* 			}*/
/* 			else { $new['col'] = $this->mpdf->ConvertColor(preg_replace('/\*//* ',',',$p[2])); }*/
/* 			if (isset($p[3])) {*/
/* 				if (preg_match('/^\s*[\.\-0-9]/',$p[3])) {*/
/* 					$new['spread'] = $this->mpdf->ConvertSize(trim($p[3]),$this->mpdf->blk[$this->mpdf->blklvl-1]['inner_width'],$this->mpdf->FontSize,false); */
/* 				}*/
/* 				else { $new['col'] = $this->mpdf->ConvertColor(preg_replace('/\*//* ',',',$p[3])); }*/
/* 				if (isset($p[4])) {*/
/* 					$new['col'] = $this->mpdf->ConvertColor(preg_replace('/\*//* ',',',$p[4]));*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 		if (!$new['col']) { $new['col'] = $this->mpdf->ConvertColor('#888888'); }*/
/* 		if (isset($new['y'])) { array_unshift($sh, $new); }*/
/* 	}*/
/* 	return $sh;*/
/* }*/
/* */
/* function setCSStextshadow($v) {*/
/* 	$sh = array();*/
/* 	$c = preg_match_all('/(rgba|rgb|device-cmyka|cmyka|device-cmyk|cmyk|hsla|hsl)\(.*?\)/',$v,$x);	// mPDF 5.6.05*/
/* 	for($i=0; $i<$c; $i++) {*/
/* 		$col = preg_replace('/,/','*',$x[0][$i]);*/
/* 		$v = preg_replace('/'.preg_quote($x[0][$i],'/').'/',$col,$v);*/
/* 	}*/
/* 	$ss = explode(',',$v);*/
/* 	foreach ($ss AS $s) {*/
/* 		$new = array('blur'=>0);*/
/* 		$p = explode(' ',trim($s));*/
/* 		if (isset($p[0])) { $new['x'] = $this->mpdf->ConvertSize(trim($p[0]),$this->mpdf->blk[$this->mpdf->blklvl-1]['inner_width'],$this->mpdf->FontSize,false); }*/
/* 		if (isset($p[1])) { $new['y'] = $this->mpdf->ConvertSize(trim($p[1]),$this->mpdf->blk[$this->mpdf->blklvl-1]['inner_width'],$this->mpdf->FontSize,false); }*/
/* 		if (isset($p[2])) {*/
/* 			if (preg_match('/^\s*[\.\-0-9]/',$p[2])) {*/
/* 				$new['blur'] = $this->mpdf->ConvertSize(trim($p[2]),$this->mpdf->blk[$this->mpdf->blklvl-1]['inner_width'],$this->mpdf->FontSize,false); */
/* 			}*/
/* 			else { $new['col'] = $this->mpdf->ConvertColor(preg_replace('/\*//* ',',',$p[2])); }*/
/* 			if (isset($p[3])) {*/
/* 				$new['col'] = $this->mpdf->ConvertColor(preg_replace('/\*//* ',',',$p[3]));*/
/* 			}*/
/* 		}*/
/* 		if (!$new['col']) { $new['col'] = $this->mpdf->ConvertColor('#888888'); }*/
/* 		if (isset($new['y'])) { array_unshift($sh, $new); }*/
/* 	}*/
/* 	return $sh;*/
/* }*/
/* */
/* function parseCSSbackground($s) {*/
/* 	$bg = array('c'=>false, 'i'=>false, 'r'=>false, 'p'=>false, );*/
/* /*-- BACKGROUNDS --*//* */
/* 	if (preg_match('/(-moz-)*(repeating-)*(linear|radial)-gradient\(.*\)/i',$s,$m)) {*/
/* 		$bg['i'] = $m[0];*/
/* 	}*/
/* 	else*/
/* /*-- END BACKGROUNDS --*//* */
/* 	if (preg_match('/url\(/i',$s)) {*/
/* 		// If color, set and strip it off*/
/* 		// mPDF 5.6.05*/
/* 		if (preg_match('/^\s*(#[0-9a-fA-F]{3,6}|(rgba|rgb|device-cmyka|cmyka|device-cmyk|cmyk|hsla|hsl|spot)\(.*?\)|[a-zA-Z]{3,})\s+(url\(.*)/i',$s,$m)) {*/
/* 			$bg['c'] = strtolower($m[1]);*/
/* 			$s = $m[3];*/
/* 		}*/
/* /*-- BACKGROUNDS --*//* */
/* 		if (preg_match('/url\([\'\"]{0,1}(.*?)[\'\"]{0,1}\)\s*(.*)/i',$s,$m)) {*/
/* 			$bg['i'] = $m[1];*/
/* 			$s = strtolower($m[2]);*/
/* 			if (preg_match('/(repeat-x|repeat-y|no-repeat|repeat)/',$s,$m)) { */
/* 				$bg['r'] = $m[1];*/
/* 			}*/
/* 			// Remove repeat, attachment (discarded) and also any inherit*/
/* 			$s = preg_replace('/(repeat-x|repeat-y|no-repeat|repeat|scroll|fixed|inherit)/','',$s);*/
/* 			$bits = preg_split('/\s+/',trim($s));*/
/* 			// These should be Position x1 or x2*/
/* 			if (count($bits)==1) {*/
/* 				if (preg_match('/bottom/',$bits[0])) { $bg['p'] = '50% 100%'; }*/
/* 				else if (preg_match('/top/',$bits[0])) { $bg['p'] = '50% 0%'; }*/
/* 				else { $bg['p'] = $bits[0] . ' 50%'; }*/
/* 			}*/
/* 			else if (count($bits)==2) {*/
/* 				// Can be either right center or center right*/
/* 				if (preg_match('/(top|bottom)/',$bits[0]) || preg_match('/(left|right)/',$bits[1])) { */
/* 					$bg['p'] = $bits[1] . ' '.$bits[0]; */
/* 				}*/
/* 				else { */
/* 					$bg['p'] = $bits[0] . ' '.$bits[1]; */
/* 				}*/
/* 			}*/
/* 			if ($bg['p']) {*/
/* 				$bg['p'] = preg_replace('/(left|top)/','0%',$bg['p']);*/
/* 				$bg['p'] = preg_replace('/(right|bottom)/','100%',$bg['p']);*/
/* 				$bg['p'] = preg_replace('/(center)/','50%',$bg['p']);*/
/* 				if (!preg_match('/[\-]{0,1}\d+(in|cm|mm|pt|pc|em|ex|px|%)* [\-]{0,1}\d+(in|cm|mm|pt|pc|em|ex|px|%)*//* ',$bg['p'])) {*/
/* 					$bg['p'] = false;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* /*-- END BACKGROUNDS --*//* */
/* 	}*/
/* 	else if (preg_match('/^\s*(#[0-9a-fA-F]{3,6}|(rgba|rgb|device-cmyka|cmyka|device-cmyk|cmyk|hsla|hsl|spot)\(.*?\)|[a-zA-Z]{3,})/i',$s,$m)) { $bg['c'] = strtolower($m[1]); }	// mPDF 5.6.05*/
/* 	return ($bg);*/
/* }*/
/* */
/* */
/* function expand24($mp) {*/
/* 	$prop = preg_split('/\s+/',trim($mp));*/
/* 	if (count($prop) == 1 ) { */
/* 		return array('T' => $prop[0], 'R' => $prop[0], 'B' => $prop[0], 'L'=> $prop[0]);*/
/* 	}*/
/* 	if (count($prop) == 2 ) { */
/* 		return array('T' => $prop[0], 'R' => $prop[1], 'B' => $prop[0], 'L'=> $prop[1]);*/
/* 	}*/
/* */
/* 	if (count($prop) == 3 ) { */
/* 		return array('T' => $prop[0], 'R' => $prop[1], 'B' => $prop[2], 'L'=> $prop[1]);*/
/* 	}*/
/* 	if (count($prop) == 4 ) { */
/* 		return array('T' => $prop[0], 'R' => $prop[1], 'B' => $prop[2], 'L'=> $prop[3]);*/
/* 	}*/
/* 	return array(); */
/* }*/
/* */
/* /*-- BORDER-RADIUS --*//* */
/* function border_radius_expand($val,$k) {*/
/* 	$b = array();*/
/* 	if ($k == 'BORDER-RADIUS') {*/
/* 		$hv = explode('/',trim($val));*/
/* 		$prop = preg_split('/\s+/',trim($hv[0]));*/
/* 		if (count($prop)==1) {*/
/* 			$b['TL-H'] = $b['TR-H'] = $b['BR-H'] = $b['BL-H'] = $prop[0];*/
/* 		}*/
/* 		else if (count($prop)==2) {*/
/* 			$b['TL-H'] = $b['BR-H'] = $prop[0];*/
/* 			$b['TR-H'] = $b['BL-H'] = $prop[1];*/
/* 		}*/
/* 		else if (count($prop)==3) {*/
/* 			$b['TL-H'] = $prop[0];*/
/* 			$b['TR-H'] = $b['BL-H'] = $prop[1];*/
/* 			$b['BR-H'] = $prop[2];*/
/* 		}*/
/* 		else if (count($prop)==4) {*/
/* 			$b['TL-H'] = $prop[0];*/
/* 			$b['TR-H'] = $prop[1];*/
/* 			$b['BR-H'] = $prop[2];*/
/* 			$b['BL-H'] = $prop[3];*/
/* 		}*/
/* 		if (count($hv)==2) {*/
/* 			$prop = preg_split('/\s+/',trim($hv[1]));*/
/* 			if (count($prop)==1) {*/
/* 				$b['TL-V'] = $b['TR-V'] = $b['BR-V'] = $b['BL-V'] = $prop[0];*/
/* 			}*/
/* 			else if (count($prop)==2) {*/
/* 				$b['TL-V'] = $b['BR-V'] = $prop[0];*/
/* 				$b['TR-V'] = $b['BL-V'] = $prop[1];*/
/* 			}*/
/* 			else if (count($prop)==3) {*/
/* 				$b['TL-V'] = $prop[0];*/
/* 				$b['TR-V'] = $b['BL-V'] = $prop[1];*/
/* 				$b['BR-V'] = $prop[2];*/
/* 			}*/
/* 			else if (count($prop)==4) {*/
/* 				$b['TL-V'] = $prop[0];*/
/* 				$b['TR-V'] = $prop[1];*/
/* 				$b['BR-V'] = $prop[2];*/
/* 				$b['BL-V'] = $prop[3];*/
/* 			}*/
/* 		}*/
/* 		else {*/
/* 			$b['TL-V'] = $b['TL-H'];*/
/* 			$b['TR-V'] = $b['TR-H'];*/
/* 			$b['BL-V'] = $b['BL-H'];*/
/* 			$b['BR-V'] = $b['BR-H'];*/
/* 		}*/
/* 		return $b;*/
/* 	}*/
/* */
/* 	// Parse 2*/
/* 	$h = 0;*/
/* 	$v = 0;*/
/* 	$prop = preg_split('/\s+/',trim($val));*/
/* 	if (count($prop)==1) { $h = $v = $val; }*/
/* 	else { $h = $prop[0]; $v = $prop[1]; }*/
/* 	if ($h==0 || $v==0) { $h = $v = 0; }*/
/* 	if ($k == 'BORDER-TOP-LEFT-RADIUS') {*/
/* 		$b['TL-H'] = $h;*/
/* 		$b['TL-V'] = $v;*/
/* 	}*/
/* 	else if ($k == 'BORDER-TOP-RIGHT-RADIUS') {*/
/* 		$b['TR-H'] = $h;*/
/* 		$b['TR-V'] = $v;*/
/* 	}*/
/* 	else if ($k == 'BORDER-BOTTOM-LEFT-RADIUS') {*/
/* 		$b['BL-H'] = $h;*/
/* 		$b['BL-V'] = $v;*/
/* 	}*/
/* 	else if ($k == 'BORDER-BOTTOM-RIGHT-RADIUS') {*/
/* 		$b['BR-H'] = $h;*/
/* 		$b['BR-V'] = $v;*/
/* 	}*/
/* 	return $b;*/
/* */
/* }*/
/* /*-- END BORDER-RADIUS --*//* */
/* */
/* function _mergeCSS($p, &$t) {*/
/* 	// Save Cascading CSS e.g. "div.topic p" at this block level*/
/* 	if (isset($p) && $p) {*/
/* 		if ($t) { */
/* 			$t = $this->array_merge_recursive_unique($t, $p);*/
/* 		}*/
/* 	   	else { $t = $p; }*/
/* 	}*/
/* }*/
/* */
/* // for CSS handling*/
/* function array_merge_recursive_unique($array1, $array2) {*/
/*     $arrays = func_get_args();*/
/*     $narrays = count($arrays);*/
/*     $ret = $arrays[0];*/
/*     for ($i = 1; $i < $narrays; $i ++) {*/
/*         foreach ($arrays[$i] as $key => $value) {*/
/*             if (((string) $key) === ((string) intval($key))) { // integer or string as integer key - append*/
/*                 $ret[] = $value;*/
/*             }*/
/*             else { // string key - merge*/
/*                 if (is_array($value) && isset($ret[$key])) {*/
/*                     $ret[$key] = $this->array_merge_recursive_unique($ret[$key], $value);*/
/*                 }*/
/*                 else {*/
/*                     $ret[$key] = $value;*/
/*                 }*/
/*             }*/
/*         }   */
/*     }*/
/*     return $ret;*/
/* }*/
/* */
/* */
/* */
/* function _mergeFullCSS($p, &$t, $tag, $classes, $id) {*/
/* 		$this->_mergeCSS($p[$tag], $t);*/
/* 		// STYLESHEET CLASS e.g. .smallone{}  .redletter{}*/
/* 		foreach($classes AS $class) {*/
/* 		  $this->_mergeCSS($p['CLASS>>'.$class], $t);*/
/* 		}*/
/* 		// STYLESHEET nth-child SELECTOR e.g. tr:nth-child(odd)  td:nth-child(2n+1)*/
/* 		if ($tag=='TR' && isset($p) && $p)  {*/
/* 			foreach($p AS $k=>$val) {*/
/* 				if (preg_match('/'.$tag.'>>SELECTORNTHCHILD>>(.*)/',$k, $m)) {*/
/* 					$select = false;*/
/* 					if ($tag=='TR')  {*/
/* 						$row = $this->mpdf->row;*/
/* 						$thnr = (isset($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_thead']) ? count($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_thead']) : 0);*/
/* 						$tfnr = (isset($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_tfoot']) ? count($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_tfoot']) : 0);*/
/* 						if ($this->mpdf->tabletfoot) { $row -= $thnr; }*/
/* 						else if (!$this->mpdf->tablethead) { $row -= ($thnr + $tfnr); }*/
/* 						if ($m[1]=='ODD' && ($row % 2) == 0) { $select = true; }*/
/* 						else if ($m[1]=='EVEN' && ($row % 2) == 1) { $select = true; }*/
/* 						else if (preg_match('/(\d+)N\+(\d+)/',$m[1],$a)) {*/
/* 							if ((($row + 1) % $a[1]) == $a[2]) { $select = true; }*/
/* 						}*/
/* 					}*/
/* 					else if ($tag=='TD' || $tag=='TH')  {*/
/* 						if ($m[1]=='ODD' && ($this->mpdf->col % 2) == 0) { $select = true; }*/
/* 						else if ($m[1]=='EVEN' && ($this->mpdf->col % 2) == 1) { $select = true; }*/
/* 						else if (preg_match('/(\d+)N\+(\d+)/',$m[1],$a)) {*/
/* 							if ((($this->mpdf->col + 1) % $a[1]) == $a[2]) { $select = true; }*/
/* 						}*/
/* 					}*/
/* 					if ($select) {*/
/* 		  				$this->_mergeCSS($p[$tag.'>>SELECTORNTHCHILD>>'.$m[1]], $t);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 		// STYLESHEET CLASS e.g. #smallone{}  #redletter{}*/
/* 		if (isset($id) && $id) {*/
/* 		  $this->_mergeCSS($p['ID>>'.$id], $t);*/
/* 		}*/
/* 		// STYLESHEET CLASS e.g. .smallone{}  .redletter{}*/
/* 		foreach($classes AS $class) {*/
/* 		  $this->_mergeCSS($p[$tag.'>>CLASS>>'.$class], $t);*/
/* 		}*/
/* 		// STYLESHEET CLASS e.g. #smallone{}  #redletter{}*/
/* 		if (isset($id)) {*/
/* 		  $this->_mergeCSS($p[$tag.'>>ID>>'.$id], $t);*/
/* 		}*/
/* }*/
/* */
/* function setBorderDominance($prop, $val) {*/
/* 	if (isset($prop['BORDER-LEFT']) && $prop['BORDER-LEFT']) { $this->cell_border_dominance_L = $val; }*/
/* 	if (isset($prop['BORDER-RIGHT']) && $prop['BORDER-RIGHT']) { $this->cell_border_dominance_R = $val; }*/
/* 	if (isset($prop['BORDER-TOP']) && $prop['BORDER-TOP']) { $this->cell_border_dominance_T = $val; }*/
/* 	if (isset($prop['BORDER-BOTTOM']) && $prop['BORDER-BOTTOM']) { $this->cell_border_dominance_B = $val; }*/
/* }*/
/* */
/* function _set_mergedCSS(&$m, &$p, $d=true, $bd=false) {*/
/* 	if (isset($m)) {*/
/* 		if ((isset($m['depth']) && $m['depth']>1) || $d==false) { 	// include check for 'depth'*/
/* 			if ($bd) { $this->setBorderDominance($m, $bd); }	// *TABLES**/
/* 			if (is_array($m)) { */
/* 				$p = array_merge($p,$m); */
/* 				$this->_mergeBorders($p,$m);*/
/* 			}*/
/* 		}*/
/* 	}*/
/* }*/
/* */
/* */
/* function _mergeBorders(&$b, &$a) {	// Merges $a['BORDER-TOP-STYLE'] to $b['BORDER-TOP'] etc.*/
/*   foreach(array('TOP','RIGHT','BOTTOM','LEFT') AS $side) {*/
/*     foreach(array('STYLE','WIDTH','COLOR') AS $el) {*/
/* 	if (isset($a['BORDER-'.$side.'-'.$el])) {	// e.g. $b['BORDER-TOP-STYLE']*/
/* 		$s = trim($a['BORDER-'.$side.'-'.$el]);*/
/* 		if (isset($b['BORDER-'.$side])) {	// e.g. $b['BORDER-TOP']*/
/* 			$p = trim($b['BORDER-'.$side]);*/
/* 		}*/
/* 		else { $p = ''; }*/
/* 		if ($el=='STYLE') {*/
/* 			if ($p) { $b['BORDER-'.$side] = preg_replace('/(\S+)\s+(\S+)\s+(\S+)/', '\\1 '.$s.' \\3', $p); }*/
/* 			else { $b['BORDER-'.$side] = '0px '.$s.' #000000'; }*/
/* 		}*/
/* 		else if ($el=='WIDTH') {*/
/* 			if ($p) { $b['BORDER-'.$side] = preg_replace('/(\S+)\s+(\S+)\s+(\S+)/', $s.' \\2 \\3', $p); }*/
/* 			else { $b['BORDER-'.$side] = $s.' none #000000'; }*/
/* 		}*/
/* 		else if ($el=='COLOR') {*/
/* 			if ($p) { $b['BORDER-'.$side] = preg_replace('/(\S+)\s+(\S+)\s+(\S+)/', '\\1 \\2 '.$s, $p); }*/
/* 			else { $b['BORDER-'.$side] = '0px none '.$s; }*/
/* 		}*/
/* 	}*/
/*     }*/
/*   }*/
/* }*/
/* */
/* */
/* function MergeCSS($inherit,$tag,$attr) {*/
/* 	$p = array();*/
/* 	$zp = array(); */
/* */
/* 	$classes = array();*/
/* 	if (isset($attr['CLASS'])) {*/
/* 		$classes = preg_split('/\s+/',$attr['CLASS']);*/
/* 	}*/
/* 	if (!isset($attr['ID'])) { $attr['ID']=''; }*/
/* 	//===============================================*/
/* /*-- TABLES --*//* */
/* 	// Set Inherited properties*/
/* 	if ($inherit == 'TOPTABLE') {	// $tag = TABLE*/
/* 		//===============================================*/
/* 		// Save Cascading CSS e.g. "div.topic p" at this block level*/
/* */
/* 		if (isset($this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS'])) {*/
/* 			$this->tablecascadeCSS[0] = $this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS'];*/
/* 		}*/
/* 		else {*/
/* 			$this->tablecascadeCSS[0] = $this->cascadeCSS;*/
/* 		}*/
/* 	}*/
/* 	//===============================================*/
/* 	// Set Inherited properties*/
/* 	if ($inherit == 'TOPTABLE' || $inherit == 'TABLE') {*/
/* 		//Cascade everything from last level that is not an actual property, or defined by current tag/attributes*/
/* 		if (isset($this->tablecascadeCSS[$this->tbCSSlvl-1]) && is_array($this->tablecascadeCSS[$this->tbCSSlvl-1])) {*/
/* 		   foreach($this->tablecascadeCSS[$this->tbCSSlvl-1] AS $k=>$v) {*/
/* 				$this->tablecascadeCSS[$this->tbCSSlvl][$k] = $v;*/
/* 		   }*/
/* 		}*/
/* 		$this->_mergeFullCSS($this->cascadeCSS, $this->tablecascadeCSS[$this->tbCSSlvl], $tag, $classes, $attr['ID']);*/
/* 		//===============================================*/
/* 		// Cascading forward CSS e.g. "table.topic td" for this table in $this->tablecascadeCSS */
/* 		//===============================================*/
/* 		// STYLESHEET TAG e.g. table*/
/* 		$this->_mergeFullCSS($this->tablecascadeCSS[$this->tbCSSlvl-1], $this->tablecascadeCSS[$this->tbCSSlvl], $tag, $classes, $attr['ID']);*/
/* 		//===============================================*/
/* 	}*/
/* /*-- END TABLES --*//* */
/* 	//===============================================*/
/* /*-- LISTS --*//* */
/* 	// Set Inherited properties*/
/* 	if ($inherit == 'TOPLIST') {	// $tag = UL,OL*/
/* 		//===============================================*/
/* 		// Save Cascading CSS e.g. "div.topic p" at this block level*/
/* 		if (isset($this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS'])) {*/
/* 			$this->listcascadeCSS[0] = $this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS'];*/
/* 		}*/
/* 		else {*/
/* 			$this->listcascadeCSS[0] = $this->cascadeCSS;*/
/* 		}*/
/* 	}*/
/* 	//===============================================*/
/* 	// Set Inherited properties*/
/* 	if ($inherit == 'TOPLIST' || $inherit == 'LIST') {*/
/* 		//Cascade everything from last level that is not an actual property, or defined by current tag/attributes*/
/* 		if (isset($this->listcascadeCSS[$this->listCSSlvl-1]) && is_array($this->listcascadeCSS[$this->listCSSlvl-1])) {*/
/* 		   foreach($this->listcascadeCSS[$this->listCSSlvl-1] AS $k=>$v) {*/
/* 				$this->listcascadeCSS[$this->listCSSlvl][$k] = $v;*/
/* 		   }*/
/* 		}*/
/* 		$this->_mergeFullCSS($this->cascadeCSS, $this->listcascadeCSS[$this->listCSSlvl], $tag, $classes, $attr['ID']);*/
/* 		//===============================================*/
/* 		// Cascading forward CSS e.g. "table.topic td" for this list in $this->listcascadeCSS */
/* 		//===============================================*/
/* 		// STYLESHEET TAG e.g. table*/
/* 		$this->_mergeFullCSS($this->listcascadeCSS[$this->listCSSlvl-1], $this->listcascadeCSS[$this->listCSSlvl], $tag, $classes, $attr['ID']);*/
/* 		//===============================================*/
/* 	}*/
/* /*-- END LISTS --*//* */
/* 	//===============================================*/
/* 	// Set Inherited properties*/
/* 	if ($inherit == 'BLOCK') {*/
/* 		if (isset($this->mpdf->blk[$this->mpdf->blklvl-1]['cascadeCSS']) && is_array($this->mpdf->blk[$this->mpdf->blklvl-1]['cascadeCSS'])) {*/
/* 		   foreach($this->mpdf->blk[$this->mpdf->blklvl-1]['cascadeCSS'] AS $k=>$v) {*/
/* 				$this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS'][$k] = $v;*/
/* */
/* 		   }*/
/* 		}*/
/* */
/* 		//===============================================*/
/* 		// Save Cascading CSS e.g. "div.topic p" at this block level*/
/* 		$this->_mergeFullCSS($this->cascadeCSS, $this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS'], $tag, $classes, $attr['ID']);*/
/* 		//===============================================*/
/* 		// Cascading forward CSS*/
/* 		//===============================================*/
/* 		$this->_mergeFullCSS($this->mpdf->blk[$this->mpdf->blklvl-1]['cascadeCSS'], $this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS'], $tag, $classes, $attr['ID']);*/
/* 		//===============================================*/
/* 		  // Block properties*/
/* 		  if (isset($this->mpdf->blk[$this->mpdf->blklvl-1]['margin_collapse']) && $this->mpdf->blk[$this->mpdf->blklvl-1]['margin_collapse']) { $p['MARGIN-COLLAPSE'] = 'COLLAPSE'; }	// custom tag, but follows CSS principle that border-collapse is inherited*/
/* 		  if (isset($this->mpdf->blk[$this->mpdf->blklvl-1]['line_height']) && $this->mpdf->blk[$this->mpdf->blklvl-1]['line_height']) { $p['LINE-HEIGHT'] = $this->mpdf->blk[$this->mpdf->blklvl-1]['line_height']; }*/
/* */
/* 		  if (isset($this->mpdf->blk[$this->mpdf->blklvl-1]['direction']) && $this->mpdf->blk[$this->mpdf->blklvl-1]['direction']) { $p['DIRECTION'] = $this->mpdf->blk[$this->mpdf->blklvl-1]['direction']; }*/
/* */
/* 		  if (isset($this->mpdf->blk[$this->mpdf->blklvl-1]['align']) && $this->mpdf->blk[$this->mpdf->blklvl-1]['align']) { */
/* 			if ($this->mpdf->blk[$this->mpdf->blklvl-1]['align'] == 'L') { $p['TEXT-ALIGN'] = 'left'; } */
/* 			else if ($this->mpdf->blk[$this->mpdf->blklvl-1]['align'] == 'J') { $p['TEXT-ALIGN'] = 'justify'; } */
/* 			else if ($this->mpdf->blk[$this->mpdf->blklvl-1]['align'] == 'R') { $p['TEXT-ALIGN'] = 'right'; } */
/* 			else if ($this->mpdf->blk[$this->mpdf->blklvl-1]['align'] == 'C') { $p['TEXT-ALIGN'] = 'center'; } */
/* 		  }*/
/* 		  if ($this->mpdf->ColActive || $this->mpdf->keep_block_together) { */
/* 		  	if (isset($this->mpdf->blk[$this->mpdf->blklvl-1]['bgcolor']) && $this->mpdf->blk[$this->mpdf->blklvl-1]['bgcolor']) { // Doesn't officially inherit, but default value is transparent (?=inherited)*/
/* 				$cor = $this->mpdf->blk[$this->mpdf->blklvl-1]['bgcolorarray' ];*/
/* 				$p['BACKGROUND-COLOR'] = $this->mpdf->_colAtoString($cor);*/
/* 			}*/
/* 		  }*/
/* */
/* 		if (isset($this->mpdf->blk[$this->mpdf->blklvl-1]['text_indent']) && ($this->mpdf->blk[$this->mpdf->blklvl-1]['text_indent'] || $this->mpdf->blk[$this->mpdf->blklvl-1]['text_indent']===0)) { $p['TEXT-INDENT'] = $this->mpdf->blk[$this->mpdf->blklvl-1]['text_indent']; }*/
/* 		if (isset($this->mpdf->blk[$this->mpdf->blklvl-1]['InlineProperties'])) {*/
/* 			$biilp = $this->mpdf->blk[$this->mpdf->blklvl-1]['InlineProperties'];*/
/* 		}*/
/* 		else { $biilp = null; }*/
/* 		if (isset($biilp[ 'family' ]) && $biilp[ 'family' ]) { $p['FONT-FAMILY'] = $biilp[ 'family' ]; }*/
/* 		if (isset($biilp[ 'I' ]) && $biilp[ 'I' ]) { $p['FONT-STYLE'] = 'italic'; }*/
/* 		if (isset($biilp[ 'sizePt' ]) && $biilp[ 'sizePt' ]) { $p['FONT-SIZE'] = $biilp[ 'sizePt' ] . 'pt'; }*/
/* 		if (isset($biilp[ 'B' ]) && $biilp[ 'B' ]) { $p['FONT-WEIGHT'] = 'bold'; }*/
/* 		if (isset($biilp[ 'colorarray' ]) && $biilp[ 'colorarray' ]) { */
/* 			$cor = $biilp[ 'colorarray' ];*/
/* 			$p['COLOR'] = $this->mpdf->_colAtoString($cor);*/
/* 		}*/
/* 		if (isset($biilp[ 'fontkerning' ])) {*/
/* 			if ($biilp[ 'fontkerning' ]) { $p['FONT-KERNING'] = 'normal'; }*/
/* 			else { $p['FONT-KERNING'] = 'none'; }*/
/* 		}*/
/* 		if (isset($biilp[ 'lSpacingCSS' ]) && $biilp[ 'lSpacingCSS' ]) { $p['LETTER-SPACING'] = $biilp[ 'lSpacingCSS' ]; }*/
/* 		if (isset($biilp[ 'wSpacingCSS' ]) && $biilp[ 'wSpacingCSS' ]) { $p['WORD-SPACING'] = $biilp[ 'wSpacingCSS' ]; }	*/
/* 		if (isset($biilp[ 'toupper' ]) && $biilp[ 'toupper' ]) { $p['TEXT-TRANSFORM'] = 'uppercase'; }*/
/* 		else if (isset($biilp[ 'tolower' ]) && $biilp[ 'tolower' ]) { $p['TEXT-TRANSFORM'] = 'lowercase'; }*/
/* 		else if (isset($biilp[ 'capitalize' ]) && $biilp[ 'capitalize' ]) { $p['TEXT-TRANSFORM'] = 'capitalize'; }*/
/* 			// CSS says text-decoration is not inherited, but IE7 does?? */
/* 		if (isset($biilp[ 'underline' ]) && $biilp[ 'underline' ]) { $p['TEXT-DECORATION'] = 'underline'; }*/
/* 		if (isset($biilp[ 'smCaps' ]) && $biilp[ 'smCaps' ]) { $p['FONT-VARIANT'] = 'small-caps'; }*/
/* */
/* 	}*/
/* 	//===============================================*/
/* 	//===============================================*/
/* /*-- LISTS --*//* */
/* 	// Set Inherited properties*/
/* 	if ($inherit == 'TOPLIST') {*/
/* 		if ($this->listCSSlvl == 1) {*/
/* 		    $bilp = $this->mpdf->blk[$this->mpdf->blklvl]['InlineProperties'];*/
/* 		    if (isset($bilp[ 'family' ]) && $bilp[ 'family' ]) { $p['FONT-FAMILY'] = $bilp[ 'family' ]; }*/
/*    		    if (isset($bilp[ 'I' ]) && $bilp[ 'I' ]) { $p['FONT-STYLE'] = 'italic'; }*/
/*    		    if (isset($bilp[ 'sizePt' ]) && $bilp[ 'sizePt' ]) { $p['FONT-SIZE'] = $bilp[ 'sizePt' ] . 'pt'; }*/
/*    		    if (isset($bilp[ 'B' ]) && $bilp[ 'B' ]) { $p['FONT-WEIGHT'] = 'bold'; }*/
/*    		    if (isset($bilp[ 'colorarray' ]) && $bilp[ 'colorarray' ]) { */
/* 			$cor = $bilp[ 'colorarray' ];*/
/* 			$p['COLOR'] = $this->mpdf->_colAtoString($cor);*/
/* 		    }*/
/* 		    if (isset($bilp[ 'toupper' ]) && $bilp[ 'toupper' ]) { $p['TEXT-TRANSFORM'] = 'uppercase'; }*/
/* 		    else if (isset($bilp[ 'tolower' ]) && $bilp[ 'tolower' ]) { $p['TEXT-TRANSFORM'] = 'lowercase'; }*/
/* 		    else if (isset($bilp[ 'capitalize' ]) && $bilp[ 'capitalize' ]) { $p['TEXT-TRANSFORM'] = 'capitalize'; }*/
/* 		    if (isset($bilp[ 'fontkerning' ])) {*/
/* 			if ($bilp[ 'fontkerning' ]) { $p['FONT-KERNING'] = 'normal'; }*/
/* 			else { $p['FONT-KERNING'] = 'none'; }*/
/* 		    }*/
/* 		    if (isset($bilp[ 'lSpacingCSS' ]) && $bilp[ 'lSpacingCSS' ]) { $p['LETTER-SPACING'] = $bilp[ 'lSpacingCSS' ]; }*/
/* 		    if (isset($bilp[ 'wSpacingCSS' ]) && $bilp[ 'wSpacingCSS' ]) { $p['WORD-SPACING'] = $bilp[ 'wSpacingCSS' ]; }*/
/* 			// CSS says text-decoration is not inherited, but IE7 does??*/
/* 		    if (isset($bilp[ 'underline' ]) && $bilp[ 'underline' ]) { $p['TEXT-DECORATION'] = 'underline'; }*/
/* 		    if (isset($bilp[ 'smCaps' ]) && $bilp[ 'smCaps' ]) { $p['FONT-VARIANT'] = 'small-caps'; }*/
/* 		    if ($tag=='LI') {*/
/* 			// Note to self - this should never work, as TOPLIST is not called when LI (see code removed in v5.3)*/
/* 			$this->mpdf->Error("If you see this message, please report this as a bug to the mPDF Forum.");*/
/* 		    }*/
/* 		}*/
/* 	}*/
/* /*-- END LISTS --*//* */
/* 	//===============================================*/
/* 	//===============================================*/
/* 	// DEFAULT for this TAG set in DefaultCSS*/
/* 	if (isset($this->mpdf->defaultCSS[$tag])) { */
/* 			$zp = $this->fixCSS($this->mpdf->defaultCSS[$tag]);*/
/* 			if (is_array($zp)) { 	// Default overwrites Inherited*/
/* 				$p = array_merge($p,$zp); 	// !! Note other way round !!*/
/* 				$this->_mergeBorders($p,$zp);*/
/* 			}*/
/* 	}*/
/* 	//===============================================*/
/* /*-- TABLES --*//* */
/* 	// mPDF 5.7.3*/
/* 	// cellSpacing overwrites TABLE default but not specific CSS set on table*/
/* 	if ($tag=='TABLE' && isset($attr['CELLSPACING'])) {*/
/* 		$p['BORDER-SPACING-H'] = $p['BORDER-SPACING-V'] = $attr['CELLSPACING'];*/
/* 	}*/
/* 	// cellPadding overwrites TD/TH default but not specific CSS set on cell*/
/* 	if (($tag=='TD' || $tag=='TH') && isset($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['cell_padding']) && ($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['cell_padding'] || $this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['cell_padding']==='0')) { 	// mPDF 5.7.3*/
/* 		$p['PADDING-LEFT'] = $this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['cell_padding'];*/
/* 		$p['PADDING-RIGHT'] = $this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['cell_padding'];*/
/* 		$p['PADDING-TOP'] = $this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['cell_padding'];*/
/* 		$p['PADDING-BOTTOM'] = $this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['cell_padding'];*/
/* 	}*/
/* /*-- END TABLES --*//* */
/* 	//===============================================*/
/* 	// STYLESHEET TAG e.g. h1  p  div  table*/
/* 	if (isset($this->CSS[$tag]) && $this->CSS[$tag]) { */
/* 			$zp = $this->CSS[$tag];*/
/* 			if ($tag=='TD' || $tag=='TH')  { $this->setBorderDominance($zp, 9); }	// *TABLES*	// *TABLES-ADVANCED-BORDERS**/
/* 			if (is_array($zp)) { */
/* 				$p = array_merge($p,$zp); */
/* 				$this->_mergeBorders($p,$zp);*/
/* 			}*/
/* 	}*/
/* 	//===============================================*/
/* 	// STYLESHEET CLASS e.g. .smallone{}  .redletter{}*/
/* 	foreach($classes AS $class) {*/
/* 			$zp = array();*/
/* 			if (isset($this->CSS['CLASS>>'.$class]) && $this->CSS['CLASS>>'.$class]) { $zp = $this->CSS['CLASS>>'.$class]; }*/
/* 			if ($tag=='TD' || $tag=='TH')  { $this->setBorderDominance($zp, 9); }	// *TABLES*	// *TABLES-ADVANCED-BORDERS**/
/* 			if (is_array($zp)) { */
/* 				$p = array_merge($p,$zp); */
/* 				$this->_mergeBorders($p,$zp);*/
/* 			}*/
/* 	}*/
/* 	//===============================================*/
/* /*-- TABLES --*//* */
/* 	// STYLESHEET nth-child SELECTOR e.g. tr:nth-child(odd)  td:nth-child(2n+1)*/
/* 	if ($tag=='TR' || $tag=='TD' || $tag=='TH')  {*/
/* 		foreach($this->CSS AS $k=>$val) {*/
/* 			if (preg_match('/'.$tag.'>>SELECTORNTHCHILD>>(.*)/',$k, $m)) {*/
/* 				$select = false;*/
/* 				if ($tag=='TR')  {*/
/* 					$row = $this->mpdf->row;*/
/* 					$thnr = (isset($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_thead']) ? count($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_thead']) : 0);*/
/* 					$tfnr = (isset($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_tfoot']) ? count($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_tfoot']) : 0);*/
/* 					if ($this->mpdf->tabletfoot) { $row -= $thnr; }*/
/* 					else if (!$this->mpdf->tablethead) { $row -= ($thnr + $tfnr); }*/
/* 					if ($m[1]=='ODD' && ($row % 2) == 0) { $select = true; }*/
/* 					else if ($m[1]=='EVEN' && ($row % 2) == 1) { $select = true; }*/
/* 					else if (preg_match('/(\d+)N\+(\d+)/',$m[1],$a)) {*/
/* 						if ((($row + 1) % $a[1]) == $a[2]) { $select = true; }*/
/* 					}*/
/* 				}*/
/* 				else  if ($tag=='TD' || $tag=='TH')  {*/
/* 					if ($m[1]=='ODD' && ($this->mpdf->col % 2) == 0) { $select = true; }*/
/* 					else if ($m[1]=='EVEN' && ($this->mpdf->col % 2) == 1) { $select = true; }*/
/* 					else if (preg_match('/(\d+)N\+(\d+)/',$m[1],$a)) {*/
/* 						if ((($this->mpdf->col+1) % $a[1]) == $a[2]) { $select = true; }*/
/* 					}*/
/* 				}*/
/* 				if ($select) {*/
/* 					$zp = $this->CSS[$tag.'>>SELECTORNTHCHILD>>'.$m[1]];*/
/* 					if ($tag=='TD' || $tag=='TH')  { $this->setBorderDominance($zp, 9); }*/
/* 					if (is_array($zp)) { */
/* 						$p = array_merge($p,$zp); */
/* 						$this->_mergeBorders($p,$zp);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* /*-- END TABLES --*//* */
/* 	//===============================================*/
/* 	// STYLESHEET ID e.g. #smallone{}  #redletter{}*/
/* 	if (isset($attr['ID']) && isset($this->CSS['ID>>'.$attr['ID']]) && $this->CSS['ID>>'.$attr['ID']]) {*/
/* 			$zp = $this->CSS['ID>>'.$attr['ID']];*/
/* 			if ($tag=='TD' || $tag=='TH')  { $this->setBorderDominance($zp, 9); }	// *TABLES*	// *TABLES-ADVANCED-BORDERS**/
/* 			if (is_array($zp)) { */
/* 				$p = array_merge($p,$zp); */
/* 				$this->_mergeBorders($p,$zp);*/
/* 			}*/
/* 	}*/
/* 	//===============================================*/
/* 	// STYLESHEET CLASS e.g. p.smallone{}  div.redletter{}*/
/* 	foreach($classes AS $class) {*/
/* 			$zp = array();*/
/* 			if (isset($this->CSS[$tag.'>>CLASS>>'.$class]) && $this->CSS[$tag.'>>CLASS>>'.$class]) { $zp = $this->CSS[$tag.'>>CLASS>>'.$class]; }*/
/* 			if ($tag=='TD' || $tag=='TH')  { $this->setBorderDominance($zp, 9); }	// *TABLES*	// *TABLES-ADVANCED-BORDERS**/
/* 			if (is_array($zp)) { */
/* 				$p = array_merge($p,$zp); */
/* 				$this->_mergeBorders($p,$zp);*/
/* 			}*/
/* 	}*/
/* 	//===============================================*/
/* 	// STYLESHEET CLASS e.g. p#smallone{}  div#redletter{}*/
/* 	if (isset($attr['ID']) && isset($this->CSS[$tag.'>>ID>>'.$attr['ID']]) && $this->CSS[$tag.'>>ID>>'.$attr['ID']]) {*/
/* 			$zp = $this->CSS[$tag.'>>ID>>'.$attr['ID']];*/
/* 			if ($tag=='TD' || $tag=='TH')  { $this->setBorderDominance($zp, 9); }	// *TABLES*	// *TABLES-ADVANCED-BORDERS**/
/* 			if (is_array($zp)) { */
/* 				$p = array_merge($p,$zp); */
/* 				$this->_mergeBorders($p,$zp);*/
/* 			}*/
/* 	}*/
/* 	//===============================================*/
/* 	// Cascaded e.g. div.class p only works for block level*/
/* 	if ($inherit == 'BLOCK') {*/
/* 		$this->_set_mergedCSS($this->mpdf->blk[$this->mpdf->blklvl-1]['cascadeCSS'][$tag], $p);*/
/* 		foreach($classes AS $class) {*/
/* 			$this->_set_mergedCSS($this->mpdf->blk[$this->mpdf->blklvl-1]['cascadeCSS']['CLASS>>'.$class], $p);*/
/* 		}*/
/* 		$this->_set_mergedCSS($this->mpdf->blk[$this->mpdf->blklvl-1]['cascadeCSS']['ID>>'.$attr['ID']], $p);*/
/* 		foreach($classes AS $class) {*/
/* 			$this->_set_mergedCSS($this->mpdf->blk[$this->mpdf->blklvl-1]['cascadeCSS'][$tag.'>>CLASS>>'.$class], $p);*/
/* 		}*/
/* 		$this->_set_mergedCSS($this->mpdf->blk[$this->mpdf->blklvl-1]['cascadeCSS'][$tag.'>>ID>>'.$attr['ID']], $p);*/
/* 	}*/
/* 	else if ($inherit == 'INLINE') {*/
/* 		$this->_set_mergedCSS($this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS'][$tag], $p);*/
/* 		foreach($classes AS $class) {*/
/* 			$this->_set_mergedCSS($this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS']['CLASS>>'.$class], $p);*/
/* 		}*/
/* 		$this->_set_mergedCSS($this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS']['ID>>'.$attr['ID']], $p);*/
/* 		foreach($classes AS $class) {*/
/* 			$this->_set_mergedCSS($this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS'][$tag.'>>CLASS>>'.$class], $p);*/
/* 		}*/
/* 		$this->_set_mergedCSS($this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS'][$tag.'>>ID>>'.$attr['ID']], $p);*/
/* 	}*/
/* /*-- TABLES --*//* */
/* 	else if ($inherit == 'TOPTABLE' || $inherit == 'TABLE') { // NB looks at $this->tablecascadeCSS-1 for cascading CSS*/
/* 		// false, 9 = don't check for 'depth' and do set border dominance*/
/* 		$this->_set_mergedCSS($this->tablecascadeCSS[$this->tbCSSlvl-1][$tag], $p, false, 9);*/
/* 		foreach($classes AS $class) {*/
/* 			$this->_set_mergedCSS($this->tablecascadeCSS[$this->tbCSSlvl-1]['CLASS>>'.$class], $p, false, 9);*/
/* 		}*/
/* 		// STYLESHEET nth-child SELECTOR e.g. tr:nth-child(odd)  td:nth-child(2n+1)*/
/* 		if ($tag=='TR' || $tag=='TD' || $tag=='TH')  {*/
/* 			foreach($this->tablecascadeCSS[$this->tbCSSlvl-1] AS $k=>$val) {*/
/* 				if (preg_match('/'.$tag.'>>SELECTORNTHCHILD>>(.*)/',$k, $m)) {*/
/* 					$select = false;*/
/* 					if ($tag=='TR')  {*/
/* 						$row = $this->mpdf->row;*/
/* 						$thnr = (isset($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_thead']) ? count($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_thead']) : 0);*/
/* 						$tfnr = (isset($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_tfoot']) ? count($this->mpdf->table[$this->mpdf->tableLevel][$this->mpdf->tbctr[$this->mpdf->tableLevel]]['is_tfoot']) : 0);*/
/* 						if ($this->mpdf->tabletfoot) { $row -= $thnr; }*/
/* 						else if (!$this->mpdf->tablethead) { $row -= ($thnr + $tfnr); }*/
/* 						if ($m[1]=='ODD' && ($row % 2) == 0) { $select = true; }*/
/* 						else if ($m[1]=='EVEN' && ($row % 2) == 1) { $select = true; }*/
/* 						else if (preg_match('/(\d+)N\+(\d+)/',$m[1],$a)) {*/
/* 							if ((($row + 1) % $a[1]) == $a[2]) { $select = true; }*/
/* 						}*/
/* 					}*/
/* 					else if ($tag=='TD' || $tag=='TH')  {*/
/* 						if ($m[1]=='ODD' && ($this->mpdf->col % 2) == 0) { $select = true; }*/
/* 						else if ($m[1]=='EVEN' && ($this->mpdf->col % 2) == 1) { $select = true; }*/
/* 						else if (preg_match('/(\d+)N\+(\d+)/',$m[1],$a)) {*/
/* 							if ((($this->mpdf->col + 1) % $a[1]) == $a[2]) { $select = true; }*/
/* 						}*/
/* 					}*/
/* 					if ($select) {*/
/* 						$this->_set_mergedCSS($this->tablecascadeCSS[$this->tbCSSlvl-1][$tag.'>>SELECTORNTHCHILD>>'.$m[1]], $p, false, 9);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 		$this->_set_mergedCSS($this->tablecascadeCSS[$this->tbCSSlvl-1]['ID>>'.$attr['ID']], $p, false, 9);*/
/* 		foreach($classes AS $class) {*/
/* 			$this->_set_mergedCSS($this->tablecascadeCSS[$this->tbCSSlvl-1][$tag.'>>CLASS>>'.$class], $p, false, 9);*/
/* 		}*/
/* 		$this->_set_mergedCSS($this->tablecascadeCSS[$this->tbCSSlvl-1][$tag.'>>ID>>'.$attr['ID']], $p, false, 9);*/
/* 	}*/
/* /*-- END TABLES --*//* */
/* 	//===============================================*/
/* /*-- LISTS --*//* */
/* 	else if ($inherit == 'TOPLIST' || $inherit == 'LIST') { // NB looks at $this->listcascadeCSS-1 for cascading CSS*/
/* 		// false = don't check for 'depth' */
/* 		$this->_set_mergedCSS($this->listcascadeCSS[$this->listCSSlvl-1][$tag], $p, false);*/
/* 		foreach($classes AS $class) {*/
/* 			$this->_set_mergedCSS($this->listcascadeCSS[$this->listCSSlvl-1]['CLASS>>'.$class], $p, false);*/
/* 		}*/
/* 		$this->_set_mergedCSS($this->listcascadeCSS[$this->listCSSlvl-1]['ID>>'.$attr['ID']], $p, false);*/
/* 		foreach($classes AS $class) {*/
/* 			$this->_set_mergedCSS($this->listcascadeCSS[$this->listCSSlvl-1][$tag.'>>CLASS>>'.$class], $p, false);*/
/* 		}*/
/* 		$this->_set_mergedCSS($this->listcascadeCSS[$this->listCSSlvl-1][$tag.'>>ID>>'.$attr['ID']], $p, false);*/
/* 	}*/
/* /*-- END LISTS --*//* */
/* 	//===============================================*/
/* 	//===============================================*/
/* 	// INLINE STYLE e.g. style="CSS:property"*/
/* 	if (isset($attr['STYLE'])) {*/
/* 			$zp = $this->readInlineCSS($attr['STYLE']);*/
/* 			if ($tag=='TD' || $tag=='TH')  { $this->setBorderDominance($zp, 9); }	// *TABLES*	// *TABLES-ADVANCED-BORDERS**/
/* 			if (is_array($zp)) { */
/* 				$p = array_merge($p,$zp); */
/* 				$this->_mergeBorders($p,$zp);*/
/* 			}*/
/* 	}*/
/* 	//===============================================*/
/* 	//===============================================*/
/* 	// INLINE ATTRIBUTES e.g. .. ALIGN="CENTER">*/
/* 	if (isset($attr['LANG']) and $attr['LANG']!='') {*/
/* 			$p['LANG'] = $attr['LANG'];*/
/* 	}*/
/* 	if (isset($attr['COLOR']) and $attr['COLOR']!='') {*/
/* 			$p['COLOR'] = $attr['COLOR'];*/
/* 	}*/
/* 	if ($tag != 'INPUT') {*/
/* 		if (isset($attr['WIDTH']) and $attr['WIDTH']!='') {*/
/* 			$p['WIDTH'] = $attr['WIDTH'];*/
/* 		}*/
/* 		if (isset($attr['HEIGHT']) and $attr['HEIGHT']!='') {*/
/* 			$p['HEIGHT'] = $attr['HEIGHT'];*/
/* 		}*/
/* 	}*/
/* 	if ($tag == 'FONT') {*/
/* 		if (isset($attr['FACE'])) {*/
/* 			$p['FONT-FAMILY'] = $attr['FACE'];*/
/* 		}*/
/* 		if (isset($attr['SIZE']) and $attr['SIZE']!='') {*/
/* 			$s = '';*/
/* 			if ($attr['SIZE'] === '+1') { $s = '120%'; }*/
/* 			else if ($attr['SIZE'] === '-1') { $s = '86%'; }*/
/* 			else if ($attr['SIZE'] === '1') { $s = 'XX-SMALL'; }*/
/* 			else if ($attr['SIZE'] == '2') { $s = 'X-SMALL'; }*/
/* 			else if ($attr['SIZE'] == '3') { $s = 'SMALL'; }*/
/* 			else if ($attr['SIZE'] == '4') { $s = 'MEDIUM'; }*/
/* 			else if ($attr['SIZE'] == '5') { $s = 'LARGE'; }*/
/* 			else if ($attr['SIZE'] == '6') { $s = 'X-LARGE'; }*/
/* 			else if ($attr['SIZE'] == '7') { $s = 'XX-LARGE'; }*/
/* 			if ($s) $p['FONT-SIZE'] = $s;*/
/* 		}*/
/* 	}*/
/* 	if (isset($attr['VALIGN']) and $attr['VALIGN']!='') {*/
/* 		$p['VERTICAL-ALIGN'] = $attr['VALIGN'];*/
/* 	}*/
/* 	if (isset($attr['VSPACE']) and $attr['VSPACE']!='') {*/
/* 		$p['MARGIN-TOP'] = $attr['VSPACE'];*/
/* 		$p['MARGIN-BOTTOM'] = $attr['VSPACE'];*/
/* 	}*/
/* 	if (isset($attr['HSPACE']) and $attr['HSPACE']!='') {*/
/* 		$p['MARGIN-LEFT'] = $attr['HSPACE'];*/
/* 		$p['MARGIN-RIGHT'] = $attr['HSPACE'];*/
/* 	}*/
/* 	//===============================================*/
/* 	return $p;*/
/* }*/
/* */
/* function PreviewBlockCSS($tag,$attr) {*/
/* 	// Looks ahead from current block level to a new level*/
/* 	$p = array();*/
/* 	$zp = array(); */
/* 	$oldcascadeCSS = $this->mpdf->blk[$this->mpdf->blklvl]['cascadeCSS'];*/
/* 	$classes = array();*/
/* 	if (isset($attr['CLASS'])) { $classes = preg_split('/\s+/',$attr['CLASS']); }*/
/* 	//===============================================*/
/* 	// DEFAULT for this TAG set in DefaultCSS*/
/* 	if (isset($this->mpdf->defaultCSS[$tag])) { */
/* 		$zp = $this->fixCSS($this->mpdf->defaultCSS[$tag]);*/
/* 		if (is_array($zp)) { $p = array_merge($zp,$p); }	// Inherited overwrites default*/
/* 	}*/
/* 	// STYLESHEET TAG e.g. h1  p  div  table*/
/* 	if (isset($this->CSS[$tag])) { */
/* 		$zp = $this->CSS[$tag];*/
/* 		if (is_array($zp)) { $p = array_merge($p,$zp); }*/
/* 	}*/
/* 	// STYLESHEET CLASS e.g. .smallone{}  .redletter{}*/
/* 	foreach($classes AS $class) {*/
/* 		$zp = array(); */
/* 		if (isset($this->CSS['CLASS>>'.$class])) { $zp = $this->CSS['CLASS>>'.$class]; }*/
/* 		if (is_array($zp)) { $p = array_merge($p,$zp); }*/
/* 	}*/
/* 	// STYLESHEET ID e.g. #smallone{}  #redletter{}*/
/* 	if (isset($attr['ID']) && isset($this->CSS['ID>>'.$attr['ID']])) {*/
/* 		$zp = $this->CSS['ID>>'.$attr['ID']];*/
/* 		if (is_array($zp)) { $p = array_merge($p,$zp); }*/
/* 	}*/
/* 	// STYLESHEET CLASS e.g. p.smallone{}  div.redletter{}*/
/* 	foreach($classes AS $class) {*/
/* 		$zp = array(); */
/* 		if (isset($this->CSS[$tag.'>>CLASS>>'.$class])) { $zp = $this->CSS[$tag.'>>CLASS>>'.$class]; }*/
/* 		if (is_array($zp)) { $p = array_merge($p,$zp); }*/
/* 	}*/
/* 	// STYLESHEET CLASS e.g. p#smallone{}  div#redletter{}*/
/* 	if (isset($attr['ID']) && isset($this->CSS[$tag.'>>ID>>'.$attr['ID']])) {*/
/* 		$zp = $this->CSS[$tag.'>>ID>>'.$attr['ID']];*/
/* 		if (is_array($zp)) { $p = array_merge($p,$zp); }*/
/* 	}*/
/* 	//===============================================*/
/* 	// STYLESHEET TAG e.g. div h1    div p*/
/* */
/* 	$this->_set_mergedCSS($oldcascadeCSS[$tag], $p);*/
/* 	// STYLESHEET CLASS e.g. .smallone{}  .redletter{}*/
/* 	foreach($classes AS $class) {*/
/* 	  */
/* 	  $this->_set_mergedCSS($oldcascadeCSS['CLASS>>'.$class], $p);*/
/* 	}*/
/* 	// STYLESHEET CLASS e.g. #smallone{}  #redletter{}*/
/* 	if (isset($attr['ID'])) {*/
/* 	  */
/* 	  $this->_set_mergedCSS($oldcascadeCSS['ID>>'.$attr['ID']], $p);*/
/* 	}*/
/* 	// STYLESHEET CLASS e.g. div.smallone{}  p.redletter{}*/
/* 	foreach($classes AS $class) {*/
/* 	  */
/* 	  $this->_set_mergedCSS($oldcascadeCSS[$tag.'>>CLASS>>'.$class], $p);*/
/* 	}*/
/* 	// STYLESHEET CLASS e.g. div#smallone{}  p#redletter{}*/
/* 	if (isset($attr['ID'])) {*/
/* 	  */
/* 	  $this->_set_mergedCSS($oldcascadeCSS[$tag.'>>ID>>'.$attr['ID']], $p);*/
/* 	}*/
/* 	//===============================================*/
/* 	// INLINE STYLE e.g. style="CSS:property"*/
/* 	if (isset($attr['STYLE'])) {*/
/* 		$zp = $this->readInlineCSS($attr['STYLE']);*/
/* 		if (is_array($zp)) { $p = array_merge($p,$zp); }*/
/* 	}*/
/* 	//===============================================*/
/* 	return $p;*/
/* }*/
/* */
/* */
/* */
/* */
/* */
/* }	// end of class*/
/* */
/* ?>*/
