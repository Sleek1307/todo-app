<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_name', 'color', 'user_id'];

    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }

    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }
}