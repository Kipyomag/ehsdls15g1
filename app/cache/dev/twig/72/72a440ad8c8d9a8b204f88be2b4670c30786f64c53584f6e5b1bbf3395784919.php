<?php

/* newsletter/show.html.twig */
class __TwigTemplate_58a17728d753347829f62003796a33bacff755e96045e7c98de8f663bf0b175a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "newsletter/show.html.twig", 1);
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
        $__internal_bffd0051ffcfbd30771b2fd776d7983226fe8f5b90f81ae85ecc3eef454fe4c3 = $this->env->getExtension("native_profiler");
        $__internal_bffd0051ffcfbd30771b2fd776d7983226fe8f5b90f81ae85ecc3eef454fe4c3->enter($__internal_bffd0051ffcfbd30771b2fd776d7983226fe8f5b90f81ae85ecc3eef454fe4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "newsletter/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bffd0051ffcfbd30771b2fd776d7983226fe8f5b90f81ae85ecc3eef454fe4c3->leave($__internal_bffd0051ffcfbd30771b2fd776d7983226fe8f5b90f81ae85ecc3eef454fe4c3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_657b4009d5ad5fb702b1992cc44a6bf9cd9edaa882ab2fc659a09a26542d68b6 = $this->env->getExtension("native_profiler");
        $__internal_657b4009d5ad5fb702b1992cc44a6bf9cd9edaa882ab2fc659a09a26542d68b6->enter($__internal_657b4009d5ad5fb702b1992cc44a6bf9cd9edaa882ab2fc659a09a26542d68b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_657b4009d5ad5fb702b1992cc44a6bf9cd9edaa882ab2fc659a09a26542d68b6->leave($__internal_657b4009d5ad5fb702b1992cc44a6bf9cd9edaa882ab2fc659a09a26542d68b6_prof);

    }

    public function getTemplateName()
    {
        return "newsletter/show.html.twig";
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
