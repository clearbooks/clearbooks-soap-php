<?php
/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class Clearbooks_Soap_1_0_Invoice
{
    /** @var \Clearbooks_Soap_1_0_Item[] */
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
    public $dateModified = '';

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

    /**
     * @var string
     * 'OUT'  => 'Out of Scope - Not on VAT Return',
     * 'UK'   => 'Goods or Services ref UK Entity',
     * 'GEU'  => 'Goods ref EU Entity',
     * 'SEU'  => 'Services ref EU Entity',
     * 'GOEU' => 'Goods ref Entity Outside EU',
     * 'SOEU' => 'Services ref Entity Outside EU',
     * 'DSEU' => 'Digital Services ref EU Entity',
     */
    public $vatTreatment = '';

    /** @var int */
    public $multicurrency = '';

    /** @var float */
    public $fxrate = 0;

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

    /** @var float */
    public $foreignCurrencyBalance = 0;
}
//EOF Invoice.php
