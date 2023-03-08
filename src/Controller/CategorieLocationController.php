<?php

namespace App\Controller;

use App\Entity\CategorieLocation;
use App\Form\CategorieLocationType;
use Symfony\Component\HttpFoundation\Request;
use MercurySeries\FlashyBundle\FlashyNotifier;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\CategorieLocationRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/categorie/location')]
class CategorieLocationController extends AbstractController
{
    #[Route('/', name: 'app_categorie_location_index', methods: ['GET'])]
    public function index(CategorieLocationRepository $categorieLocationRepository): Response
    {
        return $this->render('categorie_location/index.html.twig', [
            'categorie_locations' => $categorieLocationRepository->findAll(),
        ]);
    }

    /* ************** Partie Manipulation JSON ************** */

    //la méthode getCategories permet d'afficher la liste des categories en format array à travers normalize
    //permet de transformer le tableau des categories en format JSON à travers encode
    #[Route("/allcategorieJSON",name:"list_categorie")]
    public function getCategories(CategorieLocationRepository $categorieLocationRepository,SerializerInterface $serializer): Response
    {
        $categorieLocation = $categorieLocationRepository->findAll();
        //la fonction normalize transforme le tableau d'objets espace en tableau associatif
        $json = $serializer->serialize($categorieLocation,'json',['groups'=>"categories"]);
        //la fonction json_encode permet de transformer le tableau associatif en Format JSON
        $json1=json_encode($categorieLocation);
        dump($json1);
        die;
        //la renvoie d'une réponse HTTP qui prend en parametre le tableau en format JSON
        return new Response($json);

    } 
    //Récupération d'une categorie selon l'id 
    #[Route("/categorielocation/{id}", name:"espace")]
    public function CategorieId($id, NormalizerInterface $normalizer, CategorieLocationRepository $categorieLocationRepository){
        $categorieLocation = $categorieLocationRepository->find($id);
        $catlocationNormalise = $normalizer->normalize($categorieLocation,'json',['groups'=> "categories"]);
        return new Response(json_encode($catlocationNormalise));

    }
    //Ajout d'une categorie
    #[Route("/addcategorieJSON/new", name: "addCategorieJSON")]
    public function addCategorieJSON(Request $req, NormalizerInterface $normalizer) {
        $em = $this->getDoctrine()->getManager();
        $categorieLocation = new CategorieLocation();
        $categorieLocation->setNom($req->get('nom'));
        $categorieLocation->setDescription($req->get('Description'));

        $em->flush();
        $jsonContent = $normalizer->normalize($categorieLocation,'json',['groups'=>'categories']);
        return new Response(json_encode($jsonContent));

    }


    #[Route('/new', name: 'app_categorie_location_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CategorieLocationRepository $categorieLocationRepository,FlashyNotifier $flashy): Response
    {
        $categorieLocation = new CategorieLocation();
        $form = $this->createForm(CategorieLocationType::class, $categorieLocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $flashy->success('categorie created','');
            $categorieLocationRepository->save($categorieLocation, true);


            return $this->redirectToRoute('app_categorie_location_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('categorie_location/new.html.twig', [
            'categorie_location' => $categorieLocation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_location_show', methods: ['GET'])]
    public function show(CategorieLocation $categorieLocation): Response
    {
        return $this->render('categorie_location/show.html.twig', [
            'categorie_location' => $categorieLocation,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_categorie_location_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CategorieLocation $categorieLocation, CategorieLocationRepository $categorieLocationRepository,FlashyNotifier $flashy): Response
    {
        $form = $this->createForm(CategorieLocationType::class, $categorieLocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $flashy->success('categorie modified','');
            $categorieLocationRepository->save($categorieLocation, true);

            return $this->redirectToRoute('app_categorie_location_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('categorie_location/edit.html.twig', [
            'categorie_location' => $categorieLocation,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_location_delete', methods: ['POST'])]
    public function delete(Request $request, CategorieLocation $categorieLocation, CategorieLocationRepository $categorieLocationRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$categorieLocation->getId(), $request->request->get('_token'))) {
            $categorieLocationRepository->remove($categorieLocation, true);
        }

        return $this->redirectToRoute('app_categorie_location_index', [], Response::HTTP_SEE_OTHER);
    }
}
