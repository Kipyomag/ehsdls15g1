<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_2d113dfcbae66e6bb0487a1f598bc34d2b6842f3568dad90f7dbd3dd8e3704c3 extends Twig_Template
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
        $__internal_004894d6e58da5c42f4e95dd08ed8da6df4bc6e382fdba306264c5578d87058b = $this->env->getExtension("native_profiler");
        $__internal_004894d6e58da5c42f4e95dd08ed8da6df4bc6e382fdba306264c5578d87058b->enter($__internal_004894d6e58da5c42f4e95dd08ed8da6df4bc6e382fdba306264c5578d87058b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_004894d6e58da5c42f4e95dd08ed8da6df4bc6e382fdba306264c5578d87058b->leave($__internal_004894d6e58da5c42f4e95dd08ed8da6df4bc6e382fdba306264c5578d87058b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
