<?php
require "../vendor/autoload.php";

$client = new \ClearBooks\Client( 'demo' );

$entityOutstandingBalance = $client->getEntityOutstandingBalance( 16, 'sales' );
print_r( $entityOutstandingBalance );

/*
Clearbooks_Soap_1_0_EntityOutstandingBalance Object
(
    [outstanding] => 6578.67
    [overdue] => 6548.68
)
*/