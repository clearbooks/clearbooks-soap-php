<?php
require "../vendor/autoload.php";

// create the credit query
$creditQuery = new \ClearBooks\CreditQuery();
$creditQuery->accountCode = 7501001;
$creditQuery->dateCreated = date( 'Y-m-d' );
$creditQuery->description = 'Invoice Write Off';
$creditQuery->id          = 213;
$creditQuery->ledger      = 'sales';

$client = new \ClearBooks\Client( 'demo' );

$creditResponseStatus = $client->writeOff( $creditQuery );
var_dump( $creditResponseStatus );

/*
Clearbooks_Soap_1_0_CreditResponseStatus Object
(
    [id] => 213
    [msg] => Credit applied against invoice
)
*/