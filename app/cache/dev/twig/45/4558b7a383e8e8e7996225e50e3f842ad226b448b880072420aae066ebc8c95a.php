<?php

/* articles/edit.html.twig */
class __TwigTemplate_2a2d4c1be257ada0781b2e64104f17e3a0d8210ac242ac57b7210c5ba4c1c2da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/edit.html.twig", 1);
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
        $__internal_3fdd68175c883348317ac92312a969e5c606cdc58918a0625223b2c98d51c9ac = $this->env->getExtension("native_profiler");
        $__internal_3fdd68175c883348317ac92312a969e5c606cdc58918a0625223b2c98d51c9ac->enter($__internal_3fdd68175c883348317ac92312a969e5c606cdc58918a0625223b2c98d51c9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fdd68175c883348317ac92312a969e5c606cdc58918a0625223b2c98d51c9ac->leave($__internal_3fdd68175c883348317ac92312a969e5c606cdc58918a0625223b2c98d51c9ac_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_da76b1602335682918aae46bb554123fdb0e6b7e9f216b6d2a092862a31834f6 = $this->env->getExtension("native_profiler");
        $__internal_da76b1602335682918aae46bb554123fdb0e6b7e9f216b6d2a092862a31834f6->enter($__internal_da76b1602335682918aae46bb554123fdb0e6b7e9f216b6d2a092862a31834f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"../../../../web/public/bootstrap-3.3.7-dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../../../../web/public/style/style.css\" rel=\"stylesheet\">
";
        
        $__internal_da76b1602335682918aae46bb554123fdb0e6b7e9f216b6d2a092862a31834f6->leave($__internal_da76b1602335682918aae46bb554123fdb0e6b7e9f216b6d2a092862a31834f6_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f68ea0fa7ae0b42a80ed4d95213bce4ea880782e3c93fd063bbf2e7d6599d7a = $this->env->getExtension("native_profiler");
        $__internal_2f68ea0fa7ae0b42a80ed4d95213bce4ea880782e3c93fd063bbf2e7d6599d7a->enter($__internal_2f68ea0fa7ae0b42a80ed4d95213bce4ea880782e3c93fd063bbf2e7d6599d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2f68ea0fa7ae0b42a80ed4d95213bce4ea880782e3c93fd063bbf2e7d6599d7a->leave($__internal_2f68ea0fa7ae0b42a80ed4d95213bce4ea880782e3c93fd063bbf2e7d6599d7a_prof);

    }

    public function getTemplateName()
    {
        return "articles/edit.html.twig";
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
