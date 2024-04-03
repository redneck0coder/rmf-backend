<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Topic;

class Article extends Model
{
    use HasFactory;

		public $fillable = ['title', 'body', 'alias', 'topic_id'];

		public function image()
    {
        return $this->morphOne(Image::class, 'imagetable');
    }

		public function topic() {
			return $this->belongsTo(Topic::Class);
		}

}
