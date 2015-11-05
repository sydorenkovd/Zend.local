<?php

namespace Application;

return array(
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
