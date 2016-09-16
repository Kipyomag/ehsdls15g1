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
        $__internal_8959f8046e16db6e65e04f54fcc86bf2effd4d1582c67361a37521863e059b04 = $this->env->getExtension("native_profiler");
        $__internal_8959f8046e16db6e65e04f54fcc86bf2effd4d1582c67361a37521863e059b04->enter($__internal_8959f8046e16db6e65e04f54fcc86bf2effd4d1582c67361a37521863e059b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EhsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8959f8046e16db6e65e04f54fcc86bf2effd4d1582c67361a37521863e059b04->leave($__internal_8959f8046e16db6e65e04f54fcc86bf2effd4d1582c67361a37521863e059b04_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a23e3fef41e1c0d0b5b70bf60b83d2e05d6c73ad33774738010d6b1915c0ce7 = $this->env->getExtension("native_profiler");
        $__internal_5a23e3fef41e1c0d0b5b70bf60b83d2e05d6c73ad33774738010d6b1915c0ce7->enter($__internal_5a23e3fef41e1c0d0b5b70bf60b83d2e05d6c73ad33774738010d6b1915c0ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_5a23e3fef41e1c0d0b5b70bf60b83d2e05d6c73ad33774738010d6b1915c0ce7->leave($__internal_5a23e3fef41e1c0d0b5b70bf60b83d2e05d6c73ad33774738010d6b1915c0ce7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d580d278aa8723b0ca6f2530704848195f98257b695583bf5366d55b045fca3 = $this->env->getExtension("native_profiler");
        $__internal_6d580d278aa8723b0ca6f2530704848195f98257b695583bf5366d55b045fca3->enter($__internal_6d580d278aa8723b0ca6f2530704848195f98257b695583bf5366d55b045fca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_6d580d278aa8723b0ca6f2530704848195f98257b695583bf5366d55b045fca3->leave($__internal_6d580d278aa8723b0ca6f2530704848195f98257b695583bf5366d55b045fca3_prof);

    }

    // line 10
    public function block_ImgIndex($context, array $blocks = array())
    {
        $__internal_8ff658faf87804e045920dd62ea82336237c22aed15cd9cf283f1a10d0a5d30b = $this->env->getExtension("native_profiler");
        $__internal_8ff658faf87804e045920dd62ea82336237c22aed15cd9cf283f1a10d0a5d30b->enter($__internal_8ff658faf87804e045920dd62ea82336237c22aed15cd9cf283f1a10d0a5d30b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ImgIndex"));

        // line 11
        echo "    <div id=\"GrandeIntro\">
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/handicap.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
    </div>
";
        
        $__internal_8ff658faf87804e045920dd62ea82336237c22aed15cd9cf283f1a10d0a5d30b->leave($__internal_8ff658faf87804e045920dd62ea82336237c22aed15cd9cf283f1a10d0a5d30b_prof);

    }

    // line 15
    public function block_classNav($context, array $blocks = array())
    {
        $__internal_74aaa0e57ebfeede820d0c835a782afcdec4ce338cec996513635d1d5fdf4e8c = $this->env->getExtension("native_profiler");
        $__internal_74aaa0e57ebfeede820d0c835a782afcdec4ce338cec996513635d1d5fdf4e8c->enter($__internal_74aaa0e57ebfeede820d0c835a782afcdec4ce338cec996513635d1d5fdf4e8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classNav"));

        // line 16
        echo "    <nav id=\"topNavbar\" class=\"navbar navbar\">
";
        
        $__internal_74aaa0e57ebfeede820d0c835a782afcdec4ce338cec996513635d1d5fdf4e8c->leave($__internal_74aaa0e57ebfeede820d0c835a782afcdec4ce338cec996513635d1d5fdf4e8c_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_a21985c881f8538c01fe5f8f41a132d7a010f764bd89804ddc6aeabc4bff8a5b = $this->env->getExtension("native_profiler");
        $__internal_a21985c881f8538c01fe5f8f41a132d7a010f764bd89804ddc6aeabc4bff8a5b->enter($__internal_a21985c881f8538c01fe5f8f41a132d7a010f764bd89804ddc6aeabc4bff8a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"connexion\">
        <p>Connectez-vous</p>
    </div>
    <div class=\"inscription\">
        <p>Créer un compte</p>
    </div>
";
        
        $__internal_a21985c881f8538c01fe5f8f41a132d7a010f764bd89804ddc6aeabc4bff8a5b->leave($__internal_a21985c881f8538c01fe5f8f41a132d7a010f764bd89804ddc6aeabc4bff8a5b_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c78ffecdbc6f6fdec2b7f1b6ce8d25cf0e8e63e02e1ccea68cacffb93839e2c1 = $this->env->getExtension("native_profiler");
        $__internal_c78ffecdbc6f6fdec2b7f1b6ce8d25cf0e8e63e02e1ccea68cacffb93839e2c1->enter($__internal_c78ffecdbc6f6fdec2b7f1b6ce8d25cf0e8e63e02e1ccea68cacffb93839e2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_c78ffecdbc6f6fdec2b7f1b6ce8d25cf0e8e63e02e1ccea68cacffb93839e2c1->leave($__internal_c78ffecdbc6f6fdec2b7f1b6ce8d25cf0e8e63e02e1ccea68cacffb93839e2c1_prof);

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
