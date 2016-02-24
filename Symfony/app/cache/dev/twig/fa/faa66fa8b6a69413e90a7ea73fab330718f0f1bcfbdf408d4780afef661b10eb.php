<?php

/* support/include/class.http.php */
class __TwigTemplate_94154c50d5536a459dfa864c69e0345747a201c8920cb0ab76e5b728c01c567b extends Twig_Template
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
        $__internal_b2737a414370c972e0031fcccd6a0af9e3678671a354baa299432839a4536bac = $this->env->getExtension("native_profiler");
        $__internal_b2737a414370c972e0031fcccd6a0af9e3678671a354baa299432839a4536bac->enter($__internal_b2737a414370c972e0031fcccd6a0af9e3678671a354baa299432839a4536bac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.http.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.http.php

    Http helper.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
class Http {

    function header_code_verbose(\$code) {
        switch(\$code):
        case 200: return '200 OK';
        case 201: return '201 Created';
        case 204: return '204 No Content';
        case 205: return '205 Reset Content';
        case 400: return '400 Bad Request';
        case 401: return '401 Unauthorized';
        case 403: return '403 Forbidden';
        case 404: return '404 Not Found';
        case 405: return '405 Method Not Allowed';
        case 416: return '416 Requested Range Not Satisfiable';
        case 422: return '422 Unprocessable Entity';
        default:  return '500 Internal Server Error';
        endswitch;
    }

    function response(\$code,\$content,\$contentType='text/html',\$charset='UTF-8') {

        header('HTTP/1.1 '.Http::header_code_verbose(\$code));
\t\theader('Status: '.Http::header_code_verbose(\$code).\"\\r\\n\");
\t\theader(\"Connection: Close\\r\\n\");
\t\theader(\"Content-Type: \$contentType; charset=\$charset\\r\\n\");
        header('Content-Length: '.strlen(\$content).\"\\r\\n\\r\\n\");
       \tprint \$content;
        exit;
    }

    function redirect(\$url,\$delay=0,\$msg='') {

        \$iis = strpos(\$_SERVER['SERVER_SOFTWARE'], 'IIS') !== false;
        @list(\$name, \$version) = explode('/', \$_SERVER['SERVER_SOFTWARE']);
        // Legacy code for older versions of IIS that would not emit the
        // correct HTTP status and headers when using the `Location`
        // header alone
        if (\$iis && version_compare(\$version, '7.0', '<')) {
            header(\"Refresh: \$delay; URL=\$url\");
        }else{
            header(\"Location: \$url\");
        }
        print('<html></html>');
        flush();
        ob_flush();
        exit;
    }

    function cacheable(\$etag, \$modified, \$ttl=3600) {
        // Thanks, http://stackoverflow.com/a/1583753/1025836
        // Timezone doesn't matter here — but the time needs to be
        // consistent round trip to the browser and back.
        \$last_modified = strtotime(\$modified.\" GMT\");
        header(\"Last-Modified: \".date('D, d M Y H:i:s', \$last_modified).\" GMT\", false);
        header('ETag: \"'.\$etag.'\"');
        header(\"Cache-Control: private, max-age=\$ttl\");
        header('Expires: ' . gmdate('D, d M Y H:i:s', Misc::gmtime() + \$ttl).\" GMT\");
        header('Pragma: private');
        if (@strtotime(\$_SERVER['HTTP_IF_MODIFIED_SINCE']) == \$last_modified ||
            @trim(\$_SERVER['HTTP_IF_NONE_MATCH'], '\"') == \$etag) {
                header(\"HTTP/1.1 304 Not Modified\");
                exit();
        }
    }

    /**
     * Creates the filename=... part of the Content-Disposition header. This
     * is browser dependent, so the user agent is inspected to determine the
     * best encoding format for the filename
     */
    function getDispositionFilename(\$filename) {
        \$user_agent = strtolower (\$_SERVER['HTTP_USER_AGENT']);
        if (false !== strpos(\$user_agent,'msie')
                && false !== strpos(\$user_agent,'win'))
            return 'filename='.rawurlencode(\$filename);
        elseif (false !== strpos(\$user_agent, 'safari')
                && false === strpos(\$user_agent, 'chrome'))
            // Safari and Safari only can handle the filename as is
            return 'filename='.str_replace(',', '', \$filename);
        else
            // Use RFC5987
            return \"filename*=UTF-8''\".rawurlencode(\$filename);
    }

    function download(\$filename, \$type, \$data=null, \$disposition='attachment') {
        header('Pragma: private');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Cache-Control: private', false);
        header('Content-Type: '.\$type);
        header(sprintf('Content-Disposition: %s; %s',
            \$disposition,
            self::getDispositionFilename(basename(\$filename))));
        header('Content-Transfer-Encoding: binary');
        if (\$data !== null) {
            header('Content-Length: '.strlen(\$data));
            print \$data;
            exit;
        }
    }

    static function build_query(\$vars, \$encode=true, \$separator='&amp;') {
        return http_build_query(
                (\$encode ? Format::htmlchars(\$vars) : \$vars), '', \$separator);
    }
}
?>
";
        
        $__internal_b2737a414370c972e0031fcccd6a0af9e3678671a354baa299432839a4536bac->leave($__internal_b2737a414370c972e0031fcccd6a0af9e3678671a354baa299432839a4536bac_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.http.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.http.php*/
/* */
/*     Http helper.*/
/* */
/*     Peter Rotich <peter@osticket.com>*/
/*     Copyright (c)  2006-2013 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/* **********************************************************************//* */
/* class Http {*/
/* */
/*     function header_code_verbose($code) {*/
/*         switch($code):*/
/*         case 200: return '200 OK';*/
/*         case 201: return '201 Created';*/
/*         case 204: return '204 No Content';*/
/*         case 205: return '205 Reset Content';*/
/*         case 400: return '400 Bad Request';*/
/*         case 401: return '401 Unauthorized';*/
/*         case 403: return '403 Forbidden';*/
/*         case 404: return '404 Not Found';*/
/*         case 405: return '405 Method Not Allowed';*/
/*         case 416: return '416 Requested Range Not Satisfiable';*/
/*         case 422: return '422 Unprocessable Entity';*/
/*         default:  return '500 Internal Server Error';*/
/*         endswitch;*/
/*     }*/
/* */
/*     function response($code,$content,$contentType='text/html',$charset='UTF-8') {*/
/* */
/*         header('HTTP/1.1 '.Http::header_code_verbose($code));*/
/* 		header('Status: '.Http::header_code_verbose($code)."\r\n");*/
/* 		header("Connection: Close\r\n");*/
/* 		header("Content-Type: $contentType; charset=$charset\r\n");*/
/*         header('Content-Length: '.strlen($content)."\r\n\r\n");*/
/*        	print $content;*/
/*         exit;*/
/*     }*/
/* */
/*     function redirect($url,$delay=0,$msg='') {*/
/* */
/*         $iis = strpos($_SERVER['SERVER_SOFTWARE'], 'IIS') !== false;*/
/*         @list($name, $version) = explode('/', $_SERVER['SERVER_SOFTWARE']);*/
/*         // Legacy code for older versions of IIS that would not emit the*/
/*         // correct HTTP status and headers when using the `Location`*/
/*         // header alone*/
/*         if ($iis && version_compare($version, '7.0', '<')) {*/
/*             header("Refresh: $delay; URL=$url");*/
/*         }else{*/
/*             header("Location: $url");*/
/*         }*/
/*         print('<html></html>');*/
/*         flush();*/
/*         ob_flush();*/
/*         exit;*/
/*     }*/
/* */
/*     function cacheable($etag, $modified, $ttl=3600) {*/
/*         // Thanks, http://stackoverflow.com/a/1583753/1025836*/
/*         // Timezone doesn't matter here — but the time needs to be*/
/*         // consistent round trip to the browser and back.*/
/*         $last_modified = strtotime($modified." GMT");*/
/*         header("Last-Modified: ".date('D, d M Y H:i:s', $last_modified)." GMT", false);*/
/*         header('ETag: "'.$etag.'"');*/
/*         header("Cache-Control: private, max-age=$ttl");*/
/*         header('Expires: ' . gmdate('D, d M Y H:i:s', Misc::gmtime() + $ttl)." GMT");*/
/*         header('Pragma: private');*/
/*         if (@strtotime($_SERVER['HTTP_IF_MODIFIED_SINCE']) == $last_modified ||*/
/*             @trim($_SERVER['HTTP_IF_NONE_MATCH'], '"') == $etag) {*/
/*                 header("HTTP/1.1 304 Not Modified");*/
/*                 exit();*/
/*         }*/
/*     }*/
/* */
/*     /***/
/*      * Creates the filename=... part of the Content-Disposition header. This*/
/*      * is browser dependent, so the user agent is inspected to determine the*/
/*      * best encoding format for the filename*/
/*      *//* */
/*     function getDispositionFilename($filename) {*/
/*         $user_agent = strtolower ($_SERVER['HTTP_USER_AGENT']);*/
/*         if (false !== strpos($user_agent,'msie')*/
/*                 && false !== strpos($user_agent,'win'))*/
/*             return 'filename='.rawurlencode($filename);*/
/*         elseif (false !== strpos($user_agent, 'safari')*/
/*                 && false === strpos($user_agent, 'chrome'))*/
/*             // Safari and Safari only can handle the filename as is*/
/*             return 'filename='.str_replace(',', '', $filename);*/
/*         else*/
/*             // Use RFC5987*/
/*             return "filename*=UTF-8''".rawurlencode($filename);*/
/*     }*/
/* */
/*     function download($filename, $type, $data=null, $disposition='attachment') {*/
/*         header('Pragma: private');*/
/*         header('Cache-Control: must-revalidate, post-check=0, pre-check=0');*/
/*         header('Cache-Control: private', false);*/
/*         header('Content-Type: '.$type);*/
/*         header(sprintf('Content-Disposition: %s; %s',*/
/*             $disposition,*/
/*             self::getDispositionFilename(basename($filename))));*/
/*         header('Content-Transfer-Encoding: binary');*/
/*         if ($data !== null) {*/
/*             header('Content-Length: '.strlen($data));*/
/*             print $data;*/
/*             exit;*/
/*         }*/
/*     }*/
/* */
/*     static function build_query($vars, $encode=true, $separator='&amp;') {*/
/*         return http_build_query(*/
/*                 ($encode ? Format::htmlchars($vars) : $vars), '', $separator);*/
/*     }*/
/* }*/
/* ?>*/
/* */
