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
        $__internal_cd50a22deee673545d888d4a1383bd96dbe3aaf8af4f5ba2fa4c63207ab8c9b1 = $this->env->getExtension("native_profiler");
        $__internal_cd50a22deee673545d888d4a1383bd96dbe3aaf8af4f5ba2fa4c63207ab8c9b1->enter($__internal_cd50a22deee673545d888d4a1383bd96dbe3aaf8af4f5ba2fa4c63207ab8c9b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":newsletter:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd50a22deee673545d888d4a1383bd96dbe3aaf8af4f5ba2fa4c63207ab8c9b1->leave($__internal_cd50a22deee673545d888d4a1383bd96dbe3aaf8af4f5ba2fa4c63207ab8c9b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_232d269f9b4c242ba331d9963d2163e577d0c6805b00c57d08d5bc772196ed54 = $this->env->getExtension("native_profiler");
        $__internal_232d269f9b4c242ba331d9963d2163e577d0c6805b00c57d08d5bc772196ed54->enter($__internal_232d269f9b4c242ba331d9963d2163e577d0c6805b00c57d08d5bc772196ed54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_232d269f9b4c242ba331d9963d2163e577d0c6805b00c57d08d5bc772196ed54->leave($__internal_232d269f9b4c242ba331d9963d2163e577d0c6805b00c57d08d5bc772196ed54_prof);

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
