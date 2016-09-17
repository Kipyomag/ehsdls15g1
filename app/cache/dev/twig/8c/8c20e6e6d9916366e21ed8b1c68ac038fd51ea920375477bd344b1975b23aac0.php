<?php

/* :newsletter:index.html.twig */
class __TwigTemplate_cee4d96c1ce28c605481f6bdcfe2e43e680dbe2e31cda4620bf8db49fd67ee38 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":newsletter:index.html.twig", 1);
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
        $__internal_8a31662baec7fa9ac58269c67fc4c920267be4aa1afb613c7d0021c0406ab7d1 = $this->env->getExtension("native_profiler");
        $__internal_8a31662baec7fa9ac58269c67fc4c920267be4aa1afb613c7d0021c0406ab7d1->enter($__internal_8a31662baec7fa9ac58269c67fc4c920267be4aa1afb613c7d0021c0406ab7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":newsletter:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a31662baec7fa9ac58269c67fc4c920267be4aa1afb613c7d0021c0406ab7d1->leave($__internal_8a31662baec7fa9ac58269c67fc4c920267be4aa1afb613c7d0021c0406ab7d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_40deb3ec04073c780c05e709fcf12a17e05178a0e9501dbcae37d5b09fd8dbc4 = $this->env->getExtension("native_profiler");
        $__internal_40deb3ec04073c780c05e709fcf12a17e05178a0e9501dbcae37d5b09fd8dbc4->enter($__internal_40deb3ec04073c780c05e709fcf12a17e05178a0e9501dbcae37d5b09fd8dbc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Newsletter list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["newsletters"]) ? $context["newsletters"] : $this->getContext($context, "newsletters")));
        foreach ($context['_seq'] as $context["_key"] => $context["newsletter"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_show", array("id" => $this->getAttribute($context["newsletter"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["newsletter"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_show", array("id" => $this->getAttribute($context["newsletter"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("newsletter_edit", array("id" => $this->getAttribute($context["newsletter"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['newsletter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("newsletter_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_40deb3ec04073c780c05e709fcf12a17e05178a0e9501dbcae37d5b09fd8dbc4->leave($__internal_40deb3ec04073c780c05e709fcf12a17e05178a0e9501dbcae37d5b09fd8dbc4_prof);

    }

    public function getTemplateName()
    {
        return ":newsletter:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Newsletter list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Email</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for newsletter in newsletters %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('newsletter_show', { 'id': newsletter.id }) }}">{{ newsletter.id }}</a></td>*/
/*                 <td>{{ newsletter.email }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('newsletter_show', { 'id': newsletter.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('newsletter_edit', { 'id': newsletter.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('newsletter_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
