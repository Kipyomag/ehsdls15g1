<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_44eb9f8bec44b3efe044c840405ad0e12bdef42161466d671758faa4a86030aa extends Twig_Template
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
        $__internal_d77ae2b8e3ebe7f4d68aeb41b747afe03b622b010681f0532dbd7909a7df7d5d = $this->env->getExtension("native_profiler");
        $__internal_d77ae2b8e3ebe7f4d68aeb41b747afe03b622b010681f0532dbd7909a7df7d5d->enter($__internal_d77ae2b8e3ebe7f4d68aeb41b747afe03b622b010681f0532dbd7909a7df7d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_d77ae2b8e3ebe7f4d68aeb41b747afe03b622b010681f0532dbd7909a7df7d5d->leave($__internal_d77ae2b8e3ebe7f4d68aeb41b747afe03b622b010681f0532dbd7909a7df7d5d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
