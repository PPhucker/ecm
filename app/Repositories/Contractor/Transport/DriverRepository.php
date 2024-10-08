<?php

namespace App\Repositories\Contractor\Transport;

use App\Models\Contractor\Transport\Driver;
use App\Repositories\CrudRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

/**
 * Репозиторий водителя контрагента.
 */
class DriverRepository extends CrudRepository
{

    /**
     * @return Collection
     */
    public function getAll(): Collection
    {
        return $this->clone()->all();
    }

    /**
     * @param array $validated
     *
     * @return Driver
     */
    public function create(array $validated)
    {
        return $this->model->create(
            [
                'user_id' => Auth::user()->id,
                'contractor_id' => (int)$validated['contractor_id'],
                'name' => $validated['name'],
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
        foreach ($validated as $validatedDriver) {
            $this->model
                ->findOrFail((int)$validatedDriver['id'])
                ->fill(
                    [
                        'user_id' => Auth::user()->id,
                        'name' => $validatedDriver['name'],
                    ]
                )
                ->save();
        }
    }

    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Driver::class;
    }
}
