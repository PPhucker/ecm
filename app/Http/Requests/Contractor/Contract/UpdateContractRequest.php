<?php

namespace App\Http\Requests\Contractor\Contract;

use App\Http\Requests\CoreFormRequest;

/**
 * Валидация обновления договоров с контрагентом.
 */
class UpdateContractRequest extends CoreFormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        $prefix = 'contracts.*.';

        return [
            $prefix . 'id' => [
                'required',
                'numeric',
            ],
            $prefix . 'organization_id' => [
                'required',
                'numeric',
            ],
            $prefix . 'number' => [
                'nullable',
                'string',
                'max:20',
            ],
            $prefix . 'date' => [
                'required',
                'date',
            ],
            $prefix . 'comment' => [
                'nullable',
                'string',
                'max:255',
            ],
            $prefix . 'is_valid' => [
                'nullable',
                'boolean',
            ],
        ];
    }
}
