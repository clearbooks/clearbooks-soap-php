<?php
require_once __DIR__ . '/includes.php';

// the paypal bank account
$paypalBankAccount = 7502004;

// the paypal entity id
$paypalEntityId = 12;

// the amount received by paypal
$received = 1150;

// the sales invoice id to apply the payment to
$salesInvoiceId = 189;

// fetch the original invoice
$invoiceQuery = new \Clearbooks_Soap_1_0_InvoiceQuery();
$invoiceQuery->id[]   = $salesInvoiceId;
$invoiceQuery->ledger = 'sales';
$invoiceQuery->status = 'approved';
$invoices = $client->listInvoices( $invoiceQuery );
if ( !$invoices ) {
    throw new \Exception( 'Invoice not found' );
}
$invoice  = $invoices[0];

// calculate the invoice total
$total = 0;
array_walk( $invoice->items, function( $item ) use ( &$total ) {
    /** @var $item \Clearbooks_Soap_1_0_item */
   $total += $item->unitPrice + $item->vat;
} );

// the paypal fee is the amount received minus the invoice total (1150 - 1200 = -50)
$fee = $received - $total;

// create an invoice for the paypal fee
$invoice = new \Clearbooks_Soap_1_0_Invoice();
$invoice->creditTerms = 0;
$invoice->dateCreated = date( 'Y-m-d' );
$invoice->dateDue     = date( 'Y-m-d' );
$invoice->description = 'PayPal Fee';
$invoice->entityId    = $paypalEntityId;
$invoice->status      = 'approved';
$invoice->type        = 'sales';

// add the fee item to the invoice (should be a negative amount)
$item = new \Clearbooks_Soap_1_0_Item();
$item->description = 'PayPal Fee';
$item->quantity    = 1;
$item->type        = 6001002;
$item->unitPrice   = number_format( $fee / 1.2, 2 );
$item->vatRate     = '0.2';
$invoice->items[]  = $item;

// create the invoice in the api and retrieve the invoice id
$invoiceReturn = $client->createInvoice( $invoice );
$feeInvoiceId  = $invoiceReturn->invoice_id;

// create the payment
$payment = new \Clearbooks_Soap_1_0_Payment();
$payment->amount         = $received;
$payment->accountingDate = date( 'Y-m-d' );
$payment->bankAccount    = $paypalBankAccount;
$payment->description    = 'PayPal Payment';
$payment->entityId       = $invoice->entityId;
$payment->invoices[]     = array( 'id' => $feeInvoiceId );
$payment->invoices[]     = array( 'id' => $salesInvoiceId );
$payment->paymentMethod  = 21;
$payment->type           = 'sales';

$paymentReturn = $client->createPayment( $payment );
print_r( $paymentReturn );

/*
Clearbooks_Soap_1_0_PaymentReturn Object
(
    [payment_id] => 620
)
*/