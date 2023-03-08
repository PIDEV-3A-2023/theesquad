<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'academie_liste' => [[], ['_controller' => 'App\\Controller\\AcademieController::indexjson'], [], [['text', '/academie/liste']], [], [], []],
    'listp' => [[], ['_controller' => 'App\\Controller\\AcademieController::listp'], [], [['text', '/academie/listp']], [], [], []],
    'exportexcel' => [[], ['_controller' => 'App\\Controller\\AcademieController::exportacademieToExcelAction'], [], [['text', '/academie/exportexcel']], [], [], []],
    'app_academie_index' => [[], ['_controller' => 'App\\Controller\\AcademieController::index'], [], [['text', '/academie/']], [], [], []],
    'app_academie_new' => [[], ['_controller' => 'App\\Controller\\AcademieController::new'], [], [['text', '/academie/new']], [], [], []],
    'app_academie_indexfront' => [[], ['_controller' => 'App\\Controller\\AcademieController::indexf'], [], [['text', '/academie/academieindexfront']], [], [], []],
    'app_academie_abonner' => [['id'], ['_controller' => 'App\\Controller\\AcademieController::abonner'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/academie/abonnerAcademie']], [], [], []],
    'enleverabonne' => [['id'], ['_controller' => 'App\\Controller\\AcademieController::enlever'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/academie/enleverabonne']], [], [], []],
    'orderByNom' => [[], ['_controller' => 'App\\Controller\\AcademieController::index1'], [], [['text', '/academie/orderByNom']], [], [], []],
    'app_academie_show' => [['id'], ['_controller' => 'App\\Controller\\AcademieController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/academie']], [], [], []],
    'app_academie_edit' => [['id'], ['_controller' => 'App\\Controller\\AcademieController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/academie']], [], [], []],
    'app_academie_delete' => [['id'], ['_controller' => 'App\\Controller\\AcademieController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/academie']], [], [], []],
    'app_admin_dashboard' => [[], ['_controller' => 'App\\Controller\\AdminController::dashboard'], [], [['text', '/admin/']], [], [], []],
    'app_admin_listcoachV' => [[], ['_controller' => 'App\\Controller\\AdminController::listCoachsV'], [], [['text', '/admin/listCoachsV']], [], [], []],
    'app_admin_listcoachNV' => [[], ['_controller' => 'App\\Controller\\AdminController::listCoachsNV'], [], [['text', '/admin/listCoachsNV']], [], [], []],
    'app_admin_listclientV' => [[], ['_controller' => 'App\\Controller\\AdminController::listClientsV'], [], [['text', '/admin/listClientsV']], [], [], []],
    'app_admin_listclientNV' => [[], ['_controller' => 'App\\Controller\\AdminController::listClientsNV'], [], [['text', '/admin/listClientsNV']], [], [], []],
    'app_client_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteClient'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/deleteClient']], [], [], []],
    'app_coach_delete' => [['id'], ['_controller' => 'App\\Controller\\AdminController::deleteCoach'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/deleteCoach']], [], [], []],
    'app_client_activer' => [['id'], ['_controller' => 'App\\Controller\\AdminController::activerClient'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/activerClient']], [], [], []],
    'app_client_desactiver' => [['id'], ['_controller' => 'App\\Controller\\AdminController::desactiverClient'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/desactiverClient']], [], [], []],
    'app_Coach_activer' => [['id'], ['_controller' => 'App\\Controller\\AdminController::activerCoach'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/activerCoach']], [], [], []],
    'app_Coach_desactiver' => [['id'], ['_controller' => 'App\\Controller\\AdminController::desactiverCoach'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/desactiverCoach']], [], [], []],
    'app_Coach_confirmer' => [['id'], ['_controller' => 'App\\Controller\\AdminController::confirmerCoach'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin/confirmerCoach']], [], [], []],
    'app_admin_showCoach' => [['id'], ['_controller' => 'App\\Controller\\AdminController::showCoach'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/admin']], [], [], []],
    'affichage_aliment_front' => [[], ['_controller' => 'App\\Controller\\AlimentController::indexFront'], [], [['text', '/aliment/DetailAliment']], [], [], []],
    'app_aliment_index' => [[], ['_controller' => 'App\\Controller\\AlimentController::index'], [], [['text', '/aliment/']], [], [], []],
    'app_aliment_new' => [[], ['_controller' => 'App\\Controller\\AlimentController::new'], [], [['text', '/aliment/new']], [], [], []],
    'app_aliment_show' => [['id'], ['_controller' => 'App\\Controller\\AlimentController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/aliment']], [], [], []],
    'app_aliment_edit' => [['id'], ['_controller' => 'App\\Controller\\AlimentController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/aliment']], [], [], []],
    'app_aliment_delete' => [['id'], ['_controller' => 'App\\Controller\\AlimentController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/aliment']], [], [], []],
    'app_categorie_location_index' => [[], ['_controller' => 'App\\Controller\\CategorieLocationController::index'], [], [['text', '/categorie/location/']], [], [], []],
    'list_categorie' => [[], ['_controller' => 'App\\Controller\\CategorieLocationController::getCategories'], [], [['text', '/categorie/location/allcategorieJSON']], [], [], []],
    'addCategorieJSON' => [[], ['_controller' => 'App\\Controller\\CategorieLocationController::addCategorieJSON'], [], [['text', '/categorie/location/addcategorieJSON/new']], [], [], []],
    'app_categorie_location_new' => [[], ['_controller' => 'App\\Controller\\CategorieLocationController::new'], [], [['text', '/categorie/location/new']], [], [], []],
    'app_categorie_location_show' => [['id'], ['_controller' => 'App\\Controller\\CategorieLocationController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/location']], [], [], []],
    'app_categorie_location_edit' => [['id'], ['_controller' => 'App\\Controller\\CategorieLocationController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/location']], [], [], []],
    'app_categorie_location_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieLocationController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/location']], [], [], []],
    'addingG' => [[], ['_controller' => 'App\\Controller\\CategorieProduitController::add'], [], [['text', '/categorie/produit/newAdd']], [], [], []],
    'app_categorie_produit_index' => [[], ['_controller' => 'App\\Controller\\CategorieProduitController::index'], [], [['text', '/categorie/produit/']], [], [], []],
    'app_categorie_produit_new' => [[], ['_controller' => 'App\\Controller\\CategorieProduitController::new'], [], [['text', '/categorie/produit/new']], [], [], []],
    'app_categorie_produit_show' => [['id'], ['_controller' => 'App\\Controller\\CategorieProduitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/produit']], [], [], []],
    'app_categorie_produit_edit' => [['id'], ['_controller' => 'App\\Controller\\CategorieProduitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/produit']], [], [], []],
    'app_categorie_produit_delete' => [['id'], ['_controller' => 'App\\Controller\\CategorieProduitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/categorie/produit']], [], [], []],
    'app_client_dashboard1' => [[], ['_controller' => 'App\\Controller\\ClientController::dashboard'], [], [['text', '/client/']], [], [], []],
    'app_client_dashboard' => [[], ['_controller' => 'App\\Controller\\ClientController::dashboard1'], [], [['text', '/client/dashboard']], [], [], []],
    'app_client_listCoach' => [[], ['_controller' => 'App\\Controller\\ClientController::listCoachs'], [], [['text', '/client/listCoachs']], [], [], []],
    'app_client_show' => [['id'], ['_controller' => 'App\\Controller\\ClientController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/client']], [], [], []],
    'app_client_edit' => [['id'], ['_controller' => 'App\\Controller\\ClientController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/client']], [], [], []],
    'app_client_editpassword' => [['id'], ['_controller' => 'App\\Controller\\ClientController::editPassword'], [], [['text', '/editpassword'], ['variable', '/', '[^/]++', 'id', true], ['text', '/client']], [], [], []],
    'app_coach_dashboard' => [[], ['_controller' => 'App\\Controller\\CoachController::dashboard'], [], [['text', '/coach/']], [], [], []],
    'app_coach_show' => [['id'], ['_controller' => 'App\\Controller\\CoachController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/coach']], [], [], []],
    'app_coach_edit' => [['id'], ['_controller' => 'App\\Controller\\CoachController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/coach']], [], [], []],
    'app_coach_editpassword' => [['id'], ['_controller' => 'App\\Controller\\CoachController::editPassword'], [], [['text', '/editpassword'], ['variable', '/', '[^/]++', 'id', true], ['text', '/coach']], [], [], []],
    'app_commande_index' => [[], ['_controller' => 'App\\Controller\\CommandeController::index'], [], [['text', '/commande/']], [], [], []],
    'affichage_panier_front' => [[], ['_controller' => 'App\\Controller\\CommandeController::indexFront'], [], [['text', '/commande/panierAffichage/']], [], [], []],
    'deletepanier' => [[], ['_controller' => 'App\\Controller\\CommandeController::deletePanier'], [], [['text', '/commande/deletePanier/']], [], [], []],
    'add' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::add'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande/add']], [], [], []],
    'remove' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::remove'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande/remove']], [], [], []],
    'deleteCommande' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::deleteCommande'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande/deleteCommande']], [], [], []],
    'app_commande_new' => [[], ['_controller' => 'App\\Controller\\CommandeController::new'], [], [['text', '/commande/new']], [], [], []],
    'app_commande_show' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'app_commande_edit' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'app_commande_delete' => [['id'], ['_controller' => 'App\\Controller\\CommandeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/commande']], [], [], []],
    'app_cours_index' => [[], ['_controller' => 'App\\Controller\\CoursController::index'], [], [['text', '/cours/']], [], [], []],
    'affichage_cours_front' => [[], ['_controller' => 'App\\Controller\\CoursController::indexFront'], [], [['text', '/cours/frontaffichagecours']], [], [], []],
    'app_cours_new' => [[], ['_controller' => 'App\\Controller\\CoursController::new'], [], [['text', '/cours/new']], [], [], []],
    'app_cours_show' => [['id'], ['_controller' => 'App\\Controller\\CoursController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cours']], [], [], []],
    'app_cours_edit' => [['id'], ['_controller' => 'App\\Controller\\CoursController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/cours']], [], [], []],
    'app_cours_delete' => [['id'], ['_controller' => 'App\\Controller\\CoursController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/cours']], [], [], []],
    'app_espace_index' => [[], ['_controller' => 'App\\Controller\\EspaceController::index'], [], [['text', '/espace/']], [], [], []],
    'espace' => [['id'], ['_controller' => 'App\\Controller\\EspaceController::EspaceId'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/espace/EspaceJson']], [], [], []],
    'addEspaceJSON' => [[], ['_controller' => 'App\\Controller\\EspaceController::addEspaceJSON'], [], [['text', '/espace/addEspaceJSON/new']], [], [], []],
    'updateEspaceJSON' => [['id'], ['_controller' => 'App\\Controller\\EspaceController::updateEspaceJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/espace/updateEspaceJSON']], [], [], []],
    'deleteEspaceJSON' => [['id'], ['_controller' => 'App\\Controller\\EspaceController::deleteEspaceJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/espace/deleteEspaceJSON']], [], [], []],
    'app_search_espace' => [[], ['_controller' => 'App\\Controller\\EspaceController::searchEspace'], [], [['text', '/espace/search-espace']], [], [], []],
    'liip_imagine_filter' => [[], ['_controller' => 'App\\Controller\\EspaceController::indexFront'], [], [['text', '/espace/frontaffichageespace']], [], [], []],
    'app_espace_new' => [[], ['_controller' => 'App\\Controller\\EspaceController::new'], [], [['text', '/espace/new']], [], [], []],
    'app_espace_show' => [['id'], ['_controller' => 'App\\Controller\\EspaceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/espace']], [], [], []],
    'app_espace_edit' => [['id'], ['_controller' => 'App\\Controller\\EspaceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/espace']], [], [], []],
    'app_espace_delete' => [['id'], ['_controller' => 'App\\Controller\\EspaceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/espace']], [], [], []],
    'pdf' => [[], ['_controller' => 'App\\Controller\\EvenementController::index_pdf'], [], [['text', '/evenement/pdf']], [], [], []],
    'calendrier' => [[], ['_controller' => 'App\\Controller\\EvenementController::calendrier'], [], [['text', '/evenement/calendrier']], [], [], []],
    'app_evenement_index' => [[], ['_controller' => 'App\\Controller\\EvenementController::index'], [], [['text', '/evenement/']], [], [], []],
    'affichage_evenement_front' => [[], ['_controller' => 'App\\Controller\\EvenementController::indexFront'], [], [['text', '/evenement/frontAffichageEvenement']], [], [], []],
    'app_evenement_new' => [[], ['_controller' => 'App\\Controller\\EvenementController::new'], [], [['text', '/evenement/new']], [], [], []],
    'app_evenement_recherche' => [[], ['_controller' => 'App\\Controller\\EvenementController::rechercheEvenement'], [], [['text', '/evenement/rechercheEvenement']], [], [], []],
    'app_evenement_date' => [[], ['_controller' => 'App\\Controller\\EvenementController::afficherStudentsParDate'], [], [['text', '/evenement/afficheEvenementPardate']], [], [], []],
    'app_evenement_show' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'app_evenement_edit' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'app_evenement_delete' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement']], [], [], []],
    'affichage_exercices_evenement_front' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::AfficherExercices'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement/frontAffichageExercices']], [], [], []],
    'participer' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::participer'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement/participer']], [], [], []],
    'imparticiper' => [['id'], ['_controller' => 'App\\Controller\\EvenementController::imparticiper'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/evenement/imparticiper']], [], [], []],
    'list' => [[], ['_controller' => 'App\\Controller\\ExerciceController::getStudents'], [], [['text', '/exercice/AllExercices']], [], [], []],
    'app_buttons' => [[], ['_controller' => 'App\\Controller\\ExerciceController::buttons'], [], [['text', '/exercice/buttons']], [], [], []],
    'app_exercice_index' => [[], ['_controller' => 'App\\Controller\\ExerciceController::index'], [], [['text', '/exercice/']], [], [], []],
    'pdf_Exercice' => [[], ['_controller' => 'App\\Controller\\ExerciceController::index_pdf'], [], [['text', '/exercice/pdfExercice']], [], [], []],
    'app_exercice_recherche' => [[], ['_controller' => 'App\\Controller\\ExerciceController::rechercheExercice'], [], [['text', '/exercice/rechercheExercice']], [], [], []],
    'app_exercice_tri' => [[], ['_controller' => 'App\\Controller\\ExerciceController::afficherStudentsParDate'], [], [['text', '/exercice/afficheExerciceTri']], [], [], []],
    'app_exercice_new' => [[], ['_controller' => 'App\\Controller\\ExerciceController::new'], [], [['text', '/exercice/new']], [], [], []],
    'app_exercice_show' => [['id'], ['_controller' => 'App\\Controller\\ExerciceController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/exercice']], [], [], []],
    'app_exercice_edit' => [['id'], ['_controller' => 'App\\Controller\\ExerciceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/exercice']], [], [], []],
    'app_exercice_delete' => [['id'], ['_controller' => 'App\\Controller\\ExerciceController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/exercice']], [], [], []],
    'addExerciceJSON' => [['nom', 'description', 'duree'], ['_controller' => 'App\\Controller\\ExerciceController::addExerciceJSON'], [], [['variable', '/', '[^/]++', 'duree', true], ['variable', '/', '[^/]++', 'description', true], ['variable', '/', '[^/]++', 'nom', true], ['text', '/exercice/createExercice']], [], [], []],
    'updateExerciceJSON' => [['id', 'nom', 'description', 'duree'], ['_controller' => 'App\\Controller\\ExerciceController::updateExerciceJSON'], [], [['variable', '/', '[^/]++', 'duree', true], ['variable', '/', '[^/]++', 'description', true], ['variable', '/', '[^/]++', 'nom', true], ['variable', '/', '[^/]++', 'id', true], ['text', '/exercice/mobile/updateExercice']], [], [], []],
    'deleteExerciceJSON' => [['id'], ['_controller' => 'App\\Controller\\ExerciceController::deleteExerciceJSON'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/exercice/mobile/deleteExercice']], [], [], []],
    'mobile_rating' => [[], ['_controller' => 'App\\Controller\\ExerciceController::rating'], [], [['text', '/exercice/mobile/rating']], [], [], []],
    'mobile_check_rating' => [[], ['_controller' => 'App\\Controller\\ExerciceController::checkRating'], [], [['text', '/exercice/mobile/check_rating']], [], [], []],
    'mobile_updaterating' => [[], ['_controller' => 'App\\Controller\\ExerciceController::updaterating'], [], [['text', '/exercice/mobile/updaterating']], [], [], []],
    'app_home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'app_objectif_index' => [[], ['_controller' => 'App\\Controller\\ObjectifController::index'], [], [['text', '/objectif/']], [], [], []],
    'app_objectif_newB' => [[], ['_controller' => 'App\\Controller\\ObjectifController::new'], [], [['text', '/objectif/new']], [], [], []],
    'app_objectif_new' => [[], ['_controller' => 'App\\Controller\\ObjectifController::NewFront'], [], [['text', '/objectif/newObjFront']], [], [], []],
    'app_objectif_show' => [['id'], ['_controller' => 'App\\Controller\\ObjectifController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/objectif']], [], [], []],
    'app_objectif_edit' => [['id'], ['_controller' => 'App\\Controller\\ObjectifController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/objectif']], [], [], []],
    'app_objectif_delete' => [['id'], ['_controller' => 'App\\Controller\\ObjectifController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/objectif']], [], [], []],
    'app_payment' => [[], ['_controller' => 'App\\Controller\\PaymentController::index'], [], [['text', '/payment']], [], [], []],
    'app_success' => [[], ['_controller' => 'App\\Controller\\PaymentController::success'], [], [['text', '/success']], [], [], []],
    'app_error' => [[], ['_controller' => 'App\\Controller\\PaymentController::error'], [], [['text', '/error']], [], [], []],
    'checkout' => [[], ['_controller' => 'App\\Controller\\PaymentController::checkout'], [], [['text', '/create-checkout-session']], [], [], []],
    'app_produit_index' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit/']], [], [], []],
    'affichage_produit_front' => [[], ['_controller' => 'App\\Controller\\ProduitController::indexFront'], [], [['text', '/produit/frontAffichage']], [], [], []],
    'app_produit_new' => [[], ['_controller' => 'App\\Controller\\ProduitController::new'], [], [['text', '/produit/new']], [], [], []],
    'app_produit_show' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_produit_edit' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_produit_delete' => [['id'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/produit']], [], [], []],
    'app_register' => [[], ['_controller' => 'App\\Controller\\RegistrationController::index'], [], [['text', '/register']], [], [], []],
    'app_registerCoach' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerCoach'], [], [['text', '/registerCoach']], [], [], []],
    'app_registerClient' => [[], ['_controller' => 'App\\Controller\\RegistrationController::registerClient'], [], [['text', '/registerClient']], [], [], []],
    'app_verify_emailClient' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmailClient'], [], [['text', '/verify/emailClient']], [], [], []],
    'app_verify_emailCoach' => [[], ['_controller' => 'App\\Controller\\RegistrationController::verifyUserEmailCoach'], [], [['text', '/verify/emailCoach']], [], [], []],
    'app_forgot_password_request' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::request'], [], [['text', '/reset-password']], [], [], []],
    'app_check_email' => [[], ['_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], [], [['text', '/reset-password/check-email']], [], [], []],
    'app_reset_password' => [['token'], ['token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/reset-password/reset']], [], [], []],
    'app_routine_index' => [[], ['_controller' => 'App\\Controller\\RoutineController::index'], [], [['text', '/routine/']], [], [], []],
    'app_routine_new' => [[], ['_controller' => 'App\\Controller\\RoutineController::new'], [], [['text', '/routine/new']], [], [], []],
    'app_routine_show' => [['id'], ['_controller' => 'App\\Controller\\RoutineController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/routine']], [], [], []],
    'app_routine_edit' => [['id'], ['_controller' => 'App\\Controller\\RoutineController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/routine']], [], [], []],
    'app_routine_delete' => [['id'], ['_controller' => 'App\\Controller\\RoutineController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/routine']], [], [], []],
    'adiding' => [[], ['_controller' => 'App\\Controller\\RoutineController::add'], [], [['text', '/routine/add']], [], [], []],
    'app_routine_newRoutine' => [[], ['_controller' => 'App\\Controller\\RoutineControllerFront::newRoutine'], [], [['text', '/routineFr/newroutine']], [], [], []],
    'Resultat_show' => [[], ['_controller' => 'App\\Controller\\RoutineControllerFront::show'], [], [['text', '/routineFr/resultat']], [], [], []],
    'app_salle_index' => [[], ['_controller' => 'App\\Controller\\SalleController::index'], [], [['text', '/salle/']], [], [], []],
    'adding' => [[], ['_controller' => 'App\\Controller\\SalleController::add'], [], [['text', '/salle/add']], [], [], []],
    'app_salle_new' => [[], ['_controller' => 'App\\Controller\\SalleController::new'], [], [['text', '/salle/new']], [], [], []],
    'app_salle_show' => [['id'], ['_controller' => 'App\\Controller\\SalleController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'app_salle_edit' => [['id'], ['_controller' => 'App\\Controller\\SalleController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'app_salle_delete' => [['id'], ['_controller' => 'App\\Controller\\SalleController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle']], [], [], []],
    'affichage_academie_salle_front' => [['id'], ['_controller' => 'App\\Controller\\SalleController::Affichersalles'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle/frontaffichageacademie']], [], [], []],
    'affichage_salles_cours_front' => [['id'], ['_controller' => 'App\\Controller\\SalleController::Affichercours'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/salle/frontaffichagecours']], [], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'index' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
];