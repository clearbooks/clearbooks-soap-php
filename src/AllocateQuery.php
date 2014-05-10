<?php

namespace ClearBooks;


/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class AllocateQuery
{
    /** @var \/img/PaymentInvoice[] */
    public $invoices = array();

    /** @var string */
    public $type;

    /** @var int */
    public $paymentId;

    /** @var int */
    public $entityId;
}
//EOF AllocateQuery.php