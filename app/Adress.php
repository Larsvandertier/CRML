<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $guarded = [];

    public function takens()
    {
        return $this->hasMany(Taken::class);
    }
}
