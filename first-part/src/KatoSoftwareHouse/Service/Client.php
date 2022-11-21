<?php

namespace KatoSoftwareHouse\Service;

class Client implements ClientInterface
{
    protected $message;

    public function __construct($message = '')
    {
        $this->message = $message;
    }

    public function run()
    {
        return 'works ' . $this->message;
    }
}
