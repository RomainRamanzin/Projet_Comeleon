<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'acceuil', '_controller' => 'App\\Controller\\AcceuilController::index'], null, null, null, false, false, null]],
        '/avis' => [[['_route' => 'avis', '_controller' => 'App\\Controller\\AvisController::index'], null, null, null, false, false, null]],
        '/avis/nouveau' => [[['_route' => 'avis_nouveau', '_controller' => 'App\\Controller\\AvisController::createAvis'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/presentation' => [[['_route' => 'presentation', '_controller' => 'App\\Controller\\PresentationController::index'], null, null, null, false, false, null]],
        '/presentation/new' => [[['_route' => 'presentation_new', '_controller' => 'App\\Controller\\PresentationController::formPresentation'], null, null, null, false, false, null]],
        '/prestation' => [[['_route' => 'prestation', '_controller' => 'App\\Controller\\PrestationController::index'], null, null, null, false, false, null]],
        '/prestation/new' => [[['_route' => 'prestation_create', '_controller' => 'App\\Controller\\PrestationController::form'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/avis/([^/]++)(*:21)'
                .'|/pres(?'
                    .'|entation/([^/]++)/(?'
                        .'|edit(*:61)'
                        .'|delete(*:74)'
                    .')'
                    .'|tation/([^/]++)/(?'
                        .'|edit(*:105)'
                        .'|delete(*:119)'
                    .')'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:157)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [[['_route' => 'avis_show', '_controller' => 'App\\Controller\\AvisController::show'], ['id'], null, null, false, true, null]],
        61 => [[['_route' => 'presentation_edit', '_controller' => 'App\\Controller\\PresentationController::formPresentation'], ['id'], null, null, false, false, null]],
        74 => [[['_route' => 'presentation_delete', '_controller' => 'App\\Controller\\PresentationController::deletePresentation'], ['id'], null, null, false, false, null]],
        105 => [[['_route' => 'prestation_edit', '_controller' => 'App\\Controller\\PrestationController::form'], ['id'], null, null, false, false, null]],
        119 => [[['_route' => 'prestation_delete', '_controller' => 'App\\Controller\\PrestationController::delete'], ['id'], null, null, false, false, null]],
        157 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
