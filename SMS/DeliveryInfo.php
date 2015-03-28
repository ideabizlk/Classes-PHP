<?php

/**
 * Created by PhpStorm.
 * User: Malinda
 * Date: 3/28/2015
 * Time: 8:12 PM
 */
class DeliveryInfo
{
    var $address;
    var $deliveryStatus;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getDeliveryStatus()
    {
        return $this->deliveryStatus;
    }

    /**
     * @param mixed $deliveryStatus
     */
    public function setDeliveryStatus($deliveryStatus)
    {
        $this->deliveryStatus = $deliveryStatus;
    }


}