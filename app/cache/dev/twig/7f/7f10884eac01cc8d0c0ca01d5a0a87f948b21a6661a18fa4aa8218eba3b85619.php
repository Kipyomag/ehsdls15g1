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
        $__internal_fa8bcb03da613e61e7b2b91129fd226d42fb32856b22ffb342191fd4e58c3d9d = $this->env->getExtension("native_profiler");
        $__internal_fa8bcb03da613e61e7b2b91129fd226d42fb32856b22ffb342191fd4e58c3d9d->enter($__internal_fa8bcb03da613e61e7b2b91129fd226d42fb32856b22ffb342191fd4e58c3d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newsletter/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa8bcb03da613e61e7b2b91129fd226d42fb32856b22ffb342191fd4e58c3d9d->leave($__internal_fa8bcb03da613e61e7b2b91129fd226d42fb32856b22ffb342191fd4e58c3d9d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23526226f371b878e93290a7b7b01e4c3a4c7608bd986c8e58899b1d29f4e927 = $this->env->getExtension("native_profiler");
        $__internal_23526226f371b878e93290a7b7b01e4c3a4c7608bd986c8e58899b1d29f4e927->enter($__internal_23526226f371b878e93290a7b7b01e4c3a4c7608bd986c8e58899b1d29f4e927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_23526226f371b878e93290a7b7b01e4c3a4c7608bd986c8e58899b1d29f4e927->leave($__internal_23526226f371b878e93290a7b7b01e4c3a4c7608bd986c8e58899b1d29f4e927_prof);

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
