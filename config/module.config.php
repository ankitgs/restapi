<?php
namespace restapi;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    
    /**
     * Define route not found routes
     */
    'router' => [
        'routes' => [
            '404' => [
                'type' => Segment::class,
                'options' => [
                    'route'    => '/:any[/:any][/:any][/:any][/:any][/:any]',
                    'defaults' => [
                        'controller' => Controller\RouteNotFoundController::class,
                        'action'     => 'routenotfound',
                        'isauth'     => true,
                    ],
                ],
                'priority' => -1000,
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\RouteNotFoundController::class => InvokableFactory::class,
        ],
    ],
    'view_manager' => [
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ],
];
