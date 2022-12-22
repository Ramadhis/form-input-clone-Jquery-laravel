<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klub extends Model
{
    protected $table = 'klub';
    protected $fillable = [
        'nama', 'kota',
    ];

}
