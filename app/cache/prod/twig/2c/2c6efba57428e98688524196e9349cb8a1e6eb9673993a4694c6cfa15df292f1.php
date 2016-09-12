<?php

/* articles/index.html.twig */
class __TwigTemplate_1dfad1635c7fd555a11b3b0c7917e8ae5191cbdbc573a1fdef08ce4ca59ed89b extends Twig_Template
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
        $__internal_ee373c4912ab837d2a879f3795fc2f8de33715efb49621a4513ae3cdf620a0a5 = $this->env->getExtension("native_profiler");
        $__internal_ee373c4912ab837d2a879f3795fc2f8de33715efb49621a4513ae3cdf620a0a5->enter($__internal_ee373c4912ab837d2a879f3795fc2f8de33715efb49621a4513ae3cdf620a0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "articles/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee373c4912ab837d2a879f3795fc2f8de33715efb49621a4513ae3cdf620a0a5->leave($__internal_ee373c4912ab837d2a879f3795fc2f8de33715efb49621a4513ae3cdf620a0a5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_39407e612f8c7d071aac2aa18a16353bafc811affe538d8a245d1385fb777d7a = $this->env->getExtension("native_profiler");
        $__internal_39407e612f8c7d071aac2aa18a16353bafc811affe538d8a245d1385fb777d7a->enter($__internal_39407e612f8c7d071aac2aa18a16353bafc811affe538d8a245d1385fb777d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39407e612f8c7d071aac2aa18a16353bafc811affe538d8a245d1385fb777d7a->leave($__internal_39407e612f8c7d071aac2aa18a16353bafc811affe538d8a245d1385fb777d7a_prof);

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
