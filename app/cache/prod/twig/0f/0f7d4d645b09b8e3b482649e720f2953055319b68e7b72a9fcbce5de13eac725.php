<?php

/* EhsBundle:Default:index.html.twig */
class __TwigTemplate_76dfcc42e48840b92c491fbe50bf4383f40cb8b91ad017f0a9b51bd0864820cf extends Twig_Template
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
        $__internal_711bc7043b774fd350e5656d3fabe1460c03859849cca0fceea79568317b40d6 = $this->env->getExtension("native_profiler");
        $__internal_711bc7043b774fd350e5656d3fabe1460c03859849cca0fceea79568317b40d6->enter($__internal_711bc7043b774fd350e5656d3fabe1460c03859849cca0fceea79568317b40d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EhsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_711bc7043b774fd350e5656d3fabe1460c03859849cca0fceea79568317b40d6->leave($__internal_711bc7043b774fd350e5656d3fabe1460c03859849cca0fceea79568317b40d6_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5afb4a95c975b03e3977292eb489f4d91dcffb06575a36c81119f5c627619a42 = $this->env->getExtension("native_profiler");
        $__internal_5afb4a95c975b03e3977292eb489f4d91dcffb06575a36c81119f5c627619a42->enter($__internal_5afb4a95c975b03e3977292eb489f4d91dcffb06575a36c81119f5c627619a42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_5afb4a95c975b03e3977292eb489f4d91dcffb06575a36c81119f5c627619a42->leave($__internal_5afb4a95c975b03e3977292eb489f4d91dcffb06575a36c81119f5c627619a42_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7f7cacea4d2f8573273a114848358d05105b2c1d08b3fd11e41694ca2bac8eaf = $this->env->getExtension("native_profiler");
        $__internal_7f7cacea4d2f8573273a114848358d05105b2c1d08b3fd11e41694ca2bac8eaf->enter($__internal_7f7cacea4d2f8573273a114848358d05105b2c1d08b3fd11e41694ca2bac8eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7f7cacea4d2f8573273a114848358d05105b2c1d08b3fd11e41694ca2bac8eaf->leave($__internal_7f7cacea4d2f8573273a114848358d05105b2c1d08b3fd11e41694ca2bac8eaf_prof);

    }

    // line 10
    public function block_ImgIndex($context, array $blocks = array())
    {
        $__internal_48390a1a0b77f3913536d752a1415f83266afd9437ae53c0a1cd731493782a37 = $this->env->getExtension("native_profiler");
        $__internal_48390a1a0b77f3913536d752a1415f83266afd9437ae53c0a1cd731493782a37->enter($__internal_48390a1a0b77f3913536d752a1415f83266afd9437ae53c0a1cd731493782a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ImgIndex"));

        // line 11
        echo "    <div id=\"GrandeIntro\">
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/handicap.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
    </div>
";
        
        $__internal_48390a1a0b77f3913536d752a1415f83266afd9437ae53c0a1cd731493782a37->leave($__internal_48390a1a0b77f3913536d752a1415f83266afd9437ae53c0a1cd731493782a37_prof);

    }

    // line 15
    public function block_classNav($context, array $blocks = array())
    {
        $__internal_fbcd6ee8f2f4720c1facb610b87daf7333cced124aa2141fa93fae6eeb5d3ede = $this->env->getExtension("native_profiler");
        $__internal_fbcd6ee8f2f4720c1facb610b87daf7333cced124aa2141fa93fae6eeb5d3ede->enter($__internal_fbcd6ee8f2f4720c1facb610b87daf7333cced124aa2141fa93fae6eeb5d3ede_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classNav"));

        // line 16
        echo "    <nav id=\"topNavbar\" class=\"navbar navbar\">
";
        
        $__internal_fbcd6ee8f2f4720c1facb610b87daf7333cced124aa2141fa93fae6eeb5d3ede->leave($__internal_fbcd6ee8f2f4720c1facb610b87daf7333cced124aa2141fa93fae6eeb5d3ede_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_359b830fe8354afb8684b359b56b67e37283bfbdab09448c72ab06e9127c6e1f = $this->env->getExtension("native_profiler");
        $__internal_359b830fe8354afb8684b359b56b67e37283bfbdab09448c72ab06e9127c6e1f->enter($__internal_359b830fe8354afb8684b359b56b67e37283bfbdab09448c72ab06e9127c6e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"connexion\">
        <p>Connectez-vous</p>
    </div>
    <div class=\"inscription\">
        <p>Créer un compte</p>
    </div>
";
        
        $__internal_359b830fe8354afb8684b359b56b67e37283bfbdab09448c72ab06e9127c6e1f->leave($__internal_359b830fe8354afb8684b359b56b67e37283bfbdab09448c72ab06e9127c6e1f_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_356bf4d4dd3c17bb3760cd557b89da43ec00eb16eca62f92347aac9189f441f5 = $this->env->getExtension("native_profiler");
        $__internal_356bf4d4dd3c17bb3760cd557b89da43ec00eb16eca62f92347aac9189f441f5->enter($__internal_356bf4d4dd3c17bb3760cd557b89da43ec00eb16eca62f92347aac9189f441f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_356bf4d4dd3c17bb3760cd557b89da43ec00eb16eca62f92347aac9189f441f5->leave($__internal_356bf4d4dd3c17bb3760cd557b89da43ec00eb16eca62f92347aac9189f441f5_prof);

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
