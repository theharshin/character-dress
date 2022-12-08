<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Character extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
    ];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];


    public function dresses()
    {
        return $this->belongsToMany(Dress::class);
    }

}
