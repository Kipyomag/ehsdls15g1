<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_d4ab4271a332d420af0f02488d201dcd0ab7330ca0422e5a0256406a5560932c extends Twig_Template
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
        $__internal_4669cb4c13a632a7f22fb20940bf597c1d4ab29594f230c622f2b3c694c8a965 = $this->env->getExtension("native_profiler");
        $__internal_4669cb4c13a632a7f22fb20940bf597c1d4ab29594f230c622f2b3c694c8a965->enter($__internal_4669cb4c13a632a7f22fb20940bf597c1d4ab29594f230c622f2b3c694c8a965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4669cb4c13a632a7f22fb20940bf597c1d4ab29594f230c622f2b3c694c8a965->leave($__internal_4669cb4c13a632a7f22fb20940bf597c1d4ab29594f230c622f2b3c694c8a965_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
