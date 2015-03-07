<?php

namespace Base\BledvoyageBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ConfirmationControllerTest extends WebTestCase
{
    public function testNote()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/note');
    }

}
