<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_a1ea80bc1dd529b545d5ce80cfc1b00303d76734ede88c9b8206064e0baa1225 extends Twig_Template
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
        $__internal_5cd96ce9317e33a130d54056c0acb9344cd83cce602ffbd570c595026badf992 = $this->env->getExtension("native_profiler");
        $__internal_5cd96ce9317e33a130d54056c0acb9344cd83cce602ffbd570c595026badf992->enter($__internal_5cd96ce9317e33a130d54056c0acb9344cd83cce602ffbd570c595026badf992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5cd96ce9317e33a130d54056c0acb9344cd83cce602ffbd570c595026badf992->leave($__internal_5cd96ce9317e33a130d54056c0acb9344cd83cce602ffbd570c595026badf992_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
