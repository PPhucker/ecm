<?php

namespace App\Traits\Contractor;

use App\Models\Contractors\ContactPerson;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasContactPersons
{
    /**
     * @return HasMany
     */
    public function contactPersons(): HasMany
    {
        return $this->hasMany(ContactPerson::class, $this->foreign_key)
            ->withTrashed();
    }
}
