<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WishController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function list(): Response
    {
        return $this->render('wish/list.html.twig', [
            'titre'=>'Ma Bucket Liste'
        ]);
    }

    /**
     * @Route("/details", name="details")
     */
    public function details(): Response
    {
        return $this->render('wish/details.html.twig', [
            'titre'=>'details de mon wish'
        ]);
    }
}
