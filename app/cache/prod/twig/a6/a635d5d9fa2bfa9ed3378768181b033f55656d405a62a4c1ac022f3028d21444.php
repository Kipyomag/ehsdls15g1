<?php

/* articles/new.html.twig */
class __TwigTemplate_ada53623d7e275409994142d20b15bfca3ea851977dfb3540cb49a49da1a6a88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c93ccf1ff64d93260510bb126ddecdc804f3b169ce2fc599cc224a95f7b4a5ff = $this->env->getExtension("native_profiler");
        $__internal_c93ccf1ff64d93260510bb126ddecdc804f3b169ce2fc599cc224a95f7b4a5ff->enter($__internal_c93ccf1ff64d93260510bb126ddecdc804f3b169ce2fc599cc224a95f7b4a5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c93ccf1ff64d93260510bb126ddecdc804f3b169ce2fc599cc224a95f7b4a5ff->leave($__internal_c93ccf1ff64d93260510bb126ddecdc804f3b169ce2fc599cc224a95f7b4a5ff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a408546f106eef1a3363b3db8eea9de2e390dd5f1107ff649fdfab41577d3020 = $this->env->getExtension("native_profiler");
        $__internal_a408546f106eef1a3363b3db8eea9de2e390dd5f1107ff649fdfab41577d3020->enter($__internal_a408546f106eef1a3363b3db8eea9de2e390dd5f1107ff649fdfab41577d3020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Création d'articles</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "todo")));
        echo "
        <input type=\"submit\" value=\"Creation\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("articles_index");
        echo "\">Retour vers la liste</a>
        </li>
    </ul>
";
        
        $__internal_a408546f106eef1a3363b3db8eea9de2e390dd5f1107ff649fdfab41577d3020->leave($__internal_a408546f106eef1a3363b3db8eea9de2e390dd5f1107ff649fdfab41577d3020_prof);

    }

    public function getTemplateName()
    {
        return "articles/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Création d'articles</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form, { 'attr': {'class': 'todo'} }) }}*/
/*         <input type="submit" value="Creation" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('articles_index') }}">Retour vers la liste</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
