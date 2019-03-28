<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;

class APIController extends FOSRestController
{

    /**
     * @Rest\Get("/api/get/data")
     */
    public function getDataAction()
    {
        return new JsonResponse(['api' => 'dummy data']);
    }
}
