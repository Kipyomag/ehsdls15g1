<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_effecc7925eae2f402cf274d03d63eb4fbee7a1ee7cf062c79fe86dd045b3b3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47612204acd45c5d350f4cb03d2f6fa9613eeefc113e5f3e8426d8f068b32a04 = $this->env->getExtension("native_profiler");
        $__internal_47612204acd45c5d350f4cb03d2f6fa9613eeefc113e5f3e8426d8f068b32a04->enter($__internal_47612204acd45c5d350f4cb03d2f6fa9613eeefc113e5f3e8426d8f068b32a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47612204acd45c5d350f4cb03d2f6fa9613eeefc113e5f3e8426d8f068b32a04->leave($__internal_47612204acd45c5d350f4cb03d2f6fa9613eeefc113e5f3e8426d8f068b32a04_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_02a35273a802dc29a9b8288b8bc149ef84eaf8dde2b892cdd708df74abdba54e = $this->env->getExtension("native_profiler");
        $__internal_02a35273a802dc29a9b8288b8bc149ef84eaf8dde2b892cdd708df74abdba54e->enter($__internal_02a35273a802dc29a9b8288b8bc149ef84eaf8dde2b892cdd708df74abdba54e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_02a35273a802dc29a9b8288b8bc149ef84eaf8dde2b892cdd708df74abdba54e->leave($__internal_02a35273a802dc29a9b8288b8bc149ef84eaf8dde2b892cdd708df74abdba54e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0325a5c69e9b34a44da8904f8b3212d51a17f43e91bc26125daf0b27a35ce5e = $this->env->getExtension("native_profiler");
        $__internal_c0325a5c69e9b34a44da8904f8b3212d51a17f43e91bc26125daf0b27a35ce5e->enter($__internal_c0325a5c69e9b34a44da8904f8b3212d51a17f43e91bc26125daf0b27a35ce5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0325a5c69e9b34a44da8904f8b3212d51a17f43e91bc26125daf0b27a35ce5e->leave($__internal_c0325a5c69e9b34a44da8904f8b3212d51a17f43e91bc26125daf0b27a35ce5e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_814a9753e39cd67332106d8213e0f1c93a72ad942bd5ddc65035b3c6a4fb4bdb = $this->env->getExtension("native_profiler");
        $__internal_814a9753e39cd67332106d8213e0f1c93a72ad942bd5ddc65035b3c6a4fb4bdb->enter($__internal_814a9753e39cd67332106d8213e0f1c93a72ad942bd5ddc65035b3c6a4fb4bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_814a9753e39cd67332106d8213e0f1c93a72ad942bd5ddc65035b3c6a4fb4bdb->leave($__internal_814a9753e39cd67332106d8213e0f1c93a72ad942bd5ddc65035b3c6a4fb4bdb_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
