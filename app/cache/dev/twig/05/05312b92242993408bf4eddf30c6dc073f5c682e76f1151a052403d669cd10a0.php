<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f438aef520eecc303033ef463d873dcbd28adcdb4e3e74c3105407a5baf985fb extends Twig_Template
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
        $__internal_c03002b05c6fc7cd58c63d3f9d446c3b8274890da87ab0a41cd6109464aef85b = $this->env->getExtension("native_profiler");
        $__internal_c03002b05c6fc7cd58c63d3f9d446c3b8274890da87ab0a41cd6109464aef85b->enter($__internal_c03002b05c6fc7cd58c63d3f9d446c3b8274890da87ab0a41cd6109464aef85b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c03002b05c6fc7cd58c63d3f9d446c3b8274890da87ab0a41cd6109464aef85b->leave($__internal_c03002b05c6fc7cd58c63d3f9d446c3b8274890da87ab0a41cd6109464aef85b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
