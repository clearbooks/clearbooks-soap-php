<?php
require_once __DIR__ . '/includes.php';
$bankAccounts = $client->listBankAccounts();
print_r( $bankAccounts );