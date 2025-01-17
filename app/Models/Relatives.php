<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Relatives extends Model
{
    protected $guarded = [];

    public function advanceds(): BelongsTo
    {
        return $this->belongsTo(Advanced::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
