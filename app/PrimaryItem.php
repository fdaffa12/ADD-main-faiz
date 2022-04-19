<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrimaryItem extends Model
{
    protected $fillable = ['primary_id', 'cover_image'];

    public function primary()
    {
        return $this->belongsTo('App\Primary');
    }
}