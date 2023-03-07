<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, true, false, null]],
        '/admin/listCoachsV' => [[['_route' => 'app_admin_listcoachV', '_controller' => 'App\\Controller\\AdminController::listCoachsV'], null, ['GET' => 0], null, false, false, null]],
        '/admin/listCoachsNV' => [[['_route' => 'app_admin_listcoachNV', '_controller' => 'App\\Controller\\AdminController::listCoachsNV'], null, ['GET' => 0], null, false, false, null]],
        '/admin/listClientsV' => [[['_route' => 'app_admin_listclientV', '_controller' => 'App\\Controller\\AdminController::listClientsV'], null, ['GET' => 0], null, false, false, null]],
        '/admin/listClientsNV' => [[['_route' => 'app_admin_listclientNV', '_controller' => 'App\\Controller\\AdminController::listClientsNV'], null, ['GET' => 0], null, false, false, null]],
        '/client' => [[['_route' => 'app_client_dashboard', '_controller' => 'App\\Controller\\ClientController::dashboard'], null, null, null, true, false, null]],
        '/client/listCoachs' => [[['_route' => 'app_client_listCoach', '_controller' => 'App\\Controller\\ClientController::listCoachs'], null, ['GET' => 0], null, false, false, null]],
        '/coach' => [[['_route' => 'app_coach_dashboard', '_controller' => 'App\\Controller\\CoachController::dashboard'], null, null, null, true, false, null]],
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
        '/' => [
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/registerCoach' => [[['_route' => 'app_registerCoach', '_controller' => 'App\\Controller\\RegistrationController::registerCoach'], null, null, null, false, false, null]],
        '/registerClient' => [[['_route' => 'app_registerClient', '_controller' => 'App\\Controller\\RegistrationController::registerClient'], null, null, null, false, false, null]],
        '/verify/emailClient' => [[['_route' => 'app_verify_emailClient', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmailClient'], null, null, null, false, false, null]],
        '/verify/emailCoach' => [[['_route' => 'app_verify_emailCoach', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmailCoach'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|de(?'
                        .'|leteC(?'
                            .'|lient/([^/]++)(*:44)'
                            .'|oach/([^/]++)(*:64)'
                        .')'
                        .'|sactiverC(?'
                            .'|lient/([^/]++)(*:98)'
                            .'|oach/([^/]++)(*:118)'
                        .')'
                    .')'
                    .'|activerC(?'
                        .'|lient/([^/]++)(*:153)'
                        .'|oach/([^/]++)(*:174)'
                    .')'
                    .'|confirmerCoach/([^/]++)(*:206)'
                    .'|([^/]++)(*:222)'
                .')'
                .'|/c(?'
                    .'|lient/([^/]++)(?'
                        .'|(*:253)'
                        .'|/edit(?'
                            .'|(*:269)'
                            .'|password(*:285)'
                        .')'
                    .')'
                    .'|oach/([^/]++)(?'
                        .'|(*:311)'
                        .'|/edit(?'
                            .'|(*:327)'
                            .'|password(*:343)'
                        .')'
                    .')'
                .')'
                .'|/e(?'
                    .'|venement/(?'
                        .'|([^/]++)(?'
                            .'|(*:382)'
                            .'|/edit(*:395)'
                            .'|(*:403)'
                        .')'
                        .'|frontAffichageExercices/([^/]++)(*:444)'
                        .'|participer/([^/]++)(*:471)'
                        .'|imparticiper/([^/]++)(*:500)'
                    .')'
                    .'|xercice/(?'
                        .'|([^/]++)(?'
                            .'|(*:531)'
                            .'|/edit(*:544)'
                            .'|(*:552)'
                        .')'
                        .'|createExercice/([^/]++)/([^/]++)/([^/]++)(*:602)'
                        .'|mobile/(?'
                            .'|updateExercice/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:670)'
                            .'|deleteExercice/([^/]++)(*:701)'
                        .')'
                    .')'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:748)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:787)'
                    .'|wdt/([^/]++)(*:807)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:853)'
                            .'|router(*:867)'
                            .'|exception(?'
                                .'|(*:887)'
                                .'|\\.css(*:900)'
                            .')'
                        .')'
                        .'|(*:910)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        44 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\AdminController::deleteClient'], ['id'], null, null, false, true, null]],
        64 => [[['_route' => 'app_coach_delete', '_controller' => 'App\\Controller\\AdminController::deleteCoach'], ['id'], null, null, false, true, null]],
        98 => [[['_route' => 'app_client_desactiver', '_controller' => 'App\\Controller\\AdminController::desactiverClient'], ['id'], null, null, false, true, null]],
        118 => [[['_route' => 'app_Coach_desactiver', '_controller' => 'App\\Controller\\AdminController::desactiverCoach'], ['id'], null, null, false, true, null]],
        153 => [[['_route' => 'app_client_activer', '_controller' => 'App\\Controller\\AdminController::activerClient'], ['id'], null, null, false, true, null]],
        174 => [[['_route' => 'app_Coach_activer', '_controller' => 'App\\Controller\\AdminController::activerCoach'], ['id'], null, null, false, true, null]],
        206 => [[['_route' => 'app_Coach_confirmer', '_controller' => 'App\\Controller\\AdminController::confirmerCoach'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'app_admin_showCoach', '_controller' => 'App\\Controller\\AdminController::showCoach'], ['id'], ['GET' => 0], null, false, true, null]],
        253 => [[['_route' => 'app_client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        269 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        285 => [[['_route' => 'app_client_editpassword', '_controller' => 'App\\Controller\\ClientController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        311 => [[['_route' => 'app_coach_show', '_controller' => 'App\\Controller\\CoachController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        327 => [[['_route' => 'app_coach_edit', '_controller' => 'App\\Controller\\CoachController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        343 => [[['_route' => 'app_coach_editpassword', '_controller' => 'App\\Controller\\CoachController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        382 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        395 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        403 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        444 => [[['_route' => 'affichage_exercices_evenement_front', '_controller' => 'App\\Controller\\EvenementController::AfficherExercices'], ['id'], null, null, false, true, null]],
        471 => [[['_route' => 'participer', '_controller' => 'App\\Controller\\EvenementController::participer'], ['id'], null, null, false, true, null]],
        500 => [[['_route' => 'imparticiper', '_controller' => 'App\\Controller\\EvenementController::imparticiper'], ['id'], null, null, false, true, null]],
        531 => [[['_route' => 'app_exercice_show', '_controller' => 'App\\Controller\\ExerciceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        544 => [[['_route' => 'app_exercice_edit', '_controller' => 'App\\Controller\\ExerciceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        552 => [[['_route' => 'app_exercice_delete', '_controller' => 'App\\Controller\\ExerciceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        602 => [[['_route' => 'addExerciceJSON', '_controller' => 'App\\Controller\\ExerciceController::addExerciceJSON'], ['nom', 'description', 'duree'], null, null, false, true, null]],
        670 => [[['_route' => 'updateExerciceJSON', '_controller' => 'App\\Controller\\ExerciceController::updateExerciceJSON'], ['id', 'nom', 'description', 'duree'], null, null, false, true, null]],
        701 => [[['_route' => 'deleteExerciceJSON', '_controller' => 'App\\Controller\\ExerciceController::deleteExerciceJSON'], ['id'], null, null, false, true, null]],
        748 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        787 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        807 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        853 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        867 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        887 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        900 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        910 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
