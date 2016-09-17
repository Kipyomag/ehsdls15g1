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
        $__internal_d0fe7eafeef6724468de7012621cd731f851f05ab761b527b367ce5eda52edce = $this->env->getExtension("native_profiler");
        $__internal_d0fe7eafeef6724468de7012621cd731f851f05ab761b527b367ce5eda52edce->enter($__internal_d0fe7eafeef6724468de7012621cd731f851f05ab761b527b367ce5eda52edce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d0fe7eafeef6724468de7012621cd731f851f05ab761b527b367ce5eda52edce->leave($__internal_d0fe7eafeef6724468de7012621cd731f851f05ab761b527b367ce5eda52edce_prof);

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
