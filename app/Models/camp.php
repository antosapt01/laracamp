<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camp extends Model
{
    use HasFactory;

    public $fillable = [
        'title', 'slug','tag', 'price'
    ];

    public function camp_benefits(){
        return $this->hasMany(camp_benefit::class);
    }
}
