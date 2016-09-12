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
        $__internal_8ddfadaf0bd56406b746221205e95836928a05a9ccb7603e4b14ca37c9f2204b = $this->env->getExtension("native_profiler");
        $__internal_8ddfadaf0bd56406b746221205e95836928a05a9ccb7603e4b14ca37c9f2204b->enter($__internal_8ddfadaf0bd56406b746221205e95836928a05a9ccb7603e4b14ca37c9f2204b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ddfadaf0bd56406b746221205e95836928a05a9ccb7603e4b14ca37c9f2204b->leave($__internal_8ddfadaf0bd56406b746221205e95836928a05a9ccb7603e4b14ca37c9f2204b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e382b9c2b45ea3c45775bd9a0fea1472d172b85b2930716d0138493e65f0f2bb = $this->env->getExtension("native_profiler");
        $__internal_e382b9c2b45ea3c45775bd9a0fea1472d172b85b2930716d0138493e65f0f2bb->enter($__internal_e382b9c2b45ea3c45775bd9a0fea1472d172b85b2930716d0138493e65f0f2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e382b9c2b45ea3c45775bd9a0fea1472d172b85b2930716d0138493e65f0f2bb->leave($__internal_e382b9c2b45ea3c45775bd9a0fea1472d172b85b2930716d0138493e65f0f2bb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f91f75ff552953c20cb52830eb58dc74edf96ab88df76246e6a7880ae12aaadf = $this->env->getExtension("native_profiler");
        $__internal_f91f75ff552953c20cb52830eb58dc74edf96ab88df76246e6a7880ae12aaadf->enter($__internal_f91f75ff552953c20cb52830eb58dc74edf96ab88df76246e6a7880ae12aaadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_f91f75ff552953c20cb52830eb58dc74edf96ab88df76246e6a7880ae12aaadf->leave($__internal_f91f75ff552953c20cb52830eb58dc74edf96ab88df76246e6a7880ae12aaadf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d1e0044a912fbdd189540d2997855f6349342de6b3bdffe99ceb34df64fb711 = $this->env->getExtension("native_profiler");
        $__internal_5d1e0044a912fbdd189540d2997855f6349342de6b3bdffe99ceb34df64fb711->enter($__internal_5d1e0044a912fbdd189540d2997855f6349342de6b3bdffe99ceb34df64fb711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5d1e0044a912fbdd189540d2997855f6349342de6b3bdffe99ceb34df64fb711->leave($__internal_5d1e0044a912fbdd189540d2997855f6349342de6b3bdffe99ceb34df64fb711_prof);

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
