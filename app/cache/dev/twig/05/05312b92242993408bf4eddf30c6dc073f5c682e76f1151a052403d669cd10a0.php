<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_f438aef520eecc303033ef463d873dcbd28adcdb4e3e74c3105407a5baf985fb extends Twig_Template
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
        $__internal_a0c9f834b9a9630abd25e1d8c2618594d0f66cd2b360b5f95f71851aaf7829a5 = $this->env->getExtension("native_profiler");
        $__internal_a0c9f834b9a9630abd25e1d8c2618594d0f66cd2b360b5f95f71851aaf7829a5->enter($__internal_a0c9f834b9a9630abd25e1d8c2618594d0f66cd2b360b5f95f71851aaf7829a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a0c9f834b9a9630abd25e1d8c2618594d0f66cd2b360b5f95f71851aaf7829a5->leave($__internal_a0c9f834b9a9630abd25e1d8c2618594d0f66cd2b360b5f95f71851aaf7829a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
