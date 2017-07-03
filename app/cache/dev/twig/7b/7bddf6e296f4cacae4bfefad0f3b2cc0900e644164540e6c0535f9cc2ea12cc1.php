<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_114c9d6cefba81ff108d7ea09c8f69f2fff8ca7a915594a45d76506cc2b91ae3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd86ef306aa52232de49a6a781274a9c92a1ebf33fcd74a742901b191f9c0f94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd86ef306aa52232de49a6a781274a9c92a1ebf33fcd74a742901b191f9c0f94->enter($__internal_fd86ef306aa52232de49a6a781274a9c92a1ebf33fcd74a742901b191f9c0f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd86ef306aa52232de49a6a781274a9c92a1ebf33fcd74a742901b191f9c0f94->leave($__internal_fd86ef306aa52232de49a6a781274a9c92a1ebf33fcd74a742901b191f9c0f94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_750f4e72eef2a74f887e92891352d21422767270e6fc6dcc41e8550059c568c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_750f4e72eef2a74f887e92891352d21422767270e6fc6dcc41e8550059c568c5->enter($__internal_750f4e72eef2a74f887e92891352d21422767270e6fc6dcc41e8550059c568c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_750f4e72eef2a74f887e92891352d21422767270e6fc6dcc41e8550059c568c5->leave($__internal_750f4e72eef2a74f887e92891352d21422767270e6fc6dcc41e8550059c568c5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3d7243f4b96b3cbbca59c111857414745672b3ef5db68fb9e307fb240ddd2fad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d7243f4b96b3cbbca59c111857414745672b3ef5db68fb9e307fb240ddd2fad->enter($__internal_3d7243f4b96b3cbbca59c111857414745672b3ef5db68fb9e307fb240ddd2fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3d7243f4b96b3cbbca59c111857414745672b3ef5db68fb9e307fb240ddd2fad->leave($__internal_3d7243f4b96b3cbbca59c111857414745672b3ef5db68fb9e307fb240ddd2fad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1099ed801e509dfd430c85fa08ba2953908de5b87da2ebcd4fbf315291428aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1099ed801e509dfd430c85fa08ba2953908de5b87da2ebcd4fbf315291428aa6->enter($__internal_1099ed801e509dfd430c85fa08ba2953908de5b87da2ebcd4fbf315291428aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_1099ed801e509dfd430c85fa08ba2953908de5b87da2ebcd4fbf315291428aa6->leave($__internal_1099ed801e509dfd430c85fa08ba2953908de5b87da2ebcd4fbf315291428aa6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/tausendkind/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
