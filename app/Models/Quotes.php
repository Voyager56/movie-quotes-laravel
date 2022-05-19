<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Translatable\HasTranslations;

class Quotes extends Model
{
	use HasFactory;

	use HasTranslations;

	protected $guarded = [];

	public $translatable = ['text'];

	public function movie(): BelongsTo
	{
		return $this->belongsTo(Movie::class);
	}
}
