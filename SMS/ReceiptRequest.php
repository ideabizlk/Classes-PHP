<?php

/**
 * Created by PhpStorm.
 * User: Malinda
 * Date: 3/28/2015
 * Time: 7:41 PM
 */
class ReceiptRequest
{
    var $notifyURL;
    var $callbackData;

    function __construct()
    {
        $this->notifyURL = "";
        $this->callbackData = "";
    }

    /**
     * @return mixed
     */
    public function getNotifyURL()
    {
        return $this->notifyURL;
    }

    /**
     * @param mixed $notifyURL
     */
    public function setNotifyURL($notifyURL)
    {
        $this->notifyURL = $notifyURL;
    }

    /**
     * @return mixed
     */
    public function getCallbackData()
    {
        return $this->callbackData;
    }

    /**
     * @param mixed $callbackData
     */
    public function setCallbackData($callbackData)
    {
        $this->callbackData = $callbackData;
    }


}