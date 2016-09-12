<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_091aa47b269d873fb0bdbc88aa1580928362e822fc4a0b1c30cae079512f9494 extends Twig_Template
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
        $__internal_507c38ff945999f0de6fbb1df071d39b5f912b649685164d8d7d3657d2768183 = $this->env->getExtension("native_profiler");
        $__internal_507c38ff945999f0de6fbb1df071d39b5f912b649685164d8d7d3657d2768183->enter($__internal_507c38ff945999f0de6fbb1df071d39b5f912b649685164d8d7d3657d2768183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_507c38ff945999f0de6fbb1df071d39b5f912b649685164d8d7d3657d2768183->leave($__internal_507c38ff945999f0de6fbb1df071d39b5f912b649685164d8d7d3657d2768183_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
