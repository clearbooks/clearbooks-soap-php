<?php

namespace ClearBooks;

/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1
 */
class Client extends \SoapClient
{
    protected static $classMap = array(
        'AccountCode'                   => '\ClearBooks\AccountCode',
        'AccountCodeHeading'            => '\ClearBooks\AccountCodeHeading',
        'AccountCodeRequest'            => '\ClearBooks\AccountCodeRequest',
        'AccountCodeResult'             => '\ClearBooks\AccountCodeResult',
        'AllocateQuery'                 => '\ClearBooks\AllocateQuery',
        'BankAccount'                   => '\ClearBooks\BankAccount',
        'BankAccountListItem'           => '\ClearBooks\BankAccountListItem',
        'CreditQuery'                   => '\ClearBooks\CreditQuery',
        'CreditResponseStatus'          => '\ClearBooks\CreditResponseStatus',
        'Currency'                      => '\ClearBooks\Currency',
        'Entity'                        => '\ClearBooks\Entity',
        'EntityExtra'                   => '\ClearBooks\EntityExtra',
        'EntityOutstandingBalance'      => '\ClearBooks\EntityOutstandingBalance',
        'EntityQuery'                   => '\ClearBooks\EntityQuery',
        'Invoice'                       => '\ClearBooks\Invoice',
        'InvoiceQuery'                  => '\ClearBooks\InvoiceQuery',
        'InvoiceRef'                    => '\ClearBooks\InvoiceRef',
        'InvoiceReturn'                 => '\ClearBooks\InvoiceReturn',
        'Item'                          => '\ClearBooks\Item',
        'Journal'                       => '\ClearBooks\Journal',
        'JournalLedgerItem'             => '\ClearBooks\JournalLedgerItem',
        'JournalReturn'                 => '\ClearBooks\JournalReturn',
        'ListBankAccountsReturn'        => '\ClearBooks\ListBankAccountsReturn',
        'ListOutstandingBalancesReturn' => '\ClearBooks\ListOutstandingBalancesReturn',
        'Payment'                       => '\ClearBooks\Payment',
        'PaymentInvoice'                => '\ClearBooks\PaymentInvoice',
        'PaymentReturn'                 => '\ClearBooks\PaymentReturn',
        'Project'                       => '\ClearBooks\Project',
        'ProjectReturn'                 => '\ClearBooks\ProjectReturn',
        'RemovePayment'                 => '\ClearBooks\RemovePayment',
        'ResponseStatus'                => '\ClearBooks\ResponseStatus',
        'Theme'                         => '\ClearBooks\Theme' );

    protected $apiKey;
    protected $namespace;

    public function __construct( $apiKey, $wsdl = '', $options = array() )
    {
        if ( !$apiKey ) {
            throw new \Exception( 'An API Key must be specified' );
        }

        $this->apiKey = $apiKey;

        if ( !$wsdl ) {
            $wsdl = 'https://secure.clearbooks.co.uk/api/accounting/wsdl/';
        }

        if ( !is_array( $options ) ) {
            $options = array();
        }

        if ( !array_key_exists( 'trace', $options ) ) {
            $options['trace'] = 1;
        }

        foreach ( self::$classMap as $key => $value ) {
            if ( !isset( $options['classmap'][$key] ) ) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct( $wsdl, $options );

        $this->namespace = str_replace( 'wsdl', 'soap', $wsdl );

        $header = new \SoapHeader( $this->namespace, 'authenticate', array( 'apiKey' => $this->apiKey ) );
        $this->__setSoapHeaders( array( $header ) );
    }

    /**
     * @param \ClearBooks\AllocateQuery $query
     * @return \ClearBooks\ResponseStatus
     */
    public function allocatePayment( \ClearBooks\AllocateQuery $query )
    {
        return $this->_call( 'allocatePayment', $query );
    }

    /**
     * @param \ClearBooks\AccountCodeRequest $code
     * @return \ClearBooks\AccountCodeResult
     */
    public function createAccountCode( \ClearBooks\AccountCodeRequest $code )
    {
        return $this->_call( 'createAccountCode', $code );
    }

    /**
     * @param \ClearBooks\Entity $entity
     * @return int
     */
    public function createEntity( \ClearBooks\Entity $entity )
    {
        return $this->_call( 'createEntity', $entity );
    }

    /**
     * @param \ClearBooks\Invoice $invoice
     * @return \ClearBooks\InvoiceReturn
     */
    public function createInvoice( \ClearBooks\Invoice $invoice )
    {
        return $this->_call( 'createInvoice', $invoice );
    }

    /**
     * @param \ClearBooks\Invoice[] $invoices
     * @return \ClearBooks\InvoiceReturn[]
     */
    public function createInvoices( array $invoices )
    {
        return $this->_call( 'createInvoices', $invoices );
    }

    /**
     * @param \ClearBooks\Journal $project
     * @return \ClearBooks\JournalReturn
     */
    public function createJournal( \ClearBooks\Journal $project )
    {
        return $this->_call( 'createJournal', $project );
    }

    /**
     * @param \ClearBooks\Payment $payment
     * @return \ClearBooks\PaymentReturn
     */
    public function createPayment( \ClearBooks\Payment $payment )
    {
        return $this->_call( 'createPayment', $payment );
    }

    /**
     * @param \ClearBooks\Payment[] $payments
     * @return \ClearBooks\PaymentReturn
     */
    public function createPayments( array $payments )
    {
        return $this->_call( 'createPayments', $payments );
    }

    /**
     * @param \ClearBooks\Project $project
     * @return \ClearBooks\ProjectReturn
     */
    public function createProject( \ClearBooks\Project $project )
    {
        return $this->_call( 'createProject', $project );
    }

    /**
     * @param int $entityId
     * @return bool
     */
    public function deleteEntity( $entityId )
    {
        return $this->_call( 'deleteEntity', $entityId );
    }

    /**
     * @param int $journalId
     * @return bool
     */
    public function deleteJournal( $journalId )
    {
        return $this->_call( 'deleteJournal', $journalId );
    }

    /**
     * @param string $externalId
     * @return int
     */
    public function getEntityIdFromExternalId( $externalId )
    {
        return $this->_call( 'getEntityIdFromExternalId', $externalId );
    }

    /**
     * @param int $entityId
     * @param string $type
     * @return \ClearBooks\EntityOutstandingBalance
     */
    public function getEntityOutstandingBalance( $entityId, $type )
    {
        return $this->_call( 'getEntityOutstandingBalance', $entityId, $type );
    }

    /**
     * @param \ClearBooks\ExchangeRateRequest $request
     * @return float
     */
    public function getExchangeRate( $request )
    {
        return $this->_call( 'getExchangeRate', $request );
    }

    /**
     * @param string $type
     * @param string $invoicePrefix
     * @param string $invoiceNumber
     * @return int
     */
    public function getInvoiceIdFromInvoiceNumber( $type, $invoicePrefix, $invoiceNumber )
    {
        return $this->_call( 'getInvoiceIdFromInvoiceNumber', $type, $invoicePrefix, $invoiceNumber );
    }

    /**
     * @param string $externalId
     * @return int
     */
    public function getPaymentIdFromExternalId( $externalId )
    {
        return $this->_call( 'getPaymentIdFromExternalId', $externalId );
    }

    /**
     * @return \ClearBooks\AccountCodeHeading[]
     */
    public function listAccountCodeHeadings()
    {
        return $this->_call( 'listAccountCodeHeadings' );
    }

    /**
     * @return \ClearBooks\AccountCode[]
     */
    public function listAccountCodes()
    {
        return $this->_call( 'listAccountCodes' );
    }

    /**
     * @return \ClearBooks\ListBankAccountsReturn
     */
    public function listBankAccounts()
    {
        return $this->_call( 'listBankAccounts' );
    }

    /**
     * @return \ClearBooks\Currency[]
     */
    public function listCurrencies()
    {
        return $this->_call( 'listCurrencies' );
    }

    /**
     * @param \ClearBooks\EntityQuery $query
     * @return \ClearBooks\Entity[]
     */
    public function listEntities( \ClearBooks\EntityQuery $query = null )
    {
        return $this->_call( 'listEntities', $query );
    }

    /**
     * @param \ClearBooks\InvoiceQuery $query
     * @return \ClearBooks\Invoice[]
     */
    public function listInvoices( \ClearBooks\InvoiceQuery $query )
    {
        return $this->_call( 'listInvoices', $query );
    }

    /**
     * @param string $type
     * @param int $limit
     * @return \ClearBooks\ListOutstandingBalancesReturn[]
     */
    public function listOutstandingBalances( $type, $limit = 10 )
    {
        return $this->_call( 'listOutstandingBalances', $type, $limit );
    }

    /**
     * @param int $offset
     * @return \ClearBooks\Project[]
     */
    public function listProjects( $offset = 0 )
    {
        return $this->_call( 'listProjects', $offset );
    }

    /**
     * @return \ClearBooks\Theme[]
     */
    public function listThemes()
    {
        return $this->_call( 'listThemes' );
    }

    /**
     * @param int $codeId
     * @param \ClearBooks\AccountCodeRequest $code
     * @return \ClearBooks\AccountCodeResult
     */
    public function updateAccountCode( $codeId, \ClearBooks\AccountCodeRequest $code )
    {
        return $this->_call( 'updateAccountCode', $codeId, $code );
    }

    /**
     * @param int $entityId
     * @param \ClearBooks\Entity $entity
     * @return int
     */
    public function updateEntity( $entityId, \ClearBooks\Entity $entity )
    {
        return $this->_call( 'updateEntity', $entityId, $entity );
    }

    /**
     * @param int $projectId
     * @param \ClearBooks\Project $project
     * @return \ClearBooks\ProjectReturn
     */
    public function updateProject( $projectId, \ClearBooks\Project $project )
    {
        return $this->_call( 'updateProject', $projectId, $project );
    }

    /**
     * @param \ClearBooks\InvoiceRef $invoice
     * @return \ClearBooks\ResponseStatus
     */
    public function voidInvoice( \ClearBooks\InvoiceRef $invoice )
    {
        return $this->_call( 'voidInvoice', $invoice );
    }

    /**
     * @param \ClearBooks\RemovePayment $payment
     * @return \ClearBooks\ResponseStatus
     */
    public function voidPayment( \ClearBooks\RemovePayment $payment )
    {
        return $this->_call( 'voidPayment', $payment );
    }

    /**
     * @param \ClearBooks\CreditQuery $query
     * @return \ClearBooks\CreditResponseStatus
     */
    public function writeOff( \ClearBooks\CreditQuery $query )
    {
        return $this->_call( 'writeOff', $query );
    }

    /**
     * {@inheritDoc}
     */
    public function __getLastResponse()
    {
        return $this->_formatXml( parent::__getLastResponse() );
    }

    /**
     * {@inheritDoc}
     */
    public function __getLastRequest()
    {
        return $this->_formatXml( parent::__getLastRequest() );
    }

    /**
     * @param $name
     * @param null $parameter
     * @param null $_
     * @return mixed
     */
    protected function _call( $name, $parameter = null, $_ = null )
    {
        $args = func_get_args();
        array_shift( $args );
        return $this->__soapCall( $name, $args, array( 'uri' => $this->namespace, 'soapaction' => '#' . $name ) );
    }

    /**
     * @param $string
     * @return string
     */
    private function _formatXml( $string )
    {
        $doc = new \DomDocument( '1.0' );
        $doc->loadXML( $string );
        $doc->formatOutput = true;
        return $doc->saveXML();
    }
}
//EOF 0.php
