# PHP Classes
this contain PHP classes for IdeaBiz API
* SMS Messaging

More will add soon

# SMS Classes

## Send SMS Request Class
```
include_once 'SMS/SMSMessagingRequest.php';

$s = new  SMSMessagingRequest();
$s->buildRequest("077", "755", "MSG");

echo $s->toJSON();

```

### Build Request method
This simply build sms request in one line. If you want, you can set properties one by one.

### ToJSON
This return json text of object

## Server SMS response class

```
include_once 'SMS/SMSMessagingResponse.php';
```

```
Please note, this is only sample code for simple app. Please chage this according to your bussiness and load.
```