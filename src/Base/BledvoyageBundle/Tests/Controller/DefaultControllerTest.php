<?php

namespace Base\BledvoyageBundle\Tests\Controller;

//use Base\BledvoyageBundle\Controller\DefaultController;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function bookingIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/booking/36');
        
        $form = $crawler
              ->filter('form')
              ->selectButton('Valider')
              ->form(array(
                  'nombre'          => '2',
                  'dateReserver'    => '2015-03-05',
                  'promo'           => 'AZERTY',
              ))
        ;
        $client->submit($form);
        $client->getResponse(); // contient la nouvelle reponse
        //$client->getCrawler(); // contient le nouveau Crawler
        //$this->assertTrue($crawler->filter('html:contains("Hello Fabien")')->count() > 0);
    }
}
