<?php

return [
    'header' => 'Document header',
    'invoices_for_payment' => [
        'invoices_for_payment' => 'Invoices For Payment',
        'invoice_for_payment' => 'Invoice For Payment',
        'organization_id' => 'Provider',
        'organization_place_id' => 'Provider Address',
        'organization_bank_id' => 'Provider Details',
        'contractor_id' => 'Contractor',
        'contractor_place_id' => 'Contractor Address',
        'contractor_bank_id' => 'Contractor Details',
        'number' => 'Number',
        'date' => 'Date',
        'director' => 'Director',
        'bookkeeper' => 'Bookkeeper',
        'filename' => 'Filename',
        'warning' => 'Attention! When deleting an invoice for payment, the entire package of documents created on its basis is automatically deleted!',
        'actions' => [
            'create' => [
                'success' => 'Invoice for payment №:number successfully created',
                'fail' => 'Failed to create invoice for payment',
            ],
            'update' => [
                'success' => 'Invoice for payment №:number successfully updated',
                'fail' => 'Failed to update invoice for payment',
            ],
            'delete' => [
                'success' => 'Invoice for payment №:number successfully deleted'
            ],
            'restore' => [
                'success' => 'Invoice for payment №:number successfully restored'
            ],
        ],
        'buttons' => [
            'create_based_on' => 'Create based on',
        ],
        'titles' => [
            'create' => 'Invoicing for payment',
        ],
        'data' => [
            'data' => 'Invoice for payment production',
            'product_catalog_id' => 'Product',
            'quantity' => 'Quantity',
            'price' => 'Price with VAT',
            'nds' => 'VAT',
            'fails' => [
                'quantity' => 'Quantity must be a multiple of :quantity'
            ],
            'actions' => [
                'create' => [
                    'success' => 'Product :name added to invoice successfully',
                    'fail' => 'Failed to add product to invoice',
                ],
                'update' => [
                    'success' => 'Invoice products updated successfully',
                    'fail' => 'Failed to update products',
                ],
                'delete' => [
                    'success' => 'Product :name has been successfully removed from the invoice',
                ],
                'restore' => [
                    'success' => 'Product :name restored successfully',
                ],
            ],
        ],
    ],
    'shipment' => [
        'shipment' => 'Shipment',
        'invoice_for_payment_id' => 'Invoice for payment',
        'number' => 'Number',
        'date' => 'Data',
        'organization_id' => 'Supplier',
        'organization_place_id' => 'Shipper`s address',
        'organization_bank_id' => 'Supplier details',
        'contractor_id' => 'Buyer',
        'contractor_place_id' => 'Consingee address',
        'contractor_bank_id' => 'Buyer address',
        'director' => 'Director',
        'bookkeeper' => 'Bookkeeper',
        'storekeeper' => 'Storekeeper',
        'filename' => 'File',
        'approved' => 'Appoved',
        'comment' => 'Comment',
        'packing_lists' => [
            'packing_lists' => 'Packing lists',
            'packing_list' => 'Packing list',
            'errors' => [
                'invoice_for_payment_id' => 'You must select at least one invoice for payment',
                'organization_id' => 'Different suppliers on invoices for payment',
                'contractor_id' => 'Different buyers on invoices for payment',
            ],
            'titles' => [
                'create' => 'Create a packing list',
            ],
            'warning' => 'Attention! When deleting a packing list, the entire package of shipping documents is automatically deleted!',
            'actions' => [
                'create' => [
                    'success' => 'Packing list :number created successfully',
                    'fail' => 'Failed to create packing list',
                ],
                'update' => [
                    'success' => 'Packing list :number updated successfully',
                    'fail' => 'Failed to update packing list',
                ],
                'delete' => [
                    'success' => 'Packing list :number deleted successfully'
                ],
                'restore' => [
                    'success' => 'Packing list :number restored successfully'
                ],
            ],
            'data' => [
                'actions' => [
                    'create' => [
                        'success' => 'Product :name successfully added to the packing list',
                        'fail' => 'Failed to add product to packing list',
                    ],
                    'update' => [
                        'success' => 'Packing list products updated successfully',
                        'fail' => 'Failed to update packing list products',
                    ],
                    'delete' => [
                        'success' => 'Product :name was successfully removed from the packing list',
                    ],
                    'restore' => [
                        'success' => 'Product :name restored successfully',
                    ],
                ],
            ],
        ],
        'data' => [
            'production' => 'Production',
            'product_catalog_id' => 'Fullname',
            'series' => 'Series',
            'quantity' => 'Quantity',
            'price' => 'Price with VAT',
            'nds' => 'VAT',
            'titles' => [
                'choose_products' => '`Select products from invoices for payment`',
            ],
        ],
    ],
];
