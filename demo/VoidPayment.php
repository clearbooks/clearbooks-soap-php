<?php
require_once __DIR__ . '/includes.php';

// create the payment
$payment = new \Clearbooks_Soap_1_0_RemovePayment();
$payment->id = 620;
$payment->type = "sales";

$paymentReturn = $client->voidPayment( $payment );
print_r( $paymentReturn );

/*
Clearbooks_Soap_1_0_ResponseStatus Object
(
    [success] => 1
    [msg] => Voiding this payment was successful
)
*/
