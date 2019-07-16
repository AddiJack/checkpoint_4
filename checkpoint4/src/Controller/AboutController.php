<?php

namespace App\Controller;

use App\Entity\About;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    /**
     * @Route("/about", name="about")
     */
    public function index()
    {
        $em = $this->getDoctrine()->getManager();
        $about = $em->getRepository(About::class)->findAll();
        return $this->render('about/index.html.twig', [
            'about' => $about,
        ]);
    }
}
