<?php

/* comment/index.html.twig */
class __TwigTemplate_9d4e61a2729ba51b42ba531be07d57720e11dcacb06c214839fb7575d81f83ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "comment/index.html.twig", 1);
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
        $__internal_6936c086d0f82e65df35e936fa592f4ea8568a0bc2f1e6e3689030a10e7b568e = $this->env->getExtension("native_profiler");
        $__internal_6936c086d0f82e65df35e936fa592f4ea8568a0bc2f1e6e3689030a10e7b568e->enter($__internal_6936c086d0f82e65df35e936fa592f4ea8568a0bc2f1e6e3689030a10e7b568e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "comment/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6936c086d0f82e65df35e936fa592f4ea8568a0bc2f1e6e3689030a10e7b568e->leave($__internal_6936c086d0f82e65df35e936fa592f4ea8568a0bc2f1e6e3689030a10e7b568e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f4a1d93488016905ced91bdec914819f0e2d54ff98c3d23f2c1e114890e3775 = $this->env->getExtension("native_profiler");
        $__internal_2f4a1d93488016905ced91bdec914819f0e2d54ff98c3d23f2c1e114890e3775->enter($__internal_2f4a1d93488016905ced91bdec914819f0e2d54ff98c3d23f2c1e114890e3775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Content</th>
                <th>Creationdate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : $this->getContext($context, "comments")));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_show", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            if ($this->getAttribute($context["comment"], "creationDate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_show", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_edit", array("id" => $this->getAttribute($context["comment"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("comment_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_2f4a1d93488016905ced91bdec914819f0e2d54ff98c3d23f2c1e114890e3775->leave($__internal_2f4a1d93488016905ced91bdec914819f0e2d54ff98c3d23f2c1e114890e3775_prof);

    }

    public function getTemplateName()
    {
        return "comment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  98 => 33,  86 => 27,  80 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Comment list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Content</th>*/
/*                 <th>Creationdate</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for comment in comments %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('comment_show', { 'id': comment.id }) }}">{{ comment.id }}</a></td>*/
/*                 <td>{{ comment.content }}</td>*/
/*                 <td>{% if comment.creationDate %}{{ comment.creationDate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('comment_show', { 'id': comment.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('comment_edit', { 'id': comment.id }) }}">edit</a>*/
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
/*             <a href="{{ path('comment_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
