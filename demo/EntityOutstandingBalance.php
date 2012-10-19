<?php
require_once __DIR__ . '/includes.php';
$entityOutstandingBalance = $client->getEntityOutstandingBalance( 16, 'sales' );
print_r( $entityOutstandingBalance );