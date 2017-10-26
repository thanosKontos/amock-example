<?php

namespace AmockExample\Library;

use GuzzleHttp\Client;

class SomeApiGateway
{
    public function getHelloReponse()
    {
        $client = new Client(['verify' => false]);
        $res = $client->request('GET', 'https://www.mocky.io/v2/5185415ba171ea3a00704eed');

        return $res->getBody();
    }
}
