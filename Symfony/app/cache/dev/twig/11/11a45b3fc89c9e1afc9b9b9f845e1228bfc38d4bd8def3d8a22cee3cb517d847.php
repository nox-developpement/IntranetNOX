<?php

/* support/include/mpdf/classes/ttfontsuni.php */
class __TwigTemplate_99697e3d3936252ebc3323f5e1f5ca6cb190468b8b3cb4ed42951d9ccef7fe2d extends Twig_Template
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
        $__internal_54b99af63d9d4525f287ab85d83f30a4b6632c6ee62a98ae62d6882cf07800b3 = $this->env->getExtension("native_profiler");
        $__internal_54b99af63d9d4525f287ab85d83f30a4b6632c6ee62a98ae62d6882cf07800b3->enter($__internal_54b99af63d9d4525f287ab85d83f30a4b6632c6ee62a98ae62d6882cf07800b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/mpdf/classes/ttfontsuni.php"));

        // line 1
        echo "<?php

/*******************************************************************************
* TTFontFile class                                                             *
*                                                                              *
* Version:  2.01\t\t                                                       *
* Date:     2012-02-25                                                         *
* Author:   Ian Back <ianb@bpm1.com>                                           *
* License:  LGPL                                                               *
* Copyright (c) Ian Back, 2010                                                 *
* This class is based on The ReportLab Open Source PDF library                 *
* written in Python - http://www.reportlab.com/software/opensource/            *
* together with ideas from the OpenOffice source code and others.              * 
* This header must be retained in any redistribution or                        *
* modification of the file.                                                    *
*                                                                              *
*******************************************************************************/

// Define the value used in the \"head\" table of a created TTF file
// 0x74727565 \"true\" for Mac
// 0x00010000 for Windows
// Either seems to work for a font embedded in a PDF file
// when read by Adobe Reader on a Windows PC(!)
if (!defined('_TTF_MAC_HEADER')) define(\"_TTF_MAC_HEADER\", false);

// Recalculate correct metadata/profiles when making subset fonts (not SIP/SMP)
// e.g. xMin, xMax, maxNContours
if (!defined('_RECALC_PROFILE')) define(\"_RECALC_PROFILE\", false);

// TrueType Font Glyph operators
define(\"GF_WORDS\",(1 << 0));
define(\"GF_SCALE\",(1 << 3));
define(\"GF_MORE\",(1 << 5));
define(\"GF_XYSCALE\",(1 << 6));
define(\"GF_TWOBYTWO\",(1 << 7));



class TTFontFile {

var \$unAGlyphs;\t// mPDF 5.4.05
var \$panose;
var \$maxUni;
var \$sFamilyClass;
var \$sFamilySubClass;
var \$sipset;
var \$smpset;
var \$_pos;
var \$numTables;
var \$searchRange;
var \$entrySelector;
var \$rangeShift;
var \$tables;
var \$otables;
var \$filename;
var \$fh;
var \$glyphPos;
var \$charToGlyph;
var \$ascent;
var \$descent;
var \$name;
var \$familyName;
var \$styleName;
var \$fullName;
var \$uniqueFontID;
var \$unitsPerEm;
var \$bbox;
var \$capHeight;
var \$stemV;
var \$italicAngle;
var \$flags;
var \$underlinePosition;
var \$underlineThickness;
var \$charWidths;
var \$defaultWidth;
var \$maxStrLenRead;
var \$numTTCFonts;
var \$TTCFonts;
var \$maxUniChar;
var \$kerninfo;

\tfunction TTFontFile() {
\t\t\$this->maxStrLenRead = 200000;\t// Maximum size of glyf table to read in as string (otherwise reads each glyph from file)
\t}


\tfunction getMetrics(\$file, \$TTCfontID=0, \$debug=false, \$BMPonly=false, \$kerninfo=false, \$unAGlyphs=false) {\t// mPDF 5.4.05
\t\t\$this->unAGlyphs = \$unAGlyphs;\t// mPDF 5.4.05
\t\t\$this->filename = \$file;
\t\t\$this->fh = fopen(\$file,'rb') or die('Can\\'t open file ' . \$file);
\t\t\$this->_pos = 0;
\t\t\$this->charWidths = '';
\t\t\$this->glyphPos = array();
\t\t\$this->charToGlyph = array();
\t\t\$this->tables = array();
\t\t\$this->otables = array();
\t\t\$this->kerninfo = array();
\t\t\$this->ascent = 0;
\t\t\$this->descent = 0;
\t\t\$this->numTTCFonts = 0;
\t\t\$this->TTCFonts = array();
\t\t\$this->version = \$version = \$this->read_ulong();
\t\t\$this->panose = array();
\t\tif (\$version==0x4F54544F) 
\t\t\tdie(\"Postscript outlines are not supported\");
\t\tif (\$version==0x74746366 && !\$TTCfontID) 
\t\t\tdie(\"ERROR - You must define the TTCfontID for a TrueType Collection in config_fonts.php (\". \$file.\")\");
\t\tif (!in_array(\$version, array(0x00010000,0x74727565)) && !\$TTCfontID)
\t\t\tdie(\"Not a TrueType font: version=\".\$version);
\t\tif (\$TTCfontID > 0) {
\t\t\t\$this->version = \$version = \$this->read_ulong();\t// TTC Header version now
\t\t\tif (!in_array(\$version, array(0x00010000,0x00020000)))
\t\t\t\tdie(\"ERROR - Error parsing TrueType Collection: version=\".\$version.\" - \" . \$file);
\t\t\t\$this->numTTCFonts = \$this->read_ulong();
\t\t\tfor (\$i=1; \$i<=\$this->numTTCFonts; \$i++) {
\t      \t      \$this->TTCFonts[\$i]['offset'] = \$this->read_ulong();
\t\t\t}
\t\t\t\$this->seek(\$this->TTCFonts[\$TTCfontID]['offset']);
\t\t\t\$this->version = \$version = \$this->read_ulong();\t// TTFont version again now
\t\t}
\t\t\$this->readTableDirectory(\$debug);
\t\t\$this->extractInfo(\$debug, \$BMPonly, \$kerninfo); 
\t\tfclose(\$this->fh);
\t}


\tfunction readTableDirectory(\$debug=false) {
\t    \$this->numTables = \$this->read_ushort();
            \$this->searchRange = \$this->read_ushort();
            \$this->entrySelector = \$this->read_ushort();
            \$this->rangeShift = \$this->read_ushort();
            \$this->tables = array();\t
            for (\$i=0;\$i<\$this->numTables;\$i++) {
                \$record = array();
                \$record['tag'] = \$this->read_tag();
                \$record['checksum'] = array(\$this->read_ushort(),\$this->read_ushort());
                \$record['offset'] = \$this->read_ulong();
                \$record['length'] = \$this->read_ulong();
                \$this->tables[\$record['tag']] = \$record;
\t\t}
\t\tif (\$debug) \$this->checksumTables();
\t}

\tfunction checksumTables() {
\t\t// Check the checksums for all tables
\t\tforeach(\$this->tables AS \$t) {
\t\t  if (\$t['length'] > 0 && \$t['length'] < \$this->maxStrLenRead) {\t// 1.02
            \t\$table = \$this->get_chunk(\$t['offset'], \$t['length']);
            \t\$checksum = \$this->calcChecksum(\$table);
            \tif (\$t['tag'] == 'head') {
\t\t\t\t\$up = unpack('n*', substr(\$table,8,4));
\t\t\t\t\$adjustment[0] = \$up[1];
\t\t\t\t\$adjustment[1] = \$up[2];
            \t\t\$checksum = \$this->sub32(\$checksum, \$adjustment);
\t\t\t}
            \t\$xchecksum = \$t['checksum'];
            \tif (\$xchecksum != \$checksum) 
            \t    die(sprintf('TTF file \"%s\": invalid checksum %s table: %s (expected %s)', \$this->filename,dechex(\$checksum[0]).dechex(\$checksum[1]),\$t['tag'],dechex(\$xchecksum[0]).dechex(\$xchecksum[1])));
\t\t  }
\t\t}
\t}

\tfunction sub32(\$x, \$y) {
\t\t\$xlo = \$x[1];
\t\t\$xhi = \$x[0];
\t\t\$ylo = \$y[1];
\t\t\$yhi = \$y[0];
\t\tif (\$ylo > \$xlo) { \$xlo += 1 << 16; \$yhi += 1; }
\t\t\$reslo = \$xlo-\$ylo;
\t\tif (\$yhi > \$xhi) { \$xhi += 1 << 16;  }
\t\t\$reshi = \$xhi-\$yhi;
\t\t\$reshi = \$reshi & 0xFFFF;
\t\treturn array(\$reshi, \$reslo);
\t}

\tfunction calcChecksum(\$data)  {
\t\tif (strlen(\$data) % 4) { \$data .= str_repeat(\"\\0\",(4-(strlen(\$data) % 4))); }
\t\t\$len = strlen(\$data);
\t\t\$hi=0x0000;
\t\t\$lo=0x0000;
\t\tfor(\$i=0;\$i<\$len;\$i+=4) {
\t\t\t\$hi += (ord(\$data[\$i])<<8) + ord(\$data[\$i+1]);
\t\t\t\$lo += (ord(\$data[\$i+2])<<8) + ord(\$data[\$i+3]);
\t\t\t\$hi += (\$lo >> 16) & 0xFFFF;
\t\t\t\$lo = \$lo & 0xFFFF;
\t\t}
\t\treturn array(\$hi, \$lo);
\t}

\tfunction get_table_pos(\$tag) {
\t\t\$offset = \$this->tables[\$tag]['offset'];
\t\t\$length = \$this->tables[\$tag]['length'];
\t\treturn array(\$offset, \$length);
\t}

\tfunction seek(\$pos) {
\t\t\$this->_pos = \$pos;
\t\tfseek(\$this->fh,\$this->_pos);
\t}

\tfunction skip(\$delta) {
\t\t\$this->_pos = \$this->_pos + \$delta;
\t\tfseek(\$this->fh,\$delta,SEEK_CUR);
\t}

\tfunction seek_table(\$tag, \$offset_in_table = 0) {
\t\t\$tpos = \$this->get_table_pos(\$tag);
\t\t\$this->_pos = \$tpos[0] + \$offset_in_table;
\t\tfseek(\$this->fh, \$this->_pos);
\t\treturn \$this->_pos;
\t}

\tfunction read_tag() {
\t\t\$this->_pos += 4;
\t\treturn fread(\$this->fh,4);
\t}

\tfunction read_short() {
\t\t\$this->_pos += 2;
\t\t\$s = fread(\$this->fh,2);
\t\t\$a = (ord(\$s[0])<<8) + ord(\$s[1]);
\t\tif (\$a & (1 << 15) ) { 
\t\t\t\$a = (\$a - (1 << 16)); 
\t\t}
\t\treturn \$a;
\t}

\tfunction unpack_short(\$s) {
\t\t\$a = (ord(\$s[0])<<8) + ord(\$s[1]);
\t\tif (\$a & (1 << 15) ) { 
\t\t\t\$a = (\$a - (1 << 16)); 
\t\t}
\t\treturn \$a;
\t}

\tfunction read_ushort() {
\t\t\$this->_pos += 2;
\t\t\$s = fread(\$this->fh,2);
\t\treturn (ord(\$s[0])<<8) + ord(\$s[1]);
\t}

\tfunction read_ulong() {
\t\t\$this->_pos += 4;
\t\t\$s = fread(\$this->fh,4);
\t\t// if large uInt32 as an integer, PHP converts it to -ve
\t\treturn (ord(\$s[0])*16777216) + (ord(\$s[1])<<16) + (ord(\$s[2])<<8) + ord(\$s[3]); // \t16777216  = 1<<24
\t}

\tfunction get_ushort(\$pos) {
\t\tfseek(\$this->fh,\$pos);
\t\t\$s = fread(\$this->fh,2);
\t\treturn (ord(\$s[0])<<8) + ord(\$s[1]);
\t}

\tfunction get_ulong(\$pos) {
\t\tfseek(\$this->fh,\$pos);
\t\t\$s = fread(\$this->fh,4);
\t\t// iF large uInt32 as an integer, PHP converts it to -ve
\t\treturn (ord(\$s[0])*16777216) + (ord(\$s[1])<<16) + (ord(\$s[2])<<8) + ord(\$s[3]); // \t16777216  = 1<<24
\t}

\tfunction pack_short(\$val) {
\t\tif (\$val<0) { 
\t\t\t\$val = abs(\$val);
\t\t\t\$val = ~\$val;
\t\t\t\$val += 1;
\t\t}
\t\treturn pack(\"n\",\$val); 
\t}

\tfunction splice(\$stream, \$offset, \$value) {
\t\treturn substr(\$stream,0,\$offset) . \$value . substr(\$stream,\$offset+strlen(\$value));
\t}

\tfunction _set_ushort(\$stream, \$offset, \$value) {
\t\t\$up = pack(\"n\", \$value);
\t\treturn \$this->splice(\$stream, \$offset, \$up);
\t}

\tfunction _set_short(\$stream, \$offset, \$val) {
\t\tif (\$val<0) { 
\t\t\t\$val = abs(\$val);
\t\t\t\$val = ~\$val;
\t\t\t\$val += 1;
\t\t}
\t\t\$up = pack(\"n\",\$val); 
\t\treturn \$this->splice(\$stream, \$offset, \$up);
\t}

\tfunction get_chunk(\$pos, \$length) {
\t\tfseek(\$this->fh,\$pos);
\t\tif (\$length <1) { return ''; }
\t\treturn (fread(\$this->fh,\$length));
\t}

\tfunction get_table(\$tag) {
\t\tlist(\$pos, \$length) = \$this->get_table_pos(\$tag);
\t\tif (\$length == 0) { return ''; }
\t\tfseek(\$this->fh,\$pos);
\t\treturn (fread(\$this->fh,\$length));
\t}

\tfunction add(\$tag, \$data) {
\t\tif (\$tag == 'head') {
\t\t\t\$data = \$this->splice(\$data, 8, \"\\0\\0\\0\\0\");
\t\t}
\t\t\$this->otables[\$tag] = \$data;
\t}



/////////////////////////////////////////////////////////////////////////////////////////
\tfunction getCTG(\$file, \$TTCfontID=0, \$debug=false, \$unAGlyphs=false) {\t// mPDF 5.4.05
\t\t\$this->unAGlyphs = \$unAGlyphs;\t// mPDF 5.4.05
\t\t\$this->filename = \$file;
\t\t\$this->fh = fopen(\$file,'rb') or die('Can\\'t open file ' . \$file);
\t\t\$this->_pos = 0;
\t\t\$this->charWidths = '';
\t\t\$this->glyphPos = array();
\t\t\$this->charToGlyph = array();
\t\t\$this->tables = array();
\t\t\$this->numTTCFonts = 0;
\t\t\$this->TTCFonts = array();
\t\t\$this->skip(4);
\t\tif (\$TTCfontID > 0) {
\t\t\t\$this->version = \$version = \$this->read_ulong();\t// TTC Header version now
\t\t\tif (!in_array(\$version, array(0x00010000,0x00020000)))
\t\t\t\tdie(\"ERROR - Error parsing TrueType Collection: version=\".\$version.\" - \" . \$file);
\t\t\t\$this->numTTCFonts = \$this->read_ulong();
\t\t\tfor (\$i=1; \$i<=\$this->numTTCFonts; \$i++) {
\t      \t      \$this->TTCFonts[\$i]['offset'] = \$this->read_ulong();
\t\t\t}
\t\t\t\$this->seek(\$this->TTCFonts[\$TTCfontID]['offset']);
\t\t\t\$this->version = \$version = \$this->read_ulong();\t// TTFont version again now
\t\t}
\t\t\$this->readTableDirectory(\$debug);


\t\t// cmap - Character to glyph index mapping table
\t\t\$cmap_offset = \$this->seek_table(\"cmap\");
\t\t\$this->skip(2);
\t\t\$cmapTableCount = \$this->read_ushort();
\t\t\$unicode_cmap_offset = 0;
\t\tfor (\$i=0;\$i<\$cmapTableCount;\$i++) {
\t\t\t\$platformID = \$this->read_ushort();
\t\t\t\$encodingID = \$this->read_ushort();
\t\t\t\$offset = \$this->read_ulong();
\t\t\t\$save_pos = \$this->_pos;
\t\t\tif (\$platformID == 3 && \$encodingID == 1) { // Microsoft, Unicode
\t\t\t\t\$format = \$this->get_ushort(\$cmap_offset + \$offset);
\t\t\t\tif (\$format == 4) {
\t\t\t\t\t\$unicode_cmap_offset = \$cmap_offset + \$offset;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\telse if (\$platformID == 0) { // Unicode -- assume all encodings are compatible
\t\t\t\t\$format = \$this->get_ushort(\$cmap_offset + \$offset);
\t\t\t\tif (\$format == 4) {
\t\t\t\t\t\$unicode_cmap_offset = \$cmap_offset + \$offset;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\t\$this->seek(\$save_pos );
\t\t}

\t\t\$glyphToChar = array();
\t\t\$charToGlyph = array();
\t\t\$this->getCMAP4(\$unicode_cmap_offset, \$glyphToChar, \$charToGlyph );

\t\tfclose(\$this->fh);
\t\treturn (\$charToGlyph);
\t}

/////////////////////////////////////////////////////////////////////////////////////////
\tfunction getTTCFonts(\$file) {
\t\t\$this->filename = \$file;
\t\t\$this->fh = fopen(\$file,'rb');
\t\tif (!\$this->fh) { return ('ERROR - Can\\'t open file ' . \$file); }
\t\t\$this->numTTCFonts = 0;
\t\t\$this->TTCFonts = array();
\t\t\$this->version = \$version = \$this->read_ulong();
\t\tif (\$version==0x74746366) {
\t\t\t\$this->version = \$version = \$this->read_ulong();\t// TTC Header version now
\t\t\tif (!in_array(\$version, array(0x00010000,0x00020000)))
\t\t\t\treturn(\"ERROR - Error parsing TrueType Collection: version=\".\$version.\" - \" . \$file);
\t\t}
\t\telse {
\t\t\treturn(\"ERROR - Not a TrueType Collection: version=\".\$version.\" - \" . \$file);
\t\t}
\t\t\$this->numTTCFonts = \$this->read_ulong();
\t\tfor (\$i=1; \$i<=\$this->numTTCFonts; \$i++) {
\t            \$this->TTCFonts[\$i]['offset'] = \$this->read_ulong();
\t\t}
\t}



/////////////////////////////////////////////////////////////////////////////////////////

/////////////////////////////////////////////////////////////////////////////////////////

\tfunction extractInfo(\$debug=false, \$BMPonly=false, \$kerninfo=false) {
\t\t\$this->panose = array();
\t\t\$this->sFamilyClass = 0;
\t\t\$this->sFamilySubClass = 0;
\t\t///////////////////////////////////
\t\t// name - Naming table
\t\t///////////////////////////////////
\t\t\t\$name_offset = \$this->seek_table(\"name\");
\t\t\t\$format = \$this->read_ushort();
\t\t\tif (\$format != 0 && \$format != 1)
\t\t\t\tdie(\"Unknown name table format \".\$format);
\t\t\t\$numRecords = \$this->read_ushort();
\t\t\t\$string_data_offset = \$name_offset + \$this->read_ushort();
\t\t\t\$names = array(1=>'',2=>'',3=>'',4=>'',6=>'');
\t\t\t\$K = array_keys(\$names);
\t\t\t\$nameCount = count(\$names);
\t\t\tfor (\$i=0;\$i<\$numRecords; \$i++) {
\t\t\t\t\$platformId = \$this->read_ushort();
\t\t\t\t\$encodingId = \$this->read_ushort();
\t\t\t\t\$languageId = \$this->read_ushort();
\t\t\t\t\$nameId = \$this->read_ushort();
\t\t\t\t\$length = \$this->read_ushort();
\t\t\t\t\$offset = \$this->read_ushort();
\t\t\t\tif (!in_array(\$nameId,\$K)) continue;
\t\t\t\t\$N = '';
\t\t\t\tif (\$platformId == 3 && \$encodingId == 1 && \$languageId == 0x409) { // Microsoft, Unicode, US English, PS Name
\t\t\t\t\t\$opos = \$this->_pos;
\t\t\t\t\t\$this->seek(\$string_data_offset + \$offset);
\t\t\t\t\tif (\$length % 2 != 0)
\t\t\t\t\t\tdie(\"PostScript name is UTF-16BE string of odd length\");
\t\t\t\t\t\$length /= 2;
\t\t\t\t\t\$N = '';
\t\t\t\t\twhile (\$length > 0) {
\t\t\t\t\t\t\$char = \$this->read_ushort();
\t\t\t\t\t\t\$N .= (chr(\$char));
\t\t\t\t\t\t\$length -= 1;
\t\t\t\t\t}
\t\t\t\t\t\$this->_pos = \$opos;
\t\t\t\t\t\$this->seek(\$opos);
\t\t\t\t}
\t\t\t\telse if (\$platformId == 1 && \$encodingId == 0 && \$languageId == 0) { // Macintosh, Roman, English, PS Name
\t\t\t\t\t\$opos = \$this->_pos;
\t\t\t\t\t\$N = \$this->get_chunk(\$string_data_offset + \$offset, \$length);
\t\t\t\t\t\$this->_pos = \$opos;
\t\t\t\t\t\$this->seek(\$opos);
\t\t\t\t}
\t\t\t\tif (\$N && \$names[\$nameId]=='') {
\t\t\t\t\t\$names[\$nameId] = \$N;
\t\t\t\t\t\$nameCount -= 1;
\t\t\t\t\tif (\$nameCount==0) break;
\t\t\t\t}
\t\t\t}
\t\t\tif (\$names[6])
\t\t\t\t\$psName = \$names[6];
\t\t\telse if (\$names[4])
\t\t\t\t\$psName = preg_replace('/ /','-',\$names[4]);
\t\t\telse if (\$names[1])
\t\t\t\t\$psName = preg_replace('/ /','-',\$names[1]);
\t\t\telse
\t\t\t\t\$psName = '';
\t\t\tif (!\$psName)
\t\t\t\tdie(\"Could not find PostScript font name: \".\$this->filename);
\t\t\tif (\$debug) {
\t\t\t   for (\$i=0;\$i<count(\$psName);\$i++) {
\t\t\t\t\$c = \$psName[\$i];
\t\t\t\t\$oc = ord(\$c);
\t\t\t\tif (\$oc>126 || strpos(' [](){}<>/%',\$c)!==false)
\t\t\t\t\tdie(\"psName=\".\$psName.\" contains invalid character \".\$c.\" ie U+\".ord(c));
\t\t\t   }
\t\t\t}
\t\t\t\$this->name = \$psName;
\t\t\tif (\$names[1]) { \$this->familyName = \$names[1]; } else { \$this->familyName = \$psName; }
\t\t\tif (\$names[2]) { \$this->styleName = \$names[2]; } else { \$this->styleName = 'Regular'; }
\t\t\tif (\$names[4]) { \$this->fullName = \$names[4]; } else { \$this->fullName = \$psName; }
\t\t\tif (\$names[3]) { \$this->uniqueFontID = \$names[3]; } else { \$this->uniqueFontID = \$psName; }

\t\t\tif (\$names[6]) { \$this->fullName = \$names[6]; }

\t\t///////////////////////////////////
\t\t// head - Font header table
\t\t///////////////////////////////////
\t\t\$this->seek_table(\"head\");
\t\tif (\$debug) { 
\t\t\t\$ver_maj = \$this->read_ushort();
\t\t\t\$ver_min = \$this->read_ushort();
\t\t\tif (\$ver_maj != 1)
\t\t\t\tdie('Unknown head table version '. \$ver_maj .'.'. \$ver_min);
\t\t\t\$this->fontRevision = \$this->read_ushort() . \$this->read_ushort();

\t\t\t\$this->skip(4);
\t\t\t\$magic = \$this->read_ulong();
\t\t\tif (\$magic != 0x5F0F3CF5) 
\t\t\t\tdie('Invalid head table magic ' .\$magic);
\t\t\t\$this->skip(2);
\t\t}
\t\telse {
\t\t\t\$this->skip(18); 
\t\t}
\t\t\$this->unitsPerEm = \$unitsPerEm = \$this->read_ushort();
\t\t\$scale = 1000 / \$unitsPerEm;
\t\t\$this->skip(16);
\t\t\$xMin = \$this->read_short();
\t\t\$yMin = \$this->read_short();
\t\t\$xMax = \$this->read_short();
\t\t\$yMax = \$this->read_short();
\t\t\$this->bbox = array((\$xMin*\$scale), (\$yMin*\$scale), (\$xMax*\$scale), (\$yMax*\$scale));
\t\t\$this->skip(3*2);
\t\t\$indexToLocFormat = \$this->read_ushort();
\t\t\$glyphDataFormat = \$this->read_ushort();
\t\tif (\$glyphDataFormat != 0)
\t\t\tdie('Unknown glyph data format '.\$glyphDataFormat);

\t\t///////////////////////////////////
\t\t// hhea metrics table
\t\t///////////////////////////////////
\t\t// ttf2t1 seems to use this value rather than the one in OS/2 - so put in for compatibility
\t\tif (isset(\$this->tables[\"hhea\"])) {
\t\t\t\$this->seek_table(\"hhea\");
\t\t\t\$this->skip(4);
\t\t\t\$hheaAscender = \$this->read_short();
\t\t\t\$hheaDescender = \$this->read_short();
\t\t\t\$this->ascent = (\$hheaAscender *\$scale);
\t\t\t\$this->descent = (\$hheaDescender *\$scale);
\t\t}

\t\t///////////////////////////////////
\t\t// OS/2 - OS/2 and Windows metrics table
\t\t///////////////////////////////////
\t\tif (isset(\$this->tables[\"OS/2\"])) {
\t\t\t\$this->seek_table(\"OS/2\");
\t\t\t\$version = \$this->read_ushort();
\t\t\t\$this->skip(2);
\t\t\t\$usWeightClass = \$this->read_ushort();
\t\t\t\$this->skip(2);
\t\t\t\$fsType = \$this->read_ushort();
\t\t\tif (\$fsType == 0x0002 || (\$fsType & 0x0300) != 0) {
\t\t\t\tglobal \$overrideTTFFontRestriction;
\t\t\t\tif (!\$overrideTTFFontRestriction) die('ERROR - Font file '.\$this->filename.' cannot be embedded due to copyright restrictions.');
\t\t\t\t\$this->restrictedUse = true;
\t\t\t}
\t\t\t\$this->skip(20);
\t\t\t\$sF = \$this->read_short();
\t\t\t\$this->sFamilyClass = (\$sF >> 8);
\t\t\t\$this->sFamilySubClass = (\$sF & 0xFF);
\t\t\t\$this->_pos += 10;  //PANOSE = 10 byte length
\t\t\t\$panose = fread(\$this->fh,10);
\t\t\t\$this->panose = array();
\t\t\tfor (\$p=0;\$p<strlen(\$panose);\$p++) { \$this->panose[] = ord(\$panose[\$p]); }
\t\t\t\$this->skip(26);
\t\t\t\$sTypoAscender = \$this->read_short();
\t\t\t\$sTypoDescender = \$this->read_short();
\t\t\tif (!\$this->ascent) \$this->ascent = (\$sTypoAscender*\$scale);
\t\t\tif (!\$this->descent) \$this->descent = (\$sTypoDescender*\$scale);
\t\t\tif (\$version > 1) {
\t\t\t\t\$this->skip(16);
\t\t\t\t\$sCapHeight = \$this->read_short();
\t\t\t\t\$this->capHeight = (\$sCapHeight*\$scale);
\t\t\t}
\t\t\telse {
\t\t\t\t\$this->capHeight = \$this->ascent;
\t\t\t}
\t\t}
\t\telse {
\t\t\t\$usWeightClass = 500;
\t\t\tif (!\$this->ascent) \$this->ascent = (\$yMax*\$scale);
\t\t\tif (!\$this->descent) \$this->descent = (\$yMin*\$scale);
\t\t\t\$this->capHeight = \$this->ascent;
\t\t}
\t\t\$this->stemV = 50 + intval(pow((\$usWeightClass / 65.0),2));

\t\t///////////////////////////////////
\t\t// post - PostScript table
\t\t///////////////////////////////////
\t\t\$this->seek_table(\"post\");
\t\tif (\$debug) { 
\t\t\t\$ver_maj = \$this->read_ushort();
\t\t\t\$ver_min = \$this->read_ushort();
\t\t\tif (\$ver_maj <1 || \$ver_maj >4) 
\t\t\t\tdie('Unknown post table version '.\$ver_maj);
\t\t}
\t\telse {
\t\t\t\$this->skip(4); 
\t\t}
\t\t\$this->italicAngle = \$this->read_short() + \$this->read_ushort() / 65536.0;
\t\t\$this->underlinePosition = \$this->read_short() * \$scale;
\t\t\$this->underlineThickness = \$this->read_short() * \$scale;
\t\t\$isFixedPitch = \$this->read_ulong();

\t\t\$this->flags = 4;

\t\tif (\$this->italicAngle!= 0) 
\t\t\t\$this->flags = \$this->flags | 64;
\t\tif (\$usWeightClass >= 600)
\t\t\t\$this->flags = \$this->flags | 262144;
\t\tif (\$isFixedPitch)
\t\t\t\$this->flags = \$this->flags | 1;

\t\t///////////////////////////////////
\t\t// hhea - Horizontal header table
\t\t///////////////////////////////////
\t\t\$this->seek_table(\"hhea\");
\t\tif (\$debug) { 
\t\t\t\$ver_maj = \$this->read_ushort();
\t\t\t\$ver_min = \$this->read_ushort();
\t\t\tif (\$ver_maj != 1)
\t\t\t\tdie('Unknown hhea table version '.\$ver_maj);
\t\t\t\$this->skip(28);
\t\t}
\t\telse {
\t\t\t\$this->skip(32); 
\t\t}
\t\t\$metricDataFormat = \$this->read_ushort();
\t\tif (\$metricDataFormat != 0)
\t\t\tdie('Unknown horizontal metric data format '.\$metricDataFormat);
\t\t\$numberOfHMetrics = \$this->read_ushort();
\t\tif (\$numberOfHMetrics == 0) 
\t\t\tdie('Number of horizontal metrics is 0');

\t\t///////////////////////////////////
\t\t// maxp - Maximum profile table
\t\t///////////////////////////////////
\t\t\$this->seek_table(\"maxp\");
\t\tif (\$debug) { 
\t\t\t\$ver_maj = \$this->read_ushort();
\t\t\t\$ver_min = \$this->read_ushort();
\t\t\tif (\$ver_maj != 1)
\t\t\t\tdie('Unknown maxp table version '.\$ver_maj);
\t\t}
\t\telse {
\t\t\t\$this->skip(4); 
\t\t}
\t\t\$numGlyphs = \$this->read_ushort();


\t\t///////////////////////////////////
\t\t// cmap - Character to glyph index mapping table
\t\t///////////////////////////////////
\t\t\$cmap_offset = \$this->seek_table(\"cmap\");
\t\t\$this->skip(2);
\t\t\$cmapTableCount = \$this->read_ushort();
\t\t\$unicode_cmap_offset = 0;
\t\tfor (\$i=0;\$i<\$cmapTableCount;\$i++) {
\t\t\t\$platformID = \$this->read_ushort();
\t\t\t\$encodingID = \$this->read_ushort();
\t\t\t\$offset = \$this->read_ulong();
\t\t\t\$save_pos = \$this->_pos;
\t\t\tif ((\$platformID == 3 && \$encodingID == 1) || \$platformID == 0) { // Microsoft, Unicode
\t\t\t\t\$format = \$this->get_ushort(\$cmap_offset + \$offset);
\t\t\t\tif (\$format == 4) {
\t\t\t\t\tif (!\$unicode_cmap_offset) \$unicode_cmap_offset = \$cmap_offset + \$offset;
\t\t\t\t\tif (\$BMPonly) break;
\t\t\t\t}
\t\t\t}
\t\t\t// Microsoft, Unicode Format 12 table HKCS
\t\t\telse if (((\$platformID == 3 && \$encodingID == 10) || \$platformID == 0) && !\$BMPonly) {
\t\t\t\t\$format = \$this->get_ushort(\$cmap_offset + \$offset);
\t\t\t\tif (\$format == 12) {
\t\t\t\t\t\$unicode_cmap_offset = \$cmap_offset + \$offset;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\t\$this->seek(\$save_pos );
\t\t}
\t\tif (!\$unicode_cmap_offset)
\t\t\tdie('Font ('.\$this->filename .') does not have cmap for Unicode (platform 3, encoding 1, format 4, or platform 0, any encoding, format 4)');


\t\t\$sipset = false;
\t\t\$smpset = false;
\t\t// Format 12 CMAP does characters above Unicode BMP i.e. some HKCS characters U+20000 and above
\t\tif (\$format == 12 && !\$BMPonly) {
\t\t\t\$this->maxUniChar = 0;
\t\t\t\$this->seek(\$unicode_cmap_offset + 4);
\t\t\t\$length = \$this->read_ulong();
\t\t\t\$limit = \$unicode_cmap_offset + \$length;
\t\t\t\$this->skip(4);

\t\t\t\$nGroups = \$this->read_ulong();

\t\t\t\$glyphToChar = array();
\t\t\t\$charToGlyph = array();
\t\t\tfor(\$i=0; \$i<\$nGroups ; \$i++) { 
\t\t\t\t\$startCharCode = \$this->read_ulong(); 
\t\t\t\t\$endCharCode = \$this->read_ulong(); 
\t\t\t\t\$startGlyphCode = \$this->read_ulong(); 
\t\t\t\tif ((\$endCharCode > 0x20000 && \$endCharCode < 0x2A6DF) || (\$endCharCode > 0x2F800 && \$endCharCode < 0x2FA1F)) {
\t\t\t\t\t\$sipset = true; 
\t\t\t\t}
\t\t\t\telse if (\$endCharCode > 0x10000 && \$endCharCode < 0x1FFFF) {
\t\t\t\t\t\$smpset = true; 
\t\t\t\t}
\t\t\t\t\$offset = 0;
\t\t\t\tfor (\$unichar=\$startCharCode;\$unichar<=\$endCharCode;\$unichar++) {
\t\t\t\t\t\$glyph = \$startGlyphCode + \$offset ;
\t\t\t\t\t\$offset++;
\t\t\t\t\t\$charToGlyph[\$unichar] = \$glyph;
\t\t\t\t\tif (\$unichar < 196608) { \$this->maxUniChar = max(\$unichar,\$this->maxUniChar); }
\t\t\t\t\t\$glyphToChar[\$glyph][] = \$unichar;
\t\t\t\t}
\t\t\t}
\t\t}
\t\telse {

\t\t\t\$glyphToChar = array();
\t\t\t\$charToGlyph = array();
\t\t\t\$this->getCMAP4(\$unicode_cmap_offset, \$glyphToChar, \$charToGlyph );

\t\t}
\t\t\$this->sipset = \$sipset ;
\t\t\$this->smpset = \$smpset ;

\t\t///////////////////////////////////
\t\t// hmtx - Horizontal metrics table
\t\t///////////////////////////////////
\t\t\$this->getHMTX(\$numberOfHMetrics, \$numGlyphs, \$glyphToChar, \$scale);

\t\t///////////////////////////////////
\t\t// kern - Kerning pair table
\t\t///////////////////////////////////
\t\tif (\$kerninfo) {
\t\t\t// Recognises old form of Kerning table - as required by Windows - Format 0 only
\t\t\t\$kern_offset = \$this->seek_table(\"kern\");
\t\t\t\$version = \$this->read_ushort();
\t\t\t\$nTables = \$this->read_ushort();
\t\t\t// subtable header
\t\t\t\$sversion = \$this->read_ushort();
\t\t\t\$slength = \$this->read_ushort();
\t\t\t\$scoverage = \$this->read_ushort();
\t\t\t\$format = \$scoverage >> 8;
 \t\t\tif (\$kern_offset && \$version==0 && \$format==0) {
\t\t\t\t// Format 0
\t\t\t\t\$nPairs = \$this->read_ushort();
\t\t\t\t\$this->skip(6);
\t\t\t\tfor (\$i=0; \$i<\$nPairs; \$i++) {
\t\t\t\t\t\$left = \$this->read_ushort();
\t\t\t\t\t\$right = \$this->read_ushort();
\t\t\t\t\t\$val = \$this->read_short();
\t\t\t\t\tif (count(\$glyphToChar[\$left])==1 && count(\$glyphToChar[\$right])==1) {
\t\t\t\t\t  if (\$left != 32 && \$right != 32) {
\t\t\t\t\t\t\$this->kerninfo[\$glyphToChar[\$left][0]][\$glyphToChar[\$right][0]] = intval(\$val*\$scale);
\t\t\t\t\t  }
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t}


/////////////////////////////////////////////////////////////////////////////////////////


\tfunction makeSubset(\$file, &\$subset, \$TTCfontID=0, \$debug=false, \$unAGlyphs=false) {\t// mPDF 5.4.05
\t\t\$this->unAGlyphs = \$unAGlyphs;\t// mPDF 5.4.05
\t\t\$this->filename = \$file;
\t\t\$this->fh = fopen(\$file ,'rb') or die('Can\\'t open file ' . \$file);
\t\t\$this->_pos = 0;
\t\t\$this->charWidths = '';
\t\t\$this->glyphPos = array();
\t\t\$this->charToGlyph = array();
\t\t\$this->tables = array();
\t\t\$this->otables = array();
\t\t\$this->ascent = 0;
\t\t\$this->descent = 0;
\t\t\$this->numTTCFonts = 0;
\t\t\$this->TTCFonts = array();
\t\t\$this->skip(4);
\t\t\$this->maxUni = 0;
\t\tif (\$TTCfontID > 0) {
\t\t\t\$this->version = \$version = \$this->read_ulong();\t// TTC Header version now
\t\t\tif (!in_array(\$version, array(0x00010000,0x00020000)))
\t\t\t\tdie(\"ERROR - Error parsing TrueType Collection: version=\".\$version.\" - \" . \$file);
\t\t\t\$this->numTTCFonts = \$this->read_ulong();
\t\t\tfor (\$i=1; \$i<=\$this->numTTCFonts; \$i++) {
\t      \t      \$this->TTCFonts[\$i]['offset'] = \$this->read_ulong();
\t\t\t}
\t\t\t\$this->seek(\$this->TTCFonts[\$TTCfontID]['offset']);
\t\t\t\$this->version = \$version = \$this->read_ulong();\t// TTFont version again now
\t\t}
\t\t\$this->readTableDirectory(\$debug);

\t\t///////////////////////////////////
\t\t// head - Font header table
\t\t///////////////////////////////////
\t\t\$this->seek_table(\"head\");
\t\t\$this->skip(50); 
\t\t\$indexToLocFormat = \$this->read_ushort();
\t\t\$glyphDataFormat = \$this->read_ushort();

\t\t///////////////////////////////////
\t\t// hhea - Horizontal header table
\t\t///////////////////////////////////
\t\t\$this->seek_table(\"hhea\");
\t\t\$this->skip(32); 
\t\t\$metricDataFormat = \$this->read_ushort();
\t\t\$orignHmetrics = \$numberOfHMetrics = \$this->read_ushort();

\t\t///////////////////////////////////
\t\t// maxp - Maximum profile table
\t\t///////////////////////////////////
\t\t\$this->seek_table(\"maxp\");
\t\t\$this->skip(4);
\t\t\$numGlyphs = \$this->read_ushort();


\t\t///////////////////////////////////
\t\t// cmap - Character to glyph index mapping table
\t\t///////////////////////////////////
\t\t\$cmap_offset = \$this->seek_table(\"cmap\");
\t\t\$this->skip(2);
\t\t\$cmapTableCount = \$this->read_ushort();
\t\t\$unicode_cmap_offset = 0;
\t\tfor (\$i=0;\$i<\$cmapTableCount;\$i++) {
\t\t\t\$platformID = \$this->read_ushort();
\t\t\t\$encodingID = \$this->read_ushort();
\t\t\t\$offset = \$this->read_ulong();
\t\t\t\$save_pos = \$this->_pos;
\t\t\tif ((\$platformID == 3 && \$encodingID == 1) || \$platformID == 0) { // Microsoft, Unicode
\t\t\t\t\$format = \$this->get_ushort(\$cmap_offset + \$offset);
\t\t\t\tif (\$format == 4) {
\t\t\t\t\t\$unicode_cmap_offset = \$cmap_offset + \$offset;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\t\$this->seek(\$save_pos );
\t\t}

\t\tif (!\$unicode_cmap_offset)
\t\t\tdie('Font ('.\$this->filename .') does not have Unicode cmap (platform 3, encoding 1, format 4, or platform 0 [any encoding] format 4)');


\t\t\$glyphToChar = array();
\t\t\$charToGlyph = array();
\t\t\$this->getCMAP4(\$unicode_cmap_offset, \$glyphToChar, \$charToGlyph );

\t\t\$this->charToGlyph = \$charToGlyph;


\t\t///////////////////////////////////
\t\t// hmtx - Horizontal metrics table
\t\t///////////////////////////////////
\t\t\$scale = 1;\t// not used
\t\t\$this->getHMTX(\$numberOfHMetrics, \$numGlyphs, \$glyphToChar, \$scale);

\t\t///////////////////////////////////
\t\t// loca - Index to location
\t\t///////////////////////////////////
\t\t\$this->getLOCA(\$indexToLocFormat, \$numGlyphs);

\t\t\$subsetglyphs = array(0=>0, 1=>1, 2=>2);
\t\t\$subsetCharToGlyph = array();
\t\tforeach(\$subset AS \$code) {
\t\t\tif (isset(\$this->charToGlyph[\$code])) {
\t\t\t\t\$subsetglyphs[\$this->charToGlyph[\$code]] = \$code;\t// Old Glyph ID => Unicode
\t\t\t\t\$subsetCharToGlyph[\$code] = \$this->charToGlyph[\$code];\t// Unicode to old GlyphID

\t\t\t}
\t\t\t\$this->maxUni = max(\$this->maxUni, \$code);
\t\t}

\t\tlist(\$start,\$dummy) = \$this->get_table_pos('glyf');

\t\t\$glyphSet = array();
\t\tksort(\$subsetglyphs);
\t\t\$n = 0;
\t\t\$fsLastCharIndex = 0;\t// maximum Unicode index (character code) in this font, according to the cmap subtable for platform ID 3 and platform- specific encoding ID 0 or 1.
\t\tforeach(\$subsetglyphs AS \$originalGlyphIdx => \$uni) {
\t\t\t\$fsLastCharIndex = max(\$fsLastCharIndex , \$uni); 
\t\t\t\$glyphSet[\$originalGlyphIdx] = \$n;\t// old glyphID to new glyphID
\t\t\t\$n++;
\t\t}

\t\tksort(\$subsetCharToGlyph);
\t\tforeach(\$subsetCharToGlyph AS \$uni => \$originalGlyphIdx) {
\t\t\t\$codeToGlyph[\$uni] = \$glyphSet[\$originalGlyphIdx] ;
\t\t}
\t\t\$this->codeToGlyph = \$codeToGlyph;

\t\tksort(\$subsetglyphs);
\t\tforeach(\$subsetglyphs AS \$originalGlyphIdx => \$uni) {
\t\t\t\$this->getGlyphs(\$originalGlyphIdx, \$start, \$glyphSet, \$subsetglyphs);
\t\t}

\t\t\$numGlyphs = \$numberOfHMetrics = count(\$subsetglyphs );

\t\t///////////////////////////////////
\t\t// name - table copied from the original
\t\t///////////////////////////////////
\t\t\$this->add('name', \$this->get_table('name'));

\t\t///////////////////////////////////
\t\t//tables copied from the original
\t\t///////////////////////////////////
\t\t\$tags = array ('cvt ', 'fpgm', 'prep', 'gasp');
\t\tforeach(\$tags AS \$tag) {
\t\t\tif (isset(\$this->tables[\$tag])) { \$this->add(\$tag, \$this->get_table(\$tag)); }
\t\t}

\t\t///////////////////////////////////
\t\t// post - PostScript
\t\t///////////////////////////////////
\t\tif (isset(\$this->tables['post'])) {
\t\t\t\$opost = \$this->get_table('post');
\t\t\t\$post = \"\\x00\\x03\\x00\\x00\" . substr(\$opost,4,12) . \"\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\";
\t\t\t\$this->add('post', \$post);
\t\t}

\t\t///////////////////////////////////
\t\t// Sort CID2GID map into segments of contiguous codes
\t\t///////////////////////////////////
\t\tksort(\$codeToGlyph);
\t\tunset(\$codeToGlyph[0]);
\t\t//unset(\$codeToGlyph[65535]);
\t\t\$rangeid = 0;
\t\t\$range = array();
\t\t\$prevcid = -2;
\t\t\$prevglidx = -1;
\t\t// for each character
\t\tforeach (\$codeToGlyph as \$cid => \$glidx) {
\t\t\tif (\$cid == (\$prevcid + 1) && \$glidx == (\$prevglidx + 1)) {
\t\t\t\t\$range[\$rangeid][] = \$glidx;
\t\t\t} else {
\t\t\t\t// new range
\t\t\t\t\$rangeid = \$cid;
\t\t\t\t\$range[\$rangeid] = array();
\t\t\t\t\$range[\$rangeid][] = \$glidx;
\t\t\t}
\t\t\t\$prevcid = \$cid;
\t\t\t\$prevglidx = \$glidx;
\t\t}



\t\t///////////////////////////////////
\t\t// CMap table
\t\t///////////////////////////////////
\t\t// cmap - Character to glyph mapping 
\t\t\$segCount = count(\$range) + 1;\t// + 1 Last segment has missing character 0xFFFF
\t\t\$searchRange = 1;
\t\t\$entrySelector = 0;
\t\twhile (\$searchRange * 2 <= \$segCount ) {
\t\t\t\$searchRange = \$searchRange * 2;
\t\t\t\$entrySelector = \$entrySelector + 1;
\t\t}
\t\t\$searchRange = \$searchRange * 2;
\t\t\$rangeShift = \$segCount * 2 - \$searchRange;
\t\t\$length = 16 + (8*\$segCount ) + (\$numGlyphs+1);
\t\t\$cmap = array(0, 3,\t\t// Index : version, number of encoding subtables
\t\t\t0, 0,\t\t\t\t// Encoding Subtable : platform (UNI=0), encoding 0
\t\t\t0, 28,\t\t\t// Encoding Subtable : offset (hi,lo)
\t\t\t0, 3,\t\t\t\t// Encoding Subtable : platform (UNI=0), encoding 3
\t\t\t0, 28,\t\t\t// Encoding Subtable : offset (hi,lo)
\t\t\t3, 1,\t\t\t\t// Encoding Subtable : platform (MS=3), encoding 1
\t\t\t0, 28,\t\t\t// Encoding Subtable : offset (hi,lo)
\t\t\t4, \$length, 0, \t\t// Format 4 Mapping subtable: format, length, language
\t\t\t\$segCount*2,
\t\t\t\$searchRange,
\t\t\t\$entrySelector,
\t\t\t\$rangeShift);

\t\t// endCode(s)
\t\tforeach(\$range AS \$start=>\$subrange) {
\t\t\t\$endCode = \$start + (count(\$subrange)-1);
\t\t\t\$cmap[] = \$endCode;\t// endCode(s)
\t\t}
\t\t\$cmap[] =\t0xFFFF;\t// endCode of last Segment
\t\t\$cmap[] =\t0;\t// reservedPad

\t\t// startCode(s)
\t\tforeach(\$range AS \$start=>\$subrange) {
\t\t\t\$cmap[] = \$start;\t// startCode(s)
\t\t}
\t\t\$cmap[] =\t0xFFFF;\t// startCode of last Segment
\t\t// idDelta(s) 
\t\tforeach(\$range AS \$start=>\$subrange) {
\t\t\t\$idDelta = -(\$start-\$subrange[0]);
\t\t\t\$n += count(\$subrange);
\t\t\t\$cmap[] = \$idDelta;\t// idDelta(s)
\t\t}
\t\t\$cmap[] =\t1;\t// idDelta of last Segment
\t\t// idRangeOffset(s) 
\t\tforeach(\$range AS \$subrange) {
\t\t\t\$cmap[] = 0;\t// idRangeOffset[segCount]  \tOffset in bytes to glyph indexArray, or 0

\t\t}
\t\t\$cmap[] =\t0;\t// idRangeOffset of last Segment
\t\tforeach(\$range AS \$subrange) {
\t\t\tforeach(\$subrange AS \$glidx) {
\t\t\t\t\$cmap[] = \$glidx;
\t\t\t}
\t\t}
\t\t\$cmap[] = 0;\t// Mapping for last character
\t\t\$cmapstr = '';
\t\tforeach(\$cmap AS \$cm) { \$cmapstr .= pack(\"n\",\$cm); }
\t\t\$this->add('cmap', \$cmapstr);


\t\t///////////////////////////////////
\t\t// glyf - Glyph data
\t\t///////////////////////////////////
\t\tlist(\$glyfOffset,\$glyfLength) = \$this->get_table_pos('glyf');
\t\tif (\$glyfLength < \$this->maxStrLenRead) {
\t\t\t\$glyphData = \$this->get_table('glyf');
\t\t}

\t\t\$offsets = array();
\t\t\$glyf = '';
\t\t\$pos = 0;
\t\t\$hmtxstr = '';
\t\t\$xMinT = 0;
\t\t\$yMinT = 0;
\t\t\$xMaxT = 0;
\t\t\$yMaxT = 0;
\t\t\$advanceWidthMax = 0;
\t\t\$minLeftSideBearing = 0;
\t\t\$minRightSideBearing = 0;
\t\t\$xMaxExtent = 0;
\t\t\$maxPoints = 0;\t\t\t// points in non-compound glyph
\t\t\$maxContours = 0;\t\t\t// contours in non-compound glyph
\t\t\$maxComponentPoints = 0;\t// points in compound glyph
\t\t\$maxComponentContours = 0;\t// contours in compound glyph
\t\t\$maxComponentElements = 0;\t// number of glyphs referenced at top level
\t\t\$maxComponentDepth = 0;\t\t// levels of recursion, set to 0 if font has only simple glyphs
\t\t\$this->glyphdata = array();

\t\tforeach(\$subsetglyphs AS \$originalGlyphIdx => \$uni) {
\t\t\t// hmtx - Horizontal Metrics
\t\t\t\$hm = \$this->getHMetric(\$orignHmetrics, \$originalGlyphIdx);
\t\t\t\$hmtxstr .= \$hm;

\t\t\t\$offsets[] = \$pos;
\t\t\t\$glyphPos = \$this->glyphPos[\$originalGlyphIdx];
\t\t\t\$glyphLen = \$this->glyphPos[\$originalGlyphIdx + 1] - \$glyphPos;
\t\t\tif (\$glyfLength < \$this->maxStrLenRead) {
\t\t\t\t\$data = substr(\$glyphData,\$glyphPos,\$glyphLen);
\t\t\t}
\t\t\telse {
\t\t\t\tif (\$glyphLen > 0) \$data = \$this->get_chunk(\$glyfOffset+\$glyphPos,\$glyphLen);
\t\t\t\telse \$data = '';
\t\t\t}

\t\t\tif (\$glyphLen > 0) {
\t\t\t  if (_RECALC_PROFILE) {
\t\t\t\t\$xMin = \$this->unpack_short(substr(\$data,2,2));
\t\t\t\t\$yMin = \$this->unpack_short(substr(\$data,4,2));
\t\t\t\t\$xMax = \$this->unpack_short(substr(\$data,6,2));
\t\t\t\t\$yMax = \$this->unpack_short(substr(\$data,8,2));
\t\t\t\t\$xMinT = min(\$xMinT,\$xMin);
\t\t\t\t\$yMinT = min(\$yMinT,\$yMin);
\t\t\t\t\$xMaxT = max(\$xMaxT,\$xMax);
\t\t\t\t\$yMaxT = max(\$yMaxT,\$yMax);
\t\t\t\t\$aw = \$this->unpack_short(substr(\$hm,0,2)); 
\t\t\t\t\$lsb = \$this->unpack_short(substr(\$hm,2,2));
\t\t\t\t\$advanceWidthMax = max(\$advanceWidthMax,\$aw);
\t\t\t\t\$minLeftSideBearing = min(\$minLeftSideBearing,\$lsb);
\t\t\t\t\$minRightSideBearing = min(\$minRightSideBearing,(\$aw - \$lsb - (\$xMax - \$xMin)));
\t\t\t\t\$xMaxExtent = max(\$xMaxExtent,(\$lsb + (\$xMax - \$xMin)));
\t\t\t   }
\t\t\t\t\$up = unpack(\"n\", substr(\$data,0,2));
\t\t\t}
\t\t\tif (\$glyphLen > 2 && (\$up[1] & (1 << 15)) ) {\t// If number of contours <= -1 i.e. composiste glyph
\t\t\t\t\$pos_in_glyph = 10;
\t\t\t\t\$flags = GF_MORE;
\t\t\t\t\$nComponentElements = 0;
\t\t\t\twhile (\$flags & GF_MORE) {
\t\t\t\t\t\$nComponentElements += 1;\t// number of glyphs referenced at top level
\t\t\t\t\t\$up = unpack(\"n\", substr(\$data,\$pos_in_glyph,2));
\t\t\t\t\t\$flags = \$up[1];
\t\t\t\t\t\$up = unpack(\"n\", substr(\$data,\$pos_in_glyph+2,2));
\t\t\t\t\t\$glyphIdx = \$up[1];
\t\t\t\t\t\$this->glyphdata[\$originalGlyphIdx]['compGlyphs'][] = \$glyphIdx;
\t\t\t\t\t\$data = \$this->_set_ushort(\$data, \$pos_in_glyph + 2, \$glyphSet[\$glyphIdx]);
\t\t\t\t\t\$pos_in_glyph += 4;
\t\t\t\t\tif (\$flags & GF_WORDS) { \$pos_in_glyph += 4; }
\t\t\t\t\telse { \$pos_in_glyph += 2; }
\t\t\t\t\tif (\$flags & GF_SCALE) { \$pos_in_glyph += 2; }
\t\t\t\t\telse if (\$flags & GF_XYSCALE) { \$pos_in_glyph += 4; }
\t\t\t\t\telse if (\$flags & GF_TWOBYTWO) { \$pos_in_glyph += 8; }
\t\t\t\t}
\t\t\t\t\$maxComponentElements = max(\$maxComponentElements, \$nComponentElements);
\t\t\t}
\t\t\t// Simple Glyph
\t\t\telse if (_RECALC_PROFILE && \$glyphLen > 2 && \$up[1] < (1 << 15) && \$up[1] > 0) { \t// Number of contours > 0 simple glyph
\t\t\t\t\$nContours = \$up[1];
\t\t\t\t\$this->glyphdata[\$originalGlyphIdx]['nContours'] = \$nContours;
\t\t\t\t\$maxContours = max(\$maxContours, \$nContours);

\t\t\t\t// Count number of points in simple glyph
\t\t\t\t\$pos_in_glyph = 10 + (\$nContours  * 2) - 2;\t// Last endContourPoint
\t\t\t\t\$up = unpack(\"n\", substr(\$data,\$pos_in_glyph,2));
\t\t\t\t\$points = \$up[1]+1;
\t\t\t\t\$this->glyphdata[\$originalGlyphIdx]['nPoints'] = \$points;
\t\t\t\t\$maxPoints = max(\$maxPoints, \$points);
\t\t\t}

\t\t\t\$glyf .= \$data;
\t\t\t\$pos += \$glyphLen;
\t\t\tif (\$pos % 4 != 0) {
\t\t\t\t\$padding = 4 - (\$pos % 4);
\t\t\t\t\$glyf .= str_repeat(\"\\0\",\$padding);
\t\t\t\t\$pos += \$padding;
\t\t\t}
\t\t}

\t\tif (_RECALC_PROFILE) {
\t\t   foreach(\$this->glyphdata AS \$originalGlyphIdx => \$val) {
\t\t\t\$maxdepth = \$depth = -1;
\t\t\t\$points = 0;
\t\t\t\$contours = 0;
\t\t\t\$this->getGlyphData(\$originalGlyphIdx, \$maxdepth, \$depth, \$points, \$contours) ;
\t\t\t\$maxComponentDepth = max(\$maxComponentDepth , \$maxdepth);
\t\t\t\$maxComponentPoints = max(\$maxComponentPoints , \$points);
\t\t\t\$maxComponentContours = max(\$maxComponentContours , \$contours);
\t\t   }
\t\t}


\t\t\$offsets[] = \$pos;
\t\t\$this->add('glyf', \$glyf);

\t\t///////////////////////////////////
\t\t// hmtx - Horizontal Metrics
\t\t///////////////////////////////////
\t\t\$this->add('hmtx', \$hmtxstr);


\t\t///////////////////////////////////
\t\t// loca - Index to location
\t\t///////////////////////////////////
\t\t\$locastr = '';
\t\tif (((\$pos + 1) >> 1) > 0xFFFF) {
\t\t\t\$indexToLocFormat = 1;        // long format
\t\t\tforeach(\$offsets AS \$offset) { \$locastr .= pack(\"N\",\$offset); }
\t\t}
\t\telse {
\t\t\t\$indexToLocFormat = 0;        // short format
\t\t\tforeach(\$offsets AS \$offset) { \$locastr .= pack(\"n\",(\$offset/2)); }
\t\t}
\t\t\$this->add('loca', \$locastr);

\t\t///////////////////////////////////
\t\t// head - Font header
\t\t///////////////////////////////////
\t\t\$head = \$this->get_table('head');
\t\t\$head = \$this->_set_ushort(\$head, 50, \$indexToLocFormat);
\t\tif (_RECALC_PROFILE) {
\t\t\t\$head = \$this->_set_short(\$head, 36, \$xMinT);\t// for all glyph bounding boxes
\t\t\t\$head = \$this->_set_short(\$head, 38, \$yMinT);\t// for all glyph bounding boxes
\t\t\t\$head = \$this->_set_short(\$head, 40, \$xMaxT);\t// for all glyph bounding boxes
\t\t\t\$head = \$this->_set_short(\$head, 42, \$yMaxT);\t// for all glyph bounding boxes
\t\t\t\$head[17] = chr(\$head[17] & ~(1 << 4)); \t// Unset Bit 4 (as hdmx/LTSH tables not included)
\t\t}
\t\t\$this->add('head', \$head);


\t\t///////////////////////////////////
\t\t// hhea - Horizontal Header
\t\t///////////////////////////////////
\t\t\$hhea = \$this->get_table('hhea');
\t\t\$hhea = \$this->_set_ushort(\$hhea, 34, \$numberOfHMetrics);
\t\tif (_RECALC_PROFILE) {
\t\t\t\$hhea = \$this->_set_ushort(\$hhea, 10, \$advanceWidthMax);\t
\t\t\t\$hhea = \$this->_set_short(\$hhea, 12, \$minLeftSideBearing);\t
\t\t\t\$hhea = \$this->_set_short(\$hhea, 14, \$minRightSideBearing);\t
\t\t\t\$hhea = \$this->_set_short(\$hhea, 16, \$xMaxExtent);\t
\t\t}
\t\t\$this->add('hhea', \$hhea);

\t\t///////////////////////////////////
\t\t// maxp - Maximum Profile
\t\t///////////////////////////////////
\t\t\$maxp = \$this->get_table('maxp');
\t\t\$maxp = \$this->_set_ushort(\$maxp, 4, \$numGlyphs);
\t\tif (_RECALC_PROFILE) {
\t\t\t\$maxp = \$this->_set_ushort(\$maxp, 6, \$maxPoints);\t// points in non-compound glyph
\t\t\t\$maxp = \$this->_set_ushort(\$maxp, 8, \$maxContours);\t// contours in non-compound glyph
\t\t\t\$maxp = \$this->_set_ushort(\$maxp, 10, \$maxComponentPoints);\t// points in compound glyph
\t\t\t\$maxp = \$this->_set_ushort(\$maxp, 12, \$maxComponentContours);\t// contours in compound glyph
\t\t\t\$maxp = \$this->_set_ushort(\$maxp, 28, \$maxComponentElements);\t// number of glyphs referenced at top level
\t\t\t\$maxp = \$this->_set_ushort(\$maxp, 30, \$maxComponentDepth);\t// levels of recursion, set to 0 if font has only simple glyphs
\t\t}
\t\t\$this->add('maxp', \$maxp);


\t\t///////////////////////////////////
\t\t// OS/2 - OS/2
\t\t///////////////////////////////////
\t\tif (isset(\$this->tables['OS/2'])) { 
\t\t\t\$os2_offset = \$this->seek_table(\"OS/2\");
\t\t\tif (_RECALC_PROFILE) {
\t\t\t\t\$fsSelection = \$this->get_ushort(\$os2_offset+62);
\t\t\t\t\$fsSelection = (\$fsSelection & ~(1 << 6)); \t// 2-byte bit field containing information concerning the nature of the font patterns
\t\t\t\t\t// bit#0 = Italic; bit#5=Bold
\t\t\t\t\t// Match name table's font subfamily string
\t\t\t\t\t// Clear bit#6 used for 'Regular' and optional
\t\t\t}

\t\t\t// NB Currently this method never subsets characters above BMP
\t\t\t// Could set nonBMP bit according to \$this->maxUni 
\t\t\t\$nonBMP = \$this->get_ushort(\$os2_offset+46);
\t\t\t\$nonBMP = (\$nonBMP & ~(1 << 9)); \t// Unset Bit 57 (indicates non-BMP) - for interactive forms

\t\t\t\$os2 = \$this->get_table('OS/2');
\t\t\tif (_RECALC_PROFILE) {
\t\t\t\t\$os2 = \$this->_set_ushort(\$os2, 62, \$fsSelection);\t
\t\t\t\t\$os2 = \$this->_set_ushort(\$os2, 66, \$fsLastCharIndex);
\t\t\t\t\$os2 = \$this->_set_ushort(\$os2, 42, 0x0000);\t// ulCharRange (ulUnicodeRange) bits 24-31 | 16-23
\t\t\t\t\$os2 = \$this->_set_ushort(\$os2, 44, 0x0000);\t// ulCharRange (Unicode ranges) bits  8-15 |  0-7
\t\t\t\t\$os2 = \$this->_set_ushort(\$os2, 46, \$nonBMP);\t// ulCharRange (Unicode ranges) bits 56-63 | 48-55
\t\t\t\t\$os2 = \$this->_set_ushort(\$os2, 48, 0x0000);\t// ulCharRange (Unicode ranges) bits 40-47 | 32-39
\t\t\t\t\$os2 = \$this->_set_ushort(\$os2, 50, 0x0000);\t// ulCharRange (Unicode ranges) bits  88-95 | 80-87
\t\t\t\t\$os2 = \$this->_set_ushort(\$os2, 52, 0x0000);\t// ulCharRange (Unicode ranges) bits  72-79 | 64-71
\t\t\t\t\$os2 = \$this->_set_ushort(\$os2, 54, 0x0000);\t// ulCharRange (Unicode ranges) bits  120-127 | 112-119
\t\t\t\t\$os2 = \$this->_set_ushort(\$os2, 56, 0x0000);\t// ulCharRange (Unicode ranges) bits  104-111 | 96-103
\t\t\t}
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 46, \$nonBMP);\t// Unset Bit 57 (indicates non-BMP) - for interactive forms

\t\t\t\$this->add('OS/2', \$os2 );
\t\t}

\t\tfclose(\$this->fh);
\t\t// Put the TTF file together
\t\t\$stm = '';
\t\t\$this->endTTFile(\$stm);
\t\t//file_put_contents('testfont.ttf', \$stm); exit;
\t\treturn \$stm ;
\t}

//================================================================================

\t// Also does SMP
\tfunction makeSubsetSIP(\$file, &\$subset, \$TTCfontID=0, \$debug=false) {
\t\t\$this->fh = fopen(\$file ,'rb') or die('Can\\'t open file ' . \$file);
\t\t\$this->filename = \$file;
\t\t\$this->_pos = 0;
\t\t\$this->unAGlyphs = false;\t// mPDF 5.4.05
\t\t\$this->charWidths = '';
\t\t\$this->glyphPos = array();
\t\t\$this->charToGlyph = array();
\t\t\$this->tables = array();
\t\t\$this->otables = array();
\t\t\$this->ascent = 0;
\t\t\$this->descent = 0;
\t\t\$this->numTTCFonts = 0;
\t\t\$this->TTCFonts = array();
\t\t\$this->skip(4);
\t\tif (\$TTCfontID > 0) {
\t\t\t\$this->version = \$version = \$this->read_ulong();\t// TTC Header version now
\t\t\tif (!in_array(\$version, array(0x00010000,0x00020000)))
\t\t\t\tdie(\"ERROR - Error parsing TrueType Collection: version=\".\$version.\" - \" . \$file);
\t\t\t\$this->numTTCFonts = \$this->read_ulong();
\t\t\tfor (\$i=1; \$i<=\$this->numTTCFonts; \$i++) {
\t      \t      \$this->TTCFonts[\$i]['offset'] = \$this->read_ulong();
\t\t\t}
\t\t\t\$this->seek(\$this->TTCFonts[\$TTCfontID]['offset']);
\t\t\t\$this->version = \$version = \$this->read_ulong();\t// TTFont version again now
\t\t}
\t\t\$this->readTableDirectory(\$debug);



\t\t///////////////////////////////////
\t\t// head - Font header table
\t\t///////////////////////////////////
\t\t\$this->seek_table(\"head\");
\t\t\$this->skip(50); 
\t\t\$indexToLocFormat = \$this->read_ushort();
\t\t\$glyphDataFormat = \$this->read_ushort();

\t\t///////////////////////////////////
\t\t// hhea - Horizontal header table
\t\t///////////////////////////////////
\t\t\$this->seek_table(\"hhea\");
\t\t\$this->skip(32); 
\t\t\$metricDataFormat = \$this->read_ushort();
\t\t\$orignHmetrics = \$numberOfHMetrics = \$this->read_ushort();

\t\t///////////////////////////////////
\t\t// maxp - Maximum profile table
\t\t///////////////////////////////////
\t\t\$this->seek_table(\"maxp\");
\t\t\$this->skip(4);
\t\t\$numGlyphs = \$this->read_ushort();


\t\t///////////////////////////////////
\t\t// cmap - Character to glyph index mapping table
\t\t///////////////////////////////////

\t\t\$cmap_offset = \$this->seek_table(\"cmap\");
\t\t\$this->skip(2);
\t\t\$cmapTableCount = \$this->read_ushort();
\t\t\$unicode_cmap_offset = 0;
\t\tfor (\$i=0;\$i<\$cmapTableCount;\$i++) {
\t\t\t\$platformID = \$this->read_ushort();
\t\t\t\$encodingID = \$this->read_ushort();
\t\t\t\$offset = \$this->read_ulong();
\t\t\t\$save_pos = \$this->_pos;
\t\t\tif ((\$platformID == 3 && \$encodingID == 10) || \$platformID == 0) { // Microsoft, Unicode Format 12 table HKCS
\t\t\t\t\$format = \$this->get_ushort(\$cmap_offset + \$offset);
\t\t\t\tif (\$format == 12) {
\t\t\t\t\t\$unicode_cmap_offset = \$cmap_offset + \$offset;
\t\t\t\t\tbreak;
\t\t\t\t}
\t\t\t}
\t\t\t\$this->seek(\$save_pos );
\t\t}

\t\tif (!\$unicode_cmap_offset)
\t\t\tdie('Font does not have cmap for Unicode (platform 3, encoding 1, format 4, or platform 0, any encoding, format 4)');
\t\t// Format 12 CMAP does characters above Unicode BMP i.e. some HKCS characters U+20000 and above
\t\tif (\$format == 12) {
\t\t\t\$this->maxUniChar = 0;
\t\t\t\$this->seek(\$unicode_cmap_offset + 4);
\t\t\t\$length = \$this->read_ulong();
\t\t\t\$limit = \$unicode_cmap_offset + \$length;
\t\t\t\$this->skip(4);

\t\t\t\$nGroups = \$this->read_ulong();

\t\t\t\$glyphToChar = array();
\t\t\t\$charToGlyph = array();
\t\t\tfor(\$i=0; \$i<\$nGroups ; \$i++) { 
\t\t\t\t\$startCharCode = \$this->read_ulong(); 
\t\t\t\t\$endCharCode = \$this->read_ulong(); 
\t\t\t\t\$startGlyphCode = \$this->read_ulong(); 
\t\t\t\t\$offset = 0;
\t\t\t\tfor (\$unichar=\$startCharCode;\$unichar<=\$endCharCode;\$unichar++) {
\t\t\t\t\t\$glyph = \$startGlyphCode + \$offset ;
\t\t\t\t\t\$offset++;
\t\t\t\t\t\$charToGlyph[\$unichar] = \$glyph;
\t\t\t\t\tif (\$unichar < 196608) { \$this->maxUniChar = max(\$unichar,\$this->maxUniChar); }
\t\t\t\t\t\$glyphToChar[\$glyph][] = \$unichar;
\t\t\t\t}
\t\t\t}
\t\t}
\t\telse 
\t\t\tdie('Font does not have cmap for Unicode (format 12)');


\t\t///////////////////////////////////
\t\t// hmtx - Horizontal metrics table
\t\t///////////////////////////////////
\t\t\$scale = 1; // not used here
\t\t\$this->getHMTX(\$numberOfHMetrics, \$numGlyphs, \$glyphToChar, \$scale);

\t\t///////////////////////////////////
\t\t// loca - Index to location
\t\t///////////////////////////////////
\t\t\$this->getLOCA(\$indexToLocFormat, \$numGlyphs);

\t\t///////////////////////////////////////////////////////////////////

\t\t\$glyphMap = array(0=>0); 
\t\t\$glyphSet = array(0=>0);
\t\t\$codeToGlyph = array();
\t\t// Set a substitute if ASCII characters do not have glyphs
\t\tif (isset(\$charToGlyph[0x3F])) { \$subs = \$charToGlyph[0x3F]; }\t// Question mark
\t\telse { \$subs = \$charToGlyph[32]; }
\t\tforeach(\$subset AS \$code) {
\t\t\tif (isset(\$charToGlyph[\$code]))
\t\t\t\t\$originalGlyphIdx = \$charToGlyph[\$code];
\t\t\telse if (\$code<128) {
\t\t\t\t\$originalGlyphIdx = \$subs;
\t\t\t}
\t\t\telse { \$originalGlyphIdx = 0; }
\t\t\tif (!isset(\$glyphSet[\$originalGlyphIdx])) {
\t\t\t\t\$glyphSet[\$originalGlyphIdx] = count(\$glyphMap);
\t\t\t\t\$glyphMap[] = \$originalGlyphIdx;
\t\t\t}
\t\t\t\$codeToGlyph[\$code] = \$glyphSet[\$originalGlyphIdx];
\t\t}

\t\tlist(\$start,\$dummy) = \$this->get_table_pos('glyf');

\t\t\$n = 0;
\t\twhile (\$n < count(\$glyphMap)) {
\t\t\t\$originalGlyphIdx = \$glyphMap[\$n];
\t\t\t\$glyphPos = \$this->glyphPos[\$originalGlyphIdx];
\t\t\t\$glyphLen = \$this->glyphPos[\$originalGlyphIdx + 1] - \$glyphPos;
\t\t\t\$n += 1;
\t\t\tif (!\$glyphLen) continue;
\t\t\t\$this->seek(\$start + \$glyphPos);
\t\t\t\$numberOfContours = \$this->read_short();
\t\t\tif (\$numberOfContours < 0) {
\t\t\t\t\$this->skip(8);
\t\t\t\t\$flags = GF_MORE;
\t\t\t\twhile (\$flags & GF_MORE) {
\t\t\t\t\t\$flags = \$this->read_ushort();
\t\t\t\t\t\$glyphIdx = \$this->read_ushort();
\t\t\t\t\tif (!isset(\$glyphSet[\$glyphIdx])) {
\t\t\t\t\t\t\$glyphSet[\$glyphIdx] = count(\$glyphMap);
\t\t\t\t\t\t\$glyphMap[] = \$glyphIdx;
\t\t\t\t\t}
\t\t\t\t\tif (\$flags & GF_WORDS)
\t\t\t\t\t\t\$this->skip(4);
\t\t\t\t\telse
\t\t\t\t\t\t\$this->skip(2);
\t\t\t\t\tif (\$flags & GF_SCALE)
\t\t\t\t\t\t\$this->skip(2);
\t\t\t\t\telse if (\$flags & GF_XYSCALE)
\t\t\t\t\t\t\$this->skip(4);
\t\t\t\t\telse if (\$flags & GF_TWOBYTWO)
\t\t\t\t\t\t\$this->skip(8);
\t\t\t\t}
\t\t\t}
\t\t}

\t\t\$numGlyphs = \$n = count(\$glyphMap);
\t\t\$numberOfHMetrics = \$n;

\t\t///////////////////////////////////
\t\t// name
\t\t///////////////////////////////////
\t\t// Needs to have a name entry in 3,0 (e.g. symbol) - original font will be 3,1 (i.e. Unicode)
\t\t\$name = \$this->get_table('name'); 
\t\t\$name_offset = \$this->seek_table(\"name\");
\t\t\$format = \$this->read_ushort();
\t\t\$numRecords = \$this->read_ushort();
\t\t\$string_data_offset = \$name_offset + \$this->read_ushort();
\t\tfor (\$i=0;\$i<\$numRecords; \$i++) {
\t\t\t\$platformId = \$this->read_ushort();
\t\t\t\$encodingId = \$this->read_ushort();
\t\t\tif (\$platformId == 3 && \$encodingId == 1) {
\t\t\t\t\$pos = 6 + (\$i * 12) + 2;
\t\t\t\t\$name = \$this->_set_ushort(\$name, \$pos, 0x00);\t// Change encoding to 3,0 rather than 3,1
\t\t\t}
\t\t\t\$this->skip(8);
\t\t}
\t\t\$this->add('name', \$name);

\t\t///////////////////////////////////
\t\t// OS/2
\t\t///////////////////////////////////
\t\tif (isset(\$this->tables['OS/2'])) { 
\t\t\t\$os2 = \$this->get_table('OS/2');
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 42, 0x00);\t// ulCharRange (Unicode ranges)
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 44, 0x00);\t// ulCharRange (Unicode ranges)
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 46, 0x00);\t// ulCharRange (Unicode ranges)
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 48, 0x00);\t// ulCharRange (Unicode ranges)

\t\t\t\$os2 = \$this->_set_ushort(\$os2, 50, 0x00);\t// ulCharRange (Unicode ranges)
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 52, 0x00);\t// ulCharRange (Unicode ranges)
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 54, 0x00);\t// ulCharRange (Unicode ranges)
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 56, 0x00);\t// ulCharRange (Unicode ranges)
\t\t\t// Set Symbol character only in ulCodePageRange
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 78, 0x8000);\t// ulCodePageRange = Bit #31 Symbol ****  78 = Bit 16-31
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 80, 0x0000);\t// ulCodePageRange = Bit #31 Symbol ****  80 = Bit 0-15
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 82, 0x0000);\t// ulCodePageRange = Bit #32- Symbol **** 82 = Bits 48-63
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 84, 0x0000);\t// ulCodePageRange = Bit #32- Symbol **** 84 = Bits 32-47
\t
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 64, 0x01);\t\t// FirstCharIndex
\t\t\t\$os2 = \$this->_set_ushort(\$os2, 66, count(\$subset));\t\t// LastCharIndex
\t\t\t// Set PANOSE first bit to 5 for Symbol
\t\t\t\$os2 = \$this->splice(\$os2, 32, chr(5).chr(0).chr(1).chr(0).chr(1).chr(0).chr(0).chr(0).chr(0).chr(0));
\t\t\t\$this->add('OS/2', \$os2 );
\t\t}


\t\t///////////////////////////////////
\t\t//tables copied from the original
\t\t///////////////////////////////////
\t\t\$tags = array ('cvt ', 'fpgm', 'prep', 'gasp');\t
\t\tforeach(\$tags AS \$tag) { \t// 1.02
\t\t\tif (isset(\$this->tables[\$tag])) { \$this->add(\$tag, \$this->get_table(\$tag)); } 
\t\t}

\t\t///////////////////////////////////
\t\t// post - PostScript
\t\t///////////////////////////////////
\t\tif (isset(\$this->tables['post'])) { 
\t\t\t\$opost = \$this->get_table('post');
\t\t\t\$post = \"\\x00\\x03\\x00\\x00\" . substr(\$opost,4,12) . \"\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\\x00\";
\t\t}
\t\t\$this->add('post', \$post);

\t\t///////////////////////////////////
\t\t// hhea - Horizontal Header
\t\t///////////////////////////////////
\t\t\$hhea = \$this->get_table('hhea');
\t\t\$hhea = \$this->_set_ushort(\$hhea, 34, \$numberOfHMetrics);
\t\t\$this->add('hhea', \$hhea);

\t\t///////////////////////////////////
\t\t// maxp - Maximum Profile
\t\t///////////////////////////////////
\t\t\$maxp = \$this->get_table('maxp');
\t\t\$maxp = \$this->_set_ushort(\$maxp, 4, \$numGlyphs);
\t\t\$this->add('maxp', \$maxp);


\t\t///////////////////////////////////
\t\t// CMap table Formats [1,0,]6 and [3,0,]4
\t\t///////////////////////////////////
\t\t///////////////////////////////////
\t\t// Sort CID2GID map into segments of contiguous codes
\t\t///////////////////////////////////
\t\t\$rangeid = 0;
\t\t\$range = array();
\t\t\$prevcid = -2;
\t\t\$prevglidx = -1;
\t\t// for each character
\t\tforeach (\$subset as \$cid => \$code) {
\t\t\t\$glidx = \$codeToGlyph[\$code]; 
\t\t\tif (\$cid == (\$prevcid + 1) && \$glidx == (\$prevglidx + 1)) {
\t\t\t\t\$range[\$rangeid][] = \$glidx;
\t\t\t} else {
\t\t\t\t// new range
\t\t\t\t\$rangeid = \$cid;
\t\t\t\t\$range[\$rangeid] = array();
\t\t\t\t\$range[\$rangeid][] = \$glidx;
\t\t\t}
\t\t\t\$prevcid = \$cid;
\t\t\t\$prevglidx = \$glidx;
\t\t}
\t\t// cmap - Character to glyph mapping 
\t\t\$segCount = count(\$range) + 1;\t// + 1 Last segment has missing character 0xFFFF
\t\t\$searchRange = 1;
\t\t\$entrySelector = 0;
\t\twhile (\$searchRange * 2 <= \$segCount ) {
\t\t\t\$searchRange = \$searchRange * 2;
\t\t\t\$entrySelector = \$entrySelector + 1;
\t\t}
\t\t\$searchRange = \$searchRange * 2;
\t\t\$rangeShift = \$segCount * 2 - \$searchRange;
\t\t\$length = 16 + (8*\$segCount ) + (\$numGlyphs+1);
\t\t\$cmap = array(
\t\t\t4, \$length, 0, \t\t// Format 4 Mapping subtable: format, length, language
\t\t\t\$segCount*2,
\t\t\t\$searchRange,
\t\t\t\$entrySelector,
\t\t\t\$rangeShift);

\t\t// endCode(s)
\t\tforeach(\$range AS \$start=>\$subrange) {
\t\t\t\$endCode = \$start + (count(\$subrange)-1);
\t\t\t\$cmap[] = \$endCode;\t// endCode(s)
\t\t}
\t\t\$cmap[] =\t0xFFFF;\t// endCode of last Segment
\t\t\$cmap[] =\t0;\t// reservedPad

\t\t// startCode(s)
\t\tforeach(\$range AS \$start=>\$subrange) {
\t\t\t\$cmap[] = \$start;\t// startCode(s)
\t\t}
\t\t\$cmap[] =\t0xFFFF;\t// startCode of last Segment
\t\t// idDelta(s) 
\t\tforeach(\$range AS \$start=>\$subrange) {
\t\t\t\$idDelta = -(\$start-\$subrange[0]);
\t\t\t\$n += count(\$subrange);
\t\t\t\$cmap[] = \$idDelta;\t// idDelta(s)
\t\t}
\t\t\$cmap[] =\t1;\t// idDelta of last Segment
\t\t// idRangeOffset(s) 
\t\tforeach(\$range AS \$subrange) {
\t\t\t\$cmap[] = 0;\t// idRangeOffset[segCount]  \tOffset in bytes to glyph indexArray, or 0

\t\t}
\t\t\$cmap[] =\t0;\t// idRangeOffset of last Segment
\t\tforeach(\$range AS \$subrange) {
\t\t\tforeach(\$subrange AS \$glidx) {
\t\t\t\t\$cmap[] = \$glidx;
\t\t\t}
\t\t}
\t\t\$cmap[] = 0;\t// Mapping for last character
\t\t\$cmapstr4 = '';
\t\tforeach(\$cmap AS \$cm) { \$cmapstr4 .= pack(\"n\",\$cm); }

\t\t///////////////////////////////////
\t\t// cmap - Character to glyph mapping
\t\t///////////////////////////////////
\t\t\$entryCount = count(\$subset);
\t\t\$length = 10 + \$entryCount * 2;

\t\t\$off = 20 + \$length;
\t\t\$hoff = \$off >> 16;
\t\t\$loff = \$off & 0xFFFF;

\t\t\$cmap = array(0, 2,\t// Index : version, number of subtables
\t\t\t1, 0,\t\t\t// Subtable : platform, encoding
\t\t\t0, 20,\t\t// offset (hi,lo)
\t\t\t3, 0,\t\t\t// Subtable : platform, encoding
\t\t\t\$hoff, \$loff,\t// offset (hi,lo)
\t\t\t6, \$length, \t// Format 6 Mapping table: format, length
\t\t\t0, 1,\t\t\t// language, First char code
\t\t\t\$entryCount
\t\t);
\t\t\$cmapstr = '';
\t\tforeach(\$subset AS \$code) { \$cmap[] = \$codeToGlyph[\$code]; }
\t\tforeach(\$cmap AS \$cm) { \$cmapstr .= pack(\"n\",\$cm); }
\t\t\$cmapstr .= \$cmapstr4;
\t\t\$this->add('cmap', \$cmapstr);

\t\t///////////////////////////////////
\t\t// hmtx - Horizontal Metrics
\t\t///////////////////////////////////
\t\t\$hmtxstr = '';
\t\tfor(\$n=0;\$n<\$numGlyphs;\$n++) {
\t\t\t\$originalGlyphIdx = \$glyphMap[\$n];
\t\t\t\$hm = \$this->getHMetric(\$orignHmetrics, \$originalGlyphIdx);
\t\t\t\$hmtxstr .= \$hm;
\t\t}
\t\t\$this->add('hmtx', \$hmtxstr);

\t\t///////////////////////////////////
\t\t// glyf - Glyph data
\t\t///////////////////////////////////
\t\tlist(\$glyfOffset,\$glyfLength) = \$this->get_table_pos('glyf');
\t\tif (\$glyfLength < \$this->maxStrLenRead) {
\t\t\t\$glyphData = \$this->get_table('glyf');
\t\t}

\t\t\$offsets = array();
\t\t\$glyf = '';
\t\t\$pos = 0;
\t\tfor (\$n=0;\$n<\$numGlyphs;\$n++) {
\t\t\t\$offsets[] = \$pos;
\t\t\t\$originalGlyphIdx = \$glyphMap[\$n];
\t\t\t\$glyphPos = \$this->glyphPos[\$originalGlyphIdx];
\t\t\t\$glyphLen = \$this->glyphPos[\$originalGlyphIdx + 1] - \$glyphPos;
\t\t\tif (\$glyfLength < \$this->maxStrLenRead) {
\t\t\t\t\$data = substr(\$glyphData,\$glyphPos,\$glyphLen);
\t\t\t}
\t\t\telse {
\t\t\t\tif (\$glyphLen > 0) \$data = \$this->get_chunk(\$glyfOffset+\$glyphPos,\$glyphLen);
\t\t\t\telse \$data = '';
\t\t\t}
\t\t\tif (\$glyphLen > 0) \$up = unpack(\"n\", substr(\$data,0,2));
\t\t\tif (\$glyphLen > 2 && (\$up[1] & (1 << 15)) ) {
\t\t\t\t\$pos_in_glyph = 10;
\t\t\t\t\$flags = GF_MORE;
\t\t\t\twhile (\$flags & GF_MORE) {
\t\t\t\t\t\$up = unpack(\"n\", substr(\$data,\$pos_in_glyph,2));
\t\t\t\t\t\$flags = \$up[1];
\t\t\t\t\t\$up = unpack(\"n\", substr(\$data,\$pos_in_glyph+2,2));
\t\t\t\t\t\$glyphIdx = \$up[1];
\t\t\t\t\t\$data = \$this->_set_ushort(\$data, \$pos_in_glyph + 2, \$glyphSet[\$glyphIdx]);
\t\t\t\t\t\$pos_in_glyph += 4;
\t\t\t\t\tif (\$flags & GF_WORDS) { \$pos_in_glyph += 4; }
\t\t\t\t\telse { \$pos_in_glyph += 2; }
\t\t\t\t\tif (\$flags & GF_SCALE) { \$pos_in_glyph += 2; }
\t\t\t\t\telse if (\$flags & GF_XYSCALE) { \$pos_in_glyph += 4; }
\t\t\t\t\telse if (\$flags & GF_TWOBYTWO) { \$pos_in_glyph += 8; }
\t\t\t\t}
\t\t\t}
\t\t\t\$glyf .= \$data;
\t\t\t\$pos += \$glyphLen;
\t\t\tif (\$pos % 4 != 0) {
\t\t\t\t\$padding = 4 - (\$pos % 4);
\t\t\t\t\$glyf .= str_repeat(\"\\0\",\$padding);
\t\t\t\t\$pos += \$padding;
\t\t\t}
\t\t}
\t\t\$offsets[] = \$pos;
\t\t\$this->add('glyf', \$glyf);

\t\t///////////////////////////////////
\t\t// loca - Index to location
\t\t///////////////////////////////////
\t\t\$locastr = '';
\t\tif (((\$pos + 1) >> 1) > 0xFFFF) {
\t\t\t\$indexToLocFormat = 1;        // long format
\t\t\tforeach(\$offsets AS \$offset) { \$locastr .= pack(\"N\",\$offset); }
\t\t}
\t\telse {
\t\t\t\$indexToLocFormat = 0;        // short format
\t\t\tforeach(\$offsets AS \$offset) { \$locastr .= pack(\"n\",(\$offset/2)); }
\t\t}
\t\t\$this->add('loca', \$locastr);

\t\t///////////////////////////////////
\t\t// head - Font header
\t\t///////////////////////////////////
\t\t\$head = \$this->get_table('head');
\t\t\$head = \$this->_set_ushort(\$head, 50, \$indexToLocFormat);
\t\t\$this->add('head', \$head);

\t\tfclose(\$this->fh);

\t\t// Put the TTF file together
\t\t\$stm = '';
\t\t\$this->endTTFile(\$stm);
\t\t//file_put_contents('testfont.ttf', \$stm); exit;
\t\treturn \$stm ;
\t}

\t//////////////////////////////////////////////////////////////////////////////////
\t// Recursively get composite glyph data
\tfunction getGlyphData(\$originalGlyphIdx, &\$maxdepth, &\$depth, &\$points, &\$contours) {
\t\t\$depth++;
\t\t\$maxdepth = max(\$maxdepth, \$depth);
\t\tif (count(\$this->glyphdata[\$originalGlyphIdx]['compGlyphs'])) {
\t\t\tforeach(\$this->glyphdata[\$originalGlyphIdx]['compGlyphs'] AS \$glyphIdx) {
\t\t\t\t\$this->getGlyphData(\$glyphIdx, \$maxdepth, \$depth, \$points, \$contours);
\t\t\t}
\t\t}
\t\telse if ((\$this->glyphdata[\$originalGlyphIdx]['nContours'] > 0) && \$depth > 0) {\t// simple
\t\t\t\$contours += \$this->glyphdata[\$originalGlyphIdx]['nContours'];
\t\t\t\$points += \$this->glyphdata[\$originalGlyphIdx]['nPoints'];
\t\t}
\t\t\$depth--;
\t}


\t//////////////////////////////////////////////////////////////////////////////////
\t// Recursively get composite glyphs
\tfunction getGlyphs(\$originalGlyphIdx, &\$start, &\$glyphSet, &\$subsetglyphs) {
\t\t\$glyphPos = \$this->glyphPos[\$originalGlyphIdx];
\t\t\$glyphLen = \$this->glyphPos[\$originalGlyphIdx + 1] - \$glyphPos;
\t\tif (!\$glyphLen) { 
\t\t\treturn;
\t\t}
\t\t\$this->seek(\$start + \$glyphPos);
\t\t\$numberOfContours = \$this->read_short();
\t\tif (\$numberOfContours < 0) {
\t\t\t\$this->skip(8);
\t\t\t\$flags = GF_MORE;
\t\t\twhile (\$flags & GF_MORE) {
\t\t\t\t\$flags = \$this->read_ushort();
\t\t\t\t\$glyphIdx = \$this->read_ushort();
\t\t\t\tif (!isset(\$glyphSet[\$glyphIdx])) {
\t\t\t\t\t\$glyphSet[\$glyphIdx] = count(\$subsetglyphs);\t// old glyphID to new glyphID
\t\t\t\t\t\$subsetglyphs[\$glyphIdx] = true;
\t\t\t\t}
\t\t\t\t\$savepos = ftell(\$this->fh);
\t\t\t\t\$this->getGlyphs(\$glyphIdx, \$start, \$glyphSet, \$subsetglyphs);
\t\t\t\t\$this->seek(\$savepos);
\t\t\t\tif (\$flags & GF_WORDS)
\t\t\t\t\t\$this->skip(4);
\t\t\t\telse
\t\t\t\t\t\$this->skip(2);
\t\t\t\tif (\$flags & GF_SCALE)
\t\t\t\t\t\$this->skip(2);
\t\t\t\telse if (\$flags & GF_XYSCALE)
\t\t\t\t\t\$this->skip(4);
\t\t\t\telse if (\$flags & GF_TWOBYTWO)
\t\t\t\t\t\$this->skip(8);
\t\t\t}
\t\t}
\t}

\t//////////////////////////////////////////////////////////////////////////////////

\tfunction getHMTX(\$numberOfHMetrics, \$numGlyphs, &\$glyphToChar, \$scale) {
\t\t\$start = \$this->seek_table(\"hmtx\");
\t\t\$aw = 0;
\t\t\$this->charWidths = str_pad('', 256*256*2, \"\\x00\");
\t\tif (\$this->maxUniChar > 65536) { \$this->charWidths .= str_pad('', 256*256*2, \"\\x00\"); }\t// Plane 1 SMP
\t\tif (\$this->maxUniChar > 131072) { \$this->charWidths .= str_pad('', 256*256*2, \"\\x00\"); }\t// Plane 2 SMP
\t\t\$nCharWidths = 0;
\t\tif ((\$numberOfHMetrics*4) < \$this->maxStrLenRead) {
\t\t\t\$data = \$this->get_chunk(\$start,(\$numberOfHMetrics*4));
\t\t\t\$arr = unpack(\"n*\", \$data);
\t\t}
\t\telse { \$this->seek(\$start); }
\t\tfor( \$glyph=0; \$glyph<\$numberOfHMetrics; \$glyph++) {
\t\t\tif ((\$numberOfHMetrics*4) < \$this->maxStrLenRead) {
\t\t\t\t\$aw = \$arr[(\$glyph*2)+1];
\t\t\t}
\t\t\telse {
\t\t\t\t\$aw = \$this->read_ushort();
\t\t\t\t\$lsb = \$this->read_ushort();
\t\t\t}
\t\t\tif (isset(\$glyphToChar[\$glyph]) || \$glyph == 0) {

\t\t\t\tif (\$aw >= (1 << 15) ) { \$aw = 0; }\t// 1.03 Some (arabic) fonts have -ve values for width
\t\t\t\t\t// although should be unsigned value - comes out as e.g. 65108 (intended -50)
\t\t\t\tif (\$glyph == 0) {
\t\t\t\t\t\$this->defaultWidth = \$scale*\$aw;
\t\t\t\t\tcontinue;
\t\t\t\t}
\t\t\t\tforeach(\$glyphToChar[\$glyph] AS \$char) {
\t\t\t\t\t//\$this->charWidths[\$char] = intval(round(\$scale*\$aw));
\t\t\t\t\tif (\$char != 0 && \$char != 65535) {
 \t\t\t\t\t\t\$w = intval(round(\$scale*\$aw));
\t\t\t\t\t\tif (\$w == 0) { \$w = 65535; }
\t\t\t\t\t\tif (\$char < 196608) {
\t\t\t\t\t\t\t\$this->charWidths[\$char*2] = chr(\$w >> 8);
\t\t\t\t\t\t\t\$this->charWidths[\$char*2 + 1] = chr(\$w & 0xFF);
\t\t\t\t\t\t\t\$nCharWidths++;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t\$data = \$this->get_chunk((\$start+\$numberOfHMetrics*4),(\$numGlyphs*2));
\t\t\$arr = unpack(\"n*\", \$data);
\t\t\$diff = \$numGlyphs-\$numberOfHMetrics;
\t\t\$w = intval(round(\$scale*\$aw));
\t\tif (\$w == 0) { \$w = 65535; }
\t\tfor( \$pos=0; \$pos<\$diff; \$pos++) {
\t\t\t\$glyph = \$pos + \$numberOfHMetrics;
\t\t\tif (isset(\$glyphToChar[\$glyph])) {
\t\t\t\tforeach(\$glyphToChar[\$glyph] AS \$char) {
\t\t\t\t\tif (\$char != 0 && \$char != 65535) {
\t\t\t\t\t\tif (\$char < 196608) { 
\t\t\t\t\t\t\t\$this->charWidths[\$char*2] = chr(\$w >> 8);
\t\t\t\t\t\t\t\$this->charWidths[\$char*2 + 1] = chr(\$w & 0xFF);
\t\t\t\t\t\t\t\$nCharWidths++;
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t}
\t\t// NB 65535 is a set width of 0
\t\t// First bytes define number of chars in font
\t\t\$this->charWidths[0] = chr(\$nCharWidths >> 8);
\t\t\$this->charWidths[1] = chr(\$nCharWidths & 0xFF);
\t}

\tfunction getHMetric(\$numberOfHMetrics, \$gid) {
\t\t\$start = \$this->seek_table(\"hmtx\");
\t\tif (\$gid < \$numberOfHMetrics) {
\t\t\t\$this->seek(\$start+(\$gid*4));
\t\t\t\$hm = fread(\$this->fh,4);
\t\t}
\t\telse {
\t\t\t\$this->seek(\$start+((\$numberOfHMetrics-1)*4));
\t\t\t\$hm = fread(\$this->fh,2);
\t\t\t\$this->seek(\$start+(\$numberOfHMetrics*2)+(\$gid*2));
\t\t\t\$hm .= fread(\$this->fh,2);
\t\t}
\t\treturn \$hm;
\t}

\tfunction getLOCA(\$indexToLocFormat, \$numGlyphs) {
\t\t\$start = \$this->seek_table('loca');
\t\t\$this->glyphPos = array();
\t\tif (\$indexToLocFormat == 0) {
\t\t\t\$data = \$this->get_chunk(\$start,(\$numGlyphs*2)+2);
\t\t\t\$arr = unpack(\"n*\", \$data);
\t\t\tfor (\$n=0; \$n<=\$numGlyphs; \$n++) {
\t\t\t\t\$this->glyphPos[] = (\$arr[\$n+1] * 2);
\t\t\t}
\t\t}
\t\telse if (\$indexToLocFormat == 1) {
\t\t\t\$data = \$this->get_chunk(\$start,(\$numGlyphs*4)+4);
\t\t\t\$arr = unpack(\"N*\", \$data);
\t\t\tfor (\$n=0; \$n<=\$numGlyphs; \$n++) {
\t\t\t\t\$this->glyphPos[] = (\$arr[\$n+1]);
\t\t\t}
\t\t}
\t\telse 
\t\t\tdie('Unknown location table format '.\$indexToLocFormat);
\t}


\t// CMAP Format 4
\tfunction getCMAP4(\$unicode_cmap_offset, &\$glyphToChar, &\$charToGlyph ) {
\t\t\$this->maxUniChar = 0;\t
\t\t\$this->seek(\$unicode_cmap_offset + 2);
\t\t\$length = \$this->read_ushort();
\t\t\$limit = \$unicode_cmap_offset + \$length;
\t\t\$this->skip(2);

\t\t\$segCount = \$this->read_ushort() / 2;
\t\t\$this->skip(6);
\t\t\$endCount = array();
\t\tfor(\$i=0; \$i<\$segCount; \$i++) { \$endCount[] = \$this->read_ushort(); }
\t\t\$this->skip(2);
\t\t\$startCount = array();
\t\tfor(\$i=0; \$i<\$segCount; \$i++) { \$startCount[] = \$this->read_ushort(); }
\t\t\$idDelta = array();
\t\tfor(\$i=0; \$i<\$segCount; \$i++) { \$idDelta[] = \$this->read_short(); }\t\t// ???? was unsigned short
\t\t\$idRangeOffset_start = \$this->_pos;
\t\t\$idRangeOffset = array();
\t\tfor(\$i=0; \$i<\$segCount; \$i++) { \$idRangeOffset[] = \$this->read_ushort(); }

\t\tfor (\$n=0;\$n<\$segCount;\$n++) {
\t\t\t\$endpoint = (\$endCount[\$n] + 1);
\t\t\tfor (\$unichar=\$startCount[\$n];\$unichar<\$endpoint;\$unichar++) {
\t\t\t\tif (\$idRangeOffset[\$n] == 0)
\t\t\t\t\t\$glyph = (\$unichar + \$idDelta[\$n]) & 0xFFFF;
\t\t\t\telse {
\t\t\t\t\t\$offset = (\$unichar - \$startCount[\$n]) * 2 + \$idRangeOffset[\$n];
\t\t\t\t\t\$offset = \$idRangeOffset_start + 2 * \$n + \$offset;
\t\t\t\t\tif (\$offset >= \$limit)
\t\t\t\t\t\t\$glyph = 0;
\t\t\t\t\telse {
\t\t\t\t\t\t\$glyph = \$this->get_ushort(\$offset);
\t\t\t\t\t\tif (\$glyph != 0)
\t\t\t\t\t\t   \$glyph = (\$glyph + \$idDelta[\$n]) & 0xFFFF;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\t\$charToGlyph[\$unichar] = \$glyph;
\t\t\t\tif (\$unichar < 196608) { \$this->maxUniChar = max(\$unichar,\$this->maxUniChar); }
\t\t\t\t\$glyphToChar[\$glyph][] = \$unichar;
\t\t\t}
\t\t}

\t\t// mPDF 5.4.05
\t\tif (\$this->unAGlyphs) {
\t\t  if (isset(\$this->tables['post'])) {
\t\t\t\$this->seek_table(\"post\");
\t\t\t\$formata = \$this->read_ushort();
\t\t\t\$formatb = \$this->read_ushort();
\t\t\t// Only works on Format 2.0
\t\t\tif (\$formata != 2 || \$formatb != 0) { die(\"Cannot set unAGlyphs for this font (\".\$file.\"). POST table must be in Format 2.\"); }
\t\t\t\$this->skip(28);
\t\t\t\$nGlyfs = \$this->read_ushort();
\t\t\t\$glyphNameIndex = array();
\t\t\tfor (\$i=0; \$i<\$nGlyfs; \$i++) {
\t\t\t\t\$glyphNameIndex[(\$this->read_ushort())] = \$i;
\t\t\t}

\t\t\t\$opost = \$this->get_table('post');
\t\t\t\$ptr = 34+(\$nGlyfs*2);
\t\t\tfor (\$i=0; \$i<\$nGlyfs; \$i++) {
\t\t\t\t\$len = ord(substr(\$opost,\$ptr,1));
\t\t\t\t\$ptr++;
\t\t\t\t\$name = substr(\$opost,\$ptr,\$len);
\t\t\t\t\$gid = \$glyphNameIndex[\$i+258];
\t\t\t\t// Select uni0600.xxx(x) - uni06FF.xxx(x)
\t\t\t\tif (preg_match('/^uni(06[0-9a-f]{2})\\.(fina|medi|init|fin|med|ini)\$/i',\$name,\$m)) {
\t\t\t\t  if (!isset(\$glyphToChar[\$gid]) || (isset(\$glyphToChar[\$gid]) && is_array(\$glyphToChar[\$gid]) && count(\$glyphToChar[\$gid])==1 && \$glyphToChar[\$gid][0]>57343 && \$glyphToChar[\$gid][0]<63489)) {\t// if set in PUA private use area E000-F8FF, or NOT Unicode mapped
\t\t\t\t\t\$uni = hexdec(\$m[1]);
\t\t\t\t\t\$form = strtoupper(substr(\$m[2],0,1));
\t\t\t\t\t// Assign new PUA Unicode between F500 - F7FF
\t\t\t\t\t\$bit = \$uni & 0xFF;
\t\t\t\t\tif (\$form == 'I') { \$bit += 0xF600; }
\t\t\t\t\telse if (\$form == 'M') { \$bit += 0xF700; }
\t\t\t\t\telse  { \$bit += 0xF500; }
\t\t\t\t\t// ADD TO CMAP
\t\t\t\t\t\$glyphToChar[\$gid][] = \$bit;
\t\t\t\t\t\$charToGlyph[\$bit] = \$gid;
\t\t\t\t  }
\t\t\t\t}
\t\t\t\t// LAM with ALEF ligatures (Mandatory ligatures)
\t\t\t\telse if (preg_match('/^uni064406(22|23|25|27)(\\.fina|\\.fin){0,1}\$/i',\$name,\$m)) {
\t\t\t\t  if (\$m[1]=='22') {
\t\t\t\t\tif (\$m[2]) { \$uni = hexdec('FEF6'); } else { \$uni = hexdec('FEF5'); } 
\t\t\t\t  }
\t\t\t\t  else if (\$m[1]=='23') {
\t\t\t\t\tif (\$m[2]) { \$uni = hexdec('FEF8'); } else { \$uni = hexdec('FEF7'); } 
\t\t\t\t  }
\t\t\t\t  else if (\$m[1]=='25') {
\t\t\t\t\tif (\$m[2]) { \$uni = hexdec('FEFA'); } else { \$uni = hexdec('FEF9'); } 
\t\t\t\t  }
\t\t\t\t  else if (\$m[1]=='27') {
\t\t\t\t\tif (\$m[2]) { \$uni = hexdec('FEFC'); } else { \$uni = hexdec('FEFB'); } 
\t\t\t\t  }
\t\t\t\t  if (!isset(\$glyphToChar[\$gid]) || (isset(\$glyphToChar[\$gid]) && is_array(\$glyphToChar[\$gid]) && count(\$glyphToChar[\$gid])==1 && \$glyphToChar[\$gid][0]>57343 && \$glyphToChar[\$gid][0]<63489)) {\t// if set in PUA private use area E000-F8FF, or NOT Unicode mapped
\t\t\t\t\t// ADD TO CMAP
\t\t\t\t\t\$glyphToChar[\$gid][] = \$uni;
\t\t\t\t\t\$charToGlyph[\$uni] = \$gid;
\t\t\t\t  }
\t\t\t\t}
\t\t\t\t\$ptr += \$len;
\t\t\t}
\t\t  }
\t\t}

\t}


\t\t// Put the TTF file together
\tfunction endTTFile(&\$stm) {
\t\t\$stm = '';
\t\t\$numTables = count(\$this->otables);
\t\t\$searchRange = 1;
\t\t\$entrySelector = 0;
\t\twhile (\$searchRange * 2 <= \$numTables) {
\t\t\t\$searchRange = \$searchRange * 2;
\t\t\t\$entrySelector = \$entrySelector + 1;
\t\t}
\t\t\$searchRange = \$searchRange * 16;
\t\t\$rangeShift = \$numTables * 16 - \$searchRange;

\t\t// Header
\t\tif (_TTF_MAC_HEADER) {
\t\t\t\$stm .= (pack(\"Nnnnn\", 0x74727565, \$numTables, \$searchRange, \$entrySelector, \$rangeShift));\t// Mac
\t\t}
\t\telse {
\t\t\t\$stm .= (pack(\"Nnnnn\", 0x00010000 , \$numTables, \$searchRange, \$entrySelector, \$rangeShift));\t// Windows
\t\t}

\t\t// Table directory
\t\t\$tables = \$this->otables;
\t\tksort (\$tables); 
\t\t\$offset = 12 + \$numTables * 16;
\t\tforeach (\$tables AS \$tag=>\$data) {
\t\t\tif (\$tag == 'head') { \$head_start = \$offset; }
\t\t\t\$stm .= \$tag;
\t\t\t\$checksum = \$this->calcChecksum(\$data);
\t\t\t\$stm .= pack(\"nn\", \$checksum[0],\$checksum[1]);
\t\t\t\$stm .= pack(\"NN\", \$offset, strlen(\$data));
\t\t\t\$paddedLength = (strlen(\$data)+3)&~3;
\t\t\t\$offset = \$offset + \$paddedLength;
\t\t}

\t\t// Table data
\t\tforeach (\$tables AS \$tag=>\$data) {
\t\t\t\$data .= \"\\0\\0\\0\";
\t\t\t\$stm .= substr(\$data,0,(strlen(\$data)&~3));
\t\t}

\t\t\$checksum = \$this->calcChecksum(\$stm);
\t\t\$checksum = \$this->sub32(array(0xB1B0,0xAFBA), \$checksum);
\t\t\$chk = pack(\"nn\", \$checksum[0],\$checksum[1]);
\t\t\$stm = \$this->splice(\$stm,(\$head_start + 8),\$chk);
\t\treturn \$stm ;
\t}


\tfunction repackageTTF(\$file, \$TTCfontID=0, \$debug=false, \$unAGlyphs=false) {\t// mPDF 5.4.05
\t\t\$this->unAGlyphs = \$unAGlyphs;\t// mPDF 5.4.05
\t\t\$this->filename = \$file;
\t\t\$this->fh = fopen(\$file ,'rb') or die('Can\\'t open file ' . \$file);
\t\t\$this->_pos = 0;
\t\t\$this->charWidths = '';
\t\t\$this->glyphPos = array();
\t\t\$this->charToGlyph = array();
\t\t\$this->tables = array();
\t\t\$this->otables = array();
\t\t\$this->ascent = 0;
\t\t\$this->descent = 0;
\t\t\$this->numTTCFonts = 0;
\t\t\$this->TTCFonts = array();
\t\t\$this->skip(4);
\t\t\$this->maxUni = 0;
\t\tif (\$TTCfontID > 0) {
\t\t\t\$this->version = \$version = \$this->read_ulong();\t// TTC Header version now
\t\t\tif (!in_array(\$version, array(0x00010000,0x00020000)))
\t\t\t\tdie(\"ERROR - Error parsing TrueType Collection: version=\".\$version.\" - \" . \$file);
\t\t\t\$this->numTTCFonts = \$this->read_ulong();
\t\t\tfor (\$i=1; \$i<=\$this->numTTCFonts; \$i++) {
\t      \t      \$this->TTCFonts[\$i]['offset'] = \$this->read_ulong();
\t\t\t}
\t\t\t\$this->seek(\$this->TTCFonts[\$TTCfontID]['offset']);
\t\t\t\$this->version = \$version = \$this->read_ulong();\t// TTFont version again now
\t\t}
\t\t\$this->readTableDirectory(\$debug);
\t\t\$tags = array ('OS/2', 'cmap', 'glyf', 'head', 'hhea', 'hmtx', 'loca', 'maxp', 'name', 'post', 'cvt ', 'fpgm', 'gasp', 'prep');
/*
Tables which require glyphIndex
hdmx
kern
LTSH

Tables which do NOT require glyphIndex
VDMX

GDEF
GPOS
GSUB
JSTF

DSIG
PCLT - not recommended
*/

\t\tforeach(\$tags AS \$tag) {
\t\t\tif (isset(\$this->tables[\$tag])) { \$this->add(\$tag, \$this->get_table(\$tag)); }
\t\t}
\t\tfclose(\$this->fh);
\t\t\$stm = '';
\t\t\$this->endTTFile(\$stm);
\t\treturn \$stm ;
\t}


}


?>";
        
        $__internal_54b99af63d9d4525f287ab85d83f30a4b6632c6ee62a98ae62d6882cf07800b3->leave($__internal_54b99af63d9d4525f287ab85d83f30a4b6632c6ee62a98ae62d6882cf07800b3_prof);

    }

    public function getTemplateName()
    {
        return "support/include/mpdf/classes/ttfontsuni.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* /********************************************************************************/
/* * TTFontFile class                                                             **/
/* *                                                                              **/
/* * Version:  2.01		                                                       **/
/* * Date:     2012-02-25                                                         **/
/* * Author:   Ian Back <ianb@bpm1.com>                                           **/
/* * License:  LGPL                                                               **/
/* * Copyright (c) Ian Back, 2010                                                 **/
/* * This class is based on The ReportLab Open Source PDF library                 **/
/* * written in Python - http://www.reportlab.com/software/opensource/            **/
/* * together with ideas from the OpenOffice source code and others.              * */
/* * This header must be retained in any redistribution or                        **/
/* * modification of the file.                                                    **/
/* *                                                                              **/
/* *******************************************************************************//* */
/* */
/* // Define the value used in the "head" table of a created TTF file*/
/* // 0x74727565 "true" for Mac*/
/* // 0x00010000 for Windows*/
/* // Either seems to work for a font embedded in a PDF file*/
/* // when read by Adobe Reader on a Windows PC(!)*/
/* if (!defined('_TTF_MAC_HEADER')) define("_TTF_MAC_HEADER", false);*/
/* */
/* // Recalculate correct metadata/profiles when making subset fonts (not SIP/SMP)*/
/* // e.g. xMin, xMax, maxNContours*/
/* if (!defined('_RECALC_PROFILE')) define("_RECALC_PROFILE", false);*/
/* */
/* // TrueType Font Glyph operators*/
/* define("GF_WORDS",(1 << 0));*/
/* define("GF_SCALE",(1 << 3));*/
/* define("GF_MORE",(1 << 5));*/
/* define("GF_XYSCALE",(1 << 6));*/
/* define("GF_TWOBYTWO",(1 << 7));*/
/* */
/* */
/* */
/* class TTFontFile {*/
/* */
/* var $unAGlyphs;	// mPDF 5.4.05*/
/* var $panose;*/
/* var $maxUni;*/
/* var $sFamilyClass;*/
/* var $sFamilySubClass;*/
/* var $sipset;*/
/* var $smpset;*/
/* var $_pos;*/
/* var $numTables;*/
/* var $searchRange;*/
/* var $entrySelector;*/
/* var $rangeShift;*/
/* var $tables;*/
/* var $otables;*/
/* var $filename;*/
/* var $fh;*/
/* var $glyphPos;*/
/* var $charToGlyph;*/
/* var $ascent;*/
/* var $descent;*/
/* var $name;*/
/* var $familyName;*/
/* var $styleName;*/
/* var $fullName;*/
/* var $uniqueFontID;*/
/* var $unitsPerEm;*/
/* var $bbox;*/
/* var $capHeight;*/
/* var $stemV;*/
/* var $italicAngle;*/
/* var $flags;*/
/* var $underlinePosition;*/
/* var $underlineThickness;*/
/* var $charWidths;*/
/* var $defaultWidth;*/
/* var $maxStrLenRead;*/
/* var $numTTCFonts;*/
/* var $TTCFonts;*/
/* var $maxUniChar;*/
/* var $kerninfo;*/
/* */
/* 	function TTFontFile() {*/
/* 		$this->maxStrLenRead = 200000;	// Maximum size of glyf table to read in as string (otherwise reads each glyph from file)*/
/* 	}*/
/* */
/* */
/* 	function getMetrics($file, $TTCfontID=0, $debug=false, $BMPonly=false, $kerninfo=false, $unAGlyphs=false) {	// mPDF 5.4.05*/
/* 		$this->unAGlyphs = $unAGlyphs;	// mPDF 5.4.05*/
/* 		$this->filename = $file;*/
/* 		$this->fh = fopen($file,'rb') or die('Can\'t open file ' . $file);*/
/* 		$this->_pos = 0;*/
/* 		$this->charWidths = '';*/
/* 		$this->glyphPos = array();*/
/* 		$this->charToGlyph = array();*/
/* 		$this->tables = array();*/
/* 		$this->otables = array();*/
/* 		$this->kerninfo = array();*/
/* 		$this->ascent = 0;*/
/* 		$this->descent = 0;*/
/* 		$this->numTTCFonts = 0;*/
/* 		$this->TTCFonts = array();*/
/* 		$this->version = $version = $this->read_ulong();*/
/* 		$this->panose = array();*/
/* 		if ($version==0x4F54544F) */
/* 			die("Postscript outlines are not supported");*/
/* 		if ($version==0x74746366 && !$TTCfontID) */
/* 			die("ERROR - You must define the TTCfontID for a TrueType Collection in config_fonts.php (". $file.")");*/
/* 		if (!in_array($version, array(0x00010000,0x74727565)) && !$TTCfontID)*/
/* 			die("Not a TrueType font: version=".$version);*/
/* 		if ($TTCfontID > 0) {*/
/* 			$this->version = $version = $this->read_ulong();	// TTC Header version now*/
/* 			if (!in_array($version, array(0x00010000,0x00020000)))*/
/* 				die("ERROR - Error parsing TrueType Collection: version=".$version." - " . $file);*/
/* 			$this->numTTCFonts = $this->read_ulong();*/
/* 			for ($i=1; $i<=$this->numTTCFonts; $i++) {*/
/* 	      	      $this->TTCFonts[$i]['offset'] = $this->read_ulong();*/
/* 			}*/
/* 			$this->seek($this->TTCFonts[$TTCfontID]['offset']);*/
/* 			$this->version = $version = $this->read_ulong();	// TTFont version again now*/
/* 		}*/
/* 		$this->readTableDirectory($debug);*/
/* 		$this->extractInfo($debug, $BMPonly, $kerninfo); */
/* 		fclose($this->fh);*/
/* 	}*/
/* */
/* */
/* 	function readTableDirectory($debug=false) {*/
/* 	    $this->numTables = $this->read_ushort();*/
/*             $this->searchRange = $this->read_ushort();*/
/*             $this->entrySelector = $this->read_ushort();*/
/*             $this->rangeShift = $this->read_ushort();*/
/*             $this->tables = array();	*/
/*             for ($i=0;$i<$this->numTables;$i++) {*/
/*                 $record = array();*/
/*                 $record['tag'] = $this->read_tag();*/
/*                 $record['checksum'] = array($this->read_ushort(),$this->read_ushort());*/
/*                 $record['offset'] = $this->read_ulong();*/
/*                 $record['length'] = $this->read_ulong();*/
/*                 $this->tables[$record['tag']] = $record;*/
/* 		}*/
/* 		if ($debug) $this->checksumTables();*/
/* 	}*/
/* */
/* 	function checksumTables() {*/
/* 		// Check the checksums for all tables*/
/* 		foreach($this->tables AS $t) {*/
/* 		  if ($t['length'] > 0 && $t['length'] < $this->maxStrLenRead) {	// 1.02*/
/*             	$table = $this->get_chunk($t['offset'], $t['length']);*/
/*             	$checksum = $this->calcChecksum($table);*/
/*             	if ($t['tag'] == 'head') {*/
/* 				$up = unpack('n*', substr($table,8,4));*/
/* 				$adjustment[0] = $up[1];*/
/* 				$adjustment[1] = $up[2];*/
/*             		$checksum = $this->sub32($checksum, $adjustment);*/
/* 			}*/
/*             	$xchecksum = $t['checksum'];*/
/*             	if ($xchecksum != $checksum) */
/*             	    die(sprintf('TTF file "%s": invalid checksum %s table: %s (expected %s)', $this->filename,dechex($checksum[0]).dechex($checksum[1]),$t['tag'],dechex($xchecksum[0]).dechex($xchecksum[1])));*/
/* 		  }*/
/* 		}*/
/* 	}*/
/* */
/* 	function sub32($x, $y) {*/
/* 		$xlo = $x[1];*/
/* 		$xhi = $x[0];*/
/* 		$ylo = $y[1];*/
/* 		$yhi = $y[0];*/
/* 		if ($ylo > $xlo) { $xlo += 1 << 16; $yhi += 1; }*/
/* 		$reslo = $xlo-$ylo;*/
/* 		if ($yhi > $xhi) { $xhi += 1 << 16;  }*/
/* 		$reshi = $xhi-$yhi;*/
/* 		$reshi = $reshi & 0xFFFF;*/
/* 		return array($reshi, $reslo);*/
/* 	}*/
/* */
/* 	function calcChecksum($data)  {*/
/* 		if (strlen($data) % 4) { $data .= str_repeat("\0",(4-(strlen($data) % 4))); }*/
/* 		$len = strlen($data);*/
/* 		$hi=0x0000;*/
/* 		$lo=0x0000;*/
/* 		for($i=0;$i<$len;$i+=4) {*/
/* 			$hi += (ord($data[$i])<<8) + ord($data[$i+1]);*/
/* 			$lo += (ord($data[$i+2])<<8) + ord($data[$i+3]);*/
/* 			$hi += ($lo >> 16) & 0xFFFF;*/
/* 			$lo = $lo & 0xFFFF;*/
/* 		}*/
/* 		return array($hi, $lo);*/
/* 	}*/
/* */
/* 	function get_table_pos($tag) {*/
/* 		$offset = $this->tables[$tag]['offset'];*/
/* 		$length = $this->tables[$tag]['length'];*/
/* 		return array($offset, $length);*/
/* 	}*/
/* */
/* 	function seek($pos) {*/
/* 		$this->_pos = $pos;*/
/* 		fseek($this->fh,$this->_pos);*/
/* 	}*/
/* */
/* 	function skip($delta) {*/
/* 		$this->_pos = $this->_pos + $delta;*/
/* 		fseek($this->fh,$delta,SEEK_CUR);*/
/* 	}*/
/* */
/* 	function seek_table($tag, $offset_in_table = 0) {*/
/* 		$tpos = $this->get_table_pos($tag);*/
/* 		$this->_pos = $tpos[0] + $offset_in_table;*/
/* 		fseek($this->fh, $this->_pos);*/
/* 		return $this->_pos;*/
/* 	}*/
/* */
/* 	function read_tag() {*/
/* 		$this->_pos += 4;*/
/* 		return fread($this->fh,4);*/
/* 	}*/
/* */
/* 	function read_short() {*/
/* 		$this->_pos += 2;*/
/* 		$s = fread($this->fh,2);*/
/* 		$a = (ord($s[0])<<8) + ord($s[1]);*/
/* 		if ($a & (1 << 15) ) { */
/* 			$a = ($a - (1 << 16)); */
/* 		}*/
/* 		return $a;*/
/* 	}*/
/* */
/* 	function unpack_short($s) {*/
/* 		$a = (ord($s[0])<<8) + ord($s[1]);*/
/* 		if ($a & (1 << 15) ) { */
/* 			$a = ($a - (1 << 16)); */
/* 		}*/
/* 		return $a;*/
/* 	}*/
/* */
/* 	function read_ushort() {*/
/* 		$this->_pos += 2;*/
/* 		$s = fread($this->fh,2);*/
/* 		return (ord($s[0])<<8) + ord($s[1]);*/
/* 	}*/
/* */
/* 	function read_ulong() {*/
/* 		$this->_pos += 4;*/
/* 		$s = fread($this->fh,4);*/
/* 		// if large uInt32 as an integer, PHP converts it to -ve*/
/* 		return (ord($s[0])*16777216) + (ord($s[1])<<16) + (ord($s[2])<<8) + ord($s[3]); // 	16777216  = 1<<24*/
/* 	}*/
/* */
/* 	function get_ushort($pos) {*/
/* 		fseek($this->fh,$pos);*/
/* 		$s = fread($this->fh,2);*/
/* 		return (ord($s[0])<<8) + ord($s[1]);*/
/* 	}*/
/* */
/* 	function get_ulong($pos) {*/
/* 		fseek($this->fh,$pos);*/
/* 		$s = fread($this->fh,4);*/
/* 		// iF large uInt32 as an integer, PHP converts it to -ve*/
/* 		return (ord($s[0])*16777216) + (ord($s[1])<<16) + (ord($s[2])<<8) + ord($s[3]); // 	16777216  = 1<<24*/
/* 	}*/
/* */
/* 	function pack_short($val) {*/
/* 		if ($val<0) { */
/* 			$val = abs($val);*/
/* 			$val = ~$val;*/
/* 			$val += 1;*/
/* 		}*/
/* 		return pack("n",$val); */
/* 	}*/
/* */
/* 	function splice($stream, $offset, $value) {*/
/* 		return substr($stream,0,$offset) . $value . substr($stream,$offset+strlen($value));*/
/* 	}*/
/* */
/* 	function _set_ushort($stream, $offset, $value) {*/
/* 		$up = pack("n", $value);*/
/* 		return $this->splice($stream, $offset, $up);*/
/* 	}*/
/* */
/* 	function _set_short($stream, $offset, $val) {*/
/* 		if ($val<0) { */
/* 			$val = abs($val);*/
/* 			$val = ~$val;*/
/* 			$val += 1;*/
/* 		}*/
/* 		$up = pack("n",$val); */
/* 		return $this->splice($stream, $offset, $up);*/
/* 	}*/
/* */
/* 	function get_chunk($pos, $length) {*/
/* 		fseek($this->fh,$pos);*/
/* 		if ($length <1) { return ''; }*/
/* 		return (fread($this->fh,$length));*/
/* 	}*/
/* */
/* 	function get_table($tag) {*/
/* 		list($pos, $length) = $this->get_table_pos($tag);*/
/* 		if ($length == 0) { return ''; }*/
/* 		fseek($this->fh,$pos);*/
/* 		return (fread($this->fh,$length));*/
/* 	}*/
/* */
/* 	function add($tag, $data) {*/
/* 		if ($tag == 'head') {*/
/* 			$data = $this->splice($data, 8, "\0\0\0\0");*/
/* 		}*/
/* 		$this->otables[$tag] = $data;*/
/* 	}*/
/* */
/* */
/* */
/* /////////////////////////////////////////////////////////////////////////////////////////*/
/* 	function getCTG($file, $TTCfontID=0, $debug=false, $unAGlyphs=false) {	// mPDF 5.4.05*/
/* 		$this->unAGlyphs = $unAGlyphs;	// mPDF 5.4.05*/
/* 		$this->filename = $file;*/
/* 		$this->fh = fopen($file,'rb') or die('Can\'t open file ' . $file);*/
/* 		$this->_pos = 0;*/
/* 		$this->charWidths = '';*/
/* 		$this->glyphPos = array();*/
/* 		$this->charToGlyph = array();*/
/* 		$this->tables = array();*/
/* 		$this->numTTCFonts = 0;*/
/* 		$this->TTCFonts = array();*/
/* 		$this->skip(4);*/
/* 		if ($TTCfontID > 0) {*/
/* 			$this->version = $version = $this->read_ulong();	// TTC Header version now*/
/* 			if (!in_array($version, array(0x00010000,0x00020000)))*/
/* 				die("ERROR - Error parsing TrueType Collection: version=".$version." - " . $file);*/
/* 			$this->numTTCFonts = $this->read_ulong();*/
/* 			for ($i=1; $i<=$this->numTTCFonts; $i++) {*/
/* 	      	      $this->TTCFonts[$i]['offset'] = $this->read_ulong();*/
/* 			}*/
/* 			$this->seek($this->TTCFonts[$TTCfontID]['offset']);*/
/* 			$this->version = $version = $this->read_ulong();	// TTFont version again now*/
/* 		}*/
/* 		$this->readTableDirectory($debug);*/
/* */
/* */
/* 		// cmap - Character to glyph index mapping table*/
/* 		$cmap_offset = $this->seek_table("cmap");*/
/* 		$this->skip(2);*/
/* 		$cmapTableCount = $this->read_ushort();*/
/* 		$unicode_cmap_offset = 0;*/
/* 		for ($i=0;$i<$cmapTableCount;$i++) {*/
/* 			$platformID = $this->read_ushort();*/
/* 			$encodingID = $this->read_ushort();*/
/* 			$offset = $this->read_ulong();*/
/* 			$save_pos = $this->_pos;*/
/* 			if ($platformID == 3 && $encodingID == 1) { // Microsoft, Unicode*/
/* 				$format = $this->get_ushort($cmap_offset + $offset);*/
/* 				if ($format == 4) {*/
/* 					$unicode_cmap_offset = $cmap_offset + $offset;*/
/* 					break;*/
/* 				}*/
/* 			}*/
/* 			else if ($platformID == 0) { // Unicode -- assume all encodings are compatible*/
/* 				$format = $this->get_ushort($cmap_offset + $offset);*/
/* 				if ($format == 4) {*/
/* 					$unicode_cmap_offset = $cmap_offset + $offset;*/
/* 					break;*/
/* 				}*/
/* 			}*/
/* 			$this->seek($save_pos );*/
/* 		}*/
/* */
/* 		$glyphToChar = array();*/
/* 		$charToGlyph = array();*/
/* 		$this->getCMAP4($unicode_cmap_offset, $glyphToChar, $charToGlyph );*/
/* */
/* 		fclose($this->fh);*/
/* 		return ($charToGlyph);*/
/* 	}*/
/* */
/* /////////////////////////////////////////////////////////////////////////////////////////*/
/* 	function getTTCFonts($file) {*/
/* 		$this->filename = $file;*/
/* 		$this->fh = fopen($file,'rb');*/
/* 		if (!$this->fh) { return ('ERROR - Can\'t open file ' . $file); }*/
/* 		$this->numTTCFonts = 0;*/
/* 		$this->TTCFonts = array();*/
/* 		$this->version = $version = $this->read_ulong();*/
/* 		if ($version==0x74746366) {*/
/* 			$this->version = $version = $this->read_ulong();	// TTC Header version now*/
/* 			if (!in_array($version, array(0x00010000,0x00020000)))*/
/* 				return("ERROR - Error parsing TrueType Collection: version=".$version." - " . $file);*/
/* 		}*/
/* 		else {*/
/* 			return("ERROR - Not a TrueType Collection: version=".$version." - " . $file);*/
/* 		}*/
/* 		$this->numTTCFonts = $this->read_ulong();*/
/* 		for ($i=1; $i<=$this->numTTCFonts; $i++) {*/
/* 	            $this->TTCFonts[$i]['offset'] = $this->read_ulong();*/
/* 		}*/
/* 	}*/
/* */
/* */
/* */
/* /////////////////////////////////////////////////////////////////////////////////////////*/
/* */
/* /////////////////////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function extractInfo($debug=false, $BMPonly=false, $kerninfo=false) {*/
/* 		$this->panose = array();*/
/* 		$this->sFamilyClass = 0;*/
/* 		$this->sFamilySubClass = 0;*/
/* 		///////////////////////////////////*/
/* 		// name - Naming table*/
/* 		///////////////////////////////////*/
/* 			$name_offset = $this->seek_table("name");*/
/* 			$format = $this->read_ushort();*/
/* 			if ($format != 0 && $format != 1)*/
/* 				die("Unknown name table format ".$format);*/
/* 			$numRecords = $this->read_ushort();*/
/* 			$string_data_offset = $name_offset + $this->read_ushort();*/
/* 			$names = array(1=>'',2=>'',3=>'',4=>'',6=>'');*/
/* 			$K = array_keys($names);*/
/* 			$nameCount = count($names);*/
/* 			for ($i=0;$i<$numRecords; $i++) {*/
/* 				$platformId = $this->read_ushort();*/
/* 				$encodingId = $this->read_ushort();*/
/* 				$languageId = $this->read_ushort();*/
/* 				$nameId = $this->read_ushort();*/
/* 				$length = $this->read_ushort();*/
/* 				$offset = $this->read_ushort();*/
/* 				if (!in_array($nameId,$K)) continue;*/
/* 				$N = '';*/
/* 				if ($platformId == 3 && $encodingId == 1 && $languageId == 0x409) { // Microsoft, Unicode, US English, PS Name*/
/* 					$opos = $this->_pos;*/
/* 					$this->seek($string_data_offset + $offset);*/
/* 					if ($length % 2 != 0)*/
/* 						die("PostScript name is UTF-16BE string of odd length");*/
/* 					$length /= 2;*/
/* 					$N = '';*/
/* 					while ($length > 0) {*/
/* 						$char = $this->read_ushort();*/
/* 						$N .= (chr($char));*/
/* 						$length -= 1;*/
/* 					}*/
/* 					$this->_pos = $opos;*/
/* 					$this->seek($opos);*/
/* 				}*/
/* 				else if ($platformId == 1 && $encodingId == 0 && $languageId == 0) { // Macintosh, Roman, English, PS Name*/
/* 					$opos = $this->_pos;*/
/* 					$N = $this->get_chunk($string_data_offset + $offset, $length);*/
/* 					$this->_pos = $opos;*/
/* 					$this->seek($opos);*/
/* 				}*/
/* 				if ($N && $names[$nameId]=='') {*/
/* 					$names[$nameId] = $N;*/
/* 					$nameCount -= 1;*/
/* 					if ($nameCount==0) break;*/
/* 				}*/
/* 			}*/
/* 			if ($names[6])*/
/* 				$psName = $names[6];*/
/* 			else if ($names[4])*/
/* 				$psName = preg_replace('/ /','-',$names[4]);*/
/* 			else if ($names[1])*/
/* 				$psName = preg_replace('/ /','-',$names[1]);*/
/* 			else*/
/* 				$psName = '';*/
/* 			if (!$psName)*/
/* 				die("Could not find PostScript font name: ".$this->filename);*/
/* 			if ($debug) {*/
/* 			   for ($i=0;$i<count($psName);$i++) {*/
/* 				$c = $psName[$i];*/
/* 				$oc = ord($c);*/
/* 				if ($oc>126 || strpos(' [](){}<>/%',$c)!==false)*/
/* 					die("psName=".$psName." contains invalid character ".$c." ie U+".ord(c));*/
/* 			   }*/
/* 			}*/
/* 			$this->name = $psName;*/
/* 			if ($names[1]) { $this->familyName = $names[1]; } else { $this->familyName = $psName; }*/
/* 			if ($names[2]) { $this->styleName = $names[2]; } else { $this->styleName = 'Regular'; }*/
/* 			if ($names[4]) { $this->fullName = $names[4]; } else { $this->fullName = $psName; }*/
/* 			if ($names[3]) { $this->uniqueFontID = $names[3]; } else { $this->uniqueFontID = $psName; }*/
/* */
/* 			if ($names[6]) { $this->fullName = $names[6]; }*/
/* */
/* 		///////////////////////////////////*/
/* 		// head - Font header table*/
/* 		///////////////////////////////////*/
/* 		$this->seek_table("head");*/
/* 		if ($debug) { */
/* 			$ver_maj = $this->read_ushort();*/
/* 			$ver_min = $this->read_ushort();*/
/* 			if ($ver_maj != 1)*/
/* 				die('Unknown head table version '. $ver_maj .'.'. $ver_min);*/
/* 			$this->fontRevision = $this->read_ushort() . $this->read_ushort();*/
/* */
/* 			$this->skip(4);*/
/* 			$magic = $this->read_ulong();*/
/* 			if ($magic != 0x5F0F3CF5) */
/* 				die('Invalid head table magic ' .$magic);*/
/* 			$this->skip(2);*/
/* 		}*/
/* 		else {*/
/* 			$this->skip(18); */
/* 		}*/
/* 		$this->unitsPerEm = $unitsPerEm = $this->read_ushort();*/
/* 		$scale = 1000 / $unitsPerEm;*/
/* 		$this->skip(16);*/
/* 		$xMin = $this->read_short();*/
/* 		$yMin = $this->read_short();*/
/* 		$xMax = $this->read_short();*/
/* 		$yMax = $this->read_short();*/
/* 		$this->bbox = array(($xMin*$scale), ($yMin*$scale), ($xMax*$scale), ($yMax*$scale));*/
/* 		$this->skip(3*2);*/
/* 		$indexToLocFormat = $this->read_ushort();*/
/* 		$glyphDataFormat = $this->read_ushort();*/
/* 		if ($glyphDataFormat != 0)*/
/* 			die('Unknown glyph data format '.$glyphDataFormat);*/
/* */
/* 		///////////////////////////////////*/
/* 		// hhea metrics table*/
/* 		///////////////////////////////////*/
/* 		// ttf2t1 seems to use this value rather than the one in OS/2 - so put in for compatibility*/
/* 		if (isset($this->tables["hhea"])) {*/
/* 			$this->seek_table("hhea");*/
/* 			$this->skip(4);*/
/* 			$hheaAscender = $this->read_short();*/
/* 			$hheaDescender = $this->read_short();*/
/* 			$this->ascent = ($hheaAscender *$scale);*/
/* 			$this->descent = ($hheaDescender *$scale);*/
/* 		}*/
/* */
/* 		///////////////////////////////////*/
/* 		// OS/2 - OS/2 and Windows metrics table*/
/* 		///////////////////////////////////*/
/* 		if (isset($this->tables["OS/2"])) {*/
/* 			$this->seek_table("OS/2");*/
/* 			$version = $this->read_ushort();*/
/* 			$this->skip(2);*/
/* 			$usWeightClass = $this->read_ushort();*/
/* 			$this->skip(2);*/
/* 			$fsType = $this->read_ushort();*/
/* 			if ($fsType == 0x0002 || ($fsType & 0x0300) != 0) {*/
/* 				global $overrideTTFFontRestriction;*/
/* 				if (!$overrideTTFFontRestriction) die('ERROR - Font file '.$this->filename.' cannot be embedded due to copyright restrictions.');*/
/* 				$this->restrictedUse = true;*/
/* 			}*/
/* 			$this->skip(20);*/
/* 			$sF = $this->read_short();*/
/* 			$this->sFamilyClass = ($sF >> 8);*/
/* 			$this->sFamilySubClass = ($sF & 0xFF);*/
/* 			$this->_pos += 10;  //PANOSE = 10 byte length*/
/* 			$panose = fread($this->fh,10);*/
/* 			$this->panose = array();*/
/* 			for ($p=0;$p<strlen($panose);$p++) { $this->panose[] = ord($panose[$p]); }*/
/* 			$this->skip(26);*/
/* 			$sTypoAscender = $this->read_short();*/
/* 			$sTypoDescender = $this->read_short();*/
/* 			if (!$this->ascent) $this->ascent = ($sTypoAscender*$scale);*/
/* 			if (!$this->descent) $this->descent = ($sTypoDescender*$scale);*/
/* 			if ($version > 1) {*/
/* 				$this->skip(16);*/
/* 				$sCapHeight = $this->read_short();*/
/* 				$this->capHeight = ($sCapHeight*$scale);*/
/* 			}*/
/* 			else {*/
/* 				$this->capHeight = $this->ascent;*/
/* 			}*/
/* 		}*/
/* 		else {*/
/* 			$usWeightClass = 500;*/
/* 			if (!$this->ascent) $this->ascent = ($yMax*$scale);*/
/* 			if (!$this->descent) $this->descent = ($yMin*$scale);*/
/* 			$this->capHeight = $this->ascent;*/
/* 		}*/
/* 		$this->stemV = 50 + intval(pow(($usWeightClass / 65.0),2));*/
/* */
/* 		///////////////////////////////////*/
/* 		// post - PostScript table*/
/* 		///////////////////////////////////*/
/* 		$this->seek_table("post");*/
/* 		if ($debug) { */
/* 			$ver_maj = $this->read_ushort();*/
/* 			$ver_min = $this->read_ushort();*/
/* 			if ($ver_maj <1 || $ver_maj >4) */
/* 				die('Unknown post table version '.$ver_maj);*/
/* 		}*/
/* 		else {*/
/* 			$this->skip(4); */
/* 		}*/
/* 		$this->italicAngle = $this->read_short() + $this->read_ushort() / 65536.0;*/
/* 		$this->underlinePosition = $this->read_short() * $scale;*/
/* 		$this->underlineThickness = $this->read_short() * $scale;*/
/* 		$isFixedPitch = $this->read_ulong();*/
/* */
/* 		$this->flags = 4;*/
/* */
/* 		if ($this->italicAngle!= 0) */
/* 			$this->flags = $this->flags | 64;*/
/* 		if ($usWeightClass >= 600)*/
/* 			$this->flags = $this->flags | 262144;*/
/* 		if ($isFixedPitch)*/
/* 			$this->flags = $this->flags | 1;*/
/* */
/* 		///////////////////////////////////*/
/* 		// hhea - Horizontal header table*/
/* 		///////////////////////////////////*/
/* 		$this->seek_table("hhea");*/
/* 		if ($debug) { */
/* 			$ver_maj = $this->read_ushort();*/
/* 			$ver_min = $this->read_ushort();*/
/* 			if ($ver_maj != 1)*/
/* 				die('Unknown hhea table version '.$ver_maj);*/
/* 			$this->skip(28);*/
/* 		}*/
/* 		else {*/
/* 			$this->skip(32); */
/* 		}*/
/* 		$metricDataFormat = $this->read_ushort();*/
/* 		if ($metricDataFormat != 0)*/
/* 			die('Unknown horizontal metric data format '.$metricDataFormat);*/
/* 		$numberOfHMetrics = $this->read_ushort();*/
/* 		if ($numberOfHMetrics == 0) */
/* 			die('Number of horizontal metrics is 0');*/
/* */
/* 		///////////////////////////////////*/
/* 		// maxp - Maximum profile table*/
/* 		///////////////////////////////////*/
/* 		$this->seek_table("maxp");*/
/* 		if ($debug) { */
/* 			$ver_maj = $this->read_ushort();*/
/* 			$ver_min = $this->read_ushort();*/
/* 			if ($ver_maj != 1)*/
/* 				die('Unknown maxp table version '.$ver_maj);*/
/* 		}*/
/* 		else {*/
/* 			$this->skip(4); */
/* 		}*/
/* 		$numGlyphs = $this->read_ushort();*/
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// cmap - Character to glyph index mapping table*/
/* 		///////////////////////////////////*/
/* 		$cmap_offset = $this->seek_table("cmap");*/
/* 		$this->skip(2);*/
/* 		$cmapTableCount = $this->read_ushort();*/
/* 		$unicode_cmap_offset = 0;*/
/* 		for ($i=0;$i<$cmapTableCount;$i++) {*/
/* 			$platformID = $this->read_ushort();*/
/* 			$encodingID = $this->read_ushort();*/
/* 			$offset = $this->read_ulong();*/
/* 			$save_pos = $this->_pos;*/
/* 			if (($platformID == 3 && $encodingID == 1) || $platformID == 0) { // Microsoft, Unicode*/
/* 				$format = $this->get_ushort($cmap_offset + $offset);*/
/* 				if ($format == 4) {*/
/* 					if (!$unicode_cmap_offset) $unicode_cmap_offset = $cmap_offset + $offset;*/
/* 					if ($BMPonly) break;*/
/* 				}*/
/* 			}*/
/* 			// Microsoft, Unicode Format 12 table HKCS*/
/* 			else if ((($platformID == 3 && $encodingID == 10) || $platformID == 0) && !$BMPonly) {*/
/* 				$format = $this->get_ushort($cmap_offset + $offset);*/
/* 				if ($format == 12) {*/
/* 					$unicode_cmap_offset = $cmap_offset + $offset;*/
/* 					break;*/
/* 				}*/
/* 			}*/
/* 			$this->seek($save_pos );*/
/* 		}*/
/* 		if (!$unicode_cmap_offset)*/
/* 			die('Font ('.$this->filename .') does not have cmap for Unicode (platform 3, encoding 1, format 4, or platform 0, any encoding, format 4)');*/
/* */
/* */
/* 		$sipset = false;*/
/* 		$smpset = false;*/
/* 		// Format 12 CMAP does characters above Unicode BMP i.e. some HKCS characters U+20000 and above*/
/* 		if ($format == 12 && !$BMPonly) {*/
/* 			$this->maxUniChar = 0;*/
/* 			$this->seek($unicode_cmap_offset + 4);*/
/* 			$length = $this->read_ulong();*/
/* 			$limit = $unicode_cmap_offset + $length;*/
/* 			$this->skip(4);*/
/* */
/* 			$nGroups = $this->read_ulong();*/
/* */
/* 			$glyphToChar = array();*/
/* 			$charToGlyph = array();*/
/* 			for($i=0; $i<$nGroups ; $i++) { */
/* 				$startCharCode = $this->read_ulong(); */
/* 				$endCharCode = $this->read_ulong(); */
/* 				$startGlyphCode = $this->read_ulong(); */
/* 				if (($endCharCode > 0x20000 && $endCharCode < 0x2A6DF) || ($endCharCode > 0x2F800 && $endCharCode < 0x2FA1F)) {*/
/* 					$sipset = true; */
/* 				}*/
/* 				else if ($endCharCode > 0x10000 && $endCharCode < 0x1FFFF) {*/
/* 					$smpset = true; */
/* 				}*/
/* 				$offset = 0;*/
/* 				for ($unichar=$startCharCode;$unichar<=$endCharCode;$unichar++) {*/
/* 					$glyph = $startGlyphCode + $offset ;*/
/* 					$offset++;*/
/* 					$charToGlyph[$unichar] = $glyph;*/
/* 					if ($unichar < 196608) { $this->maxUniChar = max($unichar,$this->maxUniChar); }*/
/* 					$glyphToChar[$glyph][] = $unichar;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 		else {*/
/* */
/* 			$glyphToChar = array();*/
/* 			$charToGlyph = array();*/
/* 			$this->getCMAP4($unicode_cmap_offset, $glyphToChar, $charToGlyph );*/
/* */
/* 		}*/
/* 		$this->sipset = $sipset ;*/
/* 		$this->smpset = $smpset ;*/
/* */
/* 		///////////////////////////////////*/
/* 		// hmtx - Horizontal metrics table*/
/* 		///////////////////////////////////*/
/* 		$this->getHMTX($numberOfHMetrics, $numGlyphs, $glyphToChar, $scale);*/
/* */
/* 		///////////////////////////////////*/
/* 		// kern - Kerning pair table*/
/* 		///////////////////////////////////*/
/* 		if ($kerninfo) {*/
/* 			// Recognises old form of Kerning table - as required by Windows - Format 0 only*/
/* 			$kern_offset = $this->seek_table("kern");*/
/* 			$version = $this->read_ushort();*/
/* 			$nTables = $this->read_ushort();*/
/* 			// subtable header*/
/* 			$sversion = $this->read_ushort();*/
/* 			$slength = $this->read_ushort();*/
/* 			$scoverage = $this->read_ushort();*/
/* 			$format = $scoverage >> 8;*/
/*  			if ($kern_offset && $version==0 && $format==0) {*/
/* 				// Format 0*/
/* 				$nPairs = $this->read_ushort();*/
/* 				$this->skip(6);*/
/* 				for ($i=0; $i<$nPairs; $i++) {*/
/* 					$left = $this->read_ushort();*/
/* 					$right = $this->read_ushort();*/
/* 					$val = $this->read_short();*/
/* 					if (count($glyphToChar[$left])==1 && count($glyphToChar[$right])==1) {*/
/* 					  if ($left != 32 && $right != 32) {*/
/* 						$this->kerninfo[$glyphToChar[$left][0]][$glyphToChar[$right][0]] = intval($val*$scale);*/
/* 					  }*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* */
/* /////////////////////////////////////////////////////////////////////////////////////////*/
/* */
/* */
/* 	function makeSubset($file, &$subset, $TTCfontID=0, $debug=false, $unAGlyphs=false) {	// mPDF 5.4.05*/
/* 		$this->unAGlyphs = $unAGlyphs;	// mPDF 5.4.05*/
/* 		$this->filename = $file;*/
/* 		$this->fh = fopen($file ,'rb') or die('Can\'t open file ' . $file);*/
/* 		$this->_pos = 0;*/
/* 		$this->charWidths = '';*/
/* 		$this->glyphPos = array();*/
/* 		$this->charToGlyph = array();*/
/* 		$this->tables = array();*/
/* 		$this->otables = array();*/
/* 		$this->ascent = 0;*/
/* 		$this->descent = 0;*/
/* 		$this->numTTCFonts = 0;*/
/* 		$this->TTCFonts = array();*/
/* 		$this->skip(4);*/
/* 		$this->maxUni = 0;*/
/* 		if ($TTCfontID > 0) {*/
/* 			$this->version = $version = $this->read_ulong();	// TTC Header version now*/
/* 			if (!in_array($version, array(0x00010000,0x00020000)))*/
/* 				die("ERROR - Error parsing TrueType Collection: version=".$version." - " . $file);*/
/* 			$this->numTTCFonts = $this->read_ulong();*/
/* 			for ($i=1; $i<=$this->numTTCFonts; $i++) {*/
/* 	      	      $this->TTCFonts[$i]['offset'] = $this->read_ulong();*/
/* 			}*/
/* 			$this->seek($this->TTCFonts[$TTCfontID]['offset']);*/
/* 			$this->version = $version = $this->read_ulong();	// TTFont version again now*/
/* 		}*/
/* 		$this->readTableDirectory($debug);*/
/* */
/* 		///////////////////////////////////*/
/* 		// head - Font header table*/
/* 		///////////////////////////////////*/
/* 		$this->seek_table("head");*/
/* 		$this->skip(50); */
/* 		$indexToLocFormat = $this->read_ushort();*/
/* 		$glyphDataFormat = $this->read_ushort();*/
/* */
/* 		///////////////////////////////////*/
/* 		// hhea - Horizontal header table*/
/* 		///////////////////////////////////*/
/* 		$this->seek_table("hhea");*/
/* 		$this->skip(32); */
/* 		$metricDataFormat = $this->read_ushort();*/
/* 		$orignHmetrics = $numberOfHMetrics = $this->read_ushort();*/
/* */
/* 		///////////////////////////////////*/
/* 		// maxp - Maximum profile table*/
/* 		///////////////////////////////////*/
/* 		$this->seek_table("maxp");*/
/* 		$this->skip(4);*/
/* 		$numGlyphs = $this->read_ushort();*/
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// cmap - Character to glyph index mapping table*/
/* 		///////////////////////////////////*/
/* 		$cmap_offset = $this->seek_table("cmap");*/
/* 		$this->skip(2);*/
/* 		$cmapTableCount = $this->read_ushort();*/
/* 		$unicode_cmap_offset = 0;*/
/* 		for ($i=0;$i<$cmapTableCount;$i++) {*/
/* 			$platformID = $this->read_ushort();*/
/* 			$encodingID = $this->read_ushort();*/
/* 			$offset = $this->read_ulong();*/
/* 			$save_pos = $this->_pos;*/
/* 			if (($platformID == 3 && $encodingID == 1) || $platformID == 0) { // Microsoft, Unicode*/
/* 				$format = $this->get_ushort($cmap_offset + $offset);*/
/* 				if ($format == 4) {*/
/* 					$unicode_cmap_offset = $cmap_offset + $offset;*/
/* 					break;*/
/* 				}*/
/* 			}*/
/* 			$this->seek($save_pos );*/
/* 		}*/
/* */
/* 		if (!$unicode_cmap_offset)*/
/* 			die('Font ('.$this->filename .') does not have Unicode cmap (platform 3, encoding 1, format 4, or platform 0 [any encoding] format 4)');*/
/* */
/* */
/* 		$glyphToChar = array();*/
/* 		$charToGlyph = array();*/
/* 		$this->getCMAP4($unicode_cmap_offset, $glyphToChar, $charToGlyph );*/
/* */
/* 		$this->charToGlyph = $charToGlyph;*/
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// hmtx - Horizontal metrics table*/
/* 		///////////////////////////////////*/
/* 		$scale = 1;	// not used*/
/* 		$this->getHMTX($numberOfHMetrics, $numGlyphs, $glyphToChar, $scale);*/
/* */
/* 		///////////////////////////////////*/
/* 		// loca - Index to location*/
/* 		///////////////////////////////////*/
/* 		$this->getLOCA($indexToLocFormat, $numGlyphs);*/
/* */
/* 		$subsetglyphs = array(0=>0, 1=>1, 2=>2);*/
/* 		$subsetCharToGlyph = array();*/
/* 		foreach($subset AS $code) {*/
/* 			if (isset($this->charToGlyph[$code])) {*/
/* 				$subsetglyphs[$this->charToGlyph[$code]] = $code;	// Old Glyph ID => Unicode*/
/* 				$subsetCharToGlyph[$code] = $this->charToGlyph[$code];	// Unicode to old GlyphID*/
/* */
/* 			}*/
/* 			$this->maxUni = max($this->maxUni, $code);*/
/* 		}*/
/* */
/* 		list($start,$dummy) = $this->get_table_pos('glyf');*/
/* */
/* 		$glyphSet = array();*/
/* 		ksort($subsetglyphs);*/
/* 		$n = 0;*/
/* 		$fsLastCharIndex = 0;	// maximum Unicode index (character code) in this font, according to the cmap subtable for platform ID 3 and platform- specific encoding ID 0 or 1.*/
/* 		foreach($subsetglyphs AS $originalGlyphIdx => $uni) {*/
/* 			$fsLastCharIndex = max($fsLastCharIndex , $uni); */
/* 			$glyphSet[$originalGlyphIdx] = $n;	// old glyphID to new glyphID*/
/* 			$n++;*/
/* 		}*/
/* */
/* 		ksort($subsetCharToGlyph);*/
/* 		foreach($subsetCharToGlyph AS $uni => $originalGlyphIdx) {*/
/* 			$codeToGlyph[$uni] = $glyphSet[$originalGlyphIdx] ;*/
/* 		}*/
/* 		$this->codeToGlyph = $codeToGlyph;*/
/* */
/* 		ksort($subsetglyphs);*/
/* 		foreach($subsetglyphs AS $originalGlyphIdx => $uni) {*/
/* 			$this->getGlyphs($originalGlyphIdx, $start, $glyphSet, $subsetglyphs);*/
/* 		}*/
/* */
/* 		$numGlyphs = $numberOfHMetrics = count($subsetglyphs );*/
/* */
/* 		///////////////////////////////////*/
/* 		// name - table copied from the original*/
/* 		///////////////////////////////////*/
/* 		$this->add('name', $this->get_table('name'));*/
/* */
/* 		///////////////////////////////////*/
/* 		//tables copied from the original*/
/* 		///////////////////////////////////*/
/* 		$tags = array ('cvt ', 'fpgm', 'prep', 'gasp');*/
/* 		foreach($tags AS $tag) {*/
/* 			if (isset($this->tables[$tag])) { $this->add($tag, $this->get_table($tag)); }*/
/* 		}*/
/* */
/* 		///////////////////////////////////*/
/* 		// post - PostScript*/
/* 		///////////////////////////////////*/
/* 		if (isset($this->tables['post'])) {*/
/* 			$opost = $this->get_table('post');*/
/* 			$post = "\x00\x03\x00\x00" . substr($opost,4,12) . "\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00";*/
/* 			$this->add('post', $post);*/
/* 		}*/
/* */
/* 		///////////////////////////////////*/
/* 		// Sort CID2GID map into segments of contiguous codes*/
/* 		///////////////////////////////////*/
/* 		ksort($codeToGlyph);*/
/* 		unset($codeToGlyph[0]);*/
/* 		//unset($codeToGlyph[65535]);*/
/* 		$rangeid = 0;*/
/* 		$range = array();*/
/* 		$prevcid = -2;*/
/* 		$prevglidx = -1;*/
/* 		// for each character*/
/* 		foreach ($codeToGlyph as $cid => $glidx) {*/
/* 			if ($cid == ($prevcid + 1) && $glidx == ($prevglidx + 1)) {*/
/* 				$range[$rangeid][] = $glidx;*/
/* 			} else {*/
/* 				// new range*/
/* 				$rangeid = $cid;*/
/* 				$range[$rangeid] = array();*/
/* 				$range[$rangeid][] = $glidx;*/
/* 			}*/
/* 			$prevcid = $cid;*/
/* 			$prevglidx = $glidx;*/
/* 		}*/
/* */
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// CMap table*/
/* 		///////////////////////////////////*/
/* 		// cmap - Character to glyph mapping */
/* 		$segCount = count($range) + 1;	// + 1 Last segment has missing character 0xFFFF*/
/* 		$searchRange = 1;*/
/* 		$entrySelector = 0;*/
/* 		while ($searchRange * 2 <= $segCount ) {*/
/* 			$searchRange = $searchRange * 2;*/
/* 			$entrySelector = $entrySelector + 1;*/
/* 		}*/
/* 		$searchRange = $searchRange * 2;*/
/* 		$rangeShift = $segCount * 2 - $searchRange;*/
/* 		$length = 16 + (8*$segCount ) + ($numGlyphs+1);*/
/* 		$cmap = array(0, 3,		// Index : version, number of encoding subtables*/
/* 			0, 0,				// Encoding Subtable : platform (UNI=0), encoding 0*/
/* 			0, 28,			// Encoding Subtable : offset (hi,lo)*/
/* 			0, 3,				// Encoding Subtable : platform (UNI=0), encoding 3*/
/* 			0, 28,			// Encoding Subtable : offset (hi,lo)*/
/* 			3, 1,				// Encoding Subtable : platform (MS=3), encoding 1*/
/* 			0, 28,			// Encoding Subtable : offset (hi,lo)*/
/* 			4, $length, 0, 		// Format 4 Mapping subtable: format, length, language*/
/* 			$segCount*2,*/
/* 			$searchRange,*/
/* 			$entrySelector,*/
/* 			$rangeShift);*/
/* */
/* 		// endCode(s)*/
/* 		foreach($range AS $start=>$subrange) {*/
/* 			$endCode = $start + (count($subrange)-1);*/
/* 			$cmap[] = $endCode;	// endCode(s)*/
/* 		}*/
/* 		$cmap[] =	0xFFFF;	// endCode of last Segment*/
/* 		$cmap[] =	0;	// reservedPad*/
/* */
/* 		// startCode(s)*/
/* 		foreach($range AS $start=>$subrange) {*/
/* 			$cmap[] = $start;	// startCode(s)*/
/* 		}*/
/* 		$cmap[] =	0xFFFF;	// startCode of last Segment*/
/* 		// idDelta(s) */
/* 		foreach($range AS $start=>$subrange) {*/
/* 			$idDelta = -($start-$subrange[0]);*/
/* 			$n += count($subrange);*/
/* 			$cmap[] = $idDelta;	// idDelta(s)*/
/* 		}*/
/* 		$cmap[] =	1;	// idDelta of last Segment*/
/* 		// idRangeOffset(s) */
/* 		foreach($range AS $subrange) {*/
/* 			$cmap[] = 0;	// idRangeOffset[segCount]  	Offset in bytes to glyph indexArray, or 0*/
/* */
/* 		}*/
/* 		$cmap[] =	0;	// idRangeOffset of last Segment*/
/* 		foreach($range AS $subrange) {*/
/* 			foreach($subrange AS $glidx) {*/
/* 				$cmap[] = $glidx;*/
/* 			}*/
/* 		}*/
/* 		$cmap[] = 0;	// Mapping for last character*/
/* 		$cmapstr = '';*/
/* 		foreach($cmap AS $cm) { $cmapstr .= pack("n",$cm); }*/
/* 		$this->add('cmap', $cmapstr);*/
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// glyf - Glyph data*/
/* 		///////////////////////////////////*/
/* 		list($glyfOffset,$glyfLength) = $this->get_table_pos('glyf');*/
/* 		if ($glyfLength < $this->maxStrLenRead) {*/
/* 			$glyphData = $this->get_table('glyf');*/
/* 		}*/
/* */
/* 		$offsets = array();*/
/* 		$glyf = '';*/
/* 		$pos = 0;*/
/* 		$hmtxstr = '';*/
/* 		$xMinT = 0;*/
/* 		$yMinT = 0;*/
/* 		$xMaxT = 0;*/
/* 		$yMaxT = 0;*/
/* 		$advanceWidthMax = 0;*/
/* 		$minLeftSideBearing = 0;*/
/* 		$minRightSideBearing = 0;*/
/* 		$xMaxExtent = 0;*/
/* 		$maxPoints = 0;			// points in non-compound glyph*/
/* 		$maxContours = 0;			// contours in non-compound glyph*/
/* 		$maxComponentPoints = 0;	// points in compound glyph*/
/* 		$maxComponentContours = 0;	// contours in compound glyph*/
/* 		$maxComponentElements = 0;	// number of glyphs referenced at top level*/
/* 		$maxComponentDepth = 0;		// levels of recursion, set to 0 if font has only simple glyphs*/
/* 		$this->glyphdata = array();*/
/* */
/* 		foreach($subsetglyphs AS $originalGlyphIdx => $uni) {*/
/* 			// hmtx - Horizontal Metrics*/
/* 			$hm = $this->getHMetric($orignHmetrics, $originalGlyphIdx);*/
/* 			$hmtxstr .= $hm;*/
/* */
/* 			$offsets[] = $pos;*/
/* 			$glyphPos = $this->glyphPos[$originalGlyphIdx];*/
/* 			$glyphLen = $this->glyphPos[$originalGlyphIdx + 1] - $glyphPos;*/
/* 			if ($glyfLength < $this->maxStrLenRead) {*/
/* 				$data = substr($glyphData,$glyphPos,$glyphLen);*/
/* 			}*/
/* 			else {*/
/* 				if ($glyphLen > 0) $data = $this->get_chunk($glyfOffset+$glyphPos,$glyphLen);*/
/* 				else $data = '';*/
/* 			}*/
/* */
/* 			if ($glyphLen > 0) {*/
/* 			  if (_RECALC_PROFILE) {*/
/* 				$xMin = $this->unpack_short(substr($data,2,2));*/
/* 				$yMin = $this->unpack_short(substr($data,4,2));*/
/* 				$xMax = $this->unpack_short(substr($data,6,2));*/
/* 				$yMax = $this->unpack_short(substr($data,8,2));*/
/* 				$xMinT = min($xMinT,$xMin);*/
/* 				$yMinT = min($yMinT,$yMin);*/
/* 				$xMaxT = max($xMaxT,$xMax);*/
/* 				$yMaxT = max($yMaxT,$yMax);*/
/* 				$aw = $this->unpack_short(substr($hm,0,2)); */
/* 				$lsb = $this->unpack_short(substr($hm,2,2));*/
/* 				$advanceWidthMax = max($advanceWidthMax,$aw);*/
/* 				$minLeftSideBearing = min($minLeftSideBearing,$lsb);*/
/* 				$minRightSideBearing = min($minRightSideBearing,($aw - $lsb - ($xMax - $xMin)));*/
/* 				$xMaxExtent = max($xMaxExtent,($lsb + ($xMax - $xMin)));*/
/* 			   }*/
/* 				$up = unpack("n", substr($data,0,2));*/
/* 			}*/
/* 			if ($glyphLen > 2 && ($up[1] & (1 << 15)) ) {	// If number of contours <= -1 i.e. composiste glyph*/
/* 				$pos_in_glyph = 10;*/
/* 				$flags = GF_MORE;*/
/* 				$nComponentElements = 0;*/
/* 				while ($flags & GF_MORE) {*/
/* 					$nComponentElements += 1;	// number of glyphs referenced at top level*/
/* 					$up = unpack("n", substr($data,$pos_in_glyph,2));*/
/* 					$flags = $up[1];*/
/* 					$up = unpack("n", substr($data,$pos_in_glyph+2,2));*/
/* 					$glyphIdx = $up[1];*/
/* 					$this->glyphdata[$originalGlyphIdx]['compGlyphs'][] = $glyphIdx;*/
/* 					$data = $this->_set_ushort($data, $pos_in_glyph + 2, $glyphSet[$glyphIdx]);*/
/* 					$pos_in_glyph += 4;*/
/* 					if ($flags & GF_WORDS) { $pos_in_glyph += 4; }*/
/* 					else { $pos_in_glyph += 2; }*/
/* 					if ($flags & GF_SCALE) { $pos_in_glyph += 2; }*/
/* 					else if ($flags & GF_XYSCALE) { $pos_in_glyph += 4; }*/
/* 					else if ($flags & GF_TWOBYTWO) { $pos_in_glyph += 8; }*/
/* 				}*/
/* 				$maxComponentElements = max($maxComponentElements, $nComponentElements);*/
/* 			}*/
/* 			// Simple Glyph*/
/* 			else if (_RECALC_PROFILE && $glyphLen > 2 && $up[1] < (1 << 15) && $up[1] > 0) { 	// Number of contours > 0 simple glyph*/
/* 				$nContours = $up[1];*/
/* 				$this->glyphdata[$originalGlyphIdx]['nContours'] = $nContours;*/
/* 				$maxContours = max($maxContours, $nContours);*/
/* */
/* 				// Count number of points in simple glyph*/
/* 				$pos_in_glyph = 10 + ($nContours  * 2) - 2;	// Last endContourPoint*/
/* 				$up = unpack("n", substr($data,$pos_in_glyph,2));*/
/* 				$points = $up[1]+1;*/
/* 				$this->glyphdata[$originalGlyphIdx]['nPoints'] = $points;*/
/* 				$maxPoints = max($maxPoints, $points);*/
/* 			}*/
/* */
/* 			$glyf .= $data;*/
/* 			$pos += $glyphLen;*/
/* 			if ($pos % 4 != 0) {*/
/* 				$padding = 4 - ($pos % 4);*/
/* 				$glyf .= str_repeat("\0",$padding);*/
/* 				$pos += $padding;*/
/* 			}*/
/* 		}*/
/* */
/* 		if (_RECALC_PROFILE) {*/
/* 		   foreach($this->glyphdata AS $originalGlyphIdx => $val) {*/
/* 			$maxdepth = $depth = -1;*/
/* 			$points = 0;*/
/* 			$contours = 0;*/
/* 			$this->getGlyphData($originalGlyphIdx, $maxdepth, $depth, $points, $contours) ;*/
/* 			$maxComponentDepth = max($maxComponentDepth , $maxdepth);*/
/* 			$maxComponentPoints = max($maxComponentPoints , $points);*/
/* 			$maxComponentContours = max($maxComponentContours , $contours);*/
/* 		   }*/
/* 		}*/
/* */
/* */
/* 		$offsets[] = $pos;*/
/* 		$this->add('glyf', $glyf);*/
/* */
/* 		///////////////////////////////////*/
/* 		// hmtx - Horizontal Metrics*/
/* 		///////////////////////////////////*/
/* 		$this->add('hmtx', $hmtxstr);*/
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// loca - Index to location*/
/* 		///////////////////////////////////*/
/* 		$locastr = '';*/
/* 		if ((($pos + 1) >> 1) > 0xFFFF) {*/
/* 			$indexToLocFormat = 1;        // long format*/
/* 			foreach($offsets AS $offset) { $locastr .= pack("N",$offset); }*/
/* 		}*/
/* 		else {*/
/* 			$indexToLocFormat = 0;        // short format*/
/* 			foreach($offsets AS $offset) { $locastr .= pack("n",($offset/2)); }*/
/* 		}*/
/* 		$this->add('loca', $locastr);*/
/* */
/* 		///////////////////////////////////*/
/* 		// head - Font header*/
/* 		///////////////////////////////////*/
/* 		$head = $this->get_table('head');*/
/* 		$head = $this->_set_ushort($head, 50, $indexToLocFormat);*/
/* 		if (_RECALC_PROFILE) {*/
/* 			$head = $this->_set_short($head, 36, $xMinT);	// for all glyph bounding boxes*/
/* 			$head = $this->_set_short($head, 38, $yMinT);	// for all glyph bounding boxes*/
/* 			$head = $this->_set_short($head, 40, $xMaxT);	// for all glyph bounding boxes*/
/* 			$head = $this->_set_short($head, 42, $yMaxT);	// for all glyph bounding boxes*/
/* 			$head[17] = chr($head[17] & ~(1 << 4)); 	// Unset Bit 4 (as hdmx/LTSH tables not included)*/
/* 		}*/
/* 		$this->add('head', $head);*/
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// hhea - Horizontal Header*/
/* 		///////////////////////////////////*/
/* 		$hhea = $this->get_table('hhea');*/
/* 		$hhea = $this->_set_ushort($hhea, 34, $numberOfHMetrics);*/
/* 		if (_RECALC_PROFILE) {*/
/* 			$hhea = $this->_set_ushort($hhea, 10, $advanceWidthMax);	*/
/* 			$hhea = $this->_set_short($hhea, 12, $minLeftSideBearing);	*/
/* 			$hhea = $this->_set_short($hhea, 14, $minRightSideBearing);	*/
/* 			$hhea = $this->_set_short($hhea, 16, $xMaxExtent);	*/
/* 		}*/
/* 		$this->add('hhea', $hhea);*/
/* */
/* 		///////////////////////////////////*/
/* 		// maxp - Maximum Profile*/
/* 		///////////////////////////////////*/
/* 		$maxp = $this->get_table('maxp');*/
/* 		$maxp = $this->_set_ushort($maxp, 4, $numGlyphs);*/
/* 		if (_RECALC_PROFILE) {*/
/* 			$maxp = $this->_set_ushort($maxp, 6, $maxPoints);	// points in non-compound glyph*/
/* 			$maxp = $this->_set_ushort($maxp, 8, $maxContours);	// contours in non-compound glyph*/
/* 			$maxp = $this->_set_ushort($maxp, 10, $maxComponentPoints);	// points in compound glyph*/
/* 			$maxp = $this->_set_ushort($maxp, 12, $maxComponentContours);	// contours in compound glyph*/
/* 			$maxp = $this->_set_ushort($maxp, 28, $maxComponentElements);	// number of glyphs referenced at top level*/
/* 			$maxp = $this->_set_ushort($maxp, 30, $maxComponentDepth);	// levels of recursion, set to 0 if font has only simple glyphs*/
/* 		}*/
/* 		$this->add('maxp', $maxp);*/
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// OS/2 - OS/2*/
/* 		///////////////////////////////////*/
/* 		if (isset($this->tables['OS/2'])) { */
/* 			$os2_offset = $this->seek_table("OS/2");*/
/* 			if (_RECALC_PROFILE) {*/
/* 				$fsSelection = $this->get_ushort($os2_offset+62);*/
/* 				$fsSelection = ($fsSelection & ~(1 << 6)); 	// 2-byte bit field containing information concerning the nature of the font patterns*/
/* 					// bit#0 = Italic; bit#5=Bold*/
/* 					// Match name table's font subfamily string*/
/* 					// Clear bit#6 used for 'Regular' and optional*/
/* 			}*/
/* */
/* 			// NB Currently this method never subsets characters above BMP*/
/* 			// Could set nonBMP bit according to $this->maxUni */
/* 			$nonBMP = $this->get_ushort($os2_offset+46);*/
/* 			$nonBMP = ($nonBMP & ~(1 << 9)); 	// Unset Bit 57 (indicates non-BMP) - for interactive forms*/
/* */
/* 			$os2 = $this->get_table('OS/2');*/
/* 			if (_RECALC_PROFILE) {*/
/* 				$os2 = $this->_set_ushort($os2, 62, $fsSelection);	*/
/* 				$os2 = $this->_set_ushort($os2, 66, $fsLastCharIndex);*/
/* 				$os2 = $this->_set_ushort($os2, 42, 0x0000);	// ulCharRange (ulUnicodeRange) bits 24-31 | 16-23*/
/* 				$os2 = $this->_set_ushort($os2, 44, 0x0000);	// ulCharRange (Unicode ranges) bits  8-15 |  0-7*/
/* 				$os2 = $this->_set_ushort($os2, 46, $nonBMP);	// ulCharRange (Unicode ranges) bits 56-63 | 48-55*/
/* 				$os2 = $this->_set_ushort($os2, 48, 0x0000);	// ulCharRange (Unicode ranges) bits 40-47 | 32-39*/
/* 				$os2 = $this->_set_ushort($os2, 50, 0x0000);	// ulCharRange (Unicode ranges) bits  88-95 | 80-87*/
/* 				$os2 = $this->_set_ushort($os2, 52, 0x0000);	// ulCharRange (Unicode ranges) bits  72-79 | 64-71*/
/* 				$os2 = $this->_set_ushort($os2, 54, 0x0000);	// ulCharRange (Unicode ranges) bits  120-127 | 112-119*/
/* 				$os2 = $this->_set_ushort($os2, 56, 0x0000);	// ulCharRange (Unicode ranges) bits  104-111 | 96-103*/
/* 			}*/
/* 			$os2 = $this->_set_ushort($os2, 46, $nonBMP);	// Unset Bit 57 (indicates non-BMP) - for interactive forms*/
/* */
/* 			$this->add('OS/2', $os2 );*/
/* 		}*/
/* */
/* 		fclose($this->fh);*/
/* 		// Put the TTF file together*/
/* 		$stm = '';*/
/* 		$this->endTTFile($stm);*/
/* 		//file_put_contents('testfont.ttf', $stm); exit;*/
/* 		return $stm ;*/
/* 	}*/
/* */
/* //================================================================================*/
/* */
/* 	// Also does SMP*/
/* 	function makeSubsetSIP($file, &$subset, $TTCfontID=0, $debug=false) {*/
/* 		$this->fh = fopen($file ,'rb') or die('Can\'t open file ' . $file);*/
/* 		$this->filename = $file;*/
/* 		$this->_pos = 0;*/
/* 		$this->unAGlyphs = false;	// mPDF 5.4.05*/
/* 		$this->charWidths = '';*/
/* 		$this->glyphPos = array();*/
/* 		$this->charToGlyph = array();*/
/* 		$this->tables = array();*/
/* 		$this->otables = array();*/
/* 		$this->ascent = 0;*/
/* 		$this->descent = 0;*/
/* 		$this->numTTCFonts = 0;*/
/* 		$this->TTCFonts = array();*/
/* 		$this->skip(4);*/
/* 		if ($TTCfontID > 0) {*/
/* 			$this->version = $version = $this->read_ulong();	// TTC Header version now*/
/* 			if (!in_array($version, array(0x00010000,0x00020000)))*/
/* 				die("ERROR - Error parsing TrueType Collection: version=".$version." - " . $file);*/
/* 			$this->numTTCFonts = $this->read_ulong();*/
/* 			for ($i=1; $i<=$this->numTTCFonts; $i++) {*/
/* 	      	      $this->TTCFonts[$i]['offset'] = $this->read_ulong();*/
/* 			}*/
/* 			$this->seek($this->TTCFonts[$TTCfontID]['offset']);*/
/* 			$this->version = $version = $this->read_ulong();	// TTFont version again now*/
/* 		}*/
/* 		$this->readTableDirectory($debug);*/
/* */
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// head - Font header table*/
/* 		///////////////////////////////////*/
/* 		$this->seek_table("head");*/
/* 		$this->skip(50); */
/* 		$indexToLocFormat = $this->read_ushort();*/
/* 		$glyphDataFormat = $this->read_ushort();*/
/* */
/* 		///////////////////////////////////*/
/* 		// hhea - Horizontal header table*/
/* 		///////////////////////////////////*/
/* 		$this->seek_table("hhea");*/
/* 		$this->skip(32); */
/* 		$metricDataFormat = $this->read_ushort();*/
/* 		$orignHmetrics = $numberOfHMetrics = $this->read_ushort();*/
/* */
/* 		///////////////////////////////////*/
/* 		// maxp - Maximum profile table*/
/* 		///////////////////////////////////*/
/* 		$this->seek_table("maxp");*/
/* 		$this->skip(4);*/
/* 		$numGlyphs = $this->read_ushort();*/
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// cmap - Character to glyph index mapping table*/
/* 		///////////////////////////////////*/
/* */
/* 		$cmap_offset = $this->seek_table("cmap");*/
/* 		$this->skip(2);*/
/* 		$cmapTableCount = $this->read_ushort();*/
/* 		$unicode_cmap_offset = 0;*/
/* 		for ($i=0;$i<$cmapTableCount;$i++) {*/
/* 			$platformID = $this->read_ushort();*/
/* 			$encodingID = $this->read_ushort();*/
/* 			$offset = $this->read_ulong();*/
/* 			$save_pos = $this->_pos;*/
/* 			if (($platformID == 3 && $encodingID == 10) || $platformID == 0) { // Microsoft, Unicode Format 12 table HKCS*/
/* 				$format = $this->get_ushort($cmap_offset + $offset);*/
/* 				if ($format == 12) {*/
/* 					$unicode_cmap_offset = $cmap_offset + $offset;*/
/* 					break;*/
/* 				}*/
/* 			}*/
/* 			$this->seek($save_pos );*/
/* 		}*/
/* */
/* 		if (!$unicode_cmap_offset)*/
/* 			die('Font does not have cmap for Unicode (platform 3, encoding 1, format 4, or platform 0, any encoding, format 4)');*/
/* 		// Format 12 CMAP does characters above Unicode BMP i.e. some HKCS characters U+20000 and above*/
/* 		if ($format == 12) {*/
/* 			$this->maxUniChar = 0;*/
/* 			$this->seek($unicode_cmap_offset + 4);*/
/* 			$length = $this->read_ulong();*/
/* 			$limit = $unicode_cmap_offset + $length;*/
/* 			$this->skip(4);*/
/* */
/* 			$nGroups = $this->read_ulong();*/
/* */
/* 			$glyphToChar = array();*/
/* 			$charToGlyph = array();*/
/* 			for($i=0; $i<$nGroups ; $i++) { */
/* 				$startCharCode = $this->read_ulong(); */
/* 				$endCharCode = $this->read_ulong(); */
/* 				$startGlyphCode = $this->read_ulong(); */
/* 				$offset = 0;*/
/* 				for ($unichar=$startCharCode;$unichar<=$endCharCode;$unichar++) {*/
/* 					$glyph = $startGlyphCode + $offset ;*/
/* 					$offset++;*/
/* 					$charToGlyph[$unichar] = $glyph;*/
/* 					if ($unichar < 196608) { $this->maxUniChar = max($unichar,$this->maxUniChar); }*/
/* 					$glyphToChar[$glyph][] = $unichar;*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 		else */
/* 			die('Font does not have cmap for Unicode (format 12)');*/
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// hmtx - Horizontal metrics table*/
/* 		///////////////////////////////////*/
/* 		$scale = 1; // not used here*/
/* 		$this->getHMTX($numberOfHMetrics, $numGlyphs, $glyphToChar, $scale);*/
/* */
/* 		///////////////////////////////////*/
/* 		// loca - Index to location*/
/* 		///////////////////////////////////*/
/* 		$this->getLOCA($indexToLocFormat, $numGlyphs);*/
/* */
/* 		///////////////////////////////////////////////////////////////////*/
/* */
/* 		$glyphMap = array(0=>0); */
/* 		$glyphSet = array(0=>0);*/
/* 		$codeToGlyph = array();*/
/* 		// Set a substitute if ASCII characters do not have glyphs*/
/* 		if (isset($charToGlyph[0x3F])) { $subs = $charToGlyph[0x3F]; }	// Question mark*/
/* 		else { $subs = $charToGlyph[32]; }*/
/* 		foreach($subset AS $code) {*/
/* 			if (isset($charToGlyph[$code]))*/
/* 				$originalGlyphIdx = $charToGlyph[$code];*/
/* 			else if ($code<128) {*/
/* 				$originalGlyphIdx = $subs;*/
/* 			}*/
/* 			else { $originalGlyphIdx = 0; }*/
/* 			if (!isset($glyphSet[$originalGlyphIdx])) {*/
/* 				$glyphSet[$originalGlyphIdx] = count($glyphMap);*/
/* 				$glyphMap[] = $originalGlyphIdx;*/
/* 			}*/
/* 			$codeToGlyph[$code] = $glyphSet[$originalGlyphIdx];*/
/* 		}*/
/* */
/* 		list($start,$dummy) = $this->get_table_pos('glyf');*/
/* */
/* 		$n = 0;*/
/* 		while ($n < count($glyphMap)) {*/
/* 			$originalGlyphIdx = $glyphMap[$n];*/
/* 			$glyphPos = $this->glyphPos[$originalGlyphIdx];*/
/* 			$glyphLen = $this->glyphPos[$originalGlyphIdx + 1] - $glyphPos;*/
/* 			$n += 1;*/
/* 			if (!$glyphLen) continue;*/
/* 			$this->seek($start + $glyphPos);*/
/* 			$numberOfContours = $this->read_short();*/
/* 			if ($numberOfContours < 0) {*/
/* 				$this->skip(8);*/
/* 				$flags = GF_MORE;*/
/* 				while ($flags & GF_MORE) {*/
/* 					$flags = $this->read_ushort();*/
/* 					$glyphIdx = $this->read_ushort();*/
/* 					if (!isset($glyphSet[$glyphIdx])) {*/
/* 						$glyphSet[$glyphIdx] = count($glyphMap);*/
/* 						$glyphMap[] = $glyphIdx;*/
/* 					}*/
/* 					if ($flags & GF_WORDS)*/
/* 						$this->skip(4);*/
/* 					else*/
/* 						$this->skip(2);*/
/* 					if ($flags & GF_SCALE)*/
/* 						$this->skip(2);*/
/* 					else if ($flags & GF_XYSCALE)*/
/* 						$this->skip(4);*/
/* 					else if ($flags & GF_TWOBYTWO)*/
/* 						$this->skip(8);*/
/* 				}*/
/* 			}*/
/* 		}*/
/* */
/* 		$numGlyphs = $n = count($glyphMap);*/
/* 		$numberOfHMetrics = $n;*/
/* */
/* 		///////////////////////////////////*/
/* 		// name*/
/* 		///////////////////////////////////*/
/* 		// Needs to have a name entry in 3,0 (e.g. symbol) - original font will be 3,1 (i.e. Unicode)*/
/* 		$name = $this->get_table('name'); */
/* 		$name_offset = $this->seek_table("name");*/
/* 		$format = $this->read_ushort();*/
/* 		$numRecords = $this->read_ushort();*/
/* 		$string_data_offset = $name_offset + $this->read_ushort();*/
/* 		for ($i=0;$i<$numRecords; $i++) {*/
/* 			$platformId = $this->read_ushort();*/
/* 			$encodingId = $this->read_ushort();*/
/* 			if ($platformId == 3 && $encodingId == 1) {*/
/* 				$pos = 6 + ($i * 12) + 2;*/
/* 				$name = $this->_set_ushort($name, $pos, 0x00);	// Change encoding to 3,0 rather than 3,1*/
/* 			}*/
/* 			$this->skip(8);*/
/* 		}*/
/* 		$this->add('name', $name);*/
/* */
/* 		///////////////////////////////////*/
/* 		// OS/2*/
/* 		///////////////////////////////////*/
/* 		if (isset($this->tables['OS/2'])) { */
/* 			$os2 = $this->get_table('OS/2');*/
/* 			$os2 = $this->_set_ushort($os2, 42, 0x00);	// ulCharRange (Unicode ranges)*/
/* 			$os2 = $this->_set_ushort($os2, 44, 0x00);	// ulCharRange (Unicode ranges)*/
/* 			$os2 = $this->_set_ushort($os2, 46, 0x00);	// ulCharRange (Unicode ranges)*/
/* 			$os2 = $this->_set_ushort($os2, 48, 0x00);	// ulCharRange (Unicode ranges)*/
/* */
/* 			$os2 = $this->_set_ushort($os2, 50, 0x00);	// ulCharRange (Unicode ranges)*/
/* 			$os2 = $this->_set_ushort($os2, 52, 0x00);	// ulCharRange (Unicode ranges)*/
/* 			$os2 = $this->_set_ushort($os2, 54, 0x00);	// ulCharRange (Unicode ranges)*/
/* 			$os2 = $this->_set_ushort($os2, 56, 0x00);	// ulCharRange (Unicode ranges)*/
/* 			// Set Symbol character only in ulCodePageRange*/
/* 			$os2 = $this->_set_ushort($os2, 78, 0x8000);	// ulCodePageRange = Bit #31 Symbol ****  78 = Bit 16-31*/
/* 			$os2 = $this->_set_ushort($os2, 80, 0x0000);	// ulCodePageRange = Bit #31 Symbol ****  80 = Bit 0-15*/
/* 			$os2 = $this->_set_ushort($os2, 82, 0x0000);	// ulCodePageRange = Bit #32- Symbol **** 82 = Bits 48-63*/
/* 			$os2 = $this->_set_ushort($os2, 84, 0x0000);	// ulCodePageRange = Bit #32- Symbol **** 84 = Bits 32-47*/
/* 	*/
/* 			$os2 = $this->_set_ushort($os2, 64, 0x01);		// FirstCharIndex*/
/* 			$os2 = $this->_set_ushort($os2, 66, count($subset));		// LastCharIndex*/
/* 			// Set PANOSE first bit to 5 for Symbol*/
/* 			$os2 = $this->splice($os2, 32, chr(5).chr(0).chr(1).chr(0).chr(1).chr(0).chr(0).chr(0).chr(0).chr(0));*/
/* 			$this->add('OS/2', $os2 );*/
/* 		}*/
/* */
/* */
/* 		///////////////////////////////////*/
/* 		//tables copied from the original*/
/* 		///////////////////////////////////*/
/* 		$tags = array ('cvt ', 'fpgm', 'prep', 'gasp');	*/
/* 		foreach($tags AS $tag) { 	// 1.02*/
/* 			if (isset($this->tables[$tag])) { $this->add($tag, $this->get_table($tag)); } */
/* 		}*/
/* */
/* 		///////////////////////////////////*/
/* 		// post - PostScript*/
/* 		///////////////////////////////////*/
/* 		if (isset($this->tables['post'])) { */
/* 			$opost = $this->get_table('post');*/
/* 			$post = "\x00\x03\x00\x00" . substr($opost,4,12) . "\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00\x00";*/
/* 		}*/
/* 		$this->add('post', $post);*/
/* */
/* 		///////////////////////////////////*/
/* 		// hhea - Horizontal Header*/
/* 		///////////////////////////////////*/
/* 		$hhea = $this->get_table('hhea');*/
/* 		$hhea = $this->_set_ushort($hhea, 34, $numberOfHMetrics);*/
/* 		$this->add('hhea', $hhea);*/
/* */
/* 		///////////////////////////////////*/
/* 		// maxp - Maximum Profile*/
/* 		///////////////////////////////////*/
/* 		$maxp = $this->get_table('maxp');*/
/* 		$maxp = $this->_set_ushort($maxp, 4, $numGlyphs);*/
/* 		$this->add('maxp', $maxp);*/
/* */
/* */
/* 		///////////////////////////////////*/
/* 		// CMap table Formats [1,0,]6 and [3,0,]4*/
/* 		///////////////////////////////////*/
/* 		///////////////////////////////////*/
/* 		// Sort CID2GID map into segments of contiguous codes*/
/* 		///////////////////////////////////*/
/* 		$rangeid = 0;*/
/* 		$range = array();*/
/* 		$prevcid = -2;*/
/* 		$prevglidx = -1;*/
/* 		// for each character*/
/* 		foreach ($subset as $cid => $code) {*/
/* 			$glidx = $codeToGlyph[$code]; */
/* 			if ($cid == ($prevcid + 1) && $glidx == ($prevglidx + 1)) {*/
/* 				$range[$rangeid][] = $glidx;*/
/* 			} else {*/
/* 				// new range*/
/* 				$rangeid = $cid;*/
/* 				$range[$rangeid] = array();*/
/* 				$range[$rangeid][] = $glidx;*/
/* 			}*/
/* 			$prevcid = $cid;*/
/* 			$prevglidx = $glidx;*/
/* 		}*/
/* 		// cmap - Character to glyph mapping */
/* 		$segCount = count($range) + 1;	// + 1 Last segment has missing character 0xFFFF*/
/* 		$searchRange = 1;*/
/* 		$entrySelector = 0;*/
/* 		while ($searchRange * 2 <= $segCount ) {*/
/* 			$searchRange = $searchRange * 2;*/
/* 			$entrySelector = $entrySelector + 1;*/
/* 		}*/
/* 		$searchRange = $searchRange * 2;*/
/* 		$rangeShift = $segCount * 2 - $searchRange;*/
/* 		$length = 16 + (8*$segCount ) + ($numGlyphs+1);*/
/* 		$cmap = array(*/
/* 			4, $length, 0, 		// Format 4 Mapping subtable: format, length, language*/
/* 			$segCount*2,*/
/* 			$searchRange,*/
/* 			$entrySelector,*/
/* 			$rangeShift);*/
/* */
/* 		// endCode(s)*/
/* 		foreach($range AS $start=>$subrange) {*/
/* 			$endCode = $start + (count($subrange)-1);*/
/* 			$cmap[] = $endCode;	// endCode(s)*/
/* 		}*/
/* 		$cmap[] =	0xFFFF;	// endCode of last Segment*/
/* 		$cmap[] =	0;	// reservedPad*/
/* */
/* 		// startCode(s)*/
/* 		foreach($range AS $start=>$subrange) {*/
/* 			$cmap[] = $start;	// startCode(s)*/
/* 		}*/
/* 		$cmap[] =	0xFFFF;	// startCode of last Segment*/
/* 		// idDelta(s) */
/* 		foreach($range AS $start=>$subrange) {*/
/* 			$idDelta = -($start-$subrange[0]);*/
/* 			$n += count($subrange);*/
/* 			$cmap[] = $idDelta;	// idDelta(s)*/
/* 		}*/
/* 		$cmap[] =	1;	// idDelta of last Segment*/
/* 		// idRangeOffset(s) */
/* 		foreach($range AS $subrange) {*/
/* 			$cmap[] = 0;	// idRangeOffset[segCount]  	Offset in bytes to glyph indexArray, or 0*/
/* */
/* 		}*/
/* 		$cmap[] =	0;	// idRangeOffset of last Segment*/
/* 		foreach($range AS $subrange) {*/
/* 			foreach($subrange AS $glidx) {*/
/* 				$cmap[] = $glidx;*/
/* 			}*/
/* 		}*/
/* 		$cmap[] = 0;	// Mapping for last character*/
/* 		$cmapstr4 = '';*/
/* 		foreach($cmap AS $cm) { $cmapstr4 .= pack("n",$cm); }*/
/* */
/* 		///////////////////////////////////*/
/* 		// cmap - Character to glyph mapping*/
/* 		///////////////////////////////////*/
/* 		$entryCount = count($subset);*/
/* 		$length = 10 + $entryCount * 2;*/
/* */
/* 		$off = 20 + $length;*/
/* 		$hoff = $off >> 16;*/
/* 		$loff = $off & 0xFFFF;*/
/* */
/* 		$cmap = array(0, 2,	// Index : version, number of subtables*/
/* 			1, 0,			// Subtable : platform, encoding*/
/* 			0, 20,		// offset (hi,lo)*/
/* 			3, 0,			// Subtable : platform, encoding*/
/* 			$hoff, $loff,	// offset (hi,lo)*/
/* 			6, $length, 	// Format 6 Mapping table: format, length*/
/* 			0, 1,			// language, First char code*/
/* 			$entryCount*/
/* 		);*/
/* 		$cmapstr = '';*/
/* 		foreach($subset AS $code) { $cmap[] = $codeToGlyph[$code]; }*/
/* 		foreach($cmap AS $cm) { $cmapstr .= pack("n",$cm); }*/
/* 		$cmapstr .= $cmapstr4;*/
/* 		$this->add('cmap', $cmapstr);*/
/* */
/* 		///////////////////////////////////*/
/* 		// hmtx - Horizontal Metrics*/
/* 		///////////////////////////////////*/
/* 		$hmtxstr = '';*/
/* 		for($n=0;$n<$numGlyphs;$n++) {*/
/* 			$originalGlyphIdx = $glyphMap[$n];*/
/* 			$hm = $this->getHMetric($orignHmetrics, $originalGlyphIdx);*/
/* 			$hmtxstr .= $hm;*/
/* 		}*/
/* 		$this->add('hmtx', $hmtxstr);*/
/* */
/* 		///////////////////////////////////*/
/* 		// glyf - Glyph data*/
/* 		///////////////////////////////////*/
/* 		list($glyfOffset,$glyfLength) = $this->get_table_pos('glyf');*/
/* 		if ($glyfLength < $this->maxStrLenRead) {*/
/* 			$glyphData = $this->get_table('glyf');*/
/* 		}*/
/* */
/* 		$offsets = array();*/
/* 		$glyf = '';*/
/* 		$pos = 0;*/
/* 		for ($n=0;$n<$numGlyphs;$n++) {*/
/* 			$offsets[] = $pos;*/
/* 			$originalGlyphIdx = $glyphMap[$n];*/
/* 			$glyphPos = $this->glyphPos[$originalGlyphIdx];*/
/* 			$glyphLen = $this->glyphPos[$originalGlyphIdx + 1] - $glyphPos;*/
/* 			if ($glyfLength < $this->maxStrLenRead) {*/
/* 				$data = substr($glyphData,$glyphPos,$glyphLen);*/
/* 			}*/
/* 			else {*/
/* 				if ($glyphLen > 0) $data = $this->get_chunk($glyfOffset+$glyphPos,$glyphLen);*/
/* 				else $data = '';*/
/* 			}*/
/* 			if ($glyphLen > 0) $up = unpack("n", substr($data,0,2));*/
/* 			if ($glyphLen > 2 && ($up[1] & (1 << 15)) ) {*/
/* 				$pos_in_glyph = 10;*/
/* 				$flags = GF_MORE;*/
/* 				while ($flags & GF_MORE) {*/
/* 					$up = unpack("n", substr($data,$pos_in_glyph,2));*/
/* 					$flags = $up[1];*/
/* 					$up = unpack("n", substr($data,$pos_in_glyph+2,2));*/
/* 					$glyphIdx = $up[1];*/
/* 					$data = $this->_set_ushort($data, $pos_in_glyph + 2, $glyphSet[$glyphIdx]);*/
/* 					$pos_in_glyph += 4;*/
/* 					if ($flags & GF_WORDS) { $pos_in_glyph += 4; }*/
/* 					else { $pos_in_glyph += 2; }*/
/* 					if ($flags & GF_SCALE) { $pos_in_glyph += 2; }*/
/* 					else if ($flags & GF_XYSCALE) { $pos_in_glyph += 4; }*/
/* 					else if ($flags & GF_TWOBYTWO) { $pos_in_glyph += 8; }*/
/* 				}*/
/* 			}*/
/* 			$glyf .= $data;*/
/* 			$pos += $glyphLen;*/
/* 			if ($pos % 4 != 0) {*/
/* 				$padding = 4 - ($pos % 4);*/
/* 				$glyf .= str_repeat("\0",$padding);*/
/* 				$pos += $padding;*/
/* 			}*/
/* 		}*/
/* 		$offsets[] = $pos;*/
/* 		$this->add('glyf', $glyf);*/
/* */
/* 		///////////////////////////////////*/
/* 		// loca - Index to location*/
/* 		///////////////////////////////////*/
/* 		$locastr = '';*/
/* 		if ((($pos + 1) >> 1) > 0xFFFF) {*/
/* 			$indexToLocFormat = 1;        // long format*/
/* 			foreach($offsets AS $offset) { $locastr .= pack("N",$offset); }*/
/* 		}*/
/* 		else {*/
/* 			$indexToLocFormat = 0;        // short format*/
/* 			foreach($offsets AS $offset) { $locastr .= pack("n",($offset/2)); }*/
/* 		}*/
/* 		$this->add('loca', $locastr);*/
/* */
/* 		///////////////////////////////////*/
/* 		// head - Font header*/
/* 		///////////////////////////////////*/
/* 		$head = $this->get_table('head');*/
/* 		$head = $this->_set_ushort($head, 50, $indexToLocFormat);*/
/* 		$this->add('head', $head);*/
/* */
/* 		fclose($this->fh);*/
/* */
/* 		// Put the TTF file together*/
/* 		$stm = '';*/
/* 		$this->endTTFile($stm);*/
/* 		//file_put_contents('testfont.ttf', $stm); exit;*/
/* 		return $stm ;*/
/* 	}*/
/* */
/* 	//////////////////////////////////////////////////////////////////////////////////*/
/* 	// Recursively get composite glyph data*/
/* 	function getGlyphData($originalGlyphIdx, &$maxdepth, &$depth, &$points, &$contours) {*/
/* 		$depth++;*/
/* 		$maxdepth = max($maxdepth, $depth);*/
/* 		if (count($this->glyphdata[$originalGlyphIdx]['compGlyphs'])) {*/
/* 			foreach($this->glyphdata[$originalGlyphIdx]['compGlyphs'] AS $glyphIdx) {*/
/* 				$this->getGlyphData($glyphIdx, $maxdepth, $depth, $points, $contours);*/
/* 			}*/
/* 		}*/
/* 		else if (($this->glyphdata[$originalGlyphIdx]['nContours'] > 0) && $depth > 0) {	// simple*/
/* 			$contours += $this->glyphdata[$originalGlyphIdx]['nContours'];*/
/* 			$points += $this->glyphdata[$originalGlyphIdx]['nPoints'];*/
/* 		}*/
/* 		$depth--;*/
/* 	}*/
/* */
/* */
/* 	//////////////////////////////////////////////////////////////////////////////////*/
/* 	// Recursively get composite glyphs*/
/* 	function getGlyphs($originalGlyphIdx, &$start, &$glyphSet, &$subsetglyphs) {*/
/* 		$glyphPos = $this->glyphPos[$originalGlyphIdx];*/
/* 		$glyphLen = $this->glyphPos[$originalGlyphIdx + 1] - $glyphPos;*/
/* 		if (!$glyphLen) { */
/* 			return;*/
/* 		}*/
/* 		$this->seek($start + $glyphPos);*/
/* 		$numberOfContours = $this->read_short();*/
/* 		if ($numberOfContours < 0) {*/
/* 			$this->skip(8);*/
/* 			$flags = GF_MORE;*/
/* 			while ($flags & GF_MORE) {*/
/* 				$flags = $this->read_ushort();*/
/* 				$glyphIdx = $this->read_ushort();*/
/* 				if (!isset($glyphSet[$glyphIdx])) {*/
/* 					$glyphSet[$glyphIdx] = count($subsetglyphs);	// old glyphID to new glyphID*/
/* 					$subsetglyphs[$glyphIdx] = true;*/
/* 				}*/
/* 				$savepos = ftell($this->fh);*/
/* 				$this->getGlyphs($glyphIdx, $start, $glyphSet, $subsetglyphs);*/
/* 				$this->seek($savepos);*/
/* 				if ($flags & GF_WORDS)*/
/* 					$this->skip(4);*/
/* 				else*/
/* 					$this->skip(2);*/
/* 				if ($flags & GF_SCALE)*/
/* 					$this->skip(2);*/
/* 				else if ($flags & GF_XYSCALE)*/
/* 					$this->skip(4);*/
/* 				else if ($flags & GF_TWOBYTWO)*/
/* 					$this->skip(8);*/
/* 			}*/
/* 		}*/
/* 	}*/
/* */
/* 	//////////////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function getHMTX($numberOfHMetrics, $numGlyphs, &$glyphToChar, $scale) {*/
/* 		$start = $this->seek_table("hmtx");*/
/* 		$aw = 0;*/
/* 		$this->charWidths = str_pad('', 256*256*2, "\x00");*/
/* 		if ($this->maxUniChar > 65536) { $this->charWidths .= str_pad('', 256*256*2, "\x00"); }	// Plane 1 SMP*/
/* 		if ($this->maxUniChar > 131072) { $this->charWidths .= str_pad('', 256*256*2, "\x00"); }	// Plane 2 SMP*/
/* 		$nCharWidths = 0;*/
/* 		if (($numberOfHMetrics*4) < $this->maxStrLenRead) {*/
/* 			$data = $this->get_chunk($start,($numberOfHMetrics*4));*/
/* 			$arr = unpack("n*", $data);*/
/* 		}*/
/* 		else { $this->seek($start); }*/
/* 		for( $glyph=0; $glyph<$numberOfHMetrics; $glyph++) {*/
/* 			if (($numberOfHMetrics*4) < $this->maxStrLenRead) {*/
/* 				$aw = $arr[($glyph*2)+1];*/
/* 			}*/
/* 			else {*/
/* 				$aw = $this->read_ushort();*/
/* 				$lsb = $this->read_ushort();*/
/* 			}*/
/* 			if (isset($glyphToChar[$glyph]) || $glyph == 0) {*/
/* */
/* 				if ($aw >= (1 << 15) ) { $aw = 0; }	// 1.03 Some (arabic) fonts have -ve values for width*/
/* 					// although should be unsigned value - comes out as e.g. 65108 (intended -50)*/
/* 				if ($glyph == 0) {*/
/* 					$this->defaultWidth = $scale*$aw;*/
/* 					continue;*/
/* 				}*/
/* 				foreach($glyphToChar[$glyph] AS $char) {*/
/* 					//$this->charWidths[$char] = intval(round($scale*$aw));*/
/* 					if ($char != 0 && $char != 65535) {*/
/*  						$w = intval(round($scale*$aw));*/
/* 						if ($w == 0) { $w = 65535; }*/
/* 						if ($char < 196608) {*/
/* 							$this->charWidths[$char*2] = chr($w >> 8);*/
/* 							$this->charWidths[$char*2 + 1] = chr($w & 0xFF);*/
/* 							$nCharWidths++;*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 		$data = $this->get_chunk(($start+$numberOfHMetrics*4),($numGlyphs*2));*/
/* 		$arr = unpack("n*", $data);*/
/* 		$diff = $numGlyphs-$numberOfHMetrics;*/
/* 		$w = intval(round($scale*$aw));*/
/* 		if ($w == 0) { $w = 65535; }*/
/* 		for( $pos=0; $pos<$diff; $pos++) {*/
/* 			$glyph = $pos + $numberOfHMetrics;*/
/* 			if (isset($glyphToChar[$glyph])) {*/
/* 				foreach($glyphToChar[$glyph] AS $char) {*/
/* 					if ($char != 0 && $char != 65535) {*/
/* 						if ($char < 196608) { */
/* 							$this->charWidths[$char*2] = chr($w >> 8);*/
/* 							$this->charWidths[$char*2 + 1] = chr($w & 0xFF);*/
/* 							$nCharWidths++;*/
/* 						}*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 		}*/
/* 		// NB 65535 is a set width of 0*/
/* 		// First bytes define number of chars in font*/
/* 		$this->charWidths[0] = chr($nCharWidths >> 8);*/
/* 		$this->charWidths[1] = chr($nCharWidths & 0xFF);*/
/* 	}*/
/* */
/* 	function getHMetric($numberOfHMetrics, $gid) {*/
/* 		$start = $this->seek_table("hmtx");*/
/* 		if ($gid < $numberOfHMetrics) {*/
/* 			$this->seek($start+($gid*4));*/
/* 			$hm = fread($this->fh,4);*/
/* 		}*/
/* 		else {*/
/* 			$this->seek($start+(($numberOfHMetrics-1)*4));*/
/* 			$hm = fread($this->fh,2);*/
/* 			$this->seek($start+($numberOfHMetrics*2)+($gid*2));*/
/* 			$hm .= fread($this->fh,2);*/
/* 		}*/
/* 		return $hm;*/
/* 	}*/
/* */
/* 	function getLOCA($indexToLocFormat, $numGlyphs) {*/
/* 		$start = $this->seek_table('loca');*/
/* 		$this->glyphPos = array();*/
/* 		if ($indexToLocFormat == 0) {*/
/* 			$data = $this->get_chunk($start,($numGlyphs*2)+2);*/
/* 			$arr = unpack("n*", $data);*/
/* 			for ($n=0; $n<=$numGlyphs; $n++) {*/
/* 				$this->glyphPos[] = ($arr[$n+1] * 2);*/
/* 			}*/
/* 		}*/
/* 		else if ($indexToLocFormat == 1) {*/
/* 			$data = $this->get_chunk($start,($numGlyphs*4)+4);*/
/* 			$arr = unpack("N*", $data);*/
/* 			for ($n=0; $n<=$numGlyphs; $n++) {*/
/* 				$this->glyphPos[] = ($arr[$n+1]);*/
/* 			}*/
/* 		}*/
/* 		else */
/* 			die('Unknown location table format '.$indexToLocFormat);*/
/* 	}*/
/* */
/* */
/* 	// CMAP Format 4*/
/* 	function getCMAP4($unicode_cmap_offset, &$glyphToChar, &$charToGlyph ) {*/
/* 		$this->maxUniChar = 0;	*/
/* 		$this->seek($unicode_cmap_offset + 2);*/
/* 		$length = $this->read_ushort();*/
/* 		$limit = $unicode_cmap_offset + $length;*/
/* 		$this->skip(2);*/
/* */
/* 		$segCount = $this->read_ushort() / 2;*/
/* 		$this->skip(6);*/
/* 		$endCount = array();*/
/* 		for($i=0; $i<$segCount; $i++) { $endCount[] = $this->read_ushort(); }*/
/* 		$this->skip(2);*/
/* 		$startCount = array();*/
/* 		for($i=0; $i<$segCount; $i++) { $startCount[] = $this->read_ushort(); }*/
/* 		$idDelta = array();*/
/* 		for($i=0; $i<$segCount; $i++) { $idDelta[] = $this->read_short(); }		// ???? was unsigned short*/
/* 		$idRangeOffset_start = $this->_pos;*/
/* 		$idRangeOffset = array();*/
/* 		for($i=0; $i<$segCount; $i++) { $idRangeOffset[] = $this->read_ushort(); }*/
/* */
/* 		for ($n=0;$n<$segCount;$n++) {*/
/* 			$endpoint = ($endCount[$n] + 1);*/
/* 			for ($unichar=$startCount[$n];$unichar<$endpoint;$unichar++) {*/
/* 				if ($idRangeOffset[$n] == 0)*/
/* 					$glyph = ($unichar + $idDelta[$n]) & 0xFFFF;*/
/* 				else {*/
/* 					$offset = ($unichar - $startCount[$n]) * 2 + $idRangeOffset[$n];*/
/* 					$offset = $idRangeOffset_start + 2 * $n + $offset;*/
/* 					if ($offset >= $limit)*/
/* 						$glyph = 0;*/
/* 					else {*/
/* 						$glyph = $this->get_ushort($offset);*/
/* 						if ($glyph != 0)*/
/* 						   $glyph = ($glyph + $idDelta[$n]) & 0xFFFF;*/
/* 					}*/
/* 				}*/
/* 				$charToGlyph[$unichar] = $glyph;*/
/* 				if ($unichar < 196608) { $this->maxUniChar = max($unichar,$this->maxUniChar); }*/
/* 				$glyphToChar[$glyph][] = $unichar;*/
/* 			}*/
/* 		}*/
/* */
/* 		// mPDF 5.4.05*/
/* 		if ($this->unAGlyphs) {*/
/* 		  if (isset($this->tables['post'])) {*/
/* 			$this->seek_table("post");*/
/* 			$formata = $this->read_ushort();*/
/* 			$formatb = $this->read_ushort();*/
/* 			// Only works on Format 2.0*/
/* 			if ($formata != 2 || $formatb != 0) { die("Cannot set unAGlyphs for this font (".$file."). POST table must be in Format 2."); }*/
/* 			$this->skip(28);*/
/* 			$nGlyfs = $this->read_ushort();*/
/* 			$glyphNameIndex = array();*/
/* 			for ($i=0; $i<$nGlyfs; $i++) {*/
/* 				$glyphNameIndex[($this->read_ushort())] = $i;*/
/* 			}*/
/* */
/* 			$opost = $this->get_table('post');*/
/* 			$ptr = 34+($nGlyfs*2);*/
/* 			for ($i=0; $i<$nGlyfs; $i++) {*/
/* 				$len = ord(substr($opost,$ptr,1));*/
/* 				$ptr++;*/
/* 				$name = substr($opost,$ptr,$len);*/
/* 				$gid = $glyphNameIndex[$i+258];*/
/* 				// Select uni0600.xxx(x) - uni06FF.xxx(x)*/
/* 				if (preg_match('/^uni(06[0-9a-f]{2})\.(fina|medi|init|fin|med|ini)$/i',$name,$m)) {*/
/* 				  if (!isset($glyphToChar[$gid]) || (isset($glyphToChar[$gid]) && is_array($glyphToChar[$gid]) && count($glyphToChar[$gid])==1 && $glyphToChar[$gid][0]>57343 && $glyphToChar[$gid][0]<63489)) {	// if set in PUA private use area E000-F8FF, or NOT Unicode mapped*/
/* 					$uni = hexdec($m[1]);*/
/* 					$form = strtoupper(substr($m[2],0,1));*/
/* 					// Assign new PUA Unicode between F500 - F7FF*/
/* 					$bit = $uni & 0xFF;*/
/* 					if ($form == 'I') { $bit += 0xF600; }*/
/* 					else if ($form == 'M') { $bit += 0xF700; }*/
/* 					else  { $bit += 0xF500; }*/
/* 					// ADD TO CMAP*/
/* 					$glyphToChar[$gid][] = $bit;*/
/* 					$charToGlyph[$bit] = $gid;*/
/* 				  }*/
/* 				}*/
/* 				// LAM with ALEF ligatures (Mandatory ligatures)*/
/* 				else if (preg_match('/^uni064406(22|23|25|27)(\.fina|\.fin){0,1}$/i',$name,$m)) {*/
/* 				  if ($m[1]=='22') {*/
/* 					if ($m[2]) { $uni = hexdec('FEF6'); } else { $uni = hexdec('FEF5'); } */
/* 				  }*/
/* 				  else if ($m[1]=='23') {*/
/* 					if ($m[2]) { $uni = hexdec('FEF8'); } else { $uni = hexdec('FEF7'); } */
/* 				  }*/
/* 				  else if ($m[1]=='25') {*/
/* 					if ($m[2]) { $uni = hexdec('FEFA'); } else { $uni = hexdec('FEF9'); } */
/* 				  }*/
/* 				  else if ($m[1]=='27') {*/
/* 					if ($m[2]) { $uni = hexdec('FEFC'); } else { $uni = hexdec('FEFB'); } */
/* 				  }*/
/* 				  if (!isset($glyphToChar[$gid]) || (isset($glyphToChar[$gid]) && is_array($glyphToChar[$gid]) && count($glyphToChar[$gid])==1 && $glyphToChar[$gid][0]>57343 && $glyphToChar[$gid][0]<63489)) {	// if set in PUA private use area E000-F8FF, or NOT Unicode mapped*/
/* 					// ADD TO CMAP*/
/* 					$glyphToChar[$gid][] = $uni;*/
/* 					$charToGlyph[$uni] = $gid;*/
/* 				  }*/
/* 				}*/
/* 				$ptr += $len;*/
/* 			}*/
/* 		  }*/
/* 		}*/
/* */
/* 	}*/
/* */
/* */
/* 		// Put the TTF file together*/
/* 	function endTTFile(&$stm) {*/
/* 		$stm = '';*/
/* 		$numTables = count($this->otables);*/
/* 		$searchRange = 1;*/
/* 		$entrySelector = 0;*/
/* 		while ($searchRange * 2 <= $numTables) {*/
/* 			$searchRange = $searchRange * 2;*/
/* 			$entrySelector = $entrySelector + 1;*/
/* 		}*/
/* 		$searchRange = $searchRange * 16;*/
/* 		$rangeShift = $numTables * 16 - $searchRange;*/
/* */
/* 		// Header*/
/* 		if (_TTF_MAC_HEADER) {*/
/* 			$stm .= (pack("Nnnnn", 0x74727565, $numTables, $searchRange, $entrySelector, $rangeShift));	// Mac*/
/* 		}*/
/* 		else {*/
/* 			$stm .= (pack("Nnnnn", 0x00010000 , $numTables, $searchRange, $entrySelector, $rangeShift));	// Windows*/
/* 		}*/
/* */
/* 		// Table directory*/
/* 		$tables = $this->otables;*/
/* 		ksort ($tables); */
/* 		$offset = 12 + $numTables * 16;*/
/* 		foreach ($tables AS $tag=>$data) {*/
/* 			if ($tag == 'head') { $head_start = $offset; }*/
/* 			$stm .= $tag;*/
/* 			$checksum = $this->calcChecksum($data);*/
/* 			$stm .= pack("nn", $checksum[0],$checksum[1]);*/
/* 			$stm .= pack("NN", $offset, strlen($data));*/
/* 			$paddedLength = (strlen($data)+3)&~3;*/
/* 			$offset = $offset + $paddedLength;*/
/* 		}*/
/* */
/* 		// Table data*/
/* 		foreach ($tables AS $tag=>$data) {*/
/* 			$data .= "\0\0\0";*/
/* 			$stm .= substr($data,0,(strlen($data)&~3));*/
/* 		}*/
/* */
/* 		$checksum = $this->calcChecksum($stm);*/
/* 		$checksum = $this->sub32(array(0xB1B0,0xAFBA), $checksum);*/
/* 		$chk = pack("nn", $checksum[0],$checksum[1]);*/
/* 		$stm = $this->splice($stm,($head_start + 8),$chk);*/
/* 		return $stm ;*/
/* 	}*/
/* */
/* */
/* 	function repackageTTF($file, $TTCfontID=0, $debug=false, $unAGlyphs=false) {	// mPDF 5.4.05*/
/* 		$this->unAGlyphs = $unAGlyphs;	// mPDF 5.4.05*/
/* 		$this->filename = $file;*/
/* 		$this->fh = fopen($file ,'rb') or die('Can\'t open file ' . $file);*/
/* 		$this->_pos = 0;*/
/* 		$this->charWidths = '';*/
/* 		$this->glyphPos = array();*/
/* 		$this->charToGlyph = array();*/
/* 		$this->tables = array();*/
/* 		$this->otables = array();*/
/* 		$this->ascent = 0;*/
/* 		$this->descent = 0;*/
/* 		$this->numTTCFonts = 0;*/
/* 		$this->TTCFonts = array();*/
/* 		$this->skip(4);*/
/* 		$this->maxUni = 0;*/
/* 		if ($TTCfontID > 0) {*/
/* 			$this->version = $version = $this->read_ulong();	// TTC Header version now*/
/* 			if (!in_array($version, array(0x00010000,0x00020000)))*/
/* 				die("ERROR - Error parsing TrueType Collection: version=".$version." - " . $file);*/
/* 			$this->numTTCFonts = $this->read_ulong();*/
/* 			for ($i=1; $i<=$this->numTTCFonts; $i++) {*/
/* 	      	      $this->TTCFonts[$i]['offset'] = $this->read_ulong();*/
/* 			}*/
/* 			$this->seek($this->TTCFonts[$TTCfontID]['offset']);*/
/* 			$this->version = $version = $this->read_ulong();	// TTFont version again now*/
/* 		}*/
/* 		$this->readTableDirectory($debug);*/
/* 		$tags = array ('OS/2', 'cmap', 'glyf', 'head', 'hhea', 'hmtx', 'loca', 'maxp', 'name', 'post', 'cvt ', 'fpgm', 'gasp', 'prep');*/
/* /**/
/* Tables which require glyphIndex*/
/* hdmx*/
/* kern*/
/* LTSH*/
/* */
/* Tables which do NOT require glyphIndex*/
/* VDMX*/
/* */
/* GDEF*/
/* GPOS*/
/* GSUB*/
/* JSTF*/
/* */
/* DSIG*/
/* PCLT - not recommended*/
/* *//* */
/* */
/* 		foreach($tags AS $tag) {*/
/* 			if (isset($this->tables[$tag])) { $this->add($tag, $this->get_table($tag)); }*/
/* 		}*/
/* 		fclose($this->fh);*/
/* 		$stm = '';*/
/* 		$this->endTTFile($stm);*/
/* 		return $stm ;*/
/* 	}*/
/* */
/* */
/* }*/
/* */
/* */
/* ?>*/
