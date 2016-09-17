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
        $__internal_49920568d00001292312f0e13571e0153559b7b0c540c4142c4b60235fded324 = $this->env->getExtension("native_profiler");
        $__internal_49920568d00001292312f0e13571e0153559b7b0c540c4142c4b60235fded324->enter($__internal_49920568d00001292312f0e13571e0153559b7b0c540c4142c4b60235fded324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49920568d00001292312f0e13571e0153559b7b0c540c4142c4b60235fded324->leave($__internal_49920568d00001292312f0e13571e0153559b7b0c540c4142c4b60235fded324_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_af525b6788ea21740901769ad1985c355c07a0e842829f411075bc7c80c5ed6e = $this->env->getExtension("native_profiler");
        $__internal_af525b6788ea21740901769ad1985c355c07a0e842829f411075bc7c80c5ed6e->enter($__internal_af525b6788ea21740901769ad1985c355c07a0e842829f411075bc7c80c5ed6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_af525b6788ea21740901769ad1985c355c07a0e842829f411075bc7c80c5ed6e->leave($__internal_af525b6788ea21740901769ad1985c355c07a0e842829f411075bc7c80c5ed6e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78c64b59c9694b54828f1618636da4c638be4fcddb54c0161daf472630afe4a4 = $this->env->getExtension("native_profiler");
        $__internal_78c64b59c9694b54828f1618636da4c638be4fcddb54c0161daf472630afe4a4->enter($__internal_78c64b59c9694b54828f1618636da4c638be4fcddb54c0161daf472630afe4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78c64b59c9694b54828f1618636da4c638be4fcddb54c0161daf472630afe4a4->leave($__internal_78c64b59c9694b54828f1618636da4c638be4fcddb54c0161daf472630afe4a4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4f045a976130e8b8b393930fc5722dfd562c4afbed4a28616aa37b9c6e7f75d = $this->env->getExtension("native_profiler");
        $__internal_f4f045a976130e8b8b393930fc5722dfd562c4afbed4a28616aa37b9c6e7f75d->enter($__internal_f4f045a976130e8b8b393930fc5722dfd562c4afbed4a28616aa37b9c6e7f75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f4f045a976130e8b8b393930fc5722dfd562c4afbed4a28616aa37b9c6e7f75d->leave($__internal_f4f045a976130e8b8b393930fc5722dfd562c4afbed4a28616aa37b9c6e7f75d_prof);

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
