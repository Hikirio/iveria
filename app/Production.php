<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $fillable = [
        'name_product','description','price','IsEmpty','IsSoda'
    ];
}
