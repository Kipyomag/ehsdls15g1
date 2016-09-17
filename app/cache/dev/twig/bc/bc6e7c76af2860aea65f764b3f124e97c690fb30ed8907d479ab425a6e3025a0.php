<?php

/* :newsletter:new.html.twig */
class __TwigTemplate_50b1a0ebbea7cf60a4c70a54ab5f9855fdbf0eee5ff20f5547861e7ca82c1554 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":newsletter:new.html.twig", 1);
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
        $__internal_9cadce95f0f42e6c2b3edf9fd358810218ac155c922be7bae8538e7be5755fac = $this->env->getExtension("native_profiler");
        $__internal_9cadce95f0f42e6c2b3edf9fd358810218ac155c922be7bae8538e7be5755fac->enter($__internal_9cadce95f0f42e6c2b3edf9fd358810218ac155c922be7bae8538e7be5755fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":newsletter:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cadce95f0f42e6c2b3edf9fd358810218ac155c922be7bae8538e7be5755fac->leave($__internal_9cadce95f0f42e6c2b3edf9fd358810218ac155c922be7bae8538e7be5755fac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_97343e3078eda460f7ca8b0c11e4a990bd791e014a1573e2e851a6eb0ee8d1b5 = $this->env->getExtension("native_profiler");
        $__internal_97343e3078eda460f7ca8b0c11e4a990bd791e014a1573e2e851a6eb0ee8d1b5->enter($__internal_97343e3078eda460f7ca8b0c11e4a990bd791e014a1573e2e851a6eb0ee8d1b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_97343e3078eda460f7ca8b0c11e4a990bd791e014a1573e2e851a6eb0ee8d1b5->leave($__internal_97343e3078eda460f7ca8b0c11e4a990bd791e014a1573e2e851a6eb0ee8d1b5_prof);

    }

    public function getTemplateName()
    {
        return ":newsletter:new.html.twig";
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
