<?php

namespace AmockExample;

use PHPUnit\Framework\TestCase;
use Amock\Configuration;
use Amock\Amock;

class AmockExampleTestCase extends TestCase
{
    protected $amock;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $config = new Configuration(
            Configuration::TYPE_YAML,
            Configuration::SOURCE_TYPE_DIR,
            __DIR__ . '/mock_fixtures'
        );

        $this->amock = Amock::create($config, $this);
    }
}
