<?php
/**
 * @author Clear Books <api@clearbooks.co.uk>
 * @version 1.0
 * @package Clearbooks
 * @subpackage Soap/1
 *
 * @method \Clearbooks_Soap_1_0_ResponseStatus allocatePayment( \Clearbooks_Soap_1_0_AllocateQuery $query )
 * @method \Clearbooks_Soap_1_0_AccountCodeResult createAccountCode( \Clearbooks_Soap_1_0_AccountCodeRequest $code )
 * @method void addBankStatementLines( string $bankAccount, string $statementName, \Clearbooks_Soap_1_0_BankStatementLine[] $statementLines )
 * @method void writeOffPartial( \Clearbooks_Soap_1_0_CreditPartialQuery $query )
 * @method int createEntity( \Clearbooks_Soap_1_0_Entity $entity )
 * @method \Clearbooks_Soap_1_0_InvoiceReturn createInvoice( \Clearbooks_Soap_1_0_Invoice $invoice )
 * @method \Clearbooks_Soap_1_0_InvoiceReturn[] createInvoices( \Clearbooks_Soap_1_0_Invoice[] $invoices )
 * @method \Clearbooks_Soap_1_0_JournalReturn createJournal( \Clearbooks_Soap_1_0_Journal $project )
 * @method \Clearbooks_Soap_1_0_PaymentReturn createPayment( \Clearbooks_Soap_1_0_Payment $payment )
 * @method \Clearbooks_Soap_1_0_PaymentReturn createPayments( \Clearbooks_Soap_1_0_Payment[] $payments )
 * @method \Clearbooks_Soap_1_0_ProjectReturn createProject( \Clearbooks_Soap_1_0_Project $project )
 * @method bool deleteEntity( int $entityId )
 * @method bool deleteJournal( int $journalId )
 * @method int getEntityIdFromExternalId( string $externalId )
 * @method \Clearbooks_Soap_1_0_EntityOutstandingBalance getEntityOutstandingBalance( int $entityId, string $type )
 * @method float getExchangeRate( \Clearbooks_Soap_1_0_ExchangeRateRequest $request )
 * @method int getInvoiceIdFromInvoiceNumber( string $type, string $invoicePrefix, string $invoiceNumber )
 * @method int getPaymentIdFromExternalId( string $externalId )
 * @method \Clearbooks_Soap_1_0_AccountCodeHeading[] listAccountCodeHeadings()
 * @method \Clearbooks_Soap_1_0_AccountCode[] listAccountCodes()
 * @method \Clearbooks_Soap_1_0_ListBankAccountsReturn listBankAccounts()
 * @method \Clearbooks_Soap_1_0_Currency[] listCurrencies()
 * @method \Clearbooks_Soap_1_0_Entity[] listEntities( \Clearbooks_Soap_1_0_EntityQuery $query )
 * @method \Clearbooks_Soap_1_0_Invoice[] listInvoices( \Clearbooks_Soap_1_0_InvoiceQuery $query )
 * @method \Clearbooks_Soap_1_0_ListOutstandingBalancesReturn[] listOutstandingBalances( string $type, int $limit )
 * @method \Clearbooks_Soap_1_0_Project[] listProjects( int $offset )
 * @method \Clearbooks_Soap_1_0_Theme[] listThemes()
 * @method \Clearbooks_Soap_1_0_AccountCodeResult updateAccountCode( int $codeId, \Clearbooks_Soap_1_0_AccountCodeRequest $code )
 * @method int updateEntity( int $entityId, \Clearbooks_Soap_1_0_Entity $entity )
 * @method \Clearbooks_Soap_1_0_ProjectReturn updateProject( int $projectId, \Clearbooks_Soap_1_0_Project $project )
 * @method \Clearbooks_Soap_1_0_ResponseStatus voidInvoice( \Clearbooks_Soap_1_0_InvoiceRef $invoice )
 * @method \Clearbooks_Soap_1_0_ResponseStatus voidPayment( \Clearbooks_Soap_1_0_RemovePayment $payment )
 * @method \Clearbooks_Soap_1_0_CreditResponseStatus writeOff( \Clearbooks_Soap_1_0_CreditQuery $query )
 * @method int createBankAccount( \Clearbooks_Soap_1_0_Bank_BankAccount $bankAccount )
 * @method \Clearbooks_Soap_1_0_PaymentMethod[] listPaymentMethods()
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

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @var string
     */
    protected $namespace;

    /**
     * @param string $apiKey
     * @param string $wsdl
     * @param array $options
     * @throws Exception
     */
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
     * @param string $xml
     * @return string
     */
    private function _formatXml( $xml )
    {
        $doc = new \DomDocument( '1.0' );
        $doc->loadXML( $xml );
        $doc->formatOutput = true;
        return $doc->saveXML();
    }
}
//EOF 0.php
