<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_87cb8daa97b61dc0def11e40013eb7ec65c1e99cbaeed50a6cb110caba718a4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69d9619361355b07ebd2e284ad4d17f30b6d335f841ae3589aeb83316b4e6f06 = $this->env->getExtension("native_profiler");
        $__internal_69d9619361355b07ebd2e284ad4d17f30b6d335f841ae3589aeb83316b4e6f06->enter($__internal_69d9619361355b07ebd2e284ad4d17f30b6d335f841ae3589aeb83316b4e6f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_69d9619361355b07ebd2e284ad4d17f30b6d335f841ae3589aeb83316b4e6f06->leave($__internal_69d9619361355b07ebd2e284ad4d17f30b6d335f841ae3589aeb83316b4e6f06_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
