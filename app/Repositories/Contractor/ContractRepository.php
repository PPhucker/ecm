<?php

namespace App\Repositories\Contractor;

use App\Models\Contractor\Contract;
use App\Repositories\CrudRepository;
use Auth;
use Illuminate\Database\Eloquent\Collection;

/**
 * Репозиторий договора с контрагентом.
 */
class ContractRepository extends CrudRepository
{
    /**
     * @inheritdoc
     */
    public function getAll(): Collection
    {
        return $this->clone()->all();
    }

    /**
     * @param array $validated
     *
     * @return void
     */
    public function create(array $validated): Contract
    {
        $userId = Auth::user()->id;

        return $this->model->create(
            [
                'created_by_id' => $userId,
                'updated_by_id' => $userId,
                'contractor_id' => $validated['contractor_id'],
                'organization_id' => $validated['organization_id'],
                'number' => $validated['number'],
                'date' => $validated['date'],
                'comment' => $validated['comment'],
                'is_valid' => isset($validated['is_valid']) ? 1 : 0,
            ]
        );
    }

    /**
     * @param       $model
     * @param array $validated
     *
     * @return void
     */
    public function update($model, array $validated): void
    {
        foreach ($validated['contracts'] as $validatedContract) {
            $this->model
                ->withTrashed()
                ->findOrFail((int)$validatedContract['id'])
                ->fill(
                    [
                        'updated_by_id' => Auth::user()->id,
                        'organization_id' => $validatedContract['organization_id'],
                        'date' => $validatedContract['date'],
                        'number' => $validatedContract['number'],
                        'comment' => $validatedContract['comment'],
                        'is_valid' => isset($validatedContract['is_valid']) ? 1 : 0,
                    ]
                )
                ->save();
        }
    }

    /**
     * @inheritDoc
     */
    protected function getModelClass(): string
    {
        return Contract::class;
    }
}
