<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class checkout extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id', 'camp_id', 'card_number', 'expired', 'cvc', 'is_paid'
    ];

    public function camp(){
    return $this->belongsTo(camp::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
