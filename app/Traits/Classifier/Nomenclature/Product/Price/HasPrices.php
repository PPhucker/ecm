<?php

namespace App\Traits\Classifier\Nomenclature\Product\Price;

use App\Models\Classifiers\Nomenclature\Products\ProductPrice;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait HasPrices
{
    /**
     * @return HasMany
     */
    public function prices(): HasMany
    {
        return $this->hasMany(ProductPrice::class, $this->foreign_key)
            ->withTrashed();
    }
}
