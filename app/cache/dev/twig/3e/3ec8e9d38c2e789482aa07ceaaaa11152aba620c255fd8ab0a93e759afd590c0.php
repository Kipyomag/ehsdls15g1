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
        $__internal_9b1bff3d07faee682f4f0b33014fd77d52132efc10cb15711b095e132aba51e2 = $this->env->getExtension("native_profiler");
        $__internal_9b1bff3d07faee682f4f0b33014fd77d52132efc10cb15711b095e132aba51e2->enter($__internal_9b1bff3d07faee682f4f0b33014fd77d52132efc10cb15711b095e132aba51e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_9b1bff3d07faee682f4f0b33014fd77d52132efc10cb15711b095e132aba51e2->leave($__internal_9b1bff3d07faee682f4f0b33014fd77d52132efc10cb15711b095e132aba51e2_prof);

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
