<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_c7434bcd67756973135b824d075e6b38a5bfe10973c474e1ba99c18bc764b649 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_96f1310a0f02fa99b7e2ce67edbd850d8620f1a248353fef9f5086e8a02481c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96f1310a0f02fa99b7e2ce67edbd850d8620f1a248353fef9f5086e8a02481c7->enter($__internal_96f1310a0f02fa99b7e2ce67edbd850d8620f1a248353fef9f5086e8a02481c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_4adc76d2af6d66dd14d3c85e87f48139896f45378540507bc2d3acfa9c91e8e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4adc76d2af6d66dd14d3c85e87f48139896f45378540507bc2d3acfa9c91e8e8->enter($__internal_4adc76d2af6d66dd14d3c85e87f48139896f45378540507bc2d3acfa9c91e8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
  </body>
</html>
";
        
        $__internal_96f1310a0f02fa99b7e2ce67edbd850d8620f1a248353fef9f5086e8a02481c7->leave($__internal_96f1310a0f02fa99b7e2ce67edbd850d8620f1a248353fef9f5086e8a02481c7_prof);

        
        $__internal_4adc76d2af6d66dd14d3c85e87f48139896f45378540507bc2d3acfa9c91e8e8->leave($__internal_4adc76d2af6d66dd14d3c85e87f48139896f45378540507bc2d3acfa9c91e8e8_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_40564fd3327c9961f54ebacdfc66885a1ca67527417e794a69fd346c58e32946 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40564fd3327c9961f54ebacdfc66885a1ca67527417e794a69fd346c58e32946->enter($__internal_40564fd3327c9961f54ebacdfc66885a1ca67527417e794a69fd346c58e32946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_54a7140b27d5f26ea2b62397e4d87223bedc0da4377f6705049fdc0cd04f519c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a7140b27d5f26ea2b62397e4d87223bedc0da4377f6705049fdc0cd04f519c->enter($__internal_54a7140b27d5f26ea2b62397e4d87223bedc0da4377f6705049fdc0cd04f519c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_54a7140b27d5f26ea2b62397e4d87223bedc0da4377f6705049fdc0cd04f519c->leave($__internal_54a7140b27d5f26ea2b62397e4d87223bedc0da4377f6705049fdc0cd04f519c_prof);

        
        $__internal_40564fd3327c9961f54ebacdfc66885a1ca67527417e794a69fd346c58e32946->leave($__internal_40564fd3327c9961f54ebacdfc66885a1ca67527417e794a69fd346c58e32946_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_706e4f8b2670569b01cba112d058afc645eea802cd1772a89c8eef84a14ac552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_706e4f8b2670569b01cba112d058afc645eea802cd1772a89c8eef84a14ac552->enter($__internal_706e4f8b2670569b01cba112d058afc645eea802cd1772a89c8eef84a14ac552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_c55ddd7af8f476232da4e37b816c1b9874f0d8a1337c3f3aef5855514f7dc1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c55ddd7af8f476232da4e37b816c1b9874f0d8a1337c3f3aef5855514f7dc1a4->enter($__internal_c55ddd7af8f476232da4e37b816c1b9874f0d8a1337c3f3aef5855514f7dc1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_c55ddd7af8f476232da4e37b816c1b9874f0d8a1337c3f3aef5855514f7dc1a4->leave($__internal_c55ddd7af8f476232da4e37b816c1b9874f0d8a1337c3f3aef5855514f7dc1a4_prof);

        
        $__internal_706e4f8b2670569b01cba112d058afc645eea802cd1772a89c8eef84a14ac552->leave($__internal_706e4f8b2670569b01cba112d058afc645eea802cd1772a89c8eef84a14ac552_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0e32cf06da8cae5625ff32e81fb9944339aa75494b5832bcc63b6d7e23caf54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e32cf06da8cae5625ff32e81fb9944339aa75494b5832bcc63b6d7e23caf54->enter($__internal_d0e32cf06da8cae5625ff32e81fb9944339aa75494b5832bcc63b6d7e23caf54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_00343102e42ea6a5347e0e2996ec0726e0ea59f5651ccaaf2ea35ebe4925ab3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00343102e42ea6a5347e0e2996ec0726e0ea59f5651ccaaf2ea35ebe4925ab3a->enter($__internal_00343102e42ea6a5347e0e2996ec0726e0ea59f5651ccaaf2ea35ebe4925ab3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_00343102e42ea6a5347e0e2996ec0726e0ea59f5651ccaaf2ea35ebe4925ab3a->leave($__internal_00343102e42ea6a5347e0e2996ec0726e0ea59f5651ccaaf2ea35ebe4925ab3a_prof);

        
        $__internal_d0e32cf06da8cae5625ff32e81fb9944339aa75494b5832bcc63b6d7e23caf54->leave($__internal_d0e32cf06da8cae5625ff32e81fb9944339aa75494b5832bcc63b6d7e23caf54_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a415b9f2e36fbc78fba8cb0f5bbc855ae409b26f89417a268d5a2fbff9dcbd4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a415b9f2e36fbc78fba8cb0f5bbc855ae409b26f89417a268d5a2fbff9dcbd4c->enter($__internal_a415b9f2e36fbc78fba8cb0f5bbc855ae409b26f89417a268d5a2fbff9dcbd4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_bf8e44c8df67584d19a580f7017e65f34981eb914c2fcf6eccfabe578dfed802 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8e44c8df67584d19a580f7017e65f34981eb914c2fcf6eccfabe578dfed802->enter($__internal_bf8e44c8df67584d19a580f7017e65f34981eb914c2fcf6eccfabe578dfed802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_bf8e44c8df67584d19a580f7017e65f34981eb914c2fcf6eccfabe578dfed802->leave($__internal_bf8e44c8df67584d19a580f7017e65f34981eb914c2fcf6eccfabe578dfed802_prof);

        
        $__internal_a415b9f2e36fbc78fba8cb0f5bbc855ae409b26f89417a268d5a2fbff9dcbd4c->leave($__internal_a415b9f2e36fbc78fba8cb0f5bbc855ae409b26f89417a268d5a2fbff9dcbd4c_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 57,  184 => 56,  175 => 55,  165 => 44,  156 => 43,  145 => 13,  143 => 12,  134 => 11,  116 => 9,  103 => 60,  101 => 55,  94 => 51,  86 => 45,  84 => 43,  78 => 40,  71 => 36,  67 => 35,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/CoreBundle/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}OC Plateforme{% endblock %}</title>

    {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('oc_platform_home') }}\">Accueil</a></li>
          <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

  </body>
</html>
", "OCCoreBundle::layout.html.twig", "/var/www/Synfony/src/OC/CoreBundle/Resources/views/layout.html.twig");
    }
}
