<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persinfouser extends Model
{
    protected $fillable = [
        'first_name','second_name','surname','street','numberofhome','flat',
    ];
}
