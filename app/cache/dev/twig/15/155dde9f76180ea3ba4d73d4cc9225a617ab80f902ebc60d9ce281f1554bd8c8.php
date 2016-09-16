<?php

/* base.html.twig */
class __TwigTemplate_052b18022119076f3f1449120e0ae28e8149698c143ff26d4be3cfc6dc360d43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'ImgIndex' => array($this, 'block_ImgIndex'),
            'classNav' => array($this, 'block_classNav'),
            'body' => array($this, 'block_body'),
            'calendrier' => array($this, 'block_calendrier'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_905753ced6a8763b639ab901078a1d69db082ebf938d13111466226979ae2d2a = $this->env->getExtension("native_profiler");
        $__internal_905753ced6a8763b639ab901078a1d69db082ebf938d13111466226979ae2d2a->enter($__internal_905753ced6a8763b639ab901078a1d69db082ebf938d13111466226979ae2d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - EHS</title>

        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    ";
        // line 15
        $this->displayBlock('ImgIndex', $context, $blocks);
        // line 16
        echo "
    <div id=\"siteWrapper\">
        <header>
            <div id=\"headerTop\"></div>
                ";
        // line 20
        $this->displayBlock('classNav', $context, $blocks);
        // line 23
        echo "                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <a class=\"\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("ehs_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/images/logo.png"), "html", null, true);
        echo "\" width=\"80px\" height\"30px\"></a>
                    </div>
                    <div id=\"navbar\">
                        <ul class=\"nav navbar-nav\">
                            ";
        // line 29
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 30
            echo "
                                ";
            // line 34
            echo "
                                <li><a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("users_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Profil</a></li>
                                <li><a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("articles_index");
            echo "\">Articles</a></li>
                                <li><a href=\"#\">L'association</a></li>
                                <li><a href=\"#\">Nos actions</a></li>
                                <li><a href=\"#\">Agir & soutenirs</a></li>
                                <li><a href=\"#\">Presse</a></li>
                                <li><a href=\"#\">Médias</a></li>
                                <li><a href=\"#\">Contact</a></li>
                                <li><a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("users_logout");
            echo "\">Déconnection</a></li>
                            ";
        } else {
            // line 45
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("users_new");
            echo "\">Inscription</a></li>
                                <li><a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("users_login");
            echo "\">Connexion</a></li>
                                <li><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("articles_index");
            echo "\">Articles</a></li>
                                <li><a href=\"#\">L'association</a></li>
                                <li><a href=\"#\">Nos actions</a></li>
                                <li><a href=\"#\">Agir & soutenirs</a></li>
                                <li><a href=\"#\">Presse</a></li>
                                <li><a href=\"#\">Médias</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            ";
        }
        // line 55
        echo "                        </ul>
                    </div>
                </div>
            </nav>
    </header>
    
        <section id=\"content\">
            <div></div>
        </section>
    </div>
        <body>
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 67
            echo "                <div class=\"alert alert-success\">
                    <p align=\"center\">";
            // line 68
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "            
            ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "danger"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 73
            echo "                <div class=\"alert alert-danger\">
                    <p align=\"center\">";
            // line 74
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "
        ";
        // line 78
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 79
            echo "        <p align=\"center\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nom", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()), "html", null, true);
            echo "</strong></p>
        ";
        }
        // line 81
        echo "        <div class=\"body\">
            ";
        // line 82
        $this->displayBlock('body', $context, $blocks);
        // line 83
        echo "            <div class=\"containerCalendrier\">
                
                    
                    ";
        // line 86
        $this->displayBlock('calendrier', $context, $blocks);
        // line 105
        echo "                
            </div>
        </div>
                
            <hr>
</body>
            <footer>
                <div class=\"container\">
                    <p>IMIE - 2016 - dl15</p>
                </div>
            </footer>
        </div>

                    ";
        // line 118
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_905753ced6a8763b639ab901078a1d69db082ebf938d13111466226979ae2d2a->leave($__internal_905753ced6a8763b639ab901078a1d69db082ebf938d13111466226979ae2d2a_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa28af5a378c9ce6cde7350af49cd28b01990fcb2b303821b6412c917f868f01 = $this->env->getExtension("native_profiler");
        $__internal_fa28af5a378c9ce6cde7350af49cd28b01990fcb2b303821b6412c917f868f01->enter($__internal_fa28af5a378c9ce6cde7350af49cd28b01990fcb2b303821b6412c917f868f01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fa28af5a378c9ce6cde7350af49cd28b01990fcb2b303821b6412c917f868f01->leave($__internal_fa28af5a378c9ce6cde7350af49cd28b01990fcb2b303821b6412c917f868f01_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_181e2454cbcc29180ea309dc6d528cc5fe3dd3ca813cd314e5a3adeb4b03523a = $this->env->getExtension("native_profiler");
        $__internal_181e2454cbcc29180ea309dc6d528cc5fe3dd3ca813cd314e5a3adeb4b03523a->enter($__internal_181e2454cbcc29180ea309dc6d528cc5fe3dd3ca813cd314e5a3adeb4b03523a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/bootstrap-3.3.7-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/style/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
        
        $__internal_181e2454cbcc29180ea309dc6d528cc5fe3dd3ca813cd314e5a3adeb4b03523a->leave($__internal_181e2454cbcc29180ea309dc6d528cc5fe3dd3ca813cd314e5a3adeb4b03523a_prof);

    }

    // line 15
    public function block_ImgIndex($context, array $blocks = array())
    {
        $__internal_c88b54997a110c8ff7af301785cb356e399967095ab529b0630528fb44a207ef = $this->env->getExtension("native_profiler");
        $__internal_c88b54997a110c8ff7af301785cb356e399967095ab529b0630528fb44a207ef->enter($__internal_c88b54997a110c8ff7af301785cb356e399967095ab529b0630528fb44a207ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ImgIndex"));

        
        $__internal_c88b54997a110c8ff7af301785cb356e399967095ab529b0630528fb44a207ef->leave($__internal_c88b54997a110c8ff7af301785cb356e399967095ab529b0630528fb44a207ef_prof);

    }

    // line 20
    public function block_classNav($context, array $blocks = array())
    {
        $__internal_222ab3b3491f904c1a67f36469952928d50d9e5e9c243efccfd6bbe020f7d857 = $this->env->getExtension("native_profiler");
        $__internal_222ab3b3491f904c1a67f36469952928d50d9e5e9c243efccfd6bbe020f7d857->enter($__internal_222ab3b3491f904c1a67f36469952928d50d9e5e9c243efccfd6bbe020f7d857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classNav"));

        // line 21
        echo "                    <nav id=\"topNavbar\" class=\"navbar navbar-fixed-top navbar-default\">
                ";
        
        $__internal_222ab3b3491f904c1a67f36469952928d50d9e5e9c243efccfd6bbe020f7d857->leave($__internal_222ab3b3491f904c1a67f36469952928d50d9e5e9c243efccfd6bbe020f7d857_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_04c7b0c200fc96ee376ed3701457a09bf9e6ec3f7bd709299292e78f6e79c5d2 = $this->env->getExtension("native_profiler");
        $__internal_04c7b0c200fc96ee376ed3701457a09bf9e6ec3f7bd709299292e78f6e79c5d2->enter($__internal_04c7b0c200fc96ee376ed3701457a09bf9e6ec3f7bd709299292e78f6e79c5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_04c7b0c200fc96ee376ed3701457a09bf9e6ec3f7bd709299292e78f6e79c5d2->leave($__internal_04c7b0c200fc96ee376ed3701457a09bf9e6ec3f7bd709299292e78f6e79c5d2_prof);

    }

    // line 86
    public function block_calendrier($context, array $blocks = array())
    {
        $__internal_d12241fdf76c01614a28b127f19d2afc451af2a8b2ad8a712a98de0f11b63efe = $this->env->getExtension("native_profiler");
        $__internal_d12241fdf76c01614a28b127f19d2afc451af2a8b2ad8a712a98de0f11b63efe->enter($__internal_d12241fdf76c01614a28b127f19d2afc451af2a8b2ad8a712a98de0f11b63efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendrier"));

        // line 87
        echo "                    <div class=\"col-xs-6 col-sm-3\" id=\"sidebar\">
                        <div>
                            CALENDRIER
                        </div>
                        <div class=\"list-group\">
                            <a href=\"#\" class=\"list-group-item active\">Link</a>
                            <a href=\"#\" class=\"list-group-item\">Link</a>
                            <a href=\"#\" class=\"list-group-item\">Link</a>
                            <a href=\"#\" class=\"list-group-item\">Link</a>
                            <a href=\"#\" class=\"list-group-item\">Link</a>
                            <a href=\"#\" class=\"list-group-item\">Link</a>
                            <a href=\"#\" class=\"list-group-item\">Link</a>
                            <a href=\"#\" class=\"list-group-item\">Link</a>
                            <a href=\"#\" class=\"list-group-item\">Link</a>
                            <a href=\"#\" class=\"list-group-item\">Link</a>
                        </div>
                    </div>
                    ";
        
        $__internal_d12241fdf76c01614a28b127f19d2afc451af2a8b2ad8a712a98de0f11b63efe->leave($__internal_d12241fdf76c01614a28b127f19d2afc451af2a8b2ad8a712a98de0f11b63efe_prof);

    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e6bda72c960476d710f0ff7f511fcfe95935f176051b8667f3d0c196cdb1ba5e = $this->env->getExtension("native_profiler");
        $__internal_e6bda72c960476d710f0ff7f511fcfe95935f176051b8667f3d0c196cdb1ba5e->enter($__internal_e6bda72c960476d710f0ff7f511fcfe95935f176051b8667f3d0c196cdb1ba5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
        echo "                    <script src=\"//code.jquery.com/jquery.min.js\"></script>
                    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                    ";
        
        $__internal_e6bda72c960476d710f0ff7f511fcfe95935f176051b8667f3d0c196cdb1ba5e->leave($__internal_e6bda72c960476d710f0ff7f511fcfe95935f176051b8667f3d0c196cdb1ba5e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  323 => 120,  320 => 119,  314 => 118,  290 => 87,  284 => 86,  273 => 82,  265 => 21,  259 => 20,  248 => 15,  239 => 10,  234 => 9,  228 => 8,  217 => 6,  210 => 118,  195 => 105,  193 => 86,  188 => 83,  186 => 82,  183 => 81,  173 => 79,  171 => 78,  168 => 77,  159 => 74,  156 => 73,  152 => 72,  149 => 71,  140 => 68,  137 => 67,  133 => 66,  120 => 55,  109 => 47,  105 => 46,  100 => 45,  95 => 43,  85 => 36,  81 => 35,  78 => 34,  75 => 30,  73 => 29,  64 => 25,  60 => 23,  58 => 20,  52 => 16,  50 => 15,  43 => 12,  41 => 8,  36 => 6,  29 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang='fr'>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <title>{% block title %}{% endblock %} - EHS</title>*/
/* */
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" type="text/css" media="all" />*/
/*             <link rel="stylesheet" href="{{ asset('public/style/style.css') }}" type="text/css" media="all" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/* */
/*     {% block ImgIndex %}{% endblock %}*/
/* */
/*     <div id="siteWrapper">*/
/*         <header>*/
/*             <div id="headerTop"></div>*/
/*                 {% block classNav %}*/
/*                     <nav id="topNavbar" class="navbar navbar-fixed-top navbar-default">*/
/*                 {% endblock %}*/
/*                 <div class="container">*/
/*                     <div class="navbar-header">*/
/*                         <a class="" href="{{ path('ehs_homepage') }}"><img src="{{ asset('public/images/logo.png') }}" width="80px" height"30px"></a>*/
/*                     </div>*/
/*                     <div id="navbar">*/
/*                         <ul class="nav navbar-nav">*/
/*                             {% if app.user %}*/
/* */
/*                                 {#{% if is_granted('ROLE_ADMIN') %}*/
/*                                     <li><a href="{{ path('users_new') }}">Inscription</a></li>*/
/*                                 {% endif %}#}*/
/* */
/*                                 <li><a href="{{ path('users_show', { 'id': app.user.id }) }}">Profil</a></li>*/
/*                                 <li><a href="{{ path('articles_index') }}">Articles</a></li>*/
/*                                 <li><a href="#">L'association</a></li>*/
/*                                 <li><a href="#">Nos actions</a></li>*/
/*                                 <li><a href="#">Agir & soutenirs</a></li>*/
/*                                 <li><a href="#">Presse</a></li>*/
/*                                 <li><a href="#">Médias</a></li>*/
/*                                 <li><a href="#">Contact</a></li>*/
/*                                 <li><a href="{{ path('users_logout') }}">Déconnection</a></li>*/
/*                             {% else %}*/
/*                                 <li><a href="{{ path('users_new') }}">Inscription</a></li>*/
/*                                 <li><a href="{{ path('users_login') }}">Connexion</a></li>*/
/*                                 <li><a href="{{ path('articles_index') }}">Articles</a></li>*/
/*                                 <li><a href="#">L'association</a></li>*/
/*                                 <li><a href="#">Nos actions</a></li>*/
/*                                 <li><a href="#">Agir & soutenirs</a></li>*/
/*                                 <li><a href="#">Presse</a></li>*/
/*                                 <li><a href="#">Médias</a></li>*/
/*                                 <li><a href="#">Contact</a></li>*/
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*     </header>*/
/*     */
/*         <section id="content">*/
/*             <div></div>*/
/*         </section>*/
/*     </div>*/
/*         <body>*/
/*             {% for flashMessage in app.session.flashbag.get('success') %}*/
/*                 <div class="alert alert-success">*/
/*                     <p align="center">{{ flashMessage }}</p>*/
/*                 </div>*/
/*             {% endfor %}*/
/*             */
/*             {% for flashMessage in app.session.flashbag.get('danger') %}*/
/*                 <div class="alert alert-danger">*/
/*                     <p align="center">{{ flashMessage }}</p>*/
/*                 </div>*/
/*             {% endfor %}*/
/* */
/*         {% if app.user %}*/
/*         <p align="center"><strong>{{ app.user.prenom }} {{ app.user.nom }} - {{ app.user.email }}</strong></p>*/
/*         {% endif %}*/
/*         <div class="body">*/
/*             {% block body %}{% endblock %}*/
/*             <div class="containerCalendrier">*/
/*                 */
/*                     */
/*                     {% block calendrier %}*/
/*                     <div class="col-xs-6 col-sm-3" id="sidebar">*/
/*                         <div>*/
/*                             CALENDRIER*/
/*                         </div>*/
/*                         <div class="list-group">*/
/*                             <a href="#" class="list-group-item active">Link</a>*/
/*                             <a href="#" class="list-group-item">Link</a>*/
/*                             <a href="#" class="list-group-item">Link</a>*/
/*                             <a href="#" class="list-group-item">Link</a>*/
/*                             <a href="#" class="list-group-item">Link</a>*/
/*                             <a href="#" class="list-group-item">Link</a>*/
/*                             <a href="#" class="list-group-item">Link</a>*/
/*                             <a href="#" class="list-group-item">Link</a>*/
/*                             <a href="#" class="list-group-item">Link</a>*/
/*                             <a href="#" class="list-group-item">Link</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endblock %}*/
/*                 */
/*             </div>*/
/*         </div>*/
/*                 */
/*             <hr>*/
/* </body>*/
/*             <footer>*/
/*                 <div class="container">*/
/*                     <p>IMIE - 2016 - dl15</p>*/
/*                 </div>*/
/*             </footer>*/
/*         </div>*/
/* */
/*                     {% block javascripts %}*/
/*                     <script src="//code.jquery.com/jquery.min.js"></script>*/
/*                     <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>*/
/*                     {% endblock %}*/
/* */
