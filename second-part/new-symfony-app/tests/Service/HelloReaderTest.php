<?php

namespace App\Tests\Service;

use App\Service\HelloReader;
use PHPUnit\Framework\TestCase;

class HelloReaderTest extends TestCase
{
    public function test(): void
    {
        $reader = new HelloReader;

        $hello = $reader->getHello("Hello world");
        $this->assertNotNull($hello);

        $hello = $reader->getHello("hello world");
        $this->assertNotNull($hello);

        $hello = $reader->getHello("world");
        $this->assertNull($hello);
    }
}
