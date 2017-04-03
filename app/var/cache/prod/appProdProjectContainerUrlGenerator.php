<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
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
        'admin_index' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/post/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_post_index' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/post/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_post_new' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::newAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/post/new',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_post_show' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::showAction',    '_locale' => 'en',  ),  2 =>   array (    'id' => '\\d+',    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/admin/post',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_post_edit' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::editAction',    '_locale' => 'en',  ),  2 =>   array (    'id' => '\\d+',    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/post',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin_post_delete' => array (  0 =>   array (    0 => '_locale',    1 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Admin\\BlogController::deleteAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/post',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_index' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    'page' => '1',    '_format' => 'html',    '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_rss' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    'page' => '1',    '_format' => 'xml',    '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/rss.xml',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_index_paginated' => array (  0 =>   array (    0 => '_locale',    1 => 'page',  ),  1 =>   array (    '_format' => 'html',    '_controller' => 'AppBundle\\Controller\\BlogController::indexAction',    '_locale' => 'en',  ),  2 =>   array (    'page' => '[1-9]\\d*',    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[1-9]\\d*',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/blog/page',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_post' => array (  0 =>   array (    0 => '_locale',    1 => 'slug',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BlogController::postShowAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/blog/posts',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'comment_new' => array (  0 =>   array (    0 => '_locale',    1 => 'postSlug',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BlogController::commentNewAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/new',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'postSlug',    ),    2 =>     array (      0 => 'text',      1 => '/blog/comment',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_login' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'security_logout' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\SecurityController::logoutAction',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (    0 => '_locale',  ),  1 =>   array (    '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',    'template' => 'default/homepage.html.twig',    '_locale' => 'en',  ),  2 =>   array (    '_locale' => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr|de|es|cs|nl|ru|uk|ro|pt_BR|pl|it|ja|id|ca|sl|hr',      3 => '_locale',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
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
