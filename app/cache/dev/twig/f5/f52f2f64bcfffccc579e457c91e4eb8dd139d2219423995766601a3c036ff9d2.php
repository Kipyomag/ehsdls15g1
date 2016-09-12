<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_659e333ad5c0b79fbd4b25d89285d291c25ac66deaa54466c11c59bbb95b2557 extends Twig_Template
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
        $__internal_13ea39aa6d36a3a90e11686b36b7956f2aebd81c7876e8e74c8314c7f3c3aa81 = $this->env->getExtension("native_profiler");
        $__internal_13ea39aa6d36a3a90e11686b36b7956f2aebd81c7876e8e74c8314c7f3c3aa81->enter($__internal_13ea39aa6d36a3a90e11686b36b7956f2aebd81c7876e8e74c8314c7f3c3aa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_13ea39aa6d36a3a90e11686b36b7956f2aebd81c7876e8e74c8314c7f3c3aa81->leave($__internal_13ea39aa6d36a3a90e11686b36b7956f2aebd81c7876e8e74c8314c7f3c3aa81_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
