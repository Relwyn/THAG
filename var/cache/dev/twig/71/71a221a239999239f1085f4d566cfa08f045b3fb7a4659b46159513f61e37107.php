<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_2bbc37753fda3822b059fb9bfd6d99e0967cba032afc6e6bcfd27dabde58dd37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f87b7a863ae5aaf677978c5e86db8d3cd8b2f56f1eaef9a76182876022601843 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f87b7a863ae5aaf677978c5e86db8d3cd8b2f56f1eaef9a76182876022601843->enter($__internal_f87b7a863ae5aaf677978c5e86db8d3cd8b2f56f1eaef9a76182876022601843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8572cd9940e1650e874a4034787e7db0a12619b446d04ae7a6c370720c4201e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8572cd9940e1650e874a4034787e7db0a12619b446d04ae7a6c370720c4201e9->enter($__internal_8572cd9940e1650e874a4034787e7db0a12619b446d04ae7a6c370720c4201e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f87b7a863ae5aaf677978c5e86db8d3cd8b2f56f1eaef9a76182876022601843->leave($__internal_f87b7a863ae5aaf677978c5e86db8d3cd8b2f56f1eaef9a76182876022601843_prof);

        
        $__internal_8572cd9940e1650e874a4034787e7db0a12619b446d04ae7a6c370720c4201e9->leave($__internal_8572cd9940e1650e874a4034787e7db0a12619b446d04ae7a6c370720c4201e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e263dfca5a615bf7c200247d50d654d51ebeb25006558de90f2a42ae8c0c855b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e263dfca5a615bf7c200247d50d654d51ebeb25006558de90f2a42ae8c0c855b->enter($__internal_e263dfca5a615bf7c200247d50d654d51ebeb25006558de90f2a42ae8c0c855b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a6ad6b903abbc5d798e8e0144751c8c43a36f214632eb971d3d49af77a4dc0ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6ad6b903abbc5d798e8e0144751c8c43a36f214632eb971d3d49af77a4dc0ec->enter($__internal_a6ad6b903abbc5d798e8e0144751c8c43a36f214632eb971d3d49af77a4dc0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_a6ad6b903abbc5d798e8e0144751c8c43a36f214632eb971d3d49af77a4dc0ec->leave($__internal_a6ad6b903abbc5d798e8e0144751c8c43a36f214632eb971d3d49af77a4dc0ec_prof);

        
        $__internal_e263dfca5a615bf7c200247d50d654d51ebeb25006558de90f2a42ae8c0c855b->leave($__internal_e263dfca5a615bf7c200247d50d654d51ebeb25006558de90f2a42ae8c0c855b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8d05190f858ff0af071ce8bf8664dfc7d19cb1b12b25c6d2b465ebfcb05f32e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d05190f858ff0af071ce8bf8664dfc7d19cb1b12b25c6d2b465ebfcb05f32e1->enter($__internal_8d05190f858ff0af071ce8bf8664dfc7d19cb1b12b25c6d2b465ebfcb05f32e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f43a860d3fd18178b13fa4bb6a27dbf3bac617c29ee859af8b5c2ea18ccf50a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43a860d3fd18178b13fa4bb6a27dbf3bac617c29ee859af8b5c2ea18ccf50a0->enter($__internal_f43a860d3fd18178b13fa4bb6a27dbf3bac617c29ee859af8b5c2ea18ccf50a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_f43a860d3fd18178b13fa4bb6a27dbf3bac617c29ee859af8b5c2ea18ccf50a0->leave($__internal_f43a860d3fd18178b13fa4bb6a27dbf3bac617c29ee859af8b5c2ea18ccf50a0_prof);

        
        $__internal_8d05190f858ff0af071ce8bf8664dfc7d19cb1b12b25c6d2b465ebfcb05f32e1->leave($__internal_8d05190f858ff0af071ce8bf8664dfc7d19cb1b12b25c6d2b465ebfcb05f32e1_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3e87cb21a46ac85a4519d05bed8001c95d876224ab592986f0910fa24e120bd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e87cb21a46ac85a4519d05bed8001c95d876224ab592986f0910fa24e120bd1->enter($__internal_3e87cb21a46ac85a4519d05bed8001c95d876224ab592986f0910fa24e120bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9b9a0bb2f9a40ce83abc0833ab95153e876c8a78dc2cc99af1c7aeb4e3515f65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9a0bb2f9a40ce83abc0833ab95153e876c8a78dc2cc99af1c7aeb4e3515f65->enter($__internal_9b9a0bb2f9a40ce83abc0833ab95153e876c8a78dc2cc99af1c7aeb4e3515f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9b9a0bb2f9a40ce83abc0833ab95153e876c8a78dc2cc99af1c7aeb4e3515f65->leave($__internal_9b9a0bb2f9a40ce83abc0833ab95153e876c8a78dc2cc99af1c7aeb4e3515f65_prof);

        
        $__internal_3e87cb21a46ac85a4519d05bed8001c95d876224ab592986f0910fa24e120bd1->leave($__internal_3e87cb21a46ac85a4519d05bed8001c95d876224ab592986f0910fa24e120bd1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/Synfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
