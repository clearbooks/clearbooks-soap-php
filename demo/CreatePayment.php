<?php
require_once __DIR__ . '/includes.php';

// create the payment
$payment = new \Clearbooks_Soap_1_0_Payment();
$payment->amount         = 29.99;
$payment->accountingDate = date( 'Y-m-d' );
$payment->bankAccount    = 7502001;
$payment->description    = 'Invoice Payment';
$payment->entityId       = 22;
$payment->invoices       = 212;
$payment->paymentMethod  = 1;
$payment->type           = 'sales';

$paymentReturn = $client->createPayment( $payment );
print_r( $paymentReturn );

/*
Clearbooks_Soap_1_0_PaymentReturn Object
(
    [payment_id] => 618
)
*/