<?php
/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class Clearbooks_Soap_1_0_AccountCode
{
    /** @var int */
    public $id;

    /** @var string */
    public $account_name;

    /** @var string */
    public $group_name;

    /** @var string */
    public $default_vat_rate;

    /** @var bool */
    public $show_sales;

    /** @var bool */
    public $show_purchases;
}
//EOF AccountCode.php