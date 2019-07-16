<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Performance;

class PerformanceController extends AbstractController
{
    /**
     * @Route("/performance", name="performance")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $performances = $em->getRepository(Performance::class)->findAll();
        return $this->render('performance/index.html.twig', [
            'performances' => $performances,
        ]);
    }
}
