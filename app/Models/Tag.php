<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['tags', 'post_id'];
    public function posts () {
        return $this->belongsToMany(Post::class);
    }
}
