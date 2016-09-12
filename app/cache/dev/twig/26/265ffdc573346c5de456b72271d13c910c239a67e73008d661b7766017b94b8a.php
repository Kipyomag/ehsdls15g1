<?php

/* users/login.html.twig */
class __TwigTemplate_ddbbe88777714f4b7f7937b6813814d8eb4815b035d17c19c39ac85225c0518c extends Twig_Template
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
        $__internal_94ffa5f18a3879215cde674681efebd7581bc8b787ac1bd1bcdfcfdda8320b02 = $this->env->getExtension("native_profiler");
        $__internal_94ffa5f18a3879215cde674681efebd7581bc8b787ac1bd1bcdfcfdda8320b02->enter($__internal_94ffa5f18a3879215cde674681efebd7581bc8b787ac1bd1bcdfcfdda8320b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94ffa5f18a3879215cde674681efebd7581bc8b787ac1bd1bcdfcfdda8320b02->leave($__internal_94ffa5f18a3879215cde674681efebd7581bc8b787ac1bd1bcdfcfdda8320b02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5970eb53a7d3e6b2053850d8a2d720b854e3819de677dfe2d33169e90bcd4e24 = $this->env->getExtension("native_profiler");
        $__internal_5970eb53a7d3e6b2053850d8a2d720b854e3819de677dfe2d33169e90bcd4e24->enter($__internal_5970eb53a7d3e6b2053850d8a2d720b854e3819de677dfe2d33169e90bcd4e24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_5970eb53a7d3e6b2053850d8a2d720b854e3819de677dfe2d33169e90bcd4e24->leave($__internal_5970eb53a7d3e6b2053850d8a2d720b854e3819de677dfe2d33169e90bcd4e24_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c791b8a0be7584452cce4a490b35f9069cc487d9178e56e66be586877d37d77 = $this->env->getExtension("native_profiler");
        $__internal_3c791b8a0be7584452cce4a490b35f9069cc487d9178e56e66be586877d37d77->enter($__internal_3c791b8a0be7584452cce4a490b35f9069cc487d9178e56e66be586877d37d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c791b8a0be7584452cce4a490b35f9069cc487d9178e56e66be586877d37d77->leave($__internal_3c791b8a0be7584452cce4a490b35f9069cc487d9178e56e66be586877d37d77_prof);

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
