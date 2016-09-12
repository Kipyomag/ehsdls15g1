<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_79d6173db629e639561e8fa9aaea56b3d82ab99e591cf0713c8e559d438ef414 extends Twig_Template
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
        $__internal_b571f1953e8357e7e4ed93c07999d56461558d4ba74656ce3b679c117457158f = $this->env->getExtension("native_profiler");
        $__internal_b571f1953e8357e7e4ed93c07999d56461558d4ba74656ce3b679c117457158f->enter($__internal_b571f1953e8357e7e4ed93c07999d56461558d4ba74656ce3b679c117457158f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_b571f1953e8357e7e4ed93c07999d56461558d4ba74656ce3b679c117457158f->leave($__internal_b571f1953e8357e7e4ed93c07999d56461558d4ba74656ce3b679c117457158f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
