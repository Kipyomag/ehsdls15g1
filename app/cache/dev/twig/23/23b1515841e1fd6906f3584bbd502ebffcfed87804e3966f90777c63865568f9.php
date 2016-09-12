<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_818a2534c9a731fede0a41507846a0306886eef671177ccc8dfe1459ce5e42fb extends Twig_Template
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
        $__internal_f8fe7a0e45ee00412dabcd29336ec84c9477b5463bcb837e0342b884d0d9e10c = $this->env->getExtension("native_profiler");
        $__internal_f8fe7a0e45ee00412dabcd29336ec84c9477b5463bcb837e0342b884d0d9e10c->enter($__internal_f8fe7a0e45ee00412dabcd29336ec84c9477b5463bcb837e0342b884d0d9e10c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f8fe7a0e45ee00412dabcd29336ec84c9477b5463bcb837e0342b884d0d9e10c->leave($__internal_f8fe7a0e45ee00412dabcd29336ec84c9477b5463bcb837e0342b884d0d9e10c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
