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
        $__internal_a98527287282a5157f089660d2047bb72ab1340e7384d36be551302c097f540b = $this->env->getExtension("native_profiler");
        $__internal_a98527287282a5157f089660d2047bb72ab1340e7384d36be551302c097f540b->enter($__internal_a98527287282a5157f089660d2047bb72ab1340e7384d36be551302c097f540b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a98527287282a5157f089660d2047bb72ab1340e7384d36be551302c097f540b->leave($__internal_a98527287282a5157f089660d2047bb72ab1340e7384d36be551302c097f540b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_da70aba1925dab5ad866e25dde6fb1fa900a5bb1e47d700629abf9af81e5a4a0 = $this->env->getExtension("native_profiler");
        $__internal_da70aba1925dab5ad866e25dde6fb1fa900a5bb1e47d700629abf9af81e5a4a0->enter($__internal_da70aba1925dab5ad866e25dde6fb1fa900a5bb1e47d700629abf9af81e5a4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_da70aba1925dab5ad866e25dde6fb1fa900a5bb1e47d700629abf9af81e5a4a0->leave($__internal_da70aba1925dab5ad866e25dde6fb1fa900a5bb1e47d700629abf9af81e5a4a0_prof);

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
