<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $table = 'notes';
    public $timestamps = false;
    protected $fillable =[
        'obiect1',
        'nota1',
        'obiect2',
        'nota2',
        'obiect3',
        'nota3',
        'obiect4',
        'nota4',
    ];

}
