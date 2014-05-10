<?php

namespace ClearBooks;


/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class ExchangeRateRequest
{
    /** @var string */
    public $baseCurrency = 'GBP';

    /** @var \DateTime */
    public $date = '';

    /** @var string */
    public $targetCurrency;
}
//EOF ExchangeRateRequest.php