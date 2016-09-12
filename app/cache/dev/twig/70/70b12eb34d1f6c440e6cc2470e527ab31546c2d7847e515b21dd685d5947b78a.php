<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_0a512347d560319cc7437b8447200d8f835b17a5feba2efe20c030604dd397a6 extends Twig_Template
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
        $__internal_b86a7b0c9b10e71f4a3b798db5bb3afb68b0ed241e0399e553e91e24d1847db8 = $this->env->getExtension("native_profiler");
        $__internal_b86a7b0c9b10e71f4a3b798db5bb3afb68b0ed241e0399e553e91e24d1847db8->enter($__internal_b86a7b0c9b10e71f4a3b798db5bb3afb68b0ed241e0399e553e91e24d1847db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_b86a7b0c9b10e71f4a3b798db5bb3afb68b0ed241e0399e553e91e24d1847db8->leave($__internal_b86a7b0c9b10e71f4a3b798db5bb3afb68b0ed241e0399e553e91e24d1847db8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
