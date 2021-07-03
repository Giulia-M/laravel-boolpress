<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $fillable =["title", "content", "slug"];

    public function user()
    {
        # code...
        return $this->belongsTo("App\User");
    }

    public function category()
    {
        # code...
        return $this->belongsTo("App\Category");
    }

}
