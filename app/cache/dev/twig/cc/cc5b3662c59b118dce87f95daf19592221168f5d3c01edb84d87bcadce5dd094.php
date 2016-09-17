<?php

/* articles/index.html.twig */
class __TwigTemplate_ec199b2f235bd0e00443943592489202010c9b8232d9bda906a8fdbafeaa3b48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "articles/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3e121f70b2f159a5f819f520d41eb45943d65aa595e259fc8288e8f99af73f08 = $this->env->getExtension("native_profiler");
        $__internal_3e121f70b2f159a5f819f520d41eb45943d65aa595e259fc8288e8f99af73f08->enter($__internal_3e121f70b2f159a5f819f520d41eb45943d65aa595e259fc8288e8f99af73f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e121f70b2f159a5f819f520d41eb45943d65aa595e259fc8288e8f99af73f08->leave($__internal_3e121f70b2f159a5f819f520d41eb45943d65aa595e259fc8288e8f99af73f08_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b305375a4369275942f12eb10132a44de28ed08f734ab8e78d3f0908016c0072 = $this->env->getExtension("native_profiler");
        $__internal_b305375a4369275942f12eb10132a44de28ed08f734ab8e78d3f0908016c0072->enter($__internal_b305375a4369275942f12eb10132a44de28ed08f734ab8e78d3f0908016c0072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      
    
    <!-- MAIN ARTICLE -->
    <div>
        <div class=\"jumbotron\">
            <h1>MAIN ARTIcle</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>
            
            <p>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Voir</a>
                <a class=\"btn btn-default\" href=\"#\" role=\"button\">Modifier</a>
            </p>
            <ul>
            <li>
                <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("articles_new");
        echo "\">Creer un nouvel article</a>
            </li>
        </ul>
        </div>
        
        
        
        <!-- ALL ARTICLES -->
        <div class=\"rowArticle\">
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 28
            echo "                <div id=\"article\" class=\"col-xs-6 col-lg-4\">
                    <h2>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</h2>
                    <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "chapeau", array()), "html", null, true);
            echo "</p>
                    <p>
                        <a class=\"btn btn-default\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Voir</a>
                        <a class=\"btn btn-default\" href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Modifier</a>
                    </p>
                    <p>
                        auteur: ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "author", array()), "username", array()), "html", null, true);
            echo "
                    </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </div>
    </div>
    
    
        
    

";
        
        $__internal_b305375a4369275942f12eb10132a44de28ed08f734ab8e78d3f0908016c0072->leave($__internal_b305375a4369275942f12eb10132a44de28ed08f734ab8e78d3f0908016c0072_prof);

    }

    public function getTemplateName()
    {
        return "articles/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 40,  94 => 36,  88 => 33,  84 => 32,  79 => 30,  75 => 29,  72 => 28,  68 => 27,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*       */
/*     */
/*     <!-- MAIN ARTICLE -->*/
/*     <div>*/
/*         <div class="jumbotron">*/
/*             <h1>MAIN ARTIcle</h1>*/
/*             <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>*/
/*             */
/*             <p>*/
/*                 <a class="btn btn-default" href="#" role="button">Voir</a>*/
/*                 <a class="btn btn-default" href="#" role="button">Modifier</a>*/
/*             </p>*/
/*             <ul>*/
/*             <li>*/
/*                 <a href="{{ path('articles_new') }}">Creer un nouvel article</a>*/
/*             </li>*/
/*         </ul>*/
/*         </div>*/
/*         */
/*         */
/*         */
/*         <!-- ALL ARTICLES -->*/
/*         <div class="rowArticle">*/
/*             {% for article in articles %}*/
/*                 <div id="article" class="col-xs-6 col-lg-4">*/
/*                     <h2>{{ article.titre }}</h2>*/
/*                     <p>{{ article.chapeau }}</p>*/
/*                     <p>*/
/*                         <a class="btn btn-default" href="{{ path('articles_show', { 'id': article.id }) }}" role="button">Voir</a>*/
/*                         <a class="btn btn-default" href="{{ path('articles_edit', { 'id': article.id }) }}" role="button">Modifier</a>*/
/*                     </p>*/
/*                     <p>*/
/*                         auteur: {{ article.author.username }}*/
/*                     </p>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </div>*/
/*     </div>*/
/*     */
/*     */
/*         */
/*     */
/* */
/* {% endblock %}*/
/* */
