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
        $__internal_cfcf403fe20c4438b70f09b76e9516ac289080264fca2fa0f9afd1b738dbc691 = $this->env->getExtension("native_profiler");
        $__internal_cfcf403fe20c4438b70f09b76e9516ac289080264fca2fa0f9afd1b738dbc691->enter($__internal_cfcf403fe20c4438b70f09b76e9516ac289080264fca2fa0f9afd1b738dbc691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Ehs/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfcf403fe20c4438b70f09b76e9516ac289080264fca2fa0f9afd1b738dbc691->leave($__internal_cfcf403fe20c4438b70f09b76e9516ac289080264fca2fa0f9afd1b738dbc691_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b49121607171151decb0d203362a625568fd6cb44b0e7e2cf508b32abd352bdf = $this->env->getExtension("native_profiler");
        $__internal_b49121607171151decb0d203362a625568fd6cb44b0e7e2cf508b32abd352bdf->enter($__internal_b49121607171151decb0d203362a625568fd6cb44b0e7e2cf508b32abd352bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_b49121607171151decb0d203362a625568fd6cb44b0e7e2cf508b32abd352bdf->leave($__internal_b49121607171151decb0d203362a625568fd6cb44b0e7e2cf508b32abd352bdf_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51acc8d9225a964e2e72b2e1dd073f30b95725c0cfebeadccc67a7bc0df16c3a = $this->env->getExtension("native_profiler");
        $__internal_51acc8d9225a964e2e72b2e1dd073f30b95725c0cfebeadccc67a7bc0df16c3a->enter($__internal_51acc8d9225a964e2e72b2e1dd073f30b95725c0cfebeadccc67a7bc0df16c3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_51acc8d9225a964e2e72b2e1dd073f30b95725c0cfebeadccc67a7bc0df16c3a->leave($__internal_51acc8d9225a964e2e72b2e1dd073f30b95725c0cfebeadccc67a7bc0df16c3a_prof);

    }

    // line 10
    public function block_ImgIndex($context, array $blocks = array())
    {
        $__internal_3e2480e8597c8558ef4cbbc7aea695137131f5834fa928f45355cf85ec8a75a9 = $this->env->getExtension("native_profiler");
        $__internal_3e2480e8597c8558ef4cbbc7aea695137131f5834fa928f45355cf85ec8a75a9->enter($__internal_3e2480e8597c8558ef4cbbc7aea695137131f5834fa928f45355cf85ec8a75a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ImgIndex"));

        // line 11
        echo "    <div id=\"GrandeIntro\">
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/handicap.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
    </div>
";
        
        $__internal_3e2480e8597c8558ef4cbbc7aea695137131f5834fa928f45355cf85ec8a75a9->leave($__internal_3e2480e8597c8558ef4cbbc7aea695137131f5834fa928f45355cf85ec8a75a9_prof);

    }

    // line 15
    public function block_classNav($context, array $blocks = array())
    {
        $__internal_5a2978b3377968741ee6d74a039a986325cd438845f5c922290d746cf3c728e4 = $this->env->getExtension("native_profiler");
        $__internal_5a2978b3377968741ee6d74a039a986325cd438845f5c922290d746cf3c728e4->enter($__internal_5a2978b3377968741ee6d74a039a986325cd438845f5c922290d746cf3c728e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classNav"));

        // line 16
        echo "    <nav id=\"topNavbar\" class=\"navbar navbar\">
";
        
        $__internal_5a2978b3377968741ee6d74a039a986325cd438845f5c922290d746cf3c728e4->leave($__internal_5a2978b3377968741ee6d74a039a986325cd438845f5c922290d746cf3c728e4_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_e2936ab9e9dc32c86dc1da37d85f9ef7373a64e8892436f84b64de8f95e287ce = $this->env->getExtension("native_profiler");
        $__internal_e2936ab9e9dc32c86dc1da37d85f9ef7373a64e8892436f84b64de8f95e287ce->enter($__internal_e2936ab9e9dc32c86dc1da37d85f9ef7373a64e8892436f84b64de8f95e287ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"connexion\">
        <p>Connectez-vous</p>
    </div>
    <div class=\"inscription\">
        <p>Créer un compte</p>
    </div>
";
        
        $__internal_e2936ab9e9dc32c86dc1da37d85f9ef7373a64e8892436f84b64de8f95e287ce->leave($__internal_e2936ab9e9dc32c86dc1da37d85f9ef7373a64e8892436f84b64de8f95e287ce_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_66758320ec6e1b8b98f9c058da94e52004eeb4d1ed445b64f26b77fdcad072eb = $this->env->getExtension("native_profiler");
        $__internal_66758320ec6e1b8b98f9c058da94e52004eeb4d1ed445b64f26b77fdcad072eb->enter($__internal_66758320ec6e1b8b98f9c058da94e52004eeb4d1ed445b64f26b77fdcad072eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_66758320ec6e1b8b98f9c058da94e52004eeb4d1ed445b64f26b77fdcad072eb->leave($__internal_66758320ec6e1b8b98f9c058da94e52004eeb4d1ed445b64f26b77fdcad072eb_prof);

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
