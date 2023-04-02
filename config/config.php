<?php

return [
    'models' => [
        'user' => \Bonlineza\DearDatabase\Models\User::class,
        'supplier' => \Bonlineza\DearDatabase\Models\Supplier::class,
        'customer' => \Bonlineza\DearDatabase\Models\Customer::class,
        'contact' => \Bonlineza\DearDatabase\Models\Contact::class,
        'contact_address' => \Bonlineza\DearDatabase\Models\ContactAddress::class,
        'purchase' => \Bonlineza\DearDatabase\Models\Purchase::class,
        'purchase_order' => \Bonlineza\DearDatabase\Models\PurchaseOrder::class,
        'purchase_stock' => \Bonlineza\DearDatabase\Models\PurchaseStock::class,
        'purchase_invoice' => \Bonlineza\DearDatabase\Models\PurchaseInvoice::class,
        'purchase_credit_note' => \Bonlineza\DearDatabase\Models\PurchaseCreditNote::class,
        'purchase_manual_journal' => \Bonlineza\DearDatabase\Models\PurchaseManualJournal::class,
        'additional_attribute' => \Bonlineza\DearDatabase\Models\AdditionalAttribute::class,
        'attachment_line' => \Bonlineza\DearDatabase\Models\AttachmentLine::class,
        'inventory_movement_line' => \Bonlineza\DearDatabase\Models\InventoryMovementLine::class,
        'address' => \Bonlineza\DearDatabase\Models\Address::class,
        'purchase_shipping_address' => \Bonlineza\DearDatabase\Models\PurchaseShippingAddress::class,
        'purchase_order_line' => \Bonlineza\DearDatabase\Models\PurchaseOrderLine::class,
        'purchase_invoice_line' => \Bonlineza\DearDatabase\Models\PurchaseInvoiceLine::class,
        'purchase_payment_line' => \Bonlineza\DearDatabase\Models\PurchasePaymentLine::class,
        'purchase_additional_charge' => \Bonlineza\DearDatabase\Models\PurchaseAdditionalCharge::class,
        'purchase_invoice_additional_charge' => \Bonlineza\DearDatabase\Models\PurchaseInvoiceAdditionalCharge::class,
        'purchase_stock_line' => \Bonlineza\DearDatabase\Models\PurchaseStockLine::class,
        'purchase_unstock_line' => \Bonlineza\DearDatabase\Models\PurchaseUnstockLine::class,
        'purchase_manual_journal_line' => \Bonlineza\DearDatabase\Models\PurchaseManualJournalLine::class,
        'sale_quote' => \Bonlineza\DearDatabase\Models\SaleQuote::class,
        'sale_order' => \Bonlineza\DearDatabase\Models\SaleOrder::class,
        'sale_shipping_address' => \Bonlineza\DearDatabase\Models\SaleShippingAddress::class,
        'sale_manual_journal' => \Bonlineza\DearDatabase\Models\SaleManualJournal::class,
    ]
];
