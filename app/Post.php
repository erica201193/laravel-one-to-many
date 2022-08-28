<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        "title", "content"
    ];
    
    // Metodo relazione one to many con User
    public function user() 
    {
        return $this->belongsTo("App\User");
    }
}
