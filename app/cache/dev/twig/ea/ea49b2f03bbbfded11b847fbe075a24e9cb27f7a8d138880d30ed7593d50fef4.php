<?php

/* articles/show.html.twig */
class __TwigTemplate_4307943ad611c7aaa6a35b6243c04bf33e5ab0d2fe4b60daf2837c10f974a607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/show.html.twig", 1);
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
        $__internal_98bad3d77e529641c61e4652e8f201c0bfb6f39a489e6eb1339651d81b772036 = $this->env->getExtension("native_profiler");
        $__internal_98bad3d77e529641c61e4652e8f201c0bfb6f39a489e6eb1339651d81b772036->enter($__internal_98bad3d77e529641c61e4652e8f201c0bfb6f39a489e6eb1339651d81b772036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98bad3d77e529641c61e4652e8f201c0bfb6f39a489e6eb1339651d81b772036->leave($__internal_98bad3d77e529641c61e4652e8f201c0bfb6f39a489e6eb1339651d81b772036_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b618a0d633a22f9e94777c9806f62fd91de9c5ddb0f64b647f7ed5415d91ca7b = $this->env->getExtension("native_profiler");
        $__internal_b618a0d633a22f9e94777c9806f62fd91de9c5ddb0f64b647f7ed5415d91ca7b->enter($__internal_b618a0d633a22f9e94777c9806f62fd91de9c5ddb0f64b647f7ed5415d91ca7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    <link href=\"../../../../web/public/bootstrap-3.3.7-dist/css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"../../../../web/public/style/style.css\" rel=\"stylesheet\">
";
        
        $__internal_b618a0d633a22f9e94777c9806f62fd91de9c5ddb0f64b647f7ed5415d91ca7b->leave($__internal_b618a0d633a22f9e94777c9806f62fd91de9c5ddb0f64b647f7ed5415d91ca7b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c704835a92f6cf37ac7b424dd2e92cb0a79f4c1e118fcde122eff7f79046b97b = $this->env->getExtension("native_profiler");
        $__internal_c704835a92f6cf37ac7b424dd2e92cb0a79f4c1e118fcde122eff7f79046b97b->enter($__internal_c704835a92f6cf37ac7b424dd2e92cb0a79f4c1e118fcde122eff7f79046b97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    <h1>Article</h1>
    
    <ul>
        <li>
            <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("articles_index");
        echo "\">Retour vers la liste</a>
        </li>
        <li>
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edition</a>
        </li>
        <li>
            ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Titre</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Contenu</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Chapeau</th>
                <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "chapeau", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
            
    <h1>Commentaires</h1>
    <table class=\"table\">
    ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 52
            echo "            <tr>
                <th>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "creationDate", array()), "m/d/Y"), "html", null, true);
            echo "</th>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()), "html", null, true);
            echo "</td>
            </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </table>
    
    ";
        // line 60
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'form_start');
        echo "
        ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Creation\" />
    ";
        // line 63
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'form_end');
        echo "

    
";
        
        $__internal_c704835a92f6cf37ac7b424dd2e92cb0a79f4c1e118fcde122eff7f79046b97b->leave($__internal_c704835a92f6cf37ac7b424dd2e92cb0a79f4c1e118fcde122eff7f79046b97b_prof);

    }

    public function getTemplateName()
    {
        return "articles/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 63,  153 => 61,  149 => 60,  145 => 58,  136 => 55,  132 => 54,  128 => 53,  125 => 52,  121 => 51,  111 => 44,  104 => 40,  97 => 36,  90 => 32,  79 => 24,  74 => 22,  68 => 19,  62 => 16,  56 => 12,  50 => 11,  41 => 5,  35 => 4,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {% block stylesheets %}*/
/*     <link href="../../../../web/public/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">*/
/*     <link href="../../../../web/public/style/style.css" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block body %}*/
/*     <h1>Article</h1>*/
/*     */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('articles_index') }}">Retour vers la liste</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('articles_edit', { 'id': article.id }) }}">Edition</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Supprimer">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* */
/*     <table class="table">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ article.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Titre</th>*/
/*                 <td>{{ article.titre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Contenu</th>*/
/*                 <td>{{ article.contenu }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Chapeau</th>*/
/*                 <td>{{ article.chapeau }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/*             */
/*     <h1>Commentaires</h1>*/
/*     <table class="table">*/
/*     {% for comment in article.comments %}*/
/*             <tr>*/
/*                 <th>{{ comment.creationDate|date("m/d/Y") }}</th>*/
/*                 <td>{{ comment.content }}</td>*/
/*                 <td>{{ comment.author.username }}</td>*/
/*             </tr>*/
/*     {% endfor %}*/
/*     </table>*/
/*     */
/*     {{ form_start(comment_form) }}*/
/*         {{ form_widget(comment_form) }}*/
/*         <input type="submit" value="Creation" />*/
/*     {{ form_end(comment_form) }}*/
/* */
/*     */
/* {% endblock %}*/
/* */
