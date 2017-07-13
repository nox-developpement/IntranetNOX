<?php

/* support/include/mpdf/classes/grad.php */
class __TwigTemplate_c15cae373600d6277f546ab4580acc6fd9530d4066891114be00693c26e98cc6 extends Twig_Template
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

class grad {

var \$mpdf = null;

function grad(&\$mpdf) {
\t\$this->mpdf = \$mpdf;
}

// mPDF 5.3.A1
function CoonsPatchMesh(\$x, \$y, \$w, \$h, \$patch_array=array(), \$x_min=0, \$x_max=1, \$y_min=0, \$y_max=1, \$colspace='RGB', \$return=false){
\t\$s=' q ';
\t\$s.=sprintf(' %.3F %.3F %.3F %.3F re W n ', \$x*_MPDFK, (\$this->mpdf->h-\$y)*_MPDFK, \$w*_MPDFK, -\$h*_MPDFK);
\t\$s.=sprintf(' %.3F 0 0 %.3F %.3F %.3F cm ', \$w*_MPDFK, \$h*_MPDFK, \$x*_MPDFK, (\$this->mpdf->h-(\$y+\$h))*_MPDFK);
\t\$n = count(\$this->mpdf->gradients)+1;
\t\$this->mpdf->gradients[\$n]['type'] = 6; //coons patch mesh
\t\$this->mpdf->gradients[\$n]['colorspace'] = \$colspace; //coons patch mesh
\t\$bpcd=65535; //16 BitsPerCoordinate
\t\$trans = false;
\t\$this->mpdf->gradients[\$n]['stream']='';
\tfor(\$i=0;\$i<count(\$patch_array);\$i++){
\t\t\$this->mpdf->gradients[\$n]['stream'].=chr(\$patch_array[\$i]['f']); //start with the edge flag as 8 bit
\t\tfor(\$j=0;\$j<count(\$patch_array[\$i]['points']);\$j++){
\t\t\t//each point as 16 bit
\t\t\tif ((\$j % 2) == 1) {\t// Y coordinate (adjusted as input is From top left)
\t\t\t\t\$patch_array[\$i]['points'][\$j]=((\$patch_array[\$i]['points'][\$j]-\$y_min)/(\$y_max-\$y_min))*\$bpcd;
\t\t\t\t\$patch_array[\$i]['points'][\$j]=\$bpcd-\$patch_array[\$i]['points'][\$j];
\t\t\t}
\t\t\telse {
\t\t\t\t\$patch_array[\$i]['points'][\$j]=((\$patch_array[\$i]['points'][\$j]-\$x_min)/(\$x_max-\$x_min))*\$bpcd;
\t\t\t}
\t\t\tif(\$patch_array[\$i]['points'][\$j]<0) \$patch_array[\$i]['points'][\$j]=0;
\t\t\tif(\$patch_array[\$i]['points'][\$j]>\$bpcd) \$patch_array[\$i]['points'][\$j]=\$bpcd;
\t\t\t\$this->mpdf->gradients[\$n]['stream'].=chr(floor(\$patch_array[\$i]['points'][\$j]/256));
\t\t\t\$this->mpdf->gradients[\$n]['stream'].=chr(floor(\$patch_array[\$i]['points'][\$j]%256));
\t\t}
\t\tfor(\$j=0;\$j<count(\$patch_array[\$i]['colors']);\$j++){
\t\t\t//each color component as 8 bit
\t\t\tif (\$colspace=='RGB') {
\t\t\t\t\$this->mpdf->gradients[\$n]['stream'].=(\$patch_array[\$i]['colors'][\$j][1]);
\t\t\t\t\$this->mpdf->gradients[\$n]['stream'].=(\$patch_array[\$i]['colors'][\$j][2]);
\t\t\t\t\$this->mpdf->gradients[\$n]['stream'].=(\$patch_array[\$i]['colors'][\$j][3]);
\t\t\t\tif (isset(\$patch_array[\$i]['colors'][\$j][4]) && ord(\$patch_array[\$i]['colors'][\$j][4])<100) { \$trans = true; }
\t\t\t}
\t\t\telse if (\$colspace=='CMYK') {
\t\t\t\t\$this->mpdf->gradients[\$n]['stream'].=chr(ord(\$patch_array[\$i]['colors'][\$j][1])*2.55);
\t\t\t\t\$this->mpdf->gradients[\$n]['stream'].=chr(ord(\$patch_array[\$i]['colors'][\$j][2])*2.55);
\t\t\t\t\$this->mpdf->gradients[\$n]['stream'].=chr(ord(\$patch_array[\$i]['colors'][\$j][3])*2.55);
\t\t\t\t\$this->mpdf->gradients[\$n]['stream'].=chr(ord(\$patch_array[\$i]['colors'][\$j][4])*2.55);
\t\t\t\tif (isset(\$patch_array[\$i]['colors'][\$j][5]) && ord(\$patch_array[\$i]['colors'][\$j][5])<100) { \$trans = true; }
\t\t\t}
\t\t\telse if (\$colspace=='Gray') {
\t\t\t\t\$this->mpdf->gradients[\$n]['stream'].=(\$patch_array[\$i]['colors'][\$j][1]);
\t\t\t\tif (\$patch_array[\$i]['colors'][\$j][2]==1) { \$trans = true; }\t// transparency converted from rgba or cmyka()
\t\t\t}
\t\t}
\t}
\t// TRANSPARENCY
\tif (\$trans) { 
\t\t\$this->mpdf->gradients[\$n]['stream_trans']='';
\t\tfor(\$i=0;\$i<count(\$patch_array);\$i++){
\t\t\t\$this->mpdf->gradients[\$n]['stream_trans'].=chr(\$patch_array[\$i]['f']);
\t\t\tfor(\$j=0;\$j<count(\$patch_array[\$i]['points']);\$j++){
\t\t\t\t//each point as 16 bit
\t\t\t\t\$this->mpdf->gradients[\$n]['stream_trans'].=chr(floor(\$patch_array[\$i]['points'][\$j]/256));
\t\t\t\t\$this->mpdf->gradients[\$n]['stream_trans'].=chr(floor(\$patch_array[\$i]['points'][\$j]%256));
\t\t\t}
\t\t\tfor(\$j=0;\$j<count(\$patch_array[\$i]['colors']);\$j++){
\t\t\t\t//each color component as 8 bit // OPACITY
\t\t\t\tif (\$colspace=='RGB') {
\t\t\t\t\t\$this->mpdf->gradients[\$n]['stream_trans'].=chr(intval(ord(\$patch_array[\$i]['colors'][\$j][4])*2.55));
\t\t\t\t}
\t\t\t\telse if (\$colspace=='CMYK') {
\t\t\t\t\t\$this->mpdf->gradients[\$n]['stream_trans'].=chr(intval(ord(\$patch_array[\$i]['colors'][\$j][5])*2.55));
\t\t\t\t}
\t\t\t\telse if (\$colspace=='Gray') {
\t\t\t\t\t\$this->mpdf->gradients[\$n]['stream_trans'].=chr(intval(ord(\$patch_array[\$i]['colors'][\$j][3])*2.55));
\t\t\t\t}
\t\t\t}
\t\t}
\t\t\$this->mpdf->gradients[\$n]['trans'] = true;\t
\t\t\$s .= ' /TGS'.\$n.' gs ';
\t}
\t//paint the gradient
\t\$s .= '/Sh'.\$n.' sh'.\"\\n\";
\t//restore previous Graphic State
\t\$s .= 'Q'.\"\\n\";
\tif (\$return) { return \$s; }
\telse { \$this->mpdf->_out(\$s); }
}


// type = linear:2; radial: 3;
// Linear: \$coords - array of the form (x1, y1, x2, y2) which defines the gradient vector (see linear_gradient_coords.jpg). 
//    The default value is from left to right (x1=0, y1=0, x2=1, y2=0).
// Radial: \$coords - array of the form (fx, fy, cx, cy, r) where (fx, fy) is the starting point of the gradient with color1, 
//    (cx, cy) is the center of the circle with color2, and r is the radius of the circle (see radial_gradient_coords.jpg). 
//    (fx, fy) should be inside the circle, otherwise some areas will not be defined
// \$col = array(R,G,B/255); or array(G/255); or array(C,M,Y,K/100)
// \$stops = array('col'=>\$col [, 'opacity'=>0-1] [, 'offset'=>0-1])
function Gradient(\$x, \$y, \$w, \$h, \$type, \$stops=array(), \$colorspace='RGB', \$coords='', \$extend='', \$return=false, \$is_mask=false) {
\tif (strtoupper(substr(\$type,0,1)) == 'L') { \$type = 2; }\t// linear
\telse if (strtoupper(substr(\$type,0,1)) == 'R') { \$type = 3; }\t// radial
\tif (\$colorspace != 'CMYK' && \$colorspace != 'Gray') {
\t\t\$colorspace = 'RGB';
\t}
\t\$bboxw = \$w;
\t\$bboxh = \$h;
\t\$usex = \$x;
\t\$usey = \$y;
\t\$usew = \$bboxw;
\t\$useh = \$bboxh;
\tif (\$type < 1) { \$type = 2; }
\tif (\$coords[0]!==false && preg_match('/([0-9.]+(px|em|ex|pc|pt|cm|mm|in))/i',\$coords[0],\$m)) { 
\t\t\$tmp = \$this->mpdf->ConvertSize(\$m[1],\$this->mpdf->w,\$this->mpdf->FontSize,false);
\t\tif (\$tmp) { \$coords[0] = \$tmp/\$w; }
\t}
\tif (\$coords[1]!==false && preg_match('/([0-9.]+(px|em|ex|pc|pt|cm|mm|in))/i',\$coords[1],\$m)) { 
\t\t\$tmp = \$this->mpdf->ConvertSize(\$m[1],\$this->mpdf->w,\$this->mpdf->FontSize,false);
\t\tif (\$tmp) { \$coords[1] = 1-(\$tmp/\$h); }
\t}
\t// LINEAR
\tif (\$type == 2) { 
\t\t\$angle = \$coords[4];
\t\t\$repeat = \$coords[5];
\t\t// ALL POINTS SET (default for custom mPDF linear gradient) - no -moz
\t\tif (\$coords[0]!==false && \$coords[1]!==false && \$coords[2]!==false && \$coords[3]!==false) {
\t\t\t// do nothing - coords used as they are
\t\t}

\t\t// If both a <point> and <angle> are defined, the gradient axis starts from the point and runs along the angle. The end point is 
\t\t// defined as before - in this case start points may not be in corners, and axis may not correctly fall in the right quadrant.
\t\t// NO end points (Angle defined & Start points)
\t\telse if (\$angle!==false && \$coords[0]!==false && \$coords[1]!==false && \$coords[2]===false && \$coords[3]===false) {
\t\t  if (\$angle==0 || \$angle==360) { \$coords[3]=\$coords[1]; if (\$coords[0]==1) \$coords[2]=2; else \$coords[2]=1; }
\t\t  else if (\$angle==90) { \$coords[2]=\$coords[0]; \$coords[3]=1; if (\$coords[1]==1) \$coords[3]=2; else \$coords[3]=1; }
\t\t  else if (\$angle==180) { if (\$coords[4]==0) \$coords[2]=-1; else \$coords[2]=0; \$coords[3]=\$coords[1]; }
\t\t  else if (\$angle==270) { \$coords[2]=\$coords[0]; if (\$coords[1]==0) \$coords[3]=-1; else \$coords[3]=0; }
\t\t  else {
\t\t\t\$endx=1; \$endy=1; 
\t\t\tif (\$angle <=90) { 
\t\t\t\tif (\$angle <=45) { \$endy=tan(deg2rad(\$angle)); }
\t\t\t\telse { \$endx=tan(deg2rad(90-\$angle)); }
\t\t\t\t\$b = atan2((\$endy*\$bboxh), (\$endx*\$bboxw));
\t\t\t\t\$ny = 1 - \$coords[1] - (tan(\$b) * (1-\$coords[0]));
\t\t\t\t\$tx = sin(\$b) * cos(\$b) * \$ny;
\t\t\t\t\$ty = cos(\$b) * cos(\$b) * \$ny;
\t\t\t\t\$coords[2] = 1+\$tx; \$coords[3] = 1-\$ty; 
\t\t\t}
\t\t\telse if (\$angle <=180) { 
\t\t\t\tif (\$angle <=135) { \$endx=tan(deg2rad(\$angle-90)); }
\t\t\t\telse { \$endy=tan(deg2rad(180-\$angle)); }
\t\t\t\t\$b = atan2((\$endy*\$bboxh), (\$endx*\$bboxw));
\t\t\t\t\$ny = 1 - \$coords[1] - (tan(\$b) * (\$coords[0]));
\t\t\t\t\$tx = sin(\$b) * cos(\$b) * \$ny;
\t\t\t\t\$ty = cos(\$b) * cos(\$b) * \$ny;
\t\t\t\t\$coords[2] =  -\$tx; \$coords[3] = 1-\$ty;
\t\t\t}
\t\t\telse if (\$angle <=270) { 
\t\t\t\tif (\$angle <=225) { \$endy=tan(deg2rad(\$angle-180)); }
\t\t\t\telse { \$endx=tan(deg2rad(270-\$angle)); }
\t\t\t\t\$b = atan2((\$endy*\$bboxh), (\$endx*\$bboxw));
\t\t\t\t\$ny = \$coords[1] - (tan(\$b) * (\$coords[0]));
\t\t\t\t\$tx = sin(\$b) * cos(\$b) * \$ny;
\t\t\t\t\$ty = cos(\$b) * cos(\$b) * \$ny;
\t\t\t\t\$coords[2] = -\$tx; \$coords[3] = \$ty; 
\t\t\t}
\t\t\telse { 
\t\t\t\tif (\$angle <=315) { \$endx=tan(deg2rad(\$angle-270)); }
\t\t\t\telse { \$endy=tan(deg2rad(360-\$angle));  }
\t\t\t\t\$b = atan2((\$endy*\$bboxh), (\$endx*\$bboxw));
\t\t\t\t\$ny = \$coords[1] - (tan(\$b) * (1-\$coords[0]));
\t\t\t\t\$tx = sin(\$b) * cos(\$b) * \$ny;
\t\t\t\t\$ty = cos(\$b) * cos(\$b) * \$ny;
\t\t\t\t\$coords[2] = 1+\$tx; \$coords[3] = \$ty; 

\t\t\t}
\t\t  }
\t\t}

\t\t// -moz If the first parameter is only an <angle>, the gradient axis starts from the box's corner that would ensure the 
\t\t// axis goes through the box. The axis runs along the specified angle. The end point of the axis is defined such that the 
\t\t// farthest corner of the box from the starting point is perpendicular to the gradient axis at that point.
\t\t// NO end points or Start points (Angle defined)
\t\telse if (\$angle!==false && \$coords[0]===false && \$coords[1]===false) {
\t\t  if (\$angle==0 || \$angle==360) { \$coords[0]=0; \$coords[1]=0; \$coords[2]=1; \$coords[3]=0; }
\t\t  else if (\$angle==90) { \$coords[0]=0; \$coords[1]=0; \$coords[2]=0; \$coords[3]=1; }
\t\t  else if (\$angle==180) { \$coords[0]=1; \$coords[1]=0; \$coords[2]=0; \$coords[3]=0; }
\t\t  else if (\$angle==270) { \$coords[0]=0; \$coords[1]=1; \$coords[2]=0; \$coords[3]=0; }
\t\t  else {
\t\t\tif (\$angle <=90) { 
\t\t\t\t\$coords[0]=0; \$coords[1]=0; 
\t\t\t\tif (\$angle <=45) { \$endx=1; \$endy=tan(deg2rad(\$angle)); }
\t\t\t\telse { \$endx=tan(deg2rad(90-\$angle)); \$endy=1; }
\t\t\t}
\t\t\telse if (\$angle <=180) { 
\t\t\t\t\$coords[0]=1; \$coords[1]=0; 
\t\t\t\tif (\$angle <=135) { \$endx=tan(deg2rad(\$angle-90)); \$endy=1; }
\t\t\t\telse { \$endx=1; \$endy=tan(deg2rad(180-\$angle)); }
\t\t\t}
\t\t\telse if (\$angle <=270) { 
\t\t\t\t\$coords[0]=1; \$coords[1]=1; 
\t\t\t\tif (\$angle <=225) { \$endx=1; \$endy=tan(deg2rad(\$angle-180)); }
\t\t\t\telse { \$endx=tan(deg2rad(270-\$angle)); \$endy=1; }
\t\t\t}
\t\t\telse { 
\t\t\t\t\$coords[0]=0; \$coords[1]=1; 
\t\t\t\tif (\$angle <=315) { \$endx=tan(deg2rad(\$angle-270)); \$endy=1; }
\t\t\t\telse { \$endx=1; \$endy=tan(deg2rad(360-\$angle));  }
\t\t\t}
\t\t\t\$b = atan2((\$endy*\$bboxh), (\$endx*\$bboxw));
\t\t\t\$h2 = \$bboxh - (\$bboxh * tan(\$b));
\t\t\t\$px = \$bboxh + (\$h2 * sin(\$b) * cos(\$b));
\t\t\t\$py = (\$bboxh * tan(\$b)) + (\$h2 * sin(\$b) * sin(\$b));
\t\t\t\$x1 = \$px / \$bboxh;
\t\t\t\$y1 = \$py / \$bboxh;
\t\t\tif (\$angle <=90) { \$coords[2] = \$x1; \$coords[3] = \$y1; }
\t\t\telse if (\$angle <=180) { \$coords[2] = 1-\$x1; \$coords[3] = \$y1; }
\t\t\telse if (\$angle <=270) { \$coords[2] = 1-\$x1; \$coords[3] = 1-\$y1; }
\t\t\telse { \$coords[2] = \$x1; \$coords[3] = 1-\$y1; }
\t\t  }
\t\t}
\t\t// -moz If the first parameter to the gradient function is only a <point>, the gradient axis starts from the specified point, 
\t\t// and ends at the point you would get if you rotated the starting point by 180 degrees about the center of the box that the 
\t\t// gradient is to be applied to.
\t\t// NO angle and NO end points (Start points defined)
\t\telse if ((!isset(\$angle) || \$angle===false) && \$coords[0]!==false && \$coords[1]!==false) { \t// should have start and end defined
\t\t  \$coords[2] = 1-\$coords[0]; \$coords[3] = 1-\$coords[1];
\t\t  \$angle = rad2deg(atan2(\$coords[3]-\$coords[1],\$coords[2]-\$coords[0]));
\t\t  if (\$angle < 0) { \$angle += 360; }
\t\t  else if (\$angle > 360) { \$angle -= 360; }
\t\t  if (\$angle!=0 && \$angle!=360 && \$angle!=90 && \$angle!=180 && \$angle!=270) { 
\t\t    if (\$w >= \$h) {
\t\t\t\$coords[1] *= \$h/\$w ;
\t\t\t\$coords[3] *= \$h/\$w ;
\t\t\t\$usew = \$useh = \$bboxw;
\t\t\t\$usey -= (\$w-\$h);
\t\t    }
\t\t    else {
\t\t\t\$coords[0] *= \$w/\$h ;
\t\t\t\$coords[2] *= \$w/\$h ;
\t\t\t\$usew = \$useh = \$bboxh;
\t\t    }
\t\t  }
\t\t}

\t\t// -moz If neither a <point> or <angle> is specified, i.e. the entire function consists of only <stop> values, the gradient 
\t\t// axis starts from the top of the box and runs vertically downwards, ending at the bottom of the box.
\t\telse {\t// default values T2B
\t\t\t// All values are set in parseMozGradient - so won't appear here
\t\t\t\$coords = array(0,0,1,0);\t// default for original linear gradient (L2R)
\t\t}
\t\t\$s = ' q';
\t\t\$s .= sprintf(' %.3F %.3F %.3F %.3F re W n', \$x*_MPDFK, (\$this->mpdf->h-\$y)*_MPDFK, \$w*_MPDFK, -\$h*_MPDFK).\"\\n\";
\t\t\$s .= sprintf(' %.3F 0 0 %.3F %.3F %.3F cm', \$usew*_MPDFK, \$useh*_MPDFK, \$usex*_MPDFK, (\$this->mpdf->h-(\$usey+\$useh))*_MPDFK).\"\\n\";
\t}

\t// RADIAL
\telse if (\$type == 3) { 
\t\t\$radius = \$coords[4];
\t\t\$angle = \$coords[5];\t// ?? no effect
\t\t\$shape = \$coords[6];
\t\t\$size = \$coords[7];
\t\t\$repeat = \$coords[8];
\t\t// ALL POINTS AND RADIUS SET (default for custom mPDF radial gradient) - no -moz
\t\tif (\$coords[0]!==false && \$coords[1]!==false && \$coords[2]!==false && \$coords[3]!==false && \$coords[4]!==false) {
\t\t\t// do nothing - coords used as they are
\t\t}
\t\t// If a <point> is defined
\t\telse if (\$shape!==false && \$size!==false) {
\t\t   if (\$coords[2]==false) { \$coords[2] = \$coords[0]; }
\t\t   if (\$coords[3]==false) { \$coords[3] = \$coords[1]; }
\t\t   // ELLIPSE
\t\t   if (\$shape=='ellipse') {
\t\t\t\$corner1 = sqrt(pow(\$coords[0],2) + pow(\$coords[1],2));
\t\t\t\$corner2 = sqrt(pow(\$coords[0],2) + pow((1-\$coords[1]),2));
\t\t\t\$corner3 = sqrt(pow((1-\$coords[0]),2) + pow(\$coords[1],2));
\t\t\t\$corner4 = sqrt(pow((1-\$coords[0]),2) + pow((1-\$coords[1]),2));
\t\t\tif (\$size=='closest-side') { \$radius = min(\$coords[0], \$coords[1], (1-\$coords[0]), (1-\$coords[1])); }
\t\t\telse if (\$size=='closest-corner') { \$radius = min(\$corner1, \$corner2, \$corner3, \$corner4); }
\t\t\telse if (\$size=='farthest-side') { \$radius = max(\$coords[0], \$coords[1], (1-\$coords[0]), (1-\$coords[1])); }
\t\t\telse { \$radius = max(\$corner1, \$corner2, \$corner3, \$corner4); }\t// farthest corner (default)
\t\t   }
\t\t   // CIRCLE
\t\t   else if (\$shape=='circle') {
\t\t    if (\$w >= \$h) {
\t\t\t\$coords[1] = \$coords[3] = (\$coords[1] * \$h/\$w) ;
\t\t\t\$corner1 = sqrt(pow(\$coords[0],2) + pow(\$coords[1],2));
\t\t\t\$corner2 = sqrt(pow(\$coords[0],2) + pow(((\$h/\$w)-\$coords[1]),2));
\t\t\t\$corner3 = sqrt(pow((1-\$coords[0]),2) + pow(\$coords[1],2));
\t\t\t\$corner4 = sqrt(pow((1-\$coords[0]),2) + pow(((\$h/\$w)-\$coords[1]),2));
\t\t\tif (\$size=='closest-side') { \$radius = min(\$coords[0], \$coords[1], (1-\$coords[0]), ((\$h/\$w)-\$coords[1])); }
\t\t\telse if (\$size=='closest-corner') { \$radius = min(\$corner1, \$corner2, \$corner3, \$corner4); }
\t\t\telse if (\$size=='farthest-side') { \$radius = max(\$coords[0], \$coords[1], (1-\$coords[0]), ((\$h/\$w)-\$coords[1])); }
\t\t\telse if (\$size=='farthest-corner') { \$radius = max(\$corner1, \$corner2, \$corner3, \$corner4); }\t// farthest corner (default)
\t\t\t\$usew = \$useh = \$bboxw;
\t\t\t\$usey -= (\$w-\$h);
\t\t    }
\t\t    else {
\t\t\t\$coords[0] = \$coords[2] = (\$coords[0] * \$w/\$h) ;
\t\t\t\$corner1 = sqrt(pow(\$coords[0],2) + pow(\$coords[1],2));
\t\t\t\$corner2 = sqrt(pow(\$coords[0],2) + pow((1-\$coords[1]),2));
\t\t\t\$corner3 = sqrt(pow(((\$w/\$h)-\$coords[0]),2) + pow(\$coords[1],2));
\t\t\t\$corner4 = sqrt(pow(((\$w/\$h)-\$coords[0]),2) + pow((1-\$coords[1]),2));
\t\t\tif (\$size=='closest-side') { \$radius = min(\$coords[0], \$coords[1], ((\$w/\$h)-\$coords[0]), (1-\$coords[1])); }
\t\t\telse if (\$size=='closest-corner') { \$radius = min(\$corner1, \$corner2, \$corner3, \$corner4); }
\t\t\telse if (\$size=='farthest-side') { \$radius = max(\$coords[0], \$coords[1], ((\$w/\$h)-\$coords[0]), (1-\$coords[1])); }
\t\t\telse if (\$size=='farthest-corner') { \$radius = max(\$corner1, \$corner2, \$corner3, \$corner4); }\t// farthest corner (default)
\t\t\t\$usew = \$useh = \$bboxh;
\t\t    }
\t\t   }
\t\t   if (\$radius==0) { \$radius=0.001; }\t// to prevent error
\t\t   \$coords[4] = \$radius; 
\t\t}

\t\t// -moz If entire function consists of only <stop> values
\t\telse {\t// default values 
\t\t\t// All values are set in parseMozGradient - so won't appear here
\t\t\t\$coords = array(0.5,0.5,0.5,0.5);\t// default for radial gradient (centred)
\t\t}
\t\t\$s = ' q';
\t\t\$s .= sprintf(' %.3F %.3F %.3F %.3F re W n', \$x*_MPDFK, (\$this->mpdf->h-\$y)*_MPDFK, \$w*_MPDFK, -\$h*_MPDFK).\"\\n\";
\t\t\$s .= sprintf(' %.3F 0 0 %.3F %.3F %.3F cm', \$usew*_MPDFK, \$useh*_MPDFK, \$usex*_MPDFK, (\$this->mpdf->h-(\$usey+\$useh))*_MPDFK).\"\\n\";
\t}

\t\$n = count(\$this->mpdf->gradients) + 1;
\t\$this->mpdf->gradients[\$n]['type'] = \$type;
\t\$this->mpdf->gradients[\$n]['colorspace'] = \$colorspace;
\t\$trans = false;
\t\$this->mpdf->gradients[\$n]['is_mask'] = \$is_mask;
\tif (\$is_mask) { \$trans = true; }
\tif (count(\$stops) == 1) { \$stops[1] = \$stops[0]; }
\tif (!isset(\$stops[0]['offset'])) { \$stops[0]['offset'] = 0; }
\tif (!isset(\$stops[(count(\$stops)-1)]['offset'])) { \$stops[(count(\$stops)-1)]['offset'] = 1; }

\t// Fix stop-offsets set as absolute lengths
\tif (\$type==2) {
\t\t\$axisx = (\$coords[2]-\$coords[0])*\$usew;
\t\t\$axisy = (\$coords[3]-\$coords[1])*\$useh;
\t\t\$axis_length = sqrt(pow(\$axisx,2) + pow(\$axisy,2));
\t}
\telse { \$axis_length = \$coords[4]*\$usew; }\t// Absolute lengths are meaningless for an ellipse - Firefox uses Width as reference

\tfor(\$i=0;\$i<count(\$stops);\$i++) {
\t  if (isset(\$stops[\$i]['offset']) && preg_match('/([0-9.]+(px|em|ex|pc|pt|cm|mm|in))/i',\$stops[\$i]['offset'],\$m)) { 
\t\t\$tmp = \$this->mpdf->ConvertSize(\$m[1],\$this->mpdf->w,\$this->mpdf->FontSize,false);
\t\t\$stops[\$i]['offset'] = \$tmp/\$axis_length;
\t  }
\t}


\tif (isset(\$stops[0]['offset']) && \$stops[0]['offset']>0) { 
\t\t\$firststop = \$stops[0]; 
\t\t\$firststop['offset'] = 0;
\t\tarray_unshift(\$stops, \$firststop); 
\t}
\tif (!\$repeat && isset(\$stops[(count(\$stops)-1)]['offset']) && \$stops[(count(\$stops)-1)]['offset']<1) {
\t\t\$endstop = \$stops[(count(\$stops)-1)]; 
\t\t\$endstop['offset'] = 1;
\t\t\$stops[] = \$endstop; 
\t}
\tif (\$stops[0]['offset'] > \$stops[(count(\$stops)-1)]['offset']) { 
\t\t\$stops[0]['offset'] = 0;
\t\t\$stops[(count(\$stops)-1)]['offset'] = 1;
\t}

\tfor(\$i=0;\$i<count(\$stops);\$i++) {
\t\t// mPDF 5.3.74
\t\tif (\$colorspace == 'CMYK') {
\t\t\t\$this->mpdf->gradients[\$n]['stops'][\$i]['col'] = sprintf('%.3F %.3F %.3F %.3F', (ord(\$stops[\$i]['col']{1})/100), (ord(\$stops[\$i]['col']{2})/100), (ord(\$stops[\$i]['col']{3})/100), (ord(\$stops[\$i]['col']{4})/100));
\t\t}
\t\telse if (\$colorspace == 'Gray') {
\t\t\t\$this->mpdf->gradients[\$n]['stops'][\$i]['col'] = sprintf('%.3F', (ord(\$stops[\$i]['col']{1})/255));
\t\t}
\t\telse {
\t\t\t\$this->mpdf->gradients[\$n]['stops'][\$i]['col'] = sprintf('%.3F %.3F %.3F', (ord(\$stops[\$i]['col']{1})/255), (ord(\$stops[\$i]['col']{2})/255), (ord(\$stops[\$i]['col']{3})/255));
\t\t}
\t\tif (!isset(\$stops[\$i]['opacity'])) { \$stops[\$i]['opacity'] = 1; } 
\t\telse if (\$stops[\$i]['opacity'] > 1 || \$stops[\$i]['opacity'] < 0) { \$stops[\$i]['opacity'] = 1; } 
\t\telse if (\$stops[\$i]['opacity'] < 1) { 
\t\t\t\$trans = true; 
\t\t}
\t\t\$this->mpdf->gradients[\$n]['stops'][\$i]['opacity'] = \$stops[\$i]['opacity'];
\t\t// OFFSET
\t\tif (\$i>0 && \$i<(count(\$stops)-1)) {
\t\t  if (!isset(\$stops[\$i]['offset']) || (isset(\$stops[\$i+1]['offset']) && \$stops[\$i]['offset']>\$stops[\$i+1]['offset']) || \$stops[\$i]['offset']<\$stops[\$i-1]['offset']) { 
\t\t\tif (isset(\$stops[\$i-1]['offset']) && isset(\$stops[\$i+1]['offset'])) { 
\t\t\t\t\$stops[\$i]['offset'] = (\$stops[\$i-1]['offset']+\$stops[\$i+1]['offset'])/2; 
\t\t\t}
\t\t\telse {
\t\t\t\tfor(\$j=(\$i+1);\$j<count(\$stops);\$j++) {
\t\t\t\t\tif(isset(\$stops[\$j]['offset'])) { break; }
\t\t\t\t}
\t\t\t\t\$int = (\$stops[\$j]['offset'] - \$stops[(\$i-1)]['offset'])/(\$j-\$i+1);
\t\t\t\tfor(\$f=0;\$f<(\$j-\$i-1);\$f++) {
\t\t\t\t\t\$stops[(\$i+\$f)]['offset'] = \$stops[(\$i+\$f-1)]['offset'] + (\$int);
\t\t\t\t}
\t\t\t}
\t\t  }
\t\t}
\t\t\$this->mpdf->gradients[\$n]['stops'][\$i]['offset'] = \$stops[\$i]['offset'];
\t\t\$this->mpdf->gradients[\$n]['stops'][\$i]['offset'] = \$stops[\$i]['offset'];
\t}

\tif (\$repeat) {
\t\t\$ns = count(\$this->mpdf->gradients[\$n]['stops']);
\t\t\$offs = array();
\t\tfor(\$i=0;\$i<\$ns;\$i++) {
\t\t\t\$offs[\$i] = \$this->mpdf->gradients[\$n]['stops'][\$i]['offset'];
\t\t}
\t\t\$gp = 0;
\t\t\$inside=true;
\t\twhile(\$inside) {
\t\t   \$gp++;
\t\t   for(\$i=0;\$i<\$ns;\$i++) {
\t\t\t\$this->mpdf->gradients[\$n]['stops'][((\$ns*\$gp)+\$i)] = \$this->mpdf->gradients[\$n]['stops'][((\$ns*(\$gp-1))+\$i)];
\t\t\t\$tmp = \$this->mpdf->gradients[\$n]['stops'][((\$ns*(\$gp-1))+(\$ns-1))]['offset']+\$offs[\$i] ;
\t\t\tif (\$tmp < 1) { \$this->mpdf->gradients[\$n]['stops'][((\$ns*\$gp)+\$i)]['offset'] = \$tmp; }
\t\t\telse {
\t\t\t\t\$this->mpdf->gradients[\$n]['stops'][((\$ns*\$gp)+\$i)]['offset'] = 1;
\t\t\t\t\$inside = false;
\t\t\t\tbreak(2);
\t\t\t}
\t\t   }
\t\t}
\t}

\tif (\$trans) { 
\t\t\$this->mpdf->gradients[\$n]['trans'] = true;\t
\t\t\$s .= ' /TGS'.\$n.' gs ';
\t}
\tif (!is_array(\$extend) || count(\$extend) <1) { 
\t\t\$extend=array('true', 'true');\t// These are supposed to be quoted - appear in PDF file as text
\t}
\t\$this->mpdf->gradients[\$n]['coords'] = \$coords;
\t\$this->mpdf->gradients[\$n]['extend'] = \$extend;
\t//paint the gradient
\t\$s .= '/Sh'.\$n.' sh '.\"\\n\";
\t//restore previous Graphic State
\t\$s .= ' Q '.\"\\n\";
\tif (\$return) { return \$s; }
\telse { \$this->mpdf->_out(\$s); }
}


function parseMozGradient(\$bg) {
   //\tbackground[-image]: -moz-linear-gradient(left, #c7Fdde 20%, #FF0000 ); 
   //\tbackground[-image]: linear-gradient(left, #c7Fdde 20%, #FF0000 ); // CSS3
   if (preg_match('/repeating-/',\$bg)) { \$repeat = true; }
   else { \$repeat = false; }
   if (preg_match('/linear-gradient\\((.*)\\)/',\$bg,\$m)) {
\t\$g = array();
\t\$g['type'] = 2;
\t\$g['colorspace'] = 'RGB';
\t\$g['extend'] = array('true','true');
\t\$v = trim(\$m[1]);
\t// Change commas inside e.g. rgb(x,x,x)
\twhile(preg_match('/(\\([^\\)]*?),/',\$v)) { \$v = preg_replace('/(\\([^\\)]*?),/','\\\\1@',\$v); }
\t// Remove spaces inside e.g. rgb(x, x, x)
\twhile(preg_match('/(\\([^\\)]*?)[ ]/',\$v)) { \$v = preg_replace('/(\\([^\\)]*?)[ ]/','\\\\1',\$v); }
\t\$bgr = preg_split('/\\s*,\\s*/',\$v);
\tfor(\$i=0;\$i<count(\$bgr);\$i++) { \$bgr[\$i] = preg_replace('/@/', ',', \$bgr[\$i]); }
\t// Is first part \$bgr[0] a valid point/angle?
\t\$first = preg_split('/\\s+/',trim(\$bgr[0]));
\tif (preg_match('/(left|center|right|bottom|top|deg|grad|rad)/i',\$bgr[0]) && !preg_match('/(<#|rgb|rgba|hsl|hsla)/i',\$bgr[0])) {
\t\t\$startStops = 1; 
\t}
\telse if (trim(\$first[(count(\$first)-1)]) === \"0\") {
\t\t\$startStops = 1;
\t}
\telse {
\t\t\$check = \$this->mpdf->ConvertColor(\$first[0]);
\t\tif (\$check) \$startStops = 0; 
\t\telse \$startStops = 1; 
\t}
\t// first part a valid point/angle?
\tif (\$startStops == 1) {\t// default values
\t\t// [<point> || <angle>,] = [<% em px left center right bottom top> || <deg grad rad 0>,]
\t\tif (preg_match('/([\\-]*[0-9\\.]+)(deg|grad|rad)/i',\$bgr[0],\$m)) {
\t\t\t\$angle = \$m[1] + 0;
\t\t\tif (strtolower(\$m[2])=='deg') { \$angle = \$angle; }
\t\t\telse if (strtolower(\$m[2])=='grad') { \$angle *= (360/400); }
\t\t\telse if (strtolower(\$m[2])=='rad') { \$angle = rad2deg(\$angle); }
\t\t\twhile(\$angle < 0) { \$angle += 360; }
\t\t\t\$angle = (\$angle % 360);
\t\t}
\t\telse if (trim(\$first[(count(\$first)-1)]) === \"0\") { \$angle = 0; }
\t\tif (preg_match('/left/i',\$bgr[0])) { \$startx = 0; }
\t\telse if (preg_match('/right/i',\$bgr[0])) { \$startx = 1; }
\t\tif (preg_match('/top/i',\$bgr[0])) { \$starty = 1; }
\t\telse if (preg_match('/bottom/i',\$bgr[0])) { \$starty = 0; }
\t\t// Check for %? ?% or %%
\t\tif (preg_match('/(\\d+)[%]/i',\$first[0],\$m)) { \$startx = \$m[1]/100; }
\t\telse if (!isset(\$startx) && preg_match('/([0-9.]+(px|em|ex|pc|pt|cm|mm|in))/i',\$first[0],\$m)) { 
\t\t\t\$tmp = \$this->mpdf->ConvertSize(\$m[1],\$this->mpdf->w,\$this->mpdf->FontSize,false);
\t\t\tif (\$tmp) { \$startx = \$m[1]; }
\t\t}
\t\tif (isset(\$first[1]) && preg_match('/(\\d+)[%]/i',\$first[1],\$m)) { \$starty = 1 - (\$m[1]/100); }
\t\telse if (!isset(\$starty) && preg_match('/([0-9.]+(px|em|ex|pc|pt|cm|mm|in))/i',\$first[1],\$m)) { 
\t\t\t\$tmp = \$this->mpdf->ConvertSize(\$m[1],\$this->mpdf->w,\$this->mpdf->FontSize,false);
\t\t\tif (\$tmp) { \$starty = \$m[1]; }
\t\t}
\t\tif (isset(\$startx) && !isset(\$starty)) { \$starty = 0.5; }
\t\tif (!isset(\$startx) && isset(\$starty)) { \$startx = 0.5; }

\t}
\t// If neither a <point> or <angle> is specified, i.e. the entire function consists of only <stop> values, the gradient axis starts from the top of the box and runs vertically downwards, ending at the bottom of the box.
\telse {\t// default values T2B
\t\t\$starty = 1; \$startx = 0.5;
\t\t\$endy = 0; \$endx = 0.5;
\t}
\t\$coords = array();
\tif (!isset(\$startx)) { \$startx = false; }
\tif (!isset(\$starty)) { \$starty = false; }
\tif (!isset(\$endx)) { \$endx = false; }
\tif (!isset(\$endy)) { \$endy = false; }
\tif (!isset(\$angle)) { \$angle = false; }
\t\$g['coords'] = array(\$startx ,\$starty ,\$endx ,\$endy, \$angle, \$repeat );
\t\$g['stops'] = array();
\tfor(\$i=\$startStops;\$i<count(\$bgr);\$i++) {
\t\t\$stop = array();
\t\t// parse stops
\t\t\$el = preg_split('/\\s+/',trim(\$bgr[\$i]));
\t\t// mPDF 5.3.74
\t\t\$col = \$this->mpdf->ConvertColor(\$el[0]);
\t\tif (\$col) { \$stop['col'] = \$col; }
\t\telse { \$stop['col'] = \$col = \$this->mpdf->ConvertColor(255); }
\t\tif (\$col{0}==1) \$g['colorspace'] = 'Gray';
\t\telse if (\$col{0}==4 || \$col{0}==6) \$g['colorspace'] = 'CMYK';
\t\tif (\$col{0}==5) { \$stop['opacity'] = ord(\$col{4})/100; }\t// transparency from rgba()
\t\telse if (\$col{0}==6) { \$stop['opacity'] = ord(\$col{5})/100; }\t// transparency from cmyka()
\t\telse if (\$col{0}==1 && \$col{2}==1) { \$stop['opacity'] = ord(\$col{3})/100; }\t// transparency converted from rgba or cmyka()

\t\tif (isset(\$el[1]) && preg_match('/(\\d+)[%]/',\$el[1],\$m)) { 
\t\t\t\$stop['offset'] = \$m[1]/100;
\t\t\tif (\$stop['offset']>1) { unset(\$stop['offset']); }
\t\t}
\t\telse if (isset(\$el[1]) && preg_match('/([0-9.]+(px|em|ex|pc|pt|cm|mm|in))/i',\$el[1],\$m)) { 
\t\t\t\$tmp = \$this->mpdf->ConvertSize(\$m[1],\$this->mpdf->w,\$this->mpdf->FontSize,false);
\t\t\tif (\$tmp) { \$stop['offset'] = \$m[1]; }
\t\t}
\t\t\$g['stops'][] = \$stop;
\t}
\tif (count(\$g['stops'] )) { return \$g; }
   }
   else if (preg_match('/radial-gradient\\((.*)\\)/',\$bg,\$m)) {
\t\$g = array();
\t\$g['type'] = 3;
\t\$g['colorspace'] = 'RGB';
\t\$g['extend'] = array('true','true');
\t\$v = trim(\$m[1]);
\t// Change commas inside e.g. rgb(x,x,x)
\twhile(preg_match('/(\\([^\\)]*?),/',\$v)) { \$v = preg_replace('/(\\([^\\)]*?),/','\\\\1@',\$v); }
\t// Remove spaces inside e.g. rgb(x, x, x)
\twhile(preg_match('/(\\([^\\)]*?)[ ]/',\$v)) { \$v = preg_replace('/(\\([^\\)]*?)[ ]/','\\\\1',\$v); }
\t\$bgr = preg_split('/\\s*,\\s*/',\$v);
\tfor(\$i=0;\$i<count(\$bgr);\$i++) { \$bgr[\$i] = preg_replace('/@/', ',', \$bgr[\$i]); }

\t// Is first part \$bgr[0] a valid point/angle?
\t\$startStops = 0; 
\t\$pos_angle = false;
\t\$shape_size = false;
\t\$first = preg_split('/\\s+/',trim(\$bgr[0]));
\t\$checkCol = \$this->mpdf->ConvertColor(\$first[0]);
\tif (preg_match('/(left|center|right|bottom|top|deg|grad|rad)/i',\$bgr[0]) && !preg_match('/(<#|rgb|rgba|hsl|hsla)/i',\$bgr[0])) {
\t\t\$startStops=1; 
\t\t\$pos_angle = \$bgr[0];
\t}
\telse if (trim(\$first[(count(\$first)-1)]) === \"0\") {
\t\t\$startStops=1;
\t\t\$pos_angle = \$bgr[0];
\t}
\telse if (preg_match('/(circle|ellipse|closest-side|closest-corner|farthest-side|farthest-corner|contain|cover)/i',\$bgr[0])) {
\t\t\$startStops=1; 
\t\t\$shape_size = \$bgr[0];
\t}
\telse if (!\$checkCol) {
\t\t\$startStops=1;
 \t\t\$pos_angle = \$bgr[0];
\t}
\tif (preg_match('/(circle|ellipse|closest-side|closest-corner|farthest-side|farthest-corner|contain|cover)/i',\$bgr[1])) {
\t\t\$startStops=2; 
\t\t\$shape_size = \$bgr[1];
\t}

\t// If valid point/angle?
\tif (\$pos_angle) {\t// default values
\t\t// [<point> || <angle>,] = [<% em px left center right bottom top> || <deg grad rad 0>,]
\t\tif (preg_match('/left/i',\$pos_angle)) { \$startx = 0; }
\t\telse if (preg_match('/right/i',\$pos_angle)) { \$startx = 1; }
\t\tif (preg_match('/top/i',\$pos_angle)) { \$starty = 1; }
\t\telse if (preg_match('/bottom/i',\$pos_angle)) { \$starty = 0; }
\t\t// Check for %? ?% or %%
\t\tif (preg_match('/(\\d+)[%]/i',\$first[0],\$m)) { \$startx = \$m[1]/100; }
\t\telse if (!isset(\$startx) && preg_match('/([0-9.]+(px|em|ex|pc|pt|cm|mm|in))/i',\$first[0],\$m)) { 
\t\t\t\$tmp = \$this->mpdf->ConvertSize(\$m[1],\$this->mpdf->w,\$this->mpdf->FontSize,false);
\t\t\tif (\$tmp) { \$startx = \$m[1]; }
\t\t}
\t\tif (isset(\$first[1]) && preg_match('/(\\d+)[%]/i',\$first[1],\$m)) { \$starty = 1 - (\$m[1]/100); }
\t\telse if (!isset(\$starty) && preg_match('/([0-9.]+(px|em|ex|pc|pt|cm|mm|in))/i',\$first[1],\$m)) { 
\t\t\t\$tmp = \$this->mpdf->ConvertSize(\$m[1],\$this->mpdf->w,\$this->mpdf->FontSize,false);
\t\t\tif (\$tmp) { \$starty = \$m[1]; }
\t\t}

/*
\t\t// ?? Angle has no effect in radial gradient (does not exist in CSS3 spec.)
\t\tif (preg_match('/([\\-]*[0-9\\.]+)(deg|grad|rad)/i',\$pos_angle,\$m)) {
\t\t\t\$angle = \$m[1] + 0;
\t\t\tif (strtolower(\$m[2])=='deg') { \$angle = \$angle; }
\t\t\telse if (strtolower(\$m[2])=='grad') { \$angle *= (360/400); }
\t\t\telse if (strtolower(\$m[2])=='rad') { \$angle = rad2deg(\$angle); }
\t\t\twhile(\$angle < 0) { \$angle += 360; }
\t\t\t\$angle = (\$angle % 360);
\t\t}
*/
\t\tif (!isset(\$starty)) { \$starty = 0.5; }
\t\tif (!isset(\$startx)) { \$startx = 0.5; }

\t}
\t// If neither a <point> or <angle> is specified, i.e. the entire function consists of only <stop> values, the gradient axis starts from the top of the box and runs vertically downwards, ending at the bottom of the box.
\telse {\t// default values Center
\t\t\$starty = 0.5; \$startx = 0.5;
\t\t\$endy = 0.5; \$endx = 0.5;
\t}

\t// If valid shape/size?
\t\$shape = 'ellipse';\t// default
\t\$size = 'farthest-corner';\t// default
\tif (\$shape_size) {\t// default values
\t\tif (preg_match('/(circle|ellipse)/i',\$shape_size, \$m)) {
\t\t\t\$shape = \$m[1];
\t\t}
\t\tif (preg_match('/(closest-side|closest-corner|farthest-side|farthest-corner|contain|cover)/i',\$shape_size, \$m)) {
\t\t\t\$size = \$m[1];
\t\t\tif (\$size=='contain') { \$size = 'closest-side'; }
\t\t\telse if (\$size=='cover') { \$size = 'farthest-corner'; }
\t\t}
\t}

\t\$coords = array();
\tif (!isset(\$startx)) { \$startx = false; }
\tif (!isset(\$starty)) { \$starty = false; }
\tif (!isset(\$endx)) { \$endx = false; }
\tif (!isset(\$endy)) { \$endy = false; }
\tif (!isset(\$radius)) { \$radius = false; }
\tif (!isset(\$angle)) { \$angle = 0; }
\t\$g['coords'] = array(\$startx ,\$starty ,\$endx ,\$endy, \$radius, \$angle, \$shape, \$size, \$repeat );

\t\$g['stops'] = array();
\tfor(\$i=\$startStops;\$i<count(\$bgr);\$i++) {
\t\t\$stop = array();
\t\t// parse stops
\t\t\$el = preg_split('/\\s+/',trim(\$bgr[\$i]));
\t\t// mPDF 5.3.74
\t\t\$col = \$this->mpdf->ConvertColor(\$el[0]);
\t\tif (\$col) { \$stop['col'] = \$col; }
\t\telse { \$stop['col'] = \$col = \$this->mpdf->ConvertColor(255); }
\t\tif (\$col{0}==1) \$g['colorspace'] = 'Gray';
\t\telse if (\$col{0}==4 || \$col{0}==6) \$g['colorspace'] = 'CMYK';
\t\tif (\$col{0}==5) { \$stop['opacity'] = ord(\$col{4})/100; }\t// transparency from rgba()
\t\telse if (\$col{0}==6) { \$stop['opacity'] = ord(\$col{5})/100; }\t// transparency from cmyka()
\t\telse if (\$col{0}==1 && \$col{2}==1) { \$stop['opacity'] = ord(\$col{3})/100; }\t// transparency converted from rgba or cmyka()

\t\tif (isset(\$el[1]) && preg_match('/(\\d+)[%]/',\$el[1],\$m)) { 
\t\t\t\$stop['offset'] = \$m[1]/100;
\t\t\tif (\$stop['offset']>1) { unset(\$stop['offset']); }
\t\t}
\t\telse if (isset(\$el[1]) && preg_match('/([0-9.]+(px|em|ex|pc|pt|cm|mm|in))/i',\$el[1],\$m)) { 
\t\t\t\$tmp = \$this->mpdf->ConvertSize(\$m[1],\$this->mpdf->w,\$this->mpdf->FontSize,false);
\t\t\t\$stop['offset'] = \$el[1];
\t\t}
\t\t\$g['stops'][] = \$stop;
\t}
\tif (count(\$g['stops'] )) { return \$g; }
   }
   return array();
} 

function parseBackgroundGradient(\$bg) {
\t// background-gradient: linear #00FFFF #FFFF00 0 0.5 1 0.5;  or
\t// background-gradient: radial #00FFFF #FFFF00 0.5 0.5 1 1 1.2;

\t\$v = trim(\$bg);
\t\$bgr = preg_split('/\\s+/',\$v);
\t\$g = array();
\tif (count(\$bgr)> 6) {  
\t\tif (strtoupper(substr(\$bgr[0],0,1)) == 'L' && count(\$bgr)==7) {  // linear
\t\t\t\$g['type'] = 2;
\t\t\t//\$coords = array(0,0,1,1 );\t// 0 0 1 0 or 0 1 1 1 is L 2 R; 1,1,0,1 is R2L; 1,1,1,0 is T2B; 1,0,1,1 is B2T
\t\t\t// Linear: \$coords - array of the form (x1, y1, x2, y2) which defines the gradient vector (see linear_gradient_coords.jpg). 
\t\t\t//    The default value is from left to right (x1=0, y1=0, x2=1, y2=0).
\t\t\t\$g['coords'] = array(\$bgr[3], \$bgr[4], \$bgr[5], \$bgr[6]);
\t\t}
\t\telse if (count(\$bgr)==8) {\t// radial
\t\t\t\$g['type'] = 3;
\t\t\t// Radial: \$coords - array of the form (fx, fy, cx, cy, r) where (fx, fy) is the starting point of the gradient with color1, 
\t\t\t//    (cx, cy) is the center of the circle with color2, and r is the radius of the circle (see radial_gradient_coords.jpg). 
\t\t\t//    (fx, fy) should be inside the circle, otherwise some areas will not be defined
\t\t\t\$g['coords'] = array(\$bgr[3], \$bgr[4], \$bgr[5], \$bgr[6], \$bgr[7]);
\t\t}
\t\t\$g['colorspace'] = 'RGB';
\t\t// mPDF 5.3.74
\t\t\$cor = \$this->mpdf->ConvertColor(\$bgr[1]);
\t\tif (\$cor{0}==1) \$g['colorspace'] = 'Gray';
\t\telse if (\$cor{0}==4 || \$cor{0}==6) \$g['colorspace'] = 'CMYK';
\t\tif (\$cor) { \$g['col'] = \$cor; }
\t\telse { \$g['col'] = \$this->mpdf->ConvertColor(255); }
\t\t\$cor = \$this->mpdf->ConvertColor(\$bgr[2]);
\t\tif (\$cor) { \$g['col2'] = \$cor; }
\t\telse { \$g['col2'] = \$this->mpdf->ConvertColor(255); }
\t\t\$g['extend'] = array('true','true');
\t\t\$g['stops'] = array(array('col'=>\$g['col'], 'opacity'=>1, 'offset'=>0), array('col'=>\$g['col2'], 'opacity'=>1, 'offset'=>1));
\t\treturn \$g;
\t}
\treturn false;
}



}

?>";
    }

    public function getTemplateName()
    {
        return "support/include/mpdf/classes/grad.php";
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
        return new Twig_Source("", "support/include/mpdf/classes/grad.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\mpdf\\classes\\grad.php");
    }
}
