<?php

/* support/include/mpdf/includes/out.php */
class __TwigTemplate_179801073b37bfd00f9c2cb337950e47a4ba7b4c1836a0005f39e4d2141a7c03 extends Twig_Template
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
        $__internal_b49d64e7eedcec28e87f7fef791d87cc87a722c8a766fbb84c8a9c4bc9cca779 = $this->env->getExtension("native_profiler");
        $__internal_b49d64e7eedcec28e87f7fef791d87cc87a722c8a766fbb84c8a9c4bc9cca779->enter($__internal_b49d64e7eedcec28e87f7fef791d87cc87a722c8a766fbb84c8a9c4bc9cca779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/mpdf/includes/out.php"));

        // line 1
        echo "<?php

\$path = '../tmp/';

\$tempfilename = \$_REQUEST['filename'].'.pdf';
if (strstr(\$tempfilename,'/') || strstr(\$tempfilename,'\\\\')) { die(\"Filename should not contain \\ or / \"); }
\$opname = \$_REQUEST['opname'];
\$dest = \$_REQUEST['dest'];
\tif (\$tempfilename && file_exists(\$path.\$tempfilename)) {
\t\t// mPDF 5.3.17
\t\tif (\$dest=='I') {
\t\t\tif(PHP_SAPI!='cli') {
\t\t\t\theader('Content-Type: application/pdf');
\t\t\t\theader('Content-disposition: inline; filename=\"'.\$name.'\"');
\t\t\t\theader('Cache-Control: public, must-revalidate, max-age=0'); 
\t\t\t\theader('Pragma: public');
\t\t\t\theader('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); 
\t\t\t\theader('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
\t\t\t}
\t\t}

\t\telse if (\$dest=='D') {
\t\t\theader('Content-Description: File Transfer');
\t\t\tif (headers_sent())
\t\t\t\t\$this->Error('Some data has already been output to browser, can\\'t send PDF file');
\t\t\theader('Content-Transfer-Encoding: binary');
\t\t\theader('Cache-Control: public, must-revalidate, max-age=0');
\t\t\theader('Pragma: public');
\t\t\theader('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
\t\t\theader('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');
\t\t\theader('Content-Type: application/force-download');
\t\t\theader('Content-Type: application/octet-stream', false);
\t\t\theader('Content-Type: application/download', false);
\t\t\theader('Content-Type: application/pdf', false);
\t\t\theader('Content-disposition: attachment; filename=\"'.\$name.'\"');
\t\t}
\t\t\$filesize = filesize(\$path.\$tempfilename);
\t\tif (!isset(\$_SERVER['HTTP_ACCEPT_ENCODING']) OR empty(\$_SERVER['HTTP_ACCEPT_ENCODING'])) {
\t\t\t// don't use length if server using compression
\t\t\theader('Content-Length: '.\$filesize);
\t\t}
\t\t\$fd=fopen(\$path.\$tempfilename,'rb');
\t\tfpassthru(\$fd);
\t\tfclose(\$fd);
\t\tunlink(\$path.\$tempfilename);
\t\t// ====================== DELETE OLD FILES - Housekeeping =========================================
\t\t// Clear any files in directory that are >24 hrs old
\t\t\$interval = 86400;
\t\tif (\$handle = opendir(dirname(\$path.'dummy'))) {
\t\t   while (false !== (\$file = readdir(\$handle))) { 
\t\t\tif (((filemtime(\$path.\$file)+\$interval) < time()) && (\$file != \"..\") && (\$file != \".\") && substr(\$file, -3)=='pdf') { 
\t\t\t\tunlink(\$path.\$file); 
\t\t\t}
\t\t   }
\t\t   closedir(\$handle); 
\t\t}
\t\texit;
\t}
?>";
        
        $__internal_b49d64e7eedcec28e87f7fef791d87cc87a722c8a766fbb84c8a9c4bc9cca779->leave($__internal_b49d64e7eedcec28e87f7fef791d87cc87a722c8a766fbb84c8a9c4bc9cca779_prof);

    }

    public function getTemplateName()
    {
        return "support/include/mpdf/includes/out.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* */
/* $path = '../tmp/';*/
/* */
/* $tempfilename = $_REQUEST['filename'].'.pdf';*/
/* if (strstr($tempfilename,'/') || strstr($tempfilename,'\\')) { die("Filename should not contain \ or / "); }*/
/* $opname = $_REQUEST['opname'];*/
/* $dest = $_REQUEST['dest'];*/
/* 	if ($tempfilename && file_exists($path.$tempfilename)) {*/
/* 		// mPDF 5.3.17*/
/* 		if ($dest=='I') {*/
/* 			if(PHP_SAPI!='cli') {*/
/* 				header('Content-Type: application/pdf');*/
/* 				header('Content-disposition: inline; filename="'.$name.'"');*/
/* 				header('Cache-Control: public, must-revalidate, max-age=0'); */
/* 				header('Pragma: public');*/
/* 				header('Expires: Sat, 26 Jul 1997 05:00:00 GMT'); */
/* 				header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');*/
/* 			}*/
/* 		}*/
/* */
/* 		else if ($dest=='D') {*/
/* 			header('Content-Description: File Transfer');*/
/* 			if (headers_sent())*/
/* 				$this->Error('Some data has already been output to browser, can\'t send PDF file');*/
/* 			header('Content-Transfer-Encoding: binary');*/
/* 			header('Cache-Control: public, must-revalidate, max-age=0');*/
/* 			header('Pragma: public');*/
/* 			header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');*/
/* 			header('Last-Modified: '.gmdate('D, d M Y H:i:s').' GMT');*/
/* 			header('Content-Type: application/force-download');*/
/* 			header('Content-Type: application/octet-stream', false);*/
/* 			header('Content-Type: application/download', false);*/
/* 			header('Content-Type: application/pdf', false);*/
/* 			header('Content-disposition: attachment; filename="'.$name.'"');*/
/* 		}*/
/* 		$filesize = filesize($path.$tempfilename);*/
/* 		if (!isset($_SERVER['HTTP_ACCEPT_ENCODING']) OR empty($_SERVER['HTTP_ACCEPT_ENCODING'])) {*/
/* 			// don't use length if server using compression*/
/* 			header('Content-Length: '.$filesize);*/
/* 		}*/
/* 		$fd=fopen($path.$tempfilename,'rb');*/
/* 		fpassthru($fd);*/
/* 		fclose($fd);*/
/* 		unlink($path.$tempfilename);*/
/* 		// ====================== DELETE OLD FILES - Housekeeping =========================================*/
/* 		// Clear any files in directory that are >24 hrs old*/
/* 		$interval = 86400;*/
/* 		if ($handle = opendir(dirname($path.'dummy'))) {*/
/* 		   while (false !== ($file = readdir($handle))) { */
/* 			if (((filemtime($path.$file)+$interval) < time()) && ($file != "..") && ($file != ".") && substr($file, -3)=='pdf') { */
/* 				unlink($path.$file); */
/* 			}*/
/* 		   }*/
/* 		   closedir($handle); */
/* 		}*/
/* 		exit;*/
/* 	}*/
/* ?>*/
