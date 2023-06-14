<?php

namespace App\Http\Requests\Classifiers\Nomenclature\Products\ProductCatalog;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class DetachAggregationTypeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $prefix = 'aggregation_type.';

        return [
            $prefix . 'code' => [
                'required',
                'string',
                'max:10'
            ],
        ];
    }

    /**
     * Configure the validator instance.
     *
     * @param Validator $validator
     *
     * @return void
     */
    public function withValidator(Validator $validator)
    {
        $validator->after(function ($validator) {
            if ($validator->errors()->isNotEmpty()) {
                $validator->errors()->add(
                    'fail',
                    __('classifiers.fail')
                );
            }
        });
    }
}
