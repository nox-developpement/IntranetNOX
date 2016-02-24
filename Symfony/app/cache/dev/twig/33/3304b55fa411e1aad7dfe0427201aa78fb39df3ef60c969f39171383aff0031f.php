<?php

/* support/include/config/filetype.yaml */
class __TwigTemplate_d871f2c16e07cbc73e79eaf1128c0498605123fa45abe542f8fae5ef1acd8f0b extends Twig_Template
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
        $__internal_7878c8e0d7d92bfd0181eaeebee0323d1328190db8ad9f9bbc8982e0f25c9a74 = $this->env->getExtension("native_profiler");
        $__internal_7878c8e0d7d92bfd0181eaeebee0323d1328190db8ad9f9bbc8982e0f25c9a74->enter($__internal_7878c8e0d7d92bfd0181eaeebee0323d1328190db8ad9f9bbc8982e0f25c9a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/config/filetype.yaml"));

        // line 1
        echo "---
image:
  description: Images
  types:
    'image/bmp': ['bmp']
    'image/gif': ['gif']
    'image/jpeg': ['jpeg', 'jpg']
    'image/png': ['png']
    'image/svg+xml': ['svg']
    'image/tiff': ['tiff']
    'image/vnd.adobe.photoshop': ['psd']
    'image/vnd.microsoft.icon': ['ico']
    'image/x-ico': ['ico']
    'application/postscript': ['eps']
audio:
  description: Audio and Music
  types:
    'audio/aiff': []
    'audio/mpeg': ['mp3']
    'audio/mp4': ['m4a', 'm4r', 'm4p']
    'audio/ogg': ['ogg']
    'audio/vorbis',
    'audio/vnd.wav': ['wav']
    'audio/wav': ['wav']
    'audio/x-midi': ['mid', 'midi']
text:
  description: Text Documents
  types:
    'text/css': ['css']
    'text/html': ['htm', 'html']
    'text/javascript': ['js']
    'text/plain': ['txt']
    'text/xml': ['xml']
    'application/json': ['json']
    'application/javascript': ['js']
office:
  description: Common Office Documents
  types:
    # Microsoft Office
    'application/msword': ['doc']
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document': ['docx']
    'application/vnd.ms-word.document.macroEnabled.12': ['docm']
    'application/vnd.ms-excel': ['xls']
    'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet': ['xlsx']
    'application/vnd.ms-excel.sheet.macroEnabled.12': ['xlsm']
    'application/vnd.ms-excel.sheet.binary.macroEnabled.12': ['xlsb']
    'application/vnd.ms-powerpoint': ['ppt']
    'application/vnd.openxmlformats-officedocument.presentationml.presentation': ['pptx']
    'application/vnd.openxmlformats-officedocument.presentationml.slideshow': ['ppsx']
    'application/vnd.ms-powerpoint.presentation.macroEnabled.12': ['pptm']
    'application/vnd.ms-powerpoint.slideshow.macroEnabled.12': ['ppsm']
    'application/vnd.ms-access': ['mdb', 'accdb']
    'application/vnd.ms-project': []
    'application/msonenote': []
    'application/vnd.ms-publisher': []
    'application/rtf': ['rtf']
    'application/vnd.ms-works': []

    # iWork
    'application/vnd.apple.keynote': ['keynote']
    'application/vnd.apple.pages': ['pages']
    'application/vnd.apple.numbers': ['numbers']

    # OpenOffice
    'application/vnd.oasis.opendocument.text': []
    'application/vnd.oasis.opendocument.text-web': []
    'application/vnd.oasis.opendocument.text-master': []
    'application/vnd.oasis.opendocument.graphics': []
    'application/vnd.oasis.opendocument.presentation': []
    'application/vnd.oasis.opendocument.spreadsheet': []
    'application/vnd.oasis.opendocument.chart': []
    'application/vnd.oasis.opendocument.formula': []
    'application/vnd.oasis.opendocument.database': []
    'application/vnd.oasis.opendocument.image': []
    'application/vnd.openofficeorg.extension': []

    # Other office
    'application/wordperfect': []
    'application/vnd.kde.karbon': []
    'application/vnd.kde.kchart': []
    'application/vnd.kde.kformula': []
    'application/vnd.kde.kivio': []
    'application/vnd.kde.kontour': []
    'application/vnd.kde.kpresenter': []
    'application/vnd.kde.kspread': []
    'application/vnd.kde.kword': []

    # Creative / Common
    'application/pdf': ['pdf']
    '.csv': ['csv']
    'application/illustrator': ['ai']
    'application/x-director': []
    'application/x-indesign': []

    # Interchange
    'text/vcard': []

    # Other
    'image/x-dwg': ['dwg']
    'image/vnd.dwg': ['dwg']
    'image/vnd.dxf': ['dxf']
    'application/x-autocad': []
    'application/x-mathcad': []
    'application/x-msmoney': []

    'application/x-latex': ['tex']
video:
  description: Video Files
  types:
    'video/avi': ['avi']
    'video/mpeg': ['mpg','mpeg']
    'video/mp4': ['mp4']
    'video/ogg': ['ogg']
    'video/quicktime': []
    'video/webm': []
    'video/x-ms-asf': []
    'video/x-ms-wmv': []
    'application/x-dvi': ['dvi']
    'application/x-shockwave-flash': ['swf']
archive:
  description: Archives
  types:
    'application/tar': ['tar']
    'application/gzip': ['gz']
    'application/x-lha': []
    'application/rar': ['rar']
    'application/x-compress': ['z']
    'application/zip': ['zip']
    'application/x-7z-compressed': ['7z']
";
        
        $__internal_7878c8e0d7d92bfd0181eaeebee0323d1328190db8ad9f9bbc8982e0f25c9a74->leave($__internal_7878c8e0d7d92bfd0181eaeebee0323d1328190db8ad9f9bbc8982e0f25c9a74_prof);

    }

    public function getTemplateName()
    {
        return "support/include/config/filetype.yaml";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* ---*/
/* image:*/
/*   description: Images*/
/*   types:*/
/*     'image/bmp': ['bmp']*/
/*     'image/gif': ['gif']*/
/*     'image/jpeg': ['jpeg', 'jpg']*/
/*     'image/png': ['png']*/
/*     'image/svg+xml': ['svg']*/
/*     'image/tiff': ['tiff']*/
/*     'image/vnd.adobe.photoshop': ['psd']*/
/*     'image/vnd.microsoft.icon': ['ico']*/
/*     'image/x-ico': ['ico']*/
/*     'application/postscript': ['eps']*/
/* audio:*/
/*   description: Audio and Music*/
/*   types:*/
/*     'audio/aiff': []*/
/*     'audio/mpeg': ['mp3']*/
/*     'audio/mp4': ['m4a', 'm4r', 'm4p']*/
/*     'audio/ogg': ['ogg']*/
/*     'audio/vorbis',*/
/*     'audio/vnd.wav': ['wav']*/
/*     'audio/wav': ['wav']*/
/*     'audio/x-midi': ['mid', 'midi']*/
/* text:*/
/*   description: Text Documents*/
/*   types:*/
/*     'text/css': ['css']*/
/*     'text/html': ['htm', 'html']*/
/*     'text/javascript': ['js']*/
/*     'text/plain': ['txt']*/
/*     'text/xml': ['xml']*/
/*     'application/json': ['json']*/
/*     'application/javascript': ['js']*/
/* office:*/
/*   description: Common Office Documents*/
/*   types:*/
/*     # Microsoft Office*/
/*     'application/msword': ['doc']*/
/*     'application/vnd.openxmlformats-officedocument.wordprocessingml.document': ['docx']*/
/*     'application/vnd.ms-word.document.macroEnabled.12': ['docm']*/
/*     'application/vnd.ms-excel': ['xls']*/
/*     'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet': ['xlsx']*/
/*     'application/vnd.ms-excel.sheet.macroEnabled.12': ['xlsm']*/
/*     'application/vnd.ms-excel.sheet.binary.macroEnabled.12': ['xlsb']*/
/*     'application/vnd.ms-powerpoint': ['ppt']*/
/*     'application/vnd.openxmlformats-officedocument.presentationml.presentation': ['pptx']*/
/*     'application/vnd.openxmlformats-officedocument.presentationml.slideshow': ['ppsx']*/
/*     'application/vnd.ms-powerpoint.presentation.macroEnabled.12': ['pptm']*/
/*     'application/vnd.ms-powerpoint.slideshow.macroEnabled.12': ['ppsm']*/
/*     'application/vnd.ms-access': ['mdb', 'accdb']*/
/*     'application/vnd.ms-project': []*/
/*     'application/msonenote': []*/
/*     'application/vnd.ms-publisher': []*/
/*     'application/rtf': ['rtf']*/
/*     'application/vnd.ms-works': []*/
/* */
/*     # iWork*/
/*     'application/vnd.apple.keynote': ['keynote']*/
/*     'application/vnd.apple.pages': ['pages']*/
/*     'application/vnd.apple.numbers': ['numbers']*/
/* */
/*     # OpenOffice*/
/*     'application/vnd.oasis.opendocument.text': []*/
/*     'application/vnd.oasis.opendocument.text-web': []*/
/*     'application/vnd.oasis.opendocument.text-master': []*/
/*     'application/vnd.oasis.opendocument.graphics': []*/
/*     'application/vnd.oasis.opendocument.presentation': []*/
/*     'application/vnd.oasis.opendocument.spreadsheet': []*/
/*     'application/vnd.oasis.opendocument.chart': []*/
/*     'application/vnd.oasis.opendocument.formula': []*/
/*     'application/vnd.oasis.opendocument.database': []*/
/*     'application/vnd.oasis.opendocument.image': []*/
/*     'application/vnd.openofficeorg.extension': []*/
/* */
/*     # Other office*/
/*     'application/wordperfect': []*/
/*     'application/vnd.kde.karbon': []*/
/*     'application/vnd.kde.kchart': []*/
/*     'application/vnd.kde.kformula': []*/
/*     'application/vnd.kde.kivio': []*/
/*     'application/vnd.kde.kontour': []*/
/*     'application/vnd.kde.kpresenter': []*/
/*     'application/vnd.kde.kspread': []*/
/*     'application/vnd.kde.kword': []*/
/* */
/*     # Creative / Common*/
/*     'application/pdf': ['pdf']*/
/*     '.csv': ['csv']*/
/*     'application/illustrator': ['ai']*/
/*     'application/x-director': []*/
/*     'application/x-indesign': []*/
/* */
/*     # Interchange*/
/*     'text/vcard': []*/
/* */
/*     # Other*/
/*     'image/x-dwg': ['dwg']*/
/*     'image/vnd.dwg': ['dwg']*/
/*     'image/vnd.dxf': ['dxf']*/
/*     'application/x-autocad': []*/
/*     'application/x-mathcad': []*/
/*     'application/x-msmoney': []*/
/* */
/*     'application/x-latex': ['tex']*/
/* video:*/
/*   description: Video Files*/
/*   types:*/
/*     'video/avi': ['avi']*/
/*     'video/mpeg': ['mpg','mpeg']*/
/*     'video/mp4': ['mp4']*/
/*     'video/ogg': ['ogg']*/
/*     'video/quicktime': []*/
/*     'video/webm': []*/
/*     'video/x-ms-asf': []*/
/*     'video/x-ms-wmv': []*/
/*     'application/x-dvi': ['dvi']*/
/*     'application/x-shockwave-flash': ['swf']*/
/* archive:*/
/*   description: Archives*/
/*   types:*/
/*     'application/tar': ['tar']*/
/*     'application/gzip': ['gz']*/
/*     'application/x-lha': []*/
/*     'application/rar': ['rar']*/
/*     'application/x-compress': ['z']*/
/*     'application/zip': ['zip']*/
/*     'application/x-7z-compressed': ['7z']*/
/* */
