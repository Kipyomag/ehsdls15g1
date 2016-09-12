<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_6a6152f6584ddb73ac07e8da889c3b74a1b4c98fa3044efcfdb2192ba4b1da07 extends Twig_Template
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
        $__internal_8e96f0085a9cdd8a4e94b1f32c047892ad2b5e0513c4580b82f1f330769d5a49 = $this->env->getExtension("native_profiler");
        $__internal_8e96f0085a9cdd8a4e94b1f32c047892ad2b5e0513c4580b82f1f330769d5a49->enter($__internal_8e96f0085a9cdd8a4e94b1f32c047892ad2b5e0513c4580b82f1f330769d5a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_8e96f0085a9cdd8a4e94b1f32c047892ad2b5e0513c4580b82f1f330769d5a49->leave($__internal_8e96f0085a9cdd8a4e94b1f32c047892ad2b5e0513c4580b82f1f330769d5a49_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
