<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_368f448cd4eb244672936ab3818e831a7e9170f57b2fc97c3ca2de31bec6fef8 extends Twig_Template
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
        $__internal_f98726acf3badfb0cd5e9850f2de25a66e9775b34bf81ddeaa7839ecaf20c41f = $this->env->getExtension("native_profiler");
        $__internal_f98726acf3badfb0cd5e9850f2de25a66e9775b34bf81ddeaa7839ecaf20c41f->enter($__internal_f98726acf3badfb0cd5e9850f2de25a66e9775b34bf81ddeaa7839ecaf20c41f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f98726acf3badfb0cd5e9850f2de25a66e9775b34bf81ddeaa7839ecaf20c41f->leave($__internal_f98726acf3badfb0cd5e9850f2de25a66e9775b34bf81ddeaa7839ecaf20c41f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
