<?php
require_once __DIR__ . '/includes.php';

$invoice = new \Clearbooks_Soap_1_0_Invoice();
$invoice->creditTerms = 30;
$invoice->dateCreated = date( 'Y-m-d' );
$invoice->dateDue     = date( 'Y-m-d', strtotime( '+28 days' ) );
$invoice->description = 'API Test Invoice';
$invoice->entityId    = 33;
$invoice->status      = 'approved';
$invoice->type        = 'sales';
$invoice->vatTreatment = "DSEU";
// $invoice->multicurrency = 2; // Optionally create my invoice in Euros
// $invoice->fxrate = 2.00; // Optionally force the exchange rate for the invoice.

// add an item to the invoice
$item = new \Clearbooks_Soap_1_0_Item();
$item->description = 'Line Item #1';
$item->quantity    = 3.5;
$item->type        = 1001001;
$item->unitPrice   = number_format( 29.99 / 1.2, 2 );
$item->vatRate     = '0.2';
$invoice->items[]  = $item;

$invoiceReturn = $client->createInvoice( $invoice );
print_r( $invoiceReturn );

/*
 Clearbooks_Soap_1_0_InvoiceReturn Object
(
    [due] => 104.96
    [invoice_id] => 45
    [invoice_prefix] => INV
    [invoice_number] => 29
)
 */

$invoiceRef = new Clearbooks_Soap_1_0_InvoiceRef();
$invoiceRef->id = $invoiceReturn->invoice_id;
$invoiceRef->type = 'sales';
$voidResult = $client->voidInvoice( $invoiceRef );

print_r( $voidResult );

/*
Clearbooks_Soap_1_0_ResponseStatus Object
(
    [success] => 1
    [msg] =>  Voiding this invoice was successful
)
 */