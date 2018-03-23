<?php

/* D:\www\www\relift/themes/relift/layouts/main.htm */
class __TwigTemplate_57fd2cbd28696330897765e95829f8833db1e408df869d97acd4fd54c415fdf7 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array(), "any", false, true), "meta_title", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()))) : (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()))), "html", null, true);
        echo "</title>
    <link rel=\"canonical\" href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("");
        echo "\">

    <meta name=\"theme-color\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "brand_color", array()), "html", null, true);
        echo "\">
    <!--<link rel=\"shortcut icon\" href=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/");
        echo "\">-->

    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/iview.css");
        echo "\">
    <style>
        .layout{
            border: 1px solid #d7dde4;
            background: #f5f7f9;
            position: relative;
            border-radius: 4px;
            overflow: hidden;
        }
        .layout-logo{
            width: 100px;
            height: 30px;
            background: #5b6270;
            border-radius: 3px;
            float: left;
            position: relative;
            top: 15px;
            left: 20px;
        }
        .layout-nav{
            width: 420px;
            margin: 0 auto;
            margin-right: 20px;
        }
        .layout-footer-center{
            text-align: center;
        }
    </style>
    <script src=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/vue.min.js");
        echo "\"></script>
    <script src=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/iview.min.js");
        echo "\"></script>
</head>

<body>
<div id=\"app\">
    <div class=\"layout\">
        <layout>
            <i-header>
                <i-menu mode=\"horizontal\" theme=\"dark\" active-name=\"1\">
                    <div class=\"layout-logo\"></div>
                    <div class=\"layout-nav\">
                        <menu-item name=\"1\">
                            <icon type=\"ios-navigate\"></icon>
                            Item 1
                        </menu-item>
                        <menu-item name=\"2\">
                            <icon type=\"ios-keypad\"></icon>
                            Item 2
                        </menu-item>
                        <menu-item name=\"3\">
                            <icon type=\"ios-analytics\"></icon>
                            Item 3
                        </menu-item>
                        <menu-item name=\"4\">
                            <icon type=\"ios-paper\"></icon>
                            Item 4
                        </menu-item>
                    </div>
                </i-menu>
            </i-header>
    ";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 73
        echo "            <i-footer class=\"layout-footer-center\">2011-2016 &copy; TalkingData</i-footer>
        </layout>
    </div>
</div>
<script>
    new Vue({
        el: '#app',
    })
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\www\\relift/themes/relift/layouts/main.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 73,  113 => 72,  80 => 42,  76 => 41,  45 => 13,  40 => 11,  36 => 10,  31 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <title>{{ this.page.meta_title|default(this.page.title) }}</title>
    <link rel=\"canonical\" href=\"{{ ''|page }}\">

    <meta name=\"theme-color\" content=\"{{ this.theme.brand_color }}\">
    <!--<link rel=\"shortcut icon\" href=\"{{ 'assets/images/'|theme }}\">-->

    <link rel=\"stylesheet\" href=\"{{ 'assets/css/iview.css'|theme }}\">
    <style>
        .layout{
            border: 1px solid #d7dde4;
            background: #f5f7f9;
            position: relative;
            border-radius: 4px;
            overflow: hidden;
        }
        .layout-logo{
            width: 100px;
            height: 30px;
            background: #5b6270;
            border-radius: 3px;
            float: left;
            position: relative;
            top: 15px;
            left: 20px;
        }
        .layout-nav{
            width: 420px;
            margin: 0 auto;
            margin-right: 20px;
        }
        .layout-footer-center{
            text-align: center;
        }
    </style>
    <script src=\"{{ 'assets/js/vue.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/iview.min.js'|theme }}\"></script>
</head>

<body>
<div id=\"app\">
    <div class=\"layout\">
        <layout>
            <i-header>
                <i-menu mode=\"horizontal\" theme=\"dark\" active-name=\"1\">
                    <div class=\"layout-logo\"></div>
                    <div class=\"layout-nav\">
                        <menu-item name=\"1\">
                            <icon type=\"ios-navigate\"></icon>
                            Item 1
                        </menu-item>
                        <menu-item name=\"2\">
                            <icon type=\"ios-keypad\"></icon>
                            Item 2
                        </menu-item>
                        <menu-item name=\"3\">
                            <icon type=\"ios-analytics\"></icon>
                            Item 3
                        </menu-item>
                        <menu-item name=\"4\">
                            <icon type=\"ios-paper\"></icon>
                            Item 4
                        </menu-item>
                    </div>
                </i-menu>
            </i-header>
    {% page %}
            <i-footer class=\"layout-footer-center\">2011-2016 &copy; TalkingData</i-footer>
        </layout>
    </div>
</div>
<script>
    new Vue({
        el: '#app',
    })
</script>
</body>
</html>", "D:\\www\\www\\relift/themes/relift/layouts/main.htm", "");
    }
}
