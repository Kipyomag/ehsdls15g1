<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f0f989ecc642d985cb9fcc4226ff15659bd2d34aad82bb086e5f81d2255e9278 extends Twig_Template
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
        $__internal_d802421030ff1a9c3bdd4f09fbb754b90836d70e41c59a528cbd5b80d69dd3a9 = $this->env->getExtension("native_profiler");
        $__internal_d802421030ff1a9c3bdd4f09fbb754b90836d70e41c59a528cbd5b80d69dd3a9->enter($__internal_d802421030ff1a9c3bdd4f09fbb754b90836d70e41c59a528cbd5b80d69dd3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_d802421030ff1a9c3bdd4f09fbb754b90836d70e41c59a528cbd5b80d69dd3a9->leave($__internal_d802421030ff1a9c3bdd4f09fbb754b90836d70e41c59a528cbd5b80d69dd3a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
