<?php

namespace App\Controller;

use App\Entity\Salle;
use App\Form\SalleType;
use App\Entity\Academie;
use Doctrine\ORM\EntityManager;
use App\Controller\CoursController;
use App\Repository\CoursRepository;
use App\Repository\SalleRepository;
use App\Repository\AcademieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


#[Route('/salle')]
class SalleController extends AbstractController
{
    #[Route('/', name: 'app_salle_index', methods: ['GET'])]
    public function index(SalleRepository $salleRepository, Request $request, PaginatorInterface $paginator): Response

    {   
        $salle = $salleRepository->findAll();
        $salle = $paginator->paginate(
            $salle,
            $request->query->getInt('page',1),
            4

        );
        return $this->render('salle/index.html.twig', [
            'salles'=>$salle
            
        ]);}
    
    #[Route('/add', name: 'adding', methods: ['GET','POST'])]
    public function add(Request $request,SerializerInterface $serializer, EntityManagerInterface $em): Response
    {
        $content=$request->getContent();
        $data=$serializer->deserialize($content,Salle::class,'json');
        $em->persist($data);
        $em->flush();
        
        return new Response('OK');
    }
 
    #[Route('/new', name: 'app_salle_new', methods: ['GET', 'POST'])]
    public function new(Request $request, SalleRepository $salleRepository, SerializerInterface $serializer): Response
    {
        $salle = new Salle();
        $form = $this->createForm(SalleType::class, $salle);
        $form->handleRequest($request);
        

        if ($form->isSubmitted() && $form->isValid()) {
            $salleRepository->save($salle, true);

            return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('salle/new.html.twig', [
            'salle' => $salle,
            'form' => $form,
        ]);
    }

   
 /*    #[Route('/orderByNom', name: 'orderByNom', methods: ['GET'])]
    public function index1(SalleRepository $salleRepository): Response
    {
        $salleByNom=$salleRepository->orderByNom();
        /* dd($salle).die(); */
   /*      return $this->render('salle/frontsalle.html.twig', [
            'salle' => $salleByNom,
        ]);
    }  */

    #[Route('/{id}', name: 'app_salle_show', methods: ['GET'])]
    public function show(Salle $salle): Response
    {
        return $this->render('salle/show.html.twig', [
            'salle' => $salle,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_salle_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Salle $salle, SalleRepository $salleRepository): Response
    {
        $form = $this->createForm(SalleType::class, $salle);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $salleRepository->save($salle, true);

            return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('salle/edit.html.twig', [
            'salle' => $salle,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_salle_delete', methods: ['POST'])]
    public function delete(Request $request, Salle $salle, SalleRepository $salleRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$salle->getId(), $request->request->get('_token'))) {
            $salleRepository->remove($salle, true);
        }

        return $this->redirectToRoute('app_salle_index', [], Response::HTTP_SEE_OTHER);
    }
    

    #[Route('/frontaffichageacademie/{id}', name: 'affichage_academie_salle_front')]
    public function Affichersalles(AcademieRepository $academieRepository,Academie $academie,SalleRepository $salleRepository): Response
    {
      
        return $this->render('salle/frontsalle.html.twig',[
            'academie'=>$academie,
            'salle' => $salleRepository->findBy([ 'academie' => $academie->getId()])
        ]);
    } 

      #[Route('/frontaffichagecours/{id}', name: 'affichage_salles_cours_front')]
    public function Affichercours(SalleRepository $salleRepository,Salle $salle,CoursRepository $coursRepository): Response
    {
      
        return $this->render('salle/detailscours.html.twig',[
            'salle'=>$salle,
            'cours' => $coursRepository->findBy([ 'salle' => $salle->getId()])
        ]);
    }  
  
    

   

}
