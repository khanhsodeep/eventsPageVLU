<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class createEvent extends Model
{
    use HasFactory;
    
    protected $fillable = [
        "title",
        "description",
        "image",
    ];
}
