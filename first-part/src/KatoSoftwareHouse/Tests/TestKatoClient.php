<?php
namespace KatoSoftwareHouse\Tests;

use \PHPUnit_Framework_TestCase;
use KatoSoftwareHouse\KatoClient;

class TestKatoClient extends \PHPUnit_Framework_TestCase
{
    public function testExecute()
    {
        $client = new KatoClient('great');

        //do not change this assert
        $this->assertEquals($client->doSomething(),'works great');
    }

    public function testExecuteAgain()
    {
        $client = new KatoClient('fine');

        //do not change this assert
        $this->assertEquals($client->doSomething(),'works fine');
    }
}
