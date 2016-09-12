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
        $__internal_6ea7cec82efbf72fc3763c5923c2bd9b7406354989b37ea5318ea01b4961830d = $this->env->getExtension("native_profiler");
        $__internal_6ea7cec82efbf72fc3763c5923c2bd9b7406354989b37ea5318ea01b4961830d->enter($__internal_6ea7cec82efbf72fc3763c5923c2bd9b7406354989b37ea5318ea01b4961830d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/passwordLost.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ea7cec82efbf72fc3763c5923c2bd9b7406354989b37ea5318ea01b4961830d->leave($__internal_6ea7cec82efbf72fc3763c5923c2bd9b7406354989b37ea5318ea01b4961830d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe684cbea00d0c83308c2f5e7a09a126ae01682842b1ea486f1c9c3a6a4715b3 = $this->env->getExtension("native_profiler");
        $__internal_fe684cbea00d0c83308c2f5e7a09a126ae01682842b1ea486f1c9c3a6a4715b3->enter($__internal_fe684cbea00d0c83308c2f5e7a09a126ae01682842b1ea486f1c9c3a6a4715b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Connection";
        
        $__internal_fe684cbea00d0c83308c2f5e7a09a126ae01682842b1ea486f1c9c3a6a4715b3->leave($__internal_fe684cbea00d0c83308c2f5e7a09a126ae01682842b1ea486f1c9c3a6a4715b3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ab938d90d33b81e30e5f65ece56bf674341f00fab6acd929a527719145ac0bb = $this->env->getExtension("native_profiler");
        $__internal_9ab938d90d33b81e30e5f65ece56bf674341f00fab6acd929a527719145ac0bb->enter($__internal_9ab938d90d33b81e30e5f65ece56bf674341f00fab6acd929a527719145ac0bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9ab938d90d33b81e30e5f65ece56bf674341f00fab6acd929a527719145ac0bb->leave($__internal_9ab938d90d33b81e30e5f65ece56bf674341f00fab6acd929a527719145ac0bb_prof);

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
