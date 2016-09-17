<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8f03ebcb7b028c2c9ca48fd30427860332c7e20609853183706dd494f2c691ad extends Twig_Template
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
        $__internal_d730892ed7ad81e21b32a7a772e2bf2d5b454e8d5d6466b669e6ea71b55bf530 = $this->env->getExtension("native_profiler");
        $__internal_d730892ed7ad81e21b32a7a772e2bf2d5b454e8d5d6466b669e6ea71b55bf530->enter($__internal_d730892ed7ad81e21b32a7a772e2bf2d5b454e8d5d6466b669e6ea71b55bf530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d730892ed7ad81e21b32a7a772e2bf2d5b454e8d5d6466b669e6ea71b55bf530->leave($__internal_d730892ed7ad81e21b32a7a772e2bf2d5b454e8d5d6466b669e6ea71b55bf530_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a8ee118e74252e79238a177662d7479364742dafadccfa9eeb376001641306df = $this->env->getExtension("native_profiler");
        $__internal_a8ee118e74252e79238a177662d7479364742dafadccfa9eeb376001641306df->enter($__internal_a8ee118e74252e79238a177662d7479364742dafadccfa9eeb376001641306df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a8ee118e74252e79238a177662d7479364742dafadccfa9eeb376001641306df->leave($__internal_a8ee118e74252e79238a177662d7479364742dafadccfa9eeb376001641306df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2e5527f2899e9ce43205ebd348245cc2c91124bb07826c6932fc3704f438f50 = $this->env->getExtension("native_profiler");
        $__internal_d2e5527f2899e9ce43205ebd348245cc2c91124bb07826c6932fc3704f438f50->enter($__internal_d2e5527f2899e9ce43205ebd348245cc2c91124bb07826c6932fc3704f438f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d2e5527f2899e9ce43205ebd348245cc2c91124bb07826c6932fc3704f438f50->leave($__internal_d2e5527f2899e9ce43205ebd348245cc2c91124bb07826c6932fc3704f438f50_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_98720809bedd3433b4714fd79d6dcb48a489843b95ea74a6c824cdbc83952e6f = $this->env->getExtension("native_profiler");
        $__internal_98720809bedd3433b4714fd79d6dcb48a489843b95ea74a6c824cdbc83952e6f->enter($__internal_98720809bedd3433b4714fd79d6dcb48a489843b95ea74a6c824cdbc83952e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_98720809bedd3433b4714fd79d6dcb48a489843b95ea74a6c824cdbc83952e6f->leave($__internal_98720809bedd3433b4714fd79d6dcb48a489843b95ea74a6c824cdbc83952e6f_prof);

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
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
