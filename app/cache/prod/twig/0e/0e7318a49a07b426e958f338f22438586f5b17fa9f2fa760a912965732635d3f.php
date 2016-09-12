<?php

/* base.html.twig */
class __TwigTemplate_af2b3b21c7bcf4ff7d586561cdd294637405ec1ddad83f7d376020a186eb479d extends Twig_Template
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
        $__internal_838dad35273be9923f1323900f092ac0aa584effe24165d4dab53630a8ea8dac = $this->env->getExtension("native_profiler");
        $__internal_838dad35273be9923f1323900f092ac0aa584effe24165d4dab53630a8ea8dac->enter($__internal_838dad35273be9923f1323900f092ac0aa584effe24165d4dab53630a8ea8dac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_838dad35273be9923f1323900f092ac0aa584effe24165d4dab53630a8ea8dac->leave($__internal_838dad35273be9923f1323900f092ac0aa584effe24165d4dab53630a8ea8dac_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_91b6fd7907335b4226be56c26ba04ee5a01720f1865cf8f56cddc38333c02e17 = $this->env->getExtension("native_profiler");
        $__internal_91b6fd7907335b4226be56c26ba04ee5a01720f1865cf8f56cddc38333c02e17->enter($__internal_91b6fd7907335b4226be56c26ba04ee5a01720f1865cf8f56cddc38333c02e17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_91b6fd7907335b4226be56c26ba04ee5a01720f1865cf8f56cddc38333c02e17->leave($__internal_91b6fd7907335b4226be56c26ba04ee5a01720f1865cf8f56cddc38333c02e17_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_269b8501db9445d8f1ceabec27bda72c585fe68ceaa9a5283cec69ada827b12b = $this->env->getExtension("native_profiler");
        $__internal_269b8501db9445d8f1ceabec27bda72c585fe68ceaa9a5283cec69ada827b12b->enter($__internal_269b8501db9445d8f1ceabec27bda72c585fe68ceaa9a5283cec69ada827b12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/bootstrap-3.3.7-dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/style/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        ";
        
        $__internal_269b8501db9445d8f1ceabec27bda72c585fe68ceaa9a5283cec69ada827b12b->leave($__internal_269b8501db9445d8f1ceabec27bda72c585fe68ceaa9a5283cec69ada827b12b_prof);

    }

    // line 15
    public function block_ImgIndex($context, array $blocks = array())
    {
        $__internal_012ac29ab2d3fc249c4fca1d6d2a24ca974500906348f3674b7bf805411b1f56 = $this->env->getExtension("native_profiler");
        $__internal_012ac29ab2d3fc249c4fca1d6d2a24ca974500906348f3674b7bf805411b1f56->enter($__internal_012ac29ab2d3fc249c4fca1d6d2a24ca974500906348f3674b7bf805411b1f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ImgIndex"));

        
        $__internal_012ac29ab2d3fc249c4fca1d6d2a24ca974500906348f3674b7bf805411b1f56->leave($__internal_012ac29ab2d3fc249c4fca1d6d2a24ca974500906348f3674b7bf805411b1f56_prof);

    }

    // line 20
    public function block_classNav($context, array $blocks = array())
    {
        $__internal_f48cc7df0d18bc7dad373e760a4c4f1d4e5845a1894ab990411902f517377f49 = $this->env->getExtension("native_profiler");
        $__internal_f48cc7df0d18bc7dad373e760a4c4f1d4e5845a1894ab990411902f517377f49->enter($__internal_f48cc7df0d18bc7dad373e760a4c4f1d4e5845a1894ab990411902f517377f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "classNav"));

        // line 21
        echo "                    <nav id=\"topNavbar\" class=\"navbar navbar-fixed-top navbar-default\">
                ";
        
        $__internal_f48cc7df0d18bc7dad373e760a4c4f1d4e5845a1894ab990411902f517377f49->leave($__internal_f48cc7df0d18bc7dad373e760a4c4f1d4e5845a1894ab990411902f517377f49_prof);

    }

    // line 82
    public function block_body($context, array $blocks = array())
    {
        $__internal_82b095d56c7ced75436177ec072bf5a06fe5ce6fbbe9fadc7cf1696d69142d1f = $this->env->getExtension("native_profiler");
        $__internal_82b095d56c7ced75436177ec072bf5a06fe5ce6fbbe9fadc7cf1696d69142d1f->enter($__internal_82b095d56c7ced75436177ec072bf5a06fe5ce6fbbe9fadc7cf1696d69142d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_82b095d56c7ced75436177ec072bf5a06fe5ce6fbbe9fadc7cf1696d69142d1f->leave($__internal_82b095d56c7ced75436177ec072bf5a06fe5ce6fbbe9fadc7cf1696d69142d1f_prof);

    }

    // line 86
    public function block_calendrier($context, array $blocks = array())
    {
        $__internal_b1551f26abb1912df5f7e19d30376b3ab199efecf0bec0efb5c3041215b19b0e = $this->env->getExtension("native_profiler");
        $__internal_b1551f26abb1912df5f7e19d30376b3ab199efecf0bec0efb5c3041215b19b0e->enter($__internal_b1551f26abb1912df5f7e19d30376b3ab199efecf0bec0efb5c3041215b19b0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "calendrier"));

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
        
        $__internal_b1551f26abb1912df5f7e19d30376b3ab199efecf0bec0efb5c3041215b19b0e->leave($__internal_b1551f26abb1912df5f7e19d30376b3ab199efecf0bec0efb5c3041215b19b0e_prof);

    }

    // line 118
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cc0048e8f5f1d84b6bc7290757a2451dc46155f92b8a9d272938949d6e91e042 = $this->env->getExtension("native_profiler");
        $__internal_cc0048e8f5f1d84b6bc7290757a2451dc46155f92b8a9d272938949d6e91e042->enter($__internal_cc0048e8f5f1d84b6bc7290757a2451dc46155f92b8a9d272938949d6e91e042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
        echo "                    <script src=\"//code.jquery.com/jquery.min.js\"></script>
                    <script src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
                    ";
        
        $__internal_cc0048e8f5f1d84b6bc7290757a2451dc46155f92b8a9d272938949d6e91e042->leave($__internal_cc0048e8f5f1d84b6bc7290757a2451dc46155f92b8a9d272938949d6e91e042_prof);

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
