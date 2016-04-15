<?php
/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class Clearbooks_Soap_1_0_CreditPartialQuery
{
    /** @var int */
    public $invoiceId;

    /** @var int */
    public $creditId;

    /** @var float */
    public $amountToAllocate;

    /**  @var string */
    public $ledger;

}
//EOF CreditPartialQuery.php