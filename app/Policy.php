<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    //
    protected $table='policies';
      protected $fillable = [
        'id','name', 'description', 'code',
    ];
}
