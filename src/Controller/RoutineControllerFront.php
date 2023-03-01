<?php



namespace App\Controller;
use Symfony\Component\HttpFoundation\RequestStack;


use App\Entity\Routine;
use App\Form\Routine1Type;
use App\Form\RoutineFront;
use App\Repository\AlimentRepository;
use App\Repository\RoutineRepository;

use Cassandra\Date;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
#[Route('/routineFr')]
class RoutineControllerFront extends AbstractController


{


    #[Route('/newroutine', name: 'app_routine_newRoutine', methods: ['GET', 'POST'])]
    public function newRoutine(Request $request, RoutineRepository $routineRepository, AlimentRepository $alimentRepository): Response
    {
        $routine = new Routine();
        $form = $this->createForm(RoutineFront::class, $routine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $m = $form->get('Dejeuner')->getData();
            $md = $form->get('Midi')->getData();
            $dn = $form->get('Dinner')->getData();
             $a=$m->getNom();
            $b=$md->getNom();
            $c=$dn->getNom();
            $CalDej = $alimentRepository->findbyname($a);
            $CalMidi = $alimentRepository->findbyname($b);
            $CalDn = $alimentRepository->findbyname($c);
            $routine->setCalCons($CalDej+$CalMidi+$CalDn);
            $routineRepository->save($routine, true);

        }

        return $this->renderForm('routine/FrontRoutine.html.twig', [
            'routine' => $routine,
            'form' => $form,
        ]);
    }


}