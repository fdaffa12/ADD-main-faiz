<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publikasi extends Model
{
    protected $fillable = [
		'nama', 'status'
	];
}
