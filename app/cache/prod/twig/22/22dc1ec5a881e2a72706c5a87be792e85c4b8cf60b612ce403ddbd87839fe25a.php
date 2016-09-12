<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d064de6df1c8c568529d7d744fb2b60271767ee32600b9ab241a964d36c72bfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_a83ed5e7f24165427d9eed522a1a2fe367071dad117fe35239df41c74d17ed4a = $this->env->getExtension("native_profiler");
        $__internal_a83ed5e7f24165427d9eed522a1a2fe367071dad117fe35239df41c74d17ed4a->enter($__internal_a83ed5e7f24165427d9eed522a1a2fe367071dad117fe35239df41c74d17ed4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a83ed5e7f24165427d9eed522a1a2fe367071dad117fe35239df41c74d17ed4a->leave($__internal_a83ed5e7f24165427d9eed522a1a2fe367071dad117fe35239df41c74d17ed4a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_24ebf42d2a0e541d6911ad1f86e8e97f0909e174f41e6b9719ee82c3115fbac3 = $this->env->getExtension("native_profiler");
        $__internal_24ebf42d2a0e541d6911ad1f86e8e97f0909e174f41e6b9719ee82c3115fbac3->enter($__internal_24ebf42d2a0e541d6911ad1f86e8e97f0909e174f41e6b9719ee82c3115fbac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_24ebf42d2a0e541d6911ad1f86e8e97f0909e174f41e6b9719ee82c3115fbac3->leave($__internal_24ebf42d2a0e541d6911ad1f86e8e97f0909e174f41e6b9719ee82c3115fbac3_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bb498ed3cff5201b3db581a029b1432a67767aba9e55423097ba8bc89e0fd84 = $this->env->getExtension("native_profiler");
        $__internal_4bb498ed3cff5201b3db581a029b1432a67767aba9e55423097ba8bc89e0fd84->enter($__internal_4bb498ed3cff5201b3db581a029b1432a67767aba9e55423097ba8bc89e0fd84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4bb498ed3cff5201b3db581a029b1432a67767aba9e55423097ba8bc89e0fd84->leave($__internal_4bb498ed3cff5201b3db581a029b1432a67767aba9e55423097ba8bc89e0fd84_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc1c28514f668847c7e090196a898fa8c0146cea8fe72230e82b94f53804ba13 = $this->env->getExtension("native_profiler");
        $__internal_bc1c28514f668847c7e090196a898fa8c0146cea8fe72230e82b94f53804ba13->enter($__internal_bc1c28514f668847c7e090196a898fa8c0146cea8fe72230e82b94f53804ba13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_bc1c28514f668847c7e090196a898fa8c0146cea8fe72230e82b94f53804ba13->leave($__internal_bc1c28514f668847c7e090196a898fa8c0146cea8fe72230e82b94f53804ba13_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
