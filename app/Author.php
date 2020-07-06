<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Author extends Model
{

    protected $guarded = [];

    protected $dates = ['dob'];

    public function setDobAttribute($attribute)
    {
        $this->attributes['dob'] = Carbon::parse($attribute);
    }
}
