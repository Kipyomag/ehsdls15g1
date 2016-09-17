<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_cb7e1152c764c9e60e1518c8ba47f1deb01ba0765af45e89c1f5fb714f4c2c7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_7871d3a005a85964b48d7bf037fdf679fc6843fc74909e6f4eeb336ff4267ade = $this->env->getExtension("native_profiler");
        $__internal_7871d3a005a85964b48d7bf037fdf679fc6843fc74909e6f4eeb336ff4267ade->enter($__internal_7871d3a005a85964b48d7bf037fdf679fc6843fc74909e6f4eeb336ff4267ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7871d3a005a85964b48d7bf037fdf679fc6843fc74909e6f4eeb336ff4267ade->leave($__internal_7871d3a005a85964b48d7bf037fdf679fc6843fc74909e6f4eeb336ff4267ade_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f253f1ae9e264f3661f12265eb19c1b367cb96826f737a7b39fef6ba22fa452 = $this->env->getExtension("native_profiler");
        $__internal_9f253f1ae9e264f3661f12265eb19c1b367cb96826f737a7b39fef6ba22fa452->enter($__internal_9f253f1ae9e264f3661f12265eb19c1b367cb96826f737a7b39fef6ba22fa452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_9f253f1ae9e264f3661f12265eb19c1b367cb96826f737a7b39fef6ba22fa452->leave($__internal_9f253f1ae9e264f3661f12265eb19c1b367cb96826f737a7b39fef6ba22fa452_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e229d08257baee07e175a461a4cacfe59200131cdeb6ed6610b2df985aded2d = $this->env->getExtension("native_profiler");
        $__internal_6e229d08257baee07e175a461a4cacfe59200131cdeb6ed6610b2df985aded2d->enter($__internal_6e229d08257baee07e175a461a4cacfe59200131cdeb6ed6610b2df985aded2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_6e229d08257baee07e175a461a4cacfe59200131cdeb6ed6610b2df985aded2d->leave($__internal_6e229d08257baee07e175a461a4cacfe59200131cdeb6ed6610b2df985aded2d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
