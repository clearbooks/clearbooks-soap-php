<?php
require "../vendor/autoload.php";

// construct the request
$request = new \ClearBooks\ExchangeRateRequest();
$request->baseCurrency   = 'GBP'; // default
$request->targetCurrency = 'USD';
$request->date           = '2012-10-05';


$client = new \ClearBooks\Client( 'demo' );
$rate = $client->getExchangeRate( $request );
print_r( $rate );

/*
1.6184948525068
*/