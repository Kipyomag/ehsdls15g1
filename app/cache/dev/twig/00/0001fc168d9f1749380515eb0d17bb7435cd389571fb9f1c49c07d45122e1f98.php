<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_1b0c4e8fb6861fbbc076a49999931151160e533b2564ae7de736ebc6f7f56d60 extends Twig_Template
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
        $__internal_eda182a1071e9a1dfb3d3a7d54c21c7c1d2a2397c300269f3faea0228e56271e = $this->env->getExtension("native_profiler");
        $__internal_eda182a1071e9a1dfb3d3a7d54c21c7c1d2a2397c300269f3faea0228e56271e->enter($__internal_eda182a1071e9a1dfb3d3a7d54c21c7c1d2a2397c300269f3faea0228e56271e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_eda182a1071e9a1dfb3d3a7d54c21c7c1d2a2397c300269f3faea0228e56271e->leave($__internal_eda182a1071e9a1dfb3d3a7d54c21c7c1d2a2397c300269f3faea0228e56271e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
