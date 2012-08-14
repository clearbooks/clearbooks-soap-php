<?php
/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class Clearbooks_Soap_1_0_Entity
{
    /** @var \Clearbooks_Soap_1_0_EntityExtra */
    public $supplier;

    /** @var \Clearbooks_Soap_1_0_EntityExtra */
    public $customer;

    /** @var \Clearbooks_Soap_1_0_BankAccount */
    public $bankAccount;

    /** @var int */
    public $id;

    /** @var string */
    public $company_name;

    /** @var string */
    public $contact_name;

    /** @var string */
    public $address1;

    /** @var string */
    public $town;

    /** @var string */
    public $county;

    /** @var string */
    public $country;

    /** @var string */
    public $postcode;

    /** @var string */
    public $email;

    /** @var string */
    public $phone1;

    /** @var string */
    public $building;

    /** @var string */
    public $address2;

    /** @var string */
    public $phone2;

    /** @var string */
    public $fax;

    /** @var string */
    public $website;

    /** @var \DateTime */
    public $date_modified;

    /** @var string */
    public $external_id;

    /** @var string */
    public $vat_number;

    /** @var string */
    public $company_number;

    /** @var string */
    public $statement_url;
}
//EOF Entity.php