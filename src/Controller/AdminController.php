<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Coach;
use App\Repository\ClientRepository;
use App\Repository\CoachRepository;
use Doctrine\Persistence\ManagerRegistry;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
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
    public function listCoachsV(CoachRepository $coachRepository,PaginatorInterface $paginator, Request $request): Response
    {
        $coachs = $coachRepository->findBy(['isVerified'=>true]);

        $coachs = $paginator->paginate(
            $coachs, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3 /*limit per page*/
        );

        return $this->render('admin/listCoachs.html.twig', [
            'coaches' => $coachs,
        ]);
    }
    #[Route('/listCoachsNV', name: 'app_admin_listcoachNV', methods: ['GET'])]
    public function listCoachsNV(CoachRepository $coachRepository,PaginatorInterface $paginator, Request $request): Response
    {
        $coachs = $coachRepository->findBy(['isVerified'=>false]);

        $coachs = $paginator->paginate(
            $coachs, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3 /*limit per page*/
        );
        return $this->render('admin/listCoachsNV.html.twig', [
            'coaches' => $coachs,
        ]);
    }




    #[Route('/listClientsV', name: 'app_admin_listclientV', methods: ['GET'])]
    public function listClientsV(ClientRepository $clientRepository,PaginatorInterface $paginator , Request $request): Response
    {  $clients = $clientRepository->findBy(['isVerified'=>true]);

        $clients = $paginator->paginate(
            $clients, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3 /*limit per page*/
        );
        return $this->render('admin/listClients.html.twig', [
            'clients' => $clients,
        ]);
    }

    #[Route('/listClientsNV', name: 'app_admin_listclientNV', methods: ['GET'])]
    public function listClientsNV(ClientRepository $clientRepository,PaginatorInterface $paginator, Request $request): Response
    {  $clients = $clientRepository->findBy(['isVerified'=>false]);

        $clients = $paginator->paginate(
            $clients, /* query NOT result */
            $request->query->getInt('page', 1), /*page number*/
            3/*limit per page*/
        );
        return $this->render('admin/listClientsNV.html.twig', [
            'clients' =>$clients,
        ]);
    }



    #[Route('/deleteClient/{id}', name: 'app_client_delete')]
    public function deleteClient(ManagerRegistry $doctrine, $id) {
        $client = $doctrine->getRepository(Client::class)->find($id);
        $entityManager = $doctrine->getManager();
        $entityManager->remove($client);
        $entityManager->flush();
        toastr()
            ->escapeHtml(false)
            ->addSuccess('Ce client a été supprimer avec succès..');
        return $this->redirectToRoute('app_admin_listclientV');
    }

    #[Route('/deleteCoach/{id}', name: 'app_coach_delete')]
    public function deleteCoach(ManagerRegistry $doctrine, $id) {
        $coach = $doctrine->getRepository(Coach::class)->find($id);
        $entityManager = $doctrine->getManager();
        $entityManager->remove($coach);
        $entityManager->flush();
        toastr()
            ->escapeHtml(false)
            ->addSuccess('Ce coach  a été supprimer avec succès..');
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
        toastr()
            ->escapeHtml(false)
            ->addSuccess('Ce compte  est activé avec succès.');
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
        toastr()
            ->escapeHtml(false)
            ->addSuccess('Ce compte  est désactivé.');
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
        toastr()
            ->escapeHtml(false)
            ->addSuccess('Ce compte  est activé avec succès.');
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
        toastr()
            ->escapeHtml(false)
            ->addSuccess('Ce compte  est désactivé.');
        return $this->redirectToRoute('app_admin_listcoachNV');
    }
    #[Route('/confirmerCoach/{id}', name: 'app_Coach_confirmer')]
    public function confirmerCoach(ManagerRegistry $doctrine, $id, MailerInterface $mailer)
    {
        $coach = $doctrine->getRepository(Coach::class)->find($id);
        $coach->setEtatCompte(1);
        $entityManager = $doctrine->getManager();

        $entityManager->persist($coach);
        $entityManager->flush();

        toastr()
            ->escapeHtml(false)
            ->addSuccess('Ce compte  est confirmé avec succès.');

        $email = (new TemplatedEmail())
            ->from(new Address('nawres.mrabet@esprit.tn', 'No Reply'))
            ->to($coach->getEmail())
            ->subject('Confirmation de votre compte')
            ->htmlTemplate('admin/EmailConfCoach.html.twig')
        ;

        $mailer->send($email);

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
