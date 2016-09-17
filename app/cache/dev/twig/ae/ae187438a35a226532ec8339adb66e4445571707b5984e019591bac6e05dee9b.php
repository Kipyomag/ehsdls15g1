<?php

/* users/show.html.twig */
class __TwigTemplate_a04f17436f80e1342088631acbfa2cb7651a9ec31b8e8b8565d95f24b8adea5f extends Twig_Template
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
        $__internal_c3334d4ca39b90cd4652859b36ee69d5da7bfaa40917f3968311197e0d74d6ab = $this->env->getExtension("native_profiler");
        $__internal_c3334d4ca39b90cd4652859b36ee69d5da7bfaa40917f3968311197e0d74d6ab->enter($__internal_c3334d4ca39b90cd4652859b36ee69d5da7bfaa40917f3968311197e0d74d6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3334d4ca39b90cd4652859b36ee69d5da7bfaa40917f3968311197e0d74d6ab->leave($__internal_c3334d4ca39b90cd4652859b36ee69d5da7bfaa40917f3968311197e0d74d6ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd8a3f551dd4ba8495e6545db661056147afc3770567194dd656f5e987cb11a0 = $this->env->getExtension("native_profiler");
        $__internal_dd8a3f551dd4ba8495e6545db661056147afc3770567194dd656f5e987cb11a0->enter($__internal_dd8a3f551dd4ba8495e6545db661056147afc3770567194dd656f5e987cb11a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Profil";
        
        $__internal_dd8a3f551dd4ba8495e6545db661056147afc3770567194dd656f5e987cb11a0->leave($__internal_dd8a3f551dd4ba8495e6545db661056147afc3770567194dd656f5e987cb11a0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f62d0b6e7387d9fdcefecb791d4e5a98ed702233bcb2a3c6f32f8eddfb796a8 = $this->env->getExtension("native_profiler");
        $__internal_1f62d0b6e7387d9fdcefecb791d4e5a98ed702233bcb2a3c6f32f8eddfb796a8->enter($__internal_1f62d0b6e7387d9fdcefecb791d4e5a98ed702233bcb2a3c6f32f8eddfb796a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <h1>Profil</h1>
            <div class=\"formInscription\">
                <table class=\"tableFieldset\">
                        <tr>
                            <th>Id</th>
                            <td>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nom</th>
                            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nom", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Prenom</th>
                            <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "prenom", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Genre</th>
                            <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "genre", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Telephone</th>
                            <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "telephone", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Adresse</th>
                            <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "adresse", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Ville</th>
                            <td>";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "ville", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Region</th>
                            <td>";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "region", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Pays</th>
                            <td>";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pays", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <td>";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "role", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </table>
                <ul>
                    <li>
                        <a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">Edition</a>
                    </li>
                </ul>
            </div>
        </div>

    
";
        
        $__internal_1f62d0b6e7387d9fdcefecb791d4e5a98ed702233bcb2a3c6f32f8eddfb796a8->leave($__internal_1f62d0b6e7387d9fdcefecb791d4e5a98ed702233bcb2a3c6f32f8eddfb796a8_prof);

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
        return array (  139 => 57,  131 => 52,  124 => 48,  117 => 44,  110 => 40,  103 => 36,  96 => 32,  89 => 28,  82 => 24,  75 => 20,  68 => 16,  61 => 12,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
