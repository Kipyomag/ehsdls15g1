<?php

/* :newsletter:edit.html.twig */
class __TwigTemplate_9b0903e3e0989290af76c3760c8d40745013e9b2f7c996d95bc4b90199ec9b3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":newsletter:edit.html.twig", 1);
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
        $__internal_88ad202d80f618b0e728cae9cdbb9e0f5db3883da4e557a34e1ad2fc4847a5fc = $this->env->getExtension("native_profiler");
        $__internal_88ad202d80f618b0e728cae9cdbb9e0f5db3883da4e557a34e1ad2fc4847a5fc->enter($__internal_88ad202d80f618b0e728cae9cdbb9e0f5db3883da4e557a34e1ad2fc4847a5fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":newsletter:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_88ad202d80f618b0e728cae9cdbb9e0f5db3883da4e557a34e1ad2fc4847a5fc->leave($__internal_88ad202d80f618b0e728cae9cdbb9e0f5db3883da4e557a34e1ad2fc4847a5fc_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc746e1b224faac5595e8594b5d5a3d4fa16f3d8641651ac4873aa86f83855ce = $this->env->getExtension("native_profiler");
        $__internal_dc746e1b224faac5595e8594b5d5a3d4fa16f3d8641651ac4873aa86f83855ce->enter($__internal_dc746e1b224faac5595e8594b5d5a3d4fa16f3d8641651ac4873aa86f83855ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Newsletter edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("newsletter_index");
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
        
        $__internal_dc746e1b224faac5595e8594b5d5a3d4fa16f3d8641651ac4873aa86f83855ce->leave($__internal_dc746e1b224faac5595e8594b5d5a3d4fa16f3d8641651ac4873aa86f83855ce_prof);

    }

    public function getTemplateName()
    {
        return ":newsletter:edit.html.twig";
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
/*     <h1>Newsletter edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('newsletter_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
