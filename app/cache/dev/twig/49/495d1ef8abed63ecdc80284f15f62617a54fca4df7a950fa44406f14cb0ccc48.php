<?php

/* base.html.twig */
class __TwigTemplate_ee67c68b1850b717391b67516bf6ba20db922689601d110f9504ef98c2a3589f extends Twig_Template
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
        $__internal_75f90d53b57dc3bb44b9a02878f139f7e132d8b12d244e26e82c58d42663b88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75f90d53b57dc3bb44b9a02878f139f7e132d8b12d244e26e82c58d42663b88f->enter($__internal_75f90d53b57dc3bb44b9a02878f139f7e132d8b12d244e26e82c58d42663b88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_75f90d53b57dc3bb44b9a02878f139f7e132d8b12d244e26e82c58d42663b88f->leave($__internal_75f90d53b57dc3bb44b9a02878f139f7e132d8b12d244e26e82c58d42663b88f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b3526f8c0581ce172675f67320a7adc0a70b2ca14ae9be22a9d777ee73fb0269 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3526f8c0581ce172675f67320a7adc0a70b2ca14ae9be22a9d777ee73fb0269->enter($__internal_b3526f8c0581ce172675f67320a7adc0a70b2ca14ae9be22a9d777ee73fb0269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b3526f8c0581ce172675f67320a7adc0a70b2ca14ae9be22a9d777ee73fb0269->leave($__internal_b3526f8c0581ce172675f67320a7adc0a70b2ca14ae9be22a9d777ee73fb0269_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aa740b81588fa6836a7df1d2c034c355745344bd5266845a4fc630348def224b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa740b81588fa6836a7df1d2c034c355745344bd5266845a4fc630348def224b->enter($__internal_aa740b81588fa6836a7df1d2c034c355745344bd5266845a4fc630348def224b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_aa740b81588fa6836a7df1d2c034c355745344bd5266845a4fc630348def224b->leave($__internal_aa740b81588fa6836a7df1d2c034c355745344bd5266845a4fc630348def224b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_96e76572a608779490cb7da869faac38cd13447582ce5e8081d798a6d1d8b673 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96e76572a608779490cb7da869faac38cd13447582ce5e8081d798a6d1d8b673->enter($__internal_96e76572a608779490cb7da869faac38cd13447582ce5e8081d798a6d1d8b673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_96e76572a608779490cb7da869faac38cd13447582ce5e8081d798a6d1d8b673->leave($__internal_96e76572a608779490cb7da869faac38cd13447582ce5e8081d798a6d1d8b673_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_70a5f92acf5f4475098fdf37681b20d1248500e3c019ac52f9d07208c37b67c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a5f92acf5f4475098fdf37681b20d1248500e3c019ac52f9d07208c37b67c8->enter($__internal_70a5f92acf5f4475098fdf37681b20d1248500e3c019ac52f9d07208c37b67c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_70a5f92acf5f4475098fdf37681b20d1248500e3c019ac52f9d07208c37b67c8->leave($__internal_70a5f92acf5f4475098fdf37681b20d1248500e3c019ac52f9d07208c37b67c8_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/var/www/tausendkind/app/Resources/views/base.html.twig");
    }
}
