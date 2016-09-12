<?php

/* :articles:index.html.twig */
class __TwigTemplate_c3e8e48454f2a576c20926cc2a8af2444af95f7bc927442d79cc77f1103ff309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":articles:index.html.twig", 1);
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
        $__internal_6aa52ae3141853285f706bc64cbdf3dea6f4ec145b575f6f1a0a9bb92f8e9a88 = $this->env->getExtension("native_profiler");
        $__internal_6aa52ae3141853285f706bc64cbdf3dea6f4ec145b575f6f1a0a9bb92f8e9a88->enter($__internal_6aa52ae3141853285f706bc64cbdf3dea6f4ec145b575f6f1a0a9bb92f8e9a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":articles:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6aa52ae3141853285f706bc64cbdf3dea6f4ec145b575f6f1a0a9bb92f8e9a88->leave($__internal_6aa52ae3141853285f706bc64cbdf3dea6f4ec145b575f6f1a0a9bb92f8e9a88_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e6270f0a6292cd909988152ba0a339da104a42df45b9542590189cea234b80a = $this->env->getExtension("native_profiler");
        $__internal_8e6270f0a6292cd909988152ba0a339da104a42df45b9542590189cea234b80a->enter($__internal_8e6270f0a6292cd909988152ba0a339da104a42df45b9542590189cea234b80a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
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
        
        $__internal_8e6270f0a6292cd909988152ba0a339da104a42df45b9542590189cea234b80a->leave($__internal_8e6270f0a6292cd909988152ba0a339da104a42df45b9542590189cea234b80a_prof);

    }

    public function getTemplateName()
    {
        return ":articles:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  93 => 35,  87 => 32,  83 => 31,  78 => 29,  74 => 28,  71 => 27,  67 => 26,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
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
