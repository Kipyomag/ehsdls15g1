<?php

/* users/index.html.twig */
class __TwigTemplate_e09ecbd35580d0491c520ad92d022703567a724bc0f42090197fc9e3aa32293f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_891e320af546b1154c07ca2de1426cb5028ff9fb6b37c3d810fde94c0245fd29 = $this->env->getExtension("native_profiler");
        $__internal_891e320af546b1154c07ca2de1426cb5028ff9fb6b37c3d810fde94c0245fd29->enter($__internal_891e320af546b1154c07ca2de1426cb5028ff9fb6b37c3d810fde94c0245fd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_891e320af546b1154c07ca2de1426cb5028ff9fb6b37c3d810fde94c0245fd29->leave($__internal_891e320af546b1154c07ca2de1426cb5028ff9fb6b37c3d810fde94c0245fd29_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b8972fedb39b7e0593c274629efdccea2a3439c649e92f93f64ba63a145f80b9 = $this->env->getExtension("native_profiler");
        $__internal_b8972fedb39b7e0593c274629efdccea2a3439c649e92f93f64ba63a145f80b9->enter($__internal_b8972fedb39b7e0593c274629efdccea2a3439c649e92f93f64ba63a145f80b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des membres";
        
        $__internal_b8972fedb39b7e0593c274629efdccea2a3439c649e92f93f64ba63a145f80b9->leave($__internal_b8972fedb39b7e0593c274629efdccea2a3439c649e92f93f64ba63a145f80b9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b65360be3dc339bb1373938784cc97fcdca0e9d6f20a62c721d54079bc7b1762 = $this->env->getExtension("native_profiler");
        $__internal_b65360be3dc339bb1373938784cc97fcdca0e9d6f20a62c721d54079bc7b1762->enter($__internal_b65360be3dc339bb1373938784cc97fcdca0e9d6f20a62c721d54079bc7b1762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Liste des membres</h1>
        <div class=\"listeMembre\">
            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Email</th>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Genre</th>
                        <th>Telephone</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th>Region</th>
                        <th>Pays</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 27
            echo "                    <tr>
                        <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "</a></td>
                        <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "genre", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "telephone", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "adresse", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "ville", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "region", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "pays", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "role", array()), "html", null, true);
            echo "</td>
                        <td>
        
                            <ul>
                                <li>
                                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Montrer</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">Edition</a>
                                </li>
                            </ul>
                        </td>
                    </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
</div>
    <ul>
        <li>
            <a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("users_new");
        echo "\">Creer un nouvel utilisateur</a>
        </li>
    </ul>
";
        
        $__internal_b65360be3dc339bb1373938784cc97fcdca0e9d6f20a62c721d54079bc7b1762->leave($__internal_b65360be3dc339bb1373938784cc97fcdca0e9d6f20a62c721d54079bc7b1762_prof);

    }

    public function getTemplateName()
    {
        return "users/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 57,  150 => 52,  138 => 46,  132 => 43,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  108 => 34,  104 => 33,  100 => 32,  96 => 31,  92 => 30,  88 => 29,  82 => 28,  79 => 27,  75 => 26,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Liste des membres{% endblock %}*/
/* */
/* {% block body %}*/
/*     <h1>Liste des membres</h1>*/
/*         <div class="listeMembre">*/
/*             <table>*/
/*                 <thead>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <th>Email</th>*/
/*                         <th>Nom</th>*/
/*                         <th>Prenom</th>*/
/*                         <th>Genre</th>*/
/*                         <th>Telephone</th>*/
/*                         <th>Adresse</th>*/
/*                         <th>Ville</th>*/
/*                         <th>Region</th>*/
/*                         <th>Pays</th>*/
/*                         <th>Role</th>*/
/*                         <th>Actions</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                 {% for user in users %}*/
/*                     <tr>*/
/*                         <td><a href="{{ path('users_show', { 'id': user.id }) }}">{{ user.id }}</a></td>*/
/*                         <td>{{ user.email }}</td>*/
/*                         <td>{{ user.nom }}</td>*/
/*                         <td>{{ user.prenom }}</td>*/
/*                         <td>{{ user.genre }}</td>*/
/*                         <td>{{ user.telephone }}</td>*/
/*                         <td>{{ user.adresse }}</td>*/
/*                         <td>{{ user.ville }}</td>*/
/*                         <td>{{ user.region }}</td>*/
/*                         <td>{{ user.pays }}</td>*/
/*                         <td>{{ user.role }}</td>*/
/*                         <td>*/
/*         */
/*                             <ul>*/
/*                                 <li>*/
/*                                     <a href="{{ path('users_show', { 'id': user.id }) }}">Montrer</a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ path('users_edit', { 'id': user.id }) }}">Edition</a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </td>*/
/*                     </tr>*/
/*             {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* </div>*/
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('users_new') }}">Creer un nouvel utilisateur</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
