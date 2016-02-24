<?php

/* support/scp/js/upgrader.js */
class __TwigTemplate_f1d17c5adbb0a27220534a6a5bd28dd377287143d385605f52c54c728ed9c49f extends Twig_Template
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
        $__internal_7be8333883052df977a5d88280992a9fb15da38ee5def5ada7cf5c7f3baa9c0e = $this->env->getExtension("native_profiler");
        $__internal_7be8333883052df977a5d88280992a9fb15da38ee5def5ada7cf5c7f3baa9c0e->enter($__internal_7be8333883052df977a5d88280992a9fb15da38ee5def5ada7cf5c7f3baa9c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/js/upgrader.js"));

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
        
        $__internal_7be8333883052df977a5d88280992a9fb15da38ee5def5ada7cf5c7f3baa9c0e->leave($__internal_7be8333883052df977a5d88280992a9fb15da38ee5def5ada7cf5c7f3baa9c0e_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/js/upgrader.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* jQuery(function($) {*/
/* */
/*     $("#overlay").css({*/
/*         opacity : 0.3,*/
/*         top     : 0,*/
/*         left    : 0,*/
/*         width   : $(window).width(),*/
/*         height  : $(window).height()*/
/*         });*/
/* */
/*     $("#upgrading").css({*/
/*         top  : ($(window).height() / 3),*/
/*         left : ($(window).width() / 2 - 160)*/
/*         });*/
/* */
/*     $('form#upgrade').submit(function(e) {*/
/*         var form = $(this);*/
/*         $('input[type=submit]', this).attr('disabled', 'disabled');*/
/*         $('#overlay, #upgrading').show();*/
/*         if($('input#mode', form).val() == 'manual') {*/
/*             return  true;*/
/*         } else {*/
/*             e.preventDefault();*/
/*             autoUpgrade('upgrade.php',form.serialize());*/
/*             return false;*/
/*         }*/
/*       });*/
/* */
/*     function autoUpgrade(url, data) {*/
/*         function _lp(count) {*/
/*             $.ajax({*/
/*                 type: 'POST',*/
/*                 url: 'ajax.php/upgrader',*/
/*                 async: true,*/
/*                 cache: false,*/
/*                 data: data,*/
/*                 dataType: 'text',*/
/*                 success: function(res) {*/
/*                     $('#main #task').html(res);*/
/*                     $('#upgrading #action').html(res);*/
/*                     $('#upgrading #msg').html(__('Still busy... smile #')+count);*/
/*                 },*/
/*                 statusCode: {*/
/*                     200: function() {*/
/*                         setTimeout(function() { _lp(count+1); }, 200);*/
/*                     },*/
/* */
/*                     201: function() {*/
/*                         $('#upgrading #msg').html(__("Cleaning up!..."));*/
/*                         setTimeout(function() { location.href =url+'?c='+count+'&r='+Math.floor((Math.random()*100)+1); }, 3000);*/
/*                     }*/
/*                 },*/
/*                 error: function(jqXHR, textStatus, errorThrown) {*/
/*                     $('#upgrading #action').html(__('Error occurred.  Aborting...'));*/
/*                     switch(jqXHR.status) {*/
/*                         case 404:*/
/*                             $('#upgrading #msg').html(__("Manual upgrade required (ajax failed)"));*/
/*                             setTimeout(function() { location.href =url+'?m=manual&c='+count+'&r='+Math.floor((Math.random()*100)+1); }, 2000);*/
/*                             break;*/
/*                         default:*/
/*                             $('#upgrading #msg').html(__("Something went wrong"));*/
/*                             setTimeout(function() { location.href =url+'?c='+count+'&r='+Math.floor((Math.random()*100)+1); }, 2000);*/
/*                     }*/
/*                 }*/
/*             });*/
/*         };*/
/*         _lp(1);*/
/*     }*/
/* });*/
/* */
