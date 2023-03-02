<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Coach;

use App\Entity\User;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class UserApiController extends AbstractController
{
    #[Route('/user/api', name: 'app_user_api')]
    public function index(): Response
    {
        return $this->render('user_api/index.html.twig', [
            'controller_name' => 'UserApiController',
        ]);
    }

    #[Route('/signupClientJson', name: 'app_signupClientJson')]
    public function signupClientJson(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $passwordHasher){
        $email = $request->query->get('email');
        $password = $request->query->get('password');
        $dateNaissance = $request->query->get('dateNaissance');
        $nom = $request->query->get('nom');
        $prenom = $request->query->get('prenom');
        $genre = $request->query->get('genre');


        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return new Response( 'Email is not valid');
        }
        $client = new Client();

        $client->setEmail($email);
        $client->setPassword(
            $passwordHasher->hashPassword(
                $client,
                $password
            )
        );
        $client->setRoles(['ROLE_CLIENT']);
        $client->setDateNaissance($dateNaissance);
        $client->setNom($nom);
        $client->setPrenom($prenom);
        $client->setGenre($genre);
        $client->setIsVerified(true);


        try{
            $em = $doctrine->getManager();
            $em->persist($client);
            $em->flush();
            return new JsonResponse('Client added', 200);
        }catch(\Exception $e){
            return new Response  ("Client not added");

        }



    }

    #[Route('/signupCoachJson', name: 'app_signupCoachJson')]
    public function signupCoachJson(Request $request, ManagerRegistry $doctrine, UserPasswordHasherInterface $passwordHasher){
        $email = $request->query->get('email');
        $password = $request->query->get('password');
        $dateNaissance = $request->query->get('dateNaissance');
        $nom = $request->query->get('nom');
        $prenom = $request->query->get('prenom');
        $diplome=$request->query->get('diplome');



        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            return new Response( 'Email is not valid');
        }
        $coach = new Coach();

        $coach->setEmail($email);
        $coach->setPassword(
            $passwordHasher->hashPassword(
                $coach,
                $password
            )
        );
        $coach->setRoles(['ROLE_CLIENT']);
        $coach->setDateNaissance($dateNaissance);
        $coach->setNom($nom);
        $coach->setPrenom($prenom);
        $coach->setDiplome($diplome);
        $coach->setIsVerified(true);


        try{
            $em = $doctrine->getManager();
            $em->persist($coach);
            $em->flush();
            return new JsonResponse('Coach added', 200);
        }catch(\Exception $e){
            return new Response  ("Coach not added");

        }

    }


    #[Route('/signin', name: 'app_signin')]
    public function signin(Request $request){
        $email = $request ->query->get("email");
        $password = $request -> query->get("password");

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->findOneBy(['email'=>$email]);

         if($user){
             if(password_verify($password,$user->getPassword())){
                 $serializer = new Serializer([new ObjectNormalizer()]);
                 $formatted = $serializer->normalize($user);
                 return new JsonResponse($formatted);
             }
             else{
                 return new  Response("password not found");
             }
         }
         else{
                return  new Response("user not found ");

         }
    }




}
