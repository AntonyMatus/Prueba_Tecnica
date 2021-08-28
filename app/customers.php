<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $fillable = ['users_id','name','phone','email'];

    public function users() {
        return $this->belongsTo('App\customers');
    }
}
