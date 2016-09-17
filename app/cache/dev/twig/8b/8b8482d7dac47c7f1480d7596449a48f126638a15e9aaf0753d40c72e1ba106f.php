<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_e82ee1026b98494cbc521fc9aef2c917e3b018470094a3968766a7b39ac9a95b extends Twig_Template
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
        $__internal_04b026d0e6711c3c2c07df2549cea8b1dc03a89b2c737e4717711b30911dc410 = $this->env->getExtension("native_profiler");
        $__internal_04b026d0e6711c3c2c07df2549cea8b1dc03a89b2c737e4717711b30911dc410->enter($__internal_04b026d0e6711c3c2c07df2549cea8b1dc03a89b2c737e4717711b30911dc410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_04b026d0e6711c3c2c07df2549cea8b1dc03a89b2c737e4717711b30911dc410->leave($__internal_04b026d0e6711c3c2c07df2549cea8b1dc03a89b2c737e4717711b30911dc410_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
