<?php

/* support/css/thread.css */
class __TwigTemplate_5b19120279663e490412ab2935a7b29e5ab93fd8be128f178dd75e03e0b3b797 extends Twig_Template
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
        echo "/*!
 * Bootstrap v3.0.0
 *
 * Copyright 2013 Twitter, Inc
 * Licensed under the Apache License v2.0
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Designed and built with all the love in the world @twitter by @mdo and @fat.
 */

/*! normalize.css v2.1.0 | MIT License | git.io/normalize */
.thread-body article,
.thread-body aside,
.thread-body details,
.thread-body figcaption,
.thread-body figure,
.thread-body footer,
.thread-body header,
.thread-body hgroup,
.thread-body main,
.thread-body nav,
.thread-body section,
.thread-body summary {
  display: block;
}
.thread-body {
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  font-size: 14px !important;
  line-height: 1.428571429;
  color: #333333;
  background-color: #ffffff;
  margin: 0;
  padding: 0.5em;
  word-wrap: break-word;
  overflow-x: auto;
}
.thread-body a:focus {
  outline: thin dotted;
}
.thread-body a:active,
.thread-body a:hover {
  outline: 0;
}
.thread-body h1 {
  font-size: 2em;
  margin: 0.67em 0;
}
.thread-body abbr[title] {
  border-bottom: 1px dotted;
}
.thread-body b,
.thread-body strong {
  font-weight: bold;
}
.thread-body dfn {
  font-style: italic;
}
.thread-body hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}
.thread-body mark {
  background: #ff0;
  color: #000;
}
.thread-body code,
.thread-body kbd,
.thread-body pre,
.thread-body samp {
  font-family: monospace, serif;
  font-size: 1em;
}
.thread-body pre {
  white-space: pre-wrap;
}
.thread-body q {
  quotes: \"\\201C\" \"\\201D\" \"\\2018\" \"\\2019\";
}
.thread-body small {
  font-size: 80%;
}
.thread-body sub,
.thread-body sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}
.thread-body sup {
  top: -0.5em;
}
.thread-body sub {
  bottom: -0.25em;
}
.thread-body img {
  border: 0;
}
.thread-body svg:not(:root) {
  overflow: hidden;
}
.thread-body table {
  border-collapse: collapse;
  border-spacing: 0;
}
.thread-body *,
.thread-body *:before,
.thread-body *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
.thread-body a {
  color: #428bca;
  text-decoration: none;
}
.thread-body a:hover,
.thread-body a:focus {
  color: #2a6496;
  text-decoration: underline;
}
.thread-body a:focus {
  outline: thin dotted #333;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px;
}
.thread-body img {
  vertical-align: middle;
}
.thread-body hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eeeeee;
}
.thread-body .sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  clip: rect(0 0 0 0);
  border: 0;
}
.thread-body p {
  margin: 0 0 10px;
}
.thread-body .lead {
  margin-bottom: 20px;
  font-size: 16.099999999999998px;
  font-weight: 200;
  line-height: 1.4;
}
@media (min-width: 768px) {
  .thread-body .lead {
    font-size: 21px;
  }
}
.thread-body small {
  font-size: 85%;
}
.thread-body cite {
  font-style: normal;
}
.thread-body h1,
.thread-body h2,
.thread-body h3,
.thread-body h4,
.thread-body h5,
.thread-body h6,
.thread-body .h1,
.thread-body .h2,
.thread-body .h3,
.thread-body .h4,
.thread-body .h5,
.thread-body .h6 {
  font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
  font-weight: 500;
  line-height: 1.1;
  color: black;
}
.thread-body h1 small,
.thread-body h2 small,
.thread-body h3 small,
.thread-body h4 small,
.thread-body h5 small,
.thread-body h6 small,
.thread-body .h1 small,
.thread-body .h2 small,
.thread-body .h3 small,
.thread-body .h4 small,
.thread-body .h5 small,
.thread-body .h6 small {
  font-weight: normal;
  line-height: 1;
  color: #999999;
}
.thread-body h1,
.thread-body h2,
.thread-body h3 {
  margin-top: 20px;
  margin-bottom: 10px;
}
.thread-body h4,
.thread-body h5,
.thread-body h6 {
  margin-top: 10px;
  margin-bottom: 10px;
}
.thread-body h1,
.thread-body .h1 {
  font-size: 36px;
}
.thread-body h2,
.thread-body .h2 {
  font-size: 30px;
}
.thread-body h3,
.thread-body .h3 {
  font-size: 24px;
}
.thread-body h4,
.thread-body .h4 {
  font-size: 18px;
}
.thread-body h5,
.thread-body .h5 {
  font-size: 14px;
}
.thread-body h6,
.thread-body .h6 {
  font-size: 12px;
}
.thread-body h1 small,
.thread-body .h1 small {
  font-size: 24px;
}
.thread-body h2 small,
.thread-body .h2 small {
  font-size: 18px;
}
.thread-body h3 small,
.thread-body .h3 small,
.thread-body h4 small,
.thread-body .h4 small {
  font-size: 14px;
}
.thread-body .page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eeeeee;
}
.thread-body ul,
.thread-body ol {
  margin-top: 0;
  margin-bottom: 10px;
}
.thread-body ul ul,
.thread-body ol ul,
.thread-body ul ol,
.thread-body ol ol {
  margin-bottom: 0;
}
.thread-body .list-unstyled {
  padding-left: 0;
  list-style: none;
}
.thread-body .list-inline {
  padding-left: 0;
  list-style: none;
}
.thread-body .list-inline > li {
  display: inline-block;
  padding-left: 5px;
  padding-right: 5px;
}
.thread-body blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  border-left: 5px solid #eeeeee;
  color: #777;
}
.thread-body blockquote p {
  font-weight: 300;
  line-height: 1.25;
}
.thread-body blockquote p:last-child {
  margin-bottom: 0;
}
.thread-body blockquote small {
  display: block;
  line-height: 1.428571429;
  color: #999999;
}
.thread-body blockquote small:before {
  content: '\\2014 \\00A0';
}
.thread-body blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  border-right: 5px solid #eeeeee;
  border-left: 0;
}
.thread-body blockquote.pull-right p,
.thread-body blockquote.pull-right small {
  text-align: right;
}
.thread-body blockquote.pull-right small:before {
  content: '';
}
.thread-body blockquote.pull-right small:after {
  content: '\\00A0 \\2014';
}
.thread-body q:before,
.thread-body q:after,
.thread-body blockquote:before,
.thread-body blockquote:after {
  content: \"\";
}
.thread-body address {
  display: block;
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.428571429;
}
.thread-body th {
  text-align: left;
}
.thread-body table {
  max-width: 100%;
  background-color: transparent;
  width: auto;
  margin-bottom: 20px;
}
.thread-body table thead > tr > td,
.thread-body table thead > tr > th,
.thread-body table tr > th {
  background-color: #f0f0f0 !important;
  font-weight: bold;
}
.thread-body table thead > tr > th,
.thread-body table tbody > tr > th,
.thread-body table tfoot > tr > th,
.thread-body table thead > tr > td,
.thread-body table tbody > tr > td,
.thread-body table tfoot > tr > td {
  padding: 8px;
  line-height: 1.428571429;
  vertical-align: top;
  border-top: 1px solid #dddddd;
}
.thread-body table thead > tr > th {
  vertical-align: bottom;
  border-bottom: 2px solid #dddddd;
}
.thread-body table caption + thead tr:first-child th,
.thread-body table colgroup + thead tr:first-child th,
.thread-body table thead:first-child tr:first-child th,
.thread-body table caption + thead tr:first-child td,
.thread-body table colgroup + thead tr:first-child td,
.thread-body table thead:first-child tr:first-child td {
  border-top: 0;
}
.thread-body table tbody + tbody {
  border-top: 2px solid #dddddd;
}
.thread-body table table {
  background-color: #ffffff;
}
.thread-body table thead > tr > th,
.thread-body table tbody > tr > th,
.thread-body table tfoot > tr > th,
.thread-body table thead > tr > td,
.thread-body table tbody > tr > td,
.thread-body table tfoot > tr > td {
  padding: 5px;
}
.thread-body table col[class*=\"col-\"] {
  float: none;
  display: table-column;
}
.thread-body table td[class*=\"col-\"],
.thread-body table th[class*=\"col-\"] {
  float: none;
  display: table-cell;
}

/* Redactor consistency styles */
.thread-body div,
.thread-body p,
.thread-body ul,
.thread-body ol,
.thread-body table,
.thread-body dl,
.thread-body blockquote,
.thread-body pre {
\tfont-size: 14px;
\tline-height: 1.4rem;
}

/* Adjust plain/text messages posted as <pre> in the thread body to show in
 * a more normal font. Other <pre> elements in the ticket thread body should
 * be shown with the ususal monospace font
 */
.thread-body > div > pre:first-child {
    font-family: sans-serif;
}

/* Avoid extra padding at the bottom of the thread body element */
.thread-body :last-child,
.thread-body > div {
    margin-bottom: 0 !important;
}

.thread-body p,
.thread-body ul,
.thread-body ol,
.thread-body table,
.thread-body dl,
.thread-body pre {
\tmargin: 0;
\tmargin-bottom: 10px;
\tborder: none;
\tbackground: none !important;
\tbox-shadow: none !important;
    text-indent: 0 !important;
}

.thread-body iframe,
.thread-body object,
.thread-body hr {
\tmargin-bottom: 15px !important;
}

.thread-body iframe {
    display: block;
\tmargin: 0;
\tpadding: 0;
}

/* Styles or override ridiculous Microsoft Outlook list styles */
.thread-body ul,
.thread-body ol {
\tpadding-left: 2em !important;
}
.thread-body ul ul,
.thread-body ol ol,
.thread-body ul ol,
.thread-body ol ul {
\tmargin: 2px !important;
\tpadding: 0 !important;
\tpadding-left: 2em !important;
\tborder: none;
}

/* Styles to keep the thread-entry sizing sane */
.thread-body img:not(.optional),
.thread-body div.non-local-image {
    width: auto;
    height: auto;
    max-width: 100%;
}

table.thread-entry {
    table-layout: fixed;
}

table.thread-entry th div span {
    vertical-align: middle;
}
table.thread-entry th div :not(.title) {
    font-weight: 600;
}
table.thread-entry th div .title {
    font-weight: 400;
}
table.thread-entry th .textra {
    margin-right: 1em;
    display: inline-block;
}
/* Inline image hovering with download link */
.image-hover {
    display: inline-block;
    position: relative;
    max-width: 100%; /* Ensure image hovered is resized */
}
.image-hover .caption {
    background-color: rgba(0,0,0,0.5);
    min-width: 20em;
    color: white;
    padding: 1em;
    display: none;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif;
    font-size: 14px;
    -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box;
}
.image-hover .caption .filename {
    display: inline-block;
    max-width: 60%;
    overflow: hidden;
}

/* Additional style for the mighty Microsoft Office emails \"standard\" style */
p.MsoNormal, li.MsoNormal, div.MsoNormal,
p.MsoPlainText, li.MsoPlainText, div.MsoPlainText
    {margin:0cm;
    margin-bottom:.0001pt;}
";
    }

    public function getTemplateName()
    {
        return "support/css/thread.css";
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
        return new Twig_Source("", "support/css/thread.css", "C:\\wamp\\www\\Symfony\\app\\Resources\\views\\support\\css\\thread.css");
    }
}
