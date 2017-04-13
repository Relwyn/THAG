<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_c7544a1d9393e5c3d0c84bb288b76137fab8a57e7af933debc810aaaf9b68d22 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14c6c89fa9071a9705d4cdd4f66519da836fd8303f0dd19d26d66c1e3c216105 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14c6c89fa9071a9705d4cdd4f66519da836fd8303f0dd19d26d66c1e3c216105->enter($__internal_14c6c89fa9071a9705d4cdd4f66519da836fd8303f0dd19d26d66c1e3c216105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_aafd7af48318cd15880d4686eb39bea9dc50ab6b20e4019b62a232be0e0e165b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aafd7af48318cd15880d4686eb39bea9dc50ab6b20e4019b62a232be0e0e165b->enter($__internal_aafd7af48318cd15880d4686eb39bea9dc50ab6b20e4019b62a232be0e0e165b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14c6c89fa9071a9705d4cdd4f66519da836fd8303f0dd19d26d66c1e3c216105->leave($__internal_14c6c89fa9071a9705d4cdd4f66519da836fd8303f0dd19d26d66c1e3c216105_prof);

        
        $__internal_aafd7af48318cd15880d4686eb39bea9dc50ab6b20e4019b62a232be0e0e165b->leave($__internal_aafd7af48318cd15880d4686eb39bea9dc50ab6b20e4019b62a232be0e0e165b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2cc6951950b71eef7e0861668cda64a5e6cd3e974484b4e09cbf13006cc941aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cc6951950b71eef7e0861668cda64a5e6cd3e974484b4e09cbf13006cc941aa->enter($__internal_2cc6951950b71eef7e0861668cda64a5e6cd3e974484b4e09cbf13006cc941aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_efd2990f1d55f5b606bae920c5aa85371bd8f203a5787d41a1eea3685bc63b17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efd2990f1d55f5b606bae920c5aa85371bd8f203a5787d41a1eea3685bc63b17->enter($__internal_efd2990f1d55f5b606bae920c5aa85371bd8f203a5787d41a1eea3685bc63b17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_efd2990f1d55f5b606bae920c5aa85371bd8f203a5787d41a1eea3685bc63b17->leave($__internal_efd2990f1d55f5b606bae920c5aa85371bd8f203a5787d41a1eea3685bc63b17_prof);

        
        $__internal_2cc6951950b71eef7e0861668cda64a5e6cd3e974484b4e09cbf13006cc941aa->leave($__internal_2cc6951950b71eef7e0861668cda64a5e6cd3e974484b4e09cbf13006cc941aa_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_378272dd5dd1e46e474484063613d2fe9cf3e22b7adf23f3690e46ed2ce44251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378272dd5dd1e46e474484063613d2fe9cf3e22b7adf23f3690e46ed2ce44251->enter($__internal_378272dd5dd1e46e474484063613d2fe9cf3e22b7adf23f3690e46ed2ce44251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95089b6008863d24015df6cc5fae27f2c5bd57a6b18c4eeb0bc1af26c53f90d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95089b6008863d24015df6cc5fae27f2c5bd57a6b18c4eeb0bc1af26c53f90d4->enter($__internal_95089b6008863d24015df6cc5fae27f2c5bd57a6b18c4eeb0bc1af26c53f90d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_95089b6008863d24015df6cc5fae27f2c5bd57a6b18c4eeb0bc1af26c53f90d4->leave($__internal_95089b6008863d24015df6cc5fae27f2c5bd57a6b18c4eeb0bc1af26c53f90d4_prof);

        
        $__internal_378272dd5dd1e46e474484063613d2fe9cf3e22b7adf23f3690e46ed2ce44251->leave($__internal_378272dd5dd1e46e474484063613d2fe9cf3e22b7adf23f3690e46ed2ce44251_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_ade8084d2b85e43bee56f2a561f3d3c64a958ad008602ad6cf8043c6667c4b11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade8084d2b85e43bee56f2a561f3d3c64a958ad008602ad6cf8043c6667c4b11->enter($__internal_ade8084d2b85e43bee56f2a561f3d3c64a958ad008602ad6cf8043c6667c4b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_824df6a3745e4dc6cbaa440d04d28b952d228070730dd5a517dfc857632a604b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_824df6a3745e4dc6cbaa440d04d28b952d228070730dd5a517dfc857632a604b->enter($__internal_824df6a3745e4dc6cbaa440d04d28b952d228070730dd5a517dfc857632a604b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_824df6a3745e4dc6cbaa440d04d28b952d228070730dd5a517dfc857632a604b->leave($__internal_824df6a3745e4dc6cbaa440d04d28b952d228070730dd5a517dfc857632a604b_prof);

        
        $__internal_ade8084d2b85e43bee56f2a561f3d3c64a958ad008602ad6cf8043c6667c4b11->leave($__internal_ade8084d2b85e43bee56f2a561f3d3c64a958ad008602ad6cf8043c6667c4b11_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}
", "OCPlatformBundle::layout.html.twig", "/var/www/Synfony/src/OC/PlatformBundle/Resources/views/layout.html.twig");
    }
}
