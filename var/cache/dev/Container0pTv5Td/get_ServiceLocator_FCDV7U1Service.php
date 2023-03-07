<?php

namespace Container0pTv5Td;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FCDV7U1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FCDV7U1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FCDV7U1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::activerClient' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController::activerCoach' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController::confirmerCoach' => ['privates', '.service_locator.GyY0RxJ', 'get_ServiceLocator_GyY0RxJService', true],
            'App\\Controller\\AdminController::deleteClient' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController::deleteCoach' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController::desactiverClient' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController::desactiverCoach' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController::listClientsNV' => ['privates', '.service_locator.C.s.Jog', 'get_ServiceLocator_C_S_JogService', true],
            'App\\Controller\\AdminController::listClientsV' => ['privates', '.service_locator.C.s.Jog', 'get_ServiceLocator_C_S_JogService', true],
            'App\\Controller\\AdminController::listCoachsNV' => ['privates', '.service_locator.SAYXif1', 'get_ServiceLocator_SAYXif1Service', true],
            'App\\Controller\\AdminController::listCoachsV' => ['privates', '.service_locator.SAYXif1', 'get_ServiceLocator_SAYXif1Service', true],
            'App\\Controller\\AdminController::showCoach' => ['privates', '.service_locator.Veo9UrM', 'get_ServiceLocator_Veo9UrMService', true],
            'App\\Controller\\ClientController::edit' => ['privates', '.service_locator._OplB_o', 'get_ServiceLocator_OplBOService', true],
            'App\\Controller\\ClientController::editPassword' => ['privates', '.service_locator.m5jG2Zv', 'get_ServiceLocator_M5jG2ZvService', true],
            'App\\Controller\\ClientController::listCoachs' => ['privates', '.service_locator.RNsiPAw', 'get_ServiceLocator_RNsiPAwService', true],
            'App\\Controller\\ClientController::show' => ['privates', '.service_locator._sqIFxE', 'get_ServiceLocator_SqIFxEService', true],
            'App\\Controller\\CoachController::edit' => ['privates', '.service_locator.LdXpDXk', 'get_ServiceLocator_LdXpDXkService', true],
            'App\\Controller\\CoachController::editPassword' => ['privates', '.service_locator.ZA8HTQi', 'get_ServiceLocator_ZA8HTQiService', true],
            'App\\Controller\\CoachController::show' => ['privates', '.service_locator.Veo9UrM', 'get_ServiceLocator_Veo9UrMService', true],
            'App\\Controller\\EvenementController::AfficherExercices' => ['privates', '.service_locator.ZiH_8st', 'get_ServiceLocator_ZiH8stService', true],
            'App\\Controller\\EvenementController::afficherStudentsParDate' => ['privates', '.service_locator.YJ0ApAf', 'get_ServiceLocator_YJ0ApAfService', true],
            'App\\Controller\\EvenementController::buttons' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController::calendrier' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController::delete' => ['privates', '.service_locator.hlgA1gu', 'get_ServiceLocator_HlgA1guService', true],
            'App\\Controller\\EvenementController::edit' => ['privates', '.service_locator.hlgA1gu', 'get_ServiceLocator_HlgA1guService', true],
            'App\\Controller\\EvenementController::imparticiper' => ['privates', '.service_locator.wS6MSrR', 'get_ServiceLocator_WS6MSrRService', true],
            'App\\Controller\\EvenementController::index' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController::indexFront' => ['privates', '.service_locator.A5ODqIi', 'get_ServiceLocator_A5ODqIiService', true],
            'App\\Controller\\EvenementController::index_pdf' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController::new' => ['privates', '.service_locator.tT.HEoT', 'get_ServiceLocator_TT_HEoTService', true],
            'App\\Controller\\EvenementController::participer' => ['privates', '.service_locator.a.ukNi9', 'get_ServiceLocator_A_UkNi9Service', true],
            'App\\Controller\\EvenementController::rechercheEvenement' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController::show' => ['privates', '.service_locator.TqxAIqj', 'get_ServiceLocator_TqxAIqjService', true],
            'App\\Controller\\ExerciceController::addExerciceJSON' => ['privates', '.service_locator.i9GOSYV', 'get_ServiceLocator_I9GOSYVService', true],
            'App\\Controller\\ExerciceController::afficherStudentsParDate' => ['privates', '.service_locator.gxpYOVH', 'get_ServiceLocator_GxpYOVHService', true],
            'App\\Controller\\ExerciceController::checkRating' => ['privates', '.service_locator.JEEpHzz', 'get_ServiceLocator_JEEpHzzService', true],
            'App\\Controller\\ExerciceController::delete' => ['privates', '.service_locator.IWM14PC', 'get_ServiceLocator_IWM14PCService', true],
            'App\\Controller\\ExerciceController::edit' => ['privates', '.service_locator.IWM14PC', 'get_ServiceLocator_IWM14PCService', true],
            'App\\Controller\\ExerciceController::getStudents' => ['privates', '.service_locator.g4Fl3Gw', 'get_ServiceLocator_G4Fl3GwService', true],
            'App\\Controller\\ExerciceController::index' => ['privates', '.service_locator.l1RWAay', 'get_ServiceLocator_L1RWAayService', true],
            'App\\Controller\\ExerciceController::index_pdf' => ['privates', '.service_locator.iQDBEXA', 'get_ServiceLocator_IQDBEXAService', true],
            'App\\Controller\\ExerciceController::new' => ['privates', '.service_locator.tzNOPYo', 'get_ServiceLocator_TzNOPYoService', true],
            'App\\Controller\\ExerciceController::rechercheExercice' => ['privates', '.service_locator.iQDBEXA', 'get_ServiceLocator_IQDBEXAService', true],
            'App\\Controller\\ExerciceController::show' => ['privates', '.service_locator.s07JOIL', 'get_ServiceLocator_S07JOILService', true],
            'App\\Controller\\ExerciceController::updateExerciceJSON' => ['privates', '.service_locator.i9GOSYV', 'get_ServiceLocator_I9GOSYVService', true],
            'App\\Controller\\ExerciceController::updaterating' => ['privates', '.service_locator.JEEpHzz', 'get_ServiceLocator_JEEpHzzService', true],
            'App\\Controller\\RegistrationController::registerClient' => ['privates', '.service_locator.fylmQxX', 'get_ServiceLocator_FylmQxXService', true],
            'App\\Controller\\RegistrationController::registerCoach' => ['privates', '.service_locator.fylmQxX', 'get_ServiceLocator_FylmQxXService', true],
            'App\\Controller\\RegistrationController::verifyUserEmailClient' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\RegistrationController::verifyUserEmailCoach' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.kdKsWx5', 'get_ServiceLocator_KdKsWx5Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\AdminController:activerClient' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController:activerCoach' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController:confirmerCoach' => ['privates', '.service_locator.GyY0RxJ', 'get_ServiceLocator_GyY0RxJService', true],
            'App\\Controller\\AdminController:deleteClient' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController:deleteCoach' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController:desactiverClient' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController:desactiverCoach' => ['privates', '.service_locator.GQZbvNR', 'get_ServiceLocator_GQZbvNRService', true],
            'App\\Controller\\AdminController:listClientsNV' => ['privates', '.service_locator.C.s.Jog', 'get_ServiceLocator_C_S_JogService', true],
            'App\\Controller\\AdminController:listClientsV' => ['privates', '.service_locator.C.s.Jog', 'get_ServiceLocator_C_S_JogService', true],
            'App\\Controller\\AdminController:listCoachsNV' => ['privates', '.service_locator.SAYXif1', 'get_ServiceLocator_SAYXif1Service', true],
            'App\\Controller\\AdminController:listCoachsV' => ['privates', '.service_locator.SAYXif1', 'get_ServiceLocator_SAYXif1Service', true],
            'App\\Controller\\AdminController:showCoach' => ['privates', '.service_locator.Veo9UrM', 'get_ServiceLocator_Veo9UrMService', true],
            'App\\Controller\\ClientController:edit' => ['privates', '.service_locator._OplB_o', 'get_ServiceLocator_OplBOService', true],
            'App\\Controller\\ClientController:editPassword' => ['privates', '.service_locator.m5jG2Zv', 'get_ServiceLocator_M5jG2ZvService', true],
            'App\\Controller\\ClientController:listCoachs' => ['privates', '.service_locator.RNsiPAw', 'get_ServiceLocator_RNsiPAwService', true],
            'App\\Controller\\ClientController:show' => ['privates', '.service_locator._sqIFxE', 'get_ServiceLocator_SqIFxEService', true],
            'App\\Controller\\CoachController:edit' => ['privates', '.service_locator.LdXpDXk', 'get_ServiceLocator_LdXpDXkService', true],
            'App\\Controller\\CoachController:editPassword' => ['privates', '.service_locator.ZA8HTQi', 'get_ServiceLocator_ZA8HTQiService', true],
            'App\\Controller\\CoachController:show' => ['privates', '.service_locator.Veo9UrM', 'get_ServiceLocator_Veo9UrMService', true],
            'App\\Controller\\EvenementController:AfficherExercices' => ['privates', '.service_locator.ZiH_8st', 'get_ServiceLocator_ZiH8stService', true],
            'App\\Controller\\EvenementController:afficherStudentsParDate' => ['privates', '.service_locator.YJ0ApAf', 'get_ServiceLocator_YJ0ApAfService', true],
            'App\\Controller\\EvenementController:buttons' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController:calendrier' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController:delete' => ['privates', '.service_locator.hlgA1gu', 'get_ServiceLocator_HlgA1guService', true],
            'App\\Controller\\EvenementController:edit' => ['privates', '.service_locator.hlgA1gu', 'get_ServiceLocator_HlgA1guService', true],
            'App\\Controller\\EvenementController:imparticiper' => ['privates', '.service_locator.wS6MSrR', 'get_ServiceLocator_WS6MSrRService', true],
            'App\\Controller\\EvenementController:index' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController:indexFront' => ['privates', '.service_locator.A5ODqIi', 'get_ServiceLocator_A5ODqIiService', true],
            'App\\Controller\\EvenementController:index_pdf' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController:new' => ['privates', '.service_locator.tT.HEoT', 'get_ServiceLocator_TT_HEoTService', true],
            'App\\Controller\\EvenementController:participer' => ['privates', '.service_locator.a.ukNi9', 'get_ServiceLocator_A_UkNi9Service', true],
            'App\\Controller\\EvenementController:rechercheEvenement' => ['privates', '.service_locator.VvPJOnN', 'get_ServiceLocator_VvPJOnNService', true],
            'App\\Controller\\EvenementController:show' => ['privates', '.service_locator.TqxAIqj', 'get_ServiceLocator_TqxAIqjService', true],
            'App\\Controller\\ExerciceController:addExerciceJSON' => ['privates', '.service_locator.i9GOSYV', 'get_ServiceLocator_I9GOSYVService', true],
            'App\\Controller\\ExerciceController:afficherStudentsParDate' => ['privates', '.service_locator.gxpYOVH', 'get_ServiceLocator_GxpYOVHService', true],
            'App\\Controller\\ExerciceController:checkRating' => ['privates', '.service_locator.JEEpHzz', 'get_ServiceLocator_JEEpHzzService', true],
            'App\\Controller\\ExerciceController:delete' => ['privates', '.service_locator.IWM14PC', 'get_ServiceLocator_IWM14PCService', true],
            'App\\Controller\\ExerciceController:edit' => ['privates', '.service_locator.IWM14PC', 'get_ServiceLocator_IWM14PCService', true],
            'App\\Controller\\ExerciceController:getStudents' => ['privates', '.service_locator.g4Fl3Gw', 'get_ServiceLocator_G4Fl3GwService', true],
            'App\\Controller\\ExerciceController:index' => ['privates', '.service_locator.l1RWAay', 'get_ServiceLocator_L1RWAayService', true],
            'App\\Controller\\ExerciceController:index_pdf' => ['privates', '.service_locator.iQDBEXA', 'get_ServiceLocator_IQDBEXAService', true],
            'App\\Controller\\ExerciceController:new' => ['privates', '.service_locator.tzNOPYo', 'get_ServiceLocator_TzNOPYoService', true],
            'App\\Controller\\ExerciceController:rechercheExercice' => ['privates', '.service_locator.iQDBEXA', 'get_ServiceLocator_IQDBEXAService', true],
            'App\\Controller\\ExerciceController:show' => ['privates', '.service_locator.s07JOIL', 'get_ServiceLocator_S07JOILService', true],
            'App\\Controller\\ExerciceController:updateExerciceJSON' => ['privates', '.service_locator.i9GOSYV', 'get_ServiceLocator_I9GOSYVService', true],
            'App\\Controller\\ExerciceController:updaterating' => ['privates', '.service_locator.JEEpHzz', 'get_ServiceLocator_JEEpHzzService', true],
            'App\\Controller\\RegistrationController:registerClient' => ['privates', '.service_locator.fylmQxX', 'get_ServiceLocator_FylmQxXService', true],
            'App\\Controller\\RegistrationController:registerCoach' => ['privates', '.service_locator.fylmQxX', 'get_ServiceLocator_FylmQxXService', true],
            'App\\Controller\\RegistrationController:verifyUserEmailClient' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\RegistrationController:verifyUserEmailCoach' => ['privates', '.service_locator.q2ji3lu', 'get_ServiceLocator_Q2ji3luService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.pXhSQsU', 'get_ServiceLocator_PXhSQsUService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.kdKsWx5', 'get_ServiceLocator_KdKsWx5Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\AdminController::activerClient' => '?',
            'App\\Controller\\AdminController::activerCoach' => '?',
            'App\\Controller\\AdminController::confirmerCoach' => '?',
            'App\\Controller\\AdminController::deleteClient' => '?',
            'App\\Controller\\AdminController::deleteCoach' => '?',
            'App\\Controller\\AdminController::desactiverClient' => '?',
            'App\\Controller\\AdminController::desactiverCoach' => '?',
            'App\\Controller\\AdminController::listClientsNV' => '?',
            'App\\Controller\\AdminController::listClientsV' => '?',
            'App\\Controller\\AdminController::listCoachsNV' => '?',
            'App\\Controller\\AdminController::listCoachsV' => '?',
            'App\\Controller\\AdminController::showCoach' => '?',
            'App\\Controller\\ClientController::edit' => '?',
            'App\\Controller\\ClientController::editPassword' => '?',
            'App\\Controller\\ClientController::listCoachs' => '?',
            'App\\Controller\\ClientController::show' => '?',
            'App\\Controller\\CoachController::edit' => '?',
            'App\\Controller\\CoachController::editPassword' => '?',
            'App\\Controller\\CoachController::show' => '?',
            'App\\Controller\\EvenementController::AfficherExercices' => '?',
            'App\\Controller\\EvenementController::afficherStudentsParDate' => '?',
            'App\\Controller\\EvenementController::buttons' => '?',
            'App\\Controller\\EvenementController::calendrier' => '?',
            'App\\Controller\\EvenementController::delete' => '?',
            'App\\Controller\\EvenementController::edit' => '?',
            'App\\Controller\\EvenementController::imparticiper' => '?',
            'App\\Controller\\EvenementController::index' => '?',
            'App\\Controller\\EvenementController::indexFront' => '?',
            'App\\Controller\\EvenementController::index_pdf' => '?',
            'App\\Controller\\EvenementController::new' => '?',
            'App\\Controller\\EvenementController::participer' => '?',
            'App\\Controller\\EvenementController::rechercheEvenement' => '?',
            'App\\Controller\\EvenementController::show' => '?',
            'App\\Controller\\ExerciceController::addExerciceJSON' => '?',
            'App\\Controller\\ExerciceController::afficherStudentsParDate' => '?',
            'App\\Controller\\ExerciceController::checkRating' => '?',
            'App\\Controller\\ExerciceController::delete' => '?',
            'App\\Controller\\ExerciceController::edit' => '?',
            'App\\Controller\\ExerciceController::getStudents' => '?',
            'App\\Controller\\ExerciceController::index' => '?',
            'App\\Controller\\ExerciceController::index_pdf' => '?',
            'App\\Controller\\ExerciceController::new' => '?',
            'App\\Controller\\ExerciceController::rechercheExercice' => '?',
            'App\\Controller\\ExerciceController::show' => '?',
            'App\\Controller\\ExerciceController::updateExerciceJSON' => '?',
            'App\\Controller\\ExerciceController::updaterating' => '?',
            'App\\Controller\\RegistrationController::registerClient' => '?',
            'App\\Controller\\RegistrationController::registerCoach' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmailClient' => '?',
            'App\\Controller\\RegistrationController::verifyUserEmailCoach' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\AdminController:activerClient' => '?',
            'App\\Controller\\AdminController:activerCoach' => '?',
            'App\\Controller\\AdminController:confirmerCoach' => '?',
            'App\\Controller\\AdminController:deleteClient' => '?',
            'App\\Controller\\AdminController:deleteCoach' => '?',
            'App\\Controller\\AdminController:desactiverClient' => '?',
            'App\\Controller\\AdminController:desactiverCoach' => '?',
            'App\\Controller\\AdminController:listClientsNV' => '?',
            'App\\Controller\\AdminController:listClientsV' => '?',
            'App\\Controller\\AdminController:listCoachsNV' => '?',
            'App\\Controller\\AdminController:listCoachsV' => '?',
            'App\\Controller\\AdminController:showCoach' => '?',
            'App\\Controller\\ClientController:edit' => '?',
            'App\\Controller\\ClientController:editPassword' => '?',
            'App\\Controller\\ClientController:listCoachs' => '?',
            'App\\Controller\\ClientController:show' => '?',
            'App\\Controller\\CoachController:edit' => '?',
            'App\\Controller\\CoachController:editPassword' => '?',
            'App\\Controller\\CoachController:show' => '?',
            'App\\Controller\\EvenementController:AfficherExercices' => '?',
            'App\\Controller\\EvenementController:afficherStudentsParDate' => '?',
            'App\\Controller\\EvenementController:buttons' => '?',
            'App\\Controller\\EvenementController:calendrier' => '?',
            'App\\Controller\\EvenementController:delete' => '?',
            'App\\Controller\\EvenementController:edit' => '?',
            'App\\Controller\\EvenementController:imparticiper' => '?',
            'App\\Controller\\EvenementController:index' => '?',
            'App\\Controller\\EvenementController:indexFront' => '?',
            'App\\Controller\\EvenementController:index_pdf' => '?',
            'App\\Controller\\EvenementController:new' => '?',
            'App\\Controller\\EvenementController:participer' => '?',
            'App\\Controller\\EvenementController:rechercheEvenement' => '?',
            'App\\Controller\\EvenementController:show' => '?',
            'App\\Controller\\ExerciceController:addExerciceJSON' => '?',
            'App\\Controller\\ExerciceController:afficherStudentsParDate' => '?',
            'App\\Controller\\ExerciceController:checkRating' => '?',
            'App\\Controller\\ExerciceController:delete' => '?',
            'App\\Controller\\ExerciceController:edit' => '?',
            'App\\Controller\\ExerciceController:getStudents' => '?',
            'App\\Controller\\ExerciceController:index' => '?',
            'App\\Controller\\ExerciceController:index_pdf' => '?',
            'App\\Controller\\ExerciceController:new' => '?',
            'App\\Controller\\ExerciceController:rechercheExercice' => '?',
            'App\\Controller\\ExerciceController:show' => '?',
            'App\\Controller\\ExerciceController:updateExerciceJSON' => '?',
            'App\\Controller\\ExerciceController:updaterating' => '?',
            'App\\Controller\\RegistrationController:registerClient' => '?',
            'App\\Controller\\RegistrationController:registerCoach' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmailClient' => '?',
            'App\\Controller\\RegistrationController:verifyUserEmailCoach' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
