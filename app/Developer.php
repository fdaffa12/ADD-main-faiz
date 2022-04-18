<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $fillable = [
        'nama_dev', 'dev_slug', 'desc', 'gambar'
    ];
}