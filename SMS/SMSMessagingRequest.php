<?php

/**
 * Created by PhpStorm.
 * User: Malinda
 * Date: 3/28/2015
 * Time: 8:03 PM
 */
include_once("OutboundSMSMessageRequest.php");
include_once("ReceiptRequest.php");
include_once("OutboundSMSTextMessage.php");

class SMSMessagingRequest
{
    var $outboundSMSMessageRequest;

    function __construct()
    {
        $this->outboundSMSMessageRequest = new OutboundSMSMessageRequest();
    }

    /*
    * build sms messaging request in one line
    */
    function buildRequest($address, $sender, $message)
    {
        $this->addAddress($address);
        $this->outboundSMSMessageRequest->getOutboundSMSTextMessage()->setMessage($message);
        $this->outboundSMSMessageRequest->setSenderAddress($sender);
    }

    function addAddress($address)
    {
        $this->outboundSMSMessageRequest->addAddress($address);
    }

    function toString()
    {
        return json_encode($this);
    }

    function toJSON()
    {
        return json_encode($this);
    }


}