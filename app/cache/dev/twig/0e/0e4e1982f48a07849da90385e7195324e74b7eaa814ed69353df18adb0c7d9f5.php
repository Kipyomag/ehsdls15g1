<?php

/* :comment:new.html.twig */
class __TwigTemplate_7c4df2f974d5c686a00ee43313768ec5a58acd495e349e5544aba0911389e6c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:new.html.twig", 1);
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
        $__internal_d835d551a25c41c08a26de2879b95d0e5cd791df8f080ff85c87b2e2038fd408 = $this->env->getExtension("native_profiler");
        $__internal_d835d551a25c41c08a26de2879b95d0e5cd791df8f080ff85c87b2e2038fd408->enter($__internal_d835d551a25c41c08a26de2879b95d0e5cd791df8f080ff85c87b2e2038fd408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d835d551a25c41c08a26de2879b95d0e5cd791df8f080ff85c87b2e2038fd408->leave($__internal_d835d551a25c41c08a26de2879b95d0e5cd791df8f080ff85c87b2e2038fd408_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b19b60562080eaef288773d543903b237192df0b714c860cc9891e940012cd65 = $this->env->getExtension("native_profiler");
        $__internal_b19b60562080eaef288773d543903b237192df0b714c860cc9891e940012cd65->enter($__internal_b19b60562080eaef288773d543903b237192df0b714c860cc9891e940012cd65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b19b60562080eaef288773d543903b237192df0b714c860cc9891e940012cd65->leave($__internal_b19b60562080eaef288773d543903b237192df0b714c860cc9891e940012cd65_prof);

    }

    public function getTemplateName()
    {
        return ":comment:new.html.twig";
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
