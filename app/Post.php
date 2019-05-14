<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Get the user associated with this post
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
