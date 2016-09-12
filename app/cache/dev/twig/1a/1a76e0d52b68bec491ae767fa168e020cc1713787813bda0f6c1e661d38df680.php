<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_e6b69b191cc41d271d02cbe013ba4050215c7c84dc5552e0587588e984cc8fc0 extends Twig_Template
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
        $__internal_2b3f2196af42fd2a759685facc7d6af0be49fe753986d2c49038254531b5503c = $this->env->getExtension("native_profiler");
        $__internal_2b3f2196af42fd2a759685facc7d6af0be49fe753986d2c49038254531b5503c->enter($__internal_2b3f2196af42fd2a759685facc7d6af0be49fe753986d2c49038254531b5503c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_2b3f2196af42fd2a759685facc7d6af0be49fe753986d2c49038254531b5503c->leave($__internal_2b3f2196af42fd2a759685facc7d6af0be49fe753986d2c49038254531b5503c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
