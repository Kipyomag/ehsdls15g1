<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_91e441c3b8d368e388cd00b7083b3c622ef90fee5071817b8c1cc734f6dca2e9 extends Twig_Template
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
        $__internal_46c67cc844bd7cf29cfb2ce74feb12e47a48c312d9b9351ebec1c656fe2aa046 = $this->env->getExtension("native_profiler");
        $__internal_46c67cc844bd7cf29cfb2ce74feb12e47a48c312d9b9351ebec1c656fe2aa046->enter($__internal_46c67cc844bd7cf29cfb2ce74feb12e47a48c312d9b9351ebec1c656fe2aa046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_46c67cc844bd7cf29cfb2ce74feb12e47a48c312d9b9351ebec1c656fe2aa046->leave($__internal_46c67cc844bd7cf29cfb2ce74feb12e47a48c312d9b9351ebec1c656fe2aa046_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
