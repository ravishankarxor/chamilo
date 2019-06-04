<?php

/* default/layout/show_header.tpl */
class __TwigTemplate_1479d5c70e22fa2e26f5139415c375c70d8bb509e62994912fe7944c2b761117 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 7]> <html lang=\"";
        // line 2
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>    <html lang=\"";
        // line 3
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>    <html lang=\"";
        // line 4
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang=\"";
        // line 6
        echo ($context["document_language"] ?? null);
        echo "\" class=\"no-js\"> <!--<![endif]-->
<head>
    ";
        // line 8
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "</head>
<body>

<!-- START MAIN -->
<main id=\"main\" dir=\"";
        // line 15
        echo ($context["text_direction"] ?? null);
        echo "\" class=\"";
        echo ($context["section_name"] ?? null);
        echo " ";
        echo ($context["login_class"] ?? null);
        echo "\">
    <noscript>";
        // line 16
        echo get_lang("NoJavascript");
        echo "</noscript>
    ";
        // line 17
        if ( !(null === ($context["show_course_shortcut"] ?? null))) {
            // line 18
            echo "        <!-- TOOLS SHOW COURSE -->
        <div id=\"cm-tools\" class=\"nav-tools\">
            ";
            // line 20
            echo ($context["show_course_shortcut"] ?? null);
            echo "
        </div>
        <!-- END TOOLS SHOW COURSE -->
    ";
        }
        // line 24
        echo "    ";
        if ((($context["displayCookieUsageWarning"] ?? null) == true)) {
            // line 25
            echo "        <!-- START DISPLAY COOKIES VALIDATION -->
        <div class=\"toolbar-cookie alert-warning\">
            <form onSubmit=\"\$(this).toggle('slow')\" action=\"\" method=\"post\">
                <input value=1 type=\"hidden\" name=\"acceptCookies\"/>
                <div class=\"cookieUsageValidation\">
                    ";
            // line 30
            echo get_lang("YouAcceptCookies");
            echo "
                    <span style=\"margin-left:20px;\" onclick=\"\$(this).next().toggle('slow'); \$(this).toggle('slow')\">
                                (";
            // line 32
            echo get_lang("More");
            echo ")
                            </span>
                    <div style=\"display:none; margin:20px 0;\">
                        ";
            // line 35
            echo get_lang("HelpCookieUsageValidation");
            echo "
                    </div>
                    <span style=\"margin-left:20px;\" onclick=\"\$(this).parent().parent().submit()\">
                                (";
            // line 38
            echo get_lang("Accept");
            echo ")
                            </span>
                </div>
            </form>
        </div>
        <!-- END DISPLAY COOKIES VALIDATION -->
    ";
        }
        // line 45
        echo "
    <!-- START HEADER -->
    <header id=\"cm-header\">
        ";
        // line 48
        if ((($context["show_header"] ?? null) == true)) {
            // line 49
            echo "            ";
            $this->loadTemplate(Template::findTemplateFilePath("layout/page_header.tpl"), "default/layout/show_header.tpl", 49)->display($context);
            // line 50
            echo "        ";
        }
        // line 51
        echo "    </header>
    <!-- END HEADER -->

    <!-- START CONTENT -->
    <section id=\"cm-content\">
        <div class=\"container\">
            ";
        // line 57
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 60
        echo "            ";
        echo ($context["flash_messages"] ?? null);
        echo "
";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "        ";
        $this->loadTemplate(Template::findTemplateFilePath("layout/head.tpl"), "default/layout/show_header.tpl", 9)->display($context);
        // line 10
        echo "    ";
    }

    // line 57
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 58
        echo "                ";
        echo ($context["breadcrumb"] ?? null);
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "default/layout/show_header.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 58,  152 => 57,  148 => 10,  145 => 9,  142 => 8,  135 => 60,  133 => 57,  125 => 51,  122 => 50,  119 => 49,  117 => 48,  112 => 45,  102 => 38,  96 => 35,  90 => 32,  85 => 30,  78 => 25,  75 => 24,  68 => 20,  64 => 18,  62 => 17,  58 => 16,  50 => 15,  44 => 11,  42 => 8,  37 => 6,  32 => 4,  28 => 3,  24 => 2,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/show_header.tpl", "C:\\xampp\\htdocs\\chamilo\\main\\template\\default\\layout\\show_header.tpl");
    }
}
