<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/evenement/pdf' => [[['_route' => 'pdf', '_controller' => 'App\\Controller\\EvenementController::index_pdf'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/calendrier' => [[['_route' => 'calendrier', '_controller' => 'App\\Controller\\EvenementController::calendrier'], null, ['GET' => 0], null, false, false, null]],
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/frontAffichageEvenement' => [[['_route' => 'affichage_evenement_front', '_controller' => 'App\\Controller\\EvenementController::indexFront'], null, null, null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evenement/rechercheEvenement' => [[['_route' => 'app_evenement_recherche', '_controller' => 'App\\Controller\\EvenementController::rechercheEvenement'], null, null, null, false, false, null]],
        '/evenement/afficheEvenementPardate' => [[['_route' => 'app_evenement_date', '_controller' => 'App\\Controller\\EvenementController::afficherStudentsParDate'], null, null, null, false, false, null]],
        '/exercice/AllExercices' => [[['_route' => 'list', '_controller' => 'App\\Controller\\ExerciceController::getStudents'], null, null, null, false, false, null]],
        '/exercice/buttons' => [[['_route' => 'app_buttons', '_controller' => 'App\\Controller\\ExerciceController::buttons'], null, ['GET' => 0], null, false, false, null]],
        '/exercice' => [[['_route' => 'app_exercice_index', '_controller' => 'App\\Controller\\ExerciceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/exercice/pdfExercice' => [[['_route' => 'pdf_Exercice', '_controller' => 'App\\Controller\\ExerciceController::index_pdf'], null, ['GET' => 0], null, false, false, null]],
        '/exercice/rechercheExercice' => [[['_route' => 'app_exercice_recherche', '_controller' => 'App\\Controller\\ExerciceController::rechercheExercice'], null, null, null, false, false, null]],
        '/exercice/afficheExerciceTri' => [[['_route' => 'app_exercice_tri', '_controller' => 'App\\Controller\\ExerciceController::afficherStudentsParDate'], null, null, null, false, false, null]],
        '/exercice/new' => [[['_route' => 'app_exercice_new', '_controller' => 'App\\Controller\\ExerciceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/exercice/mobile/rating' => [[['_route' => 'mobile_rating', '_controller' => 'App\\Controller\\ExerciceController::rating'], null, null, null, false, false, null]],
        '/exercice/mobile/check_rating' => [[['_route' => 'mobile_check_rating', '_controller' => 'App\\Controller\\ExerciceController::checkRating'], null, null, null, false, false, null]],
        '/exercice/mobile/updaterating' => [[['_route' => 'mobile_updaterating', '_controller' => 'App\\Controller\\ExerciceController::updaterating'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/e(?'
                    .'|venement/(?'
                        .'|([^/]++)(?'
                            .'|(*:35)'
                            .'|/edit(*:47)'
                            .'|(*:54)'
                        .')'
                        .'|frontAffichageExercices/([^/]++)(*:94)'
                        .'|participer/([^/]++)(*:120)'
                        .'|imparticiper/([^/]++)(*:149)'
                    .')'
                    .'|xercice/(?'
                        .'|([^/]++)(?'
                            .'|(*:180)'
                            .'|/edit(*:193)'
                            .'|(*:201)'
                        .')'
                        .'|createExercice/([^/]++)/([^/]++)/([^/]++)(*:251)'
                        .'|mobile/(?'
                            .'|updateExercice/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:319)'
                            .'|deleteExercice/([^/]++)(*:350)'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:392)'
                    .'|wdt/([^/]++)(*:412)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:458)'
                            .'|router(*:472)'
                            .'|exception(?'
                                .'|(*:492)'
                                .'|\\.css(*:505)'
                            .')'
                        .')'
                        .'|(*:515)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        47 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        54 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        94 => [[['_route' => 'affichage_exercices_evenement_front', '_controller' => 'App\\Controller\\EvenementController::AfficherExercices'], ['id'], null, null, false, true, null]],
        120 => [[['_route' => 'participer', '_controller' => 'App\\Controller\\EvenementController::participer'], ['id'], null, null, false, true, null]],
        149 => [[['_route' => 'imparticiper', '_controller' => 'App\\Controller\\EvenementController::imparticiper'], ['id'], null, null, false, true, null]],
        180 => [[['_route' => 'app_exercice_show', '_controller' => 'App\\Controller\\ExerciceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        193 => [[['_route' => 'app_exercice_edit', '_controller' => 'App\\Controller\\ExerciceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        201 => [[['_route' => 'app_exercice_delete', '_controller' => 'App\\Controller\\ExerciceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        251 => [[['_route' => 'addExerciceJSON', '_controller' => 'App\\Controller\\ExerciceController::addExerciceJSON'], ['nom', 'description', 'duree'], null, null, false, true, null]],
        319 => [[['_route' => 'updateExerciceJSON', '_controller' => 'App\\Controller\\ExerciceController::updateExerciceJSON'], ['id', 'nom', 'description', 'duree'], null, null, false, true, null]],
        350 => [[['_route' => 'deleteExerciceJSON', '_controller' => 'App\\Controller\\ExerciceController::deleteExerciceJSON'], ['id'], null, null, false, true, null]],
        392 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        412 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        458 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        472 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        492 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        505 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        515 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
