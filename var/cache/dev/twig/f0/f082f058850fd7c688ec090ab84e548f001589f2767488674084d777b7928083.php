<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_c9cf849db5cb2b07205fec6f2ffcfa266af5f1cbdf238fda3ff39aac08fb7c1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_dc47fa5c141d07d7078b6a051d474194c8e1c8bd09bfd65b5cca30df55b55235 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc47fa5c141d07d7078b6a051d474194c8e1c8bd09bfd65b5cca30df55b55235->enter($__internal_dc47fa5c141d07d7078b6a051d474194c8e1c8bd09bfd65b5cca30df55b55235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_263385b39b6aa9d00462c3df7c03f2c2c889fa4451c710f7c17d9a8dc2c51b26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263385b39b6aa9d00462c3df7c03f2c2c889fa4451c710f7c17d9a8dc2c51b26->enter($__internal_263385b39b6aa9d00462c3df7c03f2c2c889fa4451c710f7c17d9a8dc2c51b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc47fa5c141d07d7078b6a051d474194c8e1c8bd09bfd65b5cca30df55b55235->leave($__internal_dc47fa5c141d07d7078b6a051d474194c8e1c8bd09bfd65b5cca30df55b55235_prof);

        
        $__internal_263385b39b6aa9d00462c3df7c03f2c2c889fa4451c710f7c17d9a8dc2c51b26->leave($__internal_263385b39b6aa9d00462c3df7c03f2c2c889fa4451c710f7c17d9a8dc2c51b26_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_31a477162a0b0e3713a17fa91ea00605a47ce41a2fd837906a17fee536ad352f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31a477162a0b0e3713a17fa91ea00605a47ce41a2fd837906a17fee536ad352f->enter($__internal_31a477162a0b0e3713a17fa91ea00605a47ce41a2fd837906a17fee536ad352f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d3c43362514a3d01ee5177fb087f344d0883eabfd58fc97924c9d419fcef0034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3c43362514a3d01ee5177fb087f344d0883eabfd58fc97924c9d419fcef0034->enter($__internal_d3c43362514a3d01ee5177fb087f344d0883eabfd58fc97924c9d419fcef0034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_d3c43362514a3d01ee5177fb087f344d0883eabfd58fc97924c9d419fcef0034->leave($__internal_d3c43362514a3d01ee5177fb087f344d0883eabfd58fc97924c9d419fcef0034_prof);

        
        $__internal_31a477162a0b0e3713a17fa91ea00605a47ce41a2fd837906a17fee536ad352f->leave($__internal_31a477162a0b0e3713a17fa91ea00605a47ce41a2fd837906a17fee536ad352f_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f9e9963ec064672a1df73c7f791fc747f94b620c775c0d4866136262967dc9eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9e9963ec064672a1df73c7f791fc747f94b620c775c0d4866136262967dc9eb->enter($__internal_f9e9963ec064672a1df73c7f791fc747f94b620c775c0d4866136262967dc9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_8a685c1c61335649f1e3a7ce78529daef894b3e50330d26f3c9cdc308106b34a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a685c1c61335649f1e3a7ce78529daef894b3e50330d26f3c9cdc308106b34a->enter($__internal_8a685c1c61335649f1e3a7ce78529daef894b3e50330d26f3c9cdc308106b34a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

  <ul class=\"pagination\">
    ";
        // line 29
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 30
            echo "      <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </ul>

";
        
        $__internal_8a685c1c61335649f1e3a7ce78529daef894b3e50330d26f3c9cdc308106b34a->leave($__internal_8a685c1c61335649f1e3a7ce78529daef894b3e50330d26f3c9cdc308106b34a_prof);

        
        $__internal_f9e9963ec064672a1df73c7f791fc747f94b620c775c0d4866136262967dc9eb->leave($__internal_f9e9963ec064672a1df73c7f791fc747f94b620c775c0d4866136262967dc9eb_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 34,  131 => 31,  124 => 30,  119 => 29,  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Liste des annonces</h2>

  <ul>
    {% for advert in listAdverts %}
      <li>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
          {{ advert.title }}
        </a>
        par {{ advert.author }},
        le {{ advert.date|date('d/m/Y') }}
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>

  <ul class=\"pagination\">
    {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}
    {% for p in range(1, nbPages) %}
      <li{% if p == page %} class=\"active\"{% endif %}>
        <a href=\"{{ path('oc_platform_home', {'page': p}) }}\">{{ p }}</a>
      </li>
    {% endfor %}
  </ul>

{% endblock %}
", "OCPlatformBundle:Advert:index.html.twig", "/var/www/Synfony/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
