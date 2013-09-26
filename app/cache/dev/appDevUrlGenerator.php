<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'walva_haf_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'walva_haf_admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin',    ),  ),  4 =>   array (  ),),
        'static_articles_et_nouvelles' => array (  0 =>   array (    0 => 'langue',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\StaticContentController::ArticleEtNouvellesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article_et_nouvelles',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'langue',    ),  ),  4 =>   array (  ),),
        'haf_contact' => array (  0 =>   array (    0 => 'langue',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\StaticContentController::ContactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'langue',    ),  ),  4 =>   array (  ),),
        'article' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/',    ),  ),  4 =>   array (  ),),
        'article_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/article',    ),  ),  4 =>   array (  ),),
        'article_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/new',    ),  ),  4 =>   array (  ),),
        'article_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/article/create',    ),  ),  4 =>   array (  ),),
        'article_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/article',    ),  ),  4 =>   array (  ),),
        'article_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/article',    ),  ),  4 =>   array (  ),),
        'article_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/article',    ),  ),  4 =>   array (  ),),
        'article_public' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article/',    ),  ),  4 =>   array (  ),),
        'article_big_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::bigListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/article/articles_et_nouvelles',    ),  ),  4 =>   array (  ),),
        'article_public_list' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/article/page',    ),  ),  4 =>   array (  ),),
        'article_public_list_tag' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::listByTagAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/article/tag',    ),  ),  4 =>   array (  ),),
        'article_public_list_tag_and_page' => array (  0 =>   array (    0 => 'id',    1 => 'page',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::listByTagAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/page',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/article/tag',    ),  ),  4 =>   array (  ),),
        'article_public_list_categorie' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::listByCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/article/cat',    ),  ),  4 =>   array (  ),),
        'article_public_list_categorie_and_page' => array (  0 =>   array (    0 => 'id',    1 => 'page',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::listByCategorieAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/page',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    3 =>     array (      0 => 'text',      1 => '/article/cat',    ),  ),  4 =>   array (  ),),
        'article_public_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/article',    ),  ),  4 =>   array (  ),),
        'reference' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/reference/',    ),  ),  4 =>   array (  ),),
        'reference_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/reference',    ),  ),  4 =>   array (  ),),
        'reference_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/reference/new',    ),  ),  4 =>   array (  ),),
        'reference_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/reference/create',    ),  ),  4 =>   array (  ),),
        'reference_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/reference',    ),  ),  4 =>   array (  ),),
        'reference_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/reference',    ),  ),  4 =>   array (  ),),
        'reference_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/reference',    ),  ),  4 =>   array (  ),),
        'tag' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\TagController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tag/',    ),  ),  4 =>   array (  ),),
        'tag_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\TagController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tag',    ),  ),  4 =>   array (  ),),
        'tag_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\TagController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tag/new',    ),  ),  4 =>   array (  ),),
        'tag_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\TagController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/tag/create',    ),  ),  4 =>   array (  ),),
        'tag_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\TagController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tag',    ),  ),  4 =>   array (  ),),
        'tag_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\TagController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tag',    ),  ),  4 =>   array (  ),),
        'tag_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\TagController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/tag',    ),  ),  4 =>   array (  ),),
        'auteur' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/auteur/',    ),  ),  4 =>   array (  ),),
        'auteur_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/auteur',    ),  ),  4 =>   array (  ),),
        'auteur_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/auteur/new',    ),  ),  4 =>   array (  ),),
        'auteur_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/auteur/create',    ),  ),  4 =>   array (  ),),
        'auteur_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/auteur',    ),  ),  4 =>   array (  ),),
        'auteur_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/auteur',    ),  ),  4 =>   array (  ),),
        'auteur_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/auteur',    ),  ),  4 =>   array (  ),),
        'image' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/image/',    ),  ),  4 =>   array (  ),),
        'image_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/image',    ),  ),  4 =>   array (  ),),
        'image_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/image/new',    ),  ),  4 =>   array (  ),),
        'image_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/image/create',    ),  ),  4 =>   array (  ),),
        'image_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/image',    ),  ),  4 =>   array (  ),),
        'image_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/image',    ),  ),  4 =>   array (  ),),
        'image_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/image',    ),  ),  4 =>   array (  ),),
        'categorie' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categorie/',    ),  ),  4 =>   array (  ),),
        'categorie_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),),
        'categorie_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categorie/new',    ),  ),  4 =>   array (  ),),
        'categorie_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/categorie/create',    ),  ),  4 =>   array (  ),),
        'categorie_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),),
        'categorie_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),),
        'categorie_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/categorie',    ),  ),  4 =>   array (  ),),
        'categorie_public' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorie/',    ),  ),  4 =>   array (  ),),
        'categorie_public_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/categorie',    ),  ),  4 =>   array (  ),),
        'categorie_public_menu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::menuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categorie/submenu',    ),  ),  4 =>   array (  ),),
        'livre' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/livre/',    ),  ),  4 =>   array (  ),),
        'livre_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/livre',    ),  ),  4 =>   array (  ),),
        'livre_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::newAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/livre/new',    ),  ),  4 =>   array (  ),),
        'livre_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::createAction',  ),  2 =>   array (    '_method' => 'post',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/livre/create',    ),  ),  4 =>   array (  ),),
        'livre_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/livre',    ),  ),  4 =>   array (  ),),
        'livre_update' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::updateAction',  ),  2 =>   array (    '_method' => 'post|put',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/update',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/livre',    ),  ),  4 =>   array (  ),),
        'livre_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::deleteAction',  ),  2 =>   array (    '_method' => 'post|delete',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/delete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/admin/livre',    ),  ),  4 =>   array (  ),),
        'livre_public' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicLivreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/livre/',    ),  ),  4 =>   array (  ),),
        'livre_public_list' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicLivreController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/livre/page',    ),  ),  4 =>   array (  ),),
        'livre_public_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicLivreController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/show',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/livre',    ),  ),  4 =>   array (  ),),
        'livre_public_menu' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Walva\\HafBundle\\Controller\\PublicLivreController::menuAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/livre/menu',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
