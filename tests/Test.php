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

    public function testConvertExceptionObjectToString()
    {
        try{
		throw new ಠ_ಥ("Use PDO not mysqli");
        }
        catch( ಠ_ಥ $e){
            $this->assertSame("ಠ_ಥ", (string)$e);
        }
    }

}
