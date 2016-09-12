<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_066543e31204dfd1852c797c6bd5433d88c737a619adf11c5d143e921184daaf extends Twig_Template
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
        $__internal_0ca370269d9259009b0bfd1882c3e3bdad04251e354a04b8ea2e4121099117f9 = $this->env->getExtension("native_profiler");
        $__internal_0ca370269d9259009b0bfd1882c3e3bdad04251e354a04b8ea2e4121099117f9->enter($__internal_0ca370269d9259009b0bfd1882c3e3bdad04251e354a04b8ea2e4121099117f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0ca370269d9259009b0bfd1882c3e3bdad04251e354a04b8ea2e4121099117f9->leave($__internal_0ca370269d9259009b0bfd1882c3e3bdad04251e354a04b8ea2e4121099117f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
