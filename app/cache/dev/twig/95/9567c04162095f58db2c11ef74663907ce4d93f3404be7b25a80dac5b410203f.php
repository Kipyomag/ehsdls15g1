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
        $__internal_a89bc618b5c1e1aca74cc83bb27d480c3eb156ada214102239e941cb653b86e4 = $this->env->getExtension("native_profiler");
        $__internal_a89bc618b5c1e1aca74cc83bb27d480c3eb156ada214102239e941cb653b86e4->enter($__internal_a89bc618b5c1e1aca74cc83bb27d480c3eb156ada214102239e941cb653b86e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_a89bc618b5c1e1aca74cc83bb27d480c3eb156ada214102239e941cb653b86e4->leave($__internal_a89bc618b5c1e1aca74cc83bb27d480c3eb156ada214102239e941cb653b86e4_prof);

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
