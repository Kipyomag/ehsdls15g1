<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_2f82eb8ec185f1bb8b50b9a28c98d545990f6794a38de5bd8e9c17697a127552 extends Twig_Template
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
        $__internal_6afbaf944b7fc0161f93d7b0088309eac1b77c9ca0c4098343f788acc5f744ea = $this->env->getExtension("native_profiler");
        $__internal_6afbaf944b7fc0161f93d7b0088309eac1b77c9ca0c4098343f788acc5f744ea->enter($__internal_6afbaf944b7fc0161f93d7b0088309eac1b77c9ca0c4098343f788acc5f744ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_6afbaf944b7fc0161f93d7b0088309eac1b77c9ca0c4098343f788acc5f744ea->leave($__internal_6afbaf944b7fc0161f93d7b0088309eac1b77c9ca0c4098343f788acc5f744ea_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
