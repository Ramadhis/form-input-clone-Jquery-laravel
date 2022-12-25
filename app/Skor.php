<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    protected $table = 'skor';
    protected $fillable = [
        'klub1', 'klub2','skor1','skor2'
    ];
}