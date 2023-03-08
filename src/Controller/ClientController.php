<?php

namespace App\Controller;

use App\Entity\Client;
use App\Form\ChangePasswordFormType;
use App\Form\ClientType;
use App\Repository\ClientRepository;
use App\Repository\CoachRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

#[Route('/client')]
class ClientController extends AbstractController
{

    #[Route('/', name: 'app_client_dashboard1')]
    public function dashboard(): Response
    {
        return $this->render('baseFront.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    #[Route('/dashboard', name: 'app_client_dashboard')]
    public function dashboard1(): Response
    {
        return $this->render('client/dashboardClient.html.twig', [
            'controller_name' => 'ClientController',
        ]);
    }
    #[Route('/listCoachs', name: 'app_client_listCoach', methods: ['GET'])]
    public function listCoachs(CoachRepository $coachRepository): Response
    {
        return $this->render('client/listCoachsC.html.twig', [
            'coaches' => $coachRepository->findBy(['etatCompte'=>true]),
        ]);
    }


    #[Route('/{id}', name: 'app_client_show', methods: ['GET'])]
    public function show(Client $client): Response
    {
        return $this->render('client/show.html.twig', [
            'client' => $client,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_client_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Client $client, ClientRepository $clientRepository, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(ClientType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $clientRepository->save($client, true);
            // récupérer le fichier téléchargé
            $file = $form->get('image')->getData();

            if ($file) {
                // renommer le fichier pour éviter les conflits de noms
                $fileName = uniqid().'.'.$file->guessExtension();

                // déplacer le fichier vers le répertoire de stockage
                $file->move(
                    $this->getParameter('Client_directory'),
                    $fileName
                );

                // mettre à jour le chemin d'accès de l'image dans l'entité utilisateur
                $client->setImage($fileName);
            }

            $doctrine->getManager()->flush();
            toastr()
                ->escapeHtml(false)
                ->addSuccess('votre profil a été modifié avec succès.');

            return $this->redirectToRoute('app_client_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('client/edit.html.twig', [
            'client' => $client,
            'form' => $form,
        ]);
    }

   #[Route('/{id}/editpassword', name: 'app_client_editpassword', methods: ['GET', 'POST'])]
   public function editPassword(Request $request, UserPasswordHasherInterface $userPasswordHasher, Client $client,EntityManagerInterface $entityManager): Response
   {
       $form = $this->createForm(ChangePasswordFormType::class);
       $form->handleRequest($request);

       if ($form->isSubmitted() && $form->isValid()) {
           $data = $form->getData();

           $client->setPassword(
               $userPasswordHasher->hashPassword(
                   $client,
                   $form->get('plainPassword')->getData()
               )
           );

           $client->setRoles(['ROLE_CLIENT']);

           $entityManager->persist($client);
           $entityManager->flush();

               return $this->redirectToRoute('app_client_dashboard', ['id' => $client->getId()]);

       }

       return $this->render('client/editpassword.html.twig', [
           'form' => $form->createView(),
       ]);
   }
}
