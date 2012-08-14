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
    public $invoice_id;

    /** @var string */
    public $invoice_prefix;

    /** @var int */
    public $invoiceNumber;

    /** @var string */
    public $reference;

    /** @var \DateTime */
    public $dateCreated;

    /** @var \DateTime */
    public $dateDue;

    /** @var \DateTime */
    public $dateAccrual;

    /** @var int */
    public $creditTerms;

    /** @var int */
    public $bankPaymentId;

    /** @var int */
    public $project;

    /** @var string */
    public $external_id;

    /** @var string */
    public $status;

    /** @var string */
    public $statementPage;

    /** @var int */
    public $themeId;

    /** @var string */
    public $type;

    /** @var string */
    public $vatTreatment;

    /** @var int */
    public $multicurrency;
}
//EOF Invoice.php