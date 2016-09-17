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
        $__internal_c188664d12bbe49a7f363462e7a717546c6dd3c449647c1cb4be61db5825c7ef = $this->env->getExtension("native_profiler");
        $__internal_c188664d12bbe49a7f363462e7a717546c6dd3c449647c1cb4be61db5825c7ef->enter($__internal_c188664d12bbe49a7f363462e7a717546c6dd3c449647c1cb4be61db5825c7ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:passwordLost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c188664d12bbe49a7f363462e7a717546c6dd3c449647c1cb4be61db5825c7ef->leave($__internal_c188664d12bbe49a7f363462e7a717546c6dd3c449647c1cb4be61db5825c7ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d44dd6fbc4390b4384aade7bb012523bf6e553c99d935910ccb4fc6225674235 = $this->env->getExtension("native_profiler");
        $__internal_d44dd6fbc4390b4384aade7bb012523bf6e553c99d935910ccb4fc6225674235->enter($__internal_d44dd6fbc4390b4384aade7bb012523bf6e553c99d935910ccb4fc6225674235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connection";
        
        $__internal_d44dd6fbc4390b4384aade7bb012523bf6e553c99d935910ccb4fc6225674235->leave($__internal_d44dd6fbc4390b4384aade7bb012523bf6e553c99d935910ccb4fc6225674235_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b132698b587bf9627ab33f9725fcc0c588bd4f8d97a05abd3a60daa5c112f02 = $this->env->getExtension("native_profiler");
        $__internal_8b132698b587bf9627ab33f9725fcc0c588bd4f8d97a05abd3a60daa5c112f02->enter($__internal_8b132698b587bf9627ab33f9725fcc0c588bd4f8d97a05abd3a60daa5c112f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <tr align=\"center\"><td><label for=\"username\">E-mail:</label></td></tr>
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
        
        $__internal_8b132698b587bf9627ab33f9725fcc0c588bd4f8d97a05abd3a60daa5c112f02->leave($__internal_8b132698b587bf9627ab33f9725fcc0c588bd4f8d97a05abd3a60daa5c112f02_prof);

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
/*                 <tr align="center"><td><label for="username">E-mail:</label></td></tr>*/
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
