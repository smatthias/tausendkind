<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d09001130e5f64be4c64bac83fc7b4a57d2a474821bd83e41585083a01de0013 extends Twig_Template
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
        $__internal_f18a10830c5645e99d0c2f4818d4b52c65a8da34d6aa5176941a05fa3bf2ed5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18a10830c5645e99d0c2f4818d4b52c65a8da34d6aa5176941a05fa3bf2ed5b->enter($__internal_f18a10830c5645e99d0c2f4818d4b52c65a8da34d6aa5176941a05fa3bf2ed5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f18a10830c5645e99d0c2f4818d4b52c65a8da34d6aa5176941a05fa3bf2ed5b->leave($__internal_f18a10830c5645e99d0c2f4818d4b52c65a8da34d6aa5176941a05fa3bf2ed5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_25614a327c895d44ad5b5f7df9e001b74b62e7b05802e87d88ea5f50bee9793b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25614a327c895d44ad5b5f7df9e001b74b62e7b05802e87d88ea5f50bee9793b->enter($__internal_25614a327c895d44ad5b5f7df9e001b74b62e7b05802e87d88ea5f50bee9793b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_25614a327c895d44ad5b5f7df9e001b74b62e7b05802e87d88ea5f50bee9793b->leave($__internal_25614a327c895d44ad5b5f7df9e001b74b62e7b05802e87d88ea5f50bee9793b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e80ebb5d5f7be6f15361588d7b8124fe027c15bc96c4db88313006d593d01c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e80ebb5d5f7be6f15361588d7b8124fe027c15bc96c4db88313006d593d01c2->enter($__internal_3e80ebb5d5f7be6f15361588d7b8124fe027c15bc96c4db88313006d593d01c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3e80ebb5d5f7be6f15361588d7b8124fe027c15bc96c4db88313006d593d01c2->leave($__internal_3e80ebb5d5f7be6f15361588d7b8124fe027c15bc96c4db88313006d593d01c2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c33ac951be4a7e6e78f345162bff34d6efba1e15ad6f183b089ad9dc905cfc5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c33ac951be4a7e6e78f345162bff34d6efba1e15ad6f183b089ad9dc905cfc5b->enter($__internal_c33ac951be4a7e6e78f345162bff34d6efba1e15ad6f183b089ad9dc905cfc5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c33ac951be4a7e6e78f345162bff34d6efba1e15ad6f183b089ad9dc905cfc5b->leave($__internal_c33ac951be4a7e6e78f345162bff34d6efba1e15ad6f183b089ad9dc905cfc5b_prof);

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
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "/var/www/tausendkind/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
