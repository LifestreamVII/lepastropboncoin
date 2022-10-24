<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\SymfonyController::home'], null, null, null, false, false, null]],
        '/yes' => [[['_route' => 'yes', '_controller' => 'App\\Controller\\Yes::yes'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/questions/([^/]++)(*:26)'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:61)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        26 => [[['_route' => 'question', '_controller' => 'App\\Controller\\Questions::show'], ['wildcard'], null, null, false, true, null]],
        61 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
