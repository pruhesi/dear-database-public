<?php

namespace Bonlineza\DearDatabase\Tests\Unit;

use Bonlineza\DearDatabase\Models\Purchase;
use Bonlineza\DearDatabase\Tests\TestCase;
use Bonlineza\DearDatabase\Tests\Traits\PurchaseHelper;

class PurchaseTest extends TestCase
{
    use PurchaseHelper;

    public const PURCHASE_GUID = '6b0498b7-8833-41e9-96b5-d149395484aa';

    /** @test */
    function purchase_create_from_dear()
    {
        $dear_purchase = json_decode(
            file_get_contents(
                sprintf(
                    '%s/../Stubs/Dear/Purchase/%s.json',
                    __DIR__,
                    self::PURCHASE_GUID
                )
            ),
            true
        );

        $purchase = Purchase::createFromDear($dear_purchase);

        // Purchase
        $this->assertPurchase($dear_purchase, $purchase);

        // Purchase Billing Address
        $this->assertPurchaseBillingAddress($dear_purchase, $purchase);

        // Purchase Shipping Address
        $this->assertPurchaseShippingAddress($dear_purchase, $purchase);

        // Purchase Order
        $this->assertPurchaseOrder($dear_purchase, $purchase);

        // Purchase Order Lines
        $this->assertPurchaseOrderLines($dear_purchase, $purchase);

        // Purchase Additional Charges
        $this->assertPurchaseAdditionalCharges($dear_purchase, $purchase);

        // Purchase Pre Payment Lines
        $this->assertPurchasePrePaymentLines($dear_purchase, $purchase);

        // Purchase Stock
        $this->assertPurchaseStock($dear_purchase, $purchase);

        // Purchase Stock Lines
        $this->assertPurchaseStockLines($dear_purchase, $purchase);

        // Purchase Invoice
        $this->assertPurchaseInvoice($dear_purchase, $purchase);

        // Purchase Invoice Lines
        $this->assertPurchaseInvoiceLines($dear_purchase, $purchase);

        // Purchase Invoice Additional Charges
        $this->assertPurchaseInvoiceAdditionalCharges($dear_purchase, $purchase);

        // Purchase Invoice Payment Lines
        $this->assertPurchaseInvoicePaymentLines($dear_purchase, $purchase);

        // Purchase Credit Note
        $this->assertPurchaseCreditNote($dear_purchase, $purchase);

        // Purchase Credit Note Invoice Lines
        $this->assertPurchaseCreditNoteInvoiceLines($dear_purchase, $purchase);

        // Purchase Credit Note Invoice Additional Charges
        $this->assertPurchaseCreditNoteInvoiceAdditionalCharges($dear_purchase, $purchase);

        // Purchase Credit Note Payment Lines
        $this->assertPurchaseCreditNotePaymentLines($dear_purchase, $purchase);

        // Purchase Credit Note Unstock Lines
        $this->assertPurchaseCreditNoteUnstockLines($dear_purchase, $purchase);

        // Purchase Manual Journal
        $this->assertPurchaseManualJournal($dear_purchase, $purchase);

        // Purchase Manual Journal Lines
        $this->assertPurchaseManualJournalLines($dear_purchase, $purchase);

        // Purchase Additional Attribute
        $this->assertPurchaseAdditionalAttribute($dear_purchase, $purchase);

        // Purchase Attachment Lines
        $this->assertPurchaseAttachmentLines($dear_purchase, $purchase);

        // Purchase Inventory Movement Lines
        $this->assertPurchaseInventoryMovementLines($dear_purchase, $purchase);
    }

    /** @test */
    function customer_update_from_dear()
    {
        $dear_purchase = json_decode(
            file_get_contents(
                sprintf(
                    '%s/../Stubs/Dear/Purchase/%s.json',
                    __DIR__,
                    self::PURCHASE_GUID
                )
            ),
            true
        );

        $purchase = Purchase::factory()->create();
        $purchase->updateFromDear($dear_purchase);

        // Purchase
        $this->assertPurchase($dear_purchase, $purchase);

        // Purchase Billing Address
        $this->assertPurchaseBillingAddress($dear_purchase, $purchase);

        // Purchase Shipping Address
        $this->assertPurchaseShippingAddress($dear_purchase, $purchase);

        // Purchase Order
        $this->assertPurchaseOrder($dear_purchase, $purchase);

        // Purchase Order Lines
        $this->assertPurchaseOrderLines($dear_purchase, $purchase);

        // Purchase Additional Charges
        $this->assertPurchaseAdditionalCharges($dear_purchase, $purchase);

        // Purchase Pre Payment Lines
        $this->assertPurchasePrePaymentLines($dear_purchase, $purchase);

        // Purchase Stock
        $this->assertPurchaseStock($dear_purchase, $purchase);

        // Purchase Stock Lines
        $this->assertPurchaseStockLines($dear_purchase, $purchase);

        // Purchase Invoice
        $this->assertPurchaseInvoice($dear_purchase, $purchase);

        // Purchase Invoice Lines
        $this->assertPurchaseInvoiceLines($dear_purchase, $purchase);

        // Purchase Invoice Additional Charges
        $this->assertPurchaseInvoiceAdditionalCharges($dear_purchase, $purchase);

        // Purchase Invoice Payment Lines
        $this->assertPurchaseInvoicePaymentLines($dear_purchase, $purchase);

        // Purchase Credit Note
        $this->assertPurchaseCreditNote($dear_purchase, $purchase);

        // Purchase Credit Note Invoice Lines
        $this->assertPurchaseCreditNoteInvoiceLines($dear_purchase, $purchase);

        // Purchase Credit Note Invoice Additional Charges
        $this->assertPurchaseCreditNoteInvoiceAdditionalCharges($dear_purchase, $purchase);

        // Purchase Credit Note Payment Lines
        $this->assertPurchaseCreditNotePaymentLines($dear_purchase, $purchase);

        // Purchase Credit Note Unstock Lines
        $this->assertPurchaseCreditNoteUnstockLines($dear_purchase, $purchase);

        // Purchase Manual Journal
        $this->assertPurchaseManualJournal($dear_purchase, $purchase);

        // Purchase Manual Journal Lines
        $this->assertPurchaseManualJournalLines($dear_purchase, $purchase);

        // Purchase Additional Attribute
        $this->assertPurchaseAdditionalAttribute($dear_purchase, $purchase);

        // Purchase Attachment Lines
        $this->assertPurchaseAttachmentLines($dear_purchase, $purchase);

        // Purchase Inventory Movement Lines
        $this->assertPurchaseInventoryMovementLines($dear_purchase, $purchase);
    }
}
