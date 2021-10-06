<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\PresentationController::home'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\PresentationController::login'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'security', '_controller' => 'App\\Controller\\SecurityController::registration'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/p(?'
                    .'|resentation/([^/]++)(*:32)'
                    .'|age/([^/]++)(*:51)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:87)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        32 => [[['_route' => 'presentation', '_controller' => 'App\\Controller\\PresentationController::presentation'], ['id'], null, null, false, true, null]],
        51 => [[['_route' => 'page_edit', '_controller' => 'App\\Controller\\PresentationController::form'], ['id'], null, null, false, true, null]],
        87 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
