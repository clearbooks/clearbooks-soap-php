<?php

namespace ClearBooks;


/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class InvoiceQuery
{
    /** @var int[] */
    public $id = array();

    /** @var int[] */
    public $entityId = array();

    /** @var string */
    public $ledger;

    /** @var string */
    public $status = '';

    /** @var int */
    public $offset = 0;

    /** @var \DateTime */
    public $modifiedSince = '';
}
//EOF InvoiceQuery.php