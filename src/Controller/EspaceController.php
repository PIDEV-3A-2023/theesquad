<?php

namespace App\Controller;

use App\Entity\Espace;
use App\Form\EspaceType;
use App\Entity\CategorieLocation;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use App\Repository\EspaceRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Liip\ImagineBundle\Imagine\Filter\FilterManager;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\DependencyInjection\Loader\Configurator\mailer;


#[Route('/espace')]
class EspaceController extends AbstractController
{
    #[Route('/', name: 'app_espace_index', methods: ['GET'])]
    public function index(EspaceRepository $espaceRepository,Request $request,PaginatorInterface $paginator): Response
    {
        $espaces = $espaceRepository->findAll();
        $espaces   = $paginator->paginate(
            $espaces  , /* query NOT result */
            $request->query->getInt('page', 1),
            2
        );
        return $this->render('espace/index.html.twig', [
           'espaces'=>$espaces
        ]);
    }

    /* ************** Partie Manipulation JSON ************** */

    //la méthode getEspaces permet d'afficher la liste des espaces en format array à travers normalize
    //permet de transformer le tableau des espaces en format JSON à travers encode
     #[Route("/allEspacesJSON",name:"list")]
    public function getEspaces(EspaceRepository $espaceRepository,NormalizerInterface $normalizer){
        $espace = $espaceRepository->findAll();
        //la fonction normalize transforme le tableau d'objets espace en tableau associatif
        $espaceNormalise = $normalizer->normalize($espace,'json',['groups'=>"espaces"]);
        //la fonction json_encode permet de transformer le tableau associatif en Format JSON
        $json = json_encode($espaceNormalise);
        //la renvoie d'une réponse HTTP qui prend en parametre le tableau en format JSON
        return new Response($json);

    } 
    //Récupération d'un espace selon l'id 
    #[Route("/EspaceJson/{id}", name:"espace")]
    public function EspaceId($id, NormalizerInterface $normalizer, EspaceRepository $espaceRepository){
        $espace = $espaceRepository->find($id);
        $espaceNormalise = $normalizer->normalize($espace,'json',['groups'=> "espaces"]);
        return new Response(json_encode($espaceNormalise));

    }
    //Ajout d'un espace
    #[Route("/addEspaceJSON/new", name: "addEspaceJSON")]
    public function addEspaceJSON(Request $req, NormalizerInterface $normalizer) {
        $em = $this->getDoctrine()->getManager();
        $espace = new Espace();
        $espace->setNom($req->get('nom'));
        $espace->setCaracteristique($req->get('caracteristique'));
        $espace->setAdresse($req->get('adresse'));
        $espace->setDispo($req->get('dispo'));
        $espace->setPrixlocation($req->get('prixlocation'));
        $em->flush();
        $jsonContent = $normalizer->normalize($espace,'json',['groups'=>'espaces']);
        return new Response(json_encode($jsonContent));

    }
    //modifier un espace
    #[Route("/updateEspaceJSON/{id}",name:"updateEspaceJSON")]
    public function updateEspaceJSON(Request $req, $id, NormalizerInterface $normalizer) {
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository(Espace::class)->find($id);
        $espace->setNom($req->get('nom'));

        $em->flush();
        $jsonContent = $normalizer->normalize($espace,'json',['groups'=>'espaces']);
        return new Response("espace est modifié avec succés" . json_encode($jsonContent));
    }

    //supprimer espace
    #[Route("/deleteEspaceJSON/{id}",name:"deleteEspaceJSON")]
    public function deleteEspaceJSON(Request $req, $id, NormalizerInterface $normalizer) {
        $em = $this->getDoctrine()->getManager();
        $espace = $em->getRepository(Espace::class)->find($id);
      
        $em->remove($espace);
        $em->flush();
        $jsonContent = $normalizer->normalize($espace,'json',['groups'=>'espaces']);
        return new Response("espace est supprimé avec succés" . json_encode($jsonContent));
    }

    //fonction recherche d'espace
    #[Route("/search-espace",name:"app_search_espace")]
    public function searchEspace(Request $request,EspaceRepository $espaceRepository)
{
    $searchTerm = $request->query->get('q');

    $entityManager = $this->getDoctrine()->getManager();
    $espaceRepository = $entityManager->getRepository(Espace::class);

    $espaces = $espaceRepository->createQueryBuilder('e')
        ->where('LOWER(e.nom) LIKE :searchTerm')
        ->setParameter('searchTerm', '%'.strtolower($searchTerm).'%')
        ->getQuery()
        ->getResult();
        $results = [];
        foreach ($espaces as $espace) {
            $results[] = [
                'id' => $espace->getId(),
                'nom' => $espace->getNom(),
                'caracteristique' => $espace->getCaracteristique(),
                'adresse' => $espace->getAdresse(),
                'dispo' => $espace->getDispo(),
                'tarifhoraire'=> $espace->getTarifhoraire(),
                'image'=> $espace->getImage(),
                'prixlocation'=> $espace->getPrixlocation(),
            ];
        }
        return new JsonResponse($results);
    }
    /* #[Route("/allEspacesJSON",name:"list")]
    public function getEspaces(EspaceRepository $espaceRepository,SerializerInterface $serializer){
        $espace = $espaceRepository->findAll();
        // $espaceNormalise = $normalizer->normalize($espace,'json',['groups'=>"espaces"]);
        $json = $serializer->serialize($espace,'json',['groups'=>"espaces"]);
        return new Response($json);

    } */
    #[Route('/frontaffichageespace',name: 'liip_imagine_filter',)]
    public function indexFront(EspaceRepository $espaceRepository ): Response
    {


        $espace=$espaceRepository->findAll();
        
    
    return $this->render('espace/Frontespace.html.twig', [
        'esp' => $espace,
        
    ]);
    }
    
    

    #[Route('/new', name: 'app_espace_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EspaceRepository $espaceRepository, SluggerInterface $slugger,MailerInterface $mailer): Response
    {
        $espace = new Espace();
        $x=$espace->getDispo();
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

                }
                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $espace->setImage($newFilename);

                

                $email = (new Email())
                ->from('oubied.357@gmail.com')
                ->to(new Address('oubied.357@gmail.com'))

                ->subject('Time for Symfony Mailer!')
                ->text('Sending emails is fun again!')
                ->html('<p>Les espaces disponibles : '.$x.'</p>');


            $mailer->send($email);






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
    public function edit(Request $request, Espace $espace, EspaceRepository $espaceRepository,SluggerInterface $slugger): Response
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
