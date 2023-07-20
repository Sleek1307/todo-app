<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_title',
        'description',
        'status',
        'date'
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Role::class)->using(CategoryTask::class);
    }
}
