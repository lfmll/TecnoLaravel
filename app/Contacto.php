<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable = [
        'nick', 'celular', 'email', 'estado','user_id',
    ];
}
