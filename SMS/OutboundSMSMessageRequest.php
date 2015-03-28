<?php
/**
 * Created by PhpStorm.
 * User: Malinda
 * Date: 3/28/2015
 * Time: 7:37 PM
 */



class OutboundSMSMessageRequest
{
    var $address;
    var $senderAddress;
    var $outboundSMSTextMessage;
    var $clientCorrelator;
    var $receiptRequest;
    var $senderName;

    function __construct()
    {
        $this->address = array();
        $this->receiptRequest = new ReceiptRequest();
        $this->outboundSMSTextMessage = new OutboundSMSTextMessage();

    }

    /*
         * adding number to existing number array
         */
    function addAddress($address)
    {
        if (is_array($address)) {
            array_merge($this->address, $address);
        } else {
            array_push($this->address, $address);
        }
    }

    /**
     * @return array
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param array $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getSenderAddress()
    {
        return $this->senderAddress;
    }

    /**
     * @param mixed $senderAddress
     */
    public function setSenderAddress($senderAddress)
    {
        $this->senderAddress = $senderAddress;
    }

    /**
     * @return mixed
     */
    public function getOutboundSMSTextMessage()
    {
        return $this->outboundSMSTextMessage;
    }

    /**
     * @param mixed $outboundSMSTextMessage
     */
    public function setOutboundSMSTextMessage($outboundSMSTextMessage)
    {
        $this->outboundSMSTextMessage = $outboundSMSTextMessage;
    }

    /**
     * @return mixed
     */
    public function getClientCorrelator()
    {
        return $this->clientCorrelator;
    }

    /**
     * @param mixed $clientCorrelator
     */
    public function setClientCorrelator($clientCorrelator)
    {
        $this->clientCorrelator = $clientCorrelator;
    }

    /**
     * @return receiptRequest
     */
    public function getReceiptRequest()
    {
        return $this->receiptRequest;
    }

    /**
     * @param receiptRequest $receiptRequest
     */
    public function setReceiptRequest($receiptRequest)
    {
        $this->receiptRequest = $receiptRequest;
    }

    /**
     * @return mixed
     */
    public function getSenderName()
    {
        return $this->senderName;
    }

    /**
     * @param mixed $senderName
     */
    public function setSenderName($senderName)
    {
        $this->senderName = $senderName;
    }


}