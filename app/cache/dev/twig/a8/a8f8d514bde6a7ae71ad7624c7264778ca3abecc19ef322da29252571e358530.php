<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_783969d0ecc86865941d8f043ccffef5d685587b36ec2b43fca319ab6488a98e extends Twig_Template
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
        $__internal_a996c07250d6aaa1ba57ab38c4280961c55e8df9477fdd38297a68df95616a6a = $this->env->getExtension("native_profiler");
        $__internal_a996c07250d6aaa1ba57ab38c4280961c55e8df9477fdd38297a68df95616a6a->enter($__internal_a996c07250d6aaa1ba57ab38c4280961c55e8df9477fdd38297a68df95616a6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a996c07250d6aaa1ba57ab38c4280961c55e8df9477fdd38297a68df95616a6a->leave($__internal_a996c07250d6aaa1ba57ab38c4280961c55e8df9477fdd38297a68df95616a6a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
