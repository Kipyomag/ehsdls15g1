<?php

/* users/passwordLost.html.twig */
class __TwigTemplate_723dbe3a8904ea8e17baa04a7ac571eed74828b8a36730f945a416bca4c599b5 extends Twig_Template
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
        $__internal_1abdb7f09ee2c09ec855723371e815c2ba2d6fb7efda9f9c7b618a9e180ae1f5 = $this->env->getExtension("native_profiler");
        $__internal_1abdb7f09ee2c09ec855723371e815c2ba2d6fb7efda9f9c7b618a9e180ae1f5->enter($__internal_1abdb7f09ee2c09ec855723371e815c2ba2d6fb7efda9f9c7b618a9e180ae1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/passwordLost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1abdb7f09ee2c09ec855723371e815c2ba2d6fb7efda9f9c7b618a9e180ae1f5->leave($__internal_1abdb7f09ee2c09ec855723371e815c2ba2d6fb7efda9f9c7b618a9e180ae1f5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_965f9df18cd1fcaf4ca3da9cda22e507a3b59cf91d584dd97bf849a3c0f90ec1 = $this->env->getExtension("native_profiler");
        $__internal_965f9df18cd1fcaf4ca3da9cda22e507a3b59cf91d584dd97bf849a3c0f90ec1->enter($__internal_965f9df18cd1fcaf4ca3da9cda22e507a3b59cf91d584dd97bf849a3c0f90ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connection";
        
        $__internal_965f9df18cd1fcaf4ca3da9cda22e507a3b59cf91d584dd97bf849a3c0f90ec1->leave($__internal_965f9df18cd1fcaf4ca3da9cda22e507a3b59cf91d584dd97bf849a3c0f90ec1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_10dfbb656618ade2f6561050ef0f2b31754a572be0861682ab808ad4f3d37780 = $this->env->getExtension("native_profiler");
        $__internal_10dfbb656618ade2f6561050ef0f2b31754a572be0861682ab808ad4f3d37780->enter($__internal_10dfbb656618ade2f6561050ef0f2b31754a572be0861682ab808ad4f3d37780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_10dfbb656618ade2f6561050ef0f2b31754a572be0861682ab808ad4f3d37780->leave($__internal_10dfbb656618ade2f6561050ef0f2b31754a572be0861682ab808ad4f3d37780_prof);

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
