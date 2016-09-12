<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c02059eb0ab3d0baf417190d8c725cb944625066de4e21e280e17ca330c1b960 extends Twig_Template
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
        $__internal_5efc27e22edf98de94f98103ee3888c2b768d9ac5d2d55567ca696e86a27dff1 = $this->env->getExtension("native_profiler");
        $__internal_5efc27e22edf98de94f98103ee3888c2b768d9ac5d2d55567ca696e86a27dff1->enter($__internal_5efc27e22edf98de94f98103ee3888c2b768d9ac5d2d55567ca696e86a27dff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5efc27e22edf98de94f98103ee3888c2b768d9ac5d2d55567ca696e86a27dff1->leave($__internal_5efc27e22edf98de94f98103ee3888c2b768d9ac5d2d55567ca696e86a27dff1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
