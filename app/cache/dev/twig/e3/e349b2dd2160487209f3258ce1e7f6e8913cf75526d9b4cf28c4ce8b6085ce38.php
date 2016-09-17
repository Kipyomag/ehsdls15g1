<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_bca25d8e84d1d66ff588ca3106399d4bfca05e3661bb99d5c78a94cd2a2c4c73 extends Twig_Template
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
        $__internal_62949d9b77290fbb9106f0d5087c5edbb2f738904fb26b9975379125b517efa3 = $this->env->getExtension("native_profiler");
        $__internal_62949d9b77290fbb9106f0d5087c5edbb2f738904fb26b9975379125b517efa3->enter($__internal_62949d9b77290fbb9106f0d5087c5edbb2f738904fb26b9975379125b517efa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_62949d9b77290fbb9106f0d5087c5edbb2f738904fb26b9975379125b517efa3->leave($__internal_62949d9b77290fbb9106f0d5087c5edbb2f738904fb26b9975379125b517efa3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
