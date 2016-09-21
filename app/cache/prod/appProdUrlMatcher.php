<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/users')) {
            // users_index
            if (rtrim($pathinfo, '/') === '/users') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_users_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'users_index');
                }

                return array (  '_controller' => 'EhsBundle\\Controller\\UsersController::indexAction',  '_route' => 'users_index',);
            }
            not_users_index:

            // users_show
            if (preg_match('#^/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_users_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_show')), array (  '_controller' => 'EhsBundle\\Controller\\UsersController::showAction',));
            }
            not_users_show:

            // users_new
            if ($pathinfo === '/users/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_users_new;
                }

                return array (  '_controller' => 'EhsBundle\\Controller\\UsersController::newAction',  '_route' => 'users_new',);
            }
            not_users_new:

            // users_edit
            if (preg_match('#^/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_users_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_edit')), array (  '_controller' => 'EhsBundle\\Controller\\UsersController::editAction',));
            }
            not_users_edit:

            // users_delete
            if (preg_match('#^/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_users_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_delete')), array (  '_controller' => 'EhsBundle\\Controller\\UsersController::deleteAction',));
            }
            not_users_delete:

            if (0 === strpos($pathinfo, '/users/log')) {
                // users_login
                if ($pathinfo === '/users/login') {
                    return array (  '_controller' => 'EhsBundle\\Controller\\SecurityController::loginAction',  '_route' => 'users_login',);
                }

                // users_logout
                if ($pathinfo === '/users/logout') {
                    return array (  '_controller' => 'EhsBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'users_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/users/passwordLost')) {
                // users_passwordLost
                if ($pathinfo === '/users/passwordLost') {
                    return array (  '_controller' => 'EhsBundle\\Controller\\UsersController::resetAction',  '_route' => 'users_passwordLost',);
                }

                // users_passwordLostConfirm
                if ($pathinfo === '/users/passwordLostConfirm') {
                    return array (  '_controller' => 'EhsBundle\\Controller\\UsersController::resetNowAction',  '_route' => 'users_passwordLostConfirm',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/articles')) {
            // articles_index
            if (rtrim($pathinfo, '/') === '/articles') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_articles_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'articles_index');
                }

                return array (  '_controller' => 'EhsBundle\\Controller\\ArticlesController::indexAction',  '_route' => 'articles_index',);
            }
            not_articles_index:

            // articles_show
            if (preg_match('#^/articles/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_articles_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_show')), array (  '_controller' => 'EhsBundle\\Controller\\ArticlesController::showAction',));
            }
            not_articles_show:

            // articles_new
            if ($pathinfo === '/articles/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_articles_new;
                }

                return array (  '_controller' => 'EhsBundle\\Controller\\ArticlesController::newAction',  '_route' => 'articles_new',);
            }
            not_articles_new:

            // articles_edit
            if (preg_match('#^/articles/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_articles_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_edit')), array (  '_controller' => 'EhsBundle\\Controller\\ArticlesController::editAction',));
            }
            not_articles_edit:

            // articles_delete
            if (preg_match('#^/articles/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_articles_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles_delete')), array (  '_controller' => 'EhsBundle\\Controller\\ArticlesController::deleteAction',));
            }
            not_articles_delete:

        }

        // ehs_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ehs_homepage');
            }

            return array (  '_controller' => 'EhsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ehs_homepage',);
        }

        if (0 === strpos($pathinfo, '/newsletter')) {
            // newsletter_index
            if (rtrim($pathinfo, '/') === '/newsletter') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsletter_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'newsletter_index');
                }

                return array (  '_controller' => 'EhsBundle\\Controller\\NewsletterController::indexAction',  '_route' => 'newsletter_index',);
            }
            not_newsletter_index:

            // newsletter_show
            if (preg_match('#^/newsletter/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsletter_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_show')), array (  '_controller' => 'EhsBundle\\Controller\\NewsletterController::showAction',));
            }
            not_newsletter_show:

            // newsletter_new
            if ($pathinfo === '/newsletter/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_newsletter_new;
                }

                return array (  '_controller' => 'EhsBundle\\Controller\\NewsletterController::newAction',  '_route' => 'newsletter_new',);
            }
            not_newsletter_new:

            // newsletter_edit
            if (preg_match('#^/newsletter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_newsletter_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_edit')), array (  '_controller' => 'EhsBundle\\Controller\\NewsletterController::editAction',));
            }
            not_newsletter_edit:

            // newsletter_delete
            if (preg_match('#^/newsletter/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_newsletter_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_delete')), array (  '_controller' => 'EhsBundle\\Controller\\NewsletterController::deleteAction',));
            }
            not_newsletter_delete:

        }

        if (0 === strpos($pathinfo, '/comment')) {
            // comment_index
            if (rtrim($pathinfo, '/') === '/comment') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_comment_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'comment_index');
                }

                return array (  '_controller' => 'EhsBundle\\Controller\\CommentController::indexAction',  '_route' => 'comment_index',);
            }
            not_comment_index:

            // comment_show
            if (preg_match('#^/comment/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_comment_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_show')), array (  '_controller' => 'EhsBundle\\Controller\\CommentController::showAction',));
            }
            not_comment_show:

            // comment_new
            if ($pathinfo === '/comment/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_comment_new;
                }

                return array (  '_controller' => 'EhsBundle\\Controller\\CommentController::newAction',  '_route' => 'comment_new',);
            }
            not_comment_new:

            // comment_edit
            if (preg_match('#^/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_comment_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_edit')), array (  '_controller' => 'EhsBundle\\Controller\\CommentController::editAction',));
            }
            not_comment_edit:

            // comment_delete
            if (preg_match('#^/comment/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_comment_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_delete')), array (  '_controller' => 'EhsBundle\\Controller\\CommentController::deleteAction',));
            }
            not_comment_delete:

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // admin_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_admin_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_index');
                }

                return array (  '_controller' => 'EhsBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin_index',);
            }
            not_admin_index:

            // admin_users_new
            if ($pathinfo === '/admin/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_users_new;
                }

                return array (  '_controller' => 'EhsBundle\\Controller\\AdminController::newAction',  '_route' => 'admin_users_new',);
            }
            not_admin_users_new:

            // admin_users_edit
            if (preg_match('#^/admin/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_admin_users_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_users_edit')), array (  '_controller' => 'EhsBundle\\Controller\\AdminController::editAction',));
            }
            not_admin_users_edit:

            if (0 === strpos($pathinfo, '/admin/liste')) {
                // admin_listeMembres
                if ($pathinfo === '/admin/listeMembres') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_listeMembres;
                    }

                    return array (  '_controller' => 'EhsBundle\\Controller\\AdminController::ListeMembresAction',  '_route' => 'admin_listeMembres',);
                }
                not_admin_listeMembres:

                // admin_listeArticles
                if ($pathinfo === '/admin/listeArticles') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_admin_listeArticles;
                    }

                    return array (  '_controller' => 'EhsBundle\\Controller\\AdminController::ListeArticlesAction',  '_route' => 'admin_listeArticles',);
                }
                not_admin_listeArticles:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
