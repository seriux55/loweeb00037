<?php

namespace Base\BledvoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('BaseBledvoyageBundle:Admin:index.html.twig', array(
                // ...
        ));    
        
    }
    
    public function commandeAction()
    {
        
        return $this->render('BaseBledvoyageBundle:Admin:commande.html.twig', array(
                // ...
        ));    
        
    }
    
    public function reservationAction()
    {
        
        return $this->render('BaseBledvoyageBundle:Admin:reservation.html.twig', array(
                // ...
        ));    
        
    }
    
    public function presentAction()
    {
        
        return $this->render('BaseBledvoyageBundle:Admin:present.html.twig', array(
                // ...
        ));    
        
    }
}
