<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_e8f6752c8a89934249c1259e5e4aa3a2fb113e3a2c21a659d7c769f419d43111 extends Twig_Template
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
        $__internal_1ca7b7e7405ba467302d15263225a1f4f4592054525fa86d2caf8e34ab1e76e6 = $this->env->getExtension("native_profiler");
        $__internal_1ca7b7e7405ba467302d15263225a1f4f4592054525fa86d2caf8e34ab1e76e6->enter($__internal_1ca7b7e7405ba467302d15263225a1f4f4592054525fa86d2caf8e34ab1e76e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_1ca7b7e7405ba467302d15263225a1f4f4592054525fa86d2caf8e34ab1e76e6->leave($__internal_1ca7b7e7405ba467302d15263225a1f4f4592054525fa86d2caf8e34ab1e76e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
