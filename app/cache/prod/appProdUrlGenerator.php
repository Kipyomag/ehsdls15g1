<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'users_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\UsersController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\UsersController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\UsersController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\UsersController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\UsersController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/users',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_passwordLost' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\UsersController::resetAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/passwordLost',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'users_passwordLostConfirm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\UsersController::resetNowAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/users/passwordLostConfirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'articles_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\ArticlesController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/articles/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'articles_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\ArticlesController::showAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/articles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'articles_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\ArticlesController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/articles/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'articles_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\ArticlesController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/articles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'articles_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\ArticlesController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/articles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ehs_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newsletter_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\NewsletterController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newsletter/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newsletter_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\NewsletterController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/newsletter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newsletter_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\NewsletterController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newsletter/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newsletter_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\NewsletterController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/newsletter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'newsletter_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\NewsletterController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/newsletter',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comment_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\CommentController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comment/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comment_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\CommentController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/comment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comment_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\CommentController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/comment/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comment_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\CommentController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/comment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comment_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'EhsBundle\\Controller\\CommentController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/comment',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
