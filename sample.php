<?php
/**
 * Created by PhpStorm.
 * User: Malinda
 * Date: 3/28/2015
 * Time: 7:59 PM
 */

//SMS Send Request Sample
include_once 'SMS/SMSMessagingRequest.php';

$s = new  SMSMessagingRequest();
$s->buildRequest("077", "755", "MSG");
echo $s->toJSON();



// SMS Request server response
include_once 'SMS/SMSMessagingResponse.php';

$s = new  SMSMessagingResponse();
echo $s->toJSON();