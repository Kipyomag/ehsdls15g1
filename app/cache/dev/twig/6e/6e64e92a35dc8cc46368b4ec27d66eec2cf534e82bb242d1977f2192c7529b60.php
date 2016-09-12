<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_a7b438cf53f56d7fa4f9d5d8419bdde5b8be954121566ee6485a98d9e4c83656 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c8b775ff06ea1a2e10f7c843c296f8537a04bfa58ebde23c785befbaff1a08b = $this->env->getExtension("native_profiler");
        $__internal_1c8b775ff06ea1a2e10f7c843c296f8537a04bfa58ebde23c785befbaff1a08b->enter($__internal_1c8b775ff06ea1a2e10f7c843c296f8537a04bfa58ebde23c785befbaff1a08b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1c8b775ff06ea1a2e10f7c843c296f8537a04bfa58ebde23c785befbaff1a08b->leave($__internal_1c8b775ff06ea1a2e10f7c843c296f8537a04bfa58ebde23c785befbaff1a08b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
