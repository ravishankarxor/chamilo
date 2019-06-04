<?php

/* default/layout/menu.tpl */
class __TwigTemplate_300de5ba63b5642a0b19848188103bab17453d35f0b56e9aeec00a7273b22b05 extends Twig_Template
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
        echo "<!-- Fixed navbar -->
";
        // line 2
        if (($this->getAttribute(($context["_u"] ?? null), "logged", array()) == 1)) {
            // line 3
            echo "    <script>
        \$(document).ready(function () {
            \$.get('";
            // line 5
            echo $this->getAttribute(($context["_p"] ?? null), "web_main", array());
            echo "inc/ajax/message.ajax.php?a=get_count_message', function(data) {
                if (data === '0') {
                    \$(\"#count_message_li\").addClass('hidden');
                } else {
                    \$(\"#count_message_li\").removeClass('hidden');
                    \$(\"#count_message\").append(data);
                }
            });
        });
    </script>
";
        }
        // line 16
        echo "<nav class=\"navbar navbar-default\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 25
        echo $this->getAttribute(($context["_p"] ?? null), "web", array());
        echo "\">";
        echo $this->getAttribute(($context["_s"] ?? null), "site_name", array());
        echo "</a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "                    <li class=\"";
            echo $this->getAttribute($context["item"], "key", array());
            echo " ";
            echo $this->getAttribute($context["item"], "current", array());
            echo "\">
                        <a href=\"";
            // line 31
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" ";
            echo (($this->getAttribute($context["item"], "target", array())) ? ((("target=\"" . $this->getAttribute($context["item"], "target", array())) . "\"")) : (""));
            echo " title=\"";
            echo $this->getAttribute($context["item"], "title", array());
            echo "\">
                            ";
            // line 32
            echo $this->getAttribute($context["item"], "title", array());
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </ul>
            ";
        // line 37
        if (($this->getAttribute(($context["_u"] ?? null), "logged", array()) == 1)) {
            // line 38
            echo "                <ul class=\"nav navbar-nav navbar-right\">
                    <li id=\"count_message_li\" class=\"hidden\">
                        <a href=\"";
            // line 40
            echo ($context["message_url"] ?? null);
            echo "\">
                            <span id=\"count_message\" class=\"badge badge-warning\"></span>
                        </a>
                    </li>
                    ";
            // line 44
            if (($context["language_form"] ?? null)) {
                // line 45
                echo "                        <li class=\"dropdown language\">
                            ";
                // line 46
                echo ($context["language_form"] ?? null);
                echo "
                        </li>
                    ";
            }
            // line 49
            echo "                    ";
            if (($this->getAttribute(($context["_u"] ?? null), "status", array()) != 6)) {
                // line 50
                echo "                        <li class=\"dropdown avatar-user\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"
                               aria-expanded=\"false\">
                                <img class=\"img-circle\" src=\"";
                // line 53
                echo $this->getAttribute(($context["_u"] ?? null), "avatar_small", array());
                echo "\" alt=\"";
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", array());
                echo "\"/>
                                <span class=\"username-movil\">";
                // line 54
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", array());
                echo "</span>
                                <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\" role=\"menu\">
                                <li class=\"user-header\">
                                    <div class=\"text-center\">
                                        <a href=\"";
                // line 60
                echo ($context["profile_url"] ?? null);
                echo "\">
                                            <img class=\"img-circle\" src=\"";
                // line 61
                echo $this->getAttribute(($context["_u"] ?? null), "avatar_medium", array());
                echo "\" alt=\"";
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", array());
                echo "\"/>
                                            <p class=\"name\">";
                // line 62
                echo $this->getAttribute(($context["_u"] ?? null), "complete_name", array());
                echo "</p>
                                        </a>
                                        <p><i class=\"fa fa-envelope-o\" aria-hidden=\"true\"></i> ";
                // line 64
                echo $this->getAttribute(($context["_u"] ?? null), "email", array());
                echo "</p>
                                    </div>
                                </li>
                                <li role=\"separator\" class=\"divider\"></li>
                                ";
                // line 68
                if (($context["message_url"] ?? null)) {
                    // line 69
                    echo "                                    <li class=\"user-body\">
                                        <a title=\"";
                    // line 70
                    echo get_lang("Inbox");
                    echo "\" href=\"";
                    echo ($context["message_url"] ?? null);
                    echo "\">
                                            <em class=\"fa fa-envelope\" aria-hidden=\"true\"></em> ";
                    // line 71
                    echo get_lang("Inbox");
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                // line 75
                echo "
                                ";
                // line 76
                if (($context["pending_survey_url"] ?? null)) {
                    // line 77
                    echo "                                    <li class=\"user-body\">
                                        <a href=\"";
                    // line 78
                    echo ($context["pending_survey_url"] ?? null);
                    echo "\">
                                            <em class=\"fa fa-pie-chart\"></em> ";
                    // line 79
                    echo get_lang("PendingSurveys");
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                // line 83
                echo "
                                ";
                // line 84
                if (($context["certificate_url"] ?? null)) {
                    // line 85
                    echo "                                    <li class=\"user-body\">
                                        <a title=\"";
                    // line 86
                    echo get_lang("MyCertificates");
                    echo "\" href=\"";
                    echo ($context["certificate_url"] ?? null);
                    echo "\">
                                            <em class=\"fa fa-graduation-cap\"
                                                aria-hidden=\"true\"></em> ";
                    // line 88
                    echo get_lang("MyCertificates");
                    echo "
                                        </a>
                                    </li>
                                ";
                }
                // line 92
                echo "
                                <li class=\"user-body\">
                                    <a id=\"logout_button\" title=\"";
                // line 94
                echo get_lang("Logout");
                echo "\" href=\"";
                echo ($context["logout_link"] ?? null);
                echo "\">
                                        <em class=\"fa fa-sign-out\"></em> ";
                // line 95
                echo get_lang("Logout");
                echo "
                                    </a>
                                </li>
                            </ul>
                        </li>
                    ";
            }
            // line 101
            echo "                </ul>
            ";
        }
        // line 103
        echo "        </div><!--/.nav-collapse -->
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "default/layout/menu.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 103,  241 => 101,  232 => 95,  226 => 94,  222 => 92,  215 => 88,  208 => 86,  205 => 85,  203 => 84,  200 => 83,  193 => 79,  189 => 78,  186 => 77,  184 => 76,  181 => 75,  174 => 71,  168 => 70,  165 => 69,  163 => 68,  156 => 64,  151 => 62,  145 => 61,  141 => 60,  132 => 54,  126 => 53,  121 => 50,  118 => 49,  112 => 46,  109 => 45,  107 => 44,  100 => 40,  96 => 38,  94 => 37,  91 => 36,  81 => 32,  73 => 31,  66 => 30,  62 => 29,  53 => 25,  42 => 16,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/menu.tpl", "C:\\xampp\\htdocs\\chamilo\\main\\template\\default\\layout\\menu.tpl");
    }
}
