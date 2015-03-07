<?php

namespace Base\BledvoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ConfirmationController extends Controller
{
    public function noteCommandeAction()
    {
        return $this->render('BaseBledvoyageBundle:Confirmation:commande_note.html.twig', array(
            //'product' => $product,
        ));
    }
    
    public function confirmerCommandeAction()
    {
        return $this->render('BaseBledvoyageBundle:Confirmation:commande_confirmer.html.twig', array(
            //'product' => $product,
        ));
    }
    
    public function facturerCommandeAction()
    {
        return $this->render('BaseBledvoyageBundle:Confirmation:commande_facturer.html.twig', array(
            //'product' => $product,
        ));
    }
    
    public function noteReservationAction()
    {
        return $this->render('BaseBledvoyageBundle:Confirmation:reservation_note.html.twig', array(
            //'product' => $product,
        ));
    }
    
    public function confirmerReservationAction()
    {
        return $this->render('BaseBledvoyageBundle:Confirmation:reservation_confirmer.html.twig', array(
            //'product' => $product,
        ));
    }
    
    public function acompteReservationAction()
    {
        return $this->render('BaseBledvoyageBundle:Confirmation:reservation_acompte.html.twig', array(
            //'product' => $product,
        ));
    }
    
    public function facturerReservationAction()
    {
        return $this->render('BaseBledvoyageBundle:Confirmation:reservation_facturer.html.twig', array(
            //'product' => $product,
        ));
    }
}
