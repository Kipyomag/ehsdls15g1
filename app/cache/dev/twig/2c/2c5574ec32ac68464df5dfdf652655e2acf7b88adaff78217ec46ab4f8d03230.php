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
        $__internal_7b207533b5dc9a4d8fe3109e07e2c01ca3da54db3e88fd24c93d19a556d9cba3 = $this->env->getExtension("native_profiler");
        $__internal_7b207533b5dc9a4d8fe3109e07e2c01ca3da54db3e88fd24c93d19a556d9cba3->enter($__internal_7b207533b5dc9a4d8fe3109e07e2c01ca3da54db3e88fd24c93d19a556d9cba3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_7b207533b5dc9a4d8fe3109e07e2c01ca3da54db3e88fd24c93d19a556d9cba3->leave($__internal_7b207533b5dc9a4d8fe3109e07e2c01ca3da54db3e88fd24c93d19a556d9cba3_prof);

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
