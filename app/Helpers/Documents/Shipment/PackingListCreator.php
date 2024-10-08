<?php

namespace App\Helpers\Documents\Shipment;

use App\Helpers\Documents\Creator;

/**
 * Класс для формирования печати товарной накладной.
 */
class PackingListCreator extends Creator
{
    /**
     * Кол-во продукции на каждой странице документа.
     */
    protected $countProductsOnPages = [1, 4, 10];

    /**
     * Все данные для печати.
     *
     * @return object|null
     */
    public function getData(): ?object
    {
        if (!(count($this->document->data))) {
            return null;
        }

        $invoiceForPayment = $this->document->production->first()->invoiceForPayment;

        $productsOnPage = $this->getProductionOnPage();

        /*dd($productsOnPage->pages);*/

        return (object)[
            'organization' => (object)[
                'supplier' => $this->getSupplierField(),
                'shipper' => $this->getShipperField(),
                'okpo' => $this->document->organization->OKPO,
            ],
            'contractor' => (object)[
                'buyer' => $this->getBuyerField(),
                'consignee' => $this->getConsigneeField(),
                'delivery_address' => $this->getDeliveryAddressField(),
                'okpo' => $this->document->contractor->OKPO,
            ],
            'basis' => (object)[
                'number' => $invoiceForPayment->number,
                'date' => $invoiceForPayment->date,
            ],
            'pages' => $productsOnPage->pages,
            'total' => $productsOnPage->total,
            'count_production' => $this->getCountProductionField(),
            'count_places' => $this->getCountPlacesField(),
            'total_sum' => $this->getTotalSumField(),
            'storekeeper' => $this->document->storekeeper,
            'bookkeeper' => $this->document->bookkeeper,
            'director' => $this->document->director,
        ];
    }

    /**
     * @return string
     */
    protected function getBuyerField(): string
    {
        $contractor = $this->document->contractor;

        $registered = $this->getContractorRegisteredAddress($contractor);

        $bank = $this->getContractorAccountDetails($this->document->contractorBankAccountDetail);

        return $this->getContractorFullName($contractor)
            . ', ИНН '
            . $contractor->INN
            . ', '
            . $registered->get('index')
            . ', '
            . $registered->get('address')
            . ', тел.: '
            . $contractor->contacts
            . ', р/с '
            . $bank->payment_account
            . ', в банке '
            . $bank->name
            . ', БИК '
            . $bank->BIC
            . ', к/с '
            . $bank->correspondent_account;
    }
}
