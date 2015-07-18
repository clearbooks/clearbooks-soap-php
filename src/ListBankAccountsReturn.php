<?php

namespace ClearBooks;


/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1/0
 */
class ListBankAccountsReturn
{
    /** @var \/img/BankAccountListItem[] */
    public $bankAccounts = array();

    /** @var float */
    public $total;
}
//EOF ListBankAccountsReturn.php