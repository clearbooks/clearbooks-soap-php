<?php
require_once __DIR__ . '/includes.php';

// create the credit query
$creditQuery = new \Clearbooks_Soap_1_0_CreditQuery();
$creditQuery->accountCode = 7501001;
$creditQuery->dateCreated = date( 'Y-m-d' );
$creditQuery->description = 'Invoice Write Off';
$creditQuery->id          = 213;
$creditQuery->ledger      = 'sales';

$creditResponseStatus = $client->writeOff( $creditQuery );
print_r( $creditResponseStatus );

/*
Clearbooks_Soap_1_0_CreditResponseStatus Object
(
    [id] => 213
    [msg] => Credit applied against invoice
)
*/