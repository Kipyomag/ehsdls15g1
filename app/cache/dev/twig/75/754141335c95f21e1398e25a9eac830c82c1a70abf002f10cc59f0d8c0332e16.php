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
        $__internal_3ce3183e1951d0900a15ced31bdd91c72769cc67d3b222c46d2bb0291d5edf97 = $this->env->getExtension("native_profiler");
        $__internal_3ce3183e1951d0900a15ced31bdd91c72769cc67d3b222c46d2bb0291d5edf97->enter($__internal_3ce3183e1951d0900a15ced31bdd91c72769cc67d3b222c46d2bb0291d5edf97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3ce3183e1951d0900a15ced31bdd91c72769cc67d3b222c46d2bb0291d5edf97->leave($__internal_3ce3183e1951d0900a15ced31bdd91c72769cc67d3b222c46d2bb0291d5edf97_prof);

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
