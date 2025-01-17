<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LastJob extends Model
{
    protected $guarded = [];

    public function advanceds(): BelongsTo
    {
        return $this->belongsTo(Advanced::class);
    }
}
