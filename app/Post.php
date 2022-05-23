<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $table = 'posts';
	protected $fillable = [
		'post_title', 'post_slug', 'postcat_id', 'description', 'image', 'status'
	];

	public function publikasi()
	{
		return $this->belongsTo(Publikasi::class, 'postcat_id');
	}

	public function comments()
	{
		return $this->hasMany(Coment::class)->whereNull('parent_id');
	}
}