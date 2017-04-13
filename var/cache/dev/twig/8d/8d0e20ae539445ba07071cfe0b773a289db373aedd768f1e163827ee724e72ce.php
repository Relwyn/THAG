<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_c37bc0ce2640154a5a1e59c95058a029698e5e57c6e105d1879cf715d24d6e45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95f95f7273fefb52f40d833e82c025346a2c648f8d7e0188349eee316cf3c462 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95f95f7273fefb52f40d833e82c025346a2c648f8d7e0188349eee316cf3c462->enter($__internal_95f95f7273fefb52f40d833e82c025346a2c648f8d7e0188349eee316cf3c462_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_4bc8448835d8d5fbc228f48387f4a3a4b0d2bc4c6333724cbf1cbb91b2a71df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc8448835d8d5fbc228f48387f4a3a4b0d2bc4c6333724cbf1cbb91b2a71df9->enter($__internal_4bc8448835d8d5fbc228f48387f4a3a4b0d2bc4c6333724cbf1cbb91b2a71df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95f95f7273fefb52f40d833e82c025346a2c648f8d7e0188349eee316cf3c462->leave($__internal_95f95f7273fefb52f40d833e82c025346a2c648f8d7e0188349eee316cf3c462_prof);

        
        $__internal_4bc8448835d8d5fbc228f48387f4a3a4b0d2bc4c6333724cbf1cbb91b2a71df9->leave($__internal_4bc8448835d8d5fbc228f48387f4a3a4b0d2bc4c6333724cbf1cbb91b2a71df9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e64804dea937b64d386cf9b953bda0f1969b9a9b70392bfb1bd3bba2fad64125 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e64804dea937b64d386cf9b953bda0f1969b9a9b70392bfb1bd3bba2fad64125->enter($__internal_e64804dea937b64d386cf9b953bda0f1969b9a9b70392bfb1bd3bba2fad64125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9b4a6bfe76a6814507661833ee6940ad5b30037f9d951b04a269f5a79f2387f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b4a6bfe76a6814507661833ee6940ad5b30037f9d951b04a269f5a79f2387f6->enter($__internal_9b4a6bfe76a6814507661833ee6940ad5b30037f9d951b04a269f5a79f2387f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9b4a6bfe76a6814507661833ee6940ad5b30037f9d951b04a269f5a79f2387f6->leave($__internal_9b4a6bfe76a6814507661833ee6940ad5b30037f9d951b04a269f5a79f2387f6_prof);

        
        $__internal_e64804dea937b64d386cf9b953bda0f1969b9a9b70392bfb1bd3bba2fad64125->leave($__internal_e64804dea937b64d386cf9b953bda0f1969b9a9b70392bfb1bd3bba2fad64125_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/Synfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
