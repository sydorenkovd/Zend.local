<?php

namespace Page;

return array(
    'router' => array(
        'routes' => array(
            'page' => array(
                'type' => 'segment',
                'options' => array(
                    'route'    => '/page[/:action][/:id]',
                    'constraints'=>[
                        'action'=>"[a-zA-Z][a-zA-Z0-9_-]*",
                        'id'=>"[0-9]+",
                    ],
                    'defaults' => array(
                        'controller' => 'Page\Controller\Page',
                        'action'     => 'index',
                    ),
                ),
            ),

            ),
        ),
    'controllers' => array(
        'invokables' => array(
            'Page\Controller\Page' => Controller\PageController::class
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console route
);
