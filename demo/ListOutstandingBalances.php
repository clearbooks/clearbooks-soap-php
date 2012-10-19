<?php
require_once __DIR__ . '/includes.php';
$outstandingBalances = $client->listOutstandingBalances( 'sales' );
print_r( $outstandingBalances );