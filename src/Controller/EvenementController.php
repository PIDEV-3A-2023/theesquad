<?php

namespace App\Controller;

use App\Entity\Evenement;
use App\Form\EvenementType;
use App\Repository\EvenementRepository;
use App\Entity\Participation;
use App\Repository\ParticipationRepository;
use App\Entity\User;
use App\Repository\UserRespository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use App\Repository\ExerciceRepository;
use Doctrine\Common\Annotations\Annotation\Attributes;
use Dompdf\Dompdf;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Knp\Bundle\PaginatorBundle\Pagination\SlidingPaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

#[Route('/evenement')]
class EvenementController extends AbstractController
{


//    #[Route('/pdf', name: 'pdf', methods: ['GET'])]
//     public function index_pdf(EvenementRepository $evenementRepository, Request $request)
//     {
//         // dd("erij");
//         $dompdf=new dompdf();
//     //    $logo = file_get_contents("Front/images/about.png");
//         // $logobase64 = base64_encode($logo);

//         $evenements=$evenementRepository->findAll();
//         $html=$this->renderView('evenement/pdf_file.html.twig', [
//             'evenements' => $evenements,
//         ]);
//        $dompdf->loadHtml($html);
//        $dompdf->setPaper('A4','portrait');
//        $dompdf->render();
//        $dompdf->stream('list.pdf',["Attachement" => false]);
//        return $this->render('evenement/index.html.twig', [
//         'evenements' => $evenementRepository->findAll(),
//     ]);
//     }

    #[Route('/pdf', name: 'pdf', methods: ['GET'])]
    public function index_pdf(EvenementRepository $evenementRepository, Request $request){
        $dompdf = new Dompdf();
        ///ajouter notre logo personnalisé
        $logo = file_get_contents("Back/img/logo1.jpg");
        $logobase64 = base64_encode($logo);
        $evenements=$evenementRepository->findAll();
        ////Ajout de la liste des evenements et le logo personnalisé dans le pdf
        $html = $this->renderView('evenement/pdf_file.html.twig', [
            'evenements' => $evenements,
            'logobase64' => $logobase64,
        ]);

        //chargement du pdf
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        // Télécharger le fichier PDF
        $output = $dompdf->output();

        $dompdf->stream('list.pdf',["Attachement" => false]);
        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }







    #[Route('/calendrier', name: 'calendrier', methods: ['GET'])]
    public function calendrier(EvenementRepository $evenementRepository){

        $evs=$evenementRepository->findAll();
        $rdvs= [];
        srand(5);
        foreach ($evs as $ev){
            // generate random time
            $int= mt_rand(1262055681,1267094621);
            $string = date("H:00:00",$int);

            // get date value from form
            $date = $ev->getDate();
            $result = $date->format('Y-m-d');

            $resultatString = $result . " " . $string;
            $dateResultat = date_create_from_format('Y-m-d H:i:s', $resultatString);
            $ev->setDate($dateResultat);

            $newDate = date('Y-m-d H:i:s', strtotime($resultatString. ' + 2 hours'));
            $newDateResultat = date_create_from_format('Y-m-d H:i:s', $newDate);

            //dd($dateResultat,$newDate,$newDateResultat);
            ///tableau rdv va contenir l'id de l'envent, som nom et sa description ainsi que sa date
            $rdvs[]=[
                'id'=>$ev->getId(),
                'title'=>$ev->getNom(),
                'description'=> $ev->getDescription(),
                'start'=>$ev->getDate()->format('Y-m-d H:i:s'),
                'end'=>$newDateResultat->format('Y-m-d H:i:s'),
                'backgroundColor'=>'#FF7474',
                'borderColor'=>'#000000',
                'textColor'=>'#000000',
                'editable'=>true,
            ];

        }
        //dd($rdvs);
        $data=json_encode($rdvs);
        //dd($data);
        return $this->render('evenement/calendrier.html.twig',compact('data'));
    }


    #[Route('/buttons', name: 'app_buttons', methods: ['GET'])]
    public function buttons(EvenementRepository $evenementRepository): Response
    {
        return $this->render('buttons.html.twig');
    }

    #[Route('/', name: 'app_evenement_index', methods: ['GET'])]
    public function index(EvenementRepository $evenementRepository): Response
    {
        return $this->render('evenement/index.html.twig', [
            'evenements' => $evenementRepository->findAll(),
        ]);
    }


////////pagination
    // #[Route('/', name: 'app_evenement_index', methods: ['GET'])]
    // public function index(EvenementRepository $evenementRepository, Request $request, PaginatorInterface $paginator): Response
    // {
    //     $evenements = $evenementRepository->findAll();
    //     $evenements = $paginator->paginate($evenements, $request->query->getInt('page', 1), 2);
    //     return $this->render('evenement/index.html.twig', ['evenements' => $evenements]);

    // }




    #[Route('/frontAffichageEvenement', name: 'affichage_evenement_front')]
    public function indexFront(ParticipationRepository $a ,EvenementRepository $evenementRepository): Response
    {
        //return $this->render('evenement/Front.html.twig', []);
        $evenement=$evenementRepository->findAll();

        $Logged = false;
        //$this->getUser()->getId()
        if(!$Logged){
            //$this->getUser()->getId()     ////////hedhy nhotha f l'integration
            $check=$a->selectbyevent(3);///////////ena hata 3 houni id mtaa user statique(f blaset 3 twali $this)
            return $this->render('evenement/FrontEvenement.html.twig', [
                'ev' =>$evenement,'check' => $check,
            ]);
        }else{

            return $this->render('evenement/FrontEvenement.html.twig',['ev'=>$evenement]);

        }
    }



//  #[Route('/frontAffichageEvenement', name: 'affichage_evenement_front')]
    //  public function indexFront(EvenementRepository $evenementRepository, Request $request, PaginatorInterface $paginator): Response
    //  {
    //      $evenements = $evenementRepository->findAll();


    //      $evenements = $paginator->paginate($evenements, $request->query->getInt('page', 1), 2);

    //      return $this->render('evenement/FrontEvenement.html.twig', ['evenement' => $evenements]);

    //  }






    #[Route('/new', name: 'app_evenement_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EvenementRepository $evenementRepository, SluggerInterface $slugger): Response
    {
        $evenement = new Evenement();
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {

            // generate random time
            $int= mt_rand(1262055681,1262055681);
            $string = date("H:i:s",$int);

            // get date value from form
            $date = $form->get('date')->getData();
            $result = $date->format('Y-m-d');

            $resultatString = $result . " " . $string;
            $dateResultat = date_create_from_format('Y-m-d H:i:s', $resultatString);
            //$dateResultat->getTimestamp();

            //dd($form->get('date')->getData(),$resultatString,$dateResultat);
            $evenement->setDate($dateResultat);

            $imageFile = $form->get('image')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
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
                $evenement->setImage($newFilename);
            }
            //$evenement->setDate(new \DateTime());
            $evenementRepository->save($evenement, true);

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/new.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }


    #[Route('/rechercheEvenement', name: 'app_evenement_recherche')]
    public function rechercheEvenement(EvenementRepository $evenementRepository, Request  $request): Response
    {
        $data=$request->get('search');
        $evenement = $evenementRepository->searchQB($data);
        return $this->render('evenement/index.html.twig',
            ["evenements" => $evenement]);
    }
    #[Route('/afficheEvenementPardate',name:'app_evenement_date')]
    public function afficherStudentsParDate(EvenementRepository $repo)
    {
        $evenement=$repo->orderByDateQB();
        return $this->render('evenement/index.html.twig',["evenements" => $evenement]);
    }

    #[Route('/{id}', name: 'app_evenement_show', methods: ['GET'])]
    public function show(Evenement $evenement,ExerciceRepository $exerciceRepository): Response
    {
        //dd($evenement->getId());
        return $this->render('evenement/show.html.twig', [
            'evenement' => $evenement,
            'exercices' => $exerciceRepository->findBy([ 'evenement' => $evenement->getId()])
        ]);
    }

    #[Route('/{id}/edit', name: 'app_evenement_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        $form = $this->createForm(EvenementType::class, $evenement);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $evenementRepository->save($evenement, true);

            return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('evenement/edit.html.twig', [
            'evenement' => $evenement,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_evenement_delete', methods: ['POST'])]
    public function delete(Request $request, Evenement $evenement, EvenementRepository $evenementRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$evenement->getId(), $request->request->get('_token'))) {
            $evenementRepository->remove($evenement, true);
        }

        return $this->redirectToRoute('app_evenement_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/frontAffichageExercices/{id}', name: 'affichage_exercices_evenement_front')]
    public function AfficherExercices(EvenementRepository $evenementRepository,Evenement $evenement,ExerciceRepository $exerciceRepository): Response
    {
        //dd($exerciceRepository->findBy([ 'evenement' => $evenement->getId()]));
        // return $this->render('evenement/Front.html.twig', []);
        return $this->render('evenement/FrontEvenementExercices.html.twig',[
            'ev'=>$evenement,
            'exercices' => $exerciceRepository->findBy([ 'evenement' => $evenement->getId()])
        ]);
    }

    ////////fonction de la participation a un event
    #[Route('/participer/{id}', name: 'participer')]
    public function participer($id,Request $request,EvenementRepository $a): Response
    {

        //find event by his id
        $rep=$this->getDoctrine()->getRepository(Evenement::class);
        $event=$rep->find($id);
        //find user by his id
        $userRepository = $this->getDoctrine()->getRepository(User::class);
        //$this->getUser()->getId()     ///////////////f l'integration nhot hedhy

        $user = $userRepository->find(3); ////////////////ena tawa hata 3 comme id statique mtaa user

        $participation = new Participation();
        $participation->setEvenement($event);

        $participation->setUser($user);
        $em=$this->getDoctrine()->getManager();
        $em->persist($participation);
        $em->flush();

        return $this->redirectToRoute('affichage_evenement_front');




    }

///////enlever la participation
    #[Route('/imparticiper/{id}', name: 'imparticiper')]
    public function imparticiper($id,ParticipationRepository $b): Response
    {
        //find event by his id
        $rep=$this->getDoctrine()->getRepository(Evenement::class);
        $event=$rep->find($id);
        //$this->getUser()->getId()    //////////hedhy nektebha fel integration

        $b->delete($event,3);    //////////f blaset 3 twali $this
        return $this->redirectToRoute('affichage_evenement_front');
    }
}
