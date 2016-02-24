<?php

/* support/include/class.json.php */
class __TwigTemplate_d63db1fbb2b3d38f360f9f5498d89a1136730c4b96dea3a207f7f142bb9ac762 extends Twig_Template
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
        $__internal_f9e275a118e292851ebb0bb73e9b64d8edff68a26851b06e49deda8a7710f99a = $this->env->getExtension("native_profiler");
        $__internal_f9e275a118e292851ebb0bb73e9b64d8edff68a26851b06e49deda8a7710f99a->enter($__internal_f9e275a118e292851ebb0bb73e9b64d8edff68a26851b06e49deda8a7710f99a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.json.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.json.php

    Parses JSON text data to PHP associative array. Useful mainly for API
    JSON requests. The module will attempt to use the json_* functions
    builtin to PHP5.2+ if they exist and will fall back to a pure-php
    implementation included in JSON.php.

    Jared Hancock
    Copyright (c)  2006-2010 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    \$Id: \$
**********************************************************************/

include_once \"JSON.php\";

class JsonDataParser {
    function parse(\$stream) {
        if (is_resource(\$stream)) {
            \$contents = '';
            while (!feof(\$stream))
                \$contents .= fread(\$stream, 8192);
        } else
            \$contents = \$stream;
        return self::decode(\$contents);
    }

    function decode(\$contents) {
        if (function_exists(\"json_decode\")) {
            return json_decode(\$contents, true);
        } else {
            # Create associative arrays rather than 'objects'
            \$decoder = new Services_JSON(SERVICES_JSON_LOOSE_TYPE);
            return \$decoder->decode(\$contents);
        }
    }
    function lastError() {
        if (function_exists(\"json_last_error\")) {
            \$errors = array(
            JSON_ERROR_NONE => __('No errors'),
            JSON_ERROR_DEPTH => __('Maximum stack depth exceeded'),
            JSON_ERROR_STATE_MISMATCH => __('Underflow or the modes mismatch'),
            JSON_ERROR_CTRL_CHAR => __('Unexpected control character found'),
            JSON_ERROR_SYNTAX => __('Syntax error, malformed JSON'),
            JSON_ERROR_UTF8 => __('Malformed UTF-8 characters, possibly incorrectly encoded')
            );
            if (\$message = \$errors[json_last_error()])
                return \$message;
            return __(\"Unknown error\");
        } else {
            # Doesn't look like Servies_JSON supports errors for decode()
            return __(\"Unknown JSON parsing error\");
        }
    }
}

class JsonDataEncoder {
    function encode(\$var) {
        if (function_exists('json_encode'))
            return json_encode(\$var);
        else {
            \$decoder = new Services_JSON();
            return \$decoder->encode(\$var);
        }
    }
}
";
        
        $__internal_f9e275a118e292851ebb0bb73e9b64d8edff68a26851b06e49deda8a7710f99a->leave($__internal_f9e275a118e292851ebb0bb73e9b64d8edff68a26851b06e49deda8a7710f99a_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.json.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.json.php*/
/* */
/*     Parses JSON text data to PHP associative array. Useful mainly for API*/
/*     JSON requests. The module will attempt to use the json_* functions*/
/*     builtin to PHP5.2+ if they exist and will fall back to a pure-php*/
/*     implementation included in JSON.php.*/
/* */
/*     Jared Hancock*/
/*     Copyright (c)  2006-2010 osTicket*/
/*     http://www.osticket.com*/
/* */
/*     Released under the GNU General Public License WITHOUT ANY WARRANTY.*/
/*     See LICENSE.TXT for details.*/
/* */
/*     vim: expandtab sw=4 ts=4 sts=4:*/
/*     $Id: $*/
/* **********************************************************************//* */
/* */
/* include_once "JSON.php";*/
/* */
/* class JsonDataParser {*/
/*     function parse($stream) {*/
/*         if (is_resource($stream)) {*/
/*             $contents = '';*/
/*             while (!feof($stream))*/
/*                 $contents .= fread($stream, 8192);*/
/*         } else*/
/*             $contents = $stream;*/
/*         return self::decode($contents);*/
/*     }*/
/* */
/*     function decode($contents) {*/
/*         if (function_exists("json_decode")) {*/
/*             return json_decode($contents, true);*/
/*         } else {*/
/*             # Create associative arrays rather than 'objects'*/
/*             $decoder = new Services_JSON(SERVICES_JSON_LOOSE_TYPE);*/
/*             return $decoder->decode($contents);*/
/*         }*/
/*     }*/
/*     function lastError() {*/
/*         if (function_exists("json_last_error")) {*/
/*             $errors = array(*/
/*             JSON_ERROR_NONE => __('No errors'),*/
/*             JSON_ERROR_DEPTH => __('Maximum stack depth exceeded'),*/
/*             JSON_ERROR_STATE_MISMATCH => __('Underflow or the modes mismatch'),*/
/*             JSON_ERROR_CTRL_CHAR => __('Unexpected control character found'),*/
/*             JSON_ERROR_SYNTAX => __('Syntax error, malformed JSON'),*/
/*             JSON_ERROR_UTF8 => __('Malformed UTF-8 characters, possibly incorrectly encoded')*/
/*             );*/
/*             if ($message = $errors[json_last_error()])*/
/*                 return $message;*/
/*             return __("Unknown error");*/
/*         } else {*/
/*             # Doesn't look like Servies_JSON supports errors for decode()*/
/*             return __("Unknown JSON parsing error");*/
/*         }*/
/*     }*/
/* }*/
/* */
/* class JsonDataEncoder {*/
/*     function encode($var) {*/
/*         if (function_exists('json_encode'))*/
/*             return json_encode($var);*/
/*         else {*/
/*             $decoder = new Services_JSON();*/
/*             return $decoder->encode($var);*/
/*         }*/
/*     }*/
/* }*/
/* */
