<?php

namespace App\Observers\Classifiers\Nomenclature\Materials;

use App\Logging\Logger;
use App\Models\Classifiers\Nomenclature\Materials\Material;

class MaterialObserver
{
    /**
     * Handle the Material "created" event.
     *
     * @param Material $material
     *
     * @return void
     */
    public function created(Material $material)
    {
        Logger::userActionNotice('create', $material);
    }

    /**
     * Handle the Material "updated" event.
     *
     * @param Material $material
     *
     * @return void
     */
    public function updated(Material $material)
    {
        Logger::userActionNotice('update', $material);
    }

    /**
     * Handle the Material "deleted" event.
     *
     * @param Material  $material
     *
     * @return void
     */
    public function deleted(Material $material)
    {
        Logger::userActionNotice('destroy', $material);
    }

    /**
     * Handle the Material "restored" event.
     *
     * @param  Material  $material
     *
     * @return void
     */
    public function restored(Material $material)
    {
        Logger::userActionNotice('restore', $material);
    }
}
