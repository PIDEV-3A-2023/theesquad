<?php

namespace App\Controller;

use App\Entity\Exercice;
use App\Form\ExerciceType;
use App\Repository\ExerciceRepository;
use Dompdf\Dompdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\String\Slugger\SluggerInterface;


#[Route('/exercice')]
class ExerciceController extends AbstractController
{
    #[Route('/buttons', name: 'app_buttons', methods: ['GET'])]
    public function buttons(): Response
    {
        return $this->render('buttons.html.twig');
    }

    #[Route('/', name: 'app_exercice_index', methods: ['GET'])]
    public function index(ExerciceRepository $exerciceRepository): Response
    {
        return $this->render('exercice/index.html.twig', [
            'exercices' => $exerciceRepository->findAll(),
        ]);
    }
    #[Route("/createExercice/{nom}/{description}/{duree}", name: "addExerciceJSON")]
    public function addExerciceJSON(Request $req,   NormalizerInterface $Normalizer)
    {

        $em = $this->getDoctrine()->getManager();
        $exercice = new Exercice();
        $exercice->setNom($req->get('nom'));
        $exercice->setDescription($req->get('description'));
        $exercice->setDuree($req->get('duree'));
        $em->persist($exercice);
        $em->flush();

        $jsonContent = $Normalizer->normalize($exercice, 'json', ['Groups' => 'exercices']);
        return new JsonResponse($jsonContent, JsonResponse::HTTP_CREATED);
        // $jsonContent = $Normalizer->normalize($exercice, 'json', ['Groups' => 'exercices']);
        // return new Response(json_encode($jsonContent));
    }

    #[Route("/AllExercices", name: "list")]
    //* Dans cette fonction, nous utilisons les services NormlizeInterface et ExerciceRepository, 
    //* avec la méthode d'injection de dépendances.
    public function getStudents(ExerciceRepository $repo, SerializerInterface $serializer)
    {
        $exercices = $repo->findAll();

        //* Nous utilisons la fonction normalize qui transforme le tableau d'objets 
        //* students en  tableau associatif simple.
        // $studentsNormalises = $normalizer->normalize($students, 'json', ['groups' => "students"]);

        // //* Nous utilisons la fonction json_encode pour transformer un tableau associatif en format JSON
        // $json = json_encode($studentsNormalises);

        $json = $serializer->serialize($exercices, 'json', ['groups' => "exercices"]);

        //* Nous renvoyons une réponse Http qui prend en paramètre un tableau en format JSON
        return new Response($json);
    }

   

/////////////////////////fonction generation pdf json

#[Route('/pdfExercice', name: 'pdf_Exercice', methods: ['GET'])]
public function index_pdf(ExerciceRepository $exerciceRepository, Request $request)
{
    $dompdf = new Dompdf();

    $exercices = $exerciceRepository->findAll();

    $html = $this->renderView('exercice/pdf_file.html.twig', [
        'exercices' => $exercices,
    ]);

    $dompdf->loadHtml($html);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    // Obtenir le contenu du PDF en Base64
    $pdfContent = base64_encode($dompdf->output());

    // Créer un tableau de données
    $data = [
        'pdfContent' => $pdfContent,
    ];

    // Renvoyer une réponse JSON contenant les données du PDF
    $response = new JsonResponse($data);

    return $response;
}




    #[Route('/rechercheExercice', name: 'app_exercice_recherche')]
    public function rechercheExercice(ExerciceRepository $exerciceRepository, Request  $request): Response
    {
        $data=$request->get('search');
        $exercice = $exerciceRepository->searchQB($data);
        return $this->render('exercice/index.html.twig',
            ["exercices" => $exercice]);
    }

    #[Route('/afficheExerciceTri',name:'app_exercice_tri')]
    public function afficherStudentsParDate(ExerciceRepository $repo)
    {
        $exercice=$repo->orderByNomQB();
        return $this->render('exercice/index.html.twig',["exercices" => $exercice]);
    }


    #[Route('/new', name: 'app_exercice_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ExerciceRepository $exerciceRepository, SluggerInterface $slugger): Response
    {
        $exercice = new Exercice();
        $form = $this->createForm(ExerciceType::class, $exercice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
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
                $exercice->setImage($newFilename);
            }

            $exerciceRepository->save($exercice, true);

            return $this->redirectToRoute('app_exercice_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('exercice/new.html.twig', [
            'exercice' => $exercice,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_exercice_show', methods: ['GET'])]
    public function show(Exercice $exercice): Response
    {
        return $this->render('exercice/show.html.twig', [
            'exercice' => $exercice,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_exercice_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Exercice $exercice, ExerciceRepository $exerciceRepository): Response
    {
        $form = $this->createForm(ExerciceType::class, $exercice);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $exerciceRepository->save($exercice, true);

            return $this->redirectToRoute('app_exercice_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('exercice/edit.html.twig', [
            'exercice' => $exercice,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_exercice_delete', methods: ['POST'])]
    public function delete(Request $request, Exercice $exercice, ExerciceRepository $exerciceRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$exercice->getId(), $request->request->get('_token'))) {
            $exerciceRepository->remove($exercice, true);
        }

        return $this->redirectToRoute('app_exercice_index', [], Response::HTTP_SEE_OTHER);
    }
   
}
