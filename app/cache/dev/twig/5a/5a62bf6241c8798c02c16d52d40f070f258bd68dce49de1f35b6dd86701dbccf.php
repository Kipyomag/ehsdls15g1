<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_6255b967203a0c1774b0d015728e5eca705ee3aff7b7a934afe5a56a11bc19a3 extends Twig_Template
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
        $__internal_1c4e70e8d77bd101c97d5ad18f484a78ea45ff86991d54a63aee057bd29beb41 = $this->env->getExtension("native_profiler");
        $__internal_1c4e70e8d77bd101c97d5ad18f484a78ea45ff86991d54a63aee057bd29beb41->enter($__internal_1c4e70e8d77bd101c97d5ad18f484a78ea45ff86991d54a63aee057bd29beb41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_1c4e70e8d77bd101c97d5ad18f484a78ea45ff86991d54a63aee057bd29beb41->leave($__internal_1c4e70e8d77bd101c97d5ad18f484a78ea45ff86991d54a63aee057bd29beb41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
