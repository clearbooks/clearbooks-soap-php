<?php
/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class Clearbooks_Soap_1_0_BankAccountListItem
{
    /** @var int */
    public $account_type;

    /** @var float */
    public $balance;

    /** @var string */
    public $bank_name;

    /** @var int */
    public $currency;

    /** @var string */
    public $gl_account_code;

    /** @var int */
    public $id;

    /** @var \DateTime */
    public $last_date;

    /** @var float */
    public $total_mc = '';
}
//EOF BankAccountListItem.php