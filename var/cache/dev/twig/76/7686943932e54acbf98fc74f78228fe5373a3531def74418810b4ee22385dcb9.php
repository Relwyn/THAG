<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_443f33ff90b9f1a173ee18e598df38c68b9f54383a8f9e1cfb4cddbf887369c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_7ae29461f8550d02db8d46ee5081f151aa15d67763d610b04b1e75b9f192cd9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae29461f8550d02db8d46ee5081f151aa15d67763d610b04b1e75b9f192cd9d->enter($__internal_7ae29461f8550d02db8d46ee5081f151aa15d67763d610b04b1e75b9f192cd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_e803f9985c92d333c232564eea9a8de84a6d1138914d219dd110fe7dc3d2b1d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e803f9985c92d333c232564eea9a8de84a6d1138914d219dd110fe7dc3d2b1d0->enter($__internal_e803f9985c92d333c232564eea9a8de84a6d1138914d219dd110fe7dc3d2b1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ae29461f8550d02db8d46ee5081f151aa15d67763d610b04b1e75b9f192cd9d->leave($__internal_7ae29461f8550d02db8d46ee5081f151aa15d67763d610b04b1e75b9f192cd9d_prof);

        
        $__internal_e803f9985c92d333c232564eea9a8de84a6d1138914d219dd110fe7dc3d2b1d0->leave($__internal_e803f9985c92d333c232564eea9a8de84a6d1138914d219dd110fe7dc3d2b1d0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b51e86f02d92d35b1b786bcd7da2b8638f3797beb56ef129009fe8719d684aeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b51e86f02d92d35b1b786bcd7da2b8638f3797beb56ef129009fe8719d684aeb->enter($__internal_b51e86f02d92d35b1b786bcd7da2b8638f3797beb56ef129009fe8719d684aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_07ef2f2206d23c3198c1223e3319201938c039f764700b20d267f1081d2d2e4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07ef2f2206d23c3198c1223e3319201938c039f764700b20d267f1081d2d2e4d->enter($__internal_07ef2f2206d23c3198c1223e3319201938c039f764700b20d267f1081d2d2e4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_07ef2f2206d23c3198c1223e3319201938c039f764700b20d267f1081d2d2e4d->leave($__internal_07ef2f2206d23c3198c1223e3319201938c039f764700b20d267f1081d2d2e4d_prof);

        
        $__internal_b51e86f02d92d35b1b786bcd7da2b8638f3797beb56ef129009fe8719d684aeb->leave($__internal_b51e86f02d92d35b1b786bcd7da2b8638f3797beb56ef129009fe8719d684aeb_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_1250267d397cbd4b9c17a4cd022d0a9782d4fdb3bfa48bcd262c8c3bdb40c71e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1250267d397cbd4b9c17a4cd022d0a9782d4fdb3bfa48bcd262c8c3bdb40c71e->enter($__internal_1250267d397cbd4b9c17a4cd022d0a9782d4fdb3bfa48bcd262c8c3bdb40c71e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_d66a99af88db796a3f115ddd3a241ddfcbe1d6b2ae759cd69293e5233f2a91fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d66a99af88db796a3f115ddd3a241ddfcbe1d6b2ae759cd69293e5233f2a91fb->enter($__internal_d66a99af88db796a3f115ddd3a241ddfcbe1d6b2ae759cd69293e5233f2a91fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <div style=\"float: left; margin-right: 1em;\">
    ";
        // line 13
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 14
            echo "      <img
        src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
        alt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
        height=\"60\"
      />
    ";
        }
        // line 20
        echo "  </div>

  <h2>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  ";
        // line 29
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 30
            echo "    <p>
      Cette annonce est parue dans les catégories suivantes :
      ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 33
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 34
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    </p>
  ";
        }
        // line 37
        echo "
  ";
        // line 38
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills"))) > 0)) {
            // line 39
            echo "    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 43
                echo "          <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "      </ul>
    </div>
  ";
        }
        // line 48
        echo "
  <p>
    <a href=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_d66a99af88db796a3f115ddd3a241ddfcbe1d6b2ae759cd69293e5233f2a91fb->leave($__internal_d66a99af88db796a3f115ddd3a241ddfcbe1d6b2ae759cd69293e5233f2a91fb_prof);

        
        $__internal_1250267d397cbd4b9c17a4cd022d0a9782d4fdb3bfa48bcd262c8c3bdb40c71e->leave($__internal_1250267d397cbd4b9c17a4cd022d0a9782d4fdb3bfa48bcd262c8c3bdb40c71e_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 58,  203 => 54,  196 => 50,  192 => 48,  187 => 45,  176 => 43,  172 => 42,  167 => 39,  165 => 38,  162 => 37,  158 => 35,  144 => 34,  138 => 33,  121 => 32,  117 => 30,  115 => 29,  109 => 26,  101 => 23,  97 => 22,  93 => 20,  86 => 16,  82 => 15,  79 => 14,  76 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <div style=\"float: left; margin-right: 1em;\">
    {# On vérifie qu'une image soit bien associée à l'article #}
    {% if advert.image is not null %}
      <img
        src=\"{{ asset(advert.image.webPath) }}\"
        alt=\"{{ advert.image.alt }}\"
        height=\"60\"
      />
    {% endif %}
  </div>

  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

  <div class=\"well\">
    {{ advert.content }}
  </div>

  {% if not advert.categories.empty %}
    <p>
      Cette annonce est parue dans les catégories suivantes :
      {% for category in advert.categories %}
        {{ category.name }}{% if not loop.last %}, {% endif %}
      {% endfor %}
    </p>
  {% endif %}

  {% if listAdvertSkills|length > 0 %}
    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        {% for advertSkill in listAdvertSkills %}
          <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
        {% endfor %}
      </ul>
    </div>
  {% endif %}

  <p>
    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:view.html.twig", "/var/www/Synfony/src/OC/PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
