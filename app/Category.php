<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title', 'description', 'image', 'fasilitas', 'lb', 'lt', 'lokasi', 'harga', 'type', 'list_id', 'status'];

    public function categoryitem()
    {
        return $this->hasMany('App\CategoryItem');
    }

    public function listing()
    {
        return $this->belongsTo(Listing::class, 'list_id');
    }
}