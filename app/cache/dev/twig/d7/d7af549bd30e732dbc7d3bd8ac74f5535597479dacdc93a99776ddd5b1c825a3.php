<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_1373a6325d4abfe3abc137975d4a0a5b381ad5dcefb0d8b1be2ba829f90bda5d extends Twig_Template
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
        $__internal_2c84ce2603bbd9d75b683f13502e5633179a38326e54f315b147f531dfa4a3ce = $this->env->getExtension("native_profiler");
        $__internal_2c84ce2603bbd9d75b683f13502e5633179a38326e54f315b147f531dfa4a3ce->enter($__internal_2c84ce2603bbd9d75b683f13502e5633179a38326e54f315b147f531dfa4a3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2c84ce2603bbd9d75b683f13502e5633179a38326e54f315b147f531dfa4a3ce->leave($__internal_2c84ce2603bbd9d75b683f13502e5633179a38326e54f315b147f531dfa4a3ce_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
