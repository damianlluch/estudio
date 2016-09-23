<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f8d1b8895dc59269289b6f244c78061a452479af61ceeee2e8fa22b710d33254 extends Twig_Template
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
        $__internal_426da6fb6b69f673880cfaf803176a92ae90af8e3f9342b404518b9d29d99f5b = $this->env->getExtension("native_profiler");
        $__internal_426da6fb6b69f673880cfaf803176a92ae90af8e3f9342b404518b9d29d99f5b->enter($__internal_426da6fb6b69f673880cfaf803176a92ae90af8e3f9342b404518b9d29d99f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_426da6fb6b69f673880cfaf803176a92ae90af8e3f9342b404518b9d29d99f5b->leave($__internal_426da6fb6b69f673880cfaf803176a92ae90af8e3f9342b404518b9d29d99f5b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9578209c321ac9809e2c06e64374e6fc43bdea9e0920e971a8653b04efb12f9c = $this->env->getExtension("native_profiler");
        $__internal_9578209c321ac9809e2c06e64374e6fc43bdea9e0920e971a8653b04efb12f9c->enter($__internal_9578209c321ac9809e2c06e64374e6fc43bdea9e0920e971a8653b04efb12f9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9578209c321ac9809e2c06e64374e6fc43bdea9e0920e971a8653b04efb12f9c->leave($__internal_9578209c321ac9809e2c06e64374e6fc43bdea9e0920e971a8653b04efb12f9c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8c91973a5ee774ad6edc41c67e1c8e762fef0b1da0b4481c5e61f22219455f6f = $this->env->getExtension("native_profiler");
        $__internal_8c91973a5ee774ad6edc41c67e1c8e762fef0b1da0b4481c5e61f22219455f6f->enter($__internal_8c91973a5ee774ad6edc41c67e1c8e762fef0b1da0b4481c5e61f22219455f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8c91973a5ee774ad6edc41c67e1c8e762fef0b1da0b4481c5e61f22219455f6f->leave($__internal_8c91973a5ee774ad6edc41c67e1c8e762fef0b1da0b4481c5e61f22219455f6f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8cfa76d822a219a31fc3576ae306eb911e000fc15e22daf1870b35367dfd3ad1 = $this->env->getExtension("native_profiler");
        $__internal_8cfa76d822a219a31fc3576ae306eb911e000fc15e22daf1870b35367dfd3ad1->enter($__internal_8cfa76d822a219a31fc3576ae306eb911e000fc15e22daf1870b35367dfd3ad1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8cfa76d822a219a31fc3576ae306eb911e000fc15e22daf1870b35367dfd3ad1->leave($__internal_8cfa76d822a219a31fc3576ae306eb911e000fc15e22daf1870b35367dfd3ad1_prof);

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

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

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
";
    }
}
