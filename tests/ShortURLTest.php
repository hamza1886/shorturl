<?php

namespace ShortURL\Tests;

use PHPUnit\Framework\TestCase;
use ShortURL\ShortURL;

class ShortURLTest extends TestCase
{
    public function test_it_can_encode()
    {
        $str = ShortURL::encode(123456789);
        $this->assertIsString($str);
        $this->assertEquals('pgK8p', $str);
    }

    public function test_it_can_decode()
    {
        $num = ShortURL::decode('pgK8p');
        $this->assertIsNumeric($num);
        $this->assertEquals(123456789, $num);
    }
}
