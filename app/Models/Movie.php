<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Translatable\HasTranslations;

class Movie extends Model
{
	use HasTranslations;

	use HasFactory;

	public $translatable = ['title'];

	protected $fillable = ['title', 'thumbnail', 'slug'];

	public function quotes(): HasMany
	{
		return $this->hasMany(Quotes::class);
	}
}
