<?php

/* D:\project\web\relift/themes/castus-ui3kit/layouts/fallback.htm */
class __TwigTemplate_5824af65202b02e1cf3b29120605a1b35eba0bca3855574297ad9e784e1d3110 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
    }

    public function getTemplateName()
    {
        return "D:\\project\\web\\relift/themes/castus-ui3kit/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "D:\\project\\web\\relift/themes/castus-ui3kit/layouts/fallback.htm", "");
    }
}
