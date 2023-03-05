<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Entity\Produit;
use App\Form\CommandeType;
use App\Repository\CommandeRepository;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/commande')]
class CommandeController extends AbstractController
{
    #[Route('/', name: 'app_commande_index', methods: ['GET'])]
    public function index(CommandeRepository $commandeRepository): Response
    {
        return $this->render('commande/index.html.twig', [
            'commandes' => $commandeRepository->findAll(),
        ]);
    }

    #[Route('/panierAffichage/', name: 'affichage_panier_front')]
    public function indexFront(SessionInterface $session, ProduitRepository $produitRepository)
    {
        $panier = $session->get("panier", []);

        if (!is_array($panier)) {
            $dataPanier = [];
            $total = 0;
        } else {
            // On "fabrique" les données
            $dataPanier = [];
            $total = 0;

            foreach ($panier as $id => $quantite) {
                $produit = $produitRepository->find($id);
                $dataPanier[] = [
                    "produit" => $produit,
                    "quantite" => $quantite
                ];
                $total += $produit->getPrix() * $quantite;
            }
        }

        return $this->render('commande/Panier.html.twig', compact("dataPanier", "total"));
    }

    #[Route('/deletePanier/',name:'deletepanier')]
    public function deletePanier ( SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->set("panier",[]);
        return $this->redirectToRoute("affichage_panier_front");
    }



    /**
     * @Route ("/add/{id}",name="add")
     * @return void
     */
    public function add(Produit $produit,SessionInterface $session)
    {
        //on récupere le panier actuel
        $panier = $session->get("panier", []);
        $id=$produit->getId();
        if(!empty ($panier[$id])) {
            $panier[$id]++;
        }else {
            $panier[$id] = 1;
        }

        dump($panier);
        dump($session->get('panier'));

        // on sauvgarde dans la session
        $session->set("panier",$panier);
        return $this->redirectToRoute("affichage_panier_front");
    }
    /**
     * @Route("/remove/{id}", name="remove")
     */
    public function remove(Produit $produit, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $produit->getId();

        if(!empty($panier[$id])) {
            if ($panier[$id] > 1) {
                $panier[$id]--;
            } else {
                unset($panier[$id]);
            }
        }
        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("affichage_panier_front");
    }
    /**
     * @Route("/deleteCommande/{id}", name="deleteCommande")
     */
    public function deleteCommande (Produit $produit, SessionInterface $session)
    {
        // On récupère le panier actuel
        $panier = $session->get("panier", []);
        $id = $produit->getId();

        if(!empty($panier[$id])) {
                unset($panier[$id]);
        }
        // On sauvegarde dans la session
        $session->set("panier", $panier);

        return $this->redirectToRoute("affichage_panier_front");
    }





    #[Route('/new', name: 'app_commande_new', methods: ['GET', 'POST'])]
    public function new(Request $request, CommandeRepository $commandeRepository): Response
    {
        $commande = new Commande();
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeRepository->save($commande, true);

            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_show', methods: ['GET'])]
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_commande_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Commande $commande, CommandeRepository $commandeRepository): Response
    {
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $commandeRepository->save($commande, true);

            return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_commande_delete', methods: ['POST'])]
    public function delete(Request $request, Commande $commande, CommandeRepository $commandeRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $commandeRepository->remove($commande, true);
        }

        return $this->redirectToRoute('app_commande_index', [], Response::HTTP_SEE_OTHER);
    }
}
