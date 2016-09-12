<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_dbd44ddc53926840eed06bdfd684beb4da743f3ccd61619d01fc2d3cb690542d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_3b4eed9b7b27b4feafe9771893132132f45a59f00183958a7d4861aac82c2f48 = $this->env->getExtension("native_profiler");
        $__internal_3b4eed9b7b27b4feafe9771893132132f45a59f00183958a7d4861aac82c2f48->enter($__internal_3b4eed9b7b27b4feafe9771893132132f45a59f00183958a7d4861aac82c2f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b4eed9b7b27b4feafe9771893132132f45a59f00183958a7d4861aac82c2f48->leave($__internal_3b4eed9b7b27b4feafe9771893132132f45a59f00183958a7d4861aac82c2f48_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_20473583383a89a74bfaabad1e9128f4bafa43f57956726bd327aa49e866c38d = $this->env->getExtension("native_profiler");
        $__internal_20473583383a89a74bfaabad1e9128f4bafa43f57956726bd327aa49e866c38d->enter($__internal_20473583383a89a74bfaabad1e9128f4bafa43f57956726bd327aa49e866c38d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_20473583383a89a74bfaabad1e9128f4bafa43f57956726bd327aa49e866c38d->leave($__internal_20473583383a89a74bfaabad1e9128f4bafa43f57956726bd327aa49e866c38d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_99e570704e039058c0aab891fea8275693edc81b90d8ac8b03e56d649b48c89b = $this->env->getExtension("native_profiler");
        $__internal_99e570704e039058c0aab891fea8275693edc81b90d8ac8b03e56d649b48c89b->enter($__internal_99e570704e039058c0aab891fea8275693edc81b90d8ac8b03e56d649b48c89b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_99e570704e039058c0aab891fea8275693edc81b90d8ac8b03e56d649b48c89b->leave($__internal_99e570704e039058c0aab891fea8275693edc81b90d8ac8b03e56d649b48c89b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e25ffc76bee2786df93a250c97ff125d879bfa11a8526184e81b5396b6f861c = $this->env->getExtension("native_profiler");
        $__internal_4e25ffc76bee2786df93a250c97ff125d879bfa11a8526184e81b5396b6f861c->enter($__internal_4e25ffc76bee2786df93a250c97ff125d879bfa11a8526184e81b5396b6f861c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e25ffc76bee2786df93a250c97ff125d879bfa11a8526184e81b5396b6f861c->leave($__internal_4e25ffc76bee2786df93a250c97ff125d879bfa11a8526184e81b5396b6f861c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
