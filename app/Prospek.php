<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prospek extends Model
{
    protected $fillable = [
        'nama', 'alamat', 'nik', 'nohp', 'rumah', 'status'
    ];
}