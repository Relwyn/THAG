<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_8e771f5fba2125877defce700a96592222562e8789f252472dc36c4b514ad387 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e451cc287933d13e727f29db1a9a77ebfdb4187fb64f402c3355f0b1c58abcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e451cc287933d13e727f29db1a9a77ebfdb4187fb64f402c3355f0b1c58abcd->enter($__internal_7e451cc287933d13e727f29db1a9a77ebfdb4187fb64f402c3355f0b1c58abcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_4fcf92a10ab85a92707bfd1563c0b44eed56b1841fc8a826be094db397717167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fcf92a10ab85a92707bfd1563c0b44eed56b1841fc8a826be094db397717167->enter($__internal_4fcf92a10ab85a92707bfd1563c0b44eed56b1841fc8a826be094db397717167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e451cc287933d13e727f29db1a9a77ebfdb4187fb64f402c3355f0b1c58abcd->leave($__internal_7e451cc287933d13e727f29db1a9a77ebfdb4187fb64f402c3355f0b1c58abcd_prof);

        
        $__internal_4fcf92a10ab85a92707bfd1563c0b44eed56b1841fc8a826be094db397717167->leave($__internal_4fcf92a10ab85a92707bfd1563c0b44eed56b1841fc8a826be094db397717167_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_49e89047fdfdadfd1ae6f5912c3f2e4ad329c481664cb0efe6429fd23c477d8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49e89047fdfdadfd1ae6f5912c3f2e4ad329c481664cb0efe6429fd23c477d8b->enter($__internal_49e89047fdfdadfd1ae6f5912c3f2e4ad329c481664cb0efe6429fd23c477d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_98df7a615e5b4282279c308987a8b6cdfb859bd28d635859aef9900e00089e9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98df7a615e5b4282279c308987a8b6cdfb859bd28d635859aef9900e00089e9e->enter($__internal_98df7a615e5b4282279c308987a8b6cdfb859bd28d635859aef9900e00089e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_98df7a615e5b4282279c308987a8b6cdfb859bd28d635859aef9900e00089e9e->leave($__internal_98df7a615e5b4282279c308987a8b6cdfb859bd28d635859aef9900e00089e9e_prof);

        
        $__internal_49e89047fdfdadfd1ae6f5912c3f2e4ad329c481664cb0efe6429fd23c477d8b->leave($__internal_49e89047fdfdadfd1ae6f5912c3f2e4ad329c481664cb0efe6429fd23c477d8b_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_e1c014e8e88d8d6131808ec8243fb0432c41f6ddd545f7476df0e2cd3ddba1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1c014e8e88d8d6131808ec8243fb0432c41f6ddd545f7476df0e2cd3ddba1c0->enter($__internal_e1c014e8e88d8d6131808ec8243fb0432c41f6ddd545f7476df0e2cd3ddba1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_c9ffc1735ed2285b6110a42230935b1c7b7533dd714f9deceadee08aef22da2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9ffc1735ed2285b6110a42230935b1c7b7533dd714f9deceadee08aef22da2c->enter($__internal_c9ffc1735ed2285b6110a42230935b1c7b7533dd714f9deceadee08aef22da2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_c9ffc1735ed2285b6110a42230935b1c7b7533dd714f9deceadee08aef22da2c->leave($__internal_c9ffc1735ed2285b6110a42230935b1c7b7533dd714f9deceadee08aef22da2c_prof);

        
        $__internal_e1c014e8e88d8d6131808ec8243fb0432c41f6ddd545f7476df0e2cd3ddba1c0->leave($__internal_e1c014e8e88d8d6131808ec8243fb0432c41f6ddd545f7476df0e2cd3ddba1c0_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Modifier une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:edit.html.twig", "/var/www/Synfony/src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}
