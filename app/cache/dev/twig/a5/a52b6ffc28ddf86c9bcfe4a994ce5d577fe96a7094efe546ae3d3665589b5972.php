<?php

/* :users:login.html.twig */
class __TwigTemplate_2287eecfde1a58c19443cfe27f02b339d8d2e6ed188cd58c34073338f47e28ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:login.html.twig", 1);
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
        $__internal_149dacf73ab90201be10b8b9cf561cfaa6f5aea8648da0fe948c0bf99669c9ec = $this->env->getExtension("native_profiler");
        $__internal_149dacf73ab90201be10b8b9cf561cfaa6f5aea8648da0fe948c0bf99669c9ec->enter($__internal_149dacf73ab90201be10b8b9cf561cfaa6f5aea8648da0fe948c0bf99669c9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_149dacf73ab90201be10b8b9cf561cfaa6f5aea8648da0fe948c0bf99669c9ec->leave($__internal_149dacf73ab90201be10b8b9cf561cfaa6f5aea8648da0fe948c0bf99669c9ec_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_88fb90fed6b4345e2426e5f70844ecd580bb3040bf88485849edc141c3e20b71 = $this->env->getExtension("native_profiler");
        $__internal_88fb90fed6b4345e2426e5f70844ecd580bb3040bf88485849edc141c3e20b71->enter($__internal_88fb90fed6b4345e2426e5f70844ecd580bb3040bf88485849edc141c3e20b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connexion";
        
        $__internal_88fb90fed6b4345e2426e5f70844ecd580bb3040bf88485849edc141c3e20b71->leave($__internal_88fb90fed6b4345e2426e5f70844ecd580bb3040bf88485849edc141c3e20b71_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3f4a0bc8c088304c07532eb7dcebc9f036af835a450f27090359aebd1d3b4d55 = $this->env->getExtension("native_profiler");
        $__internal_3f4a0bc8c088304c07532eb7dcebc9f036af835a450f27090359aebd1d3b4d55->enter($__internal_3f4a0bc8c088304c07532eb7dcebc9f036af835a450f27090359aebd1d3b4d55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <tr align=\"center\"><td><label for=\"username\">E-mail:</label></td></tr>
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
        
        $__internal_3f4a0bc8c088304c07532eb7dcebc9f036af835a450f27090359aebd1d3b4d55->leave($__internal_3f4a0bc8c088304c07532eb7dcebc9f036af835a450f27090359aebd1d3b4d55_prof);

    }

    public function getTemplateName()
    {
        return ":users:login.html.twig";
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
/*                 <tr align="center"><td><label for="username">E-mail:</label></td></tr>*/
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
