<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_29ddc1eca04b767cf92df40577bece6f77c2001c1a299cf5d954f332635d2621 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_89ac25a839fc108327bd9999b28fbb6092d3a6f9b7c2332e41cc37373ff86565 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89ac25a839fc108327bd9999b28fbb6092d3a6f9b7c2332e41cc37373ff86565->enter($__internal_89ac25a839fc108327bd9999b28fbb6092d3a6f9b7c2332e41cc37373ff86565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2045b7d3eb0a3f5a11b41ead0b9b1a566e6b0d6afbae09545847ece38a445a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2045b7d3eb0a3f5a11b41ead0b9b1a566e6b0d6afbae09545847ece38a445a3f->enter($__internal_2045b7d3eb0a3f5a11b41ead0b9b1a566e6b0d6afbae09545847ece38a445a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89ac25a839fc108327bd9999b28fbb6092d3a6f9b7c2332e41cc37373ff86565->leave($__internal_89ac25a839fc108327bd9999b28fbb6092d3a6f9b7c2332e41cc37373ff86565_prof);

        
        $__internal_2045b7d3eb0a3f5a11b41ead0b9b1a566e6b0d6afbae09545847ece38a445a3f->leave($__internal_2045b7d3eb0a3f5a11b41ead0b9b1a566e6b0d6afbae09545847ece38a445a3f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3f58ab656707363685137b751ea846a99ec38f83475c297ca3e72211eeb9e325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f58ab656707363685137b751ea846a99ec38f83475c297ca3e72211eeb9e325->enter($__internal_3f58ab656707363685137b751ea846a99ec38f83475c297ca3e72211eeb9e325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_bb724fe7ffd0e4d86a983585ad8b21e357e040bd54be683473d62f32f091e68b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb724fe7ffd0e4d86a983585ad8b21e357e040bd54be683473d62f32f091e68b->enter($__internal_bb724fe7ffd0e4d86a983585ad8b21e357e040bd54be683473d62f32f091e68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bb724fe7ffd0e4d86a983585ad8b21e357e040bd54be683473d62f32f091e68b->leave($__internal_bb724fe7ffd0e4d86a983585ad8b21e357e040bd54be683473d62f32f091e68b_prof);

        
        $__internal_3f58ab656707363685137b751ea846a99ec38f83475c297ca3e72211eeb9e325->leave($__internal_3f58ab656707363685137b751ea846a99ec38f83475c297ca3e72211eeb9e325_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1cad2a9cc070196d0f69885ca7aafa23413762759ee0c45736fc632d9e231c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cad2a9cc070196d0f69885ca7aafa23413762759ee0c45736fc632d9e231c84->enter($__internal_1cad2a9cc070196d0f69885ca7aafa23413762759ee0c45736fc632d9e231c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_eac242a7afc355507c7cdad7e7daf50ad1214514a75ba8bab0b67fdf89a3b04c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac242a7afc355507c7cdad7e7daf50ad1214514a75ba8bab0b67fdf89a3b04c->enter($__internal_eac242a7afc355507c7cdad7e7daf50ad1214514a75ba8bab0b67fdf89a3b04c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_eac242a7afc355507c7cdad7e7daf50ad1214514a75ba8bab0b67fdf89a3b04c->leave($__internal_eac242a7afc355507c7cdad7e7daf50ad1214514a75ba8bab0b67fdf89a3b04c_prof);

        
        $__internal_1cad2a9cc070196d0f69885ca7aafa23413762759ee0c45736fc632d9e231c84->leave($__internal_1cad2a9cc070196d0f69885ca7aafa23413762759ee0c45736fc632d9e231c84_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c3c729f42f4e6f3a2904da5abfe791bb12d3c58d59077a856c3ab2fd148d6d76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c729f42f4e6f3a2904da5abfe791bb12d3c58d59077a856c3ab2fd148d6d76->enter($__internal_c3c729f42f4e6f3a2904da5abfe791bb12d3c58d59077a856c3ab2fd148d6d76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5b95a6359d4475b9ff673e9eab865027341f8e8ac26e2a7d0af9577a255dc50d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b95a6359d4475b9ff673e9eab865027341f8e8ac26e2a7d0af9577a255dc50d->enter($__internal_5b95a6359d4475b9ff673e9eab865027341f8e8ac26e2a7d0af9577a255dc50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5b95a6359d4475b9ff673e9eab865027341f8e8ac26e2a7d0af9577a255dc50d->leave($__internal_5b95a6359d4475b9ff673e9eab865027341f8e8ac26e2a7d0af9577a255dc50d_prof);

        
        $__internal_c3c729f42f4e6f3a2904da5abfe791bb12d3c58d59077a856c3ab2fd148d6d76->leave($__internal_c3c729f42f4e6f3a2904da5abfe791bb12d3c58d59077a856c3ab2fd148d6d76_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/Synfony/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
