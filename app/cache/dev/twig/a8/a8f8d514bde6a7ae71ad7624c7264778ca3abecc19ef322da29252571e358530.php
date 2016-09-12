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
        $__internal_f9dacb9e6e6fe6c67e5498c0fe6ec8d2648a6839f24ddce5fab6500041b11de7 = $this->env->getExtension("native_profiler");
        $__internal_f9dacb9e6e6fe6c67e5498c0fe6ec8d2648a6839f24ddce5fab6500041b11de7->enter($__internal_f9dacb9e6e6fe6c67e5498c0fe6ec8d2648a6839f24ddce5fab6500041b11de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f9dacb9e6e6fe6c67e5498c0fe6ec8d2648a6839f24ddce5fab6500041b11de7->leave($__internal_f9dacb9e6e6fe6c67e5498c0fe6ec8d2648a6839f24ddce5fab6500041b11de7_prof);

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
