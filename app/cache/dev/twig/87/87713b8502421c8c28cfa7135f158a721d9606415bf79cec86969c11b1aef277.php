<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_87ca515484bd9be0b28865b540d3713c8b88af1201c37a662fbbf5fd6eb7b129 extends Twig_Template
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
        $__internal_4f49c907799c295b300b55cffa109de06211c4c58c83cc8e786570c0387e66d6 = $this->env->getExtension("native_profiler");
        $__internal_4f49c907799c295b300b55cffa109de06211c4c58c83cc8e786570c0387e66d6->enter($__internal_4f49c907799c295b300b55cffa109de06211c4c58c83cc8e786570c0387e66d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_4f49c907799c295b300b55cffa109de06211c4c58c83cc8e786570c0387e66d6->leave($__internal_4f49c907799c295b300b55cffa109de06211c4c58c83cc8e786570c0387e66d6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
