<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = [
        'nama', 'image', 'image_path', 'status'
    ];
}