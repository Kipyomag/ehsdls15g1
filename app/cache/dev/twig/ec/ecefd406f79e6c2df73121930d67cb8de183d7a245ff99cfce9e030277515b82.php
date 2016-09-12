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
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_56f619a6de69103c0fb48338b0068cca320991a09c738154f425fdcc15db73bd = $this->env->getExtension("native_profiler");
        $__internal_56f619a6de69103c0fb48338b0068cca320991a09c738154f425fdcc15db73bd->enter($__internal_56f619a6de69103c0fb48338b0068cca320991a09c738154f425fdcc15db73bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56f619a6de69103c0fb48338b0068cca320991a09c738154f425fdcc15db73bd->leave($__internal_56f619a6de69103c0fb48338b0068cca320991a09c738154f425fdcc15db73bd_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e0ae66268cd675a8fccd3bd9da9edaa5ef1126d3d8efe3c7fd35b88b455c7c60 = $this->env->getExtension("native_profiler");
        $__internal_e0ae66268cd675a8fccd3bd9da9edaa5ef1126d3d8efe3c7fd35b88b455c7c60->enter($__internal_e0ae66268cd675a8fccd3bd9da9edaa5ef1126d3d8efe3c7fd35b88b455c7c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"../../../../web/public/bootstrap-3.3.7-dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../../../../web/public/style/style.css\" rel=\"stylesheet\">
";
        
        $__internal_e0ae66268cd675a8fccd3bd9da9edaa5ef1126d3d8efe3c7fd35b88b455c7c60->leave($__internal_e0ae66268cd675a8fccd3bd9da9edaa5ef1126d3d8efe3c7fd35b88b455c7c60_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_da5bca2bf160b07ceeea372205066de23ae64451762c7ab59372df9878dbf26e = $this->env->getExtension("native_profiler");
        $__internal_da5bca2bf160b07ceeea372205066de23ae64451762c7ab59372df9878dbf26e->enter($__internal_da5bca2bf160b07ceeea372205066de23ae64451762c7ab59372df9878dbf26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <h1>Edition des articles</h1>

    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edition\" />
    ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("articles_index");
        echo "\">Retourner a la liste</a>
        </li>
        <li>
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_da5bca2bf160b07ceeea372205066de23ae64451762c7ab59372df9878dbf26e->leave($__internal_da5bca2bf160b07ceeea372205066de23ae64451762c7ab59372df9878dbf26e_prof);

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
        return array (  87 => 25,  82 => 23,  76 => 20,  69 => 16,  64 => 14,  60 => 13,  56 => 11,  50 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="../../../../web/public/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="../../../../web/public/style/style.css" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block body %}*/
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
/* {% endblock %}*/
/* */
