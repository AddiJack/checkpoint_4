<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Doctrine\ORM\EntityManagerInterface;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact", methods={"GET","POST"})
     */
    public function new(Request $request, \Swift_Mailer $mailer): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form;
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();

            $message = (new \Swift_Message('Vous avez un nouveau message'))
                ->setFrom('a.jacquot.09@gmail.com')
                ->setTo('a.jacquot.09@gmail.com')
                ->setBody($this->renderView('contact/email/notifications.html.twig', [
                    'contact'=>$contact]), 'text/html');
            ;
            $mailer->send($message);

            return $this->redirectToRoute('contact_ok');
        }
        return $this->render('contact/contact.html.twig', [
            'form' => $form ->createView(),
        ]);
    }

    /**
     * @Route("/contactok", name="contact_ok")
     */
    public function contactok()
    {
        return $this->render('contact/contactok.html.twig', [
            'controller_name' => 'ContactController',
        ]);
    }
}
