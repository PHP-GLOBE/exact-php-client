<?php

namespace Picqer\Financials\Exact;

/**
 * Class SalesInvoiceLine.
 *
 * @see https://start.exactonline.nl/docs/HlpRestAPIResourcesDetails.aspx?name=SalesInvoiceSalesInvoiceLines
 *
 * @property string $ID Primary key
 * @property float $AmountDC Amount in the default currency of the company. For almost all lines this can be calculated like: AmountDC = AmountFC * RateFC
 * @property float $AmountFC For normal lines it's the amount excluding VAT
 * @property string $CostCenter Reference to Cost center
 * @property string $CostCenterDescription Description of CostCenter
 * @property string $CostUnit Reference to Cost unit
 * @property string $CostUnitDescription Description of CostUnit
 * @property string $CustomerItemCode Code the customer uses for this item
 * @property string $DeliveryDate Delivery date of an item in a sales invoice. This is used for VAT on prepayments, only if sales order is not used in the license.
 * @property string $Description Description. Can be different for header and lines
 * @property float $Discount Discount given on the default price. Discount = (DefaultPrice of Item - PriceItem in line) / DefaultPrice of Item
 * @property int $Division Division code
 * @property string $Employee Link to Employee originating from time and cost transactions
 * @property string $EmployeeFullName Name of employee
 * @property string $EndDate EndDate is used to store the last date of a period. EndDate is used in combination with StartDate
 * @property float $ExtraDutyAmountFC Extra duty amount in the currency of the transaction. Both extra duty amount and VAT amount need to be specified in order to differ this property from automatically calculated.
 * @property float $ExtraDutyPercentage Extra duty percentage
 * @property string $GLAccount The GL Account of the sales invoice line. This field is mandatory. This field is generated based on the revenue account of the item (or the related item group). G/L Account is also used to determine whether the costcenter / costunit is mandatory
 * @property string $GLAccountDescription Description of GLAccount
 * @property string $InvoiceID The InvoiceID identifies the sales invoice. All the lines of a sales invoice have the same InvoiceID
 * @property string $Item Reference to the item that is sold in this sales invoice line
 * @property string $ItemCode Item code
 * @property string $ItemDescription Description of Item
 * @property int $LineNumber Indicates the sequence of the lines within one invoice
 * @property float $NetPrice Net price of the sales invoice line
 * @property string $Notes Extra notes
 * @property string $Pricelist Price list
 * @property string $PricelistDescription Description of Pricelist
 * @property string $Project The project to which the sales transaction line is linked. The project can be different per line. Sometimes also the project in the header is filled although this is not really used
 * @property string $ProjectDescription Description of Project
 * @property string $ProjectWBS WBS linked to the sales invoice
 * @property string $ProjectWBSDescription Description of WBS
 * @property float $Quantity The number of items sold in default units. The quantity shown in the entry screen is Quantity * UnitFactor
 * @property string $SalesOrder Identifies the sales order this invoice line is based on
 * @property string $SalesOrderLine Identifies the sales order line this sales invoice line is based on
 * @property int $SalesOrderLineNumber Then line number of the sales order line on which this invoice line is based on
 * @property int $SalesOrderNumber The order number of the sales order on which this invoice line is based on
 * @property string $StartDate StartDate is used to store the first date of a period. StartDate is used in combination with EndDate
 * @property string $Subscription When generating invoices from subscriptions, this field records the link between invoice lines and subscription lines
 * @property string $SubscriptionDescription Description of subscription line
 * @property string $UnitCode Code of Unit
 * @property string $UnitDescription Description of Unit
 * @property float $UnitPrice Price per unit
 * @property float $VATAmountDC VAT amount in the default currency of the company
 * @property float $VATAmountFC VAT amount in the currency of the transaction
 * @property string $VATCode The VAT code that is used when the invoice is registered
 * @property string $VATCodeDescription Description of VATCode
 * @property float $VATPercentage The vat percentage of the VAT code. This is the percentage at the moment the invoice is created. It's also used for the default calculation of VAT amounts and VAT base amounts
 */
class SalesInvoiceLine extends Model
{
    use Query\Findable;
    use Persistance\Storable;

    protected $fillable = [
        'ID',
        'AmountDC',
        'AmountFC',
        'CostCenter',
        'CostCenterDescription',
        'CostUnit',
        'CostUnitDescription',
        'CustomerItemCode',
        'DeliveryDate',
        'Description',
        'Discount',
        'Division',
        'Employee',
        'EmployeeFullName',
        'EndDate',
        'ExtraDutyAmountFC',
        'ExtraDutyPercentage',
        'GLAccount',
        'GLAccountDescription',
        'InvoiceID',
        'Item',
        'ItemCode',
        'ItemDescription',
        'LineNumber',
        'NetPrice',
        'Notes',
        'Pricelist',
        'PricelistDescription',
        'Project',
        'ProjectDescription',
        'ProjectWBS',
        'ProjectWBSDescription',
        'Quantity',
        'SalesOrder',
        'SalesOrderLine',
        'SalesOrderLineNumber',
        'SalesOrderNumber',
        'StartDate',
        'Subscription',
        'SubscriptionDescription',
        'UnitCode',
        'UnitDescription',
        'UnitPrice',
        'VATAmountDC',
        'VATAmountFC',
        'VATCode',
        'VATCodeDescription',
        'VATPercentage',
    ];

    protected $url = 'salesinvoice/SalesInvoiceLines';
}
