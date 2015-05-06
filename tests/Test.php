<?php

use lib\ಠ_ಥ;

class Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \lib\ಠ_ಥ
     * @expectedExceptionMessage Use PDO not mysqli
     */
    public function testThrowCryFaceException()
    {
        throw new ಠ_ಥ("Use PDO not mysqli");
    }
}