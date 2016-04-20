<?php
/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 * @minOccurs 1
 */
class Clearbooks_Soap_1_0_Item
{
    /** @var string */
    public $description;

    /** @var float */
    public $unitPrice;

    /** @var float */
    public $vat = '';

    /** @var float */
    public $quantity = 1;

    /** @var int */
    public $type;

    /** @var string */
    public $vatRate = '0';

    /** @var int */
    public $project = 0;
}
//EOF Item.php
