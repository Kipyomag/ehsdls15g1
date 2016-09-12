<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f9e6383cf185f5a5e4a1c29006df38f0457f772251f4daab45a0f4be8abdf79d extends Twig_Template
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
        $__internal_de6e70e2875204a182939e395389b2710b50f87b2379d34bbfe0b4d812690b6c = $this->env->getExtension("native_profiler");
        $__internal_de6e70e2875204a182939e395389b2710b50f87b2379d34bbfe0b4d812690b6c->enter($__internal_de6e70e2875204a182939e395389b2710b50f87b2379d34bbfe0b4d812690b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_de6e70e2875204a182939e395389b2710b50f87b2379d34bbfe0b4d812690b6c->leave($__internal_de6e70e2875204a182939e395389b2710b50f87b2379d34bbfe0b4d812690b6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
