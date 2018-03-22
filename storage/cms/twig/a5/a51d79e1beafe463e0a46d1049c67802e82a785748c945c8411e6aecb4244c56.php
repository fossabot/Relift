<?php

/* D:\project\web\relift/themes/castus-ui3kit/layouts/styleguide/default.htm */
class __TwigTemplate_d06df22c6dd7c63955e8116f4af0612007e91707e93e29e7baa92096b6df7c49 extends Twig_Template
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
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "site_name", array()), "html", null, true);
        echo "</title>
    <link rel=\"canonical\" href=\"";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("");
        echo "\">

    <!-- Theming / branding -->
    <meta name=\"theme-color\" content=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "brand_color", array()), "html", null, true);
        echo "\">
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/uikit/icon.png");
        echo "\">

    <script src=\"";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/detect.js");
        echo "\"></script>
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/css/uikit3themed.css");
        echo "?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "version", array()), "html", null, true);
        echo "\">
    ";
        // line 16
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 17
        echo "</head>

<body>
    ";
        // line 20
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 21
        echo "
    <script src=\"";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/uikit3.js");
        echo "?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "version", array()), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 23
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/uikit3-icons.js");
        echo "?v=";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["this"] ?? null), "theme", array()), "version", array()), "html", null, true);
        echo "\"></script>
    ";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 25
        echo "</body>
</html>";
    }

    public function getTemplateName()
    {
        return "D:\\project\\web\\relift/themes/castus-ui3kit/layouts/styleguide/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  83 => 24,  77 => 23,  71 => 22,  68 => 21,  66 => 20,  61 => 17,  58 => 16,  52 => 15,  48 => 14,  43 => 12,  39 => 11,  33 => 8,  27 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\" dir=\"ltr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"noindex,nofollow\">
    <title>{{ this.page.meta_title|default(this.page.title) }} | {{ this.theme.site_name }}</title>
    <link rel=\"canonical\" href=\"{{ ''|page }}\">

    <!-- Theming / branding -->
    <meta name=\"theme-color\" content=\"{{ this.theme.brand_color }}\">
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/uikit/icon.png'|theme }}\">

    <script src=\"{{ 'assets/js/detect.js'|theme }}\"></script>
    <link rel=\"stylesheet\" href=\"{{ 'assets/css/uikit3themed.css'|theme }}?v={{ this.theme.version }}\">
    {% styles %}
</head>

<body>
    {% page %}

    <script src=\"{{ 'assets/js/uikit3.js'|theme }}?v={{ this.theme.version }}\"></script>
    <script src=\"{{ 'assets/js/uikit3-icons.js'|theme }}?v={{ this.theme.version }}\"></script>
    {% scripts %}
</body>
</html>", "D:\\project\\web\\relift/themes/castus-ui3kit/layouts/styleguide/default.htm", "");
    }
}
