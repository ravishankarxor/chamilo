<?php

/* default/layout/page_footer.tpl */
class __TwigTemplate_083c23da9bc2f2d282144a13105bef146a7bee539da65c1978f9dc8fbeb602d5 extends Twig_Template
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
        echo "<div class=\"container\">
    ";
        // line 2
        if ( !(null === ($context["plugin_pre_footer"] ?? null))) {
            // line 3
            echo "        <div id=\"plugin_pre_footer\">
            ";
            // line 4
            echo ($context["plugin_pre_footer"] ?? null);
            echo "
        </div>
    ";
        }
        // line 7
        echo "    <section class=\"sub-footer\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-md-4\">
                ";
        // line 10
        if ( !(null === ($context["session_teachers"] ?? null))) {
            // line 11
            echo "                <div class=\"session-teachers\">
                    ";
            // line 12
            echo ($context["session_teachers"] ?? null);
            echo "
                </div>
                ";
        }
        // line 15
        echo "                ";
        if ( !(null === ($context["teachers"] ?? null))) {
            // line 16
            echo "                <div class=\"teachers\">
                    ";
            // line 17
            echo ($context["teachers"] ?? null);
            echo "
                </div>
                ";
        }
        // line 20
        echo "                ";
        if ( !(null === ($context["plugin_footer_left"] ?? null))) {
            // line 21
            echo "                <div id=\"plugin_footer_left\">
                    ";
            // line 22
            echo ($context["plugin_footer_left"] ?? null);
            echo "
                </div>
                ";
        }
        // line 25
        echo "            </div>
            <div class=\"col-xs-12 col-md-4\">
                ";
        // line 27
        if ( !(null === ($context["plugin_footer_center"] ?? null))) {
            // line 28
            echo "                    <div id=\"plugin_footer_center\">
                        ";
            // line 29
            echo ($context["plugin_footer_center"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 32
        echo "            </div>
            <div class=\"col-xs-12 col-md-4 text-right\">
                ";
        // line 34
        if ( !(null === ($context["administrator_name"] ?? null))) {
            // line 35
            echo "                    <div class=\"administrator-name\">
                        ";
            // line 36
            echo ($context["administrator_name"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 39
        echo "                ";
        if ( !twig_test_empty($this->getAttribute(($context["_s"] ?? null), "software_name", array()))) {
            // line 40
            echo "                    <div class=\"software-name\">
                        <a href=\"";
            // line 41
            echo $this->getAttribute(($context["_p"] ?? null), "web", array());
            echo "\" target=\"_blank\">
                            ";
            // line 42
            echo sprintf(get_lang("PoweredByX"), $this->getAttribute(($context["_s"] ?? null), "software_name", array()));
            echo "
                        </a>&copy; ";
            // line 43
            echo twig_date_format_filter($this->env, "now", "Y");
            echo "
                    </div>
                ";
        }
        // line 46
        echo "                ";
        if ( !(null === ($context["plugin_footer_right"] ?? null))) {
            // line 47
            echo "                    <div id=\"plugin_footer_right\">
                        ";
            // line 48
            echo ($context["plugin_footer_right"] ?? null);
            echo "
                    </div>
                ";
        }
        // line 51
        echo "            </div>
        </div>
        ";
        // line 53
        if (($context["footer_extra_content"] ?? null)) {
            // line 54
            echo "            ";
            echo ($context["footer_extra_content"] ?? null);
            echo "
        ";
        }
        // line 56
        echo "    </section>
</div>

";
        // line 60
        echo "<div class=\"modal fade\" id=\"global-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"global-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 64
        echo get_lang("Close");
        echo "\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <h4 class=\"modal-title\" id=\"global-modal-title\">&nbsp;</h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>

";
        // line 76
        echo "<div class=\"modal fade\" id=\"expand-image-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"expand-image-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
        // line 80
        echo get_lang("Close");
        echo "\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\" id=\"expand-image-modal-title\">&nbsp;</h4>
            </div>
            <div class=\"modal-body\">
            </div>
        </div>
    </div>
</div>

";
        // line 90
        echo "<div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"confirm-delete-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">";
        // line 95
        echo get_lang("Delete");
        echo "</h4>
            </div>

            <div class=\"modal-body\">
                <p class=\"debug-url\"></p>
            </div>

            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 103
        echo get_lang("Cancel");
        echo "</button>
                <a id=\"delete_item\" class=\"btn btn-danger btn-ok\">";
        // line 104
        echo get_lang("Delete");
        echo "</a>
            </div>
        </div>
    </div>
</div>

";
        // line 110
        echo ($context["execution_stats"] ?? null);
    }

    public function getTemplateName()
    {
        return "default/layout/page_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 110,  212 => 104,  208 => 103,  197 => 95,  190 => 90,  178 => 80,  172 => 76,  158 => 64,  152 => 60,  147 => 56,  141 => 54,  139 => 53,  135 => 51,  129 => 48,  126 => 47,  123 => 46,  117 => 43,  113 => 42,  109 => 41,  106 => 40,  103 => 39,  97 => 36,  94 => 35,  92 => 34,  88 => 32,  82 => 29,  79 => 28,  77 => 27,  73 => 25,  67 => 22,  64 => 21,  61 => 20,  55 => 17,  52 => 16,  49 => 15,  43 => 12,  40 => 11,  38 => 10,  33 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/page_footer.tpl", "C:\\xampp\\htdocs\\chamilo\\main\\template\\default\\layout\\page_footer.tpl");
    }
}
