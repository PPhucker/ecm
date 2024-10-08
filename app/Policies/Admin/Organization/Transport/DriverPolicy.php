<?php

namespace App\Policies\Admin\Organization\Transport;


use App\Models\Admin\Organization\Transport\Driver;
use App\Policies\CorePolicy;
use App\Traits\Policy\SoftDeletesPolicy;

/**
 * Политика для водителя организации.
 */
class DriverPolicy extends CorePolicy
{
    use SoftDeletesPolicy;

    /**
     * @return string
     */
    protected function getModelClass(): string
    {
        return Driver::class;
    }

    /**
     * @return string[]
     */
    protected function getRoles(): array
    {
        return ['admin'];
    }
}
