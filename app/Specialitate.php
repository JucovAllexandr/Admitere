<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialitate extends Model
{
    protected $table = 'specialitates';
    protected $fillable =[
        'cod_specialitate',
        'denumire',
    ];
}
