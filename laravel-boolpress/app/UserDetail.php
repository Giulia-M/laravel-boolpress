<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{

    protected $fillable = [
        'name', 'address', 'city', "birthDate", "birthCountry"
    ]; 
    public function user() {
        return $this->belongsTo("App\User");
    }



}
