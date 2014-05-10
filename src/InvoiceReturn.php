<?php

namespace ClearBooks;


/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class InvoiceReturn
{
    /** @var float */
    public $due;

    /** @var int */
    public $invoice_id;

    /** @var string */
    public $invoice_prefix;

    /** @var string */
    public $invoice_number;
}
//EOF InvoiceReturn.php