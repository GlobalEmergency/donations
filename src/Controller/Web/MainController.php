<?php

namespace App\Controller\Web;

use App\Repository\PlaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="web_")
 */
class MainController extends AbstractController
{

    /**
     * @Route("/", name="main")
     * @return Response
     */
    public function index(PlaceRepository $placeRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'places' => $placeRepository->findAll()
        ]);
    }
}
