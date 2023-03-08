<?php

namespace App\Controller;

use App\Entity\Routine;
use App\Form\Routine1Type;
use App\Repository\AlimentRepository;
use App\Repository\RoutineRepository;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Config\Doctrine\Orm\EntityManagerConfig;

#[Route('/routine')]
class RoutineController extends AbstractController



{



    #[Route('/', name: 'app_routine_index', methods: ['GET'] )]
    public function index(RoutineRepository $routineRepository,SerializerInterface $serializerInterface): Response
    {

        $aliments=$routineRepository->findAll();
        $json=$serializerInterface->serialize($aliments,'json',['groups'=>'routine']);


        return $this->render('routine/index.html.twig', [
            'routines' => $routineRepository->findAll(),

        ]);
    }



    #[Route('/new', name: 'app_routine_new', methods: ['GET', 'POST'])]
    public function new(Request $request, RoutineRepository $routineRepository,SerializerInterface $serializer,EntityManagerInterface $em): Response
    {
        $routine = new Routine();
        $form = $this->createForm(Routine1Type::class, $routine);
        $form->handleRequest($request);




        if ($form->isSubmitted() && $form->isValid()) {



            $routineRepository->save($routine, true);

            return $this->redirectToRoute('app_routine_index', [], Response::HTTP_SEE_OTHER);
        }



        return $this->renderForm('routine/new.html.twig', [
            'routine' => $routine,
            'form' => $form,
        ]);

    }

    #[Route('/{id}', name: 'app_routine_show', methods: ['GET'])]
    public function show(Routine $routine): Response
    {
        return $this->render('routine/show.html.twig', [
            'routine' => $routine,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_routine_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Routine $routine, RoutineRepository $routineRepository): Response
    {
        $form = $this->createForm(Routine1Type::class, $routine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $routineRepository->save($routine, true);

            return $this->redirectToRoute('app_routine_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('routine/edit.html.twig', [
            'routine' => $routine,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_routine_delete', methods: ['POST'])]
    public function delete(Request $request, Routine $routine, RoutineRepository $routineRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$routine->getId(), $request->request->get('_token'))) {
            $routineRepository->remove($routine, true);
        }

        return $this->redirectToRoute('app_routine_index', [], Response::HTTP_SEE_OTHER);
    }




    #[Route('/add', name: 'adiding', methods: ['POST'])]
    public function add(Request $request,SerializerInterface $serializer, EntityManagerInterface $em): Response
    {
        $content=$request->getContent();
        $data=$serializer->deserialize($content,Routine::class,'json');
        $em->persist($data);
        $em->flush();
        return new Response('OKK');

    }















}
