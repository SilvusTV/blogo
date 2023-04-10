<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    #[Route('/contact', name: 'contact')]
    public function index(): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);

        $users = $this->userRepository->findAll();
        return $this->render('contact/index.html.twig', [
            'users' => $users,
            'current_menu' => 'contact',
            'form' => $form->createView()
        ]);
    }
}
