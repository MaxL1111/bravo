<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/products')) {
            // products_index
            if (rtrim($pathinfo, '/') === '/products') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_products_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'products_index');
                }

                return array (  '_controller' => 'Bravo\\ShopBundle\\Controller\\ProductsController::indexAction',  '_route' => 'products_index',);
            }
            not_products_index:

            // products_show
            if (preg_match('#^/products/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_products_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_show')), array (  '_controller' => 'Bravo\\ShopBundle\\Controller\\ProductsController::showAction',));
            }
            not_products_show:

            // products_new
            if ($pathinfo === '/products/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_products_new;
                }

                return array (  '_controller' => 'Bravo\\ShopBundle\\Controller\\ProductsController::newAction',  '_route' => 'products_new',);
            }
            not_products_new:

            // products_edit
            if (preg_match('#^/products/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_products_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_edit')), array (  '_controller' => 'Bravo\\ShopBundle\\Controller\\ProductsController::editAction',));
            }
            not_products_edit:

            // products_delete
            if (preg_match('#^/products/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_products_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'products_delete')), array (  '_controller' => 'Bravo\\ShopBundle\\Controller\\ProductsController::deleteAction',));
            }
            not_products_delete:

        }

        // bravo_shop_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'bravo_shop_homepage');
            }

            return array (  '_controller' => 'Bravo\\ShopBundle\\Controller\\DefaultController::indexAction',  '_route' => 'bravo_shop_homepage',);
        }

        // homepage
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
