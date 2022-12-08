<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dress extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }
}
