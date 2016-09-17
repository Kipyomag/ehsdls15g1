<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_8cf7a42f7067168ea21983b6358c526b9ad881e1ce6eb29b12e497c3352624e0 extends Twig_Template
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
        $__internal_e413a43ef0595e8242eae8e39b99a0cedd768724691fd12979b6b770ba66886f = $this->env->getExtension("native_profiler");
        $__internal_e413a43ef0595e8242eae8e39b99a0cedd768724691fd12979b6b770ba66886f->enter($__internal_e413a43ef0595e8242eae8e39b99a0cedd768724691fd12979b6b770ba66886f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_e413a43ef0595e8242eae8e39b99a0cedd768724691fd12979b6b770ba66886f->leave($__internal_e413a43ef0595e8242eae8e39b99a0cedd768724691fd12979b6b770ba66886f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
