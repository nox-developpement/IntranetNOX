<?php

/* support/include/class.http.php */
class __TwigTemplate_5999db2148b58454e7e41fdda924ba12ddf1213f8722dcb1895cb440b1585c95 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/include/class.http.php";
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
        return new Twig_Source("", "support/include/class.http.php", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\include\\class.http.php");
    }
}
