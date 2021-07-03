<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $fillable =["title", "content", "slug"];

    //user perchè relazione 1 a molti 
    public function user()
    {
        return $this->belongsTo("App\User");
    }

    public function category()
    {
        # code...
        return $this->belongsTo("App\Category");
    }

}
