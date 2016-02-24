<?php

/* support/scp/js/jquery.dropdown.js */
class __TwigTemplate_63e0d0948a5c7fa8b52fc2c305a9a64cf2ebdc9969cb6fbc11779abe732b8574 extends Twig_Template
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
        $__internal_9b41568d9bf1fac5926d87b3ed31872a9d811bc40e4067e2917f06f0048d500e = $this->env->getExtension("native_profiler");
        $__internal_9b41568d9bf1fac5926d87b3ed31872a9d811bc40e4067e2917f06f0048d500e->enter($__internal_9b41568d9bf1fac5926d87b3ed31872a9d811bc40e4067e2917f06f0048d500e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/scp/js/jquery.dropdown.js"));

        // line 1
        echo "/*
 * jQuery dropdown: A simple dropdown plugin
 *
 * Inspired by Bootstrap: http://twitter.github.com/bootstrap/javascript.html#dropdowns
 *
 * Copyright 2011 Cory LaViska for A Beautiful Site, LLC. (http://abeautifulsite.net/)
 *
 * Dual licensed under the MIT or GPL Version 2 licenses
 *
*/
if(jQuery) (function(\$) {

\t\$.extend(\$.fn, {
\t\tdropdown: function(method, data) {

\t\t\tswitch( method ) {
\t\t\t\tcase 'hide':
\t\t\t\t\thideDropdowns();
\t\t\t\t\treturn \$(this);
\t\t\t\tcase 'attach':
\t\t\t\t\treturn \$(this).attr('data-dropdown', data);
\t\t\t\tcase 'detach':
\t\t\t\t\thideDropdowns();
\t\t\t\t\treturn \$(this).removeAttr('data-dropdown');
\t\t\t\tcase 'disable':
\t\t\t\t\treturn \$(this).addClass('dropdown-disabled');
\t\t\t\tcase 'enable':
\t\t\t\t\thideDropdowns();
\t\t\t\t\treturn \$(this).removeClass('dropdown-disabled');
\t\t\t}

\t\t}
\t});

\tfunction showMenu(event) {

\t\tvar trigger = \$(this),
\t\t\tdropdown = \$( \$(this).attr('data-dropdown') ),
\t\t\tisOpen = trigger.hasClass('dropdown-open'),
            rtl = \$('html').hasClass('rtl');

\t\tevent.preventDefault();
\t\tevent.stopPropagation();

\t\thideDropdowns();

\t\tif( isOpen || trigger.hasClass('dropdown-disabled') ) return;

        if (rtl && dropdown.hasClass('anchor-right'))
            dropdown.removeClass('anchor-right');

\t\tdropdown.css({
\t\t\t\tleft: dropdown.hasClass('anchor-right') ?
\t\t\t\ttrigger.offset().left - (dropdown.outerWidth() - trigger.outerWidth() - 4) : trigger.offset().left,
\t\t\t\ttop: trigger.offset().top + trigger.outerHeight()
\t\t\t}).show();
\t\ttrigger.addClass('dropdown-open');
\t}

\tfunction hideDropdowns(event) {

\t\tvar targetGroup = event ? \$(event.target).parents().andSelf() : null;
\t\tif( targetGroup && targetGroup.is('.action-dropdown') && !targetGroup.is('a') ) return;

\t\t\$('body')
\t\t\t.find('.action-dropdown').hide().end()
\t\t\t.find('[data-dropdown]').removeClass('dropdown-open');
\t}

\t\$(function () {
\t\t\$('body').on('click.dropdown', '[data-dropdown]', showMenu);
\t\t\$('html').on('click.dropdown', hideDropdowns);
\t\tif( !\$.browser.msie || (\$.browser.msie && \$.browser.version >= 9) ) {
\t\t\t\$(window).on('resize.dropdown', hideDropdowns);
\t\t}
\t});

})(jQuery);
";
        
        $__internal_9b41568d9bf1fac5926d87b3ed31872a9d811bc40e4067e2917f06f0048d500e->leave($__internal_9b41568d9bf1fac5926d87b3ed31872a9d811bc40e4067e2917f06f0048d500e_prof);

    }

    public function getTemplateName()
    {
        return "support/scp/js/jquery.dropdown.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* /**/
/*  * jQuery dropdown: A simple dropdown plugin*/
/*  **/
/*  * Inspired by Bootstrap: http://twitter.github.com/bootstrap/javascript.html#dropdowns*/
/*  **/
/*  * Copyright 2011 Cory LaViska for A Beautiful Site, LLC. (http://abeautifulsite.net/)*/
/*  **/
/*  * Dual licensed under the MIT or GPL Version 2 licenses*/
/*  **/
/* *//* */
/* if(jQuery) (function($) {*/
/* */
/* 	$.extend($.fn, {*/
/* 		dropdown: function(method, data) {*/
/* */
/* 			switch( method ) {*/
/* 				case 'hide':*/
/* 					hideDropdowns();*/
/* 					return $(this);*/
/* 				case 'attach':*/
/* 					return $(this).attr('data-dropdown', data);*/
/* 				case 'detach':*/
/* 					hideDropdowns();*/
/* 					return $(this).removeAttr('data-dropdown');*/
/* 				case 'disable':*/
/* 					return $(this).addClass('dropdown-disabled');*/
/* 				case 'enable':*/
/* 					hideDropdowns();*/
/* 					return $(this).removeClass('dropdown-disabled');*/
/* 			}*/
/* */
/* 		}*/
/* 	});*/
/* */
/* 	function showMenu(event) {*/
/* */
/* 		var trigger = $(this),*/
/* 			dropdown = $( $(this).attr('data-dropdown') ),*/
/* 			isOpen = trigger.hasClass('dropdown-open'),*/
/*             rtl = $('html').hasClass('rtl');*/
/* */
/* 		event.preventDefault();*/
/* 		event.stopPropagation();*/
/* */
/* 		hideDropdowns();*/
/* */
/* 		if( isOpen || trigger.hasClass('dropdown-disabled') ) return;*/
/* */
/*         if (rtl && dropdown.hasClass('anchor-right'))*/
/*             dropdown.removeClass('anchor-right');*/
/* */
/* 		dropdown.css({*/
/* 				left: dropdown.hasClass('anchor-right') ?*/
/* 				trigger.offset().left - (dropdown.outerWidth() - trigger.outerWidth() - 4) : trigger.offset().left,*/
/* 				top: trigger.offset().top + trigger.outerHeight()*/
/* 			}).show();*/
/* 		trigger.addClass('dropdown-open');*/
/* 	}*/
/* */
/* 	function hideDropdowns(event) {*/
/* */
/* 		var targetGroup = event ? $(event.target).parents().andSelf() : null;*/
/* 		if( targetGroup && targetGroup.is('.action-dropdown') && !targetGroup.is('a') ) return;*/
/* */
/* 		$('body')*/
/* 			.find('.action-dropdown').hide().end()*/
/* 			.find('[data-dropdown]').removeClass('dropdown-open');*/
/* 	}*/
/* */
/* 	$(function () {*/
/* 		$('body').on('click.dropdown', '[data-dropdown]', showMenu);*/
/* 		$('html').on('click.dropdown', hideDropdowns);*/
/* 		if( !$.browser.msie || ($.browser.msie && $.browser.version >= 9) ) {*/
/* 			$(window).on('resize.dropdown', hideDropdowns);*/
/* 		}*/
/* 	});*/
/* */
/* })(jQuery);*/
/* */
