<?php

/* users/edit.html.twig */
class __TwigTemplate_11f25b3a6d9be098f20ffe5afc718a1d7a2a112b018573173092c53c2388609b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/edit.html.twig", 1);
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
        $__internal_530693d0553ffba7f111aeee497a2ba8d873b7170db4279b50f479e66c5c84d2 = $this->env->getExtension("native_profiler");
        $__internal_530693d0553ffba7f111aeee497a2ba8d873b7170db4279b50f479e66c5c84d2->enter($__internal_530693d0553ffba7f111aeee497a2ba8d873b7170db4279b50f479e66c5c84d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_530693d0553ffba7f111aeee497a2ba8d873b7170db4279b50f479e66c5c84d2->leave($__internal_530693d0553ffba7f111aeee497a2ba8d873b7170db4279b50f479e66c5c84d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07f4d2d36d7f5c32aab073986adebcc837092eb9e0ffc4c02ca25d3ee5438a6d = $this->env->getExtension("native_profiler");
        $__internal_07f4d2d36d7f5c32aab073986adebcc837092eb9e0ffc4c02ca25d3ee5438a6d->enter($__internal_07f4d2d36d7f5c32aab073986adebcc837092eb9e0ffc4c02ca25d3ee5438a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Edition du profil";
        
        $__internal_07f4d2d36d7f5c32aab073986adebcc837092eb9e0ffc4c02ca25d3ee5438a6d->leave($__internal_07f4d2d36d7f5c32aab073986adebcc837092eb9e0ffc4c02ca25d3ee5438a6d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d95dc27c82bfd0a5e9f30afbb08e8a8f4dc07564aee91cc69e70fad0f1c25897 = $this->env->getExtension("native_profiler");
        $__internal_d95dc27c82bfd0a5e9f30afbb08e8a8f4dc07564aee91cc69e70fad0f1c25897->enter($__internal_d95dc27c82bfd0a5e9f30afbb08e8a8f4dc07564aee91cc69e70fad0f1c25897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d95dc27c82bfd0a5e9f30afbb08e8a8f4dc07564aee91cc69e70fad0f1c25897->leave($__internal_d95dc27c82bfd0a5e9f30afbb08e8a8f4dc07564aee91cc69e70fad0f1c25897_prof);

    }

    public function getTemplateName()
    {
        return "users/edit.html.twig";
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
