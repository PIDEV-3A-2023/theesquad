<?php

namespace App\Controller;

use App\Entity\Client;
use App\Entity\Coach;
use App\Entity\User;
use App\Form\RegistrationClientFormType;
use App\Form\RegistrationCoachFormType;
use App\Form\RegistrationFormType;
use App\Security\EmailVerifier;
use App\Security\LoginAuthenticator;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/register', name: 'app_register')]
    public function index(): Response
    {
        return $this->render('registration/register.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }

    #[Route('/registerCoach', name: 'app_registerCoach')]
    public function registerCoach(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, LoginAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $coach = new Coach();
        $form = $this->createForm(RegistrationCoachFormType::class, $coach);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $coach->setPassword(
                $userPasswordHasher->hashPassword(
                    $coach,
                    $form->get('plainPassword')->getData()
                )
            );

            $diplomeFile = $form->get('diplome')->getData();
            $diplomeName = md5(uniqid()).'.'.$diplomeFile->guessExtension();
            try {
                $diplomeFile->move(
                    $this->getParameter('diplome_directory'),
                    $diplomeName
                );
            } catch (FileException $e) {

            }

            $coach->setDiplome($diplomeName);


            $coach->setRoles(['ROLE_COACH']);

            $entityManager->persist($coach);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_emailCoach', $coach,
                (new TemplatedEmail())
                    ->from(new Address('nawres.mrabet@esprit.tn', 'HealthConnect'))
                    ->to($coach->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $coach,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/registerCoach.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/registerClient', name: 'app_registerClient')]
    public function registerClient(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, LoginAuthenticator $authenticator, EntityManagerInterface $entityManager): Response
    {
        $client = new Client();
        $form = $this->createForm(RegistrationClientFormType::class, $client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $client->setPassword(
                $userPasswordHasher->hashPassword(
                    $client,
                    $form->get('plainPassword')->getData()
                )
            );

            $client->setRoles(['ROLE_CLIENT']);

            $entityManager->persist($client);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_emailClient', $client,
                (new TemplatedEmail())
                    ->from(new Address('nawres.mrabet@esprit.tn', 'HealthConnect'))
                    ->to($client->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email

            return $userAuthenticator->authenticateUser(
                $client,
                $authenticator,
                $request
            );
        }

        return $this->render('registration/registerClient.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }


    #[Route('/verify/emailClient', name: 'app_verify_emailClient')]
    public function verifyUserEmailClient(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_login');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_client_dashboard');
    }

    #[Route('/verify/emailCoach', name: 'app_verify_emailCoach')]
    public function verifyUserEmailCoach(Request $request, TranslatorInterface $translator): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_login');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('app_logout');
    }
}
