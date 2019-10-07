<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Tags\HasTags;

class Question extends Model
{
    use HasTags;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function best_answer()
    {
        return $this->hasOne(BestAnswer::class);
    }
}
