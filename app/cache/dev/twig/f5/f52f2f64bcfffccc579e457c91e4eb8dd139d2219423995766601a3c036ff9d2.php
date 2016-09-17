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
        $__internal_c97085638ed4893c088b632bd07ee2b61f23a832b15bd9dc6ad1c39fc1ca4b4b = $this->env->getExtension("native_profiler");
        $__internal_c97085638ed4893c088b632bd07ee2b61f23a832b15bd9dc6ad1c39fc1ca4b4b->enter($__internal_c97085638ed4893c088b632bd07ee2b61f23a832b15bd9dc6ad1c39fc1ca4b4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c97085638ed4893c088b632bd07ee2b61f23a832b15bd9dc6ad1c39fc1ca4b4b->leave($__internal_c97085638ed4893c088b632bd07ee2b61f23a832b15bd9dc6ad1c39fc1ca4b4b_prof);

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
