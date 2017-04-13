<?php

/* OCCoreBundle:Core:index.html.twig */
class __TwigTemplate_8d504414a5a78886d209e4d3eb2fa12f965cc13aae0a3934120833e09a8de0ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCCoreBundle:Core:index.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a369f0451bb9e55ddce2a79a40744629eb52443eb778c3f50c88cfaef0596c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a369f0451bb9e55ddce2a79a40744629eb52443eb778c3f50c88cfaef0596c6a->enter($__internal_a369f0451bb9e55ddce2a79a40744629eb52443eb778c3f50c88cfaef0596c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $__internal_e5e69571adc100de7d0fa82bf6563a5ac480b2d15bff9820280f553eeab8015c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5e69571adc100de7d0fa82bf6563a5ac480b2d15bff9820280f553eeab8015c->enter($__internal_e5e69571adc100de7d0fa82bf6563a5ac480b2d15bff9820280f553eeab8015c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle:Core:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a369f0451bb9e55ddce2a79a40744629eb52443eb778c3f50c88cfaef0596c6a->leave($__internal_a369f0451bb9e55ddce2a79a40744629eb52443eb778c3f50c88cfaef0596c6a_prof);

        
        $__internal_e5e69571adc100de7d0fa82bf6563a5ac480b2d15bff9820280f553eeab8015c->leave($__internal_e5e69571adc100de7d0fa82bf6563a5ac480b2d15bff9820280f553eeab8015c_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8448a48ebfd67e15a6cb886e17ad3dd4ddf8293ea41e1d50a37057a170c356b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8448a48ebfd67e15a6cb886e17ad3dd4ddf8293ea41e1d50a37057a170c356b->enter($__internal_b8448a48ebfd67e15a6cb886e17ad3dd4ddf8293ea41e1d50a37057a170c356b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_602cdc82b2284b5f7899b6ef952c1bbb623cf753d651d3a696e4b06431f6e220 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602cdc82b2284b5f7899b6ef952c1bbb623cf753d651d3a696e4b06431f6e220->enter($__internal_602cdc82b2284b5f7899b6ef952c1bbb623cf753d651d3a696e4b06431f6e220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Page d'accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_602cdc82b2284b5f7899b6ef952c1bbb623cf753d651d3a696e4b06431f6e220->leave($__internal_602cdc82b2284b5f7899b6ef952c1bbb623cf753d651d3a696e4b06431f6e220_prof);

        
        $__internal_b8448a48ebfd67e15a6cb886e17ad3dd4ddf8293ea41e1d50a37057a170c356b->leave($__internal_b8448a48ebfd67e15a6cb886e17ad3dd4ddf8293ea41e1d50a37057a170c356b_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_3fd31dce4e6b1de69e7d16b19700735601b6fac365b7bad6e4b0a6853e5546b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fd31dce4e6b1de69e7d16b19700735601b6fac365b7bad6e4b0a6853e5546b4->enter($__internal_3fd31dce4e6b1de69e7d16b19700735601b6fac365b7bad6e4b0a6853e5546b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b7249c77ac6757978f9abf32e4aff10564f62f44a841ccf66d6e50127479d425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7249c77ac6757978f9abf32e4aff10564f62f44a841ccf66d6e50127479d425->enter($__internal_b7249c77ac6757978f9abf32e4aff10564f62f44a841ccf66d6e50127479d425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
  <h2>Page d'accueil de notre site</h2>

  ";
        // line 13
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "info"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "    <div class=\"alert alert-info\">Message flash : ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
  ";
        // line 18
        echo "  <h3>Dernières annonces</h3>
  ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "

  <h3>Derniers messages sur le forum (hypothétique)</h3>
  <p>
    ";
        // line 25
        echo "    Bla bla bla...
  </p>

";
        
        $__internal_b7249c77ac6757978f9abf32e4aff10564f62f44a841ccf66d6e50127479d425->leave($__internal_b7249c77ac6757978f9abf32e4aff10564f62f44a841ccf66d6e50127479d425_prof);

        
        $__internal_3fd31dce4e6b1de69e7d16b19700735601b6fac365b7bad6e4b0a6853e5546b4->leave($__internal_3fd31dce4e6b1de69e7d16b19700735601b6fac365b7bad6e4b0a6853e5546b4_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle:Core:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 25,  97 => 19,  94 => 18,  91 => 16,  82 => 14,  77 => 13,  72 => 9,  63 => 8,  50 => 5,  41 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# On utilise ici le layout général, qui se situe dans ce même CoreBundle maintenant #}
{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Page d'accueil - {{ parent() }}
{% endblock %}

{% block body %}

  <h2>Page d'accueil de notre site</h2>

  {# On affiche tous les messages flash dont le nom est « info » #}
  {% for message in app.session.flashbag.get('info') %}
    <div class=\"alert alert-info\">Message flash : {{ message }}</div>
  {% endfor %}

  {# Pour afficher les dernières annonces, on réutilise le contrôleur menu du PlatformBundle #}
  <h3>Dernières annonces</h3>
  {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}

  <h3>Derniers messages sur le forum (hypothétique)</h3>
  <p>
    {# Ici, on devrait utiliser un contrôleur d'un éventuel ForumBundle pour afficher les derniers posts sur le forum,
       ce n'est pas le sujet ici #}
    Bla bla bla...
  </p>

{% endblock %}
", "OCCoreBundle:Core:index.html.twig", "/var/www/Synfony/src/OC/CoreBundle/Resources/views/Core/index.html.twig");
    }
}
