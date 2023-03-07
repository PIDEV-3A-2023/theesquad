<?php

namespace App\Controller;

use App\Entity\Aliment;
use App\Entity\Routine;
use App\Form\Aliment1Type;
use App\Repository\AlimentRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/aliment')]
class AlimentController extends AbstractController
{




    #[Route('/DetailAliment', name: 'affichage_aliment_front')]
    public function indexFront(AlimentRepository $RepositoryRepo): Response
    {
        // return $this->render('evenement/Front.html.twig', []);
        $aliment=$RepositoryRepo->findAll();
        return $this->render('aliment/Front.html.twig',['a'=>$aliment]);
    }




    #[Route('/addA', name: 'addingG', methods: ['POST'])]
    public function add(Request $request,SerializerInterface $serializer, EntityManagerInterface $em): Response
    {
        $content=$request->getContent();
        $data=$serializer->deserialize($content,Aliment::class,'json');
        $em->persist($data);
        $em->flush();
        return new Response('OKK');
    }


    #[Route('/', name: 'app_aliment_index', methods: ['GET'])]
    public function index(AlimentRepository $alimentRepository,SerializerInterface $serializerInterface): Response
    {



        $aliments=$alimentRepository->findAll();

        $json=$serializerInterface->serialize($aliments,'json',['groups'=>'aliments']);
        $json1 = json_encode($aliments);



        return $this->render('aliment/index.html.twig', [
            'aliments' => $alimentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_aliment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AlimentRepository $alimentRepository): Response
    {
        $aliment = new Aliment();
        $form = $this->createForm(Aliment1Type::class, $aliment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $alimentRepository->save($aliment, true);

            return $this->redirectToRoute('app_aliment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('aliment/new.html.twig', [
            'aliment' => $aliment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_aliment_show', methods: ['GET'])]
    public function show(Aliment $aliment): Response
    {
        return $this->render('aliment/show.html.twig', [
            'aliment' => $aliment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_aliment_edit', methods: ['GET', 'POST'] )]
    public function edit(Request $request, Aliment $aliment, AlimentRepository $alimentRepository): Response
    {
        $form = $this->createForm(Aliment1Type::class, $aliment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $alimentRepository->save($aliment, true);

            return $this->redirectToRoute('app_aliment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('aliment/edit.html.twig', [
            'aliment' => $aliment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_aliment_delete', methods: ['POST'])]
    public function delete(Request $request, Aliment $aliment, AlimentRepository $alimentRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$aliment->getId(), $request->request->get('_token'))) {
            $alimentRepository->remove($aliment, true);
        }

        return $this->redirectToRoute('app_aliment_index', [], Response::HTTP_SEE_OTHER);
    }






}
