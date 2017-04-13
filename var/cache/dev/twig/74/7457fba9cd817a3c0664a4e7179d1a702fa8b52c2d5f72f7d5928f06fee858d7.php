<?php

/* OCPlatformBundle:Advert:delete.html.twig */
class __TwigTemplate_e3bcfb3808471c45fb9bb1ffd8319b8d458c4fd031be126d6519b544eb22813b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:delete.html.twig", 3);
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
        $__internal_83bdc53af257049dc45599ea611f1a5bf9c1e75978ad6ee300032ff065caa82d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_83bdc53af257049dc45599ea611f1a5bf9c1e75978ad6ee300032ff065caa82d->enter($__internal_83bdc53af257049dc45599ea611f1a5bf9c1e75978ad6ee300032ff065caa82d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $__internal_f091f05376c463939ab0bb4650f15a094519c3aec6cc9bdfcdd6b3d4487a50a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f091f05376c463939ab0bb4650f15a094519c3aec6cc9bdfcdd6b3d4487a50a0->enter($__internal_f091f05376c463939ab0bb4650f15a094519c3aec6cc9bdfcdd6b3d4487a50a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83bdc53af257049dc45599ea611f1a5bf9c1e75978ad6ee300032ff065caa82d->leave($__internal_83bdc53af257049dc45599ea611f1a5bf9c1e75978ad6ee300032ff065caa82d_prof);

        
        $__internal_f091f05376c463939ab0bb4650f15a094519c3aec6cc9bdfcdd6b3d4487a50a0->leave($__internal_f091f05376c463939ab0bb4650f15a094519c3aec6cc9bdfcdd6b3d4487a50a0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_818b76b12c18b4795dffd4f7955ed8763bcfee11ae5e477f1c653bc38afac506 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_818b76b12c18b4795dffd4f7955ed8763bcfee11ae5e477f1c653bc38afac506->enter($__internal_818b76b12c18b4795dffd4f7955ed8763bcfee11ae5e477f1c653bc38afac506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7a3d7cde55d2c6bbd5f081ce5e84a6f617b0478254300ef933cae83ba2dbeb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3d7cde55d2c6bbd5f081ce5e84a6f617b0478254300ef933cae83ba2dbeb3e->enter($__internal_7a3d7cde55d2c6bbd5f081ce5e84a6f617b0478254300ef933cae83ba2dbeb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Supprimer une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7a3d7cde55d2c6bbd5f081ce5e84a6f617b0478254300ef933cae83ba2dbeb3e->leave($__internal_7a3d7cde55d2c6bbd5f081ce5e84a6f617b0478254300ef933cae83ba2dbeb3e_prof);

        
        $__internal_818b76b12c18b4795dffd4f7955ed8763bcfee11ae5e477f1c653bc38afac506->leave($__internal_818b76b12c18b4795dffd4f7955ed8763bcfee11ae5e477f1c653bc38afac506_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c1b4ded58bc88e3a2823e7918ed8939bfd9a3ee64bdc7b753b5b727b512ccbf2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b4ded58bc88e3a2823e7918ed8939bfd9a3ee64bdc7b753b5b727b512ccbf2->enter($__internal_c1b4ded58bc88e3a2823e7918ed8939bfd9a3ee64bdc7b753b5b727b512ccbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_0df800931351dca0898a1fd2c84f8857939d1a3440a641750382f83297ba6436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0df800931351dca0898a1fd2c84f8857939d1a3440a641750382f83297ba6436->enter($__internal_0df800931351dca0898a1fd2c84f8857939d1a3440a641750382f83297ba6436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "\" ?
  </p>

  ";
        // line 18
        echo "  <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" method=\"post\">
    <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    ";
        // line 24
        echo "    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    ";
        // line 26
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </form>

";
        
        $__internal_0df800931351dca0898a1fd2c84f8857939d1a3440a641750382f83297ba6436->leave($__internal_0df800931351dca0898a1fd2c84f8857939d1a3440a641750382f83297ba6436_prof);

        
        $__internal_c1b4ded58bc88e3a2823e7918ed8939bfd9a3ee64bdc7b753b5b727b512ccbf2->leave($__internal_c1b4ded58bc88e3a2823e7918ed8939bfd9a3ee64bdc7b753b5b727b512ccbf2_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 26,  96 => 24,  89 => 19,  84 => 18,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Supprimer une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Supprimer une annonce</h2>

  <p>
    Etes-vous certain de vouloir supprimer l'annonce \"{{ advert.title }}\" ?
  </p>

  {# On met l'id de l'annonce dans la route de l'action du formulaire #}
  <form action=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" method=\"post\">
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
    {# Ici j'ai écrit le bouton de soumission à la main #}
    <input type=\"submit\" value=\"Supprimer\" class=\"btn btn-danger\" />
    {# Ceci va générer le champ CSRF #}
    {{ form_rest(form) }}
  </form>

{% endblock %}
", "OCPlatformBundle:Advert:delete.html.twig", "/var/www/Synfony/src/OC/PlatformBundle/Resources/views/Advert/delete.html.twig");
    }
}
