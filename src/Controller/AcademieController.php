<?php

namespace App\Controller;

use App\Entity\Academie;
use App\Form\AcademieType;
use App\Repository\AcademieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

#[Route('/academie')]
class AcademieController extends AbstractController
{
    #[Route('/', name: 'app_academie_index', methods: ['GET'])]
    public function index(AcademieRepository $academieRepository): Response
    {
        return $this->render('academie/index.html.twig', [
            'academies' => $academieRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_academie_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AcademieRepository $academieRepository): Response
    {
        $academie = new Academie();
        $form = $this->createForm(AcademieType::class, $academie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $academieRepository->save($academie, true);

            return $this->redirectToRoute('app_academie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('academie/new.html.twig', [
            'academie' => $academie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_academie_show', methods: ['GET'])]
    public function show(Academie $academie): Response
    {
        return $this->render('academie/show.html.twig', [
            'academie' => $academie,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_academie_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Academie $academie, AcademieRepository $academieRepository): Response
    {
        $form = $this->createForm(AcademieType::class, $academie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $academieRepository->save($academie, true);

            return $this->redirectToRoute('app_academie_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('academie/edit.html.twig', [
            'academie' => $academie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_academie_delete', methods: ['POST'])]
    public function delete(Request $request, Academie $academie, AcademieRepository $academieRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$academie->getId(), $request->request->get('_token'))) {
            $academieRepository->remove($academie, true);
        }

        return $this->redirectToRoute('app_academie_index', [], Response::HTTP_SEE_OTHER);
    }

    /*  #[Route('/frontaffichageacademie/{id}', name: 'app_academie_front')]
     /* #[ParamConverter('academie', class: 'App\Entity\Academie')] */
   /*   public function indexFront(AcademieRepository $academieRepository): Response
    {
      
        $academie=$academieRepository->findAll();
        return $this->render('academie/front.html.twig',['ac'=>$academie]);
    }  */
 
  /*   #[Route('/detailsfront', name: 'app_academie_detailsfront', methods: ['GET'])]
    public function showDetailsFront(AcademieRepository $academieRepository): Response
    {
        $academies = $academieRepository->findAll();
        return $this->render('academie/detailsfront.html.twig', [
            'academies' => $academies,
        ]);
    } */
    

}
