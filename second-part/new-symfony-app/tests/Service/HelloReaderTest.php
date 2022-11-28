<?php

namespace App\Tests\Service;

use App\Service\HelloReader;
use PHPUnit\Framework\TestCase;

class HelloReaderTest extends TestCase
{

    /**
     * @test
     * @dataProvider helloDataProvider
     */
    public function itShouldReturnHello($data): void
    {
        $reader = new HelloReader;

        $hello = $reader->getHello($data);
        $this->assertNotNull($hello);
    }

    /**
     * @test
     * @dataProvider notHelloDataProvider
     */
    public function itShouldNotReturnHello($data)
    {
        $reader = new HelloReader;

        $hello = $reader->getHello($data);
        $this->assertNull($hello);
    }

    public function helloDataProvider()
    {
        return [
            "Uppercase hello" => ['Hello world'],
            "Lovercase hello" => ['hello world']
        ];
    }

    public function notHelloDataProvider()
    {
        return [
            "world" => ["world"]
        ];
    }
}
