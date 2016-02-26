<?php

/* support/include/mpdf/classes/bmp.php */
class __TwigTemplate_1d66a2d6fdc2cc2805f4426553ed17f502b15ae84d999b7f06956affef56b850 extends Twig_Template
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

class bmp {

var \$mpdf = null;

function bmp(&\$mpdf) {
\t\$this->mpdf = \$mpdf;
}


function _getBMPimage(\$data, \$file) {
\t\$info = array();
\t\t// Adapted from script by Valentin Schmidt
\t\t// http://staff.dasdeck.de/valentin/fpdf/fpdf_bmp/
\t\t\$bfOffBits=\$this->_fourbytes2int_le(substr(\$data,10,4));
\t\t\$width=\$this->_fourbytes2int_le(substr(\$data,18,4));
\t\t\$height=\$this->_fourbytes2int_le(substr(\$data,22,4));
\t\t\$flip = (\$height<0);
\t\tif (\$flip) \$height =-\$height;
\t\t\$biBitCount=\$this->_twobytes2int_le(substr(\$data,28,2));
\t\t\$biCompression=\$this->_fourbytes2int_le(substr(\$data,30,4)); 
\t\t\$info = array('w'=>\$width, 'h'=>\$height);
\t\tif (\$biBitCount<16){
\t\t\t\$info['cs'] = 'Indexed';
\t\t\t\$info['bpc'] = \$biBitCount;
\t\t\t\$palStr = substr(\$data,54,(\$bfOffBits-54));
\t\t\t\$pal = '';
\t\t\t\$cnt = strlen(\$palStr)/4;
\t\t\tfor (\$i=0;\$i<\$cnt;\$i++){
\t\t\t\t\$n = 4*\$i;
\t\t\t\t\$pal .= \$palStr[\$n+2].\$palStr[\$n+1].\$palStr[\$n];
\t\t\t}
\t\t\t\$info['pal'] = \$pal;
\t\t}
\t\telse{
\t\t\t\$info['cs'] = 'DeviceRGB';
\t\t\t\$info['bpc'] = 8;
\t\t}

\t\tif (\$this->mpdf->restrictColorSpace==1 || \$this->mpdf->PDFX || \$this->mpdf->restrictColorSpace==3) {
\t\t\tif ((\$this->mpdf->PDFA && !\$this->mpdf->PDFAauto) || (\$this->mpdf->PDFX && !\$this->mpdf->PDFXauto)) { \$this->mpdf->PDFAXwarnings[] = \"Image cannot be converted to suitable colour space for PDFA or PDFX file - \".\$file.\" - (Image replaced by 'no-image'.)\"; }
\t\t\treturn array('error' => \"BMP Image cannot be converted to suitable colour space - \".\$file.\" - (Image replaced by 'no-image'.)\"); 
\t\t}

\t\t\$biXPelsPerMeter=\$this->_fourbytes2int_le(substr(\$data,38,4));\t// horizontal pixels per meter, usually set to zero
\t\t//\$biYPelsPerMeter=\$this->_fourbytes2int_le(substr(\$data,42,4));\t// vertical pixels per meter, usually set to zero
\t\t\$biXPelsPerMeter=round(\$biXPelsPerMeter/1000 *25.4);
\t\t//\$biYPelsPerMeter=round(\$biYPelsPerMeter/1000 *25.4);
\t\t\$info['set-dpi'] = \$biXPelsPerMeter; 

\t\tswitch (\$biCompression){
\t\t  case 0:
\t\t\t\$str = substr(\$data,\$bfOffBits);
\t\t\tbreak;
\t\t  case 1: # BI_RLE8
\t\t\t\$str = \$this->rle8_decode(substr(\$data,\$bfOffBits), \$width);
\t\t\tbreak;
\t\t  case 2: # BI_RLE4
\t\t\t\$str = \$this->rle4_decode(substr(\$data,\$bfOffBits), \$width);
\t\t\tbreak;
\t\t}
\t\t\$bmpdata = '';
\t\t\$padCnt = (4-ceil((\$width/(8/\$biBitCount)))%4)%4;
\t\tswitch (\$biBitCount){
\t\t  case 1:
\t\t  case 4:
\t\t  case 8:
\t\t\t\$w = floor(\$width/(8/\$biBitCount)) + (\$width%(8/\$biBitCount)?1:0);
\t\t\t\$w_row = \$w + \$padCnt;
\t\t\tif (\$flip){
\t\t\t\tfor (\$y=0;\$y<\$height;\$y++){
\t\t\t\t\t\$y0 = \$y*\$w_row;
\t\t\t\t\tfor (\$x=0;\$x<\$w;\$x++)
\t\t\t\t\t\t\$bmpdata .= \$str[\$y0+\$x];
\t\t\t\t}
\t\t\t}else{
\t\t\t\tfor (\$y=\$height-1;\$y>=0;\$y--){
\t\t\t\t\t\$y0 = \$y*\$w_row;
\t\t\t\t\tfor (\$x=0;\$x<\$w;\$x++)
\t\t\t\t\t\t\$bmpdata .= \$str[\$y0+\$x];
\t\t\t\t}
\t\t\t}
\t\t\tbreak;

\t\t  case 16:
\t\t\t\$w_row = \$width*2 + \$padCnt;
\t\t\tif (\$flip){
\t\t\t\tfor (\$y=0;\$y<\$height;\$y++){
\t\t\t\t\t\$y0 = \$y*\$w_row;
\t\t\t\t\tfor (\$x=0;\$x<\$width;\$x++){
\t\t\t\t\t\t\$n = (ord( \$str[\$y0 + 2*\$x + 1])*256 +    ord( \$str[\$y0 + 2*\$x]));
\t\t\t\t\t\t\$b = (\$n & 31)<<3; \$g = (\$n & 992)>>2; \$r = (\$n & 31744)>>7128;
\t\t\t\t\t\t\$bmpdata .= chr(\$r) . chr(\$g) . chr(\$b);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}else{
\t\t\t\tfor (\$y=\$height-1;\$y>=0;\$y--){
\t\t\t\t\t\$y0 = \$y*\$w_row;
\t\t\t\t\tfor (\$x=0;\$x<\$width;\$x++){
\t\t\t\t\t\t\$n = (ord( \$str[\$y0 + 2*\$x + 1])*256 +    ord( \$str[\$y0 + 2*\$x]));
\t\t\t\t\t\t\$b = (\$n & 31)<<3; \$g = (\$n & 992)>>2; \$r = (\$n & 31744)>>7;
\t\t\t\t\t\t\$bmpdata .= chr(\$r) . chr(\$g) . chr(\$b);
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tbreak;

\t\t  case 24:
\t\t  case 32:
\t\t\t\$byteCnt = \$biBitCount/8;
\t\t\t\$w_row = \$width*\$byteCnt + \$padCnt;

\t\t\tif (\$flip){
\t\t\t\tfor (\$y=0;\$y<\$height;\$y++){
\t\t\t\t\t\$y0 = \$y*\$w_row;
\t\t\t\t\tfor (\$x=0;\$x<\$width;\$x++){
\t\t\t\t\t\t\$i = \$y0 + \$x*\$byteCnt ; # + 1
\t\t\t\t\t\t\$bmpdata .= \$str[\$i+2].\$str[\$i+1].\$str[\$i];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}else{
\t\t\t\tfor (\$y=\$height-1;\$y>=0;\$y--){
\t\t\t\t\t\$y0 = \$y*\$w_row;
\t\t\t\t\tfor (\$x=0;\$x<\$width;\$x++){
\t\t\t\t\t\t\$i = \$y0 + \$x*\$byteCnt ; # + 1
\t\t\t\t\t\t\$bmpdata .= \$str[\$i+2].\$str[\$i+1].\$str[\$i];
\t\t\t\t\t}
\t\t\t\t}
\t\t\t}
\t\t\tbreak;

\t\t  default:
\t\t\treturn array('error' => 'Error parsing BMP image - Unsupported image biBitCount'); 
\t\t}
\t\tif (\$this->mpdf->compress) {
\t\t\t\$bmpdata=gzcompress(\$bmpdata);
\t\t\t\$info['f']='FlateDecode';
\t\t} 
\t\t\$info['data']=\$bmpdata;
\t\t\$info['type']='bmp';
\t\treturn \$info;
}

function _fourbytes2int_le(\$s) {
\t//Read a 4-byte integer from string
\treturn (ord(\$s[3])<<24) + (ord(\$s[2])<<16) + (ord(\$s[1])<<8) + ord(\$s[0]);
}

function _twobytes2int_le(\$s) {
\t//Read a 2-byte integer from string
\treturn (ord(substr(\$s, 1, 1))<<8) + ord(substr(\$s, 0, 1));
}


# Decoder for RLE8 compression in windows bitmaps
# see http://msdn.microsoft.com/library/default.asp?url=/library/en-us/gdi/bitmaps_6x0u.asp
function rle8_decode (\$str, \$width){
    \$lineWidth = \$width + (3 - (\$width-1) % 4);
    \$out = '';
    \$cnt = strlen(\$str);
    for (\$i=0;\$i<\$cnt;\$i++){
        \$o = ord(\$str[\$i]);
        switch (\$o){
            case 0: # ESCAPE
                \$i++;
                switch (ord(\$str[\$i])){
                    case 0: # NEW LINE
                         \$padCnt = \$lineWidth - strlen(\$out)%\$lineWidth;
                        if (\$padCnt<\$lineWidth) \$out .= str_repeat(chr(0), \$padCnt); # pad line
                        break;
                    case 1: # END OF FILE
                        \$padCnt = \$lineWidth - strlen(\$out)%\$lineWidth;
                        if (\$padCnt<\$lineWidth) \$out .= str_repeat(chr(0), \$padCnt); # pad line
                         break 3;
                    case 2: # DELTA
                        \$i += 2;
                        break;
                    default: # ABSOLUTE MODE
                        \$num = ord(\$str[\$i]);
                        for (\$j=0;\$j<\$num;\$j++)
                            \$out .= \$str[++\$i];
                        if (\$num % 2) \$i++;
             }
                break;
            default:
                \$out .= str_repeat(\$str[++\$i], \$o);
        }
    }
    return \$out;
}

# Decoder for RLE4 compression in windows bitmaps
# see http://msdn.microsoft.com/library/default.asp?url=/library/en-us/gdi/bitmaps_6x0u.asp
function rle4_decode (\$str, \$width){
    \$w = floor(\$width/2) + (\$width % 2);
    \$lineWidth = \$w + (3 - ( (\$width-1) / 2) % 4);    
    \$pixels = array();
    \$cnt = strlen(\$str);
    for (\$i=0;\$i<\$cnt;\$i++){
        \$o = ord(\$str[\$i]);
        switch (\$o){
            case 0: # ESCAPE
                \$i++;
                switch (ord(\$str[\$i])){
                    case 0: # NEW LINE                        
                        while (count(\$pixels)%\$lineWidth!=0)
                            \$pixels[]=0;
                        break;
                    case 1: # END OF FILE
                        while (count(\$pixels)%\$lineWidth!=0)
                            \$pixels[]=0;
                        break 3;
                    case 2: # DELTA
                        \$i += 2;
                        break;
                    default: # ABSOLUTE MODE
                        \$num = ord(\$str[\$i]);
                        for (\$j=0;\$j<\$num;\$j++){
                            if (\$j%2==0){
                                \$c = ord(\$str[++\$i]);
                              \$pixels[] = (\$c & 240)>>4;
                             } else
                              \$pixels[] = \$c & 15;
                        }
                        if (\$num % 2) \$i++;
             }
                break;
            default:
                \$c = ord(\$str[++\$i]);
                for (\$j=0;\$j<\$o;\$j++)
                    \$pixels[] = (\$j%2==0 ? (\$c & 240)>>4 : \$c & 15);
        }
    }
    
    \$out = '';
    if (count(\$pixels)%2) \$pixels[]=0;
    \$cnt = count(\$pixels)/2;
    for (\$i=0;\$i<\$cnt;\$i++)
        \$out .= chr(16*\$pixels[2*\$i] + \$pixels[2*\$i+1]);
    return \$out;
} 



}

?>";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/classes/bmp.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <?php*/
/* */
/* class bmp {*/
/* */
/* var $mpdf = null;*/
/* */
/* function bmp(&$mpdf) {*/
/* 	$this->mpdf = $mpdf;*/
/* }*/
/* */
/* */
/* function _getBMPimage($data, $file) {*/
/* 	$info = array();*/
/* 		// Adapted from script by Valentin Schmidt*/
/* 		// http://staff.dasdeck.de/valentin/fpdf/fpdf_bmp/*/
/* 		$bfOffBits=$this->_fourbytes2int_le(substr($data,10,4));*/
/* 		$width=$this->_fourbytes2int_le(substr($data,18,4));*/
/* 		$height=$this->_fourbytes2int_le(substr($data,22,4));*/
/* 		$flip = ($height<0);*/
/* 		if ($flip) $height =-$height;*/
/* 		$biBitCount=$this->_twobytes2int_le(substr($data,28,2));*/
/* 		$biCompression=$this->_fourbytes2int_le(substr($data,30,4)); */
/* 		$info = array('w'=>$width, 'h'=>$height);*/
/* 		if ($biBitCount<16){*/
/* 			$info['cs'] = 'Indexed';*/
/* 			$info['bpc'] = $biBitCount;*/
/* 			$palStr = substr($data,54,($bfOffBits-54));*/
/* 			$pal = '';*/
/* 			$cnt = strlen($palStr)/4;*/
/* 			for ($i=0;$i<$cnt;$i++){*/
/* 				$n = 4*$i;*/
/* 				$pal .= $palStr[$n+2].$palStr[$n+1].$palStr[$n];*/
/* 			}*/
/* 			$info['pal'] = $pal;*/
/* 		}*/
/* 		else{*/
/* 			$info['cs'] = 'DeviceRGB';*/
/* 			$info['bpc'] = 8;*/
/* 		}*/
/* */
/* 		if ($this->mpdf->restrictColorSpace==1 || $this->mpdf->PDFX || $this->mpdf->restrictColorSpace==3) {*/
/* 			if (($this->mpdf->PDFA && !$this->mpdf->PDFAauto) || ($this->mpdf->PDFX && !$this->mpdf->PDFXauto)) { $this->mpdf->PDFAXwarnings[] = "Image cannot be converted to suitable colour space for PDFA or PDFX file - ".$file." - (Image replaced by 'no-image'.)"; }*/
/* 			return array('error' => "BMP Image cannot be converted to suitable colour space - ".$file." - (Image replaced by 'no-image'.)"); */
/* 		}*/
/* */
/* 		$biXPelsPerMeter=$this->_fourbytes2int_le(substr($data,38,4));	// horizontal pixels per meter, usually set to zero*/
/* 		//$biYPelsPerMeter=$this->_fourbytes2int_le(substr($data,42,4));	// vertical pixels per meter, usually set to zero*/
/* 		$biXPelsPerMeter=round($biXPelsPerMeter/1000 *25.4);*/
/* 		//$biYPelsPerMeter=round($biYPelsPerMeter/1000 *25.4);*/
/* 		$info['set-dpi'] = $biXPelsPerMeter; */
/* */
/* 		switch ($biCompression){*/
/* 		  case 0:*/
/* 			$str = substr($data,$bfOffBits);*/
/* 			break;*/
/* 		  case 1: # BI_RLE8*/
/* 			$str = $this->rle8_decode(substr($data,$bfOffBits), $width);*/
/* 			break;*/
/* 		  case 2: # BI_RLE4*/
/* 			$str = $this->rle4_decode(substr($data,$bfOffBits), $width);*/
/* 			break;*/
/* 		}*/
/* 		$bmpdata = '';*/
/* 		$padCnt = (4-ceil(($width/(8/$biBitCount)))%4)%4;*/
/* 		switch ($biBitCount){*/
/* 		  case 1:*/
/* 		  case 4:*/
/* 		  case 8:*/
/* 			$w = floor($width/(8/$biBitCount)) + ($width%(8/$biBitCount)?1:0);*/
/* 			$w_row = $w + $padCnt;*/
/* 			if ($flip){*/
/* 				for ($y=0;$y<$height;$y++){*/
/* 					$y0 = $y*$w_row;*/
/* 					for ($x=0;$x<$w;$x++)*/
/* 						$bmpdata .= $str[$y0+$x];*/
/* 				}*/
/* 			}else{*/
/* 				for ($y=$height-1;$y>=0;$y--){*/
/* 					$y0 = $y*$w_row;*/
/* 					for ($x=0;$x<$w;$x++)*/
/* 						$bmpdata .= $str[$y0+$x];*/
/* 				}*/
/* 			}*/
/* 			break;*/
/* */
/* 		  case 16:*/
/* 			$w_row = $width*2 + $padCnt;*/
/* 			if ($flip){*/
/* 				for ($y=0;$y<$height;$y++){*/
/* 					$y0 = $y*$w_row;*/
/* 					for ($x=0;$x<$width;$x++){*/
/* 						$n = (ord( $str[$y0 + 2*$x + 1])*256 +    ord( $str[$y0 + 2*$x]));*/
/* 						$b = ($n & 31)<<3; $g = ($n & 992)>>2; $r = ($n & 31744)>>7128;*/
/* 						$bmpdata .= chr($r) . chr($g) . chr($b);*/
/* 					}*/
/* 				}*/
/* 			}else{*/
/* 				for ($y=$height-1;$y>=0;$y--){*/
/* 					$y0 = $y*$w_row;*/
/* 					for ($x=0;$x<$width;$x++){*/
/* 						$n = (ord( $str[$y0 + 2*$x + 1])*256 +    ord( $str[$y0 + 2*$x]));*/
/* 						$b = ($n & 31)<<3; $g = ($n & 992)>>2; $r = ($n & 31744)>>7;*/
/* 						$bmpdata .= chr($r) . chr($g) . chr($b);*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			break;*/
/* */
/* 		  case 24:*/
/* 		  case 32:*/
/* 			$byteCnt = $biBitCount/8;*/
/* 			$w_row = $width*$byteCnt + $padCnt;*/
/* */
/* 			if ($flip){*/
/* 				for ($y=0;$y<$height;$y++){*/
/* 					$y0 = $y*$w_row;*/
/* 					for ($x=0;$x<$width;$x++){*/
/* 						$i = $y0 + $x*$byteCnt ; # + 1*/
/* 						$bmpdata .= $str[$i+2].$str[$i+1].$str[$i];*/
/* 					}*/
/* 				}*/
/* 			}else{*/
/* 				for ($y=$height-1;$y>=0;$y--){*/
/* 					$y0 = $y*$w_row;*/
/* 					for ($x=0;$x<$width;$x++){*/
/* 						$i = $y0 + $x*$byteCnt ; # + 1*/
/* 						$bmpdata .= $str[$i+2].$str[$i+1].$str[$i];*/
/* 					}*/
/* 				}*/
/* 			}*/
/* 			break;*/
/* */
/* 		  default:*/
/* 			return array('error' => 'Error parsing BMP image - Unsupported image biBitCount'); */
/* 		}*/
/* 		if ($this->mpdf->compress) {*/
/* 			$bmpdata=gzcompress($bmpdata);*/
/* 			$info['f']='FlateDecode';*/
/* 		} */
/* 		$info['data']=$bmpdata;*/
/* 		$info['type']='bmp';*/
/* 		return $info;*/
/* }*/
/* */
/* function _fourbytes2int_le($s) {*/
/* 	//Read a 4-byte integer from string*/
/* 	return (ord($s[3])<<24) + (ord($s[2])<<16) + (ord($s[1])<<8) + ord($s[0]);*/
/* }*/
/* */
/* function _twobytes2int_le($s) {*/
/* 	//Read a 2-byte integer from string*/
/* 	return (ord(substr($s, 1, 1))<<8) + ord(substr($s, 0, 1));*/
/* }*/
/* */
/* */
/* # Decoder for RLE8 compression in windows bitmaps*/
/* # see http://msdn.microsoft.com/library/default.asp?url=/library/en-us/gdi/bitmaps_6x0u.asp*/
/* function rle8_decode ($str, $width){*/
/*     $lineWidth = $width + (3 - ($width-1) % 4);*/
/*     $out = '';*/
/*     $cnt = strlen($str);*/
/*     for ($i=0;$i<$cnt;$i++){*/
/*         $o = ord($str[$i]);*/
/*         switch ($o){*/
/*             case 0: # ESCAPE*/
/*                 $i++;*/
/*                 switch (ord($str[$i])){*/
/*                     case 0: # NEW LINE*/
/*                          $padCnt = $lineWidth - strlen($out)%$lineWidth;*/
/*                         if ($padCnt<$lineWidth) $out .= str_repeat(chr(0), $padCnt); # pad line*/
/*                         break;*/
/*                     case 1: # END OF FILE*/
/*                         $padCnt = $lineWidth - strlen($out)%$lineWidth;*/
/*                         if ($padCnt<$lineWidth) $out .= str_repeat(chr(0), $padCnt); # pad line*/
/*                          break 3;*/
/*                     case 2: # DELTA*/
/*                         $i += 2;*/
/*                         break;*/
/*                     default: # ABSOLUTE MODE*/
/*                         $num = ord($str[$i]);*/
/*                         for ($j=0;$j<$num;$j++)*/
/*                             $out .= $str[++$i];*/
/*                         if ($num % 2) $i++;*/
/*              }*/
/*                 break;*/
/*             default:*/
/*                 $out .= str_repeat($str[++$i], $o);*/
/*         }*/
/*     }*/
/*     return $out;*/
/* }*/
/* */
/* # Decoder for RLE4 compression in windows bitmaps*/
/* # see http://msdn.microsoft.com/library/default.asp?url=/library/en-us/gdi/bitmaps_6x0u.asp*/
/* function rle4_decode ($str, $width){*/
/*     $w = floor($width/2) + ($width % 2);*/
/*     $lineWidth = $w + (3 - ( ($width-1) / 2) % 4);    */
/*     $pixels = array();*/
/*     $cnt = strlen($str);*/
/*     for ($i=0;$i<$cnt;$i++){*/
/*         $o = ord($str[$i]);*/
/*         switch ($o){*/
/*             case 0: # ESCAPE*/
/*                 $i++;*/
/*                 switch (ord($str[$i])){*/
/*                     case 0: # NEW LINE                        */
/*                         while (count($pixels)%$lineWidth!=0)*/
/*                             $pixels[]=0;*/
/*                         break;*/
/*                     case 1: # END OF FILE*/
/*                         while (count($pixels)%$lineWidth!=0)*/
/*                             $pixels[]=0;*/
/*                         break 3;*/
/*                     case 2: # DELTA*/
/*                         $i += 2;*/
/*                         break;*/
/*                     default: # ABSOLUTE MODE*/
/*                         $num = ord($str[$i]);*/
/*                         for ($j=0;$j<$num;$j++){*/
/*                             if ($j%2==0){*/
/*                                 $c = ord($str[++$i]);*/
/*                               $pixels[] = ($c & 240)>>4;*/
/*                              } else*/
/*                               $pixels[] = $c & 15;*/
/*                         }*/
/*                         if ($num % 2) $i++;*/
/*              }*/
/*                 break;*/
/*             default:*/
/*                 $c = ord($str[++$i]);*/
/*                 for ($j=0;$j<$o;$j++)*/
/*                     $pixels[] = ($j%2==0 ? ($c & 240)>>4 : $c & 15);*/
/*         }*/
/*     }*/
/*     */
/*     $out = '';*/
/*     if (count($pixels)%2) $pixels[]=0;*/
/*     $cnt = count($pixels)/2;*/
/*     for ($i=0;$i<$cnt;$i++)*/
/*         $out .= chr(16*$pixels[2*$i] + $pixels[2*$i+1]);*/
/*     return $out;*/
/* } */
/* */
/* */
/* */
/* }*/
/* */
/* ?>*/
