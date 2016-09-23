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
        $__internal_a0213cbea1e406bc59eb6a08e55b65c8a83d420a2b182a1a6ef4ad5813da307e = $this->env->getExtension("native_profiler");
        $__internal_a0213cbea1e406bc59eb6a08e55b65c8a83d420a2b182a1a6ef4ad5813da307e->enter($__internal_a0213cbea1e406bc59eb6a08e55b65c8a83d420a2b182a1a6ef4ad5813da307e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0213cbea1e406bc59eb6a08e55b65c8a83d420a2b182a1a6ef4ad5813da307e->leave($__internal_a0213cbea1e406bc59eb6a08e55b65c8a83d420a2b182a1a6ef4ad5813da307e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ee3bb27645165d8df7331c13983c8edb49e2b9d01a344c8eb1401228941eac2e = $this->env->getExtension("native_profiler");
        $__internal_ee3bb27645165d8df7331c13983c8edb49e2b9d01a344c8eb1401228941eac2e->enter($__internal_ee3bb27645165d8df7331c13983c8edb49e2b9d01a344c8eb1401228941eac2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_ee3bb27645165d8df7331c13983c8edb49e2b9d01a344c8eb1401228941eac2e->leave($__internal_ee3bb27645165d8df7331c13983c8edb49e2b9d01a344c8eb1401228941eac2e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_f522b3ab5f7a07b5756a5586c2edd0dda818f832fedad741a7596bae5c74ddfd = $this->env->getExtension("native_profiler");
        $__internal_f522b3ab5f7a07b5756a5586c2edd0dda818f832fedad741a7596bae5c74ddfd->enter($__internal_f522b3ab5f7a07b5756a5586c2edd0dda818f832fedad741a7596bae5c74ddfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_f522b3ab5f7a07b5756a5586c2edd0dda818f832fedad741a7596bae5c74ddfd->leave($__internal_f522b3ab5f7a07b5756a5586c2edd0dda818f832fedad741a7596bae5c74ddfd_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc1f88fe727769893c462526ea68001476658f413fe64708fef83e3b1e754906 = $this->env->getExtension("native_profiler");
        $__internal_dc1f88fe727769893c462526ea68001476658f413fe64708fef83e3b1e754906->enter($__internal_dc1f88fe727769893c462526ea68001476658f413fe64708fef83e3b1e754906_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dc1f88fe727769893c462526ea68001476658f413fe64708fef83e3b1e754906->leave($__internal_dc1f88fe727769893c462526ea68001476658f413fe64708fef83e3b1e754906_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_4cfbcbd24ddabe0076bbdf25dbb423e61ec15af0776458c71e4a8112d31f153b = $this->env->getExtension("native_profiler");
        $__internal_4cfbcbd24ddabe0076bbdf25dbb423e61ec15af0776458c71e4a8112d31f153b->enter($__internal_4cfbcbd24ddabe0076bbdf25dbb423e61ec15af0776458c71e4a8112d31f153b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_4cfbcbd24ddabe0076bbdf25dbb423e61ec15af0776458c71e4a8112d31f153b->leave($__internal_4cfbcbd24ddabe0076bbdf25dbb423e61ec15af0776458c71e4a8112d31f153b_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_f4bfbb0474eb961fbd7096d765426636e1bb77c0611315f8e6a7be943ddb92d7 = $this->env->getExtension("native_profiler");
        $__internal_f4bfbb0474eb961fbd7096d765426636e1bb77c0611315f8e6a7be943ddb92d7->enter($__internal_f4bfbb0474eb961fbd7096d765426636e1bb77c0611315f8e6a7be943ddb92d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_f4bfbb0474eb961fbd7096d765426636e1bb77c0611315f8e6a7be943ddb92d7->leave($__internal_f4bfbb0474eb961fbd7096d765426636e1bb77c0611315f8e6a7be943ddb92d7_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_7193b700103fd1194673bc075a366ebf38aaf9e58a83ef2532e2c65e63f8c12d = $this->env->getExtension("native_profiler");
        $__internal_7193b700103fd1194673bc075a366ebf38aaf9e58a83ef2532e2c65e63f8c12d->enter($__internal_7193b700103fd1194673bc075a366ebf38aaf9e58a83ef2532e2c65e63f8c12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_7193b700103fd1194673bc075a366ebf38aaf9e58a83ef2532e2c65e63f8c12d->leave($__internal_7193b700103fd1194673bc075a366ebf38aaf9e58a83ef2532e2c65e63f8c12d_prof);

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
