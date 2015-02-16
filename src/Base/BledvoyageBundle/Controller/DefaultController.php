<?php

namespace Base\BledvoyageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BaseBledvoyageBundle:Default:index.html.twig', array(
            'categories'    => 'azerty',
            'product'       => 'azerty',
        ));
    }
}
