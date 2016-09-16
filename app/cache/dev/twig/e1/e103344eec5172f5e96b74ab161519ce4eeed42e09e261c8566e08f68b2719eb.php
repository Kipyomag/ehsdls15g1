<?php

/* articles/new.html.twig */
class __TwigTemplate_d0b6299fe654b5bf5bb661759df3cccf7e3869518d8c7dabb74577f550403aae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/new.html.twig", 1);
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
        $__internal_9bcf9fe476dfc39953440c99cfe3cf3293e9b00ddab3fffe927d13dc1f2b7dc0 = $this->env->getExtension("native_profiler");
        $__internal_9bcf9fe476dfc39953440c99cfe3cf3293e9b00ddab3fffe927d13dc1f2b7dc0->enter($__internal_9bcf9fe476dfc39953440c99cfe3cf3293e9b00ddab3fffe927d13dc1f2b7dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bcf9fe476dfc39953440c99cfe3cf3293e9b00ddab3fffe927d13dc1f2b7dc0->leave($__internal_9bcf9fe476dfc39953440c99cfe3cf3293e9b00ddab3fffe927d13dc1f2b7dc0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fdb7c65f8cc48fef12977b0dd9c17e1695c05952dd262046182a1b7c67e93b6 = $this->env->getExtension("native_profiler");
        $__internal_5fdb7c65f8cc48fef12977b0dd9c17e1695c05952dd262046182a1b7c67e93b6->enter($__internal_5fdb7c65f8cc48fef12977b0dd9c17e1695c05952dd262046182a1b7c67e93b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Création d'articles</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "todo")));
        echo "
        <input type=\"submit\" value=\"Creation\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("articles_index");
        echo "\">Retour vers la liste</a>
        </li>
    </ul>
";
        
        $__internal_5fdb7c65f8cc48fef12977b0dd9c17e1695c05952dd262046182a1b7c67e93b6->leave($__internal_5fdb7c65f8cc48fef12977b0dd9c17e1695c05952dd262046182a1b7c67e93b6_prof);

    }

    public function getTemplateName()
    {
        return "articles/new.html.twig";
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
/*     <h1>Création d'articles</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form, { 'attr': {'class': 'todo'} }) }}*/
/*         <input type="submit" value="Creation" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('articles_index') }}">Retour vers la liste</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
