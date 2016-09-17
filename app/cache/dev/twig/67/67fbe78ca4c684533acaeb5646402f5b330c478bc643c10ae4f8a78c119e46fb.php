<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_a729dc4775605b415edf23a2e49595d1dd8e028836ad40b0b89b0a728f57fa4d extends Twig_Template
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
        $__internal_1745c4fdd37f40cb01a5ca7362cfc7a9039a6df679849e5bbde4d8fb439235fc = $this->env->getExtension("native_profiler");
        $__internal_1745c4fdd37f40cb01a5ca7362cfc7a9039a6df679849e5bbde4d8fb439235fc->enter($__internal_1745c4fdd37f40cb01a5ca7362cfc7a9039a6df679849e5bbde4d8fb439235fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

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
        
        $__internal_1745c4fdd37f40cb01a5ca7362cfc7a9039a6df679849e5bbde4d8fb439235fc->leave($__internal_1745c4fdd37f40cb01a5ca7362cfc7a9039a6df679849e5bbde4d8fb439235fc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
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
