<?php

return [
    'contractors' => 'Контрагенты',
    'contractor' => 'Контрагент',
    'quantity' => 'Количество',

    'actions' => [
        'create' => [
            'success' => 'Контрагент :name успешно добавлен',
            'fail' => 'Не удалось добавить контрагента :name'
        ],
        'update' => [
            'success' => 'Контрагент :name успешно обновлен',
            'fail' => 'Не удалось обновить контрагента :name'
        ],
        'destroy' => [
            'success' => 'Контрагент :name успешно удален'
        ],
        'restore' => [
            'success' => 'Контрагент :name успешно восстановлен'
        ],
    ],
    'titles' => [
        'create' => 'Добавление нового контрагента'
    ],

    'organizations' => [
        'organizations' => 'Организации',
        'actions' => [
            'create' => [
                'success' => 'Организация :name успешно добавлена',
                'fail' => 'Не удалось добавить организацию :name'
            ],
            'update' => [
                'success' => 'Организация :name успешно обновлена',
                'fail' => 'Не удалось обновить организацию :name'
            ],
            'destroy' => [
                'success' => 'Организация :name успешно удалена'
            ],
            'restore' => [
                'success' => 'Организация :name успешно восстановлена'
            ],
        ],
        'titles' => [
            'create' => 'Добавление новой организации'
        ]
    ],

    'places_of_business' => [
        'places_of_business' => 'Места осуществления деятельности',
        'place_of_business' => 'Место осуществления деятельности',

        'identifier' => 'Рег. № ЧЗ',
        'registered' => 'Юр. адрес',
        'is_registered' => 'ДА',
        'index' => 'Индекс',
        'address' => 'Адрес',

        'actions' => [
            'create' => [
                'success' => 'Место осуществления деятельности :name успешно добавлено',
                'fail' => 'Не удалось добавить место осуществления деятельности :name'
            ],
            'update' => [
                'success' => 'Места осуществления деятельности успешно обновлены',
                'fail' => 'Не удалось обновить места осуществления деятельности',
            ],
            'destroy' => [
                'success' => 'Место осуществления деятельности :name успешно удалено'
            ],
            'restore' => [
                'success' => 'Место осуществления деятельности :name успешно восстановлено'
            ],
        ],
    ],

    'bank_account_details' => [
        'bank_account_details' => 'Банковские реквизиты',
        'bank' => 'Банк',
        'payment_account' => 'Рассчетный счет',

        'actions' => [
            'create' => [
                'success' => 'Банковские реквизиты :name успешно добавлены',
                'fail' => 'Не удалось добавить банковские реквизиты :name'
            ],
            'update' => [
                'success' => 'Банковские реквизиты успешно обновлены',
                'fail' => 'Не удалось обновить банковские реквизиты',
            ],
            'destroy' => [
                'success' => 'Банковские реквизиты :name успешно удалены'
            ],
            'restore' => [
                'success' => 'Банковские реквизиты :name успешно восстановлены'
            ],
        ],
    ],

    'staff' => [
        'staff' => 'Сотрудники',
        'name' => 'ФИО',
        'post' => 'Должность',

        'actions' => [
            'create' => [
                'success' => 'Сотрудник :name успешно добавлен',
                'fail' => 'Не удалось добавить сотрудника :name'
            ],
            'update' => [
                'success' => 'Сотрудники успешно обновлены',
                'fail' => 'Не удалось обновить сотрудников',
            ],
            'destroy' => [
                'success' => 'Сотрудник :name успешно удален'
            ],
            'restore' => [
                'success' => 'Сотрудник :name успешно восстановлен'
            ],
        ],
    ],

    'contact_persons' => [
        'contact_persons' => 'Контактные лица',
        'contact_person' => 'Контактное лицо',
        'name' => 'ФИО',
        'post' => 'Должность',
        'phone' => 'Телефон',
        'email' => 'E-mail',

        'actions' => [
            'create' => [
                'success' => 'Контактное лицо :name успешно добавлено',
                'fail' => 'Не удалось добавить контактное лицо :name'
            ],
            'update' => [
                'success' => 'Контактные лица успешно обновлены',
                'fail' => 'Не удалось обновить контактные лица',
            ],
            'destroy' => [
                'success' => 'Контактное лицо :name успешно удалено'
            ],
            'restore' => [
                'success' => 'Контактное лицо :name успешно восстановлено'
            ],
        ],
    ],

    'drivers' => [
        'drivers' => 'Водители',
        'driver' => 'Водитель',
        'name' => 'ФИО',
        'actions' => [
            'create' => [
                'success' => 'Водитель :name успешно добавлен',
                'fail' => 'Не удалось добавить водителя :name'
            ],
            'update' => [
                'success' => 'Водители успешно обновлены',
                'fail' => 'Не удалось обновить водителей',
            ],
            'delete' => [
                'success' => 'Водитель :name успешно удален'
            ],
            'restore' => [
                'success' => 'Водитель :name успешно восстановлен'
            ],
        ],
    ],

    'cars' => [
        'cars' => 'Автомобили',
        'car' => 'Автомобиль',
        'car_model' => 'Марка',
        'state_number' => 'Гос. номер',
        'actions' => [
            'create' => [
                'success' => 'Автомобиль :number успешно добавлен',
                'fail' => 'Не удалось добавить автомобиль'
            ],
            'update' => [
                'success' => 'Автомобили успешно обновлены',
                'fail' => 'Не удалось обновить автомобили',
            ],
            'delete' => [
                'success' => 'Автомобиль :number успешно удален'
            ],
            'restore' => [
                'success' => 'Автомобиль :number успешно восстановлен'
            ],
        ],
    ],

    'trailers' => [
        'trailers' => 'Прицепы',
        'trailer' => 'Прицеп',
        'type' => 'Тип прицепа',
        'state_number' => 'Гос. номер',
        'actions' => [
            'create' => [
                'success' => 'Прицеп :number успешно добавлен',
                'fail' => 'Не удалось добавить прицеп'
            ],
            'update' => [
                'success' => 'Прицепы успешно обновлены',
                'fail' => 'Не удалось обновить прицепы',
            ],
            'delete' => [
                'success' => 'Прицеп :number успешно удален'
            ],
            'restore' => [
                'success' => 'Прицеп :number успешно восстановлен'
            ],
        ],
    ],
    'contracts' => [
        'contracts' => 'Договоры',
        'contract' => 'Договор',
        'organization_id' => 'Договор заключен с',
        'number' => 'Номер',
        'date' => 'Дата',
        'comment' => 'Примечание',
        'is_valid' => 'ОК',
        'actions' => [
            'create' => [
                'success' => 'Договор успешно добавлен',
                'fail' => 'Не удалось добавить договор'
            ],
            'update' => [
                'success' => 'Договоры успешно обновлены',
                'fail' => 'Не удалось обновить договоры',
            ],
            'delete' => [
                'success' => 'Договор успешно удален'
            ],
            'restore' => [
                'success' => 'Договор успешно восстановлен'
            ],
        ],
    ],

    'name' => 'Название',
    'inn' => 'ИНН',
    'okpo' => 'ОКПО',
    'kpp' => 'КПП',
    'contacts' => 'Контакты (для док-ов)',
    'card' => 'Карточка контрагента',
    'main_information' => 'Основная информация',
    'comment' => 'Примечание',
];
