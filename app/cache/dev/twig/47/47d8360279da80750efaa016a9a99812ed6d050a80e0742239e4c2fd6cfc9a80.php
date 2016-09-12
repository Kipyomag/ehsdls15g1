<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a4312f6da0a9f3b32c9fad47c040386950acc89b692675b0a3e023864a0f3741 extends Twig_Template
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
        $__internal_63a7c5ddb8feaee4f61d92a352065ca280d3d14d0ce1eead6f1594fc70bb85e5 = $this->env->getExtension("native_profiler");
        $__internal_63a7c5ddb8feaee4f61d92a352065ca280d3d14d0ce1eead6f1594fc70bb85e5->enter($__internal_63a7c5ddb8feaee4f61d92a352065ca280d3d14d0ce1eead6f1594fc70bb85e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_63a7c5ddb8feaee4f61d92a352065ca280d3d14d0ce1eead6f1594fc70bb85e5->leave($__internal_63a7c5ddb8feaee4f61d92a352065ca280d3d14d0ce1eead6f1594fc70bb85e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
