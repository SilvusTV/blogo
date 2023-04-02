<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use App\Repository\BlogRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminBlogController extends AbstractController
{
    /**
     * @var BlogRepository
     */
    private $blogRepository;

    public function __construct(BlogRepository $blogRepository, UserRepository $userRepository)
    {
        $this->blogRepository = $blogRepository;
        $this->userRepository = $userRepository;
    }

    #[Route('/admin/blog', name: 'admin.blog.index')]
    public function index()
    {
        $blogs = $this->blogRepository->findAll();
        $authors = $this->userRepository->findAll();

        $allAuthors = [];
        foreach ($authors as $author) {
            $allAuthors += [
                $author->getId() => $author
            ];
        }

        return $this->render('admin/blog/index.html.twig', [
            'blogs' => $blogs,
            'authorInformations' => $allAuthors,
        ]);
    }

    #[Route('/admin/blog/edit-{id}', name: 'admin.blog.edit')]
    public function edit(Blog $blog)
    {
        return $this->render('admin/blog/edit.html.twig', [
            'blogs' => $blog,
        ]);
    }
}
