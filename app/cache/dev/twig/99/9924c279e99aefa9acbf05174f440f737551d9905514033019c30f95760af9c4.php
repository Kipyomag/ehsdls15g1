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
        $__internal_7c24b72a8d645f1338144a76ca1c6860180b7283237c382643a641f72c64e022 = $this->env->getExtension("native_profiler");
        $__internal_7c24b72a8d645f1338144a76ca1c6860180b7283237c382643a641f72c64e022->enter($__internal_7c24b72a8d645f1338144a76ca1c6860180b7283237c382643a641f72c64e022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7c24b72a8d645f1338144a76ca1c6860180b7283237c382643a641f72c64e022->leave($__internal_7c24b72a8d645f1338144a76ca1c6860180b7283237c382643a641f72c64e022_prof);

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
