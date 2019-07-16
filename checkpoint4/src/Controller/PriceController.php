<?php

namespace App\Controller;

use App\Entity\Prices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PriceController extends AbstractController
{
    /**
     * @Route("/price", name="price")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $prices = $em->getRepository(Prices::class)->findAll();
        return $this->render('price/index.html.twig', [
            'prices' => $prices,
        ]);
    }
}
