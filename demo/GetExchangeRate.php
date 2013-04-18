<?php
require_once __DIR__ . '/includes.php';

// construct the request
$request = new \Clearbooks_Soap_1_0_ExchangeRateRequest();
$request->baseCurrency   = 'GBP'; // default
$request->targetCurrency = 'USD';
$request->date           = '2012-10-05';

$rate = $client->getExchangeRate( $request );
print_r( $rate );

/*
1.6184948525068
*/