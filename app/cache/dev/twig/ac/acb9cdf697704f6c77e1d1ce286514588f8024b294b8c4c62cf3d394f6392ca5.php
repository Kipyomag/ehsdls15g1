<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_782dcaae991ea87e6862dfc9fa12ca9c6d2bb9c1d925da8f489adbaae3156b49 extends Twig_Template
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
        $__internal_3180a2847feeff95500f06d770e363c33d4c7e3c509ef34ac6229a4682dc8a75 = $this->env->getExtension("native_profiler");
        $__internal_3180a2847feeff95500f06d770e363c33d4c7e3c509ef34ac6229a4682dc8a75->enter($__internal_3180a2847feeff95500f06d770e363c33d4c7e3c509ef34ac6229a4682dc8a75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_3180a2847feeff95500f06d770e363c33d4c7e3c509ef34ac6229a4682dc8a75->leave($__internal_3180a2847feeff95500f06d770e363c33d4c7e3c509ef34ac6229a4682dc8a75_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
