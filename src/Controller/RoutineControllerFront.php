<?php



namespace App\Controller;
use App\Entity\Objectif;
use App\Repository\ObjectifRepository;
use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;
use phpDocumentor\Reflection\Types\Array_;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\RequestStack;
use ChartJs\Chart\Chart;





use App\Entity\Routine;
use App\Form\Routine1Type;
use App\Form\RoutineFront;
use App\Repository\AlimentRepository;
use App\Repository\RoutineRepository;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;




/**
 * @method getRequest()
 */
#[Route('/routineFr')]

class RoutineControllerFront extends AbstractController


{



    #[Route('/newroutine', name: 'app_routine_newRoutine', methods: ['GET', 'POST'])]
    public function newRoutine(MailerInterface $mailer,Request $request, RoutineRepository $routineRepository, AlimentRepository $alimentRepository,ObjectifRepository $objectifRepository): Response
    {
        $routine = new Routine();
        $form = $this->createForm(RoutineFront::class, $routine);
        $form->handleRequest($request);
        $caloriesEst = 0;
        $caloriesCons=0;
        $diff=0;


        if ($form->isSubmitted() && $form->isValid()) {

            $m = $form->get('Dejeuner')->getData();
            $md = $form->get('Midi')->getData();
            $dn = $form->get('Dinner')->getData();
            $ob = $form->get('objectif')->getData();
            $o=$ob->getId();



            $a=$m->getNom();
            $b=$md->getNom();
            $c=$dn  ->getNom();
            $CalDej = $alimentRepository->findbyname($a);


            $CalMidi = $alimentRepository->findbyname($b);

            $CalDn = $alimentRepository->findbyname($c);



            $caloriesCons=$CalMidi+$CalDej+$CalDn;


            $caloriesEst=$objectifRepository->findById($o);






            $typo=$objectifRepository->findType($o);



            $diff=$caloriesEst-$caloriesCons;

            $routine->setCalCons($CalDej+$CalMidi+$CalDn);

            $email = (new Email())
                ->from('oubied.357@gmail.com')
                ->to(new Address('oubied.357@gmail.com'))

                ->subject('Time for Symfony Mailer!')
                ->text('Sending emails is fun again!')
                ->html('<p>      </p>');

            $mailer->send($email);
            $routineRepository->save($routine, true);
            return $this->redirectToRoute('Resultat_show', ['diff' => $diff,'typo'=>$typo,'calestim'=>$caloriesEst,'calconsommer'=>$caloriesCons,
                'oid'=>$o ] );
        }

        return $this->renderForm('routine/FrontRoutine.html.twig', [
            'routine' => $routine,
            'form' => $form,
        ]);
    }



    #[Route('/resultat', name: 'Resultat_show', methods: ['GET'])]
    public function show(Request $request,RoutineRepository $routineRepository): Response

    {
        $myAttribute = $request->get('typo');
        $myAttribute1 = $request->get('diff');
        $o = $request->get('oid');
        $dates=$routineRepository->finddates($o);
        $tableau = $request->get('dates');
        $nb = $request->get('nb');
        $calestim = $request->get('calestim');
        $calconsommer = $request->get('calconsommer');

        return $this->render('routine/Resultat.html.twig',['myAttribute'=>$myAttribute,'myAttribute1'=>$myAttribute1,'calestim'=>$calestim,'calconsommer'=>$calconsommer,
                'dates'=>$dates,'nb'=>count($dates)]


        );
    }












}