<?php

/* :articles:edit.html.twig */
class __TwigTemplate_bc69655efef44f465103fcac26455d7a3e069c90c2f868b9d15e164dad11640a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":articles:edit.html.twig", 1);
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
        $__internal_4e32772176f57343284c2edb78204663e6d23a250f38861e898ba5e9eca3e88b = $this->env->getExtension("native_profiler");
        $__internal_4e32772176f57343284c2edb78204663e6d23a250f38861e898ba5e9eca3e88b->enter($__internal_4e32772176f57343284c2edb78204663e6d23a250f38861e898ba5e9eca3e88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e32772176f57343284c2edb78204663e6d23a250f38861e898ba5e9eca3e88b->leave($__internal_4e32772176f57343284c2edb78204663e6d23a250f38861e898ba5e9eca3e88b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_78b5fb5e1b523068f687f151b29b8376f752df720730f51417c5adf7e8741246 = $this->env->getExtension("native_profiler");
        $__internal_78b5fb5e1b523068f687f151b29b8376f752df720730f51417c5adf7e8741246->enter($__internal_78b5fb5e1b523068f687f151b29b8376f752df720730f51417c5adf7e8741246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div>
    <h1>Edition des articles</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edition\" />
    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("articles_index");
        echo "\">Retourner a la liste</a>
        </li>
        <li>
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
</div>
";
        
        $__internal_78b5fb5e1b523068f687f151b29b8376f752df720730f51417c5adf7e8741246->leave($__internal_78b5fb5e1b523068f687f151b29b8376f752df720730f51417c5adf7e8741246_prof);

    }

    public function getTemplateName()
    {
        return ":articles:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  67 => 18,  61 => 15,  54 => 11,  49 => 9,  45 => 8,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block body %}*/
/* <div>*/
/*     <h1>Edition des articles</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edition" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('articles_index') }}">Retourner a la liste</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endblock %}*/
/* */
