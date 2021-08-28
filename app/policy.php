<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class policy extends Model
{
    protected $fillable = [
        'users_id',
        'num_poliza',
        'fecha_inicio'  ,
        'fecha_final',
        'customers_id',
        'insureds_id',
        'aseguradora',
        'tipo_poliza',
        'precio',
        'status',
    ];

    public function customers() {
        return $this->belongsTo('App\customers');
    }
}
