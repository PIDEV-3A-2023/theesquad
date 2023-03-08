<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/academie/liste' => [[['_route' => 'academie_liste', '_controller' => 'App\\Controller\\AcademieController::indexjson'], null, ['GET' => 0], null, false, false, null]],
        '/academie/listp' => [[['_route' => 'listp', '_controller' => 'App\\Controller\\AcademieController::listp'], null, ['GET' => 0], null, false, false, null]],
        '/academie/exportexcel' => [[['_route' => 'exportexcel', '_controller' => 'App\\Controller\\AcademieController::exportacademieToExcelAction'], null, null, null, false, false, null]],
        '/academie' => [[['_route' => 'app_academie_index', '_controller' => 'App\\Controller\\AcademieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/academie/new' => [[['_route' => 'app_academie_new', '_controller' => 'App\\Controller\\AcademieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/academie/academieindexfront' => [[['_route' => 'app_academie_indexfront', '_controller' => 'App\\Controller\\AcademieController::indexf'], null, ['GET' => 0], null, false, false, null]],
        '/academie/orderByNom' => [[['_route' => 'orderByNom', '_controller' => 'App\\Controller\\AcademieController::index1'], null, ['GET' => 0], null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin_dashboard', '_controller' => 'App\\Controller\\AdminController::dashboard'], null, null, null, true, false, null]],
        '/admin/listCoachsV' => [[['_route' => 'app_admin_listcoachV', '_controller' => 'App\\Controller\\AdminController::listCoachsV'], null, ['GET' => 0], null, false, false, null]],
        '/admin/listCoachsNV' => [[['_route' => 'app_admin_listcoachNV', '_controller' => 'App\\Controller\\AdminController::listCoachsNV'], null, ['GET' => 0], null, false, false, null]],
        '/admin/listClientsV' => [[['_route' => 'app_admin_listclientV', '_controller' => 'App\\Controller\\AdminController::listClientsV'], null, ['GET' => 0], null, false, false, null]],
        '/admin/listClientsNV' => [[['_route' => 'app_admin_listclientNV', '_controller' => 'App\\Controller\\AdminController::listClientsNV'], null, ['GET' => 0], null, false, false, null]],
        '/aliment/DetailAliment' => [[['_route' => 'affichage_aliment_front', '_controller' => 'App\\Controller\\AlimentController::indexFront'], null, null, null, false, false, null]],
        '/aliment' => [[['_route' => 'app_aliment_index', '_controller' => 'App\\Controller\\AlimentController::index'], null, ['GET' => 0], null, true, false, null]],
        '/aliment/new' => [[['_route' => 'app_aliment_new', '_controller' => 'App\\Controller\\AlimentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/location' => [[['_route' => 'app_categorie_location_index', '_controller' => 'App\\Controller\\CategorieLocationController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/location/allcategorieJSON' => [[['_route' => 'list_categorie', '_controller' => 'App\\Controller\\CategorieLocationController::getCategories'], null, null, null, false, false, null]],
        '/categorie/location/addcategorieJSON/new' => [[['_route' => 'addCategorieJSON', '_controller' => 'App\\Controller\\CategorieLocationController::addCategorieJSON'], null, null, null, false, false, null]],
        '/categorie/location/new' => [[['_route' => 'app_categorie_location_new', '_controller' => 'App\\Controller\\CategorieLocationController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/produit/newAdd' => [[['_route' => 'addingG', '_controller' => 'App\\Controller\\CategorieProduitController::add'], null, ['POST' => 0], null, false, false, null]],
        '/categorie/produit' => [[['_route' => 'app_categorie_produit_index', '_controller' => 'App\\Controller\\CategorieProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/categorie/produit/new' => [[['_route' => 'app_categorie_produit_new', '_controller' => 'App\\Controller\\CategorieProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client' => [[['_route' => 'app_client_dashboard1', '_controller' => 'App\\Controller\\ClientController::dashboard'], null, null, null, true, false, null]],
        '/client/dashboard' => [[['_route' => 'app_client_dashboard', '_controller' => 'App\\Controller\\ClientController::dashboard1'], null, null, null, false, false, null]],
        '/client/listCoachs' => [[['_route' => 'app_client_listCoach', '_controller' => 'App\\Controller\\ClientController::listCoachs'], null, ['GET' => 0], null, false, false, null]],
        '/coach' => [[['_route' => 'app_coach_dashboard', '_controller' => 'App\\Controller\\CoachController::dashboard'], null, null, null, true, false, null]],
        '/commande' => [[['_route' => 'app_commande_index', '_controller' => 'App\\Controller\\CommandeController::index'], null, ['GET' => 0], null, true, false, null]],
        '/commande/panierAffichage' => [[['_route' => 'affichage_panier_front', '_controller' => 'App\\Controller\\CommandeController::indexFront'], null, null, null, true, false, null]],
        '/commande/deletePanier' => [[['_route' => 'deletepanier', '_controller' => 'App\\Controller\\CommandeController::deletePanier'], null, null, null, true, false, null]],
        '/commande/new' => [[['_route' => 'app_commande_new', '_controller' => 'App\\Controller\\CommandeController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cours/frontaffichagecours' => [[['_route' => 'affichage_cours_front', '_controller' => 'App\\Controller\\CoursController::indexFront'], null, null, null, false, false, null]],
        '/cours/new' => [[['_route' => 'app_cours_new', '_controller' => 'App\\Controller\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/espace' => [[['_route' => 'app_espace_index', '_controller' => 'App\\Controller\\EspaceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/espace/addEspaceJSON/new' => [[['_route' => 'addEspaceJSON', '_controller' => 'App\\Controller\\EspaceController::addEspaceJSON'], null, null, null, false, false, null]],
        '/espace/search-espace' => [[['_route' => 'app_search_espace', '_controller' => 'App\\Controller\\EspaceController::searchEspace'], null, null, null, false, false, null]],
        '/espace/frontaffichageespace' => [[['_route' => 'liip_imagine_filter', '_controller' => 'App\\Controller\\EspaceController::indexFront'], null, null, null, false, false, null]],
        '/espace/new' => [[['_route' => 'app_espace_new', '_controller' => 'App\\Controller\\EspaceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
        '/objectif' => [[['_route' => 'app_objectif_index', '_controller' => 'App\\Controller\\ObjectifController::index'], null, ['GET' => 0], null, true, false, null]],
        '/objectif/new' => [[['_route' => 'app_objectif_newB', '_controller' => 'App\\Controller\\ObjectifController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/objectif/newObjFront' => [[['_route' => 'app_objectif_new', '_controller' => 'App\\Controller\\ObjectifController::NewFront'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/payment' => [[['_route' => 'app_payment', '_controller' => 'App\\Controller\\PaymentController::index'], null, null, null, false, false, null]],
        '/success' => [[['_route' => 'app_success', '_controller' => 'App\\Controller\\PaymentController::success'], null, null, null, false, false, null]],
        '/error' => [[['_route' => 'app_error', '_controller' => 'App\\Controller\\PaymentController::error'], null, null, null, false, false, null]],
        '/create-checkout-session' => [[['_route' => 'checkout', '_controller' => 'App\\Controller\\PaymentController::checkout'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, true, false, null]],
        '/produit/frontAffichage' => [[['_route' => 'affichage_produit_front', '_controller' => 'App\\Controller\\ProduitController::indexFront'], null, ['GET' => 0], null, false, false, null]],
        '/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::index'], null, null, null, false, false, null]],
        '/registerCoach' => [[['_route' => 'app_registerCoach', '_controller' => 'App\\Controller\\RegistrationController::registerCoach'], null, null, null, false, false, null]],
        '/registerClient' => [[['_route' => 'app_registerClient', '_controller' => 'App\\Controller\\RegistrationController::registerClient'], null, null, null, false, false, null]],
        '/verify/emailClient' => [[['_route' => 'app_verify_emailClient', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmailClient'], null, null, null, false, false, null]],
        '/verify/emailCoach' => [[['_route' => 'app_verify_emailCoach', '_controller' => 'App\\Controller\\RegistrationController::verifyUserEmailCoach'], null, null, null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/routine' => [[['_route' => 'app_routine_index', '_controller' => 'App\\Controller\\RoutineController::index'], null, ['GET' => 0], null, true, false, null]],
        '/routine/new' => [[['_route' => 'app_routine_new', '_controller' => 'App\\Controller\\RoutineController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/routineFr/newroutine' => [[['_route' => 'app_routine_newRoutine', '_controller' => 'App\\Controller\\RoutineControllerFront::newRoutine'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/routineFr/resultat' => [[['_route' => 'Resultat_show', '_controller' => 'App\\Controller\\RoutineControllerFront::show'], null, ['GET' => 0], null, false, false, null]],
        '/salle' => [[['_route' => 'app_salle_index', '_controller' => 'App\\Controller\\SalleController::index'], null, ['GET' => 0], null, true, false, null]],
        '/salle/add' => [[['_route' => 'adding', '_controller' => 'App\\Controller\\SalleController::add'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/salle/new' => [[['_route' => 'app_salle_new', '_controller' => 'App\\Controller\\SalleController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                .'|/a(?'
                    .'|cademie/(?'
                        .'|abonnerAcademie/([^/]++)(*:47)'
                        .'|enleverabonne/([^/]++)(*:76)'
                        .'|([^/]++)(?'
                            .'|(*:94)'
                            .'|/edit(*:106)'
                            .'|(*:114)'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|de(?'
                            .'|leteC(?'
                                .'|lient/([^/]++)(*:159)'
                                .'|oach/([^/]++)(*:180)'
                            .')'
                            .'|sactiverC(?'
                                .'|lient/([^/]++)(*:215)'
                                .'|oach/([^/]++)(*:236)'
                            .')'
                        .')'
                        .'|activerC(?'
                            .'|lient/([^/]++)(*:271)'
                            .'|oach/([^/]++)(*:292)'
                        .')'
                        .'|confirmerCoach/([^/]++)(*:324)'
                        .'|([^/]++)(*:340)'
                    .')'
                    .'|liment/([^/]++)(?'
                        .'|(*:367)'
                        .'|/edit(*:380)'
                        .'|(*:388)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategorie/(?'
                        .'|location/([^/]++)(?'
                            .'|(*:435)'
                            .'|/edit(*:448)'
                            .'|(*:456)'
                        .')'
                        .'|produit/([^/]++)(?'
                            .'|(*:484)'
                            .'|/edit(*:497)'
                            .'|(*:505)'
                        .')'
                    .')'
                    .'|lient/([^/]++)(?'
                        .'|(*:532)'
                        .'|/edit(?'
                            .'|(*:548)'
                            .'|password(*:564)'
                        .')'
                    .')'
                    .'|o(?'
                        .'|ach/([^/]++)(?'
                            .'|(*:593)'
                            .'|/edit(?'
                                .'|(*:609)'
                                .'|password(*:625)'
                            .')'
                        .')'
                        .'|mmande/(?'
                            .'|add/([^/]++)(*:657)'
                            .'|remove/([^/]++)(*:680)'
                            .'|deleteCommande/([^/]++)(*:711)'
                            .'|([^/]++)(?'
                                .'|(*:730)'
                                .'|/edit(*:743)'
                                .'|(*:751)'
                            .')'
                        .')'
                        .'|urs/([^/]++)(?'
                            .'|(*:776)'
                            .'|/edit(*:789)'
                            .'|(*:797)'
                        .')'
                    .')'
                .')'
                .'|/e(?'
                    .'|space/(?'
                        .'|EspaceJson/([^/]++)(*:841)'
                        .'|updateEspaceJSON/([^/]++)(*:874)'
                        .'|deleteEspaceJSON/([^/]++)(*:907)'
                        .'|([^/]++)(?'
                            .'|(*:926)'
                            .'|/edit(*:939)'
                            .'|(*:947)'
                        .')'
                    .')'
                    .'|venement/(?'
                        .'|([^/]++)(?'
                            .'|(*:980)'
                            .'|/edit(*:993)'
                            .'|(*:1001)'
                        .')'
                        .'|frontAffichageExercices/([^/]++)(*:1043)'
                        .'|participer/([^/]++)(*:1071)'
                        .'|imparticiper/([^/]++)(*:1101)'
                    .')'
                    .'|xercice/(?'
                        .'|([^/]++)(?'
                            .'|(*:1133)'
                            .'|/edit(*:1147)'
                            .'|(*:1156)'
                        .')'
                        .'|createExercice/([^/]++)/([^/]++)/([^/]++)(*:1207)'
                        .'|mobile/(?'
                            .'|updateExercice/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:1276)'
                            .'|deleteExercice/([^/]++)(*:1308)'
                        .')'
                    .')'
                .')'
                .'|/objectif/([^/]++)(?'
                    .'|(*:1341)'
                    .'|/edit(*:1355)'
                    .'|(*:1364)'
                .')'
                .'|/produit/([^/]++)(?'
                    .'|(*:1394)'
                    .'|/edit(*:1408)'
                    .'|(*:1417)'
                .')'
                .'|/r(?'
                    .'|eset\\-password/reset(?:/([^/]++))?(*:1466)'
                    .'|outine/(?'
                        .'|([^/]++)(?'
                            .'|(*:1496)'
                            .'|/edit(*:1510)'
                            .'|(*:1519)'
                        .')'
                        .'|add(*:1532)'
                    .')'
                .')'
                .'|/salle/(?'
                    .'|([^/]++)(?'
                        .'|(*:1564)'
                        .'|/edit(*:1578)'
                        .'|(*:1587)'
                    .')'
                    .'|frontaffichage(?'
                        .'|academie/([^/]++)(*:1631)'
                        .'|cours/([^/]++)(*:1654)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1696)'
                    .'|wdt/([^/]++)(*:1717)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:1764)'
                            .'|router(*:1779)'
                            .'|exception(?'
                                .'|(*:1800)'
                                .'|\\.css(*:1814)'
                            .')'
                        .')'
                        .'|(*:1825)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        47 => [[['_route' => 'app_academie_abonner', '_controller' => 'App\\Controller\\AcademieController::abonner'], ['id'], ['GET' => 0], null, false, true, null]],
        76 => [[['_route' => 'enleverabonne', '_controller' => 'App\\Controller\\AcademieController::enlever'], ['id'], null, null, false, true, null]],
        94 => [[['_route' => 'app_academie_show', '_controller' => 'App\\Controller\\AcademieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        106 => [[['_route' => 'app_academie_edit', '_controller' => 'App\\Controller\\AcademieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        114 => [[['_route' => 'app_academie_delete', '_controller' => 'App\\Controller\\AcademieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        159 => [[['_route' => 'app_client_delete', '_controller' => 'App\\Controller\\AdminController::deleteClient'], ['id'], null, null, false, true, null]],
        180 => [[['_route' => 'app_coach_delete', '_controller' => 'App\\Controller\\AdminController::deleteCoach'], ['id'], null, null, false, true, null]],
        215 => [[['_route' => 'app_client_desactiver', '_controller' => 'App\\Controller\\AdminController::desactiverClient'], ['id'], null, null, false, true, null]],
        236 => [[['_route' => 'app_Coach_desactiver', '_controller' => 'App\\Controller\\AdminController::desactiverCoach'], ['id'], null, null, false, true, null]],
        271 => [[['_route' => 'app_client_activer', '_controller' => 'App\\Controller\\AdminController::activerClient'], ['id'], null, null, false, true, null]],
        292 => [[['_route' => 'app_Coach_activer', '_controller' => 'App\\Controller\\AdminController::activerCoach'], ['id'], null, null, false, true, null]],
        324 => [[['_route' => 'app_Coach_confirmer', '_controller' => 'App\\Controller\\AdminController::confirmerCoach'], ['id'], null, null, false, true, null]],
        340 => [[['_route' => 'app_admin_showCoach', '_controller' => 'App\\Controller\\AdminController::showCoach'], ['id'], ['GET' => 0], null, false, true, null]],
        367 => [[['_route' => 'app_aliment_show', '_controller' => 'App\\Controller\\AlimentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        380 => [[['_route' => 'app_aliment_edit', '_controller' => 'App\\Controller\\AlimentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        388 => [[['_route' => 'app_aliment_delete', '_controller' => 'App\\Controller\\AlimentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        435 => [[['_route' => 'app_categorie_location_show', '_controller' => 'App\\Controller\\CategorieLocationController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        448 => [[['_route' => 'app_categorie_location_edit', '_controller' => 'App\\Controller\\CategorieLocationController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        456 => [[['_route' => 'app_categorie_location_delete', '_controller' => 'App\\Controller\\CategorieLocationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        484 => [[['_route' => 'app_categorie_produit_show', '_controller' => 'App\\Controller\\CategorieProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        497 => [[['_route' => 'app_categorie_produit_edit', '_controller' => 'App\\Controller\\CategorieProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        505 => [[['_route' => 'app_categorie_produit_delete', '_controller' => 'App\\Controller\\CategorieProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        532 => [[['_route' => 'app_client_show', '_controller' => 'App\\Controller\\ClientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        548 => [[['_route' => 'app_client_edit', '_controller' => 'App\\Controller\\ClientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        564 => [[['_route' => 'app_client_editpassword', '_controller' => 'App\\Controller\\ClientController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        593 => [[['_route' => 'app_coach_show', '_controller' => 'App\\Controller\\CoachController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        609 => [[['_route' => 'app_coach_edit', '_controller' => 'App\\Controller\\CoachController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        625 => [[['_route' => 'app_coach_editpassword', '_controller' => 'App\\Controller\\CoachController::editPassword'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        657 => [[['_route' => 'add', '_controller' => 'App\\Controller\\CommandeController::add'], ['id'], null, null, false, true, null]],
        680 => [[['_route' => 'remove', '_controller' => 'App\\Controller\\CommandeController::remove'], ['id'], null, null, false, true, null]],
        711 => [[['_route' => 'deleteCommande', '_controller' => 'App\\Controller\\CommandeController::deleteCommande'], ['id'], null, null, false, true, null]],
        730 => [[['_route' => 'app_commande_show', '_controller' => 'App\\Controller\\CommandeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        743 => [[['_route' => 'app_commande_edit', '_controller' => 'App\\Controller\\CommandeController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        751 => [[['_route' => 'app_commande_delete', '_controller' => 'App\\Controller\\CommandeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        776 => [[['_route' => 'app_cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        789 => [[['_route' => 'app_cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        797 => [[['_route' => 'app_cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        841 => [[['_route' => 'espace', '_controller' => 'App\\Controller\\EspaceController::EspaceId'], ['id'], null, null, false, true, null]],
        874 => [[['_route' => 'updateEspaceJSON', '_controller' => 'App\\Controller\\EspaceController::updateEspaceJSON'], ['id'], null, null, false, true, null]],
        907 => [[['_route' => 'deleteEspaceJSON', '_controller' => 'App\\Controller\\EspaceController::deleteEspaceJSON'], ['id'], null, null, false, true, null]],
        926 => [[['_route' => 'app_espace_show', '_controller' => 'App\\Controller\\EspaceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        939 => [[['_route' => 'app_espace_edit', '_controller' => 'App\\Controller\\EspaceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        947 => [[['_route' => 'app_espace_delete', '_controller' => 'App\\Controller\\EspaceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        980 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        993 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1001 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1043 => [[['_route' => 'affichage_exercices_evenement_front', '_controller' => 'App\\Controller\\EvenementController::AfficherExercices'], ['id'], null, null, false, true, null]],
        1071 => [[['_route' => 'participer', '_controller' => 'App\\Controller\\EvenementController::participer'], ['id'], null, null, false, true, null]],
        1101 => [[['_route' => 'imparticiper', '_controller' => 'App\\Controller\\EvenementController::imparticiper'], ['id'], null, null, false, true, null]],
        1133 => [[['_route' => 'app_exercice_show', '_controller' => 'App\\Controller\\ExerciceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1147 => [[['_route' => 'app_exercice_edit', '_controller' => 'App\\Controller\\ExerciceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1156 => [[['_route' => 'app_exercice_delete', '_controller' => 'App\\Controller\\ExerciceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1207 => [[['_route' => 'addExerciceJSON', '_controller' => 'App\\Controller\\ExerciceController::addExerciceJSON'], ['nom', 'description', 'duree'], null, null, false, true, null]],
        1276 => [[['_route' => 'updateExerciceJSON', '_controller' => 'App\\Controller\\ExerciceController::updateExerciceJSON'], ['id', 'nom', 'description', 'duree'], null, null, false, true, null]],
        1308 => [[['_route' => 'deleteExerciceJSON', '_controller' => 'App\\Controller\\ExerciceController::deleteExerciceJSON'], ['id'], null, null, false, true, null]],
        1341 => [[['_route' => 'app_objectif_show', '_controller' => 'App\\Controller\\ObjectifController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1355 => [[['_route' => 'app_objectif_edit', '_controller' => 'App\\Controller\\ObjectifController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1364 => [[['_route' => 'app_objectif_delete', '_controller' => 'App\\Controller\\ObjectifController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1394 => [[['_route' => 'app_produit_show', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1408 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1417 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1466 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1496 => [[['_route' => 'app_routine_show', '_controller' => 'App\\Controller\\RoutineController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1510 => [[['_route' => 'app_routine_edit', '_controller' => 'App\\Controller\\RoutineController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1519 => [[['_route' => 'app_routine_delete', '_controller' => 'App\\Controller\\RoutineController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1532 => [[['_route' => 'adiding', '_controller' => 'App\\Controller\\RoutineController::add'], [], ['POST' => 0], null, false, false, null]],
        1564 => [[['_route' => 'app_salle_show', '_controller' => 'App\\Controller\\SalleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1578 => [[['_route' => 'app_salle_edit', '_controller' => 'App\\Controller\\SalleController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1587 => [[['_route' => 'app_salle_delete', '_controller' => 'App\\Controller\\SalleController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1631 => [[['_route' => 'affichage_academie_salle_front', '_controller' => 'App\\Controller\\SalleController::Affichersalles'], ['id'], null, null, false, true, null]],
        1654 => [[['_route' => 'affichage_salles_cours_front', '_controller' => 'App\\Controller\\SalleController::Affichercours'], ['id'], null, null, false, true, null]],
        1696 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1717 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1764 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1779 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1800 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1814 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1825 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
