<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_795c9c705c1870f4342472e991d300c6bf67720ee2cb586fe1efedbd4df232ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2feaf1f71d97de715be1c70c686947cb6988660d26845dd806e819d38e95e2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2feaf1f71d97de715be1c70c686947cb6988660d26845dd806e819d38e95e2a->enter($__internal_f2feaf1f71d97de715be1c70c686947cb6988660d26845dd806e819d38e95e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_0980b0f2ca7f99ea34590c54caa4470001fedc39f4cdce314f7342f14cbe3640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0980b0f2ca7f99ea34590c54caa4470001fedc39f4cdce314f7342f14cbe3640->enter($__internal_0980b0f2ca7f99ea34590c54caa4470001fedc39f4cdce314f7342f14cbe3640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2feaf1f71d97de715be1c70c686947cb6988660d26845dd806e819d38e95e2a->leave($__internal_f2feaf1f71d97de715be1c70c686947cb6988660d26845dd806e819d38e95e2a_prof);

        
        $__internal_0980b0f2ca7f99ea34590c54caa4470001fedc39f4cdce314f7342f14cbe3640->leave($__internal_0980b0f2ca7f99ea34590c54caa4470001fedc39f4cdce314f7342f14cbe3640_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_34abbf43c8d4bf43c17f4a896a8eba891123fbc75e6d193a0f6c60e5b6e74449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34abbf43c8d4bf43c17f4a896a8eba891123fbc75e6d193a0f6c60e5b6e74449->enter($__internal_34abbf43c8d4bf43c17f4a896a8eba891123fbc75e6d193a0f6c60e5b6e74449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b9335cc9b20dc7299525ec6f3344299e192c5416fd3cb874260be6b26d850941 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9335cc9b20dc7299525ec6f3344299e192c5416fd3cb874260be6b26d850941->enter($__internal_b9335cc9b20dc7299525ec6f3344299e192c5416fd3cb874260be6b26d850941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b9335cc9b20dc7299525ec6f3344299e192c5416fd3cb874260be6b26d850941->leave($__internal_b9335cc9b20dc7299525ec6f3344299e192c5416fd3cb874260be6b26d850941_prof);

        
        $__internal_34abbf43c8d4bf43c17f4a896a8eba891123fbc75e6d193a0f6c60e5b6e74449->leave($__internal_34abbf43c8d4bf43c17f4a896a8eba891123fbc75e6d193a0f6c60e5b6e74449_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5253d6dc3cbd065f4fe0efb0b453f4597997cd91b61d187d2af913ce5752eb77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5253d6dc3cbd065f4fe0efb0b453f4597997cd91b61d187d2af913ce5752eb77->enter($__internal_5253d6dc3cbd065f4fe0efb0b453f4597997cd91b61d187d2af913ce5752eb77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9de8f8c876db566da6d6f5dbc36c649a1e6c0049030d7ca5a2a77e66bb527e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9de8f8c876db566da6d6f5dbc36c649a1e6c0049030d7ca5a2a77e66bb527e60->enter($__internal_9de8f8c876db566da6d6f5dbc36c649a1e6c0049030d7ca5a2a77e66bb527e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_9de8f8c876db566da6d6f5dbc36c649a1e6c0049030d7ca5a2a77e66bb527e60->leave($__internal_9de8f8c876db566da6d6f5dbc36c649a1e6c0049030d7ca5a2a77e66bb527e60_prof);

        
        $__internal_5253d6dc3cbd065f4fe0efb0b453f4597997cd91b61d187d2af913ce5752eb77->leave($__internal_5253d6dc3cbd065f4fe0efb0b453f4597997cd91b61d187d2af913ce5752eb77_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/var/www/Synfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
