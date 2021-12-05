<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camp_benefit extends Model
{
    use HasFactory;

    public $fillable = [
        'camp_id', 'name'
    ];

    
}
