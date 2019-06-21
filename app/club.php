<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    protected $fillable =['title','content1','content2',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function user_id()
    {
        return $this->hasMany(Comment::class, 'user_id');
    }
}
