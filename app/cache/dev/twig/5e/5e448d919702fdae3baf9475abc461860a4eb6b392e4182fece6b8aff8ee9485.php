<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_0c66c243e14f3e4038c6309ee53045d1f36d90c96728cda6b98c4f332abc4f1a extends Twig_Template
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
        $__internal_0abf5ff5ff0f2c88e16f8e8362b80479facd07010413801b969e8a96ac43cf98 = $this->env->getExtension("native_profiler");
        $__internal_0abf5ff5ff0f2c88e16f8e8362b80479facd07010413801b969e8a96ac43cf98->enter($__internal_0abf5ff5ff0f2c88e16f8e8362b80479facd07010413801b969e8a96ac43cf98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_0abf5ff5ff0f2c88e16f8e8362b80479facd07010413801b969e8a96ac43cf98->leave($__internal_0abf5ff5ff0f2c88e16f8e8362b80479facd07010413801b969e8a96ac43cf98_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
