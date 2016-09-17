<?php

/* users/show.html.twig */
class __TwigTemplate_f7bc31ab290abd063647b0d11bba6f6227ac41f2bcd1957b7502c2824d5daa43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Profil";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div>
        <h1>Profil</h1>
            <div class=\"formInscription\">
                <table class=\"tableFieldset\">
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "prenom", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "genre", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telephone</th>
                            <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "telephone", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Adresse</th>
                            <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "adresse", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Ville</th>
                            <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "ville", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Region</th>
                            <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "region", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Pays</th>
                            <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "pays", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "role", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </table>
                <ul>
                    <li>
                        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">Edition</a>
                    </li>
                </ul>
            </div>
        </div>

    
";
    }

    public function getTemplateName()
    {
        return "users/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 57,  116 => 52,  109 => 48,  102 => 44,  95 => 40,  88 => 36,  81 => 32,  74 => 28,  67 => 24,  60 => 20,  53 => 16,  46 => 12,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Profil{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <h1>Profil</h1>*/
/*             <div class="formInscription">*/
/*                 <table class="tableFieldset">*/
/*                         <tr>*/
/*                             <th>Id</th>*/
/*                             <td>{{ user.id }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Email</th>*/
/*                             <td>{{ user.email }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Nom</th>*/
/*                             <td>{{ user.nom }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Prenom</th>*/
/*                             <td>{{ user.prenom }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Genre</th>*/
/*                             <td>{{ user.genre }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Telephone</th>*/
/*                             <td>{{ user.telephone }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Adresse</th>*/
/*                             <td>{{ user.adresse }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Ville</th>*/
/*                             <td>{{ user.ville }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Region</th>*/
/*                             <td>{{ user.region }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Pays</th>*/
/*                             <td>{{ user.pays }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Role</th>*/
/*                             <td>{{ user.role }}</td>*/
/*                         </tr>*/
/*                     </table>*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('users_edit', { 'id': user.id }) }}">Edition</a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/* */
/*     */
/* {% endblock %}*/
/* */
