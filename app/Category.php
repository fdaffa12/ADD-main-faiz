<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'description', 'image', 'fasilitas', 'lb', 'lt', 'lokasi', 'harga', 'type', 'dev_id'];

    public function categoryitem()
    {
        return $this->hasMany('App\CategoryItem');
    }

    public function developer()
    {
        return $this->belongsTo(Developer::class, 'dev_id');
    }
}