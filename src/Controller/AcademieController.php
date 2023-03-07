<?php

namespace App\Controller;

use App\Entity\Client;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Entity\Academie;
use App\templates\Salle;
use App\Form\AcademieType;
use App\Controller\SalleController;
use App\Repository\SalleRepository;
use App\Repository\AcademieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Dompdf\Dompdf;
use Dompdf\Options;
#[Route('/academie')]
class AcademieController extends AbstractController
{
    #[Route('/liste', name: 'academie_liste', methods: ['GET'])]
    public function indexjson(AcademieRepository $academieRepository, SerializerInterface $serializerInterface): Response

    {   
        $academie=$academieRepository ->findAll();
        $json=$serializerInterface->serialize($academie, 'json', ['groups'=>'academies']);
        $json1=json_encode($academie);
        dd ($json1);
        die();
        return $this->render('academie/index.html.twig', [
            'academies' => $academieRepository->findAll(),
        ]);
    } 
  

// SAVE USERS TO PDF ( USERS)

    /**
     * @Route("/listp", name="listp", methods={"GET"})
     */
    public function listp(EntityManagerInterface $entityManager , Request $request) : Response
    {

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        $academies = $entityManager
            ->getRepository(Academie::class)
            ->findAll();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('academie/pdf.html.twig', [
            'academies' => $academies
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);
        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');
        // Render the HTML as PDF
        $dompdf->render();
        // Output the generated PDF to Browser (force download)
        $dompdf->stream("MyList.pdf", [
            "Attachment" => false
        ]);

        return new Response('success');

    }


    /**
     * @Route("/trie_nom", name="trie_nom")
     */
    public function orderByNom(EntityManagerInterface $entityManager,UserRepository $repository,Request $request)
    {


        $allNom = $repository->orderByNom();


        return $this->render('academie/index.html.twig', [
            'academie' => $appointments,

        ]);
    }




     #[Route('/exportexcel', name:'exportexcel')]
    public function exportacademieToExcelAction(): Response
    {

        // Récupérer la liste des academies depuis votre source de données
        $academie = $this->getDoctrine()->getRepository(Academie::class)->findAll();

        // Créer un nouveau document Excel
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('academie');

        // Écrire les en-têtes de colonnes
        $sheet->setCellValue('A1', 'nom');
        $sheet->setCellValue('B1', 'adresse');
        $sheet->setCellValue('C1', 'numtel');
        $sheet->setCellValue('D1', 'sportpropose');

        // Écrire les données des academies
        $row = 2;
        foreach ($academie as $academie) {
            $sheet->setCellValue('A'.$row, $academie->getNom());
            $sheet->setCellValue('B'.$row, $academie->getAdresse());
            $sheet->setCellValue('C'.$row, $academie->getNumtel());
            $sheet->setCellValue('D'.$row, $academie->getSportpropose());
           
            $row++;
        }

        // Créer une réponse HTTP pour le document Excel
        $response = new Response();



        // Écrire le document Excel dans la réponse HTTP
        $writer = new Xlsx($spreadsheet);
        $writer->save('listeacademiess.xlsx');

        return $response;
    }

    #[Route('/add', name: 'adding', methods: ['GET','POST'])]
    public function add(Request $request,SerializerInterface $serializer, EntityManagerInterface $em): Response
    {
        $content=$request->getContent();
        $data=$serializer->deserialize($content,Academie::class,'json');
        $em->persist($data);
        $em->flush();
        
        return new Response('OK');
    }

     #[Route('/', name: 'app_academie_index', methods: ['GET'])]
    public function index(AcademieRepository $academieRepository, Request $request, PaginatorInterface $paginator): Response
    {   $academie = $academieRepository->findAll();
        $academie = $paginator->paginate(
            $academie,
            $request->query->getInt('page',1),
            4

        );
        return $this->render('academie/index.html.twig', [
            'academies'=>$academie
            
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
   
    #[Route('/academieindexfront', name: 'app_academie_indexfront', methods: ['GET'])]
    public function indexf(AcademieRepository $academieRepository): Response
    {
        $academie= $academieRepository->findAll();
        return $this->render('academie/front.html.twig', [
            'academie'=>$academie,

            
        ]);
    }
       #[Route('/orderByNom', name: 'orderByNom', methods: ['GET'])]
    public function index1(AcademieRepository $academieRepository): Response
    {
        $academieByNom=$academieRepository->orderByNom();
         /* dd($academie).die();  */
        return $this->render('academie/front.html.twig', [
            'academie' => $academieByNom,
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

   
    

 
    

}
