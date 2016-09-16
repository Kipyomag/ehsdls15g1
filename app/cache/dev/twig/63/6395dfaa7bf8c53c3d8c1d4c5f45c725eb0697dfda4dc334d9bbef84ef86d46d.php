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
        $__internal_96fcaa880697fac5f0aaf19a44572870b0d8c0b0831523be74a73aa707b7b6ac = $this->env->getExtension("native_profiler");
        $__internal_96fcaa880697fac5f0aaf19a44572870b0d8c0b0831523be74a73aa707b7b6ac->enter($__internal_96fcaa880697fac5f0aaf19a44572870b0d8c0b0831523be74a73aa707b7b6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96fcaa880697fac5f0aaf19a44572870b0d8c0b0831523be74a73aa707b7b6ac->leave($__internal_96fcaa880697fac5f0aaf19a44572870b0d8c0b0831523be74a73aa707b7b6ac_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c465e2261477d641fa8f68f36a5b8f9a7807c72ffd07ffb3536642fb82fb5f7f = $this->env->getExtension("native_profiler");
        $__internal_c465e2261477d641fa8f68f36a5b8f9a7807c72ffd07ffb3536642fb82fb5f7f->enter($__internal_c465e2261477d641fa8f68f36a5b8f9a7807c72ffd07ffb3536642fb82fb5f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c465e2261477d641fa8f68f36a5b8f9a7807c72ffd07ffb3536642fb82fb5f7f->leave($__internal_c465e2261477d641fa8f68f36a5b8f9a7807c72ffd07ffb3536642fb82fb5f7f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1770939acba012a57100b41dbf0d94ddc3e178e717936ae79de66c99bf8b478 = $this->env->getExtension("native_profiler");
        $__internal_e1770939acba012a57100b41dbf0d94ddc3e178e717936ae79de66c99bf8b478->enter($__internal_e1770939acba012a57100b41dbf0d94ddc3e178e717936ae79de66c99bf8b478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e1770939acba012a57100b41dbf0d94ddc3e178e717936ae79de66c99bf8b478->leave($__internal_e1770939acba012a57100b41dbf0d94ddc3e178e717936ae79de66c99bf8b478_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ea7e673f7ff8a514e6fc0e0335ba9767a235939208607ba16b243850cfc7f07 = $this->env->getExtension("native_profiler");
        $__internal_9ea7e673f7ff8a514e6fc0e0335ba9767a235939208607ba16b243850cfc7f07->enter($__internal_9ea7e673f7ff8a514e6fc0e0335ba9767a235939208607ba16b243850cfc7f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9ea7e673f7ff8a514e6fc0e0335ba9767a235939208607ba16b243850cfc7f07->leave($__internal_9ea7e673f7ff8a514e6fc0e0335ba9767a235939208607ba16b243850cfc7f07_prof);

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
