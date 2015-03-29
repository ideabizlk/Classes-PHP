# SMS Classes

this contain PHP classes for IdeaBiz API
* SMS Messaging

More will add soon

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
