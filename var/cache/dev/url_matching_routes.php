<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'acceuil', '_controller' => 'App\\Controller\\AcceuilController::index'], null, null, null, false, false, null]],
        '/prestation' => [[['_route' => 'prestation', '_controller' => 'App\\Controller\\PrestationController::index'], null, null, null, false, false, null]],
        '/prestation/new' => [[['_route' => 'prestation_create', '_controller' => 'App\\Controller\\PrestationController::form'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/prestation/([^/]++)/(?'
                    .'|edit(*:35)'
                    .'|delete(*:48)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:84)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'prestation_edit', '_controller' => 'App\\Controller\\PrestationController::form'], ['id'], null, null, false, false, null]],
        48 => [[['_route' => 'prestation_delete', '_controller' => 'App\\Controller\\PrestationController::delete'], ['id'], null, null, false, false, null]],
        84 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
