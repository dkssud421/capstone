<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecture extends Model
{
    protected $fillable = ['title', 'content','professor'];

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
