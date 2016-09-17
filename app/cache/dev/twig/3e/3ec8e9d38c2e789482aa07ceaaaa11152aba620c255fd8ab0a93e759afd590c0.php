<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_fc2e730080fa7f1f77b25c06b7af8217d1c381f9a2a067cea975a31952cc66ba extends Twig_Template
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
        $__internal_b9d5b4a6e8bba7c4ea8ed7e22466c361066eef677e8c3ccc2758fd590bc20e16 = $this->env->getExtension("native_profiler");
        $__internal_b9d5b4a6e8bba7c4ea8ed7e22466c361066eef677e8c3ccc2758fd590bc20e16->enter($__internal_b9d5b4a6e8bba7c4ea8ed7e22466c361066eef677e8c3ccc2758fd590bc20e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b9d5b4a6e8bba7c4ea8ed7e22466c361066eef677e8c3ccc2758fd590bc20e16->leave($__internal_b9d5b4a6e8bba7c4ea8ed7e22466c361066eef677e8c3ccc2758fd590bc20e16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
