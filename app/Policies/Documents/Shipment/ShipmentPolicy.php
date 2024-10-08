<?php

namespace App\Policies\Documents\Shipment;

use App\Models\Documents\Shipment\Shipment;
use App\Models\Auth\User;
use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Политики документов на отгрузку.
 */
class ShipmentPolicy
{
    use HandlesAuthorization;

    protected const ROLES = [
        'marketing',
        'bookkeeping',
        'digital_communication',
    ];

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     *
     * @return bool
     */
    public function viewAny(User $user): bool
    {
        return $user->hasRole(self::ROLES);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     *
     * @return bool
     */
    public function view(User $user): bool
    {
        return $user->hasRole(['marketing', 'bookkeeping'])
            || ($user->hasPermission(['approve_shipment_documents']));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     *
     * @return bool
     */
    public function create(User $user): bool
    {
        return $user->hasRole(
            [
                'marketing',
                'bookkeeping'
            ]
        );
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User     $user
     * @param Shipment $shipment
     *
     * @return bool
     */
    public function update(User $user, Shipment $shipment): bool
    {
        return $user->hasRole(['marketing', 'bookkeeping'])
            || ($user->hasPermission(['approve_shipment_documents']));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     *
     * @return bool
     */
    public function delete(User $user): bool
    {
        return $user->hasRole(['marketing', 'bookkeeping'])
            && $user->canDelete();
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     *
     * @return bool
     */
    public function restore(User $user): bool
    {
        return $user->hasRole(['marketing', 'bookkeeping'])
            && $user->canRestore();
    }
}
