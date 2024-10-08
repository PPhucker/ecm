<?php

return [
    'header' => 'Основная информация',
    'print' => 'Печатная форма',
    'invoices_for_payment' => [
        'invoices_for_payment' => 'Счета на оплату',
        'invoice_for_payment' => 'Счет на оплату',
        'organization_id' => 'Поставщик',
        'organization_place_id' => 'Адрес грузоотправителя',
        'organization_bank_id' => 'Реквизиты поставщика',
        'contractor_id' => 'Получатель',
        'contractor_place_id' => 'Адрес грузополучателя',
        'contractor_bank_id' => 'Реквизиты получателя',
        'number' => 'Номер',
        'date' => 'Дата',
        'director' => 'Руководитель',
        'bookkeeper' => 'Главный бухгалтер',
        'filename' => 'Прикрепленный файл',
        'filling_type' => 'Наполнение счета',
        'warning' => 'Внимание! При удалении счета на оплату автоматически удаляется весь пакет документов, созданный на его основании!',
        'buttons' => [
            'create' => 'Выставить счет',
            'create_based_on' => 'Создать на основании счетов',
        ],
        'titles' => [
            'create' => 'Выставление счета на оплату',
        ],
        'data' => [
            'data' => 'Продукция счета на оплату',
            'product_catalog_id' => 'Продукт',
            'quantity' => 'Количество',
            'price' => 'Цена с НДС',
            'nds' => 'НДС',
            'fails' => [
                'quantity' => 'Кол-во должно быть кратно :quantity',
                'price_list' => 'Отсутствует прайс продукта в каталоге готовой продукции',
            ],
        ],
    ],
    'shipment' => [
        'shipment' => 'Отгрузка',
        'invoice_for_payment_id' => 'Счет на оплату',
        'number' => 'Номер',
        'date' => 'Дата',
        'organization_id' => 'Поставщик',
        'organization_place_id' => 'Адрес грузоотправителя',
        'organization_bank_id' => 'Реквизиты поставщика',
        'contractor_id' => 'Получатель',
        'contractor_place_id' => 'Адрес грузополучателя',
        'contractor_bank_id' => 'Реквизиты получателя',
        'director' => 'Руководитель',
        'bookkeeper' => 'Главный бухгалтер',
        'storekeeper' => 'Зав. складом готовой продукции',
        'filename' => 'Прикрепленный файл',
        'approved' => 'Согласовано',
        'comment' => 'Комментарий',
        'errors' => [
            'approve_update' => 'Невозможно изменить согласованный документ',
        ],
        'approval' => [
            'approval' => 'Согласование',
            'approved_by' => 'Проверил',
            'approved' => 'Согласовано',
            'not_viewed' => 'Не просмотрено',
            'document' => 'Документ',
            'updated' => 'Обновлено',
            'e-mail' => [
                'send' => [
                    'send' => 'Отправить',
                    'to' => [
                        'markeing' => 'E-mail отделу сбыта о согласовании/несогласовании отгрузки',
                        'digital_comunication' => 'E-mail отделу цифтовых коммуникаций о внесенных изменениях',
                    ],
                    'success' => 'Письмо успешно отправлено',
                ]
            ],
        ],
        'packing_lists' => [
            'packing_lists' => 'Товарные накладные',
            'packing_list' => 'Товарная накладная',
            'buttons' => [
                'create_based_on' => 'Создать на основании товарной накладной',
            ],
            'errors' => [
                'invoice_for_payment_id' => 'Необходимо выбрать хотя бы один счет на оплату',
                'organization_id' => 'Разные поставщики в счетах на оплату',
                'contractor_id' => 'Разные покупатели в счетах на оплату',
                'failed_document' => 'Не удалось создать документ на отгрузку',
            ],
            'titles' => [
                'create' => 'Создание товарной накладной',
            ],
            'warning' => 'Внимание! При удалении товарной накладной автоматически удаляется весь пакет документов на отгрузку!',
        ],
        'bills' => [
            'bills' => 'Счет-фактуры',
            'bill' => 'Счет-фактура',
            'errors' => [
                'packing_list_id' => [
                    'required' => 'Необходимо выбрать товарную накладную',
                    'unique' => 'На основании товарной накладной можно создать только одну счет-фактуру',
                ],
            ],
            'titles' => [
                'create' => 'Создание счет-фактуры',
            ],
        ],
        'appendixes' => [
            'appendixes' => 'Приложения',
            'appendix' => 'Приложение',
            'errors' => [
                'packing_list_id' => [
                    'required' => 'Необходимо выбрать товарную накладную',
                    'unique' => 'На основании товарной накладной можно создать только одно приложение',
                ],
            ],
            'titles' => [
                'create' => 'Создание приложения',
            ],
        ],
        'protocols' => [
            'protocols' => 'Протоколы',
            'protocol' => 'Протокол',
            'errors' => [
                'packing_list_id' => [
                    'required' => 'Необходимо выбрать товарную накладную',
                    'unique' => 'На основании товарной накладной можно создать только один протокол',
                ],
            ],
            'titles' => [
                'create' => 'Создание протокола',
            ],
        ],
        'waybills' => [
            'waybills' => 'Товарно-транспортные накладные',
            'waybill' => 'Товарно-транспортная накладная',
            'car_model' => 'Автомобиль',
            'state_car_number' => 'Гос. номер автомобиля',
            'driver' => 'Водитель',
            'licence_card' => [
                'licence_card' => 'Лицензионная карточка',
                'standard' => 'Стандартная',
                'limited' => 'Ограниченная',
            ],
            'type_of_transportation' => [
                'type_of_transportation' => 'Вид перевозки',
                'automotive' => 'Автомобильный',
                'manual_movement' => 'Ручное перемещение',
            ],
            'trailer' => 'Прицеп',
            'state_trailer_number' => 'Гос. номер прицепа',
            'errors' => [
                'packing_list_id' => [
                    'required' => 'Необходимо выбрать товарную накладную',
                    'unique' => 'На основании товарной накладной можно создать только одну
                    товарно-транспортную накладную',
                    'last' => 'Товарно-транспортная накладная создается последней',
                ],
            ],
            'titles' => [
                'create' => 'Создание товарно-транспортной накладной',
            ],
        ],
        'data' => [
            'production' => 'Продукция',
            'product_catalog_id' => 'Наименование',
            'series' => 'Серия',
            'quantity' => 'Кол-во',
            'price' => 'Цена с НДС',
            'nds' => 'НДС',
            'sum' => 'Сумма',
            'total_by_packing_list' => 'Всего по накладной',
            'total' => 'Итого',
            'titles' => [
                'choose_products' => 'Выберите продукцию из счетов на оплату',
            ],
        ],
    ],
    'acts' => [
        'acts' => 'Акты',
        'act' => 'Акт',
        'number' => 'Номер',
        'date' => 'Дата',
        'organization_id' => 'Исполнитель',
        'contractor_id' => 'Заказчик',
        'filename' => 'Прикрепленный файл',
        'titles' => [
            'create' => 'Создание акта',
        ],
        'data' => [
            'data' => 'Услуги, работы',
            'service_id' => 'Услуга',
            'quantity' => 'Количество',
            'price' => 'Цена с НДС',
            'nds' => 'НДС',
        ],
    ],
];
