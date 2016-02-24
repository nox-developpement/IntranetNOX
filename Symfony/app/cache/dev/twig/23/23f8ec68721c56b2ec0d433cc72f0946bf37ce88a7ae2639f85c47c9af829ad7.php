<?php

/* support/css/filedrop.css */
class __TwigTemplate_356c6bc1ec3961fcb4da232eb4e9406a0f0cb734d5a58a53bbc6c0a49a67aa27 extends Twig_Template
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
        $__internal_a77397c65d521da6620d1fc449a75b6e8d2524866c67e77d588e4b65223c056d = $this->env->getExtension("native_profiler");
        $__internal_a77397c65d521da6620d1fc449a75b6e8d2524866c67e77d588e4b65223c056d->enter($__internal_a77397c65d521da6620d1fc449a75b6e8d2524866c67e77d588e4b65223c056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/css/filedrop.css"));

        // line 1
        echo ".filedrop {
    padding-bottom: 10px;
}
.filedrop .dropzone {
    border: 2px dashed rgba(0, 0, 0, 0.2);
    padding: 8px;
    border-radius: 5px;
    background-color: rgba(0, 0, 0, 0.05);
    color: #999;
}
.filedrop .dropzone a {
    color: rgba(24, 78, 129, 0.7);
}
.filedrop .files:not(:empty) {
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 5px 5px 0 0;
    padding: 5px;
}
.filedrop .files:not(:empty) + .dropzone {
    border-top: none;
    border-radius: 0 0 5px 5px;
}
.filedrop .files .file {
    display: block;
    padding: 5px 10px 5px 20px;
    margin: 0;
    border-radius: 5px;
}
.rtl .filedrop .files .file {
    padding-left: 10px;
    padding-right: 20px;
}
.filedrop .files .file:hover {
   background-color: rgba(0, 0, 0, 0.05);
}
.filedrop .files .file .filesize {
  margin: 0 1em;
  color: #999;
}
.filedrop .files .file .upload-rate {
  margin: 0 10px;
  color: #aaa;
}
.filedrop .files .file .trash {
  cursor: pointer;
}
.filedrop .progress {
  margin-top: 5px;
}
.filedrop .cancel {
  cursor: pointer;
}
.filedrop .preview {
  width: auto;
  height: auto;
  max-width: 60px;
  max-height: 40px;
  display: inline-block;
  float: left;
  padding-right: 10px;
}
.rtl .filedrop .preview {
  padding-right: initial;
  padding-left: 10px;
  float: right;
}
.redactor_box + .filedrop .dropzone,
.redactor_box + div > .filedrop .dropzone,
.redactor_box + div > .filedrop .files {
    border-top-width: 1px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.tooltip-preview,
.tooltip-preview img {
    max-width: 300px;
    max-height: 300px;
}

/* Bootstrap 3.2 progress-bar */
@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@-o-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0;
  }
  to {
    background-position: 0 0;
  }
}
.progress {
  height: 10px;
  overflow: hidden;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
          box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);
}
.progress-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #428bca;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
          box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);
}
.rtl .progress-bar {
  float: right;
}
.progress-bar:not(.active) {
  -webkit-transition: width .6s ease;
       -o-transition: width .6s ease;
          transition: width .6s ease;
}
.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  -webkit-background-size: 40px 40px;
          background-size: 40px 40px;
}
.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
       -o-animation: progress-bar-stripes 2s linear infinite;
          animation: progress-bar-stripes 2s linear infinite;
}
.progress-bar[aria-valuenow=\"1\"],
.progress-bar[aria-valuenow=\"2\"] {
  min-width: 30px;
}
.progress-bar[aria-valuenow=\"0\"] {
  min-width: 30px;
  color: #777;
  background-color: transparent;
  background-image: none;
  -webkit-box-shadow: none;
          box-shadow: none;
}
.progress-bar-success {
  background-color: #5cb85c;
}
.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-info {
  background-color: #5bc0de;
}
.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-warning {
  background-color: #f0ad4e;
}
.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-danger {
  background-color: #d9534f;
}
.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
  background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}

";
        
        $__internal_a77397c65d521da6620d1fc449a75b6e8d2524866c67e77d588e4b65223c056d->leave($__internal_a77397c65d521da6620d1fc449a75b6e8d2524866c67e77d588e4b65223c056d_prof);

    }

    public function getTemplateName()
    {
        return "support/css/filedrop.css";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* .filedrop {*/
/*     padding-bottom: 10px;*/
/* }*/
/* .filedrop .dropzone {*/
/*     border: 2px dashed rgba(0, 0, 0, 0.2);*/
/*     padding: 8px;*/
/*     border-radius: 5px;*/
/*     background-color: rgba(0, 0, 0, 0.05);*/
/*     color: #999;*/
/* }*/
/* .filedrop .dropzone a {*/
/*     color: rgba(24, 78, 129, 0.7);*/
/* }*/
/* .filedrop .files:not(:empty) {*/
/*     border: 1px solid rgba(0, 0, 0, 0.2);*/
/*     border-radius: 5px 5px 0 0;*/
/*     padding: 5px;*/
/* }*/
/* .filedrop .files:not(:empty) + .dropzone {*/
/*     border-top: none;*/
/*     border-radius: 0 0 5px 5px;*/
/* }*/
/* .filedrop .files .file {*/
/*     display: block;*/
/*     padding: 5px 10px 5px 20px;*/
/*     margin: 0;*/
/*     border-radius: 5px;*/
/* }*/
/* .rtl .filedrop .files .file {*/
/*     padding-left: 10px;*/
/*     padding-right: 20px;*/
/* }*/
/* .filedrop .files .file:hover {*/
/*    background-color: rgba(0, 0, 0, 0.05);*/
/* }*/
/* .filedrop .files .file .filesize {*/
/*   margin: 0 1em;*/
/*   color: #999;*/
/* }*/
/* .filedrop .files .file .upload-rate {*/
/*   margin: 0 10px;*/
/*   color: #aaa;*/
/* }*/
/* .filedrop .files .file .trash {*/
/*   cursor: pointer;*/
/* }*/
/* .filedrop .progress {*/
/*   margin-top: 5px;*/
/* }*/
/* .filedrop .cancel {*/
/*   cursor: pointer;*/
/* }*/
/* .filedrop .preview {*/
/*   width: auto;*/
/*   height: auto;*/
/*   max-width: 60px;*/
/*   max-height: 40px;*/
/*   display: inline-block;*/
/*   float: left;*/
/*   padding-right: 10px;*/
/* }*/
/* .rtl .filedrop .preview {*/
/*   padding-right: initial;*/
/*   padding-left: 10px;*/
/*   float: right;*/
/* }*/
/* .redactor_box + .filedrop .dropzone,*/
/* .redactor_box + div > .filedrop .dropzone,*/
/* .redactor_box + div > .filedrop .files {*/
/*     border-top-width: 1px;*/
/*     border-top-left-radius: 0;*/
/*     border-top-right-radius: 0;*/
/* }*/
/* .tooltip-preview,*/
/* .tooltip-preview img {*/
/*     max-width: 300px;*/
/*     max-height: 300px;*/
/* }*/
/* */
/* /* Bootstrap 3.2 progress-bar *//* */
/* @-webkit-keyframes progress-bar-stripes {*/
/*   from {*/
/*     background-position: 40px 0;*/
/*   }*/
/*   to {*/
/*     background-position: 0 0;*/
/*   }*/
/* }*/
/* @-o-keyframes progress-bar-stripes {*/
/*   from {*/
/*     background-position: 40px 0;*/
/*   }*/
/*   to {*/
/*     background-position: 0 0;*/
/*   }*/
/* }*/
/* @keyframes progress-bar-stripes {*/
/*   from {*/
/*     background-position: 40px 0;*/
/*   }*/
/*   to {*/
/*     background-position: 0 0;*/
/*   }*/
/* }*/
/* .progress {*/
/*   height: 10px;*/
/*   overflow: hidden;*/
/*   background-color: #f5f5f5;*/
/*   border-radius: 4px;*/
/*   -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);*/
/*           box-shadow: inset 0 1px 2px rgba(0, 0, 0, .1);*/
/* }*/
/* .progress-bar {*/
/*   float: left;*/
/*   width: 0;*/
/*   height: 100%;*/
/*   font-size: 12px;*/
/*   line-height: 20px;*/
/*   color: #fff;*/
/*   text-align: center;*/
/*   background-color: #428bca;*/
/*   -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);*/
/*           box-shadow: inset 0 -1px 0 rgba(0, 0, 0, .15);*/
/* }*/
/* .rtl .progress-bar {*/
/*   float: right;*/
/* }*/
/* .progress-bar:not(.active) {*/
/*   -webkit-transition: width .6s ease;*/
/*        -o-transition: width .6s ease;*/
/*           transition: width .6s ease;*/
/* }*/
/* .progress-striped .progress-bar,*/
/* .progress-bar-striped {*/
/*   background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/*   background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/*   background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/*   -webkit-background-size: 40px 40px;*/
/*           background-size: 40px 40px;*/
/* }*/
/* .progress.active .progress-bar,*/
/* .progress-bar.active {*/
/*   -webkit-animation: progress-bar-stripes 2s linear infinite;*/
/*        -o-animation: progress-bar-stripes 2s linear infinite;*/
/*           animation: progress-bar-stripes 2s linear infinite;*/
/* }*/
/* .progress-bar[aria-valuenow="1"],*/
/* .progress-bar[aria-valuenow="2"] {*/
/*   min-width: 30px;*/
/* }*/
/* .progress-bar[aria-valuenow="0"] {*/
/*   min-width: 30px;*/
/*   color: #777;*/
/*   background-color: transparent;*/
/*   background-image: none;*/
/*   -webkit-box-shadow: none;*/
/*           box-shadow: none;*/
/* }*/
/* .progress-bar-success {*/
/*   background-color: #5cb85c;*/
/* }*/
/* .progress-striped .progress-bar-success {*/
/*   background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/*   background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/*   background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/* }*/
/* .progress-bar-info {*/
/*   background-color: #5bc0de;*/
/* }*/
/* .progress-striped .progress-bar-info {*/
/*   background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/*   background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/*   background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/* }*/
/* .progress-bar-warning {*/
/*   background-color: #f0ad4e;*/
/* }*/
/* .progress-striped .progress-bar-warning {*/
/*   background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/*   background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/*   background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/* }*/
/* .progress-bar-danger {*/
/*   background-color: #d9534f;*/
/* }*/
/* .progress-striped .progress-bar-danger {*/
/*   background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/*   background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/*   background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);*/
/* }*/
/* */
/* */
