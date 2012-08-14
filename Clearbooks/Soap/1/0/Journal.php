<?php
/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class Clearbooks_Soap_1_0_Journal
{
    /** @var \Clearbooks_Soap_1_0_JournalLedgerItem[] */
    public $ledger = array();

    /** @var string */
    public $description;

    /** @var string */
    public $accountingDate;

    /** @var int */
    public $project;

    /** @var int */
    public $entity;
}
//EOF Journal.php