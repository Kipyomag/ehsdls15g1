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
        $__internal_a55f23b7c59b76d4f7942ca5944de47ff2ecc30730505e33816b7a43f470004b = $this->env->getExtension("native_profiler");
        $__internal_a55f23b7c59b76d4f7942ca5944de47ff2ecc30730505e33816b7a43f470004b->enter($__internal_a55f23b7c59b76d4f7942ca5944de47ff2ecc30730505e33816b7a43f470004b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a55f23b7c59b76d4f7942ca5944de47ff2ecc30730505e33816b7a43f470004b->leave($__internal_a55f23b7c59b76d4f7942ca5944de47ff2ecc30730505e33816b7a43f470004b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_371c620235329558556ae055b8b3f8ea777f9f59dc3b5f1f885cded6e77bc640 = $this->env->getExtension("native_profiler");
        $__internal_371c620235329558556ae055b8b3f8ea777f9f59dc3b5f1f885cded6e77bc640->enter($__internal_371c620235329558556ae055b8b3f8ea777f9f59dc3b5f1f885cded6e77bc640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_371c620235329558556ae055b8b3f8ea777f9f59dc3b5f1f885cded6e77bc640->leave($__internal_371c620235329558556ae055b8b3f8ea777f9f59dc3b5f1f885cded6e77bc640_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_080d40e357e314cfccb0539e9ca4750132d3c8976aba514f0069312fff019b95 = $this->env->getExtension("native_profiler");
        $__internal_080d40e357e314cfccb0539e9ca4750132d3c8976aba514f0069312fff019b95->enter($__internal_080d40e357e314cfccb0539e9ca4750132d3c8976aba514f0069312fff019b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_080d40e357e314cfccb0539e9ca4750132d3c8976aba514f0069312fff019b95->leave($__internal_080d40e357e314cfccb0539e9ca4750132d3c8976aba514f0069312fff019b95_prof);

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
