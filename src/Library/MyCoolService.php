<?php

namespace AmockExample\Library;

class MyCoolService
{
    private $gateway;

    public function __construct(SomeApiGateway $gateway)
    {
        $this->gateway = $gateway;
    }

    public function doSomethingCool()
    {
        $response = json_decode($this->gateway->getHelloReponse());

        try {
            return strtoupper($response->hello);
        } catch (\Throwable $t) {
            throw new \Exception('Some error occurred');
        }
    }
}
