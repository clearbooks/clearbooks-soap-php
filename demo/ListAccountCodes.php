<?php
require_once __DIR__ . '/includes.php';

// execute the command
$accountCodes = $client->listAccountCodes();
print_r( $accountCodes );

/*
Array
(
    [0] => Clearbooks_Soap_1_0_AccountCode Object
        (
            [id] => 1001001
            [account_name] => Revenue
            [group_name] => Revenue
            [default_vat_rate] =>
            [show_sales] => 1
            [show_purchases] =>
        )

...

)
*/