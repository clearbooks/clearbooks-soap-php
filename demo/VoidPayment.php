<?php
require "../vendor/autoload.php";

// create the payment
$payment = new \ClearBooks\RemovePayment();
$payment->id = 620;
$payment->type = "sales";

$client = new \ClearBooks\Client( 'demo' );

$paymentReturn = $client->voidPayment( $payment );
var_dump( $paymentReturn );

/*
Clearbooks_Soap_1_0_ResponseStatus Object
(
    [success] => 1
    [msg] => Voiding this payment was successful
)
*/
