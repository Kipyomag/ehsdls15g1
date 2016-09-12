<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c395eff2c561357e7941daf0f0ab19a895c703e20d4cc8f6941785535bdce7eb extends Twig_Template
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
        $__internal_e32feb94b7fba62b14865849657ce7c4e50323b3fdb74938c6a58d9966455a20 = $this->env->getExtension("native_profiler");
        $__internal_e32feb94b7fba62b14865849657ce7c4e50323b3fdb74938c6a58d9966455a20->enter($__internal_e32feb94b7fba62b14865849657ce7c4e50323b3fdb74938c6a58d9966455a20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e32feb94b7fba62b14865849657ce7c4e50323b3fdb74938c6a58d9966455a20->leave($__internal_e32feb94b7fba62b14865849657ce7c4e50323b3fdb74938c6a58d9966455a20_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
