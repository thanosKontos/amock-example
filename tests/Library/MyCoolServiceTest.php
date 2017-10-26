<?php

namespace AmockExample\Library;

use AmockExample\AmockExampleTestCase;

class MyCoolServiceTest extends AmockExampleTestCase
{
    public function testSuccessResponse()
    {
        $gatewayStub = $this->amock->get('mockSuccessResponse');
        $service = new MyCoolService($gatewayStub);

        $this->assertEquals('WORLD', $service->doSomethingCool());
    }

    /**
     * @expectedException \AmockExample\Library\Exception\ApiException
     */
    public function testErrorResponse()
    {
        $gatewayStub = $this->amock->get('mock404Response');
        $service = new MyCoolService($gatewayStub);

        $service->doSomethingCool();
    }

    /**
     * @expectedException \AmockExample\Library\Exception\ApiException
     */
    public function testExceptionResponse()
    {
        $gatewayStub = $this->amock->get('mockExceptionResponse');
        $service = new MyCoolService($gatewayStub);

        $service->doSomethingCool();
    }
}
