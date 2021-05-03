<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\PublicationService;



class DefaultController extends AbstractController
{
    /**
     * @Route("/accueil", name="app_default_index", methods={"GET"})
     */
    public function index(PublicationService $publicationService): Response
    {
        $publications = $publicationService->getPublicationsPubliees();
        return $this->render('default/index.html.twig', [
            'publications' => $publications,

        ]);
    }
}
