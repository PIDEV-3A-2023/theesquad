<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Coach;
use App\Repository\ClientRepository;
use App\Repository\CoachRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'app_admin_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('admin/dashboardAdmin.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    #[Route('/listCoachsV', name: 'app_admin_listcoachV', methods: ['GET'])]
    public function listCoachsV(CoachRepository $coachRepository): Response
    {
        return $this->render('admin/listCoachs.html.twig', [
            'coaches' => $coachRepository->findBy(['isVerified'=>true]),
        ]);
    }
    #[Route('/listCoachsNV', name: 'app_admin_listcoachNV', methods: ['GET'])]
    public function listCoachsNV(CoachRepository $coachRepository): Response
    {
        return $this->render('admin/listCoachsNV.html.twig', [
            'coaches' => $coachRepository->findBy(['isVerified'=>false]),
        ]);
    }
    #[Route('/rechercheCoachsV', name: 'app_admin_rechercheCoachsV')]
    public function rechercheCoachsV(CoachRepository $coachRepository, Request  $request): Response
    {
        $data=$request->get('search');
        $coach = $coachRepository->findBy(['nom'=>$data , 'isVerified' => true]);
        return $this->render('admin/listCoachs.html.twig',
            ["coaches" => $coach]);
    }
    #[Route('/rechercheCoachsNV', name: 'app_admin_rechercheCoachsNV')]
    public function rechercheCoachsNV(CoachRepository $coachRepository, Request  $request): Response
    {
        $data=$request->get('search');
        $coach = $coachRepository->findBy(['nom'=>$data , 'isVerified' => false]);
        return $this->render('admin/listCoachsNV.html.twig',
            ["coaches" => $coach]);
    }


    #[Route('/listClientsV', name: 'app_admin_listclientV', methods: ['GET'])]
    public function listClientsV(ClientRepository $clientRepository): Response
    {
        return $this->render('admin/listClients.html.twig', [
            'clients' => $clientRepository->findBy(['isVerified'=>true]),
        ]);
    }

    #[Route('/listClientsNV', name: 'app_admin_listclientNV', methods: ['GET'])]
    public function listClientsNV(ClientRepository $clientRepository): Response
    {
        return $this->render('admin/listClientsNV.html.twig', [
            'clients' => $clientRepository->findBy(['isVerified'=>false]),
        ]);
    }

    #[Route('/rechercheClientsV', name: 'app_admin_rechercheClientsV')]
    public function rechercheClientsV(ClientRepository $clientRepository, Request  $request): Response
    {
        $data=$request->get('search');
        $client = $clientRepository->findBy(['nom'=>$data , 'isVerified' => true]);
        return $this->render('admin/listClients.html.twig',
            ["clients" => $client]);
    }
    #[Route('/rechercheClientsNV', name: 'app_admin_rechercheClientsNV')]
    public function rechercheClientsNV(ClientRepository $clientRepository, Request  $request): Response
    {
        $data=$request->get('search');
        $client = $clientRepository->findBy(['nom'=>$data , 'isVerified' => false]);
        return $this->render('admin/listClientsNV.html.twig',
            ["clients" => $client]);
    }

    #[Route('/deleteClient/{id}', name: 'app_client_delete')]
    public function deleteClient(ManagerRegistry $doctrine, $id) {
        $client = $doctrine->getRepository(Client::class)->find($id);
        $entityManager = $doctrine->getManager();
        $entityManager->remove($client);
        $entityManager->flush();
        return $this->redirectToRoute('app_admin_listclientV');
    }

    #[Route('/deleteCoach/{id}', name: 'app_coach_delete')]
    public function deleteCoach(ManagerRegistry $doctrine, $id) {
        $coach = $doctrine->getRepository(Coach::class)->find($id);
        $entityManager = $doctrine->getManager();
        $entityManager->remove($coach);
        $entityManager->flush();
        return $this->redirectToRoute('app_admin_listcoachV');
    }

    #[Route('/activerClient/{id}', name: 'app_client_activer')]
    public function activerClient(ManagerRegistry $doctrine, $id)
    {
        $client = $doctrine->getRepository(Client::class)->find($id);
        $client->setIsVerified(1);
        $entityManager = $doctrine->getManager();

        $entityManager->persist($client);
        $entityManager->flush();
        return $this->redirectToRoute('app_admin_listclientV');
    }
    #[Route('/desactiverClient/{id}', name: 'app_client_desactiver')]
    public function desactiverClient(ManagerRegistry $doctrine, $id)
    {
        $client = $doctrine->getRepository(Client::class)->find($id);
        $client->setIsVerified(0);
        $entityManager = $doctrine->getManager();

        $entityManager->persist($client);
        $entityManager->flush();
        return $this->redirectToRoute('app_admin_listclientNV');
    }

    #[Route('/activerCoach/{id}', name: 'app_Coach_activer')]
    public function activerCoach(ManagerRegistry $doctrine, $id)
    {
        $coach = $doctrine->getRepository(Coach::class)->find($id);
        $coach->setIsVerified(1);
        $entityManager = $doctrine->getManager();

        $entityManager->persist($coach);
        $entityManager->flush();
        return $this->redirectToRoute('app_admin_listcoachV');
    }
    #[Route('/desactiverCoach/{id}', name: 'app_Coach_desactiver')]
    public function desactiverCoach(ManagerRegistry $doctrine, $id)
    {
        $coach = $doctrine->getRepository(Coach::class)->find($id);
        $coach->setIsVerified(0);
        $entityManager = $doctrine->getManager();

        $entityManager->persist($coach);
        $entityManager->flush();
        return $this->redirectToRoute('app_admin_listcoachNV');
    }
    #[Route('/confirmerCoach/{id}', name: 'app_Coach_confirmer')]
    public function confirmerCoach(ManagerRegistry $doctrine, $id)
    {
        $coach = $doctrine->getRepository(Coach::class)->find($id);
        $coach->setEtatCompte(1);
        $entityManager = $doctrine->getManager();

        $entityManager->persist($coach);
        $entityManager->flush();
        return $this->redirectToRoute('app_admin_listcoachV');
    }

    #[Route('/{id}', name: 'app_admin_showCoach', methods: ['GET'])]
    public function showCoach(Coach $coach): Response
    {
        return $this->render('admin/infoCoach.html.twig', [
            'coach' => $coach,
        ]);
    }

}
