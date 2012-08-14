<?php
/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class Clearbooks_Soap_1_0_InvoiceQuery
{
    /** @var int[] */
    protected $id = array();

    /** @var int[] */
    protected $entityId = array();

    /** @var string */
    protected $ledger;

    /** @var string */
    protected $status;

    /** @var int */
    protected $offset;

    /** @var \DateTime */
    protected $modifiedSince;
}
//EOF InvoiceQuery.php