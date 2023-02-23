<?php

namespace App\Controller;

use App\Entity\Espace;
use App\Form\EspaceType;
use App\Repository\EspaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Entity\CategorieLocation;

#[Route('/espace')]
class EspaceController extends AbstractController
{
    #[Route('/', name: 'app_espace_index', methods: ['GET'])]
    public function index(EspaceRepository $espaceRepository): Response
    {
        return $this->render('espace/index.html.twig', [
            'espaces' => $espaceRepository->findAll(),
        ]);
    }
    #[Route('/frontaffichageespace',name: 'affichage_espace_front')]
    public function indexFront(EspaceRepository $espaceRepository): Response
    {
        $espace=$espaceRepository->findAll();
        return $this->render('espace/Frontespace.html.twig',['esp'=>$espace]);
    }

    #[Route('/new', name: 'app_espace_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EspaceRepository $espaceRepository, SluggerInterface $slugger): Response
    {
        $espace = new Espace();
        $form = $this->createForm(EspaceType::class, $espace);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();

            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();
                // Move the file to the directory where brochures are stored
                try {
                    $imageFile->move(
                        $this->getParameter('image_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                    dd("waaaaa " + $e);
                }
                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $espace->setImage($newFilename);
            }
            $espaceRepository->save($espace, true);

            return $this->redirectToRoute('app_espace_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('espace/new.html.twig', [
            'espace' => $espace,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_espace_show', methods: ['GET'])]
    public function show(Espace $espace): Response
    {
        return $this->render('espace/show.html.twig', [
            'espace' => $espace,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_espace_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Espace $espace, EspaceRepository $espaceRepository): Response
    {
        $form = $this->createForm(EspaceType::class, $espace);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $espaceRepository->save($espace, true);

            return $this->redirectToRoute('app_espace_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('espace/edit.html.twig', [
            'espace' => $espace,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_espace_delete', methods: ['POST'])]
    public function delete(Request $request, Espace $espace, EspaceRepository $espaceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$espace->getId(), $request->request->get('_token'))) {
            $espaceRepository->remove($espace, true);
        }

        return $this->redirectToRoute('app_espace_index', [], Response::HTTP_SEE_OTHER);
    }
  

}
