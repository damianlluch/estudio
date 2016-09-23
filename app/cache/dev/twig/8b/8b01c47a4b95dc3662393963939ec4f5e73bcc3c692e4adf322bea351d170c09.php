<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_8b22466006b66f51b5ad978f905f3546ba8655a8a796d05f1387e52826fcd91e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AcmeDemoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07427f55a376e4047ea11d6019a79e42765f44027c3be3411eb4d6db39f83e96 = $this->env->getExtension("native_profiler");
        $__internal_07427f55a376e4047ea11d6019a79e42765f44027c3be3411eb4d6db39f83e96->enter($__internal_07427f55a376e4047ea11d6019a79e42765f44027c3be3411eb4d6db39f83e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07427f55a376e4047ea11d6019a79e42765f44027c3be3411eb4d6db39f83e96->leave($__internal_07427f55a376e4047ea11d6019a79e42765f44027c3be3411eb4d6db39f83e96_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8fa428d67355e7e2c421f11b92576177b4a4997fc318af44b65badd98c91b409 = $this->env->getExtension("native_profiler");
        $__internal_8fa428d67355e7e2c421f11b92576177b4a4997fc318af44b65badd98c91b409->enter($__internal_8fa428d67355e7e2c421f11b92576177b4a4997fc318af44b65badd98c91b409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8fa428d67355e7e2c421f11b92576177b4a4997fc318af44b65badd98c91b409->leave($__internal_8fa428d67355e7e2c421f11b92576177b4a4997fc318af44b65badd98c91b409_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec50adb4b36b6c5cc1ef5fd3b37fd40aff187ce7c20d7ba500ffddc75eae59bc = $this->env->getExtension("native_profiler");
        $__internal_ec50adb4b36b6c5cc1ef5fd3b37fd40aff187ce7c20d7ba500ffddc75eae59bc->enter($__internal_ec50adb4b36b6c5cc1ef5fd3b37fd40aff187ce7c20d7ba500ffddc75eae59bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_ec50adb4b36b6c5cc1ef5fd3b37fd40aff187ce7c20d7ba500ffddc75eae59bc->leave($__internal_ec50adb4b36b6c5cc1ef5fd3b37fd40aff187ce7c20d7ba500ffddc75eae59bc_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb0ced81483094c31a2e6990ef43e083bf1999da24cd915558c3802916ad597a = $this->env->getExtension("native_profiler");
        $__internal_fb0ced81483094c31a2e6990ef43e083bf1999da24cd915558c3802916ad597a->enter($__internal_fb0ced81483094c31a2e6990ef43e083bf1999da24cd915558c3802916ad597a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_fb0ced81483094c31a2e6990ef43e083bf1999da24cd915558c3802916ad597a->leave($__internal_fb0ced81483094c31a2e6990ef43e083bf1999da24cd915558c3802916ad597a_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_dd13d53bb5e126d91b257d722aaf3a0c54811ff0ff42a899e30873b1f3fdb334 = $this->env->getExtension("native_profiler");
        $__internal_dd13d53bb5e126d91b257d722aaf3a0c54811ff0ff42a899e30873b1f3fdb334->enter($__internal_dd13d53bb5e126d91b257d722aaf3a0c54811ff0ff42a899e30873b1f3fdb334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_dd13d53bb5e126d91b257d722aaf3a0c54811ff0ff42a899e30873b1f3fdb334->leave($__internal_dd13d53bb5e126d91b257d722aaf3a0c54811ff0ff42a899e30873b1f3fdb334_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_fed28af7a7a57a60bf9fd72880c4a9f39fda79fbfdae28e05123655d2465c8cc = $this->env->getExtension("native_profiler");
        $__internal_fed28af7a7a57a60bf9fd72880c4a9f39fda79fbfdae28e05123655d2465c8cc->enter($__internal_fed28af7a7a57a60bf9fd72880c4a9f39fda79fbfdae28e05123655d2465c8cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_fed28af7a7a57a60bf9fd72880c4a9f39fda79fbfdae28e05123655d2465c8cc->leave($__internal_fed28af7a7a57a60bf9fd72880c4a9f39fda79fbfdae28e05123655d2465c8cc_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_78525cc8d19f3ceca60d2e53830823df8da1a1bffbf341a262ff873327244ca5 = $this->env->getExtension("native_profiler");
        $__internal_78525cc8d19f3ceca60d2e53830823df8da1a1bffbf341a262ff873327244ca5->enter($__internal_78525cc8d19f3ceca60d2e53830823df8da1a1bffbf341a262ff873327244ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_78525cc8d19f3ceca60d2e53830823df8da1a1bffbf341a262ff873327244ca5->leave($__internal_78525cc8d19f3ceca60d2e53830823df8da1a1bffbf341a262ff873327244ca5_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 28,  153 => 20,  147 => 19,  137 => 22,  135 => 19,  132 => 18,  126 => 17,  115 => 34,  111 => 32,  109 => 31,  105 => 29,  103 => 28,  99 => 26,  97 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"icon\" sizes=\"16x16\" href=\"{{ asset('favicon.ico') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/acmedemo/css/demo.css') }}\" />
{% endblock %}

{% block title 'Demo Bundle' %}

{% block body %}
    {% for flashMessage in app.session.flashbag.get('notice') %}
        <div class=\"flash-message\">
            <em>Notice</em>: {{ flashMessage }}
        </div>
    {% endfor %}

    {% block content_header %}
        <ul id=\"menu\">
            {% block content_header_more %}
                <li><a href=\"{{ path('_demo') }}\">Demo Home</a></li>
            {% endblock %}
        </ul>

        <div style=\"clear: both\"></div>
    {% endblock %}

    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>

    {% if code is defined %}
        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">{{ code|raw }}</div>
        </div>
    {% endif %}
{% endblock %}
";
    }
}
