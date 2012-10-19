<?php
require_once __DIR__ . '/includes.php';
$bankAccounts = $client->listBankAccounts();
print_r( $bankAccounts );

/*
Clearbooks_Soap_1_0_ListBankAccountsReturn Object
(
    [bankAccounts] => Array
        (
            [0] => Clearbooks_Soap_1_0_BankAccountListItem Object
                (
                    [account_type] => 0
                    [balance] => 38253.83
                    [bank_name] => HSBC
                    [currency] => 1
                    [gl_account_code] => 7502004
                    [id] => 2
                    [last_date] => 23 Jul 2010
                    [total_mc] =>
                )

            [1] => Clearbooks_Soap_1_0_BankAccountListItem Object
                (
                    [account_type] => 0
                    [balance] => 18768.89
                    [bank_name] => Barclays
                    [currency] => 1
                    [gl_account_code] => 7502001
                    [id] => 1
                    [last_date] => 24 Mar 2011
                    [total_mc] =>
                )

        )

    [total] => 57022.72
)
*/