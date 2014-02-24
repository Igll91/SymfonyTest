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
    private static $declaredRoutes = array(
        '_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\MainBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_newCategory' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\MainBundle\\Controller\\DefaultController::newCategory',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/spremiKategoriju',    ),  ),  4 =>   array (  ),),
        '_blog' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\MainBundle\\Controller\\DefaultController::newBlog',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/newBlog',    ),  ),  4 =>   array (  ),),
        '_blogSave' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\MainBundle\\Controller\\DefaultController::saveBlog',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/saveBlog',    ),  ),  4 =>   array (  ),),
        '_blogEdit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\MainBundle\\Controller\\DefaultController::editBlog',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/editBlog',    ),  ),  4 =>   array (  ),),
        '_blogDelete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\MainBundle\\Controller\\DefaultController::deleteBlog',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/deleteBlog',    ),  ),  4 =>   array (  ),),
        '_blogUpdate' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Blog\\MainBundle\\Controller\\DefaultController::updateBlog',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/updateBlog',    ),  ),  4 =>   array (  ),),
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
