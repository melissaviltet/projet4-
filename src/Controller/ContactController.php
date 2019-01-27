<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(Request $request, \Swift_Mailer $mailer)
    {
        $form =$this->createForm(ContactType::class);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $contactFormData = $form->getData();


            $message = (new \Swift_Message('On a du courrier'))
                ->setFrom($contactFormData['email'])
                ->setTo('melissaviltet@hotmail.fr')
                ->setBody(
                    $contactFormData['message'],
                    'text/plain'
                )

            ;
            $mailer->send($message);

            $this->addFlash(
                'success',
                'La missive est bien partie!'
            );
            return $this->redirectToRoute('contact');
        }

        return  $this->render('contact/index.html.twig', [
            'contact_form' => $form->createView()
        ]);


    }
}
