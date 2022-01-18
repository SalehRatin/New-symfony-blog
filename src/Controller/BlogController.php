<?php

namespace App\Controller;

use App\Entity\Article;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $articles = $doctrine->getRepository(Article::class)->findAll();
        return $this->render('blog/index.html.twig', [
            'articles' => $articles,
        ]);
    }
}
