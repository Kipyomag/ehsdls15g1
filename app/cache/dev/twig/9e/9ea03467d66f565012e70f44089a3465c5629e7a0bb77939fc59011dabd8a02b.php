<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9512a2c98126a0ba368e2e35281f04c5aa5667af23b31762a4554721c48f5ba5 extends Twig_Template
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
        $__internal_1f20a71f22d32ec4f3ef992b2444204c93fdc2641f839aeb55531e6cf4e30823 = $this->env->getExtension("native_profiler");
        $__internal_1f20a71f22d32ec4f3ef992b2444204c93fdc2641f839aeb55531e6cf4e30823->enter($__internal_1f20a71f22d32ec4f3ef992b2444204c93fdc2641f839aeb55531e6cf4e30823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_1f20a71f22d32ec4f3ef992b2444204c93fdc2641f839aeb55531e6cf4e30823->leave($__internal_1f20a71f22d32ec4f3ef992b2444204c93fdc2641f839aeb55531e6cf4e30823_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
