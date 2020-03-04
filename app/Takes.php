<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Takes extends Model
{
    protected $fillable = [
        'user_id','material_id'
    ];
    public $timestamps = false;
}
