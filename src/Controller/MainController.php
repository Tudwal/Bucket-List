<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(): Response
    {
        return $this->render('main/home.html.twig', [
            'titre' => 'Bucket List'
        ]);
    }

    /**
     * @Route("/about/", name="about")
     */
    public function about(): Response
    {
        return $this->render('main/about.html.twig', [
            'titre' => 'about'
        ]);
    }
    /**
     * @Route("/contact/", name="contact")
     */
    public function contact(): Response
    {
        return $this->render('main/contact.html.twig', [
            'titre' => 'Contact'
        ]);
    }
    /**
     * @Route("/service/", name="service")
     */
    public function service(): Response
    {
        return $this->render('main/service.html.twig', [
            'titre' => 'Services'
        ]);
    }
}
