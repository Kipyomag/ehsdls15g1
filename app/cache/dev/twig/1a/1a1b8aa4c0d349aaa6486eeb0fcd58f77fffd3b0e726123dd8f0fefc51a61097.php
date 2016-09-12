<?php

/* :comment:edit.html.twig */
class __TwigTemplate_2e7f6adba2810dc4071b5a286b61802ac67e0afb031f30c524d599b24aba3365 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:edit.html.twig", 1);
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
        $__internal_86b7a93cc355a4e5cff20259335d7a5376bed43ae2e22a21c1614648c2d94300 = $this->env->getExtension("native_profiler");
        $__internal_86b7a93cc355a4e5cff20259335d7a5376bed43ae2e22a21c1614648c2d94300->enter($__internal_86b7a93cc355a4e5cff20259335d7a5376bed43ae2e22a21c1614648c2d94300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86b7a93cc355a4e5cff20259335d7a5376bed43ae2e22a21c1614648c2d94300->leave($__internal_86b7a93cc355a4e5cff20259335d7a5376bed43ae2e22a21c1614648c2d94300_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6dad2826ac342350e2b12a2210fda3b05f16aa33e4c28e092b5919bb0e2662f1 = $this->env->getExtension("native_profiler");
        $__internal_6dad2826ac342350e2b12a2210fda3b05f16aa33e4c28e092b5919bb0e2662f1->enter($__internal_6dad2826ac342350e2b12a2210fda3b05f16aa33e4c28e092b5919bb0e2662f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_6dad2826ac342350e2b12a2210fda3b05f16aa33e4c28e092b5919bb0e2662f1->leave($__internal_6dad2826ac342350e2b12a2210fda3b05f16aa33e4c28e092b5919bb0e2662f1_prof);

    }

    public function getTemplateName()
    {
        return ":comment:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Comment edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('comment_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
