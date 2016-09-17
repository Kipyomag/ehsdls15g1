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
        $__internal_4ca7e7478f7d372fa59c44b0ed63347c889f36410ab445774893ab3b6e83df51 = $this->env->getExtension("native_profiler");
        $__internal_4ca7e7478f7d372fa59c44b0ed63347c889f36410ab445774893ab3b6e83df51->enter($__internal_4ca7e7478f7d372fa59c44b0ed63347c889f36410ab445774893ab3b6e83df51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_4ca7e7478f7d372fa59c44b0ed63347c889f36410ab445774893ab3b6e83df51->leave($__internal_4ca7e7478f7d372fa59c44b0ed63347c889f36410ab445774893ab3b6e83df51_prof);

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
