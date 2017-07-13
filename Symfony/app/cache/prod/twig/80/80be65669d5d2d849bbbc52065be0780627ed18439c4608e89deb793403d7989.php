<?php

/* support/include/mpdf/classes/ttfontsuni.php */
class __TwigTemplate_49778ae313e249d49904a0bb63241c55457c35f10270caab3044a8cdbd371ac8 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/classes/ttfontsuni.php";
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
        return new Twig_Source("", "support/include/mpdf/classes/ttfontsuni.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\mpdf\\classes\\ttfontsuni.php");
    }
}
