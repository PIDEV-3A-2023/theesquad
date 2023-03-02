<?php

namespace App\Controller;

use App\Entity\Coach;
use App\Form\ChangePasswordFormType;
use App\Form\CoachType;
use App\Repository\CoachRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/coach')]
class CoachController extends AbstractController
{
    #[Route('/', name: 'app_coach_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('coach/dashboardCoach.html.twig', [
            'controller_name' => 'CoachController',
        ]);
    }

    #[Route('/{id}', name: 'app_coach_show', methods: ['GET'])]
    public function show(Coach $coach): Response
    {
        return $this->render('coach/show.html.twig', [
            'coach' => $coach,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_coach_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Coach $coach, CoachRepository $coachRepository, ManagerRegistry $doctrine): Response
    {
        $form = $this->createForm(CoachType::class, $coach);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $coachRepository->save($coach, true);

            $file = $form->get('image')->getData();
            if ($file) {
                $fileName = uniqid().'.'.$file->guessExtension();
                $file->move(
                    $this->getParameter('Client_directory'),
                    $fileName
                );
                $coach->setImage($fileName);
            }

            $filediplome = $form->get('diplome')->getData();
            if ($filediplome) {
                $fileNameDiplome = uniqid().'.'.$filediplome->guessExtension();
                $filediplome->move(
                    $this->getParameter('diplome_directory'),
                    $fileNameDiplome
                );
                $coach->setDiplome($fileNameDiplome);
            }

            $doctrine->getManager()->flush();
            toastr()
                ->escapeHtml(false)
                ->addSuccess('votre profil a été modifié avec succès.');

            return $this->redirectToRoute('app_coach_dashboard', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('coach/edit.html.twig', [
            'coach' => $coach,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/editpassword', name: 'app_coach_editpassword', methods: ['GET', 'POST'])]
    public function editPassword(Request $request, UserPasswordHasherInterface $userPasswordHasher, Coach $coach,EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $coach->setPassword(
                $userPasswordHasher->hashPassword(
                    $coach,
                    $form->get('plainPassword')->getData()
                )
            );

            $coach->setRoles(['ROLE_COACH']);

            $entityManager->persist($coach);
            $entityManager->flush();

            return $this->redirectToRoute('app_coach_dashboard', ['id' => $coach->getId()]);

        }

        return $this->render('coach/editpassword.html.twig', [
            'form' => $form->createView(),
        ]);
    }

}
