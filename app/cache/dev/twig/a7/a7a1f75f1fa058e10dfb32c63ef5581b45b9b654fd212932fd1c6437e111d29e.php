<?php

/* :users:passwordLost.html.twig */
class __TwigTemplate_327c94570750544fb798739576cf9ee3327073bf08d3eec1e0b6e8d0de819e84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:passwordLost.html.twig", 1);
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
        $__internal_69c9bae8ed1df9d8095ae879b42c960f168b2f2f4b8f9b9fa1ac68440ad5d86f = $this->env->getExtension("native_profiler");
        $__internal_69c9bae8ed1df9d8095ae879b42c960f168b2f2f4b8f9b9fa1ac68440ad5d86f->enter($__internal_69c9bae8ed1df9d8095ae879b42c960f168b2f2f4b8f9b9fa1ac68440ad5d86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:passwordLost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69c9bae8ed1df9d8095ae879b42c960f168b2f2f4b8f9b9fa1ac68440ad5d86f->leave($__internal_69c9bae8ed1df9d8095ae879b42c960f168b2f2f4b8f9b9fa1ac68440ad5d86f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_939e007b2964cbb1517c2529619fc9e08ac951ac11a1bdc173a53d181eecd425 = $this->env->getExtension("native_profiler");
        $__internal_939e007b2964cbb1517c2529619fc9e08ac951ac11a1bdc173a53d181eecd425->enter($__internal_939e007b2964cbb1517c2529619fc9e08ac951ac11a1bdc173a53d181eecd425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connection";
        
        $__internal_939e007b2964cbb1517c2529619fc9e08ac951ac11a1bdc173a53d181eecd425->leave($__internal_939e007b2964cbb1517c2529619fc9e08ac951ac11a1bdc173a53d181eecd425_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_847eb3b5d71e4f7f68cf4b4c02cd8d5a00796c87578bcd2a0ccd53fe455106ad = $this->env->getExtension("native_profiler");
        $__internal_847eb3b5d71e4f7f68cf4b4c02cd8d5a00796c87578bcd2a0ccd53fe455106ad->enter($__internal_847eb3b5d71e4f7f68cf4b4c02cd8d5a00796c87578bcd2a0ccd53fe455106ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_847eb3b5d71e4f7f68cf4b4c02cd8d5a00796c87578bcd2a0ccd53fe455106ad->leave($__internal_847eb3b5d71e4f7f68cf4b4c02cd8d5a00796c87578bcd2a0ccd53fe455106ad_prof);

    }

    public function getTemplateName()
    {
        return ":users:passwordLost.html.twig";
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
