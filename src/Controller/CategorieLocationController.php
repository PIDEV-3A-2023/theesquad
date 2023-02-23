<?php

namespace App\Controller;

use App\Entity\CategorieLocation;
use App\Form\CategorieLocationType;
use App\Repository\CategorieLocationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categorie/location')]
class CategorieLocationController extends AbstractController
{
    #[Route('/', name: 'app_categorie_location_index', methods: ['GET'])]
    public function index(CategorieLocationRepository $categorieLocationRepository): Response
    {
        return $this->render('categorie_location/index.html.twig', [
            'categorie_locations' => $categorieLocationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_categorie_location_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CategorieLocationRepository $categorieLocationRepository): Response
    {
        $categorieLocation = new CategorieLocation();
        $form = $this->createForm(CategorieLocationType::class, $categorieLocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorieLocationRepository->save($categorieLocation, true);

            return $this->redirectToRoute('app_categorie_location_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('categorie_location/new.html.twig', [
            'categorie_location' => $categorieLocation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_location_show', methods: ['GET'])]
    public function show(CategorieLocation $categorieLocation): Response
    {
        return $this->render('categorie_location/show.html.twig', [
            'categorie_location' => $categorieLocation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_categorie_location_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CategorieLocation $categorieLocation, CategorieLocationRepository $categorieLocationRepository): Response
    {
        $form = $this->createForm(CategorieLocationType::class, $categorieLocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $categorieLocationRepository->save($categorieLocation, true);

            return $this->redirectToRoute('app_categorie_location_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('categorie_location/edit.html.twig', [
            'categorie_location' => $categorieLocation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_location_delete', methods: ['POST'])]
    public function delete(Request $request, CategorieLocation $categorieLocation, CategorieLocationRepository $categorieLocationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorieLocation->getId(), $request->request->get('_token'))) {
            $categorieLocationRepository->remove($categorieLocation, true);
        }

        return $this->redirectToRoute('app_categorie_location_index', [], Response::HTTP_SEE_OTHER);
    }
}
