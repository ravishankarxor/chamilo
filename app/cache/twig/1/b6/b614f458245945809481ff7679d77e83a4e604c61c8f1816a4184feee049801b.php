<?php

/* default/layout/show_footer.tpl */
class __TwigTemplate_71d7ef87db45f7e1fbe6d7688d075273437ba3847ebc98fb4f65c7eb921c768e extends Twig_Template
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
        echo "    </div>
    </section>
    <!-- END CONTENT -->

    <!-- START FOOTER -->
    <footer class=\"footer\">
        ";
        // line 7
        if ((($context["show_footer"] ?? null) == true)) {
            // line 8
            echo "            ";
            $this->loadTemplate(Template::findTemplateFilePath("layout/page_footer.tpl"), "default/layout/show_footer.tpl", 8)->display($context);
            // line 9
            echo "        ";
        }
        // line 10
        echo "    </footer>
    <!-- END FOOTER -->

    </main>
    <!-- END MAIN -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "default/layout/show_footer.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/layout/show_footer.tpl", "C:\\xampp\\htdocs\\chamilo\\main\\template\\default\\layout\\show_footer.tpl");
    }
}
