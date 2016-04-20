<?php
/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1
 */
class Clearbooks_Soap_1_0 extends \SoapClient
{
    protected static $classMap = array(
        'AccountCode'                   => 'Clearbooks_Soap_1_0_AccountCode',
        'AccountCodeHeading'            => 'Clearbooks_Soap_1_0_AccountCodeHeading',
        'AccountCodeRequest'            => 'Clearbooks_Soap_1_0_AccountCodeRequest',
        'AccountCodeResult'             => 'Clearbooks_Soap_1_0_AccountCodeResult',
        'AllocateQuery'                 => 'Clearbooks_Soap_1_0_AllocateQuery',
        'BankAccount'                   => 'Clearbooks_Soap_1_0_BankAccount',
        'BankAccountListItem'           => 'Clearbooks_Soap_1_0_BankAccountListItem',
        'CreditQuery'                   => 'Clearbooks_Soap_1_0_CreditQuery',
        'CreditResponseStatus'          => 'Clearbooks_Soap_1_0_CreditResponseStatus',
        'Currency'                      => 'Clearbooks_Soap_1_0_Currency',
        'Entity'                        => 'Clearbooks_Soap_1_0_Entity',
        'EntityExtra'                   => 'Clearbooks_Soap_1_0_EntityExtra',
        'EntityOutstandingBalance'      => 'Clearbooks_Soap_1_0_EntityOutstandingBalance',
        'EntityQuery'                   => 'Clearbooks_Soap_1_0_EntityQuery',
        'Invoice'                       => 'Clearbooks_Soap_1_0_Invoice',
        'InvoiceQuery'                  => 'Clearbooks_Soap_1_0_InvoiceQuery',
        'InvoiceRef'                    => 'Clearbooks_Soap_1_0_InvoiceRef',
        'InvoiceReturn'                 => 'Clearbooks_Soap_1_0_InvoiceReturn',
        'Item'                          => 'Clearbooks_Soap_1_0_Item',
        'Journal'                       => 'Clearbooks_Soap_1_0_Journal',
        'JournalLedgerItem'             => 'Clearbooks_Soap_1_0_JournalLedgerItem',
        'JournalReturn'                 => 'Clearbooks_Soap_1_0_JournalReturn',
        'ListBankAccountsReturn'        => 'Clearbooks_Soap_1_0_ListBankAccountsReturn',
        'ListOutstandingBalancesReturn' => 'Clearbooks_Soap_1_0_ListOutstandingBalancesReturn',
        'Payment'                       => 'Clearbooks_Soap_1_0_Payment',
        'PaymentInvoice'                => 'Clearbooks_Soap_1_0_PaymentInvoice',
        'PaymentReturn'                 => 'Clearbooks_Soap_1_0_PaymentReturn',
        'Project'                       => 'Clearbooks_Soap_1_0_Project',
        'ProjectReturn'                 => 'Clearbooks_Soap_1_0_ProjectReturn',
        'RemovePayment'                 => 'Clearbooks_Soap_1_0_RemovePayment',
        'ResponseStatus'                => 'Clearbooks_Soap_1_0_ResponseStatus',
        'Theme'                         => 'Clearbooks_Soap_1_0_Theme' );

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

        $header = new SoapHeader( $this->namespace, 'authenticate', array( 'apiKey' => $this->apiKey ) );
        $this->__setSoapHeaders( array( $header ) );
    }

    /**
     * @param \Clearbooks_Soap_1_0_AllocateQuery $query
     * @return \Clearbooks_Soap_1_0_ResponseStatus
     */
    public function allocatePayment( \Clearbooks_Soap_1_0_AllocateQuery $query )
    {
        return $this->_call( 'allocatePayment', $query );
    }

    /**
     * @param \Clearbooks_Soap_1_0_AccountCodeRequest $code
     * @return \Clearbooks_Soap_1_0_AccountCodeResult
     */
    public function createAccountCode( \Clearbooks_Soap_1_0_AccountCodeRequest $code )
    {
        return $this->_call( 'createAccountCode', $code );
    }

    /**
     * @param string $bankAccount
     * @param string $statementName
     * @param \Clearbooks_Soap_1_0_BankStatementLine[] $statementLines
     */
    public function addBankStatementLines( $bankAccount, $statementName, $statementLines )
    {
        $this->_call( 'addBankStatementLines', $bankAccount, $statementName, $statementLines );
    }

    /**
     * @param \Clearbooks_Soap_1_0_CreditPartialQuery $query
     */
    public function writeOffPartial( $query )
    {
        $this->_call( 'writeOffPartial', $query );
    }

    /**
     * @param \Clearbooks_Soap_1_0_Entity $entity
     * @return int
     */
    public function createEntity( \Clearbooks_Soap_1_0_Entity $entity )
    {
        return $this->_call( 'createEntity', $entity );
    }

    /**
     * @param \Clearbooks_Soap_1_0_Invoice $invoice
     * @return \Clearbooks_Soap_1_0_InvoiceReturn
     */
    public function createInvoice( \Clearbooks_Soap_1_0_Invoice $invoice )
    {
        return $this->_call( 'createInvoice', $invoice );
    }

    /**
     * @param \Clearbooks_Soap_1_0_Invoice[] $invoices
     * @return \Clearbooks_Soap_1_0_InvoiceReturn[]
     */
    public function createInvoices( array $invoices )
    {
        return $this->_call( 'createInvoices', $invoices );
    }

    /**
     * @param \Clearbooks_Soap_1_0_Journal $project
     * @return \Clearbooks_Soap_1_0_JournalReturn
     */
    public function createJournal( \Clearbooks_Soap_1_0_Journal $project )
    {
        return $this->_call( 'createJournal', $project );
    }

    /**
     * @param \Clearbooks_Soap_1_0_Payment $payment
     * @return \Clearbooks_Soap_1_0_PaymentReturn
     */
    public function createPayment( \Clearbooks_Soap_1_0_Payment $payment )
    {
        return $this->_call( 'createPayment', $payment );
    }

    /**
     * @param \Clearbooks_Soap_1_0_Payment[] $payments
     * @return \Clearbooks_Soap_1_0_PaymentReturn
     */
    public function createPayments( array $payments )
    {
        return $this->_call( 'createPayments', $payments );
    }

    /**
     * @param \Clearbooks_Soap_1_0_Project $project
     * @return \Clearbooks_Soap_1_0_ProjectReturn
     */
    public function createProject( \Clearbooks_Soap_1_0_Project $project )
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
     * @return \Clearbooks_Soap_1_0_EntityOutstandingBalance
     */
    public function getEntityOutstandingBalance( $entityId, $type )
    {
        return $this->_call( 'getEntityOutstandingBalance', $entityId, $type );
    }

    /**
     * @param \Clearbooks_Soap_1_0_ExchangeRateRequest $request
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
     * @return \Clearbooks_Soap_1_0_AccountCodeHeading[]
     */
    public function listAccountCodeHeadings()
    {
        return $this->_call( 'listAccountCodeHeadings' );
    }

    /**
     * @return \Clearbooks_Soap_1_0_AccountCode[]
     */
    public function listAccountCodes()
    {
        return $this->_call( 'listAccountCodes' );
    }

    /**
     * @return \Clearbooks_Soap_1_0_ListBankAccountsReturn
     */
    public function listBankAccounts()
    {
        return $this->_call( 'listBankAccounts' );
    }

    /**
     * @return \Clearbooks_Soap_1_0_Currency[]
     */
    public function listCurrencies()
    {
        return $this->_call( 'listCurrencies' );
    }

    /**
     * @param \Clearbooks_Soap_1_0_EntityQuery $query
     * @return \Clearbooks_Soap_1_0_Entity[]
     */
    public function listEntities( \Clearbooks_Soap_1_0_EntityQuery $query = null )
    {
        return $this->_call( 'listEntities', $query );
    }

    /**
     * @param \Clearbooks_Soap_1_0_InvoiceQuery $query
     * @return \Clearbooks_Soap_1_0_Invoice[]
     */
    public function listInvoices( \Clearbooks_Soap_1_0_InvoiceQuery $query )
    {
        return $this->_call( 'listInvoices', $query );
    }

    /**
     * @param string $type
     * @param int $limit
     * @return \Clearbooks_Soap_1_0_ListOutstandingBalancesReturn[]
     */
    public function listOutstandingBalances( $type, $limit = 10 )
    {
        return $this->_call( 'listOutstandingBalances', $type, $limit );
    }

    /**
     * @param int $offset
     * @return \Clearbooks_Soap_1_0_Project[]
     */
    public function listProjects( $offset = 0 )
    {
        return $this->_call( 'listProjects', $offset );
    }

    /**
     * @return \Clearbooks_Soap_1_0_Theme[]
     */
    public function listThemes()
    {
        return $this->_call( 'listThemes' );
    }

    /**
     * @param int $codeId
     * @param \Clearbooks_Soap_1_0_AccountCodeRequest $code
     * @return \Clearbooks_Soap_1_0_AccountCodeResult
     */
    public function updateAccountCode( $codeId, \Clearbooks_Soap_1_0_AccountCodeRequest $code )
    {
        return $this->_call( 'updateAccountCode', $codeId, $code );
    }

    /**
     * @param int $entityId
     * @param \Clearbooks_Soap_1_0_Entity $entity
     * @return int
     */
    public function updateEntity( $entityId, \Clearbooks_Soap_1_0_Entity $entity )
    {
        return $this->_call( 'updateEntity', $entityId, $entity );
    }

    /**
     * @param int $projectId
     * @param \Clearbooks_Soap_1_0_Project $project
     * @return \Clearbooks_Soap_1_0_ProjectReturn
     */
    public function updateProject( $projectId, \Clearbooks_Soap_1_0_Project $project )
    {
        return $this->_call( 'updateProject', $projectId, $project );
    }

    /**
     * @param \Clearbooks_Soap_1_0_InvoiceRef $invoice
     * @return \Clearbooks_Soap_1_0_ResponseStatus
     */
    public function voidInvoice( \Clearbooks_Soap_1_0_InvoiceRef $invoice )
    {
        return $this->_call( 'voidInvoice', $invoice );
    }

    /**
     * @param \Clearbooks_Soap_1_0_RemovePayment $payment
     * @return \Clearbooks_Soap_1_0_ResponseStatus
     */
    public function voidPayment( \Clearbooks_Soap_1_0_RemovePayment $payment )
    {
        return $this->_call( 'voidPayment', $payment );
    }

    /**
     * @param \Clearbooks_Soap_1_0_CreditQuery $query
     * @return \Clearbooks_Soap_1_0_CreditResponseStatus
     */
    public function writeOff( \Clearbooks_Soap_1_0_CreditQuery $query )
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