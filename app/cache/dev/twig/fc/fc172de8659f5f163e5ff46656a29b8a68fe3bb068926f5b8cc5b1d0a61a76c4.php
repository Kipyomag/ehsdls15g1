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
        $__internal_e00cfd5c761f35cefb192f92198dcd9c5157b54b609020be084b840e0c30e365 = $this->env->getExtension("native_profiler");
        $__internal_e00cfd5c761f35cefb192f92198dcd9c5157b54b609020be084b840e0c30e365->enter($__internal_e00cfd5c761f35cefb192f92198dcd9c5157b54b609020be084b840e0c30e365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EhsBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e00cfd5c761f35cefb192f92198dcd9c5157b54b609020be084b840e0c30e365->leave($__internal_e00cfd5c761f35cefb192f92198dcd9c5157b54b609020be084b840e0c30e365_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a4abe8a027ab9730346b3f56199117a6d755cddcc609abe4a63fb67e002458e7 = $this->env->getExtension("native_profiler");
        $__internal_a4abe8a027ab9730346b3f56199117a6d755cddcc609abe4a63fb67e002458e7->enter($__internal_a4abe8a027ab9730346b3f56199117a6d755cddcc609abe4a63fb67e002458e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_a4abe8a027ab9730346b3f56199117a6d755cddcc609abe4a63fb67e002458e7->leave($__internal_a4abe8a027ab9730346b3f56199117a6d755cddcc609abe4a63fb67e002458e7_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5b46b9959332f47c29710c4e9b340604d45f557a5afd5da290394bb7a7b09eb1 = $this->env->getExtension("native_profiler");
        $__internal_5b46b9959332f47c29710c4e9b340604d45f557a5afd5da290394bb7a7b09eb1->enter($__internal_5b46b9959332f47c29710c4e9b340604d45f557a5afd5da290394bb7a7b09eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5b46b9959332f47c29710c4e9b340604d45f557a5afd5da290394bb7a7b09eb1->leave($__internal_5b46b9959332f47c29710c4e9b340604d45f557a5afd5da290394bb7a7b09eb1_prof);

    }

    // line 10
    public function block_ImgIndex($context, array $blocks = array())
    {
        $__internal_7b5b519a28f95214d22291728257540e744b41850773bd7b9d8341f74b53652f = $this->env->getExtension("native_profiler");
        $__internal_7b5b519a28f95214d22291728257540e744b41850773bd7b9d8341f74b53652f->enter($__internal_7b5b519a28f95214d22291728257540e744b41850773bd7b9d8341f74b53652f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ImgIndex"));

        // line 11
        echo "    <div id=\"GrandeIntro\">
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/handicap.jpg"), "html", null, true);
        echo "\" width=\"100%\" height=\"100%\">
    </div>
";
        
        $__internal_7b5b519a28f95214d22291728257540e744b41850773bd7b9d8341f74b53652f->leave($__internal_7b5b519a28f95214d22291728257540e744b41850773bd7b9d8341f74b53652f_prof);

    }

    // line 15
    public function block_classNav($context, array $blocks = array())
    {
        $__internal_b28e2fd61e0229dc3ab641fa519040b8af36d0d4ab6bd055bd25e9862a40e31c = $this->env->getExtension("native_profiler");
        $__internal_b28e2fd61e0229dc3ab641fa519040b8af36d0d4ab6bd055bd25e9862a40e31c->enter($__internal_b28e2fd61e0229dc3ab641fa519040b8af36d0d4ab6bd055bd25e9862a40e31c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classNav"));

        // line 16
        echo "    <nav id=\"topNavbar\" class=\"navbar navbar\">
";
        
        $__internal_b28e2fd61e0229dc3ab641fa519040b8af36d0d4ab6bd055bd25e9862a40e31c->leave($__internal_b28e2fd61e0229dc3ab641fa519040b8af36d0d4ab6bd055bd25e9862a40e31c_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_02fc9659e6a39bdf5dc727af5166f7c9aeeb1ace9582019810d992e7a62ef310 = $this->env->getExtension("native_profiler");
        $__internal_02fc9659e6a39bdf5dc727af5166f7c9aeeb1ace9582019810d992e7a62ef310->enter($__internal_02fc9659e6a39bdf5dc727af5166f7c9aeeb1ace9582019810d992e7a62ef310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"connexion\">
        <p>Connectez-vous</p>
    </div>
    <div class=\"inscription\">
        <p>Créer un compte</p>
    </div>
";
        
        $__internal_02fc9659e6a39bdf5dc727af5166f7c9aeeb1ace9582019810d992e7a62ef310->leave($__internal_02fc9659e6a39bdf5dc727af5166f7c9aeeb1ace9582019810d992e7a62ef310_prof);

    }

    // line 26
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_767f01cd500af9b7eee332b9c18d82f6823def23277e4a197df99b90f184bedc = $this->env->getExtension("native_profiler");
        $__internal_767f01cd500af9b7eee332b9c18d82f6823def23277e4a197df99b90f184bedc->enter($__internal_767f01cd500af9b7eee332b9c18d82f6823def23277e4a197df99b90f184bedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_767f01cd500af9b7eee332b9c18d82f6823def23277e4a197df99b90f184bedc->leave($__internal_767f01cd500af9b7eee332b9c18d82f6823def23277e4a197df99b90f184bedc_prof);

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
