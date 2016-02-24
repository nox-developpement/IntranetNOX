<?php

/* support/include/mpdf/classes/wmf.php */
class __TwigTemplate_8fcb56aaaf5008923411310fa52d204d98729ccc0dc1c6deae104aba7d08785c extends Twig_Template
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
        $__internal_dc306963130efd5d896808742c9cf162030a37373b905e071021d6bb17e91faa = $this->env->getExtension("native_profiler");
        $__internal_dc306963130efd5d896808742c9cf162030a37373b905e071021d6bb17e91faa->enter($__internal_dc306963130efd5d896808742c9cf162030a37373b905e071021d6bb17e91faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/mpdf/classes/wmf.php"));

        // line 1
        echo "<?php

class wmf {

var \$mpdf = null;
var \$gdiObjectArray;

function wmf(&\$mpdf) {
\t\$this->mpdf = \$mpdf;
}


function _getWMFimage(\$data) {
\t\$k = _MPDFK;

\t\t\$this->gdiObjectArray = array();
\t\t\$a=unpack('stest',\"\\1\\0\");
\t\tif (\$a['test']!=1)
\t\treturn array(0, 'Error parsing WMF image - Big-endian architecture not supported'); 
\t\t// check for Aldus placeable metafile header
\t\t\$key = unpack('Lmagic', substr(\$data, 0, 4));
\t\t\$p = 18;  // WMF header 
\t\tif (\$key['magic'] == (int)0x9AC6CDD7) { \$p +=22; } // Aldus header
\t\t// define some state variables
\t\t\$wo=null; // window origin
\t\t\$we=null; // window extent
\t\t\$polyFillMode = 0;
\t\t\$nullPen = false;
\t\t\$nullBrush = false;
\t\t\$endRecord = false;
\t\t\$wmfdata = '';
\t\twhile (\$p < strlen(\$data) && !\$endRecord) {
\t\t\t\$recordInfo = unpack('Lsize/Sfunc', substr(\$data, \$p, 6));\t\$p += 6;
\t\t\t// size of record given in WORDs (= 2 bytes)
\t\t\t\$size = \$recordInfo['size'];
\t\t\t// func is number of GDI function
\t\t\t\$func = \$recordInfo['func'];
\t\t\tif (\$size > 3) {
\t\t\t\t\$parms = substr(\$data, \$p, 2*(\$size-3));\t\$p += 2*(\$size-3);
\t\t\t}
\t\t\tswitch (\$func) {
\t\t\t\tcase 0x020b:  // SetWindowOrg
\t\t\t\t\t// do not allow window origin to be changed
\t\t\t\t\t// after drawing has begun
\t\t\t\t\tif (!\$wmfdata)
\t\t\t\t\t\t\$wo = array_reverse(unpack('s2', \$parms));
\t\t\t\t\tbreak;
\t\t\t\tcase 0x020c:  // SetWindowExt
\t\t\t\t\t// do not allow window extent to be changed
\t\t\t\t\t// after drawing has begun
\t\t\t\t\tif (!\$wmfdata)
\t\t\t\t\t\t\$we = array_reverse(unpack('s2', \$parms));
\t\t\t\t\tbreak;
\t\t\t\tcase 0x02fc:  // CreateBrushIndirect
\t\t\t\t\t\$brush = unpack('sstyle/Cr/Cg/Cb/Ca/Shatch', \$parms);
\t\t\t\t\t\$brush['type'] = 'B';
\t\t\t\t\t\$this->_AddGDIObject(\$brush);
\t\t\t\t\tbreak;
\t\t\t\tcase 0x02fa:  // CreatePenIndirect
\t\t\t\t\t\$pen = unpack('Sstyle/swidth/sdummy/Cr/Cg/Cb/Ca', \$parms);
\t\t\t\t\t// convert width from twips to user unit
\t\t\t\t\t\$pen['width'] /= (20 * \$k);
\t\t\t\t\t\$pen['type'] = 'P';
\t\t\t\t\t\$this->_AddGDIObject(\$pen);
\t\t\t\t\tbreak;

\t\t\t\t// MUST create other GDI objects even if we don't handle them
\t\t\t\tcase 0x06fe: // CreateBitmap
\t\t\t\tcase 0x02fd: // CreateBitmapIndirect
\t\t\t\tcase 0x00f8: // CreateBrush
\t\t\t\tcase 0x02fb: // CreateFontIndirect
\t\t\t\tcase 0x00f7: // CreatePalette
\t\t\t\tcase 0x01f9: // CreatePatternBrush
\t\t\t\tcase 0x06ff: // CreateRegion
\t\t\t\tcase 0x0142: // DibCreatePatternBrush
\t\t\t\t\t\$dummyObject = array('type'=>'D');
\t\t\t\t\t\$this->_AddGDIObject(\$dummyObject);
\t\t\t\t\tbreak;
\t\t\t\tcase 0x0106:  // SetPolyFillMode
\t\t\t\t\t\$polyFillMode = unpack('smode', \$parms);
\t\t\t\t\t\$polyFillMode = \$polyFillMode['mode'];
\t\t\t\t\tbreak;
\t\t\t\tcase 0x01f0:  // DeleteObject
\t\t\t\t\t\$idx = unpack('Sidx', \$parms);
\t\t\t\t\t\$idx = \$idx['idx'];
\t\t\t\t\t\$this->_DeleteGDIObject(\$idx);
\t\t\t\t\tbreak;
\t\t\t\tcase 0x012d:  // SelectObject
\t\t\t\t\t\$idx = unpack('Sidx', \$parms);
\t\t\t\t\t\$idx = \$idx['idx'];
\t\t\t\t\t\$obj = \$this->_GetGDIObject(\$idx);
\t\t\t\t\tswitch (\$obj['type']) {
\t\t\t\t\t\tcase 'B':
\t\t\t\t\t\t\t\$nullBrush = false;
\t\t\t\t\t\t\tif (\$obj['style'] == 1) { \$nullBrush = true; }
\t\t\t\t\t\t\telse {
\t\t\t\t\t\t\t\t\$wmfdata .= \$this->mpdf->SetFColor(\$this->mpdf->ConvertColor('rgb('.\$obj['r'].','.\$obj['g'].','.\$obj['b'].')'), true).\"\\n\";\t
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\tcase 'P':
\t\t\t\t\t\t\t\$nullPen = false;
\t\t\t\t\t\t\t\$dashArray = array(); 
\t\t\t\t\t\t\t// dash parameters are custom
\t\t\t\t\t\t\tswitch (\$obj['style']) {
\t\t\t\t\t\t\t\tcase 0: // PS_SOLID
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\tcase 1: // PS_DASH
\t\t\t\t\t\t\t\t\t\$dashArray = array(3,1);
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\tcase 2: // PS_DOT
\t\t\t\t\t\t\t\t\t\$dashArray = array(0.5,0.5);
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\tcase 3: // PS_DASHDOT
\t\t\t\t\t\t\t\t\t\$dashArray = array(2,1,0.5,1);
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\tcase 4: // PS_DASHDOTDOT
\t\t\t\t\t\t\t\t\t\$dashArray = array(2,1,0.5,1,0.5,1);
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t\tcase 5: // PS_NULL
\t\t\t\t\t\t\t\t\t\$nullPen = true;
\t\t\t\t\t\t\t\t\tbreak;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (!\$nullPen) {
\t\t\t\t\t\t\t\t\$wmfdata .= \$this->mpdf->SetDColor(\$this->mpdf->ConvertColor('rgb('.\$obj['r'].','.\$obj['g'].','.\$obj['b'].')'), true).\"\\n\";
\t\t\t\t\t\t\t\t\$wmfdata .= sprintf(\"%.3F w\\n\",\$obj['width']*\$k);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (!empty(\$dashArray)) {
\t\t\t\t\t\t\t\t\$s = '[';
\t\t\t\t\t\t\t\tfor (\$i=0; \$i<count(\$dashArray);\$i++) {
\t\t\t\t\t\t\t\t\t\$s .= \$dashArray[\$i] * \$k;
\t\t\t\t\t\t\t\t\tif (\$i != count(\$dashArray)-1) { \$s .= ' '; }
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$s .= '] 0 d';
\t\t\t\t\t\t\t\t\$wmfdata .= \$s.\"\\n\";
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tbreak;
\t\t\t\t\t}
\t\t\t\t\tbreak;
\t\t\t\tcase 0x0325: // Polyline
\t\t\t\tcase 0x0324: // Polygon
\t\t\t\t\t\$coords = unpack('s'.(\$size-3), \$parms);
\t\t\t\t\t\$numpoints = \$coords[1];
\t\t\t\t\tfor (\$i = \$numpoints; \$i > 0; \$i--) {
\t\t\t\t\t\t\$px = \$coords[2*\$i];
\t\t\t\t\t\t\$py = \$coords[2*\$i+1];

\t\t\t\t\t\tif (\$i < \$numpoints) { \$wmfdata .= \$this->_LineTo(\$px, \$py); }
\t\t\t\t\t   else { \$wmfdata .= \$this->_MoveTo(\$px, \$py); }
\t\t\t\t\t}
\t\t\t\t\tif (\$func == 0x0325) { \$op = 's'; }
\t\t\t\t\telse if (\$func == 0x0324) {
\t\t\t\t\t\tif (\$nullPen) {
\t\t\t\t\t\t\tif (\$nullBrush) { \$op = 'n'; } // no op
\t\t\t\t\t\t\telse { \$op = 'f'; } // fill
\t\t\t\t\t\t}
\t\t\t\t\t\telse {
\t\t\t\t\t\t\tif (\$nullBrush) { \$op = 's'; } // stroke
\t\t\t\t\t\t\telse { \$op = 'b'; } // stroke and fill
\t\t\t\t\t\t}
\t\t\t\t\t\tif (\$polyFillMode==1 && (\$op=='b' || \$op=='f')) { \$op .= '*'; } // use even-odd fill rule
\t\t\t\t\t}
\t\t\t\t\t\$wmfdata .= \$op.\"\\n\";
\t\t\t\t\tbreak;
\t\t\t\tcase 0x0538: // PolyPolygon
\t\t\t\t\t\$coords = unpack('s'.(\$size-3), \$parms);
\t\t\t\t\t\$numpolygons = \$coords[1];
\t\t\t\t\t\$adjustment = \$numpolygons;
\t\t\t\t\tfor (\$j = 1; \$j <= \$numpolygons; \$j++) {
\t\t\t\t\t\t\$numpoints = \$coords[\$j + 1];
\t\t\t\t\t\tfor (\$i = \$numpoints; \$i > 0; \$i--) {
\t\t\t\t\t\t\t\$px = \$coords[2*\$i   + \$adjustment];
\t\t\t\t\t\t\t\$py = \$coords[2*\$i+1 + \$adjustment];
\t\t\t\t\t\t\tif (\$i == \$numpoints) { \$wmfdata .= \$this->_MoveTo(\$px, \$py); }
\t\t\t\t\t\t\telse { \$wmfdata .= \$this->_LineTo(\$px, \$py); }
\t\t\t\t\t\t}
\t\t\t\t\t\t\$adjustment += \$numpoints * 2;
\t\t\t\t\t}

\t\t\t\t\tif (\$nullPen) {
\t\t\t\t\t\tif (\$nullBrush) { \$op = 'n'; } // no op
\t\t\t\t\t\telse { \$op = 'f'; } // fill
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\tif (\$nullBrush) { \$op = 's'; } // stroke
\t\t\t\t\t\telse { \$op = 'b'; } // stroke and fill
\t\t\t\t\t}
\t\t\t\t\tif (\$polyFillMode==1 && (\$op=='b' || \$op=='f')) { \$op .= '*'; } // use even-odd fill rule
\t\t\t\t\t\$wmfdata .= \$op.\"\\n\";
\t\t\t\t\tbreak;
\t\t\t\tcase 0x0000:
\t\t\t\t\t\$endRecord = true;
\t\t\t\t\tbreak;
\t\t\t}
\t\t}


\treturn array(1,\$wmfdata,\$wo,\$we);
}


function _MoveTo(\$x, \$y) {
\treturn \"\$x \$y m\\n\";
}

// a line must have been started using _MoveTo() first
function _LineTo(\$x, \$y) {
\treturn \"\$x \$y l\\n\";
}

function _AddGDIObject(\$obj) {
\t// find next available slot
\t\$idx = 0;
\tif (!empty(\$this->gdiObjectArray)) {
\t\t\$empty = false;
\t\t\$i = 0;
\t\twhile (!\$empty) {
\t\t\t\$empty = !isset(\$this->gdiObjectArray[\$i]);
\t\t\t\$i++;
\t\t}
\t\t\$idx = \$i-1;
\t}
\t\$this->gdiObjectArray[\$idx] = \$obj;
}

function _GetGDIObject(\$idx) {
\treturn \$this->gdiObjectArray[\$idx];
}

function _DeleteGDIObject(\$idx) {
\tunset(\$this->gdiObjectArray[\$idx]);
}


}

?>";
        
        $__internal_dc306963130efd5d896808742c9cf162030a37373b905e071021d6bb17e91faa->leave($__internal_dc306963130efd5d896808742c9cf162030a37373b905e071021d6bb17e91faa_prof);

    }

    public function getTemplateName()
    {
        return "support/include/mpdf/classes/wmf.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* class wmf {*/
/* */
/* var $mpdf = null;*/
/* var $gdiObjectArray;*/
/* */
/* function wmf(&$mpdf) {*/
/* 	$this->mpdf = $mpdf;*/
/* }*/
/* */
/* */
/* function _getWMFimage($data) {*/
/* 	$k = _MPDFK;*/
/* */
/* 		$this->gdiObjectArray = array();*/
/* 		$a=unpack('stest',"\1\0");*/
/* 		if ($a['test']!=1)*/
/* 		return array(0, 'Error parsing WMF image - Big-endian architecture not supported'); */
/* 		// check for Aldus placeable metafile header*/
/* 		$key = unpack('Lmagic', substr($data, 0, 4));*/
/* 		$p = 18;  // WMF header */
/* 		if ($key['magic'] == (int)0x9AC6CDD7) { $p +=22; } // Aldus header*/
/* 		// define some state variables*/
/* 		$wo=null; // window origin*/
/* 		$we=null; // window extent*/
/* 		$polyFillMode = 0;*/
/* 		$nullPen = false;*/
/* 		$nullBrush = false;*/
/* 		$endRecord = false;*/
/* 		$wmfdata = '';*/
/* 		while ($p < strlen($data) && !$endRecord) {*/
/* 			$recordInfo = unpack('Lsize/Sfunc', substr($data, $p, 6));	$p += 6;*/
/* 			// size of record given in WORDs (= 2 bytes)*/
/* 			$size = $recordInfo['size'];*/
/* 			// func is number of GDI function*/
/* 			$func = $recordInfo['func'];*/
/* 			if ($size > 3) {*/
/* 				$parms = substr($data, $p, 2*($size-3));	$p += 2*($size-3);*/
/* 			}*/
/* 			switch ($func) {*/
/* 				case 0x020b:  // SetWindowOrg*/
/* 					// do not allow window origin to be changed*/
/* 					// after drawing has begun*/
/* 					if (!$wmfdata)*/
/* 						$wo = array_reverse(unpack('s2', $parms));*/
/* 					break;*/
/* 				case 0x020c:  // SetWindowExt*/
/* 					// do not allow window extent to be changed*/
/* 					// after drawing has begun*/
/* 					if (!$wmfdata)*/
/* 						$we = array_reverse(unpack('s2', $parms));*/
/* 					break;*/
/* 				case 0x02fc:  // CreateBrushIndirect*/
/* 					$brush = unpack('sstyle/Cr/Cg/Cb/Ca/Shatch', $parms);*/
/* 					$brush['type'] = 'B';*/
/* 					$this->_AddGDIObject($brush);*/
/* 					break;*/
/* 				case 0x02fa:  // CreatePenIndirect*/
/* 					$pen = unpack('Sstyle/swidth/sdummy/Cr/Cg/Cb/Ca', $parms);*/
/* 					// convert width from twips to user unit*/
/* 					$pen['width'] /= (20 * $k);*/
/* 					$pen['type'] = 'P';*/
/* 					$this->_AddGDIObject($pen);*/
/* 					break;*/
/* */
/* 				// MUST create other GDI objects even if we don't handle them*/
/* 				case 0x06fe: // CreateBitmap*/
/* 				case 0x02fd: // CreateBitmapIndirect*/
/* 				case 0x00f8: // CreateBrush*/
/* 				case 0x02fb: // CreateFontIndirect*/
/* 				case 0x00f7: // CreatePalette*/
/* 				case 0x01f9: // CreatePatternBrush*/
/* 				case 0x06ff: // CreateRegion*/
/* 				case 0x0142: // DibCreatePatternBrush*/
/* 					$dummyObject = array('type'=>'D');*/
/* 					$this->_AddGDIObject($dummyObject);*/
/* 					break;*/
/* 				case 0x0106:  // SetPolyFillMode*/
/* 					$polyFillMode = unpack('smode', $parms);*/
/* 					$polyFillMode = $polyFillMode['mode'];*/
/* 					break;*/
/* 				case 0x01f0:  // DeleteObject*/
/* 					$idx = unpack('Sidx', $parms);*/
/* 					$idx = $idx['idx'];*/
/* 					$this->_DeleteGDIObject($idx);*/
/* 					break;*/
/* 				case 0x012d:  // SelectObject*/
/* 					$idx = unpack('Sidx', $parms);*/
/* 					$idx = $idx['idx'];*/
/* 					$obj = $this->_GetGDIObject($idx);*/
/* 					switch ($obj['type']) {*/
/* 						case 'B':*/
/* 							$nullBrush = false;*/
/* 							if ($obj['style'] == 1) { $nullBrush = true; }*/
/* 							else {*/
/* 								$wmfdata .= $this->mpdf->SetFColor($this->mpdf->ConvertColor('rgb('.$obj['r'].','.$obj['g'].','.$obj['b'].')'), true)."\n";	*/
/* 							}*/
/* 							break;*/
/* 						case 'P':*/
/* 							$nullPen = false;*/
/* 							$dashArray = array(); */
/* 							// dash parameters are custom*/
/* 							switch ($obj['style']) {*/
/* 								case 0: // PS_SOLID*/
/* 									break;*/
/* 								case 1: // PS_DASH*/
/* 									$dashArray = array(3,1);*/
/* 									break;*/
/* 								case 2: // PS_DOT*/
/* 									$dashArray = array(0.5,0.5);*/
/* 									break;*/
/* 								case 3: // PS_DASHDOT*/
/* 									$dashArray = array(2,1,0.5,1);*/
/* 									break;*/
/* 								case 4: // PS_DASHDOTDOT*/
/* 									$dashArray = array(2,1,0.5,1,0.5,1);*/
/* 									break;*/
/* 								case 5: // PS_NULL*/
/* 									$nullPen = true;*/
/* 									break;*/
/* 							}*/
/* 							if (!$nullPen) {*/
/* 								$wmfdata .= $this->mpdf->SetDColor($this->mpdf->ConvertColor('rgb('.$obj['r'].','.$obj['g'].','.$obj['b'].')'), true)."\n";*/
/* 								$wmfdata .= sprintf("%.3F w\n",$obj['width']*$k);*/
/* 							}*/
/* 							if (!empty($dashArray)) {*/
/* 								$s = '[';*/
/* 								for ($i=0; $i<count($dashArray);$i++) {*/
/* 									$s .= $dashArray[$i] * $k;*/
/* 									if ($i != count($dashArray)-1) { $s .= ' '; }*/
/* 								}*/
/* 								$s .= '] 0 d';*/
/* 								$wmfdata .= $s."\n";*/
/* 							}*/
/* 							break;*/
/* 					}*/
/* 					break;*/
/* 				case 0x0325: // Polyline*/
/* 				case 0x0324: // Polygon*/
/* 					$coords = unpack('s'.($size-3), $parms);*/
/* 					$numpoints = $coords[1];*/
/* 					for ($i = $numpoints; $i > 0; $i--) {*/
/* 						$px = $coords[2*$i];*/
/* 						$py = $coords[2*$i+1];*/
/* */
/* 						if ($i < $numpoints) { $wmfdata .= $this->_LineTo($px, $py); }*/
/* 					   else { $wmfdata .= $this->_MoveTo($px, $py); }*/
/* 					}*/
/* 					if ($func == 0x0325) { $op = 's'; }*/
/* 					else if ($func == 0x0324) {*/
/* 						if ($nullPen) {*/
/* 							if ($nullBrush) { $op = 'n'; } // no op*/
/* 							else { $op = 'f'; } // fill*/
/* 						}*/
/* 						else {*/
/* 							if ($nullBrush) { $op = 's'; } // stroke*/
/* 							else { $op = 'b'; } // stroke and fill*/
/* 						}*/
/* 						if ($polyFillMode==1 && ($op=='b' || $op=='f')) { $op .= '*'; } // use even-odd fill rule*/
/* 					}*/
/* 					$wmfdata .= $op."\n";*/
/* 					break;*/
/* 				case 0x0538: // PolyPolygon*/
/* 					$coords = unpack('s'.($size-3), $parms);*/
/* 					$numpolygons = $coords[1];*/
/* 					$adjustment = $numpolygons;*/
/* 					for ($j = 1; $j <= $numpolygons; $j++) {*/
/* 						$numpoints = $coords[$j + 1];*/
/* 						for ($i = $numpoints; $i > 0; $i--) {*/
/* 							$px = $coords[2*$i   + $adjustment];*/
/* 							$py = $coords[2*$i+1 + $adjustment];*/
/* 							if ($i == $numpoints) { $wmfdata .= $this->_MoveTo($px, $py); }*/
/* 							else { $wmfdata .= $this->_LineTo($px, $py); }*/
/* 						}*/
/* 						$adjustment += $numpoints * 2;*/
/* 					}*/
/* */
/* 					if ($nullPen) {*/
/* 						if ($nullBrush) { $op = 'n'; } // no op*/
/* 						else { $op = 'f'; } // fill*/
/* 					}*/
/* 					else {*/
/* 						if ($nullBrush) { $op = 's'; } // stroke*/
/* 						else { $op = 'b'; } // stroke and fill*/
/* 					}*/
/* 					if ($polyFillMode==1 && ($op=='b' || $op=='f')) { $op .= '*'; } // use even-odd fill rule*/
/* 					$wmfdata .= $op."\n";*/
/* 					break;*/
/* 				case 0x0000:*/
/* 					$endRecord = true;*/
/* 					break;*/
/* 			}*/
/* 		}*/
/* */
/* */
/* 	return array(1,$wmfdata,$wo,$we);*/
/* }*/
/* */
/* */
/* function _MoveTo($x, $y) {*/
/* 	return "$x $y m\n";*/
/* }*/
/* */
/* // a line must have been started using _MoveTo() first*/
/* function _LineTo($x, $y) {*/
/* 	return "$x $y l\n";*/
/* }*/
/* */
/* function _AddGDIObject($obj) {*/
/* 	// find next available slot*/
/* 	$idx = 0;*/
/* 	if (!empty($this->gdiObjectArray)) {*/
/* 		$empty = false;*/
/* 		$i = 0;*/
/* 		while (!$empty) {*/
/* 			$empty = !isset($this->gdiObjectArray[$i]);*/
/* 			$i++;*/
/* 		}*/
/* 		$idx = $i-1;*/
/* 	}*/
/* 	$this->gdiObjectArray[$idx] = $obj;*/
/* }*/
/* */
/* function _GetGDIObject($idx) {*/
/* 	return $this->gdiObjectArray[$idx];*/
/* }*/
/* */
/* function _DeleteGDIObject($idx) {*/
/* 	unset($this->gdiObjectArray[$idx]);*/
/* }*/
/* */
/* */
/* }*/
/* */
/* ?>*/
