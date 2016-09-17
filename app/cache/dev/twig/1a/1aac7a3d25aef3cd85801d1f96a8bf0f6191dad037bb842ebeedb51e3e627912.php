<?php

/* :newsletter:show.html.twig */
class __TwigTemplate_82de152cee6d0138d280377844cf946f791573088f1a1de73270d1ce386a657d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":newsletter:show.html.twig", 1);
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
        $__internal_2d431a160ac9f22a1306d5837a4976973eee32391d41820d16bcbf4b36603bb6 = $this->env->getExtension("native_profiler");
        $__internal_2d431a160ac9f22a1306d5837a4976973eee32391d41820d16bcbf4b36603bb6->enter($__internal_2d431a160ac9f22a1306d5837a4976973eee32391d41820d16bcbf4b36603bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":newsletter:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d431a160ac9f22a1306d5837a4976973eee32391d41820d16bcbf4b36603bb6->leave($__internal_2d431a160ac9f22a1306d5837a4976973eee32391d41820d16bcbf4b36603bb6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_495da84afb8a847be90f0977670389272cceb7d95573f0cb32efa82ffb153f18 = $this->env->getExtension("native_profiler");
        $__internal_495da84afb8a847be90f0977670389272cceb7d95573f0cb32efa82ffb153f18->enter($__internal_495da84afb8a847be90f0977670389272cceb7d95573f0cb32efa82ffb153f18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Newsletter</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["newsletter"]) ? $context["newsletter"] : $this->getContext($context, "newsletter")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["newsletter"]) ? $context["newsletter"] : $this->getContext($context, "newsletter")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("newsletter_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_edit", array("id" => $this->getAttribute((isset($context["newsletter"]) ? $context["newsletter"] : $this->getContext($context, "newsletter")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_495da84afb8a847be90f0977670389272cceb7d95573f0cb32efa82ffb153f18->leave($__internal_495da84afb8a847be90f0977670389272cceb7d95573f0cb32efa82ffb153f18_prof);

    }

    public function getTemplateName()
    {
        return ":newsletter:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Newsletter</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ newsletter.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ newsletter.email }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('newsletter_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('newsletter_edit', { 'id': newsletter.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
