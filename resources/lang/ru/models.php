<?php

return [
    'App' => [
        'Models' => [
            'Auth' => [
                'Role' => 'Роль',
                'User' => 'Пользователь',
                'Permission' => 'Право',
            ],
            'Classifier' => [
                'LegalForm' => 'Организационно-правовая форма',
                'Bank' => 'Банк',
                'Region' => 'Регион',
                'Nomenclature' => [
                    'Product' => [
                        'TypeOfEndProduct' => 'Тип готового продукта',
                        'InternationalNameOfEndProduct' => 'Международное название готового продукта',
                        'OKPD2' => 'Классификатор ОКПД2',
                        'RegistrationNumberOfEndProduct' => 'Регистрационный номер готового продукта',
                        'EndProduct' => 'Конечный продукт',
                        'TypeOfAggregation' => 'Тип аггрегации',
                        'ProductCatalog' => 'Каталог готовой продукции',
                        'ProductPrice' => 'Прайс продукта',
                        'ProductRegionalAllowance' => 'Региональная надбавка',
                    ],
                    'OKEI' => 'Классификатор ОКЕИ',
                    'Service' => [
                        'Service' => 'Услуги',
                    ],
                    'Material' => [
                        'TypeOfMaterial' => 'Тип комплектующего',
                        'Material' => 'Комплектующее',
                    ],
                ],
            ],
            'Admin' => [
                'Organization' => [
                    'Organization' => 'Организация',
                    'PlaceOfBusiness' => 'Место осущещствления деятельности организации',
                    'BankAccountDetail' => 'Банковские реквизиты организации',
                    'Staff' => 'Сотрудник организации',
                    'Transport' => [
                        'Car' => 'Автомобиль организации',
                        'Driver' => 'Водитель организации',
                        'Trailer' => 'Прицеп организации',
                    ],
                ],
            ],
            'Contractor' => [
                'Contractor' => 'Контрагент',
                'PlaceOfBusiness' => 'Место осуществления контрагента',
                'BankAccountDetail' => 'Банковские реквизиты контрагента',
                'ContactPerson' => 'Контактное лицо контрагента',
                'Contract' => 'Договор c контрагентом',
                'Transport' => [
                    'Car' => 'Автомобиль контрагента',
                    'Driver' => 'Водитель контрагента',
                    'Trailer' => 'Прицеп контрагента',
                ],
            ],
            'Document' => [
                'InvoicesForPayment' => [
                    'InvoiceForPayment' => 'Счет на оплату',
                    'InvoiceForPaymentProduct' => 'Готовый продукт счета на оплату',
                    'InvoiceForPaymentMaterial' => 'Комлектующее счета на оплату',
                ],
                'Act' => [
                    'Act' => 'Акт',
                    'ActService' => 'Устуга акта'
                ],
                'Shipment' => [
                    'PackingList' => [
                        'PackingList' => 'Товарная накладная',
                        'PackingListProduct' => 'Продукт товарной накладной',
                    ],
                    'Shipment' => 'Отгрузка',
                    'Bill' => [
                        'Bill' => 'Счет-фактура',
                    ],
                    'Appendixe' => [
                        'Appendix' => 'Приложение',
                    ],
                    'Protocol' => [
                        'Protocol' => 'Протокол',
                    ],
                    'Waybill' => [
                        'Waybill' => 'Товарно-транспортная накладная',
                    ],
                ],
            ],
        ],
    ],
];
