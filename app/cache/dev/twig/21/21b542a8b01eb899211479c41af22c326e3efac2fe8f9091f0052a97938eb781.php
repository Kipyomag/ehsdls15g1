<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_217c454c46f3fe0e23c494e7891f080386d592c2bebe7f4df61e585452e9796a extends Twig_Template
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
        $__internal_1ac916094c0d56b071e261b146a2904c4234f07242491bb2f45e7b40c6d4467d = $this->env->getExtension("native_profiler");
        $__internal_1ac916094c0d56b071e261b146a2904c4234f07242491bb2f45e7b40c6d4467d->enter($__internal_1ac916094c0d56b071e261b146a2904c4234f07242491bb2f45e7b40c6d4467d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1ac916094c0d56b071e261b146a2904c4234f07242491bb2f45e7b40c6d4467d->leave($__internal_1ac916094c0d56b071e261b146a2904c4234f07242491bb2f45e7b40c6d4467d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
