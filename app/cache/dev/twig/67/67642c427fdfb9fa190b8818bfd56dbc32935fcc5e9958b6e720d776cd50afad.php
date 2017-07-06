<?php

/* SonataUserBundle:Admin:Security/login.html.twig */
class __TwigTemplate_1796a0df2c10d01e169295da92ad068daa1617b0789257ee0a6f97ad035ed877 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'logo' => array($this, 'block_logo'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataUserBundle:Admin:Security/login.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6443748c8322cbbe554c69803243d1e1d7f1253f95198a71d7367c52f0374a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6443748c8322cbbe554c69803243d1e1d7f1253f95198a71d7367c52f0374a87->enter($__internal_6443748c8322cbbe554c69803243d1e1d7f1253f95198a71d7367c52f0374a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataUserBundle:Admin:Security/login.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6443748c8322cbbe554c69803243d1e1d7f1253f95198a71d7367c52f0374a87->leave($__internal_6443748c8322cbbe554c69803243d1e1d7f1253f95198a71d7367c52f0374a87_prof);

    }

    // line 14
    public function block_sonata_nav($context, array $blocks = array())
    {
        $__internal_6c2366a899c65282fa22f377796e0ad794b6f8778865053562b71249615b3270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c2366a899c65282fa22f377796e0ad794b6f8778865053562b71249615b3270->enter($__internal_6c2366a899c65282fa22f377796e0ad794b6f8778865053562b71249615b3270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_nav"));

        
        $__internal_6c2366a899c65282fa22f377796e0ad794b6f8778865053562b71249615b3270->leave($__internal_6c2366a899c65282fa22f377796e0ad794b6f8778865053562b71249615b3270_prof);

    }

    // line 17
    public function block_logo($context, array $blocks = array())
    {
        $__internal_4904efb0ea3f4d49b9abca973d79512143cccb95a2e1b744afb068f9be09b2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4904efb0ea3f4d49b9abca973d79512143cccb95a2e1b744afb068f9be09b2f0->enter($__internal_4904efb0ea3f4d49b9abca973d79512143cccb95a2e1b744afb068f9be09b2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "logo"));

        
        $__internal_4904efb0ea3f4d49b9abca973d79512143cccb95a2e1b744afb068f9be09b2f0->leave($__internal_4904efb0ea3f4d49b9abca973d79512143cccb95a2e1b744afb068f9be09b2f0_prof);

    }

    // line 20
    public function block_sonata_left_side($context, array $blocks = array())
    {
        $__internal_191884edbf83f8e559159c32507ddfc4c3adf3d7ead987348345211bba48699b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_191884edbf83f8e559159c32507ddfc4c3adf3d7ead987348345211bba48699b->enter($__internal_191884edbf83f8e559159c32507ddfc4c3adf3d7ead987348345211bba48699b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_left_side"));

        
        $__internal_191884edbf83f8e559159c32507ddfc4c3adf3d7ead987348345211bba48699b->leave($__internal_191884edbf83f8e559159c32507ddfc4c3adf3d7ead987348345211bba48699b_prof);

    }

    // line 23
    public function block_body_attributes($context, array $blocks = array())
    {
        $__internal_a451cce488a99cf13c0135d226db0c82fc2f7ec825098fdda8efcc0b5a4e0300 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a451cce488a99cf13c0135d226db0c82fc2f7ec825098fdda8efcc0b5a4e0300->enter($__internal_a451cce488a99cf13c0135d226db0c82fc2f7ec825098fdda8efcc0b5a4e0300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_attributes"));

        echo "class=\"sonata-bc login-page\"";
        
        $__internal_a451cce488a99cf13c0135d226db0c82fc2f7ec825098fdda8efcc0b5a4e0300->leave($__internal_a451cce488a99cf13c0135d226db0c82fc2f7ec825098fdda8efcc0b5a4e0300_prof);

    }

    // line 25
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        $__internal_d639203029966f9840b632a081a42ba5b9854270ecccef1404983a15dbcaa98d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d639203029966f9840b632a081a42ba5b9854270ecccef1404983a15dbcaa98d->enter($__internal_d639203029966f9840b632a081a42ba5b9854270ecccef1404983a15dbcaa98d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_wrapper"));

        // line 26
        echo "
    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_admin_dashboard");
        echo "\">
                ";
        // line 30
        if ((("single_image" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 31
            echo "                    <div>
                        <img style=\"width:64px;\" src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "titlelogo", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "\">
                    </div>
                ";
        }
        // line 35
        echo "                ";
        if ((("single_text" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getOption", array(0 => "title_mode"), "method")))) {
            // line 36
            echo "                    <span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "title", array()), "html", null, true);
            echo "</span>
                ";
        }
        // line 38
        echo "            </a>
        </div>
        <div class=\"login-box-body\">
            ";
        // line 41
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 81
        echo "        </div>
    </div>

";
        
        $__internal_d639203029966f9840b632a081a42ba5b9854270ecccef1404983a15dbcaa98d->leave($__internal_d639203029966f9840b632a081a42ba5b9854270ecccef1404983a15dbcaa98d_prof);

    }

    // line 41
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        $__internal_ac34ce64396da011b1a4573c52e6bd40c911268c4c1773820f2db248ef559a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac34ce64396da011b1a4573c52e6bd40c911268c4c1773820f2db248ef559a3e->enter($__internal_ac34ce64396da011b1a4573c52e6bd40c911268c4c1773820f2db248ef559a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_form"));

        // line 42
        echo "                ";
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 49
        echo "                <p class=\"login-box-msg\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</p>
                <form action=\"";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sonata_user_admin_security_check");
        echo "\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </form>

                ";
        // line 79
        echo "                <a href=\"";
        echo twig_escape_filter($this->env, ($context["reset_route"] ?? $this->getContext($context, "reset_route")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
            ";
        
        $__internal_ac34ce64396da011b1a4573c52e6bd40c911268c4c1773820f2db248ef559a3e->leave($__internal_ac34ce64396da011b1a4573c52e6bd40c911268c4c1773820f2db248ef559a3e_prof);

    }

    // line 42
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        $__internal_8f3497a963ed7088d50a0d5bad4cd766d58fc5ec69e72681ac6d5a7c1a5867bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3497a963ed7088d50a0d5bad4cd766d58fc5ec69e72681ac6d5a7c1a5867bf->enter($__internal_8f3497a963ed7088d50a0d5bad4cd766d58fc5ec69e72681ac6d5a7c1a5867bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_user_login_error"));

        // line 43
        echo "                    ";
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 44
            echo "                        <div class=\"alert alert-danger alert-error\">
                            ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        // line 48
        echo "                ";
        
        $__internal_8f3497a963ed7088d50a0d5bad4cd766d58fc5ec69e72681ac6d5a7c1a5867bf->leave($__internal_8f3497a963ed7088d50a0d5bad4cd766d58fc5ec69e72681ac6d5a7c1a5867bf_prof);

    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Admin:Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 48,  224 => 45,  221 => 44,  218 => 43,  212 => 42,  200 => 79,  192 => 73,  184 => 68,  172 => 59,  162 => 54,  156 => 51,  152 => 50,  147 => 49,  144 => 42,  138 => 41,  128 => 81,  126 => 41,  121 => 38,  115 => 36,  112 => 35,  104 => 32,  101 => 31,  99 => 30,  95 => 29,  90 => 26,  84 => 25,  72 => 23,  61 => 20,  50 => 17,  39 => 14,  24 => 12,);
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

{% extends base_template %}

{% block sonata_nav %}
{% endblock sonata_nav %}

{% block logo %}
{% endblock logo %}

{% block sonata_left_side %}
{% endblock sonata_left_side %}

{% block body_attributes %}class=\"sonata-bc login-page\"{% endblock %}

{% block sonata_wrapper %}

    <div class=\"login-box\">
        <div class=\"login-logo\">
            <a href=\"{{ path('sonata_admin_dashboard') }}\">
                {% if 'single_image' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                    <div>
                        <img style=\"width:64px;\" src=\"{{ asset(sonata_admin.adminPool.titlelogo) }}\" alt=\"{{ sonata_admin.adminPool.title }}\">
                    </div>
                {% endif %}
                {% if 'single_text' == sonata_admin.adminPool.getOption('title_mode') or 'both' == sonata_admin.adminPool.getOption('title_mode') %}
                    <span>{{ sonata_admin.adminPool.title }}</span>
                {% endif %}
            </a>
        </div>
        <div class=\"login-box-body\">
            {% block sonata_user_login_form %}
                {% block sonata_user_login_error %}
                    {% if error %}
                        <div class=\"alert alert-danger alert-error\">
                            {{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}
                {% endblock %}
                <p class=\"login-box-msg\">{{ 'title_user_authentication'|trans({}, 'SonataUserBundle') }}</p>
                <form action=\"{{ path(\"sonata_user_admin_security_check\") }}\" method=\"post\" role=\"form\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                    <div class=\"form-group has-feedback\">
                        <input type=\"text\" class=\"form-control\" id=\"username\"  name=\"_username\" value=\"{{ last_username }}\" required=\"required\" placeholder=\"{{ 'security.login.username'|trans({}, 'SonataUserBundle') }}\"/>
                        <span class=\"glyphicon glyphicon-user form-control-feedback\"></span>
                    </div>

                    <div class=\"form-group has-feedback\">
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"{{ 'security.login.password'|trans({}, 'SonataUserBundle') }}\"/>
                        <span class=\"glyphicon glyphicon-lock form-control-feedback\"></span>
                    </div>

                    <div class=\"row\">
                        <div class=\"col-xs-8\">
                            <div class=\"checkbox\">
                                <label>
                                    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                    {{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}
                                </label>
                            </div>
                        </div>
                        <div class=\"col-xs-4\">
                            <button type=\"submit\" class=\"btn btn-primary btn-block btn-flat\">{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}</button>
                        </div>
                    </div>
                </form>

                {#<a href=\"{{ path('sonata_user_admin_resetting_request') }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>#}
                <a href=\"{{ reset_route }}\">{{ 'forgotten_password'|trans({}, 'SonataUserBundle') }}</a>
            {% endblock %}
        </div>
    </div>

{% endblock sonata_wrapper %}
", "SonataUserBundle:Admin:Security/login.html.twig", "/var/www/tausendkind/vendor/sonata-project/user-bundle/Resources/views/Admin/Security/login.html.twig");
    }
}
