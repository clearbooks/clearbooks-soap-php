<?php

namespace ClearBooks;

/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class CreditQuery
{
    /** @var \DateTime */
    public $dateCreated;

    /** @var string */
    public $description;

    /** @var string */
    public $ledger;

    /** @var string */
    public $accountCode;

    /** @var int */
    public $id;
}
//EOF CreditQuery.php