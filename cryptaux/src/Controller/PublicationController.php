<?php

namespace App\Controller;

use App\Entity\Publication;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use App\Service\PublicationService;

/**
 * @Route("/publication")
 */
class PublicationController extends AbstractController
{
    /**
     * @Route("/", name="app_publication_index")
     * @Method({"GET"})
     */
    public function index(PublicationService $publicationService): Response
    {
        $publications = $publicationService->getPublicationsPubliees();

        return $this->render('publication/index.html.twig', ['publications' => $publications]);
    }

    /**
     * @Route("/save", name="app_publication_save")
     */
    public function show()
    {
        $entityManager = $this->getDoctrine()->getManager();
    }
}
