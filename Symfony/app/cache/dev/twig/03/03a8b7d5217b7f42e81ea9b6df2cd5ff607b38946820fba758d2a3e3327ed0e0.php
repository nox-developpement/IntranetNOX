<?php

/* support/include/class.captcha.php */
class __TwigTemplate_4bef1a3d01c2ebf673b9fd3ff5c2df51ff80c3797877a563aae40d0945dfaa93 extends Twig_Template
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
        $__internal_ad0fab5cf8a36ccc28150a7c8a76ee65c7d14c28ba244414338b03c31f2f27e4 = $this->env->getExtension("native_profiler");
        $__internal_ad0fab5cf8a36ccc28150a7c8a76ee65c7d14c28ba244414338b03c31f2f27e4->enter($__internal_ad0fab5cf8a36ccc28150a7c8a76ee65c7d14c28ba244414338b03c31f2f27e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "support/include/class.captcha.php"));

        // line 1
        echo "<?php
/*********************************************************************
    class.captcha.php

    Very basic captcha class.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2013 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
**********************************************************************/
class Captcha {
    var \$hash;
    var \$bgimages=array('cottoncandy.png','grass.png','ripple.png','silk.png','whirlpool.png',
                        'bubbles.png','crackle.png','lines.png','sand.png','snakeskin.png');
    var \$font = 10;
    function Captcha(\$len=6,\$font=7,\$bg=''){

        \$this->hash = strtoupper(substr(md5(rand(0, 9999)),rand(0, 24),\$len));
        \$this->font = \$font;

        if(\$bg && !is_dir(\$bg)){ //bg file provided?
            \$this->bgimg=\$bg;
        }else{ //assume dir provided or defaults to local.
            \$this->bgimg=rtrim(\$bg,'/').'/'.\$this->bgimages[array_rand(\$this->bgimages, 1)];
        }
    }

    function getImage(){

        if(!extension_loaded('gd') || !function_exists('gd_info')) //GD ext required.
            return;

        \$_SESSION['captcha'] =''; //Clear

        list(\$w,\$h) = getimagesize(\$this->bgimg);
        \$x = round((\$w/2)-((strlen(\$this->hash)*imagefontwidth(\$this->font))/2), 1);
        \$y = round((\$h/2)-(imagefontheight(\$this->font)/2));

        \$img= imagecreatefrompng(\$this->bgimg);
        imagestring(\$img,\$this->font, \$x, \$y,\$this->hash,imagecolorallocate(\$img,0, 0, 0));

        header(\"Content-Type: image/png\");
        imagepng(\$img);
        imagedestroy(\$img);
        \$_SESSION['captcha'] = md5(\$this->hash);
    }
}

?>
";
        
        $__internal_ad0fab5cf8a36ccc28150a7c8a76ee65c7d14c28ba244414338b03c31f2f27e4->leave($__internal_ad0fab5cf8a36ccc28150a7c8a76ee65c7d14c28ba244414338b03c31f2f27e4_prof);

    }

    public function getTemplateName()
    {
        return "support/include/class.captcha.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php*/
/* /**********************************************************************/
/*     class.captcha.php*/
/* */
/*     Very basic captcha class.*/
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
/* class Captcha {*/
/*     var $hash;*/
/*     var $bgimages=array('cottoncandy.png','grass.png','ripple.png','silk.png','whirlpool.png',*/
/*                         'bubbles.png','crackle.png','lines.png','sand.png','snakeskin.png');*/
/*     var $font = 10;*/
/*     function Captcha($len=6,$font=7,$bg=''){*/
/* */
/*         $this->hash = strtoupper(substr(md5(rand(0, 9999)),rand(0, 24),$len));*/
/*         $this->font = $font;*/
/* */
/*         if($bg && !is_dir($bg)){ //bg file provided?*/
/*             $this->bgimg=$bg;*/
/*         }else{ //assume dir provided or defaults to local.*/
/*             $this->bgimg=rtrim($bg,'/').'/'.$this->bgimages[array_rand($this->bgimages, 1)];*/
/*         }*/
/*     }*/
/* */
/*     function getImage(){*/
/* */
/*         if(!extension_loaded('gd') || !function_exists('gd_info')) //GD ext required.*/
/*             return;*/
/* */
/*         $_SESSION['captcha'] =''; //Clear*/
/* */
/*         list($w,$h) = getimagesize($this->bgimg);*/
/*         $x = round(($w/2)-((strlen($this->hash)*imagefontwidth($this->font))/2), 1);*/
/*         $y = round(($h/2)-(imagefontheight($this->font)/2));*/
/* */
/*         $img= imagecreatefrompng($this->bgimg);*/
/*         imagestring($img,$this->font, $x, $y,$this->hash,imagecolorallocate($img,0, 0, 0));*/
/* */
/*         header("Content-Type: image/png");*/
/*         imagepng($img);*/
/*         imagedestroy($img);*/
/*         $_SESSION['captcha'] = md5($this->hash);*/
/*     }*/
/* }*/
/* */
/* ?>*/
/* */
