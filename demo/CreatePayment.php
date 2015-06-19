<?php
require_once __DIR__ . '/includes.php';

$invoice = new \Clearbooks_Soap_1_0_PaymentInvoice();
$invoice->id = 212;
$invoice->amount = 15.5;
$allocatedToInvoices = [ $invoice ];


// create the payment
$payment = new \Clearbooks_Soap_1_0_Payment();
$payment->amount         = 29.99;
$payment->accountingDate = date( 'Y-m-d' );
$payment->bankAccount    = 7502001;
$payment->description    = 'Invoice Payment';
$payment->entityId       = 22;
$payment->invoices       = $allocatedToInvoices;
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
