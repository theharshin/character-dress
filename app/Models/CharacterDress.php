<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterDress extends Model
{
    use HasFactory;

    protected $fillable = [
        'character_id',
        'dress_id'
    ];

    protected $hidden = ['created_at'];

    protected $dates = ['created_at'];

}
