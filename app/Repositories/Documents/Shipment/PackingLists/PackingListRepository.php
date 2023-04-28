<?php

namespace App\Repositories\Documents\Shipment\PackingLists;

use App\Models\Documents\Shipment\PackingLists\PackingList as Model;
use App\Repositories\CoreRepository;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class PackingListRepository extends CoreRepository
{
    /**
     * @param array $filters
     * @param bool  $withTrashed
     *
     * @return Collection
     */
    public function getAll(array $filters, bool $withTrashed = true)
    {
        $packingLists = $this->clone()
            ->select(
                [
                    'documents_shipment_packing_lists.id',
                    'documents_shipment_packing_lists.organization_id',
                    'documents_shipment_packing_lists.organization_place_id',
                    'documents_shipment_packing_lists.contractor_id',
                    'documents_shipment_packing_lists.contractor_place_id',
                    'documents_shipment_packing_lists.number',
                    'documents_shipment_packing_lists.date',
                    'documents_shipment_packing_lists.deleted_at',
                ]
            );

        if (isset($filters['organization_id'])) {
            $packingLists->where(
                'documents_shipment_packing_lists.organization_id',
                (int)$filters['organization_id']
            );
        }

        if (!$withTrashed) {
            $packingLists->withoutTrashed();
        }

        return $packingLists->whereBetween(
            'documents_shipment_packing_lists.date',
            [$filters['from_date'], $filters['to_date']]
        )
            ->with(
                [
                    'organization:id,name,legal_form_type',
                    'organizationPlaceOfBusiness:id,address',
                    'contractor:id,name,legal_form_type',
                    'contractorPlaceOfBusiness:id,address',
                    'production:id',
                ]
            )
            ->orderBy('documents_shipment_packing_lists.date', 'desc')
            ->get();
    }

    /**
     * @param int $id
     *
     * @return Collection
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function getById(int $id)
    {
        $packingList = $this->model::find($id);
        $packingList->load(
            [
                'createdBy' => static function ($query) {
                    $query->select(
                        [
                            'id',
                            'name'
                        ]
                    );
                },
                'updatedBy' => static function ($query) {
                    $query->select(
                        [
                            'id',
                            'name'
                        ]
                    );
                },
                'approvedBy' => static function ($query) {
                    $query->select(
                        [
                            'id',
                            'name'
                        ]
                    );
                },
                'contractor' => static function ($query) {
                    $query->select(
                        [
                            'id',
                            'name',
                            'legal_form_type'
                        ]
                    )
                        ->with('legalForm:abbreviation');
                },
                'contractorPlaceOfBusiness' => static function ($query) {
                    $query->select(
                        [
                            'id',
                            'address',
                        ]
                    );
                },
                'contractorBankAccountDetail' => static function ($query) {
                    $query->select(
                        'id',
                        'bank',
                        'payment_account',
                    )
                        ->with('bankClassifier:BIC,name');
                },
                'organization' => static function ($query) {
                    $query->select(
                        [
                            'id',
                            'name',
                            'legal_form_type'
                        ]
                    )
                        ->with(
                            [
                                'legalForm:abbreviation',
                            ]
                        );
                },
                'organizationPlaceOfBusiness' => static function ($query) {
                    $query->select(
                        [
                            'id',
                            'address',
                        ]
                    );
                },
                'organizationBankAccountDetail' => static function ($query) {
                    $query->select(
                        'id',
                        'bank',
                        'payment_account',
                    )
                        ->with('bankClassifier:BIC,name');
                },
                'production' => static function ($query) {
                    $query->select(
                        [
                            'id',
                            'invoice_for_payment_id',
                            'packing_list_id',
                            'product_id',
                            'series',
                            'quantity',
                            'price',
                            'nds',
                            'deleted_at',
                        ]
                    )
                        ->with(
                            [
                                'productCatalog' => static function ($query) {
                                    $query->select(
                                        [
                                            'id',
                                            'product_id',
                                            'organization_id',
                                            'place_of_business_id'
                                        ]
                                    )
                                        ->with(
                                            [
                                                'endProduct' => static function ($query) {
                                                    $query->select(
                                                        [
                                                            'id',
                                                            'short_name',
                                                            'okei_code',
                                                            'type_id',
                                                        ]
                                                    )
                                                        ->with(
                                                            [
                                                                'okei:code,symbol',
                                                                'type:id,color'
                                                            ]
                                                        );
                                                },
                                                'organization:id,name',
                                                'placeOfBusiness:id,address'
                                            ]
                                        );
                                }
                            ]
                        );
                },
            ]
        )
            ->get();

        return $packingList;
    }

    /**
     * @return Collection
     */
    public function getStorage(int $id)
    {
        $invoice = $this->model::find($id);

        $fileDate = Carbon::create($invoice->date);

        return collect(
            [
                'directory' => $this->model::STORAGE
                    . $fileDate->format('Y')
                    . '/'
                    . $fileDate->format('m')
                    . '/',
                'filename' => '№'
                    . $invoice->number
                    . '_'
                    . Carbon::now()->format('d_m_Y_H_i_s')
                    . '.pdf',
            ]
        );
    }

    /**
     * @return string
     */
    protected function getModelClass()
    {
        return Model::class;
    }
}
