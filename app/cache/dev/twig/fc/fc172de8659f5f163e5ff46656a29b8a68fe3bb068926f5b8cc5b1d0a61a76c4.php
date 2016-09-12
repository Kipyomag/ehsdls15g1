<?php

/* EhsBundle:Default:index.html.twig */
class __TwigTemplate_2f503b3415fd61c9071cb356100b736214720cf6fb425ddc3bf0c6510f424e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EhsBundle:Default:index.html.twig", 1);
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
        $__internal_92055e8ec913b3b1ccc5198da7081f7077bfda19e9a4ffdc59775a11028e1b2c = $this->env->getExtension("native_profiler");
        $__internal_92055e8ec913b3b1ccc5198da7081f7077bfda19e9a4ffdc59775a11028e1b2c->enter($__internal_92055e8ec913b3b1ccc5198da7081f7077bfda19e9a4ffdc59775a11028e1b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EhsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92055e8ec913b3b1ccc5198da7081f7077bfda19e9a4ffdc59775a11028e1b2c->leave($__internal_92055e8ec913b3b1ccc5198da7081f7077bfda19e9a4ffdc59775a11028e1b2c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d420b87c8294847848c9c3e645b32e0efdfbf635809a8dfec2c507395941ef02 = $this->env->getExtension("native_profiler");
        $__internal_d420b87c8294847848c9c3e645b32e0efdfbf635809a8dfec2c507395941ef02->enter($__internal_d420b87c8294847848c9c3e645b32e0efdfbf635809a8dfec2c507395941ef02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_d420b87c8294847848c9c3e645b32e0efdfbf635809a8dfec2c507395941ef02->leave($__internal_d420b87c8294847848c9c3e645b32e0efdfbf635809a8dfec2c507395941ef02_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06873efab9eb9ad3b316504c538a308f3c72f9407cef004a80af59de02f063c6 = $this->env->getExtension("native_profiler");
        $__internal_06873efab9eb9ad3b316504c538a308f3c72f9407cef004a80af59de02f063c6->enter($__internal_06873efab9eb9ad3b316504c538a308f3c72f9407cef004a80af59de02f063c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_06873efab9eb9ad3b316504c538a308f3c72f9407cef004a80af59de02f063c6->leave($__internal_06873efab9eb9ad3b316504c538a308f3c72f9407cef004a80af59de02f063c6_prof);

    }

    // line 10
    public function block_ImgIndex($context, array $blocks = array())
    {
        $__internal_e9f8c29548ac8a9972721b51b1cf008d06e7732de4b384e4f16fc3907664bbec = $this->env->getExtension("native_profiler");
        $__internal_e9f8c29548ac8a9972721b51b1cf008d06e7732de4b384e4f16fc3907664bbec->enter($__internal_e9f8c29548ac8a9972721b51b1cf008d06e7732de4b384e4f16fc3907664bbec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ImgIndex"));

        // line 11
        echo "    <div id=\"GrandeIntro\">
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/handicap.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
    </div>
";
        
        $__internal_e9f8c29548ac8a9972721b51b1cf008d06e7732de4b384e4f16fc3907664bbec->leave($__internal_e9f8c29548ac8a9972721b51b1cf008d06e7732de4b384e4f16fc3907664bbec_prof);

    }

    // line 15
    public function block_classNav($context, array $blocks = array())
    {
        $__internal_4771aaae3afcf0f27211c6081cf92b561b63712307093849678a9a9e234909dd = $this->env->getExtension("native_profiler");
        $__internal_4771aaae3afcf0f27211c6081cf92b561b63712307093849678a9a9e234909dd->enter($__internal_4771aaae3afcf0f27211c6081cf92b561b63712307093849678a9a9e234909dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classNav"));

        // line 16
        echo "    <nav id=\"topNavbar\" class=\"navbar navbar\">
";
        
        $__internal_4771aaae3afcf0f27211c6081cf92b561b63712307093849678a9a9e234909dd->leave($__internal_4771aaae3afcf0f27211c6081cf92b561b63712307093849678a9a9e234909dd_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_f78142d28a3fe002086f0dc0aa912e366ce6b99e909e2b065df7071d2867924d = $this->env->getExtension("native_profiler");
        $__internal_f78142d28a3fe002086f0dc0aa912e366ce6b99e909e2b065df7071d2867924d->enter($__internal_f78142d28a3fe002086f0dc0aa912e366ce6b99e909e2b065df7071d2867924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"connexion\">
        <p>Connectez-vous</p>
    </div>
    <div class=\"inscription\">
        <p>Créer un compte</p>
    </div>
";
        
        $__internal_f78142d28a3fe002086f0dc0aa912e366ce6b99e909e2b065df7071d2867924d->leave($__internal_f78142d28a3fe002086f0dc0aa912e366ce6b99e909e2b065df7071d2867924d_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_73a8c081eb417f64e623359ef16cb04e80594c604e2f63a3d68d289f104848ef = $this->env->getExtension("native_profiler");
        $__internal_73a8c081eb417f64e623359ef16cb04e80594c604e2f63a3d68d289f104848ef->enter($__internal_73a8c081eb417f64e623359ef16cb04e80594c604e2f63a3d68d289f104848ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_73a8c081eb417f64e623359ef16cb04e80594c604e2f63a3d68d289f104848ef->leave($__internal_73a8c081eb417f64e623359ef16cb04e80594c604e2f63a3d68d289f104848ef_prof);

    }

    public function getTemplateName()
    {
        return "EhsBundle:Default:index.html.twig";
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
