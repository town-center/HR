<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Basic extends Model
{
    protected $guarded = [];


    public function formTypes(): BelongsTo
    {
        return $this->belongsTo(FormType::class,'type_id');
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function employee(): BelongsTo
    {
        return $this->belongsTo(User::class,'emp_id');
    }

}
