<?php
require_once __DIR__ . '/includes.php';

// construct a query to filter returned invoices
$invoiceQuery = new \Clearbooks_Soap_1_0_InvoiceQuery();
// find invoices that were created or had a payment applied within the last week
$invoiceQuery->modifiedSince = date( 'Y-m-d', strtotime( '-1 week' ) );
// look in the sales ledger
$invoiceQuery->ledger = 'sales';
// exclude voided invoices
$invoiceQuery->status = 'valid';

$invoices = array();

for ( $i = 0; true; $i += 100 ) {
    $invoiceQuery->offset = $i;
    // get the next batch of invoices
    $batch = $client->listInvoices( $invoiceQuery );
    // filter invoices by status
    array_walk( $batch, function( $invoice ) use ( &$invoices ) {
        /** @var $invoice Clearbooks_Soap_1_0_Invoice */
        $status = $invoice->status;
        if ( $status == 'approved' && strtotime( $invoice->dateDue ) <= mktime( 0, 0, 0 ) ) {
            $status = 'unpaid';
        }
        $invoices[$status][] = $invoice;
    } );
    // exit the loop if there are no more invoices to retrieve
    if ( count( $batch ) < 100 ) {
        break;
    }
}

// If you only wanted to retrieve paid invoices,
// $invoiceQuery->status = 'paid';

if ( isset( $invoices['paid'] ) ) {
    array_walk( $invoices['paid'], function( $invoice ) {
        /** @var $invoice Clearbooks_Soap_1_0_Invoice */
        $number = ( $invoice->invoice_prefix ?: 'INV' ) . str_pad( $invoice->invoiceNumber, 6, '0', STR_PAD_LEFT );
        $gross = number_format( $invoice->gross, 2 );
        echo "Invoice {$number} has been paid £{$gross}\n";
    } );
}

/*
Invoice INV000196 has been paid £5,875.00
Invoice INV000197 has been paid £5,875.00
Invoice INV000198 has been paid £11,750.00
 */

if ( isset( $invoices['approved'] ) ) {
    array_walk( $invoices['approved'], function( $invoice ) {
        /** @var $invoice Clearbooks_Soap_1_0_Invoice */
        $number  = ( $invoice->invoice_prefix ?: 'INV' ) . str_pad( $invoice->invoiceNumber, 6, '0', STR_PAD_LEFT );
        $balance = number_format( $invoice->balance, 2 );
        echo "Invoice {$number} has a balance of £{$balance}\n";
    } );
}

/*
Invoice INV000199 has a balance of £3,842.25
 */

if ( isset( $invoices['unpaid'] ) ) {
    array_walk( $invoices['unpaid'], function( $invoice ) {
        /** @var $invoice Clearbooks_Soap_1_0_Invoice */
        $number  = ( $invoice->invoice_prefix ?: 'INV' ) . str_pad( $invoice->invoiceNumber, 6, '0', STR_PAD_LEFT );
        $balance = number_format( $invoice->balance, 2 );
        echo "Invoice {$number} has an outstanding balance of £{$balance}\n";
    } );
}

/*
Invoice INV000200 has an outstanding balance of £66.89
 */