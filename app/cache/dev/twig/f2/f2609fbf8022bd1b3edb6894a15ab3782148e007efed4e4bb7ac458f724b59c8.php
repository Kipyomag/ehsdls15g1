<?php

/* :users:edit.html.twig */
class __TwigTemplate_ad07e7541d16fc1cc8572ea895fe54825046b096f12fe64e5a4ce6cb868679fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":users:edit.html.twig", 1);
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
        $__internal_afc25f4bbfc34e5b536b0a5cda72016d061b131667778c155cbe8c7f9cef2989 = $this->env->getExtension("native_profiler");
        $__internal_afc25f4bbfc34e5b536b0a5cda72016d061b131667778c155cbe8c7f9cef2989->enter($__internal_afc25f4bbfc34e5b536b0a5cda72016d061b131667778c155cbe8c7f9cef2989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":users:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc25f4bbfc34e5b536b0a5cda72016d061b131667778c155cbe8c7f9cef2989->leave($__internal_afc25f4bbfc34e5b536b0a5cda72016d061b131667778c155cbe8c7f9cef2989_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c68cb549a17452b3ed43e8f1c889aaa6cabb0a628e23d9546ee87f6b479caf03 = $this->env->getExtension("native_profiler");
        $__internal_c68cb549a17452b3ed43e8f1c889aaa6cabb0a628e23d9546ee87f6b479caf03->enter($__internal_c68cb549a17452b3ed43e8f1c889aaa6cabb0a628e23d9546ee87f6b479caf03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edition du profil";
        
        $__internal_c68cb549a17452b3ed43e8f1c889aaa6cabb0a628e23d9546ee87f6b479caf03->leave($__internal_c68cb549a17452b3ed43e8f1c889aaa6cabb0a628e23d9546ee87f6b479caf03_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b64b1199d6a303fa04705fdfc5042e8ab5dc8ba23773e586128df4585ace2749 = $this->env->getExtension("native_profiler");
        $__internal_b64b1199d6a303fa04705fdfc5042e8ab5dc8ba23773e586128df4585ace2749->enter($__internal_b64b1199d6a303fa04705fdfc5042e8ab5dc8ba23773e586128df4585ace2749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <h1 align=\"center\">Edition du profil</h1>
            <div class=\"formEdition\">
                ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                    <table class=\"tableFieldset\">
                        <tr><td>";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "password", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'label', array("label" => "Téléphone"));
        echo "</td></tr>
                        <tr><td>";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "telephone", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'label', array("label" => "Adresse"));
        echo "</td></tr>
                        <tr><td>";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "adresse", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'label', array("label" => "Ville"));
        echo "</td></tr>
                        <tr><td>";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ville", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "region", array()), 'label', array("label" => "Région"));
        echo "</td></tr>
                        <tr><td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "region", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'label', array("label" => "Pays"));
        echo "</td></tr>
                        <tr><td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "pays", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "role", array()), 'label', array("label" => "Rôle"));
        echo "</td></tr>
                        <tr><td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "role", array()), 'widget');
        echo "</td></tr>
                    
                        <tr align=\"center\"><td><input type=\"submit\" class=\"btn btn-primary\" value=\"Editer\" /></td></tr>
                        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                        ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <tr align=\"center\"><td><input type=\"submit\" class=\"btn btn-primary\" value=\"Supprimer mon compte\" /></td></tr>
                        ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </table>
            </div>
        </div>
        
";
        
        $__internal_b64b1199d6a303fa04705fdfc5042e8ab5dc8ba23773e586128df4585ace2749->leave($__internal_b64b1199d6a303fa04705fdfc5042e8ab5dc8ba23773e586128df4585ace2749_prof);

    }

    public function getTemplateName()
    {
        return ":users:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 37,  132 => 35,  128 => 34,  122 => 31,  118 => 30,  113 => 28,  109 => 27,  104 => 25,  100 => 24,  95 => 22,  91 => 21,  86 => 19,  82 => 18,  77 => 16,  73 => 15,  68 => 13,  63 => 11,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Edition du profil{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <h1 align="center">Edition du profil</h1>*/
/*             <div class="formEdition">*/
/*                 {{ form_start(edit_form) }}*/
/*                     <table class="tableFieldset">*/
/*                         <tr><td>{{ form_widget(edit_form.email) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_widget(edit_form.password) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(edit_form.telephone, "Téléphone") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(edit_form.telephone) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(edit_form.adresse, "Adresse") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(edit_form.adresse) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(edit_form.ville, "Ville") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(edit_form.ville) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(edit_form.region, "Région") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(edit_form.region) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(edit_form.pays, "Pays") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(edit_form.pays) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(edit_form.role, "Rôle") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(edit_form.role) }}</td></tr>*/
/*                     */
/*                         <tr align="center"><td><input type="submit" class="btn btn-primary" value="Editer" /></td></tr>*/
/*                         {{ form_end(edit_form) }}*/
/*                         {{ form_start(delete_form) }}*/
/*                         <tr align="center"><td><input type="submit" class="btn btn-primary" value="Supprimer mon compte" /></td></tr>*/
/*                         {{ form_end(delete_form) }}*/
/*                     </table>*/
/*             </div>*/
/*         </div>*/
/*         */
/* {% endblock %}*/
/* */
