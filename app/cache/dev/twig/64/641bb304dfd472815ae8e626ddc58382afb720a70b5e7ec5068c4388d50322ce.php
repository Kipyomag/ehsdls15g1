<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_9da88c2ac250377535c3795586efef5e876de67bf0d63007f215f5799e462dbe extends Twig_Template
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
        $__internal_53dec8f82c9ba158e855d9d077f2946ec005c798aed580e7b402378982f3db76 = $this->env->getExtension("native_profiler");
        $__internal_53dec8f82c9ba158e855d9d077f2946ec005c798aed580e7b402378982f3db76->enter($__internal_53dec8f82c9ba158e855d9d077f2946ec005c798aed580e7b402378982f3db76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_53dec8f82c9ba158e855d9d077f2946ec005c798aed580e7b402378982f3db76->leave($__internal_53dec8f82c9ba158e855d9d077f2946ec005c798aed580e7b402378982f3db76_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
