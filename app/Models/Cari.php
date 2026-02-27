<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cari extends Model
{
    protected $table = 'cariler';
    protected $fillable = ['ad', 'email', 'telefon'];
}
