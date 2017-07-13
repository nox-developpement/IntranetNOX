<?php

/* support/scp/js/jquery.dropdown.js */
class __TwigTemplate_08f3fe7c4af8657408ec634b063ff79f2ef77aacf4e5c04ed0fd6ce3469e79a9 extends Twig_Template
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
    }

    public function getTemplateName()
    {
        return "support/scp/js/jquery.dropdown.js";
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
        return new Twig_Source("", "support/scp/js/jquery.dropdown.js", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\scp\\js\\jquery.dropdown.js");
    }
}
