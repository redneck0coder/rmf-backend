<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;
use App\Models\Article;

class Topic extends Model
{
    use HasFactory;

		public $fillable = ['name', 'desc', 'alias', 'published'];

		public function image()
    {
        return $this->morphOne(Image::class, 'imagetable');
    }

		public function articles() {
			return $this->hasMany(Article::class);
		}

}
