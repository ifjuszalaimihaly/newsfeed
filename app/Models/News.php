<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class News extends Model
{
	use Sluggable;

	const UPDATED_AT = null;

	public function sluggable() {
		return [
			'slug' => [
				'source' => ['title'],
				'separator' => '-'
			]
		];
	}

}
