<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_2a0d6624c31f4a0ea6cc3c614553db38f45682f39a7bf54ea7ef4542240a015e extends Twig_Template
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
        $__internal_80d2111ffa5e996bd970f5e5cca8df85aacd403e3c89b2774fa097e0e40631b2 = $this->env->getExtension("native_profiler");
        $__internal_80d2111ffa5e996bd970f5e5cca8df85aacd403e3c89b2774fa097e0e40631b2->enter($__internal_80d2111ffa5e996bd970f5e5cca8df85aacd403e3c89b2774fa097e0e40631b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_80d2111ffa5e996bd970f5e5cca8df85aacd403e3c89b2774fa097e0e40631b2->leave($__internal_80d2111ffa5e996bd970f5e5cca8df85aacd403e3c89b2774fa097e0e40631b2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
