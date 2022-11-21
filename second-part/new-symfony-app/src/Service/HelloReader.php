<?php

namespace App\Service;

class HelloReader {
    public function getHello(string $text): ?string
    {
        if (str_contains($text, 'hello')) {
            return 'hello';
        } elseif (str_contains($text, 'Hello')) {
            return 'Hello';
        } else {
            return null;
        }
    }
}