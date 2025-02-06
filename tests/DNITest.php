<?php

use PHPUnit\Framework\TestCase;
use App\DNI;

class DNITest extends TestCase
{
    public function testLetraDNI()
    {
        $dni = new DNI('12345678');

        $dniLetra = $dni->getDNIConLetra();
        $this->assertEquals('12345678Z', $dniLetra);
    }
}