<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Recommendation extends Model
{
    protected $guarded = [];


    public function departments(): BelongsTo
    {
        return $this->belongsTo(Department::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function advanceds(): BelongsTo
    {
        return $this->belongsTo(Advanced::class);
    }
}
