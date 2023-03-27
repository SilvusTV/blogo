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

        $blogs = $this->blogRepository->findBy(array(), array('id' => 'DESC'));
        $authors = $this->userRepository->findAll();

        $allAuthors = [];
        foreach ($authors as $author) {
            $allAuthors += [
                $author->getId() => $author
            ];
        }

        return $this->render('blog/index.html.twig', [
            'current_menu' => 'blog',
            'blogs' => $blogs,
            'authorInformations' => $allAuthors,
        ]);

    }
    #[Route('/blog/{slug}-{id}', name: 'blog.show', requirements: ['slug' => "[a-z0-9\-]*"])]
    public function show($slug, $id): Response
    {
        $blog = $this->blogRepository->find($id);
        $authors = $this->userRepository->findAll();
        $allAuthors = [];
        foreach ($authors as $author) {
            $allAuthors += [
                $author->getId() => $author
            ];
        }
        return $this->render('blog/show.html.twig',[
            'blog'=> $blog,
            'current_menu' => 'blog',
            'authorInformations' => $allAuthors,
        ]);
    }

}
