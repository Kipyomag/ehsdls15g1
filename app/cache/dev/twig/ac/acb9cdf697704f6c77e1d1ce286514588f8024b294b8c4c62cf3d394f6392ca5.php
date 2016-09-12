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
        $__internal_71dedcc8014f075796a6d13ea48c931815948bc243ea3ce9b81f12c5dbe0a3f6 = $this->env->getExtension("native_profiler");
        $__internal_71dedcc8014f075796a6d13ea48c931815948bc243ea3ce9b81f12c5dbe0a3f6->enter($__internal_71dedcc8014f075796a6d13ea48c931815948bc243ea3ce9b81f12c5dbe0a3f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_71dedcc8014f075796a6d13ea48c931815948bc243ea3ce9b81f12c5dbe0a3f6->leave($__internal_71dedcc8014f075796a6d13ea48c931815948bc243ea3ce9b81f12c5dbe0a3f6_prof);

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
