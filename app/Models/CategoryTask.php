<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Notifications\Notifiable;

class CategoryTask extends Pivot
{
    use HasFactory, Notifiable;

    /** 
    *@var bool;
    */
    public $incrementing = true;
}
