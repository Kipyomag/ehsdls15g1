<?php

/* @Ehs/Default/index.html.twig */
class __TwigTemplate_f37526b09e9140ee1824b1e6cfffef4672abda52ef8a91f71da717b5bc8f7a63 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@Ehs/Default/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'ImgIndex' => array($this, 'block_ImgIndex'),
            'classNav' => array($this, 'block_classNav'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a16f4421ed7ba8ad7eb8f0c70e6101209dea49363863ee93741a297f6218ede4 = $this->env->getExtension("native_profiler");
        $__internal_a16f4421ed7ba8ad7eb8f0c70e6101209dea49363863ee93741a297f6218ede4->enter($__internal_a16f4421ed7ba8ad7eb8f0c70e6101209dea49363863ee93741a297f6218ede4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ehs/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a16f4421ed7ba8ad7eb8f0c70e6101209dea49363863ee93741a297f6218ede4->leave($__internal_a16f4421ed7ba8ad7eb8f0c70e6101209dea49363863ee93741a297f6218ede4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12031237a143aa9e2656f4b899106fc374e4a660b37339dc6c54a1dce2ed07d2 = $this->env->getExtension("native_profiler");
        $__internal_12031237a143aa9e2656f4b899106fc374e4a660b37339dc6c54a1dce2ed07d2->enter($__internal_12031237a143aa9e2656f4b899106fc374e4a660b37339dc6c54a1dce2ed07d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_12031237a143aa9e2656f4b899106fc374e4a660b37339dc6c54a1dce2ed07d2->leave($__internal_12031237a143aa9e2656f4b899106fc374e4a660b37339dc6c54a1dce2ed07d2_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_47e13c652c183ae7f00e6491a59b38bd8f5413b8bb2f1f54be6ac1b296fa3401 = $this->env->getExtension("native_profiler");
        $__internal_47e13c652c183ae7f00e6491a59b38bd8f5413b8bb2f1f54be6ac1b296fa3401->enter($__internal_47e13c652c183ae7f00e6491a59b38bd8f5413b8bb2f1f54be6ac1b296fa3401_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/bootstrap-3.3.7-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/style/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/style/styleIndex.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_47e13c652c183ae7f00e6491a59b38bd8f5413b8bb2f1f54be6ac1b296fa3401->leave($__internal_47e13c652c183ae7f00e6491a59b38bd8f5413b8bb2f1f54be6ac1b296fa3401_prof);

    }

    // line 10
    public function block_ImgIndex($context, array $blocks = array())
    {
        $__internal_21ae49cae98bed80dbd693d9a92f4ca9a5b3c3fcce0e283e4204e90e060de9f2 = $this->env->getExtension("native_profiler");
        $__internal_21ae49cae98bed80dbd693d9a92f4ca9a5b3c3fcce0e283e4204e90e060de9f2->enter($__internal_21ae49cae98bed80dbd693d9a92f4ca9a5b3c3fcce0e283e4204e90e060de9f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ImgIndex"));

        // line 11
        echo "    <div id=\"GrandeIntro\">
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/handicap.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
    </div>
";
        
        $__internal_21ae49cae98bed80dbd693d9a92f4ca9a5b3c3fcce0e283e4204e90e060de9f2->leave($__internal_21ae49cae98bed80dbd693d9a92f4ca9a5b3c3fcce0e283e4204e90e060de9f2_prof);

    }

    // line 15
    public function block_classNav($context, array $blocks = array())
    {
        $__internal_b24367bde536c5ebfd457caecd2f14c18c69ee5606834ebf400f7c1fa81afd08 = $this->env->getExtension("native_profiler");
        $__internal_b24367bde536c5ebfd457caecd2f14c18c69ee5606834ebf400f7c1fa81afd08->enter($__internal_b24367bde536c5ebfd457caecd2f14c18c69ee5606834ebf400f7c1fa81afd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classNav"));

        // line 16
        echo "    <nav id=\"topNavbar\" class=\"navbar navbar\">
";
        
        $__internal_b24367bde536c5ebfd457caecd2f14c18c69ee5606834ebf400f7c1fa81afd08->leave($__internal_b24367bde536c5ebfd457caecd2f14c18c69ee5606834ebf400f7c1fa81afd08_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b3f1e78f2ab86303fef0a235e02e042aafd736b4961bcdc8a268d2b34728d38 = $this->env->getExtension("native_profiler");
        $__internal_4b3f1e78f2ab86303fef0a235e02e042aafd736b4961bcdc8a268d2b34728d38->enter($__internal_4b3f1e78f2ab86303fef0a235e02e042aafd736b4961bcdc8a268d2b34728d38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"connexion\">
        <p>Connectez-vous</p>
    </div>
    <div class=\"inscription\">
        <p>Créer un compte</p>
    </div>
";
        
        $__internal_4b3f1e78f2ab86303fef0a235e02e042aafd736b4961bcdc8a268d2b34728d38->leave($__internal_4b3f1e78f2ab86303fef0a235e02e042aafd736b4961bcdc8a268d2b34728d38_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e523760c3185435ad3502546af8d31669f3f0d86d4a4cd7a68610341af55488 = $this->env->getExtension("native_profiler");
        $__internal_9e523760c3185435ad3502546af8d31669f3f0d86d4a4cd7a68610341af55488->enter($__internal_9e523760c3185435ad3502546af8d31669f3f0d86d4a4cd7a68610341af55488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 27
        echo "    <script src=\"//code.jquery.com/jquery.min.js\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/index.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_9e523760c3185435ad3502546af8d31669f3f0d86d4a4cd7a68610341af55488->leave($__internal_9e523760c3185435ad3502546af8d31669f3f0d86d4a4cd7a68610341af55488_prof);

    }

    public function getTemplateName()
    {
        return "@Ehs/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 29,  136 => 28,  133 => 27,  127 => 26,  114 => 19,  108 => 18,  100 => 16,  94 => 15,  84 => 12,  81 => 11,  75 => 10,  66 => 8,  62 => 7,  57 => 6,  51 => 5,  39 => 3,  11 => 1,);
    }
}
/* {% extends '::base.html.twig' %}*/
/* */
/* {% block title %}Accueil{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     <link rel="stylesheet" href="{{ asset('public/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset('public/style/style.css') }}" type="text/css" media="all" />*/
/*     <link rel="stylesheet" href="{{ asset('public/style/styleIndex.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* {% block ImgIndex %}*/
/*     <div id="GrandeIntro">*/
/*     <img src="{{ asset('public/images/handicap.jpg') }}" width="100%" height="100%">*/
/*     </div>*/
/* {% endblock %}*/
/* {% block classNav %}*/
/*     <nav id="topNavbar" class="navbar navbar">*/
/* {% endblock %}*/
/* {% block body %}*/
/*     <div class="connexion">*/
/*         <p>Connectez-vous</p>*/
/*     </div>*/
/*     <div class="inscription">*/
/*         <p>Créer un compte</p>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <script src="//code.jquery.com/jquery.min.js"></script>*/
/*     <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*     <script src="{{ asset('public/js/index.js') }}"></script>*/
/* {% endblock %}*/
