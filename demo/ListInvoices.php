<?php
require_once __DIR__ . '/includes.php';

// construct a query to filter returned invoices
$invoiceQuery = new \Clearbooks_Soap_1_0_InvoiceQuery();
$invoiceQuery->id[]   = 209;
$invoiceQuery->ledger = 'sales';

// execute the command
$invoices = $client->listInvoices( $invoiceQuery );
print_r( $invoices );

/*
Array
(
    [0] => Clearbooks_Soap_1_0_Invoice Object
        (
            [items] => Array
                (
                    [0] => Clearbooks_Soap_1_0_Item Object
                        (
                            [description] => Line Item #1
                            [unitPrice] => 24.99
                            [vat] => 5
                            [quantity] => 1
                            [type] => 1001001
                            [vatRate] => 0.2
                        )

                )

            [description] => API Test Invoice
            [entityId] => 16
            [invoice_id] => 209
            [invoice_prefix] => INV
            [invoiceNumber] => 204
            [reference] =>
            [dateCreated] => 2012-10-19 00:00:00
            [dateDue] => 2012-11-16 00:00:00
            [dateAccrual] => 2012-10-19 00:00:00
            [creditTerms] => 30
            [bankPaymentId] => 0
            [project] => 0
            [external_id] =>
            [status] => approved
            [statementPage] => https://secure.clearbooks.co.uk/accounting/sales/invoice_html/?source=statement&type=invoice&c=2&auth=-lHLOCMD8mOPS5qyEjiw2g
            [themeId] => 0
            [type] => S
            [vatTreatment] =>
            [multicurrency] => 0
            [gross] => 29.99
            [net] => 24.99
            [vat] => 5
            [paid] => 0
            [balance] => 29.99
        )

)
*/