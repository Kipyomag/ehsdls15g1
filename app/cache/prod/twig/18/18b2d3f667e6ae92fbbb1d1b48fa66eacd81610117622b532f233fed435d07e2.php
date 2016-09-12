<?php

/* users/new.html.twig */
class __TwigTemplate_c4aad84d6a1ee402e455a79e52b7168f7d47aa59adec6c780f1d4fddabc9e749 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Inscription";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div>
        <h1 align=\"center\">Inscription</h1>
            <div class=\"formInscription\">
                ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                
                    <table class=\"tableFieldset\">
                        <tr><td>";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'label', array("label" => "Nom d'utilisateur"));
        echo "</td></tr>
                        <tr><td>";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "username", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'label', array("label" => "Nom"));
        echo "</td></tr>
                        <tr><td>";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'label', array("label" => "Prénom"));
        echo "</td></tr>
                        <tr><td>";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "prenom", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "password", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "genre", array()), 'label', array("label" => "Genre"));
        echo "</td></tr>
                        <tr><td>";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "genre", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'label', array("label" => "Téléphone"));
        echo "</td></tr>
                        <tr><td>";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "telephone", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'label', array("label" => "Adresse"));
        echo "</td></tr>
                        <tr><td>";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "adresse", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'label', array("label" => "Ville"));
        echo "</td></tr>
                        <tr><td>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "ville", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'label', array("label" => "Région"));
        echo "</td></tr>
                        <tr><td>";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'label', array("label" => "Pays"));
        echo "</td></tr>
                        <tr><td>";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "pays", array()), 'widget');
        echo "</td></tr>

                        <tr><td>";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "role", array()), 'label', array("label" => "Rôle"));
        echo "</td></tr>
                        <tr><td>";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "role", array()), 'widget');
        echo "</td></tr>
                    
                        <tr align=\"center\"><td><button type=\"submit\" class=\"btn btn-primary\">S'inscrire</button></td></tr>
                    </table>
                
                ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
        </div>
    </div>

    
";
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
        return array (  152 => 49,  144 => 44,  140 => 43,  135 => 41,  131 => 40,  126 => 38,  122 => 37,  117 => 35,  113 => 34,  108 => 32,  104 => 31,  99 => 29,  95 => 28,  90 => 26,  86 => 25,  81 => 23,  76 => 21,  72 => 20,  67 => 18,  63 => 17,  58 => 15,  54 => 14,  49 => 12,  43 => 9,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
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
