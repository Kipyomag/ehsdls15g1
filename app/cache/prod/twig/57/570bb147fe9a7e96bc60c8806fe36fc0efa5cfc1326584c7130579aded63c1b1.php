<?php

/* articles/edit.html.twig */
class __TwigTemplate_74fa20c2f375e33c40fda1053ba3d9371f7467f30e695ba3d8997e178db05d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/edit.html.twig", 1);
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
        $__internal_51ef7f040c40befe178e9a93f65421381440aa10fcb3801409041520a6c9b5ed = $this->env->getExtension("native_profiler");
        $__internal_51ef7f040c40befe178e9a93f65421381440aa10fcb3801409041520a6c9b5ed->enter($__internal_51ef7f040c40befe178e9a93f65421381440aa10fcb3801409041520a6c9b5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_51ef7f040c40befe178e9a93f65421381440aa10fcb3801409041520a6c9b5ed->leave($__internal_51ef7f040c40befe178e9a93f65421381440aa10fcb3801409041520a6c9b5ed_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_79a50415d4f41478ec3f6b50d7c6fc18d813e79d884e4f46492f8312d6cfed54 = $this->env->getExtension("native_profiler");
        $__internal_79a50415d4f41478ec3f6b50d7c6fc18d813e79d884e4f46492f8312d6cfed54->enter($__internal_79a50415d4f41478ec3f6b50d7c6fc18d813e79d884e4f46492f8312d6cfed54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_79a50415d4f41478ec3f6b50d7c6fc18d813e79d884e4f46492f8312d6cfed54->leave($__internal_79a50415d4f41478ec3f6b50d7c6fc18d813e79d884e4f46492f8312d6cfed54_prof);

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
