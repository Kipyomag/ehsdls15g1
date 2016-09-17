<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4eae7d6513dfefdccc56b87726aa058355bd06cb9ba9f525a118a5a4df00e35c extends Twig_Template
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
        $__internal_61be5331b6b8683c33fa9e3cc66f769f19b1e2f538d55c98dd285ff67d6b0a0f = $this->env->getExtension("native_profiler");
        $__internal_61be5331b6b8683c33fa9e3cc66f769f19b1e2f538d55c98dd285ff67d6b0a0f->enter($__internal_61be5331b6b8683c33fa9e3cc66f769f19b1e2f538d55c98dd285ff67d6b0a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_61be5331b6b8683c33fa9e3cc66f769f19b1e2f538d55c98dd285ff67d6b0a0f->leave($__internal_61be5331b6b8683c33fa9e3cc66f769f19b1e2f538d55c98dd285ff67d6b0a0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
