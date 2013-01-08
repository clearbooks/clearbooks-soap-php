<?php
require_once __DIR__ . '/includes.php';

// construct a query to filter returned invoices
$entityQuery = new \Clearbooks_Soap_1_0_EntityQuery();
$entityQuery->id[] = 8;
$entityQuery->type = 'supplier';

// execute the command
$entities = $client->listEntities( $entityQuery );
print_r( $entities );

/*
Array
(
    [0] => Clearbooks_Soap_1_0_Entity Object
        (
            [supplier] => Clearbooks_Soap_1_0_EntityExtra Object
                (
                    [default_account_code] => 0
                    [default_vat_rate] => 0.2
                    [default_credit_terms] => 0
                )

            [customer] => Clearbooks_Soap_1_0_EntityExtra Object
                (
                    [default_account_code] => 0
                    [default_vat_rate] => 0.00:Out
                    [default_credit_terms] => 30
                )

            [bankAccount] => Clearbooks_Soap_1_0_BankAccount Object
                (
                    [bankName] =>
                    [name] =>
                    [sortcode] =>
                    [accountNumber] =>
                )

            [id] => 8
            [company_name] => Fubra Limited
            [contact_name] =>
            [address1] => Church Hill
            [town] => Aldershot
            [county] => Hampshire
            [country] => GB
            [postcode] => GU12 4RQ
            [email] =>
            [phone1] =>
            [building] => Manor Coach House
            [address2] =>
            [phone2] =>
            [fax] =>
            [website] =>
            [date_modified] => 2010-09-16 16:34:42
            [external_id] => 0
            [vat_number] =>
            [company_number] =>
            [statement_url] => https://secure.clearbooks.co.uk/s/2:333e2ce22db288036ec67ca6056c5a7b
        )

)
*/