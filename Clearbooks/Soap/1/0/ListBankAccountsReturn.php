<?php
/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class Clearbooks_Soap_1_0_ListBankAccountsReturn
{
    /** @var \Clearbooks_Soap_1_0_BankAccountListItem[] */
    public $bankAccounts = array();

    /** @var float */
    public $total;
}
//EOF ListBankAccountsReturn.php