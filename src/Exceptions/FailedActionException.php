<?php

namespace TestMonitor\TOPdesk\Exceptions;

use Exception;

class FailedActionException extends Exception
{
    /**
     * Create a new exception instance.
     *
     * @param $message
     */
    public function __construct($message)
    {
        parent::__construct($message);
    }
}
