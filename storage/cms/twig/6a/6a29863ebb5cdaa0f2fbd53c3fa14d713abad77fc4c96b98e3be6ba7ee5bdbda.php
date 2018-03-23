<?php

/* D:\www\www\relift/themes/relift/pages/home.htm */
class __TwigTemplate_23cca1d5d0215b021dbb2a138efa30064e700fe79033b688d69c028e40fb41f0 extends Twig_Template
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
        echo "<i-content :style=\"{padding: '0 50px'}\">
    <breadcrumb :style=\"{margin: '20px 0'}\">
        <breadcrumb-item>Home</breadcrumb-item>
        <breadcrumb-item>Components</breadcrumb-item>
        <breadcrumb-item>Layout</breadcrumb-item>
    </breadcrumb>
    <card>
        <div style=\"min-height: 200px;\">
            <i-input v-model=\"value11\">
                <span slot=\"prepend\">http://</span>
                <span slot=\"append\">.com</span>
            </i-input>
            <br>
            <i-input v-model=\"value12\">
                <i-select v-model=\"select1\" slot=\"prepend\" style=\"width: 80px\">
                    <i-option value=\"http\">http://</i-option>
                    <i-option value=\"https\">https://</i-option>
                </i-select>
                <i-select v-model=\"select2\" slot=\"append\" style=\"width: 70px\">
                    <i-option value=\"com\">.com</i-option>
                    <i-option value=\"org\">.org</i-option>
                    <i-option value=\"io\">.io</i-option>
                </i-select>
            </i-input>
            <br>
            <i-input v-model=\"value13\">
                <i-select v-model=\"select3\" slot=\"prepend\" style=\"width: 80px\">
                    <i-option value=\"day\">Day</i-option>
                    <i-option value=\"month\">Month</i-option>
                </i-select>
                <i-button slot=\"append\" icon=\"ios-search\"></i-button>
            </i-input>
        </div>
    </card>
</i-content>
<script>
    new Vue({
        el: '#app',
        data: {
            value11: '',
            value12: '',
            value13: '',
            select1: 'http',
            select2: 'com',
            select3: 'day'
        }
    })
</script>";
    }

    public function getTemplateName()
    {
        return "D:\\www\\www\\relift/themes/relift/pages/home.htm";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<i-content :style=\"{padding: '0 50px'}\">
    <breadcrumb :style=\"{margin: '20px 0'}\">
        <breadcrumb-item>Home</breadcrumb-item>
        <breadcrumb-item>Components</breadcrumb-item>
        <breadcrumb-item>Layout</breadcrumb-item>
    </breadcrumb>
    <card>
        <div style=\"min-height: 200px;\">
            <i-input v-model=\"value11\">
                <span slot=\"prepend\">http://</span>
                <span slot=\"append\">.com</span>
            </i-input>
            <br>
            <i-input v-model=\"value12\">
                <i-select v-model=\"select1\" slot=\"prepend\" style=\"width: 80px\">
                    <i-option value=\"http\">http://</i-option>
                    <i-option value=\"https\">https://</i-option>
                </i-select>
                <i-select v-model=\"select2\" slot=\"append\" style=\"width: 70px\">
                    <i-option value=\"com\">.com</i-option>
                    <i-option value=\"org\">.org</i-option>
                    <i-option value=\"io\">.io</i-option>
                </i-select>
            </i-input>
            <br>
            <i-input v-model=\"value13\">
                <i-select v-model=\"select3\" slot=\"prepend\" style=\"width: 80px\">
                    <i-option value=\"day\">Day</i-option>
                    <i-option value=\"month\">Month</i-option>
                </i-select>
                <i-button slot=\"append\" icon=\"ios-search\"></i-button>
            </i-input>
        </div>
    </card>
</i-content>
<script>
    new Vue({
        el: '#app',
        data: {
            value11: '',
            value12: '',
            value13: '',
            select1: 'http',
            select2: 'com',
            select3: 'day'
        }
    })
</script>", "D:\\www\\www\\relift/themes/relift/pages/home.htm", "");
    }
}
