<?php

/* :comment:show.html.twig */
class __TwigTemplate_47587d734b794fbb8f4ea28c56aa1908a13fdcb2e73e93b124b02ec471ff066e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":comment:show.html.twig", 1);
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
        $__internal_f89d9f592cd00e50d34045ace9fa0b7bcf78fdf0b14d62f1271a89e12055b8ad = $this->env->getExtension("native_profiler");
        $__internal_f89d9f592cd00e50d34045ace9fa0b7bcf78fdf0b14d62f1271a89e12055b8ad->enter($__internal_f89d9f592cd00e50d34045ace9fa0b7bcf78fdf0b14d62f1271a89e12055b8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":comment:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f89d9f592cd00e50d34045ace9fa0b7bcf78fdf0b14d62f1271a89e12055b8ad->leave($__internal_f89d9f592cd00e50d34045ace9fa0b7bcf78fdf0b14d62f1271a89e12055b8ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e0d4f90ef08ee5d36519a877f67cfbde35aa876045adb79e969b798bab8c481e = $this->env->getExtension("native_profiler");
        $__internal_e0d4f90ef08ee5d36519a877f67cfbde35aa876045adb79e969b798bab8c481e->enter($__internal_e0d4f90ef08ee5d36519a877f67cfbde35aa876045adb79e969b798bab8c481e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Comment</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Content</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "content", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Creationdate</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "creationDate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "creationDate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("comment_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_edit", array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e0d4f90ef08ee5d36519a877f67cfbde35aa876045adb79e969b798bab8c481e->leave($__internal_e0d4f90ef08ee5d36519a877f67cfbde35aa876045adb79e969b798bab8c481e_prof);

    }

    public function getTemplateName()
    {
        return ":comment:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  86 => 31,  80 => 28,  74 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Comment</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ comment.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Content</th>*/
/*                 <td>{{ comment.content }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Creationdate</th>*/
/*                 <td>{% if comment.creationDate %}{{ comment.creationDate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('comment_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('comment_edit', { 'id': comment.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
