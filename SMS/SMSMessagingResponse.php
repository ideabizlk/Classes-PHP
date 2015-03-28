<?php

/**
 * Created by PhpStorm.
 * User: Malinda
 * Date: 3/28/2015
 * Time: 8:03 PM
 */
include_once("OutboundSMSMessageRequestResponse.php");
include_once("ReceiptRequest.php");
include_once("OutboundSMSTextMessage.php");
include_once("DeliveryInfo.php");
include_once("DeliveryInfoList.php");

class SMSMessagingResponse
{
    var $outboundSMSMessageRequest;

    function __construct()
    {
        $this->outboundSMSMessageRequest = new OutboundSMSMessageRequestResponse();
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