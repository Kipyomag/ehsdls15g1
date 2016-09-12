<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b7d1497ea30f155904ac461e96a5791e2b05a61cd66486b8aa4a16bbaca655da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_b54a201c1dd4c06808427e894589377e13481c4b9d5ba249404264a5a9b4b486 = $this->env->getExtension("native_profiler");
        $__internal_b54a201c1dd4c06808427e894589377e13481c4b9d5ba249404264a5a9b4b486->enter($__internal_b54a201c1dd4c06808427e894589377e13481c4b9d5ba249404264a5a9b4b486_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b54a201c1dd4c06808427e894589377e13481c4b9d5ba249404264a5a9b4b486->leave($__internal_b54a201c1dd4c06808427e894589377e13481c4b9d5ba249404264a5a9b4b486_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_93434e520120ef365a9d0f381b6c102656790a9bda1bcc56e00c0965e611ab83 = $this->env->getExtension("native_profiler");
        $__internal_93434e520120ef365a9d0f381b6c102656790a9bda1bcc56e00c0965e611ab83->enter($__internal_93434e520120ef365a9d0f381b6c102656790a9bda1bcc56e00c0965e611ab83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_93434e520120ef365a9d0f381b6c102656790a9bda1bcc56e00c0965e611ab83->leave($__internal_93434e520120ef365a9d0f381b6c102656790a9bda1bcc56e00c0965e611ab83_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5d18c9e9108d8a57da282362bc9569c18515a7d9cd68b516db90cebff5eed06 = $this->env->getExtension("native_profiler");
        $__internal_b5d18c9e9108d8a57da282362bc9569c18515a7d9cd68b516db90cebff5eed06->enter($__internal_b5d18c9e9108d8a57da282362bc9569c18515a7d9cd68b516db90cebff5eed06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b5d18c9e9108d8a57da282362bc9569c18515a7d9cd68b516db90cebff5eed06->leave($__internal_b5d18c9e9108d8a57da282362bc9569c18515a7d9cd68b516db90cebff5eed06_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
