<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Takes extends Model
{
    protected $fillable = [
        'id','user_id','materials_id'
    ];
    public $timestamps = false;
}
