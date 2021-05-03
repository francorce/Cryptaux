<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Publication;
use Psr\Log\LoggerInterface;

class PublicationService
{
    private $em;

    private $logger;

    public function __construct(EntityManagerInterface $em, LoggerInterface $logger)
    {
        $this->em = $em;
        $this->logger = $logger;
    }

    public function getPublicationsPubliees()
    {
        return $this->em->getRepository(Publication::class)->findPublicationsPubliees();
    }
}
