<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Movie extends Model
{
	use HasTranslations;

	use HasFactory;

	public $translatable = ['title'];

	protected $fillable = ['title', 'thumbnail'];

	public function quotes()
	{
		return $this->hasMany(Quotes::class);
	}
}
