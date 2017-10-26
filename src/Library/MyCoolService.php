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
        try {
            $response = json_decode($this->gateway->getHelloReponse());

            return strtoupper($response->hello);
        } catch (\Throwable $t) {
            throw new Exception\ApiException('Some error occurred');
        }
    }
}
