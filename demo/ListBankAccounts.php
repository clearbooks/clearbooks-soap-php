<?php
require "../vendor/autoload.php";

$client = new \ClearBooks\Client( 'demo' );
$bankAccounts = $client->listBankAccounts();
var_dump( $bankAccounts );