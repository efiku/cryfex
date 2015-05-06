<?php
/**
 * Created by PhpStorm.
 * User: efik
 * Date: 06.05.15
 * Time: 21:28
 */

namespace efik\Cryex;


class ಠ_ಥ extends \Exception
{
    public function __construct($message = "", $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return "ಠ_ಥ";
    }
}