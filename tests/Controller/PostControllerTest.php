<?php

namespace App\tests\Controller;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

Class PostControllerTest extends WebTestCase {

public function test_create_post(): void {
    $client = static::createClient();
    $client->request('POST','/posts', [], [], [], json_encode([
    'title' => 'Minha primeira aplicação com symfony',
    'description' => 'Descrição da minha primeira aplicação'
    ]));
    $this->assertEquals(Response::HTTP_CREATED, $client->getResponse()->getStatusCode());
}

}