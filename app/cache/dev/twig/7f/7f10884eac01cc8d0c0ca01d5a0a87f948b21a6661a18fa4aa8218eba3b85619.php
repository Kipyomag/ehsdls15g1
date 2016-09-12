<?php

/* newsletter/new.html.twig */
class __TwigTemplate_2ae095892de3d44342e4c4974f513f275c9f6d8a6233f6d39d4ca57828bead5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "newsletter/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b3dddcfa076a68111a1b02a945a9c5fd7afede9c072481187d73d7d55cff6fb = $this->env->getExtension("native_profiler");
        $__internal_8b3dddcfa076a68111a1b02a945a9c5fd7afede9c072481187d73d7d55cff6fb->enter($__internal_8b3dddcfa076a68111a1b02a945a9c5fd7afede9c072481187d73d7d55cff6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newsletter/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b3dddcfa076a68111a1b02a945a9c5fd7afede9c072481187d73d7d55cff6fb->leave($__internal_8b3dddcfa076a68111a1b02a945a9c5fd7afede9c072481187d73d7d55cff6fb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_580b8273d062fcdfa169dbc3835173cfc432f379dfd2ff477711659d7a0804f3 = $this->env->getExtension("native_profiler");
        $__internal_580b8273d062fcdfa169dbc3835173cfc432f379dfd2ff477711659d7a0804f3->enter($__internal_580b8273d062fcdfa169dbc3835173cfc432f379dfd2ff477711659d7a0804f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Newsletter creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("newsletter_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_580b8273d062fcdfa169dbc3835173cfc432f379dfd2ff477711659d7a0804f3->leave($__internal_580b8273d062fcdfa169dbc3835173cfc432f379dfd2ff477711659d7a0804f3_prof);

    }

    public function getTemplateName()
    {
        return "newsletter/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Newsletter creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('newsletter_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
