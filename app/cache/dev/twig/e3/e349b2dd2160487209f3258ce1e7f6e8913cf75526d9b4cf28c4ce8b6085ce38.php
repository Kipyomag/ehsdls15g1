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
        $__internal_faf2cc7706f5af58605573974e6fd31016eb2cf16667b36489aa8c986f14f475 = $this->env->getExtension("native_profiler");
        $__internal_faf2cc7706f5af58605573974e6fd31016eb2cf16667b36489aa8c986f14f475->enter($__internal_faf2cc7706f5af58605573974e6fd31016eb2cf16667b36489aa8c986f14f475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_faf2cc7706f5af58605573974e6fd31016eb2cf16667b36489aa8c986f14f475->leave($__internal_faf2cc7706f5af58605573974e6fd31016eb2cf16667b36489aa8c986f14f475_prof);

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
