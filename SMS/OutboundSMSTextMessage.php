<?php

/**
 * Created by PhpStorm.
 * User: Malinda
 * Date: 3/28/2015
 * Time: 7:50 PM
 */
class OutboundSMSTextMessage
{
    var $message;

    function __construct()
    {
        $this->message = "";
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


}