<?php

/* articles/index.html.twig */
class __TwigTemplate_27d0ee60f86584b6f9f12fb14ea8b3fb3f21f2e59ec02bc61bc3946fc0a05c6c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "      
    
    <!-- MAIN ARTICLE -->
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
        // line 17
        echo $this->env->getExtension('routing')->getPath("articles_new");
        echo "\">Creer un nouvel article</a>
        </li>
    </ul>
    </div>
    
    
    
    <!-- ALL ARTICLES -->
    <div class=\"rowArticle\">
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 27
            echo "            <div id=\"article\" class=\"col-xs-6 col-lg-4\">
                <h2>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "titre", array()), "html", null, true);
            echo "</h2>
                <p>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "chapeau", array()), "html", null, true);
            echo "</p>
                <p>
                    <a class=\"btn btn-default\" href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Voir</a>
                    <a class=\"btn btn-default\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">Modifier</a>
                </p>
                <p>
                    auteur: ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "author", array()), "username", array()), "html", null, true);
            echo "
                </p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "    </div>
    
    
        
    

";
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
        return array (  94 => 39,  84 => 35,  78 => 32,  74 => 31,  69 => 29,  65 => 28,  62 => 27,  58 => 26,  46 => 17,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*       */
/*     */
/*     <!-- MAIN ARTICLE -->*/
/*     <div class="jumbotron">*/
/*         <h1>MAIN ARTIcle</h1>*/
/*         <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>*/
/*         */
/*         <p>*/
/*             <a class="btn btn-default" href="#" role="button">Voir</a>*/
/*             <a class="btn btn-default" href="#" role="button">Modifier</a>*/
/*         </p>*/
/*         <ul>*/
/*         <li>*/
/*             <a href="{{ path('articles_new') }}">Creer un nouvel article</a>*/
/*         </li>*/
/*     </ul>*/
/*     </div>*/
/*     */
/*     */
/*     */
/*     <!-- ALL ARTICLES -->*/
/*     <div class="rowArticle">*/
/*         {% for article in articles %}*/
/*             <div id="article" class="col-xs-6 col-lg-4">*/
/*                 <h2>{{ article.titre }}</h2>*/
/*                 <p>{{ article.chapeau }}</p>*/
/*                 <p>*/
/*                     <a class="btn btn-default" href="{{ path('articles_show', { 'id': article.id }) }}" role="button">Voir</a>*/
/*                     <a class="btn btn-default" href="{{ path('articles_edit', { 'id': article.id }) }}" role="button">Modifier</a>*/
/*                 </p>*/
/*                 <p>*/
/*                     auteur: {{ article.author.username }}*/
/*                 </p>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/*     */
/*     */
/*         */
/*     */
/* */
/* {% endblock %}*/
/* */
