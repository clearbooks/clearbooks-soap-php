<?php
require_once __DIR__ . '/includes.php';
$outstandingBalances = $client->listOutstandingBalances( 'sales' );
print_r( $outstandingBalances );

/*
Array
(
    [0] => Clearbooks_Soap_1_0_ListOutstandingBalancesReturn Object
        (
            [entity] => 16
            [balance] => 6608.66
        )

    [1] => Clearbooks_Soap_1_0_ListOutstandingBalancesReturn Object
        (
            [entity] => 17
            [balance] => 3842.25
        )

    [2] => Clearbooks_Soap_1_0_ListOutstandingBalancesReturn Object
        (
            [entity] => 20
            [balance] => 2469.91
        )

    [3] => Clearbooks_Soap_1_0_ListOutstandingBalancesReturn Object
        (
            [entity] => 18
            [balance] => 1982.6
        )

    [4] => Clearbooks_Soap_1_0_ListOutstandingBalancesReturn Object
        (
            [entity] => 19
            [balance] => 1200
        )

    [5] => Clearbooks_Soap_1_0_ListOutstandingBalancesReturn Object
        (
            [entity] => 26
            [balance] => 360
        )

)
*/