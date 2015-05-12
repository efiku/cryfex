<?php
namespace efik\Cryfex\Tests;

use efik\Cryfex\ಠ_ಥ;

/**
 * Class Test
 * @package efik\Cryfex\Tests
 */
class Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \efik\Cryfex\ಠ_ಥ
     * @expectedExceptionMessage Use PDO not mysqli
     */
    public function testThrowCryFaceException()
    {
        throw new  ಠ_ಥ("Use PDO not mysqli");
    }
}
