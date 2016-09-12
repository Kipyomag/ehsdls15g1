<?php

/* users/login.html.twig */
class __TwigTemplate_1402c5a209933884ec207a91bb15e453c7e9f26e7f3054e577606281c292c8f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/login.html.twig", 1);
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
        $__internal_ec02c3697e8751dbf7d3f356c8435dee91f539615841913e970d76df0c6ccca5 = $this->env->getExtension("native_profiler");
        $__internal_ec02c3697e8751dbf7d3f356c8435dee91f539615841913e970d76df0c6ccca5->enter($__internal_ec02c3697e8751dbf7d3f356c8435dee91f539615841913e970d76df0c6ccca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec02c3697e8751dbf7d3f356c8435dee91f539615841913e970d76df0c6ccca5->leave($__internal_ec02c3697e8751dbf7d3f356c8435dee91f539615841913e970d76df0c6ccca5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a10d5185514e25cd14718b5e2761ec6f5f4a927f368aacd0f308a5d28206549 = $this->env->getExtension("native_profiler");
        $__internal_3a10d5185514e25cd14718b5e2761ec6f5f4a927f368aacd0f308a5d28206549->enter($__internal_3a10d5185514e25cd14718b5e2761ec6f5f4a927f368aacd0f308a5d28206549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_3a10d5185514e25cd14718b5e2761ec6f5f4a927f368aacd0f308a5d28206549->leave($__internal_3a10d5185514e25cd14718b5e2761ec6f5f4a927f368aacd0f308a5d28206549_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_22bd47728efa6c9e44800380fa0433df63a6f0245e2a95aa74b949219a919d39 = $this->env->getExtension("native_profiler");
        $__internal_22bd47728efa6c9e44800380fa0433df63a6f0245e2a95aa74b949219a919d39->enter($__internal_22bd47728efa6c9e44800380fa0433df63a6f0245e2a95aa74b949219a919d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div>
    <h1 align=\"center\">Connexion</h1>
        <div class=\"formInscription\">
            ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "            <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
            ";
        }
        // line 12
        echo "
            <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("users_login");
        echo "\" method=\"post\">
            <table class=\"tableFieldset\">
                <tr align=\"center\"><td><label for=\"username\">Nom d'utilisateur:</label></td></tr>
                <tr align=\"center\"><td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" /></td></tr>

                <tr align=\"center\"><td><label for=\"password\">Mot de passe:</label></td></tr>
                <tr align=\"center\"><td><input type=\"password\" id=\"password\" name=\"_password\" /></td></tr>

                <input type=\"hidden\" name=\"_target_path\" value=\"ehs_homepage\" />

                <tr align=\"center\"><td><button type=\"submit\" class=\"btn btn-primary\">Connexion</button></tr></td>
            </table>
            </form>
            <p align=\"center\"><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("users_passwordLost");
        echo "\">Mot de passe perdu?</a></p>
        </div>
    </div>

";
        
        $__internal_22bd47728efa6c9e44800380fa0433df63a6f0245e2a95aa74b949219a919d39->leave($__internal_22bd47728efa6c9e44800380fa0433df63a6f0245e2a95aa74b949219a919d39_prof);

    }

    public function getTemplateName()
    {
        return "users/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  75 => 16,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Connexion{% endblock %}*/
/* */
/* {% block body %}*/
/* <div>*/
/*     <h1 align="center">Connexion</h1>*/
/*         <div class="formInscription">*/
/*             {% if error %}*/
/*             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*             {% endif %}*/
/* */
/*             <form action="{{ path('users_login') }}" method="post">*/
/*             <table class="tableFieldset">*/
/*                 <tr align="center"><td><label for="username">Nom d'utilisateur:</label></td></tr>*/
/*                 <tr align="center"><td><input type="text" id="username" name="_username" value="{{ last_username }}" /></td></tr>*/
/* */
/*                 <tr align="center"><td><label for="password">Mot de passe:</label></td></tr>*/
/*                 <tr align="center"><td><input type="password" id="password" name="_password" /></td></tr>*/
/* */
/*                 <input type="hidden" name="_target_path" value="ehs_homepage" />*/
/* */
/*                 <tr align="center"><td><button type="submit" class="btn btn-primary">Connexion</button></tr></td>*/
/*             </table>*/
/*             </form>*/
/*             <p align="center"><a href="{{ path('users_passwordLost') }}">Mot de passe perdu?</a></p>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/*             */
