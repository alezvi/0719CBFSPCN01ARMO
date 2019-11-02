<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $hidden = ['deleted_at'];
 
    protected $fillable = ['text'];

    protected $casts = [
        'created_at' => 'date:Y-m-d'
    ];
}
