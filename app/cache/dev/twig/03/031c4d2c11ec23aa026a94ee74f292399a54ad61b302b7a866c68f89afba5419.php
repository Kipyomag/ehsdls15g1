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
        $__internal_d2f88f7a076d4f94a8caf56e232f250602b510688e33c26b6b5b731f97a10c88 = $this->env->getExtension("native_profiler");
        $__internal_d2f88f7a076d4f94a8caf56e232f250602b510688e33c26b6b5b731f97a10c88->enter($__internal_d2f88f7a076d4f94a8caf56e232f250602b510688e33c26b6b5b731f97a10c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d2f88f7a076d4f94a8caf56e232f250602b510688e33c26b6b5b731f97a10c88->leave($__internal_d2f88f7a076d4f94a8caf56e232f250602b510688e33c26b6b5b731f97a10c88_prof);

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
