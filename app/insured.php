<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insured extends Model
{
    protected $fillable = [
        'name', 'year',
    ];
}
