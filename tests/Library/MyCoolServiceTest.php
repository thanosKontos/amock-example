<?php

namespace AmockExample\Library;

use AmockExample\AmockExampleTestCase;

class MyCoolServiceTest extends AmockExampleTestCase
{
    public function testSuccessResponse()
    {
        $gatewayStub = $this->amock->get('mockSuccessResponse', $this);
        $service = new MyCoolService($gatewayStub);

        $this->assertEquals('WORLD', $service->doSomethingCool());
    }

    /**
     * @expectedException \Exception
     */
    public function testErrorResponse()
    {
        $gatewayStub = $this->amock->get('mock404Response', $this);
        $service = new MyCoolService($gatewayStub);

        $service->doSomethingCool();
    }
}
