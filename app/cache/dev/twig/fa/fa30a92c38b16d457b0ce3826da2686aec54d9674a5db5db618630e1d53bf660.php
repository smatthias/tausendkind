<?php

/* SonataBlockBundle:Block:block_base.html.twig */
class __TwigTemplate_113214366ff0095dd978d90558ad8f17fb9bfc692a05f4510f53bca088ba8daa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbf7f581b0888c990766a78ed6a995561d1b252eadccfeb4368aa25129c0cd9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbf7f581b0888c990766a78ed6a995561d1b252eadccfeb4368aa25129c0cd9d->enter($__internal_dbf7f581b0888c990766a78ed6a995561d1b252eadccfeb4368aa25129c0cd9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataBlockBundle:Block:block_base.html.twig"));

        // line 11
        echo "<div id=\"cms-block-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["block"] ?? $this->getContext($context, "block")), "id", array()), "html", null, true);
        echo "\" class=\"cms-block cms-block-element\">
    ";
        // line 12
        $this->displayBlock('block', $context, $blocks);
        // line 13
        echo "</div>
";
        
        $__internal_dbf7f581b0888c990766a78ed6a995561d1b252eadccfeb4368aa25129c0cd9d->leave($__internal_dbf7f581b0888c990766a78ed6a995561d1b252eadccfeb4368aa25129c0cd9d_prof);

    }

    // line 12
    public function block_block($context, array $blocks = array())
    {
        $__internal_d72e2f48b80d081d71701e8565b0136048f22ea12b0bec43991d95b19d7842b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d72e2f48b80d081d71701e8565b0136048f22ea12b0bec43991d95b19d7842b0->enter($__internal_d72e2f48b80d081d71701e8565b0136048f22ea12b0bec43991d95b19d7842b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "block"));

        echo "EMPTY CONTENT";
        
        $__internal_d72e2f48b80d081d71701e8565b0136048f22ea12b0bec43991d95b19d7842b0->leave($__internal_d72e2f48b80d081d71701e8565b0136048f22ea12b0bec43991d95b19d7842b0_prof);

    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  30 => 13,  28 => 12,  23 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
<div id=\"cms-block-{{ block.id }}\" class=\"cms-block cms-block-element\">
    {% block block %}EMPTY CONTENT{% endblock %}
</div>
", "SonataBlockBundle:Block:block_base.html.twig", "/var/www/tausendkind/vendor/sonata-project/block-bundle/Resources/views/Block/block_base.html.twig");
    }
}
