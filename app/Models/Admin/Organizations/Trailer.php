<?php

namespace App\Models\Admin\Organizations;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Trailer extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'organizations_trailers';

    protected $fillable = [
        'user_id',
        'organization_id',
        'type',
        'state_number',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * @return BelongsTo
     */
    public function organization()
    {
        return $this->belongsTo(Organization::class, 'organization_id');
    }
}
