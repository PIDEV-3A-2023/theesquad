<?php

namespace App\Controller;

use App\Entity\Produit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Stripe\Stripe;

class PaymentController extends AbstractController
{
    #[Route('/payment', name: 'app_payment')]
    public function index(): Response
    {

        return $this->render('payment/index.html.twig',[
        ]);
    }
    #[Route('/success', name: 'app_success')]
    public function success(): Response
    {

        return $this->render('payment/success.html.twig',[
        ]);
    }#[Route('/error', name: 'app_error')]
public function error(): Response
{

    return $this->render('payment/error.html.twig',[
    ]);
}

    #[Route('/create-checkout-session', name: 'checkout')]
    public function checkout(SessionInterface $session): Response
    {

        \Stripe\Stripe::setApiKey('sk_test_51MiPrDKFKzDmhYbd7FtCU8phyhigbbZj1Z5ancGh1LC0rbVmvJHCTLklGn6dZB0tUmkQKhVCzGT53UFvHYSRdtp100dGIyGb2V');
        header('Content-Type: application/json');

        $YOUR_DOMAIN = 'http://127.0.0.1:8000';
        $panier = $session->get('panier', []);
        $items = [];
        $total = 0;
        foreach ($panier as $id => $quantite) {
            $produit = $this->getDoctrine()->getRepository(Produit::class)->find($id);
            if (!$produit) {
                throw $this->createNotFoundException('Produit non trouvé pour id '.$id);
            }
            $prix = $produit->getPrix();
            $total += $prix * $quantite;
            $items[] =[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => $produit->getNom(),
                    ],
                    'unit_amount' => $prix * 100,
                ],
                'quantity' => $quantite,
            ];
        }


        $checkout_session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $items,

            'mode' => 'payment',
            'success_url' => $YOUR_DOMAIN . '/success',
            'cancel_url' => $YOUR_DOMAIN . '/error',
        ]);

        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);


        return $this->json(['id' => $checkout_session->id]);
    }
}