<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Advanced extends Model
{
    protected $guarded = [];

    public function formType(): BelongsTo
    {
        return $this->belongsTo(FormType::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }



    public function recommendations()
    {
        return $this->hasMany(Recommendation::class,'adv_id');
    }

    public function lastJops()
    {
        return $this->hasMany(LastJob::class,'adv_id');
    }

    public function familyInfos()
    {
        return $this->hasMany(FamilyInformation::class,'adv_id');
    }

    public function experiences()
    {
        return $this->hasMany(Experiences::class,'adv_id');
    }

    public function relatives()
    {
        return $this->hasMany(Relatives::class,'adv_id');
    }
}
