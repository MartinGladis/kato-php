<?php

namespace KatoSoftwareHouse;

use KatoSoftwareHouse\Service\AbstractClass;
use KatoSoftwareHouse\Service\Client;

class KatoClient extends AbstractClass
{
    protected $client;

    public function __construct($message = '')
    {
        $this->client = new Client($message);
    }

    /**
     * @return string
     */
    function doSomething()
    {
        return $this->client->run();
    }
}
