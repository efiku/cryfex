<?php

namespace efik\Cryex\Tests;
use  efik\Cryex\ಠ_ಥ;

class Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \efik\Cryex\ಠ_ಥ
     * @expectedExceptionMessage Use PDO not mysqli
     */
    public function testThrowCryFaceException()
    {
        throw new  ಠ_ಥ("Use PDO not mysqli");
    }
}