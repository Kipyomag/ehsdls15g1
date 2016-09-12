<?php

/* users/new.html.twig */
class __TwigTemplate_9a71033f46821d620782abe7cacdc1028ea57c46ec881a8c64e726b226897587 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "users/new.html.twig", 1);
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
        $__internal_d0deddc19033a8ebcad5a094248f8e37cad9c119de60cec610809158256c19c7 = $this->env->getExtension("native_profiler");
        $__internal_d0deddc19033a8ebcad5a094248f8e37cad9c119de60cec610809158256c19c7->enter($__internal_d0deddc19033a8ebcad5a094248f8e37cad9c119de60cec610809158256c19c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "users/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0deddc19033a8ebcad5a094248f8e37cad9c119de60cec610809158256c19c7->leave($__internal_d0deddc19033a8ebcad5a094248f8e37cad9c119de60cec610809158256c19c7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_358a3c054fbd2bebd56f24845e3c657d7ae6ab0d0f80fb2e12bfa6ffad286ff8 = $this->env->getExtension("native_profiler");
        $__internal_358a3c054fbd2bebd56f24845e3c657d7ae6ab0d0f80fb2e12bfa6ffad286ff8->enter($__internal_358a3c054fbd2bebd56f24845e3c657d7ae6ab0d0f80fb2e12bfa6ffad286ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Inscription";
        
        $__internal_358a3c054fbd2bebd56f24845e3c657d7ae6ab0d0f80fb2e12bfa6ffad286ff8->leave($__internal_358a3c054fbd2bebd56f24845e3c657d7ae6ab0d0f80fb2e12bfa6ffad286ff8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b22369c4c3dba9780a99c4db570e2926536d129c0996b4fea169755a167e1a6 = $this->env->getExtension("native_profiler");
        $__internal_2b22369c4c3dba9780a99c4db570e2926536d129c0996b4fea169755a167e1a6->enter($__internal_2b22369c4c3dba9780a99c4db570e2926536d129c0996b4fea169755a167e1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div>
        <h1 align=\"center\">Inscription</h1>
            <div class=\"formInscription\">
                ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                
                    <table class=\"tableFieldset\">
                        <tr><td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label', array("label" => "Nom d'utilisateur"));
        echo "</td></tr>
                        <tr><td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'label', array("label" => "Nom"));
        echo "</td></tr>
                        <tr><td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "</td></tr>
                        <tr><td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "genre", array()), 'label', array("label" => "Genre"));
        echo "</td></tr>
                        <tr><td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "genre", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'label', array("label" => "Téléphone"));
        echo "</td></tr>
                        <tr><td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telephone", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'label', array("label" => "Adresse"));
        echo "</td></tr>
                        <tr><td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "adresse", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'label', array("label" => "Ville"));
        echo "</td></tr>
                        <tr><td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ville", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region", array()), 'label', array("label" => "Région"));
        echo "</td></tr>
                        <tr><td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "region", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'label', array("label" => "Pays"));
        echo "</td></tr>
                        <tr><td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "pays", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label', array("label" => "Rôle"));
        echo "</td></tr>
                        <tr><td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget');
        echo "</td></tr>
                    
                        <tr align=\"center\"><td><button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button></td></tr>
                    </table>
                
                ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>

    
";
        
        $__internal_2b22369c4c3dba9780a99c4db570e2926536d129c0996b4fea169755a167e1a6->leave($__internal_2b22369c4c3dba9780a99c4db570e2926536d129c0996b4fea169755a167e1a6_prof);

    }

    public function getTemplateName()
    {
        return "users/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 49,  159 => 44,  155 => 43,  150 => 41,  146 => 40,  141 => 38,  137 => 37,  132 => 35,  128 => 34,  123 => 32,  119 => 31,  114 => 29,  110 => 28,  105 => 26,  101 => 25,  96 => 23,  91 => 21,  87 => 20,  82 => 18,  78 => 17,  73 => 15,  69 => 14,  64 => 12,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Inscription{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div>*/
/*         <h1 align="center">Inscription</h1>*/
/*             <div class="formInscription">*/
/*                 {{ form_start(form) }}*/
/*                 */
/*                     <table class="tableFieldset">*/
/*                         <tr><td>{{ form_widget(form.email) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(form.username, "Nom d'utilisateur") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(form.username) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(form.nom, "Nom") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(form.nom) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(form.prenom, "Prénom") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(form.prenom) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_widget(form.password) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(form.genre, "Genre") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(form.genre) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(form.telephone, "Téléphone") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(form.telephone) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(form.adresse, "Adresse") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(form.adresse) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(form.ville, "Ville") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(form.ville) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(form.region, "Région") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(form.region) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(form.pays, "Pays") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(form.pays) }}</td></tr>*/
/* */
/*                         <tr><td>{{ form_label(form.role, "Rôle") }}</td></tr>*/
/*                         <tr><td>{{ form_widget(form.role) }}</td></tr>*/
/*                     */
/*                         <tr align="center"><td><button type="submit" class="btn btn-primary">S'inscrire</button></td></tr>*/
/*                     </table>*/
/*                 */
/*                 {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/* */
/*     */
/* {% endblock %}*/
/* */
/* */
/*     */
