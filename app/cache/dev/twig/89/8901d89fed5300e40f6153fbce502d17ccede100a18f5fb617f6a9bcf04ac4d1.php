<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4286a7c63cd91011517a07fd3f3725d498f58ded7e60910c3dedab8995c72fc4 extends Twig_Template
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
        $__internal_973270b8f83d75842c205c827b04b0cc09210476c99af144b1acb2db00705f14 = $this->env->getExtension("native_profiler");
        $__internal_973270b8f83d75842c205c827b04b0cc09210476c99af144b1acb2db00705f14->enter($__internal_973270b8f83d75842c205c827b04b0cc09210476c99af144b1acb2db00705f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_973270b8f83d75842c205c827b04b0cc09210476c99af144b1acb2db00705f14->leave($__internal_973270b8f83d75842c205c827b04b0cc09210476c99af144b1acb2db00705f14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
