<?php

/* D:\www\www\relift/themes/castus-ui3kit/layouts/fallback.htm */
class __TwigTemplate_9997d9e6fda76d94f1e1adfc966e4b5f139a7d2d55b4704ad022d88c22031883 extends Twig_Template
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
        return "D:\\www\\www\\relift/themes/castus-ui3kit/layouts/fallback.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% page %}", "D:\\www\\www\\relift/themes/castus-ui3kit/layouts/fallback.htm", "");
    }
}
