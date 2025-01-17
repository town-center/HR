<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FormType extends Model
{
    protected $guarded = [];

    public function ِadvForms()
    {
        return $this->hasMany(Advanced::class,'type_id');
    }

    public function basicForm()
    {
        return $this->hasMany(Basic::class,'type_id');
    }
}
