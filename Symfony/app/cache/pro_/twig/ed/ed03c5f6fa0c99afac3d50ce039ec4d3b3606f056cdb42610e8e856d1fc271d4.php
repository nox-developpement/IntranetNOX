<?php

/* support/include/mpdf/classes/gif.php */
class __TwigTemplate_526571859901b963e79a4a6e8c5e85e819ad845bfe44208d5b35c043d485a512 extends Twig_Template
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
///////////////////////////////////////////////////////////////////////////////////////////////////
// 2009-12-22 Adapted for mPDF 4.2
///////////////////////////////////////////////////////////////////////////////////////////////////
// GIF Util - (C) 2003 Yamasoft (S/C)
// http://www.yamasoft.com
// All Rights Reserved
// This file can be freely copied, distributed, modified, updated by anyone under the only
// condition to leave the original address (Yamasoft, http://www.yamasoft.com) and this header.
///////////////////////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
// 2009-12-22 Adapted INB 
// Functions calling functionname(\$x, \$len = 0) were not working on PHP5.1.5 as pass by reference
// All edited to \$len = 0; then call function.
///////////////////////////////////////////////////////////////////////////////////////////////////


///////////////////////////////////////////////////////////////////////////////////////////////////

class CGIFLZW
{
\tvar \$MAX_LZW_BITS;
\tvar \$Fresh, \$CodeSize, \$SetCodeSize, \$MaxCode, \$MaxCodeSize, \$FirstCode, \$OldCode;
\tvar \$ClearCode, \$EndCode, \$Next, \$Vals, \$Stack, \$sp, \$Buf, \$CurBit, \$LastBit, \$Done, \$LastByte;

\t///////////////////////////////////////////////////////////////////////////

\t// CONSTRUCTOR
\tfunction CGIFLZW()
\t{
\t\t\$this->MAX_LZW_BITS = 12;
\t\tunSet(\$this->Next);
\t\tunSet(\$this->Vals);
\t\tunSet(\$this->Stack);
\t\tunSet(\$this->Buf);

\t\t\$this->Next  = range(0, (1 << \$this->MAX_LZW_BITS)       - 1);
\t\t\$this->Vals  = range(0, (1 << \$this->MAX_LZW_BITS)       - 1);
\t\t\$this->Stack = range(0, (1 << (\$this->MAX_LZW_BITS + 1)) - 1);
\t\t\$this->Buf   = range(0, 279);
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction deCompress(\$data, &\$datLen)
\t{
\t\t\$stLen  = strlen(\$data);
\t\t\$datLen = 0;
\t\t\$ret    = \"\";
\t\t\$dp = 0; \t// data pointer

\t\t// INITIALIZATION
\t\t\$this->LZWCommandInit(\$data, \$dp);

\t\twhile((\$iIndex = \$this->LZWCommand(\$data, \$dp)) >= 0) {
\t\t\t\$ret .= chr(\$iIndex);
\t\t}

\t\t\$datLen = \$dp;

\t\tif(\$iIndex != -2) {
\t\t\treturn false;
\t\t}

\t\treturn \$ret;
\t}

\t///////////////////////////////////////////////////////////////////////////
\tfunction LZWCommandInit(&\$data, &\$dp)
\t{
\t\t\t\$this->SetCodeSize = ord(\$data[0]);
\t\t\t\$dp += 1;

\t\t\t\$this->CodeSize    = \$this->SetCodeSize + 1;
\t\t\t\$this->ClearCode   = 1 << \$this->SetCodeSize;
\t\t\t\$this->EndCode     = \$this->ClearCode + 1;
\t\t\t\$this->MaxCode     = \$this->ClearCode + 2;
\t\t\t\$this->MaxCodeSize = \$this->ClearCode << 1;

\t\t\t\$this->GetCodeInit(\$data, \$dp);

\t\t\t\$this->Fresh = 1;
\t\t\tfor(\$i = 0; \$i < \$this->ClearCode; \$i++) {
\t\t\t\t\$this->Next[\$i] = 0;
\t\t\t\t\$this->Vals[\$i] = \$i;
\t\t\t}

\t\t\tfor(; \$i < (1 << \$this->MAX_LZW_BITS); \$i++) {
\t\t\t\t\$this->Next[\$i] = 0;
\t\t\t\t\$this->Vals[\$i] = 0;
\t\t\t}

\t\t\t\$this->sp = 0;
\t\t\treturn 1;
\t}

\tfunction LZWCommand(&\$data, &\$dp)
\t{
\t\tif(\$this->Fresh) {
\t\t\t\$this->Fresh = 0;
\t\t\tdo {
\t\t\t\t\$this->FirstCode = \$this->GetCode(\$data, \$dp);
\t\t\t\t\$this->OldCode   = \$this->FirstCode;
\t\t\t}
\t\t\twhile(\$this->FirstCode == \$this->ClearCode);

\t\t\treturn \$this->FirstCode;
\t\t}

\t\tif(\$this->sp > 0) {
\t\t\t\$this->sp--;
\t\t\treturn \$this->Stack[\$this->sp];
\t\t}

\t\twhile((\$Code = \$this->GetCode(\$data, \$dp)) >= 0) {
\t\t\tif(\$Code == \$this->ClearCode) {
\t\t\t\tfor(\$i = 0; \$i < \$this->ClearCode; \$i++) {
\t\t\t\t\t\$this->Next[\$i] = 0;
\t\t\t\t\t\$this->Vals[\$i] = \$i;
\t\t\t\t}

\t\t\t\tfor(; \$i < (1 << \$this->MAX_LZW_BITS); \$i++) {
\t\t\t\t\t\$this->Next[\$i] = 0;
\t\t\t\t\t\$this->Vals[\$i] = 0;
\t\t\t\t}

\t\t\t\t\$this->CodeSize    = \$this->SetCodeSize + 1;
\t\t\t\t\$this->MaxCodeSize = \$this->ClearCode << 1;
\t\t\t\t\$this->MaxCode     = \$this->ClearCode + 2;
\t\t\t\t\$this->sp          = 0;
\t\t\t\t\$this->FirstCode   = \$this->GetCode(\$data, \$dp);
\t\t\t\t\$this->OldCode     = \$this->FirstCode;

\t\t\t\treturn \$this->FirstCode;
\t\t\t}

\t\t\tif(\$Code == \$this->EndCode) {
\t\t\t\treturn -2;
\t\t\t}

\t\t\t\$InCode = \$Code;
\t\t\tif(\$Code >= \$this->MaxCode) {
\t\t\t\t\$this->Stack[\$this->sp++] = \$this->FirstCode;
\t\t\t\t\$Code = \$this->OldCode;
\t\t\t}

\t\t\twhile(\$Code >= \$this->ClearCode) {
\t\t\t\t\$this->Stack[\$this->sp++] = \$this->Vals[\$Code];

\t\t\t\tif(\$Code == \$this->Next[\$Code]) // Circular table entry, big GIF Error!
\t\t\t\t\treturn -1;

\t\t\t\t\$Code = \$this->Next[\$Code];
\t\t\t}

\t\t\t\$this->FirstCode = \$this->Vals[\$Code];
\t\t\t\$this->Stack[\$this->sp++] = \$this->FirstCode;

\t\t\tif((\$Code = \$this->MaxCode) < (1 << \$this->MAX_LZW_BITS)) {
\t\t\t\t\$this->Next[\$Code] = \$this->OldCode;
\t\t\t\t\$this->Vals[\$Code] = \$this->FirstCode;
\t\t\t\t\$this->MaxCode++;

\t\t\t\tif((\$this->MaxCode >= \$this->MaxCodeSize) && (\$this->MaxCodeSize < (1 << \$this->MAX_LZW_BITS))) {
\t\t\t\t\t\$this->MaxCodeSize *= 2;
\t\t\t\t\t\$this->CodeSize++;
\t\t\t\t}
\t\t\t}

\t\t\t\$this->OldCode = \$InCode;
\t\t\tif(\$this->sp > 0) {
\t\t\t\t\$this->sp--;
\t\t\t\treturn \$this->Stack[\$this->sp];
\t\t\t}
\t\t}

\t\treturn \$Code;
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction GetCodeInit(&\$data, &\$dp)
\t{
\t\t\t\$this->CurBit   = 0;
\t\t\t\$this->LastBit  = 0;
\t\t\t\$this->Done     = 0;
\t\t\t\$this->LastByte = 2;
\t\t\treturn 1;
\t}

\tfunction GetCode(&\$data, &\$dp)
\t{
\t\tif((\$this->CurBit + \$this->CodeSize) >= \$this->LastBit) {
\t\t\tif(\$this->Done) {
\t\t\t\tif(\$this->CurBit >= \$this->LastBit) {
\t\t\t\t\t// Ran off the end of my bits
\t\t\t\t\treturn 0;
\t\t\t\t}
\t\t\t\treturn -1;
\t\t\t}

\t\t\t\$this->Buf[0] = \$this->Buf[\$this->LastByte - 2];
\t\t\t\$this->Buf[1] = \$this->Buf[\$this->LastByte - 1];

\t\t\t\$Count = ord(\$data[\$dp]);
\t\t\t\$dp += 1;

\t\t\tif(\$Count) {
\t\t\t\tfor(\$i = 0; \$i < \$Count; \$i++) {
\t\t\t\t\t\$this->Buf[2 + \$i] = ord(\$data[\$dp+\$i]);
\t\t\t\t}
\t\t\t\t\$dp += \$Count;
\t\t\t}
\t\t\telse {
\t\t\t\t\$this->Done = 1;
\t\t\t}

\t\t\t\$this->LastByte = 2 + \$Count;
\t\t\t\$this->CurBit   = (\$this->CurBit - \$this->LastBit) + 16;
\t\t\t\$this->LastBit  = (2 + \$Count) << 3;
\t\t}

\t\t\$iRet = 0;
\t\tfor(\$i = \$this->CurBit, \$j = 0; \$j < \$this->CodeSize; \$i++, \$j++) {
\t\t\t\$iRet |= ((\$this->Buf[intval(\$i / 8)] & (1 << (\$i % 8))) != 0) << \$j;
\t\t}

\t\t\$this->CurBit += \$this->CodeSize;
\t\treturn \$iRet;
\t}
}

///////////////////////////////////////////////////////////////////////////////////////////////////

class CGIFCOLORTABLE
{
\tvar \$m_nColors;
\tvar \$m_arColors;

\t///////////////////////////////////////////////////////////////////////////

\t// CONSTRUCTOR
\tfunction CGIFCOLORTABLE()
\t{
\t\tunSet(\$this->m_nColors);
\t\tunSet(\$this->m_arColors);
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction load(\$lpData, \$num)
\t{
\t\t\$this->m_nColors  = 0;
\t\t\$this->m_arColors = array();

\t\tfor(\$i = 0; \$i < \$num; \$i++) {
\t\t\t\$rgb = substr(\$lpData, \$i * 3, 3);
\t\t\tif(strlen(\$rgb) < 3) {
\t\t\t\treturn false;
\t\t\t}

\t\t\t\$this->m_arColors[] = (ord(\$rgb[2]) << 16) + (ord(\$rgb[1]) << 8) + ord(\$rgb[0]);
\t\t\t\$this->m_nColors++;
\t\t}

\t\treturn true;
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction toString()
\t{
\t\t\$ret = \"\";

\t\tfor(\$i = 0; \$i < \$this->m_nColors; \$i++) {
\t\t\t\$ret .=
\t\t\t\tchr((\$this->m_arColors[\$i] & 0x000000FF))       . // R
\t\t\t\tchr((\$this->m_arColors[\$i] & 0x0000FF00) >>  8) . // G
\t\t\t\tchr((\$this->m_arColors[\$i] & 0x00FF0000) >> 16);  // B
\t\t}

\t\treturn \$ret;
\t}


\t///////////////////////////////////////////////////////////////////////////

\tfunction colorIndex(\$rgb)
\t{
\t\t\$rgb  = intval(\$rgb) & 0xFFFFFF;
\t\t\$r1   = (\$rgb & 0x0000FF);
\t\t\$g1   = (\$rgb & 0x00FF00) >>  8;
\t\t\$b1   = (\$rgb & 0xFF0000) >> 16;
\t\t\$idx  = -1;

\t\tfor(\$i = 0; \$i < \$this->m_nColors; \$i++) {
\t\t\t\$r2 = (\$this->m_arColors[\$i] & 0x000000FF);
\t\t\t\$g2 = (\$this->m_arColors[\$i] & 0x0000FF00) >>  8;
\t\t\t\$b2 = (\$this->m_arColors[\$i] & 0x00FF0000) >> 16;
\t\t\t\$d  = abs(\$r2 - \$r1) + abs(\$g2 - \$g1) + abs(\$b2 - \$b1);

\t\t\tif((\$idx == -1) || (\$d < \$dif)) {
\t\t\t\t\$idx = \$i;
\t\t\t\t\$dif = \$d;
\t\t\t}
\t\t}

\t\treturn \$idx;
\t}
}

///////////////////////////////////////////////////////////////////////////////////////////////////

class CGIFFILEHEADER
{
\tvar \$m_lpVer;
\tvar \$m_nWidth;
\tvar \$m_nHeight;
\tvar \$m_bGlobalClr;
\tvar \$m_nColorRes;
\tvar \$m_bSorted;
\tvar \$m_nTableSize;
\tvar \$m_nBgColor;
\tvar \$m_nPixelRatio;
\tvar \$m_colorTable;

\t///////////////////////////////////////////////////////////////////////////

\t// CONSTRUCTOR
\tfunction CGIFFILEHEADER()
\t{
\t\tunSet(\$this->m_lpVer);
\t\tunSet(\$this->m_nWidth);
\t\tunSet(\$this->m_nHeight);
\t\tunSet(\$this->m_bGlobalClr);
\t\tunSet(\$this->m_nColorRes);
\t\tunSet(\$this->m_bSorted);
\t\tunSet(\$this->m_nTableSize);
\t\tunSet(\$this->m_nBgColor);
\t\tunSet(\$this->m_nPixelRatio);
\t\tunSet(\$this->m_colorTable);
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction load(\$lpData, &\$hdrLen)
\t{
\t\t\$hdrLen = 0;

\t\t\$this->m_lpVer = substr(\$lpData, 0, 6);
\t\tif((\$this->m_lpVer <> \"GIF87a\") && (\$this->m_lpVer <> \"GIF89a\")) {
\t\t\treturn false;
\t\t}

\t\t\$this->m_nWidth  = \$this->w2i(substr(\$lpData, 6, 2));
\t\t\$this->m_nHeight = \$this->w2i(substr(\$lpData, 8, 2));
\t\tif(!\$this->m_nWidth || !\$this->m_nHeight) {
\t\t\treturn false;
\t\t}

\t\t\$b = ord(substr(\$lpData, 10, 1));
\t\t\$this->m_bGlobalClr  = (\$b & 0x80) ? true : false;
\t\t\$this->m_nColorRes   = (\$b & 0x70) >> 4;
\t\t\$this->m_bSorted     = (\$b & 0x08) ? true : false;
\t\t\$this->m_nTableSize  = 2 << (\$b & 0x07);
\t\t\$this->m_nBgColor    = ord(substr(\$lpData, 11, 1));
\t\t\$this->m_nPixelRatio = ord(substr(\$lpData, 12, 1));
\t\t\$hdrLen = 13;

\t\tif(\$this->m_bGlobalClr) {
\t\t\t\$this->m_colorTable = new CGIFCOLORTABLE();
\t\t\tif(!\$this->m_colorTable->load(substr(\$lpData, \$hdrLen), \$this->m_nTableSize)) {
\t\t\t\treturn false;
\t\t\t}
\t\t\t\$hdrLen += 3 * \$this->m_nTableSize;
\t\t}

\t\treturn true;
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction w2i(\$str)
\t{
\t\treturn ord(substr(\$str, 0, 1)) + (ord(substr(\$str, 1, 1)) << 8);
\t}
}

///////////////////////////////////////////////////////////////////////////////////////////////////

class CGIFIMAGEHEADER
{
\tvar \$m_nLeft;
\tvar \$m_nTop;
\tvar \$m_nWidth;
\tvar \$m_nHeight;
\tvar \$m_bLocalClr;
\tvar \$m_bInterlace;
\tvar \$m_bSorted;
\tvar \$m_nTableSize;
\tvar \$m_colorTable;

\t///////////////////////////////////////////////////////////////////////////

\t// CONSTRUCTOR
\tfunction CGIFIMAGEHEADER()
\t{
\t\tunSet(\$this->m_nLeft);
\t\tunSet(\$this->m_nTop);
\t\tunSet(\$this->m_nWidth);
\t\tunSet(\$this->m_nHeight);
\t\tunSet(\$this->m_bLocalClr);
\t\tunSet(\$this->m_bInterlace);
\t\tunSet(\$this->m_bSorted);
\t\tunSet(\$this->m_nTableSize);
\t\tunSet(\$this->m_colorTable);
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction load(\$lpData, &\$hdrLen)
\t{
\t\t\$hdrLen = 0;

\t\t\$this->m_nLeft   = \$this->w2i(substr(\$lpData, 0, 2));
\t\t\$this->m_nTop    = \$this->w2i(substr(\$lpData, 2, 2));
\t\t\$this->m_nWidth  = \$this->w2i(substr(\$lpData, 4, 2));
\t\t\$this->m_nHeight = \$this->w2i(substr(\$lpData, 6, 2));

\t\tif(!\$this->m_nWidth || !\$this->m_nHeight) {
\t\t\treturn false;
\t\t}

\t\t\$b = ord(\$lpData{8});
\t\t\$this->m_bLocalClr  = (\$b & 0x80) ? true : false;
\t\t\$this->m_bInterlace = (\$b & 0x40) ? true : false;
\t\t\$this->m_bSorted    = (\$b & 0x20) ? true : false;
\t\t\$this->m_nTableSize = 2 << (\$b & 0x07);
\t\t\$hdrLen = 9;

\t\tif(\$this->m_bLocalClr) {
\t\t\t\$this->m_colorTable = new CGIFCOLORTABLE();
\t\t\tif(!\$this->m_colorTable->load(substr(\$lpData, \$hdrLen), \$this->m_nTableSize)) {
\t\t\t\treturn false;
\t\t\t}
\t\t\t\$hdrLen += 3 * \$this->m_nTableSize;
\t\t}

\t\treturn true;
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction w2i(\$str)
\t{
\t\treturn ord(substr(\$str, 0, 1)) + (ord(substr(\$str, 1, 1)) << 8);
\t}
}

///////////////////////////////////////////////////////////////////////////////////////////////////

class CGIFIMAGE
{
\tvar \$m_disp;
\tvar \$m_bUser;
\tvar \$m_bTrans;
\tvar \$m_nDelay;
\tvar \$m_nTrans;
\tvar \$m_lpComm;
\tvar \$m_gih;
\tvar \$m_data;
\tvar \$m_lzw;

\t///////////////////////////////////////////////////////////////////////////

\tfunction CGIFIMAGE()
\t{
\t\tunSet(\$this->m_disp);
\t\tunSet(\$this->m_bUser);
\t\tunSet(\$this->m_bTrans);
\t\tunSet(\$this->m_nDelay);
\t\tunSet(\$this->m_nTrans);
\t\tunSet(\$this->m_lpComm);
\t\tunSet(\$this->m_data);
\t\t\$this->m_gih = new CGIFIMAGEHEADER();
\t\t\$this->m_lzw = new CGIFLZW();
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction load(\$data, &\$datLen)
\t{
\t\t\$datLen = 0;

\t\twhile(true) {
\t\t\t\$b = ord(\$data[0]);
\t\t\t\$data = substr(\$data, 1);
\t\t\t\$datLen++;

\t\t\tswitch(\$b) {
\t\t\tcase 0x21: // Extension
\t\t\t\t\$len = 0;
\t\t\t\tif(!\$this->skipExt(\$data, \$len)) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$datLen += \$len;
\t\t\t\tbreak;

\t\t\tcase 0x2C: // Image
\t\t\t\t// LOAD HEADER & COLOR TABLE
\t\t\t\t\$len = 0;
\t\t\t\tif(!\$this->m_gih->load(\$data, \$len)) {
\t\t\t\t\treturn false;
\t\t\t\t}
\t\t\t\t\$data = substr(\$data, \$len);
\t\t\t\t\$datLen += \$len;

\t\t\t\t// ALLOC BUFFER
\t\t\t\t\$len = 0;

\t\t\t\tif(!(\$this->m_data = \$this->m_lzw->deCompress(\$data, \$len))) {
\t\t\t\t\treturn false;
\t\t\t\t}

\t\t\t\t\$data = substr(\$data, \$len);
\t\t\t\t\$datLen += \$len;

\t\t\t\tif(\$this->m_gih->m_bInterlace) {
\t\t\t\t\t\$this->deInterlace();
\t\t\t\t}

\t\t\t\treturn true;

\t\t\tcase 0x3B: // EOF
\t\t\tdefault:
\t\t\t\treturn false;
\t\t\t}
\t\t}
\t\treturn false;
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction skipExt(&\$data, &\$extLen)
\t{
\t\t\$extLen = 0;

\t\t\$b = ord(\$data[0]);
\t\t\$data = substr(\$data, 1);
\t\t\$extLen++;

\t\tswitch(\$b) {
\t\tcase 0xF9: // Graphic Control
\t\t\t\$b = ord(\$data[1]);
\t\t\t\$this->m_disp   = (\$b & 0x1C) >> 2;
\t\t\t\$this->m_bUser  = (\$b & 0x02) ? true : false;
\t\t\t\$this->m_bTrans = (\$b & 0x01) ? true : false;
\t\t\t\$this->m_nDelay = \$this->w2i(substr(\$data, 2, 2));
\t\t\t\$this->m_nTrans = ord(\$data[4]);
\t\t\tbreak;

\t\tcase 0xFE: // Comment
\t\t\t\$this->m_lpComm = substr(\$data, 1, ord(\$data[0]));
\t\t\tbreak;

\t\tcase 0x01: // Plain text
\t\t\tbreak;

\t\tcase 0xFF: // Application
\t\t\tbreak;
\t\t}

\t\t// SKIP DEFAULT AS DEFS MAY CHANGE
\t\t\$b = ord(\$data[0]);
\t\t\$data = substr(\$data, 1);
\t\t\$extLen++;
\t\twhile(\$b > 0) {
\t\t\t\$data = substr(\$data, \$b);
\t\t\t\$extLen += \$b;
\t\t\t\$b    = ord(\$data[0]);
\t\t\t\$data = substr(\$data, 1);
\t\t\t\$extLen++;
\t\t}
\t\treturn true;
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction w2i(\$str)
\t{
\t\treturn ord(substr(\$str, 0, 1)) + (ord(substr(\$str, 1, 1)) << 8);
\t}

\t///////////////////////////////////////////////////////////////////////////

\tfunction deInterlace()
\t{
\t\t\$data = \$this->m_data;

\t\tfor(\$i = 0; \$i < 4; \$i++) {
\t\t\tswitch(\$i) {
\t\t\tcase 0:
\t\t\t\t\$s = 8;
\t\t\t\t\$y = 0;
\t\t\t\tbreak;

\t\t\tcase 1:
\t\t\t\t\$s = 8;
\t\t\t\t\$y = 4;
\t\t\t\tbreak;

\t\t\tcase 2:
\t\t\t\t\$s = 4;
\t\t\t\t\$y = 2;
\t\t\t\tbreak;

\t\t\tcase 3:
\t\t\t\t\$s = 2;
\t\t\t\t\$y = 1;
\t\t\t\tbreak;
\t\t\t}

\t\t\tfor(; \$y < \$this->m_gih->m_nHeight; \$y += \$s) {
\t\t\t\t\$lne = substr(\$this->m_data, 0, \$this->m_gih->m_nWidth);
\t\t\t\t\$this->m_data = substr(\$this->m_data, \$this->m_gih->m_nWidth);

\t\t\t\t\$data =
\t\t\t\t\tsubstr(\$data, 0, \$y * \$this->m_gih->m_nWidth) .
\t\t\t\t\t\$lne .
\t\t\t\t\tsubstr(\$data, (\$y + 1) * \$this->m_gih->m_nWidth);
\t\t\t}
\t\t}

\t\t\$this->m_data = \$data;
\t}
}

///////////////////////////////////////////////////////////////////////////////////////////////////

class CGIF
{
\tvar \$m_gfh;
\tvar \$m_lpData;
\tvar \$m_img;
\tvar \$m_bLoaded;

\t///////////////////////////////////////////////////////////////////////////

\t// CONSTRUCTOR
\tfunction CGIF()
\t{
\t\t\$this->m_gfh     = new CGIFFILEHEADER();
\t\t\$this->m_img     = new CGIFIMAGE();
\t\t\$this->m_lpData  = \"\";
\t\t\$this->m_bLoaded = false;
\t}

\t///////////////////////////////////////////////////////////////////////////
\tfunction ClearData() {
\t\t\$this->m_lpData = '';
\t\tunSet(\$this->m_img->m_data);
\t\tunSet(\$this->m_img->m_lzw->Next);
\t\tunSet(\$this->m_img->m_lzw->Vals);
\t\tunSet(\$this->m_img->m_lzw->Stack);
\t\tunSet(\$this->m_img->m_lzw->Buf);
\t}

\tfunction loadFile(&\$data, \$iIndex)
\t{
\t\tif(\$iIndex < 0) {
\t\t\treturn false;
\t\t}
\t\t\$this->m_lpData = \$data;

\t\t// GET FILE HEADER
\t\t\$len = 0;
\t\tif(!\$this->m_gfh->load(\$this->m_lpData, \$len)) {
\t\t\treturn false;
\t\t}

\t\t\$this->m_lpData = substr(\$this->m_lpData, \$len);

\t\tdo {
\t\t\t\$imgLen = 0;
\t\t\tif(!\$this->m_img->load(\$this->m_lpData, \$imgLen)) {
\t\t\t\treturn false;
\t\t\t}
\t\t\t\$this->m_lpData = substr(\$this->m_lpData, \$imgLen);
\t\t}
\t\twhile(\$iIndex-- > 0);

\t\t\$this->m_bLoaded = true;
\t\treturn true;
\t}

}

///////////////////////////////////////////////////////////////////////////////////////////////////

?>";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/classes/gif.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* // 2009-12-22 Adapted for mPDF 4.2*/
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* // GIF Util - (C) 2003 Yamasoft (S/C)*/
/* // http://www.yamasoft.com*/
/* // All Rights Reserved*/
/* // This file can be freely copied, distributed, modified, updated by anyone under the only*/
/* // condition to leave the original address (Yamasoft, http://www.yamasoft.com) and this header.*/
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* // 2009-12-22 Adapted INB */
/* // Functions calling functionname($x, $len = 0) were not working on PHP5.1.5 as pass by reference*/
/* // All edited to $len = 0; then call function.*/
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* */
/* */
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* */
/* class CGIFLZW*/
/* {*/
/* 	var $MAX_LZW_BITS;*/
/* 	var $Fresh, $CodeSize, $SetCodeSize, $MaxCode, $MaxCodeSize, $FirstCode, $OldCode;*/
/* 	var $ClearCode, $EndCode, $Next, $Vals, $Stack, $sp, $Buf, $CurBit, $LastBit, $Done, $LastByte;*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	// CONSTRUCTOR*/
/* 	function CGIFLZW()*/
/* 	{*/
/* 		$this->MAX_LZW_BITS = 12;*/
/* 		unSet($this->Next);*/
/* 		unSet($this->Vals);*/
/* 		unSet($this->Stack);*/
/* 		unSet($this->Buf);*/
/* */
/* 		$this->Next  = range(0, (1 << $this->MAX_LZW_BITS)       - 1);*/
/* 		$this->Vals  = range(0, (1 << $this->MAX_LZW_BITS)       - 1);*/
/* 		$this->Stack = range(0, (1 << ($this->MAX_LZW_BITS + 1)) - 1);*/
/* 		$this->Buf   = range(0, 279);*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function deCompress($data, &$datLen)*/
/* 	{*/
/* 		$stLen  = strlen($data);*/
/* 		$datLen = 0;*/
/* 		$ret    = "";*/
/* 		$dp = 0; 	// data pointer*/
/* */
/* 		// INITIALIZATION*/
/* 		$this->LZWCommandInit($data, $dp);*/
/* */
/* 		while(($iIndex = $this->LZWCommand($data, $dp)) >= 0) {*/
/* 			$ret .= chr($iIndex);*/
/* 		}*/
/* */
/* 		$datLen = $dp;*/
/* */
/* 		if($iIndex != -2) {*/
/* 			return false;*/
/* 		}*/
/* */
/* 		return $ret;*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* 	function LZWCommandInit(&$data, &$dp)*/
/* 	{*/
/* 			$this->SetCodeSize = ord($data[0]);*/
/* 			$dp += 1;*/
/* */
/* 			$this->CodeSize    = $this->SetCodeSize + 1;*/
/* 			$this->ClearCode   = 1 << $this->SetCodeSize;*/
/* 			$this->EndCode     = $this->ClearCode + 1;*/
/* 			$this->MaxCode     = $this->ClearCode + 2;*/
/* 			$this->MaxCodeSize = $this->ClearCode << 1;*/
/* */
/* 			$this->GetCodeInit($data, $dp);*/
/* */
/* 			$this->Fresh = 1;*/
/* 			for($i = 0; $i < $this->ClearCode; $i++) {*/
/* 				$this->Next[$i] = 0;*/
/* 				$this->Vals[$i] = $i;*/
/* 			}*/
/* */
/* 			for(; $i < (1 << $this->MAX_LZW_BITS); $i++) {*/
/* 				$this->Next[$i] = 0;*/
/* 				$this->Vals[$i] = 0;*/
/* 			}*/
/* */
/* 			$this->sp = 0;*/
/* 			return 1;*/
/* 	}*/
/* */
/* 	function LZWCommand(&$data, &$dp)*/
/* 	{*/
/* 		if($this->Fresh) {*/
/* 			$this->Fresh = 0;*/
/* 			do {*/
/* 				$this->FirstCode = $this->GetCode($data, $dp);*/
/* 				$this->OldCode   = $this->FirstCode;*/
/* 			}*/
/* 			while($this->FirstCode == $this->ClearCode);*/
/* */
/* 			return $this->FirstCode;*/
/* 		}*/
/* */
/* 		if($this->sp > 0) {*/
/* 			$this->sp--;*/
/* 			return $this->Stack[$this->sp];*/
/* 		}*/
/* */
/* 		while(($Code = $this->GetCode($data, $dp)) >= 0) {*/
/* 			if($Code == $this->ClearCode) {*/
/* 				for($i = 0; $i < $this->ClearCode; $i++) {*/
/* 					$this->Next[$i] = 0;*/
/* 					$this->Vals[$i] = $i;*/
/* 				}*/
/* */
/* 				for(; $i < (1 << $this->MAX_LZW_BITS); $i++) {*/
/* 					$this->Next[$i] = 0;*/
/* 					$this->Vals[$i] = 0;*/
/* 				}*/
/* */
/* 				$this->CodeSize    = $this->SetCodeSize + 1;*/
/* 				$this->MaxCodeSize = $this->ClearCode << 1;*/
/* 				$this->MaxCode     = $this->ClearCode + 2;*/
/* 				$this->sp          = 0;*/
/* 				$this->FirstCode   = $this->GetCode($data, $dp);*/
/* 				$this->OldCode     = $this->FirstCode;*/
/* */
/* 				return $this->FirstCode;*/
/* 			}*/
/* */
/* 			if($Code == $this->EndCode) {*/
/* 				return -2;*/
/* 			}*/
/* */
/* 			$InCode = $Code;*/
/* 			if($Code >= $this->MaxCode) {*/
/* 				$this->Stack[$this->sp++] = $this->FirstCode;*/
/* 				$Code = $this->OldCode;*/
/* 			}*/
/* */
/* 			while($Code >= $this->ClearCode) {*/
/* 				$this->Stack[$this->sp++] = $this->Vals[$Code];*/
/* */
/* 				if($Code == $this->Next[$Code]) // Circular table entry, big GIF Error!*/
/* 					return -1;*/
/* */
/* 				$Code = $this->Next[$Code];*/
/* 			}*/
/* */
/* 			$this->FirstCode = $this->Vals[$Code];*/
/* 			$this->Stack[$this->sp++] = $this->FirstCode;*/
/* */
/* 			if(($Code = $this->MaxCode) < (1 << $this->MAX_LZW_BITS)) {*/
/* 				$this->Next[$Code] = $this->OldCode;*/
/* 				$this->Vals[$Code] = $this->FirstCode;*/
/* 				$this->MaxCode++;*/
/* */
/* 				if(($this->MaxCode >= $this->MaxCodeSize) && ($this->MaxCodeSize < (1 << $this->MAX_LZW_BITS))) {*/
/* 					$this->MaxCodeSize *= 2;*/
/* 					$this->CodeSize++;*/
/* 				}*/
/* 			}*/
/* */
/* 			$this->OldCode = $InCode;*/
/* 			if($this->sp > 0) {*/
/* 				$this->sp--;*/
/* 				return $this->Stack[$this->sp];*/
/* 			}*/
/* 		}*/
/* */
/* 		return $Code;*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function GetCodeInit(&$data, &$dp)*/
/* 	{*/
/* 			$this->CurBit   = 0;*/
/* 			$this->LastBit  = 0;*/
/* 			$this->Done     = 0;*/
/* 			$this->LastByte = 2;*/
/* 			return 1;*/
/* 	}*/
/* */
/* 	function GetCode(&$data, &$dp)*/
/* 	{*/
/* 		if(($this->CurBit + $this->CodeSize) >= $this->LastBit) {*/
/* 			if($this->Done) {*/
/* 				if($this->CurBit >= $this->LastBit) {*/
/* 					// Ran off the end of my bits*/
/* 					return 0;*/
/* 				}*/
/* 				return -1;*/
/* 			}*/
/* */
/* 			$this->Buf[0] = $this->Buf[$this->LastByte - 2];*/
/* 			$this->Buf[1] = $this->Buf[$this->LastByte - 1];*/
/* */
/* 			$Count = ord($data[$dp]);*/
/* 			$dp += 1;*/
/* */
/* 			if($Count) {*/
/* 				for($i = 0; $i < $Count; $i++) {*/
/* 					$this->Buf[2 + $i] = ord($data[$dp+$i]);*/
/* 				}*/
/* 				$dp += $Count;*/
/* 			}*/
/* 			else {*/
/* 				$this->Done = 1;*/
/* 			}*/
/* */
/* 			$this->LastByte = 2 + $Count;*/
/* 			$this->CurBit   = ($this->CurBit - $this->LastBit) + 16;*/
/* 			$this->LastBit  = (2 + $Count) << 3;*/
/* 		}*/
/* */
/* 		$iRet = 0;*/
/* 		for($i = $this->CurBit, $j = 0; $j < $this->CodeSize; $i++, $j++) {*/
/* 			$iRet |= (($this->Buf[intval($i / 8)] & (1 << ($i % 8))) != 0) << $j;*/
/* 		}*/
/* */
/* 		$this->CurBit += $this->CodeSize;*/
/* 		return $iRet;*/
/* 	}*/
/* }*/
/* */
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* */
/* class CGIFCOLORTABLE*/
/* {*/
/* 	var $m_nColors;*/
/* 	var $m_arColors;*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	// CONSTRUCTOR*/
/* 	function CGIFCOLORTABLE()*/
/* 	{*/
/* 		unSet($this->m_nColors);*/
/* 		unSet($this->m_arColors);*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function load($lpData, $num)*/
/* 	{*/
/* 		$this->m_nColors  = 0;*/
/* 		$this->m_arColors = array();*/
/* */
/* 		for($i = 0; $i < $num; $i++) {*/
/* 			$rgb = substr($lpData, $i * 3, 3);*/
/* 			if(strlen($rgb) < 3) {*/
/* 				return false;*/
/* 			}*/
/* */
/* 			$this->m_arColors[] = (ord($rgb[2]) << 16) + (ord($rgb[1]) << 8) + ord($rgb[0]);*/
/* 			$this->m_nColors++;*/
/* 		}*/
/* */
/* 		return true;*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function toString()*/
/* 	{*/
/* 		$ret = "";*/
/* */
/* 		for($i = 0; $i < $this->m_nColors; $i++) {*/
/* 			$ret .=*/
/* 				chr(($this->m_arColors[$i] & 0x000000FF))       . // R*/
/* 				chr(($this->m_arColors[$i] & 0x0000FF00) >>  8) . // G*/
/* 				chr(($this->m_arColors[$i] & 0x00FF0000) >> 16);  // B*/
/* 		}*/
/* */
/* 		return $ret;*/
/* 	}*/
/* */
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function colorIndex($rgb)*/
/* 	{*/
/* 		$rgb  = intval($rgb) & 0xFFFFFF;*/
/* 		$r1   = ($rgb & 0x0000FF);*/
/* 		$g1   = ($rgb & 0x00FF00) >>  8;*/
/* 		$b1   = ($rgb & 0xFF0000) >> 16;*/
/* 		$idx  = -1;*/
/* */
/* 		for($i = 0; $i < $this->m_nColors; $i++) {*/
/* 			$r2 = ($this->m_arColors[$i] & 0x000000FF);*/
/* 			$g2 = ($this->m_arColors[$i] & 0x0000FF00) >>  8;*/
/* 			$b2 = ($this->m_arColors[$i] & 0x00FF0000) >> 16;*/
/* 			$d  = abs($r2 - $r1) + abs($g2 - $g1) + abs($b2 - $b1);*/
/* */
/* 			if(($idx == -1) || ($d < $dif)) {*/
/* 				$idx = $i;*/
/* 				$dif = $d;*/
/* 			}*/
/* 		}*/
/* */
/* 		return $idx;*/
/* 	}*/
/* }*/
/* */
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* */
/* class CGIFFILEHEADER*/
/* {*/
/* 	var $m_lpVer;*/
/* 	var $m_nWidth;*/
/* 	var $m_nHeight;*/
/* 	var $m_bGlobalClr;*/
/* 	var $m_nColorRes;*/
/* 	var $m_bSorted;*/
/* 	var $m_nTableSize;*/
/* 	var $m_nBgColor;*/
/* 	var $m_nPixelRatio;*/
/* 	var $m_colorTable;*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	// CONSTRUCTOR*/
/* 	function CGIFFILEHEADER()*/
/* 	{*/
/* 		unSet($this->m_lpVer);*/
/* 		unSet($this->m_nWidth);*/
/* 		unSet($this->m_nHeight);*/
/* 		unSet($this->m_bGlobalClr);*/
/* 		unSet($this->m_nColorRes);*/
/* 		unSet($this->m_bSorted);*/
/* 		unSet($this->m_nTableSize);*/
/* 		unSet($this->m_nBgColor);*/
/* 		unSet($this->m_nPixelRatio);*/
/* 		unSet($this->m_colorTable);*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function load($lpData, &$hdrLen)*/
/* 	{*/
/* 		$hdrLen = 0;*/
/* */
/* 		$this->m_lpVer = substr($lpData, 0, 6);*/
/* 		if(($this->m_lpVer <> "GIF87a") && ($this->m_lpVer <> "GIF89a")) {*/
/* 			return false;*/
/* 		}*/
/* */
/* 		$this->m_nWidth  = $this->w2i(substr($lpData, 6, 2));*/
/* 		$this->m_nHeight = $this->w2i(substr($lpData, 8, 2));*/
/* 		if(!$this->m_nWidth || !$this->m_nHeight) {*/
/* 			return false;*/
/* 		}*/
/* */
/* 		$b = ord(substr($lpData, 10, 1));*/
/* 		$this->m_bGlobalClr  = ($b & 0x80) ? true : false;*/
/* 		$this->m_nColorRes   = ($b & 0x70) >> 4;*/
/* 		$this->m_bSorted     = ($b & 0x08) ? true : false;*/
/* 		$this->m_nTableSize  = 2 << ($b & 0x07);*/
/* 		$this->m_nBgColor    = ord(substr($lpData, 11, 1));*/
/* 		$this->m_nPixelRatio = ord(substr($lpData, 12, 1));*/
/* 		$hdrLen = 13;*/
/* */
/* 		if($this->m_bGlobalClr) {*/
/* 			$this->m_colorTable = new CGIFCOLORTABLE();*/
/* 			if(!$this->m_colorTable->load(substr($lpData, $hdrLen), $this->m_nTableSize)) {*/
/* 				return false;*/
/* 			}*/
/* 			$hdrLen += 3 * $this->m_nTableSize;*/
/* 		}*/
/* */
/* 		return true;*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function w2i($str)*/
/* 	{*/
/* 		return ord(substr($str, 0, 1)) + (ord(substr($str, 1, 1)) << 8);*/
/* 	}*/
/* }*/
/* */
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* */
/* class CGIFIMAGEHEADER*/
/* {*/
/* 	var $m_nLeft;*/
/* 	var $m_nTop;*/
/* 	var $m_nWidth;*/
/* 	var $m_nHeight;*/
/* 	var $m_bLocalClr;*/
/* 	var $m_bInterlace;*/
/* 	var $m_bSorted;*/
/* 	var $m_nTableSize;*/
/* 	var $m_colorTable;*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	// CONSTRUCTOR*/
/* 	function CGIFIMAGEHEADER()*/
/* 	{*/
/* 		unSet($this->m_nLeft);*/
/* 		unSet($this->m_nTop);*/
/* 		unSet($this->m_nWidth);*/
/* 		unSet($this->m_nHeight);*/
/* 		unSet($this->m_bLocalClr);*/
/* 		unSet($this->m_bInterlace);*/
/* 		unSet($this->m_bSorted);*/
/* 		unSet($this->m_nTableSize);*/
/* 		unSet($this->m_colorTable);*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function load($lpData, &$hdrLen)*/
/* 	{*/
/* 		$hdrLen = 0;*/
/* */
/* 		$this->m_nLeft   = $this->w2i(substr($lpData, 0, 2));*/
/* 		$this->m_nTop    = $this->w2i(substr($lpData, 2, 2));*/
/* 		$this->m_nWidth  = $this->w2i(substr($lpData, 4, 2));*/
/* 		$this->m_nHeight = $this->w2i(substr($lpData, 6, 2));*/
/* */
/* 		if(!$this->m_nWidth || !$this->m_nHeight) {*/
/* 			return false;*/
/* 		}*/
/* */
/* 		$b = ord($lpData{8});*/
/* 		$this->m_bLocalClr  = ($b & 0x80) ? true : false;*/
/* 		$this->m_bInterlace = ($b & 0x40) ? true : false;*/
/* 		$this->m_bSorted    = ($b & 0x20) ? true : false;*/
/* 		$this->m_nTableSize = 2 << ($b & 0x07);*/
/* 		$hdrLen = 9;*/
/* */
/* 		if($this->m_bLocalClr) {*/
/* 			$this->m_colorTable = new CGIFCOLORTABLE();*/
/* 			if(!$this->m_colorTable->load(substr($lpData, $hdrLen), $this->m_nTableSize)) {*/
/* 				return false;*/
/* 			}*/
/* 			$hdrLen += 3 * $this->m_nTableSize;*/
/* 		}*/
/* */
/* 		return true;*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function w2i($str)*/
/* 	{*/
/* 		return ord(substr($str, 0, 1)) + (ord(substr($str, 1, 1)) << 8);*/
/* 	}*/
/* }*/
/* */
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* */
/* class CGIFIMAGE*/
/* {*/
/* 	var $m_disp;*/
/* 	var $m_bUser;*/
/* 	var $m_bTrans;*/
/* 	var $m_nDelay;*/
/* 	var $m_nTrans;*/
/* 	var $m_lpComm;*/
/* 	var $m_gih;*/
/* 	var $m_data;*/
/* 	var $m_lzw;*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function CGIFIMAGE()*/
/* 	{*/
/* 		unSet($this->m_disp);*/
/* 		unSet($this->m_bUser);*/
/* 		unSet($this->m_bTrans);*/
/* 		unSet($this->m_nDelay);*/
/* 		unSet($this->m_nTrans);*/
/* 		unSet($this->m_lpComm);*/
/* 		unSet($this->m_data);*/
/* 		$this->m_gih = new CGIFIMAGEHEADER();*/
/* 		$this->m_lzw = new CGIFLZW();*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function load($data, &$datLen)*/
/* 	{*/
/* 		$datLen = 0;*/
/* */
/* 		while(true) {*/
/* 			$b = ord($data[0]);*/
/* 			$data = substr($data, 1);*/
/* 			$datLen++;*/
/* */
/* 			switch($b) {*/
/* 			case 0x21: // Extension*/
/* 				$len = 0;*/
/* 				if(!$this->skipExt($data, $len)) {*/
/* 					return false;*/
/* 				}*/
/* 				$datLen += $len;*/
/* 				break;*/
/* */
/* 			case 0x2C: // Image*/
/* 				// LOAD HEADER & COLOR TABLE*/
/* 				$len = 0;*/
/* 				if(!$this->m_gih->load($data, $len)) {*/
/* 					return false;*/
/* 				}*/
/* 				$data = substr($data, $len);*/
/* 				$datLen += $len;*/
/* */
/* 				// ALLOC BUFFER*/
/* 				$len = 0;*/
/* */
/* 				if(!($this->m_data = $this->m_lzw->deCompress($data, $len))) {*/
/* 					return false;*/
/* 				}*/
/* */
/* 				$data = substr($data, $len);*/
/* 				$datLen += $len;*/
/* */
/* 				if($this->m_gih->m_bInterlace) {*/
/* 					$this->deInterlace();*/
/* 				}*/
/* */
/* 				return true;*/
/* */
/* 			case 0x3B: // EOF*/
/* 			default:*/
/* 				return false;*/
/* 			}*/
/* 		}*/
/* 		return false;*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function skipExt(&$data, &$extLen)*/
/* 	{*/
/* 		$extLen = 0;*/
/* */
/* 		$b = ord($data[0]);*/
/* 		$data = substr($data, 1);*/
/* 		$extLen++;*/
/* */
/* 		switch($b) {*/
/* 		case 0xF9: // Graphic Control*/
/* 			$b = ord($data[1]);*/
/* 			$this->m_disp   = ($b & 0x1C) >> 2;*/
/* 			$this->m_bUser  = ($b & 0x02) ? true : false;*/
/* 			$this->m_bTrans = ($b & 0x01) ? true : false;*/
/* 			$this->m_nDelay = $this->w2i(substr($data, 2, 2));*/
/* 			$this->m_nTrans = ord($data[4]);*/
/* 			break;*/
/* */
/* 		case 0xFE: // Comment*/
/* 			$this->m_lpComm = substr($data, 1, ord($data[0]));*/
/* 			break;*/
/* */
/* 		case 0x01: // Plain text*/
/* 			break;*/
/* */
/* 		case 0xFF: // Application*/
/* 			break;*/
/* 		}*/
/* */
/* 		// SKIP DEFAULT AS DEFS MAY CHANGE*/
/* 		$b = ord($data[0]);*/
/* 		$data = substr($data, 1);*/
/* 		$extLen++;*/
/* 		while($b > 0) {*/
/* 			$data = substr($data, $b);*/
/* 			$extLen += $b;*/
/* 			$b    = ord($data[0]);*/
/* 			$data = substr($data, 1);*/
/* 			$extLen++;*/
/* 		}*/
/* 		return true;*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function w2i($str)*/
/* 	{*/
/* 		return ord(substr($str, 0, 1)) + (ord(substr($str, 1, 1)) << 8);*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	function deInterlace()*/
/* 	{*/
/* 		$data = $this->m_data;*/
/* */
/* 		for($i = 0; $i < 4; $i++) {*/
/* 			switch($i) {*/
/* 			case 0:*/
/* 				$s = 8;*/
/* 				$y = 0;*/
/* 				break;*/
/* */
/* 			case 1:*/
/* 				$s = 8;*/
/* 				$y = 4;*/
/* 				break;*/
/* */
/* 			case 2:*/
/* 				$s = 4;*/
/* 				$y = 2;*/
/* 				break;*/
/* */
/* 			case 3:*/
/* 				$s = 2;*/
/* 				$y = 1;*/
/* 				break;*/
/* 			}*/
/* */
/* 			for(; $y < $this->m_gih->m_nHeight; $y += $s) {*/
/* 				$lne = substr($this->m_data, 0, $this->m_gih->m_nWidth);*/
/* 				$this->m_data = substr($this->m_data, $this->m_gih->m_nWidth);*/
/* */
/* 				$data =*/
/* 					substr($data, 0, $y * $this->m_gih->m_nWidth) .*/
/* 					$lne .*/
/* 					substr($data, ($y + 1) * $this->m_gih->m_nWidth);*/
/* 			}*/
/* 		}*/
/* */
/* 		$this->m_data = $data;*/
/* 	}*/
/* }*/
/* */
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* */
/* class CGIF*/
/* {*/
/* 	var $m_gfh;*/
/* 	var $m_lpData;*/
/* 	var $m_img;*/
/* 	var $m_bLoaded;*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* */
/* 	// CONSTRUCTOR*/
/* 	function CGIF()*/
/* 	{*/
/* 		$this->m_gfh     = new CGIFFILEHEADER();*/
/* 		$this->m_img     = new CGIFIMAGE();*/
/* 		$this->m_lpData  = "";*/
/* 		$this->m_bLoaded = false;*/
/* 	}*/
/* */
/* 	///////////////////////////////////////////////////////////////////////////*/
/* 	function ClearData() {*/
/* 		$this->m_lpData = '';*/
/* 		unSet($this->m_img->m_data);*/
/* 		unSet($this->m_img->m_lzw->Next);*/
/* 		unSet($this->m_img->m_lzw->Vals);*/
/* 		unSet($this->m_img->m_lzw->Stack);*/
/* 		unSet($this->m_img->m_lzw->Buf);*/
/* 	}*/
/* */
/* 	function loadFile(&$data, $iIndex)*/
/* 	{*/
/* 		if($iIndex < 0) {*/
/* 			return false;*/
/* 		}*/
/* 		$this->m_lpData = $data;*/
/* */
/* 		// GET FILE HEADER*/
/* 		$len = 0;*/
/* 		if(!$this->m_gfh->load($this->m_lpData, $len)) {*/
/* 			return false;*/
/* 		}*/
/* */
/* 		$this->m_lpData = substr($this->m_lpData, $len);*/
/* */
/* 		do {*/
/* 			$imgLen = 0;*/
/* 			if(!$this->m_img->load($this->m_lpData, $imgLen)) {*/
/* 				return false;*/
/* 			}*/
/* 			$this->m_lpData = substr($this->m_lpData, $imgLen);*/
/* 		}*/
/* 		while($iIndex-- > 0);*/
/* */
/* 		$this->m_bLoaded = true;*/
/* 		return true;*/
/* 	}*/
/* */
/* }*/
/* */
/* ///////////////////////////////////////////////////////////////////////////////////////////////////*/
/* */
/* ?>*/
