<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_65fae5bcc052be52a3d08877fc4eea39e67f2f5ba8aeee05c50a8cced087e9e1 extends Twig_Template
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
        $__internal_8a6cac25544495843b5763b636a53247e9cdc3b033d1ae3c580542aa81048109 = $this->env->getExtension("native_profiler");
        $__internal_8a6cac25544495843b5763b636a53247e9cdc3b033d1ae3c580542aa81048109->enter($__internal_8a6cac25544495843b5763b636a53247e9cdc3b033d1ae3c580542aa81048109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8a6cac25544495843b5763b636a53247e9cdc3b033d1ae3c580542aa81048109->leave($__internal_8a6cac25544495843b5763b636a53247e9cdc3b033d1ae3c580542aa81048109_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
