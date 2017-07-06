<?php

/* SonataAdminBundle:CRUD:list.html.twig */
class __TwigTemplate_9c9b778b68cb7465f969e06341eefc1c301bb56a821aa238ee9929fedaeea334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig", "SonataAdminBundle:CRUD:list.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbff93c2dcbcc65f9f016530cecfc0a7129dd712a1fb65fbb40b2a12b8ce49de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbff93c2dcbcc65f9f016530cecfc0a7129dd712a1fb65fbb40b2a12b8ce49de->enter($__internal_dbff93c2dcbcc65f9f016530cecfc0a7129dd712a1fb65fbb40b2a12b8ce49de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbff93c2dcbcc65f9f016530cecfc0a7129dd712a1fb65fbb40b2a12b8ce49de->leave($__internal_dbff93c2dcbcc65f9f016530cecfc0a7129dd712a1fb65fbb40b2a12b8ce49de_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:base_list.html.twig' %}
", "SonataAdminBundle:CRUD:list.html.twig", "/var/www/tausendkind/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list.html.twig");
    }
}
