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
        $__internal_c62a7904205abe6b4899cbff44f7a0281f4347f9e65b8dc3e029c47c6545c8e9 = $this->env->getExtension("native_profiler");
        $__internal_c62a7904205abe6b4899cbff44f7a0281f4347f9e65b8dc3e029c47c6545c8e9->enter($__internal_c62a7904205abe6b4899cbff44f7a0281f4347f9e65b8dc3e029c47c6545c8e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c62a7904205abe6b4899cbff44f7a0281f4347f9e65b8dc3e029c47c6545c8e9->leave($__internal_c62a7904205abe6b4899cbff44f7a0281f4347f9e65b8dc3e029c47c6545c8e9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b4ac0b6221afd0ba7a3afedf8823ad058974cc1d7663d599519bb5a6131b8f77 = $this->env->getExtension("native_profiler");
        $__internal_b4ac0b6221afd0ba7a3afedf8823ad058974cc1d7663d599519bb5a6131b8f77->enter($__internal_b4ac0b6221afd0ba7a3afedf8823ad058974cc1d7663d599519bb5a6131b8f77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b4ac0b6221afd0ba7a3afedf8823ad058974cc1d7663d599519bb5a6131b8f77->leave($__internal_b4ac0b6221afd0ba7a3afedf8823ad058974cc1d7663d599519bb5a6131b8f77_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1a41036e5f101ce5a82273071b8a3ab0c481da3a182059a8d5cba56993472947 = $this->env->getExtension("native_profiler");
        $__internal_1a41036e5f101ce5a82273071b8a3ab0c481da3a182059a8d5cba56993472947->enter($__internal_1a41036e5f101ce5a82273071b8a3ab0c481da3a182059a8d5cba56993472947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1a41036e5f101ce5a82273071b8a3ab0c481da3a182059a8d5cba56993472947->leave($__internal_1a41036e5f101ce5a82273071b8a3ab0c481da3a182059a8d5cba56993472947_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_462abed61b824e1770d2c98dd6f7d68bcc6679075d66ac50e2b319630e65bdf2 = $this->env->getExtension("native_profiler");
        $__internal_462abed61b824e1770d2c98dd6f7d68bcc6679075d66ac50e2b319630e65bdf2->enter($__internal_462abed61b824e1770d2c98dd6f7d68bcc6679075d66ac50e2b319630e65bdf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_462abed61b824e1770d2c98dd6f7d68bcc6679075d66ac50e2b319630e65bdf2->leave($__internal_462abed61b824e1770d2c98dd6f7d68bcc6679075d66ac50e2b319630e65bdf2_prof);

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
