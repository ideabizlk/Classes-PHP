<?php

/**
 * Created by PhpStorm.
 * User: Malinda
 * Date: 3/28/2015
 * Time: 8:11 PM
 */
class DeliveryInfoList
{
    var $deliveryInfo;

    function __construct()
    {
        $this->deliveryInfo = array();
    }

    /**
     * @return mixed
     */
    public function getDeliveryInfo()
    {
        return $this->deliveryInfo;
    }

    /**
     * @param mixed $deliveryInfo
     */
    public function setDeliveryInfo($deliveryInfo)
    {
        $this->deliveryInfo = $deliveryInfo;
    }


}