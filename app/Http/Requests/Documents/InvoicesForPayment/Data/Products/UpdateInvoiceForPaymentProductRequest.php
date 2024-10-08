<?php

namespace App\Http\Requests\Documents\InvoicesForPayment\Data\Products;

use App\Models\Classifier\Nomenclature\Product\Catalog\ProductCatalog;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

/**
 * Валидация обновления продукта в счете на оплату.
 */
class UpdateInvoiceForPaymentProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $prefix = 'invoice_for_payment_products.*.';

        return [
            $prefix . 'id' => [
                'required',
                'numeric',
            ],
            $prefix . 'product_catalog_id' => [
                'required',
                'numeric',
            ],
            $prefix . 'quantity' => [
                'required',
                'numeric',
                function ($attribute, $value, $fail) use ($prefix) {
                    $key = (int)mb_substr($attribute, 29, 1);

                    $productCatalogId = (int)$this->input($prefix . 'product_catalog_id')[$key];

                    $quantity = ProductCatalog::find($productCatalogId)
                        ->getQuantityInAggregationType('sscc01');

                    if ($value % $quantity !== 0) {
                        $fail(
                            __(
                                'documents.invoices_for_payment.data.fails.quantity',
                                ['quantity' => $quantity]
                            )
                        );
                    }
                },
            ],
            $prefix . 'nds' => [
                'required',
                'min: 1',
                'numeric',
            ],
            $prefix . 'price' => [
                'required',
                'min: 1',
                'numeric',
            ],
        ];
    }

    /**
     * @param Validator $validator
     *
     * @return void
     */
    protected function withValidator(Validator $validator): void
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->isNotEmpty()) {
                $validator->errors()->add(
                    'fail',
                    __('documents.invoices_for_payment.data.actions.update.fail')
                );
            }
        });
    }
}
