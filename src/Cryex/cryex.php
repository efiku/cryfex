<?php

namespace Cryex;

use Exception;

class ಠ_ಥ extends Exception
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