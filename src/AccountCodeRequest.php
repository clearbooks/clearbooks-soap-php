<?php

namespace ClearBooks;


/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class AccountCodeRequest
{
    /** @var int */
    public $heading_id;

    /** @var string */
    public $name;

    /** @var string */
    public $default_vat_rate = '';

    /** @var int */
    public $show_sales = 0;

    /** @var int */
    public $show_purchases = 0;

    /** @var int */
    public $show_budget = 0;
}
//EOF AccountCodeRequest.php
