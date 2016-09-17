<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_cbb82abfe2e15bd9e961b1f1b646585e7be5085be7015d02deed25c2a77c8171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e08607b4a81ab411fcda3dde1b42d686939a15b786978022a1d3949a88e7790 = $this->env->getExtension("native_profiler");
        $__internal_8e08607b4a81ab411fcda3dde1b42d686939a15b786978022a1d3949a88e7790->enter($__internal_8e08607b4a81ab411fcda3dde1b42d686939a15b786978022a1d3949a88e7790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_8e08607b4a81ab411fcda3dde1b42d686939a15b786978022a1d3949a88e7790->leave($__internal_8e08607b4a81ab411fcda3dde1b42d686939a15b786978022a1d3949a88e7790_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ebcf2884c08396660324bf235c495f75ccb18c7fe1aab27ac2b35ce6c5337c4e = $this->env->getExtension("native_profiler");
        $__internal_ebcf2884c08396660324bf235c495f75ccb18c7fe1aab27ac2b35ce6c5337c4e->enter($__internal_ebcf2884c08396660324bf235c495f75ccb18c7fe1aab27ac2b35ce6c5337c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ebcf2884c08396660324bf235c495f75ccb18c7fe1aab27ac2b35ce6c5337c4e->leave($__internal_ebcf2884c08396660324bf235c495f75ccb18c7fe1aab27ac2b35ce6c5337c4e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
