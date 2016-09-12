<?php

/* users/passwordLost.html.twig */
class __TwigTemplate_b052198f153d08fdf6b932ed555ae94148e8dc331b16d24dc576043e26ea6108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/passwordLost.html.twig", 1);
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
        $__internal_78c415ddcda026247ba35c0f2d232996c31a37ede9099192f53bac6b310c77c1 = $this->env->getExtension("native_profiler");
        $__internal_78c415ddcda026247ba35c0f2d232996c31a37ede9099192f53bac6b310c77c1->enter($__internal_78c415ddcda026247ba35c0f2d232996c31a37ede9099192f53bac6b310c77c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/passwordLost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78c415ddcda026247ba35c0f2d232996c31a37ede9099192f53bac6b310c77c1->leave($__internal_78c415ddcda026247ba35c0f2d232996c31a37ede9099192f53bac6b310c77c1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c2c122383c7c85e58962c865b991c7a11f7778c8c5a5e20edb27b35cf23ca8fa = $this->env->getExtension("native_profiler");
        $__internal_c2c122383c7c85e58962c865b991c7a11f7778c8c5a5e20edb27b35cf23ca8fa->enter($__internal_c2c122383c7c85e58962c865b991c7a11f7778c8c5a5e20edb27b35cf23ca8fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connection";
        
        $__internal_c2c122383c7c85e58962c865b991c7a11f7778c8c5a5e20edb27b35cf23ca8fa->leave($__internal_c2c122383c7c85e58962c865b991c7a11f7778c8c5a5e20edb27b35cf23ca8fa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_64651793ff13a3a25c8d8cf4fbc6f04d3a7818d71da23336db73a1cf9d894b15 = $this->env->getExtension("native_profiler");
        $__internal_64651793ff13a3a25c8d8cf4fbc6f04d3a7818d71da23336db73a1cf9d894b15->enter($__internal_64651793ff13a3a25c8d8cf4fbc6f04d3a7818d71da23336db73a1cf9d894b15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div>
    <h1 align=\"center\">Récupération de votre mot de passe</h1>
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
        echo $this->env->getExtension('routing')->getPath("users_passwordLostConfirm");
        echo "\" method=\"post\">
            <table class=\"tableFieldset\">
                <tr align=\"center\"><td><label for=\"username\">Nom d'utilisateur:</label></td></tr>
                <tr align=\"center\"><td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" /></td></tr>

                <input type=\"hidden\" name=\"_target_path\" value=\"ehs_homepage\" />

                <tr align=\"center\"><td><button type=\"submit\" class=\"btn btn-primary\">Envoyer</button></tr></td>
            </table>
            </form>
        </div>
    </div>

";
        
        $__internal_64651793ff13a3a25c8d8cf4fbc6f04d3a7818d71da23336db73a1cf9d894b15->leave($__internal_64651793ff13a3a25c8d8cf4fbc6f04d3a7818d71da23336db73a1cf9d894b15_prof);

    }

    public function getTemplateName()
    {
        return "users/passwordLost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 16,  69 => 13,  66 => 12,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Connection{% endblock %}*/
/* */
/* {% block body %}*/
/* <div>*/
/*     <h1 align="center">Récupération de votre mot de passe</h1>*/
/*         <div class="formInscription">*/
/*             {% if error %}*/
/*             <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*             {% endif %}*/
/* */
/*             <form action="{{ path('users_passwordLostConfirm') }}" method="post">*/
/*             <table class="tableFieldset">*/
/*                 <tr align="center"><td><label for="username">Nom d'utilisateur:</label></td></tr>*/
/*                 <tr align="center"><td><input type="text" id="username" name="_username" value="{{ last_username }}" /></td></tr>*/
/* */
/*                 <input type="hidden" name="_target_path" value="ehs_homepage" />*/
/* */
/*                 <tr align="center"><td><button type="submit" class="btn btn-primary">Envoyer</button></tr></td>*/
/*             </table>*/
/*             </form>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
