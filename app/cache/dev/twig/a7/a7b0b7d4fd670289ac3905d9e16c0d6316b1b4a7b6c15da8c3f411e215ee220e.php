<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3756365c17c29626228dd689df307e7ba96c8347b5075236d5fe1cbca720cccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fb8e1fb20f20d2996fdbbfb395cf54dd9fef23e06dfed7b2987a07cc2fbadc8 = $this->env->getExtension("native_profiler");
        $__internal_4fb8e1fb20f20d2996fdbbfb395cf54dd9fef23e06dfed7b2987a07cc2fbadc8->enter($__internal_4fb8e1fb20f20d2996fdbbfb395cf54dd9fef23e06dfed7b2987a07cc2fbadc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fb8e1fb20f20d2996fdbbfb395cf54dd9fef23e06dfed7b2987a07cc2fbadc8->leave($__internal_4fb8e1fb20f20d2996fdbbfb395cf54dd9fef23e06dfed7b2987a07cc2fbadc8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_097a26cf79a0e1ba152c9ae9de2c9c7e62bc42b2b29f9d5248908f1aa11fea1c = $this->env->getExtension("native_profiler");
        $__internal_097a26cf79a0e1ba152c9ae9de2c9c7e62bc42b2b29f9d5248908f1aa11fea1c->enter($__internal_097a26cf79a0e1ba152c9ae9de2c9c7e62bc42b2b29f9d5248908f1aa11fea1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_097a26cf79a0e1ba152c9ae9de2c9c7e62bc42b2b29f9d5248908f1aa11fea1c->leave($__internal_097a26cf79a0e1ba152c9ae9de2c9c7e62bc42b2b29f9d5248908f1aa11fea1c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b712a0b32c47feb8ed180cecc8ce8db8b63392add975a9ef536911908612c95c = $this->env->getExtension("native_profiler");
        $__internal_b712a0b32c47feb8ed180cecc8ce8db8b63392add975a9ef536911908612c95c->enter($__internal_b712a0b32c47feb8ed180cecc8ce8db8b63392add975a9ef536911908612c95c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b712a0b32c47feb8ed180cecc8ce8db8b63392add975a9ef536911908612c95c->leave($__internal_b712a0b32c47feb8ed180cecc8ce8db8b63392add975a9ef536911908612c95c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02f7d38d55d1235b38a6cebe0d759ea6be62be7d817f120b4948e0ed4d286791 = $this->env->getExtension("native_profiler");
        $__internal_02f7d38d55d1235b38a6cebe0d759ea6be62be7d817f120b4948e0ed4d286791->enter($__internal_02f7d38d55d1235b38a6cebe0d759ea6be62be7d817f120b4948e0ed4d286791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_02f7d38d55d1235b38a6cebe0d759ea6be62be7d817f120b4948e0ed4d286791->leave($__internal_02f7d38d55d1235b38a6cebe0d759ea6be62be7d817f120b4948e0ed4d286791_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
