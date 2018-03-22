<?php

/* D:\project\web\relift/themes/castus-ui3kit/pages/ui3kit.htm */
class __TwigTemplate_a9ae49f176343ef2aca4320af9addfc6efa3a7d67195e13dda076520685fdf88 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</title>
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,minimum-scale=1,user-scalable=1\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"theme-color\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "brand_color", array()), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 9
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/uikit/icon.png");
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/uikit3.min.css");
        echo "?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "version", array()), "html", null, true);
        echo "\">
</head>
<body class=\"uk-height-viewport\">
<section class=\"uk-section uk-text-center\">
    <h1 class=\"uk-heading-primary\"><img src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/uikit/icon.png");
        echo "\"> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
    <a href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("styleguide/uikit3");
        echo "\"><span uk-icon=\"icon:paint-bucket\"></span> Style Guide</a>
    &nbsp;
    <a href=\"https://getuikit.com/docs/introduction\"><span uk-icon=\"icon:nut\"></span> Documentation</a>
    &nbsp;
    <a href=\"https://getuikit.com/changelog\"><span uk-icon=\"icon:table\"></span> Changelog</a>
</section>
<script src=\"";
        // line 21
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/uikit3.min.js");
        echo "?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "version", array()), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/uikit3-icons.min.js");
        echo "?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "version", array()), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\project\\web\\relift/themes/castus-ui3kit/pages/ui3kit.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 22,  65 => 21,  56 => 15,  50 => 14,  41 => 10,  37 => 9,  33 => 8,  25 => 5,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>{{ this.page.title }} | {{ this.theme.site_name }}</title>
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1,minimum-scale=1,user-scalable=1\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <meta name=\"theme-color\" content=\"{{ this.theme.brand_color }}\">
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/uikit/icon.png'|theme }}\">
    <link rel=\"stylesheet\" href=\"{{ ('assets/css/uikit3.min.css')|theme }}?v={{ this.theme.version }}\">
</head>
<body class=\"uk-height-viewport\">
<section class=\"uk-section uk-text-center\">
    <h1 class=\"uk-heading-primary\"><img src=\"{{ 'assets/images/uikit/icon.png'|theme }}\"> {{ this.page.title }}</h1>
    <a href=\"{{ 'styleguide/uikit3'|page }}\"><span uk-icon=\"icon:paint-bucket\"></span> Style Guide</a>
    &nbsp;
    <a href=\"https://getuikit.com/docs/introduction\"><span uk-icon=\"icon:nut\"></span> Documentation</a>
    &nbsp;
    <a href=\"https://getuikit.com/changelog\"><span uk-icon=\"icon:table\"></span> Changelog</a>
</section>
<script src=\"{{ ('assets/js/uikit3.min.js')|theme }}?v={{ this.theme.version }}\"></script>
<script src=\"{{ ('assets/js/uikit3-icons.min.js')|theme }}?v={{ this.theme.version }}\"></script>
</body>
</html>", "D:\\project\\web\\relift/themes/castus-ui3kit/pages/ui3kit.htm", "");
    }
}
