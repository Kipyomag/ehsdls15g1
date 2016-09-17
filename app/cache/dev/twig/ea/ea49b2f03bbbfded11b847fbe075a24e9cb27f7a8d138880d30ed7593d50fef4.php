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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_566fcc87a85041aa43c8ba3913c61afc0049d62a61afc1b06a0ea65f857aaff9 = $this->env->getExtension("native_profiler");
        $__internal_566fcc87a85041aa43c8ba3913c61afc0049d62a61afc1b06a0ea65f857aaff9->enter($__internal_566fcc87a85041aa43c8ba3913c61afc0049d62a61afc1b06a0ea65f857aaff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_566fcc87a85041aa43c8ba3913c61afc0049d62a61afc1b06a0ea65f857aaff9->leave($__internal_566fcc87a85041aa43c8ba3913c61afc0049d62a61afc1b06a0ea65f857aaff9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b7ece40389ed7a5cf38638a4a37b530b5a498f1e0f55c346e7945c0dc8e39f65 = $this->env->getExtension("native_profiler");
        $__internal_b7ece40389ed7a5cf38638a4a37b530b5a498f1e0f55c346e7945c0dc8e39f65->enter($__internal_b7ece40389ed7a5cf38638a4a37b530b5a498f1e0f55c346e7945c0dc8e39f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Article</h1>
    <div>
        <ul>
            <li>
                <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("articles_index");
        echo "\">Retour vers la liste</a>
            </li>
            <li>
                <a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\">Edition</a>
            </li>
            <li>
                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" value=\"Supprimer\">
                ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
        </ul>

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>Id</th>
                    <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Titre</th>
                    <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Contenu</th>
                    <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "contenu", array()), "html", null, true);
        echo "</td>
                </tr>
                <tr>
                    <th>Chapeau</th>
                    <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "chapeau", array()), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>
                
        <h1>Commentaires</h1>
        <table class=\"table\">
        ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "comments", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 44
            echo "                <tr>
                    <th>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comment"], "creationDate", array()), "m/d/Y"), "html", null, true);
            echo "</th>
                    <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "author", array()), "username", array()), "html", null, true);
            echo "</td>
                </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </table>
        
        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'form_start');
        echo "
            ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'widget');
        echo "
            <input type=\"submit\" value=\"Creation\" />
        ";
        // line 55
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["comment_form"]) ? $context["comment_form"] : $this->getContext($context, "comment_form")), 'form_end');
        echo "

    </div>
";
        
        $__internal_b7ece40389ed7a5cf38638a4a37b530b5a498f1e0f55c346e7945c0dc8e39f65->leave($__internal_b7ece40389ed7a5cf38638a4a37b530b5a498f1e0f55c346e7945c0dc8e39f65_prof);

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
        return array (  142 => 55,  137 => 53,  133 => 52,  129 => 50,  120 => 47,  116 => 46,  112 => 45,  109 => 44,  105 => 43,  95 => 36,  88 => 32,  81 => 28,  74 => 24,  63 => 16,  58 => 14,  52 => 11,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Article</h1>*/
/*     <div>*/
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('articles_index') }}">Retour vers la liste</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('articles_edit', { 'id': article.id }) }}">Edition</a>*/
/*             </li>*/
/*             <li>*/
/*                 {{ form_start(delete_form) }}*/
/*                     <input type="submit" value="Supprimer">*/
/*                 {{ form_end(delete_form) }}*/
/*             </li>*/
/*         </ul>*/
/* */
/*         <table class="table">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <td>{{ article.id }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Titre</th>*/
/*                     <td>{{ article.titre }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Contenu</th>*/
/*                     <td>{{ article.contenu }}</td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <th>Chapeau</th>*/
/*                     <td>{{ article.chapeau }}</td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/*                 */
/*         <h1>Commentaires</h1>*/
/*         <table class="table">*/
/*         {% for comment in article.comments %}*/
/*                 <tr>*/
/*                     <th>{{ comment.creationDate|date("m/d/Y") }}</th>*/
/*                     <td>{{ comment.content }}</td>*/
/*                     <td>{{ comment.author.username }}</td>*/
/*                 </tr>*/
/*         {% endfor %}*/
/*         </table>*/
/*         */
/*         {{ form_start(comment_form) }}*/
/*             {{ form_widget(comment_form) }}*/
/*             <input type="submit" value="Creation" />*/
/*         {{ form_end(comment_form) }}*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
