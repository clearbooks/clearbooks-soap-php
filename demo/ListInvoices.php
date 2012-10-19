<?php
require_once __DIR__ . '/includes.php';

// construct a query to filter returned invoices
$invoiceQuery = new \Clearbooks_Soap_1_0_InvoiceQuery();
$invoiceQuery->id[]   = 209;
$invoiceQuery->ledger = 'sales';

// execute the command
$invoices = $client->listInvoices( $invoiceQuery );
print_r( $invoices );