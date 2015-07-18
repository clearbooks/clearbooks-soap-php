<?php

namespace ClearBooks;


/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class Invoice
{
    /** @var \/img/Item[] */
    public $items = array();

    /** @var string */
    public $description;

    /** @var int */
    public $entityId;

    /** @var int */
    public $invoice_id = 0;

    /** @var string */
    public $invoice_prefix = '';

    /** @var int */
    public $invoiceNumber = 0;

    /** @var string */
    public $reference = '';

    /** @var \DateTime */
    public $dateCreated;

    /** @var \DateTime */
    public $dateDue = '';

    /** @var \DateTime */
    public $dateAccrual = '';

    /** @var int */
    public $creditTerms = 0;

    /** @var int */
    public $bankPaymentId = 0;

    /** @var int */
    public $project = 0;

    /** @var string */
    public $external_id = '';

    /** @var string */
    public $status = '';

    /** @var string */
    public $statementPage = '';

    /** @var int */
    public $themeId = 1;

    /** @var string */
    public $type;

    /** @var string */
    public $vatTreatment = '';

    /** @var int */
    public $multicurrency = '';

    /** @var float */
    public $gross = 0;

    /** @var float */
    public $net = 0;

    /** @var float */
    public $vat = 0;

    /** @var float */
    public $paid = 0;

    /** @var float */
    public $balance = 0;
}
//EOF Invoice.php