<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_2d113dfcbae66e6bb0487a1f598bc34d2b6842f3568dad90f7dbd3dd8e3704c3 extends Twig_Template
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
        $__internal_98702755c74d1b3091c6419c269708aa68bee6b3f6a9089d12dbd774235feee6 = $this->env->getExtension("native_profiler");
        $__internal_98702755c74d1b3091c6419c269708aa68bee6b3f6a9089d12dbd774235feee6->enter($__internal_98702755c74d1b3091c6419c269708aa68bee6b3f6a9089d12dbd774235feee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_98702755c74d1b3091c6419c269708aa68bee6b3f6a9089d12dbd774235feee6->leave($__internal_98702755c74d1b3091c6419c269708aa68bee6b3f6a9089d12dbd774235feee6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
