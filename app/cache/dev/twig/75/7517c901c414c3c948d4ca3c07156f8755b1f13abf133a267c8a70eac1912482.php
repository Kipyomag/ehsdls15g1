<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9e50f34683c1c4d36f3ce27aaaec0f84b5262046166785becdfd5cc549c6ad21 extends Twig_Template
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
        $__internal_8ba1ff1dd1b2cf850f2cbb5dbc6165dfd5e5e14a78b919a776593643d2e8cf01 = $this->env->getExtension("native_profiler");
        $__internal_8ba1ff1dd1b2cf850f2cbb5dbc6165dfd5e5e14a78b919a776593643d2e8cf01->enter($__internal_8ba1ff1dd1b2cf850f2cbb5dbc6165dfd5e5e14a78b919a776593643d2e8cf01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_8ba1ff1dd1b2cf850f2cbb5dbc6165dfd5e5e14a78b919a776593643d2e8cf01->leave($__internal_8ba1ff1dd1b2cf850f2cbb5dbc6165dfd5e5e14a78b919a776593643d2e8cf01_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
