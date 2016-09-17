<?php

/* comment/new.html.twig */
class __TwigTemplate_f6e2a5a26fd851bf07411e908553a2256433e3357cd677d5c4f83d45670792b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comment/new.html.twig", 1);
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
        $__internal_b8beaf479752327a551455902de9bd0177f877e89987d06d1e4c59edb99dcb01 = $this->env->getExtension("native_profiler");
        $__internal_b8beaf479752327a551455902de9bd0177f877e89987d06d1e4c59edb99dcb01->enter($__internal_b8beaf479752327a551455902de9bd0177f877e89987d06d1e4c59edb99dcb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8beaf479752327a551455902de9bd0177f877e89987d06d1e4c59edb99dcb01->leave($__internal_b8beaf479752327a551455902de9bd0177f877e89987d06d1e4c59edb99dcb01_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e49a893ea38b83dc8e647f15e0e5709aadf31a99847afe224f1e824841d49b1e = $this->env->getExtension("native_profiler");
        $__internal_e49a893ea38b83dc8e647f15e0e5709aadf31a99847afe224f1e824841d49b1e->enter($__internal_e49a893ea38b83dc8e647f15e0e5709aadf31a99847afe224f1e824841d49b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_e49a893ea38b83dc8e647f15e0e5709aadf31a99847afe224f1e824841d49b1e->leave($__internal_e49a893ea38b83dc8e647f15e0e5709aadf31a99847afe224f1e824841d49b1e_prof);

    }

    public function getTemplateName()
    {
        return "comment/new.html.twig";
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
/*     <h1>Comment creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('comment_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
