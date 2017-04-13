<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_bf0dd3571961de12ea6c0a24b36e0aac605f586c1eefb31375dcf2f638b69a53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5da556440cb4efbdbf2520dffbd6bee2a7b157d6673597933fb6e69c1732f60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da556440cb4efbdbf2520dffbd6bee2a7b157d6673597933fb6e69c1732f60f->enter($__internal_5da556440cb4efbdbf2520dffbd6bee2a7b157d6673597933fb6e69c1732f60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_e4a179d2ddf2d09e63ba9c70ed2c0faf3ab1a35444b2b7aaeea44cbc7d109a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4a179d2ddf2d09e63ba9c70ed2c0faf3ab1a35444b2b7aaeea44cbc7d109a78->enter($__internal_e4a179d2ddf2d09e63ba9c70ed2c0faf3ab1a35444b2b7aaeea44cbc7d109a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da556440cb4efbdbf2520dffbd6bee2a7b157d6673597933fb6e69c1732f60f->leave($__internal_5da556440cb4efbdbf2520dffbd6bee2a7b157d6673597933fb6e69c1732f60f_prof);

        
        $__internal_e4a179d2ddf2d09e63ba9c70ed2c0faf3ab1a35444b2b7aaeea44cbc7d109a78->leave($__internal_e4a179d2ddf2d09e63ba9c70ed2c0faf3ab1a35444b2b7aaeea44cbc7d109a78_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b64d4935044e9e76a3f545d26fe1f69290189d32bc3c5d0d64f2970bb9beef7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b64d4935044e9e76a3f545d26fe1f69290189d32bc3c5d0d64f2970bb9beef7->enter($__internal_8b64d4935044e9e76a3f545d26fe1f69290189d32bc3c5d0d64f2970bb9beef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_efba7633e69c5f28503647c32dab2c48c0f340c14d7c357e24daa11464644e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efba7633e69c5f28503647c32dab2c48c0f340c14d7c357e24daa11464644e91->enter($__internal_efba7633e69c5f28503647c32dab2c48c0f340c14d7c357e24daa11464644e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_efba7633e69c5f28503647c32dab2c48c0f340c14d7c357e24daa11464644e91->leave($__internal_efba7633e69c5f28503647c32dab2c48c0f340c14d7c357e24daa11464644e91_prof);

        
        $__internal_8b64d4935044e9e76a3f545d26fe1f69290189d32bc3c5d0d64f2970bb9beef7->leave($__internal_8b64d4935044e9e76a3f545d26fe1f69290189d32bc3c5d0d64f2970bb9beef7_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:add.html.twig", "/var/www/Synfony/src/OC/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}
