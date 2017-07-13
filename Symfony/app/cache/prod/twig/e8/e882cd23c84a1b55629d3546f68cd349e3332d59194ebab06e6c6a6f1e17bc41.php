<?php

/* support/scp/js/upgrader.js */
class __TwigTemplate_27638621e8ff45135eba838a8da4744f29cd41ae96d633b621ac138497d98e43 extends Twig_Template
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
        echo "jQuery(function(\$) {

    \$(\"#overlay\").css({
        opacity : 0.3,
        top     : 0,
        left    : 0,
        width   : \$(window).width(),
        height  : \$(window).height()
        });

    \$(\"#upgrading\").css({
        top  : (\$(window).height() / 3),
        left : (\$(window).width() / 2 - 160)
        });

    \$('form#upgrade').submit(function(e) {
        var form = \$(this);
        \$('input[type=submit]', this).attr('disabled', 'disabled');
        \$('#overlay, #upgrading').show();
        if(\$('input#mode', form).val() == 'manual') {
            return  true;
        } else {
            e.preventDefault();
            autoUpgrade('upgrade.php',form.serialize());
            return false;
        }
      });

    function autoUpgrade(url, data) {
        function _lp(count) {
            \$.ajax({
                type: 'POST',
                url: 'ajax.php/upgrader',
                async: true,
                cache: false,
                data: data,
                dataType: 'text',
                success: function(res) {
                    \$('#main #task').html(res);
                    \$('#upgrading #action').html(res);
                    \$('#upgrading #msg').html(__('Still busy... smile #')+count);
                },
                statusCode: {
                    200: function() {
                        setTimeout(function() { _lp(count+1); }, 200);
                    },

                    201: function() {
                        \$('#upgrading #msg').html(__(\"Cleaning up!...\"));
                        setTimeout(function() { location.href =url+'?c='+count+'&r='+Math.floor((Math.random()*100)+1); }, 3000);
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    \$('#upgrading #action').html(__('Error occurred.  Aborting...'));
                    switch(jqXHR.status) {
                        case 404:
                            \$('#upgrading #msg').html(__(\"Manual upgrade required (ajax failed)\"));
                            setTimeout(function() { location.href =url+'?m=manual&c='+count+'&r='+Math.floor((Math.random()*100)+1); }, 2000);
                            break;
                        default:
                            \$('#upgrading #msg').html(__(\"Something went wrong\"));
                            setTimeout(function() { location.href =url+'?c='+count+'&r='+Math.floor((Math.random()*100)+1); }, 2000);
                    }
                }
            });
        };
        _lp(1);
    }
});
";
    }

    public function getTemplateName()
    {
        return "support/scp/js/upgrader.js";
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
        return new Twig_Source("", "support/scp/js/upgrader.js", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\js\\upgrader.js");
    }
}
