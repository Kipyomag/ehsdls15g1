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
        $__internal_94506b538bc2b32d781aa5aa81cae5c880bcf090f371f3568625460cfca246a4 = $this->env->getExtension("native_profiler");
        $__internal_94506b538bc2b32d781aa5aa81cae5c880bcf090f371f3568625460cfca246a4->enter($__internal_94506b538bc2b32d781aa5aa81cae5c880bcf090f371f3568625460cfca246a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94506b538bc2b32d781aa5aa81cae5c880bcf090f371f3568625460cfca246a4->leave($__internal_94506b538bc2b32d781aa5aa81cae5c880bcf090f371f3568625460cfca246a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2263bc466dc7ab55b3237419c84d07b5ac96c3934f13104c53972efef9ce6ae7 = $this->env->getExtension("native_profiler");
        $__internal_2263bc466dc7ab55b3237419c84d07b5ac96c3934f13104c53972efef9ce6ae7->enter($__internal_2263bc466dc7ab55b3237419c84d07b5ac96c3934f13104c53972efef9ce6ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2263bc466dc7ab55b3237419c84d07b5ac96c3934f13104c53972efef9ce6ae7->leave($__internal_2263bc466dc7ab55b3237419c84d07b5ac96c3934f13104c53972efef9ce6ae7_prof);

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
