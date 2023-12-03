<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DestinationPreference extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function destinationCategory(): BelongsTo
    {
        return $this->belongsTo(DestinationCategory::class, 'destination_category_id', 'id');
    }
}
