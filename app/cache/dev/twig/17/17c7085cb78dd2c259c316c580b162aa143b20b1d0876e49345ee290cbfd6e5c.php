<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_30fa16b99dff9fadfe796f6e760239a0acb7f96a7a5823e3d5afd2e67fcf8175 extends Twig_Template
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
        $__internal_7c5ce4a23303ec1afd331ea6c37474738c43a10e51cd82a5548730f6a4f6131b = $this->env->getExtension("native_profiler");
        $__internal_7c5ce4a23303ec1afd331ea6c37474738c43a10e51cd82a5548730f6a4f6131b->enter($__internal_7c5ce4a23303ec1afd331ea6c37474738c43a10e51cd82a5548730f6a4f6131b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_7c5ce4a23303ec1afd331ea6c37474738c43a10e51cd82a5548730f6a4f6131b->leave($__internal_7c5ce4a23303ec1afd331ea6c37474738c43a10e51cd82a5548730f6a4f6131b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
