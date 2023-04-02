<?php

namespace App\Controller\Admin;

use App\Entity\Blog;
use App\Form\BlogType;
use App\Repository\BlogRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminBlogController extends AbstractController
{
    /**
     * @var BlogRepository
     */
    private $blogRepository;

    public function __construct(BlogRepository $blogRepository, UserRepository $userRepository, EntityManagerInterface  $em)
    {
        $this->blogRepository = $blogRepository;
        $this->userRepository = $userRepository;
        $this->em = $em;
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

    #[Route('/admin/blog/create', name: 'admin.blog.new')]
    public function new(Request $request){
        $blog = new Blog();

        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->persist($blog);
            $this->em->flush();
            $this->addFlash('success', 'L\'article de blog à été créé avec succès');
            return $this->redirectToRoute('admin.blog.index');
        }
        return $this->render('admin/blog/new.html.twig', [
            'blog' => $blog,
            'form' => $form->createView()
        ]);
    }

    #[Route('/admin/blog/edit-{id}', name: 'admin.blog.edit', methods: ['GET','POST'])]
    public function edit(Blog $blog, Request $request)
    {
        $form = $this->createForm(BlogType::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->em->flush();
            $this->addFlash('success', 'L\'article de blog à été modifié avec succès');
            return $this->redirectToRoute('admin.blog.index');
        }

        return $this->render('admin/blog/edit.html.twig', [
            'blogs' => $blog,
            'form' => $form->createView()
        ]);
    }

    #[Route('/admin/blog/delete/{id}', name: 'admin.blog.delete', methods: ['DELETE'])]
    public function delete(Blog $blog, Request $request){
        if ($this->isCsrfTokenValid('delete' . $blog->getId(),$request->get('_token'))){
            $this->em->remove($blog);
            $this->addFlash('success', 'L\'article de blog à été supprimé avec succès');
            $this->em->flush();
            return $this->redirectToRoute('admin.blog.index');
        }

    }
}
