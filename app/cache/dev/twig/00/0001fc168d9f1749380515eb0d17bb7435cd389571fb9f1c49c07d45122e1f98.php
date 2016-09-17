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
        $__internal_59e4c60bec95aa4b049722b03ec460757182a7b6480a4c171a32364ace2379a1 = $this->env->getExtension("native_profiler");
        $__internal_59e4c60bec95aa4b049722b03ec460757182a7b6480a4c171a32364ace2379a1->enter($__internal_59e4c60bec95aa4b049722b03ec460757182a7b6480a4c171a32364ace2379a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_59e4c60bec95aa4b049722b03ec460757182a7b6480a4c171a32364ace2379a1->leave($__internal_59e4c60bec95aa4b049722b03ec460757182a7b6480a4c171a32364ace2379a1_prof);

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
