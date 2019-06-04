<?php

/* default/layout/main.js.tpl */
class __TwigTemplate_669227d6c4a5f828c18d67b2cc6f8a4b863c722a858dfeb10a67a4e0a4efec50 extends Twig_Template
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
        echo "
var ajax_url = _p.web_ajax + 'chat.ajax.php';
var online_button = '<img src=\"' + _p.web_img + 'statusonline.png\">';
var offline_button = '<img src=\"' + _p.web_img + 'statusoffline.png\">';
var connect_lang = '";
        // line 5
        echo get_lang("ChatConnected");
        echo "';
var disconnect_lang = '";
        // line 6
        echo get_lang("ChatDisconnected");
        echo "';

\$(function() {
    addMainEvent(window, 'unload', courseLogout ,false);

    \$(\"#open-view-list\").click(function(){
        \$(\"#student-list-work\").fadeIn(300);
    });
    \$(\"#closed-view-list\").click(function(){
        \$(\"#student-list-work\").fadeOut(300);
    });

    checkBrand();

    var id;
    \$(window).resize(function() {
        clearTimeout(id);
        id = setTimeout(doneResizing, 200);
    });

    // Removes the yellow input in Chrome
    if (navigator.userAgent.toLowerCase().indexOf(\"chrome\") >= 0) {
        \$(window).on(\"load\", function () {
            \$('input:-webkit-autofill').each(function(){
                var text = \$(this).val();
                var name = \$(this).attr('name');
                \$(this).after(this.outerHTML).remove();
                \$('input[name=' + name + ']').val(text);
            });
        });
    }

    \$(\".accordion_jquery\").accordion({
        autoHeight: false,
        active: false, // all items closed by default
        collapsible: true,
        header: \".accordion-heading\"
    });

    // Start modals
    // class='ajax' loads a page in a modal
    \$('body').on('click', 'a.ajax', function(e) {
        e.preventDefault();

        var contentUrl = this.href,
                loadModalContent = \$.get(contentUrl),
                self = \$(this);

        \$.when(loadModalContent).done(function(modalContent) {
            var modalDialog = \$('#global-modal').find('.modal-dialog'),
                    modalSize = self.data('size') || get_url_params(contentUrl, 'modal_size'),
                    modalWidth = self.data('width') || get_url_params(contentUrl, 'width'),
                    modalTitle = self.data('title') || ' ';

            modalDialog.removeClass('modal-lg modal-sm').css('width', '');

            if (modalSize && modalSize.length != 0) {
                switch (modalSize) {
                    case 'lg':
                        modalDialog.addClass('modal-lg');
                        break;
                    case 'sm':
                        modalDialog.addClass('modal-sm');
                        break;
                }
            } else if (modalWidth) {
                modalDialog.css('width', modalWidth + 'px');
            }

            \$('#global-modal').find('.modal-title').text(modalTitle);
            \$('#global-modal').find('.modal-body').html(modalContent);
            \$('#global-modal').modal('show');
        });
    });

    // Expands an image modal
    \$('a.expand-image').on('click', function(e) {
        e.preventDefault();
        var title = \$(this).attr('title');
        var image = new Image();
        image.onload = function() {
            if (title) {
                \$('#expand-image-modal').find('.modal-title').text(title);
            } else {
                \$('#expand-image-modal').find('.modal-title').html('&nbsp;');
            }

            \$('#expand-image-modal').find('.modal-body').html(image);
            \$('#expand-image-modal').modal({
                show: true
            });
        };
        image.src = this.href;
    });

    // Delete modal
    \$('#confirm-delete').on('show.bs.modal', function(e) {
        \$(this).find('.btn-ok').attr('href', \$(e.relatedTarget).data('href'));
        var message = '";
        // line 104
        echo get_lang("AreYouSureToDeleteJS");
        echo ": <strong>' + \$(e.relatedTarget).data('item-title') + '</strong>';

        if (\$(e.relatedTarget).data('item-question')) {
            message = \$(e.relatedTarget).data('item-question');
        }

        \$('.debug-url').html(message);
    });
    // End modals

    // old jquery.menu.js
    \$('#navigation a').stop().animate({
        'marginLeft':'50px'
    },1000);

    \$('#navigation div').hover(
        function () {
            \$('a',\$(this)).stop().animate({
                'marginLeft':'1px'
            },200);
        },
        function () {
            \$('a',\$(this)).stop().animate({
                'marginLeft':'50px'
            },200);
        }
    );

    /* Make responsive image maps */
    \$('map').imageMapResize();

    jQuery.fn.filterByText = function(textbox) {
        return this.each(function() {
            var select = this;
            var options = [];
            \$(select).find('option').each(function() {
                options.push({value: \$(this).val(), text: \$(this).text()});
            });
            \$(select).data('options', options);

            \$(textbox).bind('change keyup', function() {
                var options = \$(select).empty().data('options');
                var search = \$.trim(\$(this).val());
                var regex = new RegExp(search,\"gi\");

                \$.each(options, function(i) {
                    var option = options[i];
                    if(option.text.match(regex) !== null) {
                        \$(select).append(
                                \$('<option>').text(option.text).val(option.value)
                        );
                    }
                });
            });
        });
    };

    \$(\".black-shadow\").mouseenter(function() {
        \$(this).addClass('hovered-course');
    }).mouseleave(function() {
         \$(this).removeClass('hovered-course');
    });

    \$(\"[data-toggle=popover]\").each(function(i, obj) {
        \$(this).popover({
            html: true,
            content: function() {
                var id = \$(this).attr('id')
                return \$('#popover-content-' + id).html();
            }
        });
    });

    \$('.scrollbar-inner').scrollbar();

    // Date time settings.
    moment.locale('";
        // line 180
        echo ($context["locale"] ?? null);
        echo "');
    \$.datepicker.setDefaults(\$.datepicker.regional[\"";
        // line 181
        echo ($context["locale"] ?? null);
        echo "\"]);
    \$.datepicker.regional[\"local\"] = \$.datepicker.regional[\"";
        // line 182
        echo ($context["locale"] ?? null);
        echo "\"];

    // Fix old calls of \"inc/lib/mediaplayer/player.swf\" and convert to <audio> tag, then rendered by media element js
    // see BT#13405
    \$('embed').each( function () {
        var flashVars = \$(this).attr('flashvars');
        if (flashVars && flashVars.indexOf(\"file\") == -1) {
            var audioId = Math.floor( Math.random()*99999 );
            flashVars = flashVars.replace('&autostart=false', '');
            flashVars = flashVars.replace('&autostart=true', '');
            var audioDiv = '<audio id=\"'+audioId+'\" controls=\"controls\" style=\"width:400px;\" width:\"400px;\" src=\"'+flashVars+'\" ><source src=\"'+flashVars+'\" type=\"audio/mp3\"  ></source></audio>';
            \$(this).hide();
            \$(this).after(audioDiv);
        }
    });

    // Chosen select
    \$(\".chzn-select\").chosen({
        disable_search_threshold: 10,
        no_results_text: '";
        // line 201
        echo twig_escape_filter($this->env, get_lang("SearchNoResultsFound"), "js");
        echo "',
        placeholder_text_multiple: '";
        // line 202
        echo twig_escape_filter($this->env, get_lang("SelectSomeOptions"), "js");
        echo "',
        placeholder_text_single: '";
        // line 203
        echo twig_escape_filter($this->env, get_lang("SelectAnOption"), "js");
        echo "',
        width: \"100%\"
    });

    // Bootstrap tabs.
    \$('.tab-wrapper a').click(function (e) {
        e.preventDefault();
        \$(this).tab('show');

        //\$('#tabs a:first').tab('show') // Select first tab
    });

    // Fixes bug when loading links inside a tab.
    \$('.tab-wrapper .tab-pane a').unbind();

    /**
     * Advanced options
     * Usage
     * <a id=\"link\" href=\"url\">Advanced</a>
     * <div id=\"link_options\">
     *     hidden content :)
     * </div>
     * */
    \$(\".advanced_options\").on(\"click\", function (event) {
        event.preventDefault();
        var id = \$(this).attr('id') + '_options';
        var button = \$(this);
        \$(\"#\" + id).toggle();
    });

    /**
     * <a class=\"advanced_options_open\" href=\"http://\" rel=\"div_id\">Open</a>
     * <a class=\"advanced_options_close\" href=\"http://\" rel=\"div_id\">Close</a>
     * <div id=\"div_id\">Div content</div>
     * */
    \$(\".advanced_options_open\").on(\"click\", function (event) {
        event.preventDefault();
        var id = \$(this).attr('rel');
        \$(\"#\" + id).show();
    });

    \$(\".advanced_options_close\").on(\"click\", function (event) {
        event.preventDefault();
        var id = \$(this).attr('rel');
        \$(\"#\" + id).hide();
    });

    // Adv multi-select search input.
    \$('.select_class_filter').each( function () {
        var inputId = \$(this).attr('id');
        inputId = inputId.replace('-filter', '');
        \$(\"#\" + inputId).filterByText(\$(\"#\" + inputId + \"-filter\"));
    });

    // Mediaelement
    if ( ";
        // line 258
        echo ($context["show_media_element"] ?? null);
        echo " == 1) {
        \$('video:not(.skip), audio:not(.skip)').mediaelementplayer({
            pluginPath: _p.web + 'web/assets/mediaelement/build/',
            //renderers: ['html5', 'flash_video', 'native_flv'],
            features: ['";
        // line 262
        echo ($context["video_features"] ?? null);
        echo "'],
            success: function(mediaElement, originalNode, instance) {
            },
            vrPath: _p.web + 'web/assets/vrview/build/vrview.js'
        });
    }

    // Table highlight.
    \$(\"form .data_table input:checkbox\").click(function () {
        if (\$(this).is(\":checked\")) {
            \$(this).parentsUntil(\"tr\").parent().addClass(\"row_selected\");
        } else {
            \$(this).parentsUntil(\"tr\").parent().removeClass(\"row_selected\");
        }
    });

    /* For non HTML5 browsers */
    if (\$(\"#formLogin\".length > 1)) {
        \$(\"input[name=login]\").focus();
    }

    // Tool tip (in exercises)
    var tip_options = {
        placement: 'right'
    };
    \$('.boot-tooltip').tooltip(tip_options);
    var more = '";
        // line 288
        echo twig_escape_filter($this->env, get_lang("SeeMore"), "js");
        echo "';
    var close = '";
        // line 289
        echo twig_escape_filter($this->env, get_lang("Close"), "js");
        echo "';

    \$('.list-teachers').readmore({
        speed: 75,
        moreLink: '<a href=\"#\">' + more + '</a>',
        lessLink: '<a href=\"#\">' + close + '</a>',
        collapsedHeight: 35,
        blockCSS: 'display: block; width: 100%;'
    });

    \$('.star-rating li a').on('click', function(event) {
        var id = \$(this).parents('ul').attr('id');
        \$('#vote_label2_' + id).html(\"";
        // line 301
        echo get_lang("Loading");
        echo "\");
        \$.ajax({
            url: \$(this).attr('data-link'),
            success: function(data) {
                \$(\"#rating_wrapper_\"+id).html(data);
                if (data == 'added') {
                    //\$('#vote_label2_' + id).html(\"";
        // line 307
        echo get_lang("Saved");
        echo "\");
                }
                if (data == 'updated') {
                    //\$('#vote_label2_' + id).html(\"";
        // line 310
        echo get_lang("Saved");
        echo "\");
                }
            }
        });
    });

    \$(\"#notifications\").load(_p.web_ajax + \"online.ajax.php?a=get_users_online\");
});

\$(window).resize(function() {
    checkBrand();
});

\$(document).scroll(function() {
    var valor = \$('body').outerHeight() - 700;
    if (\$(this).scrollTop() > 100) {
        \$('.bottom_actions').addClass('bottom_actions_fixed');
    } else {
        \$('.bottom_actions').removeClass('bottom_actions_fixed');
    }

    if (\$(this).scrollTop() > valor) {
        \$('.bottom_actions').removeClass('bottom_actions_fixed');
    } else {
        \$('.bottom_actions').addClass('bottom_actions_fixed');
    }

    //Exercise warning fixed at the top
    var fixed =  \$(\"#exercise_clock_warning\");
    if (fixed.length) {
        if (!fixed.attr('data-top')) {
            // If already fixed, then do nothing
            if (fixed.hasClass('subnav-fixed')) return;
            // Remember top position
            var offset = fixed.offset();
            fixed.attr('data-top', offset.top);
            fixed.css('width', '100%');
        }

        if (fixed.attr('data-top') - fixed.outerHeight() <= \$(this).scrollTop()) {
            fixed.addClass('navbar-fixed-top');
            fixed.css('width', '100%');
        } else {
            fixed.removeClass('navbar-fixed-top');
            fixed.css('width', '100%');
        }
    }

    // Admin -> Settings toolbar.
    if (\$('body').width() > 959) {
        if (\$('.new_actions').length) {
            if (!\$('.new_actions').attr('data-top')) {
                // If already fixed, then do nothing
                if (\$('.new_actions').hasClass('new_actions-fixed')) return;
                // Remember top position
                var offset = \$('.new_actions').offset();

                var more_top = 0;
                if (\$('.subnav').hasClass('new_actions-fixed')) {
                    more_top = 50;
                }
                \$('.new_actions').attr('data-top', offset.top + more_top);
            }
            // Check if the height is enough before fixing the icons menu (or otherwise removing it)
            // Added a 30px offset otherwise sometimes the menu plays ping-pong when scrolling to
            // the bottom of the page on short pages.
            if (\$('.new_actions').attr('data-top') - \$('.new_actions').outerHeight() <= \$(this).scrollTop() + 30) {
                \$('.new_actions').addClass('new_actions-fixed');
            } else {
                \$('.new_actions').removeClass('new_actions-fixed');
            }
        }
    }
});

function get_url_params(q, attribute) {
    var hash;
    if (q != undefined) {
        q = q.split('&');
        for(var i = 0; i < q.length; i++){
            hash = q[i].split('=');
            if (hash[0] == attribute) {
                return hash[1];
            }
        }
    }
}

function checkBrand() {
    if (\$('.subnav').length) {
        if (\$(window).width() >= 969) {
            \$('.subnav .brand').hide();
        } else {
            \$('.subnav .brand').show();
        }
    }
}

function setCheckbox(value, table_id) {
    checkboxes = \$(\"#\"+table_id+\" input:checkbox\");
    \$.each(checkboxes, function(index, checkbox) {
        checkbox.checked = value;
        if (value) {
            \$(checkbox).parentsUntil(\"tr\").parent().addClass(\"row_selected\");
        } else {
            \$(checkbox).parentsUntil(\"tr\").parent().removeClass(\"row_selected\");
        }
    });
    return false;
}

function action_click(element, table_id) {
    d = \$(\"#\"+table_id);
    if (!confirm('";
        // line 423
        echo get_lang("ConfirmYourChoice");
        echo "')) {
        return false;
    } else {
        var action =\$(element).attr(\"data-action\");
        \$('#'+table_id+' input[name=\"action\"] ').attr(\"value\", action);
        d.submit();
        return false;
    }
}

/**
 * Generic function to replace the deprecated jQuery toggle function
 * @param inId          : id of block to hide / unhide
 * @param inIdTxt       : id of the button
 * @param inTxtHide     : text one of the button
 * @param inTxtUnhide   : text two of the button
 * @todo : allow to detect if text is from a button or from a <a>
 */
function hideUnhide(inId, inIdTxt, inTxtHide, inTxtUnhide) {
    if (\$('#'+inId).css(\"display\") == \"none\") {
        \$('#'+inId).show(400);
        \$('#'+inIdTxt).attr(\"value\", inTxtUnhide);
    } else {
        \$('#'+inId).hide(400);
        \$('#'+inIdTxt).attr(\"value\", inTxtHide);
    }
}

function expandColumnToogle(buttonSelector, col1Info, col2Info) {
    \$(buttonSelector).on('click', function (e) {
        e.preventDefault();

        col1Info = \$.extend({
            selector: '',
            width: 4
        }, col1Info);
        col2Info = \$.extend({
            selector: '',
            width: 8
        }, col2Info);

        if (!col1Info.selector || !col2Info.selector) {
            return;
        }

        var col1 = \$(col1Info.selector),
            col2 = \$(col2Info.selector);

        \$('#expand').toggleClass('hide');
        \$('#contract').toggleClass('hide');

        if (col2.is('.col-md-' + col2Info.width)) {
            col2.removeClass('col-md-' + col2Info.width).addClass('col-md-12');
            col1.removeClass('col-md-' + col1Info.width).addClass('hide');

            return;
        }

        col2.removeClass('col-md-12').addClass('col-md-' + col2Info.width);
        col1.removeClass('hide').addClass('col-md-' + col1Info.width);
    });
}

// Load ckeditor plugins
if (typeof CKEDITOR !== 'undefined') {
    // External plugins not part of the default Ckeditor package.
    var plugins = [
        'asciimath',
        'asciisvg',
        'audio',
        'ckeditor_wiris',
        'dialogui',
        'glossary',
        'leaflet',
        'mapping',
        'maximize',
        'mathjax',
        'oembed',
        'toolbar',
        'toolbarswitch',
        'video',
        'wikilink',
        'wordcount',
        'youtube',
        'flash',
        'inserthtml',
        'image2_chamilo'
    ];

    plugins.forEach(function (plugin) {
        CKEDITOR.plugins.addExternal(
            plugin,
            _p.web_lib + '";
        // line 515
        echo "javascript/ckeditor/plugins/";
        echo "' + plugin + '/'
        );
    });

    /**
     * Function use to load templates in a div
     **/
    var showTemplates = function (ckeditorName) {
        var editorName = 'content';
        if (ckeditorName && ckeditorName.length > 0) {
            editorName = ckeditorName;
        }
        CKEDITOR.editorConfig(CKEDITOR.config);
        CKEDITOR.loadTemplates(CKEDITOR.config.templates_files, function (a) {
            var templatesConfig = CKEDITOR.getTemplates(\"default\");
            var \$templatesUL = \$(\"<ul>\");
            if (templatesConfig) {
                \$.each(templatesConfig.templates, function () {
                    var template = this;
                    var \$templateLi = \$(\"<li>\");
                    var templateHTML = \"<img src=\\\"\" + templatesConfig.imagesPath + template.image + \"\\\" ><div>\";
                    templateHTML += \"<b>\" + template.title + \"</b>\";

                    if (template.description) {
                        templateHTML += \"<div class=description>\" + template.description + \"</div>\";
                    }
                    templateHTML += \"</div>\";

                    \$(\"<a>\", {
                        href: \"#\",
                        html: templateHTML,
                        click: function (e) {
                            e.preventDefault();
                            if (CKEDITOR.instances[editorName]) {
                                CKEDITOR.instances[editorName].setData(template.html, function () {
                                    this.checkDirty();
                                });
                            }
                        }
                    }).appendTo(\$templateLi);
                    \$templatesUL.append(\$templateLi);
                });
            }
            \$templatesUL.appendTo(\"#frmModel\");
        });
    };
}

function doneResizing() {
    var widthWindow = \$(window).width();
    if ((widthWindow>=1024) && (widthWindow>=768)) {
        \$(\"#profileCollapse\").addClass(\"in\");
        \$(\"#courseCollapse\").addClass(\"in\");
        \$(\"#skillsCollapse\").addClass(\"in\");
        \$(\"#sn-sidebar-collapse\").addClass(\"in\");
        \$(\"#user_image_block\").removeClass(\"text-muted\");
    } else {
        \$(\"#profileCollapse\").removeClass(\"in\");
        \$(\"#courseCollapse\").removeClass(\"in\");
        \$(\"#skillsCollapse\").removeClass(\"in\");
        \$(\"#sn-avatar-one\").removeClass(\"in\");
        \$(\"#user_image_block\").addClass(\"text-muted\");
    }
}

function addMainEvent(elm, evType, fn, useCapture) {
    if (elm.addEventListener) {
        elm.addEventListener(evType, fn, useCapture);
        return true;
    } else if (elm.attachEvent) {
        elm.attachEvent('on' + evType, fn);
    } else {
        elm['on'+evType] = fn;
    }
}

function copyTextToClipBoard(elementId)
{
    /* Get the text field */
    var copyText = document.getElementById(elementId);

    /* Select the text field */
    copyText.select();

    /* Copy the text inside the text field */
    document.execCommand(\"copy\");

    /* Alert the copied text */
    //alert('Copied');
}

function setFrameReady(iframeName) {
    \$.frameReady(function () {
        \$(document).ready(function () {
            \$('video:not(.skip), audio:not(.skip)').mediaelementplayer({
                pluginPath: '";
        // line 610
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "web/assets/mediaelement/build/',
                //renderers: ['html5', 'flash_video', 'native_flv'],
                features: ['";
        // line 612
        echo ($context["video_features"] ?? null);
        echo "'],
                success: function(mediaElement, originalNode, instance) {
                },
                vrPath: '";
        // line 615
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "web/assets/vrview/build/vrview.js'
            });
        });
    }, 'top.' + iframeName, {
        load: [
            {type: 'script', id: '_fr1', src: '";
        // line 620
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "web/assets/jquery/dist/jquery.min.js'},
            {type: 'script', id: '_fr7', src: '";
        // line 621
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "web/assets/MathJax/MathJax.js?config=AM_HTMLorMML'},
            {type: 'script', id: '_fr4', src: '";
        // line 622
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "web/assets/jquery-ui/jquery-ui.min.js'},
            {type: 'stylesheet', id: '_fr5', src: '";
        // line 623
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "web/assets/jquery-ui/themes/smoothness/jquery-ui.min.css'},
            {type: 'stylesheet', id: '_fr6', src: '";
        // line 624
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "web/assets/jquery-ui/themes/smoothness/theme.css'},
            {type: 'script', id: '_fr2', src: '";
        // line 625
        echo $this->getAttribute(($context["_p"] ?? null), "web_lib", array());
        echo "javascript/jquery.highlight.js'},
            {type: 'script', id: '_fr3', src: '";
        // line 626
        echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
        echo "glossary/glossary.js.php?";
        echo $this->getAttribute(($context["_p"] ?? null), "web_cid_query", array());
        echo "'},
            {type: 'script', id: '_media1', src: '";
        // line 627
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "web/assets/mediaelement/build/mediaelement-and-player.min.js'},
            {type: 'stylesheet', id: '_media2', src: '";
        // line 628
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "web/assets/mediaelement/build/mediaelementplayer.min.css'},
            ";
        // line 630
        echo "            {type: 'stylesheet', id: '_media4', src: '";
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "web/assets/mediaelement/plugins/vrview/vrview.css'},
            {type: 'script', id: '_media4', src: '";
        // line 631
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "web/assets/mediaelement/plugins/vrview/vrview.js'},
        ]
    });
}";
    }

    public function getTemplateName()
    {
        return "default/layout/main.js.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  746 => 631,  741 => 630,  737 => 628,  733 => 627,  727 => 626,  723 => 625,  719 => 624,  715 => 623,  711 => 622,  707 => 621,  703 => 620,  695 => 615,  689 => 612,  684 => 610,  586 => 515,  491 => 423,  375 => 310,  369 => 307,  360 => 301,  345 => 289,  341 => 288,  312 => 262,  305 => 258,  247 => 203,  243 => 202,  239 => 201,  217 => 182,  213 => 181,  209 => 180,  130 => 104,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/main.js.tpl", "C:\\xampp\\htdocs\\chamilo\\main\\template\\default\\layout\\main.js.tpl");
    }
}
