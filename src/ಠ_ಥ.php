<?php

namespace efik\Cryfex;

/**
 * Class ಠ_ಥ
 * @package efik\Cryfex
 */
class ಠ_ಥ extends \Exception
{
    /**
     * @param string $message
     * @param int $code
     * @param \Exception $previous
     */
    public function __construct($message = "", $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "ಠ_ಥ";
    }
}
