<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use phpDocumentor\Reflection\DocBlock\Tags\Author;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @var BlogRepository
     */
    private $repo;

    public function __construct(BlogRepository $blogRepository, UserRepository $userRepository)
    {
        $this->blogRepository = $blogRepository;
        $this->userRepository = $userRepository;
    }


    #[Route('/blog', name: 'blog.index')]
    public function index(EntityManagerInterface $entityManager): Response
    {

        $blogs = $this->blogRepository->findAll();
        $authors = $this->userRepository->findAll();

        $allAuthors = [];
        foreach ($authors as $author){
            $allAuthors += [
                $author->getId() => $author
            ];
        }

//            $description = mb_substr($blog->getContent(), 0, 20, 'UTF-8');

        return $this->render('blog/index.html.twig', [
            'current_menu' => 'blog',
            'blogs' => $blogs,
            'authorInformations' => $allAuthors,
        ]);

    }

}
