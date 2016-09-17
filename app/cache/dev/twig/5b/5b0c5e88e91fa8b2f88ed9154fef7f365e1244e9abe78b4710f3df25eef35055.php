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
        $__internal_c98f39fcb0a534cd9dad5ae4c752fc6d07df9410d9438caf5e26666148df0bb6 = $this->env->getExtension("native_profiler");
        $__internal_c98f39fcb0a534cd9dad5ae4c752fc6d07df9410d9438caf5e26666148df0bb6->enter($__internal_c98f39fcb0a534cd9dad5ae4c752fc6d07df9410d9438caf5e26666148df0bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c98f39fcb0a534cd9dad5ae4c752fc6d07df9410d9438caf5e26666148df0bb6->leave($__internal_c98f39fcb0a534cd9dad5ae4c752fc6d07df9410d9438caf5e26666148df0bb6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_afbfcef4226906cdb9637048d4f55f0a1f5b1a04871384ba25f50d128fca0cbe = $this->env->getExtension("native_profiler");
        $__internal_afbfcef4226906cdb9637048d4f55f0a1f5b1a04871384ba25f50d128fca0cbe->enter($__internal_afbfcef4226906cdb9637048d4f55f0a1f5b1a04871384ba25f50d128fca0cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_afbfcef4226906cdb9637048d4f55f0a1f5b1a04871384ba25f50d128fca0cbe->leave($__internal_afbfcef4226906cdb9637048d4f55f0a1f5b1a04871384ba25f50d128fca0cbe_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_94acd6d2df717924796bab60439e1edf91e77e30380e282575ad30d3ccb77b7c = $this->env->getExtension("native_profiler");
        $__internal_94acd6d2df717924796bab60439e1edf91e77e30380e282575ad30d3ccb77b7c->enter($__internal_94acd6d2df717924796bab60439e1edf91e77e30380e282575ad30d3ccb77b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_94acd6d2df717924796bab60439e1edf91e77e30380e282575ad30d3ccb77b7c->leave($__internal_94acd6d2df717924796bab60439e1edf91e77e30380e282575ad30d3ccb77b7c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a8423b08b8bd469408756c0b22b99a9d592c1f5aee23fba54125ca0479fd0ab9 = $this->env->getExtension("native_profiler");
        $__internal_a8423b08b8bd469408756c0b22b99a9d592c1f5aee23fba54125ca0479fd0ab9->enter($__internal_a8423b08b8bd469408756c0b22b99a9d592c1f5aee23fba54125ca0479fd0ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a8423b08b8bd469408756c0b22b99a9d592c1f5aee23fba54125ca0479fd0ab9->leave($__internal_a8423b08b8bd469408756c0b22b99a9d592c1f5aee23fba54125ca0479fd0ab9_prof);

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
