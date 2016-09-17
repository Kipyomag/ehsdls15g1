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
        $__internal_d73369b8461132ebcb9ad0b27c562affac42876302690f4a32504bdf37bdd70a = $this->env->getExtension("native_profiler");
        $__internal_d73369b8461132ebcb9ad0b27c562affac42876302690f4a32504bdf37bdd70a->enter($__internal_d73369b8461132ebcb9ad0b27c562affac42876302690f4a32504bdf37bdd70a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_d73369b8461132ebcb9ad0b27c562affac42876302690f4a32504bdf37bdd70a->leave($__internal_d73369b8461132ebcb9ad0b27c562affac42876302690f4a32504bdf37bdd70a_prof);

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
