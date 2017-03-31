/* This includes 5 files: bootstrap/usernames.js, bootstrap/plugins.js, bootstrap/userfields.js, bootstrap/colorpicker.js, bootstrap/formfields.js */
function evo_initialize_colorpicker_inputs(){jQuery(".form_color_input").each(function(){var a="farbtastic_colorpicker_"+colorpicker_num;jQuery("body").append('<div id="'+a+'" style="display:none"></div>');var b=jQuery.farbtastic("#"+a);b.linkTo(this),jQuery(this).popover({trigger:"manual",placement:"right",html:!0,content:jQuery("#"+a)}),jQuery(this).focus(function(){var b=jQuery(this).parent().find(".popover");0==b.length?(jQuery("#"+a).show(),jQuery(this).popover("show")):b.show()}).blur(function(){var a=jQuery(this).parent().find(".popover");a.length>0&&a.hide()}),colorpicker_num++})}function form_error_field_popover(a){var b=jQuery(a);if(b.hasClass("popovererror"))return!0;var c=jQuery('span.field_error[rel="'+b.attr("name")+'"]').html();if(""==c)return!0;var d=b.prop("tagName");if(b.popover("destroy"),"INPUT"==b.prop("tagName")&&b.hasClass("form_date_input"))try{$.datepicker._updateDatepicker($.datepicker._getInst(a))}catch(a){console.error("Unable to generate datepicker content using private methods _updateDatepicker() and _getInst()")}c&&b.popover({trigger:"manual",placement:function(){var a;if("INPUT"==b.prop("tagName")&&b.hasClass("form_date_input")){var c=jQuery(window),e=jQuery("#ui-datepicker-div");if(e.is(":visible"))a=e.offset().top>b.offset().top;else{var f=c.height()-(b.offset().top-c.scrollTop()+b.outerHeight());a=f>=e.outerHeight()}}return"SELECT"==d||"TEXTAREA"==d||"INPUT"==d&&a?"top":"bottom"},html:!0,content:'<span class="field_error">'+c+"</span>"}),b.on("show.bs.popover",function(){b.addClass("popovererror")})}var originalLeave=jQuery.fn.popover.Constructor.prototype.leave;jQuery.fn.popover.Constructor.prototype.leave=function(a){var b,c,d=a instanceof this.constructor?a:jQuery(a.currentTarget)[this.type](this.getDelegateOptions()).data("bs."+this.type);originalLeave.call(this,a),a.currentTarget&&(b=jQuery(a.currentTarget).siblings(".popover"),c=d.timeout,b.one("mouseenter",function(){clearTimeout(c),b.one("mouseleave",function(){jQuery.fn.popover.Constructor.prototype.leave.call(d,d)})}))},jQuery(document).ready(function(){var a=1;jQuery(document).on("mouseover","[rel^=bubbletip_]",function(){var b=jQuery(this),c="",d="";if(b.attr("rel").match("bubbletip_user_")){var e=b.attr("rel").replace(/bubbletip_user_(\d+).*/g,"$1");c="popover_cache_user_"+e,d="&userid="+e}else if(b.attr("rel").match("bubbletip_comment_")){var f=b.attr("rel").replace(/bubbletip_comment_(\d+).*/,"$1");c="popover_cache_comment_"+f,d="&commentid="+f}if(""!=c){b.attr("id","popoverlink"+a);var g={trigger:"hover",container:"body",placement:"top",html:!0,delay:{hide:400},template:'<div class="popover"><div class="arrow"></div><div class="popover-content"></div></div>'};if(0==jQuery("#"+c).length){jQuery("body").append('<div id="'+c+'" style="display:none;"></div>');var h=jQuery("#"+c);jQuery.ajax({type:"POST",url:htsrv_url+"anon_async.php",data:"action=get_user_bubbletip&blog="+blog_id+d,success:function(a){if(ajax_response_is_correct(a)){a=ajax_debug_clear(a),h.html(a);var c=h.find("img"),d=c.attr("height")+"px",e=c.attr("width")+"px";c.css("height",d),c.css("width",e);var f=!0;b.hasClass("hide_popover")&&(f=!1,b.removeClass("hide_popover")),g.content=h.html(),b.popover(g),f&&b.popover("show"),b.attr("rel",b.attr("rel").replace(/bubbletip_(user_|comment_)[\d\s]+/g,""))}}})}else if(""!=jQuery("#"+c).html()){var i=b.attr("title");b.removeAttr("title"),g.content=jQuery("#"+c).html(),b.popover(g),b.popover("show"),b.attr("title",i),b.attr("rel",b.attr("rel").replace(/bubbletip_(user_|comment_)[\d\s]+/g,""))}a++}}),jQuery(document).on("mouseleave","[rel^=bubbletip_]",function(){jQuery(this).addClass("hide_popover")}),jQuery(document).on("mouseover",".popover",function(){jQuery(this).addClass("mouseover")}),jQuery(document).on("mouseleave",".popover",function(){jQuery(this).removeClass("mouseover"),jQuery(this).data("bs.popover").$element.popover("hide")}),jQuery(document).on("hide.bs.popover",function(a){jQuery(a.target).data("bs.popover").$tip.hasClass("mouseover")&&a.preventDefault()})});var plugin_number=1;jQuery(document).on("mouseover","a.help_plugin_icon",function(){if(jQuery(this).hasClass("popoverplugin"))return!0;jQuery(this).attr("title",""),jQuery(this).find("span").removeAttr("title");var a=jQuery(this).attr("rel");jQuery("#help_plugin_info_suffix").length>0&&(a+=jQuery("#help_plugin_info_suffix").html());var b="right";jQuery("body").width()-jQuery(this).position().left<220&&(b="left"),jQuery(this).popover({trigger:"hover",placement:b,html:!0,content:a,template:'<div class="popover popover-plugin"><div class="arrow"></div><div class="popover-content"></div></div>'}),jQuery(this).popover("show"),jQuery(this).addClass("popoverplugin"),plugin_number++}),jQuery(document).ready(function(){var a=1;jQuery(document).on("focus","[rel^=ufdf_]",function(){var b=jQuery(this),c="";if(!b.hasClass("popoverfield"))var d=b.attr("rel").replace("ufdf_",""),c="popover_cache_field_"+d;if(""!=c){var e={trigger:"focus",placement:"right",html:!0,template:'<div class="popover popover-userfield"><div class="arrow"></div><div class="popover-content"></div></div>'};if(0==jQuery("#"+c).length){jQuery("body").append('<div id="'+c+'" style="display:none"></div>');var f=jQuery("#"+c);jQuery.ajax({type:"POST",url:htsrv_url+"anon_async.php",data:"action=get_field_bubbletip&field_ID="+d+"&b2evo_icons_type=fontawesome",success:function(a){if(ajax_response_is_correct(a)){a=ajax_debug_clear(a),f.html(a);var c=!0;b.hasClass("popoverfield")&&(c=!1,b.removeClass("popoverfield")),e.content=f.html(),b.popover(e),c&&b.popover("show")}b.addClass("popoverfield")}})}else""!=jQuery("#"+c).html()&&(e.content=jQuery("#"+c).html(),b.popover(e),b.popover("show"),b.addClass("popoverfield"));a++}}),jQuery(document).on("blur","[rel^=ufdf_]",function(){jQuery(this).addClass("popoverfield")}),jQuery(document).on("click",".popover-userfield",function(){jQuery(this).next().find('span[class*="icon"]:first').click()})});var colorpicker_num=1;jQuery(document).ready(function(){evo_initialize_colorpicker_inputs()});var form_error_fields_selector="input.field_error[type=text], input.field_error[type=radio], span.checkbox_error input[type=checkbox], select.field_error, textarea.field_error, input.field_error[type=file]";jQuery(document).on("mouseover focus",form_error_fields_selector,function(){form_error_field_popover(this),0==jQuery(this).next("div.popover:visible").length&&jQuery(this).popover("show")}).on("mouseout mouseleave blur",form_error_fields_selector,function(){jQuery(this).is(":focus")||jQuery(this).popover("hide")});